//Modül = Stajbul, Bağımlılıkları ['ngRoute', 'angularFileUpload']);
var app = angular.module('Stajbul', ['ngRoute', 'angularFileUpload', 'angularUtils.directives.dirPagination']);


app.config(function ($routeProvider, $locationProvider) {
    $routeProvider

            //templateUrl: '/templates/yonetici_listele.html',

            .when("/", {
                templateUrl: '/templates/anasayfa.html',
                controller: 'ProfilesController'
            })
            .when("/admin/profile", {
                templateUrl: '/templates/yonetici_guncelle.html',
                controller: 'ProfilesController'
            })
            .when("/manager/profile/:managerId", {
                templateUrl: '/templates/yonetici_guncelle.html',
                controller: 'ProfilesController'
            })
            .when("/company/profile/:companyId", {
                templateUrl: '/templates/firma_guncelle.html',
                controller: 'CompanyProfilesController'
            })
            .when("/admin/new", {
                templateUrl: '/templates/yonetici_ekle.html',
                controller: 'ManagersController'
            })
            .when("/admin/list", {
                templateUrl: '/templates/yonetici_listele.html',
                controller: 'ManagersController'
            })
            .when("/admin/waiting_confirmation", {
                templateUrl: '/templates/yonetici_onay_bekleyenler.html',
                controller: 'ManagersController'
            })
            .when("/admin/confirmed", {
                templateUrl: '/templates/yonetici_onaylananlar.html',
                controller: 'ManagersController'
            })
            .when("/admin/assign_role", {
                templateUrl: '/templates/yonetici_rol_ata.html',
                controller: 'ManagersController'
            })
            .when("/company/profile", {
                templateUrl: '/templates/firma_guncelle.html',
                controller: 'CompanyProfilesController'
            })
            .when("/company/new", {
                templateUrl: '/templates/firma_ekle.html',
                controller: 'CompanyProfilesController'
            })
            .when("/admin/log_list", {
                templateUrl: '/templates/log_listele.html',
                controller: 'LogsController'
            })
            .when("/student/new", {
                templateUrl: '/templates/ogrenci_ekle.html',
                controller: 'StudentsController'
            })
            .when("/academician/new", {
                templateUrl: '/templates/akademisyen_ekle.html',
                controller: 'AcademiciansController'
            })
            .when("/admin/academician_list", {
                templateUrl: '/templates/akademisyen_listele.html',
                controller: 'AcademiciansController'
            })
            .when("/admin/company_list", {
                templateUrl: '/templates/firma_listele.html',
                controller: 'CompanyProfilesController'
            })
            .when("/admin/student_list", {
                templateUrl: '/templates/ogrenci_listele.html',
                controller: 'StudentsController'
            })
            .when("/posts/new", {
                templateUrl: '/templates/yonetici_bildiri_ekle.html',
                controller: 'PostsController'
            })
            .when("/posts/:actiontype", {
                templateUrl: '/templates/gonderi_listele.html',
                controller: 'PostsController'
            })

            ;
    /*.otherwise({
     
     controller: 'ProfilesController'       
     });*/
    $locationProvider.html5Mode(true).hashPrefix('!');
});

//ÖRNEK KOD. SİLME!!!!!
/*app.controller('MyCtrl', ['$scope', '$upload', function ($scope, $upload) {}]);*/


