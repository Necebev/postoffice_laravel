<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    

    use HasFactory;

    protected $fillable = [
        'name',
        'badge',
    ];

    public function getCities(){
        return $this->hasMany(City::class, 'id_county');
    }

    public function getPopulation(){
        return City::all()->where('county_id', '=', $this->getKey())->sum('population');
    }
}
