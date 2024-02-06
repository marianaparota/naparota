<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Votes extends Model
{
    protected $fillable = [
        'voteid',
        'electionid',
        'voterid',
        'candidateid',
        'votetimestamp',

    ];

   
    protected $table = 'votes';

    protected $primaryKey = 'votes';
    

}
