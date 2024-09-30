<div class="ugf-wrapper theme-bg">
    @php
        use Illuminate\Support\Facades\Request;
        $source = Request::input('source');
        $destination = Request::input('destination');
        // var_dump($destination);
        $type = Request::input('type');
    @endphp
    <div class="ugf-content-block">
      <div class="logo">
        <a href="#">
          <img width="250" class="light-logo" src="public/data/img/3.png" alt="logo">
          <img width="250" class="dark-logo" src="public/data/img/2.png" alt="logo">
        </a>
      </div>
      <div class="container-md">
        <div class="row">
          <div class="col-lg-7 offset-lg-5 p-sm-0">
            <div class="ugf-content pt270">
              <h2>Let's go! <span>Join with our Platform</span></h2>
              <p>Inter your valid email address and complete some easy steps <br> for register your account</p>
              <form id="otpForm" class="form-flex email-form" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="inputMail">Email Address</label>
                    <input type="email" name="email" placeholder="" class="form-control" id="inputMail" required>
                    
                </div>
                <button type="submit" class="btn"><span>Let's Start</span> <i class="las la-arrow-right"></i></button>
            </form>
            <span id="emailError" class="text-danger" style="display: none;"></span>
                    <span id="emailSuccess" class="text-info" style="display: none;"></span>
            <div id="loadingOverlay" class="loading-overlay">
                <div class="loader">
                    <svg class="circular" viewBox="25 25 50 50">
                        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
                    </svg>
                </div>
            </div>
            
            <style>
                .loading-overlay {
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background: rgba(255, 255, 255, 0.8);
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    z-index: 1000;
                    opacity: 0;
                    visibility: hidden;
                    transition: opacity 0.3s, visibility 0.3s;
                }
                .loading-overlay.active {
                    opacity: 1;
                    visibility: visible;
                }
                .loader {
                    position: relative;
                    width: 40px;
                    height: 40px;
                }
                .circular {
                    animation: rotate 2s linear infinite;
                    height: 100%;
                    transform-origin: center center;
                    width: 100%;
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    margin: auto;
                }
                .path {
                    stroke-dasharray: 1, 200;
                    stroke-dashoffset: 0;
                    animation: dash 1.5s ease-in-out infinite, color 6s ease-in-out infinite;
                    stroke-linecap: round;
                }
                @keyframes rotate {
                    100% {
                        transform: rotate(360deg);
                    }
                }
                @keyframes dash {
                    0% {
                        stroke-dasharray: 1, 200;
                        stroke-dashoffset: 0;
                    }
                    50% {
                        stroke-dasharray: 89, 200;
                        stroke-dashoffset: -35px;
                    }
                    100% {
                        stroke-dasharray: 89, 200;
                        stroke-dashoffset: -124px;
                    }
                }
                @keyframes color {
                    100%, 0% {
                        stroke: #4285F4;
                    }
                    40% {
                        stroke: #DE3E35;
                    }
                    66% {
                        stroke: #F7C223;
                    }
                    80%, 90% {
                        stroke: #1B9A59;
                    }
                }
            </style>
            
            <script>
                document.getElementById('otpForm').addEventListener('submit', async (event) => {
                    event.preventDefault();
            
                    const emailInput = document.getElementById('inputMail');
                    const email = emailInput.value;
                    const emailError = document.getElementById('emailError');
                    const emailSuccess = document.getElementById('emailSuccess');
                    const loadingOverlay = document.getElementById('loadingOverlay');
            
                    emailError.style.display = 'none';
                    emailError.textContent = '';
            
                    if (!validateEmail(email)) {
                        emailError.textContent = 'Please enter a valid email address.';
                        emailError.style.display = 'block';
                        return;
                    }
            
                    loadingOverlay.classList.add('active');
                    let data = null;  // Declare response outside try block
                    try {
                        response = await fetch('api/send-otp', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({ email }),
                        });
            
                        data = await response.json();
            
                        if (response.ok) {
                          
                          emailSuccess.textContent = data.message || 'OTP sent successfully.';
                          emailSuccess.style.display = 'block';
                          sessionStorage.setItem('authmail', email);
                        } else {
                          emailError.textContent = data.message || 'Failed to send OTP.';
                          emailError.style.display = 'block';
                        }
                    } catch (error) {
                      console.error('Error sending OTP:', error);
                      emailError.textContent = 'An error occurred while sending the OTP.';
                      emailError.style.display = 'block';
                    }finally {
                      if (data.message === 'The email has already been taken.') {  // Check if response exists before accessing it
                        loadingOverlay.classList.remove('active');
                      } else {
                        window.location.href = 'register?source=origin&destination=d'; // Update this with your actual route and params
                      }
                      
                    }
                });
            
                function validateEmail(email) {
                    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    return re.test(String(email).toLowerCase());
                }
            </script>
            </div>
          </div>
        </div>
      </div>
      <div class="alternet-access">
        <p>Already have an account? <a href="{{ env('APP_URL') }}/login?source={{$source}}&destination={{$destination}}">&nbsp; Log in now!</a></p>
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
      <div class="clients">
        {{-- <div class="client">
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
        </div> --}}
      </div>
    </div>
  </div>
