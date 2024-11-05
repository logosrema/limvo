<?php 

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

class Config {

    private  $config;

    public function getConfig() {
        return $this->config ?: $this->config = [
            '->' => 'mysql:host=' . getenv('HOST') .';dbname=' . getenv('BASE'),
            '-->' => getenv('DB_USERNAME'),
            '--->' => getenv('DB_PASSWORD'),
            '---->' => getenv('DB_DATABASE'),
            '----->' => getenv('DB_HOST'),
        ];
    }
 
}