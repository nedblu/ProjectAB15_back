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

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'image', 'category_id', 'parent_id', 'sku', 'stock', 'colors', 'ink', 'equipment', 'description', 'user_id'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

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
