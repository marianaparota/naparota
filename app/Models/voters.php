<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class voters extends Model
{
    protected $fillable = [
        'voterid',
        'fistname',
        'lastname',
        'voteridnumber',

    ];

   
    protected $table = 'voters';

    protected $primaryKey = 'voters';
    

}