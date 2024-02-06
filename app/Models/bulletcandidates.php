<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bulletcandidates extends Model
{
    protected $fillable = [
        'bulletcandidateid',
        'candidateid',
        'positionid',
        'electionid',
        
        

    ];

   
    protected $table = 'bullet_candidates';

    protected $primaryKey = 'bullet_candidates';
    

}
