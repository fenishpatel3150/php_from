<?php

class Config
{
    private $localhost = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "product";
    private $create;


    function __construct()
    {
        $this->create = mysqli_connect($this->localhost, $this->username, $this->password, $this->database, );
    }

    function insertDatabase($name, $price, $category)
    {
        $query = "INSERT INTO products (name,price,category) VALUES ('$name',$price,'$category')";
        $insertDate = mysqli_query($this->create, $query);

        if ($insertDate) {
            echo "<script>alert('Insert data Successfully!')</script>";
        }
    }

    function selectDatabase()
    {
        $query = "SELECT * FROM products";

        $selectData = mysqli_query($this->create, $query);

        return $selectData;
    }

    function removeProduct($id)
    {
        $query = "DELETE FROM products WHERE id=$id";
        mysqli_query($this->create, $query);
    }



    function updateProduct($id, $name, $price, $category)
    {
        $query = "UPDATE products SET name='$name',price=$price,category='$category' WHERE id=$id";
        mysqli_query($this->create, $query);
    }
}


?>