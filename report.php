</br>
 </br>
       <h4 class="center-align">Report Form</h4><hr style="width:14%;color:indigo;background-color:indigo ;border:none;height :4px">
      </br>
 <?php
     //to count the number of books in the library
        $servername="localhost";
        $username="ruphine";
        $password="grace";
        $dbase="librarySystem";


    $conn=new mysqli($servername,$username,$password,$dbase);
       if($conn->connect_error){
              die("connection failed:".$conn->connect_error);
             }

          $result1= $conn->query('SELECT SUM(copies) AS value_sum FROM book'); 
          $row =$result1->fetch_assoc(); 
          $sum = $row['value_sum'];



        $result=$conn->query("SELECT COUNT(*) AS `count` FROM `book`");
        $row=$result->fetch_assoc();
        $count=$row['count'];
          ?>
 

      <div class="row">
         <div class="col s3">.</div>
          <div class="col s8">
              <h5>Total Number of books currently available:<?php echo '  '. $count;?> </h5>
              <h5>Number of copies of each book:<?php echo $sum;?></h5>
           </div>
       </div> 
       <?php

            $conn->close();
       ?>
    
  </br>

       <h4 class="center-align">Borrower list</h4></br>
              <div class="row">
      <div class="col s3">.</div>
      <div class="col s8">


            <table class="bordered" style="position: relative;left:20px">
        <thead>
          <tr>
              <th data-field="id">student_name</th>
              <th data-field="name">book_title</th>
              <th data-field="price">department</th>
              <th data-field="action">issue_date</th>
              <th data-field="copi">due_date</th>
              <th data-field="dept">number borrowed</th>
              
          </tr>
        </thead>  
<?php
        $servername="localhost";
        $username="ruphine";
        $password="grace";
        $dbase="librarySystem";


    $conn=new mysqli($servername,$username,$password,$dbase);
       if($conn->connect_error){
              die("connection failed:".$conn->connect_error);
             }
       

       $sql="select * from borrow";
       $result=$conn->query($sql);

       if($result->num_rows>0){
        //output data of each row
          while($row=$result->fetch_array()){
            ?>
              <tbody>
                   <tr>
                     <td><?php echo $row['s_name']; ?></td> 
                     <td><?php echo $row['b_title']; ?></td> 
                     <td><?php echo $row['department']; ?></td> 
                     <td><?php echo $row['issue_date']; ?></td> 
                     <td><?php echo $row['due_date']; ?></td> 
                     <td><?php echo $row['copies']; ?></td>
                   </tr>
                     </tbody> 
               <?php
          }
       }
        else {
          echo "0 results";
        }
        $conn->close();


    ?>
  </table>
</div>
</div>
</br>
</br>


  <h4 class="center-align">Return list</h4></br>
              <div class="row">
      <div class="col s3">.</div>
      <div class="col s8">


            <table class="bordered" style="position: relative;left:20px">
        <thead>
          <tr>
              <th data-field="id">student_name</th>
              <th data-field="name">book_title</th>
              <th data-field="price">issue_date</th>
              <th data-field="action">due_date</th>
              <th data-field="copi">return_date</th>
              <th data-field="dept">copies returned</th>
              <th data-field="dept">in_store(CFA)</th>
              
          </tr>
        </thead>  
<?php
        $servername="localhost";
        $username="ruphine";
        $password="grace";
        $dbase="librarySystem";


    $conn=new mysqli($servername,$username,$password,$dbase);
       if($conn->connect_error){
              die("connection failed:".$conn->connect_error);
             }

  $sql="select * from `return`";
       $result=$conn->query($sql);
       if($result->num_rows>0){
        //output data of each row
          while($row=$result->fetch_array()){
            
            ?>
              <tbody>
                   <tr>
                     <td><?php echo $row['s_name']; ?></td> 
                     <td><?php echo $row['b_title']; ?></td> 
                     <td><?php echo $row['issue_date']; ?></td> 
                     <td><?php echo $row['due_date']; ?></td> 
                     <td><?php echo $row['return_date']; ?></td> 
                     <td><?php echo $row['copies']; ?></td>
                     <td><?php echo $row['in_store']; ?></td>
                   </tr>
                     </tbody> 
               <?php
          }
       }
        else {
          echo "0 results";
        }
        $conn->close();


    ?>
</table>
</div>
</div>

 <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script> 
 <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
