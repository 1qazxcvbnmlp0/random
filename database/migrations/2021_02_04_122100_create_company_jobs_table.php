<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Company_Jobs', function (Blueprint $table) {
            $table->id();
            $table->integer('company_id');
            $table->string('job_type');
            $table->string('job_title');
            $table->string('job_location');
            $table->dateTime('post_time');
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
        Schema::dropIfExists('Company_Jobs');
    }
}
