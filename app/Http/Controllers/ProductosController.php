<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Producto;
use App\Models\Marca;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();
        return view('producto.list', compact('productos','productos'));
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $marcas = Marca::all();
        return view('producto.create', ['marcas' => $marcas]);
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
            'talla' => 'required|in:S,M,L',
            'observaciones'=> 'required',
            'marcaid' => 'required|integer|min:0',
            'cantidad' => 'required|integer|min:0|max:65535',
            'fecembarque' => 'required'
        ]);
 
        $product = new Producto([
            'nombre' => $request->get('nombre'),
            'talla'=> $request->get('talla'),
            'observaciones'=> $request->get('observaciones'),
            'marcaid'=> $request->get('marcaid'),
            'cantidad'=> $request->get('cantidad'),
            'fecembarque'=> $request->get('fecembarque')
        ]);
 
        $product->save();
        return redirect('/producto')->with('success', 'Producto ha sido agregado');
    }
 
    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        $marcaid = $producto->marcaid;
        $marca = Marca::find($marcaid);
        $data['producto']=$producto;
        $data['marca']=$marca;        

        return view('producto.view', ['data' => $data]);
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        //
        $marcas = Marca::all();
        $data['producto']=$producto;
        $data['marcas']=$marcas;   

        return view('producto.edit', ['data' => $data]);
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'nombre'=>'required',
            'talla' => 'required',
            'observaciones'=> 'required',
            'marcaid' => 'required|integer|min:0',
            'cantidad' => 'required|integer|min:0|max:65535',
            'fecembarque' => 'required'
        ]);
 
 
        $producto = Producto::find($id);
        $producto->nombre = $request->get('nombre');
        $producto->talla = $request->get('talla');
        $producto->observaciones = $request->get('observaciones');
        $producto->marcaid= $request->get('marcaid');
        $producto->cantidad = $request->get('cantidad');
        $producto->fecembarque = $request->get('fecembarque');
 
        $producto->update();
 
        return redirect('/producto')->with('success', 'Producto actualizado');
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
        $producto->delete();
        return redirect('/producto')->with('success', 'Producto fue eliminado correctamente');
    }
}