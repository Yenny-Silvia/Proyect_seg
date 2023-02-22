<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seguimiento extends Model
{
    use HasFactory;

    protected $fillable = ['fecha', 'recepcion', 'id_dependencia', 'id_tramite'];

    public function dependenciasOrigen(){
        return $this->belongsTo(Dependencia::class,'id_dependenciaOrigen');
    }

    public function dependenciasDestino(){
        return $this->belongsTo(Dependencia::class,'id_dependenciaDestino');
    }

    public function tramites(){
        return $this->belongsTo(Tramite::class,'id_tramite');
    }
}
