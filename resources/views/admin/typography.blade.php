﻿@extends('admin.layouts.app')
@section('content')
				<div class="container-fluid">
										<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Typography</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Typography</li>
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
							<div class="card custom-card" id="heading">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Headings</h6>
										<p class="text-muted card-sub-title">All HTML headings, <code>h1</code> through <code>h6</code>, are available.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="row row-xs">
												<div class="col-sm-6 col-md-6">
													<h1>h1 Heading</h1>
													<h2>h2 Heading</h2>
													<h3>h3 Heading</h3>
													<h4>h4 Heading</h4>
													<h5>h5 Heading</h5>
													<h6>h6 Heading</h6>
												</div>
												<div class="col-sm-6 col-md-6 mg-t-10 mg-sm-t-0">
													<p class="h1 text-primary">h1 Heading</p>
													<p class="h2 text-secondary">h2 Heading</p>
													<p class="h3 text-success">h3 Heading</p>
													<p class="h4 text-danger">h4 Heading</p>
													<p class="h5 text-info">h5 Heading</p>
													<p class="h6 text-warning">h6 Heading</p>
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="typoraph1"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="row row-xs">
	<div class="col-sm-6 col-md-6">
		<h1>h1 Heading</h1>
		<h2>h2 Heading</h2>
		<h3>h3 Heading</h3>
		<h4>h4 Heading</h4>
		<h5>h5 Heading</h5>
		<h6>h6 Heading</h6>
	</div>

	<div class="col-sm-6 col-md-6 mg-t-10 mg-sm-t-0">
		<p class="h1 text-primary">h1 Heading</p>
		<p class="h2 text-secondary">h2 Heading</p>
		<p class="h3 text-success">h3 Heading</p>
		<p class="h4 text-danger">h4 Heading</p>
		<p class="h5 text-info">h5 Heading</p>
		<p class="h6 text-warning">h6 Heading</p>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#typoraph1"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="display">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Display headings</h6>
										<p class="text-muted card-sub-title">you need a heading to stand out, consider using a display heading—a larger, slightly more opinionated heading style.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<h1 class="display-1">Display 1</h1>
											<h1 class="display-2">Display 2</h1>
											<h1 class="display-3">Display 3</h1>
											<h1 class="display-4">Display 4</h1>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="typoraph2"><pre><code class="language-markup"><script type="html-dashlead/script"><h1 class="display-1">Display 1</h1>
<h1 class="display-2">Display 2</h1>
<h1 class="display-3">Display 3</h1>
<h1 class="display-4">Display 4</h1></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#typoraph2"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="lead">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Lead</h6>
										<p class="text-muted card-sub-title">Make a paragraph stand out by adding <code>.lead</code>.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<p class="lead mb-0">
											 Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
											</p>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="typoraph3"><pre><code class="language-markup"><script type="html-dashlead/script"><p class="lead mb-0">
 Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
</p></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#typoraph3"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="linetext">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Inline text elements</h6>
										<p class="text-muted card-sub-title">Styling for common inline HTML5 elements.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<p>You can use the mark tag to <mark>highlight</mark> text.</p>
											<p><del>This line of text is meant to be treated as deleted text.</del></p>
											<p><s>This line of text is meant to be treated as no longer accurate.</s></p>
											<p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
											<p><u>This line of text will render as underlined</u></p>
											<p><small>This line of text is meant to be treated as fine print.</small></p>
											<p><strong>This line rendered as bold text.</strong></p>
											<p class="mb-0"><em>This line rendered as italicized text.</em></p>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="typoraph4"><pre><code class="language-markup"><script type="html-dashlead/script"><p>You can use the mark tag to <mark>highlight</mark> text.</p>
<p><del>This line of text is meant to be treated as deleted text.</del></p>
<p><s>This line of text is meant to be treated as no longer accurate.</s></p>
<p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
<p><u>This line of text will render as underlined</u></p>
<p><small>This line of text is meant to be treated as fine print.</small></p>
<p><strong>This line rendered as bold text.</strong></p>
<p class="mb-0"><em>This line rendered as italicized text.</em></p></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#typoraph4"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="blockquotes">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Blockquotes</h6>
										<p class="text-muted card-sub-title">For quoting blocks of content from another source within your document. <code>.blockquote</code> around any HTML as the quote.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<blockquote class="blockquote mb-0">
											  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
											</blockquote>
										</div>
	<!-- Prism Precode -->
	<figure class="highlight clip-widget" id="typoraph5"><pre><code class="language-markup"><script type="html-dashlead/script"><blockquote class="blockquote mb-0">
	  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
	</blockquote></script></code></pre>
		<div class="clipboard-icon" data-clipboard-target="#typoraph5"><i class="fa fa-clipboard"></i></div>
	</figure>
	<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="aligment">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Alignment</h6>
										<p class="text-muted card-sub-title">Use text utilities as needed to change the alignment of your blockquote.</p>
									</div>
									<div class="text-wrap mb-4">
										<div class="example">
											<blockquote class="blockquote text-center">
											  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
											  <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
											</blockquote>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="typoraph6"><pre><code class="language-markup"><script type="html-dashlead/script"><blockquote class="blockquote text-center">
  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
  <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
</blockquote>
</script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#typoraph6"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
									<div class="text-wrap">
										<div class="example">
											<blockquote class="blockquote text-right mb-0">
											  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
											  <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
											</blockquote>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="typoraph7"><pre><code class="language-markup"><script type="html-dashlead/script"><blockquote class="blockquote text-right mb-0">
  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
  <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
