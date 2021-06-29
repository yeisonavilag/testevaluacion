<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{
    use HasFactory;
    protected $table="comunas";
    protected $fillable = [
        'id',
        'comuna',
        'provincia_id'
    ];

    public function provincia(){
        return $this->belongsTo("App\Provincia");
    }

}
