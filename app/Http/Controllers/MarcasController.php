<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use App\Models\Producto;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class MarcasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marcas = Marca::all();
        return view('marca.list', compact('marcas','marcas'));
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('marca.create');
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nombre'=>'required',
            'referencia'=> 'required|unique:marcas,referencia'
        ]);
 
        $marca = new Marca([
            'nombre' => $request->get('nombre'),
            'referencia'=> $request->get('referencia')
        ]);
 
        $marca->save();
        return redirect('/marca')->with('success', 'Marca agregada');
    }
 
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function show(Marca $marca)
    {
        //
        return view('marca.view',compact('marca'));
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function edit(Marca $marca)
    {
        //
        return view('marca.edit',compact('marca'));
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $request->validate([
            'nombre'=>'required',
            'referencia'=> 'required|unique:marcas,referencia',

        ]);
 
 
        $marca = Marca::find($id);
        $marca->nombre = $request->get('nombre');
        $marca->referencia = $request->get('referencia');

        $marca->update();
 
        return redirect('/marca')->with('success', 'Marca actualizada');
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marca $marca)
    {

        if (Producto::where('marcaid', $marca->id)->exists()) {
            return redirect('/marca')->with('failed', 'No se puede eliminar la Marca. Hay registros asociados.');               
        } else {
            $marca->delete();
            return redirect('/marca')->with('success', 'Marca fue eliminada correctamente');    
        }

    }
}