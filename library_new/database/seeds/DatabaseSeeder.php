<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Student;
use App\Staff;

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

        /**************
        STUDENT DB ENTRY*
        **************/
        $student = new Student;
        $student->name = "Sahil Kumar Maurya";
        $student->username = "nelabhstudent";
        $student->email = "sahil.kr.maurya@gmail.com";
        $student->phone_no = 1234567890;
        $student->admission_year = 2014;
        $student->course = "Bachelor of Technology";
        $student->branch = "Computer Science Engineering";
        $student->save();

        /**************
        TEACHER DB ENTRY*
        **************/
        $staff = new Staff;
        $student->name = "S.K. Maurya";
        $student->username = "nelabhteach";
        $student->email = "sahil.kr.maurya@gmail.com";
        $student->phone_no = 1234567890;
        $student->type = 1;
        $student->subject = "Networking";
        $student->depart = "Computer Science Engineering";
        $staff->save();
    }
}
