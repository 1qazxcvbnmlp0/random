<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Company_Profiles', function (Blueprint $table) {
            $table->id();
            $table->string('cover_image_link');
            $table->string('logo_link');
            $table->string('company_name');
            $table->double('rate');
            $table->String('email');
            $table->integer('phone_number');
            $table->string('site');
            $table->string('fax');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Company_Profile');
    }
}
