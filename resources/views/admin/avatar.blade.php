@extends('admin.layouts.app')
@section('content')
				<div class="container-fluid">
										<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Avatars</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Elementss</a></li>
								<li class="breadcrumb-item active" aria-current="page">Avatars</li>
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
							<div class="card custom-card" id="sizes">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Avatar Sizes</h6>
										<p class="text-muted card-sub-title">An avatar can have different sizes like larger and smaller avatar.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="demo-avatar-group">
												<div class="main-img-user avatar-xs">
													<img alt="avatar" class="rounded-circle" src="assets/img/users/2.jpg">
												</div>
												<div class="main-img-user avatar-sm">
													<img alt="avatar" class="rounded-circle" src="assets/img/users/3.jpg">
												</div>
												<div class="main-img-user">
													<img alt="avatar" class="rounded-circle" src="assets/img/users/4.jpg">
												</div>
												<div class="main-img-user avatar-md">
													<img alt="avatar" class="rounded-circle" src="assets/img/users/5.jpg">
												</div>
												<div class="main-img-user avatar-lg">
													<img alt="avatar" class="rounded-circle" src="assets/img/users/6.jpg">
												</div>
												<div class="main-img-user avatar-xl d-none d-sm-block">
													<img alt="avatar" class="rounded-circle" src="assets/img/users/7.jpg">
												</div>
												<div class="main-img-user avatar-xxl d-none d-sm-block">
													<img alt="avatar" class="rounded-circle" src="assets/img/users/8.jpg">
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="avatar1"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="demo-avatar-group">
	<div class="main-img-user avatar-xs">
		<img alt="avatar" class="rounded-circle" src="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Dark/assets/img/users/2.jpg">
	</div>
	<div class="main-img-user avatar-sm">
		<img alt="avatar" class="rounded-circle" src="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Dark/assets/img/users/3.jpg">
	</div>
	<div class="main-img-user">
		<img alt="avatar" class="rounded-circle" src="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Dark/assets/img/users/4.jpg">
	</div>
	<div class="main-img-user avatar-md">
		<img alt="avatar" class="rounded-circle" src="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Dark/assets/img/users/5.jpg">
	</div>
	<div class="main-img-user avatar-lg">
		<img alt="avatar" class="rounded-circle" src="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Dark/assets/img/users/6.jpg">
	</div>
	<div class="main-img-user avatar-xl d-none d-sm-block">
		<img alt="avatar" class="rounded-circle" src="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Dark/assets/img/users/7.jpg">
	</div>
	<div class="main-img-user avatar-xxl d-none d-sm-block">
		<img alt="avatar" class="rounded-circle" src="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Dark/assets/img/users/8.jpg">
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#avatar1"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="shapes">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Avatar Shapes</h6>
										<p class="text-muted card-sub-title">An avatar can have different shapes like square and round, radius avatars.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="demo-avatar-group">
												<div class="main-img-user avatar-md">
													<img alt="avatar" class="rounded-circle" src="assets/img/users/4.jpg">
												</div>
												<div class="main-img-user avatar-md">
													<img alt="avatar" class="square" src="assets/img/users/5.jpg">
												</div>
												<div class="main-img-user avatar-md">
													<img alt="avatar" class="radius" src="assets/img/users/6.jpg">
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="avatar2"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="demo-avatar-group">
	<div class="main-img-user avatar-md">
		<img alt="avatar" class="rounded-circle" src="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Dark/assets/img/users/4.jpg">
	</div>
	<div class="main-img-user avatar-md">
		<img alt="avatar" class="square" src="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Dark/assets/img/users/5.jpg">
	</div>
	<div class="main-img-user avatar-md">
		<img alt="avatar" class="radius" src="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Dark/assets/img/users/6.jpg">
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#avatar2"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="initials">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Initials Avatars</h6>
										<p class="text-muted card-sub-title">An avatar can have a temporary use of user's initial name while their photos are not yet available.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="demo-avatar-group avatar-list">
												<div class="avatar avatar-xs">
													A
												</div>
												<div class="avatar avatar-sm bg-secondary">
													U
												</div>
												<div class="avatar bg-info">
													C
												</div>
												<div class="avatar avatar-md bg-success">
													X
												</div>
												<div class="avatar avatar-lg bg-warning">
													E
												</div>
												<div class="avatar avatar-xl d-none d-sm-flex bg-danger">
													M
												</div>
												<div class="avatar avatar-xxl d-none d-sm-flex bg-pink">
													NB
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="avatar3"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="demo-avatar-group avatar-list">
	<div class="avatar avatar-xs">
		A
	</div>
	<div class="avatar avatar-sm bg-secondary">
		U
	</div>
	<div class="avatar bg-info">
		C
	</div>
	<div class="avatar avatar-md bg-success">
		X
	</div>
	<div class="avatar avatar-lg bg-warning">
		E
	</div>
	<div class="avatar avatar-xl d-none d-sm-flex bg-danger">
		M
	</div>
	<div class="avatar avatar-xxl d-none d-sm-flex bg-pink">
		NB
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#avatar3"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="status">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Status Indicator</h6>
										<p class="text-muted card-sub-title">An avatar can have a status indicator to indicate users availability.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="demo-avatar-group">
												<div class="main-avatar avatar online">
													<img alt="avatar" class="rounded-circle avatar" src="assets/img/users/9.jpg">
												</div>
												<div class="main-avatar avatar-md offline">
													eb
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="avatar4"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="demo-avatar-group">
	<div class="main-avatar avatar online">
		<img alt="avatar" class="rounded-circle avatar" src="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Dark/assets/img/users/9.jpg">
	</div>
	<div class="main-avatar avatar-md offline">
		eb
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#avatar4"><i class="fa fa-clipboard"></i></div>
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
											<a class="nav-link" href="#sizes">Avatar Sizes</a>
											<a class="nav-link" href="#shapes">Avatar Shapes</a>
											<a class="nav-link" href="#initials">Avatar Initials</a>
											<a class="nav-link" href="#status">Status Indicator Avatars</a>
										</nav>
									</div>
								</div>
								<div class="card custom-card">
									<div class="card-body user-card text-center">
										<div class="main-img-user avatar-lg online text-center">
											<img alt="avatar" class="rounded-circle" src="assets/img/users/5.jpg">
										</div>
										<div class="mt-2">
											<h5 class="mb-1">Reynante</h5>
											<p class="mb-1 tx-inverse">Web Developer</p>
											<span class="text-muted"><i class="far fa-check-circle text-success mr-1"></i>Verified</span>
										</div>
										<a href="#" class="btn ripple btn-primary btn-sm mt-3">View Profile</a>
									</div>
								</div>
								<div class="card custom-card">
									<div class="card-body user-card text-center">
										<div class="main-img-user avatar-lg online text-center">
											<img alt="avatar" class="rounded-circle" src="assets/img/users/4.jpg">
										</div>
										<div class="mt-2">
											<h5 class="mb-1">Joyce Chua</h5>
											<p class="mb-1 tx-inverse">Team Leader</p>
											<span class="text-muted"><i class="far fa-check-circle text-success mr-1"></i>Verified</span>
										</div>
										<a href="#" class="btn ripple btn-secondary btn-sm mt-3">View Profile</a>
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

