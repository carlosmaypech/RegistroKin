@extends('master.inview')
@section('titulo', 'LISTA')
@section('contenido')
<div id="asistencias">
	<h1>Bienvenido 	| Zona de lista de asistencias</h1>
	<div class="row">
		<div class="col-xs-8">
			<input type="text" placeholder="Escriba el nombre del alumno" class="form-control" v-model="buscar">
			</div>
		</div>
		<!-- A buscar: @{{buscar}}<br><br> -->
	<button class="btn btn-success glyphicon glyphicon-user" v-on:click="showModal()">Agregar</button>
	<div class="row">
	<div class="col-xs-12 col-md-6"><br>
		<div class="box box-danger">
		<table class="table table-bordered">
			<thead style="background: #ffffcc">
				
				<th>NOMBRE</th>
				<th>APELLIDO</th>
				<th>FECHA</th>
				<th>ACCIONES</th>
			</thead>
			<tbody>
				<tr v-for="(f,index) in filtroa">
					 
					<td>@{{f.nombre_al}}</td>
					<td>@{{f.apellido_al}}</td>
					<td>@{{f.fecha}}</td>
					<td>
						</div>
					<span class="btn btn-primary btn-xs glyphicon glyphicon-pencil" v-on:click="editAsistencia(f.id_asis)"></span>

						<span class="btn btn-danger btn-xs glyphicon glyphicon-trash" v-on:click="eliminarAsistencia(f.id_asis)"></span>
					</td>
				</tr>
			</tbody>
			
		</table>
		<div class="modal fade" tabindex="-1" role="dialog" id="add">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true" v-on:click="salir">x</span></button>
						<h4 class="modal-title" v-if="editando">Editar</h4>
						<h4 class="modal-title" v-if="!editando">Agrega la asistencia del alumno</h4>
					</div>
					<div class="modal-body">


						<!-- <input type="text" placeholder="Ingrese la curp del tutor" class="form-control" v-model="id"><br> -->

						<input type="text" placeholder="Ingrese el nombre del alumno" class="form-control" v-model="nombre_al"><br>

						<input type="text" placeholder="Ingrese los apellidos del alumno" class="form-control" v-model="apellido_al"><br>
						<!-- tomar en cuenta la función del Type -->
						<input type="date" placeholder="Ingrese la fecha" class="form-control"v-model="fecha"><br>

					</div>

						<div class="modal-footer">
							<button type="submit" class="btn btn-primary" v-on:click="agregarAsistencia()" v-if="!editando">Guardar</button>
							<button type="submit" class="btn btn-primary" v-on:click="updateAsistencia()" v-if="editando">Editar</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection


@push('scripts')
	<!-- <script src="js/vue-resource.min.js"></script> -->
	<script src="js/notasistencias/notasistencias.js"></script>
	<!-- <script src="js/vue.js"></script> -->
	<!-- <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script> -->
	
@endpush
<input type="hidden" name="route" value="{{url('/')}}"> 