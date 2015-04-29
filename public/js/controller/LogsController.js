app.controller('LogsController', function($scope, $routeParams, logsFactory){
    
  
    logsFactory.get().then(function(d) {
      $scope.logs = d.data; 
    });

});
            
            
            
            