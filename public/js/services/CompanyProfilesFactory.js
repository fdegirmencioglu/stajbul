app.factory('profilesFactory', function ($http) {
    var profiles = [];
    var aktif_kullanici = [];
    return{
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
        }
    }

});

