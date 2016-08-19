</br>
   <div class="row">
      <div class="col s3">.</div>
         <div class="col s3">THURS 18th AUGUST 2016</div>
     </div>
     </br>
<div class="row">
    <div class="col s3">.</div>
     <div class="col s2 z-depth-2">
       <h5 class="center-align">Issued Books</h5>
       <h5 class="center-align"><i class="material-icons prefix" style ="font-size : 50px">launch</i></h5>
</div>

 <div class="col s1">.</div>
   <div class="col s2 z-depth-2">
     <h5 class="center-align">Returned Books</h5>
     <h5 class="center-align"><i class="material-icons prefix" style="font-size : 50px">system_update_alt</i> </h5>
</div>
  
      <div class="col s1">.</div>
         <div class="col s2 z-depth-2">
              <h5 class="center-align">Total Books</h5>
                  <h5 class="center-align"><i class="material-icons prefix" style="font-size : 50px">library_books</i> </h5>
         </div>

   </div>
  </br></br></br>
  <!-- <div class="row">
         <div class="col s3">.</div>
          <div class="col s5">
             <h5 class="center-align"> defaulters List</h5></br>
                <table>
                      <thead>
                           <tr>
                               <th data-field="text">Student Name</th>
                               <th data-field="text">Department</th>
                               <th data-field="text">Faculty</th>
                               <th data-field="number">Fine</th>
                            </tr>
                         </thead>
                       <tbody>
                          <tr>
                            <td>Alvine</td> 
                            <td>Chemistry</td> 
                            <td>Science</td> 
                            <td>200</td>
                          </tr> 
                          <tr>
                            <td>John</td> 
                            <td>Physics</td> 
                            <td>Science</td> 
                            <td>200</td>
                          </tr> 
                          <tr>
                            <td>Mary</td> 
                            <td>French</td> 
                            <td>Arts</td>
                            <td>200</td> 
                          </tr> 
                        </tbody> 
                     </table>
                   </div>
                 </div></br></br> -->

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
              { label: "Issued books", y: 8 },
              { label: "Returned books",y: 5},
              { label: "Total books", y: 30 },
    
          ]
        }]
      });

      chart.render();
    }


 </script>

</body>
</html>