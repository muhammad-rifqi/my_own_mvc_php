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

    public function getdetailemployee($id){
        $query = Database::query("select * from employee where id = '".$id."'");
        $rows = mysqli_fetch_assoc($query);
        return $rows;
    }


    
}