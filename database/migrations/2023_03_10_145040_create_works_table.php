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
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title')->comment('Название направления деятельности');
            $table->string('quote')->comment('Цитата');
            $table->string('img')->comment('Картинка направления');
            $table->string('lnk')->comment('Ссылка на страницу');
            $table->integer('order')->comment('Порядок сортировки');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('works');
    }
};
