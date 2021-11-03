<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caso extends Model
{
    use HasFactory;
    protected $table = 'caso';

    protected $fillable = [
        'descripción',
        'idcliente',
        'idabogado',
        'estadocaso',
        'estadocliente',
        'estadoprocurador',
        'idprocurador',
        'documento',
    ];

    public function cliente(){
        return $this->belongsTo(Cliente::class,'idcliente');
    }

    
    public function users(){
        return $this->belongsTo(User::class,'idabogado');
    }
        
    public function procurador(){
        return $this->belongsTo(Procurador::class,'idprocurador');
    }
    public function expediente(){
        return $this->hasMany(Expediente::class,'idcaso');
    }

        

}
