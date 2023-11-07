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
<link rel="stylesheet" type="text/css" href="{{ asset('public/theme/css/css-bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/theme/css/css-all.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/theme/css/css-stylesheet.css')}}">
<!-- Colors Css -->
{{-- <link id="color-switcher" type="text/css" rel="stylesheet" href="css/oxyy-#"> --}}
<style>
  /* Modal Styles *//* Styles for the modal container */
.modal {
    display: flex;
    align-items: center;
    justify-content: center;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7); /* Semi-transparent background */
    z-index: 1000; /* Ensure the modal is on top of other elements */
}

/* Styles for the modal content */
.modal-content {
    background-color: #fff;
    padding: 10%;
    border: 1px solid #888;
    width: 100%; /* Adjust the width of the modal content as needed */
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-height: 100%; /* Set a maximum height for the modal content */
    overflow-y: auto; /* Enable vertical scrolling if content overflows */
}

.close {
    position: absolute;
    top: 15px;
    right: 15px;
    font-size: 24px;
    font-weight: bold;
    cursor: pointer;
}

/* Center the modal on smaller screens */
@media screen and (max-width: 600px) {
    .modal-content {
        width: 90%;
    }
}
/* Style for the grid container */
.grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr); /* Create a grid with 4 equal columns */
    gap: 20px; /* Add some spacing between grid items */
}

/* Style for each grid item */
.grid-file-item {
    text-align: center;
    padding: 2px;
    background-color: #ffffff; /* Background color of grid items */
    border: 1px solid #dddddd; /* Border around each grid item */
    border-radius: 5px; /* Rounded corners */
    cursor: pointer; /* Change cursor to pointer on hover for interactivity */
}
.grid-file-item-btn{
    text-align: center;
    padding: 2px;
    background-color: #ff0000; /* Background color of grid items */
    border: 1px solid #ff0000; /* Border around each grid item */
    border-radius: 5px; /* Rounded corners */
    cursor: pointer; /* Change cursor to pointer on hover for interactivity */
}
.grid-item {
    text-align: center;
    padding: 20px;
    background-color: #ffffff; /* Background color of grid items */
    border: 1px solid #dddddd; /* Border around each grid item */
    border-radius: 5px; /* Rounded corners */
    cursor: pointer; /* Change cursor to pointer on hover for interactivity */
}

/* Style for the icons inside grid items */
.grid-item .icon {
    font-size: 24px; /* Adjust icon size as needed */
    margin-bottom: 10px; /* Spacing between icon and text */
}

/* Style for the text below each icon */
.grid-item p {
    font-size: 14px; /* Adjust text size as needed */
    color: #333333; /* Text color */
    margin: 0; /* Remove default margin */
}

/* Hover effect for grid items */
.grid-item:hover {
    background-color: #f0f0f0; /* Change background color on hover */
}

/* Style for the focused (selected) grid item */
.focused {
    outline: 4px solid #007bff; /* Add a blue outline to highlight the focused item */
}
.button-footer {
    display: flex;
    justify-content: center; /* Horizontally center the content */
    align-items: center; /* Vertically center the content */
    gap: 5px;
    height: 27vh; /* Set the container height to full viewport height */
}
/* Styles for the uploaded files list */
.file-list {
    list-style: none;
    padding: 3%;
}

/* Styles for each file item */
.file-list-item {
    display: flex;
    align-items: center;
    justify-content: space-between;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 10px;
    margin-bottom: 10px;
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s ease; /* Add a smooth background color transition */
}

/* Hover effect for file items */
.file-list-item:hover {
    background-color: #f7f7f7; /* Change the background color on hover */
}

/* Styles for file item text */
.file-list-item-text {
    flex-grow: 1;
    margin-right: 10px;
}

/* Styles for the remove button */
.remove-button {
    background-color: #ff4444;
    color: #fff;
    border: none;
    border-radius: 10%;
    padding: 5px 10px;
    cursor: pointer;
}

/* Hover effect for the remove button */
.remove-button:hover {
    background-color: #ff0000;
}
 
.hidden {
        position: absolute;
        left: -9999px;
    } 

    /* Hide the default file input */
.visually-hidden {
    position: absolute !important;
    clip: rect(1px, 1px, 1px, 1px);
    padding: 0 !important;
    border: 0 !important;
    height: 1px !important;
    width: 1px !important;
    overflow: hidden;
    white-space: nowrap !important;
}

