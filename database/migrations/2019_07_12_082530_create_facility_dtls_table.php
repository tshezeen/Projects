<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacilityDtlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facility_dtls', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('facility_type_id')->references('id')->on('facility_types');
            $table->integer('number');
            $table->integer('capacity');
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
        Schema::dropIfExists('facility_dtls');
    }
}
