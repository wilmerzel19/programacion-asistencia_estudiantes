<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estudiante extends Model
{
    use HasFactory;
    protected $table ='estudiantes';
  
    protected $fillable=['nombre','edad','telefono','direccion','sexo'];
}
