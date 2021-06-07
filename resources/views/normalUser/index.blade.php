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
                            <div class="item">
                                <a href="#"><div class="badge">Tip!</div> 5 Điều thú vị về Huế</a>
                            </div>
                            <div class="item">
                                <a href="#"><div class="badge">Tip!</div> Trải nghiệm 1 ngày ở trong Đại Nội</a>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="owl-carousel owl-theme slide" id="featured">
                        <div class="item">
                            <article class="featured">
                                <div class="overlay"></div>
                                <figure>
                                    <img src="{{asset('/NormalUser/images/news/img1.jpg')}}" alt="Sample Article">
                                </figure>
                                <div class="details">
                                    <div class="category"><a href="category.html">Di tích Lịch sử</a></div>
                                    <h1><a href="single.html">Cùng Quang Tú tìm hiểu về Cung An Định và một số cách tạo dáng đẹp</a></h1>
                                    <div class="time">December 26, 2016</div>
                                </div>
                            </article>
                        </div>
                        
                        <div class="item">
                            <article class="featured">
                                <div class="overlay"></div>
                                <figure>
                                    <img src="{{asset('/NormalUser/images/news/carosel3.jpg')}}" alt="Sample Article">
                                </figure>
                                <div class="details">
                                    <div class="category"><a href="category.html">Văn hóa & Lễ hội</a></div>
                                    <h1><a href="single.html">Phong tục Triều Nguyễn được tái hiện lại với những bản sắc dân tộc đã có.</a></h1>
                                    <div class="time">December 10, 2016</div>
                                </div>
                            </article>
                        </div>
                        <div class="item">
                            <article class="featured">
                                <div class="overlay"></div>
                                <figure>
                                    <img src="{{asset('/NormalUser/images/news/img2.jpg')}}" alt="Sample Article">
                                </figure>
                                <div class="details">
                                    <div class="category"><a href="category.html">Văn hóa & Lễ hội</a></div>
                                    <h1><a href="single.html">Trường Quốc Học - Mái trường cổ kính với nhiều góc nhìn thú vị</a></h1>
                                    <div class="time">October 12, 2016</div>
                                </div>
                            </article>
                        </div>
                        <div class="item">
                            <article class="featured">
                                <div class="overlay"></div>
                                <figure>
                                    <img src="{{asset('/NormalUser/images/news/img4.jpg')}}" alt="Sample Article">
                                </figure>
                                <div class="details">
                                    <div class="category"><a href="category.html">Danh lam - Thắng cảnh</a></div>
                                    <h1><a href="single.html">Biển Hải Dương lúc bình minh, là lựa chọn điểm đến của nhiều du khách</a></h1>
                                    <div class="time">November 27, 2016</div>
                                </div>
                            </article>
                        </div>
                    </div>
                    
                    <div class="line transparent little"></div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12 trending-tags">
                            <h1 class="title-col">Địa điểm nổi bật</h1>
                            <div class="body-col">
                                <ol class="tags-list">
                                    <li><a href="#">Đại Nội Huế</a></li>
                                    <li><a href="#">Lăng Khải Định</a></li>
                                    <li><a href="#">Lăng Cô</a></li>
                                    <li><a href="#">Biển Cảnh Dương</a></li>
                                    <li><a href="#">Rừng ngập mặn Rú Chá</a></li>
                                    <li><a href="#">Hồ Thủy Tiên</a></li>
                                    <li><a href="#">Phố Đi Bộ</a></li>
                                    <li><a href="#">Cầu Gỗ Lim</a></li>
                                    <li><a href="#">Trường Quốc Học - Huế</a></li>
                                    <li><a href="#">Đàn Nam Giao</a></li>
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
                                <article class="article-mini">
                                    <div class="inner">
                                        <figure>
                                            <a href="single.html">
                                                <img src="{{asset('/NormalUser/images/news/img09.jpg')}}" alt="Sample Article">
                                            </a>
                                        </figure>
                                        <div class="padding">
                                            <h1><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
                                            <div class="detail">
                                                <div class="category"><a href="category.html">Lifestyle</a></div>
                                                <div class="time">December 22, 2016</div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="article-mini">
                                    <div class="inner">
                                        <figure>
                                            <a href="single.html">
                                                <img src="{{asset('/NormalUser/images/news/img01.jpg')}}" alt="Sample Article">
                                            </a>
                                        </figure>
                                        <div class="padding">
                                            <h1><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
                                            <div class="detail">
                                                <div class="category"><a href="category.html">Lifestyle</a></div>
                                                <div class="time">December 22, 2016</div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="article-mini">
                                    <div class="inner">
                                        <figure>
                                            <a href="single.html">
                                                <img src="{{asset('/NormalUser/images/news/img05.jpg')}}" alt="Sample Article">
                                            </a>
                                        </figure>
                                        <div class="padding">
                                            <h1><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
                                            <div class="detail">
                                                <div class="category"><a href="category.html">Lifestyle</a></div>
                                                <div class="time">December 22, 2016</div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="article-mini">
                                    <div class="inner">
                                        <figure>
                                            <a href="single.html">
                                                <img src="{{asset('/NormalUser/images/news/img02.jpg')}}" alt="Sample Article">
                                            </a>
                                        </figure>
                                        <div class="padding">
                                            <h1><a href="single.html">Fusce ullamcorper elit at felis cursus suscipit</a></h1>
                                            <div class="detail">
                                                <div class="category"><a href="category.html">Travel</a></div>
                                                <div class="time">December 21, 2016</div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="article-mini">
                                    <div class="inner">
                                        <figure>
                                            <a href="single.html">
                                                <img src="{{asset('/NormalUser/images/news/img13.jpg')}}" alt="Sample Article">
                                            </a>
                                        </figure>
                                        <div class="padding">
                                            <h1><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
                                            <div class="detail">
                                                <div class="category"><a href="category.html">International</a></div>
                                                <div class="time">December 20, 2016</div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="article-mini">
                                    <div class="inner">
                                        <figure>
                                            <a href="single.html">
                                                <img src="{{asset('/NormalUser/images/news/img08.jpg')}}" alt="Sample Article">
                                            </a>
                                        </figure>
                                        <div class="padding">
                                            <h1><a href="single.html">Aliquam et metus convallis tincidunt velit ut rhoncus dolor</a></h1>
                                            <div class="detail">
                                                <div class="category"><a href="category.html">Computer</a></div>
                                                <div class="time">December 19, 2016</div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    <div class="banner">
                        <a href="#">
                            <img src="{{asset('/NormalUser/images/ads.png')}}" alt="Sample Article">
                        </a>
                    </div>
                    <div class="line top">
                        <div >Danh Lam Thắng Cảnh</div>
                    </div>
                    <div class="row">
                        <article class="col-md-12 article-list">
                            <div class="inner">
                                <figure>
                                    <a href="single.html">
                                        <img src="{{asset('/NormalUser/images/news/img11.jpg')}}" alt="Sample Article">
                                    </a>
                                </figure>
                                <div class="details">
                                    <div class="detail">
                                        <div class="category">
                                            <a href="#">Film</a>
                                        </div>
                                        <div class="time">December 19, 2016</div>
                                    </div>
                                    <h1><a href="single.html">Donec consequat arcu at ultrices sodales quam erat aliquet diam</a></h1>
                                    <p>
                                    Donec consequat, arcu at ultrices sodales, quam erat aliquet diam, sit amet interdum libero nunc accumsan nisi.
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
                        <article class="col-md-12 article-list">
                            <div class="inner">
                                <div class="badge">
                                    Sponsored
                                </div>
                                <figure>
                                    <a href="single.html">
                                        <img src="{{asset('/NormalUser/images/news/img02.jpg')}}" alt="Sample Article">
                                    </a>
                                </figure>
                                <div class="details">
                                    <div class="detail">
                                        <div class="category">
                                            <a href="#">Travel</a>
                                        </div>
                                        <div class="time">December 18, 2016</div>
                                    </div>
                                    <h1><a href="single.html">Maecenas accumsan tortor ut velit pharetra mollis</a></h1>
                                    <p>
                                        Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et arcu iaculis placerat sollicitudin ut est. In fringilla dui.
                                    </p>
                                    <footer>
                                        <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>4209</div></a>
                                        <a class="btn btn-primary more" href="single.html">
                                            <div>More</div>
                                            <div><i class="ion-ios-arrow-thin-right"></i></div>
                                        </a>
                                    </footer>
                                </div>
                            </div>
                        </article>
                        <article class="col-md-12 article-list">
                            <div class="inner">
                                <figure>
                                    <a href="single.html">
                                        <img src="{{asset('/NormalUser/images/news/img03.jpg')}}" alt="Sample Article">
                                    </a>
                                </figure>
                                <div class="details">
                                    <div class="detail">
                                        <div class="category">
                                        <a href="#">Travel</a>
                                        </div>
                                        <div class="time">December 16, 2016</div>
                                    </div>
                                    <h1><a href="single.html">Nulla facilisis odio quis gravida vestibulum Proin venenatis pellentesque arcu</a></h1>
                                    <p>
                                        Nulla facilisis odio quis gravida vestibulum. Proin venenatis pellentesque arcu, ut mattis nulla placerat et.
                                    </p>
                                    <footer>
                                        <a href="#" class="love active"><i class="ion-android-favorite"></i> <div>302</div></a>
                                        <a class="btn btn-primary more" href="single.html">
                                            <div>More</div>
                                            <div><i class="ion-ios-arrow-thin-right"></i></div>
                                        </a>
                                    </footer>
                                </div>
                            </div>
                        </article>
                        <article class="col-md-12 article-list">
                            <div class="inner">
                                <figure>
                                    <a href="single.html">
                                        <img src="{{asset('/NormalUser/images/news/img09.jpg')}}" alt="Sample Article">
                                    </a>
                                </figure>
                                <div class="details">
                                    <div class="detail">
                                        <div class="category">
                                            <a href="#">Healthy</a>
                                        </div>
                                        <div class="time">December 16, 2016</div>
                                    </div>
                                    <h1><a href="single.html">Maecenas blandit ultricies lorem id tempor enim pulvinar at</a></h1>
                                    <p>
                                        Maecenas blandit ultricies lorem, id tempor enim pulvinar at. Curabitur sit amet tortor eu ipsum lacinia malesuada.
                                    </p>
                                    <footer>
                                        <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>783</div></a>
                                        <a class="btn btn-primary more" href="single.html">
                                            <div>More</div>
                                            <div><i class="ion-ios-arrow-thin-right"></i></div>
                                        </a>
                                    </footer>
                                </div>
                            </div>
                        </article>
                    </div>
                    
                    <div class="line top">
                        <div >Ẩm Thực</div>
                    </div>
                    <div class="row">
                        <article class="col-md-12 article-list">
                            <div class="inner">
                                <figure>
                                    <a href="single.html">
                                        <img src="{{asset('/NormalUser/images/news/img11.jpg')}}" alt="Sample Article">
                                    </a>
                                </figure>
                                <div class="details">
                                    <div class="detail">
                                        <div class="category">
                                            <a href="#">Film</a>
                                        </div>
                                        <div class="time">December 19, 2016</div>
                                    </div>
                                    <h1><a href="single.html">Donec consequat arcu at ultrices sodales quam erat aliquet diam</a></h1>
                                    <p>
                                    Donec consequat, arcu at ultrices sodales, quam erat aliquet diam, sit amet interdum libero nunc accumsan nisi.
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
                        <article class="col-md-12 article-list">
                            <div class="inner">
                                <div class="badge">
                                    Sponsored
                                </div>
                                <figure>
                                    <a href="single.html">
                                        <img src="{{asset('/NormalUser/images/news/img02.jpg')}}" alt="Sample Article">
                                    </a>
                                </figure>
                                <div class="details">
                                    <div class="detail">
                                        <div class="category">
                                            <a href="#">Travel</a>
                                        </div>
                                        <div class="time">December 18, 2016</div>
                                    </div>
                                    <h1><a href="single.html">Maecenas accumsan tortor ut velit pharetra mollis</a></h1>
                                    <p>
                                        Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et arcu iaculis placerat sollicitudin ut est. In fringilla dui.
                                    </p>
                                    <footer>
                                        <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>4209</div></a>
                                        <a class="btn btn-primary more" href="single.html">
                                            <div>More</div>
                                            <div><i class="ion-ios-arrow-thin-right"></i></div>
                                        </a>
                                    </footer>
                                </div>
                            </div>
                        </article>
                        <article class="col-md-12 article-list">
                            <div class="inner">
                                <figure>
                                    <a href="single.html">
                                        <img src="{{asset('/NormalUser/images/news/img03.jpg')}}" alt="Sample Article">
                                    </a>
                                </figure>
                                <div class="details">
                                    <div class="detail">
                                        <div class="category">
                                        <a href="#">Travel</a>
                                        </div>
                                        <div class="time">December 16, 2016</div>
                                    </div>
                                    <h1><a href="single.html">Nulla facilisis odio quis gravida vestibulum Proin venenatis pellentesque arcu</a></h1>
                                    <p>
                                        Nulla facilisis odio quis gravida vestibulum. Proin venenatis pellentesque arcu, ut mattis nulla placerat et.
                                    </p>
                                    <footer>
                                        <a href="#" class="love active"><i class="ion-android-favorite"></i> <div>302</div></a>
                                        <a class="btn btn-primary more" href="single.html">
                                            <div>More</div>
                                            <div><i class="ion-ios-arrow-thin-right"></i></div>
                                        </a>
                                    </footer>
                                </div>
                            </div>
                        </article>
                        <article class="col-md-12 article-list">
                            <div class="inner">
                                <figure>
                                    <a href="single.html">
                                        <img src="{{asset('/NormalUser/images/news/img09.jpg')}}" alt="Sample Article">
                                    </a>
                                </figure>
                                <div class="details">
                                    <div class="detail">
                                        <div class="category">
                                            <a href="#">Healthy</a>
                                        </div>
                                        <div class="time">December 16, 2016</div>
                                    </div>
                                    <h1><a href="single.html">Maecenas blandit ultricies lorem id tempor enim pulvinar at</a></h1>
                                    <p>
                                        Maecenas blandit ultricies lorem, id tempor enim pulvinar at. Curabitur sit amet tortor eu ipsum lacinia malesuada.
                                    </p>
                                    <footer>
                                        <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>783</div></a>
                                        <a class="btn btn-primary more" href="single.html">
                                            <div>More</div>
                                            <div><i class="ion-ios-arrow-thin-right"></i></div>
                                        </a>
                                    </footer>
                                </div>
                            </div>
                        </article>
                    </div>
                    
                    <div class="line top">
                        <div >Văn Hóa & Xã Hội</div>
                    </div>
                    <!-- Test-->		</div>
                    <div class="row">
                        <article class="col-md-12 article-list">
                            <div class="inner">
                                <figure>
                                    <a href="single.html">
                                        <img src="{{asset('/NormalUser/images/news/img11.jpg')}}" alt="Sample Article">
                                    </a>
                                </figure>
                                <div class="details">
                                    <div class="detail">
                                        <div class="category">
                                            <a href="#">Film</a>
                                        </div>
                                        <div class="time">December 19, 2016</div>
                                    </div>
                                    <h1><a href="single.html">Donec consequat arcu at ultrices sodales quam erat aliquet diam</a></h1>
                                    <p>
                                    Donec consequat, arcu at ultrices sodales, quam erat aliquet diam, sit amet interdum libero nunc accumsan nisi.
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
                        <article class="col-md-12 article-list">
                            <div class="inner">
                                <div class="badge">
                                    Sponsored
                                </div>
                                <figure>
                                    <a href="single.html">
                                        <img src="{{asset('/NormalUser/images/news/img02.jpg')}}" alt="Sample Article">
                                    </a>
                                </figure>
                                <div class="details">
                                    <div class="detail">
                                        <div class="category">
                                            <a href="#">Travel</a>
                                        </div>
                                        <div class="time">December 18, 2016</div>
                                    </div>
                                    <h1><a href="single.html">Maecenas accumsan tortor ut velit pharetra mollis</a></h1>
                                    <p>
                                        Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et arcu iaculis placerat sollicitudin ut est. In fringilla dui.
                                    </p>
                                    <footer>
                                        <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>4209</div></a>
                                        <a class="btn btn-primary more" href="single.html">
                                            <div>More</div>
                                            <div><i class="ion-ios-arrow-thin-right"></i></div>
                                        </a>
                                    </footer>
                                </div>
                            </div>
                        </article>
                        <article class="col-md-12 article-list">
                            <div class="inner">
                                <figure>
                                    <a href="single.html">
                                        <img src="{{asset('/NormalUser/images/news/img03.jpg')}}" alt="Sample Article">
                                    </a>
                                </figure>
                                <div class="details">
                                    <div class="detail">
                                        <div class="category">
                                        <a href="#">Travel</a>
                                        </div>
                                        <div class="time">December 16, 2016</div>
                                    </div>
                                    <h1><a href="single.html">Nulla facilisis odio quis gravida vestibulum Proin venenatis pellentesque arcu</a></h1>
                                    <p>
                                        Nulla facilisis odio quis gravida vestibulum. Proin venenatis pellentesque arcu, ut mattis nulla placerat et.
                                    </p>
                                    <footer>
                                        <a href="#" class="love active"><i class="ion-android-favorite"></i> <div>302</div></a>
                                        <a class="btn btn-primary more" href="single.html">
                                            <div>More</div>
                                            <div><i class="ion-ios-arrow-thin-right"></i></div>
                                        </a>
                                    </footer>
                                </div>
                            </div>
                        </article>
                        <article class="col-md-12 article-list">
                            <div class="inner">
                                <figure>
                                    <a href="single.html">
                                        <img src="{{asset('/NormalUser/images/news/img09.jpg')}}" alt="Sample Article">
                                    </a>
                                </figure>
                                <div class="details">
                                    <div class="detail">
                                        <div class="category">
                                            <a href="#">Healthy</a>
                                        </div>
                                        <div class="time">December 16, 2016</div>
                                    </div>
                                    <h1><a href="single.html">Maecenas blandit ultricies lorem id tempor enim pulvinar at</a></h1>
                                    <p>
                                        Maecenas blandit ultricies lorem, id tempor enim pulvinar at. Curabitur sit amet tortor eu ipsum lacinia malesuada.
                                    </p>
                                    <footer>
                                        <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>783</div></a>
                                        <a class="btn btn-primary more" href="single.html">
                                            <div>More</div>
                                            <div><i class="ion-ios-arrow-thin-right"></i></div>
                                        </a>
                                    </footer>
                                </div>
                            </div>
                        </article>
                    </div>
                    
        
                    <div class="line top">
                        <div >Di Tích Lịch Sử</div>
                    </div>
                    <div class="row ">
                        <article class="col-md-12 article-list">
                            <div class="inner">
                                <figure>
                                    <a href="single.html">
                                        <img src="{{asset('/NormalUser/images/news/img11.jpg')}}" alt="Sample Article">
                                    </a>
                                </figure>
                                <div class="details">
                                    <div class="detail">
                                        <div class="category">
                                            <a href="#">Film</a>
                                        </div>
                                        <div class="time">December 19, 2016</div>
                                    </div>
                                    <h1><a href="single.html">Donec consequat arcu at ultrices sodales quam erat aliquet diam</a></h1>
                                    <p>
                                    Donec consequat, arcu at ultrices sodales, quam erat aliquet diam, sit amet interdum libero nunc accumsan nisi.
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
                        <article class="col-md-12 article-list">
                            <div class="inner">
                                <div class="badge">
                                    Sponsored
                                </div>
                                <figure>
                                    <a href="single.html">
                                        <img src="{{asset('/NormalUser/images/news/img02.jpg')}}" alt="Sample Article">
                                    </a>
                                </figure>
                                <div class="details">
                                    <div class="detail">
                                        <div class="category">
                                            <a href="#">Travel</a>
                                        </div>
                                        <div class="time">December 18, 2016</div>
                                    </div>
                                    <h1><a href="single.html">Maecenas accumsan tortor ut velit pharetra mollis</a></h1>
                                    <p>
                                        Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et arcu iaculis placerat sollicitudin ut est. In fringilla dui.
                                    </p>
                                    <footer>
                                        <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>4209</div></a>
                                        <a class="btn btn-primary more" href="single.html">
                                            <div>More</div>
                                            <div><i class="ion-ios-arrow-thin-right"></i></div>
                                        </a>
                                    </footer>
                                </div>
                            </div>
                        </article>
                        <article class="col-md-12 article-list">
                            <div class="inner">
                                <figure>
                                    <a href="single.html">
                                        <img src="{{asset('/NormalUser/images/news/img03.jpg')}}" alt="Sample Article">
                                    </a>
                                </figure>
                                <div class="details">
                                    <div class="detail">
                                        <div class="category">
                                        <a href="#">Travel</a>
                                        </div>
                                        <div class="time">December 16, 2016</div>
                                    </div>
                                    <h1><a href="single.html">Nulla facilisis odio quis gravida vestibulum Proin venenatis pellentesque arcu</a></h1>
                                    <p>
                                        Nulla facilisis odio quis gravida vestibulum. Proin venenatis pellentesque arcu, ut mattis nulla placerat et.
                                    </p>
                                    <footer>
                                        <a href="#" class="love active"><i class="ion-android-favorite"></i> <div>302</div></a>
                                        <a class="btn btn-primary more" href="single.html">
                                            <div>More</div>
                                            <div><i class="ion-ios-arrow-thin-right"></i></div>
                                        </a>
                                    </footer>
                                </div>
                            </div>
                        </article>
                        <article class="col-md-12 article-list ">
                            <div class="inner">
                                <figure>
                                    <a href="single.html">
                                        <img src="{{asset('/NormalUser/images/news/img09.jpg')}}" alt="Sample Article">
                                    </a>
                                </figure>
                                <div class="details">
                                    <div class="detail">
                                        <div class="category">
                                            <a href="#">Healthy</a>
                                        </div>
                                        <div class="time">December 16, 2016</div>
                                    </div>
                                    <h1><a href="single.html">Maecenas blandit ultricies lorem id tempor enim pulvinar at</a></h1>
                                    <p>
                                        Maecenas blandit ultricies lorem, id tempor enim pulvinar at. Curabitur sit amet tortor eu ipsum lacinia malesuada.
                                    </p>
                                    <footer>
                                        <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>783</div></a>
                                        <a class="btn btn-primary more" href="single.html">
                                            <div>More</div>
                                            <div><i class="ion-ios-arrow-thin-right"></i></div>
                                        </a>
                                    </footer>
                                </div>
                            </div>
                        </article>
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
                                <article class="article-mini">
                                    <div class="inner">
                                        <figure>
                                            <a href="single.html">
                                                <img src="{{asset('/NormalUser/images/news/img07.jpg')}}" alt="Sample Article">
                                            </a>
                                        </figure>
                                        <div class="padding">
                                            <h1><a href="single.html">Fusce ullamcorper elit at felis cursus suscipit</a></h1>
                                        </div>
                                    </div>
                                </article>
                                <article class="article-mini">
                                    <div class="inner">
                                        <figure>
                                            <a href="single.html">
                                                <img src="{{asset('/NormalUser/images/news/img14.jpg')}}" alt="Sample Article">
                                            </a>
                                        </figure>
                                        <div class="padding">
                                            <h1><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
                                        </div>
                                    </div>
                                </article>
                                <article class="article-mini">
                                    <div class="inner">
                                        <figure>
                                            <a href="single.html">
                                                <img src="{{asset('/NormalUser/images/news/img09.jpg')}}" alt="Sample Article">
                                            </a>
                                        </figure>
                                        <div class="padding">
                                            <h1><a href="single.html">Aliquam et metus convallis tincidunt velit ut rhoncus dolor</a></h1>
                                        </div>
                                    </div>
                                </article>
                                <article class="article-mini">
                                    <div class="inner">
                                        <figure>
                                            <a href="single.html">
                                                <img src="{{asset('/NormalUser/images/news/img11.jpg')}}" alt="Sample Article">
                                            </a>
                                        </figure>
                                        <div class="padding">
                                            <h1><a href="single.html">dui augue facilisis lacus fringilla pulvinar massa felis quis velit</a></h1>
                                        </div>
                                    </div>
                                </article>
                                <article class="article-mini">
                                    <div class="inner">
                                        <figure>
                                            <a href="single.html">
                                                <img src="{{asset('/NormalUser/images/news/img06.jpg')}}" alt="Sample Article">
                                            </a>
                                        </figure>
                                        <div class="padding">
                                            <h1><a href="single.html">neque est semper nulla, ac elementum risus quam a enim</a></h1>
                                        </div>
                                    </div>
                                </article>
                                <article class="article-mini">
                                    <div class="inner">
                                        <figure>
                                            <a href="single.html">
                                                <img src="{{asset('/NormalUser/images/news/img03.jpg')}}" alt="Sample Article">
                                            </a>
                                        </figure>
                                        <div class="padding">
                                            <h1><a href="single.html">Morbi vitae nisl ac mi luctus aliquet a vitae libero</a></h1>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </aside>

                        <aside>
                            <h1 class="aside-title">Videos
                                <div class="carousel-nav" id="video-list-nav">
                                    <div class="prev"><i class="ion-ios-arrow-left"></i></div>
                                    <div class="next"><i class="ion-ios-arrow-right"></i></div>
                                </div>
                            </h1>
                            <div class="aside-body">
                                <ul class="video-list" data-youtube='"carousel":true, "nav": "#video-list-nav"'>
                                    <li><a data-youtube-id="SBjQ9tuuTJQ" data-action="magnific"></a></li>
                                    <li><a data-youtube-id="9cVJr3eQfXc" data-action="magnific"></a></li>
                                    <li><a data-youtube-id="DnGdoEa1tPg" data-action="magnific"></a></li>
                                </ul>
                            </div>
                        </aside>
                        <aside id="sponsored">
                            <h1 class="aside-title">Sponsored</h1>
                            <div class="aside-body">
                                <ul class="sponsored">
                                    <li>
                                        <a href="#">
                                            <img src="{{asset('/NormalUser/images/sponsored.png')}}" alt="Sponsored">
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="#">
                                            <img src="{{asset('/NormalUser/images/sponsored.png')}}" alt="Sponsored">
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="#">
                                            <img src="{{asset('/NormalUser/images/sponsored.png')}}" alt="Sponsored">
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="#">
                                            <img src="{{asset('/NormalUser/images/sponsored.png')}}" alt="Sponsored">
                                        </a>
                                    </li> 
                                </ul>
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
					<article class="article">
						<div class="inner">
							<figure>
								<a href="single.html">
									<img src="{{asset('/NormalUser/images/news/img03.jpg')}}" alt="Sample Article">
								</a>
							</figure>
							<div class="padding">
								<div class="detail">
										<div class="time">December 11, 2016</div>
										<div class="category"><a href="category.html">Travel</a></div>
								</div>
								<h2><a href="single.html">tempor interdum Praesent tincidunt</a></h2>
								<p>Praesent tincidunt, leo vitae congue molestie.</p>
							</div>
						</div>
					</article>
					<article class="article">
						<div class="inner">
							<figure>
								<a href="single.html">
									<img src="{{asset('/NormalUser/images/news/img16.jpg')}}" alt="Sample Article">
								</a>
							</figure>
							<div class="padding">
								<div class="detail">
									<div class="time">December 09, 2016</div>
									<div class="category"><a href="category.html">Sport</a></div>
								</div>
								<h2><a href="single.html">Maecenas porttitor sit amet turpis a semper</a></h2>
								<p> Proin vulputate, urna id porttitor luctus, dui augue facilisis lacus.</p>
							</div>
						</div>
					</article>
					<article class="article">
						<div class="inner">
							<figure>
								<a href="single.html">
									<img src="{{asset('/NormalUser/images/news/img15.jpg')}}" alt="Sample Article">
								</a>
							</figure>
							<div class="padding">
								<div class="detail">
									<div class="time">December 26, 2016</div>
									<div class="category"><a href="category.html">Lifestyle</a></div>
								</div>
								<h2><a href="single.html">Fusce ac odio eu ex volutpat pellentesque</a></h2>
								<p>Vestibulum ante ipsum primis in faucibus orci luctus</p>
							</div>
						</div>
					</article>
					<article class="article">
						<div class="inner">
							<figure>
								<a href="single.html">
									<img src="{{asset('/NormalUser/images/news/img14.jpg')}}" alt="Sample Article">
								</a>
							</figure>
							<div class="padding">
								<div class="detail">
									<div class="time">December 26, 2016</div>
									<div class="category"><a href="category.html">Travel</a></div>
								</div>
								<h2><a href="single.html">Nulla facilisis odio quis gravida vestibulum</a></h2>
								<p>Proin venenatis pellentesque arcu, ut mattis nulla placerat et.</p>
							</div>
						</div>
					</article>
					<article class="article">
						<div class="inner">
							<figure>
								<a href="single.html">
									<img src="{{asset('/NormalUser/images/news/img01.jpg')}}" alt="Sample Article">
								</a>
							</figure>
							<div class="padding">
								<div class="detail">
									<div class="time">December 26, 2016</div>
									<div class="category"><a href="category.html">Travel</a></div>
								</div>
								<h2><a href="single.html">Fusce Ullamcorper Elit At Felis Cursus Suscipit</a></h2>
								<p>Proin venenatis pellentesque arcu, ut mattis nulla placerat et.</p>
							</div>
						</div>
					</article>
					<article class="article">
						<div class="inner">
							<figure>
								<a href="single.html">
									<img src="{{asset('/NormalUser/images/news/img11.jpg')}}" alt="Sample Article">
								</a>
							</figure>
							<div class="padding">
								<div class="detail">
									<div class="time">December 26, 2016</div>
									<div class="category"><a href="category.html">Travel</a></div>
								</div>
								<h2><a href="single.html">Donec consequat arcu at ultrices sodales</a></h2>
								<p>Proin venenatis pellentesque arcu, ut mattis nulla placerat et.</p>
							</div>
						</div>
					</article>
				</div>
			</div>
		</section>
    
@endsection