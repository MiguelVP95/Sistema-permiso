<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class codigo extends Model
{

     protected $fillable = ['id','motivo','fecha_inicio', 'fecha_fin',
  'hora_inicio', 'hora_fin', 'obs'];
   
    use HasFactory;
}
