<html>
<head>
	<script>
	</script>
</head>
	<body>
		<?php
  
    $isb=$_POST['isbn'];
    $title=$_POST['book'];
    $department=$_POST['dept'];
    $author=$_POST['author'];
    $numb=$_POST['num'];
               

    $servername="localhost";
    $username="ruphine";
    $password="grace";
    $dbase="library";
    //error_reporting(E_ALL ^ E_NOTICE);
 
    $conn =new mysqli($servername,$username,$password,$dbase);
     
// check connection
    if($conn->connect_error){
      die("connection failed:".$conn->connect_error);
    }

    $sql="INSERT INTO book(title,isbn,author,copies,department) VALUES('".$title."','".$isb."','".$author."','".$numb."','".$department."')";

    if($conn->query($sql)=== TRUE){
      echo '<script type="text/javascript"> alert("Book added successfully");window.location.href="http://localhost/server/manager.php?page=add";</script>';
    }else{
      echo '<script type="text/javascript"> alert("couldnot execute,try again");window.location.href="http://localhost/server/manager.php?page=add";</script>';
    }

    $conn->close();
?>
	</body>
</html>