var ruta = document.querySelector("[name=route]").value;
var urlProfesor=ruta + '/apiProf';

new Vue({
	http:{
		headers:{
			'X-CSRF-TOKEN':document.querySelector('#token').getAttribute('value')
		}
	},

	el:'#profesores',

	created:function(){
		this.getProfesores();
	},
	data:{
		profesores:[],
		buscar:'',
		cedula:'',
		nombre:'',
		apellidos:'',
		telefono:'',
		/*curp:'',*/
		editando:false,
		auxProfesor:''
	},
	//Inicio de metodo
	methods:{

		getProfesores:function(){this.$http.get(urlProfesor)
			.then(function(response){
				this.profesores=response.data
				/*console.log(response);*/

			}).catch(function(response){
				console.log(response);
			});
		},
		showModal:function(){
		$('#add').modal('show');
	},
	agregarProfesor:function(){
		var profesor={
			cedula:this.cedula,
			nombre:this.nombre,
			apellidos:this.apellidos,
			telefono:this.telefono
			/*curp:this.curp*/
		};
		this.$http.post(urlProfesor,profesor)
		.then(function(json){
			this.getProfesores();
			$('#add').modal('hide');
			alert("Profesor agregado con exito");
		});
	},
	eliminarProfesor:function(id,profesor){
		var resp= confirm("Estas seguro de eliminar al maestro: " + profesor)
		if (resp==true) {
		this.$http.delete(urlProfesor + '/' + id)
		.then(function(json) {
			this.getProfesores();
			alert("El profesor se a eliminado");
			this.editando=false;
		});
		}
	},
	updateProfesor:function(id){
		this.editando=false;
		var profesor={cedula:this.cedula,
			nombre:this.nombre,
			apellidos:this.apellidos,
			telefono:this.telefono
			/*curp:this.curp*/
		};

		
		this.$http.put(urlProfesor +'/'+ this.cedula,profesor).then(function(json){
			this.nombre= '';
			this.cedula= '';
			this.apellidos='';
			this.telefono= '';
			/*this.curp= '';*/
			this.getProfesores();
			$('#add').modal('hide');
		});
	},
	salir:function(){
			this.cedula="";
			this.editando=false;
			$('#add').modal('hide');
	},
	editProfesor:function(id){
		this.editando=true;
		$('#add').modal('show');
		this.$http.get(urlProfesor + '/' + id)
		.then(function(response){
			cedula:this.cedula= response.data.cedula;
			nombre:this.nombre= response.data.nombre;
			apellidos:this.apellidos= response.data.apellidos;
			telefono:this.telefono= response.data.telefono;
			/*curp:this.curp= response.data.curp;*/
			auxProfesor:this.auxProfesor= response.data.cedula;
		});

		}
	},
	//Fin de los metodos
	computed:{

		filtrop:function(){
			// this.profesores es como llamaste al array y en el filter como lo nombras
			return this.profesores.filter((profesor)=>{
				return profesor.nombre.toLowerCase().match(this.buscar.trim().toLowerCase()); 
					
			});
		}
	},
});