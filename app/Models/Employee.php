<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function children()
    {
        return $this->hasMany(Employee::class, 'parent_id');
    }
}
