{{-- @foreach($products as $product)
	<p><strong>Image products: </strong>{{ $product->image->url }}</p>
	<p><strong>name products: </strong>{{ $product->name }}</p>
	@foreach($product->categories as $category)
		<p><strong>name categories: </strong>{{ $category->name }}</p>
	@endforeach
		@foreach($product->prices as $price)
			<p><strong>prices product: </strong>{{ $price->price }}</p><br>
		@endforeach
@endforeach --}}
{{-- <p><strong>Image product: </strong>{{ $users->image->url }}</p> --}}
@extends('layout')
@section('title','Productos')
@section('content')
<div class="container">
	<div class="d-flex justify-content-between align-items-center mb-3">
		<h1 class="display-4 mb-0">Productos</h1>
		@can('create products')
		<a class="btn btn-primary" 
		href="{{ route('products.create') }}">crear producto</a>
		@endcan
	</div>
	
	<p class="lead text-secondary">productos disponibles</p>
	
	<ul class="list-group">
		@forelse($products as $product)
		<li class="list-group-item border-0 mb-3 shadow-sm">
			<a class="text-secondary d-flex justify-content-between align-items-center" 
			href="{{ route('products.show', $product) }}"
			>
			<span class="font-weight-bold">
				{{ $product->name }}
			</span>
			<span class="text-balck-50">
				{{ $product->created_at->format('d/m/y') }}
			</span>
			</a>
		</li>
		@empty
		<li class="list-group-item border-0 mb-3 shadow-sm">no hay productos para mostrar</li>
		@endforelse	
        <div class="mx-auto">
            {{ $products->links() }}
        </div>		  		
	</ul>
</div>
@endsection