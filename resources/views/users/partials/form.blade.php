<div class="form-group">
	<label for="name">Nombre</label>
	<input class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror"
	id="name"  
	name="name" 
	value="{{ $user->name }}"
	>
	@error('name')
	<span class="invalid-feedback" role="alert">
		<strong>{{ $message }}</strong>
	</span>
	@enderror
</div>	
<h3>Lista de roles</h3>
<div class="form-group">
	<ul class="list-unstyled">
		@foreach($roles as $role)
		<li>
			<label>
				{{ Form::checkbox('roles[]', $role->id, null) }}
				{{ $role->name }}
			</label>
		</li>
		@endforeach
	</ul>
</div>
<div class="form-group">
	{{ Form::submit('Guardar',['class' => 'btn btn-sm btn-primary']) }}
</div>