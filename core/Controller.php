<?php
namespace Core;

class Controller{
    
    public function model($model){
        return require 'models/'.$model.'.php';
    }

    public function view($path, $data = []){
        return require 'views/'.$path.'.php';
    }
}