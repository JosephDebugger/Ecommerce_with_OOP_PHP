<?php

include_once ($_SERVER['DOCUMENT_ROOT']).'\BITM\session13\crud\config.php';

use App\Users;



function is_empty($value){
   
    if($value == ''){
        return true;
    }
    else {
        return false;
    }
}

if(is_empty($_POST['user_name']))
{
    session_start();
    $_SESSION['message'] = "User name can't be empty. please enter a valid Username !!";
    header('location: create.php');
}
else{
    $Users = new Users;
    $Users->store();
}


?>