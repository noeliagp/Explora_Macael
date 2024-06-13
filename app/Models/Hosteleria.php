<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hosteleria extends Model
{
protected $table = 'hosteleria';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'nombre',
        'descripcion',
        'imagen',
        'ubicacion',
        'horario',
        'telefono',

    ];
}
