<?php

//var_dump($_POST);
$_name = $_POST['name'];
$_link = $_POST['link'];
$_active = $_POST['active'];
$_draft = $_POST['draft'];
$_created = date('m/d/Y h:i:s', time());
// if(empty($_active)){
//     $_active=0;
// }
// if(empty($_draft)){
//     $_active=0;
// }
//echo $_title;

//Connect to database

$servername = "localhost";
$username = "root";
$password = "";
$conn = new PDO("mysql:host=$servername;dbname=eccomerce_b5", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "INSERT INTO `categories` (`name`,`link`,`is_draft`,`is_active`) VALUES (:name,:link,:draft,:active)";
$stmt = $conn->prepare($query);

$stmt->bindParam(':name', $_name);
$stmt->bindParam(':link', $_link);
$stmt->bindParam(':draft', $_draft);
$stmt->bindParam(':active', $_active);
// $stmt->bindParam(':created', $_created);

$result = $stmt->execute();
var_dump($result);