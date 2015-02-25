var app = angular.module('Stajbul', ['ngRoute']);

app.config(function($routeProvider, $locationProvider){
	$routeProvider
	.when("/admin/profile",{
		templateUrl: '/templates/yonetici_guncelle.html',
		controller: 'ProfilesController'
	})
	.when("/admin/new",{
		templateUrl: '/templates/yonetici_ekle.html',
		controller: 'ProfilesController'
	});
 
  /*.otherwise({
      templateUrl: '/'       
  }); */ 

   $locationProvider.html5Mode(true).hashPrefix('!');   

});