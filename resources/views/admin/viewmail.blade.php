﻿@extends('admin.layouts.app')
@section('content')
				<div class="container-fluid">
										<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">View-Mail</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Apps</a></li>
								<li class="breadcrumb-item active" aria-current="page">View-Mail</li>
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
						<div class="col-lg-3 col-md-12">
							<div class="card custom-card">
								<div class="card-body">
									<div class="">
										<a class="btn ripple btn-main-primary btn-compose btn-block" href="" id="btnCompose">Compose</a>
										<div class="main-mail-menu pd-r-0 mg-t-20">
											<nav class="nav main-nav-column mg-b-20">
												<a class="nav-link active" href="">
													<i class="fe fe-mail"></i> Inbox <span class="badge badge-light">20</span>
												</a>
												<a class="nav-link" href="">
													<i class="fe fe-star"></i> Starred <span class="badge badge-primary">3</span>
												</a>
												<a class="nav-link" href="">
													<i class="fe fe-bookmark"></i> Important <span class="badge badge-secondary">10</span>
												</a>
												<a class="nav-link" href="">
													<i class="fe fe-send"></i> Sent Mail <span class="badge badge-success">8</span>
												</a>
												<a class="nav-link" href="">
													<i class="fe fe-edit-2"></i> Drafts <span class="badge badge-danger">15</span>
												</a>
												<a class="nav-link" href="">
													<i class="fe fe-disc"></i> Spam <span class="badge badge-warning">128</span>
												</a>
												<a class="nav-link" href="">
													<i class="fe fe-trash-2"></i> Trash <span class="badge badge-info">6</span>
												</a>
											</nav>
											<label class="main-content-label main-content-label-sm">Label</label>
											<nav class="nav main-nav-column">
												<a class="nav-link" href="#">
													<i class="fe fe-folder"></i> Social <span class="badge badge-primary">10</span>
												</a>
												<a class="nav-link" href="#">
													<i class="fe fe-folder"></i> Promotions <span class="badge badge-secondary">22</span>
												</a>
												<a class="nav-link" href="#">
													<i class="fe fe-folder"></i> Updates <span class="badge badge-success">17</span>
												</a>
											</nav>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-9 col-md-12">
							<div class="card custom-card">
								<div class="card-body h-100">
									<div class="email-media">
										<div class="mb-4 d-lg-flex">
											<h3>Congratulations on your goal you achieved ! </h3>
											<div class="ml-auto d-none d-md-flex fs-18">
												<a href="#" class="mr-3 tx-inverse"><i class="fe fe-printer" data-toggle="tooltip" title="" data-original-title="Print"></i></a>
												<a href="#" class="tx-inverse"><i class="fe fe-tag" data-toggle="tooltip" title="" data-original-title="Undo"></i></a>
											</div>
										</div>
										<div class="media mt-0">
											<div class="main-img-user avatar-md mr-3 online">
												<img alt="avatar" class="rounded-circle" src="assets/img/users/1.jpg">
											</div>
											<div class="media-body tx-inverse">
												<div class="float-right d-none d-md-flex fs-15">
													<small class="mr-2">Nov 2, 2019 12:45 pm</small>
													<small class="mr-2"><i class="fe fe-star" data-toggle="tooltip" title="" data-original-title="Rated"></i></small>
													<small class="mr-2"><i class="fa fa-reply" data-toggle="tooltip" title="" data-original-title="Reply"></i></small>
													<div class="mr-2">
														<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
														<i class="fe fe-more-horizontal text-dark" data-toggle="tooltip" title="" data-original-title="View more"></i></a>
														<div class="dropdown-menu dropdown-menu-right shadow">
															<a class="dropdown-item" href="#">Reply</a>
															<a class="dropdown-item" href="#">Report Spam</a>
															<a class="dropdown-item" href="#">Delete</a>
															<a class="dropdown-item" href="#">Show Original</a>
															<a class="dropdown-item" href="#">Print</a>
															<a class="dropdown-item" href="#">Filter</a>
														</div>
													</div>
												</div>
												<div class="media-title font-weight-semiblod">Sonia Taylor
													<p class="mb-0 text-muted">sonai@gmail.com </p>
													<small class="mr-2 d-md-none">Nov 2, 2019 12:45 pm</small>
													<small class="mr-2 d-md-none"><i class="fe fe-star" data-toggle="tooltip" title="" data-original-title="Rated"></i></small>
													<small class="mr-2 d-md-none"><i class="fa fa-reply" data-toggle="tooltip" title="" data-original-title="Reply"></i></small>
												</div>
											</div>
										</div>
									</div>
									<div class="eamil-body">
										<h6 class="mb-3">Hi Sir/Madam</h6>
										<p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
										<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
										<p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
										<p> Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it?</p>
										<p class="mb-0">Thanking you Sir/Madam</p>
										<hr>
										<div class="email-attch">
											<div class="float-right">
												<a href="#"><i class="fa fa-download text-dark" data-toggle="tooltip" title="" data-original-title="Download"></i></a>
											</div>
											<p>3 Attachments<a href="#"> View All Images</a></p>
											<div class="emai-img">
												<div class="row">
													<div class="col-3">
														<a href="#"><img class="w-100" src="assets/img/media/18.jpg" alt="Generic placeholder image"></a>
														<h6 class="mb-3 mb-lg-0">img_01.jpg <small class="text-muted">12kb</small></h6>
													</div>
													<div class="col-3">
														<a href="#"><img class="w-100" src="assets/img/media/19.jpg" alt="Generic placeholder image"></a>
														<h6 class="mb-3 mb-lg-0">img_02.jpg <small class="text-muted">18kb</small></h6>
													</div>
													<div class="col-3">
														<a href="#"><img class="w-100" src="assets/img/media/20.jpg" alt="Generic placeholder image"></a>
														<h6>img_03.jpg <small class="text-muted">21kb</small></h6>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card-footer">
									<a class="btn ripple btn-primary mt-1 mb-1" href="#"><i class="fa fa-reply"></i> Reply</a>
									<a class="btn ripple btn-secondary mt-1 mb-1" href="#"><i class="fa fa-share"></i> Forward</a>
								</div>
							</div>
						</div>
					</div>
					<!-- End Row -->

				</div>
			</div>
			<!-- End Main Content-->

			<!-- mail-compose modal -->
			<div class="main-mail-compose main-mail-compose-compress">
				<div>
					<div class="container">
						<div class="main-mail-compose-box">
							<div class="main-mail-compose-header">
								<span>New Message</span>
								<nav class="nav">
									<a class="nav-link" href=""><i class="fas fa-minus"></i></a> <a class="nav-link" href=""><i class="fas fa-compress"></i></a> <a class="nav-link" href=""><i class="fas fa-times"></i></a>
								</nav>
							</div>
							<div class="main-mail-compose-body">
								<div class="form-group mb-0">
									<label class="form-label">To</label>
									<div>
										<input class="form-control" placeholder="" type="text">
									</div>
								</div>
								<div class="form-group mb-0">
									<label class="form-label">Subject</label>
									<div>
										<input class="form-control" type="text">
									</div>
								</div>
								<div class="form-group">
									<textarea class="form-control" placeholder="" rows="12"></textarea>
								</div>
								<div class="form-group mg-b-0">
									<nav class="nav">
										<a class="nav-link" data-toggle="tooltip" href="" title="Formatting"><i class="fas fa-font"></i></a>
										<a class="nav-link" data-toggle="tooltip" href="" title="Add attachment"><i class="fas fa-paperclip"></i></a>
										<a class="nav-link" data-toggle="tooltip" href="" title="Add photo"><i class="far fa-image"></i></a>
										<a class="nav-link" data-toggle="tooltip" href="" title="Add link"><i class="fas fa-link"></i></a>
										<a class="nav-link" data-toggle="tooltip" href="" title="Emoticons"><i class="far fa-smile"></i></a>
										<a class="nav-link" data-toggle="tooltip" href="" title="Insert files into Drive"><i class="fab fa-google-drive"></i></a>
										<a class="nav-link" data-toggle="tooltip" href="" title="Delete"><i class="far fa-trash-alt"></i></a>
									</nav>
									<button class="btn ripple btn-primary">Send</button>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- End mail-compose modal -->
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
