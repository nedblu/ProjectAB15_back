<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    //
    protected $fillable = ['title', 'uri', 'image', 'published', 'user_id'];
}
