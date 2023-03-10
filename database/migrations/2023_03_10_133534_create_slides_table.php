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
        Schema::create('slides', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title')->comment("Заголовок слайда");

            $table->string('img')->comment("Фон слайда");

            $table->string('subtitle')->comment("Подзаголовок слайда");
            $table->string('value1')->comment("Величина 1");
            $table->string('comment1')->comment("Комментарий 1");

            $table->string('value2')->comment("Величина 2");
            $table->string('comment2')->comment("Комментарий 2");

            $table->string('value3')->comment("Величина 3");
            $table->string('comment3')->comment("Комментарий 3");

            $table->string('value4')->comment("Величина 4");
            $table->string('comment4')->comment("Комментарий 4");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slides');
    }
};
