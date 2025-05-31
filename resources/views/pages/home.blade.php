@extends('layout.master')
@section('home')

<!-- banner -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1" class=""></li>
		<li data-target="#myCarousel" data-slide-to="2" class=""></li>
		<li data-target="#myCarousel" data-slide-to="3" class=""></li>
		<li data-target="#myCarousel" data-slide-to="4" class=""></li> 
	</ol>
	<div class="carousel-inner" role="listbox">
		<div class="item active"> 
			<div class="container">
				<div class="carousel-caption">
					<h3>The Biggest <span>Sale</span></h3>
					<p>Special for today</p>
					<a class="hvr-outline-out button2" href="shop">Cửa Hàng </a>
				</div>
			</div>
		</div>
		<div class="item item2"> 
			<div class="container">
				<div class="carousel-caption">
					<h3>Summer <span>Collection</span></h3>
					<p>New Arrivals On Sale</p>
					<a class="hvr-outline-out button2" href="shop">Cửa Hàng </a>
				</div>
			</div>
		</div>
		<div class="item item3"> 
			<div class="container">
				<div class="carousel-caption">
					<h3>The Biggest <span>Sale</span></h3>
					<p>Special for today</p>
					<a class="hvr-outline-out button2" href="shop">Cửa Hàng </a>
				</div>
			</div>
		</div>
		<div class="item item4"> 
			<div class="container">
				<div class="carousel-caption">
					<h3>Summer <span>Collection</span></h3>
					<p>New Arrivals On Sale</p>
					<a class="hvr-outline-out button2" href="shop">Cửa Hàng </a>
				</div>
			</div>
		</div>
		<div class="item item5"> 
			<div class="container">
				<div class="carousel-caption">
					<h3>The Biggest <span>Sale</span></h3>
					<p>Special for today</p>
					<a class="hvr-outline-out button2" href="shop">Cửa Hàng </a>
				</div>
			</div>
		</div> 
	</div>
	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
	<!-- The Modal -->
</div> 
<!-- //banner -->
<div class="banner_bottom_agile_info">
	<div class="container">
		<div class="banner_bottom_agile_info_inner_w3ls">
			<div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
				<figure class="effect-roxy">
					<img src="images/bottom1.jpg" alt=" " class="img-responsive" />
					<figcaption>
						<h3><span>F</span>all Ahead</h3>
						<p>New Arrivals</p>
					</figcaption>			
				</figure>
			</div>
			<div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
				<figure class="effect-roxy">
					<img src="images/bottom2.jpg" alt=" " class="img-responsive" />
					<figcaption>
						<h3><span>F</span>all Ahead</h3>
						<p>New Arrivals</p>
					</figcaption>			
				</figure>
			</div>
			<div class="clearfix"></div>
		</div> 
	</div> 
</div>
<!-- banner-bootom-w3-agileits -->
<div class="banner-bootom-w3-agileits">
	<div class="container">
		<h3 class="wthree_text_info">What's <span>Trending?</span></h3>

		<div class="col-md-5 bb-grids bb-left-agileits-w3layouts">
			<a href="shop">
				<div class="bb-left-agileits-w3layouts-inner grid">
					<figure class="effect-roxy">
						<img src="images/bb1.jpg" alt=" " class="img-responsive" />
						<figcaption>
							<h3><span>S</span>ale </h3>
							<p>Upto 55%</p>
						</figcaption>			
					</figure>
				</div>
			</a>
		</div>
		<div class="col-md-7 bb-grids bb-middle-agileits-w3layouts">
			<a href="shop">
				<div class="bb-middle-agileits-w3layouts grid">
					<figure class="effect-roxy">
						<img src="images/bottom3.jpg" alt=" " class="img-responsive" />
						<figcaption>
							<h3><span>S</span>ale </h3>
							<p>Upto 55%</p>
						</figcaption>			
					</figure>
				</div>
			</a>
			<a href="shop">
				<div class="bb-middle-agileits-w3layouts forth grid">
					<figure class="effect-roxy">
						<img src="images/bottom4.jpg" alt=" " class="img-responsive">
						<figcaption>
							<h3><span>S</span>ale </h3>
							<p>Upto 65%</p>
						</figcaption>		
					</figure>
				</div>
			</a>
			<div class="clearfix"></div>
		</div>
	</div>
