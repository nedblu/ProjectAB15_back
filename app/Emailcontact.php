<?php

namespace AlphaBeta;

use Illuminate\Database\Eloquent\Model;

class Emailcontact extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','email'];
    
}
