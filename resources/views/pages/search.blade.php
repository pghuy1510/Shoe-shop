@extends('layout.master')
@section('home')
													<!-- /banner_bottom_agile_info -->
													<div class="page-head_agile_info_w3l">
														<div class="container">
															<h3> <span>Tìm kiếm </span></h3>
															<!--/w3_short-->
															<div class="services-breadcrumb">
																<div class="agile_inner_breadcrumb">

																	<ul class="w3_short">
																		<li><a href="home">Trang Chủ</a><i>|</i></li>
																		<li>Tìm Kiếm</li>
																	</ul>
																</div>
															</div>
															<!--//w3_short-->
														</div>
													</div>
													<div class="clearfix"></div>
													<div class="container">	
														<br>
														<h5>Từ Khóa<span>: {{$tukhoa}}</span></h5>
														<h5>Có<span> ({{count($sanpham)}}) </span>sản phẩm được tìm thấy.</h5>
													</div>
														<div class="container">	
															<div class="single-pro">
																@foreach($sanpham as $sp)
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
																			
																		</div>
																	</div>
																</div>
																@endforeach
																<div class="row" >
																	{{$sanpham->links()}}
																</div>	
																<div class="clearfix"></div>
															</div>
														</div>
														<!-- //mens -->
														
<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
																		<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
																		<!-- //js -->
<script src="js/responsiveslides.min.js"></script>
<script>
	// You can also use "$(window).load(function() {"
	$(function
	 // Slideshow 4
		$("#slider3").responsiveSlides({
			auto: true,
			pager: true,
			nav: false,
			speed: 500,
			namespace: "callbacks",
			before: function () {
				$('.events').append("<li>before event fired.</li>");
			},
			after: function () {
				$('.events').append("<li>after event fired.</li>");
			}
		});
	});
</script>
<script src="js/modernizr.custom.js"></script>
					<!-- Custom-JavaScript-File-Links --> 
					<!-- cart-js -->
<script src="js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>

<!-- //cart-js --> 
<!---->
<script type='text/javascript'>//<![CDATA[ 
$(window).load(function(){
	$( "#slider-range" ).slider({
		range: true,
		min: 0,
		max: 9000,
		values: [ 1000, 7000 ],
		slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
	}
});
	$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

});//]]>  
</script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
						<!---->
						<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(eve
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
						<!-- here stars scrolling icon -->
<script type="text/javascript">
	$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/

		$().UItoTop({ easingType: 'easeOutQuart' });

	});
</script>
		<!-- //here ends scrolling icon -->

		<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap.js"></script>
	@endsection()
