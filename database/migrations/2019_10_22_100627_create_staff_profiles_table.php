<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('name');
            $table->string('designation');
            $table->string('gender');
            $table->date('date_of_joining');
            $table->longText('years_of_exp');
            $table->string('qualification');
            $table->string('email');
            $table->string('contact_no');
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
        Schema::dropIfExists('staff_profiles');
    }
}
