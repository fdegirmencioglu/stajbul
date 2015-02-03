app.controller("LoginController", function($scope, $http){

this.adi = "bertan";
this.modal_type = "";

$scope.username = '';

$scope.modalType = function(type){
  this.modal_type = type;
};

$scope.gonder = function(){
  //alert(this.modal_type);
  //alert( $scope.user.email );
  console.log(this.modal_type);
  console.log($scope.username);
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

