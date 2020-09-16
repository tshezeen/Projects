<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicYearWiseDtlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academic_year_wise_dtls', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('program_id')->references('id')->on('program_ofereds');
            $table->integer('academic_year_id')->references('id')->on('academic_years');
            $table->integer('male_RGoB')->default(0);
            $table->integer('female_RGoB')->default(0);
            $table->integer('total_RGoB')->default(0);
            $table->integer('male_self')->default(0);
            $table->integer('female_self')->default(0);
            $table->integer('total_self')->default(0);
            $table->integer('male_other')->default(0);
            $table->integer('female_other')->default(0);
            $table->integer('total_other')->default(0);
            $table->integer('grand_total')->default(0);
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
        Schema::dropIfExists('academic_year_wise_dtls');
    }
}
