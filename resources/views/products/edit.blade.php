@extends('layout')
@section('title', $product->name)

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto">
			<form class="bg-white shadow rounded py-3 px-4"
				method="POST" 
				action="{{ route('products.update', $product) }}">

				<div class="form-group">
					<h1 class="display-4">
						Editar producto
					</h1>
					<hr>
					<label for="name">Nombre</label>
					<input class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror"
					id="name" 
					name="name" 
					value="{{ old('name', $product->name) }}"
					>
					@error('name')
						<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>
				<div class="form-group">
					<label for="detail">Detalle</label>
					<input class="form-control bg-light shadow-sm @error('detail') is-invalid @else border-0 @enderror"
					id="detail"  
					name="detail" 
					value="{{ old('detail', $product->detail) }}"
					>
					@error('detail')
						<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>	
				<button class="btn btn-primary btn-lg btn-block">Actualizar</button>
				<a class="btn btn-link btn-block" 
					href="{{ route('products.index') }}">
					Cancelar
				</a>
				@csrf
			</form>
		</div>
	</div>
</div>
@endsection
