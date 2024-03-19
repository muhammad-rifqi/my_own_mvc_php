<?php
error_reporting(0);
include "config.php";
include "database.php";
include "controller.php";

if($_GET['menu'] == ''){
     $data['title'] = "Web Title"; 
     return Controller::views('home', $data);
} if($_GET['menu'] == 'profile'){
     $data['title'] = "Web Title"; 
     $data['list'] = Controller::model('user')->getallemployee();
     return Controller::views('profile', $data);
} if($_GET['menu'] == 'detail_profile'){
     $data['id'] = $_GET['id'];
     $data['title'] = "Web Title"; 
     $data['list'] = Controller::model('user')->getdetailemployee($data['id']);
     return Controller::views('profile', $data);
}

