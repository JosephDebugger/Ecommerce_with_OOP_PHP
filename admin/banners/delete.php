<?php
include_once ($_SERVER['DOCUMENT_ROOT']).'\BITM\session13\crud\vendor\autoload.php';
use  App\Banners;
$_id = $_GET['id'];
// var_dump($banners);
$banner = new Banners;

$banners = $banner->delete($_id);
