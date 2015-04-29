app.factory('managersFactory', function ($http) {

    var managers = [];
    var aktif_kullanici = [];

    return{
        //Kayıtlı kullanıcıyı bulmak için metod
        get_user: function (id) {
            //$http(ajax gibi çalışır) nesnesi üzerinden get işlemi gerçekleştirir. metod içierisindeki url işleme sokulur ve Laravel'de karşılık bulan metodu çalıştırır. 
            return $http.get('/users/' + id) //localhost:8000/users/1
                    .success(function (response) {
                        //Laravel üzerinden gelen cevabı geriye döndürür.
                        console.log("response");
                        console.log(response);

                        return response;
                    });
        },
        getGroups: function () {
            return $http.get('/groups') //localhost:8000/groups
                    .success(function (response) {
                        //Laravel üzerinden gelen cevabı geriye döndürür.     
                        console.log("response");
                        console.log(response);

                        return response;
                    });

        },
        kullanici_rol_degistir: function (options) {
            $http.post('admin/change_role', {user_id: options.id, group_id: options.grup_id, rol_degistir: options.rol_degistir}).
                    success(function (data, status, headers, config) {
                    }).
                    error(function (err) {
                        alert(err);
                    });
        },
        onaylanmamis_kullanici_listesi: function () {
            return $http.get('/admin/unapproved_user_list') //localhost:8000/admin/unapproved_user_list
                    .success(function (response) {
                        return response;
                    });
        },
        onaylanmis_kullanici_listesi: function () {
            return $http.get('/admin/approved_user_list') //localhost:8000/admin/approved_user_list
                    .success(function (response) {

                        console.log("response");
                        console.log(response);

                        return response;
                    });
        },
        kullaniciya_onay_ver: function (id) { //Kullanıcıya onay verir
            $http.post('admin/approve_user', {user_id: id}).
                    success(function (data, status, headers, config) {
                        //alert("Onay verilmiştir.");
                    }).
                    error(function (err) {
                        //alert(err);
                    });
        },
        onayi_geri_cek: function (id) { //Onayı geri çeker
            $http.post('/admin/unapprove_user', {user_id: id}). 
                    success(function (data, status, headers, config) {
                        //alert("Onay Geri Çekilmiştir.");
                    }).
                    error(function (err) {
                        //alert(err);
                    });

        },
        //Aktif kullanıcıyı bulmak için metod
        get_current_user: function () {
            //id'si current_user_id olan dom elementinin değerini Angular üzerinden çekip aktif_kullanıcı_id'ye atar. 
            var aktif_kullanici_id = angular.element(document.querySelector('#current_user_id')).val();

            //$http(ajax gibi çalışır) nesnesi üzerinden get işlemi gerçekleştirir. metod içierisindeki url işleme sokulur ve Laravel'de karşılık bulan metodu çalıştırır. 
            return $http.get('/users/' + aktif_kullanici_id) //localhost:8000/users/1
                    .success(function (response) {
                        //Laravel üzerinden gelen cevabı geriye döndürür.
                        return response;
                        //console.log(aktif_kullanici);
                        //return aktif_kullanici;
                    });
            //console.log(aktif_kullanici);
        },
        get: function () {
            if (managers.length == 0) {
                return $http.get('/userswithroles')
                        .success(function (response) {
                            return response;

                        });
            }

        },
        add: function (options) {
            $http.post('/users', {first_name: options.first_name, last_name: options.last_name, username: options.username, display_name: options.display_name, email: options.email, website: options.website, add_manager: options.add_manager, password: options.password, group_id: options.group_id}).
                    success(function (data, status, headers, config) {
                        alert("veri eklenmiştir.");
                    }).
                    error(function (err) {
                        alert(err);
                    });
        },
        remove: function (id) {
            return $http.delete('/users/' + id)
                    .success(function (response) {
                        return response;
                    });
        },
        save: function (options) {
            $http.put('/users/' + options.aktif_kullanici_id, {first_name: options.first_name, last_name: options.last_name, username: options.username, display_name: options.display_name, email: options.email, website: options.website}).
                    success(function (data, status, headers, config) {
                        alert("veri kaydedilmiştir");
                    }).
                    error(function (err) { //data, status, headers, config
                        alert(err);
                    });
        }
    }
});