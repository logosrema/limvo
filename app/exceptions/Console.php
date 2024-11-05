<?php 

class Console{

    public static function logger($message) : void {
       file_put_contents(__DIR__ . '/log.txt', $message. PHP_EOL, FILE_APPEND);
    }

    public static function log($message) : void {
        self::logger( date("Y-m-d") . ' => [LOG] '. $message);
    }

    public static function info($message) : void {
        self::logger( date("Y-m-d") . ' => [INFO] '. $message);
    }

    public static function error($message) : void {
        self::logger(date("Y-m-d") . ' => [ERROR] '. $message);
    }

    public static function warn($message) : void {
        self::logger(date("Y-m-d") . ' => [WARNING] '. $message);
    }

    public static function debug($message) : void {
        self::logger(date("Y-m-d") . ' => [DEBUG] '. $message);
    }

    public static function dd(...$vars) { // dump and die
        foreach ($vars as $var) {
            var_dump($var);
        }
        die(1);
    }
}
// simple logger