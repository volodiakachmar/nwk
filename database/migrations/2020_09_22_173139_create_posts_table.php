<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->text('name')->nullable();
            $table->text('category')->nullable();
            $table->text('email')->nullable();
            $table->text('title')->nullable();
            $table->text('description_1')->nullable();
            $table->text('description_2')->nullable();
            $table->text('description_3')->nullable();
            $table->text('description_4')->nullable();
            $table->text('under_photo_text')->nullable();
            $table->text('role')->nullable();
            $table->text('status')->nullable();
            $table->text('image_1_title')->nullable();
            $table->text('image_2_below_title')->nullable();
            $table->text('image_3_rounded')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