/* Style the label with the icon */
.file-input-label {
    display: inline-block;
    padding: 10px;
    background-color: #007bff; /* Change to your desired background color */
    color: #fff; /* Change to your desired text color */
    border-radius: 4px;
    cursor: pointer;
}

/* Style the icon using Font Awesome classes */
.file-input-label i {
    margin-right: 5px; /* Adjust as needed for spacing */
}

.purpose-radio-input {
    display: none;
}

</style>
</head>
<body>
<!-- Modal Popup -->


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
    $type = Request::input('type');
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
              <p class="text-end text-2 text-muted fw-300">Already a member? <a class="fw-300" href="https://auth.ecoagrozm/login?source={{$source}}&destination={{$destination}}">Sign in now</a></p>
            </div>
          </div>
        </div>
        <div class="container my-auto py-5">
          @if(session('message'))
              <div class="alert alert-success">
                  {{ session('message') }}
              </div>
          @endif
          <div class="row gx-0">
            <div class="col-11 col-md-10 col-lg-9 col-xl-8 mx-auto">
              {{-- <h3 class="fw-300 text-9 mb-2">Sign up</h3> --}}
              <x-validation-errors class="mb-4" />
              <form id="registerForm" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf

                <div id="step1">
                  <h6>Choose a service you would like to access</h6>
                  <!-- Add a grid of 4 div elements with icons inside -->
                  <div class="grid">
                      <div class="grid-item">
                          <input type="radio" name="purpose" id="advisory" class="purpose-radio-input" value="call center" checked>
                          <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-chat-square-dots" viewBox="0 0 16 16">
                              <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                              <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                          </svg>
                          </div>
                          <p>Advisory</p>
                      </div>
                      <div class="grid-item">
                          <input type="radio" name="purpose" id="marketplace" class="purpose-radio-input" value="marketplace">
                          <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-shop-window" viewBox="0 0 16 16">
                                <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h12V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zm2 .5a.5.5 0 0 1 .5.5V13h8V9.5a.5.5 0 0 1 1 0V13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9.5a.5.5 0 0 1 .5-.5z"/>
                            </svg>
                          </div>
                          <p>Marketplace</p>
                      </div>
                      <div class="grid-item">
                          <input type="radio" name="purpose" id="call-center" class="purpose-radio-input" value="call center">
                          <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-headset" viewBox="0 0 16 16">
                                <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z"/>
                            </svg>
                          </div>
                          <p>Call Center</p>
                      </div>
                      <div class="grid-item">
                          <input type="radio" name="purpose" id="payments-solution" class="purpose-radio-input" value="payment solution">
                          <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-credit-card-2-back-fill" viewBox="0 0 16 16">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5H0V4zm11.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-2zM0 11v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1H0z"/>
                            </svg>
                          </div>
                          <p>Payments Solution</p>
                      </div>
                  </div>
                  <div class="d-grid my-4">
                    <button class="btn btn-dark shadow-none fw-400" id="gotoStep2" type="button">Next</button>
                  </div>
                </div>

                <div id="step2">
                  <h6>
                    <a id="gotoStep1" type="button">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                      </svg>
                    </a>
                    &nbsp;
                    Upload any relevant documents
                  </h6>
                  <div class="file-uploader">
                      <!-- Hidden file input -->
                      <input type="hidden" name="source" value="{{ $source ?? '' }}">
                  
                      <!-- Use a label for file input and add a Font Awesome icon -->
                      <input type="file" multiple class="file-input visually-hidden" id="fileInput" accept=".pdf, .doc, .docx" name="files[]" onchange="displaySelectedFiles()">
                      <label for="fileInput" class="file-input-label">
                          <i class="fas fa-cloud-upload-alt"></i>
                          <span>Click to upload files</span>
                      </label>
                      
                      <!-- Uploaded file list -->
                      <div class="pt-2">
                          <ul class="file-list" id="fileList"></ul>
                      </div>
                  </div>
                  <div class="d-grid flex gap-2 my-4">
                    {{-- <button class="btn btn-dark shadow-none fw-400" id="gotoStep1" type="button">Back</button> --}}
                    <button class="btn btn-dark shadow-none fw-400" id="gotoStep3" type="button">Next</button>
                  </div>
                </div>
                <div id="step3">
                  
                  <a id="gotoStep22" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                    </svg>
                  </a>
                  <div class="mb-3">
                    <label for="phoneNumber" class="form-label fw-300">Phone Number</label>
                    <input type="text" name="phoneNumber" class="form-control bg-light border-light"  required placeholder="Phone Number">
                  </div>
                  <div class="flex">
                    <div class="w-1/2">
                      <label for="dob" class="form-label fw-300">Date of Birth</label>
                      <input type="date" name="dob" class="form-control bg-light border-light">
                    </div>
                    <div class="w-1/2">
                      <label for="sex" class="form-label fw-300">Sex</label>
                      <select id="sex" name="sex" class="form-control bg-light border-light">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                    </div>                    
                  </div>
                  <div class="flex">
                    <div class="w-1/2">
                      <label for="emailAddress" class="form-label fw-300">City</label>
                      <input type="text" name="city" class="form-control bg-light border-light" placeholder="City">
                    </div>
                    <div class="w-1/2">
                      <label for="province" class="form-label fw-300">Province</label>
                      <input type="text" name="province" class="form-control bg-light border-light" placeholder="Province">
                    </div>
                  </div>
                  <div class="d-grid flex gap-2 my-4">
                    <button class="btn btn-dark shadow-none fw-400" id="gotoStep4" type="button">Next</button>
                  </div>
                </div>
                <div id="step4">
                  <a id="gotoStep33" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                    </svg>
                  </a>
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
                    <label for="loginPassword2" class="form-label fw-300">Confirm Password</label>
                    <input type="password" name="password_confirmation" autocomplete="new-password" class="form-control bg-light border-light" id="loginPassword2" required placeholder="Enter Password">
                  </div>
                  <div class="form-check my-4">
                    <input id="agree" name="terms" class="form-check-input" type="checkbox">
                    <label class="form-check-label text-2 fw-300" for="agree">I agree to the <a href="#">Terms</a> and <a href="#">Privacy Policy</a>.</label>
                  </div>
                  <input type="hidden" name="destination" value="{{ $destination ?? '' }}">
                  <input type="hidden" name="type" value="{{ $type ?? '' }}">
                  <div class="d-grid my-4">
                    <button class="btn btn-dark shadow-none fw-400" type="submit">Sign Up</button>
                  </div>
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
              <div class="logo mt-5 mb-5 mb-md-0"> <a class="d-flex" href="#" title="ecoAgro"><img src="{{ asset('public/img/logo.png')}}" alt="ecoAgro"></a> </div>
            </div>
          </div>
          <div class="row g-0 my-auto">
            <div class="col-11 col-md-10 mx-auto">
              <h1 class="text-13 fw-300 mb-4">Join the largest Farming community in the world. <h3 class="fw-300 text-9 mb-2">Create an Account</h3></h1>
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
<script src="{{ asset('public/theme/js/6379-js-switcher.min.js')}}"></script> 
<script src="{{ asset('public/theme/js/3806-js-theme.js')}}"></script>
<script>
    // Get the modal and the close button
    
    
    const signupForm = document.getElementById("signupForm");
    const myServiceInput = document.getElementById('myserivce');
    const myUploadedFilesInput = document.getElementById('myuploadedfiles');

    
    // Set the current step to the first step
    let currentStep = 0;
    // JavaScript code to handle radio selection on grid item click
    document.addEventListener("DOMContentLoaded", function () {
        const gridItems = document.querySelectorAll(".grid-item");

        gridItems.forEach(function (item) {
            item.addEventListener("click", function () {
                // Find the associated radio input
                const radioInput = item.querySelector(".purpose-radio-input");
                
                // Check the radio input
                if (radioInput) {
                    radioInput.checked = true;
                }
                // Remove the 'focused' class from all grid items
                gridItems.forEach(function (gridItem) {
                    gridItem.classList.remove("focused");
                });

              // Add the 'focused' class to the clicked grid item
              item.classList.add("focused");
            });
        });
    });

