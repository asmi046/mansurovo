<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

use Orchid\Screen\AsSource;

class Product extends Model
{
    use HasFactory;
    use AsSource;

    public $fillable = [
        'title',
        'slug',
        'quote',
        'category',
        'subtype',
        'img1',
        'img2',
        'img3',
        'img4',
        'description',
        'seo_title',
        'seo_description'
    ];

    public function product_category() {
        return $this->hasOne(Category::class, "name", "category");
    }

    public function setSlugAttribute($value)
    {
        if (empty($value))
            $this->attributes['slug'] =  Str::slug($this->title);
        else
            $this->attributes['slug'] =  $value;
    }
}
