<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8"/>
</head>
<body>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
   $email=isset($_POST['email']) ? $_POST['email']:'';
   $pass=isset($_POST['password']) ? $_POST['password']:'';

}
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
               $password='';
    $sql="SELECT password FROM user_account WHERE email='$email'";
        $result=$conn->query($sql);

            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                       $password1=$row['password'];
                    }
                       if(password_verify($pass,$password1)){
                         header("location:manager.php");
                       }else{
                          echo '<script type="text/javascript">alert("invalid email and password");window.location.href="http://localhost/server/login.php"</script>';
                       }
                    }
                
    
    $conn->close();
?>
</body>
</html>