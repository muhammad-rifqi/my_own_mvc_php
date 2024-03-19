<?php
class Controller {
    public function views($view, $data = []){
        extract($data);
        require_once "views/".$view.".php";
    }
    public function model($model){
        require_once "models/".$model.".php";
        return new $model;
    }
}


