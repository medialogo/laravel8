<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kaiin extends Model
{
    use HasFactory;

    

    protected $dates =[
        'nyukin_date',
        'created_at',
        'updated_at',
    ];
   
    public function bankbook(){
        return $this->hasOne('App\Models\Bankbook','meibo_id','id');
    }     
}
