@extends('producto.layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-11">
            <h2>Update Producto</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ url('producto') }}"> Regresar</a>
        </div>
    </div>
 
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Ups!</strong> Hubieron problemas con su actualización<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="px-4 py-3 rounded shadow" method="post" action="{{ route('producto.update',$data['producto']->id) }}" >
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label for="txtnombre">Nombre de Producto:</label>
            <input type="text" class="form-control" id="txtnombre" placeholder="Ingrese nombre de Producto" name="nombre" value="{{ $data['producto']->nombre }}">
        </div>
        <div class="form-group">
            <label for="txttalla">Talla:</label>
            <select class="form-control" name="talla" id="txttalla">
                <option {{ $data['producto']->talla === "S" ? 'selected' : '' }} value="S">SMALL</option>
                <option {{ $data['producto']->talla === "M" ? 'selected' : '' }} value="M">MEDIUM</option>
                <option {{ $data['producto']->talla === "L" ? 'selected' : '' }} value="L">LARGE</option>
            </select>
        </div>        
        <div class="form-group">
            <label for="txtobervaciones">Observaciones:</label>
            <input type="text" class="form-control" id="txtobservaciones" placeholder="Ingrese referencia" name="observaciones" value="{{ $data['producto']->observaciones }}">
        </div>
        <div class="form-group">
            <label for="txtmarca">Marca del Producto:</label>
            <select class="form-control" name="marcaid" id="txtmarca" selectedIndex="{{ $data['producto']->marcaid }}">
                @foreach ($data['marcas'] as $marca)
                    <option {{ old('marcaid') === strval($marca->id) ? 'selected' : '' }} value={{$marca->id}}>{{$marca->nombre}}</option>
                @endforeach
            </select>
        </div>          
        <div class="form-group">
            <label for="txtcantidad">Cantidad en inventario:</label>
            <input type="text" class="form-control" id="txtcantidad" placeholder="Ingrese cantidad" name="cantidad"  value="{{ $data['producto']->cantidad }}">
        </div>     
        <div class="form-group">
            <label for="txtfecembarque">Fecha de Embarque:</label>
            <input type="date" class="form-control" id="txtfecembarque"  name="fecembarque" value="{{ $data['producto']->fecembarque }}">
        </div>   


        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection