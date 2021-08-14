<?php
class App{
    public $Controller = 'homeController';
    public $Action = 'index';
    
    public function __construct(){
        $Controller = $this->getController();

        $Action = $this->getAction();

        if(file_exists('controllers/'. $Controller .'.php')){
            require 'controllers/'. $Controller .'.php';
            $controllerObject = new $Controller;
        }
        else{
            require 'controllers/homeController.php';
            $controllerObject = new homeController;
        }
        
        if(method_exists($Controller, $Action)){
            $controllerObject->$Action();
        }
        else{
            $controllerObject->index();
        }    
    }

    public function getController(){
        if(isset($_REQUEST['controller'])){
            return $this->Controller = $_REQUEST['controller'] . 'Controller';
        }else{
            return $this->Controller;
        }
    }

    public function getAction(){
        if(isset($_REQUEST['action'])){
            return $this->Action = $_REQUEST['action'];
        }
        else{
            return $this->Action;
        }
    }
}