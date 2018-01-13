<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
	protected $fillable = [
        'status'
    ];

    public function komunitas(){
    	return $this->belongsTo(Komunitas::class);
    }

    public function user(){
    	return $this->belongsTo(User::class);
    }
}
