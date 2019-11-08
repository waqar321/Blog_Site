
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	@foreach($productImages as $image)
				
	@endforeach
<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">New Products</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Laptops</a></li>
									<li><a data-toggle="tab" href="#tab1">Smartphones</a></li>
									<li><a data-toggle="tab" href="#tab1">Cameras</a></li>
									<li><a data-toggle="tab" href="#tab1">Accessories</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->
					
					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										
		
	
								<!-- product -->
									
									@foreach($product as $products)
										<div class="product">
											<div class="product-img">
												<img src="{{ URL('assets/')}}/{{$image->image_path}}/{{$image->image_name}} " alt=""> 
									
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Category{{ $products->product_id }}</p>
												<h3 class="product-name"><a href="#"> {{ $products->name }}</a></h3>
												<h4 class="product-price">${{ $products->discount_price }}.00 <del class="product-old-price">${{ $products->regular_price }}.00</del></h4>
												<div class="product-rating">	
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>	
													  <button type="button" class="btn btn-default"><a href="{{ URL('Update/'.$products->product_id)}}">Edit</a></button>
												<div class="product-btns">
												</div>	
													  <button type="button" class="btn btn-default"><a href="{{ URL('Delete/'.$products->product_id)}}">Delete</a></button>
												<div class="product-btns">

													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div>
									@endforeach
								<!-- /product -->

									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>