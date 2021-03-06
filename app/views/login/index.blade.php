@extends('login_master')

@section('content')
<div class="row" ng-controller="LoginController as loginCntrl">

    <div class="large-12 columns">
        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            <form class="login-form" action="{{ action('SessionsController@store') }}" method="post">
                <h3 class="form-title">Oturumu Aç</h3>

                
                @foreach($errors->all() as $error)
                  <div data-alert class="alert-box info radius">
                    {{$error}}
                    <a href="#" class="close" id="kapat">&times;</a>
                  </div> 
                @endforeach


                <div class="row">
                    <div class="large-12 columns">
                        <label>Kullanıcı Adı
                            <input type="text" name="email" placeholder="Kullanıcı Adınız" />
                        </label>
                    </div>
                </div>

                <div class="row">
                    <div class="large-12 columns">
                        <label>Şifre
                            <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Şifreniz" name="password"/>
                        </label>
                    </div>
                </div> 

                <div class="row">
                    <div class="large-6 columns">      
                        <input id="checkbox1" name="hatirla" type="checkbox"><label for="checkbox1">Hatırlat</label>
                    </div>
                    <div class="large-6 columns">
                        <button type="submit" class="radius button right">Giriş Yap</button>
                        <!-- <a href="#" class="radius button right">Giriş Yap</a>-->
                    </div>
                </div>
                <div class="row">
                    <div class="large-6 columns">
                        <a href="#" ng-click="modalType('sifre');" data-reveal-id="sifremiUnuttumModal" class="forget-password">Şifremi Unuttum!</a>
                    </div>
                    <div class="large-6 columns">
                        <a href="#" ng-click="modalType('onay');" data-reveal-id="sifremiUnuttumModal" class="right">Onay Kodu İste!</a>
                    </div>
                </div>



                <div class="create-account">
                    <p class="text-center">                      
                        
                         <a href="/login/register">YENİ HESAP OLUŞTUR</a>
                    </p>
                </div>
            </form>
            <!-- END LOGIN FORM -->

        </div>
    </div>



    <div id="sifremiUnuttumModal" class="reveal-modal small" data-reveal>
        <form data-abide>
            <div class="email-field">
                <label>E-Posta <small>zorunlu</small>
                    <input type="email" ng-model="username" required>
                </label>
                <small class="error">Geçerli Bir e-posta adresi girin.</small>
            </div>
            <button class="right" type="submit" ng-click="gonder();">Gönder</button>
        </form>

        <a class="close-reveal-modal">&#215;</a>
    </div>

</div>

@stop