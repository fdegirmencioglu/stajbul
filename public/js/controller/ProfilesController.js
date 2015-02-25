app.controller('ProfilesController', function($scope, profilesFactory){
	$scope.users = profilesFactory.get();

	profilesFactory.get_current_user().then(function(d) {
    	$scope.aktif_kullanici = d.data;
    	console.log( $scope.aktif_kullanici );
  	});

  	//angular.element(document.querySelector('.yourclass'))


 
});