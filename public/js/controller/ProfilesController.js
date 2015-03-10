app.controller('ProfilesController', function ($scope, $upload, $location, profilesFactory) {
    $scope.users = profilesFactory.get();

    $scope.first_name = "";
    $scope.last_name = "";
    $scope.username = "";
    $scope.email = "";
    $scope.website = "";
    $scope.display_name = "";
    $scope.new_password = "";

    profilesFactory.get_current_user().then(function (d) {
        $scope.aktif_kullanici = d.data;
        $scope.first_name = $scope.aktif_kullanici.first_name;
        $scope.last_name = $scope.aktif_kullanici.last_name;
        $scope.username = $scope.aktif_kullanici.username;
        $scope.email = $scope.aktif_kullanici.email;
        $scope.website = $scope.aktif_kullanici.website;
        $scope.display_name = $scope.aktif_kullanici.display_name;
    });

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

    $scope.logout = function(){
      profilesFactory.logout().then(function(d) {
        if( d.statusText =="OK"){
          $location.path('/');
          //$location.reload();
          window.location.reload();
        }
      });
    }
 
    $scope.open_model = function () {
        var passModel = angular.element(document.querySelector('#passModal'));

        passModel.foundation('reveal', 'open');
    }

    //Profil sayfasında, Resim Ekle butonundan resim seçildikten sonra burası çalışıyor
    /*$scope.upload = function (files) {
     var aktif_kullanici_id_ = angular.element(document.querySelector('#current_user_id')).val();
     
     if (files && files.length) {
     for (var i = 0; i < files.length; i++) {
     var file = files[i];
     $upload.http({
     url: 'upload/url/' + aktif_kullanici_id_,
     fields: {'username': $scope.username},
     file: file,
     data: {file: file, name : 'stajbul'},
     fileFormDataName: 'name'
     }).progress(function (evt) {
     var progressPercentage = parseInt(100.0 * evt.loaded / evt.total);
     console.log('progress: ' + progressPercentage + '% ' + evt.config.file.name);
     }).success(function (data, status, headers, config) {
     console.log('file ' + config.file.name + 'uploaded. Response: ' + data);
     });
     }
     }
     };*/


    $scope.submit_me = function () {
        var aktif_kullanici_id_ = angular.element(document.querySelector('#current_user_id')).val();

        var options = {};
        options.first_name = $scope.first_name;
        options.last_name = $scope.last_name;
        options.username = $scope.username;
        options.display_name = $scope.display_name;
        options.email = $scope.email;
        options.website = $scope.website;
        options.aktif_kullanici_id = aktif_kullanici_id_;
        profilesFactory.save(options);
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

        profilesFactory.add(options);
    }

    $scope.change_password = function () {
        var aktif_kullanici_id_ = angular.element(document.querySelector('#current_user_id')).val();
        var options = {};
        options.password = $scope.new_password;
        options.aktif_kullanici_id = aktif_kullanici_id_;
        options.change_password = true;

        profilesFactory.change_password(options);
    }

});