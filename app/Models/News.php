<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Orchid\Screen\AsSource;

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
        if (empty($value))
            $this->attributes['slug'] =  Str::slug($this->title);
        else
            $this->attributes['slug'] =  $value;
    }
}
