<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'colors';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'image', 'code', 'user_id'];

    public function scopeLike($query, $field, $value) 
    {
        return $query->where($field, 'LIKE', "%$value%");
	}

    public function user() 
    {
        return $this->belongsTo('App\User');
    }
}
