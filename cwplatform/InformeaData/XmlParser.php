<?php

namespace CWPlatform\InformeaData;

class XmlParser 
{
    public function __construct() 
    {
        $this->xml = null;
        $this->xml_string = "";
        $this->simple_xml_obj = null;
    }

    public function setXmlString($xml_string)
    {
        $this->xml_string = $xml_string;

        return $this;
    }

    public function parseXml()
    {
        $this->simple_xml_obj = simplexml_load_string($this->xml_string);
        
        if ($this->simple_xml_obj === false) {
            throw new \Exception("Error: Cannot create object based on XML");
        }
        
        return $this;
    }

    public function loadXmlFromFile($filename)
    {
        $file = fopen($filename, "r") or die("Unable to open file!");

        $this->setXmlString(fread($file, filesize($filename)));

        fclose($file);

        return $this;
    }

    public function save($filename)
    {
        $file = fopen($filename, "w") or die("Unable to open file!");
        
        fwrite($file, $this->xml_string);
        
        fclose($file);
        
        return $this;
    }

    public function getSimpleXmlObj()
    {
        return $this->simple_xml_obj;
    }
}