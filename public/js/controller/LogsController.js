	$scope.id = ""; 
	$scope.user_id = ""; 
    $scope.username = ""; 
    $scope.role = "";
    $scope.group_id = "";
    $scope.ip_address = "";
    $scope.dateTime = "";
    $scope.process = "";

    logsFactory.get().then(function(d) {
      $scope.logs = d.data;
    });
            
            
            
            