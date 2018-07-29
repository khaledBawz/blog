<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'body', 'slug'];

    // protected $primaryKey = 'id';

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
