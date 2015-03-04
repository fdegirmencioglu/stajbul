app.controller('ManagersController', function($scope, profilesFactory){
	
	  $scope.first_name = "";
    $scope.last_name = ""; 
    $scope.username = ""; 
    $scope.email = "";
    $scope.website = "";
    $scope.display_name = "";

   //Yeni Yönetici Ekle
   $scope.add_new_manager = function(){
      var options = {};
      options.first_name = $scope.first_name;
      options.last_name = $scope.last_name;
      options.username = $scope.username;
      options.display_name = $scope.display_name;
      options.email = $scope.email;
      options.website = $scope.website;
      options.password = $scope.password;
      options.add_manager = true;

      profilesFactory.add(options); 
   }
 
});