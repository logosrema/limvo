<?php 

class Router {

     public static function route() {

       

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = json_decode(file_get_contents('php://input'), true);
            if(empty($data)){
                return ['message'=>"empty body"];
            }
            return App::start($data);
        }

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            App::start([]);
            //print_r("dfsdfdsfdsfs");
        }

     }

}