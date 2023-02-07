﻿@extends('admin.layouts.app')
@section('content')
				<div class="container-fluid">
										<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Profile</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Pages</a></li>
								<li class="breadcrumb-item active" aria-current="page">Profile</li>
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
						<div class="col-lg-4 col-md-12">
							<div class="card custom-card">
								<div class="card-body text-center">
									<div class="main-profile-overview widget-user-image text-center">
										<div class="main-img-user"><img alt="avatar" src="assets/img/users/1.jpg"></div>
									</div>
									<div class="item-user pro-user">
										<h4 class="pro-user-username text-dark mt-2 mb-0">Sonia Taylor</h4>
										<p class="pro-user-desc text-muted mb-1">Web Designer</p>
										<p class="user-info-rating">
											<a href="#"><i class="fa fa-star text-warning"> </i></a>
											<a href="#"><i class="fa fa-star text-warning"> </i></a>
											<a href="#"><i class="fa fa-star text-warning"> </i></a>
											<a href="#"><i class="fa fa-star text-warning"> </i></a>
											<a href="#"><i class="far fa-star text-warning"> </i></a>
										</p>
										<div class="contact-info mb-3">
											<a href="#" class="contact-icon border text-primary"><i class="fab fa-facebook-f"></i></a>
											<a href="#" class="contact-icon border text-primary"><i class="fab fa-twitter"></i></a>
											<a href="#" class="contact-icon border text-primary"><i class="fab fa-google"></i></a>
											<a href="#" class="contact-icon border text-primary"><i class="fab fa-dribbble"></i></a>
										</div>
										<a href="#" class="btn ripple btn-primary btn-sm"><i class="far fa-edit mr-1"></i>Edit</a>
										<a href="#" class="btn ripple btn-secondary btn-sm"><i class="fas fa-rss mr-1"></i>Follow</a>
									</div>
								</div>
								<div class="card-footer p-0">
									<div class="row text-center">
										<div class="col-sm-6 border-right">
											<div class="description-block">
												<h5 class="description-header mb-1">689k</h5>
												<span class="text-muted">Followers</span>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="description-block">
												<h5 class="description-header mb-1">3,765</h5>
												<span class="text-muted">Following</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card custom-card">
								<div class="card-header custom-card-header">
									<div>
										<h6 class="card-title mb-0">Skills</h6>
									</div>
								</div>
								<div class="card-body">
									<div class="skill-tags">
										<ul class="list-unstyled mb-0">
											<li><a href="#">HTML5</a></li>
											<li><a href="#">CSS</a></li>
											<li><a href="#">Java Script</a></li>
											<li><a href="#">Photo Shop</a></li>
											<li><a href="#">Php</a></li>
											<li><a href="#">Wordpress</a></li>
											<li><a href="#">Sass</a></li>
											<li><a href="#">Angular</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="card custom-card">
								<div class="card-header custom-card-header">
									<div>
										<h6 class="card-title mb-0">Contact Information</h6>
									</div>
								</div>
								<div class="card-body">
									<div class="main-profile-contact-list main-profile-work-list">
										<div class="media">
											<div class="media-logo bg-light text-dark">
												<i class="fe fe-smartphone"></i>
											</div>
											<div class="media-body">
												<span>Mobile</span>
												<div>
													(+63) 123 4567 890
												</div>
											</div>
										</div>
										<div class="media">
											<div class="media-logo bg-light text-dark">
												<i class="fe fe-mail"></i>
											</div>
											<div class="media-body">
												<span>Slack</span>
												<div>
													@sophia.w
												</div>
											</div>
										</div>
										<div class="media">
											<div class="media-logo bg-light text-dark">
												<i class="fe fe-map-pin"></i>
											</div>
											<div class="media-body">
												<span>Current Address</span>
												<div>
													San Francisco, CA
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-8 col-md-12">
							<div class="card custom-card main-content-body-profile">
								<nav class="nav main-nav-line">
									<a class="nav-link active" data-toggle="tab" href="#tab1over">Overview</a>
									<a class="nav-link" data-toggle="tab" href="#tab2rev">Reviews</a>
								</nav>
								<div class="card-body tab-content h-100">
									<div class="tab-pane active" id="tab1over">
										<div class="main-content-label tx-13 mg-b-20">
											Personal Information
										</div>
										<div class="table-responsive ">
											<table class="table row table-borderless">
												<tbody class="col-lg-12 col-xl-6 p-0">
													<tr>
														<td><strong>Full Name :</strong>Sonia Taylor</td>
													</tr>
													<tr>
														<td><strong>Location :</strong> UK</td>
													</tr>
													<tr>
														<td><strong>Languages :</strong> English, German, Spanish.</td>
													</tr>
												</tbody>
												<tbody class="col-lg-12 col-xl-6 p-0">
													<tr>
														<td><strong>Website :</strong> domain.com</td>
													</tr>
													<tr>
														<td><strong>Email :</strong> klomitoor@doamin.com</td>
													</tr>
													<tr>
														<td><strong>Phone :</strong> +125 254 3562 </td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="main-content-label tx-13 mg-b-20">
											About
										</div>
										<p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy  when an unknown printer took a galley of type and scrambled Lorem Ipsum has been the industry's standard dummy  when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived .</p>
										<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit Lorem Ipsum has been the industry's standard dummy  when an unknown printer took a galley of type and scrambled in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
										<div class="main-content-label tx-13 mg-b-20">
											Work &amp; Education
										</div>
										<div class="main-profile-work-list">
											<div class="media">
												<div class="media-logo bg-success">
													<i class="icon ion-logo-whatsapp"></i>
												</div>
												<div class="media-body">
													<h6>UI/UX Designer at <a href="">Whatsapp</a></h6><span>2016 - present</span>
													<p>Past Work: spruko, Inc.</p>
												</div>
											</div>
											<div class="media">
												<div class="media-logo bg-primary">
													<i class="icon ion-logo-buffer"></i>
												</div>
												<div class="media-body">
													<h6>Studied at <a href="">Buffer University</a></h6><span>2002 - 2006</span>
													<p>Degree: Bachelor of Science in Computer Science</p>
												</div>
											</div>
										</div>
										<div class="main-content-label tx-13 mg-b-20 mt-3">
											Photos
										</div>
										<div class="row">
											<div class="col-6 col-md-3">
												<img alt="Responsive image" class="img-thumbnail" src="assets/img/media/1.jpg">
											</div>
											<div class="col-6 col-md-3">
												<img alt="Responsive image" class="img-thumbnail" src="assets/img/media/2.jpg">
											</div>
											<div class="col-6 col-md-3 mg-t-10 mg-sm-t-0">
												<img alt="Responsive image" class="img-thumbnail" src="assets/img/media/3.jpg">
											</div>
											<div class="col-6 col-md-3 mg-t-10 mg-sm-t-0">
												<img alt="Responsive image" class="img-thumbnail" src="assets/img/media/4.jpg">
											</div>
										</div>
									</div>
									<div class="tab-pane" id="tab2rev">
										<div class="media mb-4">
											<div class="main-img-user mr-3"><img alt="avatar" src="assets/img/users/5.jpg"></div>
											<div class="media-body">
												<div class="media-contact-name mb-1">
													<h6 class="mb-0">Julia Carr<small class="text-muted ml-2"><i class="fe fe-clock"></i> Yesterday, 2:00 am</small> </h6>
												</div>
												<p class="mb-2">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
												<ul class="reviewnavs mb-0">
													<li><a href="#" title="" class="mr-2"><i class="fe fe-thumbs-up"></i> 794</a></li>
													<li><a href="#" title="" class="mr-2"><i class="fe fe-message-square"></i> 253</a></li>
													<li><a href="#" title="" class="mr-2"><i class="fa fa-share"></i> 24</a></li>
												</ul>
											</div>
										</div>
										<div class="media mb-4">
											<div class="main-img-user mr-3"><img alt="avatar" src="assets/img/users/6.jpg"></div>
											<div class="media-body">
												<div class="media-contact-name mb-1">
													<h6 class="mb-0">Victor	White<small class="text-muted ml-2"><i class="fe fe-clock"></i> Yesterday, 2:00 am</small> </h6>
												</div>
												<p class="mb-2">Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it?</p>
												<ul class="reviewnavs">
													<li><a href="#" title="" class="mr-2"><i class="fe fe-thumbs-up"></i> 794</a></li>
													<li><a href="#" title="" class="mr-2"><i class="fe fe-message-square"></i> 253</a></li>
													<li><a href="#" title="" class="mr-2"><i class="fa fa-share"></i> 24</a></li>
												</ul>
												<div class="media">
													<div class="main-img-user mr-3"><img alt="avatar" src="assets/img/users/7.jpg"></div>
													<div class="media-body">
														<div class="media-contact-name mb-1">
															<h6 class="mb-0">Megan Mackay<small class="text-muted ml-2"><i class="fe fe-clock"></i> Yesterday, 2:00 am</small> </h6>
														</div>
														<p class="mb-2">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
														<ul class="reviewnavs">
															<li><a href="#" title="" class="mr-2"><i class="fe fe-thumbs-up"></i> 794</a></li>
															<li><a href="#" title="" class="mr-2"><i class="fe fe-message-square"></i> 253</a></li>
															<li><a href="#" title="" class="mr-2"><i class="fa fa-share"></i> 24</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										<div class="media mb-4">
											<div class="main-img-user mr-3"><img alt="avatar" src="assets/img/users/8.jpg"></div>
											<div class="media-body">
												<div class="media-contact-name mb-1">
													<h6 class="mb-0">Audrey	Hudson<small class="text-muted ml-2"><i class="fe fe-clock"></i> Yesterday, 2:00 am</small> </h6>
												</div>
												<p class="mb-2">These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. </p>
												<ul class="reviewnavs">
													<li><a href="#" title="" class="mr-2"><i class="fe fe-thumbs-up"></i> 794</a></li>
													<li><a href="#" title="" class="mr-2"><i class="fe fe-message-square"></i> 253</a></li>
													<li><a href="#" title="" class="mr-2"><i class="fa fa-share"></i> 24</a></li>
												</ul>
											</div>
										</div>
										<div class="media">
											<div class="main-img-user mr-3"><img alt="avatar" src="assets/img/users/9.jpg"></div>
											<div class="media-body">
												<div class="media-contact-name mb-1">
													<h6 class="mb-0">Sean Grant<small class="text-muted ml-2"><i class="fe fe-clock"></i> Yesterday, 2:00 am</small> </h6>
												</div>
												<p class="mb-2">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
												<ul class="reviewnavs mb-0">
													<li><a href="#" title="" class="mr-2"><i class="fe fe-thumbs-up"></i> 794</a></li>
													<li><a href="#" title="" class="mr-2"><i class="fe fe-message-square"></i> 253</a></li>
													<li><a href="#" title="" class="mr-2"><i class="fa fa-share"></i> 24</a></li>
												</ul>
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
