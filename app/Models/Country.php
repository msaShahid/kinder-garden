<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
