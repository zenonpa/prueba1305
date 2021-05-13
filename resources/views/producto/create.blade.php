@extends('producto.layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-11">
            <h2>Agregar Producto</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ url('producto') }}"> Regresar</a>
        </div>
    </div>
 
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Ups!</strong> Hubieron problemas con su registro<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    @if (strstr($error,"marcaid"))
                        <li>Revisa tu Marca elegida</li>
                    @elseif (strstr($error,"fecembarque"))
                        <li>Fecha de embarque inválida. Revise por favor.</li>                
                    @else
                        <li>{{ $error }}</li>                    
                    @endif                
                @endforeach
            </ul>
        </div>
    @endif
    <form class="px-4 py-3 rounded shadow"  action="{{ route('producto.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="txtnombre">Nombre de Producto:</label>
            <input type="text" class="form-control" id="txtnombre" placeholder="Ingrese nombre de producto" name="nombre"  value="{{ old('nombre')}}">
        </div>
        <div class="form-group">
            <label for="txttalla">Talla:</label>
            <select class="form-control" name="talla" id="txttalla">
                <option value=-1>Elige</option>
                <option {{ old('talla') === 'S' ? 'selected' : '' }}  value="S">SMALL</option>
                <option {{ old('talla') === 'M' ? 'selected' : '' }}  value="M">MEDIUM</option>
                <option {{ old('talla') === 'L' ? 'selected' : '' }}  value="L">LARGE</option>
            </select>
        </div>        
        <div class="form-group">
            <label for="txtobervaciones">Observaciones:</label>
            <input type="text" class="form-control" id="txtobservaciones" placeholder="Ingrese referencia" name="observaciones" value="{{ old('observaciones')}}">
        </div>
        <div class="form-group">
            <label for="txtmarca">Marca del Producto:</label>
            <select class="form-control" name="marcaid" id="txtmarca">
                <option value=-1>Elige</option>
                @foreach ($marcas as $marca)
                    <option {{ old('marcaid') === strval($marca->id) ? 'selected' : '' }} value={{$marca->id}}>{{$marca->nombre}}</option>
                @endforeach
            </select>
        </div>          
        <div class="form-group">
            <label for="txtcantidad">Cantidad en inventario:</label>
            <!-- <input type="number" class="form-control" id="txtcantidad" pattern="[0-9]"
                   placeholder="Ingrese cantidad" name="cantidad"  value="{{ old('cantidad')}}"> -->
            <input  class="form-control" type="text" id="txtcantidad" name="cantidad" placeholder="Ingrese cantidad" value="{{ old('cantidad')}}"
                   oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" />

        </div>     
        <div class="form-group">
            <label for="txtfecembarque">Fecha de embarque:</label>
            <input type="date" class="form-control" id="txtfecembarque"  name="fecembarque" value="{{ old('fecembarque')}}">
        </div>                 
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection