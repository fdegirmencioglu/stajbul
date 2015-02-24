@extends('app')

@section('content')

 <div ng-view></div>
 
<form>

    <div class="row">
        <div class="large-12 columns">
            <h4 class="subheader"><i class="fa fa-users fa-2x"></i>&nbsp;Profil</h4>
        </div>
    </div>

    <div class="row">
        <h4>Kişisel Bilgiler</h4>
        <hr>
        <div class="large-8 columns">
            <label>Ad <input type="text" placeholder="Adınız" /> </label> 
            <label>Soyad <input type="text" placeholder="Soyadınız" /> </label> 
            <label>Kullanıcı Adı <input type="text" placeholder="Kullanıcı Adınız" /> </label> 
            <label>Herkes Tarafından Görünecek Ad <input type="text" placeholder="Görüntülenecek Adınız" /> </label>
        </div>
        <div class="large-4 columns">
            <div class="panel callout radius">

                <img class="center-image" src="/images/default_us_photo.jpg" alt=""/>

                <a href="#" class="button expand">Resim Ekle</a>

            </div>   
        </div>
    </div>


    <div class="row">
        <h4>İletişim Bilgisi</h4>
        <hr>
        <div class="large-8 columns">
            <label>E-posta <input type="text" placeholder="E-posta" /> </label> 
            <label>İnternet Sitesi <input type="text" placeholder="Web Siteniz" /> </label>
        </div>
        <div class="large-4 columns">
            <h4>Şifre İşlemleri</h4>
            <hr>
            <a href="#" data-reveal-id="passModal" class="button alert expand">Şifre İşlemleri</a>
        </div>
    </div>

    <div class="row">
        <div class="large-8 columns">
            <a href="#" class="button success right">Düzenle / Kaydet</a>
        </div>
    </div>
</form>
<div id="passModal" class="reveal-modal" data-reveal>
    <h4>Şifre İşlemleri</h4>
    <hr>
    <div class="large-8 columns">
        <label>Yeni Şifre <input type="text" placeholder="Şifre" /> </label> 
        <label>Yeni Şifre Tekrar <input type="text" placeholder="Şifre Tekrar" /> </label>
        <label>Güç Göstergesi
            <div class="progress large-6 success round"> <span class="meter" style="width: 40%"></span> </div>
        </label>
        <a href="#" class="button success right">Düzenle / Kaydet</a>
    </div>
</div>

@endsection
