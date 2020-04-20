<?php

namespace CWPlatform\InformeaData;

use CWPlatform\InformeaData\ODataRetriever;
use CWPlatform\InformeaData\XmlParser;
use CWPlatform\InformeaData\EntryBuilderFromXml;
use phpFastCache\CacheManager;

class BuildEntryData
{
    public function __construct($module_name, $query_uri)
    {
        $this->module_name = $module_name;
        $this->query_uri = $query_uri;
        $this->entries = [];
        $this->xml_parser = new XmlParser;
        $this->xml_file_path = $_SERVER['DOCUMENT_ROOT'] . "/tmp/{$this->module_name}_odata.xml";
        $this->instance_cache = CacheManager::getInstance('files');        
        $key = "{$this->module_name}_related_docs_xml_is_stored";
        $this->cached = $this->instance_cache->getItem($key);        
    }
    
    public function execute()
    {
        try {
            // cache data
            if (is_null($this->cached->get())) {
                $o_data_retriever = new ODataRetriever($this->query_uri);
                try {
                    $response_body = $o_data_retriever->retrieveData()->getResponseBody();
                } catch (\Exception $e) {
                    $this->entries = [];

                    return $this;
                }

                $this->xml_parser->setXmlString($response_body)->save($this->xml_file_path);
                $this->cached->set(true)->expiresAfter(86400);
                $this->instance_cache->save($this->cached);
            }
            
            // parse data
            $simple_xml = $this->xml_parser->loadXmlFromFile($this->xml_file_path)->parseXml()->getSimpleXmlObj();
            
            // build entries
            $entry_builder = new EntryBuilderFromXml($simple_xml);        
            $this->entries = $entry_builder->build()->getEntries();
        } catch (\Throwable $t) {
            $this->entries = [];
        }

        return $this;
    }

    public function getEntries()
    {
        return $this->entries;
    }
}