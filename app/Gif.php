<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gif extends Model
{
    protected $table = 'gifs';
    protected $fillable = [
        'id',
        'url',
        'tags'
    ];
}
