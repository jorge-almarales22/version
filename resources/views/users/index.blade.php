@extends('layout')
@section('title','Productos')
@section('content')
<div class="container">
	<h1 class="display-4 mb-0">Usuarios</h1>	
	<p class="lead text-secondary">usuarios disponibles</p>
	<table class="table table-hover">
   		<thead>
   			<tr>
   				<th class="w-10">ID</th>
   				<th>Nombre</th>
   				<th colspan="3">&nbsp;</th>
   			</tr>
   		</thead>  
   		<tbody>
   			@foreach($users as $user)
   				<tr>
   					<td>{{ $user->id  }}</td>
   					<td>{{ $user->name  }}</td>
                  @can('show user')
   					<td width="10px">
						<a class="btn btn-sm btn-primary" href=" {{ route('users.show', $user->id) }}">Ver</a>
   					</td>
                  @endcan
                  @can('edit user')
   					<td width="10px">
   							<a class="btn btn-sm btn-warning" href="{{ route('users.edit', $user->id)  }}">Editar</a>
   					</td>
                  @endcan
                  @can('destroy user')
   					<td width="10px">
						<a class="btn btn-danger btn-sm" 
							href="#" 
							onclick="event.preventDefault();
				         	document.getElementById('delete-project').submit();"
				         	>Eliminar
				      </a>   						
   					</td>
                  @endcan
   					<form class="d-none" 
						id="delete-project" 
						method="GET" 
						action="#">
						@csrf @method('GET')
					</form>
   				</tr>
   			@endforeach
   		</tbody>                 	
   </table>
</div>
@endsection