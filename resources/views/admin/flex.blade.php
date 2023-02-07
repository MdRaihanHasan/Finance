﻿@extends('admin.layouts.app')
@section('content')
				<div class="container-fluid">
										<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Flex</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Utilities</a></li>
								<li class="breadcrumb-item active" aria-current="page">Flex</li>
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
						<div class="col-xl-9 col-lg-12 col-md-12">
							<div class="card custom-card" id="enable">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Enable Flex</h6>
										<p class="text-muted  card-sub-title">Apply display utilities to create a flexbox container and transform direct children elements into flex items.</p>
									</div>
									<div class="d-flex pd-10 bg-light">
										I'm a flexbox container!
									</div>
								</div>
							</div>
							<div class="card custom-card" id="direc">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Direction</h6>
										<p class="text-muted  card-sub-title">Set the direction of flex items in a flex container with direction utilities.</p>
									</div>
									<div>
										<div class="d-flex flex-row bg-light mg-b-20">
											<div class="pd-10 bg-gray-100">
												Flex item 1
											</div>
											<div class="pd-10 bg-gray-300">
												Flex item 2
											</div>
											<div class="pd-10 bg-gray-400">
												Flex item 3
											</div>
										</div>
										<div class="d-flex flex-row-reverse bg-light">
											<div class="pd-10 bg-gray-100">
												Flex item 1
											</div>
											<div class="pd-10 bg-gray-300">
												Flex item 2
											</div>
											<div class="pd-10 bg-gray-400">
												Flex item 3
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card custom-card" id="justcont">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Justify Content</h6>
										<p class="text-muted  card-sub-title">Use justify-content utilities on flexbox containers to change the alignment of flex items on the main axis.</p>
									</div>
									<div>
										<div class="d-flex flex-row justify-content-start bg-light mg-b-20">
											<div class="pd-10 bg-gray-100">
												Flex item 1
											</div>
											<div class="pd-10 bg-gray-300">
												Flex item 2
											</div>
											<div class="pd-10 bg-gray-400">
												Flex item 3
											</div>
										</div>
										<div class="d-flex flex-row justify-content-end bg-light mg-b-20">
											<div class="pd-10 bg-gray-100">
												Flex item 1
											</div>
											<div class="pd-10 bg-gray-300">
												Flex item 2
											</div>
											<div class="pd-10 bg-gray-400">
												Flex item 3
											</div>
										</div>
										<div class="d-flex flex-row justify-content-center bg-light mg-b-20">
											<div class="pd-10 bg-gray-100">
												Flex item 1
											</div>
											<div class="pd-10 bg-gray-300">
												Flex item 2
											</div>
											<div class="pd-10 bg-gray-400">
												Flex item 3
											</div>
										</div>
										<div class="d-flex flex-row justify-content-between bg-light mg-b-20">
											<div class="pd-10 bg-gray-100">
												Flex item 1
											</div>
											<div class="pd-10 bg-gray-300">
												Flex item 2
											</div>
											<div class="pd-10 bg-gray-400">
												Flex item 3
											</div>
										</div>
										<div class="d-flex flex-row justify-content-around bg-light">
											<div class="pd-10 bg-gray-100">
												Flex item 1
											</div>
											<div class="pd-10 bg-gray-300">
												Flex item 2
											</div>
											<div class="pd-10 bg-gray-400">
												Flex item 3
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card custom-card" id="alignitems">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Align Items</h6>
										<p class="text-muted  card-sub-title">Use align-items utilities on flexbox containers to change the alignment of flex items on the cross axis.</p>
									</div>
									<div>
										<div class="d-flex flex-row align-items-start bg-light ht-100 mg-b-20">
											<div class="pd-10 bg-gray-100">
												Flex item 1
											</div>
											<div class="pd-10 bg-gray-300">
												Flex item 2
											</div>
											<div class="pd-10 bg-gray-400">
												Flex item 3
											</div>
										</div>
										<div class="d-flex flex-row align-items-center bg-light ht-100 mg-b-20">
											<div class="pd-10 bg-gray-100">
												Flex item 1
											</div>
											<div class="pd-10 bg-gray-300">
												Flex item 2
											</div>
											<div class="pd-10 bg-gray-400">
												Flex item 3
											</div>
										</div>
										<div class="d-flex flex-row align-items-end bg-light ht-100 mg-b-20">
											<div class="pd-10 bg-gray-100">
												Flex item 1
											</div>
											<div class="pd-10 bg-gray-300">
												Flex item 2
											</div>
											<div class="pd-10 bg-gray-400">
												Flex item 3
											</div>
										</div>
										<div class="d-flex flex-row align-items-stretch bg-light ht-100">
											<div class="pd-10 bg-gray-100">
												Flex item 1
											</div>
											<div class="pd-10 bg-gray-300">
												Flex item 2
											</div>
											<div class="pd-10 bg-gray-400">
												Flex item 3
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card custom-card" id="alignself">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Align Self</h6>
										<p class="text-muted  card-sub-title">Use align-self utilities on flexbox items to individually change their alignment on the cross axis.</p>
									</div>
									<div>
										<div class="d-flex flex-row bg-light ht-100 mg-b-20">
											<div class="pd-10 bg-gray-100 align-self-start">
												Flex item 1
											</div>
											<div class="pd-10 bg-gray-300 align-self-center">
												Flex item 2
											</div>
											<div class="pd-10 bg-gray-400 align-self-end">
												Flex item 3
											</div>
											<div class="pd-10 bg-gray-500 align-self-stretch">
												Flex item 4
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card custom-card" id="fill">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Fill</h6>
										<p class="text-muted  card-sub-title">Use the <code>.flex-fill</code> class on a series of sibling elements to force them into widths equal to their content.</p>
									</div>
									<div>
										<div class="d-flex bg-light">
											<div class="pd-10 bg-gray-100 flex-fill">
												Flex item with a lot of content
											</div>
											<div class="pd-10 bg-gray-300 flex-fill">
												Flex item
											</div>
											<div class="pd-10 bg-gray-400 flex-fill">
												Flex item
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card custom-card" id="grow">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Grow and Shrink</h6>
										<p class="text-muted  card-sub-title">Use <code>.flex-grow</code> utilities to toggle a flex item’s ability to grow to fill available space.</p>
									</div>
									<div>
										<div class="d-flex bg-light">
											<div class="pd-10 bg-gray-100 flex-grow-1">
												Flex item
											</div>
											<div class="pd-10 bg-gray-300">
												Flex item
											</div>
											<div class="pd-10 bg-gray-400">
												Third flex item
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card custom-card" id="automargin">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Auto Margins</h6>
										<p class="text-muted  card-sub-title">Flexbox can do some pretty awesome things when you mix flex alignments with auto margins.</p>
									</div>
									<div>
										<div class="d-flex bg-light">
											<div class="pd-10 bg-gray-100">
												Flex item
											</div>
											<div class="pd-10 bg-gray-300">
												Flex item
											</div>
											<div class="pd-10 bg-gray-400 mg-l-auto">
												Third flex item
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card custom-card" id="order">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Order</h6>
										<p class="text-muted  card-sub-title">Change the visual order of specific flex items with a handful of order utilities.</p>
									</div>
									<div>
										<div class="d-flex bg-light">
											<div class="pd-10 bg-gray-100 order-3">
												First Item
											</div>
											<div class="pd-10 bg-gray-300 order-2">
												Second Item
											</div>
											<div class="pd-10 bg-gray-400 order-1">
												Third Item
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-12 d-none d-xl-block custom-leftnav">
							<div class="main-content-left-components">
								<div class="card custom-card">
									<div class="card-body component-item">
										<nav class="nav flex-column">
											<a class="nav-link" href="#enable">Enable Flex</a>
											<a class="nav-link" href="#direc">Direction</a>
											<a class="nav-link" href="#justcont">Justify Content</a>
											<a class="nav-link" href="#alignitems">Align Items</a>
											<a class="nav-link" href="#alignself">Align Self</a>
											<a class="nav-link" href="#fill">Fill</a>
											<a class="nav-link" href="#grow">Grow and Shrink</a>
											<a class="nav-link" href="#automargin">Auto Margins</a>
											<a class="nav-link" href="#order">Order</a>
										</nav>
									</div>
								</div>
								<div class="card custom-card">
									<div class="card-header custom-card-header">
										<h6 class="card-title mb-0">Project Status</h6>
									</div>
									<div class="">
										<div class="list d-flex align-items-center p-3">
											<span class="peity-donut" data-peity='{ "fill": ["#38d250", "#77778e33"], "innerRadius": 14, "radius": 20 }'>1</span>
											<div class="wrappe ml-3">
												<h6 class="mb-1">Project Planning</h6>
												<div class="d-flex justify-content-between align-items-center">
													<div class="d-flex align-items-center">
														<span class="mb-0 text-muted"><i class="fas fa-check-circle mr-2"></i>100% Completed</span>
													</div>
												</div>
											</div>
										</div>
										<div class="list d-flex align-items-center p-3 border-top">
											<span class="peity-donut" data-peity='{ "fill": ["#38d250", "#77778e33"], "innerRadius": 14, "radius": 20 }'>1</span>
											<div class="wrappe ml-3">
												<h6 class="mb-1">Project Desiging</h6>
												<div class="d-flex justify-content-between align-items-center">
													<div class="d-flex align-items-center">
														<span class="mb-0 text-muted"><i class="fas fa-check-circle mr-2"></i>100% Completed</span>
													</div>
												</div>
											</div>
										</div>
										<div class="list d-flex align-items-center p-3 border-top">
											<span class="peity-donut" data-peity='{ "fill": ["#eb6f33", "#77778e33"], "innerRadius": 14, "radius": 20 }'>4/6</span>
											<div class="wrappe ml-3">
												<h6 class="mb-1">Project Development</h6>
												<div class="d-flex justify-content-between align-items-center">
													<div class="d-flex align-items-center">
														<span class="mb-0 text-muted"><i class="fas fa-spinner mr-2"></i>76% Progress</span>
													</div>
												</div>
											</div>
										</div>
										<div class="list d-flex align-items-center  p-3 border-top">
											<span class="peity-donut" data-peity='{ "fill": ["#ff473d", "#77778e33"], "innerRadius": 14, "radius": 20 }'>1/5</span>
											<div class="wrappe ml-3">
												<h6 class="mb-1">Project Testing</h6>
												<div class="d-flex justify-content-between align-items-center">
													<div class="d-flex align-items-center">
														<span class="mb-0 text-muted"><i class="fas fa-info-circle mr-2"></i>Waiting</span>
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

			 @endsection





		<!-- Peity js-->
<script src="assets/plugins/peity/jquery.peity.min.js"></script>
<script src="assets/js/widgets.js"></script>