// JavaScript to handle file selection and removal
// const fileInput = document.getElementById('fileInput');
// const fileList = document.getElementById('fileList');

// const uploadedFiles = [];
// // const uploadedFilesJson = [];

// // JavaScript to handle file selection and removal
// fileInput.addEventListener('change', function () {
//     const files = this.files; 
//     // Initialize an array to store uploaded file names
//     console.log(files)
//     if (files.length > 0) {
      
//         // Add the uploaded files to the uploadedFiles array
//         Array.from(files).forEach(file => {
          
//             uploadedFiles.push(file);

//             const listItem = document.createElement('li');
//             listItem.className = 'file-item grid pb-1';
//             listItem.innerHTML = `
//                 <span class="grid-file-item">${file.name}</span>
//                 <button class="grid-file-item-btn" class="remove-button" data-name="${file.name}">x</button>
//             `;

//             fileList.appendChild(listItem);
//         });
//     }
// });

// fileList.addEventListener('click', function (e) {
  
//   console.log(e.target.classList.value);
//     if (e.target.classList.value == 'grid-file-item-btn') {
//         const fileName = e.target.getAttribute('data-name');
//         const fileItem = e.target.parentElement;
//         fileItem.remove();
//         // Remove the file name from the uploadedFiles array
//         const fileIndex = uploadedFiles.indexOf(fileName);
//         if (fileIndex !== -1) {
//             uploadedFiles.splice(fileIndex, 1);
//         }
//         // Update the hidden input with the updated uploaded files
//         myUploadedFilesInput.value = JSON.stringify(uploadedFiles);
//         // You can perform additional actions here (e.g., remove the file from the server).
//     }
// });

