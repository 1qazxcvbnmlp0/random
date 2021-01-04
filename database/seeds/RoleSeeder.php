<?php

use Illuminate\Database\Seeder;

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
        DB::table('roles')->insert([
            'name'=>'administrator'
        ]);

        DB::table('roles')->insert([
            'name'=>'recruiter'
        ]);

        DB::table('roles')->insert([
            'name'=>'applicant'
        ]);

    }
}

