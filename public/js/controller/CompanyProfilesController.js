app.controller('CompanyProfilesController', function ($scope, $upload, companyProfilesFactory, profilesFactory) {

    $scope.auth_person = "";
    $scope.the_auth_to = "";
    $scope.year_of_establishment = "";
    $scope.number_of_employees = "";
    $scope.display_your_name = "";
    $scope.company_about_editor = "";
    $scope.county = "";
    $scope.phone_number = "";
    $scope.fax_number = "";
    $scope.address = "";
    $scope.email = "";
    $scope.web_site = "";


    companyProfilesFactory.get().then(function (obj) {
        $scope.company = obj.data;
        console.log('$scope.company3dmaster');
        console.log(obj.data);
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


