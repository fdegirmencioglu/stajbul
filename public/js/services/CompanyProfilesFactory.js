app.factory('companyProfilesFactory', function ($http) {
    var profiles = [];
    var aktif_kullanici = [];
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
        //Aktif kullanıcının firmasını bulmak için metod
        get_current_company: function () {
            //id'si current_company_id olan dom elementinin değerini Angular üzerinden çekip aktif_kullanıcı_id'ye atar. 
            var aktif_kullanici_firma_id = angular.element(document.querySelector('#current_company_id')).val();

            console.log('aktif_kullanici_firma_id');    
            console.log(aktif_kullanici_firma_id);
            //$http(ajax gibi çalışır) nesnesi üzerinden get işlemi gerçekleştirir. metod içierisindeki url işleme sokulur ve Laravel'de karşılık bulan metodu çalıştırır. 
            return $http.get('/company/' + aktif_kullanici_firma_id) //localhost:8000/company/1
                    .success(function (response) {
                        //Laravel üzerinden gelen cevabı geriye döndürür.
                console.log('response');    
            console.log(response);
                        return response;
                        //console.log(aktif_kullanici);
                        //return aktif_kullanici;
                    });
            //console.log(aktif_kullanici);
        }
    }

});

