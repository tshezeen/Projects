<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBulkStdDtlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bulk_std_dtls', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('RGoB_funded')->default(0);
            $table->integer('other_funded')->default(0);
            $table->integer('self_funded')->default(0);
            $table->integer('male')->default(0);
            $table->integer('female')->default(0);
            $table->integer('total')->default(0);
            $table->integer('boarders')->default(0);
            $table->integer('dayscholars')->default(0);
            $table->integer('below_19yrs')->default(0);
            $table->integer('btw_19_23yrs')->default(0);
            $table->integer('above_23yrs')->default(0);

            $table->integer('age_15yrs_below')->default(0);
            $table->integer('age_16yrs')->default(0);
            $table->integer('age_17yrs')->default(0);
            $table->integer('age_18yrs')->default(0);
            $table->integer('age_19yrs')->default(0);
            $table->integer('age_20yrs')->default(0);
            $table->integer('age_21yrs')->default(0);
            $table->integer('age_22yrs')->default(0);
            $table->integer('age_23yrs')->default(0);
            $table->integer('age_24yrs')->default(0);
            $table->integer('age_25yrs')->default(0);
            $table->integer('age_26yrs')->default(0);
            $table->integer('age_27yrs')->default(0);
            $table->integer('age_28yrs')->default(0);
            $table->integer('age_29yrs')->default(0);
            $table->integer('age_30yrs')->default(0);
            $table->integer('age_31yrs')->default(0);
            $table->integer('age_32yrs')->default(0);
            $table->integer('age_33yrs')->default(0);
            $table->integer('age_34yrs')->default(0);
            $table->integer('age_btw_35_39yrs')->default(0);
            $table->integer('age_btw_40_44yrs')->default(0);
            $table->integer('age_btw_45_49yrs')->default(0);
            $table->integer('age_btw_50_54yrs')->default(0);
            $table->integer('age_btw_55_59yrs')->default(0);
            $table->integer('above_59yrs')->default(0);

            $table->integer('sen_stds')->default(0);
            $table->integer('bumthang')->default(0);
            $table->integer('chhukha')->default(0);
            $table->integer('dagana')->default(0);
            $table->integer('gasa')->default(0);
            $table->integer('haa')->default(0);
            $table->integer('lhuntse')->default(0);
            $table->integer('mongar')->default(0);
            $table->integer('paro')->default(0);
            $table->integer('pemagatshel')->default(0);
            $table->integer('punakha')->default(0);
            $table->integer('samdrupjongkhar')->default(0);
            $table->integer('samtse')->default(0);
            $table->integer('sarpang')->default(0);
            $table->integer('tashiyangtse')->default(0);
            $table->integer('thimphu')->default(0);
            $table->integer('trashigang')->default(0);
            $table->integer('trongsa')->default(0);
            $table->integer('tsirang')->default(0);
            $table->integer('wangdi')->default(0);
            $table->integer('zhemgang')->default(0);
            $table->integer('international_stds')->default(0);

            $table->integer('asia')->default(0);
            $table->integer('africa')->default(0);
            $table->integer('north_america')->default(0);
            $table->integer('south_america')->default(0);
            $table->integer('antarctica')->default(0);
            $table->integer('europe')->default(0);
            $table->integer('australia')->default(0);
            $table->integer('ex_asia')->default(0);
            $table->integer('ex_africa')->default(0);
            $table->integer('ex_north_america')->default(0);
            $table->integer('ex_south_america')->default(0);
            $table->integer('ex_antarctica')->default(0);
            $table->integer('ex_europe')->default(0);
            $table->integer('ex_australia')->default(0);

            $table->string('updated_by')->references('id')->on('users');
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
        Schema::dropIfExists('bulk_std_dtls');
    }
}

