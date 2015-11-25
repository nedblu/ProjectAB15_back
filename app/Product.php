<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    //
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function subcategory()
    {
        return $this->belongsTo('App\Category', 'parent_id');
    }

    public function getEquips()
    {
        return $this->hasOne('App\ProductEquip');
    }

    public function getInks()
    {
        return $this->hasOne('App\ProductInk');
    }

    public function getColors()
    {
        return $this->hasOne('App\ProductColor');
    }

}
