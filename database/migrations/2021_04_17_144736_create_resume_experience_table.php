<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumeExperienceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resume_experience', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('resume_id');
            $table->string('job_title');
            $table->string('company');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('city');
            $table->text('description');
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
        Schema::dropIfExists('resume_experience');
    }
}
