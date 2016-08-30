
<h4 class="center-align">Issue Books</h4></br>

        <div class="row">
      <div class="col s4">.</div>
      
    <form ng-app='myApp' class="col s6 z-depth-2" action="issu.php" method="POST" ng-controller="validateCtrl" 
 name="myForm" novalidate>
  
             <div class="row">
                  <div class="col s2">.</div>
                    <div class="input-field col s6">
                      <input value="" id="name" type="text" class="validate" name="book" ng-model="book" required>
                      <span style="color:red" ng-show="myForm.book.$touched && myForm.book.$invalid">
                       <span ng-show="myForm.book.$error.required">please enter book title.</span>
                       </span>
                 <label  class="active" for="name">BookTitle</label>
              </div>
            </div>

             <div class="row">
                <div class="col s2">.</div>
                 <div class="input-field col s6">
                  <input value="" id="name" type="text" class="validate" name="user" ng-model="user" required>
                    <span style="color:red" ng-show="myForm.user.$touched && myForm.user.$invalid">
                    <span ng-show="myForm.user.$error.required">name is required.</span>
                    </span>
                    <label  class="active" for="name">studentName</label>
              </div>
        </div> 

          <div class="row">
                <div class="col s2">.</div>
                 <div class="input-field col s6">
                  <input value="" id="name" type="text" class="validate" name="dept" ng-model="dept" required>
                     <span style="color:red" ng-show="myForm.dept.$touched && myForm.dept.$invalid">
                     <span ng-show="myForm.dept.$error.required">please enter your department.</span>
                    </span>
                    <label  class="active" for="name">department</label>
              </div>
        </div> 


 

         <div class="row">
         <div class="col s2">.</div>
            <div class="input-field col s6">
               <input value="" id="name" type="number" class="validate" name="num" ng-model="num" required>
                 <span style="color:red" ng-show="myForm.num.$touched && myForm.num.$invalid">
                 <span ng-show="myForm.num.$error.required">enter number of books to borrow.</span>
                 </span>
          <label  class="active" for="name"># of books to borrow</label>
        </div>
        </div> 


        <div class="row">
         <div class="col s2">.</div>
            <div class="input-field col s6" id="issue" >
             <input value="" id="issue" type="date" class="validate black-text" name="issue" ng-model="issue" placeholder="yyyy/mm/dd" required>
               <span style="color:red" ng-show="myForm.issue.$touched && myForm.issue.$invalid">
               <span ng-show="myForm.issue.$error.required">enter today date.</span>
                 </span>
               <label  class="active" for="name">Issue date</label>
        </div>
        </div>


         <div class="row">
                 <div class="col s2">.</div>
                   <div class="input-field col s6" type="date" id="du">
                      
                    <input type="" onclick="displaydate()" name="due" value="see due date" required>
                    
                </div>
           </div>

           <div class="row">
              <div class="col s4">.</div>
              <div class="input-field col s3">
               <button class=" btn indigo darken-1" type="submit" ng-disabled=" myForm.book.$invalid || myForm.user.$invalid ||  myForm.num.$invalid ||myForm.dept.$invalid" name="action">Issue</button>  
                
        </form>
        </div>

    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script> 
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/angular.min.js"></script>
 
   <script>
var app = angular.module('myApp', []);
app.controller('validateCtrl', function($scope) {
    $scope.book = '';
    $scope.user = '';
    $scope.issue = '';
    $scope.due='';
    $scope.num= 0;
});
</script>
<script type="text/javascript">
function displaydate(){
         var someDate = new Date();
         var numberOfDaysToAdd = 6;
         someDate.setDate(someDate.getDate() + numberOfDaysToAdd); 

         var dd = someDate.getDate();
         var mm = someDate.getMonth() + 1;
          var y = someDate.getFullYear();

var somedate = y + '-'+ mm + '-'+ dd;
 document.getElementById("du").innerHTML=somedate;
  }      
</script>
</body>
</html>



