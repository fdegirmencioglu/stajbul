app.controller('LogsController', function($scope, $routeParams, logsFactory){
    
    /*$scope.id = ""; 
    $scope.user_id = ""; 
    $scope.username = ""; 
    $scope.role = "";
    $scope.group_id = "";
    $scope.ip_address = "";
    $scope.dateTime = "";
    $scope.process = "";*/
  
    logsFactory.get().then(function(d) {
      $scope.logs = d.data; 
    });


    /*logsFactory.get().then(function(d) {
        $scope.logs = d.data[0];
 

        /*$scope.id = $scope.logs.id; 
        $scope.user_id = $scope.logs.user_id; 
        $scope.username = $scope.logs.kullanici_adi;  
        $scope.group_id = $scope.logs.group_id;
        $scope.ip_address = $scope.logs.ip_address;
        $scope.dateTime = $scope.logs.tarih_saat;
        $scope.process = $scope.logs.yapilan_islem;*

    }); */  

});
            
            
            
            