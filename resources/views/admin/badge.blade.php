﻿@extends('admin.layouts.app')
@section('content')
				<div class="container-fluid">
										<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Badges</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Badges</li>
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
										<h6 class="card-title mb-1">Basic Example</h6>
										<p class="text-muted card-sub-title">Badges scale to match the size of the immediate parent element by using relative font sizing and em units..</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<h1>Heading 01 <span class="badge badge-dark">New</span></h1>
											<h2>Heading 02 <span class="badge badge-dark">New</span></h2>
											<h3>Heading 03 <span class="badge badge-dark">New</span></h3>
											<h4>Heading 04 <span class="badge badge-dark">New</span></h4>
											<h5>Heading 05 <span class="badge badge-dark">New</span></h5>
											<h6>Heading 06 <span class="badge badge-dark">New</span></h6>
										</div>
	<!-- Prism Precode -->
	<figure class="highlight clip-widget" id="badge1"><pre><code class="language-markup"><script type="html-dashlead/script"><h1>Heading 01 <span class="badge badge-dark">New</span></h1>
<h2>Heading 02 <span class="badge badge-dark">New</span></h2>
<h3>Heading 03 <span class="badge badge-dark">New</span></h3>
<h4>Heading 04 <span class="badge badge-dark">New</span></h4>
<h5>Heading 05 <span class="badge badge-dark">New</span></h5>
<h6>Heading 06 <span class="badge badge-dark">New</span></h6></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#badge1"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="contextual">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Contextual Variations</h6>
										<p class="text-muted card-sub-title">Add any of the below mentioned modifier classes to change the appearance of a badge.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div>
												<span class="badge badge-primary">Primary</span>
												<span class="badge badge-secondary">Secondary</span>
												<span class="badge badge-success">Success</span>
												<span class="badge badge-danger">Danger</span>
												<span class="badge badge-warning">Warning</span>
												<span class="badge badge-info">Info</span>
												<span class="badge badge-light">Light</span>
												<span class="badge badge-dark">Dark</span>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="badge2"><pre><code class="language-markup"><script type="html-dashlead/script"><span class="badge badge-primary">Primary</span>
<span class="badge badge-secondary">Secondary</span>
<span class="badge badge-success">Success</span>
<span class="badge badge-danger">Danger</span>
<span class="badge badge-warning">Warning</span>
<span class="badge badge-info">Info</span>
<span class="badge badge-light">Light</span>
<span class="badge badge-dark">Dark</span></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#badge2"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="pill">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Pill Badges</h6>
										<p class="text-muted card-sub-title">Use the <code>.badge-pill</code> modifier class to make badges more rounded.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div>
												<span class="badge badge-pill badge-primary">Primary</span>
												<span class="badge badge-pill badge-secondary">Secondary</span>
												<span class="badge badge-pill badge-success">Success</span>
												<span class="badge badge-pill badge-danger">Danger</span>
												<span class="badge badge-pill badge-warning">Warning</span>
												<span class="badge badge-pill badge-info">Info</span>
												<span class="badge badge-pill badge-light">Light</span>
												<span class="badge badge-pill badge-dark">Dark</span>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="badge3"><pre><code class="language-markup"><script type="html-dashlead/script"><span class="badge badge-pill badge-primary">Primary</span>
<span class="badge badge-pill badge-secondary">Secondary</span>
<span class="badge badge-pill badge-success">Success</span>
<span class="badge badge-pill badge-danger">Danger</span>
<span class="badge badge-pill badge-warning">Warning</span>
<span class="badge badge-pill badge-info">Info</span>
<span class="badge badge-pill badge-light">Light</span>
<span class="badge badge-pill badge-dark">Dark</span></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#badge3"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="link">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Link Badges</h6>
										<p class="text-muted card-sub-title">Using the contextual badge classes on an element quickly provide actionable badges with hover and focus states.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div>
												<a class="badge badge-primary" href="#">Primary</a>
												<a class="badge badge-secondary" href="#">Secondary</a>
												<a class="badge badge-success" href="#">Success</a>
												<a class="badge badge-danger" href="#">Danger</a>
												<a class="badge badge-warning" href="#">Warning</a>
												<a class="badge badge-info" href="#">Info</a>
												<a class="badge badge-light" href="#">Light</a>
												<a class="badge badge-dark" href="#">Dark</a>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="badge4"><pre><code class="language-markup"><script type="html-dashlead/script"><a class="badge badge-primary" href="#">Primary</a>
<a class="badge badge-secondary" href="#">Secondary</a>
<a class="badge badge-success" href="#">Success</a>
<a class="badge badge-danger" href="#">Danger</a>
<a class="badge badge-warning" href="#">Warning</a>
<a class="badge badge-info" href="#">Info</a>
<a class="badge badge-light" href="#">Light</a>
<a class="badge badge-dark" href="#">Dark</a></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#badge4"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="buttons">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Buttons With Badges</h6>
										<p class="text-muted card-sub-title">Badges can be used as part of links or buttons to provide a counter.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="btn-list">
												<button type="button" class="btn ripple btn-primary">
												  Notifications <span class="badge badge-light ml-2">4</span>
												</button>
												<button type="button" class="btn ripple btn-secondary">
												  Notifications <span class="badge badge-dark ml-2">78</span>
												</button>
												<button type="button" class="btn ripple btn-success">
												  Notifications <span class="badge badge-danger ml-2">12</span>
												</button>
												<button type="button" class="btn ripple btn-info">
												  Notifications <span class="badge badge-warning ml-2">67</span>
												</button>
												<button type="button" class="btn ripple btn-danger">
												  Notifications <span class="badge badge-primary ml-2">45</span>
												</button>
												<button type="button" class="btn ripple btn-warning">
												  Notifications <span class="badge badge-info ml-2">120</span>
												</button>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="badge5"><pre><code class="language-markup"><script type="html-dashlead/script"><button type="button" class="btn ripple btn-primary">
  Notifications <span class="badge badge-light">4</span>
</button>
<button type="button" class="btn ripple btn-secondary">
  Notifications <span class="badge badge-dark">78</span>
</button>
<button type="button" class="btn ripple btn-success">
  Notifications <span class="badge badge-danger">12</span>
</button>
<button type="button" class="btn ripple btn-info">
  Notifications <span class="badge badge-warning">67</span>
</button>
<button type="button" class="btn ripple btn-danger">
  Notifications <span class="badge badge-primary">45</span>
</button>
<button type="button" class="btn ripple btn-warning">
  Notifications <span class="badge badge-info">120</span>
</button></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#badge5"><i class="fa fa-clipboard"></i></div>
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
											<a class="nav-link" href="#basic">Basic</a>
											<a class="nav-link" href="#contextual">Contextual Badges</a>
											<a class="nav-link" href="#pill">Pill Badges</a>
											<a class="nav-link" href="#link">Link Badges</a>
											<a class="nav-link" href="#buttons">Buttons With Badges</a>
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






