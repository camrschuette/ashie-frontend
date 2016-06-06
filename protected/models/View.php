<?php
class View
{
  private $config;
  private $name;
  private $title;

  private $assignments;

  function __construct($name = null, $title = null) {
    $this->name = $name;

    if (is_null($title)) {
      $this->title = '';
    } else {
      $this->title = $title;
    }

    $this->setup();
  }

  private function setup() {
    if (!isset($this->config)) {

      // default
      $this->config = [
        'dirty' => false,
        'cache_dir' => 'protected/tmp/',
        'php_enabled' => true,
        'path_replace' => false,
        'tpl_dir' => 'protected/views/',
        'tpl_ext' => 'phtml'
      ];
    }

    foreach ($this->config as $key => $value) {
      raintpl::configure($key, $value);
    }
  }

  public function draw($returnString = false) {
    $app = App::instance();

    if (isset($this->name)) {
      $array = explode('/', $this->name);
      $filename = $array[sizeof($array) - 1];
      unset($array[sizeof($array) - 1]);
      $base = $this->config['tpl_dir'];
      $location = $base . $filename;
      if (!file_exists($location . '.' . $this->config['tpl_ext'])) {
        return false;
      }

      $tpl = new RainTPL;

      $tpl->assign('app', $app);
      $tpl->assign('include', $this->name);

      if (isset($this->assignments) && is_array($this->assignments)) {
        foreach ($this->assignments as $key => $value) {
          $tpl->assign($key, $value);
        }
      }
      return $tpl->draw('layout', $return_string = true);
    }
    return false;
  }

  public function assign($name = null, $value = null) {
    if (!is_null($name)) {
      if (!isset($this->assignments)) {
        $this->assignments = [];
      }

      if (is_array($name)) {
        foreach ($name as $key => $value) {
          $this->assignments[$key] = $value;
        }
      } elseif ($value != null) {
        $this->assignments[$name] = $value;
      }
    }
  }

  public function process() {
    return $this->draw();
  }
}

?>
