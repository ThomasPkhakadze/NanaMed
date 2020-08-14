<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_infos', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('schedule_ge');
            $table->string('schedule_en')->nullable();
            $table->string('schedule_ru');

            $table->string('contact_info_ge');
            $table->string('contact_info_en')->nullable();
            $table->string('contact_info_ru');

            $table->string('address_ge');
            $table->string('address_en')->nullable();
            $table->string('address_ru');

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
        Schema::dropIfExists('contact_infos');
    }
}
