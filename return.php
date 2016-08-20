
 </br>
 </br>
      <h4 class="center-align">Return Books</h4></br>
              <div class="row">
      <div class="col s4">.</div>
      
    <form ng-app='myApp' class="col s6 z-depth-2" action="" method="POST" ng-controller="validateCtrl" 
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
                  <input value="" id="name" type="text" class="validate" name="stu" ng-model="stu" required>
                      <span style="color:red" ng-show="myForm.stu.$touched && myForm.stu.$invalid">
                      <span ng-show="myForm.stu.$error.required">please enter your name.</span>
                      </span>
                    <label  class="active" for="name">StudentName</label>
              </div>
        </div> 

      <div class="row">
         <div class="col s2">.</div>
            <div class="input-field col s6">
          <input value="" id="name" type="number" class="validate" name="num" ng-model="num" required>
                <span style="color:red" ng-show="myForm.num.$touched && myForm.num.$invalid">
                <span ng-show="myForm.num.$error.required">please enter number of books to return.</span>
                </span>
          <label  class="active" for="name"># of copies</label>
        </div>
        </div> 

        <div class="row">
         <div class="col s2">.</div>
            <div class="input-field col s6">
             <input value="" id="name" type="date" class="validate" name="issue" ng-model="issue" required>
                   <span style="color:red" ng-show="myForm.issue.$touched && myForm.issue.$invalid">
                   <span ng-show="myForm.issue.$error.required">enter  issue date.</span>
                  </span>  
               <label  class="active" for="name">Issue date</label>
        </div>
        </div>

        <div class="row">
         <div class="col s2">.</div>
            <div class="input-field col s6">
             <input value="" id="name" type="date" class="validate" name="due" ng-model="due" required>
                  <span style="color:red" ng-show="myForm.due.$touched && myForm.due.$invalid">
                  <span ng-show="myForm.issue.$error.required">enter due date.</span>
                  </span>
              <label  class="active" for="name">Due date</label>
        </div>
        </div>

             <div class="row">
         <div class="col s2">.</div>
            <div class="input-field col s6">
             <input value="" id="name" type="date" class="validate" name="retu" ng-model="retu">
             <span style="color:red" ng-show="myForm.retu.$touched && myForm.retu.$invalid">
                   <span ng-show="myForm.retu.$error.required">enter today date.</span>
                  </span>
              <label  class="active" for="name">Return date</label>
        </div>
        </div>
                <div class="row">
         <div class="col s2">.</div>
            <div class="input-field col s6">
             <input value="" id="name" type="number" class="validate" name="fine" ng-model="fine" required>
                <span style="color:red" ng-show="myForm.fine.$touched && myForm.fine.$invalid">
                <span ng-show="myForm.fine.$error.required">enter money.</span>
                </span>
              <label  class="active" for="name">Fine,if any</label>
        </div>
        </div>


           <div class="row">
              <div class="col s4">.</div>
              <div class="input-field col s3">
               <button class=" btn indigo darken-1" type="submit" ng-disabled="myForm.book.$touched && myForm.book.$invalid ||  
myForm.stu.$touched && myForm.stu.$invalid || myForm.num.$touched && myForm.num.$invalid || myForm.issue.$touched && myForm.issue.$invalid || myForm.retu.$touched && myForm.retu.$invalid" name="action">Return</button>  
        </form>
        </div>
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>	
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/angular.min.js"></script>
 
<script>
var app = angular.module('myApp', []);
app.controller('validateCtrl', function($scope) {
    $scope.book = '';
    $scope.stu = '';
    $scope.num = 0;
    $scope.issue = '';
    $scope.retu= '';
    $scope.fine=0;
});
</script>

</body>
</html>
