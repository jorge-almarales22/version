@extends('layout')
@section('title','Roles')
@section('content')
<div class="container">
	<div class="d-flex justify-content-between align-items-center mb-3">
		<h1 class="display-4 mb-0">Roles</h1>
		@can('create roles')
		<a class="btn btn-primary" 
		href="{{ route('roles.create') }}">crear roles</a>
		@endcan
	</div>
	
	<p class="lead text-secondary">Roles disponibles</p>
	@foreach($roles as $rol)
		<div class="d-flex justify-content-between align-items-center mt-2">
				<a href="{{ route('roles.show', $rol->id) }}">
				<h5>{{ $rol->name }}</h5>
				</a>
				@auth
					<div class="btn-group btn-group-sm">
						@can('edit roles')
						<a class="btn btn-secondary" 
						href="{{ route('roles.edit', $rol->id) }}"
						>Editar Role
						</a>
						@endcan
						@can('destroy roles')
						<a class="btn btn-danger" 
						href="#" 
						onclick="event.preventDefault();
			         	document.getElementById('delete-project').submit();"
			         	>Eliminar</a>
			         	@endcan
					</div>
					<form class="d-none" 
						id="delete-project" 
						method="GET" 
						action="#">
						@csrf @method('GET')
					</form>
				@endauth
		</div>
	@endforeach
</div>
@endsection