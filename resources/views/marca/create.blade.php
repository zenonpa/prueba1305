@extends('marca.layouts.app')
 
@section('content')
    <div class="row">
    <div class="col-12 col-sm10 col-lg-6 mx-auto">
        <div class="row">
            <div class="col-lg-11">
                <h2>Agregar Marca</h2>
            </div>
            <div class="col-lg-1">
                <a class="btn btn-primary btn-block" href="{{ url('marca') }}"> Regresar</a>
            </div>
        </div>    
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Ups!</strong> Hay algunos problemas con el registro.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form  class="px-4 py-3 rounded shadow"  action="{{ route('marca.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="txtnombre">Nombre de Marca:</label>
                <input type="text" class="form-control bg-light shadow-sm border-0" id="txtnombre" placeholder="Ingrese nombre de marca" name="nombre" value="{{ old('txtnombre')}}">
            </div>
            <div class="form-group">
                <label for="txtreferencia">Referencia:</label>
                <input type="text" class="form-control bg-light shadow-sm border-0" id="txtreferencia" placeholder="Ingrese referencia" name="referencia"  value="{{ old('txtreferencia')}}">
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar</button>
        </form>
    </div>
    </div>
@endsection