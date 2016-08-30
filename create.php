
<h4 class="center-align">Create Account</h4></br>
              <div class="row">
      <div class="col s4">.</div>
      
    <form ng-app="myApp" class="col s6 z-depth-2" action="creat.php" method="POST" ng-controller="validateCtrl" 
 name="myForm" novalidate> 
  
             <div class="row">
                  <div class="col s2">.</div>
                    <div class="input-field col s6">
                      <i class="material-icons prefix">account_circle</i>
                        <input value="" id="name" type="text" class="validate" name="user" ng-model="user" required>
                          <span style="color:red" ng-show="myForm.user.$touched && myForm.user.$invalid">
                          <span ng-show="myForm.user.$error.required">Username is required.</span>
                         </span>
                       <label  class="active" for="name">username</label>
              </div>
            </div>

             <div class="row">
                <div class="col s2">.</div>
                 <div class="input-field col s6">
                     <i class="material-icons prefix">lock</i>
                  <input value="" id="name" type="password" class="validate" name="password" ng-model="password" required>
                       <span style="color:red" ng-show="myForm.password.$touched && myForm.password.$invalid">
                       <span ng-show="myForm.password.$error.required">password is required.</span>
                         </span>
                    <label  class="active" for="name">password</label>
              </div>
        </div> 

      <div class="row">
         <div class="col s2">.</div>
            <div class="input-field col s6">
            <i class="material-icons prefix">email</i>

          <input value="" id="name" type="email" class="validate" name="email" ng-model="email" required>
                <span style="color:red" ng-show="myForm.email.$touched && myForm.email.$invalid">
                 <span ng-show="myForm.email.$error.required">Email is required.</span>
                 <span ng-show="myForm.email.$error.email">Invalid email address.</span>
                 </span>
          <label  class="active" for="name">email</label>
        </div>
        </div> 

        <div class="row">
         <div class="col s2">.</div>
            <div class="input-field col s6">
            <i class="material-icons prefix">phone</i>

                   <input value="" id="name" type="text" class="validate" name="phoneNo" ng-model="phoneNo" required>
                      <span style="color:red" ng-show="myForm.phoneNo.$touched && myForm.phoneNo.$invalid">
                        <span ng-show="myForm.phoneNo.$error.required">phone number is required.</span>
                        </span>
               <label  class="active" for="name">phoneNumber</label>
        </div>
        </div>
         
          <div class="row">
		 <div class="col s2">.</div>
	  
	    <div class="input-field col s3">
		<button class=" btn indigo darken-1" type="submit"  ng-disabled="myForm.user.$invalid ||  myForm.password.$invalid || myForm.email.$invalid || myForm.phoneNo.$invalid " name="action">Create</button>
        <!-- <i class="material-icons right">send</i>-->
        
          </div>&nbsp;&nbsp;&nbsp;
          <div class="col s1">.</div>
		     <div class="input-field col s3">
   
          <a href="#" class=" btn indigo darken-1" type="submit" name="action">Cancel</a>
        <!-- <i class="material-icons right">send</i>-->
        
          </div>
		  </div> 
        </form>
        </div>


    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>	
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/angular.min.js"></script>
     <script>
      var app = angular.module('myApp', []);
       app.controller('validateCtrl', function($scope) {
         $scope.user = '';
         $scope.password ='';
         $scope.email='';
         $scope.phoneNo='';

      
    
});
</script>


</body>
</html>