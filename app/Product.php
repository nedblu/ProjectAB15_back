<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function description()
    {
        return $this->belongsTo('App\Description');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

}
