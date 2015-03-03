app.controller('ProfilesController', function($scope, $upload, profilesFactory){
	  $scope.users = profilesFactory.get();

	  $scope.first_name = "";
    $scope.last_name = ""; 
    $scope.kullanici_adi = ""; 

	  profilesFactory.get_current_user().then(function(d) {
    $scope.aktif_kullanici = d.data;

    	$scope.first_name = $scope.aktif_kullanici.first_name;
    	$scope.last_name = $scope.aktif_kullanici.last_name; 
    	//$scope.kullanici_adi = $scope.aktif_kullanici.kullanici_adi;

    	
  	});

  	//angular.element(document.querySelector('.yourclass'))
  	$scope.$watch('files', function () {
        $scope.upload($scope.files);
    });

  	//Profil sayfasında, Resim Ekle butonundan resim seçildikten sonra burası çalışıyor
    $scope.upload = function (files) {
        if (files && files.length) {
            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                $upload.http({
                    url: 'upload/url',
                    fields: {'username': $scope.username},
                    file: file,
                    data: {file: file, name : 'bertan'},
                    fileFormDataName: 'name'
                }).progress(function (evt) {
                    var progressPercentage = parseInt(100.0 * evt.loaded / evt.total);
                    console.log('progress: ' + progressPercentage + '% ' + evt.config.file.name);
                }).success(function (data, status, headers, config) {
                    console.log('file ' + config.file.name + 'uploaded. Response: ' + data);
                });
            }
        }
    };


   $scope.submit = function(){
    	var aktif_kullanici_id_ = angular.element(document.querySelector('#current_user_id')).val();
    	
    	options = {};
    	options.adi = $scope.adi;
    	options.soyadi = $scope.soyadi;
    	options.kullanici_adi = $scope.kullanici_adi;
			options.aktif_kullanici_id = aktif_kullanici_id_;

      profilesFactory.save(options);           
   }
 
});