<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Factories\HasFactory;

class Villager extends Model
{

    //use HasFactory;
    protected $fillable = [
        'name',
        'cid',
        'gender',
        'press',
        'plus',
        'monster',
        'Lead',
    ];
    //
}
