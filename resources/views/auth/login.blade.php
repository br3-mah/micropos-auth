<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<link href="favicons/3301-images-favicon.png" rel="icon">
<title>EcoAgro - SignIn</title>
<meta name="description" content="Login and Register Form Html Template">
<meta name="author" content="harnishdesign.net">
<link rel="shortcut icon" href="fav.png" />

<!-- Web Fonts
========================= -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" type="text/css">

<!-- Stylesheet
========================= -->
<link rel="stylesheet" type="text/css" href="{{ asset('public/theme/css/css-bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/theme/css/css-all.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/theme/css/css-stylesheet.css')}}">
<!-- Colors Css -->
<link id="color-switcher" type="text/css" rel="stylesheet" href="{{ asset('public/theme/css/oxyy-#')}}">
</head>
<body>

<!-- Preloader -->
<div class="preloader">
  <div class="lds-ellipsis">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>
</div>
<!-- Preloader End -->


@php
    use Illuminate\Support\Facades\Request;
    $source = Request::input('source');
    $destination = Request::input('destination');
@endphp
<div id="main-wrapper" class="oxyy-login-register">
  <div class="container-fluid px-0">
    <div class="row g-0 min-vh-100"> 
      <!-- Login Form
      ========================= -->
      <div class="col-md-6 d-flex flex-column align-items-center order-2 order-md-1">
        <div class="container pt-5">
          <div class="row gx-0">
            <div class="col-11 col-md-10 mx-auto">
              <p class="text-end text-2 text-muted fw-300">
                Not a member? <a class="fw-300" href="https://auth.ecoagrozm.com/register?source={{$source}}&destination={{$destination}}">Sign up now</a>
              </p>
            </div>
          </div>
        </div>
        <x-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif
        <div class="container my-auto py-5">
          <div class="row gx-0">
            <div class="col-11 col-md-10 col-lg-9 col-xl-8 mx-auto">
              <h3 class="fw-300 text-9 mb-5">Sign in</h3>
              <form id="loginForm" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-2">
                  <label for="emailAddress" class="form-label fw-300">Email Address</label>
                  <input  type="email" name="email" :value="old('email')" required autocomplete="username" class="form-control bg-light border-light" id="emailAddress" required placeholder="Enter Your Email">
                </div>
                <div class="mb-3">
                  <label for="loginPassword" class="form-label fw-300">Password</label>
                  <input type="password" name="password" required autocomplete="current-password" class="form-control bg-light border-light" id="loginPassword" required placeholder="Enter Password">
                </div>
                <input type="hidden" name="source" value="{{ $source ?? '' }}">
                <input type="hidden" name="destination" value="{{ $destination ?? '' }}">
                <div class="row mt-4">
                  <div class="col">
                    <div class="form-check">
                      <input id="remember_me" name="remember" class="form-check-input" type="checkbox">
                      <label class="form-check-label text-2 fw-300" for="remember-me">Remember Me</label>
                    </div>
                  </div>
                  @if (Route::has('password.request'))
                    <div class="col text-end">
                        <a class="text-2 fw-300" href="{{ route('password.request') }}">Forgot Password ?</a>
                    </div>
                  @endif
                </div>
                <div class="d-grid my-4">
                  <button style="background-color:#29444a;" class="btn btn-dark shadow-none fw-400" type="submit">Sign in</button>
                </div>
              </form>
              {{-- <div class="d-flex align-items-center my-4">
                <hr class="flex-grow-1">
                <span class="mx-2 text-2 text-muted fw-300">Or continue with</span>
                <hr class="flex-grow-1">
              </div>
              <div class="row gx-3">
                <div class="col-6 d-grid">
                  <button type="button" class="btn btn-light btn-sm fw-400 shadow-none border"><span class="me-2"><i class="fab fa-google"></i></span>Google</button>
                </div>
                <div class="col-6 d-grid">
                  <button type="button" class="btn btn-light btn-sm fw-400 shadow-none border"><span class="me-2"><i class="fab fa-facebook-f"></i></span>Facebook</button>
                </div>
              </div> --}}
            </div>
          </div>
        </div>
      </div>
      <!-- Login Form End --> 
      
      <!-- Welcome Text
      ========================= -->
      <div class="col-md-6 bg-light  order-1 order-md-2">
        <div class="container h-100 d-flex flex-column">
          <div class="row g-0">
            <div class="col-11 col-md-10 mx-auto">
              <div class="logo mt-5 mb-5 mb-md-0"> <a class="d-flex" href="https://ecoagrozm.com" title="ecoAgro"><img src="{{('public/img/logo.png')}}" alt="ecoAgro"></a> </div>
            </div>
          </div>
          <div class="row g-0 my-auto">
            <div class="col-11 col-md-10 mx-auto">
              <h1 class="text-13 fw-300 mb-4">Join the largest Farming community.</h1>
            </div>
          </div>
        </div>
      </div>
      <!-- Welcome Text End --> 
    </div>
  </div>
</div>

<!-- Styles Switcher -->
<!-- <div id="styles-switcher" class="right">
  <h5>Color Switcher</h5>
  <hr>
  <ul class="mb-0">
    <li class="blue" data-bs-toggle="tooltip" title="Blue" data-path="#">
    </li><li class="indigo" data-bs-toggle="tooltip" title="Indigo" data-path="css/color-indigo.css">
    </li><li class="purple" data-bs-toggle="tooltip" title="Purple" data-path="css/color-purple.css">
    </li><li class="pink" data-bs-toggle="tooltip" title="Pink" data-path="css/color-pink.css">
    </li><li class="red" data-bs-toggle="tooltip" title="Red" data-path="css/color-red.css">
    </li><li class="orange" data-bs-toggle="tooltip" title="Orange" data-path="css/color-orange.css">
    </li><li class="yellow" data-bs-toggle="tooltip" title="Yellow" data-path="css/color-yellow.css">
    </li><li class="teal" data-bs-toggle="tooltip" title="Teal" data-path="css/color-teal.css">
    </li><li class="green" data-bs-toggle="tooltip" title="Green" data-path="css/color-green.css">
    </li><li class="cyan" data-bs-toggle="tooltip" title="Cyan" data-path="css/color-cyan.css">
    </li><li class="brown" data-bs-toggle="tooltip" title="Brown" data-path="css/color-brown.css">
  </li></ul>
  <button class="btn switcher-toggle"><i class="fas fa-cog"></i></button>
</div> -->
<!-- Styles Switcher End --> 

<!-- Script --> 
<script src="{{ asset('public/theme/js/jquery-jquery.min.js')}}"></script> 
<script src="{{ asset('public/theme/js/js-bootstrap.bundle.min.js')}}"></script> 
<!-- Style Switcher --> 
<script src="{{ asset('public/theme/js/5435-js-switcher.min.js')}}"></script> 
<script src="{{ asset('public/theme/js/4463-js-theme.js')}}"></script>
</body>
</html>
