var ruta = document.querySelector("[name=route]").value;
var urlNota=ruta + '/apiNota';

new Vue({
	http:{
		headers:{
			'X-CSRF-TOKEN':document.querySelector('#token').getAttribute('value')
		}
	},

	el:'#desempenios',

	created:function(){
		this.getNota();
	},
	data:{
		desempenios:[],
		buscar:'',
		id:'',
		nombre_al:'',
		apellidos_al:'',
		comportamiento:'',
		editando:false,
		auxNota:''
	},
	//Inicio de metodo
	methods:{

		getNota:function(){this.$http.get(urlNota)
			.then(function(response){
				this.desempenios=response.data
				/*console.log(response);*/

			}).catch(function(response){
				console.log(response);
			});
		},
		showModal:function(){
		$('#add').modal('show');
	},
	agregarDesempenio:function(){
		var desempenio={
			id:this.id,
			nombre_al:this.nombre_al,
			apellidos_al:this.apellidos_al,
			comportamiento:this.comportamiento
		};
		this.$http.post(urlNota,desempenio)
		.then(function(json){
			this.getNota();
			$('#add').modal('hide');
			alert("Desempenio agregado con exito");
		});
	},
	eliminarDesempenio:function(id,desempenio){
		var resp= confirm("Estas seguro de eliminar el desempenio de alumno: " + desempenio)
		if (resp==true) {
		this.$http.delete(urlNota + '/' + id)
		.then(function(json) {
			this.getNota();
			alert("El desempenio se a eliminado");
			this.editando=false;
		});
		}
	},
	updateDesempenio:function(id){
		this.editando=false;
		var desempenio={id:this.id,
			nombre_al:this.nombre_al,
			apellidos_al:this.apellidos_al,
			comportamiento:this.comportamiento
		};

		
		this.$http.put(urlNota +'/'+ this.id,desempenio).then(function(json){
			this.id= '';
			this.nombre_al= '';
			this.apellidos_al='';
			this.comportamiento= '';
			this.getNota();
			$('#add').modal('hide');
		});
	},
	salir:function(){
			this.nombre="";
			this.editando=false;
			$('#add').modal('hide');
	},
	editDesempenio:function(id){
		this.editando=true;
		$('#add').modal('show');
		this.$http.get(urlNota + '/' + id)
		.then(function(response){
			id:this.id= response.data.id;
			nombre_al:this.nombre_al= response.data.nombre_al;
			apellidos_al:this.apellidos_al= response.data.apellidos_al;
			comportamiento:this.comportamiento= response.data.comportamiento;
			auxNota:this.auxNota= response.data.id;
		});

		}

	},
	//Fin de los metodos
	computed:{

		filtroa:function(){
			return this.desempenios.filter((desempenio)=>{
				return desempenio.nombre_al.toLowerCase().match(this.buscar.trim().toLowerCase()); 
				// return asistencias.id_asis.match(this.buscar.trim())
				// En este caso no es necesario utlizar tipo numerico, solamente varchar como lo muestra
					
			});
		}
	},
});