<?php

namespace Framework;
use \Utils\CaseConverter;
use Framework\Exceptions;

class Router {
    protected static array $routes = [];

    public static function get(string $route, callable | array $controller, string $middleware = null): void{
        self::add( $route, $controller, 'get');
    }

    public static function post(string $route, callable | array  $controller, string $middleware = null): void{
        self::add( $route, $controller, 'post');
    }

    public static function put(string $route, callable | array  $controller, string $middleware = null): void{
        self::add( $route, $controller, 'put');
    }

    public static function patch(string $route, callable | array  $controller, string $middleware = null): void{
        self::add( $route, $controller, 'patch');
    }

    public static function delete(string $route, callable | array  $controller, string $middleware = null): void{
        self::add( $route, $controller, 'delete');
    }

    public static function add(string $route, callable | array $callback, string $method = 'get' ) : void {
        // convert route to reqular expression: escape foward slashes 
        $route = preg_replace('/\//','\\/',$route);

        // //remove \{ and \} from {controllerName} add to regex
        $route = preg_replace('/\{([a-z]+)\}/','(?P<\1>[a-z-]+)',$route);

        // //convert {id:\d+} to number 
        $route = preg_replace('/\{([a-z]+):([^\}]+)\}/','(?P<\1>\2)',$route);

        $route = '/^' . $route . '\/?$/i'; //match (with slash) `/something/` or `/something` (without slash)
        // echo 'Route:=> ' . $route;
        self::$routes[] = [
            "path" => $route,
            "callback" => $callback,
            "method" => $method
        ];
    }

    public function match(string $path, string $method = 'get'): callable | array | bool{
        foreach(self::$routes as $route) {
            if(preg_match($route['path'], $path, $matches) && $route['method']  == $method){                
                return $route['callback'];
            }
        }
        return false;
    }

    public function dispatch(Request $request, Response $response){
        $path = $request->path();
        $method = $request->method();

        

        // check if current request matches the routes in routing table
        $callback = $this->match($path,$method);
        
        if(!$callback){
            // throw not found exception;
            throw (new Exceptions\NotFound());
        }

        // else we will get the callback and run it.
        return $callback($request, $response);
    }

    // public static function getRoutes(){
    //     return self::$routes;
    // }
}