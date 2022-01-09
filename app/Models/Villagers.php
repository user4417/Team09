<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Factories\HasFactory;

class Villagers extends Model
{

    //use HasFactory;
    protected $fillable = [
        'name',
        'cid',
        'gender',
        'press',
        'plus',
        'monster',
        'lead',
    ];
    //
    public function myclass()
    {
        return $this->belongsTo('App\Models\Classes', 'cid','id');
    }

    public function scopeLead($query, $x, $y)
    {
        $query->where('lead', '>=', $x)->where('lead', '<=', $y)->orderBy('lead');
    }

    public function scopeId($query)
    {
        $query->where('id', '>=', '0')->orderBy('id');
    }
}
