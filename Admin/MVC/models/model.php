<?php
require_once('conection.php');

class model{
    var $conn;
    var $table;
    var $contens;

    function __construct(){
        $conn_obj = new conection();
        $this->conn = $conn_obj->conn;
    }

    function All(){
        $query = "SELECT * FROM $this->table ORDER BY $this->contens DESC ";
        require("result.php");
        return $data;

    }
    function delete($id){
        $query = "DELETE FROM $this->table where $this->contens=$id";        
        $status = $this->conn->query($query);
        if ($status == true) {
            setcookie('msgg', 'Xóa thành công', time() + 2);
        } else {
            setcookie('msgg', 'Xóa không thành công', time() + 2);
        }
        header('Location: ?mod=' . $this->table);
    }
    function update($data){
        $v = "";
        foreach ($data as $key => $value) {
            $v .= $key . "='" . $value . "',";
        }
        $v = trim($v, ",");

        $query = "UPDATE $this->table SET $v WHERE $this->contens = " . $data[$this->contens];
        $result = $this->conn->query($query);      
        if ($result == true) {
            setcookie('duyet', 'Duyệt thành công', time() + 2);
            header('Location: ?mod=' . $this->table);
        } else {
            setcookie('duyet', 'Update vào không thành công', time() + 2);
            header('Location: ?mod=' . $this->table . '&act=edit&id=' . $data['id']['id']);
        }
    }

    function store($data){
        $f = "";
        $v = "";
        foreach ($data as $key => $value) {
            $f .= $key . ",";
            $v .= "'" . $value . "',";
        }
        $f = trim($f, ",");
        $v = trim($v, ",");
        $query = "INSERT INTO $this->table($f) VALUES ($v);";
        $status = $this->conn->query($query);
        if ($status == true) {
            setcookie('themsp', 'Thêm mới thành công', time() + 2);
            header('Location: ?mod=' . $this->table);
        } else {
            setcookie('themsp', 'Thêm vào không thành công', time() + 2);
            header('Location: ?mod=' . $this->table . '&act=add');
        }

    }

    function find($id){
        $query = "SELECT * FROM $this->table WHERE $this->contens = $id";
        return $this->conn->query($query)->fetch_assoc();
    }

}