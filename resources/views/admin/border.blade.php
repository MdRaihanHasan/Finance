﻿@extends('admin.layouts.app')
@section('content')
				<div class="container-fluid">
										<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Border</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Utilities</a></li>
								<li class="breadcrumb-item active" aria-current="page">Border</li>
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
							<div class="card custom-card" id="brset">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Set Border</h6>
										<p class="text-muted  card-sub-title">The following border utilities classes will add border to any side of an element.</p>
									</div>
									<div class="d-flex">
										<div class="wd-60 ht-60 bg-light bd bd-2"></div>
										<div class="wd-60 ht-60 bg-light mg-l-10 bd-t bd-2"></div>
										<div class="wd-60 ht-60 bg-light mg-l-10 bd-r bd-2"></div>
										<div class="wd-60 ht-60 bg-light mg-l-10 bd-b bd-2"></div>
										<div class="wd-60 ht-60 bg-light mg-l-10 bd-l bd-2"></div>
										<div class="wd-60 ht-60 bg-light mg-l-10 bd-y bd-2"></div>
										<div class="wd-60 ht-60 bg-light mg-l-10 bd-x bd-2"></div>
									</div>
								</div>
								<div class="card-footer">
									<div class="table-responsive">
										<table class="table main-table-reference mt-0 mb-0">
											<thead>
												<tr>
													<th class="wd-30p">Class</th>
													<th class="wd-70p">Description</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code class="pd-0 bg-transparent">class="bd"</code></td>
													<td>Add border in all sides of an element using default color and width.</td>
												</tr>
												<tr>
													<td><code class="pd-0 bg-transparent">class="bd-t"</code></td>
													<td>Add border to top side of element.</td>
												</tr>
												<tr>
													<td><code class="pd-0 bg-transparent">class="bd-r"</code></td>
													<td>Add border to right side of element.</td>
												</tr>
												<tr>
													<td><code class="pd-0 bg-transparent">class="bd-b"</code></td>
													<td>Add border to bottom side of element.</td>
												</tr>
												<tr>
													<td><code class="pd-0 bg-transparent">class="bd-l"</code></td>
													<td>Add border to left side of element.</td>
												</tr>
												<tr>
													<td><code class="pd-0 bg-transparent">class="bd-x"</code></td>
													<td>Add border to left and right side of element.</td>
												</tr>
												<tr>
													<td><code class="pd-0 bg-transparent">class="bd-y"</code></td>
													<td>Add border to top and bottom side of element.</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="card custom-card" id="brsizes">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Border Sizes</h6>
										<p class="text-muted  card-sub-title">Below are the available border size utilities classes.</p>
									</div>
									<div class="d-flex">
										<div class="wd-60 ht-60 bg-light bd"></div>
										<div class="wd-60 ht-60 bg-light mg-l-10 bd bd-2"></div>
										<div class="wd-60 ht-60 bg-light mg-l-10 bd bd-3"></div>
										<div class="wd-60 ht-60 bg-light mg-l-10 bd bd-4"></div>
										<div class="wd-60 ht-60 bg-light mg-l-10 bd bd-5"></div>
									</div>
								</div>
								<div class="card-footer">
									<div class="table-responsive">
										<table class="table main-table-reference mt-0 mb-0">
											<thead>
												<tr>
													<th class="wd-30p">Class</th>
													<th class="wd-70p">Description</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code class="pd-0 bg-transparent">class="bd"</code></td>
													<td>Set 1px (default) border to element.</td>
												</tr>
												<tr>
													<td><code class="pd-0 bg-transparent">class="bd bd-2"</code></td>
													<td>Set 2px border to element.</td>
												</tr>
												<tr>
													<td><code class="pd-0 bg-transparent">class="bd bd-3"</code></td>
													<td>Set 3px border to element.</td>
												</tr>
												<tr>
													<td><code class="pd-0 bg-transparent">class="bd bd-4"</code></td>
													<td>Set 4px border to element.</td>
												</tr>
												<tr>
													<td><code class="pd-0 bg-transparent">class="bd bd-5"</code></td>
													<td>Set 5px border to element.</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="card custom-card" id="brremove">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Remove Border</h6>
										<p class="text-muted  card-sub-title">You can remove a border to a single side of an element by using the following border utilities classes.</p>
									</div>
									<div class="d-flex">
										<div class="wd-60 ht-60 bg-light bd bd-2 bd-t-0"></div>
										<div class="wd-60 ht-60 bg-light mg-l-10 bd bd-2 bd-r-0"></div>
										<div class="wd-60 ht-60 bg-light mg-l-10 bd bd-2 bd-b-0"></div>
										<div class="wd-60 ht-60 bg-light mg-l-10 bd bd-2 bd-l-0"></div>
										<div class="wd-60 ht-60 bg-light mg-l-10 bd bd-2 bd-x-0"></div>
										<div class="wd-60 ht-60 bg-light mg-l-10 bd bd-2 bd-y-0"></div>
									</div>
								</div>
								<div class="card-footer">
									<div class="table-responsive">
										<table class="table main-table-reference mt-0 mb-0">
											<thead>
												<tr>
													<th class="wd-30p">Class</th>
													<th class="wd-70p">Description</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code class="pd-0 bg-transparent">.bd-t-0</code></td>
													<td>Remove top border of an element</td>
												</tr>
												<tr>
													<td><code class="pd-0 bg-transparent">.bd-r-0</code></td>
													<td>Remove right border of an element</td>
												</tr>
												<tr>
													<td><code class="pd-0 bg-transparent">.bd-b-0</code></td>
													<td>Remove bottom border of an element</td>
												</tr>
												<tr>
													<td><code class="pd-0 bg-transparent">.bd-l-0</code></td>
													<td>Remove left border of an element</td>
												</tr>
												<tr>
													<td><code class="pd-0 bg-transparent">.bd-x-0</code></td>
													<td>Remove left and right border of an element</td>
												</tr>
												<tr>
													<td><code class="pd-0 bg-transparent">.bd-y-0</code></td>
													<td>Remove top and bottom border of an element</td>
												</tr>
												<tr>
													<td><code class="pd-0 bg-transparent">.bd-[t||r|bl|x|y]-0-f</code></td>
													<td>Force remove border of any side of an element.</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="card custom-card" id="brcolor">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Border Color</h6>
										<p class="text-muted  card-sub-title">You can set a border color of any side of an element by adding the following utilities classes below.</p>
									</div>
									<div class="d-flex">
										<div class="wd-60 ht-60 bd bd-2 bd-primary"></div>
										<div class="wd-60 ht-60 mg-l-10 bd bd-2 bd-secondary"></div>
										<div class="wd-60 ht-60 mg-l-10 bd bd-2 bd-success"></div>
										<div class="wd-60 ht-60 mg-l-10 bd bd-2 bd-warning"></div>
										<div class="wd-60 ht-60 mg-l-10 bd bd-2 bd-danger"></div>
										<div class="wd-60 ht-60 mg-l-10 bd bd-2 bd-info"></div>
										<div class="wd-60 ht-60 mg-l-10 bd bd-2 bd-gray-500"></div>
									</div>
								</div>
								<div class="card-footer">
									<div class="table-responsive">
										<table class="table main-table-reference mt-0 mb-0">
											<thead>
												<tr>
													<th class="wd-30p">Class</th>
													<th class="wd-70p">Value</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code class="pd-0 bg-transparent">.bd-[value]</code></td>
													<td>primary | success | warning | danger | info | indigo | purple | pink | teal | orange</td>
												</tr>
												<tr>
													<td><code class="pd-0 bg-transparent">.bd-gray-[value]</code></td>
													<td>100 | 200 | 300 | 400 | 500 | 600 | 700 | 800 | 900</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="card custom-card" id="brradius">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Border Radius</h6>
										<p class="text-muted  card-sub-title">You can set a border to any element by using the following utilities classes below.</p>
									</div>
									<div class="d-flex">
										<div class="wd-60 ht-60 bd rounded"></div>
										<div class="wd-60 ht-60 mg-l-10 bd rounded-5"></div>
										<div class="wd-60 ht-60 mg-l-10 bd rounded-10"></div>
										<div class="wd-60 ht-60 mg-l-10 bd rounded-20"></div>
										<div class="wd-60 ht-60 mg-l-10 bd rounded-30"></div>
										<div class="wd-60 ht-60 mg-l-10 bd rounded-top"></div>
										<div class="wd-60 ht-60 mg-l-10 bd rounded-right"></div>
										<div class="wd-60 ht-60 mg-l-10 bd rounded-bottom"></div>
										<div class="wd-80 ht-60 mg-l-10 bd rounded-left"></div>
										<div class="wd-60 ht-60 mg-l-10 bd rounded-circle"></div>
										<div class="wd-60 ht-60 mg-l-10 bd rounded-0"></div>
									</div>
								</div>
								<div class="card-footer">
									<div class="table-responsive">
										<table class="table main-table-reference mt-0 mb-0">
											<thead>
												<tr>
													<th class="wd-30p">Class</th>
													<th class="wd-70p">Description / Value</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code class="pd-0 bg-transparent">.rounded</code></td>
													<td>Set a border radius of 2px (default) to an element.</td>
												</tr>
												<tr>
													<td><code class="pd-0 bg-transparent">.rounded-[value]</code></td>
													<td>5 | 10 | 20 | 30 | 40 | 50 | circle</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-12 d-none d-xl-block custom-leftnav">
							<div class="main-content-left-components">
								<div class="card custom-card">
									<div class="card-body component-item">
										<nav class="nav flex-column">
											<a class="nav-link" href="#brset">Set Border</a>
											<a class="nav-link" href="#brsizes">Border Sizes</a>
											<a class="nav-link" href="#brremove">Remove Border</a>
											<a class="nav-link" href="#brcolor">Border Color</a>
											<a class="nav-link" href="#brradius">Border Radius</a>
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
