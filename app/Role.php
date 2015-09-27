<?php

namespace AlphaBeta;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users()
	{
		return $this->belongsToMany('AlphaBeta\User', 'role_user', 'role_id', 'user_id');
	}

}
