app.controller('CompanyProfilesController', function ($scope, $upload, companyProfilesFactory, profilesFactory) {

    $scope.auth_first_name = "";
    $scope.auth_position = "";


    companyProfilesFactory.get().then(function (obj) {
        $scope.company = obj.data;
        console.log('$scope.company3dmaster');
        console.log(obj.data);
    });
    
    companyProfilesFactory.get_current_company().then(function (obj) {
        $scope.aktif_kullanici = obj.data;
        $scope.auth_first_name = $scope.aktif_kullanici.yetkili_adi;
        $scope.uth_position = $scope.aktif_kullanici.yetkili_pozisyonu;

        console.log('$scope.aktif_kullanici');
        console.log($scope.aktif_kullanici);
        
        console.log('$scope.aktif_kullanici.yetkili_adi');
        console.log($scope.aktif_kullanici.yetkili_adi);
        
        console.log('$scope.auth_first_name');
        console.log($scope.auth_first_name);
        
        console.log('$scope.uth_position');
        console.log($scope.uth_position);
        
        
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


