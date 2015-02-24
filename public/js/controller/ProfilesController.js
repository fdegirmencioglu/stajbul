app.controller('ProfilesController', function($scope, $http, profilesFactory){
	$scope.users = profilesFactory.get();

	console.log( $scope.users );
});