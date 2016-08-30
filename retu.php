<?php
     $dat=date("y-m-d");
     $due = date ("Y-m-d", strtotime ($dat ."+ 6days"));
 
      if($_SERVER["REQUEST_METHOD"]=="POST"){
               $book=isset($_POST['book']) ? $_POST['book']:'';
               $issue=isset($_POST['issue']) ? $_POST['issue']:'';
               
               $fine=isset($_POST['fine']) ? $_POST['fine']:'';
               $use="";
               $num=0;
               $retu="";
               
               $use=isset($_POST['stu']) ? $_POST['stu']:'';
               $num=isset($_POST['num']) ? $_POST['num']:'';
               $retu=isset($_POST['retu']) ? $_POST['retu']:'';
               

                     //to get the difference between two dates

        $diff=(strtotime($due)-strtotime($retu)) /(60*60*24);
        $days=abs($diff);

        $fineto=$days * 100;   //100 to pay for a day
         $change=$fine - $fineto;

$servername="localhost";
$username="ruphine";
$password="grace";
$dbase="librarySystem"; 

//create connection
     $conn=new mysqli($servername, $username,$password,$dbase);
// check connection
      if($conn->connect_error){
               die("connection failed:".$conn->connect_error);
       }
        $sql="INSERT INTO `return`(b_title,s_name,copies,issue_date,due_date,return_date,fine,number_days,in_store,balance) VALUES ('$book','$use','$num','$issue','$due','$retu','$fine','$days','$fineto','$change')";

        if($conn->query($sql)  && $fineto == $fine){
    echo '<script type="text/javascript"> alert("Successful Return,no balance");window.location.href="http://localhost/server/manager.php?page=return";</script>';
  }
    else if ($conn->query($sql) && $fine > $fineto){
         echo '<script type="text/javascript"> alert("Successful Return,you hav a balance");window.location.href="http://localhost/server/manager.php?page=return";</script>';
        
       }
       else{
        echo "Error";
       }
    
    $conn->close();
 }
 ?>
