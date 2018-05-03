@extends('vendor.adminlte.layouts.app')
@section('htmlheader_title', 'Articulo') <!-- Titulo pagina -->
@section('contentheader_title', 'Articulo') <!-- Titulo pag content -->

@section('main-content')
<script src="{{ asset('js/Articulo/index.js') }}" defer></script>
    <div class="row">
        
            <h3>Crear Un nuevo Articulo</h3>
            <div id="prueba">
            </div>
            <div class="col-sm-12">
                <table class="table table-bordered">
                    <thead>
                        <th class="success">Titulo</th>
                        <th class="success">Contenido</th>
                        <th>
                        <button onclick="nuevo();" class="btn btn-primary">Nuevo</button>
                        </th>
                    </thead>
                    <tbody>
                        <!--- poner validacion de usuarios-->
                        @foreach($art as $ar)
                        
                        <tr>
                            <td>{{ $ar->titulo }}</td>
                            <td>{{ $ar->contenido }}</td>
                            <td>
                                <button class="btn btn-warning" onclick="editar({{ $ar->id }});">Editar</button>
                                <button class="btn btn-danger" onclick="eliminar({{ $ar->id}});">X</button>
                            
                            </td>

                        </tr>
                        @endforeach
                   
                    </tbody>
                </table>
                {{ $art->links() }}
            </div>
    </div>


<div class="modal" class="modal-fade" role="dialog" id="nuevo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"> Ingreso de Articulo</h4>
            </div>
            <div class="modal-body">
                <form action="" class="form-horizontal">
                <input type="hidden" name="id" id="id" value="{{ Auth::user()->id}}">
                    <div class="form-group row add">
                        <label for="titulo" class="control-label col-sm-2">Titulo:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="ingrese titulo" required>
                            <p class="error text-center alert alert-danger hidden"></p>
                        </div>
                    </div>
                    <div class="form-group row add">
                        <label for="body" class="control-label col-sm-2">Contenido:</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="contenido" id="contenido" placeholder="Ingrese Contenido"></textarea>
                            <p class="error text-center alert alert-danger hidden"></p>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                    <button class="btn btn-warning" onclick="guardar();">
                        Guardar 
                    </button>
                    <button class="btn btn-danger" type="button" data-dismiss="modal">
                        Cancelar
                    </button>
            </div>  
        </div>
    </div>

</div>


<div class="modal" class="modal-fade" role="dialog" id="editar">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Editar Post</h4>
            </div>
            <div class="modal-body">
                <form action="" class="form-horizontal">
                <input	type="hidden"	name="idedi" id="idedi"	value="">
                    <div class="form-group">
                        <label for="title" class="control-label col-sm-2">Title:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="titleedi" name="titleedi" placeholder="ingrese titulo" required>
                            <p class="error text-center alert alert-danger hidden"></p>
                        </div>
                    </div>
                    <div class="form-group row add">
                        <label for="body" class="control-label col-sm-2">Body:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="bodyedi" id="bodyedi" placeholder="Ingrese Body" required>
                            <p class="error text-center alert alert-danger hidden"></p>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                    <button class="btn btn-warning" onclick="guardaredi();">
                        Guardar 
                    </button>
                    <button class="btn btn-danger" type="button" data-dismiss="modal">
                        Cancelar
                    </button>
            </div>  
        </div>
    </div>

</div>

@endsection