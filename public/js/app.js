angular.module('user1App', [
]);

//angular.module('controllers', []);
//angular.module('services', []);





angular.module('user1App').controller('mainController', function($scope, $http, User1, $sce) {

$http.get('api/v1/jokes').success(function(data) { 

$scope.user1s = data; 

});


}