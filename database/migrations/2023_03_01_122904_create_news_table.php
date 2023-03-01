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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->dateTime('news_data', $precision = 0)->comment('Дата публикации');
            $table->string('title')->comment('Заголовок новости');
            $table->string('slug')->unique()->comment('Сссылка');
            $table->string('quote')->nullable()->comment('Цитата');
            $table->string('thumb')->comment('Картинка для карточьки');
            $table->text('description')->comment('Текст новости');

            $table->string('seo_title')->nullable()->comment('SEO title');
            $table->text('seo_description')->nullable()->comment('SEO Description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (app()->isLocal())
            Schema::dropIfExists('news');
    }
};
