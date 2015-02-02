app.controller("LoginController", function($scope, $http){

this.adi = "bertan";
this.type = "";
$scope.openModal = function(type){
  this.type = type;
  //alert(type);
};

$scope.gonder = function(user){
  alert(this.type);
  alert( user.email );
};
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

