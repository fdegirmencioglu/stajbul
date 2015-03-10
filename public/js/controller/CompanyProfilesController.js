app.controller('CompanyProfilesController', function($scope, $upload, profilesFactory){
    
    
    profilesFactory.load_current_user_image().then(function (d) {
      $scope.image = d.data[0];
      //$scope.resim_yolu = $scope.image.resim_yolu;
      //console.log( "scope.image" );
      //console.log( $scope.image );

      if( $scope.image != undefined){
        $scope.resim_adi = '/uploads/' + $scope.image.resim_adi;  
      }else{
        $scope.resim_adi = '/images/default_us_photo.jpg';       
      }
    });
});


