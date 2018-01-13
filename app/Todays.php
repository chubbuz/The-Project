<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class todays extends Model
{
    public function news(){
    	 return $this->belongsTo('App\News');
    }
}
