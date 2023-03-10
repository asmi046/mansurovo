<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Orchid\Screen\AsSource;

class Work extends Model
{
    use HasFactory;
    use AsSource;

    public $fillable = [
        'title',
        'quote',
        'img',
        'lnk',
        'order'
    ];
}
