app.controller('ManagersController', function ($scope, $routeParams, managersFactory, profilesFactory, logsFactory) {

    $scope.first_name = "";
    $scope.last_name = "";
    $scope.username = "";
    $scope.email = "";
    $scope.website = "";
    $scope.display_name = "";
    $scope.password = "";
    $scope.password_again = "";


    //Bütün grupları getir. Gruplar aynı zamanda rolleri işaret etmektedir.
    managersFactory.getGroups().then(function (d) {
        var groups = [];
        for (var i = 0; i < d.data.length; i++) {
            var identity = d.data[i].id;
            var name = d.data[i].name;
            if (name == "Managers") {
                groups.push({id: identity, name: "Yönetici"});
            } else if (name == "Academicians") {
                groups.push({id: identity, name: "Akademisyen"});
            } else if (name == "Companies") {
                groups.push({id: identity, name: "Firma"});
            } else if (name == "Students") {
                groups.push({id: identity, name: "Öğrenci"});
            }
        }
        ;
        $scope.groups = groups;
    });

    //Kişiler hangi gruptansa(rolde ise), sayfada, tablonun rol alanında göster 
    managersFactory.get().then(function (d) {
        $scope.managers = d.data;

    });

    $scope.kullanici_rol_degistir = function (kullanici, secilen_grup) {

        var options = {};
        options.id = kullanici.id;
        options.grup_id = secilen_grup.id;
        options.rol_degistir = true;

        managersFactory.kullanici_rol_degistir(options);
        //window.location.reload();
    }

    $scope.onay_ver = function (element) {
        managersFactory.kullaniciya_onay_ver(element.id);
        window.location.reload();
    }

    $scope.onayi_kaldir = function (element) {
        managersFactory.onayi_geri_cek(element.id);
        window.location.reload();
    }

    //Onaylanmamış Üyeler
    managersFactory.onaylanmamis_kullanici_listesi().then(function (d) {
        $scope.onaylanmamislar = d.data;
    });

    //Onaylanmış Üyeler
    managersFactory.onaylanmis_kullanici_listesi().then(function (d) {
        $scope.onaylanmislar = d.data;

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
        options.group_id = 1;

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

    $scope.edit_manager = function (edit_manager_id) {
        $scope.temp_yonetici = profilesFactory.get_user(edit_manager_id);

        $scope.first_name = $scope.temp_yonetici.first_name;
        $scope.last_name = $scope.temp_yonetici.last_name;
        $scope.username = $scope.temp_yonetici.username;
        $scope.email = $scope.temp_yonetici.email;
        $scope.website = $scope.temp_yonetici.website;
        $scope.display_name = $scope.temp_yonetici.display_name;
        $scope.yonetici_onayi = $scope.temp_yonetici.yonetici_onayi;

        console.log("$scope.temp_yonetici");
        console.log($scope.temp_yonetici);


    }

    //Yeni Log Ekle
    add_manager_log = function () {
        var options = {};
        options.process = "Yeni Yönetici Ekleme";
        logsFactory.add(options);
    }

});