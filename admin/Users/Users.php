<?php
namespace App;
use PDO;
class Users{
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
    public function store(){
       
        $_name = $_POST['full_name'];
        $_user = $_POST['user_name'];
        $_email = $_POST['email'];
        $_phone = $_POST['phone'];
        $_password = md5($_POST['password']);
    
        $created_at = date("Y-m-d H:i:s");
     
        $query = "INSERT INTO `users` (`full_name`,`user_name`,`email`,`phone`,`created_at`,`password`) VALUES (:fullName, :userName,:email,:phone,:created_at,:password)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':fullName', $_name);
        $stmt->bindParam(':userName', $_user );
        $stmt->bindParam(':email', $_email);
        $stmt->bindParam(':phone', $_phone);
        $stmt->bindParam(':created_at', $created_at);
        $stmt->bindParam(':password', $_password);
        $result = $stmt->execute();
       header('location : index.php');
    }
    public function index(){
        $soft_delete =0;
        $query= "select * from users where `soft_delete` =:soft_delete";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':soft_delete', $soft_delete);
        $stmt->execute();
        $users= $stmt->fetchAll();
        return $users;
    }
    public function login($username,$password)
    {
       
        $query= "select COUNT(*) as total from users where user_name LIKE:user_name AND pass LIKE:pass";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':user_name', $username);
        $stmt->bindParam(':password', $password);
        $totalFound=$stmt->fetch();
        if($totalFound['total']>0){
            
        }
    }
}