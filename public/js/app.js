var app = angular.module('Stajbul', ['ngRoute']);

app.config(function($routeProvider, $locationProvider){
	$routeProvider
	.when("/admin/profile",{
		templateUrl: '/templates/main.html',
		controller: 'ProfilesController'
	})
	.when('/password/email', {
    templateUrl: 'chapter.html',
    controller: 'ChapterController'
  })
  .when('/shop', {
        templateUrl: 'templates/shop.html', 
        controller: 'ShoppingController'
    });
  /*.otherwise({
      templateUrl: '/templates/main.html',
       controller: 'ProfilesController'          
  });  */      

   $locationProvider.html5Mode(true).hashPrefix('!');   

});