<?php

namespace App\Models;


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
    public function myclass()
    {
        return $this->belongsTo('App\Models\Classes', 'cid','id');
    }
}
