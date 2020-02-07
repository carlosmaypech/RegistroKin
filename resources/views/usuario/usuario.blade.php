@extends('master.master')
@section('titulo', 'login')
@section('contenido')

<div class="login-box">
		<form action="{{url('usuario')}}" method="POST">
				@csrf
			Nombre de usuario:<br>
			<input type="text" name="usuario"><br><br>
			Password:<br>
			<input type="password" name="pass"><br><br>
			<input type="submit" value="Ingresar">
		</form>


@endsection


<!-- @push('scripts')

@endpush -->