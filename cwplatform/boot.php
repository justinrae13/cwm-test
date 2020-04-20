<?php

use phpFastCache\CacheManager;

CacheManager::setDefaultConfig(array(
    "path" => realpath("cache"), 
));

$dotenv = new Dotenv\Dotenv(realpath(""));
$dotenv->load();