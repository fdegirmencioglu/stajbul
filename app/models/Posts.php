<?php
class Posts extends Eloquent {

    protected $table = 'posts';
    protected $fillable = ['baslik', 'icerik', 'tipi', 'okundu'];

}