@extends('layout')
@section('title',$user->name)
@section('content')
<div class="container">
	<div class="bg-white px-5 py-5 shadow rounded">
		<h1 class="display-5">{{ $user->name }}</h1>
		<p class="text-secondary">
			<strong>Correo electronico del usuario: </strong>{{ $user->email }}
		</p>
		<p class="text-black-50">
			<strong>Usuario creado hace: </strong>{{ $user->created_at->diffForHumans() }}
		</p>
		<a href="{{ route('users.index') }}">Regresar</a>
    </div>	
</div>
@endsection