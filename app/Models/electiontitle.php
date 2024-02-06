<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class electiontitle extends Model
{
    protected $fillable = [
        'electiontilteid',
        'title',
        'description',
        

    ];

   
    protected $table = 'election_title';

    protected $primaryKey = 'election_title';
    

}
