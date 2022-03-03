<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anuncio', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->text('description');
            $table->foreignId('type_id');
            $table->integer('bedroom');
            $table->integer('parking');
            $table->integer('bathroom');
            $table->integer('suite');
            $table->double('value');
            $table->double('iptu');
            $table->double('condominio');
            $table->double('area');
            $table->foreignId('state_id');
            $table->foreignId('city_id');
            $table->foreignId('district_id');
            $table->text('other');
            $table->string('image_1');
            $table->string('image_2');
            $table->string('image_3');
            $table->string('image_4');
            $table->string('image_5');
            $table->string('image_6');
            $table->string('image_7');
            $table->string('image_8');
            $table->string('image_9');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anuncio');
    }
};
