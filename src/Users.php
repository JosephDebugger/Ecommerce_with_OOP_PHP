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
     
        $query = "INSERT INTO `users` (`full_name`,`user_name`,`email`,`phone`,`created_at`,`password`) VALUES (:fullName, :userName,:email,:phone,:created_at,:mdpassword)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':fullName', $_name);
        $stmt->bindParam(':userName', $_user );
        $stmt->bindParam(':email', $_email);
        $stmt->bindParam(':phone', $_phone);
        $stmt->bindParam(':created_at', $created_at);
        $stmt->bindParam(':mdpassword', $_password);
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
    public function trash(){
        $_id = $_GET['id'];
        $is_deleted = 1;
        //Connect to database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $conn = new PDO("mysql:host=$servername;dbname=eccomerce_b5", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = "UPDATE `users` SET  `soft_delete` = :soft_delete where `users`.`id`=:id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id', $_id);
        $stmt->bindParam(':soft_delete', $is_deleted);
        $result = $stmt->execute();
        header("Location: index.php");
    }
    public function trashDelete(){
        
    }
    
    public function sign_up(){
        $_fullName = $_POST['full_name'];
        $_userName = $_POST['user_name'];
        $_email = $_POST['email'];
        $_mobile = $_POST['mobile_number'];
        $_password = $_POST['password'];


        $query = "INSERT INTO user(full_name, user_name, email, mobile, password) VALUES (:full_name, :user_name, :email, :mobile, :password)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':full_name', $_fullName);
        $stmt->bindParam(':user_name', $_userName);
        $stmt->bindParam(':email', $_email);
        $stmt->bindParam(':mobile', $_mobile);
        $stmt->bindParam(':password', $_password);

        $result= $stmt->execute();
        //  var_dump($result);

        if($result){
            $_SESSION['message'] = 'user is added';
        }else{
            $_SESSION['message'] = 'user is not added';
        }
        header("location:http://localhost/raihan/front/public/log-in.php");
    }
    public function login($user_name, $password){

        $query = "SELECT * FROM user WHERE user_name = :user_name AND password = :password";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':user_name', $user_name);
        $stmt->bindParam(':password', $password);

        $stmt->execute();
        $totalFound = $stmt->fetch();

        echo $totalFound;
        die();
        //  var_dump($result);
        session_start();
        if($totalFound > 0){
            $_SESSION['is_authenticated'] = true;
            header("location:http://localhost/raihan/admin/dashboard.php");
        }else{
            $_SESSION['is_authenticated'] = false;
        }
        header("location:http://localhost/raihan/404.php");
    }
}