<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technique extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'techniques';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'about','detail','image','user_id'];

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
}
