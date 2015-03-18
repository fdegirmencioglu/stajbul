<?php
  
class Logs extends Eloquent  {
 	protected $fillable = ['id','user_id', 'kullanici_adi', 'group_id', 'ip_address', 'tarih_saat','yapilan_islem']; 
	protected $table = 'logs';
}