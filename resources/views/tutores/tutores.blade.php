@extends('master.inview')
@section('titulo', 'TUTORES')
@section('contenido')
<div id="tutores">
	<h1>Bienvenido | zona de tutor</h1>
		<div class="row">
			<div class="col-xs-8">
				<div class="four wide column">
			<div class="ui input">
				<input type="text" placeholder="busque al tutor que desea encontrar" v-model="buscar">
				<!-- <div class="four wide column">
			<div class="ui inverted purple button">Buscar</div>
			
		</div> -->
			</div>
		</div><br>
				<!-- <input type="text" placeholder="Escriba el nombre del tutor" class="form-control" v-model="buscar"> -->
			</div>
		</div>
<button class="ui inverted green button" v-on:click="showModal()">Agregar</button>
<div class="row">
	<div class="col-xs-12 col-md-8"><br>
		<div class="box box-danger">
		<table class="table table-bordered">
			<thead style="background: #ffffcc">
				<!-- <th>curp</th> -->
				<th>NOMBRE</th>
				<th>APELLIDOS</th>
				<th>TELEFONO</th>
				<!-- <th>CALLE</th>
				<th>ENTRE</th>
				<th>CRUZAMIENTO</th> -->
				<th>ACCIONES</th>
			</thead>
			<tbody>
				<tr v-for="(c,index) in filtrot">
					<!-- <td>@{{c.id_curp}}</td> -->
					<td>@{{c.nombre}}</td>
					<td>@{{c.apellidos}}</td>
					<td>@{{c.telefono}}</td>
					<!-- <td>@{{c.calle}}</td>
					<td>@{{c.crto_a}}</td>
					<td>@{{c.crto_b}}</td> -->
					<td>
						</div>
						<span class="ui inverted primary button" v-on:click="editTutor(c.id_curp)">Editar</span>

						<span class="ui inverted red button" v-on:click="eliminarTutor(c.id_curp)">Eliminar</span>
					</td>
				</tr>
			</tbody>
			
		</table>
		<div class="modal fade" tabindex="-1" role="dialog" id="add">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true" v-on:click="salir">x</span></button>
						<h4 class="modal-title" v-if="editando">Edita el alumno</h4>
						<h4 class="modal-title" v-if="!editando">Agrega un alumno</h4>
					</div>
					<div class="modal-body">


						<input type="text" placeholder="Ingrese la curp del tutor" class="form-control" v-model="id_curp"><br>

						<input type="text" placeholder="Ingrese el nombre del tutor" class="form-control" v-model="nombre"><br>

						<input type="text" placeholder="Ingrese los apellidos del tutor" class="form-control" v-model="apellidos"><br>

						<input type="int" placeholder="Ingrese el telefono del tutor" class="form-control"v-model="telefono"><br>

						<input type="int" placeholder="Ingrese la calle" class="form-control" v-model="calle"><br>

						<input type="int" placeholder="Entre la calle" class="form-control" v-model="crto_a"><br>

						<input type="int" placeholder="Ingrese el cruzamiento de calle" class="form-control" v-model="crto_b"><br>


					</div>

						<div class="modal-footer">
							<button type="submit" class="ui inverted primary button" v-on:click="agregarTutor()" v-if="!editando">Guardar</button>
							<button type="submit" class="ui inverted primary button" v-on:click="updateTutor()" v-if="editando">Editar</button>
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
	<script src="js/tutores/tutores.js"></script>
	<!-- <script src="js/vue.js"></script> -->
	<!-- <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script> -->
	
@endpush
<!-- esta ruta es importante en la vista -->
<input type="hidden" name="route" value="{{url('/')}}">