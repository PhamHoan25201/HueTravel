@extends('layouts.app')	

	@section('content')
	@foreach ($listNewsType as $newstype)
		<?php 
			$listTin = $newstype->news->where('tin_noi_bat',1)->sortByDesc('created_at')->take(5);
		?>
		
		<section class="category">
		  <div class="container">
		    <div class="row">
		      <div class="col-md-8 text-left">
		        <div class="row">
		          <div class="col-md-12">        
		            <ol class="breadcrumb">
		              <li><a href="#">Home</a></li>
		              <li class="active">{{$newstype->name}}</li>
		            </ol>
		            <h1 class="page-title">Loại Tin: {{$newstype->name}}</h1>
		            <p class="page-subtitle">Hiển thị tất cả các tin với loại tin <i>"{{$newstype->name}}"</i></p>
		          </div>
		        </div>
		        <div class="line"></div>
		        <div class="row">
					@foreach ($listTin as $news)
						<article class="col-md-12 article-list">
							<div class="inner">
							<figure>
								<a href="{{route('home.news',['id'=>$news->id])}}">
									<img src="/image/{{$news->url_img}}">
								</a>
							</figure>
							<div class="details">
								<div class="detail">
								<div class="category">
								<a href="{{route('home.newstype',['id'=>$news->newstype->id])}}">{{$news->newstype->name}}</a>
								</div>
								<div class="time">{{$news->created_at}}</div>
								</div>
								<h1><a href="{{route('home.news',['id'=>$news->id])}}">{{$news->tieu_de}}</a></h1>
								<p>
									{{$news->tom_tat}}
								</p>
								<footer>
								<a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>237</div></a>
								<a class="btn btn-primary more" href="{{route('home.news',['id'=>$news->id])}}">
									<div>More</div>
									<div><i class="ion-ios-arrow-thin-right"></i></div>
								</a>
								</footer>
							</div>
							</div>
						</article>
				  	@endforeach
		          <div class="col-md-12 text-center">
		            <ul class="pagination">
		              <li class="prev"><a href="#"><i class="ion-ios-arrow-left"></i></a></li>
		              <li class="active"><a href="#">1</a></li>
		              <li><a href="#">2</a></li>
		              <li><a href="#">3</a></li>
		              <li><a href="#">...</a></li>
		              <li><a href="#">97</a></li>
		              <li class="next"><a href="#"><i class="ion-ios-arrow-right"></i></a></li>
		            </ul>
		            <div class="pagination-help-text">
		            	Showing 8 results of 776 &mdash; Page 1
		            </div>
		          </div>
		        </div>
		      </div>
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
		        <aside>
		          <div class="aside-body">
		            <form class="newsletter">
		              <div class="icon">
		                <i class="ion-ios-email-outline"></i>
		                <h1>Newsletter</h1>
		              </div>
		              <div class="input-group">
		                <input type="email" class="form-control email" placeholder="Your mail">
		                <div class="input-group-btn">
		                  <button class="btn btn-primary"><i class="ion-paper-airplane"></i></button>
		                </div>
		              </div>
		              <p>By subscribing you will receive new articles in your email.</p>
		            </form>
		          </div>
		        </aside>
		      </div>
		    </div>
		  </div>
		</section>
		
	@endforeach
	@endsection
		