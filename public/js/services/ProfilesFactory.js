app.factory('profilesFactory', function($http){
	var profiles = [];

	return{
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