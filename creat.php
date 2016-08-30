<?php

    $user="";
    $password="";
    $email="";
    $phone="";
    $pass="";

    $user=isset($_POST['user']) ?$_POST['user']:'';
    $password=isset($_POST['password']) ?$_POST['password']:'';
     $pass=password_hash($password,PASSWORD_DEFAULT);
    $email=isset($_POST['email']) ?$_POST['email']:'';
    $phone=isset($_POST['phoneNo']) ?$_POST['phoneNo']:'';

        $servername="localhost";
    $username="ruphine";
    $password="grace";
    $dbase="librarySystem";
    //error_reporting(E_ALL ^ E_NOTICE);
 
    $conn =new mysqli($servername,$username,$password,$dbase);
     
// check connection
    if($conn->connect_error){
      die("connection failed:".$conn->connect_error);
    }
     $sql="INSERT INTO user_account(username,password,email,phone_number) VALUES ('$user','$pass','$email','$phone')";

      if($conn->query($sql)){
        echo '<script type="text/javascript"> alert("Account created succesfully");window.location.href="http://localhost/server/manager.php?page=create";</script>';
  } 
    else
      
      echo $conn->error;

    $conn->close();
      

?>