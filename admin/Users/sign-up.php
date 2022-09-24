<?php

include_once($_SERVER['DOCUMENT_ROOT'])."/raihan/config.php";
use App\User;

function is_empty($value){
        if($value == ''){
                return true;
        }else{
                return false;
        }
}


if(is_empty($_POST['user_name'])){
        session_start();

        $_SESSION['message'] = "Empty user name";
        header("location:".$webroot."font/public/signup.php");
}
else{
        $_users = new User;
        $_users->sign_up();
}


    


?>