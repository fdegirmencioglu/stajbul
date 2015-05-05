app.controller('StudentsController', function ($scope, $upload, studentFactory, logsFactory) {

    var groupID = 4;

    //Yeni Öğrenci Ekle
    $scope.add_new_student = function () {
        var options = {};
        options.first_name = $scope.first_name;
        options.last_name = $scope.last_name;
        options.username = $scope.username;
        options.display_name = $scope.display_name;
        options.email = $scope.email;
        options.website = $scope.website;
        options.password = $scope.password;
        options.group_id = 4;
        options.add_student = true;

        studentFactory.add(options);

        add_student_log();

        $scope.first_name = "";
        $scope.last_name = "";
        $scope.username = "";
        $scope.email = "";
        $scope.website = "";
        $scope.display_name = "";
        $scope.password = "";
        $scope.password_again = "";
    };
    
    //Kişiler hangi gruptansa(rolde ise), sayfada, tablonun rol alanında göster 
    studentFactory.get(groupID).then(function (d) {
        $scope.students = d.data;
        console.log(" studentFactory.get(groupID) $scope.students ");
        console.log($scope.students);

    });
    
     $scope.delete_student = function (id) {
        studentFactory.remove(id).then(function (d) {
            var sonuc = d.data;
        });
        window.location.reload();
    }


    //Yeni Log Ekle
    add_student_log = function () {
        var options = {};
        options.process = "Yeni Öğrenci Ekleme";
        logsFactory.add(options);
    };

});
