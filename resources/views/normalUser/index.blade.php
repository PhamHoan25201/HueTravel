@extends('layouts.app')

@section('content')
    <section class="home">
        
        
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12 ">
                    <div class="post-details">
                    <div class="headline ">
                        <div class="nav" id="headline-nav">
                            <a class="left carousel-control" role="button" data-slide="prev">
                                <span class="ion-ios-arrow-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" role="button" data-slide="next">
                                <span class="ion-ios-arrow-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <div class="owl-carousel owl-theme" id="headline">
                            @foreach ($trending as $news)
                                <div class="item">
                                    <a href="#"><div class="badge">Tip!</div> {{$news->tieu_de}}</a>
                                </div>
                            @endforeach							

                        </div>
                    </div>
                    
                    <div class="owl-carousel owl-theme slide" id="featured">
                        @foreach ($xemNhieu as $news)
                            <div class="item">
                                <article class="featured">
                                    <div class="overlay"></div>
                                    <figure>
                                        <img src="/image/{{$news->url_img}}" alt="{{$news->tieu_de}}">
                                    </figure>
                                    <div class="details">
                                        <div class="category"><a href="category.html">{{$news->newstype->name}}</a></div>
                                        <h1><a href="single.html">{{$news->tieu_de}}</a></h1>
                                        <div class="time">{{$news->created_at}}</div>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>
                    
                    <div class="line transparent little"></div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12 trending-tags">
                            <h1 class="title-col">Địa điểm nổi bật</h1>
                            <div class="body-col">
                                <ol class="tags-list">
                                    @foreach ($diaDiem as $category)
                                        <?php
                                            $diemNoiBat = $category->newstype->where('status',1)->take(10);
                                        ?>
                                        @foreach ($diemNoiBat as $diem)
                                            <li><a href="#">{{$diem->name}}</a></li> 
                                        @endforeach
                                    @endforeach
                                    
                                </ol>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <h1 class="title-col">
                                Bài Viết Nổi Bật
                                <div class="carousel-nav" id="hot-news-nav">
                                    <div class="prev">
                                        <i class="ion-ios-arrow-left"></i>
                                    </div>
                                    <div class="next">
                                        <i class="ion-ios-arrow-right"></i>
                                    </div>
                                </div>
                            </h1>
                            <div class="body-col vertical-slider" data-max="4" data-nav="#hot-news-nav" data-item="article">
                                @foreach ($baiNoiBat as $news)
                                    <article class="article-mini">
                                        <div class="inner">
                                            <figure>
                                                <a href="single.html">
                                                    <img src="/image/{{$news->url_img}}" alt="Sample Article">
                                                </a>
                                            </figure>
                                            <div class="padding">
                                                <h1><a href="single.html">{{$news->tieu_de}}</a></h1>
                                                <div class="detail">
                                                    <div class="category"><a href="category.html">{{$news->newstype->name}}</a></div>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </article> 
                                @endforeach
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    <div class="banner">
                        @foreach ($QC1 as $adv)
                            <?php 
                                $ngayQC1 = $adv->whereRaw('end_date > curdate()')->take(1)->get();
                            ?>
                            @foreach ($ngayQC1 as $adv)
                            <a href="#">
                                <img src="/image/{{$adv->url_img1}}" alt="Sample Article">
                            </a>
                            @endforeach
                        @endforeach
                        
                    </div>
                    <div class="line top">
                        <div >Tin Mới Nhất</div>
                    </div>
                    <div class="row">
                        @foreach ($tinMoiNhat as $news)
                            <article class="col-md-12 article-list">
                                <div class="inner">
                                    <figure>
                                        <a href="single.html">
                                            <img src="/image/{{$news->url_img}}" alt="{{$news->tieu_de}}">
                                        </a>
                                    </figure>
                                    <div class="details">
                                        <div class="detail">
                                            <div class="category">
                                                <a href="#">{{$news->newstype->name}}</a>
                                            </div>
                                            <div class="time">{{$news->created_at}}</div>
                                        </div>
                                        <h1><a href="single.html">{{$news->tieu_de}}</a></h1>
                                        <p>
                                            {{$news->tom_tat}}
                                    </p>
                                        <footer>
                                            <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>273</div></a>
                                            <a class="btn btn-primary more" href="single.html">
                                                <div>More</div>
                                                <div><i class="ion-ios-arrow-thin-right"></i></div>
                                            </a>
                                        </footer>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                   
                @foreach ($traiNghiem as $category)
                    @foreach ($category->newstype as $newstype)
                        <div class="line top">
                            <div >{{$newstype->name}}</div>
                        </div>
                    
                    <div class="row">
                        <?php 
                            $tintheoloaitin = $newstype->news->where('tin_noi_bat',1)->sortByDesc('created_at')->take(3);
                        ?>
                        @foreach ($tintheoloaitin as $news)
                        <article class="col-md-12 article-list">
                            <div class="inner">
                                <figure>
                                    <a href="single.html">
                                        <img src="/image/{{$news->url_img}}" alt="{{$news->tieu_de}}">
                                    </a>
                                </figure>
                                <div class="details">
                                    <div class="detail">
                                        <div class="category">
                                            <a href="#">{{$news->newstype->name}}</a>
                                        </div>
                                        <div class="time">{{$news->created_at}}</div>
                                    </div>
                                    <h1><a href="single.html">{{$news->tieu_de}}</a></h1>
                                    <p>
                                        {{$news->tom_tat}}
                                   </p>
                                    <footer>
                                        <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>273</div></a>
                                        <a class="btn btn-primary more" href="single.html">
                                            <div>More</div>
                                            <div><i class="ion-ios-arrow-thin-right"></i></div>
                                        </a>
                                    </footer>
                                </div>
                            </div>
                        </article>
                        @endforeach
                    </div>
                    @endforeach
                @endforeach  
                <div class="line top">
                    <div >Dịch vụ Du Lịch</div>
                </div>
