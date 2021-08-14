<?php

class Request{

    public function all(){
        $data = [];

        if(isset($_GET)){
            foreach($_GET as $key => $val){
                $data[$key] = $val;
            }
        }

        return $data;
    }

}