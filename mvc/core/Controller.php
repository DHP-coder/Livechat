<?php
class Controller{

    //initialization model
    public function model($model){
        require_once "./mvc/models/".$model.".php";
        return new $model;
    }

    //initialization view
    public function view($view, $data=[]){
        require_once "./mvc/views/".$view.".php";
    }
}
?>