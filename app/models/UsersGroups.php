<?php
  
class UsersGroups extends Eloquent  {
 	protected $fillable = ['user_id', 'group_id'];
	protected $table = 'users_groups';

	protected $primaryKey = "user_id";

	public $timestamps = false;
}