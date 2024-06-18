<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alojamiento;
use Storage;

class AlojamientoController extends Controller
{
    public function index(){
        $Alojamientos = Alojamiento::all();
        return view('backend/listar_alojamientos', compact('Alojamientos'));
    }

    public function crear(){
        return view('backend/crear_alojamientos');
    }
    public function guardar(Request $request){
        $Alojamiento = new Alojamiento();
        
        // Procesar img
        if ($request->hasFile('img')) {
            $convertirimagen = $request->file('img');
            $tituloimagen = $convertirimagen->getClientOriginalName();
            $rutaimagen = $convertirimagen->storeAs('', $tituloimagen, 'public');
            $imagenurl = Storage::url($rutaimagen);
            $Alojamiento->imagen = $imagenurl;
        } else {
            $Alojamiento->imagen = ''; 
        }
    
        // Procesar img1
        if ($request->hasFile('img1')) {
            $convertirimagen1 = $request->file('img1');
            $tituloimagen1 = $convertirimagen1->getClientOriginalName();
            $rutaimagen1 = $convertirimagen1->storeAs('', $tituloimagen1, 'public');
            $imagenurl1 = Storage::url($rutaimagen1);
            $Alojamiento->imagen1 = $imagenurl1;
        } else {
            $Alojamiento->imagen1 = ''; 
    
        // Procesar img2
        if ($request->hasFile('img2')) {
            $convertirimagen2 = $request->file('img2');
            $tituloimagen2 = $convertirimagen2->getClientOriginalName();
            $rutaimagen2 = $convertirimagen2->storeAs('', $tituloimagen2, 'public');
            $imagenurl2 = Storage::url($rutaimagen2);
            $Alojamiento->imagen2 = $imagenurl2;
        } else {
            $Alojamiento->imagen2 = ''; 
        }
    
        // Procesar img3
        if ($request->hasFile('img3')) {
            $convertirimagen3 = $request->file('img3');
            $tituloimagen3 = $convertirimagen3->getClientOriginalName();
            $rutaimagen3 = $convertirimagen3->storeAs('', $tituloimagen3, 'public');
            $imagenurl3 = Storage::url($rutaimagen3);
            $Alojamiento->imagen3 = $imagenurl3;
        } else {
            $Alojamiento->imagen3 = ''; 
        }
    
        $Alojamiento->nombre = $request->nombre;
        $Alojamiento->descripcion = $request->descripcion;
        $Alojamiento->ubicacion = $request->ubicacion;
        $Alojamiento->enlace_reserva = $request->enlace_reserva;
    
        $Alojamiento->save();
    
        $Alojamientos = Alojamiento::all();
        return view('backend/listar_alojamientos', compact('Alojamientos'));
    }
}
    public function eliminar($id){
        $Alojamiento = Alojamiento::find($id);
        $Alojamiento->delete();

        $Alojamientos = Alojamiento::all();
        return view('backend/listar_alojamientos', compact('Alojamientos'));
    }

    public function editar($id){
        $Alojamiento = Alojamiento::find($id);
        $Alojamientos = Alojamiento::all();
        return view('backend/crear_alojamientos', compact('Alojamientos', 'Alojamiento'));
    }

    public function modificar(Request $request){
        $Alojamiento = Alojamiento::find($request->id);
        $Alojamiento->nombre = $request->nombre;
        $Alojamiento->descripcion = $request->descripcion;
        $Alojamiento->ubicacion = $request->ubicacion;
        $Alojamiento->enlace_reserva = $request->enlace_reserva;

        // Procesar img
        if ($request->hasFile('img')) {
            $convertirimagen = $request->file('img');
            $tituloimagen = $convertirimagen->getClientOriginalName();
            $rutaimagen = $convertirimagen->storeAs('', $tituloimagen, 'public');
            $imagenurl = Storage::url($rutaimagen);
            $Alojamiento->imagen = $imagenurl;
        }

        // Procesar img1
        if ($request->hasFile('img1')) {
            $convertirimagen1 = $request->file('img1');
            $tituloimagen1 = $convertirimagen1->getClientOriginalName();
            $rutaimagen1 = $convertirimagen1->storeAs('', $tituloimagen1, 'public');
            $imagenurl1 = Storage::url($rutaimagen1);
            $Alojamiento->imagen1 = $imagenurl1;
        }

        // Procesar img2
        if ($request->hasFile('img2')) {
            $convertirimagen2 = $request->file('img2');
            $tituloimagen2 = $convertirimagen2->getClientOriginalName();
            $rutaimagen2 = $convertirimagen2->storeAs('', $tituloimagen2, 'public');
            $imagenurl2 = Storage::url($rutaimagen2);
            $Alojamiento->imagen2 = $imagenurl2;
        }

        // Procesar img3
        if ($request->hasFile('img3')) {
            $convertirimagen3 = $request->file('img3');
            $tituloimagen3 = $convertirimagen3->getClientOriginalName();
            $rutaimagen3 = $convertirimagen3->storeAs('', $tituloimagen3, 'public');
            $imagenurl3 = Storage::url($rutaimagen3);
            $Alojamiento->imagen3 = $imagenurl3;
        }

        $Alojamiento->save();

        $Alojamientos = Alojamiento::all();
        return view('backend/listar_alojamientos', compact('Alojamientos'));
    }

    public function mostrarTodosAlojamientos(){
        $Alojamientos = Alojamiento::all();
        return view('frontend/donde_dormir', compact('Alojamientos'));
    }

    public function mostrarAlojamientosId($id){
        $Alojamiento = Alojamiento::find($id);
    
        // Crear un array para las imágenes
        $imagenes = [];
    
        // Añadir imágenes si existen
        if($Alojamiento->imagen) {
            $imagenes[] = $Alojamiento->imagen;
        }
        if($Alojamiento->imagen1) {
            $imagenes[] = $Alojamiento->imagen1;
        }
        if($Alojamiento->imagen2) {
            $imagenes[] = $Alojamiento->imagen2;
        }
        if($Alojamiento->imagen3) {
            $imagenes[] = $Alojamiento->imagen3;
        }
    
        // Devuelve la vista con el Alojamiento y las imágenes
        return view('frontend/alojamiento_informacion', compact('Alojamiento', 'imagenes'));
    }
}
