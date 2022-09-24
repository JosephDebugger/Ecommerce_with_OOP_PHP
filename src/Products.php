<?php


namespace App;
use PDO;

class Products
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





    public function index()
    {

        $query = "SELECT * FROM `products`";
        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute();

        $products = $stmt->fetchAll();
        return   $products;
    }

    public function activeIndex()
    {

        $query = "SELECT * FROM `products` where is_active = 1";
        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute();

        $products = $stmt->fetchAll();
        return   $products;
    }
    public function store($_title){

        $created_at = date("Y-m-d H:i:s");
        
        if(array_key_exists('is_active',$_POST)){
            $is_active = $_POST['is_active'];
        }else{
            $is_active = 0;
        }
//echo $_title;

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

        $query = "INSERT INTO `products` (`title`,`picture`,`created_at`,`is_active`) VALUES (:title, :picture,:created_at,:is_active)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':title', $_title);
        $stmt->bindParam(':is_active', $is_active);
        $stmt->bindParam(':picture', $_picture);
        $stmt->bindParam(':created_at', $created_at);

        $result = $stmt->execute();
        var_dump($result);
        header("Location: create.php");
    }

}