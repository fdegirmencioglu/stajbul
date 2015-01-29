var app = angular.module("myApp", []);

app.controller("appController", function($http){

	// Simple GET request example :
$http.get('http://localhost:8000/data.json').
  success(function(data, status, headers, config) {
    // this callback will be called asynchronously
    // when the response is available
    //this.people = data;
    console.log(data);
  }).
  error(function(data, status, headers, config) {
    // called asynchronously if an error occurs
    // or server returns response with an error status.
  });

});
