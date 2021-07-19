<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bankbook extends Model
{
    use HasFactory;

    protected $dates =[
        'nyukin_date',
        'created_at',
        'updated_at',
    ];
}
