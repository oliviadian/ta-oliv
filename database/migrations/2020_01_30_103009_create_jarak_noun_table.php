<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJarakNounTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jarak_noun', function (Blueprint $table) {
            $table->bigIncrements('id_jarak_n');
            $table->string('id_hipernim_satu');
            $table->string('id_hipernim_dua');
            $table->string('jarak');
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
        Schema::dropIfExists('jarak_noun');
    }
}
