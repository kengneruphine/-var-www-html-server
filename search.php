</br>
   <div class="row">
      <div class="col s3">.</div>
         <div class="col s3"><?php echo 'Date :'. date("Y-m-d", strtotime ("+ 1days"));?></div>
     </div>
     <?php
       $servername="localhost";
        $username="ruphine";
        $password="grace";
        $dbase="librarySystem";


    $conn=new mysqli($servername,$username,$password,$dbase);
       if($conn->connect_error){
              die("connection failed:".$conn->connect_error);
             }
 
         $result=$conn->query("SELECT COUNT(*) AS `count` FROM `borrow`");
         $row=$result->fetch_assoc();
         $count=$row['count'];

         $result1=$conn->query("SELECT COUNT(*) AS `coun` FROM `return`");
         $row=$result1->fetch_assoc();
         $coun=$row['coun'];

         $result2=$conn->query("SELECT COUNT(*) AS `cou` FROM `book`");
         $row=$result2->fetch_assoc();
         $cou=$row['cou'];
           ?>
     </br>
<div class="row">
    <div class="col s3">.</div>
     <div class="col s2 z-depth-2">
       <h5 class="center-align">Issued Books</h5>
       <h5 class="center]
       -align"><i class="material-icons prefix" style ="font-size : 50px">launch</i><?php echo $count;?></h5>
</div>

 <div class="col s1">.</div>
   <div class="col s2 z-depth-2">
     <h5 class="center-align">Returned Books</h5>
     <h5 class="center-align"><i class="material-icons prefix" style="font-size : 50px">system_update_alt</i> <?php echo $coun;?></h5>
</div>
  
      <div class="col s1">.</div>
         <div class="col s2 z-depth-2">
              <h5 class="center-align">Total Books</h5>
                  <h5 class="center-align"><i class="material-icons prefix" style="font-size : 50px">library_books</i><?php echo $cou;?></h5>
         </div>

   </div>
  </br></br></br>

   

 
   <div class="row">
        <div class="col s3">.</div>  
           <div class="col s7">    
                <div id="chartContainer" style="height: 400px; width: 100%;"></div>
             </div>
</div>

 <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>	
 <script type="text/javascript" src="js/materialize.min.js"></script>
 <script type="text/javascript" src="js/jquery.canvasjs.min.js"></script>
 <script type="text/javascript">
   window.onload = function () {
      var chart = new CanvasJS.Chart("chartContainer", {
        title: {
          text: "Column Chart showing relationship between books and numbers"
        },
          

      
        data: [{
          type: "column",
          dataPoints: [
              { label: "Issued books",y:<?php echo $count;?> },
              { label: "Returned books",y: <?php echo $coun;?>},
              { label: "Total books", y: <?php echo $cou;?> },
     
          ]
        }]
      });

      chart.render();
    }
 </script>
 <?php
 $conn->close();

   ?>
          


</body>
</html>