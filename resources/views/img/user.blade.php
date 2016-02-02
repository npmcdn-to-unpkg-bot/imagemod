@extends('app')

@section('content')



<h1>User view</h1>  
<div class="grid" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": 200 }'>


	@foreach($images as $image)
	  <div class="panel panel-default grid-item">
	    <div class="panel-body">
	      <img src="/img/{{ $image->file_name }}" alt="альтернативный текст">
	    </div>
	  </div>
	@endforeach

</div>
 
@stop

@section('sidebar')
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