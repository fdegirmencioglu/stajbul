//Modül = Stajbul, Bağımlılıkları ['ngRoute', 'angularFileUpload']);
var app = angular.module('Stajbul', ['ngRoute', 'angularFileUpload']);


app.config(function($routeProvider, $locationProvider){
  $routeProvider

  //templateUrl: '/templates/yonetici_listele.html',

  .when("/",{
    templateUrl: '/templates/anasayfa.html',
    controller: 'ProfilesController'
  })
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
  })
  .when("/company/profile",{
    templateUrl: '/templates/firma_guncelle.html',
    controller: 'CompanyProfilesController'
  });
  /*.otherwise({

    controller: 'ProfilesController'       
  });*/  
   $locationProvider.html5Mode(true).hashPrefix('!');   
});

//ÖRNEK KOD. SİLME!!!!!
/*app.controller('MyCtrl', ['$scope', '$upload', function ($scope, $upload) {}]);*/


