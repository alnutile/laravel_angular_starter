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
        if(Config::get('database.default') != 'sqlite') {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        }
        //DB::table('users')->truncate();
        //$this->call('UserTableSeeder');

        if(Config::get('database.default') != 'sqlite') {
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }
	}

}
