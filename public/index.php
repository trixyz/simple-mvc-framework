<?

/**
* FRONT CONTROLLER
*/
require_once('../core/router.php');

$url = $_SERVER['QUERY_STRING'];

$router = new Router();

//$router->addRoute('{controller}/{action}');
$router->addRoute('',['controller'=>'home','action'=>'index']);
$router->addRoute('posts',['controller'=>'posts','action'=>'index']);
$router->addRoute('{controller}/{action}');
$router->addRoute('admin/{controller}/{action}');

$router->matchUrl($url);


print_r($router->getParams());