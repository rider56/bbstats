<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
	public function teams() {
    	return $this->hasMany(Team::class);
    }
}
