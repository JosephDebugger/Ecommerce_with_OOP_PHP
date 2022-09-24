<?php
//var_dump($_POST);

include_once ($_SERVER['DOCUMENT_ROOT'].'\BITM\session13\crud\vendor\autoload.php');



use App\Banners;



$Banner = new Banners();
$Banner->store();