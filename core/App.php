<?php
namespace Core;

class App{
    public $controller = 'HomeController';
    public $action = 'index';
    public $controllerObject;
    

    //Xử lý khởi tạo Controller và dùng action
    public function __construct(){

        $controller = $this->getController();
        $action = $this->getAction();

        if(file_exists('controllers/'. $controller .'.php')){
            require 'controllers/'. $controller .'.php';
            $controller = '\\Controllers\\' . $controller;
            $this->controllerObject = new $controller;
        }
        else{
            require 'controllers/HomeController.php';
            $this->controllerObject = new \Controllers\HomeController;
        }

        if(method_exists($this->controllerObject, $action)){
            $this->controllerObject->$action();
        }
        else{
            $this->controllerObject->index();
        }    
    }


    //Hàm get Controller
    public function getController(){
        if(isset($_REQUEST['controller'])){

            return $this->controller = ucfirst($_REQUEST['controller']) . 'Controller';

        }else{
            return $this->controller;
        }
    }

    //Hàm get action
    public function getAction(){
        if(isset($_REQUEST['action'])){
            return $this->action = $_REQUEST['action'];
        }
        else{
            return $this->action;
        }
    }
}