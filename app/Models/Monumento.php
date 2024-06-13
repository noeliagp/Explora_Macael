<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monumento extends Model
{
    protected $table = 'monumentos';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'nombre',
        'descripcion',
        'imagen',
        'ubicacion',
        'imagen1',
        'imagen2',
        'imagen3'

    ];
}
