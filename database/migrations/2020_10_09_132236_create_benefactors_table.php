<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBenefactorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('benefactors', function (Blueprint $table) {
            $table->bigIncrements('id')->index();
            $table->string('name');
            $table->double('number');
            $table->rememberToken();

            $table->tinyInteger('city_id')->unsigned()->index();
            $table->tinyInteger('blood_id')->unsigned()->index();

            $table->foreign('city_id')
            ->references('id')->on('cities');

            $table->foreign('blood_id')
            ->references('id')->on('bloods');

       
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
        Schema::dropIfExists('benefactors');
    }
}
