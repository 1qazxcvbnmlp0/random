<?php

use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('level')->insert([
            'educational_level'=>'level 0'
        ]);

        DB::table('level')->insert([
            'educational_level'=>'level 1'
        ]);

        DB::table('level')->insert([
            'educational_level'=>'level 2'
        ]);

        DB::table('level')->insert([
            'educational_level'=>'level 3'
        ]);

        DB::table('level')->insert([
            'educational_level'=>'level 4'
        ]);

        DB::table('level')->insert([
            'educational_level'=>'level 5'
        ]);

        DB::table('level')->insert([
            'educational_level'=>'level 6'
        ]);

        DB::table('level')->insert([
            'educational_level'=>'level 7'
        ]);

        DB::table('level')->insert([
            'educational_level'=>'level 8'
        ]);
    }
}
