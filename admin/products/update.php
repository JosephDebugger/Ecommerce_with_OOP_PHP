<?php
//var_dump($_POST);


//Connect to database

$servername = "localhost";
$username = "root";
$password = "";
$conn = new PDO("mysql:host=$servername;dbname=eccomerce_b5", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$modified_at = date("Y-m-d H:i:s");

$_title = $_POST['title'];
$_id = $_POST['id'];
if(array_key_exists('is_active',$_POST)){
    $is_active = $_POST['is_active'];
}else{
    $is_active = 0;
}
//echo $_title;  

$approot = $_SERVER['DOCUMENT_ROOT']."/BITM/session13/crud/";

//Working with picture

if($_FILES['img']['name']!=""){
$file_name ="IMG_". time()."_".$_FILES['img']['name'];
$target = $_FILES['img']['tmp_name'];
$destination = $approot.'uploads/'.$file_name;
$is_file_moved = move_uploaded_file($target, $destination);

if($is_file_moved){
    $_picture = $file_name;
}else{
    $_picture = null;
}
}
else{
    $_picture=$_POST['old_img'];
}


$query = "UPDATE `products` SET `title`=:title, `picture`=:picture, `modified_at`= :modified_at,`is_active`= :is_active WHERE id=:id";
$stmt = $conn->prepare($query);

$stmt->bindParam(':id', $_id);
$stmt->bindParam(':title', $_title);
$stmt->bindParam(':is_active', $is_active);
$stmt->bindParam(':picture', $_picture);
$stmt->bindParam(':modified_at', $modified_at);
$result = $stmt->execute();
var_dump($result);
header("Location: index.php");