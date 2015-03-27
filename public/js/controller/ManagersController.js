app.controller('ManagersController', function ($scope, $routeParams, managersFactory, logsFactory) {

    $scope.first_name = "";
    $scope.last_name = "";
    $scope.username = "";
    $scope.email = "";
    $scope.website = "";
    $scope.display_name = "";
    $scope.password = "";
    $scope.password_again = "";

    //$scope.onaylanmamis_kullanici_listesi = [];

    managersFactory.get().then(function (d) {
        $scope.managers = d.data;
    });


    $scope.onay_ver = function(element){
        managersFactory.kullaniciya_onay_ver(element.id);
        /*managersFactory.kullaniciya_onay_ver(element.id).then(function (d) {
            var sonuc = d.data;
        });*/

        window.location.reload();
    }

    $scope.onayi_kaldir = function(element){  
        managersFactory.onayi_geri_cek(element.id);
        /*managersFactory.onayi_geri_cek(element.id).then(function (d) {
            var sonuc = d.data;
        });*/
        window.location.reload();
    }

    //Onaylanmamış Üyeler
    managersFactory.onaylanmamis_kullanici_listesi().then(function (d) {
      //$scope.onaylanmamislar = d.data;

      $scope.onaylanmamislar = function() {
        $scope.onaylanmamislar = d.data;
      };

      console.log("$scope.onaylanmamislar");
      console.log($scope.onaylanmamislar);
    });




    //Onaylanmış Üyeler
    managersFactory.onaylanmis_kullanici_listesi().then(function (d) {
      $scope.onaylanmislar = d.data;
            console.log("$scope.onaylanmislar");
      console.log($scope.onaylanmislar);
    });

    $scope.delete_manager = function (id) {
        managersFactory.remove(id).then(function (d) {
            var sonuc = d.data;
        });
        window.location.reload();
    }

    //Yeni Yönetici Ekle
    $scope.add_new_manager = function () {
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
    add_manager_log = function () {
        var options = {};
        options.process = "Yeni Yönetici Ekleme";
        logsFactory.add(options);
    }

});