<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShareFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('share_forms', function (Blueprint $table) {
            $table->id();
             $table->string('app_name');
             $table->string('app_district');
             $table->string('app_mun');
             $table->string('app_ward');
             $table->string('app_cit');
             $table->string('app_mob');
             $table->string('app_ph');
             $table->string('app_email');
             $table->string('app_father');
             $table->string('app_grandf');
             $table->string('app_hw')->nullable();
             $table->string('app_ceo')->nullable();
             $table->string('app_gaurdian')->nullable();
             $table->string('nom_name')->nullable();
             $table->string('nom_rln')->nullable();
             $table->string('nom_district')->nullable();
             $table->string('app_kitta');
             $table->string('app_total');



            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')
            ->references('id')->on('users')
            ->onDelete('cascade');


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
        Schema::dropIfExists('share_forms');
    }
}
