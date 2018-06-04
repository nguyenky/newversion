@extends('LaravelView.PublicView.blocks.templete')
@section('main')
	<div id="content" class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
		<article class="tg-post tg-blockpuote">
			<figure>
				<img ng-src="{{$new->picture}}" alt="image description">
				<div class="tg-img-hover">
					<div class="holder">
						<a href=""><i class="fa fa-heart" aria-hidden="true" style="color: #f3eeee;" >&nbsp&nbsp{{$new->likes ? $new->likes : '1'}}&nbsp&nbsp</i></a>&nbsp&nbsp
						<a href=""><i class="fa fa-comment" aria-hidden="true" style="color:#f3eeee; margin-left: 20px;">&nbsp&nbsp{{count($new->comments)}}&nbsp&nbsp</i></a>
					</div>

				</div>
			</figure>
			<div class="tg-post-content">
				<div class="post-meta category-name">
					<span><a href="">DETAIL</a></span>
				</div>
				<h3><a href="">{{$new->name}}</a></h3>
				<div class="post-meta">
					<span class="date">{{$new->created_at}}</span>
				</div>
				<div class="description">
					<div>{!! $new->detail !!}</div>
				</div>

				<hr />
				<ul class="tg-tags">
					<li>Tags:</li>
				</ul>
				<div class="tg-post-foot">
					<ul class="post-social-icons">
						<li><a href="" ng-click="like(post.id)"><i ng-class="likes ? 'fa fa-heart' : 'fa fa-heart-o'" aria-hidden="true"></i></a></li>
						<li><a href="">{{$new->likes}}</a></li>
					</ul>
					<div class="post-meta pull-right">
						<span class="tg-post-author">Post By : <a href="">Ng Ký Lê</a></span>
					</div>
				</div>
			</div>
		</article>
	</div>
@endsection