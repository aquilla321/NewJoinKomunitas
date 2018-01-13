<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
	
    public function komunitas(){
    	return $this->hasMany(Komunitas::class);
    }
}
