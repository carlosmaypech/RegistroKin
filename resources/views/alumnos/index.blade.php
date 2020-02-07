@extends('master.inview')
@section('titulo', 'ALUMNOS')
@section('contenido')
<div id="alumnos">
	<h1>Bienvenido 	| Espacio de alumnos</h1>
	<div class="row">
		<div class="col-xs-8">
			<input type="text" placeholder="Escriba el nombre del alumno" class="form-control" v-model="buscar">
			</div>
		</div>
<button class="btn btn-success glyphicon glyphicon-user" v-on:click="showModal()">Agregar</button>
<div class="row">
	<div class="col-xs-12 col-md-6"><br>
		<div class="box box-danger">
		<table class="table table-bordered">
			<thead style="background: #ffffcc">
				<th>MATRICULA</th>
				<th>NOMBRE</th>
				<th>APELLIDO</th>
				<th>EDAD</th>
				<!-- <th>CURP</th> -->
				<th>ACCIONES</th>
			</thead>
			<tbody>
				<tr v-for="(a,index) in filtro">
					<td>@{{a.matricula}}</td>
					<td>@{{a.nombre_al}}</td>
					<td>@{{a.apellidos_al}}</td>
					<td>@{{a.edad}}</td>
					<!-- <td>@{{a.curp}}</td> -->
					<td>
						</div>
						<span class="btn btn-primary btn-xs glyphicon glyphicon-pencil" v-on:click="editAlumno(a.matricula)"></span>

						<span class="btn btn-danger btn-xs glyphicon glyphicon-trash" v-on:click="eliminarAlumno(a.matricula)"></span>
					</td>
				</tr>
			</tbody>
			
		</table>
		<div class="modal fade" tabindex="-1" role="dialog" id="add_alumnos">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true" v-on:click="salir">x</span></button>
						<h4 class="modal-title" v-if="editando">Edita el alumno</h4>
						<h4 class="modal-title" v-if="!editando">Agrega un alumno</h4>
					</div>
					<div class="modal-body">


						<input type="text" placeholder="Ingrese la matricula de alumno" class="form-control" v-model="matricula"><br>

						<input type="text" placeholder="Ingrese el nombre de alumno" class="form-control" v-model="nombre_al"><br>

						<input type="text" placeholder="Ingrese los apellidos de alumno" class="form-control" v-model="apellidos_al"><br>

						<input type="number" placeholder="Ingrese la edad de alumno" class="form-control"v-model="edad"><br>

						<input type="text" placeholder="Ingrese la curp de alumno" class="form-control" v-model="curp"><br>


					</div>

						<div class="modal-footer">
							<button type="submit" class="btn btn-primary" v-on:click="agregarAlumno()" v-if="!editando">Guardar</button>
							<button type="submit" class="btn btn-primary" v-on:click="updateAlumno()" v-if="editando">Editar</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
</div>

@endsection


@push('scripts')
	<!-- en este scripts de la vista solo va el js, ya que las funciones van en la vista eredada como se me explico por el compañero -->
	<script src="js/alumnos/alumnos.js"></script>
	
@endpush
<input type="hidden" name="route" value="{{url('/')}}">