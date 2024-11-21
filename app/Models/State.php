<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = 'states';

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function children()
    {
        return $this->hasMany(Child::class);
    }
    
}
