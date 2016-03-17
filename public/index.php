<?

/**
* FRONT CONTROLLER
*/
require_once('../core/router.php');

$url = $_SERVER['QUERY_STRING'];

$router = new Router();

$router->addRoute('{controller}/{action}');
