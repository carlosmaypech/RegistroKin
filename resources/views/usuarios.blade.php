@extends('master.inview')
@section('titulo','creando usuarios')

{{--Seccion del yield contenido--}}
@section('contenido')
<div id="usuario">
	<div class="container">

		@{{saludo}}
		
		<h1>Gestion de usuarios |<small>Creación</small><hr>
		</h1>

		<div class="row">
			<div class="col-md-6">
				<input type="text" placeholder="Escriba el usuario" class="form-control" v-model="nick"><br>

				<input type="password" placeholder="Escriba una contraseña" class="form-control" v-model="password"><br>

				<input type="text" placeholder="Escriba su nombre" class="form-control" v-model="nombre"><br>

				<input type="text" placeholder="Escriba sus apellidos" class="form-control" v-model="apellidos"><br>

				<!-- <input type="file" class="form-control" @change="alSeleccionar"> -->
				<br>

				<button class="btn btn-primary btn-block" @click="guardarUser()">Guardar</button>

				
			</div>
			{{-- Fin del row de 6 --}}
			<!-- <div class="col-md-6">
				<img v-bind:src="preview" class="img img-ronded" width="400px" height="250px" v-if="preview">	
			</div> -->
			
		</div>{{--form data permite adjuntar--}}
		
	</div>{{-- Fin del contenedor --}}
</div>{{-- Fin del vue --}}

@endsection

{{-- seccion de Scripts --}}
@push('scripts')
	<!-- <script src="js/vue-resource.js"></script> -->
	<script src="js/usuarios.js"></script>
@endpush