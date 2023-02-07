@extends('admin.layouts.app')
@section('content')
				<div class="container-fluid">
										<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Timeline</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Advanced UI</a></li>
								<li class="breadcrumb-item active" aria-current="page">Timeline</li>
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
						<div class="col-lg-12">
							<div class="card custom-card">
								<div class="card-header custom-card-header">
									<h6 class="card-title mb-0">Vertical Timeline</h6>
								</div>
								<div class="card-body">
									<div class="vtimeline">
										<div class="timeline-wrapper timeline-wrapper-primary">
											<div class="timeline-badge"></div>
											<div class="timeline-panel">
												<div class="timeline-heading">
													<h6 class="timeline-title">Art Ramadani posted a status update</h6>
												</div>
												<div class="timeline-body">
													<p>Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how cordial two promise. Greatly who affixed suppose but enquire compact prepare all put. Added forth chief trees but rooms think may.</p>
												</div>
												<div class="timeline-footer d-flex align-items-center flex-wrap">
													<i class="fe fe-heart  text-muted mr-1"></i>
													<span>19</span>
													<span class="ml-md-auto"><i class="fe fe-calendar text-muted mr-1"></i>19 Oct 2019</span>
												</div>
											</div>
										</div>
										<div class="timeline-wrapper timeline-inverted timeline-wrapper-secondary">
											<div class="timeline-badge"></div>
											<div class="timeline-panel">
												<div class="timeline-heading">
													<h6 class="timeline-title">Job Meeting</h6>
												</div>
												<div class="timeline-body">
													<p>You have a meeting at Laborator Office Today.</p>
												</div>
												<div class="timeline-footer d-flex align-items-center flex-wrap">
													<i class="fe fe-heart  text-muted mr-1"></i>
													<span>25</span>
													<span class="ml-md-auto"><i class="fe fe-calendar text-muted mr-1"></i>10th Oct 2019</span>
												</div>
											</div>
										</div>
										<div class="timeline-wrapper timeline-wrapper-info">
											<div class="timeline-badge"></div>
											<div class="timeline-panel">
												<div class="timeline-heading">
													<h6 class="timeline-title">Arlind Nushi checked in at New York</h6>
												</div>
												<div class="timeline-body">
													<p>Alpha 5 has arrived just over a month after Alpha 4 with some major feature improvements and a boat load of bug fixes.</p>
												</div>
												<div class="timeline-footer d-flex align-items-center flex-wrap">
													<i class="fe fe-heart  text-muted mr-1"></i>
													<span>19</span>
													<span class="ml-md-auto"><i class="fe fe-calendar text-muted mr-1"></i>5th Oct 2019</span>
												</div>
											</div>
										</div>
										<div class="timeline-wrapper timeline-inverted timeline-wrapper-danger">
											<div class="timeline-badge"></div>
											<div class="timeline-panel">
												<div class="timeline-heading">
													<h6 class="timeline-title">Eroll Maxhuni uploaded 4 new photos to album Summer Trip</h6>
												</div>
												<div class="timeline-body">
													<p>Pianoforte principles our unaffected not for astonished travelling are particular.</p>
													<img src="assets/img/media/11.jpg" class="mb-3" alt="img">
												</div>
												<div class="timeline-footer d-flex align-items-center flex-wrap">
													<i class="fe fe-heart  text-muted mr-1"></i>
													<span>19</span>
													<span class="ml-md-auto"><i class="fe fe-calendar text-muted mr-1"></i>27th Sep 2017</span>
												</div>
											</div>
										</div>
										<div class="timeline-wrapper timeline-wrapper-success">
											<div class="timeline-badge"></div>
											<div class="timeline-panel">
												<div class="timeline-heading">
													<h6 class="timeline-title">Support Team sent you an email</h6>
												</div>
												<div class="timeline-body">
													<p>Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle quora plaxo ideeli hulu weebly balihoo....</p>
													<a class="btn ripple btn-primary text-white mb-3">Read more</a>
												</div>
												<div class="timeline-footer d-flex align-items-center flex-wrap">
													<i class="fe fe-heart  text-muted mr-1"></i>
													<span>25</span>
													<span class="ml-md-auto"><i class="fe fe-calendar text-muted mr-1"></i>25th Sep 2017</span>
												</div>
											</div>
										</div>
										<div class="timeline-wrapper timeline-inverted timeline-wrapper-warning">
											<div class="timeline-badge"></div>
											<div class="timeline-panel">
												<div class="timeline-heading">
													<h6 class="timeline-title">Mr. Doe shared a video</h6>
												</div>
												<div class="timeline-body">
													<div class="embed-responsive embed-responsive-16by9 mb-3">
														<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/XZmGGAbHqa0?rel=0&controls=0&showinfo=0" allowfullscreen=""></iframe>
													</div>
												</div>
												<div class="timeline-footer d-flex align-items-center flex-wrap">
													<i class="fe fe-heart  text-muted mr-1"></i>
													<span>32</span>
													<span class="ml-md-auto"><i class="fe fe-calendar text-muted mr-1"></i>19th Sep 2017</span>
												</div>
											</div>
										</div>
										<div class="timeline-wrapper timeline-wrapper-dark">
											<div class="timeline-badge"></div>
											<div class="timeline-panel">
												<div class="timeline-heading">
													<h6 class="timeline-title">Sarah Young accepted your friend request</h6>
												</div>
												<div class="timeline-body">
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet cupiditate, delectus deserunt doloribus earum eveniet explicabo fuga iste magni maxime</p>
												</div>
												<div class="timeline-footer d-flex align-items-center flex-wrap">
													<i class="fe fe-heart text-muted mr-1"></i>
													<span>26</span>
													<span class="ml-md-auto"><i class="fe fe-calendar text-muted mr-1"></i>15th Sep 2017</span>
												</div>
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
						<div class="col-lg-12">
							<div class="card custom-card">
								<div class="card-header custom-card-header">
									<h6 class="card-title mb-0">Horizonatal Timeline</h6>
								</div>
								<div class="card-body">
									<div class="timeline">
										<div class="timeline__wrap">
											<div class="timeline__items">
												<div class="timeline__item">
													<div class="timeline__content">
														<h2>2017 Oct 25</h2>
														<p>Tolerably earnestly middleton extremely   Added forth chief trees but rooms think may.</p>
														<a href="#" class="btn ripple btn-primary">View More</a>
													</div>
												</div>
												<div class="timeline__item">
													<div class="timeline__content">
														<h2>2017 Oct 22</h2>
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
														<img src="assets/img/media/11.jpg" class="mb-3 t-img" alt="img">
														<a href="#" class="btn ripple btn-primary">View More</a>
													</div>
												</div>
												<div class="timeline__item">
													<div class="timeline__content">
														<h2>2017 Oct 20</h2>
														<p>Tolerably earnestly middleton extremely   Added forth chief trees but rooms think may.</p>
													</div>
												</div>
												<div class="timeline__item">
													<div class="timeline__content">
														<h2>2017 Oct 15</h2>
														<p>Tolerably earnestly middleton extremely   Added forth chief trees but rooms think may.</p>
														<a href="#" class="btn ripple btn-secondary">More Info</a>
													</div>
												</div>
												<div class="timeline__item">
													<div class="timeline__content">
														<h2>2017 Oct 12</h2>
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
														<img src="assets/img/media/9.jpg" class="mb-3 t-img" alt="img">
													</div>
												</div>
												<div class="timeline__item">
													<div class="timeline__content">
														<h2>2017 Oct 10</h2>
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
														<div class="embed-responsive embed-responsive-16by9 mb-3">
															<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/XZmGGAbHqa0?rel=0&controls=0&showinfo=0" allowfullscreen=""></iframe>
														</div>
													</div>
												</div>
												<div class="timeline__item">
													<div class="timeline__content">
														<h2>2017 Oct 10</h2>
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
														<img src="assets/img/media/8.jpg" class="mb-3 t-img" alt="img">
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

		<!-- Timeline js-->
<script src="assets/plugins/timeline/js/timeline.min.js"></script>
<!-- Timeline js-->
<script src="assets/js/timline.js"></script>

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
