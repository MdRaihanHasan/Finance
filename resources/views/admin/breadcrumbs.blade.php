@extends('admin.layouts.app')
@section('content')
				<div class="container-fluid">
										<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Breadcrumbs</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Breadcrumbs</li>
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
										<div class="row">
						<div class="col-xl-9 col-lg-12">
							<div class="card custom-card" id="basic">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Basic Styling</h6>
										<p class="text-muted card-sub-title">The example below is the basic styling of the breadcrumb from Bootstrap.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<nav aria-label="breadcrumb">
												<ol class="breadcrumb mg-b-0">
													<li class="breadcrumb-item">
														<a href="#">Home</a>
													</li>
													<li class="breadcrumb-item">
														<a href="#">Library</a>
													</li>
													<li class="breadcrumb-item active">Data</li>
												</ol>
											</nav>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="breadcrumb1"><pre><code class="language-markup"><script type="html-dashlead/script"><nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="#">Home</a>
		</li>
		<li class="breadcrumb-item">
			<a href="#">Library</a>
		</li>
		<li class="breadcrumb-item active">Data</li>
	</ol>
</nav></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#breadcrumb1"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="custom">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Custom Styling</h6>
										<p class="text-muted card-sub-title">The example below is the custom styling of the breadcrumb used by this template.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<nav aria-label="breadcrumb">
												<ol class="breadcrumb breadcrumb-style1 mg-b-0">
													<li class="breadcrumb-item">
														<a href="#">Home</a>
													</li>
													<li class="breadcrumb-item">
														<a href="#">Library</a>
													</li>
													<li class="breadcrumb-item active">Data</li>
												</ol>
											</nav>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="breadcrumb2"><pre><code class="language-markup"><script type="html-dashlead/script"><nav aria-label="breadcrumb">
	<ol class="breadcrumb breadcrumb-style1">
		<li class="breadcrumb-item">
			<a href="#">Home</a>
		</li>
		<li class="breadcrumb-item">
			<a href="#">Library</a>
		</li>
		<li class="breadcrumb-item active">Data</li>
	</ol>
</nav></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#breadcrumb2"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="divider">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Custom Divider</h6>
										<p class="text-muted card-sub-title">The example below is the custom styling of the breadcrumb using different divider.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<nav aria-label="breadcrumb">
												<ol class="breadcrumb breadcrumb-style2 mb-0">
													<li class="breadcrumb-item">
														<a href="#">Home</a>
													</li>
													<li class="breadcrumb-item">
														<a href="#">Library</a>
													</li>
													<li class="breadcrumb-item active">Data</li>
												</ol>
											</nav>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="breadcrumb3"><pre><code class="language-markup"><script type="html-dashlead/script"><nav aria-label="breadcrumb">
	<ol class="breadcrumb breadcrumb-style2">
		<li class="breadcrumb-item">
			<a href="#">Home</a>
		</li>
		<li class="breadcrumb-item">
			<a href="#">Library</a>
		</li>
		<li class="breadcrumb-item active">Data</li>
	</ol>
</nav></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#breadcrumb3"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="center">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Breadcrumbs-Center align</h6>
										<p class="text-muted card-sub-title">The example below is the center aligment of the breadcrumb</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<nav class="breadcrumb-3">
												<ol class="breadcrumb breadcrumb-style1 mb-0">
													<li class="breadcrumb-item">
														<a href="#">Home</a>
													</li>
													<li class="breadcrumb-item">
														<a href="#">Library</a>
													</li>
													<li class="breadcrumb-item active">Data</li>
												</ol>
											</nav>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="breadcrumb4"><pre><code class="language-markup"><script type="html-dashlead/script"><nav class="breadcrumb-3">
	<ol class="breadcrumb breadcrumb-style1">
		<li class="breadcrumb-item">
			<a href="#">Home</a>
		</li>
		<li class="breadcrumb-item">
			<a href="#">Library</a>
		</li>
		<li class="breadcrumb-item active">Data</li>
	</ol>
</nav></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#breadcrumb4"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="right">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Breadcrumbs-Right align</h6>
										<p class="text-muted card-sub-title">The example below is the Right aligment of the breadcrumb</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<nav class="breadcrumb-4">
												<ol class="breadcrumb breadcrumb-style1 mb-0">
													<li class="breadcrumb-item">
														<a href="#">Home</a>
													</li>
													<li class="breadcrumb-item">
														<a href="#">Library</a>
													</li>
													<li class="breadcrumb-item active">Data</li>
												</ol>
											</nav>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="breadcrumb5"><pre><code class="language-markup"><script type="html-dashlead/script"><nav class="breadcrumb-4">
	<ol class="breadcrumb breadcrumb-style1">
		<li class="breadcrumb-item">
			<a href="#">Home</a>
		</li>
		<li class="breadcrumb-item">
			<a href="#">Library</a>
		</li>
		<li class="breadcrumb-item active">Data</li>
	</ol>
</nav></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#breadcrumb5"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-12 d-none d-xl-block custom-leftnav">
							<div class="main-content-left-components">
								<div class="card custom-card">
									<div class="card-body component-item">
										<nav class="nav flex-column">
											<a class="nav-link" href="#basic">Basic Breadcrumbs</a>
											<a class="nav-link" href="#custom">Custom Breadcrumbs</a>
											<a class="nav-link" href="#divider">Custom Divider</a>
											<a class="nav-link" href="#center">Breadcrumbs-Center align</a>
											<a class="nav-link" href="#right">Breadcrumbs-Right align</a>
										</nav>
									</div>
								</div>
								<div class="card custom-card">
									<div class="card-body text-center">
										<div class="icon-service bg-primary-transparent rounded-circle text-primary">
											<i class="fe fe-user"></i>
										</div>
										<p class="mb-1 text-muted">Total Users</p>
										<h3 class="mb-0">34,789</h3>
									</div>
								</div>
								<div class="card custom-card">
									<div class="card-body text-center">
										<div class="icon-service bg-secondary-transparent rounded-circle text-secondary">
											<i class="fe fe-trending-up"></i>
										</div>
										<p class="mb-1 text-muted">Total Sales</p>
										<h3 class="mb-0">98,674</h3>
									</div>
								</div>
								<div class="card custom-card">
									<div class="card-body text-center">
										<div class="icon-service bg-info-transparent rounded-circle text-info">
											<i class="fe fe-dollar-sign"></i>
										</div>
										<p class="mb-1 text-muted">Total Profits</p>
										<h3 class="mb-0"><span>$</span>45,078</h3>
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

		<!-- Jquery.mCustomScrollbar js-->
<script src="assets/plugins/jquery.mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- Clipboard js-->
<script src="assets/plugins/clipboard/clipboard.min.js"></script>
<script src="assets/plugins/clipboard/clipboard.js"></script>
<!-- Prism js-->
<script src="assets/plugins/prism/prism.js"></script>

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
