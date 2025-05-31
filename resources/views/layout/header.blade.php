<!--header -->
<div class="header" id="home">
	<div class="container">
		<ul>
			@if(empty(session('TenKH')))
				<li> <a href="dangnhap"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Đăng Nhập </a></li>
				<li> <a href="dangki" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Đăng Kí </a></li>
			@else
			
				<li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user-o" aria-hidden="true"></i>{{session('TenKH')}} </a>
				<span class="caret"></span>
				  <div class="dropdown-menu row p-5" style="background-color: black;">
				    <div class="col-12"><a href="#" class="text-dark m-4">Thông Tin Cá Nhân</a></div>
				    <div class="col-12"><a href="{{route('logout')}}">Thoát</a></div>
				  </div>
			</li>
		    @endif
			<li><i class="fa fa-phone" aria-hidden="true"></i> Điện Thoại : 0971599019</li>
			<li><i class="fa fa-envelope-o" aria-hidden="true"></i>Email: <a href="mailto:info@example.com">phamhuy1510@gmail.com</a></li>
		</ul>
	</div>
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
	<div class="header-bot_inner_wthreeinfo_header_mid">
		<div class="col-md-4 header-middle">
			<form action="search" method="get">
					<input type="search" name="tukhoa" placeholder="Tìm Kiếm Sản Phẩm..." required="">
					<input type="submit" value=" ">
				<div class="clearfix"></div>
			</form>
		</div>
		<!-- header-bot -->
			<div class="col-md-4 logo_agile">
				<h1><a href="home"><span>S</span>hoes Store <i class="fa fa-shopping-bag top_logo_agile_bag" aria-hidden="true"></i></a></h1>
			</div>
        <!-- header-bot -->
		<div class="col-md-4 agileits-social top_content">
						<ul class="social-nav model-3d-0 footer-social w3_agile_social">
						                                   <li class="share">Chia sẻ : </li>
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>



		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
					<li class="active menu__item menu__item--current"><a class="menu__link" href="home">Trang Chủ <span class="sr-only">(current)</span></a></li>
					<li class=" menu__item"><a class="menu__link" href="about">Giới Thiệu</a></li>
					<li class=" menu__item"><a class="menu__link" href="shop">Shop</a></li>
					<!-- <li class="menu__item dropdown">
					   <a class="menu__link" href="shop" class="dropdown-toggle" data-toggle="dropdown">Cửa Hàng<b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="icons.html">Adidas</a></li>
									<li><a href="typography.html">Nike</a></li>
									<li><a href="typography.html">Biti's</a></li>
								</ul>
					</li> -->
					<li class=" menu__item"><a class="menu__link" href="contact">Liên Hệ</a></li>
				  </ul>
				</div>
			  </div>
			</nav>	
		</div>
		<div class="top_nav_right">
			<div class="wthreecartaits wthreecartaits2 cart cart box_1"> 
				<button class="w3view-cart w-100" type="submit" name="submit" value=""><a class="w3view-cart" href="giohang"><i class="fa fa-cart-arrow-down" aria-hidden="true">({{$sl}})</i></a></button>
				</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //banner-top -->
