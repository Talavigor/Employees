<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Middle extends Model
{
    public function junior(){
        return $this->belongsTo('App\Models\Junior');
    }
}
