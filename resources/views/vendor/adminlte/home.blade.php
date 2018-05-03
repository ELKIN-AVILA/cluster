@extends('adminlte::layouts.app')
@section('contentheader_title', 'Inicio') <!-- Titulo pag content -->

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection
<script src="/js/app.js"></script>


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Inicio</div>

					<div class="panel-body">
						<h4>Bienvenidos a la principal</h4>
					
					</div>
					<div id="example"></div>
				</div>
			</div>
		</div>
	</div>
@endsection