</blockquote></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#typoraph7"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="fontsize">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Font Size</h6>
										<p class="text-muted card-sub-title">You can set a font size instantly to an element by using the following utilities classes.</p>
									</div>
									<div class="table-responsive">
										<table class="table main-table-reference mt-0 mb-0">
											<thead>
												<tr>
													<th class="wd-30p">Class</th>
													<th class="wd-70p">Size</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code>.tx-[size]</code></td>
													<td>8 | 9 | 10 | 11 | 12 | 13 | 14 | 15 | 16</td>
												</tr>
												<tr>
													<td><code>.tx-[size]</code></td>
													<td>18 | 20 | 22 | 24 | ... | 140 (step of 2)</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="card custom-card" id="fontweight">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Font Weight</h6>
										<p class="text-muted card-sub-title">You can set a font weight instantly to an element by using the following utilities classes.</p>
									</div>
									<div class="table-responsive">
										<table class="table main-table-reference mt-0 mb-0">
											<thead>
												<tr>
													<th class="wd-30p">Class</th>
													<th class="wd-70p">Weight</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code>.tx-[weight]</code></td>
													<td>bold | semibold | medium | normal | light | thin | xthin</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="card custom-card" id="fontfamily">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Font Family</h6>
										<p class="text-muted card-sub-title">You can set a font family instantly to an element by using the following utilities classes.</p>
									</div>
									<div class="table-responsive">
										<table class="table main-table-reference mt-0 mb-0">
											<thead>
												<tr>
													<th class="wd-30p">Class</th>
													<th class="wd-70p">Family</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code>.tx-[family]</code></td>
													<td>sserif | roboto</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="card custom-card" id="fontcolor">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Font Color</h6>
										<p class="text-muted card-sub-title">You can set a font color instantly to an element by using the following utilities classes.</p>
									</div>
									<div class="table-responsive">
										<table class="table main-table-reference mt-0 mb-0">
											<thead>
												<tr>
													<th class="wd-30p">Class</th>
													<th class="wd-70p">Color</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code>.tx-[color]</code></td>
													<td>primary | success | warning | danger | info | indigo | purple | orange | teal | pink | black | white | inverse</td>
												</tr>
												<tr>
													<td><code>.tx-gray-[num]</code></td>
													<td>100 | 200 | 300 | 400 | 500 | 600 | 700 | 800 | 900</td>
												</tr>
												<tr>
													<td><code>.tx-white-[transparency]</code></td>
													<td>2 | 3 | 4 | 5 | 6 | 7 | 8</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="card custom-card" id="fontspace">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Font Spacing</h6>
										<p class="text-muted card-sub-title">You can set a font spacing instantly to an element by using the following utilities classes.</p>
									</div>
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
													<td><code>.tx-spacing-[value]</code></td>
													<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8</td>
												</tr>
												<tr>
													<td><code>.tx-spacing--[value]</code></td>
													<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 ( negative spacing result )</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="card custom-card" id="lineh">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Line Height</h6>
										<p class="text-muted card-sub-title">You can set a line height instantly to an element by using the following utilities classes.</p>
									</div>
									<div class="table-responsive">
										<table class="table main-table-reference mt-0">
											<thead>
												<tr>
													<th class="wd-30p">Class</th>
													<th class="wd-70p">Value</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code>.lh-[value]</code></td>
													<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10 | 11 | 12 | 13 | 14 | 15</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="table-responsive">
										<table class="table main-table-reference mt-0">
											<thead>
												<tr>
													<th class="wd-30p">Class</th>
													<th class="wd-20p">Viewport</th>
													<th class="wd-50p">Value</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code>.lh-[viewport]-[value]</code></td>
													<td>xs | sm | md | lg | xl</td>
													<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10 | 11 | 12 | 13 | 14 | 15</td>
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
											<a class="nav-link" href="#heading">Headings</a>
											<a class="nav-link" href="#display">Display headings</a>
											<a class="nav-link" href="#lead">Lead</a>
											<a class="nav-link" href="#linetext">Inline text elements</a>
											<a class="nav-link" href="#blockquotes">Blockquotes</a>
											<a class="nav-link" href="#aligment">Alignment</a>
											<a class="nav-link" href="#fontsize">Font Size</a>
											<a class="nav-link" href="#fontweight">Font Weight</a>
											<a class="nav-link" href="#fontfamily">Font Family</a>
											<a class="nav-link" href="#fontcolor">Font Color</a>
											<a class="nav-link" href="#fontspace">Font Spacing</a>
											<a class="nav-link" href="#lineh">Line Height</a>
										</nav>
									</div>
								</div>
								<div class="card custom-card our-team">
									<div class="card-body">
										<div class="picture avatar-lg online text-center">
											<img alt="avatar" class="rounded-circle" src="assets/img/users/7.jpg">
										</div>
										<div class="text-center mt-3">
											<h5 class="pro-user-username text-dark mt-2 mb-0">Joyce Chua</h5>
											<p class="pro-user-desc text-muted mb-1">Web Developer</p>
											<p class="user-info-rating">
												<a href="#"><i class="fa fa-star text-warning"> </i></a>
												<a href="#"><i class="fa fa-star text-warning"> </i></a>
												<a href="#"><i class="fa fa-star text-warning"> </i></a>
												<a href="#"><i class="far fa-star text-warning"> </i></a>
												<a href="#"><i class="far fa-star text-warning"> </i></a>
											</p>
										</div>
										<div class="contact-info mb-0 text-center">
											<a href="#" class="contact-icon border text-primary"><i class="fab fa-facebook-f"></i></a>
											<a href="#" class="contact-icon border text-primary"><i class="fab fa-twitter"></i></a>
											<a href="#" class="contact-icon border text-primary"><i class="fab fa-google"></i></a>
											<a href="#" class="contact-icon border text-primary"><i class="fab fa-dribbble"></i></a>
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
