app.controller('ManagersController', function($scope, $routeParams, managersFactory, logsFactory){
	
	  $scope.first_name = "";
    $scope.last_name = ""; 
    $scope.username = ""; 
    $scope.email = "";
    $scope.website = "";
    $scope.display_name = "";
    $scope.password = "";
    $scope.password_again = "";

    managersFactory.get().then(function(d) {
      $scope.managers = d.data;
    });

    $scope.delete_manager = function(id){
      managersFactory.remove(id).then(function(d) {
        var sonuc = d.data;
      }); 
      window.location.reload();
    }



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

      managersFactory.add(options); 

      add_manager_log();


    $scope.first_name = "";
    $scope.last_name = ""; 
    $scope.username = ""; 
    $scope.email = "";
    $scope.website = "";
    $scope.display_name = "";
    $scope.password = "";
    $scope.password_again = "";

   }
 
   //Yeni Log Ekle
   add_manager_log = function(){
      var options = {}; 
      options.process = "Yeni Yönetici Ekleme"; 
      logsFactory.add(options);  
   }
 
});