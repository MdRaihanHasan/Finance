﻿@extends('admin.layouts.app')
@section('content')
				<div class="container-fluid">
										<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Spinners</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Spinners</li>
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
						<div class="col-xl-9 col-lg-12">
							<div class="card custom-card" id="bspinner">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Border Spinners</h6>
										<p class="text-muted card-sub-title">Use the border spinners for a lightweight loading indicator.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="spinner-border" role="status">
												<span class="sr-only">Loading...</span>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="spinner7"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="spinner-border" role="status">
	<span class="sr-only">Loading...</span>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#spinner7"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="bcolor">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Border Colors</h6>
										<p class="text-muted card-sub-title">You can use any of our text color utilities on the standard spinner.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div>
												<div class="spinner-border text-primary" role="status">
													<span class="sr-only">Loading...</span>
												</div>
												<div class="spinner-border text-secondary" role="status">
													<span class="sr-only">Loading...</span>
												</div>
												<div class="spinner-border text-success" role="status">
													<span class="sr-only">Loading...</span>
												</div>
												<div class="spinner-border text-danger" role="status">
													<span class="sr-only">Loading...</span>
												</div>
												<div class="spinner-border text-warning" role="status">
													<span class="sr-only">Loading...</span>
												</div>
												<div class="spinner-border text-info" role="status">
													<span class="sr-only">Loading...</span>
												</div>
												<div class="spinner-border text-light" role="status">
													<span class="sr-only">Loading...</span>
												</div>
												<div class="spinner-border text-dark" role="status">
													<span class="sr-only">Loading...</span>
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="spinner1"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="spinner-border text-primary" role="status">
	<span class="sr-only">Loading...</span>
</div>
<div class="spinner-border text-secondary" role="status">
	<span class="sr-only">Loading...</span>
</div>
<div class="spinner-border text-success" role="status">
	<span class="sr-only">Loading...</span>
</div>
<div class="spinner-border text-danger" role="status">
	<span class="sr-only">Loading...</span>
</div>
<div class="spinner-border text-warning" role="status">
	<span class="sr-only">Loading...</span>
</div>
<div class="spinner-border text-info" role="status">
	<span class="sr-only">Loading...</span>
</div>
<div class="spinner-border text-light" role="status">
	<span class="sr-only">Loading...</span>
</div>
<div class="spinner-border text-dark" role="status">
	<span class="sr-only">Loading...</span>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#spinner1"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-4 col-sm-4">
									<div class="card custom-card" id="loaders">
										<div class="card-body">
											<div>
												<h6 class="card-title mb-1">Circle Loader</h6>
												<p class="text-muted card-sub-title">css loading animations</p>
											</div>
											<div class="text-center">
												<div class="lds-circle"><div></div></div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-sm-4">
									<div class="card custom-card" id="loaders1">
										<div class="card-body">
											<div>
												<h6 class="card-title mb-1">Ring Loader</h6>
												<p class="text-muted card-sub-title">css loading animations</p>
											</div>
											<div class="text-center">
												<div class="lds-dual-ring"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-sm-4">
									<div class="card custom-card" id="loaders2">
										<div class="card-body">
											<div>
												<h6 class="card-title mb-1">Lines Loader</h6>
												<p class="text-muted card-sub-title">css loading animations</p>
											</div>
											<div class="text-center">
												<div class="lds-facebook"><div></div><div></div><div></div></div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-sm-4">
									<div class="card custom-card" id="loaders3">
										<div class="card-body">
											<div>
												<h6 class="card-title mb-1">Heart Loader</h6>
												<p class="text-muted card-sub-title">css loading animations</p>
											</div>
											<div class="text-center">
												<div class="lds-heart"><div></div></div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-sm-4">
									<div class="card custom-card" id="loaders4">
										<div class="card-body">
											<div>
												<h6 class="card-title mb-1">Ripple Loader</h6>
												<p class="text-muted card-sub-title">css loading animations</p>
											</div>
											<div class="text-center">
												<div class="lds-ripple"><div></div><div></div></div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-sm-4">
									<div class="card custom-card" id="loaders5">
										<div class="card-body">
											<div>
												<h6 class="card-title mb-1">Spinner Loader</h6>
												<p class="text-muted card-sub-title">css loading animations</p>
											</div>
											<div class="text-center">
												<div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card custom-card" id="gspinner">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Growing Spinner</h6>
										<p class="text-muted card-sub-title">If you don’t fancy a border spinner, switch to the grow spinner. While it doesn’t technically spin, it does repeatedly grow!</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="spinner-grow" role="status">
												<span class="sr-only">Loading...</span>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="spinner2"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="spinner-grow" role="status">
	<span class="sr-only">Loading...</span>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#spinner2"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="gcolor">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Growing Color</h6>
										<p class="text-muted card-sub-title">If you don’t fancy a border spinner, switch to the grow spinner. While it doesn’t technically spin, it does repeatedly grow!</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div>
												<div class="spinner-grow text-primary" role="status">
													<span class="sr-only">Loading...</span>
												</div>
												<div class="spinner-grow text-secondary" role="status">
													<span class="sr-only">Loading...</span>
												</div>
												<div class="spinner-grow text-success" role="status">
													<span class="sr-only">Loading...</span>
												</div>
												<div class="spinner-grow text-danger" role="status">
													<span class="sr-only">Loading...</span>
												</div>
												<div class="spinner-grow text-warning" role="status">
													<span class="sr-only">Loading...</span>
												</div>
												<div class="spinner-grow text-info" role="status">
													<span class="sr-only">Loading...</span>
												</div>
												<div class="spinner-grow text-light" role="status">
													<span class="sr-only">Loading...</span>
												</div>
												<div class="spinner-grow text-dark" role="status">
													<span class="sr-only">Loading...</span>
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="spinner3"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="spinner-grow text-primary" role="status">
	<span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-secondary" role="status">
	<span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-success" role="status">
	<span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-danger" role="status">
	<span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-warning" role="status">
	<span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-info" role="status">
	<span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-light" role="status">
	<span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-dark" role="status">
	<span class="sr-only">Loading...</span>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#spinner3"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="align">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Alignment</h6>
										<p class="text-muted card-sub-title">Use flexbox utilities or text alignment utilities to place spinners exactly where you need them in any situation.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div>
												<div class="text-center mg-b-20">
													<div class="spinner-border" role="status">
														<span class="sr-only">Loading...</span>
													</div>
												</div>
												<div class="text-right">
													<div class="spinner-border" role="status">
														<span class="sr-only">Loading...</span>
													</div>
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="spinner4"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="text-center mg-b-20">
	<div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	</div>
