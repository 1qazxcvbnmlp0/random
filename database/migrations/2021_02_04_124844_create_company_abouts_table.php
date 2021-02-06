<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

//        company id should be unique
        Schema::create('Company_Abouts', function (Blueprint $table) {
            $table->id();
            $table->integer('company_id');
            $table->string('image');
            $table->string('content');
            $table->string('vision');
            $table->string('mission');
            $table->string('value');
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
        Schema::dropIfExists('CompanyAbout');
    }
}
