<?php
$request = $_SERVER['REQUEST_URI'];


switch($request){
    case '/': require __DIR__ . "/views/home.php";
    break;
    default : require __DIR__ . "/views/404.php";
}