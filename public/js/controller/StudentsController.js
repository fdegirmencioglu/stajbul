app.controller('StudentsController', function ($scope, $upload, studentFactory, logsFactory) {
  
    //Bütün öğrencileri getir
    /*studentFactory.get().then(function (obj) {
        $scope.students = obj.data;
    });*/

        //Yeni Firma Ekle
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
    }


    //Yeni Log Ekle
    add_student_log = function () {
        var options = {};
        options.process = "Yeni Öğrenci Ekleme";
        logsFactory.add(options);
    }

});
