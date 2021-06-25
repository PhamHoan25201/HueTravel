@extends('layouts.app')
	
	@section('content')
		<section class="single">
			@foreach ($listNews as $listnews)
			<div class="container">
				<div class="row">
					<div class="col-md-4 sidebar">
						<aside>
						  <div class="aside-body">
							<figure class="ads">
								@foreach ($QC2 as $adv)
									<?php 
										$ngayQC2 = $adv->whereRaw('end_date > curdate()')->take(1)->get();
									?>
									@foreach ($ngayQC2 as $adv)
										<a href="#">
											<img src="/image/{{$adv->url_img2}}" alt="Sample Article">
										</a>
									@endforeach
								@endforeach
							  <figcaption>Advertisement</figcaption>
							</figure>
						  </div>
						</aside>
						<aside>
						  <h1 class="aside-title">Recent Post</h1>
						  <div class="aside-body">
							@foreach ($trending as $news)
								<article class="article-fw">
								<div class="inner">
									<figure>
										<a href="{{route('home.news',['id'=>$news->id])}}">
										<img src="/image/{{$news->url_img}}">
										</a>
									</figure>
									<div class="details">
									<h1><a href="{{route('home.news',['id'=>$news->id])}}">{{$news->tieu_de}}</a></h1>
									<p>
										{{$news->tom_tat}}
									</p>
									<div class="detail">
										<div class="time">{{$news->created_at}}</div>
										<div class="category"><a href="{{route('home.newstype',['id'=>$news->newstype->id])}}">{{$news->newstype->name}}</a></div>
									</div>
									</div>
								</div>
								</article>
							@endforeach
							<div class="line"></div>
							@foreach ($trending1 as $news)
								<article class="article-mini">
									<div class="inner">
									<figure>
										<a href="{{route('home.news',['id'=>$news->id])}}">
										<img src="/image/{{$news->url_img}}">
									</a>
									</figure>
									<div class="padding">
									<h1><a href="{{route('home.news',['id'=>$news->id])}}">{{$news->tieu_de}}</a></h1>
									<div class="detail">
										<div class="category"><a href="{{route('home.newstype',['id'=>$news->newstype->id])}}">{{$news->newstype->name}}</a></div>
										<div class="time">{{$news->created_at}}</div>
									</div>
									</div>
									</div>
								</article>	
							@endforeach
						  </div>
						</aside>
						
					  </div>
					<div class="col-md-8">
						<ol class="breadcrumb">
						  <li><a href="#">Home</a></li>
						  <li class="active">{{$listnews->newstype->name}}</li>
						</ol>
						<article class="article main-article">
							<header>
								<h1>{{$listnews->tieu_de}}</h1>
								<ul class="details">
									<li>Đăng ngày: {{$listnews->created_at}}</li>
									<li><a>{{$listnews->newstype->name}}</a></li>
									<li>By <a href="#">{{$listnews->user->name}}</a></li>
								</ul>
							</header>
							<div class="main">
								<p>{{$listnews->tom_tat}}</p>
								<div class="featured">
									<figure>
										<img src="/image/{{$listnews->url_img}}">
										<figcaption>Image by pexels.com</figcaption>
									</figure>
								</div>
									<?php 
										echo $listnews->noi_dung
									?>
								</div>
							<footer>
								<div class="col">
									<ul class="tags">
										<li><a href="#">{{$listnews->newstype->name}}</a></li>
									</ul>
								</div>
								<div class="col">
									<a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>1220</div></a>
								</div>
							</footer>
						</article>
						<div class="sharing">
						<div class="title"><i class="ion-android-share-alt"></i> Sharing is caring</div>
							<ul class="social">
								<li>
									<a href="#" class="facebook">
										<i class="ion-social-facebook"></i> Facebook
									</a>
								</li>
								<li>
									<a href="#" class="twitter">
										<i class="ion-social-twitter"></i> Twitter
									</a>
								</li>
								<li>
									<a href="#" class="googleplus">
										<i class="ion-social-googleplus"></i> Google+
									</a>
								</li>
								<li>
									<a href="#" class="linkedin">
										<i class="ion-social-linkedin"></i> Linkedin
									</a>
								</li>
								<li>
									<a href="#" class="skype">
										<i class="ion-ios-email-outline"></i> Email
									</a>
								</li>
								<li class="count">
									20
									<div>Shares</div>
								</li>
							</ul>
						</div>
						<div class="line">
							<div>Author</div>
						</div>
						<div class="author">
							<figure>
								<img src="images/img01.jpg">
							</figure>
							<div class="details">
								<div class="job">Web Developer</div>
								<h3 class="name">{{$listnews->user->name}}</h3>
								<p>Nulla sagittis rhoncus nisi, vel gravida ante. Nunc lobortis condimentum elit, quis porta ipsum rhoncus vitae. Curabitur magna leo, porta vel fringilla gravida, consectetur in libero. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
								<ul class="social trp sm">
									<li>
										<a href="#" class="facebook">
											<svg><rect/></svg>
											<i class="ion-social-facebook"></i>
										</a>
									</li>
									<li>
										<a href="#" class="twitter">
											<svg><rect/></svg>
											<i class="ion-social-twitter"></i>
										</a>
									</li>
									<li>
										<a href="#" class="youtube">
											<svg><rect/></svg>
											<i class="ion-social-youtube"></i>
										</a>
									</li>
									<li>
										<a href="#" class="googleplus">
											<svg><rect/></svg>
											<i class="ion-social-googleplus"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="line thin"></div>
						
					</div>
				</div>
			</div>
			@endforeach
		</section>
	
	@endsection