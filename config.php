<?php

if((!isset($_SESSION)) || (session_status() != PHP_SESSION_ACTIVE)){
    session_start();
}


$approot = $_SERVER['DOCUMENT_ROOT']."/crud/";
$webroot ="http://localhost/crud/";

include_once ($approot.'vendor/autoload.php');