</div>

<!-- /new_arrivals --> 
<div class="new_arrivals_agile_w3ls_info"> 
	<div class="container">
		<h3 class="wthree_text_info">Sản Phẩm <span>Mới</span></h3>		
		<div id="horizontalTab">
			<ul class="resp-tabs-list">

				<li> Adidas</li>
				<li> Nike</li>
				<li> Converse</li>
				<li> Biti's</li>

			</ul>
			<div class="resp-tabs-container">
				<!--/tab_one-->
				<div class="tab1">
					@foreach($sanpham as $sp)
					@if($sp->id_TH == 1)
					<div class="col-md-3 product-men">
						<div class="men-pro-item simpleCart_shelfItem">
							<div class="men-thumb-item">
								<img src="images/{{$sp->ImgSP}}" alt="" class="pro-image-front">
								<img src="images/{{$sp->ImgSP}}" alt="" class="pro-image-back">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href="single/{{$sp->id_CD}}-{{$sp->id_SP}}" class="link-product-add-cart">Xem Chi Tiết</a>
									</div>
								</div>
								<span class="product-new-top">New</span>

							</div>
							<div class="item-info-product ">
								<h4><a href="single/{{$sp->id_CD}}-{{$sp->id_SP}}">{{$sp->TenSP}}</a></h4>
								<div class="info-product-price">
									@if($sp->GiaSale == Null)
									<span class="item_price">${{$sp->GiaSP}}</span>										
									@else
									<span class="item_price">${{$sp->GiaSP}}</span>
									<del>${{$sp->GiaSale}}</del>
									@endif
								</div>
								<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">

									
										<input action type="submit" id="themgiohang{{$sp->id_SP}}" name="submit" value="Thêm vòa giỏ hàng" class="button" />
									
								</div>
								<script type="text/javascript">
									$("#themgiohang{{$sp->id_SP}}").click(function(){
										// alert(1);
										$.get('themgiohang{{$sp->id_SP}}', function(data){
											alert(data);
										});
									});
								</script>
			<!-- <div class="occasion-cart">
                <a class="hvr-outline-out button2" href="" onclick="return confirm('Sản phẩm đã được thêm vào giỏ hàng');">
                    Thêm vào giỏ hàng 
                </a>
            </div> -->



							</div>
						</div>
					</div>
					@endif
					@endforeach

					<div class="clearfix"></div>
				</div>
				<!--//tab_one-->
				<!--/tab_two-->
				<div class="tab2">
					@foreach($sanpham as $sp)
					@if($sp->id_TH==2)
					<div class="col-md-3 product-men">
						<div class="men-pro-item simpleCart_shelfItem">
							<div class="men-thumb-item">
								<img src="images/{{$sp->ImgSP}}" alt="" class="pro-image-front">
								<img src="images/{{$sp->ImgSP}}" alt="" class="pro-image-back">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href="single/{{$sp->id_CD}}-{{$sp->id_SP}}" class="link-product-add-cart">Xem Chi Tiết</a>
									</div>
								</div>
								<span class="product-new-top">New</span>

							</div>
							<div class="item-info-product ">
								<h4><a href="single/{{$sp->id_CD}}-{{$sp->id_SP}}"></a>{{$sp->TenSP}}</h4>
								<div class="info-product-price">
									@if($sp->GiaSale == Null)
									<span class="item_price">${{$sp->GiaSP}}</span>										
									@else
									<span class="item_price">${{$sp->GiaSP}}</span>
									<del>${{$sp->GiaSale}}</del>
									@endif
								</div>
								<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">

									
										<input action type="submit" id="themgiohang{{$sp->id_SP}}" name="submit" value="Thêm vòa giỏ hàng" class="button" />
									
								</div>
								<script type="text/javascript">
									$("#themgiohang{{$sp->id_SP}}").click(function(){
										// alert(1);
										$.get('themgiohang{{$sp->id_SP}}', function(data){
											alert(data);
										});
									});
								</script>

							</div>
						</div>
					</div>
					@endif
					@endforeach

					<div class="clearfix"></div>
				</div>
				<!--//tab_two-->
				<!--/tab_3-->
				<div class="tab3">
					@foreach($sanpham as $sp)
					@if($sp->id_TH==3)		
					<div class="col-md-3 product-men">
						<div class="men-pro-item simpleCart_shelfItem">
							<div class="men-thumb-item">
								<img src="images/{{$sp->ImgSP}}" alt="" class="pro-image-front">
								<img src="images/{{$sp->ImgSP}}" alt="" class="pro-image-back">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href="single/{{$sp->id_CD}}-{{$sp->id_SP}}" class="link-product-add-cart">Xem Chi Tiết</a>
									</div>
								</div>
								<span class="product-new-top">New</span>

							</div>
							<div class="item-info-product ">
								<h4><a href="single/{{$sp->id_CD}}-{{$sp->id_SP}}">{{$sp->TenSP}}</a></h4>
								<div class="info-product-price">
									@if($sp->GiaSale == Null)
									<span class="item_price">${{$sp->GiaSP}}</span>										
									@else
									<span class="item_price">${{$sp->GiaSP}}</span>
									<del>${{$sp->GiaSale}}</del>
									@endif
								</div>
								 <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">

									
										<input action type="submit" id="themgiohang{{$sp->id_SP}}" name="submit" value="Thêm vòa giỏ hàng" class="button" />
									
								</div>
								<script type="text/javascript">
									$("#themgiohang{{$sp->id_SP}}").click(function(){
										// alert(1);
										$.get('themgiohang{{$sp->id_SP}}', function(data){
											alert(data);
										});
									});
								</script>

							</div>
						</div>
					</div>
					@endif
					@endforeach							
					<div class="clearfix"></div>
				</div>
				<!--//tab_t3-->
				<!--/tab_4-->
				<div class="tab4">
					@foreach($sanpham as $sp)
					@if($sp->id_TH==4)	
					<div class="col-md-3 product-men">
						<div class="men-pro-item simpleCart_shelfItem">
							<div class="men-thumb-item">
								<img src="images/{{$sp->ImgSP}}" alt="" class="pro-image-front">
								<img src="images/{{$sp->ImgSP}}" alt="" class="pro-image-back">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href="single/{{$sp->id_CD}}-{{$sp->id_SP}}" class="link-product-add-cart">Xem Chi Tiết</a>
									</div>
								</div>
								<span class="product-new-top">New</span>

							</div>
							<div class="item-info-product ">
								<h4><a href="single/{{$sp->id_CD}}-{{$sp->id_SP}}">{{$sp->TenSP}}</a></h4>
								<div class="info-product-price">
									@if($sp->GiaSale == Null)
									<span class="item_price">${{$sp->GiaSP}}</span>										
									@else
									<span class="item_price">${{$sp->GiaSP}}</span>
									<del>${{$sp->GiaSale}}</del>
									@endif
								</div>
								<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">

									
										<input action type="submit" id="themgiohang{{$sp->id_SP}}" name="submit" value="Thêm vòa giỏ hàng" class="button" />
									
								</div>
								<script type="text/javascript">
									$("#themgiohang{{$sp->id_SP}}").click(function(){
										// alert(1);
										$.get('themgiohang{{$sp->id_SP}}', function(data){
											alert(data);
										});
									});
								</script>

							</div>
						</div>
					</div>
					@endif
					@endforeach							
					<div class="clearfix"></div>
				</div>
			</div>
		</div>	
	</div>
</div>
<!-- //new_arrivals --> 
<!-- /we-offer -->
<div class="sale-w3ls">
	<div class="container">
		<h6>We Offer Flat <span>40%</span> Discount</h6>

		<a class="hvr-outline-out button2" href="single.html">Shop Now </a>
	</div>
</div>
<!-- //we-offer -->
@endsection