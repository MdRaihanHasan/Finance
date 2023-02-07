﻿@extends('admin.layouts.app')
@section('content')
				<div class="container-fluid">
										<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Products</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Ecommerce</a></li>
								<li class="breadcrumb-item active" aria-current="page">Products</li>
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
						<div class="col-md-8 col-lg-9">
							<div class="row">
								<div class="col-sm-6 col-lg-4">
									<div class="card item-card custom-card">
										<div class="card-body h-100">
											<div class="product h-100">
												<div class="text-center product-img">
													<img src="assets/img/pngs/7.png" alt="img" class="img-fluid">
												</div>
												<div class="text-center mt-4">
													<div class="text-center text-warning fs-12">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fas fa-star-half-alt"></i>
														<i class="far fa-star"></i>
														<i class="far fa-star"></i>
													</div>
													<h6 class="mb-0 mt-2">Desktop Computer</h6>
													<div class="price mt-2 h5 mb-0">
														<s class="h5 text-muted mr-4">$45,897</s>$35,897
													</div>
												</div>
												<div class="product-info">
													<a href="products-details.html" class="btn ripple  btn-primary btn-sm mt-1 mb-1 text-sm text-white" data-toggle="tooltip" data-placement="bottom" title="View">
														<i class="fe fe-eye"></i>
													</a>
													<a href="#" class="btn ripple  btn-info btn-sm mt-1 mb-1 text-sm  text-white" data-toggle="tooltip" data-placement="bottom" title="Add to Wishlist">
														<i class="fe fe-heart"></i>
													</a>
													<a href="#" class="btn ripple  btn-sm btn-danger mt-1 text-sm  mb-1 text-white" data-toggle="tooltip" data-placement="bottom" title="Share">
														<i class="fe fe-share-2"></i>
													</a>
													<a href="#" class="btn ripple  btn-sm btn-warning mt-1 text-sm  mb-1 text-white" data-toggle="tooltip" data-placement="bottom" title="Add to Cart">
														<i class="fe fe-shopping-cart"></i>
													</a>
													<a href="#" class="btn ripple  btn-sm btn-secondary mt-1 text-sm  mb-1 text-white" data-toggle="tooltip" data-placement="bottom" title="Compare">
														<i class="fas fa-exchange-alt"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-lg-4">
									<div class="card item-card custom-card">
										<div class="card-body h-100">
											<div class="product h-100">
												<div class="text-center product-img">
													<img src="assets/img/pngs/1.png" alt="img" class="img-fluid">
												</div>
												<div class="text-center mt-4">
													<div class="text-center text-warning fs-12">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fas fa-star-half-alt"></i>
														<i class="far fa-star"></i>
														<i class="far fa-star"></i>
													</div>
													<h6 class="mb-0 mt-2">Laptop Bag</h6>
													<div class="price mt-2 h5 mb-0">
														<s class="h5 text-muted mr-4">$927</s>$597
													</div>
												</div>
												<div class="product-info">
													<a href="products-details.html" class="btn ripple  btn-primary btn-sm mt-1 mb-1 text-sm text-white" data-toggle="tooltip" data-placement="bottom" title="View">
														<i class="fe fe-eye"></i>
													</a>
													<a href="#" class="btn ripple  btn-info btn-sm mt-1 mb-1 text-sm  text-white" data-toggle="tooltip" data-placement="bottom" title="Add to Wishlist">
														<i class="fe fe-heart"></i>
													</a>
													<a href="#" class="btn ripple  btn-sm btn-danger mt-1 text-sm  mb-1 text-white" data-toggle="tooltip" data-placement="bottom" title="Share">
														<i class="fe fe-share-2"></i>
													</a>
													<a href="#" class="btn ripple  btn-sm btn-warning mt-1 text-sm  mb-1 text-white" data-toggle="tooltip" data-placement="bottom" title="Add to Cart">
														<i class="fe fe-shopping-cart"></i>
													</a>
													<a href="#" class="btn ripple  btn-sm btn-secondary mt-1 text-sm  mb-1 text-white" data-toggle="tooltip" data-placement="bottom" title="Compare">
														<i class="fas fa-exchange-alt"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-lg-4">
									<div class="card item-card custom-card">
										<div class="card-body h-100">
											<div class="product h-100">
												<div class="text-center product-img">
													<img src="assets/img/pngs/9.png" alt="img" class="img-fluid">
												</div>
												<div class="text-center mt-4">
													<div class="text-center text-warning fs-12">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fas fa-star-half-alt"></i>
													</div>
													<h6 class="mb-0 mt-2">Mobile</h6>
													<div class="price mt-2 h5 mb-0">
														<s class="h5 text-muted mr-4">$12,800</s>$10,700
													</div>
												</div>
												<div class="product-info">
													<a href="products-details.html" class="btn ripple  btn-primary btn-sm mt-1 mb-1 text-sm text-white" data-toggle="tooltip" data-placement="bottom" title="View">
														<i class="fe fe-eye"></i>
													</a>
													<a href="#" class="btn ripple  btn-info btn-sm mt-1 mb-1 text-sm  text-white" data-toggle="tooltip" data-placement="bottom" title="Add to Wishlist">
														<i class="fe fe-heart"></i>
													</a>
													<a href="#" class="btn ripple  btn-sm btn-danger mt-1 text-sm  mb-1 text-white" data-toggle="tooltip" data-placement="bottom" title="Share">
														<i class="fe fe-share-2"></i>
													</a>
													<a href="#" class="btn ripple  btn-sm btn-warning mt-1 text-sm  mb-1 text-white" data-toggle="tooltip" data-placement="bottom" title="Add to Cart">
														<i class="fe fe-shopping-cart"></i>
													</a>
													<a href="#" class="btn ripple  btn-sm btn-secondary mt-1 text-sm  mb-1 text-white" data-toggle="tooltip" data-placement="bottom" title="Compare">
														<i class="fas fa-exchange-alt"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-lg-4">
									<div class="card item-card custom-card">
										<div class="product h-100">
											<div class="card-body h-100">
												<div class="text-center product-img">
													<img src="assets/img/pngs/2.png" alt="img" class="img-fluid">
												</div>
												<div class="text-center mt-4">
													<div class="text-center text-warning fs-12">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fas fa-star-half-alt"></i>
														<i class="far fa-star"></i>
													</div>
													<h6 class="mb-0 mt-2">Ladies Shoes</h6>
													<div class="price mt-2 h5 mb-0">
														<s class="h5 text-muted mr-4">$782</s>$498
													</div>
												</div>
											</div>
											<div class="product-info">
												<a href="products-details.html" class="btn ripple  btn-primary btn-sm mt-1 mb-1 text-sm text-white" data-toggle="tooltip" data-placement="bottom" title="View">
													<i class="fe fe-eye"></i>
												</a>
												<a href="#" class="btn ripple  btn-info btn-sm mt-1 mb-1 text-sm  text-white" data-toggle="tooltip" data-placement="bottom" title="Add to Wishlist">
													<i class="fe fe-heart"></i>
												</a>
												<a href="#" class="btn ripple  btn-sm btn-danger mt-1 text-sm  mb-1 text-white" data-toggle="tooltip" data-placement="bottom" title="Share">
													<i class="fe fe-share-2"></i>
												</a>
												<a href="#" class="btn ripple  btn-sm btn-warning mt-1 text-sm  mb-1 text-white" data-toggle="tooltip" data-placement="bottom" title="Add to Cart">
													<i class="fe fe-shopping-cart"></i>
												</a>
												<a href="#" class="btn ripple  btn-sm btn-secondary mt-1 text-sm  mb-1 text-white" data-toggle="tooltip" data-placement="bottom" title="Compare">
													<i class="fas fa-exchange-alt"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-lg-4">
									<div class="card item-card custom-card">
										<div class="product h-100">
											<div class="card-body h-100">
												<div class="text-center product-img">
													<img src="assets/img/pngs/4.png" alt="img" class="img-fluid">
												</div>
												<div class="text-center mt-4">
													<div class="text-center text-warning fs-12">
														<i class="fa fa-star"></i>
														<i class="fas fa-star-half-alt"></i>
														<i class="far fa-star"></i>
														<i class="far fa-star"></i>
														<i class="far fa-star"></i>
													</div>
													<h6 class="mb-0 mt-2">Flower Pot</h6>
													<div class="price mt-2 h5 mb-0">
														<s class="h5 text-muted mr-4">$1,986</s>$1,789
													</div>
												</div>
											</div>
											<div class="product-info">
												<a href="products-details.html" class="btn ripple  btn-primary btn-sm mt-1 mb-1 text-sm text-white" data-toggle="tooltip" data-placement="bottom" title="View">
													<i class="fe fe-eye"></i>
												</a>
												<a href="#" class="btn ripple  btn-info btn-sm mt-1 mb-1 text-sm  text-white" data-toggle="tooltip" data-placement="bottom" title="Add to Wishlist">
													<i class="fe fe-heart"></i>
												</a>
												<a href="#" class="btn ripple  btn-sm btn-danger mt-1 text-sm  mb-1 text-white" data-toggle="tooltip" data-placement="bottom" title="Share">
													<i class="fe fe-share-2"></i>
												</a>
												<a href="#" class="btn ripple  btn-sm btn-warning mt-1 text-sm  mb-1 text-white" data-toggle="tooltip" data-placement="bottom" title="Add to Cart">
													<i class="fe fe-shopping-cart"></i>
												</a>
												<a href="#" class="btn ripple  btn-sm btn-secondary mt-1 text-sm  mb-1 text-white" data-toggle="tooltip" data-placement="bottom" title="Compare">
													<i class="fas fa-exchange-alt"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-lg-4">
									<div class="card item-card custom-card">
										<div class="product h-100">
											<div class="card-body h-100">
												<div class="text-center product-img">
													<img src="assets/img/pngs/8.png" alt="img" class="img-fluid">
												</div>
												<div class="text-center mt-4">
													<div class="text-center text-warning fs-12">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fas fa-star-half-alt"></i>
													</div>
													<h6 class="mb-0 mt-2">Hand Bag</h6>
													<div class="price mt-2 h5 mb-0">
														<s class="h5 text-muted mr-4">$760</s>$650
													</div>
												</div>
											</div>
										</div>
										<div class="product-info">
											<a href="products-details.html" class="btn ripple  btn-primary btn-sm mt-1 mb-1 text-sm text-white" data-toggle="tooltip" data-placement="bottom" title="View">
												<i class="fe fe-eye"></i>
											</a>
											<a href="#" class="btn ripple  btn-info btn-sm mt-1 mb-1 text-sm  text-white" data-toggle="tooltip" data-placement="bottom" title="Add to Wishlist">
												<i class="fe fe-heart"></i>
											</a>
											<a href="#" class="btn ripple  btn-sm btn-danger mt-1 text-sm  mb-1 text-white" data-toggle="tooltip" data-placement="bottom" title="Share">
												<i class="fe fe-share-2"></i>
											</a>
											<a href="#" class="btn ripple  btn-sm btn-warning mt-1 text-sm  mb-1 text-white" data-toggle="tooltip" data-placement="bottom" title="Add to Cart">
												<i class="fe fe-shopping-cart"></i>
											</a>
											<a href="#" class="btn ripple  btn-sm btn-secondary mt-1 text-sm  mb-1 text-white" data-toggle="tooltip" data-placement="bottom" title="Compare">
												<i class="fas fa-exchange-alt"></i>
											</a>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-lg-4">
									<div class="card item-card custom-card">
										<div class="product h-100">
											<div class="card-body h-100">
												<div class="text-center product-img">
													<img src="assets/img/pngs/3.png" alt="img" class="img-fluid">
												</div>
												<div class="text-center mt-4">
													<div class="text-center text-warning fs-12">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fas fa-star-half-alt"></i>
														<i class="far fa-star"></i>
														<i class="far fa-star"></i>
													</div>
													<h6 class="mb-0 mt-2">Laptop</h6>
													<div class="price mt-2 h5 mb-0">
														<s class="h5 text-muted mr-4">$28,000</s>$24,000
													</div>
												</div>
											</div>
											<div class="product-info">
												<a href="products-details.html" class="btn ripple  btn-primary btn-sm mt-1 mb-1 text-sm text-white" data-toggle="tooltip" data-placement="bottom" title="View">
													<i class="fe fe-eye"></i>
												</a>
												<a href="#" class="btn ripple  btn-info btn-sm mt-1 mb-1 text-sm  text-white" data-toggle="tooltip" data-placement="bottom" title="Add to Wishlist">
													<i class="fe fe-heart"></i>
												</a>
												<a href="#" class="btn ripple  btn-sm btn-danger mt-1 text-sm  mb-1 text-white" data-toggle="tooltip" data-placement="bottom" title="Share">
													<i class="fe fe-share-2"></i>
												</a>
												<a href="#" class="btn ripple  btn-sm btn-warning mt-1 text-sm  mb-1 text-white" data-toggle="tooltip" data-placement="bottom" title="Add to Cart">
													<i class="fe fe-shopping-cart"></i>
												</a>
												<a href="#" class="btn ripple  btn-sm btn-secondary mt-1 text-sm  mb-1 text-white" data-toggle="tooltip" data-placement="bottom" title="Compare">
													<i class="fas fa-exchange-alt"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-lg-4">
									<div class="card item-card custom-card">
										<div class="product h-100">
											<div class="card-body h-100">
												<div class="text-center product-img">
													<img src="assets/img/pngs/5.png" alt="img" class="img-fluid">
												</div>
												<div class="text-center mt-4">
													<div class="text-center text-warning fs-12">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fas fa-star-half-alt"></i>
														<i class="far fa-star"></i>
													</div>
													<h6 class="mb-0 mt-2">Chair</h6>
													<div class="price mt-2 h5 mb-0">
														<s class="h5 text-muted mr-4">$5,957</s>$2,780
													</div>
												</div>
											</div>
											<div class="product-info">
												<a href="products-details.html" class="btn ripple  btn-primary btn-sm mt-1 mb-1 text-sm text-white" data-toggle="tooltip" data-placement="bottom" title="View">
													<i class="fe fe-eye"></i>
												</a>
												<a href="#" class="btn ripple  btn-info btn-sm mt-1 mb-1 text-sm  text-white" data-toggle="tooltip" data-placement="bottom" title="Add to Wishlist">
													<i class="fe fe-heart"></i>
												</a>
												<a href="#" class="btn ripple  btn-sm btn-danger mt-1 text-sm  mb-1 text-white" data-toggle="tooltip" data-placement="bottom" title="Share">
													<i class="fe fe-share-2"></i>
												</a>
												<a href="#" class="btn ripple  btn-sm btn-warning mt-1 text-sm  mb-1 text-white" data-toggle="tooltip" data-placement="bottom" title="Add to Cart">
													<i class="fe fe-shopping-cart"></i>
												</a>
												<a href="#" class="btn ripple  btn-sm btn-secondary mt-1 text-sm  mb-1 text-white" data-toggle="tooltip" data-placement="bottom" title="Compare">
													<i class="fas fa-exchange-alt"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-lg-4">
									<div class="card item-card custom-card">
										<div class="product h-100">
											<div class="card-body h-100">
												<div class="text-center product-img">
													<img src="assets/img/pngs/6.png" alt="img" class="img-fluid">
												</div>
												<div class="text-center mt-4">
													<div class="text-center text-warning fs-12">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="far fa-star"></i>
													</div>
													<h6 class="mb-0 mt-2">Digital Watch</h6>
													<div class="price mt-2 h5 mb-0">
														<s class="h5 text-muted mr-4">$3,999</s>$2,700
													</div>
												</div>
											</div>
											<div class="product-info">
												<a href="products-details.html" class="btn ripple  btn-primary btn-sm mt-1 mb-1 text-sm text-white" data-toggle="tooltip" data-placement="bottom" title="View">
													<i class="fe fe-eye"></i>
												</a>
												<a href="#" class="btn ripple  btn-info btn-sm mt-1 mb-1 text-sm  text-white" data-toggle="tooltip" data-placement="bottom" title="Add to Wishlist">
													<i class="fe fe-heart"></i>
												</a>
												<a href="#" class="btn ripple  btn-sm btn-danger mt-1 text-sm  mb-1 text-white" data-toggle="tooltip" data-placement="bottom" title="Share">
													<i class="fe fe-share-2"></i>
												</a>
												<a href="#" class="btn ripple  btn-sm btn-warning mt-1 text-sm  mb-1 text-white" data-toggle="tooltip" data-placement="bottom" title="Add to Cart">
													<i class="fe fe-shopping-cart"></i>
												</a>
												<a href="#" class="btn ripple  btn-sm btn-secondary mt-1 text-sm  mb-1 text-white" data-toggle="tooltip" data-placement="bottom" title="Compare">
													<i class="fas fa-exchange-alt"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<nav>
								<ul class="pagination justify-content-end">
									<li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
									<li class="page-item active"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">Next</a></li>
								</ul>
							</nav>
						</div>
						<div class="col-md-4 col-lg-3">
							<div class="card custom-card">
								<div class="card-body h-100">
									<div class="row">
										<div class="col-sm-12">
											<div class="input-group">
												<input type="text" class="form-control" placeholder="Search ...">
												<span class="input-group-append">
													<button class="btn ripple btn-primary" type="button">Search</button>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 col-lg-12">
									<div class="card custom-card">
										<div class="card-header custom-card-header">
											<h6 class="card-title mb-0">Categories</h6>
										</div>
										<div class="card-body h-100">
											<div class="form-group">
												<label class="form-label">Mens</label>
												<select name="beast" id="select-beast" class="form-control select2">
													<option label="Select"></option>
													<option value="1">Foot wear</option>
													<option value="2">Top wear</option>
													<option value="3">Bootom wear</option>
													<option value="4">Men's Groming</option>
													<option value="5">Accessories</option>
												</select>
											</div>
											<div class="form-group">
												<label class="form-label">Women</label>
												<select name="beast" id="select-beast1" class="form-control select2">
													<option label="Select"></option>
													<option value="1">Western wear</option>
													<option value="2">Foot wear</option>
													<option value="3">Top wear</option>
													<option value="4">Bootom wear</option>
													<option value="5">Beuty Groming</option>
													<option value="6">Accessories</option>
													<option value="7">jewellery</option>
												</select>
											</div>
											<div class="form-group">
												<label class="form-label">Baby & Kids</label>
												<select name="beast" id="select-beast2" class="form-control select2">
													<option label="Select"></option>
													<option value="1">Boys clothing</option>
													<option value="2">girls Clothing</option>
													<option value="3">Toys</option>
													<option value="4">Baby Care</option>
													<option value="5">Kids footwear</option>
												</select>
											</div>
											<div class="form-group">
												<label class="form-label">Electronics</label>
												<select name="beast" id="select-beast3" class="form-control select2">
													<option label="Select"></option>
													<option value="1">Mobiles</option>
													<option value="2">Laptops</option>
													<option value="3">Gaming & Accessories</option>
													<option value="4">Health care Appliances</option>
												</select>
											</div>
											<div class="form-group">
												<label class="form-label">Sport,Books & More </label>
												<select name="beast" id="select-beast4" class="form-control select2">
													<option label="Select"></option>
													<option value="1">Stationery</option>
													<option value="2">Books</option>
													<option value="3">Gaming</option>
													<option value="4">Music</option>
													<option value="5">Exercise & fitness</option>
												</select>
											</div>
											<div class="form-group">
												<label class="form-label">Price</label>
												<label class="custom-control custom-radio">
													<input type="radio" class="custom-control-input" name="example-radios" value="option1" checked="">
													<span class="custom-control-label">Under $25</span>
												</label>
												<label class="custom-control custom-radio">
													<input type="radio" class="custom-control-input" name="example-radios" value="option2">
													<span class="custom-control-label">$25 to $50</span>
												</label>
												<label class="custom-control custom-radio">
													<input type="radio" class="custom-control-input" name="example-radios" value="option2">
													<span class="custom-control-label">$50 to $100</span>
														</label>
												<label class="custom-control custom-radio">
													<input type="radio" class="custom-control-input" name="example-radios" value="option2">
													<span class="custom-control-label">Other (specify)</span>
												</label>
											</div>
											<a class="btn ripple btn-primary btn-block" href="#">Apply Filter</a>
										</div>
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
