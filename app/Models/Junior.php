<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Junior extends Model
{
    public function middle (){
        return $this->hasOne('App\Models\Middle');
    }
}
