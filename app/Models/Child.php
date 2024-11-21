<?php

namespace App\Models;

use App\Models\State;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Child extends Model
{
    use HasFactory;

    protected $table = 'children'; 
    
    protected $fillable = [
        'child_name',
        'date_of_birth',
        'class',
        'address',
        'city',
        'state',
        'country',
        'zip_code',
        'photo',
    ];

    protected $casts = [
        'date_of_birth' => 'date', 
    ];

    public function pickedUpPersons()
    {
        return $this->hasMany(PickedUpPerson::class); 
    }


}
