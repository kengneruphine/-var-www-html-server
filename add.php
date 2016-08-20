
<h4 class="center-align">Add Books</h4></br>
              <div class="row">
      <div class="col s4">.</div>
      
    <form ng-app='myApp' class="col s6 z-depth-2" action="" method="POST" ng-controller="validateCtrl" 
    name="myForm" novalidate>
      <div class="row">
         <div class="col s2">.</div>
            <div class="input-field col s6">
                <input value="" id="name" type="number" class="validate">
             <label  class="active" for="name">ISBN No</label>
        </div>
        </div> 
  
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
                  <input value="" id="name" type="text" class="validate" name="dept" ng-model="dept" required>
                       <span style="color:red" ng-show="myForm.dept.$touched && myForm.dept.$invalid">
                       <span ng-show="myForm.dept.$error.required">please enter department.</span>
                       </span>
                    <label  class="active" for="name">department</label>
              </div>
        </div> 

      <div class="row">
         <div class="col s2">.</div>
            <div class="input-field col s6">
          <input value="" id="name" type="text" class="validate">
          <label  class="active" for="name">Author</label>
        </div>
        </div> 

        <div class="row">
         <div class="col s2">.</div>
            <div class="input-field col s6">
             <input value="" id="name" type="number" class="validate" name="num" ng-model="num" required>
                       <span style="color:red" ng-show="myForm.num.$touched && myForm.num.$invalid">
                       <span ng-show="myForm.num.$error.required">please enter number of copies.</span>
                      </span>
               <label  class="active" for="name"># of copies</label>
        </div>
        </div>
         
           <div class="row">
              <div class="col s4">.</div>
              <div class="input-field col s3">
               <button class=" btn indigo darken-1" type="submit" ng-disabled="myForm.book.$touched && myForm.book.$invalid || myForm.num.$touched && myForm.num.$invalid || myForm.dept.$touched && myForm.dept.$invalid" name="action">Add</button>  
        </form>
        </div>

    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>	
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/angular.min.js"></script>

     <script>
var app = angular.module('myApp', []);
app.controller('validateCtrl', function($scope) {
    $scope.book = '';
    $scope.num = 0;
    $scope.dept='';
});
</script>

</body>
</html>