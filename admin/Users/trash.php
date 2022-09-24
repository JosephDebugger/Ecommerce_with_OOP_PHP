<?php
include_once ($_SERVER['DOCUMENT_ROOT']).'\BITM\session13\crud\config.php';

use App\users;


$users = new Users;
$users->trash();
?>