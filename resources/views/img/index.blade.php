@extends('app')

@section('content')
  
<div class="grid" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": 200 }'>
	@foreach($images as $image)
  <div class="panel panel-default grid-item">
    <div class="panel-body">
      <img src="/img/{{ $image->file_name }}" alt="альтернативный текст">
    </div>
    <div class="panel-footer">Panel footer</div>
  </div>
	@endforeach

</div>
 
@stop