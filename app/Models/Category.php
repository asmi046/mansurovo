<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'title',
        'slug',
        'img',
        'banner',
        'quote',
        'description',
        'seo_title',
        'seo_description',
    ];

    public function cat_product() {
        return $this->hasMany(Product::class, "category", "name");
    }
}
