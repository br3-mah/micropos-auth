<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<link href="favicons/1567-images-favicon.png" rel="icon">
<title>ecoAgro - SignUp</title>
<meta name="description" content="ecoAgro">
<meta name="author" content="harnishdesign.net">

<!-- Web Fonts
========================= -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" type="text/css">

<!-- Stylesheet
========================= -->
<link rel="stylesheet" type="text/css" href="{{ asset('theme/css/css-bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('theme/css/css-all.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('theme/css/css-stylesheet.css')}}">
<!-- Colors Css -->
<link id="color-switcher" type="text/css" rel="stylesheet" href="css/oxyy-#">
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
      <!-- Register Form
      ========================= -->
      <div class="col-md-6 d-flex flex-column align-items-center order-2 order-md-1">
        <div class="container pt-5">
          <div class="row gx-0">
            <div class="col-11 col-md-10 mx-auto">
              <p class="text-end text-2 text-muted fw-300">Already a member? <a class="fw-300" href="http://localhost:8000/login?source={{$source}}&destination={{$destination}}">Sign in now</a></p>
            </div>
          </div>
        </div>
        <div class="container my-auto py-5">
          <div class="row gx-0">
            <div class="col-11 col-md-10 col-lg-9 col-xl-8 mx-auto">
              <h3 class="fw-300 text-9 mb-5">Sign up</h3>
              <x-validation-errors class="mb-4" />
              <form id="registerForm" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-3">
                  <label for="fullName" class="form-label fw-300">Full Name</label>
                  <input type="text" name="name" :value="old('name')" autofocus autocomplete="name"  class="form-control bg-light border-light" id="fullName" required placeholder="Enter Your Name">
                </div>
                <div class="mb-3">
                  <label for="emailAddress" class="form-label fw-300">Email Address</label>
                  <input type="email" name="email" :value="old('email')" autocomplete="username" class="form-control bg-light border-light" id="emailAddress" required placeholder="Enter Your Email">
                </div>
                <div class="mb-3">
                  <label for="loginPassword" class="form-label fw-300">Password</label>
                  <input type="password" name="password" autocomplete="new-password" class="form-control bg-light border-light" id="loginPassword" required placeholder="Enter Password">
                </div>
                <div class="mb-3">
                  <label for="loginPassword" class="form-label fw-300">Confirm Password</label>
                  <input type="password" name="password_confirmation" autocomplete="new-password" class="form-control bg-light border-light" id="loginPassword" required placeholder="Enter Password">
                </div>
                
                <div class="form-check my-4">
                  <input id="agree" name="terms" class="form-check-input" type="checkbox">
                  <label class="form-check-label text-2 fw-300" for="agree">I agree to the <a href="#">Terms</a> and <a href="#">Privacy Policy</a>.</label>
                </div>
                <input type="hidden" name="source" value="{{ $source ?? '' }}">
                <input type="hidden" name="destination" value="{{ $destination ?? '' }}">
                <div class="d-grid my-4">
                  <button class="btn btn-dark shadow-none fw-400" type="submit">Sign Up</button>
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
      <!-- Register Form End --> 
      
      <!-- Welcome Text
      ========================= -->
      <div class="col-md-6 bg-light  order-1 order-md-2">
        <div class="container h-100 d-flex flex-column">
          <div class="row g-0">
            <div class="col-11 col-md-10 mx-auto">
              <div class="logo mt-5 mb-5 mb-md-0"> <a class="d-flex" href="#" title="ecoAgro"><img src="{{ asset('img/logo.png')}}" alt="ecoAgro"></a> </div>
            </div>
          </div>
          <div class="row g-0 my-auto">
            <div class="col-11 col-md-10 mx-auto">
              <h1 class="text-13 fw-300 mb-4">Join the largest Farming community in the world.</h1>
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
<script src="{{ asset('theme/js/jquery-jquery.min.js')}}"></script> 
<script src="{{ asset('theme/js/js-bootstrap.bundle.min.js')}}"></script> 
<!-- Style Switcher --> 
<script src="{{ asset('theme/js/6379-js-switcher.min.js')}}"></script> 
<script src="{{ asset('theme/js/3806-js-theme.js')}}"></script>
</body>
</html>
