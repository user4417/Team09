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
        return $this->hasMany(Villager::class,'cid');
    }
    protected $fillable = [
        'name',
        'easy',
        'love',
        'sp'
    ];
    //
}
