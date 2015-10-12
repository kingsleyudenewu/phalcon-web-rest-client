<?php

$loader = new \Phalcon\Loader();

// Use composer autoloader to load vendor classes
require_once __DIR__ . '/../../vendor/autoload.php';

/**
 * We're a registering a set of directories taken from the configuration file
 */
$loader->registerDirs(
    array(
        $config->application->controllersDir,
        $config->application->classesDir
    )
)->register();
