<?php
$base_url = "http://localhost/mvc/my_own_mvc_php";

function redirect($path){
    $site_url = "http://localhost/mvc/my_own_mvc_php";
    return header("location:".$site_url.$path."");
}