<?php
  namespace App;

   class Request {
    public function getPath(){
        $path = $_SERVER['REQUEST_URI'];
        $path = str_replace('/lab5/asm/public/','/',$path);
        $posion = strpos($path,'?',0);
        if($posion){
            $path = substr($path,0,$posion);
        }

        return $path;
    }


    public function getMethod(){
        $method = $_SERVER['REQUEST_METHOD'];
        $method = strtolower($method);
        return $method;
    }

   
    public function getColums(){
        $data = [];
  
        if($this->getMethod()=='get'){
            foreach($_GET as $key=>$value){
                
                $data[$key] =  filter_input(INPUT_GET,$key , FILTER_SANITIZE_SPECIAL_CHARS)  ;
            }
        }
        if($this->getMethod()=='post'){
            foreach($_POST as $key=>$value){
                $data[$key] =  filter_input(INPUT_POST,$key , FILTER_SANITIZE_SPECIAL_CHARS)  ;
            }
        }
        return $data ;
    }
}

   