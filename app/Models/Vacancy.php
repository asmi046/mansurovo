<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Orchid\Screen\AsSource;

class Vacancy extends Model
{
    use HasFactory;
    use AsSource;

    public $fillable = [
        'name',
        'place',
        'grafic',
        'price',
        'ob',
        'treb',
        'usl',
    ];
}
