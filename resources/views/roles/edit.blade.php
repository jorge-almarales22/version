@extends('layout')
@section('title','Roles Edit')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
	   		{!! Form::model($role, ['route' => ['roles.update', $role->id],
            	'method' => 'PUT']) !!}
                @include('roles.partials.form')
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection