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
    public function index(){

        $query = "SELECT * FROM `categories` where is_deleted =0";
        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute();

        return $categories = $stmt->fetchAll();
           
    }
    public function show($_id){
        $query = "SELECT * FROM `categories` WHERE id = $_id";
        $stmt = $this->conn->prepare($query);
        // $stmt->bindParam(':id', $_id);
        $result = $stmt->execute();

        $categories = $stmt->fetch();
    }
    public function store(){

        $_title = $_POST['title'];
        $created_at = date("Y-m-d H:i:s");
        if(array_key_exists('is_active',$_POST)){
            $is_active = $_POST['is_active'];
        }else{
            $is_active = 0;
        }

        $approot = $_SERVER['DOCUMENT_ROOT']."/crud/";

    
       

        $query = "INSERT INTO `categories` (`title,`created_at`,`is_active`) VALUES (:title,:created_at,:is_active)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':title', $_title);
        $stmt->bindParam(':is_active', $is_active);
      
        $stmt->bindParam(':created_at', $created_at);
        $result = $stmt->execute();
        var_dump($result);
    }
    
    public function delete($_id){

        // set the PDO error mode to exception
        
        
                $query = "Delete FROM `categories` WHERE id = :id";
                $stmt = $this->conn->prepare($query);
                $stmt->bindParam(':id', $_id);
                $result = $stmt->execute();
            }
            public function trashDelete(){
        
                $query = "SELECT * FROM `categories` where is_deleted = 1";
                $stmt = $this->conn->prepare($query);
                $result = $stmt->execute();
        
                $categories = $stmt->fetchAll();
        
                return $categories ;
            }
  
}