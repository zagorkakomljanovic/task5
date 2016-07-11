var Controller = angular.module('controllers');

//Controller.controller('mainController', function($scope, $http, User1, $sce) {
  // object to hold all the data for the new comment form
  //$scope.user1Data = {};

  // loading variable to show the spinning loading icon
 // $scope.loading = true;
  
  // get all the comments first and bind it to the $scope.comments object
/*  User1.get()
    .success(function(data) {
      $scope.user1s = data;
      alert(JSON.stringify($scope.user1s));
    });*/


  // function to handle submitting the form


  

//});


Controller.controller('mainController', function($scope, $http, User1, $sce) {

$http.get('api/v1/jokes').success(function(data) { 

$scope.user1s = data; 

});


}