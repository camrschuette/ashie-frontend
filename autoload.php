<?php

function __autoload($className) {
  $classLocations = [
    'protected/controllers',
    'protected/models',
    'protected/models/db',
  ];

  foreach ($classLocations as $location) {
    $file = $location . '/' . $className;
    if (file_exists($file . '.php')) {
      require_once $file . '.php';
      return true;
    }
  }

  return false;
}
?>
