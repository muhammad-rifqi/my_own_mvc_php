<?php

class user {

    public function getallemployee(){
     $query = Database::query("select * from employee");
     $rows = array();
     while($data = mysqli_fetch_assoc($query)){
        $rows[] = $data;
     }
     return $rows;
    }


    
}