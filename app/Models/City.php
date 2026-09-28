<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'city',
        'zip_code',
        'population',
        'county_id'
    ];

    public function getCounty(){
        return $this->belongsTo(County::class, 'county_id')->get('name')[0]['name'];
    }
}
