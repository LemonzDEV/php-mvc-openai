<?php

// Load the Composer autoloader
require_once __DIR__ . '/../vendor/autoload.php';

// Create a new instance of the HomeController
$controller = new \MyProject\Controller\HomeController();

// Call the index action
$controller->index();
