<?php

namespace App\Models;

use Database\Seeders\caso;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expediente extends Model
{
    use HasFactory;

    protected $table = 'expediente';

    protected $fillable = [
        'urlfoto',
        'idcaso',
    ];

    public function caso(){
        return $this->belongsTo(Caso::class,'idcaso');
    }

}
