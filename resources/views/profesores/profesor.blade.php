@extends('master.inview')
@section('titulo', 'PROFESORES')
@section('contenido')
<div id="profesores">
	<h1>Bienvenido 	| espacio de maestros</h1>
		<div class="row">
			<div class="col-xs-8">
				<input type="text" placeholder="Escriba el nombre del profesor" class="form-control" v-model="buscar">
			</div>
		</div>
<button class="btn btn-success glyphicon glyphicon-user" v-on:click="showModal()">Agregar</button>
<div class="row">
	<div class="col-xs-12 col-md-6"><br>
		<div class="box box-danger">
		<table class="table table-bordered">
			<thead style="background: #ffffcc">
				<!-- <th>CEDULA</th> -->
				<th>NOMBRE</th>
				<th>APELLIDO</th>
				<th>TELEFONO</th>
				<!-- <th>CURP</th> -->
				<th>ACCIONES</th>
			</thead>
			<tbody>
				<tr v-for="(p,index) in filtrop">
					<!-- <td>@{{p.cedula}}</td> -->
					<td>@{{p.nombre}}</td>
					<td>@{{p.apellidos}}</td>
					<td>@{{p.telefono}}</td>
					<!-- <td>@{{a.curp}}</td> -->
					<td>
						</div>
						<span class="btn btn-primary btn-xs glyphicon glyphicon-pencil" v-on:click="editProfesor(p.cedula)"></span>

						<span class="btn btn-danger btn-xs glyphicon glyphicon-trash" v-on:click="eliminarProfesor(p.cedula)"></span>
					</td>
				</tr>
			</tbody>
			
		</table>
		<div class="modal fade" tabindex="-1" role="dialog" id="add">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true" v-on:click="salir">x</span></button>
						<h4 class="modal-title" v-if="editando">Edita el profesor</h4>
						<h4 class="modal-title" v-if="!editando">Agrega un profesor</h4>
					</div>
					<div class="modal-body">


						<input type="text" placeholder="Ingrese la cedula del maestro" class="form-control" v-model="cedula"><br>

						<input type="text" placeholder="Ingrese el nombre del maestro" class="form-control" v-model="nombre"><br>

						<input type="text" placeholder="Ingrese los apellidos del maestro" class="form-control" v-model="apellidos"><br>

						<input type="text" placeholder="Ingrese el telefono del maestro" class="form-control"v-model="telefono"><br>

						<!-- <input type="text" placeholder="Ingrese la curp de alumno" class="form-control" v-model="curp"><br> -->


					</div>

					<div class="modal-footer">
						<button type="submit" class="btn btn-primary" v-on:click="agregarProfesor()" v-if="!editando">Guardar</button>
						<button type="submit" class="btn btn-primary" v-on:click="updateProfesor()" v-if="editando">Editar</button>
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
	<script src="js/profesores/profesores.js"></script>
	<!-- <script src="js/vue.js"></script> -->
	<!-- <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script> -->
	
@endpush
<input type="hidden" name="route" value="{{url('/')}}">