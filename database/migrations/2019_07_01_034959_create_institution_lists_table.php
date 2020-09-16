<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitutionListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institution_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('inst_type')
                 ->references('id')
                 ->on('institute_types');
            $table->string('inst_name');
            $table->string('location');
            $table->string('address');
            $table->string('est_year');
            $table->string('total_acr')->default(0);
            $table->string('national_accre')->nullable();
            $table->string('international_accre')->nullable();
            $table->string('website')->nullable();
            $table->longtext('description');
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
        Schema::dropIfExists('institution_lists');
    }
}
