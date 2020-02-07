@extends('master.inview')
@section('titulo', 'DESMPENIOS')
@section('contenido')
<div id="desempenios">
	<h1>Bienvenido 	| Zona de desempenio</h1>
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
				<!-- <th>id</th> -->
				<th>NOMBRE</th>
				<th>APELLIDO</th>
				<th>COMPORTAMIENTO</th>
				<th>ACCIONES</th>
			</thead>
			<tbody>
				<tr v-for="(d,index) in filtroa">
					<!-- <td>@{{des.id}}</td> -->
					<td>@{{d.nombre_al}}</td>
					<td>@{{d.apellidos_al}}</td>
					<td>@{{d.comportamiento}}</td>
					<td>
						</div>
					<span class="btn btn-primary btn-xs glyphicon glyphicon-pencil" v-on:click="editDesempenio(d.id)"></span>

						<span class="btn btn-danger btn-xs glyphicon glyphicon-trash" v-on:click="eliminarDesempenio(d.id)"></span>
					</td>
				</tr>
			</tbody>
			
		</table>
		<div class="modal fade" tabindex="-1" role="dialog" id="add">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true" v-on:click="salir">x</span></button>
						<h4 class="modal-title" v-if="editando">Edita el desempenio</h4>
						<h4 class="modal-title" v-if="!editando">Agrega un desempenio</h4>
					</div>
					<div class="modal-body">


						<!-- <input type="text" placeholder="Ingrese la curp del tutor" class="form-control" v-model="id"><br> -->

						<input type="text" placeholder="Ingrese el nombre del alumno" class="form-control" v-model="nombre_al"><br>

						<input type="text" placeholder="Ingrese los apellidos del alumno" class="form-control" v-model="apellidos_al"><br>

						<input type="text" placeholder="Ingrese el comportamiento" class="form-control"v-model="comportamiento"><br>

					</div>

						<div class="modal-footer">
							<button type="submit" class="btn btn-primary" v-on:click="agregarDesempenio()" v-if="!editando">Guardar</button>
							<button type="submit" class="btn btn-primary" v-on:click="updateDesempenio()" v-if="editando">Editar</button>
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
	<script src="js/nota_desempenios/nota_desempenios.js"></script>
	<!-- <script src="js/vue.js"></script> -->
	<!-- <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script> -->
	
@endpush
<input type="hidden" name="route" value="{{url('/')}}"> 