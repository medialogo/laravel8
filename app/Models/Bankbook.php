<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bankbook extends Model
{
    use HasFactory;

    protected $dates =[
        'trans_date',
        'created_at',
        'updated_at',
    ];


    public function kaiin(){
        return $this->hasOne('App\Models\Kaiin','id','meibo_id');
    } 


}
