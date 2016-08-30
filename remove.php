

<h4 class="center-align">Remove Books</h4></br>
              <div class="row">
      <div class="col s3">.</div>
      <div class="col s8">


            <table class="bordered" style="position: relative;left:20px">
        <thead>
          <tr>
              <th data-field="id">Id</th>
              <th data-field="name">title</th>
              <th data-field="price">Isbn</th>
              <th data-field="action">Author</th>
              <th data-field="copi">copies</th>
              <th data-field="dept">department</th>
              <th data-field="action">Action</th>
          </tr>
        </thead>
        <tbody id="del">
<?php
        $servername="localhost";
        $username="ruphine";
        $password="grace";
        $dbase="librarySystem";


    $conn=new mysqli($servername,$username,$password,$dbase);
       if($conn->connect_error){
              die("connection failed:".$conn->connect_error);
             }
       

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
        $conn->close();


    ?>
    </tbody>
      
         <div id="modal1"  class=" col s5 modal">
    <div class="modal-content">
      <p> Are you sure you want to delete ?</p>
    </div>
    <div class="modal-footer">
            <a href="#" class="modal-close waves-effect">
                   <button class="btn indigo darken-1" type="submit" > No</button></a>


               <a href="#" class="modal-close"><button class="btn red">Yes</button></a>
    </div>
  </div>
   </div>
   </div>


    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>	
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/angular.min.js"></script>
    <script type="text/javascript">
    
   $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });
  </script>

     <script>
  function deleteFxn(id) {
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
      document.getElementById("del").innerHTML=xmlhttp.responseText;
  }
  xmlhttp.open("GET","remo.php?id="+id,true);
  xmlhttp.send();
}
var app = angular.module('myApp', []);
app.controller('validateCtrl', function($scope) {
    $scope.book = '';
    $scope.num = 0;
    $scope.dept='';
});
</script>

<script>

</script>
</body>
</html>