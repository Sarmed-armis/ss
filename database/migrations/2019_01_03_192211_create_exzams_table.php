<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExzamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exzams', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('question');
            $table->char('FirstAnswer',200);
            $table->char('SecoundAnswer',200);
            $table->char('ThirdAnswer',200);
            $table->char('FourthAnswer',200);
            $table->char('CorrectAnswer',200);
            $table->bigInteger('exzams_section');
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
        Schema::dropIfExists('exzams');
    }
}
