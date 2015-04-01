app.controller('ManagersController', function ($scope, $routeParams, managersFactory, logsFactory) {

    $scope.first_name = "";
    $scope.last_name = "";
    $scope.username = "";
    $scope.email = "";
    $scope.website = "";
    $scope.display_name = "";
    $scope.password = "";
    $scope.password_again = "";
    //$scope.selectedGroup = ""

    //$scope.onaylanmamis_kullanici_listesi = [];

    managersFactory.get().then(function (d) {
        $scope.managers = d.data;
    });

    managersFactory.getGroups().then(function (d) {
        //$scope.groups = d.data;
        var groups = [];
        for (var i = 0; i < d.data.length; i++) {

            var identity = d.data[i].id;
            var name = d.data[i].name;

            if(name == "Managers"){
                groups.push({ id: identity, name: "Yönetici"});    
            }else if(name == "Academicians"){
                groups.push({ id: identity, name: "Akademisyen"});
            }else if(name == "Companies"){
                groups.push({ id: identity, name: "Firma"});
            }else if(name == "Students"){
                groups.push({ id: identity, name: "Öğrenci"});
            } 
        };

        console.log("groups");
        console.log(groups);

         $scope.groups = groups;

    });

    $scope.kullanici_rol_degistir = function(kullanici){

        console.log("kullanici");
        console.log(kullanici);

        console.log("scope.selectedGroup");
        console.log($scope.selectedGroup);

        //group_id: "1" id: "3"  permissions: null  user_id: "3"

        /*var options = {};
        options.first_name = $scope.first_name;
        options.last_name = $scope.last_name;
        options.username = $scope.username;
        options.display_name = $scope.display_name;
        options.email = $scope.email;
        options.website = $scope.website;
        options.password = $scope.password;
        options.add_manager = true;*/

        //managersFactory.rol_degistir(element.id);
        //window.location.reload();
    }

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
        $scope.onaylanmamislar = d.data;
        console.log("$scope.onaylanmamislar");
        console.log($scope.onaylanmamislar);
    });




    //Onaylanmış Üyeler
    managersFactory.onaylanmis_kullanici_listesi().then(function (d) {
      $scope.onaylanmislar = d.data;
      console.log("$scope.onaylanmislar hop hops");
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