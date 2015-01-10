<?php
require __DIR__ . "/vendor/autoload.php";

$serve = new Nstory\Serve\Serve;

// options below are all defaults; setting them explicitly for the example
$serve->setPhpExecutable('php');
$serve->setHost('127.0.0.1');
$serve->setPort('8000');
$serve->setRootDirectory(__DIR__);

// creates a separate PHP process running the built-in web server
$serve->start();

// will print this file (assuming we are serving from this directory!)
echo file_get_contents('http://localhost:8000/README.md');

// not strictly necessary (a shutdown hook is registered)
$serve->shutdown();