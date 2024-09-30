<!doctype html>
<html lang="en">
  @php
    use Illuminate\Support\Facades\Request;
    $source = Request::input('source') ?? 'origin';
    $destination = Request::input('destination') ?? 'd';
@endphp
<!-- Mirrored from uigaint.com/demo/html/anfraa/login-register-1/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Sep 2024 10:56:28 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ config('app.name', 'MicroPOS') }}</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="public/data/assets/css/bootstrap.min.css">

    <!-- External Css -->
    <link rel="stylesheet" href="public/data/assets/css/line-awesome.min.css">
    <link rel="stylesheet" href="public/data/assets/css/owl.carousel.min.css" />

    <!-- Custom Css --> 
    <link rel="stylesheet" type="text/css" href="public/data/assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="public/data/assets/css/theme-1.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet">
    

    <!-- Favicon -->
    <link rel="icon" href="public/data/img/fav.jpeg">
    {{-- <link rel="apple-touch-icon" href="public/data/assets/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="public/data/assets/images/icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="public/data/assets/images/icon-114x114.png"> --}}


  </head>
  <body>
    
    <div class="ugf-wrapper theme-bg">
      <div class="ugf-content-block">
        <div class="logo ">
          <a href="#">
            <img width="250" class="light-logo" src="public/data/img/3.png" alt="logo">
            <img width="250" class="dark-logo" src="public/data/img/2.png" alt="logo">
          </a>
        </div>
        <div class="container-md">
          <div class="row">
            <div class="col-lg-7 offset-lg-5 p-sm-0">
              <div class="ugf-content pt270">
                <h2>Login your account</h2>
                <p>Enter your valid email address and Password to login your account</p>
                

                <form action="#" id="commentForm" method="POST" action="{{ route('login') }}">
                  @csrf
                  <div class="form-group">
                    <label for="inputMail">TPIN <span class="text-muted">/</span> Email Address</label>
                    <input type="email"  name="email" :value="old('email')" autofocus autocomplete="username" class="form-control" id="inputMail" required>
                  </div>
                  <div class="form-group">
                    <label for="inputPass">Password</label>
                    <input type="password" name="password" required autocomplete="current-password" class="form-control" id="inputPass" required>
                  </div>
                  <div class="">
                    <x-validation-errors class="mb-4 alert alert-danger" />
                    @if (session('status'))
                      <div class="alert alert-danger">
                          {{ session('status') }}
                      </div>
                    @endif
                  </div>
                  <div class="form-group check-flex mb10">
                    <div class="custom-checkbox mb10">
                      <input type="checkbox" name="remember" class="custom-control-input" id="customControlValidation1">
                      <label class="custom-control-label" for="customControlValidation1">Remember me</label>
                    </div>
                    @if (Route::has('password.request'))
                      {{-- <div class="forget-pass mb10">
                        <a href="#">Forget password?</a>
                      </div> --}}
                    @endif
                  </div>
                  <button class="btn" type="submit">Login</button>
                </form>
            
              </div>
            </div>
          </div>
        </div>
        <div class="alternet-access">
          <p>Don't have an account? <a href="{{env('APP_URL') }}/get-started?source={{$source}}&destination={{$destination}}">&nbsp; sign up Now!</a></p>
        </div>
      </div>
      <div class="ugf-sidebar flex-bottom ugf-sidebar-bg">
        <div class="testimonial-carousel owl-carousel">
          <div class="item">
            <div class="quote">
              <img src="public/data/assets/images/quote.png" alt="">
            </div>
            <p>The hardest thing in the world to understand is income tax.’ But with MicroPos Easy Tax, even Einstein would have found it simple—make taxes easy, and let your business grow like Bill Gates!.</p>
            <h5 class="name">Albert Einstein </h5>
            <span class="designation">Scientist</span>
          </div>
          <div class="item">
            <div class="quote">
              <img src="public/data/assets/images/quote.png" alt="">
            </div>
            <p>Efficiency is doing things right; effectiveness is doing the right things.’ With MicroPos Easy Tax, you get both—efficient tax solutions to keep your business running smoothly and successfully!</p>
            <h5 class="name">Henry Ford</h5>
            <span class="designation">Founder, Ford Motor Company</span>
          </div>
          <div class="item">
            <div class="quote">
              <img src="public/data/assets/images/quote.png" alt="">
            </div>
            <p>Nobody can teach me who I am.’ With MicroPos Easy Tax, you stay in control—manage your taxes your way, while we simplify the process for you.</p>
            <h5 class="name">Chinua Achebe</h5>
            <span class="designation">Novelist</span>
          </div>
        </div>
        {{-- <div class="clients">
          <div class="client">
            <img src="public/data/assets/images/client/1.png" class="img-fluid" alt="">
          </div>
          <div class="client">
            <img src="public/data/assets/images/client/2.png" class="img-fluid" alt="">
          </div>
          <div class="client">
            <img src="public/data/assets/images/client/3.png" class="img-fluid" alt="">
          </div>
          <div class="client">
            <img src="public/data/assets/images/client/4.png" class="img-fluid" alt="">
          </div>
        </div> --}}
      </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="public/data/assets/js/jquery.min.js"></script>
    <script src="public/data/assets/js/popper.min.js"></script>
    <script src="public/data/assets/js/bootstrap.min.js"></script>

    <script src="public/data/assets/js/owl.carousel.min.js"></script>
    <script src="public/data/assets/js/countrySelect.min.js"></script>
    <script src="public/data/assets/js/jquery.validate.min.js"></script>

    <script src="public/data/assets/js/custom.js"></script>

  </body>

<!-- Mirrored from uigaint.com/demo/html/anfraa/login-register-1/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Sep 2024 10:56:37 GMT -->
</html>