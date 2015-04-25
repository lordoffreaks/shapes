<?php

error_reporting(-1);

$autoloader = dirname(__DIR__);

// Ensure that composer has installed all dependencies
if (!file_exists($autoloader . '/vendor/autoload.php')) {
  die("Dependencies must be installed using composer:\n\nphp composer.phar install\n\n"
    . "See http://getcomposer.org for help with installing composer\n");
}

// Include the composer autoloader
$loader = require $autoloader . '/vendor/autoload.php';
$loader->add('Riplife\\Shapes\\Test\\', __DIR__);

