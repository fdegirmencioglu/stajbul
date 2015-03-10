<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('GroupsSeeder');
		$this->command->info('Super Administrators group seeded!');
		// $this->call('UserTableSeeder');
	}

}



class GroupsSeeder extends Seeder {

	public function run(){

	/*Sentry::getGroupProvider()->create(array(
		'name'        => 'Managers',
		'permissions' => array(
		    'managers.profile' => 1,
			'managers.'		    
		  ),
		));

	Sentry::getGroupProvider()->create(array(
    	'name' => 'Academicians',
    	'permissions' => array(
        	'academicians.profile' => 1,
    	),
	));


	Sentry::getGroupProvider()->create(array(
    	'name' => 'Companies',
    	'permissions' => array(
        	'companies.profile' => 1,
    	),
	));

	Sentry::getGroupProvider()->create(array(
    	'name' => 'Students',
    	'permissions' => array(
        	'students.profile' => 1,
    	),
	));*/


	}
}
