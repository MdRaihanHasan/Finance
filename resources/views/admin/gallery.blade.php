@extends('admin.layouts.app')
@section('content')
				<div class="container-fluid">
										<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Gallery</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Pages</a></li>
								<li class="breadcrumb-item active" aria-current="page">Gallery</li>
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
						<div class="col-lg-12 col-md-12">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Light Gallery</h6>
										<p class="text-muted card-sub-title">A customizable, modular, responsive, lightbox gallery plugin for jQuery.</p>
									</div>
									<ul id="lightgallery" class="list-unstyled row mb-0">
										<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3 pl-sm-2 pr-sm-2" data-responsive="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Dark/assets/img/media/1.jpg" data-src="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Dark/assets/img/media/1.jpg" data-sub-html="<h4>Gallery Image 1</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
											<a href="">
												<img class="img-responsive" src="assets/img/media/1.jpg" alt="Thumb-1">
											</a>
										</li>
										<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3 pl-sm-2 pr-sm-2" data-responsive="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Dark/assets/img/media/2.jpg" data-src="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Dark/assets/img/media/2.jpg" data-sub-html="<h4>Gallery Image 2</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
											<a href="">
												<img class="img-responsive" src="assets/img/media/2.jpg" alt="Thumb-2">
											</a>
										</li>
										<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3 pl-sm-2 pr-sm-2" data-responsive="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Dark/assets/img/media/3.jpg" data-src="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Dark/assets/img/media/3.jpg" data-sub-html="<h4>Gallery Image 3</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
											<a href="">
												<img class="img-responsive" src="assets/img/media/3.jpg" alt="Thumb-1">
											</a>
										</li>
										<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3 pl-sm-2 pr-sm-2" data-responsive="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Dark/assets/img/media/4.jpg" data-src="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Dark/assets/img/media/4.jpg" data-sub-html=" <h4>Gallery Image 4</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
											<a href="">
												<img class="img-responsive" src="assets/img/media/4.jpg" alt="Thumb-2">
											</a>
										</li>
										<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3 pl-sm-2 pr-sm-2" data-responsive="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Dark/assets/img/media/5.jpg" data-src="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Dark/assets/img/media/5.jpg" data-sub-html="<h4>Gallery Image 5</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
											<a href="">
												<img class="img-responsive" src="assets/img/media/5.jpg" alt="Thumb-1">
											</a>
										</li>
										<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3 pl-md-2 pr-md-2" data-responsive="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Dark/assets/img/media/6.jpg" data-src="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Dark/assets/img/media/6.jpg" data-sub-html="<h4>Gallery Image 6</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
											<a href="">
												<img class="img-responsive" src="assets/img/media/6.jpg" alt="Thumb-2">
											</a>
										</li>
										<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3 pl-sm-2 pr-sm-2" data-responsive="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Dark/assets/img/media/7.jpg" data-src="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Dark/assets/img/media/7.jpg" data-sub-html="<h4>Gallery Image 7</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
											<a href="">
												<img class="img-responsive" src="assets/img/media/7.jpg" alt="Thumb-1">
											</a>
										</li>
										<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3 pl-sm-2 pr-sm-2" data-responsive="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Dark/assets/img/media/8.jpg" data-src="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Dark/assets/img/media/8.jpg" data-sub-html="<h4>Gallery Image 8</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
											<a href="">
												<img class="img-responsive" src="assets/img/media/8.jpg" alt="Thumb-2">
											</a>
										</li>
										<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3 pl-sm-2 pr-sm-2" data-responsive="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Dark/assets/img/media/9.jpg" data-src="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Dark/assets/img/media/9.jpg" data-sub-html="<h4>Gallery Image 9</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
											<a href="">
												<img class="img-responsive mb-0" src="assets/img/media/9.jpg" alt="Thumb-1">
											</a>
										</li>
										<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3 mb-sm-0 pl-sm-2 pr-sm-2" data-responsive="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Dark/assets/img/media/10.jpg" data-src="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Dark/assets/img/media/10.jpg" data-sub-html="<h4>Gallery Image 10</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
											<a href="">
												<img class="img-responsive mb-0" src="assets/img/media/10.jpg" alt="Thumb-2">
											</a>
										</li>
										<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3 mb-sm-0 pl-sm-2 pr-sm-2" data-responsive="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Dark/assets/img/media/11.jpg" data-src="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Dark/assets/img/media/11.jpg" data-sub-html="<h4>Gallery Image 11</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
											<a href="">
												<img class="img-responsive mb-0" src="assets/img/media/11.jpg" alt="Thumb-1">
											</a>
										</li>
										<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4  pl-sm-2 pr-sm-2" data-responsive="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Dark/assets/img/media/12.jpg" data-src="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Dark/assets/img/media/12.jpg" data-sub-html="<h4>Gallery Image 12</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
											<a href="">
												<img class="img-responsive mb-0" src="assets/img/media/12.jpg" alt="Thumb-2">
											</a>
										</li>
									</ul>
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

		<!-- Gallery js-->
<script src="assets/plugins/gallery/picturefill.js"></script>
<script src="assets/plugins/gallery/lightgallery.js"></script>
<script src="assets/plugins/gallery/lightgallery-1.js"></script>
<script src="assets/plugins/gallery/lg-pager.js"></script>
<script src="assets/plugins/gallery/lg-autoplay.js"></script>
<script src="assets/plugins/gallery/lg-fullscreen.js"></script>
<script src="assets/plugins/gallery/lg-zoom.js"></script>
<script src="assets/plugins/gallery/lg-hash.js"></script>
<script src="assets/plugins/gallery/lg-share.js"></script>

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
