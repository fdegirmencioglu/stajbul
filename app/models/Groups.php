<?php
  
class Groups extends Eloquent  {
 	protected $fillable = ['id', 'name', 'permissions'];
	protected $table = 'groups';

	public $timestamps = false;
}