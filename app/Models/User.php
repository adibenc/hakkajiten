<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model{
	function profile(){
		return $this->hasOne(UserProfile::class);
	}
}
