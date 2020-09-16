<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFundingSourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funding_sources', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('RGoB_funding',20,3)->default(0.000);
            $table->decimal('pvt_funding',20,3)->default(0.000);
            $table->decimal('consultant_service',20,3)->default(0.000);
            $table->decimal('research_grant',20,3)->default(0.000);
            $table->decimal('facilities_rental',20,3)->default(0.000);
            $table->decimal('sale_of_asset',20,3)->default(0.000);
            $table->decimal('other_funding',20,3)->default(0.000);
            $table->decimal('total_funding',20,3)->default(0.000);
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
        Schema::dropIfExists('funding_sources');
    }
}
