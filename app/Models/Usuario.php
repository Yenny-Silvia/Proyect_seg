<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    
    use HasFactory;

    protected $fillable = ['id_dependencia', 'id_user'];

    public function dependencias(){
        return $this->belongsTo(Dependencia::class,'id_dependencia');
    }

    public function users(){
        return $this->belongsTo(User::class,'id_user');
    }
}
