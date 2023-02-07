﻿@extends('admin.layouts.app')
@section('content')
				<div class="container-fluid">
										<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Pricing Tables</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Pages</a></li>
								<li class="breadcrumb-item active" aria-current="page">Pricing Table</li>
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
						<div class="col-lg-3 col-sm-6">
							<div class="card card-pricing custom-card">
								<div class="bg-transparent border-0">
									<div class="pricing-title">Personal</div>
									<h1 class="h1 font-weight-normal text-center mb-0" data-pricing-value="30">$<span class="price">49</span><span class="h6 text-muted ml-2">/MO</span></h1>
								</div>
								<div class="card-body pt-0 text-center">
									<ul class="list-unstyled mb-4">
										<li>10 Free Domain Name</li>
										<li>15 One-Click Apps</li>
										<li>10 Databases</li>
										<li>Money BackGuarntee</li>
										<li>24/7 support</li>
									</ul>
									<a href="#" class="btn ripple btn-light mb-2">Order Now</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="card card-pricing2 custom-card">
								<div class="bg-transparent border-0">
									<div class="pricing-title text-primary">Premium</div>
									<h1 class="h1 font-weight-normal text-center mb-0" data-pricing-value="30">$<span class="price">59</span><span class="h6 text-muted ml-2">/MO</span></h1>
								</div>
								<div class="card-body pt-0 text-center">
									<ul class="list-unstyled mb-4">
										<li>12 Free Domain Name</li>
										<li>20 One-Click Apps</li>
										<li>15 Databases</li>
										<li>Money BackGuarntee</li>
										<li>24/7 support</li>
									</ul>
									<a href="#" class="btn ripple btn-primary mb-2">Order Now</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="card card-pricing3 custom-card">
								<div class="bg-transparent border-0">
									<div class="pricing-title">Corporate</div>
									<h1 class="h1 font-weight-normal  mb-0" data-pricing-value="30">$<span class="price">69</span><span class="h6 text-muted ml-2">/MO</span></h1>
								</div>
								<div class="card-body pt-0 text-center">
									<ul class="list-unstyled mb-4">
										<li>15 Free Domain Name</li>
										<li>25 One-Click Apps</li>
										<li>20 Databases</li>
										<li>Money BackGuarntee</li>
										<li>24/7 support</li>
									</ul>
									<a href="#" class="btn ripple btn-light mb-2">Order Now</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="card card-pricing4 custom-card">
								<div class="bg-transparent border-0">
									<div class="pricing-title">Business</div>
									<h1 class="h1 font-weight-normal mb-0" data-pricing-value="30">$<span class="price">79</span><span class="h6 text-muted ml-2">/MO</span></h1>
								</div>
								<div class="card-body pt-0 text-center">
									<ul class="list-unstyled mb-4">
										<li>20 Free Domain Name</li>
										<li>30 One-Click Apps</li>
										<li>15 Databases</li>
										<li>Money BackGuarntee</li>
										<li>24/7 support</li>
									</ul>
									<a href="#" class="btn ripple btn-light mb-2">Order Now</a>
								</div>
							</div>
						</div>
					</div>
					<!-- End Row -->

					<!-- Row -->
					<div class="row">
						<div class="col-sm-12 col-md-4">
							<div class="card custom-card card-pricing">
								<div class="bg-transparent border-0">
									<div class="price-img text-primary price-1 text-center">
										<i class="fas fa-car"></i>
									</div>
									<div class="pricing-title">Basic</div>
									<h1 class="h1 font-weight-normal mb-0" data-pricing-value="30">$<span class="price">22</span></h1>
								</div>
								<div class="card-body pt-0 text-center">
									<ul class="list-unstyled mb-4">
										<li>10GB Space</li>
										<li>3 Domain Names</li>
										<li>20 Email Address</li>
										<li>No Live Support</li>
									</ul>
									<a href="#" class="btn ripple btn-outline-primary mb-3">Purchase Now</a>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-4">
							<div class="card custom-card card-pricing">
								<div class="bg-transparent border-0">
									<div class="price-img text-secondary price-1 text-center">
										<i class="fas fa-plane"></i>
									</div>
									<div class="pricing-title">Standard</div>
									<h1 class="h1 font-weight-normal mb-0" data-pricing-value="30">$<span class="price">55</span></h1>
								</div>
								<div class="card-body pt-0 text-center">
									<ul class="list-unstyled mb-4">
										<li>10GB Space</li>
										<li>3 Domain Names</li>
										<li>20 Email Address</li>
										<li>No Live Support</li>
									</ul>
									<a href="#" class="btn ripple btn-outline-secondary mb-3">Purchase Now</a>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-4">
							<div class="card custom-card card-pricing">
								<div class="bg-transparent border-0">
									<div class="price-img text-info price-1 text-center">
										<i class="fas fa-rocket"></i>
									</div>
									<div class="pricing-title">Standard</div>
									<h1 class="h1 font-weight-normal mb-0" data-pricing-value="30">$<span class="price">99</span></h1>
								</div>
								<div class="card-body pt-0 text-center">
									<ul class="list-unstyled mb-4">
										<li>Unlimited Space</li>
										<li>50 Domain Names</li>
										<li>Unlimited Email Address</li>
										<li>Live Support</li>
									</ul>
									<a href="#" class="btn ripple btn-outline-info mb-3">Purchase Now</a>
								</div>
							</div>
						</div>
					</div>
					<!-- End Row -->

					<!-- Row -->
					<div class="row">
						<div class="col-xl-12 col-lg-12">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Tabs Pricing Tables</h6>
										<p class="text-muted">Below is the Using tabs year & month pricing Tables example</p>
									</div>
									<div class="pricing-tabs">
										<div class=" text-center">
											<div class="pri-tabs-heading">
												<ul class="nav nav-price">
													<li><a class="active show" data-toggle="tab" href="#year">Year</a></li>
													<li><a class="" data-toggle="tab" href="#month">Month</a></li>
												</ul>
											</div>
											<div class="tab-content">
												<div class="tab-pane  active show" id="year">
													<div class="row">
														<div class="col-sm-6 col-lg-3">
															<div class="card overflow-hidden">
																<div class="text-center card-pricing pricing1">
																	<div class="p-2 text-white bg-primary fs-20">Free</div>
																	<div class="p-3 font-weight-normal mb-0"><span class="price">$0</span></div>
																	<div class="card-body text-center pt-0">
																		<ul class="list-unstyled mb-0">
																			<li><i class="fe fe-check mr-2 text-success"></i><strong>2 </strong> FreeDomain Name</li>
																			<li><i class="fe fe-x mr-2 text-danger"></i><strong>0</strong> One-Click Apps</li>
																			<li><i class="fe fe-x mr-2 text-danger"></i><strong>0</strong>  Databases</li>
																			<li><i class="fe fe-check mr-2 text-success"></i><strong>Money</strong> BackGuarntee</li>
																			<li><i class="fe fe-check mr-2 text-success"></i><strong>24/7</strong> Support</li>
																		</ul>
																	</div>
																	<div class="card-footer text-center">
																		<a href="#" class="btn ripple btn-primary btn-block">Buy Now</a>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-sm-6 col-lg-3 mg-t-10 mg-lg-t-0">
															<div class="card overflow-hidden">
																<div class="text-center card-pricing pricing1">
																	<div class="p-2 text-white bg-secondary fs-20">Personal</div>
																	<div class="p-3 font-weight-normal mb-0"><span class="price">$99</span></div>
																	<div class="card-body text-center pt-0">
																		<ul class="list-unstyled mb-0">
																			<li><i class="fe fe-x mr-2 text-danger"></i><strong>2 </strong> FreeDomain Name</li>
																			<li><i class="fe fe-check mr-2 text-success"></i><strong>2</strong> One-Click Apps</li>
																			<li><i class="fe fe-check mr-2 text-success"></i><strong>1</strong>  Databases</li>
																			<li><i class="fe fe-x mr-2 text-danger"></i><strong>Money</strong> BackGuarntee</li>
																			<li><i class="fe fe-check mr-2 text-success"></i><strong>24/7</strong> Support</li>
																		</ul>
																	</div>
																	<div class="card-footer text-center">
																		<a href="#" class="btn ripple btn-secondary btn-block">Buy Now</a>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-sm-6 col-lg-3 mg-t-10 mg-lg-t-0">
															<div class="card overflow-hidden">
																<div class="text-center card-pricing pricing1">
																	<div class="p-2 text-white bg-info fs-20">Premium</div>
																	<div class="p-3 font-weight-normal mb-0">$<span class="price">$199</span></div>
																	<div class="card-body text-center pt-0">
																		<ul class="list-unstyled mb-0">
																			<li><i class="fe fe-check mr-2 text-success"></i><strong>3 </strong> FreeDomain Name</li>
																			<li><i class="fe fe-x mr-2 text-danger"></i><strong>5</strong> One-Click Apps</li>
																			<li><i class="fe fe-check mr-2 text-success"></i><strong>3</strong>  Databases</li>
																			<li><i class="fe fe-x mr-2 text-danger"></i><strong>Money</strong> BackGuarntee</li>
																			<li><i class="fe fe-check mr-2 text-success"></i><strong>24/7</strong> Support</li>
																		</ul>
																	</div>
																	<div class="card-footer text-center">
																		<a href="#" class="btn ripple btn-info btn-block">Buy Now</a>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-sm-6 col-lg-3 mg-t-10 mg-lg-t-0">
															<div class="card overflow-hidden">
																<div class="text-center card-pricing pricing1">
																	<div class="p-2 text-white bg-success fs-20">Enterprise</div>
																	<div class="p-3 font-weight-normal mb-0"><span class="price">$299</span></div>
																	<div class="card-body text-center pt-0">
																		<ul class="list-unstyled mb-0">
																			<li><i class="fe fe-check mr-2 text-success"></i><strong>10 </strong> FreeDomain Name</li>
																			<li><i class="fe fe-check mr-2 text-success"></i><strong>10</strong> One-Click Apps</li>
																			<li><i class="fe fe-check mr-2 text-success"></i><strong>8</strong>  Databases</li>
																			<li><i class="fe fe-x mr-2 text-danger"></i><strong>Money</strong> BackGuarntee</li>
																			<li><i class="fe fe-check mr-2 text-success"></i><strong>24/7</strong> Support</li>
																		</ul>
																	</div>
																	<div class="card-footer text-center">
																		<a href="#" class="btn ripple btn-success btn-block">Buy Now</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="tab-pane" id="month">
													<div class="row">
														<div class="col-sm-6 col-lg-3">
															<div class="card overflow-hidden">
																<div class="text-center card-pricing pricing1">
																	<div class="p-2 text-white bg-primary fs-20">Free</div>
																	<div class="p-3 font-weight-normal mb-0"><span class="price">$0</span></div>
																	<div class="card-body text-center pt-0">
																		<ul class="list-unstyled mb-0">
																			<li><i class="fe fe-check mr-2 text-success"></i><strong>2 </strong> FreeDomain Name</li>
																			<li><i class="fe fe-x mr-2 text-danger"></i><strong>0</strong> One-Click Apps</li>
																			<li><i class="fe fe-x mr-2 text-danger"></i><strong>0</strong>  Databases</li>
																			<li><i class="fe fe-check mr-2 text-success"></i><strong>Money</strong> BackGuarntee</li>
																			<li><i class="fe fe-check mr-2 text-success"></i><strong>24/7</strong> Support</li>
																		</ul>
																	</div>
																	<div class="card-footer text-center">
																		<a href="#" class="btn ripple btn-primary btn-block">Buy Now</a>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-sm-6 col-lg-3 mg-t-10 mg-lg-t-0">
															<div class="card overflow-hidden">
																<div class="text-center card-pricing pricing1">
																	<div class="p-2 text-white bg-secondary fs-20">Personal</div>
																	<div class="p-3 font-weight-normal mb-0"><span class="price">$15</span></div>
																	<div class="card-body text-center pt-0">
																		<ul class="list-unstyled mb-0">
																			<li><i class="fe fe-x mr-2 text-danger"></i><strong>2 </strong> FreeDomain Name</li>
																			<li><i class="fe fe-check mr-2 text-success"></i><strong>2</strong> One-Click Apps</li>
																			<li><i class="fe fe-check mr-2 text-success"></i><strong>1</strong>  Databases</li>
																			<li><i class="fe fe-x mr-2 text-danger"></i><strong>Money</strong> BackGuarntee</li>
																			<li><i class="fe fe-check mr-2 text-success"></i><strong>24/7</strong> Support</li>
																		</ul>
																	</div>
																	<div class="card-footer text-center">
																		<a href="#" class="btn ripple btn-secondary btn-block">Buy Now</a>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-sm-6 col-lg-3 mg-t-10 mg-lg-t-0">
															<div class="card overflow-hidden">
																<div class="text-center card-pricing pricing1">
																	<div class="p-2 text-white bg-info fs-20">Personal</div>
																	<div class="p-3 font-weight-normal mb-0"><span class="price">$25</span></div>
																	<div class="card-body text-center pt-0">
																		<ul class="list-unstyled mb-0">
																			<li><i class="fe fe-check mr-2 text-success"></i><strong>3 </strong> FreeDomain Name</li>
																			<li><i class="fe fe-x mr-2 text-danger"></i><strong>5</strong> One-Click Apps</li>
																			<li><i class="fe fe-check mr-2 text-success"></i><strong>3</strong>  Databases</li>
																			<li><i class="fe fe-x mr-2 text-danger"></i><strong>Money</strong> BackGuarntee</li>
																			<li><i class="fe fe-check mr-2 text-success"></i><strong>24/7</strong> Support</li>
																		</ul>
																	</div>
																	<div class="card-footer text-center">
																		<a href="#" class="btn ripple btn-info btn-block">Buy Now</a>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-sm-6 col-lg-3 mg-t-10 mg-lg-t-0">
															<div class="card overflow-hidden">
																<div class="text-center card-pricing pricing1">
																	<div class="p-2 text-white bg-success fs-20">Enterprise</div>
																	<div class="p-3 font-weight-normal mb-0"><span class="price">$35</span></div>
																	<div class="card-body text-center pt-0">
																		<ul class="list-unstyled mb-0">
																			<li><i class="fe fe-check mr-2 text-success"></i><strong>10 </strong> FreeDomain Name</li>
																			<li><i class="fe fe-check mr-2 text-success"></i><strong>10</strong> One-Click Apps</li>
																			<li><i class="fe fe-check mr-2 text-success"></i><strong>8</strong>  Databases</li>
																			<li><i class="fe fe-x mr-2 text-danger"></i><strong>Money</strong> BackGuarntee</li>
																			<li><i class="fe fe-check mr-2 text-success"></i><strong>24/7</strong> Support</li>
																		</ul>
																	</div>
																	<div class="card-footer text-center">
																		<a href="#" class="btn ripple btn-success btn-block">Buy Now</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
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
