<header class="navigation bg-tertiary">
	<nav class="navbar navbar-expand-xl navbar-light text-center py-3">
		<div class="container">
			<a class="navbar-brand" href="/">
				<img loading="prelaod" decoding="async" class="img-fluid" width="160" src="{{ asset('')}}frontend/images/logo.png" alt="Wallet">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mx-auto mb-2 mb-lg-0">
					<li class="nav-item"> <a class="nav-link" href="/">Home</a>
					</li>
					<li class="nav-item "> <a class="nav-link" href="about">About</a>
					</li>
					<li class="nav-item "> <a class="nav-link" href="how-it-works">How It Works</a>
					</li>
					<li class="nav-item "> <a class="nav-link" href="services">Services</a>
					</li>
					<li class="nav-item "> <a class="nav-link" href="contact">Contact</a>
					</li>
					<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item " href="blog">Blog</a>
							</li>
							<li><a class="dropdown-item " href="blog-details">Blog Details</a>
							</li>
							<li><a class="dropdown-item " href="service-details">Service Details</a>
							</li>
							<li><a class="dropdown-item " href="faq">FAQ&#39;s</a>
							</li>
							<li><a class="dropdown-item " href="legal">Legal</a>
							</li>
							<li><a class="dropdown-item " href="terms">Terms &amp; Condition</a>
							</li>
							<li><a class="dropdown-item " href="privacy-policy">Privacy &amp; Policy</a>
							</li>
						</ul>
					</li>
				</ul>
				<!-- account btn --> <a href="#!" class="btn btn-outline-primary">Log In</a>
				<!-- account btn --> <a href="#!" class="btn btn-primary ms-2 ms-lg-3">Sign Up</a>
			</div>
		</div>
	</nav>
</header>

<div class="modal applyLoanModal fade" id="applyLoan" tabindex="-1" aria-labelledby="applyLoanLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
	  <div class="modal-content">
		<div class="modal-header border-bottom-0">
		  <h4 class="modal-title" id="exampleModalLabel">How much do you need?</h4>
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
		  <form action="#!" method="post">
			<div class="row">
			  <div class="col-lg-6 mb-4 pb-2">
				<div class="form-group">
				  <label for="loan_amount" class="form-label">Amount</label>
				  <input type="number" class="form-control shadow-none" id="loan_amount" placeholder="ex: 25000">
				</div>
			  </div>
			  <div class="col-lg-6 mb-4 pb-2">
				<div class="form-group">
				  <label for="loan_how_long_for" class="form-label">How long for?</label>
				  <input type="number" class="form-control shadow-none" id="loan_how_long_for" placeholder="ex: 12">
				</div>
			  </div>
			  <div class="col-lg-12 mb-4 pb-2">
				<div class="form-group">
				  <label for="loan_repayment" class="form-label">Repayment</label>
				  <input type="number" class="form-control shadow-none" id="loan_repayment" disabled>
				</div>
			  </div>
			  <div class="col-lg-6 mb-4 pb-2">
				<div class="form-group">
				  <label for="loan_full_name" class="form-label">Full Name</label>
				  <input type="text" class="form-control shadow-none" id="loan_full_name">
				</div>
			  </div>
			  <div class="col-lg-6 mb-4 pb-2">
				<div class="form-group">
				  <label for="loan_email_address" class="form-label">Email address</label>
				  <input type="email" class="form-control shadow-none" id="loan_email_address">
				</div>
			  </div>
			  <div class="col-lg-12">
				<button type="submit" class="btn btn-primary w-100">Get Your Loan Now</button>
			  </div>
			</div>
		  </form>
		</div>
	  </div>
	</div>
  </div>
