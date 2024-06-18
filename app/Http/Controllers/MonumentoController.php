<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Monumento;
use Storage;

class MonumentoController extends Controller
{
    public function index(){
        $Monumentos = Monumento::all();
        return view('backend/listar_monumentos', compact('Monumentos'));
    }

    public function crear(){
        return view('backend/crear_monumentos');
    }

    public function guardar(Request $request){
        $Monumento = new Monumento();
        
        // Procesar img
        if ($request->hasFile('img')) {
            $convertirimagen = $request->file('img');
            $tituloimagen = $convertirimagen->getClientOriginalName();
            $rutaimagen = $convertirimagen->storeAs('', $tituloimagen, 'public');
            $imagenurl = Storage::url($rutaimagen);
            $Monumento->imagen = $imagenurl;
        } else {
            $Monumento->imagen = ''; // Valor predeterminado si no se proporciona
        }

        // Procesar img1
        if ($request->hasFile('img1')) {
            $convertirimagen1 = $request->file('img1');
            $tituloimagen1 = $convertirimagen1->getClientOriginalName();
            $rutaimagen1 = $convertirimagen1->storeAs('', $tituloimagen1, 'public');
            $imagenurl1 = Storage::url($rutaimagen1);
            $Monumento->imagen1 = $imagenurl1;
        } else {
            $Monumento->imagen1 = ''; // Valor predeterminado si no se proporciona
        }

        // Procesar img2
        if ($request->hasFile('img2')) {
            $convertirimagen2 = $request->file('img2');
            $tituloimagen2 = $convertirimagen2->getClientOriginalName();
            $rutaimagen2 = $convertirimagen2->storeAs('', $tituloimagen2, 'public');
            $imagenurl2 = Storage::url($rutaimagen2);
            $Monumento->imagen2 = $imagenurl2;
        } else {
            $Monumento->imagen2 = ''; // Valor predeterminado si no se proporciona
        }

        // Procesar img3
        if ($request->hasFile('img3')) {
            $convertirimagen3 = $request->file('img3');
            $tituloimagen3 = $convertirimagen3->getClientOriginalName();
            $rutaimagen3 = $convertirimagen3->storeAs('', $tituloimagen3, 'public');
            $imagenurl3 = Storage::url($rutaimagen3);
            $Monumento->imagen3 = $imagenurl3;
        } else {
            $Monumento->imagen3 = ''; // Valor predeterminado si no se proporciona
        }

        // Guardar otros campos del modelo Monumento
        $Monumento->nombre = $request->nombre;
        $Monumento->descripcion = $request->descripcion;
        $Monumento->ubicacion = $request->ubicacion;

        $Monumento->save();

        $Monumentos = Monumento::all();
        return view('backend/listar_monumentos', compact('Monumentos'));
    }

    public function eliminar($id){
        $Monumento = Monumento::find($id);
        $Monumento->delete();

        $Monumentos = Monumento::all();
        return view('backend/listar_monumentos', compact('Monumentos'));
    }

    public function editar($id){
        $Monumento = Monumento::find($id);
        $Monumentos = Monumento::all();
        return view('backend/crear_monumentos', compact('Monumentos', 'Monumento'));
    }

    public function modificar(Request $request){
        $Monumento = Monumento::find($request->id);
        $Monumento->nombre = $request->nombre;
        $Monumento->descripcion = $request->descripcion;
        $Monumento->ubicacion = $request->ubicacion;

        // Procesar img
        if ($request->hasFile('img')) {
            $convertirimagen = $request->file('img');
            $tituloimagen = $convertirimagen->getClientOriginalName();
            $rutaimagen = $convertirimagen->storeAs('', $tituloimagen, 'public');
            $imagenurl = Storage::url($rutaimagen);
            $Monumento->imagen = $imagenurl;
        }

        // Procesar img1
        if ($request->hasFile('img1')) {
            $convertirimagen1 = $request->file('img1');
            $tituloimagen1 = $convertirimagen1->getClientOriginalName();
            $rutaimagen1 = $convertirimagen1->storeAs('', $tituloimagen1, 'public');
            $imagenurl1 = Storage::url($rutaimagen1);
            $Monumento->imagen1 = $imagenurl1;
        }

        // Procesar img2
        if ($request->hasFile('img2')) {
            $convertirimagen2 = $request->file('img2');
            $tituloimagen2 = $convertirimagen2->getClientOriginalName();
            $rutaimagen2 = $convertirimagen2->storeAs('', $tituloimagen2, 'public');
            $imagenurl2 = Storage::url($rutaimagen2);
            $Monumento->imagen2 = $imagenurl2;
        }

        // Procesar img3
        if ($request->hasFile('img3')) {
            $convertirimagen3 = $request->file('img3');
            $tituloimagen3 = $convertirimagen3->getClientOriginalName();
            $rutaimagen3 = $convertirimagen3->storeAs('', $tituloimagen3, 'public');
            $imagenurl3 = Storage::url($rutaimagen3);
            $Monumento->imagen3 = $imagenurl3;
        }

        $Monumento->save();

        $Monumentos = Monumento::all();
        return view('backend/listar_monumentos', compact('Monumentos'));
    }

    public function mostrarTodosMonumentos(){
        $Monumentos = Monumento::all();
        return view('frontend/que_ver', compact('Monumentos'));
    }

    public function mostrarMonumentosId($id){
        $Monumento = Monumento::find($id);
    
        // Crear un array para las imágenes
        $imagenes = [];
    
        // Añadir imágenes si existen
        if($Monumento->imagen) {
            $imagenes[] = $Monumento->imagen;
        }
        if($Monumento->imagen1) {
            $imagenes[] = $Monumento->imagen1;
        }
        if($Monumento->imagen2) {
            $imagenes[] = $Monumento->imagen2;
        }
        if($Monumento->imagen3) {
            $imagenes[] = $Monumento->imagen3;
        }
    
        // Devuelve la vista con el Monumento y las imágenes
        return view('frontend/monumento_informacion', compact('Monumento', 'imagenes'));
    }
}
