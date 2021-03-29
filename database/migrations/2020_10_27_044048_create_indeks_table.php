<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndeksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indeks', function (Blueprint $table) {
            $table->id();
            $table->text('header_category')->nullable();
            $table->text('header_reklamacja')->nullable();
            $table->text('header_reklamacja_link')->nullable();
            $table->text('header_block_1')->nullable();
            $table->text('header_block_2')->nullable();
            $table->text('header_block_3')->nullable();
            $table->text('header_block_4')->nullable();
            $table->text('image_reklamacja')->nullable();
            $table->text('text_under_image_reklamacja')->nullable();
            $table->text('text_under_image_reklamacja_link')->nullable();
            $table->text('sidebar_image_reklamacja_1')->nullable();
            $table->text('sidebar_image_reklamacja_1_link')->nullable();
            $table->text('sidebar_image_reklamacja_1_text')->nullable();
            $table->text('sidebar_image_reklamacja_1_percent')->nullable();
            $table->text('sidebar_image_reklamacja_2')->nullable();
            $table->text('sidebar_image_reklamacja_2_link')->nullable();
            $table->text('sidebar_image_reklamacja_2_percent')->nullable();
            $table->text('sidebar_image_reklamacja_2_text')->nullable();


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
        Schema::dropIfExists('indeks');
    }
}
