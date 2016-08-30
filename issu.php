
	<?php
//to add 5 days to the present date
   $dat=date("y-m-d");
   $due = date ("Y-m-d", strtotime ($dat ."+ 6days"));
  



   /* '<script type="text/javascript">
var today = new Date();

var numberOfDaysToAdd = 7;
today.setDate(today.getDate() + numberOfDaysToAdd); 
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();

if(dd<10) {
    dd="0"+dd;
} 

if(mm<10) {
    mm="0"+mm;
} 

today = yyyy+"-"+mm+"-"+dd;
document.write(today);
</script> ';

*/
if($_SERVER['REQUEST_METHOD']=='POST'){
	   $book=$_POST['book'];
      $user=$_POST['user'];
      $department=$_POST['dept'];
      $issue=$_POST['issue'];
    
      $numb=$_POST['num'];
               
  var_dump($due);
      $servername="localhost";
      $username="ruphine";
      $password="grace";
      $dbase="librarySystem";
//error_reporting(E_ALL ^ E_NOTICE);

//create connection
     $conn=new mysqli ($servername, $username,$password,$dbase);
// check connection
      if($conn->connect_error){
               die("connection failed:".$conn->connect_error);
       }
        
            

            
               //insert into database
   $sql="INSERT INTO borrow (b_title,s_name,department,issue_date,due_date,copies) VALUES('".$book."','".$user."','".$department."','".$issue."','$due','".$numb."')";
    
    if($conn->query($sql)=== TRUE){
    echo '<script type="text/javascript"> alert("successful issued");window.location.href="http://localhost/server/manager.php?page=issue";</script>';
  } 
    else
      echo '<script type="text/javascript"> alert("Not executed,try again");window.location.href="http://localhost/server/manager.php?page=issue";</script>' ;
      echo $conn->error;

    $conn->close();
  }
  ?>