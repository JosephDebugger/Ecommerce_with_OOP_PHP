<?php


namespace App;
use PDO;

class Categories
{
    public $conn= null;
    public function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";

        $this->conn = new PDO("mysql:host=$servername;dbname=eccomerce_b5", $username, $password);
        // set the PDO error mode to exception
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    public function show($_id){
        $query = "SELECT * FROM `categories` WHERE id = $_id";
        $stmt = $this->conn->prepare($query);
        // $stmt->bindParam(':id', $_id);
        $result = $stmt->execute();

        $banner = $stmt->fetch();
    }
}