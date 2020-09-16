<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNonAcademicStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('non_academic_staff', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('male')->default(0);
            $table->integer('female')->default(0);
            $table->integer('doctorate')->default(0);
            $table->integer('master')->default(0);
            $table->integer('bachelor')->default(0);
            $table->integer('diploma')->default(0);
            $table->integer('certification_below')->default(0);
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
        Schema::dropIfExists('non_academic_staff');
    }
}
