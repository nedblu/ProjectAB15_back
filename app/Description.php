<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    //
    public function product()
    {
        return $this->hasOne('App\Product');
    }
}
