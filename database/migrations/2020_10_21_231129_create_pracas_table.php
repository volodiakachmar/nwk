<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePracasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pracas', function (Blueprint $table) {
            $table->id();
            $table->text('miasto')->nullable();
            $table->text('stawka')->nullable();
            $table->text('stanowisko')->nullable();
            $table->text('nazwa_agencji_firmy')->nullable();
            $table->text('typ_umowy')->nullable();
            $table->text('mieszkanie')->nullable();
            $table->text('o_pracy')->nullable();
            $table->text('telefon')->nullable();
            $table->text('work_link')->nullable();
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
        Schema::dropIfExists('pracas');
    }
}
