<?php
class City extends Eloquent {

    protected $table = 'city';
    protected $fillable = ['sehir_adi', 'plaka_no', 'telefon_kodu', 'row_number'];

}