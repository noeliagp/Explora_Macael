<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actividad;
use Storage;
class ActividadController extends Controller
{
    public function index(){
        $Actividades = Actividad::all();
        // Devuelve la vista con las Actividads
        return view('backend/listar_actividades', compact('Actividades'));
    }

    public function crear(){
    return view('backend/crear_actividades');
    }

    public function guardar(Request $request){
        $convertirimagen = $request->file('img');
        $tituloimagen = $convertirimagen->getClientOriginalName();
        $rutaimagen = $convertirimagen->storeAs('', $tituloimagen, 'public');
        $imagenurl = Storage::url($rutaimagen);

        $Actividad = new Actividad();
        $Actividad->nombre = $request->nombre;
        $Actividad->descripcion = $request->descripcion;
        $Actividad->imagen = $imagenurl;
        $Actividad->ubicacion = $request->ubicacion;
        $Actividad->precio = $request->precio;
        $Actividad->duracion = $request->duracion;
        $Actividad->enlace_reserva = $request->enlace_reserva;
        $Actividad->save();
        
        $Actividades = Actividad::all();
        return view('backend/listar_actividades', compact('Actividades'));
    }

    public function eliminar($id){
        $Actividad = Actividad::find($id);
        $Actividad->delete();

        $Actividades = Actividad::all();
        return view('backend/listar_actividades', compact('Actividades'));
    }

    public function editar($id){
        $Actividad = Actividad::find($id);
        $Actividades = Actividad::all();
        return view('backend/crear_actividades', compact('Actividades', 'Actividad'));
    }

    public function modificar(Request $request){
        $Actividad = Actividad::find($request->id);
    
        $Actividad->nombre = $request->nombre;
        $Actividad->descripcion = $request->descripcion;
        $Actividad->ubicacion = $request->ubicacion;
        $Actividad->precio = $request->precio;
        $Actividad->duracion = $request->duracion;
        $Actividad->enlace_reserva = $request->enlace_reserva;
    
        // Solo actualiza la imagen si se sube una nueva foto
        if ($request->hasFile('img')) {
            $convertirimagen = $request->file('img');
            $tituloimagen = $convertirimagen->getClientOriginalName();
            $rutaimagen = $convertirimagen->storeAs('', $tituloimagen, 'public');
            $imagenurl = Storage::url($rutaimagen);
            $Actividad->imagen = $imagenurl;
        }
    
        $Actividad->save();
    
        $Actividades = Actividad::all();
        return view('backend/listar_actividades', compact('Actividades'));
    }
    
    public function mostrarTodasActividades(){
        $Actividades = Actividad::all();
        return view('frontend/que_hacer', compact('Actividades'));
    }
    public function mostrarActividadesId($id){
        $Actividad = Actividad::findOrFail($id);
        return view('frontend/actividad_informacion', compact('Actividad'));
    }
}
