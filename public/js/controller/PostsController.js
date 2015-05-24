app.controller('PostsController', function ($scope, $upload, postsFactory, logsFactory, $routeParams) {

    var selectedUsr = {};

    if($routeParams.actiontype == "notifications"){
        $scope.tipi = "Bildiri ";
        postsFactory.get_notifications().then(function (d) {

            
            var posts = [];
            for (var i = 0; i < d.data.length; i++) {
                var id = d.data[i].id;
                var baslik = d.data[i].baslik;
                var icerik = d.data[i].icerik;
                var okundu = d.data[i].okundu;

                 gonderen_email ="";
                 postsFactory.get_gonderen_user(d.data[i].gonderen_user_id).then(function (d) {
                     gonderen_email = d.data;

                     posts.push({id: id, baslik: baslik, icerik: icerik, gonderen_kisi: gonderen_email, okundu: okundu });
                });

                
            };
            $scope.posts = posts;

        });        
    }else{
        $scope.tipi = "Mesaj ";
        //Mesaj gönderilecek kullanıcıları getir
        postsFactory.get_users().then(function (d) {

            var users = [];
            
            for (var i = 0; i < d.data.length; i++) {

                var identity = d.data[i].id;
                var email = d.data[i].email;

                users.push({id: identity, email: email });
            };

            $scope.users = users;
        });
        //Mesajları getir
        postsFactory.get_messages().then(function (d) {
            
            /*
            alici_group_id: "0"
            alici_user_id: "3"
            baslik: "Mesaj"
            created_at: "2015-05-24 06:36:20"
            gonderen_user_id: "5"
            icerik: "Mesaj İçerik"
            id: "1"
            okundu: "0"
            silindi: "0"
            tipi: "0"
            updated_at: "2015-05-24 06:36:20"
            */
            var posts = [];
            for (var i = 0; i < d.data.length; i++) {
                var id = d.data[i].id;
                var baslik = d.data[i].baslik;
                var icerik = d.data[i].icerik;
                var okundu = d.data[i].okundu;

                 gonderen_email ="";
                 postsFactory.get_gonderen_user(d.data[i].gonderen_user_id).then(function (d) {
                     gonderen_email = d.data;

                     posts.push({id: id, baslik: baslik, icerik: icerik, gonderen_kisi: gonderen_email, okundu: okundu });
                });

                
            };
            $scope.posts = posts;
        }); 
    }

     $scope.change = function(user){
        selectedUsr = user;
     }


     $scope.change_post_status = function(postId, postOkundu){
        
        var post_kundu = 0;

        if(postOkundu == 0){
            post_kundu = 1;
        }else{
            post_kundu = 0;
        }
        
        postsFactory.change_post_status(postId, post_kundu);
     }

    function replacer(key, value) {
        if (typeof value === "string") {
            return undefined;
        }
        return value;
    }


    //Yeni Post Ekle
    $scope.add_new_post = function (gonderi_tipi) {
        
        var aktif_kullanici_id = angular.element(document.querySelector('#current_user_id')).val();
        console.log("aktif_kullanici_id");
        console.log(aktif_kullanici_id);
        
        var e = document.getElementById("grup_secimi");
        var groupId = e.options[e.selectedIndex].value;

        var suser = JSON.stringify(selectedUsr);
        var selectedUserId = JSON.parse(suser).id;
        console.log(selectedUserId);


        var options = {};
        options.baslik = $scope.baslik;
        options.icerik = $scope.icerik;
        options.gonderen_user_id = aktif_kullanici_id;
        options.okundu = false;

        //tipi, gonderi_tipi Mesaj ise 0, Bildiri ise 1
        if(gonderi_tipi == "Mesaj "){
            options.tipi = 0;
            options.alici_user_id = selectedUserId;
            options.alici_group_id = 0;
        }else{ //Bildir
            options.tipi = 1;
            options.alici_group_id = groupId;   
            options.alici_user_id = -1; 
        }
        
        postsFactory.add(options);

        add_post_log();

        options = {};

        alert("mesajınız ulaştırılmıştır");

        $('#addNewPostModal').foundation('reveal','close');
    }


    $scope.delete_post = function (id) {
        postsFactory.remove(id).then(function (d) {
            var sonuc = d.data;
        });
        window.location.reload();
    }


    //Yeni Log Ekle
    add_post_log = function () {
        var options = {};
        options.process = "Yeni Post Ekleme";
        logsFactory.add(options);
    }

});
