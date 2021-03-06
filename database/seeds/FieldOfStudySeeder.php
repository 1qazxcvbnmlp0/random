<?php

use Illuminate\Database\Seeder;

class FieldOfStudySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('field_of_study')->insert([
            'field_name'=>'Computer Science'
        ]);

        DB::table('field_of_study')->insert([
            'field_name'=>'Computer Engineering'
        ]);

        DB::table('field_of_study')->insert([
            'field_name'=>'Software Engineering'
        ]);

        DB::table('field_of_study')->insert([
            'field_name'=>'Civil Engineering'
        ]);

        DB::table('field_of_study')->insert([
            'field_name'=>'Mechanical Engineering'
        ]);
    }
}
