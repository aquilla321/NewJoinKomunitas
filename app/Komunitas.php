<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komunitas extends Model
{
	protected $fillable = ['member', 'slot', 'komunitas_name', 'kategori_id', 'description', 'location', 'image_path'];
	
    public function kategori(){
    	return $this->belongsTo(Kategori::class);
    }

    public function transactions(){
    	return $this->hasMany(Transaction::class);
    }
}
