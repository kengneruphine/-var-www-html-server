<?php
require('head.php');
?>
</br>
</br>
</br>

    <h5 class="center-align">login form</h5>
 
	<div class="row">
	  <div class="col s3">.</div>
	  
	<form  ng-app="myApp" class="col s6 z-depth-2" action="login.php" method="post" ng-controller="validateCtrl" 
 name="myForm" novalidate>
      <div class="row">
      <div class="col s2">.</div>
        <div class="input-field col s6">
         <i class="material-icons prefix">account_circle</i>
         
          <input value="" id="icons_prefix" type="text" class="validate"  name="user" ng-model="user" required>
              <span style="color:red" ng-show="myForm.user.$touched && myForm.user.$invalid">
              <span ng-show="myForm.user.$error.required">Username is required.</span>
              </span>
          <label  class="active" for="icons_prefix">username</label>
        </div>
		</div>
		
	  
	   <div class="row">
     <div class="col s2">.</div>
		<div class="input-field col s6">
    <i class="material-icons prefix">lock</i>

          <input  value="" id="icons_prefix" type="password" class="validate" name="password" ng-model="password" required>
          <span style="color:red" ng-show="myForm.password.$touched && myForm.password.$invalid">
          <span ng-show="myForm.password.$error.required">password is required.</span>
          </span>
          <label  class="active" for="icons_prefix">Password</label>
        </div>
      </div>
	  
	    <div class="row">
		 <div class="col s2">.</div>
	  
	    <div class="input-field col s3">
		<button class=" btn indigo darken-1" type="submit"  ng-disabled="myForm.user.$touched && myForm.user.$invalid ||  
myForm.password.$touched && myForm.password.$invalid" name="action">login</button>
        <!-- <i class="material-icons right">send</i>-->
        
          </div>&nbsp;&nbsp;&nbsp;
          <div class="col s1">.</div>
		     <div class="input-field col s3">
   
          <a href="#" class=" btn indigo darken-1" type="submit" name="action">Cancel</a>
        <!-- <i class="material-icons right">send</i>-->
        
          </div>
		  </div> 
      </br>













    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>	
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/angular.min.js"></script>
    <script type="text/javascript">
      var app = angular.module('myApp', []);
       app.controller('validateCtrl', function($scope) {
       $scope.user = '';
       $scope.password = '';
    
});
</script>

</body>
</html>

