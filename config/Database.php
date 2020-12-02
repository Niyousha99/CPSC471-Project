<?php 
  class Database {
    private $host = 'localhost';
    private $db_name = ''; // need to set DB name
    private $username = 'root';
    private $password = ''; // need to set password
    private $conn;

    // Connect to db
    public function connect() {
      $this->conn = null;

      try { 
        $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch(PDOException $e) {
        echo 'Connection Error: ' . $e->getMessage();
      }

      return $this->conn;
    }
  }