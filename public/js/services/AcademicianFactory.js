app.factory('academicianFactory', function ($http) {
    var academicians = [];
    var aktif_kullanici = [];

    return{
        get: function () {
            if (academicians.length == 0) {
                return $http.get('/academicians')
                        .success(function (response) {
                            return response;
                        });
            }
            return profiles;
        },
        add: function (options) {
            $http.post('/users', {first_name: options.first_name, last_name: options.last_name, username: options.username, display_name: options.display_name, email: options.email, website: options.website, add_academician: options.add_academician, password: options.password, group_id: options.group_id}).
                    success(function (data, status, headers, config) {
                        alert("veri eklenmiştir.");
                    }).
                    error(function (err) {
                        alert(err);
                    });
        },
        save: function (options) {
            $http.post('/academician', {user_id: options.aktif_kullanici_id, yetkili_adi: options.yetkili_adi, yetkili_pozisyonu: options.yetkili_pozisyonu, kurulus_yili: options.kurulus_yili, calisan_sayisi: options.calisan_sayisi, firma_adi: options.display_name, firma_bilgileri: options.firma_bilgileri, sehir: options.sehir, ilce: options.ilce, telefon: options.telefon, fax: options.fax, adress: options.adress}).
                    success(function (data, status, headers, config) {
                        alert("veri kaydedilmiştir");
                    }).
                    error(function (err) { //data, status, headers, config
                        alert(err);
                    });
        },
        get: function (id) {
            if (academicians.length == 0) {
                return $http.get('/userswithroles/' + id)
                        .success(function (response) {
                            return response;
                        });
            }
        },
        remove: function (id) {
            return $http.delete('/users/' + id)
                    .success(function (response) {
                        return response;
                    });
        },
    }
});

