<?php

class homeController extends Controller{

    protected $checkDependence;

    // public function __construct(Request $request){
    //     $this->checkDependence = $request;
    // }

    public function index(Request $request){
        // $data = new Request;
        $result = $request->all();

        // $result = $this->checkDependence->all();
        // $result = $data->all();

        echo $result['action'];
        echo '<pre>';
        print_r($result);
        // $data = $this->model('productModel');

        // $result  = $data->productAll();

        // return $this->view('client/layout', ['view' => 'home', 'result' => $result,]);
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