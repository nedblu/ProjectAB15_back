<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductInk extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'product_inks';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['product_id', 'inks_ar', 'user_id'];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
