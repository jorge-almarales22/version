@extends('layout')
@section('title','Usuarios')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
	         {!! Form::model($user, ['route' => ['users.update', $user->id],
                'method' => 'PUT']) !!}
                @include('users.partials.form')
             {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
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
