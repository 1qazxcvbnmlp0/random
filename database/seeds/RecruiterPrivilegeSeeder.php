<?php

use Illuminate\Database\Seeder;

class RecruiterPrivilegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('recruiter_privileges')->insert([
            'name'=>'super_admin'
        ]);

        DB::table('recruiter_privileges')->insert([
            'name'=>'head_recruiter'
        ]);

        DB::table('recruiter_privileges')->insert([
            'name'=>'recruitment_agent'
        ]);
    }
}
