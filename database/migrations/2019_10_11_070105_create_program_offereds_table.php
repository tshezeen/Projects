<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramOfferedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_offereds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('program_name');
            $table->integer('award_id')->references('id')->on('awards');
            $table->integer('mode_id')->references('id')->on('modes');
            $table->string('affiliation')->nullable();
            $table->integer('cat_id')->references('id')->on('categories');
            $table->integer('program_fee');
            $table->string('duration');
            $table->integer('updated_by')->references('id')->on('users');
            $table->integer('inst_id')->references('id')->on('institution_lists');
            $table->integer('record_yr')->references('id')->on('record_years');
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
        Schema::dropIfExists('program_offereds');
    }
}
