<?php 
require 'vendor/autoload.php';
class App {

     public static function start(array $requestData = []) {

        app()->post('/api/v2/backoffice/signin', function () use ($requestData) {
            $response = (new AdminController)->authenticate($requestData);
            response()->json($response);
        });

        app()->get('/api/v2/backoffice/try',function(){
            response()->json(["hello world"]);
        });

        app()->run();

     }

}