<?php
class Model extends Database{

    function all($table){
        $sql = "SELECT * FROM $table";
        $data = $this->query($sql);
        $value = [];
        while($row = $data->fetch()){
            array_push($value, $row);
        }

        return $value;
    }

    public function find($table, $id){
        $sql = "SELECT * FROM $table WHERE id = $id";
        $data = $this->query($sql);

        return $data->fetch();
    }

    public function store($table, $data){
        $key = implode(',', array_keys($data));
        
        
        $value = array_map(function($item){
            return "'".$item."'";
        }, array_values($data));

        $valueString = implode(',', $value);
        $sql = "INSERT INTO $table($key) VALUES ($valueString)";
        $this->execute($sql);
        return true;
    }

    public function update($table, $id, $data){
        $valueSQL = [];
        foreach($data as $key => $value){
            array_push($valueSQL, $key ."= '". $value . "'");
        }

        $valueSQL = implode(',', $valueSQL);
        $sql = "UPDATE $table SET $valueSQL WHERE id = $id";

        $this->execute($sql);
        return true;
    }

    public function destroy($table, $id){
        $sql = "DELETE FROM $table WHERE id = $id";

        $this->execute($sql);
        return true;
    }
}