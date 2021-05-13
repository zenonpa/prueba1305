@extends('marca.layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-11">
            <h2>Update Marca</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ url('marca') }}"> Regresar</a>
        </div>
    </div>
 
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Ups!</strong>Hay algun(os) error(es) en los cambios.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="py-3 rounded shadow" method="post" action="{{ route('marca.update',$marca->id) }}" >
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label for="txtnombre">Nombre de marca:</label>
            <input type="text" class="form-control" id="txtnombre" placeholder="Ingrese nombre de marca" name="nombre" value="{{ $marca->nombre }}">
        </div>
        <div class="form-group">
            <label for="txtreferencia">Referencia:</label>
            <input type="text" class="form-control" id="txtreferencia" placeholder="Ingrese referencia" name="referencia" value="{{ $marca->referencia }}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection