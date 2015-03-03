app.factory('profilesFactory', function($http){
	var profiles = [];
	var aktif_kullanici = [];

	return{ 

		getHello:function(){
			return "hello";
		},
		//Aktif kullanıcıyı bulmak için metod
		get_current_user: function(){ 
			//id'si current_user_id olan dom elementinin değerini Angular üzerinden çekip aktif_kullanıcı_id'ye atar. 
			var aktif_kullanici_id = angular.element(document.querySelector('#current_user_id')).val();

			//$http(ajax gibi çalışır) nesnesi üzerinden get işlemi gerçekleştirir. metod içierisindeki url işleme sokulur ve Laravel'de karşılık bulan metodu çalıştırır. 
		   return $http.get('/users/'+ aktif_kullanici_id) //localhost:8000/users/1
				.success(function(response){  
					//Laravel üzerinden gelen cevabı geriye döndürür.
					return response; 
					//console.log(aktif_kullanici);
					//return aktif_kullanici;
			}); 
				//console.log(aktif_kullanici);
		},
		get: function(){
			if(profiles.length == 0){
				$http.get('/users')
					.success(function(response){
						for (var i=0; ii=response.length, i<ii; i++) {
							profiles.push(response[i]);
						};
					});
			}
			return profiles;
		},
		add: function(){
	  	$http.post('http://localhost:8000/users', { email: $scope.username }).
 				success(function(data, status, headers, config){
     		alert("success data");
  		}).
   		error(function(err){
     		alert(err);
  		});
		},
		remove: function(){

		},
		save: function(options){
	      console.log( options.adi );
	      console.log( options.soyadi ); 
	      console.log( options.kullanici_adi );
	      console.log( options.aktif_kullanici_id );
      

			$http.put('/users/' + options.aktif_kullanici_id , { adi: options.adi, soyadi: options.soyadi, kullanici_adi: options.kullanici_adi }).
				success(function(data, status, headers, config){
	     		alert("saved");
	  		}).
	   		error(function(err){ //data, status, headers, config
	     		alert(err);
	  		});
		}
	}
});