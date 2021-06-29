<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    use HasFactory;
    protected $table="provincias";
    protected $fillable = [
        'id',
        'provincia',
        'region_id'
    ];

    public function region(){
        return $this->belongsTo("App\Region");
    }

    public function comuna(){
        return $this->hasMany("App\Comuna");
    }
}
