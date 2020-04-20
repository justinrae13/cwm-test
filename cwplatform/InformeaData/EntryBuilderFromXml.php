<?php

namespace CWPlatform\InformeaData;

/**
 * Build a collection of Entry classes based on the structure of the given SimpleXmlElement object
 * 
 * TO DO: The Entry classes created only appear in the first language/title/url (there may be more than one for each document).
 * Have to modify so that the Entry classes created appear in all combinations
 */
class EntryBuilderFromXml 
{
    public function __construct($simple_xml_object)
    {
        $this->xml_obj = $simple_xml_object;
        $this->xml_entries = [];
        $this->entries = [];
    }

    public function build()
    {
        $this->getXmlEntries();

        $this->buildEntries();

        return $this;
    }
    
    public function getEntries()
    {
        return $this->entries;
    }
    
    private function getXmlEntries()
    {
        foreach ($this->xml_obj->children() as $child) {
            if ($child->getName() == "entry") {
                $this->xml_entries []= $child;
            }
        }
    }

    private function buildEntries()
    {
        foreach ($this->xml_entries as $xml_entry) {
            $entry = new Entry;
            $entry->setField("author", $this->getAuthorField($xml_entry));
            $entry->setField("file_url", $this->getFileUrlField($xml_entry));
            $entry->setField("title", $this->getTitleField($xml_entry));
            $entry->setField("language", $this->getLanguageField($xml_entry));

            $this->entries []= $entry;
        }
    }

    private function getLinkFromXmlEntry($xml_entry, $link_title)
    {
        $links = [];

        foreach ($xml_entry->children() as $child) {
            if ($child->getName() == "link") {
                $links []= $child;
            }
        }

        $match = array_filter($links, function($link) use ($link_title) {
            $title = "";

            foreach ($link->attributes() as $attr => $val) {
                if ($attr == "title") {
                    $title = $val;
                }
            }
            
            return $title == $link_title;
        });

        return count($match) > 0 ? array_values($match)[0] : new \SimpleXMLElement("<blank></blank>");
    }

    private function getAuthorField($xml_entry)
    {
        $link = $this->getLinkFromXmlEntry($xml_entry, "authors");

        return $this->traverseLinkUntilProperties($link)->value;
    }

    public function getFileUrlField($xml_entry)
    {
        $link = $this->getLinkFromXmlEntry($xml_entry, "files");
        
        return $this->traverseLinkUntilProperties($link)->url;
    }

    public function getTitleField($xml_entry)
    {
        $link = $this->getLinkFromXmlEntry($xml_entry, "titles");
        
        return $this->traverseLinkUntilProperties($link)->value;
    }

    public function getLanguageField($xml_entry)
    {
        $link = $this->getLinkFromXmlEntry($xml_entry, "titles");
        
        return $this->traverseLinkUntilProperties($link)->language;
    }

    private function traverseLinkUntilProperties($link)
    {
        $namespaces = $link->getNamespaces(true);
        
        $children = $this->getXmlNodeChildren($link, $namespaces["m"]);
        $children = $this->getXmlNodeChildren($children->inline);
        $children = $this->getXmlNodeChildren($children->feed);
        $children = $this->getXmlNodeChildren($children->entry);
        $children = $this->getXmlNodeChildren($children->content, $namespaces["m"]);
        $children = $this->getXmlNodeChildren($children->properties, $namespaces["d"]);

        return $children;
    }

    private function getXmlNodeChildren($xml_obj, $children_param=null)
    {
        if (is_null($xml_obj)) {
            return new \SimpleXMLElement("<blank></blank>");
        }

        if (!is_null($children_param)) {
            return $xml_obj->children($children_param);
        }

        return $xml_obj->children();
    }
}