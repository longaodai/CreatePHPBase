<?php
namespace Controllers;

use Core\Controller;

class BlogController extends Controller{

    public function index(){
        return $this->view('client/layout', ['view' => 'blog']);
    }
}