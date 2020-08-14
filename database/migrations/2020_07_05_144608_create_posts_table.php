<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');

            $table->string('title_ge');
            $table->string('title_en')->nullable();
            $table->string('title_ru');
            
            $table->string('description_ge');
            $table->string('description_en')->nullable();
            $table->string('description_ru');

            $table->text('content_ge');
            $table->text('content_en')->nullable();
            $table->text('content_ru');
            $table->string('slug');
            $table->string('image')->nullable();

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
