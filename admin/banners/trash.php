<?php
$_id = $_GET['id'];
$is_deleted = 1;
//Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$conn = new PDO("mysql:host=$servername;dbname=eccomerce_b5", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "UPDATE `banners` SET  `is_deleted` = :is_deleted where `banners`.`id`=:id";
$stmt = $conn->prepare($query);
$stmt->bindParam(':id', $_id);
$stmt->bindParam(':is_deleted', $is_deleted);
$result = $stmt->execute();
header("Location: index.php");
?>