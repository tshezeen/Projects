<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academic_staff', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('male')->default(0);
            $table->integer('female')->default(0);
            $table->integer('bhutanese_contract')->default(0);
            $table->integer('bhutanese_regular')->default(0);
            $table->integer('international_contract')->default(0);
            $table->integer('international_regular')->default(0);
            $table->integer('age_below_30yrs')->default(0);
            $table->integer('age_above_61yrs')->default(0);
            $table->integer('age_31_45yrs')->default(0);
            $table->integer('age_46_60yrs')->default(0);
            $table->integer('doctorate')->default(0);
            $table->integer('master')->default(0);
            $table->integer('bachelor')->default(0);
            $table->integer('diploma')->default(0);
            $table->integer('exp_6yrs_below')->default(0);
            $table->integer('exp_6_10yrs')->default(0);
            $table->integer('exp_10yrs_above')->default(0);
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
        Schema::dropIfExists('academic_staff');
    }
}
