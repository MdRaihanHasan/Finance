@extends('admin.layouts.app')
@section('content')
				<div class="container-fluid">
										<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">UserList</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Advanced UI</a></li>
								<li class="breadcrumb-item active" aria-current="page">UserList</li>
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
						<div class="col-sm-12 col-md-6 col-lg-3">
							<div class="card custom-card">
								<div class="card-body text-center">
									<div class="user-lock text-center">
										<div class="dropdown text-right">
											<a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
												<i class="fe fe-more-horizontal text-dark fs-16"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right shadow">
												<a class="dropdown-item" href="#"><i class="fe fe-message-square mr-2"></i> Message</a>
												<a class="dropdown-item" href="#"><i class="fe fe-edit-2 mr-2"></i> Edit</a>
												<a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i> View</a>
												<a class="dropdown-item" href="#"><i class="fe fe-trash-2 mr-2"></i> Delete</a>
											</div>
										</div>
										<img alt="avatar" class="rounded-circle" src="assets/img/users/2.jpg">
									</div>
									<h5 class=" mb-1 mt-3">Socrates Itumay</h5>
									<p class="mb-2 mt-1 tx-inverse">Project Manager</p>
									<p class="text-muted text-center mt-0">Lorem Ipsum is not simply random text to popular belief Contrary.</p>
									<div class="mt-2 user-info btn-list">
										<a class="btn btn-outline-light btn-block" href=""><i class="fe fe-mail mr-2"></i><span>socrates23@gmail.com</span></a>
										<a class="btn btn-outline-light btn-block" href=""><i class="fe fe-phone mr-2"></i><span>0-235-657-24587</span></a>
										<a class="btn btn-outline-light  btn-block" href=""><i class="fe fe-map-pin mr-2"></i><span>California, USA</span></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-3">
							<div class="card custom-card">
								<div class="card-body text-center">
									<div class="user-lock text-center">
										<div class="dropdown text-right">
											<a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
												<i class="fe fe-more-horizontal text-dark fs-16"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right shadow">
												<a class="dropdown-item" href="#"><i class="fe fe-message-square mr-2"></i> Message</a>
												<a class="dropdown-item" href="#"><i class="fe fe-edit-2 mr-2"></i> Edit</a>
												<a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i> View</a>
												<a class="dropdown-item" href="#"><i class="fe fe-trash-2 mr-2"></i> Delete</a>
											</div>
										</div>
										<img alt="avatar" class="rounded-circle" src="assets/img/users/3.jpg">
									</div>
									<h5 class="mb-1 mt-3 ">Reynante Labares</h5>
									<p class="mb-2 mt-1 tx-inverse">Web Designer</p>
									<p class="text-muted text-center mt-1">Lorem Ipsum is not simply random text to popular belief Contrary.</p>
									<div class="mt-2 user-info btn-list">
										<a class="btn  btn-outline-light btn-block" href=""><i class="fe fe-mail mr-2"></i><span>reynante23@gmail.com</span></a>
										<a class="btn  btn-outline-light btn-block" href=""><i class="fe fe-phone mr-2"></i><span>0-235-657-24587</span></a>
										<a class="btn  btn-outline-light  btn-block" href=""><i class="fe fe-map-pin mr-2"></i><span>Wales, UK</span></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-3">
							<div class="card custom-card">
								<div class="card-body text-center">
									<div class="user-lock text-center">
										<div class="dropdown text-right">
											<a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
												<i class="fe fe-more-horizontal text-dark fs-16"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right shadow">
												<a class="dropdown-item" href="#"><i class="fe fe-message-square mr-2"></i> Message</a>
												<a class="dropdown-item" href="#"><i class="fe fe-edit-2 mr-2"></i> Edit</a>
												<a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i> View</a>
												<a class="dropdown-item" href="#"><i class="fe fe-trash-2 mr-2"></i> Delete</a>
											</div>
										</div>
										<img alt="avatar" class="rounded-circle" src="assets/img/users/4.jpg">
									</div>
									<h5 class="mb-1 mt-3 ">Owen Bongcaras</h5>
									<p class="mb-2 mt-1 tx-inverse">App Developer</p>
									<p class="text-muted text-center mt-1">Lorem Ipsum is not simply random text to popular belief Contrary.</p>
									<div class="mt-2 user-info btn-list">
										<a class="btn  btn-outline-light btn-block" href=""><i class="fe fe-mail mr-2"></i><span>owenbong@gmail.com</span></a>
										<a class="btn  btn-outline-light btn-block" href=""><i class="fe fe-phone mr-2"></i><span>0-235-657-24587</span></a>
										<a class="btn  btn-outline-light  btn-block" href=""><i class="fe fe-map-pin mr-2"></i><span>0-235-657-24587</span></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-3">
							<div class="card custom-card">
								<div class="card-body text-center">
									<div class="user-lock text-center">
										<div class="dropdown text-right">
											<a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
												<i class="fe fe-more-horizontal text-dark fs-16"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right shadow">
												<a class="dropdown-item" href="#"><i class="fe fe-message-square mr-2"></i> Message</a>
												<a class="dropdown-item" href="#"><i class="fe fe-edit-2 mr-2"></i> Edit</a>
												<a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i> View</a>
												<a class="dropdown-item" href="#"><i class="fe fe-trash-2 mr-2"></i> Delete</a>
											</div>
										</div>
										<img alt="avatar" class="rounded-circle" src="assets/img/users/8.jpg">
									</div>
									<h5 class="mb-1 mt-3 ">Stephen Metcalfe</h5>
									<p class="mb-2 mt-1 tx-inverse">Administrator</p>
									<p class="text-muted text-center mt-1">Lorem Ipsum is not simply random text to popular belief Contrary.</p>
									<div class="mt-2 user-info btn-list">
										<a class="btn btn-outline-light btn-block" href=""><i class="fe fe-mail mr-2"></i><span>stephne@gmail.com</span></a>
										<a class="btn btn-outline-light btn-block" href=""><i class="fe fe-phone mr-2"></i><span>0-235-657-24587</span></a>
										<a class="btn btn-outline-light  btn-block" href=""><i class="fe fe-map-pin mr-2"></i><span>London, UK</span></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-4">
							<div class="card custom-card">
								<div class="card-body text-center">
									<div class="user-lock text-center">
										<img alt="avatar" class="rounded-circle" src="assets/img/users/5.jpg">
									</div>
									<h5 class="mb-1 mt-3 ">Mariane Galeon</h5>
									<p class="mb-2 mt-1 tx-inverse">Administrator</p>
									<p class="mb-1"><i class="fe fe-phone mr-2"></i>mariane28@gmail.com</p>
									<div class="d-lg-flex mt-2 align-items-center justify-content-center text-center">
										<p class="mb-2 mr-3"><i class="fe fe-map-pin mr-2"></i>Scotland, UK</p>
										<p class="mb-2"><i class="fe fe-phone mr-2"></i>0-235-657-24587</p>
									</div>
									<p class="text-muted text-center mt-1">Lorem Ipsum is not simply random text to popular belief Contrary.</p>
									<div class="justify-content-center text-center mt-3 d-flex">
										<a href="#" class="btn ripple btn-primary btn-icon mr-3">
											<i class="fe fe-message-square"></i>
										</a>
										<a href="#" class="btn ripple btn-secondary btn-icon mr-3">
											<i class="fe fe-edit-2"></i>
										</a>
										<a href="#" class="btn ripple btn-info btn-icon mr-3">
											<i class="fe fe-eye"></i>
										</a>
										<a href="#" class="btn ripple btn-danger btn-icon">
											<i class="fe fe-trash-2"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-4">
							<div class="card custom-card">
								<div class="card-body text-center">
									<div class="user-lock text-center">
										<img alt="avatar" class="rounded-circle" src="assets/img/users/6.jpg">
									</div>
									<h5 class="mb-1 mt-3 ">Joyce Chua</h5>
									<p class="mb-2 mt-1 tx-inverse">App Designer</p>
									<p class="mb-1"><i class="fe fe-phone mr-2"></i>joyce78@gmail.com</p>
									<div class="d-lg-flex mt-2 align-items-center justify-content-center text-center">
										<p class="mb-2 mr-3"><i class="fe fe-map-pin mr-2"></i>Washington, USA</p>
										<p class="mb-2"><i class="fe fe-phone mr-2"></i>0-235-657-24587</p>
									</div>
									<p class="text-muted text-center mt-1">Lorem Ipsum is not simply random text to popular belief Contrary.</p>
									<div class="justify-content-center text-center mt-3 d-flex">
										<a href="#" class="btn ripple btn-primary btn-icon mr-3">
											<i class="fe fe-message-square"></i>
										</a>
										<a href="#" class="btn ripple btn-secondary btn-icon mr-3">
											<i class="fe fe-edit-2"></i>
										</a>
										<a href="#" class="btn ripple btn-info btn-icon mr-3">
											<i class="fe fe-eye"></i>
										</a>
										<a href="#" class="btn ripple btn-danger btn-icon">
											<i class="fe fe-trash-2"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-4">
							<div class="card custom-card">
								<div class="card-body text-center">
									<div class="user-lock text-center">
										<img alt="avatar" class="rounded-circle" src="assets/img/users/7.jpg">
									</div>
									<h5 class="mb-1 mt-3 ">Petey Cruiser</h5>
									<p class="mb-2 mt-1 tx-inverse">Web Developer</p>
									<p class="mb-1"><i class="fe fe-phone mr-2"></i>petey78@gmail.com</p>
									<div class="d-lg-flex mt-2 align-items-center justify-content-center text-center">
										<p class="mb-2 mr-3"><i class="fe fe-map-pin mr-2"></i>England, UK</p>
										<p class="mb-2"><i class="fe fe-phone mr-2"></i>0-235-657-24587</p>
									</div>
									<p class="text-muted text-center mt-1">Lorem Ipsum is not simply random text to popular belief Contrary.</p>
									<div class="justify-content-center text-center mt-3 d-flex">
										<a href="#" class="btn ripple btn-primary btn-icon mr-3">
											<i class="fe fe-message-square"></i>
										</a>
										<a href="#" class="btn ripple btn-secondary btn-icon mr-3">
											<i class="fe fe-edit-2"></i>
										</a>
										<a href="#" class="btn ripple btn-info btn-icon mr-3">
											<i class="fe fe-eye"></i>
										</a>
										<a href="#" class="btn ripple btn-danger btn-icon">
											<i class="fe fe-trash-2"></i>
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
