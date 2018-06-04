@extends('LaravelView.PublicView.blocks.templete')
@section('main')
<div id="content" class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
	<div class="row">
		@foreach($images as $image)	
		<div class="images">
			<img src="{{$image->picture}}" width="30%">
		</div>
		@endforeach
	</div>

	<div class="next-previous">
		<span class="older-post"><a href="">load more</a></span>
	</div>
</div>
@endsection