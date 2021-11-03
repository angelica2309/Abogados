<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tiene;
use App\Models\Caso;

class Cliente extends Model
{
    protected $table = 'cliente';

    protected $fillable = [
        'name',
        'carnet',
        'telefono',
        'email',
    ];

    public function tiene(){
        return $this->hasMany(Tiene::class,'idcliente');
    }

    
    public function caso(){
        return $this->hasOne(Caso::class,'idcliente');
    }


}
