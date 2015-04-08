app.controller('AcademiciansController', function ($scope, $upload, academicianFactory, logsFactory) {
 
    //Bütün akademisyenleri getir
    /*academicianFactory.get().then(function (obj) {
        $scope.academicians = obj.data;
    });*/

    //Yeni Akademisyen Ekle
    $scope.add_new_academician = function () {
        var options = {};
        options.first_name = $scope.first_name;
        options.last_name = $scope.last_name;
        options.username = $scope.username;
        options.display_name = $scope.display_name;
        options.email = $scope.email;
        options.website = $scope.website;
        options.password = $scope.password;
        options.group_id = 2;

        options.add_academician = true;

        academicianFactory.add(options);

        add_academician_log();
 
        $scope.first_name = "";
        $scope.last_name = "";
        $scope.username = "";
        $scope.email = "";
        $scope.website = "";
        $scope.display_name = "";
        $scope.password = "";
        $scope.password_again = ""; 
    }


    //Yeni Log Ekle
    add_academician_log = function () {
        var options = {};
        options.process = "Yeni Akademisyen Ekleme";
        logsFactory.add(options);
    }

});
