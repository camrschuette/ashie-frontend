<?php
class FrontController extends Controller
{

  public function index() {
    $app = App::Instance();

    $view = new View('index', 'front');

    $view->assign([
      'projects' => $app->projects
    ]);

    return $view;
  }

  //HEADER / PROJECTS
  public function environment() {
    $app = App::Instance();

  }

  public function character() {

  }

  public function props() {

  }

  public function misc() {

  }

  //BLOG
  public function blog() {

  }

  //CONTACT / RESUME
  public function contact(){
    $app = App::Instance();

    $view = new View('contact', "");

    return $view;
  }

  //PROJECT INDIVIDUAL
  public function project() {
    $app = App::Instance();

    // Get the project
    $params = $_SERVER['REQUEST_URI'];
    $params = explode("/", $params);
    $directory = $params[count($params) - 1];

    $view = new View('project', '');

    $pictureDirectory = opendir($_SERVER['DOCUMENT_ROOT'] . "/public/images/$directory");

    // get each entry
    while(false !== ($entryName = readdir($pictureDirectory))) {
      if ($entryName != "." && $entryName != ".." && !preg_match("/icon/", $entryName)) {
        $dirArray[] = $entryName;
      }
    }
    closedir($pictureDirectory);

    $view->assign([
      "directory" => $directory,
      "pictures" => $dirArray
    ]);

    return $view;
  }

}

?>
