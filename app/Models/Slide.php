<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Orchid\Screen\AsSource;

class Slide extends Model
{
    use HasFactory;
    use AsSource;

    public $fillable = [
        'title',
        'img',
        'subtitle',
        'value1',
        'comment1',
        'value2',
        'comment2',
        'value3',
        'comment3',
        'value4',
        'comment4',
    ];
}
