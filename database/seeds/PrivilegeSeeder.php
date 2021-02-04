<?php

use Illuminate\Database\Seeder;

class PrivilegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Recruiter Privilege

        DB::table('privileges')->insert([
            'name'=>'super admin'
        ]);

        DB::table('privileges')->insert([
            'name'=>'recruiting manager'
        ]);

        DB::table('privileges')->insert([
            'name'=>'recruiter'
        ]);

        DB::table('privileges')->insert([
            'name'=>'branding page admin'
        ]);

        // Admin Privileges

        DB::table('privileges')->insert([
            'name'=>'recruiter'
        ]);

        DB::table('privileges')->insert([
            'name'=>'applicant'
        ]);
    }
}
