//Modül = Stajbul, Bağımlılıkları ['ngRoute', 'angularFileUpload']);
var app = angular.module('Stajbul', ['ngRoute', 'angularFileUpload']);

app.config(function($routeProvider, $locationProvider){
  $routeProvider
  .when("/admin/profile",{
    templateUrl: '/templates/yonetici_guncelle.html',
    controller: 'ProfilesController'
  })
  .when("/admin/new",{
    templateUrl: '/templates/yonetici_ekle.html',
    controller: 'ManagersController'
  })
  .when("/admin/list",{
    templateUrl: '/templates/yonetici_listele.html',
    controller: 'ProfilesController'
  }); 
  /*.otherwise({
      templateUrl: '/'       
  }); */  
   $locationProvider.html5Mode(true).hashPrefix('!');   
});

//ÖRNEK KOD. SİLME!!!!!
/*app.controller('MyCtrl', ['$scope', '$upload', function ($scope, $upload) {}]);*/


