<?php
namespace Models;

use Core\Model;

class ProductModel extends Model{
    private $table = 'monhoc';
    private $data;

    public function productAll(){

        $this->data = $this->all($this->table);

        return $this->data;
    }

    public function productFind($id){
        $data = $this->find($this->table, $id);

        return $data;
    }

    public function productStore($data){
        $data = $this->store($this->table, $data);

        return $data;
    }

    public function productUpdate($id, $data){
        $data = $this->update($this->table, $id, $data);
        
        return $data;
    }

    public function productDestroy($id){
        $data = $this->destroy($this->table, $id);

        return $data;
    }
}