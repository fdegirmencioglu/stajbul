app.controller("LoginController", function($scope, $http){

this.adi = "ferhat";
this.modal_type = ""; 
$scope.username = '';
 
$scope.modalType = function(type){
  this.modal_type = type;  
};

$scope.giris = function(){
  console.log( $scope.email );
  console.log( $scope.password );

  //return false;
}

$scope.gonder = function(){
  //alert(this.modal_type);
  //alert( $scope.user.email );
  console.log(this.modal_type);
  console.log($scope.username);
  if($scope.username != undefined){
    //sunucuya post et
    $http.post('http://localhost:8000/password/remind', { email: $scope.username }).
    success(function(data, status, headers, config){
      //alert("success data");
    }).
    error(function(data, status, headers, config){
      //alert("error data");
    });
  } 
};

// Simple GET request example :
/*$http.get('http://localhost:8000/data.json').
  success(function(data, status, headers, config) {
    // this callback will be called asynchronously
    // when the response is available
    //this.people = data;
    console.log(data);
  }).
  error(function(data, status, headers, config) {
    // called asynchronously if an error occurs
    // or server returns response with an error status.
  });*/

});

