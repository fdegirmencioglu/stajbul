app.factory('companyProfilesFactory', function ($http) {
    var profiles = [];
    var aktif_kullanici = [];
    var cities = [];
    return{
        get: function () {
            if (profiles.length == 0) {
                return $http.get('/company')
                        .success(function (response) {
                            return response;
                            /*for (var i=0; ii=response.length, i<ii; i++) {
                             console.log(response[i]);
                             profiles.push(response[i]);
                             };*/
                        });
            }
            return profiles;
        },
        getCities: function () {
            if (cities.length == 0) {
                return $http.get('/city')
                        .success(function (response) {
                            return response;
                            /*for (var i=0; ii=response.length, i<ii; i++) {
                             console.log(response[i]);
                             profiles.push(response[i]);
                             };*/
                        });
            }
            return cities;
        },
        //Aktif kullanıcının firmasını bulmak için metod
        get_current_company: function () {
            //id'si current_company_id olan dom elementinin değerini Angular üzerinden çekip aktif_kullanıcı_id'ye atar. 
            var aktif_kullanici_firma_id = angular.element(document.querySelector('#current_company_id')).val();

            /*console.log('aktif_kullanici_firma_id');    
             console.log(aktif_kullanici_firma_id);*/
            //$http(ajax gibi çalışır) nesnesi üzerinden get işlemi gerçekleştirir. metod içierisindeki url işleme sokulur ve Laravel'de karşılık bulan metodu çalıştırır. 
            return $http.get('/company/' + aktif_kullanici_firma_id) //localhost:8000/company/1
                    .success(function (response) {
                        //Laravel üzerinden gelen cevabı geriye döndürür.
                        /*console.log('response');    
                         console.log(response);*/
                        return response;
                        //console.log(aktif_kullanici);
                        //return aktif_kullanici;
                    });
            //console.log(aktif_kullanici);
        },
        current_company_city_id: function () {
            //id'si current_company_id olan dom elementinin değerini Angular üzerinden çekip aktif_kullanıcı_id'ye atar. 
            var aktif__firma_sehir_id = angular.element(document.querySelector('#current_company_city_id')).val();

            /* console.log('aktif__firma_sehir_id');    
             console.log(aktif__firma_sehir_id);
             console.log('yolu');
             console.log('/city/' + aktif__firma_sehir_id);*/
            //$http(ajax gibi çalışır) nesnesi üzerinden get işlemi gerçekleştirir. metod içierisindeki url işleme sokulur ve Laravel'de karşılık bulan metodu çalıştırır. 
            return $http.get('/city/' + aktif__firma_sehir_id) //localhost:8000/company/1            
                    .success(function (response) {
                        //Laravel üzerinden gelen cevabı geriye döndürür.
                        /*console.log('response');    
                         console.log(response);*/
                        return response;
                        //console.log(aktif_kullanici);
                        //return aktif_kullanici;
                    });
            //console.log(aktif_kullanici);
        },
        change_password: function (options) {
            $http.put('/users/' + options.aktif_kullanici_id, {change_password: options.change_password, password: options.password}).
                    success(function (data, status, headers, config) {
                        alert("şifre değiştirilmiştir");
                        var passModel = angular.element(document.querySelector('#passModal'));
                        passModel.foundation('reveal', 'close');

                    }).
                    error(function (err) { //data, status, headers, config
                        alert(err);
                    });
        },
        save: function (options) {
            $http.post('/company', {user_id: options.aktif_kullanici_id, yetkili_adi: options.yetkili_adi, yetkili_pozisyonu: options.yetkili_pozisyonu, kurulus_yili: options.kurulus_yili, calisan_sayisi: options.calisan_sayisi, firma_adi: options.display_name, firma_bilgileri: options.firma_bilgileri, sehir:options.sehir, ilce: options.ilce, telefon: options.telefon, fax: options.fax, adress: options.adress}).
                    success(function (data, status, headers, config) {
                        alert("veri kaydedilmiştir");
                    }).
                    error(function (err) { //data, status, headers, config
                        alert(err);
                    });
        }


    }

});

