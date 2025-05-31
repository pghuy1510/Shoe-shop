	@extends('layout.master')
	@section('home')
														<!-- /banner_bottom_agile_info -->
														<div class="page-head_agile_info_w3l">
															<div class="container">
																<h3> <span>Cửa Hàng </span></h3>
																<!--/w3_short-->
																<div class="services-breadcrumb">
																	<div class="agile_inner_breadcrumb">

																		<ul class="w3_short">
																			<li><a href="home">Trang Chủ</a><i>|</i></li>
																			<li>Cửa Hàng</li>
																		</ul>
																	</div>
																</div>
																<!--//w3_short-->
															</div>
														</div>

														<!-- banner-bootom-w3-agileits -->
														<div class="banner-bootom-w3-agileits">
															<div class="container">
																<!-- mens -->
																<div class="col-md-4 products-left">
																	<div class="css-treeview">
																		<h4>Danh Mục</h4>
																		<ul class="tree-list-pad">																			
																			@foreach($thuonghieu as $th)
																				@if(count($th->chude) > 0)
																			<li><input type="checkbox" checked="checked" id="item-0" /><label for="item-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>{{$th->TenTH}}</label>
																				<ul>	
																					@foreach($th->chude as $cd)
																							<li><a href="shop/{{$cd->id_TH}}-{{$cd->id_CD}}">{{$cd->TenCD}}</a></li>
																					@endforeach				
																				</ul>
																			</li>
																			@endif
																			@endforeach	
																		</ul>
																	</div>

																	<div class="clearfix"></div>
																</div>
																<div class="col-md-8 products-right">
																	<h5>Các Sản Phẩm Được Tìm Thấy <span>({{count($sanpham)}})</span></h5>
																	<div class="sort-grid">
																		<div class="sorting">
																			<h6>Sort By</h6>
																			<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
																				<option value="null">Default</option>
																				<option value="null">Name(A - Z)</option> 
																				<option value="null">Name(Z - A)</option>
																				<option value="null">Price(High - Low)</option>
																				<option value="null">Price(Low - High)</option>	
																				<option value="null">Model(A - Z)</option>
																				<option value="null">Model(Z - A)</option>					
																			</select>
																			<div class="clearfix"></div>
																		</div>
																		<div class="sorting">
																			<h6>Showing</h6>
																			<select id="country2" onchange="change_country(this.value)" class="frm-field required sect">
																				<option value="null">7</option>
																				<option value="null">14</option> 
																				<option value="null">28</option>					
																				<option value="null">35</option>								
																			</select>
																			<div class="clearfix"></div>
																		</div>
																		<div class="clearfix"></div>
																	</div>
																	@foreach($thuonghieu as $th)
																	@if(!empty($idTH))
																	@if($th->id_TH == $idTH)		
																	<div class="men-wear-bottom">
																		<div class="col-sm-4 men-wear-left">
																			<img class="img-responsive" src="images/{{$th->ImgTH}}" alt=" " />
																		</div>
																		<div class="col-sm-8 men-wear-right">
																			<h4>Thương Hiệu <span>{{$th->TenTH}}</span></h4>
																			<p>{{$th->Description}}</p>
																		</div>
																		<div class="clearfix"></div>
																	</div>
																	@endif
																	@endif
																	@endforeach






																</div>

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
																	@endforeach
																	<div class="clearfix"></div>
																	<div class="row">
																		<center>
																		{{$sanpham->links()}}
																		</center>
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
		$(function() {
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
    $(".scroll").click(function(event) {  // thêm { sau function(event)
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
