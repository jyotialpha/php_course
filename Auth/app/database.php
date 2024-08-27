<?php
class Database {
    private $host = "localhost";
    private $port = "3307"; // Specify the port number for the phpMyAdmin MySQL instance
    private $db_name = "authdb";
    private $username = "root";
    private $password = "";  // No password for this instance

    public $conn;

    // Database connection
    public function getConnection() {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";port=" . $this->port . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>
