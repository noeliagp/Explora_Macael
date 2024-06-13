<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alojamiento extends Model
{
    protected $table = 'alojamientos';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'nombre',
        'descripcion',
        'imagen',
        'ubicacion',
        'imagen1',
        'imagen2',
        'imagen3',
        'enlace_reserva'
    ];
}
