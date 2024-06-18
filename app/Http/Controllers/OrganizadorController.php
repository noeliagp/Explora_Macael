<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alojamiento; 
use App\Models\Hosteleria;
use App\Models\Actividad;
use Storage;

class OrganizadorController extends Controller
{
    public function organizaTuViaje() {
        $Alojamientos = Alojamiento::all();
        $Hostelerias = Hosteleria::all(); 
        $Actividades = Actividad::all();
        return view('frontend/organiza_tu_viaje', compact('Alojamientos', 'Hostelerias','Actividades'));
    }
}
