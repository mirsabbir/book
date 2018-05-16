<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Book extends Model
{
    //
    use Searchable;
    protected $fillable = [
        'name', 'publisher', 'tag1', 'tag2', 'tag3', 'tag4', 'tag5', 'cover'
    ];


    public function searchableAs()
    {
        return 'books_index';
    }
}
