
var Service = angular.module('services');

Service.factory('User1', function($http) {

  return {
    get : function() {
      return $http.get('api/v1/jokes');
    }


  };

});