</div>
<div class="text-right">
	<div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#spinner4"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="size">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Size</h6>
										<p class="text-muted card-sub-title">Add <code>.spinner-border-sm</code> and <code>.spinner-grow-sm</code> to make a smaller spinner that can quickly be used within other components.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div>
												<div class="spinner-border spinner-border-sm" role="status">
													<span class="sr-only">Loading...</span>
												</div>
												<div class="spinner-grow spinner-grow-sm" role="status">
													<span class="sr-only">Loading...</span>
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="spinner5"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="spinner-border spinner-border-sm" role="status">
	<span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow spinner-grow-sm" role="status">
	<span class="sr-only">Loading...</span>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#spinner5"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="buton">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Button with Spinners</h6>
										<p class="text-muted card-sub-title">Use spinners within buttons to indicate an action is currently processing or taking place. You may also swap the text out of the spinner element and utilize button text as needed.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div>
												<button class="btn ripple btn-primary" type="button"><span aria-hidden="true" class="spinner-border spinner-border-sm" role="status"></span> <span class="sr-only">Loading...</span></button>
												<button class="btn ripple btn-secondary" disabled="" type="button"><span aria-hidden="true" class="spinner-border spinner-border-sm" role="status"></span> Loading...</button>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="spinner6"><pre><code class="language-markup"><script type="html-dashlead/script"><button class="btn ripple btn-primary" type="button"><span aria-hidden="true" class="spinner-border spinner-border-sm" role="status"></span> <span class="sr-only">Loading...</span></button>
<button class="btn ripple btn-secondary" disabled type="button"><span aria-hidden="true" class="spinner-border spinner-border-sm" role="status"></span> Loading...</button>
</script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#spinner6"><i class="fa fa-clipboard"></i></div>
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
											<a class="nav-link" href="#bspinner">Border Spinners</a>
											<a class="nav-link" href="#loaders">Loaders</a>
											<a class="nav-link" href="#gspinner">Growing Spinner</a>
											<a class="nav-link" href="#gcolor">Growing Color</a>
											<a class="nav-link" href="#align">Alignment</a>
											<a class="nav-link" href="#size">Size</a>
											<a class="nav-link" href="#buton">Button with Spinners</a>
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





		<!-- Jquery.mCustomScrollbar js-->
<script src="assets/plugins/jquery.mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- Clipboard js-->
<script src="assets/plugins/clipboard/clipboard.min.js"></script>
<script src="assets/plugins/clipboard/clipboard.js"></script>
<!-- Prism js-->
<script src="assets/plugins/prism/prism.js"></script>

