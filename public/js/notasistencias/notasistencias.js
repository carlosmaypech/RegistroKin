var ruta = document.querySelector("[name=route]").value;
var urlAsistencia=ruta + '/apiAsis';

new Vue({
	http:{
		headers:{
			'X-CSRF-TOKEN':document.querySelector('#token').getAttribute('value')
		}
	},

	el:'#asistencias',

	created:function(){
		this.getAsis();
	},
	data:{
		asistencias:[],
		buscar:'',
		id_asis:'',
		nombre_al:'',
		apellido_al:'',
		fecha:'',
		editando:false,
		auxAsistencia:''
	},
	//Inicio de metodo
	methods:{

		getAsis:function(){this.$http.get(urlAsistencia)
			.then(function(response){
				this.asistencias=response.data
				/*console.log(response);*/

			}).catch(function(response){
				console.log(response);
			});
		},
		showModal:function(){
		$('#add').modal('show');
	},
	agregarAsistencia:function(){
		var asistencia={
			id_asis:this.id_asis,
			nombre_al:this.nombre_al,
			apellido_al:this.apellido_al,
			fecha:this.fecha
		};
		this.$http.post(urlAsistencia,asistencia)
		.then(function(json){
			this.getAsis();
			$('#add').modal('hide');
			alert("asistencia agregado");
		});
	},
	eliminarAsistencia:function(id,asistencia){
		var resp= confirm("Estas seguro de eliminar la asistencia: " + asistencia)
		if (resp==true) {
		this.$http.delete(urlAsistencia + '/' + id)
		.then(function(json) {
			this.getAsis();
			alert("La asistencia se a eliminado");
			this.editando=false;
		});
		}
	},
	updateAsistencia:function(id){
		this.editando=false;
		var asistencia={id_asis:this.id_asis,
			nombre_al:this.nombre_al,
			apellido_al:this.apellido_al,
			fecha:this.fecha
			
		};

		
		this.$http.put(urlAsistencia +'/'+ this.id_asis,asistencia).then(function(json){
			this.nombre_al= '';
			this.id_asis= '';
			this.apellido_al='';
			this.fecha= '';
			this.getAsis();
			$('#add').modal('hide');
		});
	},
	salir:function(){
			this.id_asis="";
			this.editando=false;
			$('#add').modal('hide');
	},
	editAsistencia:function(id){
		this.editando=true;
		$('#add').modal('show');
		this.$http.get(urlAsistencia + '/' + id)
		.then(function(response){
			id_asis:this.id_asis= response.data.id_asis;
			nombre_al:this.nombre_al= response.data.nombre_al;
			apellido_al:this.apellido_al= response.data.apellido_al;
			fecha:this.fecha= response.data.fecha;
			auxAsistencia:this.auxAsistencia= response.data.id_asis;
		});

		}

	},
	//Fin de los metodos
	computed:{

		filtroa:function(){
			return this.asistencias.filter((asistencia)=>{
				return asistencia.nombre_al.toLowerCase().match(this.buscar.trim().toLowerCase());
					
			});
		}
	},
});
