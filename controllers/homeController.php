<?php
namespace Controllers;

use Core\Request;
use Core\Controller;
use Models\ProductModel;

class HomeController extends Controller{

    protected $checkDependence;

    public function __construct(){
        $this->checkDependence = new Request;
    }

    public function index(){
        $this->model('ProductModel');

        $data = new ProductModel;

        $result  = $data->productAll();

        return $this->view('client/layout', ['view' => 'home', 'result' => $result,]);
    }

    public function check(){
        echo 'ok';
    }

    public function show(){
        $data = $this->model('productModel');

        $id = $_GET['id'];

        $result  = $data->productFind($id);

        print_r($result);
    }

    public function store(){
        $data = $this->model('productModel');

        $value = [
            'tenmon' => 'ANh',
            'anhmon' => 'image.jpg',
        ];
        
        $result = $data->productStore($value);
        return $result;
    }

    public function update(){
        $data = $this->model('productModel');

        $id = $_GET['id'];
        $value = [
            'tenmon' => 'Check',
            'anhmon' => 'Check.jpgUPDATE',
        ];
        
        $result = $data->productUpdate($id, $value);
        return $result;
    }

    public function destroy(){
        $data = $this->model('productModel');

        $id = $_GET['id'];

        $result = $data->productDestroy($id);

        return $result;
    }
}