<?php

// Eloquent laravel'in VT ile bağlantı kurmasını sağlayan yardımcı nesne

class Company extends Eloquent {

    protected $table = 'company_meta';
    protected $fillable = ['user_id', 'yetkili_adi', 'yetkili_pozisyonu', 'kurulus_yili', 'calisan_sayisi', 'firma_adi', 'firma_bilgileri', 'sehir', 'ilce', 'telefon', 'fax', 'adress', 'sil'];

}
