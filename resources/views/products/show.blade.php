@extends('layout')
@section('title',$product->name)
@section('content')
<div class="container">
	<div class="bg-white px-5 py-5 shadow rounded">
		<h1 class="display-5">{{ $product->name }}</h1>
		<p class="text-secondary">
			{{ $product->detail }}
		</p>
		<p class="text-secondary">
			@isset($product->image->url)
			URL imagen: {{ $product->image->url }}
			@endisset
		</p>
		<p class="text-secondary">
			@forelse($product->categories as $category)
				Categoria producto: {{ $category->name }}
				@empty
				Este producto no tiene una categoria registrada
			@endforelse
		</p>
		<p class="text-secondary">
			@forelse($product->prices as $price)
				Precio del producto: {{ $price->price }}
				@empty
				Este producto no tiene un precio registrado
			@endforelse
		</p>
		<p class="text-black-50">
			Producto creado hace: {{ $product->created_at->diffForHumans() }}
		</p>
		<div class="d-flex justify-content-between align-items-center">
			<a href="{{ route('products.index') }}">
			Regresar
			</a>
			
			<div class="btn-group btn-group-sm">
				@can('edit product')
				<a class="btn btn-primary" 
				href="{{ route('products.edit',$product->id) }}"
				>Editar proyecto
				</a>
				@endcan
				@can('destroy product')
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
				action="{{ route('products.destroy', $product) }}">
				@csrf @method('GET')
			</form>		
		</div>
    </div>	
</div>
@endsection