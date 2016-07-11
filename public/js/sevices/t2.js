
var Service = angular.module('services');

Service.factory('User1', function($http) {

  return {
    get : function() {
      return $http.get('api/v1/jokes');
    },


    save : function(user1Data) {
      return $http({
        method: 'POST',
        url: 'api/v1/jokes',
        type: 'JSON',
        dataType: 'JSON',
        data: JSON.stringify(user1Data)
      });
    }


  };

});