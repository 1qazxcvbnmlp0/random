<?php

use Illuminate\Database\Seeder;

class AdminPrivilegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('admin_privileges')->insert([
            'name'=>'super_admin'
        ]);

        DB::table('admin_privileges')->insert([
            'name'=>'support_team'
        ]);

        DB::table('admin_privileges')->insert([
            'name'=>'technical_team'
        ]);
    }
}
