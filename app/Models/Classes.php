<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Factories\HasFactory;

class Classes extends Model
{
    //use HasFactory;
    //protected $cascadeDeletes = ['villagers'];


    public function villagers()
    {
        return $this->hasMany(Villagers::class,'cid');
    }
    protected $fillable = [
        'name',
        'easy',
        'love',
        'sp'
    ];

    public function scopeEasy($query)
    {
        $query->where('easy','>=',5)->orderBy('easy',false);
    }
    public function scopeHard($query)
    {
        $query->where('easy','<',5)->orderBy('easy');
    }

    public function scopeId($query)
    {
        $query->where('id', '>=', '0')->orderBy('id');
    }
}
