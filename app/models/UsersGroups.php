<?php
  
class UsersGroups extends Eloquent  {
 	protected $fillable = ['user_id', 'group_id'];
	protected $table = 'users_groups';

	public $timestamps = false;
}