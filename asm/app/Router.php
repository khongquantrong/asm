<?php
  namespace App;

  class Router {
    public static $router =[];
    public Request $request;

    public function __construct(){
        $this->request = new Request();
    }

    public static function get($path ,$callback){
        Router::$router['get'][$path] = $callback;

    }

    public static function post($path ,$callback){
        Router::$router['post'][$path] = $callback ;
    }

    public function resolve(){
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = Router::$router[$method][$path] ?? false;
   

        if($callback == false){
            
            echo ' 404 not found';
        }
        if(is_callable($callback)){
            $callback();
        }
        if(is_array($callback)){      
            
            $callback[0] = new $callback[0]();
            if(method_exists($callback[0],$callback[1])){
                call_user_func([$callback[0],$callback[1]],$this->request);
            }
            else {
              
             
                echo '404 not found';
            }
           
        }
        

    }






  }