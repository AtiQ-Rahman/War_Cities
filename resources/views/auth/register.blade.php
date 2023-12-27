<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>War Cities</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="War Cities">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="War Cities">
  <meta name="generator" content="War Cities">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('front/images/favicon.png') }}" />

  <!-- PLUGINS CSS STYLE -->
  <link rel="stylesheet" href="{{ asset('front/plugins/bootstrap/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('front/plugins/themify-icons/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('front/plugins/slick/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('front/plugins/slick/slick-theme.css') }}">
  <link rel="stylesheet" href="{{ asset('front/plugins/fancybox/jquery.fancybox.min.css') }}">
  <link rel="stylesheet" href="{{ asset('front/plugins/aos/aos.css') }}">

  <!-- CUSTOM CSS -->
  <link href="{{ asset('front/css/style.css') }}" rel="stylesheet">

</head>

<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">

<!--=============================
=            Sign Up            =
==============================-->

<section class="user-login section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="block">
					<!-- Image -->
					<div class="image align-self-center"><img class="img-fluid" src="{{ asset('front/images/Login/sign-up.jpg') }}" alt="desk-image">
					</div>
					<!-- Content -->
					<div class="content text-center">
						<div class="logo">
							<a href="/"><img src="{{ asset('front/images/logo.jpeg') }}" width="150px" alt=""></a>
						</div>
						<div class="title-text">
							<h3>Sign Up for New Account</h3>
						</div>
						<form action="{{ route('register') }}" method="POST">
                            @csrf
							<!-- Username -->
							<input class="form-control main" name="name" type="text" placeholder="Your Name" required>
							<!-- Email -->
							<input class="form-control main" name="email" type="email" placeholder="Email Address" required>

							<input class="form-control main" name="phone" type="text" placeholder="Phone Number" required>

							<!-- Password -->
							<input class="form-control main" name="password" type="password" placeholder="Password" required>

							<input class="form-control main" name="password_confirmation" type="password" placeholder="Confirm Password" required>
							<!-- Submit Button -->
							<button type="submit" class="btn btn-main-md">sign up</button>
						</form>
						<div class="new-acount">
							<p>By clicking “Sign Up” I agree to <a href="/privacy">Terms of Conditions.</a></p>
							<p>Anready have an account? <a href="/login">SIGN IN</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of Sign Up  ====-->


  <!-- To Top -->
  <div class="scroll-top-to">
    <i class="ti-angle-up"></i>
  </div>

  <!-- JAVASCRIPTS -->
  <script src="{{ asset('front/plugins/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('front/plugins/bootstrap/bootstrap.min.js') }}"></script>
  <script src="{{ asset('front/plugins/slick/slick.min.js') }}"></script>
  <script src="{{ asset('front/plugins/fancybox/jquery.fancybox.min.js') }}"></script>
  <script src="{{ asset('front/plugins/syotimer/jquery.syotimer.min.js') }}"></script>
  <script src="{{ asset('front/plugins/aos/aos.js') }}"></script>
  <!-- google map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g"></script>
  <script src="{{ asset('front/plugins/google-map/gmap.js') }}"></script>

  <script src="{{ asset('front/js/script.js') }}"></script>
</body>

</html>
