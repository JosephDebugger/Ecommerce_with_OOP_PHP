<?php
namespace App;
use PDO;
class Banners{
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

        $_title = $_POST['title'];
        $created_at = date("Y-m-d H:i:s");
        if(array_key_exists('is_active',$_POST)){
            $is_active = $_POST['is_active'];
        }else{
            $is_active = 0;
        }

        $approot = $_SERVER['DOCUMENT_ROOT']."/crud/";

        //Working with picture
        $file_name ="IMG_". time()."_".$_FILES['img']['name'];
        $target = $_FILES['img']['tmp_name'];
        $destination = $approot.'uploads/'.$file_name;
        $is_file_moved = move_uploaded_file($target, $destination);

        if($is_file_moved){
            $_picture = $file_name;
        }else{
            $_picture = null;
        }

        $query = "INSERT INTO `banners` (`title`,`picture`,`created_at`,`is_active`) VALUES (:title, :picture,:created_at,:is_active)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':title', $_title);
        $stmt->bindParam(':is_active', $is_active);
        $stmt->bindParam(':picture', $_picture);
        $stmt->bindParam(':created_at', $created_at);
        $result = $stmt->execute();
        var_dump($result);
    }
    public function index(){

        $query = "SELECT * FROM `banners` where is_deleted =0";
        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute();

        return $banners = $stmt->fetchAll();
           
    }
    public function isActiveIndex(){
        $_starFrom = 0;
        $_total=3;
        $query = "SELECT * FROM `banners` where is_deleted =0 and is_active=1 limit $_starFrom,$_total ";
        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute();

        return $banners = $stmt->fetchAll();

    }
    public function show($_id){

        $webroot = "http://localhost/crud/";

        $query = "SELECT * FROM `banners` WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $_id);
        $result = $stmt->execute();

        $banners = $stmt->fetch();
        return $banners;
    }
    public function delete($_id){

// set the PDO error mode to exception


        $query = "Delete FROM `banners` WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $_id);
        $result = $stmt->execute();
    }
    public function trashDelete(){

        $query = "SELECT * FROM `banners` where is_deleted = 1";
        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute();

        $banners = $stmt->fetchAll();

        return $banners ;
    }
}