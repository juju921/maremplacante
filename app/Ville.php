<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    //
	public function ville(){
		return $this->hasMany('App\Users');

	}
}
