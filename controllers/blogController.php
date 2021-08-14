<?php

class blogController extends Controller{

    public function index(){
        return $this->view('client/layout', ['view' => 'blog']);
    }
}