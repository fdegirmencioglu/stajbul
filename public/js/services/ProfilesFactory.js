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

		},
		remove: function(){

		},
		save: function(){

		}
	}
});