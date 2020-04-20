<?php

namespace CWPlatform\InformeaData;

class Entry 
{
    public $author = "";
    public $file_url = "";
    public $title = "";
    public $language = "";
    public $tag = "";
    public $types = "";

    public function __get($name)
    {
        if (!property_exists($name, $this)) {
            return "";
        }

        return $this->$name;
    }

    public function setField($field, $value)
    {
        $this->$field = $value;
    }
}