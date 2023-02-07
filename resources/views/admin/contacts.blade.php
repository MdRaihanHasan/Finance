﻿@extends('admin.layouts.app')
@section('content')
				<div class="container-fluid">
										<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Contacts</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Apps</a></li>
								<li class="breadcrumb-item active" aria-current="page">Contacts</li>
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
						<div class="col-sm-12 col-md-5 col-xl-4">
							<div class="card custom-card">
								<div class="">
									<div class="main-content-app main-content-contacts pt-0">
										<div class="main-content-left main-content-left-contacts">
											<nav class="nav main-nav-line main-nav-line-chat pt-3 pl-3">
												<a class="nav-link active" data-toggle="tab" href="">All Contacts</a>
												<a class="nav-link" data-toggle="tab" href="">Favorites</a>
											</nav>
											<div class="main-contacts-list" id="mainContactList">
												<div class="main-contact-label">
													A
												</div>
												<div class="main-contact-item selected">
													<div class="main-img-user online"><img alt="avatar" src="assets/img/users/2.jpg"></div>
													<div class="main-contact-body">
														<h6>Abigail Johnson</h6><span class="phone">+1-234-567-890</span>
													</div>
													<a class="main-contact-star" href="">
														<i class="fe fe-star mr-1 text-warning"></i>
														<i class="fe fe-edit-2 mr-1"></i>
														<i class="fe fe-more-vertical"></i>
													</a>
												</div>
												<div class="main-contact-item">
													<div class="main-img-user"><img alt="avatar" src="assets/img/users/3.jpg"></div>
													<div class="main-contact-body">
														<h6>Archie Cantones</h6><span>archie@cantones.com</span>
													</div>
													<a class="main-contact-star" href="">
														<i class="fe fe-star mr-1"></i>
														<i class="fe fe-edit-2 mr-1"></i>
														<i class="fe fe-more-vertical"></i>
													</a>
												</div>
												<div class="main-contact-item">
													<div class="main-avatar online">
														A
													</div>
													<div class="main-contact-body">
														<h6>Allan Rey Palban</h6><span>allanr@palban.com</span>
													</div>
													<a class="main-contact-star" href="">
														<i class="fe fe-star mr-1"></i>
														<i class="fe fe-edit-2 mr-1"></i>
														<i class="fe fe-more-vertical"></i>
													</a>
												</div>
												<div class="main-contact-item">
													<div class="main-avatar bg-secondary">
														A
													</div>
													<div class="main-contact-body">
														<h6>Aileen Mante</h6><span>+1-234-567-890</span>
													</div>
													<a class="main-contact-star" href="">
														<i class="fe fe-star mr-1"></i>
														<i class="fe fe-edit-2 mr-1"></i>
														<i class="fe fe-more-vertical"></i>
													</a>
												</div>
												<div class="main-contact-label">
													B
												</div>
												<div class="main-contact-item">
													<div class="main-img-user"><img alt="avatar" src="assets/img/users/4.jpg"></div>
													<div class="main-contact-body">
														<h6>Brandon Dilao</h6><span>+1-234-567-890</span>
													</div>
													<a class="main-contact-star" href="">
														<i class="fe fe-star mr-1"></i>
														<i class="fe fe-edit-2 mr-1"></i>
														<i class="fe fe-more-vertical"></i>
													</a>
												</div>
												<div class="main-contact-item">
													<div class="main-img-user online"><img alt="avatar" src="assets/img/users/5.jpg"></div>
													<div class="main-contact-body">
														<h6>Britney Labares</h6><span>+1-234-567-890</span>
													</div>
													<a class="main-contact-star" href="">
														<i class="fe fe-star mr-1"></i>
														<i class="fe fe-edit-2 mr-1"></i>
														<i class="fe fe-more-vertical"></i>
													</a>
												</div>
												<div class="main-contact-item">
													<div class="main-avatar bg-danger">
														B
													</div>
													<div class="main-contact-body">
														<h6>Brateyley Cruz</h6><span>+1-234-567-890</span>
													</div>
													<a class="main-contact-star" href="">
														<i class="fe fe-star mr-1"></i>
														<i class="fe fe-edit-2 mr-1"></i>
														<i class="fe fe-more-vertical"></i>
													</a>
												</div>
												<div class="main-contact-label">
													C
												</div>
												<div class="main-contact-item">
													<div class="main-img-user"><img alt="avatar" src="assets/img/users/6.jpg"></div>
													<div class="main-contact-body">
														<h6>Camille Audrey</h6><span>+1-234-567-890</span>
													</div>
													<a class="main-contact-star" href="">
														<i class="fe fe-star mr-1"></i>
														<i class="fe fe-edit-2 mr-1"></i>
														<i class="fe fe-more-vertical"></i>
													</a>
												</div>
												<div class="main-contact-item">
													<div class="main-img-user online"><img alt="avatar" src="assets/img/users/7.jpg"></div>
													<div class="main-contact-body">
														<h6>Christian Lerio</h6><span>+1-234-567-890</span>
													</div>
													<a class="main-contact-star" href="">
														<i class="fe fe-star mr-1"></i>
														<i class="fe fe-edit-2 mr-1"></i>
														<i class="fe fe-more-vertical"></i>
													</a>
												</div>
												<div class="main-contact-item">
													<div class="main-img-user online"><img alt="avatar" src="assets/img/users/8.jpg"></div>
													<div class="main-contact-body">
														<h6>Christopher Segovia</h6><span>+1-234-567-890</span>
													</div>
													<a class="main-contact-star" href="">
														<i class="fe fe-star mr-1"></i>
														<i class="fe fe-edit-2 mr-1"></i>
														<i class="fe fe-more-vertical"></i>
													</a>
												</div>
												<div class="main-contact-label">
													D
												</div>
												<div class="main-contact-item">
													<div class="main-img-user online"><img alt="avatar" src="assets/img/users/9.jpg"></div>
													<div class="main-contact-body">
														<h6>Darius Clayton</h6><span>+1-234-567-890</span>
													</div>
													<a class="main-contact-star" href="">
														<i class="fe fe-star mr-1"></i>
														<i class="fe fe-edit-2 mr-1"></i>
														<i class="fe fe-more-vertical"></i>
													</a>
												</div>
												<div class="main-contact-item">
													<div class="main-img-user"><img alt="avatar" src="assets/img/users/10.jpg"></div>
													<div class="main-contact-body">
														<h6>Dyanne Aceron</h6><span>+1-234-567-890</span>
													</div>
													<a class="main-contact-star" href="">
														<i class="fe fe-star mr-1"></i>
														<i class="fe fe-edit-2 mr-1"></i>
														<i class="fe fe-more-vertical"></i>
													</a>
												</div>
												<div class="main-contact-item">
													<div class="main-img-user online"><img alt="avatar" src="assets/img/users/11.jpg"></div>
													<div class="main-contact-body">
														<h6>Divina Gracia</h6><span>+1-234-567-890</span>
													</div>
													<a class="main-contact-star" href="">
														<i class="fe fe-star mr-1"></i>
														<i class="fe fe-edit-2 mr-1"></i>
														<i class="fe fe-more-vertical"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-7 col-xl-8">
							<div class="card custom-card">
								<div class="">
									<div class="main-content-body main-content-body-contacts">
										<div class="main-contact-info-header pt-3">
											<div class="media">
												<div class="main-img-user">
													<img alt="avatar" src="assets/img/users/1.jpg"> <a href=""><i class="fe fe-camera"></i></a>
												</div>
												<div class="media-body">
													<h4>Sonia Taylor</h4>
													<p>Web Designer</p>
													<nav class="contact-info">
														<a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="Call"><i class="fe fe-phone"></i></a>
														<a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="Video"><i class="fe fe-video"></i></a>
														<a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="message"><i class="fe fe-message-square"></i></a>
														<a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="Add to Group"><i class="fe fe-user-plus"></i></a>
														<a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="Block"><i class="fe fe-slash"></i></a>
													</nav>
												</div>
											</div>
											<div class="main-contact-action btn-list pt-3 pr-3">
												<a href="#" class="btn ripple btn-primary text-white btn-icon" data-placement="top" data-toggle="tooltip" title="Edit Profile"><i class="fe fe-edit"></i></a>
												<a href="#" class="btn ripple btn-secondary text-white btn-icon" data-placement="top" data-toggle="tooltip" title="Delete Profile"><i class="fe fe-trash-2"></i></a>
											</div>
										</div>
										<div class="main-contact-info-body">
											<div>
												<h6>Biography</h6>
												<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
												<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
											</div>
											<div class="media-list pb-lg-0">
												<div class="media">
													<div class="media-body">
														<div>
															<label>Work</label> <span class="tx-medium">+1 (234) 567 8901</span>
														</div>
														<div>
															<label>Personal</label> <span class="tx-medium">+1 (498) 021 0090</span>
														</div>
													</div>
												</div>
												<div class="media">
													<div class="media-body">
														<div>
															<label>Gmail Account</label> <span class="tx-medium">sonia.taylor@gmail.com</span>
														</div>
														<div>
															<label>Other Account</label> <span class="tx-medium">me@Spruko .me</span>
														</div>
													</div>
												</div>
												<div class="media">
													<div class="media-body">
														<div>
															<label>Current Address</label> <span class="tx-medium">012 Dashboard Apartments, San Francisco, California 13245</span>
														</div>
													</div>
												</div>
												<div class="media mb-0">
													<div class="media-body">
														<div>
															<label>Call History</label> <span class="tx-medium">Duration of last call: 2m 32sec</span>
														</div>
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
			<!-- End  main-content-->
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

                    <!-- Contact js-->
            <script src="assets/js/contacts.js"></script>
			 @endsection






