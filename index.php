<?php
error_reporting(0);
include "config.php";
include "database.php";
include "controller.php";

if($_GET['menu'] == ''){

     $data['title'] = "Home Title"; 
     $rows['list'] = Controller::model('user')->getallemployee();
     $data['headers'] = Controller::views('layout/headers');
     $data['body'] = Controller::views('profiles/profile', $rows);
     $data['footers'] = Controller::views('layout/footers');
     return Controller::views('master', $data);

} if($_GET['menu'] == 'profile'){

     $data['title'] = "Profile Title"; 
     $rows['list'] = Controller::model('user')->getallemployee();
     $data['headers'] = Controller::views('layout/headers');
     $data['body'] = Controller::views('profiles/profile', $rows);
     $data['footers'] = Controller::views('layout/footers');
     return Controller::views('master', $data);

} if($_GET['menu'] == 'detail_profile'){
     
     $data['id'] = $_GET['id'];
     $data['title'] = "Profile Detail Title"; 
     $rows['list'] = Controller::model('user')->getdetailemployee($data['id']);
     $data['headers'] = Controller::views('layout/headers');
     $data['body'] = Controller::views('profiles/detail_profile', $rows);
     $data['footers'] = Controller::views('layout/footers');
     return Controller::views('master', $data);

} if($_GET['menu'] == 'test'){
     return redirect('/index.php');
}

