<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class positions extends Model
{
    protected $fillable = [
        'positionid',
        'positionname',
        'description',
        

    ];

   
    protected $table = 'positions';

    protected $primaryKey = 'positions';
    
}
