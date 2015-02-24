var app = angular.module('Stajbul', ['ngRoute']);

app.config(function($routeProvider, $locationProvider){
	$routeProvider
	.when("/admin/profile",{
		templateUrl: '/templates/main.html',
		controller: 'ProfilesController'
	})
  .otherwise({
      templateUrl: '/templates/main.html',
       controller: 'ProfilesController'          
  });  

   $locationProvider.html5Mode(true).hashPrefix('!');   

});