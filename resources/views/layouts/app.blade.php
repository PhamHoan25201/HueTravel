
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>{{ config('app.name', 'Laravel') }}</title>
		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<!-- Bootstrap -->
		<link rel="stylesheet" href="{{asset('/NormalUser/scripts/bootstrap/bootstrap.min.css')}}">
		<!-- IonIcons -->
		<link rel="stylesheet" href="{{asset('/NormalUser/scripts/ionicons/css/ionicons.min.css')}}">
		<!-- Toast -->
		<link rel="stylesheet" href="{{asset('/NormalUser/scripts/toast/jquery.toast.min.css')}}">
		<!-- OwlCarousel -->
		<link rel="stylesheet" href="{{asset('/NormalUser/scripts/owlcarousel/dist/assets/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('/NormalUser/scripts/owlcarousel/dist/assets/owl.theme.default.min.css')}}">
		<!-- Magnific Popup -->
		<link rel="stylesheet" href="{{asset('/NormalUser/scripts/magnific-popup/dist/magnific-popup.css')}}">
		<link rel="stylesheet" href="{{asset('/NormalUser/scripts/sweetalert/dist/sweetalert.css')}}">
		<!-- Custom style -->
		<link rel="stylesheet" href="{{asset('/NormalUser/css/style.css')}}">
		<link rel="stylesheet" href="{{asset('/NormalUser/css/skins/all.css')}}">
		<link rel="stylesheet" href="{{asset('/NormalUser/css/demo.css')}}">
		
	</head>

	<body class="skin-orange">
		
		<header class="primary">

			<!-- First Bar -->
			<div class="firstbar">
				@include('flash_message');
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-12">
							<div class="brand">
								<a href="{{ url('/') }}">
									<img  src="{{asset('/NormalUser/images/logo 1.png')}}" alt="HueTravel Logo" height="80">
								</a>
							</div>
													
						</div>
						<div class="col-md-6 col-sm-12">
							<form class="search" autocomplete="off">
								<div class="form-group">
									<div class="input-group">
										<input type="text" name="q" class="form-control" placeholder="Tìm kiếm">									
										<div class="input-group-btn">
											<button class="btn btn-primary"><i class="ion-search"></i></button>
										</div>
									</div>
								</div>
								<div class="help-block">
									<div><b>Phổ biến:</b></div>
									<ul>
										<li><a href="#">Chùa Thiên Mụ</a></li>
										<li><a href="#">Lăng</a></li>
										<li><a href="#">Đặc sản</a></li>
										<li><a href="#">Ẩm thực</a></li>
										
									</ul>
								</div>
							</form>								
						</div>
						<div class="col-md-3 col-sm-12 text-right " style="padding: 15px;">
							
						@guest
                            @if (Route::has('login')||Route::has('register') )
								<ul class="nav-icons">
									<li>
										<a href="{{ route('login') }}"><i class="ion-person"></i><div>{{ __('Login') }}</div></a>
									</li>

									<li>
										<a href="{{ route('register') }}"><i class="ion-person-add"></i><div>{{ __('Register') }}</div></a>
									</li>
								</ul>
                            @endif
                        @else
							<div class="menu" id="Account">
								<ul class="nav-list">
									<li id="accountt" class="dropdown magz-dropdown" ><a  style="margin-right: 60px;" href="login.html" ><i class="ion-person"></i><b>{{ Auth::user()->name }}</b></a>
										<ul class="dropdown-menu">
											<li><a href="{{ route('admin.home') }}"><i class="icon ion-person"></i> Login Admin</a></li>
											<li><a href="#"><i class="icon ion-heart"></i> Favorite</a></li>
											<li><a href="#"><i class="icon ion-chatbox"></i> Comments</a></li>
											<li><a href="#"><i class="icon ion-key"></i> Change Password</a></li>
											<li><a href="#"><i class="icon ion-settings"></i> Settings</a></li>
											<li class="divider"></li>
											<li>
												<a href="{{ route('logout') }}" 
													onclick="event.preventDefault();
													document.getElementById('logout-form').submit();"><i class="icon ion-log-out"></i> 
													{{ __('Logout') }}
												</a>
												<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
													{{csrf_field()}}
												</form>
											</li>
										</ul>
										
									</li>
									
								</ul>
								<button class="btn btn-primary btn-block white"><i class="ion-edit"></i><b style="padding-left: 10px;">Đăng Bài</b></button>
							</div>	

                        @endguest
								
							
						</div>
					</div>
				</div>
			</div>

			<!-- Start nav -->
			<nav class="menu">
				<div class="container">
					<div class="brand">
						<a href="#">
							<img  src="{{asset('/NormalUser/images/logo 1.png')}}" alt="HueTravel Logo" height="50">
						</a>
					</div>
					<div class="mobile-toggle">
						<a href="#" data-toggle="menu" data-target="#menu-list"><i class="ion-navicon-round"></i></a>
					</div>
					<div class="mobile-toggle">
						<a href="#" data-toggle="sidebar" data-target="#sidebar"><i class="ion-ios-arrow-left"></i></a>
					</div>
					<div id="menu-list">
						<ul class="nav-list">
							<li class="for-tablet nav-title"><a>Menu</a></li>
							<li class="for-tablet"><a href="login.html">Login</a></li>
							<li class="for-tablet"><a href="register.html">Register</a></li>

						<!-- Menu Giới thiệu -->
							<li class="dropdown magz-dropdown magz-dropdown-megamenu"><a href="#">Giới thiệu <i class="ion-ios-arrow-right"></i></a>
								<div class="dropdown-menu megamenu">
									<div class="megamenu-inner">
										<div class="row">
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-12">
														<h2 class="megamenu-title">Featured Posts</h2>
													</div>
												</div>
												<div class="row">
													<article class="article col-md-3 mini">
														<div class="inner">
															<figure>
																<a href="single.html">
																	<img src="{{asset('/NormalUser/images/news/img10.jpg')}}" alt="Sample Article">
																</a>
															</figure>
															<div class="padding">
																<div class="detail">
																	<div class="time">December 10, 2016</div>
																	<div class="category"><a href="category.html">Healthy</a></div>
																</div>
																<h2><a href="single.html">Tổng quan về Cố đô Huế</a></h2>
															</div>
														</div>
													</article>
													<article class="article col-md-3 mini">
														<div class="inner">
															<figure>
																<a href="single.html">
																	<img src="{{asset('/NormalUser/images/news/img11.jpg')}}" alt="Sample Article">
																</a>
															</figure>
															<div class="padding">
																<div class="detail">
																	<div class="time">December 13, 2016</div>
																	<div class="category"><a href="category.html">Lifestyle</a></div>
																</div>
																<h2><a href="single.html">Tiềm năng Du lịch</a></h2>
															</div>
														</div>
													</article>
													<article class="article col-md-3 mini">
														<div class="inner">
															<figure>
																<a href="single.html">
																	<img src="{{asset('/NormalUser/images/news/img14.jpg')}}" alt="Sample Article">
																</a>
															</figure>
															<div class="padding">
																<div class="detail">
																	<div class="time">December 14, 2016</div>
																	<div class="category"><a href="category.html">Travel</a></div>
																</div>
																<h2><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
															</div>
														</div>
													</article>
													<article class="article col-md-3 mini">
														<div class="inner">
															<figure>
																<a href="single.html">
																	<img src="{{asset('/NormalUser/images/news/img11.jpg')}}" alt="Sample Article">
																</a>
															</figure>
															<div class="padding">
																<div class="detail">
																	<div class="time">December 13, 2016</div>
																	<div class="category"><a href="category.html">Lifestyle</a></div>
																</div>
																<h2><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
															</div>
														</div>
													</article>
												</div>
											</div>
										</div>								
									</div>
								</div>
							</li>

						<!-- Menu Điểm Du lịch -->
						<li class="dropdown magz-dropdown magz-dropdown-megamenu"><a href="#">Điểm Du lịch <i class="ion-ios-arrow-right"></i> <div class="badge">Hot</div></a>
							<div class="dropdown-menu megamenu">
								<div class="megamenu-inner">
									<div class="row">
										<div class="col-md-3">
											<div class="row">
												<div class="col-md-12">
													<h2 class="megamenu-title">Địa điểm nổi bật</h2>
												</div>
											</div>
											<ul class="vertical-menu">
												<li><a href="#"><i class="ion-ios-circle-outline"></i>Chùa Thiên Mụ</a></li>
												<li><a href="#"><i class="ion-ios-circle-outline"></i>Biển Cảnh Dương</a></li>
												<li><a href="#"><i class="ion-ios-circle-outline"></i>Đồi Vọng Cảnh</a></li>
												<li><a href="#"><i class="ion-ios-circle-outline"></i>Đại Nội Huế</a></li>
												<li><a href="#"><i class="ion-ios-circle-outline"></i>Lăng tẩm</a></li>
											</ul>
										</div>
										<div class="col-md-9">
											<div class="row">
												<div class="col-md-12">
													<h2 class="megamenu-title">Featured Posts</h2>
												</div>
											</div>
											<div class="row">
												<article class="article col-md-4 mini">
													<div class="inner">
														<figure>
															<a href="single.html">
																<img src="{{asset('/NormalUser/images/news/img10.jpg')}}" alt="Sample Article">
															</a>
														</figure>
														<div class="padding">
															<div class="detail">
																<div class="time">December 10, 2016</div>
																<div class="category"><a href="category.html">Healthy</a></div>
															</div>
															<h2><a href="single.html">Tổng quan về Cố đô Huế</a></h2>
														</div>
													</div>
												</article>
												<article class="article col-md-4 mini">
													<div class="inner">
														<figure>
															<a href="single.html">
																<img src="{{asset('/NormalUser/images/news/img11.jpg')}}" alt="Sample Article">
															</a>
														</figure>
														<div class="padding">
															<div class="detail">
																<div class="time">December 13, 2016</div>
																<div class="category"><a href="category.html">Lifestyle</a></div>
															</div>
															<h2><a href="single.html">Tiềm năng Du lịch</a></h2>
														</div>
													</div>
												</article>
												<article class="article col-md-4 mini">
													<div class="inner">
														<figure>
															<a href="single.html">
																<img src="{{asset('/NormalUser/images/news/img14.jpg')}}" alt="Sample Article">
															</a>
														</figure>
														<div class="padding">
															<div class="detail">
																<div class="time">December 14, 2016</div>
																<div class="category"><a href="category.html">Travel</a></div>
															</div>
															<h2><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
														</div>
													</div>
												</article>
											</div>
										</div>
									</div>								
								</div>
							</div>
						</li>

						<!-- Menu Trải nghiệm -->
						<li class="dropdown magz-dropdown magz-dropdown-megamenu"><a href="category.html">Trải nghiệm <i class="ion-ios-arrow-right"></i></a>
							<div class="dropdown-menu megamenu">
								<div class="megamenu-inner">
									<div class="row">
										<div class="col-md-3">
											<div class="row">
												<div class="col-md-12">
													<h2 class="megamenu-title">Loại hình Trải nghiệm</h2>
												</div>
											</div>
											<ul class="vertical-menu">
												<li><a href="category.html"><i class="ion-ios-circle-outline"></i>Danh lam - Thắng cảnh</a></li>
												<li><a href="#"><i class="ion-ios-circle-outline"></i>Ẩm thực</a></li>
												<li><a href="#"><i class="ion-ios-circle-outline"></i>Văn hóa & Lễ hội</a></li>
												<li><a href="#"><i class="ion-ios-circle-outline"></i>Di tích Lịch sử</a></li>
											</ul>
										</div>
										<div class="col-md-9">
											<div class="row">
												<div class="col-md-12">
													<h2 class="megamenu-title">Featured Posts</h2>
												</div>
											</div>
											<div class="row">
												<article class="article col-md-4 mini">
													<div class="inner">
														<figure>
															<a href="single.html">
																<img src="{{asset('/NormalUser/images/news/img10.jpg')}}" alt="Sample Article">
															</a>
														</figure>
														<div class="padding">
															<div class="detail">
																<div class="time">December 10, 2016</div>
																<div class="category"><a href="category.html">Healthy</a></div>
															</div>
															<h2><a href="single.html">Tổng quan về Cố đô Huế</a></h2>
														</div>
													</div>
												</article>
												<article class="article col-md-4 mini">
													<div class="inner">
														<figure>
															<a href="single.html">
																<img src="{{asset('/NormalUser/images/news/img11.jpg')}}" alt="Sample Article">
															</a>
														</figure>
														<div class="padding">
															<div class="detail">
																<div class="time">December 13, 2016</div>
																<div class="category"><a href="category.html">Lifestyle</a></div>
															</div>
															<h2><a href="single.html">Tiềm năng Du lịch</a></h2>
														</div>
													</div>
												</article>
												<article class="article col-md-4 mini">
													<div class="inner">
														<figure>
															<a href="single.html">
																<img src="{{asset('/NormalUser/images/news/img14.jpg')}}" alt="Sample Article">
															</a>
														</figure>
														<div class="padding">
															<div class="detail">
																<div class="time">December 14, 2016</div>
																<div class="category"><a href="category.html">Travel</a></div>
															</div>
															<h2><a href="single.html">5 trải nghiệm về đêm ở Thành phố Huế</a></h2>
														</div>
													</div>
												</article>
											</div>
										</div>
									</div>								
								</div>
							</div>
						</li>

						<!-- Dịch vụ Du lịch -->

						<li class="dropdown magz-dropdown">
							<a href="category.html">Dịch vụ du lịch <i class="ion-ios-arrow-right"></i></a>
							<ul class="dropdown-menu">
								<li><a href="index.html">Công ty Lữ hành</a></li>
								<li><a href="category.html">Các Tour Du lịch</a></li>
								<li><a href="single.html">Cơ sở Lưu trú</a></li>
								<li><a href="page.html">Danh sách nhà hàng</a></li>
								<li><a href="search.html">Vận chuyển du lịch</a></li>
							</ul>
						</li>

						<!-- Cẩm nang và kỹ năng -->

						<li class="dropdown magz-dropdown magz-dropdown-megamenu"><a href="#">Cẩm nang và Kỹ năng <i class="ion-ios-arrow-right"></i> <div class="badge">Hot</div></a>
							<div class="dropdown-menu megamenu">
								<div class="megamenu-inner">
									<div class="row">
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-12">
													<h2 class="megamenu-title">Featured Posts</h2>
												</div>
											</div>
											<div class="row">
												<article class="article col-md-3 mini">
													<div class="inner">
														<figure>
															<a href="single.html">
																<img src="{{asset('/NormalUser/images/news/img10.jpg')}}" alt="Sample Article">
															</a>
														</figure>
														<div class="padding">
															<div class="detail">
																<div class="time">December 10, 2016</div>
																<div class="category"><a href="category.html">Healthy</a></div>
															</div>
															<h2><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
														</div>
													</div>
												</article>
												<article class="article col-md-3 mini">
													<div class="inner">
														<figure>
															<a href="single.html">
																<img src="{{asset('/NormalUser/images/news/img11.jpg')}}" alt="Sample Article">
															</a>
														</figure>
														<div class="padding">
															<div class="detail">
																<div class="time">December 13, 2016</div>
																<div class="category"><a href="category.html">Lifestyle</a></div>
															</div>
															<h2><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
														</div>
													</div>
												</article>
												<article class="article col-md-3 mini">
													<div class="inner">
														<figure>
															<a href="single.html">
																<img src="{{asset('/NormalUser/images/news/img14.jpg')}}" alt="Sample Article">
															</a>
														</figure>
														<div class="padding">
															<div class="detail">
																<div class="time">December 14, 2016</div>
																<div class="category"><a href="category.html">Travel</a></div>
															</div>
															<h2><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
														</div>
													</div>
												</article>
												<article class="article col-md-3 mini">
													<div class="inner">
														<figure>
															<a href="single.html">
																<img src="{{asset('/NormalUser/images/news/img11.jpg')}}" alt="Sample Article">
															</a>
														</figure>
														<div class="padding">
															<div class="detail">
																<div class="time">December 13, 2016</div>
																<div class="category"><a href="category.html">Lifestyle</a></div>
															</div>
															<h2><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
														</div>
													</div>
												</article>
												
											</div>
										</div>
									</div>								
								</div>
							</div>
						</li>

						<!-- Thông tin Liên hệ -->
						<li><a href="#">Thông tin Liên hệ</a></li>
						</ul>
					</div>
				</div>
			</nav>
			<!-- End nav -->
		</header>
		{{--  Start content --}}
		
			
			@yield('content')
		


		<a href="#" class="cd-top">Back To Top</a><!--Back to Top-->
		<!-- Start footer -->
		<footer class="footer ">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="block">
							<h1 class="block-title">Company Info</h1>
							<div class="block-body">
								<figure class="foot-logo">
									<img src="{{asset('/NormalUser/images/logo 1.png')}}" class="img-responsive" alt="Logo" height="100">
								</figure>
								<p class="brand-description">
									HueTravel-Đưa Huế gần hơn với mọi người bạn bốn phương.
								</p>
								<a href="page.html" class="btn btn-magz white">About Us <i class="ion-ios-arrow-thin-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						
						<div class="block">
							<h1 class="block-title">Địa điểm nổi bật <div class="right"><a href="#">See All <i class="ion-ios-arrow-thin-right"></i></a></div></h1>
							<div class="block-body">
								<ul class="tags">
									<li><a href="#">Đại Nội Huế</a></li>
										<li><a href="#">Lăng Khải Định</a></li>
										<li><a href="#">Lăng Cô</a></li>
										<li><a href="#">Biển Cảnh Dương</a></li>
										<li><a href="#">Rừng ngập mặn Rú Chá</a></li>
										<li><a href="#">Hồ Thủy Tiên</a></li>
										<li><a href="#">Phố Đi Bộ</a></li>
										
								</ul>
							</div>
						</div>
						
					</div>
					
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="block">
							<h1 class="block-title">Bài Viết Nổi Bật</h1>
							<div class="block-body">
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.html">
												<img src="{{asset('/NormalUser/images/news/img12.jpg')}}" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.html">Donec consequat lorem quis augue pharetra</a></h1>
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
											<h1><a href="single.html">eu dapibus risus aliquam etiam ut venenatis</a></h1>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.html">
												<img src="{{asset('/NormalUser/images/news/img15.jpg')}}" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.html">Nulla facilisis odio quis gravida vestibulum </a></h1>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.html">
												<img src="{{asset('/NormalUser/images/news/img16.jpg')}}" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.html">Proin venenatis pellentesque arcu vitae </a></h1>
										</div>
									</div>
								</article>
								<a href="#" class="btn btn-magz white btn-block">See All <i class="ion-ios-arrow-thin-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-xs-12 col-sm-6">
						<div class="block">
							<h1 class="block-title">Follow Us</h1>
							<div class="block-body">
								<p>Follow us and stay in touch to get the latest news</p>
								<ul class="social trp">
									<li>
										<a href="#" class="facebook">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-facebook"></i>
										</a>
									</li>
									<li>
										<a href="#" class="twitter">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-twitter-outline"></i>
										</a>
									</li>
									<li>
										<a href="#" class="youtube">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-youtube-outline"></i>
										</a>
									</li>
									<li>
										<a href="#" class="googleplus">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-googleplus"></i>
										</a>
									</li>
									<li>
										<a href="#" class="instagram">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-instagram-outline"></i>
										</a>
									</li>
									<li>
										<a href="#" class="tumblr">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-tumblr"></i>
										</a>
									</li>
									<li>
										<a href="#" class="dribbble">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-dribbble"></i>
										</a>
									</li>
									<li>
										<a href="#" class="linkedin">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-linkedin"></i>
										</a>
									</li>
									<li>
										<a href="#" class="skype">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-skype"></i>
										</a>
									</li>
									<li>
										<a href="#" class="rss">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-rss"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="line"></div>
						<div class="block">
							<div class="block-body no-margin">
								<ul class="footer-nav-horizontal">
									<li><a href="index.html">Home</a></li>
									<li><a href="#">Partner</a></li>
									<li><a href="contact.html">Contact</a></li>
									<li><a href="page.html">About</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="copyright">
							COPYRIGHT &copy; HKG. ALL RIGHT RESERVED.
							<div>
								Made with <i class="ion-heart"></i> by <a href="http://kodinger.com">HKG</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</footer>
		
		<!-- End Footer -->

		<!-- JS -->
		<script src="{{asset('/NormalUser/js/jquery.js')}}"></script>
		<script src="{{asset('/NormalUser/js/jquery.migrate.js')}}"></script>
		<script src="{{asset('/NormalUser/scripts/bootstrap/bootstrap.min.js')}}"></script>
		<script>var $target_end=$(".best-of-the-week");</script>
		<script src="{{asset('/NormalUser/scripts/jquery-number/jquery.number.min.js')}}"></script>
		<script src="{{asset('/NormalUser/scripts/owlcarousel/dist/owl.carousel.min.js')}}"></script>
		<script src="{{asset('/NormalUser/scripts/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('/NormalUser/scripts/easescroll/jquery.easeScroll.js')}}"></script>
		<script src="{{asset('/NormalUser/scripts/sweetalert/dist/sweetalert.min.js')}}"></script>
		<script src="{{asset('/NormalUser/scripts/toast/jquery.toast.min.js')}}"></script>
		<script src="{{asset('/NormalUser/js/demo.js')}}"></script>
		<script src="{{asset('/NormalUser/js/e-magz.js')}}"></script>
		<script src="{{asset('/NormalUser/js/weather.js')}}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js" integrity="sha512-8E3KZoPoZCD+1dgfqhPbejQBnQfBXe8FuwL4z/c8sTrgeDMFEnoyTlH3obB4/fV+6Sg0a0XF+L/6xS4Xx1fUEg==" crossorigin="anonymous"></script>
		<script src="{{asset('/NormalUser/js/scrollMagic.js')}}"></script>
		<script src="{{asset('/NormalUser/js/backtotop.js')}}"></script>
	</body>
	
</html>