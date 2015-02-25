app.factory('profilesFactory', function($http){
	var profiles = [];
	var aktif_kullanici = [];

	return{ 

		getHello:function(){
			return "hello";
		},
		get_current_user: function(){ 
			var aktif_kullanici_id = angular.element(document.querySelector('#current_user_id')).val(); 
		   return $http.get('/users/'+ aktif_kullanici_id)
				.success(function(response){  
					//console.log(response);
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
		save: function(){
			$http.post('/users', { email: $scope.username }).
				success(function(data, status, headers, config){
	     		alert("saved");
	  		}).
	   		error(function(err){ //data, status, headers, config
	     		alert(err);
	  		});
		}
	}
});