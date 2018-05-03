@extends('vendor.adminlte.layouts.app')
@section('htmlheader_title', 'Articulo') <!-- Titulo pagina -->
@section('contentheader_title', 'Articulo') <!-- Titulo pag content -->

@section('main-content')
<script src="{{ asset('js/Archivos/index.js') }}" defer></script>

    <div>
        <label for="">Nueva imagen</label>
         <input type="file" class="form-control" name="file" >
    </div>
    <div>
        <button class="btn btn-primary" onclick="nuevo();">Guardar</button>
    </div>
@endsection
