<?php

include_once($_SERVER['DOCUMENT_ROOT'])."/raihan/config.php";
use App\User;

$user_name = $_POST['user_name'];
$password = $_POST['password'];

function is_empty($value){
        if($value == ''){
                return true;
        }else{
                return false;
        }
}


if(is_empty($user_name) || is_empty($password)){
        session_start();

        $_SESSION['message'] = "User name/ Password empty.";
        header("location:".$webroot."font/public/signup.php");
}
else{
        $_users = new User;
        $_users->login($user_name, $password);
}


    


?>