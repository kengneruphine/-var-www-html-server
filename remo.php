
<?php
        $id = $_GET['id'];
         
        $servername="localhost";
        $username="ruphine";
        $password="grace";
        $dbase="librarySystem";

    $conn=new mysqli($servername,$username,$password,$dbase);
       if($conn->connect_error){
              die("connection failed:".$conn->connect_error);
             }
       
          
       $sql="DELETE FROM book WHERE id = $id";
      
     if($conn->query($sql)){

      $sql="select * from book";
       $result=$conn->query($sql);

       if($result->num_rows>0){
        //output data of each row
          while($row=$result->fetch_array()){
            ?>
            <tr>
              <td><?php echo $row['id']; ?></td> 
              <td><?php echo $row['title']; ?></td> 
              <td><?php echo $row['isbn']; ?></td> 
              <td><?php echo $row['author']; ?></td> 
              <td><?php echo $row['copies']; ?></td> 
              <td><?php echo $row['department']; ?></td>
              <td><a class="waves-effect waves-light modal-trigger" href="#modal1" onclick="deleteFxn(<?php echo $row['id'];?>)"><i class="material-icons" style="color:red">clear</i></a></td> 
            </tr>
            <?php
          }
        }
     } 
       $conn->close();
     ?> 