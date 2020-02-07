var ruta = document.querySelector("[name=route]").value;
var urlTutor=ruta + '/apiTutor';

new Vue({
	http:{
		headers:{
			'X-CSRF-TOKEN':document.querySelector('#token').getAttribute('value')
		}
	},

	el:'#tutores',

	created:function(){
		this.getTutores();
	},
	data:{
		tutores:[],
		buscar:'',
		id_curp:'',
		nombre:'',
		apellidos:'',
		telefono:'',
		calle:'',
		crto_a:'',
		crto_b:'',
		editando:false,
		auxTutor:''
	},
	//Inicio de metodo
	methods:{

		getTutores:function(){this.$http.get(urlTutor)
			.then(function(response){
				this.tutores=response.data
				/*console.log(response);*/

			}).catch(function(response){
				console.log(response);
			});
		},
		showModal:function(){
		$('#add').modal('show');
	},
	agregarTutor:function(){
		var tutor={
			id_curp:this.id_curp,
			nombre:this.nombre,
			apellidos:this.apellidos,
			telefono:this.telefono,
			calle:this.calle,
			crto_a:this.crto_a,
			crto_b:this.crto_b
		};
		this.$http.post(urlTutor,tutor)
		.then(function(json){
			this.getTutores();
			$('#add').modal('hide');
			alert("Tutor agregado con exito");
		});
	},
	eliminarTutor:function(id,tutor){
		var resp= confirm("Estas seguro de eliminar al tutor: " + tutor)
		if (resp==true) {
		this.$http.delete(urlTutor + '/' + id)
		.then(function(json) {
			this.getTutores();
			alert("El tutor se a eliminado");
			this.editando=false;
		});
		}
	},
	updateTutor:function(id){
		this.editando=false;
		var tutor={id_curp:this.id_curp,
			nombre:this.nombre,
			apellidos:this.apellidos,
			telefono:this.telefono,
			calle:this.calle,
			crto_a:this.crto_a,
			crto_b:this.crto_b
		};

		
		this.$http.put(urlTutor +'/'+ this.id_curp,tutor).then(function(json){
			this.id_curp= '';
			this.nombre= '';
			this.apellidos='';
			this.telefono= '';
			this.calle= '';
			this.crto_a='';
			this.crto_b='';
			this.getTutores();
			$('#add').modal('hide');
		});
	},
	salir:function(){
			this.nombre="";
			this.editando=false;
			$('#add').modal('hide');
	},
	editTutor:function(id){
		this.editando=true;
		$('#add').modal('show');
		this.$http.get(urlTutor + '/' + id)
		.then(function(response){
			id_curp:this.id_curp= response.data.id_curp;
			nombre:this.nombre= response.data.nombre;
			apellidos:this.apellidos= response.data.apellidos;
			telefono:this.telefono= response.data.telefono;
			calle:this.calle= response.data.calle;
			crto_a:this.crto_a= response.data.crto_a;
			crto_b:this.crto_b= response.data.crto_b;
			auxTutor:this.auxTutor= response.data.id_curp;
		});

		}
	},
	//Fin de los metodos
	computed:{

		filtrot:function(){
			return this.tutores.filter((tutor)=>{
				return tutor.nombre.toLowerCase().match(this.buscar.trim().toLowerCase()); 
					
			});
		}
	},
});