// Get references to the step elements and buttons
const step1 = document.getElementById('step1');
const step2 = document.getElementById('step2');
const step3 = document.getElementById('step3');
const step4 = document.getElementById('step4');
const gotoStep1Button = document.getElementById('gotoStep1');
const gotoStep2Button = document.getElementById('gotoStep2');
const gotoStep22Button = document.getElementById('gotoStep22');
const gotoStep33Button = document.getElementById('gotoStep33');
const gotoStep3Button = document.getElementById('gotoStep3');
const gotoStep4Button = document.getElementById('gotoStep4');

// Initialize 
const type = '{{$type}}';
step2.classList.add('hidden');
step3.classList.add('hidden');
step4.classList.add('hidden');
// Event listener for "Next" button on Step 1
gotoStep2Button.addEventListener('click', function () {
  if (type == 'farmer') {
      step1.classList.add('hidden');
      step2.classList.add('hidden');
      step3.classList.remove('hidden');
  } else {
      step1.classList.add('hidden');
      step2.classList.remove('hidden');
  }
});
// Event listener for "Next" button on Step 1
gotoStep22Button.addEventListener('click', function () {
  if (type == 'farmer') {
    step3.classList.add('hidden');
    step2.classList.add('hidden');
    step1.classList.remove('hidden');
  } else {
    step1.classList.add('hidden');
    step2.classList.remove('hidden');
    step3.classList.add('hidden');
  }
});
// Event listener for "Back" button on Step 2
gotoStep1Button.addEventListener('click', function () {
    step2.classList.add('hidden');
    step1.classList.remove('hidden');
});
// Event listener for "Next" button on Step 2
gotoStep3Button.addEventListener('click', function () {
    step2.classList.add('hidden');
    step3.classList.remove('hidden');
});
// Event listener for "Next" button on Step 2
gotoStep33Button.addEventListener('click', function () {
    step4.classList.add('hidden');
    step3.classList.remove('hidden');
});
// Event listener for "Next" button on Step 2
gotoStep4Button.addEventListener('click', function () {
    step3.classList.add('hidden');
    step4.classList.remove('hidden');
});

</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Include jQuery -->
<script>
    function displaySelectedFiles() {
        var input = document.getElementById('fileInput');
        var fileListContainer = $('#fileList');
        
        // fileListContainer.empty(); // Clear the file list

        for (var i = 0; i < input.files.length; i++) {
            var file = input.files[i];

            console.log(file); //parse the file for php to process

            // Create a hidden input for each file
            var hiddenInput = $('<input>')
                .attr('type', 'hidden')
                .attr('name', 'files[]')
                .val(JSON.stringify(file));

            // Append the hidden input to the form
            $('#registerForm').append(hiddenInput);

            // Create a div to display the file name
            var fileDiv = $('<div>')
                .addClass('file-item')
                .text(file.name);

            // Create a remove button for each file
            var removeButton = $('<button>')
                .html('<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16"><path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/></svg>')
                .addClass('remove-button');

            // Append the remove button to the file div
            fileDiv.append(removeButton);

            // Append the file div to the file list
            fileListContainer.append(fileDiv);
            
            // Add a click event to remove the file when the remove button is clicked
            removeButton.click(function() {
                hiddenInput.remove(); // Remove the hidden input
                fileDiv.remove(); // Remove the file div
            });
        }
    }
</script>

</body>
</html>
