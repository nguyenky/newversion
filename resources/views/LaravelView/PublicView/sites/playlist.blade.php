@extends('LaravelView.PublicView.blocks.templete')
@section('main')
	<div id="content" class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
		<div class="row">
			@foreach($news as $new)	
			<article class="tg-post tg-audio-post">
				<!-- <div class="audio">
					<div>{!! $new->preview !!}</div>
				</div> -->
				<div class="tg-post-content">
					<div class="post-meta category-name">
						<span><a href="">Playlist</a></span>
					</div>
					<h3><a href="">{{$new->name}}</a></h3>
					<div class="post-meta">
						<span class="date">{{$new->created_at}}</span>
					</div>
					<div class="description">
						<div>{!! $new->content !!}</div>
					</div>
					<br />
					<br />
					<div class="tg-post-foot">
						<ul class="post-social-icons">
							<li><a href=""><i class="fa fa-facebook"></i></a></li>
							<li><a href=""><i class="fa fa-twitter"></i></a></li>
							<li><a href=""><i class="fa fa-linkedin"></i></a></li>
							<li><a href=""><i class="fa fa-tumblr"></i></a></li>
							<li><a href=""><i class="fa fa-envelope-o"></i></a></li>
						</ul>
						<div class="post-meta pull-right">
							<span class="tg-post-author">Post By : <a href="">Ng Ký Lê</a></span>
						</div>
					</div>
				</div>
			</article>
			@endforeach
		</div>
	
</div>
@endsection