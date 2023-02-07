@extends('admin.layouts.app')
@section('content')
				<div class="container-fluid">
										<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Product-Details</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Ecommerce</a></li>
								<li class="breadcrumb-item active" aria-current="page">Product-Details</li>
							</ol>
						</div>
						<div class="btn btn-list">
							<a class="btn ripple btn-primary" href="#"><i class="fe fe-external-link"></i> Export</a>
							<a class="btn ripple btn-secondary" href="#"><i class="fe fe-download"></i> Download</a>
							<a class="btn ripple btn-info" href="#"><i class="fe fe-help-circle"></i> Help</a>
							<a class="btn ripple btn-danger dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
								<i class="fe fe-settings"></i> Settings <i class="fas fa-caret-down ml-1"></i>
							</a>
							<div class="dropdown-menu tx-13">
								<a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i>View</a>
								<a class="dropdown-item" href="#"><i class="fe fe-plus-circle mr-2"></i>Add</a>
								<a class="dropdown-item" href="#"><i class="fe fe-mail mr-2"></i>Email</a>
								<a class="dropdown-item" href="#"><i class="fe fe-folder-plus mr-2"></i>Save</a>
								<a class="dropdown-item" href="#"><i class="fe fe-trash-2 mr-2"></i>Remove</a>
								<a class="dropdown-item" href="#"><i class="fe fe-settings mr-2"></i>More</a>
							</div>
						</div>
					</div>
					<!-- End Page Header -->
										<!-- Row -->
					<div class="row">
						<div class="col-lg-9 col-md-12">
							<div class="card custom-card productdesc">
								<div class="card-body h-100">
									<div class="productdec text-center">
										<div class="bg-light p-5 text-center">
											<div class="product-carousel">
												<div id="carousel" class="carousel slide" data-ride="false">
													<div class="carousel-inner">
														<div class="carousel-item active"><img src="assets/img/pngs/3.png" alt="img" class="wd-sm-350"> </div>
														<div class="carousel-item"> <img src="assets/img/pngs/10.png" alt="img" class="wd-sm-350"> </div>
														<div class="carousel-item"> <img src="assets/img/pngs/11.png" alt="img" class="wd-sm-350"> </div>
														<div class="carousel-item"> <img src="assets/img/pngs/12.png" alt="img" class="wd-sm-350"> </div>
														<div class="carousel-item"> <img src="assets/img/pngs/13.png" alt="img" class="wd-sm-350"> </div>
													</div>
												</div>
												<div class="clearfix carousel-slider">
													<div id="thumbcarousel" class="carousel slide" data-interval="false">
														<div class="carousel-inner">
															<div class="carousel-item active">
																<div data-target="#carousel" data-slide-to="0" class="thumb"><img src="assets/img/pngs/3.png" alt="img"></div>
																<div data-target="#carousel" data-slide-to="1" class="thumb"><img src="assets/img/pngs/10.png" alt="img"></div>
																<div data-target="#carousel" data-slide-to="2" class="thumb"><img src="assets/img/pngs/11.png" alt="img"></div>
																<div data-target="#carousel" data-slide-to="3" class="thumb"><img src="assets/img/pngs/12.png" alt="img"></div>
																<div data-target="#carousel" data-slide-to="4" class="thumb"><img src="assets/img/pngs/13.png" alt="img"></div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="text-center p-3 border-bottom btn-list">
										<a href="#" class="btn ripple btn-primary"><i class="fe fe-shopping-cart"> </i> Add to cart</a>
										<a href="#" class="btn ripple btn-secondary"><i class="fe fe-credit-card"> </i> Buy Now</a>
									</div>

									<div class="mt-4 mb-4">
										<h4>Lenovo Ideapad 330 Pentium Quad Core </h4>
										<h6 class="mt-4 fs-16">Description</h6>
										<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
										<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized .</p>
										<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.</p>
									</div>
									<div class="border">
										<div class="bg-light">
											<nav class="nav nav-tabs">
												<a class="nav-link active" data-toggle="tab" href="#tab1">Specification</a>
												<a class="nav-link" data-toggle="tab" href="#tab2">Dimensions</a>
												<a class="nav-link" data-toggle="tab" href="#tab3">Reviews(2)</a>
											</nav>
										</div>
										<div class="card-body tab-content">
											<div class="tab-pane active show" id="tab1">
												<ul class="list-unstyled mb-0">
													<li class="row">
														<div class="col-sm-3 text-muted">Brand</div>
														<div class="col-sm-3">CASAMOTION</div>
													</li>
													<li class=" row">
														<div class="col-sm-3 text-muted">Model Number</div>
														<div class="col-sm-3">AHLF016</div>
													</li>
													<li class="p-b-20 row">
														<div class="col-sm-3 text-muted">Model Name</div>
														<div class="col-sm-3">casamotion</div>
													</li>
													<li class="p-b-20 row">
														<div class="col-sm-3 text-muted">Suitable For</div>
														<div class="col-sm-3">Table, Floor</div>
													</li>
													<li class="p-b-20 row">
														<div class="col-sm-3 text-muted">Material</div>
														<div class="col-sm-3">Wood</div>
													</li>
													<li class="p-b-20 row">
														<div class="col-sm-3 text-muted">Color</div>
														<div class="col-sm-3">Brown</div>
													</li>
												</ul>
											</div>
											<div class="tab-pane" id="tab2">
												<ul class="list-unstyled mb-0">
													<li class="row">
														<div class="col-sm-3 text-muted">Width</div>
														<div class="col-sm-3">6.1 inch</div>
													</li>
													<li class=" row">
														<div class="col-sm-3 text-muted">Height</div>
														<div class="col-sm-3">24 inch</div>
													</li>
													<li class="p-b-20 row">
														<div class="col-sm-3 text-muted">Depth</div>
														<div class="col-sm-3">6.1 inch</div>
													</li>
													<li class="p-b-20 row">
														<div class="col-sm-3 text-muted">Other Dimensions</div>
														<div class="col-sm-3">15.5*15.5*24CM</div>
													</li>
												</ul>
											</div>
											<div class="tab-pane" id="tab3">
												<div class="media mb-4">
													<div class="main-img-user mr-3"><img alt="avatar" src="assets/img/users/8.jpg"></div>
													<div class="media-body">
														<div class="media-contact-name mb-1">
															<h6 class="mb-0">Audrey	Hudson</h6>
														</div>
														<div class="text-warning mb-0 fs-10">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="far fa-star"></i>
														</div>
														<p class="font-13 text-muted mb-0">Good Looking.........</p>
														<a href=""><span class="badge badge-light">Reply</span></a>
													</div>
												</div>
												<div class="media mb-4">
													<div class="main-img-user mr-3"><img alt="avatar" src="assets/img/users/10.jpg"></div>
													<div class="media-body">
														<div class="media-contact-name mb-1">
															<h6 class="mb-0">Paul Smith</h6>
														</div>
														<div class="text-warning mb-0 fs-10">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="far fa-star"></i>
															<i class="far fa-star"></i>
														</div>
														<p class="font-13 text-muted mb-0">Very nice ! On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the </p>
														<a href=""><span class="badge badge-light">Reply</span></a>
													</div>
												</div>
												<h5 class="mb-3">Add Review</h5>
												<form class="form-horizontal  m-t-20" action="index.html">
													<div class="form-group">
														<div class="col-xs-12">
															<input class="form-control" type="text" required="" placeholder="Username*">
														</div>
													</div>
													<div class="form-group">
														<div class="col-xs-12">
															<input class="form-control" type="email" required="" placeholder="Email*">
														</div>
													</div>
													<div class="form-group">
														<div class="col-xs-12">
															<textarea class="form-control" rows="5">Your Review*</textarea>
														</div>
													</div>
													<div class="">
														<a href="#" class="btn ripple btn-primary">Submit</a>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-12">
							<div class="card custom-card">
								<div class="card-header custom-card-header">
									<h6 class="card-title mb-0">Categories & Fliters</h6>
								</div>
								<div class="card-body h-100">
									<div class="custom-checkbox custom-control mb-2">
										<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1" checked="">
										<label for="checkbox-1" class="custom-control-label">Mens</label>
									</div>
									<div class="custom-checkbox custom-control mb-2">
										<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2">
										<label for="checkbox-2" class="custom-control-label">Womens</label>
									</div>
									<div class="custom-checkbox custom-control mb-2">
										<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-3">
										<label for="checkbox-3" class="custom-control-label">Kids</label>
									</div>
									<div class="custom-checkbox custom-control mb-2">
										<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-4">
										<label for="checkbox-4" class="custom-control-label">Others</label>
									</div>
									<div class="form-group mt-3">
										<label class="form-label">Category</label>
										<select class="form-control select2">
											<option label="Select"></option>
											<option value="1">Dress</option>
											<option value="2">Bags &amp; Purses</option>
											<option value="3">Coat &amp; Jacket</option>
											<option value="4">Beauty</option>
											<option value="5">Jeans</option>
											<option value="5">Jewellery</option>
											<option value="5">Electronics</option>
											<option value="5">Sports</option>
											<option value="5">Technology</option>
											<option value="5">Watches</option>
											<option value="5">Accessories</option>
										</select>
									</div>
									<div class="form-group">
										<label class="form-label">Brand</label>
										<select class="form-control select2">
											<option label="Select"></option>
											<option value="1">White</option>
											<option value="2">Black</option>
											<option value="3">Red</option>
											<option value="4">Green</option>
											<option value="5">Blue</option>
											<option value="6">Yellow</option>
										</select>
									</div>
									<div class="form-group">
										<label class="form-label">Type</label>
										<select class="form-control select2">
											<option label="Select"></option>
											<option value="1">Extra Small</option>
											<option value="2">Small</option>
											<option value="3">Medium</option>
											<option value="4">Large</option>
											<option value="5">Extra Large</option>
										</select>
									</div>
									<div class="form-group">
										<label class="form-label">Color</label>
										<select class="form-control select2">
											<option label="Select"></option>
											<option value="1">White</option>
											<option value="2">Black</option>
											<option value="3">Red</option>
											<option value="4">Green</option>
											<option value="5">Blue</option>
											<option value="6">Yellow</option>
										</select>
									</div>
									<a class="btn ripple btn-primary" href="#">Apply Filter</a>
								</div>
							</div>
							<div class="card custom-card productdesc-1">
								<div class="card-body h-100">
									<div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
										<div class="carousel-inner ">
											<div class="carousel-item bg-light active">
												<div class="text-center">
													<img class="pro_img wd-200 text-center" alt="Product" src="assets/img/pngs/1.png">
												</div>
												<div class="carouselproduct mt-4 text-center">
													<div class="mb-2 text-warning fs-12">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fas fa-star-half-alt"></i>
														<i class="far fa-star"></i>
														<i class="far fa-star"></i>
													</div>
													<h6 class=""><a href="product-details-1.html">Laptop Bag</a></h6>
													<ul class="product_price list-unstyled">
														<li class="old_price">$927</li>
														<li class="new_price">$597</li>
													</ul>
													<a href="#" class="btn ripple btn-primary"><i class="fe fe-shopping-cart"></i> Buy Now</a>
												</div>
											</div>
											<div class="carousel-item bg-light">
												<div class="text-center">
													<img class="pro_img wd-200 text-center" alt="Product" src="assets/img/pngs/2.png">
												</div>
												<div class="carouselproduct mt-4 text-center">
													<div class="mb-2 text-warning fs-12">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fas fa-star-half-alt"></i>
														<i class="far fa-star"></i>
													</div>
													<h6 class=""><a href="product-details-1.html">Ladies Shoes</a></h6>
													<ul class="product_price list-unstyled">
														<li class="old_price">$782</li>
														<li class="new_price">$498</li>
													</ul>
													<a href="#" class="btn ripple btn-secondary"><i class="fe fe-shopping-cart"></i> Buy Now</a>
												</div>
											</div>
											<div class="carousel-item bg-light">
												<div class="text-center">
													<img class="pro_img productborder wd-200 text-center" alt="Product" src="assets/img/pngs/3.png">
												</div>
												<div class="carouselproduct mt-4 text-center">
													<div class="mb-2 text-warning fs-12">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fas fa-star-half-alt"></i>
														<i class="far fa-star"></i>
														<i class="far fa-star"></i>
													</div>
													<h6 class=""><a href="product-details-1.html">Laptop</a></h6>
													<ul class="product_price list-unstyled">
														<li class="old_price">$28,000</li>
														<li class="new_price">$24,000</li>
													</ul>
													<button class="btn ripple btn-success"><i class="fe fe-shopping-cart"> </i> Buy Now</button>
												</div>
											</div>
											<div class="carousel-item bg-light">
												<div class="text-center">
													<img class="pro_img productborder wd-200 text-center" alt="Product" src="assets/img/pngs/4.png">
												</div>
												<div class="carouselproduct mt-4 text-center">
													<div class="mb-2 text-warning fs-12">
														<i class="fa fa-star"></i>
														<i class="fas fa-star-half-alt"></i>
														<i class="far fa-star"></i>
														<i class="far fa-star"></i>
														<i class="far fa-star"></i>
													</div>
													<h6 class=""><a href="product-details-1.html">Flower Pot</a></h6>
													<ul class="product_price list-unstyled">
														<li class="old_price">$1,986</li>
														<li class="new_price">$1,789</li>
													</ul>
													<a href="#" class="btn ripple btn-info"><i class="fe fe-shopping-cart"></i> Buy Now</a>
												</div>
											</div>
											<div class="carousel-item bg-light">
												<div class="text-center">
													<img class="pro_img productborder wd-200 text-center" alt="Product" src="assets/img/pngs/5.png">
												</div>
												<div class="carouselproduct mt-4 text-center">
													<div class="mb-2 text-warning fs-12">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fas fa-star-half-alt"></i>
														<i class="far fa-star"></i>
													</div>
													<h6 class=""><a href="product-details-1.html">Chair</a></h6>
													<ul class="product_price list-unstyled">
														<li class="old_price">$5,957</li>
														<li class="new_price">$2,780</li>
													</ul>
													<a href="#" class="btn ripple btn-danger"><i class="fe fe-shopping-cart"> </i> Buy Now</a>
												</div>
											</div>
											<div class="carousel-item bg-light">
												<div class="text-center">
													<img class="pro_img productborder wd-200" alt="Product" src="assets/img/pngs/6.png">
												</div>
												<div class="carouselproduct mt-4 text-center">
													<div class="mb-2 text-warning fs-12">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="far fa-star"></i>
													</div>
													<h6 class=""><a href="product-details-1.html">Digital Watch</a></h6>
													<ul class="product_price list-unstyled">
														<li class="old_price">$3,999</li>
														<li class="new_price">$2,700</li>
													</ul>
													<a href="#" class="btn ripple btn-warning"><i class="fe fe-shopping-cart"> </i> Buy Now</a>
												</div>
											</div>
											<div class="carousel-item bg-light">
												<div class="text-center">
													<img class="pro_img productborder wd-200" alt="Product" src="assets/img/pngs/7.png">
												</div>
												<div class="carouselproduct mt-4 text-center">
													<div class="mb-2 text-warning fs-12">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fas fa-star-half-alt"></i>
														<i class="far fa-star"></i>
													</div>
													<h6 class=""><a href="product-details-1.html">Desktop</a></h6>
													<ul class="product_price list-unstyled">
														<li class="old_price">$45,897</li>
														<li class="new_price">$35,897</li>
													</ul>
													<a href="#" class="btn ripple btn-primary"><i class="fe fe-shopping-cart"> </i> Buy Now</a>
												</div>
											</div>
											<div class="carousel-item bg-light">
												<div class="text-center">
													<img class="pro_img productborder wd-200 text-center" alt="Product" src="assets/img/pngs/8.png">
												</div>
												<div class="carouselproduct mt-4 text-center">
													<div class="mb-2 text-warning fs-12">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fas fa-star-half-alt"></i>
													</div>
													<h6 class=""><a href="product-details-1.html">Fand Bag</a></h6>
													<ul class="product_price list-unstyled">
														<li class="old_price">$760</li>
														<li class="new_price">$650</li>
													</ul>
													<a href="#" class="btn ripple btn-secondary"><i class="fe fe-shopping-cart"> </i> Buy Now</a>
												</div>
											</div>
										</div>
										<a class="carousel-control-prev product-carousel-control" href="#carouselExampleControls" role="button" data-slide="prev">
											<span class="carousel-control-prev-icon" aria-hidden="true"></span>
											<span class="sr-only">Previous</span>
										</a>
										<a class="carousel-control-next product-carousel-control" href="#carouselExampleControls" role="button" data-slide="next">
											<span class="carousel-control-next-icon" aria-hidden="true"></span>
											<span class="sr-only">Next</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Row -->

				</div>
			</div>
			<!-- End Main Content-->
            		<!-- Sidebar -->
			<div class="sidebar sidebar-right sidebar-animate">
				<div class="sidebar-icon">
					<a href="#" class="text-right float-right text-dark fs-20" data-toggle="sidebar-right" data-target=".sidebar-right"><i class="fe fe-x"></i></a>
				</div>
				<div class="sidebar-body">
					<h5>Todo</h5>
					<div class="d-flex p-2">
						<label class="ckbox"><input checked="" type="checkbox"><span>Hangout With friends</span></label>
						<span class="ml-auto">
							<i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
							<i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
						</span>
					</div>
					<div class="d-flex p-2 border-top">
						<label class="ckbox"><input type="checkbox"><span>Prepare for presentation</span></label>
						<span class="ml-auto">
							<i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
							<i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
						</span>
					</div>
					<div class="d-flex p-2 border-top">
						<label class="ckbox"><input type="checkbox"><span>Prepare for presentation</span></label>
						<span class="ml-auto">
							<i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
							<i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
						</span>
					</div>
					<div class="d-flex p-2 border-top">
						<label class="ckbox"><input checked="" type="checkbox"><span>System Updated</span></label>
						<span class="ml-auto">
							<i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
							<i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
						</span>
					</div>
					<div class="d-flex p-2 border-top">
						<label class="ckbox"><input type="checkbox"><span>Do something more</span></label>
						<span class="ml-auto">
							<i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
							<i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
						</span>
					</div>
					<div class="d-flex p-2 border-top">
						<label class="ckbox"><input type="checkbox"><span>System Updated</span></label>
						<span class="ml-auto">
							<i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
							<i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
						</span>
					</div>
					<div class="d-flex p-2 border-top">
						<label class="ckbox"><input type="checkbox"><span>Find an Idea</span></label>
						<span class="ml-auto">
							<i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
							<i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
						</span>
					</div>
					<div class="d-flex p-2 border-top mb-4 border-bottom">
						<label class="ckbox"><input type="checkbox"><span>Project review</span></label>
						<span class="ml-auto">
							<i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
							<i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
						</span>
					</div>
					<h5>Overview</h5>
					<div class="p-2">
						<div class="main-traffic-detail-item">
							<div>
								<span>Founder &amp; CEO</span> <span>24</span>
							</div>
							<div class="progress">
								<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" class="progress-bar progress-bar-xs wd-20p" role="progressbar"></div>
							</div><!-- progress -->
						</div>
						<div class="main-traffic-detail-item">
							<div>
								<span>UX Designer</span> <span>1</span>
							</div>
							<div class="progress">
								<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="15" class="progress-bar progress-bar-xs bg-secondary wd-15p" role="progressbar"></div>
							</div><!-- progress -->
						</div>
						<div class="main-traffic-detail-item">
							<div>
								<span>Recruitment</span> <span>87</span>
							</div>
							<div class="progress">
								<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="45" class="progress-bar progress-bar-xs bg-success wd-45p" role="progressbar"></div>
							</div><!-- progress -->
						</div>
						<div class="main-traffic-detail-item">
							<div>
								<span>Software Engineer</span> <span>32</span>
							</div>
							<div class="progress">
								<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar progress-bar-xs bg-info wd-25p" role="progressbar"></div>
							</div><!-- progress -->
						</div>
						<div class="main-traffic-detail-item">
							<div>
								<span>Project Manager</span> <span>32</span>
							</div>
							<div class="progress">
								<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar progress-bar-xs bg-danger wd-25p" role="progressbar"></div>
							</div><!-- progress -->
						</div>
					</div>
				</div>
			</div>
			<!-- End Sidebar -->
            		<!-- Main Footer-->
			<div class="main-footer text-center">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<span>Copyright © 2019 <a href="#">Dashlead</a>. Designed by <a href="https://www.spruko.com/">Spruko</a> All rights reserved.</span>
						</div>
					</div>
				</div>
			</div>
			<!--End Footer-->
		</div>
		<!-- End Page -->
		<!-- Back-to-top -->
		<a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>

		<!-- Jquery js-->
		<script src="assets/plugins/jquery/jquery.min.js"></script>

		<!-- Bootstrap js-->
		<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

		<!-- Ionicons js-->
		<script src="assets/plugins/ionicons/ionicons.js"></script>

		<!-- Rating js-->
		<script src="assets/plugins/rating/jquery.rating-stars.js"></script>

		<!-- Check-all-mail js-->
<script src="assets/js/check-all-mail.js"></script>
<!-- Select2 js-->
<script src="assets/plugins/select2/js/select2.min.js"></script>
<script src="assets/js/select2.js"></script>

		<!-- Perfect-scrollbar js-->
		<script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

		<!-- Sidemenu js-->
		<script src="assets/plugins/sidemenu/sidemenu.js"></script>

		<!-- Sidebar js-->
		<script src="assets/plugins/sidebar/sidebar.js"></script>

		<!-- Sticky js-->
		<script src="assets/js/sticky.js"></script>

		<!-- Switcher js-->
		<script src="assets/switcher/js/switcher.js"></script>

		<!-- Custom js-->
		<script src="assets/js/custom.js"></script>


	</body>
</html>
