<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Orchid\Screen\AsSource;

use Illuminate\Support\Str;

class News extends Model
{
    use HasFactory;
    use AsSource;

    public $fillable = [
        'news_data',
        'title',
        'slug',
        'quote',
        'thumb',
        'description',
        'seo_title',
        'seo_description'
    ];

    public function setSlugAttribute($value)
    {
        $title = (empty($value))?Str::slug($this->title):$value;
        $this->attributes['slug'] =  $title."-".date("d-m-Y");

    }
}
