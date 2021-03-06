<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('company_id')->unsigned();
            $table->bigInteger('recruiting_manager_id')->unsigned();
            $table->string('title');
            $table->string('contract_type');
            $table->string('location');
            $table->integer('head_count');
            $table->text('description');
            $table->string('level'); 
            $table->string('field_of_study');
            $table->string('experience');
            $table->integer('age');
            $table->string('gender');
            $table->text('skills_required');
            $table->text('responsibilities');
            $table->string('salary');
            $table->text('benefits');
            $table->date('deadline');
            $table->integer('maximum_applicants');
            $table->bigInteger('pipeline_id');
            

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
        Schema::dropIfExists('jobs');
    }
}
