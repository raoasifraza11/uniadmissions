@extends('layouts.master')

@section('title') Login | Uni-admission @endsection

@section('body') <body class="style-2 nav-on-header-white login-page"> @endsection


@section('content')

<!-- Content Start -->

<!-- Start Pages Title  -->

<section id="page-title" class="page-title-style2">
	<div class="color-overlay"></div>
	<div class="container inner-img">
		<div class="row">
			<div class="Page-title">
				<div class="col-md-12 text-center">
					<div class="title-text">
						<h6>Great Service</h6>
						<h2 class="page-title">Login</h2>
					</div>
				</div>
				<div class="col-md-12 text-center">
					<div class="breadcrumb-trail breadcrumbs">
						<span class="trail-begin"><a href="/">Home</a></span>
						<span class="sep">/</span> <span class="trail-end">Login</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- End Pages Title  -->

<!-- Content Start -->
<main class="main-content">

	<div class="login-block">
		<h2>Uni-Admissions</h2>
		<h1>Log into your account</h1>

		<form action="#">

			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon"><i class="ti-email"></i></span>
					<input type="text" class="form-control" placeholder="Email">
				</div>
			</div>

			<hr class="hr-xs">

			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon"><i class="ti-unlock"></i></span>
					<input type="password" class="form-control" placeholder="Password">
				</div>
			</div>

			<button class="btn btn-primary btn-block" type="submit">Login</button>

			<div class="login-footer">
				<h6>Or login with</h6>
				<ul class="social-icons">
					<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
				</ul>
			</div>

		</form>
	</div>

	<div class="login-links">
		<a class="pull-left" href="#">Forget Password?</a>
		<a class="pull-right" href="#">Register an account</a>
	</div>

</main>



<!-- Main container end -->




<!-- Content End -->
@endsection