<!-- Test--></div> 
            <div class="row">
                @foreach ($dichVu as $category)
                    <?php 
                        $listDichVu = $category->news->where('tin_noi_bat',1)->sortByDesc('created_at')->take(4);
                    ?>
                    @foreach ($listDichVu as $news)
                    <article class="col-md-12 article-list">
                        <div class="inner">
                            <figure>
                                <a href="single.html">
                                    <img src="/image/{{$news->url_img}}" alt="{{$news->tieu_de}}">
                                </a>
                            </figure>
                            <div class="details">
                                <div class="detail">
                                    <div class="category">
                                        <a href="#">{{$news->newstype->name}}</a>
                                    </div>
                                    <div class="time">{{$news->created_at}}</div>
                                </div>
                                <h1><a href="single.html">{{$news->tieu_de}}</a></h1>
                                <p>
                                    {{$news->tom_tat}}
                                </p>
                                <footer>
                                    <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>273</div></a>
                                    <a class="btn btn-primary more" href="single.html">
                                        <div>More</div>
                                        <div><i class="ion-ios-arrow-thin-right"></i></div>
                                    </a>
                                </footer>
                            </div>
                        </div>
                    </article>
                    @endforeach
                @endforeach
            </div>
        </div>
                 
                <div class="col-xs-6 col-md-4 sidebar  " id="sidebar">
                    <div class="post-sidebar">
                        <div class="sidebar-title for-tablet">Sidebar</div>
                        <div class="line transparent little" style="margin-top: 40px;"></div>
                        <aside>
                            <h1 class="aside-title">Thời Tiết</h1>
                            <a class="weatherwidget-io" href="https://forecast7.com/en/16d45107d56/hue/" data-label_1="HUE" data-label_2="WEATHER" data-font="Arial Black" data-icons="Climacons Animated" data-theme="original" >HUE WEATHER</a>						
                        </aside>
                    
                        <aside>
                            <h1 class="aside-title">Cẩm Nang Du Lịch <a href="#" class="all">See All <i class="ion-ios-arrow-right"></i></a></h1>
                            <div class="aside-body">
                            @foreach ($camNang as $category)
                                <?php 
                                    $listCamNang = $category->news->where('tin_noi_bat',1)->sortByDesc('created_at')->take(6);
                                ?>
                                @foreach ($listCamNang as $news)
                                <article class="article-mini">
                                    <div class="inner">
                                        <figure>
                                            <a href="single.html">
                                                <img src="/image/{{$news->url_img}}" alt="{{$news->tieu_de}}">
                                            </a>
                                        </figure>
                                        <div class="padding">
                                            <h1><a href="single.html">{{$news->tieu_de}}</a></h1>
                                        </div>
                                    </div>
                                </article>
                                @endforeach
                            @endforeach
                            </div>
                        </aside>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="best-of-the-week ">
			<div class="container">
				<h1><div class="text">Nổi Bật Của Tuần</div>
					<div class="carousel-nav" id="best-of-the-week-nav">
						<div class="prev">
							<i class="ion-ios-arrow-left"></i>
						</div>
						<div class="next">
							<i class="ion-ios-arrow-right"></i>
						</div>
					</div>
				</h1>
				<div class="owl-carousel owl-theme carousel-1">
                    @foreach ($bestofWeek as $news)
                        <article class="article">
                            <div class="inner">
                                <figure>
                                    <a href="single.html">
                                        <img src="/image/{{$news->url_img}}" alt="Sample Article">
                                    </a>
                                </figure>
                                <div class="padding">
                                    <div class="detail">
                                            
                                            <div class="category"><a href="category.html">{{$news->newstype->name}}</a></div>
                                    </div>
                                    <h2><a href="single.html">{{$news->tieu_de}}</a></h2>
                                    <p></p>
                                </div>
                            </div>
                        </article>
                    @endforeach
				</div>
			</div>
		</section>
    
@endsection