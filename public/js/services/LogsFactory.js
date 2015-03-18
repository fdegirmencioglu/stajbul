app.factory('logsFactory', function($http){
	
	var logs = []; 

	return{  
		get: function(){
			if(logs.length == 0){
				 return $http.get('/logs')
					.success(function(response){ 
						return response;
					});
			} 
			//return logs;
		},
		add: function(options){
			var aktif_kullanici_id = angular.element(document.querySelector('#current_user_id')).val();

		  	$http.post('/logs', { process: options.process, user_id: aktif_kullanici_id }).
	 				success(function(data, status, headers, config){
	     		//alert("veri eklenmiştir.");
	  		}).
	   		error(function(err){
	     		//alert(err);
	  		});
		},
		remove: function(id){
			return $http.delete('/users/' + id)
				.success(function(response){
					return response;
			});
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