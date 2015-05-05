app.controller('AcademiciansController', function ($scope, $upload, academicianFactory, logsFactory) {

    var groupID = 2;
    
    
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
    
    //Kişiler hangi gruptansa(rolde ise), sayfada, tablonun rol alanında göster 
    academicianFactory.get(groupID).then(function (d) {
        $scope.academics = d.data;
        //console.log(" academicianFactory.get(groupID) $scope.academics ");
        //console.log($scope.academics);

    });
    
    $scope.delete_academician = function (id) {
        academicianFactory.remove(id).then(function (d) {
            var sonuc = d.data;
        });
        window.location.reload();
    }


    //Yeni Log Ekle
    add_academician_log = function () {
        var options = {};
        options.process = "Yeni Akademisyen Ekleme";
        logsFactory.add(options);
    }

});
