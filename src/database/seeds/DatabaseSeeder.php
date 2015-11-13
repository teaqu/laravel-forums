<?php

/**
 * Class DatabaseSeeder
 */
class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('ForumsTableSeeder');
		$this->call('ForumTopicsTableSeeder');
		$this->call('ForumPostsTableSeeder');
		$this->call('UsersTableSeeder');
		$this->call('UserGroupSeeder');
	}

}
