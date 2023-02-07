@extends('admin.layouts.app')
@section('content')
				<div class="container-fluid">
										<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Rating</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Advanced UI</a></li>
								<li class="breadcrumb-item active" aria-current="page">Rating</li>
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
						<div class="col-sm-6 col-md-6">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Static Star Rating</h6>
									</div>
									<div class="static-rate text-center fs-30">
										<i class="fa fa-star text-warning" aria-hidden="true"></i>
										<i class="fa fa-star text-warning" aria-hidden="true"></i>
										<i class="fa fa-star text-warning" aria-hidden="true"></i>
										<i class="fa fa-star text-warning" aria-hidden="true"></i>
										<i class="fa fa-star text-warning" aria-hidden="true"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Static Heart Rating</h6>
									</div>
									<div class="static-rate text-center fs-30">
										<i class="fa fa-heart text-danger" aria-hidden="true"></i>
										<i class="fa fa-heart text-danger" aria-hidden="true"></i>
										<i class="fa fa-heart text-danger" aria-hidden="true"></i>
										<i class="fa fa-heart text-danger" aria-hidden="true"></i>
										<i class="fa fa-heart text-danger" aria-hidden="true"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Row -->

					<!-- Row -->
					<div class="row">
						<div class="col-sm-6 col-md-6">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Star Rating</h6>
									</div>
									<div class="rating-stars block" id="rating">
										<input type="number" readonly="readonly" class="rating-value" name="rating-stars-value" id="rating-stars-value" value="1">
										<div class="rating-stars-container">
											<div class="rating-star">
												<i class="fa fa-star"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-star"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-star"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-star"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-star"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Heart Rating</h6>
									</div>
									<div class="rating-stars block" id="another-rating">
										<input type="number" readonly="readonly" class="rating-value" name="another-rating-stars-value" id="another-rating-stars-value" value="2">
										<div class="rating-stars-container">
											<div class="rating-star">
												<i class="fa fa-heart"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-heart"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-heart"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-heart"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-heart"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Row -->

					<!-- Row -->
					<div class="row">
						<div class="col-sm-6 col-md-6">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Multi Star Rating</h6>
									</div>
									<div class="rating-stars block" id="more-rating">
										<input type="number" readonly="readonly" class="rating-value" name="more-rating-stars-value" id="more-rating-stars-value" value="2">
										<div class="rating-stars-container">
											<div class="rating-star">
												<i class="fa fa-star"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-star"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-star"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-star"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-star"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-star"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-star"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-star"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-star"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-star"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Multi Heart Rating</h6>
									</div>
									<div class="rating-stars block" id="another-rating1">
										<input type="number" readonly="readonly" class="rating-value" name="another-rating-stars-value" id="another-rating-stars-value2" value="4">
										<div class="rating-stars-container">
											<div class="rating-star">
												<i class="fa fa-heart"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-heart"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-heart"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-heart"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-heart"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-heart"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-heart"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-heart"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-heart"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-heart"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Row -->

					<!-- Row -->
					<div class="row">
						<div class="col-sm-6 col-md-6">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Bar 1/10 Rating</h6>
									</div>
									<div class="box  box-example-1to10">
										<div class="box-body">
											<select id="example-1to10" name="rating" autocomplete="off">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7" selected="selected">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Opinion rating</h6>
									</div>
									<div class="box box-example-movie">
										<div class="box-body">
											<select id="example-movie" name="rating" autocomplete="off">
												<option value="Bad">Bad</option>
												<option value="Mediocre">Mediocre</option>
												<option value="Good" selected="selected">Good</option>
												<option value="Awesome">Awesome</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Row -->

					<!-- Row -->
					<div class="row">
						<div class="col-sm-6 col-md-6">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Square Rating</h6>
									</div>
									<div class="box  box-example-1to10">
										<div class="box box-example-square">
											<div class="box-body">
												<select id="example-square" name="rating" autocomplete="off">
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Grade Rating</h6>
									</div>
									<div class="box  box-example-pill">
										<div class="box-body">
											<select id="example-pill" name="rating" autocomplete="off">
												<option value="A">A</option>
												<option value="B">B</option>
												<option value="C">C</option>
												<option value="D">D</option>
												<option value="E">E</option>
												<option value="F">F</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Row -->

					<!-- Row -->
					<div class="row">
						<div class="col-sm-12 col-md-12">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Horizontal Bar Rating</h6>
									</div>
									<div class="box box-large box-example-horizontal">
										<div class="box-body">
											<select id="example-horizontal" name="rating" autocomplete="off">
												<option value="10">10</option>
												<option value="9">9</option>
												<option value="8">8</option>
												<option value="7">7</option>
												<option value="6">6</option>
												<option value="5">5</option>
												<option value="4">4</option>
												<option value="3">3</option>
												<option value="2">2</option>
												<option value="1" selected="selected">1</option>
											</select>
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
<!-- Rating js-->
<script src="assets/plugins/rating/jquery.rating-stars.js"></script>
<script src="assets/plugins/rating/jquery.barrating.js"></script>
<script src="assets/plugins/rating/ratings.js"></script>

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
