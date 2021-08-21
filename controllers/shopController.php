<?php
namespace Controllers;

use Core\Controller;
use Core\Request;

class ShopController extends Controller{

    private $checkDependence;

    public function __construct(){
        $this->checkDependence = new Request;
    }

    public function index(){
        return $this->view('client/layout', ['view' => 'shop']);
    }

    public function show(){
        // if(isset($_GET['get']))
        $data = $this->checkDependence->all();

        echo "<pre>";
        print_r($data);
        echo "</pre>";


        return $this->view('client/layout', ['view' => 'show']);
    }
}