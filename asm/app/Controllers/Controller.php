<?php
    namespace App\Controllers;

    class Controller {
        public function __construct() {
        
        }

        

        public function view($path , $data =[]){
            
            extract($data);

            if(file_exists(   __DIR__."/../../views/$path.php")){
            
            include_once __DIR__."/../../views/$path.php";
            }
            else {
                echo ' 404 not found';
            }


        }

    }




    