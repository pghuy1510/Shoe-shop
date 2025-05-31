@extends('layout.master')
@section('home')

<!--/single_page-->
       <!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>Chi Tiết <span>Sản Phẩm </span></h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="home">Trang Chủ</a><i>|</i></li>
								<li>Chi Tiết Sản Phẩm</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>

  <!-- banner-bootom-w3-agileits -->
<div class="banner-bootom-w3-agileits">
	<div class="container">

	     <div class="col-md-4 single-right-left ">
			<div class="grid images_3_of_2">
				
				<div class="flexslider">
					
					<ul class="slides">

						<li data-thumb="images/{{$sanpham->ImgSP}}">
							<div class="thumb-image"> <img src="images/{{$sanpham->ImgSP}}" data-imagezoom="true" class="img-responsive"> </div>
						</li>
						
						<!-- <li data-thumb="images/{{$sanpham->ImgSP}}">
							<div class="thumb-image"> <img src="{{$sanpham->ImgSP}}" data-imagezoom="true" class="img-responsive"> </div>
						</li>	
						<li data-thumb="images/{{$sanpham->ImgSP}}">
							<div class="thumb-image"> <img src="{{$sanpham->ImgSP}}" data-imagezoom="true" class="img-responsive"> </div>
						</li> -->
					</ul>
					
					<div class="clearfix"></div>
				</div>
					
			</div>
		</div>
		<div class="col-md-8 single-right-left simpleCart_shelfItem">
			
					<h3>{{$sanpham->TenSP}}</h3>
					@if($sanpham->GiaSale == Null)
					<p>
						<span class="item_price">${{$sanpham->GiaSP}}</span>
					</p>
					@else
					<p>
						 <span class="item_price">${{$sanpham->GiaSale}}</span> 
						<del> -${{$sanpham->GiaSP}}</del>
					</p>
					@endif
					<div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked="">
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
					</div>
					<div class="description">
						<h5>Check delivery, payment options and charges at your location</h5>
						 <form action="#" method="post">
						<input type="text" value="Enter pincode" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter pincode';}" required="">
						<input type="submit" value="Check">
						</form>
					</div>
					<div class="color-quality">
						<div class="color-quality-right">
							<h5>Kích Thước</h5>
							<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
								@foreach($sanpham->thuoctinh as $tt)
								<option value="null">{{$tt->KichThuoc}}</option>
								<!-- <option value="null">6 Qty</option> 
								<option value="null">7 Qty</option>					
								<option value="null">10 Qty</option> -->
								
								@endforeach								
							</select>
						</div>
					</div>
					<div class="occasional">
						<h5>Màu Sắc:</h5>
						<div class="colr ert">
							<label class="radio"><input type="radio" name="radio" checked=""><i></i>Đen</label>
						</div>
						<div class="colr">
							<label class="radio"><input type="radio" name="radio"><i></i>Đỏ </label>
						</div>
						<div class="colr">
							<label class="radio"><input type="radio" name="radio"><i></i>Trắng</label>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="occasion-cart">
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">

									
										<input action type="submit" id="themgiohang{{$sanpham->id_SP}}" name="submit" value="Thêm vòa giỏ hàng" class="button" />
									
								</div>
								<script type="text/javascript">
									$("#themgiohang{{$sanpham->id_SP}}").click(function(){
										// alert(1);
										$.get('themgiohang{{$sanpham->id_SP}}', function(data){
											alert(data);
										});
									});
								</script>
																			
					</div>
					<ul class="social-nav model-3d-0 footer-social w3_agile_social single_page_w3ls">
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
		      
	 			<div class="clearfix"> </div>
				<!-- /new_arrivals --> 
	<div class="responsive_tabs_agileits"> 
				<div id="horizontalTab">
						<ul class="resp-tabs-list">
							<li>Mô Tả Sản Phẩm</li>
							<li>Nhận Xét</li>
							<li>Thông Tin Sản Phẩm</li>
						</ul>
					<div class="resp-tabs-container">
					<!--/tab_one-->
					   <div class="tab1">
					   	
							<div class="single_page_agile_its_w3ls">
							  <h6>{{$sanpham->TenSP}}</h6>
							   <p class="w3ls_para">{{$sanpham->MoTaSP}}</p>
							</div>
						
						</div>
						<!--//tab_one-->
						<div class="tab2">
							<div class="single_page_agile_its_w3ls">
								<div class="bootstrap-tab-text-grids">
									<div class="bootstrap-tab-text-grid">
									@foreach($comment as $cmt)
										<!-- <div class="bootstrap-tab-text-grid-left">
											<img src="images/t1.jpg" alt=" " class="img-responsive">
										</div> -->
										<div class="bootstrap-tab-text-grid-right">
											@foreach($nguoidung as $nd)
											@if($nd->id_KH == $cmt->id_KH)
											<ul>
												
												<li><a href="#">{{$nd->TenKH}}</a></li>
												<li><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i> Reply</a></li>
												
											</ul>
											<p>{{$cmt->Noidung}}</p>
											@endif
											@endforeach
										</div>
										<div class="clearfix"> </div>
									@endforeach
						             </div>
									 <div class="add-review">
										<h4>Thêm Bình Luận</h4>
										<form action="#" method="post">
												<input type="text" name="Name" required="Name">
												<input type="email" name="Email" required="Email"> 
												<textarea name="Message" required=""></textarea>
											<input type="submit" value="Gửi">
										</form>
									</div>
								 </div>
								 
							 </div>
						 </div>
						   
					</div>
				</div>	
			</div>
	<!-- //new_arrivals --> 
	  	<!--/slider_owl-->
	
			<div class="w3_agile_latest_arrivals">
			<h3 class="wthree_text_info">Sản Phẩm <span>Liên Quan</span></h3>	
				@foreach($sp_tuongtu as $sp_lq)
					  <div class="col-md-3 product-men single">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="images/{{$sp_lq->ImgSP}}" alt="" class="pro-image-front">
										<img src="images/{{$sp_lq->ImgSP}}" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single/{{$sp_lq->id_CD}}-{{$sp_lq->id_SP}}" class="link-product-add-cart">Xem Chi Tiết</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single/{{$sp_lq->id_CD}}-{{$sp_lq->id_SP}}">{{$sp_lq->TenSP}}</a></h4>
										<div class="info-product-price">
											@if($sp_lq->GiaSale == NULL)
											<span class="item_price">${{$sp_lq->GiaSP}}</span>						
											@else
											<span class="item_price">${{$sp_lq->GiaSale}}</span>
											<del>${{$sp_lq->GiaSP}}</del>
											@endif
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">

									
										<input action type="submit" id="themgiohang{{$sp_lq->id_SP}}" name="submit" value="Thêm vòa giỏ hàng" class="button" />
									
								</div>
								<script type="text/javascript">
									$("#themgiohang{{$sp_lq->id_SP}}").click(function(){
										// alert(1);
										$.get('themgiohang{{$sp_lq->id_SP}}', function(data){
											alert(data);
										});
									});
								</script>
																			
									</div>
								</div>
							</div>
							@endforeach
                     
							<div class="clearfix"> </div>
					<!--//slider_owl-->
		         </div>
	        </div>
 </div>
<!--//single_page-->
<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
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
	<!-- single -->
<script src="js/imagezoom.js"></script>
<!-- single -->
<!-- script for responsive tabs -->						
<script src="js/easy-responsive-tabs.js"></script>
<script>
	$(document).ready(function () {
	$('#horizontalTab').easyResponsiveTabs({
	type: 'default', //Types: default, vertical, accordion           
	width: 'auto', //auto or any width like 600px
	fit: true,   // 100% fit in a container
	closed: 'accordion', // Start closed if in accordion view
	activate: function(event) { // Callback function if tab is switched
	var $tab = $(this);
	var $info = $('#tabInfo');
	var $name = $('span', $info);
	$name.text($tab.text());
	$info.show();
	}
	});
	$('#verticalTab').easyResponsiveTabs({
	type: 'vertical',
	width: 'auto',
	fit: true
	});
	});
</script>
<!-- FlexSlider -->
<script src="js/jquery.flexslider.js"></script>
						<script>
						// Can also be used with $(document).ready()
							$(window).load(function() {
								$('.flexslider').flexslider({
								animation: "slide",
								controlNav: "thumbnails"
								});
							});
						</script>
					<!-- //FlexSlider-->
<!-- //script for responsive tabs -->		
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
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