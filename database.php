<?php

class Database {

    public function query($sql){
        $koneksi = mysqli_connect("localhost","root","","kedai_kue");
        $sql = mysqli_query($koneksi,$sql);
        return $sql;
    }


}