<?php

class Controller{
    
    public function model($model){
        require 'models/'.$model.'.php';
        return new $model;
    }

    public function view($path, $data = []){
        return require 'views/'.$path.'.php';
    }
}