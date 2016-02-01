@extends('app')

@section('content')
	<h1>Add</h1>
	{!! Form::open(
    array(
        'route' => 'image.store', 
        'class' => 'form', 
        'novalidate' => 'novalidate', 
        'files' => true)) !!}

	@include('img._form')

	{!! Form::close() !!}
 
@stop