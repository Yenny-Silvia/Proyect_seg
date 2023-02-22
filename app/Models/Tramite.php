<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tramite extends Model
{
    use HasFactory;

    protected $fillable = ['referencias', 'Hojas', 'remitente', 'nro_concejo', 'id_subtipotramite', 'id_tipotramite'];

    public function subtipotramites(){
        return $this->belongsTo(Subtipotramite::class,'id_subtipotramite');
    }

    public function tipotramites(){
        return $this->belongsTo(Tipotramite::class,'id_tipotramite');
    }
}