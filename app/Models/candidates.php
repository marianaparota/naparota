<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class candidates extends Model
{
    protected $fillable = [
        'candidateid',
        'firstname',
        'lastname',
        'middlename',
        'partyaffiliation',

    ];

   
    protected $table = 'candidates';

    protected $primaryKey = 'candidates';
    

}
