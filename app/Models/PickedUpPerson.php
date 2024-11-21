<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PickedUpPerson extends Model
{
    use HasFactory;
    
    protected $table = 'picked_up_persons';  

    protected $fillable = [
        'child_id',  
        'person_name',
        'relation',
        'contact_no',
    ];

    public function child()
    {
        return $this->belongsTo(Child::class); 
    }
}
