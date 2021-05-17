<?php

include "DBConnect.php";

class ProductManager
{
    protected $connect;

    public function __construct()
    {
        $dbconnect = new DBConnect();
        $this->connect = $dbconnect->connect();
    }

    public function getAllProducts()
    {
        $sql = "SELECT * FROM product";
        $query = $this->connect->query($sql);
        return $query->fetchAll();
    }

    public function createProducts($name, $categories, $price, $amount, $datecreate, $des)
    {
        $sql = "INSERT INTO product(name,categories,price,amount,datecreate,des)value('$name','$categories','$price','$amount','$datecreate','$des')";
        return $this->connect->query($sql);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM product WHERE id=$id";
        return $this->connect->query($sql);
    }

    public function update($name,$categories,$price,$amount,$datecreate,$des)
    {
        $id = $_GET['id'];

        $sql = "UPDATE product SET name ='$name',categories ='$categories', price='$price',amount='$amount',datecreate='$datecreate',des ='$des' WHERE id = '$id'";
        return $this->connect->query($sql);
}
    public function search($find)
    {

        $sql = "SELECT * FROM product WHERE name LIKE '%$find%' OR categories LIKE '%$find%' OR price LIKE '%$find%' OR des LIKE '%$find'";
        $productSearch = $this->connect->query($sql);
        return $productSearch->fetchAll();
    }
}