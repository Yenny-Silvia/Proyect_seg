<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subtipotramite extends Model
{
    use HasFactory;
    
    protected $fillable = ['nombre', 'sigla', 'id_tipotramite'];

    public function tipotramites(){
        return $this->belongsTo(Tipotramite::class,'id_tipotramite');
    }
}
