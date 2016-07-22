<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	/**************
    	ADMIN DB ENTRY*
    	**************/
    	$user = new User;
    	$user->username = "nelabh";
    	$user->password = Hash::make('helloworld');
    	$user->level = 0;
    	$user->save();
		/**************
    	TEACHER DB ENTRY*
    	**************/
    	$user = new User;
    	$user->username = "nelabhteach";
    	$user->password = Hash::make('helloworld');
    	$user->level = 2;
    	$user->save();

		/**************
    	STUDENT DB ENTRY*
    	**************/
    	$user = new User;
    	$user->username = "nelabhstudent";
    	$user->password = Hash::make('helloworld');
    	$user->level = 1;
    	$user->save();

        // $this->call(UsersTableSeeder::class);
    }
}
