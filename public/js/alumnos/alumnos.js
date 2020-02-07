var ruta = document.querySelector("[name=route]").value;
var urlAlumno=ruta + '/apiAlumno';

new Vue({
	http:{
		headers:{
			'X-CSRF-TOKEN':document.querySelector('#token').getAttribute('value')
		}
	},

	el:'#alumnos',

	created:function(){
		this.getAlumnos();
	},
	data:{
		alumnos:[],
		buscar:'',
		matricula:'',
		nombre_al:'',
		apellidos_al:'',
		edad:'',
		curp:'',
		editando:false,
		auxAlumno:''
	},
	//Inicio de metodo
	methods:{

		getAlumnos:function(){this.$http.get(urlAlumno)
			.then(function(response){
				this.alumnos=response.data
				/*console.log(response);*/

			}).catch(function(response){
				console.log(response);
			});
		},
		showModal:function(){
		$('#add_alumnos').modal('show');
	},
	agregarAlumno:function(){
		var alumno={
			matricula:this.matricula,
			nombre_al:this.nombre_al,
			apellidos_al:this.apellidos_al,
			edad:this.edad,
			curp:this.curp
		};
		this.$http.post(urlAlumno,alumno)
		.then(function(json){
			this.getAlumnos();
			$('#add_alumnos').modal('hide');
			alert("Alumno agregado con exito");
		});
	},
	eliminarAlumno:function(id,alumno){
		var resp= confirm("Estas seguro de eliminar al alumno: " + alumno)
		if (resp==true) {
		this.$http.delete(urlAlumno + '/' + id)
		.then(function(json) {
			this.getAlumnos();
			alert("El alumno se a eliminado");
			this.editando=false;
		});
		}
	},
	updateAlumno:function(id){
		this.editando=false;
		var alumno={matricula:this.matricula,
			nombre_al:this.nombre_al,
			apellidos_al:this.apellidos_al,
			edad:this.edad,
			curp:this.curp
		};

		
		this.$http.put(urlAlumno +'/'+ this.matricula,alumno).then(function(json){
			this.nombre_al= '';
			this.matricula= '';
			this.apellidos_al='';
			this.edad= '';
			this.curp= '';
			this.getAlumnos();
			$('#add_alumnos').modal('hide');
		});
	},
	salir:function(){
			this.nombre_al="";
			this.editando=false;
			$('#add_alumnos').modal('hide');
	},
	editAlumno:function(id){
		this.editando=true;
		$('#add_alumnos').modal('show');
		this.$http.get(urlAlumno + '/' + id)
		.then(function(response){
			matricula:this.matricula= response.data.matricula;
			nombre_al:this.nombre_al= response.data.nombre_al;
			apellidos_al:this.apellidos_al= response.data.apellidos_al;
			edad:this.edad= response.data.edad;
			curp:this.curp= response.data.curp;
			auxAlumno:this.auxAlumno= response.data.matricula;
		});

		}

	},
	//Fin de los metodos
	computed:{

		filtro:function(){
			return this.alumnos.filter((alumno)=>{
				return alumno.nombre_al.toLowerCase().match(this.buscar.trim().toLowerCase()); 
				// return asistencias.id_asis.match(this.buscar.trim())
				// En este caso no es necesario utlizar tipo numerico, solamente varchar como lo muestra
					
			});
		}
	},
});

