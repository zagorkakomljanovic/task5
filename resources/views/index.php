<!DOCTYPE html>
<html lang=eng>
<head>
<meta charset="UTF-8">
  <title>Welcome </title>

  <!-- CSS -->
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"> <!-- load bootstrap via cdn -->
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> <!-- load fontawesome -->
  <style>
    body    { padding-top:30px; }
    form    { padding-bottom:20px; }
  </style>

  <!-- JS -->

<!--   <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
 -->  


     <script src="http://code.angularjs.org/1.2.6/angular.js"></script> 
<!--      <script src="js/app.js"></script>
 --><!--      <script src="js/controllers/mainCtrl.js"></script>
 --><!--      <script src="js/services/user1Services.js"></script>
 -->   
   <script >
      

          angular.module('user1App', [ ]);

          angular.module('user1App').controller('mainController', function($scope, $http) {

          $scope.user1Data = {};

          $http.get('api/v1/jokes').success(function(data) { 

          $scope.user1s = data; 
            $scope.showTheForm = true;
          });

          $scope.submitUser1 = function() {
                if($scope.newForm.$valid){  
                    $http({
                    method: 'POST',
                    url: 'api/v1/jokes',
                    type: 'JSON',
                    dataType: 'JSON',
                    data: JSON.stringify($scope.user1Data)
                    }).success(function(User1data) { 
                      $scope.user1Data = {};
                      $scope.showTheForm = false;
                             });
                              }
            };

          });

    </script>
</head>



<body   class="container" ng-app="user1App" ng-controller="mainController">
  <div class="container">
  <div class="col-sm-8 col-sm-offset-2">


      <form name="newForm" ng-show="showTheForm" ng-submit="submitUser1()" novalidate> <!-- ng-submit will disable the default form action and use our function -->
    <div ><h1> Fill in registration  form </h1></div>

        <!-- NAME -->
        <div class="form-group" ng-class="{ 'has-error' : newForm.name.$invalid && !newForm.name.$pristine }">

          <input type="text" class="form-control input-sm" name="name" ng-model="user1Data.name" placeholder="name" ng-minlength="3" ng-maxlength="8" required>
            <p ng-show="newForm.name.$invalid && !newForm.name.$pristine" class="help-block">You name is required.</p>
            <p ng-show="newForm.name.$error.minlength" class="help-block">name is too short.</p>
            <p ng-show="newForm.name.$error.maxlength" class="help-block">name is too long.</p>

        </div>

        <!-- EMAIL -->
        <div class="form-group" ng-class="{ 'has-error' : newForm.email.$invalid && !newForm.email.$pristine }">

          <input type="email" class="form-control input-lg" name="email" ng-model="user1Data.email" placeholder="Email" required>
            <p ng-show="newForm.email.$invalid && !newForm.email.$pristine" class="help-block">Enter a valid email.</p>

        </div>
        
                <!-- Phone number -->
        <div class="form-group" ng-class="{ 'has-error' : newForm.phone_number.$invalid && !newForm.phone_number.$pristine }">

          <input type="string" ng-pattern="/^[0-9]{1,7}$/" class="form-control input-lg" name="phone_number" ng-model="user1Data.phone_number" placeholder="Phone_number " required>
          <p ng-show="newForm.phone_number.$invalid && !newForm.phone_number.$pristine " class="help-block" >Not a valid number!</p>
<!--           <span ng-show="newForm.phone_number.$error.pattern">Not a valid number!</span>
 -->
 


        </div >
        
        <!-- SUBMIT BUTTON -->
        <div class="form-group text-right"> 
          <button type="submit" id="register" class="btn btn-primary btn-lg" ng-disabled="newForm.$invalid">Register</button>
        </div>
      </form>

      <div id="thank" ng-show="!showTheForm" >
       <h1>Thank you!</h1> 
      </div>

<!--       <div class="user1"  ng-repeat="user1 in user1s">
        <h3> <small>{{ user1.name }} , {{ user1.email }}</small></h3>
        <p>{{ user1.phone_number }}</p>
      </div>
 -->




  <div ng-show="showTheForm"  class="col-sm-6"  >
    <!-- VALIDATION TABLES ======== -->    
    <div class="row">
        <div class="col-xs-3">
            <h3>Form</h3>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td ng-class="{ success: newForm.$valid, danger: newForm.$invalid }">Valid</td>
                    </tr>
                    <tr>
                        <td ng-class="{ success: newForm.$pristine, danger: !newForm.$pristine }">Pristine</td>
                    </tr>
                    <tr>
                        <td ng-class="{ success: newForm.$dirty }">Dirty</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-xs-3">
            <h3>Name</h3>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td ng-class="{ success: newForm.name.$valid, danger: newForm.name.$invalid }">Valid</td>
                    </tr>
                    <tr>
                        <td ng-class="{ success: newForm.name.$pristine, danger: !newForm.name.$pristine }">Pristine</td>
                    </tr>
                    <tr>
                        <td ng-class="{ success: newForm.name.$dirty }">Dirty</td>
                    </tr>
                    <tr>
                        <td ng-class="{ success: newForm.name.$touched }">Touched</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="col-xs-3">
            <h3>Email</h3>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td ng-class="{ success: newForm.email.$valid, danger: newForm.email.$invalid }">Valid</td>
                    </tr>
                    <tr>
                        <td ng-class="{ success: newForm.email.$pristine, danger: !newForm.email.$pristine }">Pristine</td>
                    </tr>
                    <tr>
                        <td ng-class="{ success: newForm.email.$dirty }">Dirty</td>
                    </tr>
                    <tr>
                        <td ng-class="{ success: newForm.email.$touched }">Touched</td>
                    </tr>
                </tbody>
            </table>
        </div>


        <div class="col-xs-3">
            <h3>phone_number</h3>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td ng-class="{ success: newForm.phone_number.$valid, danger: newForm.phone_number.$invalid }">Valid</td>
                    </tr>
                    <tr>
                        <td ng-class="{ success: newForm.phone_number.$pristine, danger: !newForm.phone_number.$pristine }">Pristine</td>
                    </tr>
                    <tr>
                        <td ng-class="{ success: newForm.phone_number.$dirty }">Dirty</td>
                    </tr>
                    <tr>
                        <td ng-class="{ success: newForm.phone_number.$touched }">Touched</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
  </div>



  </div>
  </div>  
</body>
</html>