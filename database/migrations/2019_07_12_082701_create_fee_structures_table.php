<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeeStructuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fee_structures', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hostel')->default(0);
            $table->integer('mess')->default(0);
            $table->integer('admission')->default(0);
            $table->integer('registration')->default(0);
            $table->integer('library')->default(0);
            $table->integer('exam')->default(0);
            $table->integer('security_deposit')->default(0);
            $table->integer('miscellaneous')->default(0);
            $table->integer('others')->default(0);
            $table->integer('total')->default(0);
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
        Schema::dropIfExists('fee_structures');
    }
}
