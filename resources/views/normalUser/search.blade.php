@extends('layouts.app')

@section('content')
	<section class="search">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<aside>
						<h2 class="aside-title">Search</h2>
						<div class="aside-body">
							<p>Search with other keywords or use filters for more accurate results.</p>
							<form>
								<div class="form-group">
									<div class="input-group">
										<input type="text" name="q" class="form-control" placeholder="Type something ..." value="hello">
										<div class="input-group-btn">
											<button class="btn btn-primary">
												<i class="ion-search"></i>
											</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</aside>
					<aside>
						<h2 class="aside-title">Filter</h2>
						<div class="aside-body">
							<form class="checkbox-group">
								<div class="group-title">Date</div>
								<div class="form-group">
									<label><input type="radio" name="date" checked> Anytime</label>
								</div>
								<div class="form-group">
									<label><input type="radio" name="date"> Today</label>
								</div>
								<div class="form-group">
									<label><input type="radio" name="date"> Last Week</label>
								</div>
								<div class="form-group">
									<label><input type="radio" name="date"> Last Month</label>
								</div>
								<br>
								<div class="group-title">Categories</div>
								<div class="form-group">
									<label><input type="checkbox" name="category" checked> All Categories</label>
								</div>
								<div class="form-group">
									<label><input type="checkbox" name="category"> Lifestyle</label>
								</div>
								<div class="form-group">
									<label><input type="checkbox" name="category"> Travel</label>
								</div>
								<div class="form-group">
									<label><input type="checkbox" name="category"> Computer</label>
								</div>
								<div class="form-group">
									<label><input type="checkbox" name="category"> Film</label>
								</div>
								<div class="form-group">
									<label><input type="checkbox" name="category"> Sport</label>
								</div>
							</form>
						</div>
					</aside>
				</div>
				<div class="col-md-9">
					<div class="nav-tabs-group">
						<ul class="nav-tabs-list">
							<li class="active"><a href="#">All</a></li>
							<li><a href="#">Latest</a></li>
							<li><a href="#">Popular</a></li>
							<li><a href="#">Trending</a></li>
							<li><a href="#">Videos</a></li>
						</ul>
						<div class="nav-tabs-right">
							<select class="form-control">
								<option>Limit</option>
								<option>10</option>
								<option>20</option>
								<option>50</option>
								<option>100</option>
							</select>
						</div>
					</div>
					<div class="search-result">
						Tìm thấy tổng cộng {{ count($news) }} tin tức có liên quan đến từ khóa "{{ $keyword }}".
					</div>
					<div class="row">
						@foreach ($news as $chitiet)
							<article class="col-md-12 article-list">
								<div class="inner">
									<figure>
										<a href="{{route('home.news',['id'=>$chitiet->id])}}">
											<img src="/image/{{$chitiet->url_img}}">
										</a>
									</figure>
									<div class="details">
										<div class="detail">
											<div class="category">
												<a href="{{route('home.newstype',['id'=>$chitiet->newstype->id])}}">{{$chitiet->newstype->name}}</a>
											</div>
											
											<div>
												<time style="padding-left: 5px">{{$chitiet->created_at}}</time>
											</div>
											
										</div>
										<h1><a href="{{route('home.news',['id'=>$chitiet->id])}}">{{$chitiet->tieu_de}}</a></h1>
										<p>
											{{$chitiet->tom_tat}}
										</p>
										<footer>
											<a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>273</div></a>
											<a class="btn btn-primary more" href="{{route('home.news',['id'=>$chitiet->id])}}">
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
			</div>
		</div>
	</section>
@endsection