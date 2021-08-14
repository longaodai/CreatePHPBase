<?php

class shopController extends Controller{

    public function index(){
        return $this->view('client/layout', ['view' => 'shop']);
    }
}