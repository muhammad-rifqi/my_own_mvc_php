<?php

include "database.php";
include "controller.php";

if(isset($_GET['menu']) == ''){
     echo "OKE";
} if(isset($_GET['menu']) == 'profile'){
     $data['title'] = "Web Title"; 
     $data['list'] = Controller::model('user')->getallemployee();
     Controller::views('profile', $data);
}

