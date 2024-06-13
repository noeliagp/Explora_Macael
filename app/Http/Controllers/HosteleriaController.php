<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hosteleria;
use Storage;
class HosteleriaController extends Controller
{
    public function index(){
        $Hostelerias = Hosteleria::all();
        // Devuelve la vista con las Hostelerias
        return view('backend/listar_hostelerias', compact('Hostelerias'));
    }

    public function crear(){
    return view('backend/crear_hostelerias');
    }

    public function guardar(Request $request){
        $convertirimagen = $request->file('img');
        $tituloimagen = $convertirimagen->getClientOriginalName();
        $rutaimagen = $convertirimagen->storeAs('', $tituloimagen, 'public');
        $imagenurl = Storage::url($rutaimagen);

        $Hosteleria = new Hosteleria();
        $Hosteleria->nombre = $request->nombre;
        $Hosteleria->descripcion = $request->descripcion;
        $Hosteleria->imagen = $imagenurl;
        $Hosteleria->ubicacion = $request->ubicacion;
        $Hosteleria->horario = $request->horario;
        $Hosteleria->telefono = $request->telefono;
        $Hosteleria->save();
        
        $Hostelerias = Hosteleria::all();
        return view('backend/listar_hostelerias', compact('Hostelerias'));
    }

    public function eliminar($id){
        $Hosteleria = Hosteleria::find($id);
        $Hosteleria->delete();

        $Hostelerias = Hosteleria::all();
        return view('backend/listar_hostelerias', compact('Hostelerias'));
    }

    public function editar($id){
        $Hosteleria = Hosteleria::find($id);
        $Hostelerias = Hosteleria::all();
        return view('backend/crear_hostelerias', compact('Hostelerias', 'Hosteleria'));
    }

    public function modificar(Request $request){
        $Hosteleria = Hosteleria::find($request->id);
    
        $Hosteleria->nombre = $request->nombre;
        $Hosteleria->descripcion = $request->descripcion;
        $Hosteleria->ubicacion = $request->ubicacion;
        $Hosteleria->horario = $request->horario;
        $Hosteleria->telefono = $request->telefono;
    
        // Solo actualiza la imagen si se sube una nueva foto
        if ($request->hasFile('img')) {
            $convertirimagen = $request->file('img');
            $tituloimagen = $convertirimagen->getClientOriginalName();
            $rutaimagen = $convertirimagen->storeAs('', $tituloimagen, 'public');
            $imagenurl = Storage::url($rutaimagen);
            $Hosteleria->imagen = $imagenurl;
        }
    
        $Hosteleria->save();
    
        $Hostelerias = Hosteleria::all();
        return view('backend/listar_hostelerias', compact('Hostelerias'));
    }
    
    public function mostrarTodasHostelerias(){
        $Hostelerias = Hosteleria::all();
        return view('frontend/donde_comer', compact('Hostelerias'));
    }
    public function mostrarHosteleriasId($id){
        $Hosteleria = Hosteleria::findOrFail($id);
        return view('frontend/hosteleria_informacion', compact('Hosteleria'));
    }
}
