<?php 

include_once 'app.config.php';

class Database
{
    private $server = DB_SERVER;
    private $user = DB_USER;
    private $password = DB_PASSWORD;
    private $database = DB_DATABASE;

    protected function connect()
    {
        $mysqli = new mysqli($this->server, $this->user, $this->password, $this->database);

        // Kiểm tra kết nối
        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }

        return $mysqli;
    }
}