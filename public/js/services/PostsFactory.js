app.factory('postsFactory', function ($http) {
    var posts = [];
    var aktif_kullanici = [];

    return{
        get: function () {
            if (posts.length == 0) {
                return $http.get('/posts')
                        .success(function (response) {
                            return response;
                        });
            }
            return profiles;
        },
        add: function (options) {

            $http.post('/posts', {baslik: options.baslik, icerik: options.icerik, tipi: options.tipi, gonderen_user_id: options.gonderen_user_id, alici_user_id: options.alici_user_id, alici_group_id: options.alici_group_id, okundu: false }).
                    success(function (data, status, headers, config) {
                        alert("veri eklenmiştir.");
                    }).
                    error(function (err) {
                        alert(err);
                    });
        },

        change_post_status: function (postId, postOkundu) {

            $http.post('/change_posts_status', {id: postId, okundu: postOkundu }).
                    success(function (data, status, headers, config) {
                        alert("veri güncellenmiştir.");
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
        get_messages: function (tipi) { //post tipi(mesaj ya da bildiri)
            if (posts.length == 0) {
                return $http.get('/usersposts/messages')
                        .success(function (response) {
                            return response;
                        });
            }
        },
        get_notifications: function (tipi) { //post tipi(mesaj ya da bildiri)
            if (posts.length == 0) {
                return $http.get('/usersposts/notifications')
                        .success(function (response) {
                            return response;
                        });
            }
        },
        get_user: function (id) { //post tipi(mesaj ya da bildiri)
            return $http.get('/user_info/' + id)
                    .success(function (response) {
                        return response;
            });
           
        },
        get_users: function () { //mesaj gönderilecek kullanıcıların listesi
            return $http.get('/get_users_for_post')
                    .success(function (response) {
                        return response;
                    });
        },
        get_gonderen_user: function (user_id) { //mesaj gönderen kişiyi getir
            return $http.get('/who_posted/' + user_id)
                    .success(function (response) {
                        return response;
                    });
        },
        getUserUnreadNotificationsLenght: function () { //mesaj gönderen kişiyi getir
            return $http.get('/unread_notifications')
                    .success(function (response) {
                        return response;
                    });
        },
        getUserUnreadMessagesLenght: function () { //mesaj gönderen kişiyi getir
            return $http.get('/unread_messages')
                    .success(function (response) {
                        return response;
                    });
        },


        remove: function (id) {
            return $http.delete('/users/' + id)
                    .success(function (response) {
                        return response;
                    });
        },
    }
});

