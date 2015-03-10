app.factory('managersFactory', function($http){
	
	var managers = [];
	var aktif_kullanici = [];

	return{ 
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
			if(managers.length == 0){
				 return $http.get('/managers')
					.success(function(response){

						//console.log( response );

						return response;
						/*for (var i=0; ii=response.length, i<ii; i++) {
							managers.push(response[i]);
							//console.log(response[i]);
						};*/
					});
			}

			//return managers;
		},
		add: function(options){
	  	$http.post('/users', { first_name: options.first_name, last_name: options.last_name, username: options.username, display_name: options.display_name, email: options.email, website: options.website, add_manager: options.add_manager, password: options.password }).
 				success(function(data, status, headers, config){
     		alert("veri eklenmiştir.");
  		}).
   		error(function(err){
     		alert(err);
  		});
		},
		remove: function(){

		},
		save: function(options){
			$http.put('/users/' + options.aktif_kullanici_id , { first_name: options.first_name, last_name: options.last_name, username: options.username, display_name: options.display_name, email: options.email, website: options.website }).
				success(function(data, status, headers, config){
	     		alert("veri kaydedilmiştir");
	  		}).
	   		error(function(err){ //data, status, headers, config
	     		alert(err);
	  		});
		}
	}
});