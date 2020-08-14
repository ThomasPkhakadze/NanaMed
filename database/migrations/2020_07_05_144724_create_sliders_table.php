<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title_ge');
            $table->string('title_en')->nullable();
            $table->string('title_ru');

            $table->text('description_ge');
            $table->text('description_en')->nullable();
            $table->text('description_ru');
                        
            $table->string('button_ge');
            $table->string('button_en')->nullable();
            $table->string('button_ru');

            $table->string('image');
            $table->string('url');
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
        Schema::dropIfExists('sliders');
    }
}
