<?php 

class Database{ 

    public $connection;
    public $config;

    public function __construct(){
        $this->config = new Config();
    }

    public function openLink(){
        return $this->connection = new PDO('mysql:host=localhost;dbname=lottery;charset=utf8mb4','enzerhub','enzerhub');
    }

    // public function openLink() {
    //     return $this->connection = new PDO (
    //         $this->config->getConfig()['->'],
    //         $this->config->getConfig()['-->'],
    //         $this->config->getConfig()['--->']
    //     );
    // }

    public function closeLink() {
        $this->connection = null;
    }

    // Prevent cloning
    private function __clone() {}

    // Prevent unserializing
    public function __wakeup() {}

    //desctructor method
    public function __destruct() {
        $this->closeLink();
    }

}
