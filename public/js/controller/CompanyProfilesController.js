app.controller('CompanyProfilesController', function ($scope, $upload, companyProfilesFactory, profilesFactory, logsFactory) {

    $scope.auth_person = "";
    $scope.the_auth_to = "";
    $scope.year_of_establishment = "";
    $scope.number_of_employees = "";
    $scope.display_your_name = "";
    $scope.company_about_editor = "";
    $scope.city_name = "";
    $scope.county = "";
    $scope.phone_number = "";
    $scope.fax_number = "";
    $scope.address = "";
    $scope.email = "";
    $scope.web_site = "";


    companyProfilesFactory.get().then(function (obj) {
        $scope.company = obj.data;
        /*console.log('$scope.company3dmaster');
         console.log(obj.data);*/
    });
    companyProfilesFactory.getCities().then(function (d) {
        $scope.cities = d.data;
        /*console.log('$scope.cities');
         console.log($scope.cities);*/
    });

    companyProfilesFactory.get_current_company().then(function (obj) {
        $scope.aktif_kullanici = obj.data[0];
        $scope.auth_person = $scope.aktif_kullanici.yetkili_adi;
        $scope.the_auth_to = $scope.aktif_kullanici.yetkili_pozisyonu;
        $scope.year_of_establishment = $scope.aktif_kullanici.kurulus_yili;
        $scope.number_of_employees = $scope.aktif_kullanici.calisan_sayisi;
        $scope.display_your_name = $scope.aktif_kullanici.display_name;
        $scope.company_about_editor = $scope.aktif_kullanici.firma_bilgileri;
        $scope.county = $scope.aktif_kullanici.ilce;
        $scope.phone_number = $scope.aktif_kullanici.telefon;
        $scope.fax_number = $scope.aktif_kullanici.fax;
        $scope.address = $scope.aktif_kullanici.adress;
        $scope.email = $scope.aktif_kullanici.email;
        $scope.web_site = $scope.aktif_kullanici.website;


    });

    companyProfilesFactory.current_company_city_id().then(function (obj) {

        $scope.aktif_kullanici = obj.data[0];
        $scope.city_id = $scope.aktif_kullanici.sehir; //örn: 76
        $scope.city_name = $scope.aktif_kullanici.sehir_adi;


        /*console.log('$scope.cities[0]');
         console.log($scope.cities[0]);
         console.log("$scope.city_id");
         console.log($scope.city_id);
         console.log("$scope.city_name");
         console.log($scope.city_name);*/

        /*var values = $scope.cities;
         var log = [];
         var i=0;
         
         angular.forEach(values, function (value, key) {
         values = values[];
         this.push(key + ': ' + value );
         i++;
         }, log);
         console.log("log değeri");
         console.log(log);
         console.log("i değeri");
         console.log(i);*/

        $scope.options = [
            {label: $scope.cities[0].sehir_adi, value: $scope.cities[0].id},
            {label: $scope.cities[1].sehir_adi, value: $scope.cities[1].id},
            {label: $scope.cities[2].sehir_adi, value: $scope.cities[2].id},
            {label: $scope.cities[3].sehir_adi, value: $scope.cities[3].id},
            {label: $scope.cities[4].sehir_adi, value: $scope.cities[4].id},
            {label: $scope.cities[5].sehir_adi, value: $scope.cities[5].id},
            {label: $scope.cities[6].sehir_adi, value: $scope.cities[6].id},
            {label: $scope.cities[7].sehir_adi, value: $scope.cities[7].id},
            {label: $scope.cities[8].sehir_adi, value: $scope.cities[8].id},
            {label: $scope.cities[9].sehir_adi, value: $scope.cities[9].id},
            {label: $scope.cities[10].sehir_adi, value: $scope.cities[10].id},
            {label: $scope.cities[11].sehir_adi, value: $scope.cities[11].id},
            {label: $scope.cities[12].sehir_adi, value: $scope.cities[12].id},
            {label: $scope.cities[13].sehir_adi, value: $scope.cities[13].id},
            {label: $scope.cities[14].sehir_adi, value: $scope.cities[14].id},
            {label: $scope.cities[15].sehir_adi, value: $scope.cities[15].id},
            {label: $scope.cities[16].sehir_adi, value: $scope.cities[16].id},
            {label: $scope.cities[17].sehir_adi, value: $scope.cities[17].id},
            {label: $scope.cities[18].sehir_adi, value: $scope.cities[18].id},
            {label: $scope.cities[19].sehir_adi, value: $scope.cities[19].id},
            {label: $scope.cities[20].sehir_adi, value: $scope.cities[20].id},
            {label: $scope.cities[21].sehir_adi, value: $scope.cities[21].id},
            {label: $scope.cities[22].sehir_adi, value: $scope.cities[22].id},
            {label: $scope.cities[23].sehir_adi, value: $scope.cities[23].id},
            {label: $scope.cities[24].sehir_adi, value: $scope.cities[24].id},
            {label: $scope.cities[25].sehir_adi, value: $scope.cities[25].id},
            {label: $scope.cities[26].sehir_adi, value: $scope.cities[26].id},
            {label: $scope.cities[27].sehir_adi, value: $scope.cities[27].id},
            {label: $scope.cities[28].sehir_adi, value: $scope.cities[28].id},
            {label: $scope.cities[29].sehir_adi, value: $scope.cities[29].id},
            {label: $scope.cities[30].sehir_adi, value: $scope.cities[30].id},
            {label: $scope.cities[31].sehir_adi, value: $scope.cities[31].id},
            {label: $scope.cities[32].sehir_adi, value: $scope.cities[32].id},
            {label: $scope.cities[33].sehir_adi, value: $scope.cities[33].id},
            {label: $scope.cities[34].sehir_adi, value: $scope.cities[34].id},
            {label: $scope.cities[35].sehir_adi, value: $scope.cities[35].id},
            {label: $scope.cities[36].sehir_adi, value: $scope.cities[36].id},
            {label: $scope.cities[37].sehir_adi, value: $scope.cities[37].id},
            {label: $scope.cities[38].sehir_adi, value: $scope.cities[38].id},
            {label: $scope.cities[39].sehir_adi, value: $scope.cities[39].id},
            {label: $scope.cities[40].sehir_adi, value: $scope.cities[40].id},
            {label: $scope.cities[41].sehir_adi, value: $scope.cities[41].id},
            {label: $scope.cities[42].sehir_adi, value: $scope.cities[42].id},
            {label: $scope.cities[43].sehir_adi, value: $scope.cities[43].id},
            {label: $scope.cities[44].sehir_adi, value: $scope.cities[44].id},
            {label: $scope.cities[45].sehir_adi, value: $scope.cities[45].id},
            {label: $scope.cities[46].sehir_adi, value: $scope.cities[46].id},
            {label: $scope.cities[47].sehir_adi, value: $scope.cities[47].id},
            {label: $scope.cities[48].sehir_adi, value: $scope.cities[48].id},
            {label: $scope.cities[49].sehir_adi, value: $scope.cities[49].id},
            {label: $scope.cities[50].sehir_adi, value: $scope.cities[50].id},
            {label: $scope.cities[51].sehir_adi, value: $scope.cities[51].id},
            {label: $scope.cities[52].sehir_adi, value: $scope.cities[52].id},
            {label: $scope.cities[53].sehir_adi, value: $scope.cities[53].id},
            {label: $scope.cities[54].sehir_adi, value: $scope.cities[54].id},
            {label: $scope.cities[55].sehir_adi, value: $scope.cities[55].id},
            {label: $scope.cities[56].sehir_adi, value: $scope.cities[56].id},
            {label: $scope.cities[57].sehir_adi, value: $scope.cities[57].id},
            {label: $scope.cities[58].sehir_adi, value: $scope.cities[58].id},
            {label: $scope.cities[59].sehir_adi, value: $scope.cities[59].id},
            {label: $scope.cities[60].sehir_adi, value: $scope.cities[60].id},
            {label: $scope.cities[61].sehir_adi, value: $scope.cities[61].id},
            {label: $scope.cities[62].sehir_adi, value: $scope.cities[62].id},
            {label: $scope.cities[63].sehir_adi, value: $scope.cities[63].id},
            {label: $scope.cities[64].sehir_adi, value: $scope.cities[64].id},
            {label: $scope.cities[65].sehir_adi, value: $scope.cities[65].id},
            {label: $scope.cities[66].sehir_adi, value: $scope.cities[66].id},
            {label: $scope.cities[67].sehir_adi, value: $scope.cities[67].id},
            {label: $scope.cities[68].sehir_adi, value: $scope.cities[68].id},
            {label: $scope.cities[69].sehir_adi, value: $scope.cities[69].id},
            {label: $scope.cities[70].sehir_adi, value: $scope.cities[70].id},
            {label: $scope.cities[71].sehir_adi, value: $scope.cities[71].id},
            {label: $scope.cities[72].sehir_adi, value: $scope.cities[72].id},
            {label: $scope.cities[73].sehir_adi, value: $scope.cities[73].id},
            {label: $scope.cities[74].sehir_adi, value: $scope.cities[74].id},
            {label: $scope.cities[75].sehir_adi, value: $scope.cities[75].id},
            {label: $scope.cities[76].sehir_adi, value: $scope.cities[76].id},
            {label: $scope.cities[77].sehir_adi, value: $scope.cities[77].id},
            {label: $scope.cities[78].sehir_adi, value: $scope.cities[78].id},
            {label: $scope.cities[79].sehir_adi, value: $scope.cities[79].id},
            {label: $scope.cities[80].sehir_adi, value: $scope.cities[80].id},
            {label: $scope.cities[81].sehir_adi, value: $scope.cities[81].id}

        ];


        // Varsayılan Seçili Olarak Gözükecek Olan :)
        $scope.correctlySelected = $scope.options[$scope.city_id - 1];

    });




    $scope.logout = function () {
        profilesFactory.logout().then(function (d) {
            if (d.statusText == "OK") {
                $location.path('/');

                add_logout_log();
                //$location.reload();
                window.location.reload();
            }
        });
    }

    //Yeni Log Ekle
    add_logout_log = function () {
        var options = {};
        options.process = "Oturumun kapatıldı.";
        logsFactory.add(options);
    }

    $scope.open_model = function () {
        var passModel = angular.element(document.querySelector('#passModal'));
        passModel.foundation('reveal', 'open');
    }

    $scope.change_password = function () {
        var aktif_kullanici_id_ = angular.element(document.querySelector('#current_user_id')).val();
        var options = {};
        options.password = $scope.new_password;
        options.aktif_kullanici_id = aktif_kullanici_id_;
        options.change_password = true;

        companyProfilesFactory.change_password(options);
    }

    $scope.submit_me = function () {
        var options = {};
        var aktif_kullanici_firma_id = angular.element(document.querySelector('#current_company_id')).val();
        //Şu anda aktif olan kullanıcının kullanici_id'si
        var kullanici_id_ = angular.element(document.querySelector('#current_user_id')).val();


        options.yetkili_adi = $scope.auth_person;
        options.yetkili_pozisyonu = $scope.the_auth_to;
        options.kurulus_yili = $scope.year_of_establishment;
        options.calisan_sayisi = $scope.number_of_employees;
        options.display_name = $scope.display_your_name;
        options.firma_bilgileri = $scope.company_about_editor;
        options.sehir = $scope.correctlySelected.value;
        options.ilce = $scope.county;
        options.telefon = $scope.phone_number;
        options.fax = $scope.fax_number;
        options.adress = $scope.address;
        options.aktif_kullanici_id = kullanici_id_;
        options.aktif_firma_id = aktif_kullanici_firma_id;
        companyProfilesFactory.save(options);
        console.log("options");
        console.log(options);
    }

    profilesFactory.load_current_user_image().then(function (obj) {
        $scope.image = obj.data[0];
        //$scope.resim_yolu = $scope.image.resim_yolu;
        //console.log( "scope.image" );
        //console.log( $scope.image );

        if ($scope.image != undefined) {
            $scope.resim_adi = '/uploads/' + $scope.image.resim_adi;
        } else {
            $scope.resim_adi = '/images/default_us_photo.jpg';
        }
    });
});


