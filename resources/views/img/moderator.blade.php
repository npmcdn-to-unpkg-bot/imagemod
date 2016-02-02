@extends('app')

@section('content')

<h1>Moderator view</h1> 
<ul class="nav nav-tabs">
  <li role="presentation" class="active">{!! link_to_route('image.panding', 'Panding') !!}</li>
  <li role="presentation">{!! link_to_route('image.all', 'All') !!}</li>
  <li role="presentation">{!! link_to_route('image.rejected', 'Rejected') !!}</li>
</ul>
</br>
 
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


@stop