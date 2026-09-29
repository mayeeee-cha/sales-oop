<?php

require_once "Database.php";

class User extends Database {

public function register($request){
  $first_name = $request['first_name'];
  $last_name = $request['last_name'];
  $username = $request['username'];
  $password = $request['password'];

  $password = password_hash($password,PASSWORD_DEFAULT);

  $sql = "INSERT INTO Users (`first_name`, `last_name`, `username`, `password`) VALUES ('$first_name','$last_name','$username','$password')";

  if($this->conn->query($sql)){
    header('location: ../views/login.php');
    exit;
  } else {
    die('Error creating the user:' . $this->conn->error);
  }
}

public function login($request){
  $username = $request['username'];
  $password = $request['password'];

  $sql = "SELECT * FROM Users WHERE username = '$username'";

  $result = $this->conn->query($sql);

  if($result->num_rows == 1){
    $user = $result->fetch_assoc();

    if(password_verify($password,$user['password'])){
      session_start();

      $_SESSION['id'] = $user['id'];
      $_SESSION['username'] = $user['username'];
      $_SESSION['fullname'] = $user['first_name'] . " " . $user['lastname'];

      header("location: ../views/dashboard.php");
      exit;
    } else {
      die('Error password is incorrect.');
    }
  } else {
    die('Error username not found.');
  }

  
}


}