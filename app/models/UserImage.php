<?php
  
class UserImage extends Eloquent  {
 	protected $fillable = ['resim_adi', 'resim_yolu', 'user_id'];
	protected $table = 'user_images';
}