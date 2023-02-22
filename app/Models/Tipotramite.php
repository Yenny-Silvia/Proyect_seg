<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipotramite extends Model
{
    use HasFactory;
    public function tipotramites(){
        return $this->hasMany(Tipotramite::class,'id');
    }
}
