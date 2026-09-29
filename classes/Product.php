<?php

require_once "Database.php";

class Product extends Database {

public function addProduct(){
  $product_name = $_POST['product_name'];
  $price = $_POST['price'];
  $quantity = $_POST['quantity'];

  $sql = "INSERT INTO Products(`product_name`, `price`, `quantity`) VALUES ('$product_name','$price','$quantity')";

  if($this->conn->query($sql)){
    header('location: ../views/dashboard.php');
    exit;
  } else {
    die('Error adding new product: ' . $this->conn->error);
  }
}

public function getAllProducts(){
  $sql = "SELECT * FROM Products";

  if($result = $this->conn->query($sql)){
    return $result;
  } else {
    die('Error retrieving all products: ' . $this->conn->error);
  }
}
}
?>