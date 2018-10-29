<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
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
        DB::table('roles')->delete();

        $role=array(
        	array('id'=>1,'name'=>'student'),
        	array('id'=>2,'name'=>'coached'),
        	array('id'=>3,'name'=>'manager'),
        );

        DB::table('roles')->insert($role);

    }
}
