<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:type" content="article" /><meta property="og:title" content=" quà ý nghĩa nhất" /><meta property="og:url" content="http://www.tinthethao.com.vn/hlv-heerenveen-do-la-dieu-sai-lam-khi-chieu-mo-doan-van-hau-d581237.html" /><meta property="og:description" content="HLV Johnny Jansen của SC Heerenveen đã chỉ ra 1 sai lầm khi chiêu mộ Đoàn Văn Hậu." /><meta property="og:image" content="http://farm1.staticflickr.com/800/27486637028_1b2b527ab6_o.png"/><meta property="article:author" content="https://www.facebook.com/TinTheThao.com.vn" /><meta property="article:section" content="News" /><meta property="article:tag" content="Đoàn Văn Hậu,SC Heerenveen,Johnny Jansen" />
	<title>Yes ! For me !!!</title>
	<link rel="icon" href="assets/icon-logo.jpg"/>
	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css">

	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/public/css/owl.carousel.css">
	<link rel="stylesheet" href="assets/public/css/owl.theme.css">
	<link rel="stylesheet" href="assets/public/css/transitions.css">
	<link rel="stylesheet" href="assets/public/css/main.css">
	<link rel="stylesheet" href="assets/public/css/responsive.css">
	<script src="assets/public/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body ng-app="app" ng-controller="mainController">
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<div id="sliding" class="sliding">
		<div class="container">
			<a href="" class="show_hide fa fa-close pull-right"></a>
			<form class="header-search-form">
				<fieldset>
					<input type="text" class="form-control" placeholder="Search here...">
				</fieldset>
			</form>
		</div>
	</div>
	<div id="wrapper">
		<header id="header" class="tg-header haslayout">
			<div class="topbar haslayout">
				<div class="container">
					<div id="hotnew" class="new-slides pull-left col-lg-4 col-md-5 col-sm-6 col-xs-6 display">
						<div id="news-slider">
							<div class="item">
								<a href="" ng-click="redirec(latest[0])"><p>@{{latest[0].name | limitTo:50}}</p></a>
							</div>
							<div class="item">
								<a href="" ng-click="redirec(latest[1])"><p>@{{latest[1].name | limitTo:50}}</p></a>
							</div>
							<div class="item">
								<a href="" ng-click="redirec(latest[2])"><p>@{{latest[2].name | limitTo:50}}</p></a>
							</div>
							<div class="item">
								<a href="" ng-click="redirec(latest[3])"><p>@{{latest[3].name | limitTo:50}}</p></a>
							</div>
							<div class="item">
								<a href="" ng-click="redirec(latest[4])"><p>@{{latest[4].name | limitTo:50}}</p></a>
							</div>
						</div>
					</div>
					<div class="search-social pull-right text-center">
						<ul class="social-icon">
							<li ><a href=""><i class="fa fa-facebook"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="container">
				<div class="logo-box haslayout">
					<strong class="logo">
						<a  href="/">
							<img src="assets/public/images/yesforme.jpg" alt="The Success BLOG for Real LifeStyle">
						</a>
					</strong>
					<!-- @foreach($instagram as $key=>$in)
						<a href="">{{$key}}</a>
					@endforeach -->

					<!-- <span class="slogn">{{$status['caption']}}</span> -->
				</div>
				<div class="text-center" style="margin-bottom: 1em;"">
					<div>{!! $status['caption'] !!}</div>
				</div>
			</div>
			<nav id="nav" class="navbar navbar-default">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li>
								<a href="/">Home</a>
							</li>
							<li><a href="/life">LifeStyle</a></li>
							<li><a href="/trip">Trip</a></li>
							<li><a href="/audio">Just Relax</a></li>
							<li><a href="/playlists">Playlists</a></li>
							<li><a href="/videos">Videos</a></li>
							<li><a href="/history">Yes ! I write !</a></li>
							<li><a href="/historycollected">History in my eye</a></li>
							<li><a href="/images">Images</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
