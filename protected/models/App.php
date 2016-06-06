<?php
class App {
  public $config;

  private $controller;
  private $env;

  private $routes;
  private $projects;

  function __construct($config=null) {
    if (is_object($config)) {
			$this->config = $config;
		}

    $this->projects = json_decode(file_get_contents('protected/config/projects.json'));
  }

  public function __get($name) {
    if (property_exists($this, $name)) {
        return $this->{$name};
    }
	}

  static function instance() {
    global $app;
    return $app;
  }

  public function run() {
    $this->controller = new FrontController();
    $params = $_SERVER['REQUEST_URI'];
    $params = explode("/", $params);
    $action = isset($params[1]) ? $params[1] : '';

    if ($action == '') {
      $response = $this->controller->index();
    } else {
      $response = $this->controller->{$action}();
    }
    echo $response->process();
  }

  public function jsPath($filename) {
    return $this->resourcePath($filename, 'js');
  }

  public function cssPath($filename) {
    return $this->resourcePath($filename, 'css');
  }

  public function imgPath($filename) {
    return $this->resourcePath($filename, 'images');
  }

  private function resourcePath($filename, $folder) {
    $base = 'public/' . $folder;
    $location = $base . '/' . $filename;
		if (file_exists($location)) {
				return '/' . $location;
		}

    return '';
  }
}

?>
