@extends('master')

@section('content')
<div class="row">
    <div class="large-12 columns">
        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            <form class="login-form" action="index.html" method="post">
                <h3 class="form-title">Oturumu Aç</h3>
                <div data-alert class="alert-box info radius">
                    Kullanıcı Adı ve Şifre Girmelisiniz.
                    <a href="#" class="close">&times;</a>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <label>Kullanıcı Adı
                            <input type="text" placeholder="Kullanıcı Adınız" />
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
                        <input id="checkbox1" type="checkbox"><label for="checkbox1">Hatırlat</label>
                    </div>
                    <div class="large-6 columns">
                        <a href="#" class="radius button right">Giriş Yap</a>
                    </div>
                </div>
                <div class="row">
                    <div class="large-6 columns">
                        <a href="javascript:;" data-reveal-id="sifremiUnuttumModal" class="forget-password">Şifremi Unuttum!</a>
                    </div>
                    <div class="large-6 columns">
                        <a href="javascript:;" data-reveal-id="sifremiUnuttumModal" class="right">Onay Kodu İste!</a>
                    </div>
                </div>



                <div class="create-account">
                    <p class="text-center">                      
                        <a href="#">YENİ HESAP OLUŞTUR</a>
                    </p>
                </div>
            </form>
            <!-- END LOGIN FORM -->

        </div>
    </div>
</div>


<div id="sifremiUnuttumModal" class="reveal-modal small" data-reveal>
    <form class="login-form" action="index.html" method="post">
        <div class="row">
            <div class="large-6 large-centered columns">
                <label>E-Posta:
                    <input type="text" placeholder="E-posta adresiniz" />
                </label>
            </div>
        </div>

        <div class="row">

            <div class="large-6 large-centered columns">
                <a href="#" class="radius button right">Gönder</a>
            </div>
        </div>
    </form>

    <a class="close-reveal-modal">&#215;</a>
</div>

@stop