<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	DB::table('users')->delete();

    	$users=array(
    		array('id'=>1,'first_name'=>'student','last_name'=>'dummy','username'=>'student.dummy','email'=>'student@domain.com','password'=>'$2y$10$r7dZmXQnGhJdmsdyOKAOcOhRjzUH4phVOvKLwRH1OAmrRFbL4hR..','sex'=>0,'timezone'=>'Asia/Jakarta','role'=>1,'api_token'=>'jskjskj838hd8u3hnjnj1','avatar'=>'/asset_ava/man.png','active_status'=>1),
    		array('id'=>2,'first_name'=>'coached','last_name'=>'dummy','username'=>'coached.dummy','email'=>'coached@domain.com','password'=>'$2y$10$r7dZmXQnGhJdmsdyOKAOcOhRjzUH4phVOvKLwRH1OAmrRFbL4hR..','sex'=>1,'timezone'=>'Asia/Jakarta','role'=>2,'api_token'=>'jskjskj838hd8u3hnjnj2','avatar'=>'/asset_ava/woman.png','active_status'=>1),
    		array('id'=>3,'first_name'=>'manager','last_name'=>'dummy','username'=>'manager.dummy','email'=>'manager@domain.com','password'=>'$2y$10$r7dZmXQnGhJdmsdyOKAOcOhRjzUH4phVOvKLwRH1OAmrRFbL4hR..','sex'=>0,
    			'timezone'=>'Asia/Jakarta','role'=>3,'api_token'=>'jskjskj838hd8u3hnjnj3','avatar'=>'/asset_ava/man.png','active_status'=>1)
    	);
    	DB::table('users')->insert($users);



    }
}
