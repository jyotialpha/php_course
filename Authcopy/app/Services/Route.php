<?php

//**it Handels the routes which rout provide which servise. */

namespace app\Services;



class Route
{
  private static $routes = [];
  private static $controllerNamespace = 'App\Controllers\\';

  public static function add($uri, $contoller, $action, $method = 'GET', $middleware = [])
  {
    self::$routes[] = [
      'method' => $method,
      'uri' => $uri,
      'controller' => self::$controllerNamespace . $contoller,
      'action' => $action,
      'middleware' => $middleware
    ];
  }

  public static function handle()
  {
    $requestURI = $_SERVER['REQUEST_URI'];
    $requestMethod = $_SERVER['REQUEST_METHOD'];

    foreach (self::$routes as $route) {
      if ('/' . $route['uri'] === $requestURI && $route['method'] == $requestMethod) {
        $controller = new $route['controller'];
        $controllerClass = self::$controllerNamespace . $route['controller'];
        $action = $route['action'];
        $controller->$action();
        return;
      }
    }
    echo '404 - page not fount';
  }
}
