<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description','slug','image','user_id', 'parent_id'];

    public function products()
    {
        return $this->hasMany('App\Product');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
