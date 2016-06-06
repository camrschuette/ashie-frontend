<?php
  date_default_timezone_set('America/New_York');

  require('protected/libs/raintpl-master/inc/rain.tpl.class.php');
  require('autoload.php');

  $config = json_decode(file_get_contents('protected/config/config.json'));

  $app = new App($config);
  $app->run();
?>
