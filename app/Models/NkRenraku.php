<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NkRenraku extends Model
{
    use HasFactory;

    protected $table = 'nyuukin_renraku';    
    protected $dates =[
        'furikomi_date',
        'created_at',
        'updated_at',
    ];
}
