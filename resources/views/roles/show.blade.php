@extends('layout')
@section('title',$role->name)
@section('content')
<div class="container">
	<div class="bg-white px-5 py-5 shadow rounded">
		<h1 class="display-5">{{ $role->name }}</h1>
		<p class="text-secondary">
			Creado hace: {{ $role->created_at->diffForHumans() }}
		</p>
    </div>	
</div>
@endsection