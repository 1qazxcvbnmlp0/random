<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Company_Reviews', function (Blueprint $table) {
            $table->id();
            $table->integer('company_id');
            $table->integer('reviewer_id');
            $table->string('reviewer_name');
            $table->double('reviewer_rate');
            $table->dateTime('review_date');
            $table->string('content');
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
        Schema::dropIfExists('Company_Reviews');
    }
}
