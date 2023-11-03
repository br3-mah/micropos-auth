<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<link href="favicons/1567-images-favicon.png" rel="icon">
<title>EcoAgro - SignUp</title>
<meta name="description" content="ecoAgro">
<meta name="author" content="harnishdesign.net">
<link rel="shortcut icon" href="fav.png" />

<!-- Web Fonts
========================= -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" type="text/css">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
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
    width: 100%;
    text-align: center;
    padding: 2px;
    background-color: #ffffff; /* Background color of grid items */
    border: 1px solid #ffffff; /* Border around each grid item */
    border-radius: 5px; /* Rounded corners */
    cursor: pointer; /* Change cursor to pointer on hover for interactivity */
    font-size:10px;
}
.grid-file-item-btn{
    text-align: center;
    background-color: #ffffff; /* Background color of grid items */
    border: 1px solid #ffffff; /* Border around each grid item */
    border-radius: 100%; /* Rounded corners */
    cursor: pointer; /* Change cursor to pointer on hover for interactivity */
}
.grid-item {
    text-align: center;
    padding: 20px;
    background-color: #ffffff; /* Background color of grid items */
    border: 1px solid #ffffff; /* Border around each grid item */
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
    padding: 0;
}

/* Styles for each file item */
.file-list-item {
    display: flex;
    align-items: center;
    justify-content: space-between;
    border: 1px solid #ffffff;
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
    border-radius: 100%;
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
    background-color: #f6f7f7; /* Change to your desired background color */
    color: #29444a; /* Change to your desired text color */
    border-radius: 4px;
    cursor: pointer;
    font-size: 12px;
}

/* Style the icon using Font Awesome classes */
.file-input-label i {
    margin-right: 20px; /* Adjust as needed for spacing */
    font-size: 30px;
}

.purpose-radio-input {
    display: none;
}
.w-full{
  width: 100% !important;
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
    // var_dump($destination);
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
              <p class="text-end text-2 text-muted fw-300">Already a member? <a class="fw-300" href="https://auth.ecoagrozm.com/login?source={{$source}}&destination={{$destination}}">Sign in now</a></p>
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
                      <div class="grid-item"
                      data-aos="fade-up"
                      data-aos-offset="200"
                      data-aos-delay="10"
                      data-aos-duration="1000"
                      data-aos-easing="ease-in-out"
                      data-aos-mirror="true">
                          <input type="radio" name="purpose" id="advisory" class="purpose-radio-input" value="advisory" checked>
                          <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-chat-square-dots" viewBox="0 0 16 16">
                              <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                              <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                          </svg>
                          </div>
                          <p>Advisory</p>
                      </div>
                      <div class="grid-item"
                      data-aos="fade-up"
                      data-aos-offset="200"
                      data-aos-delay="100"
                      data-aos-duration="1000"
                      data-aos-easing="ease-in-out"
                      data-aos-mirror="true">
                          <input type="radio" name="purpose" id="marketplace" class="purpose-radio-input" value="marketplace">
                          <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-shop-window" viewBox="0 0 16 16">
                                <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h12V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zm2 .5a.5.5 0 0 1 .5.5V13h8V9.5a.5.5 0 0 1 1 0V13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9.5a.5.5 0 0 1 .5-.5z"/>
                            </svg>
                          </div>
                          <p>Marketplace</p>
                      </div>
                      <div class="grid-item"
                      data-aos="fade-up"
                      data-aos-offset="200"
                      data-aos-delay="200"
                      data-aos-duration="1000"
                      data-aos-easing="ease-in-out"
                      data-aos-mirror="true">
                          <input type="radio" name="purpose" id="call-center" class="purpose-radio-input" value="call center">
                          <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-headset" viewBox="0 0 16 16">
                                <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z"/>
                            </svg>
                          </div>
                          <p>Call Center</p>
                      </div>
                      {{-- <div class="grid-item"
                      data-aos="fade-up"
                      data-aos-offset="200"
                      data-aos-delay="300"
                      data-aos-duration="1000"
                      data-aos-easing="ease-in-out"
                      data-aos-mirror="true">
                          <input type="radio" name="purpose" id="payments-solution" class="purpose-radio-input" value="payment solution">
                          <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-credit-card-2-back-fill" viewBox="0 0 16 16">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5H0V4zm11.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-2zM0 11v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1H0z"/>
                            </svg>
                          </div>
                          <p>Payments Solution</p>
                      </div> --}}
                  </div>
                  <div class="d-grid my-4">
                    <button style="background-color:#29444a;" class="btn text-white shadow-none fw-400" id="gotoStep2" type="button">Next</button>
                  </div>
                </div>

                <div id="step2">
                  <div style="padding: 2%; border-radius: 4px; border: 1px solid #481616; color: #ffffff; background-color: #770614;">
                    <small style="margin: 0;">
                        <strong>Note:</strong> Your documents will need to undergo a review and approval process before you gain access to the advisory service.
                    </small>
                </div>
                
                  <br>
                  <h6>
                    <a id="gotoStep1" type="button">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                      </svg>
                    </a>
                    &nbsp;
                    Upload any relevant documents
                  </h6>
                  <div class="file-uploader" style="width: 100%">
                      <!-- Hidden file input -->
                      <input type="hidden" name="source" value="{{ $source ?? '' }}">
                  
                      <!-- Use a label for file input and add a Font Awesome icon -->
                      <input type="file" class="file-input visually-hidden" id="fileInput" accept=".pdf, .doc, .docx" name="files">
                      <label id="btnfileInput" for="fileInput" class="file-input-label">
                        <svg style="color: #3b5f67" xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-cloud-upload-fill" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M8 0a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 4.095 0 5.555 0 7.318 0 9.366 1.708 11 3.781 11H7.5V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11h4.188C14.502 11 16 9.57 16 7.773c0-1.636-1.242-2.969-2.834-3.194C12.923 1.999 10.69 0 8 0zm-.5 14.5V11h1v3.5a.5.5 0 0 1-1 0z"/>
                        </svg> <!-- Replace with the desired icon -->
                          <span>Upload your files</span>
                      </label>

                      
                      <input type="file" class="file-input visually-hidden" id="fileInput1" accept=".pdf, .doc, .docx" name="files1">
                      <label id="btnfileInput1" for="fileInput1" class="file-input-label">
                        <svg style="color: #3b5f67" xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-cloud-upload-fill" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M8 0a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 4.095 0 5.555 0 7.318 0 9.366 1.708 11 3.781 11H7.5V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11h4.188C14.502 11 16 9.57 16 7.773c0-1.636-1.242-2.969-2.834-3.194C12.923 1.999 10.69 0 8 0zm-.5 14.5V11h1v3.5a.5.5 0 0 1-1 0z"/>
                        </svg> <!-- Replace with the desired icon -->
                          <span>Upload your files </span>
                      </label>
                      
                      <input type="file" class="file-input visually-hidden" id="fileInput2" accept=".pdf, .doc, .docx" name="files2">
                      <label id="btnfileInput2" for="fileInput2" class="file-input-label">
                        <svg style="color: #3b5f67" xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-cloud-upload-fill" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M8 0a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 4.095 0 5.555 0 7.318 0 9.366 1.708 11 3.781 11H7.5V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11h4.188C14.502 11 16 9.57 16 7.773c0-1.636-1.242-2.969-2.834-3.194C12.923 1.999 10.69 0 8 0zm-.5 14.5V11h1v3.5a.5.5 0 0 1-1 0z"/>
                        </svg> <!-- Replace with the desired icon -->
                          <span>Upload your files </span>
                      </label>
                      
                      <input type="file" class="file-input visually-hidden" id="fileInput3" accept=".pdf, .doc, .docx" name="files3">
                      <label id="btnfileInput3" for="fileInput3" class="file-input-label">
                        <svg style="color: #3b5f67" xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-cloud-upload-fill" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M8 0a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 4.095 0 5.555 0 7.318 0 9.366 1.708 11 3.781 11H7.5V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11h4.188C14.502 11 16 9.57 16 7.773c0-1.636-1.242-2.969-2.834-3.194C12.923 1.999 10.69 0 8 0zm-.5 14.5V11h1v3.5a.5.5 0 0 1-1 0z"/>
                        </svg> <!-- Replace with the desired icon -->
                          <span>Upload your files </span>
                      </label>
                      
                      <input type="file" class="file-input visually-hidden" id="fileInput4" accept=".pdf, .doc, .docx" name="files4">
                      <label id="btnfileInput4" for="fileInput4" class="file-input-label">
                        <svg style="color: #3b5f67" xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-cloud-upload-fill" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M8 0a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 4.095 0 5.555 0 7.318 0 9.366 1.708 11 3.781 11H7.5V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11h4.188C14.502 11 16 9.57 16 7.773c0-1.636-1.242-2.969-2.834-3.194C12.923 1.999 10.69 0 8 0zm-.5 14.5V11h1v3.5a.5.5 0 0 1-1 0z"/>
                        </svg> <!-- Replace with the desired icon -->
                          <span>Upload your files </span>
                      </label>
                      
                      <!-- Uploaded file list -->
                      <div class="pt-2" style="width: 100%; line-height: ;">
                          <ul class="file-list" id="fileList"></ul>
                          <ul class="file-list" id="fileList1"></ul>
                          <ul class="file-list" id="fileList2"></ul>
                          <ul class="file-list" id="fileList3"></ul>
                          <ul class="file-list" id="fileList4"></ul>
                          <ul class="file-list"></ul>
                      </div>
                  </div>
                  <div class="d-grid flex gap-2 my-4">
                    {{-- <button class="btn btn-dark shadow-none fw-400" id="gotoStep1" type="button">Back</button> --}}
                    <button style="background-color:#29444a;" class="btn text-white shadow-none fw-400" id="gotoStep3" type="button">Next</button>
                  </div>
                </div>
                <div id="step3">
                  @if ($destination !== null)
                  <a id="gotoStep22" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                    </svg>
                  </a>
                  @endif
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
                    <button  style="background-color:#29444a" class="btn text-white shadow-none fw-400" id="gotoStep4" type="button">Next</button>
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
                    <button style="background-color:#29444a;" class="btn text-white shadow-none fw-400" type="submit">Sign Up</button>
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
              <div class="logo mt-5 mb-5 mb-md-0"> <a class="d-flex" href="https://ecoagrozm.com" title="ecoAgro"><img src="{{ asset('public/img/logo.png')}}" alt="ecoAgro"></a> </div>
            </div>
          </div>
          <div class="row g-0 my-auto">
            <div class="col-11 col-md-10 mx-auto">
              <h1 class="text-13 fw-300 mb-4">Join the largest Farming community. <h3 class="fw-300 text-9 mb-2">Create an Account</h3></h1>
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

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
    // ... your other initialisation options here ...
    once: true,
    });
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
const destination = '{{$destination}}';
step2.classList.add('hidden');
step3.classList.add('hidden');
step4.classList.add('hidden');

if (destination !== null) {
  if (destination == 'call-center') {
    const callCenter = document.getElementById("call-center");
    callCenter.checked = true;
    if (type == 'farmer') {
      step1.classList.add('hidden');
      step2.classList.add('hidden');
      step3.classList.remove('hidden');
    } else {
      step1.classList.add('hidden');
      step2.classList.remove('hidden');
    }
  }
  if (destination == 'marketplace') {
    const marketPlace = document.getElementById("marketplace");
    marketPlace.checked = true;
    if (type == 'farmer') {
      step1.classList.add('hidden');
      step2.classList.add('hidden');
      step3.classList.remove('hidden');
    } else {
      step1.classList.add('hidden');
      step2.classList.remove('hidden');
    }
  }
  if (destination == 'payment') {
    const paySolution = document.getElementById("payment-solution");
    paySolution.checked = true;
    if (type == 'farmer') {
      step1.classList.add('hidden');
      step2.classList.add('hidden');
      step3.classList.remove('hidden');
    } else {
      step1.classList.add('hidden');
      step2.classList.remove('hidden');
    }
  }
  
}

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

if (destination !== null){
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
}
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




<script>

// JavaScript to handle file selection and removal
const fileInput = document.getElementById('fileInput');
const fileInput1 = document.getElementById('fileInput1');
const fileInput2 = document.getElementById('fileInput2');
const fileInput3 = document.getElementById('fileInput3');
const fileInput4 = document.getElementById('fileInput4');

const fileList = document.getElementById('fileList');
const fileList1 = document.getElementById('fileList1');
const fileList2 = document.getElementById('fileList2');
const fileList3 = document.getElementById('fileList3');
const fileList4 = document.getElementById('fileList4');



const btnfileInput = document.getElementById('btnfileInput');
const btnfileInput1 = document.getElementById('btnfileInput1');
const btnfileInput2 = document.getElementById('btnfileInput2');
const btnfileInput3 = document.getElementById('btnfileInput3');
const btnfileInput4 = document.getElementById('btnfileInput4');

 btnfileInput1.style.display = 'none';
 btnfileInput2.style.display = 'none';
 btnfileInput3.style.display = 'none';
 btnfileInput4.style.display = 'none';

const uploadedFiles = [];
// const uploadedFilesJson = [];

// JavaScript to handle file selection and removal
fileInput.addEventListener('change', function () {
    const files = this.files; 
    
    
    // Initialize an array to store uploaded file names
    if (files.length > 0 && uploadedFiles.length < 5) {
      
        // Add the uploaded files to the uploadedFiles array
        Array.from(files).forEach(file => {
          
            uploadedFiles.push(file);

            const listItem = document.createElement('li');
            listItem.className = 'file-item pb-1 w-full';
            listItem.setAttribute('data-aos', 'fade-right');
            listItem.setAttribute('data-aos-offset', '200');
            listItem.setAttribute('data-aos-delay', '10');
            listItem.setAttribute('data-aos-duration', '500');
            listItem.setAttribute('data-aos-easing', 'ease-in-out');
            listItem.setAttribute('data-aos-anchor-placement', 'top-bottom');
            listItem.setAttribute('data-aos-mirror', 'false');
            listItem.setAttribute('data-aos-once', 'true');
            listItem.innerHTML = `
            
                <span class="grid-file-item">
                  <span>
                    <svg style="color:#56B493" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                      <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                    </svg>
                  </span>
                  ${file.name}
                  <!---<button style="font-weight:bold; color:red" title="Remove" class="grid-file-item-btn" data-name="${file.name}">
                    x
                  </button>-->
                </span>
            `;

            fileList.appendChild(listItem);
        });
        // alert(uploadedFiles.length);
        if(uploadedFiles.length < 5){
          btnfileInput.style.display = 'none';
          btnfileInput1.style.display = 'block';
          btnfileInput2.style.display = 'none';
          btnfileInput3.style.display = 'none';
          btnfileInput4.style.display = 'none';
        }
    }else{
      
        btnfileInput.style.display = 'none';
        btnfileInput1.style.display = 'none';
        btnfileInput2.style.display = 'none';
        btnfileInput3.style.display = 'none';
        btnfileInput4.style.display = 'none';
    }
});

fileList.addEventListener('click', function (e) {
  // alert(e.target.classList.value);
  // console.log(e.target.getAttribute('data-name'));
    if (e.target.classList.value == 'grid-file-item-btn') {
        const fileName = e.target.getAttribute('data-name');
        const fileItem = e.target.parentElement;
        fileItem.remove();
        btnfileInput.style.display = 'block';
        btnfileInput1.style.display = 'none';
        btnfileInput2.style.display = 'none';
        btnfileInput3.style.display = 'none';
        btnfileInput4.style.display = 'none';
        // Remove the file name from the uploadedFiles array
        const fileIndex = uploadedFiles.indexOf(fileName);
        if (fileIndex !== -1) {
            uploadedFiles.splice(fileIndex, 1);
        }
        // Update the hidden input with the updated uploaded files
        myUploadedFilesInput.value = JSON.stringify(uploadedFiles);
        // You can perform additional actions here (e.g., remove the file from the server).

    }
});


fileInput1.addEventListener('change', function () {
    const files = this.files; 
    // Initialize an array to store uploaded file names

    if (files.length > 0 && uploadedFiles.length < 5) {
      
        // Add the uploaded files to the uploadedFiles array
        Array.from(files).forEach(file => {
          
            uploadedFiles.push(file);

            const listItem = document.createElement('li');
            listItem.className = 'file-item pb-1 w-full';
            listItem.setAttribute('data-aos', 'fade-right');
            listItem.setAttribute('data-aos-offset', '200');
            listItem.setAttribute('data-aos-delay', '10');
            listItem.setAttribute('data-aos-duration', '500');
            listItem.setAttribute('data-aos-easing', 'ease-in-out');
            listItem.setAttribute('data-aos-anchor-placement', 'top-bottom');
            listItem.setAttribute('data-aos-once', 'true');
            listItem.innerHTML = `
                <span class="grid-file-item">
                  <span>
                    <svg style="color:#56B493" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                      <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                    </svg>
                  </span>
                  ${file.name}
                  <!---<button style="font-weight:bold; color:red" title="Remove" class="grid-file-item-btn" data-name="${file.name}">
                    x
                  </button>-->
                </span>
            `;

            fileList1.appendChild(listItem);
        });
        if(uploadedFiles.length  < 5){
          btnfileInput.style.display = 'none';
          btnfileInput1.style.display = 'none';
          btnfileInput2.style.display = 'block';
          btnfileInput3.style.display = 'none';
          btnfileInput4.style.display = 'none';
        }
    }else{
      
      btnfileInput.style.display = 'none';
      btnfileInput1.style.display = 'none';
      btnfileInput2.style.display = 'none';
      btnfileInput3.style.display = 'none';
      btnfileInput4.style.display = 'none';
  }
});

fileList1.addEventListener('click', function (e) {
  
  console.log(e.target.classList.value);
    if (e.target.classList.value == 'grid-file-item-btn') {
        const fileName = e.target.getAttribute('data-name');
        const fileItem = e.target.parentElement;
        fileItem.remove();
        btnfileInput.style.display = 'none';
        btnfileInput1.style.display = 'block';
        btnfileInput2.style.display = 'none';
        btnfileInput3.style.display = 'none';
        btnfileInput4.style.display = 'none';
        // Remove the file name from the uploadedFiles array
        const fileIndex = uploadedFiles.indexOf(fileName);
        if (fileIndex !== -1) {
            uploadedFiles.splice(fileIndex, 1);
        }
        // Update the hidden input with the updated uploaded files
        // myUploadedFilesInput.value = JSON.stringify(uploadedFiles);
        // You can perform additional actions here (e.g., remove the file from the server).
        

    }
});

fileInput2.addEventListener('change', function () {
    const files = this.files; 
    // Initialize an array to store uploaded file names

    if (files.length > 0 && uploadedFiles.length < 5) {
      
        // Add the uploaded files to the uploadedFiles array
        Array.from(files).forEach(file => {
          
            uploadedFiles.push(file);

            const listItem = document.createElement('li');
            listItem.className = 'file-item pb-1 w-full';
            listItem.setAttribute('data-aos', 'fade-right');
            listItem.setAttribute('data-aos-offset', '200');
            listItem.setAttribute('data-aos-delay', '10');
            listItem.setAttribute('data-aos-duration', '500');
            listItem.setAttribute('data-aos-easing', 'ease-in-out');
            listItem.setAttribute('data-aos-anchor-placement', 'top-bottom');
            listItem.setAttribute('data-aos-once', 'true');
            listItem.innerHTML = `
                <span class="grid-file-item">
                  <span>
                    <svg style="color:#56B493" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                      <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                    </svg>
                  </span>
                  ${file.name}
                  <!---<button style="font-weight:bold; color:red" title="Remove" class="grid-file-item-btn" data-name="${file.name}">
                    x
                  </button>-->
                </span>
            `;

            fileList2.appendChild(listItem);
        });

        if(uploadedFiles.length  < 5){
          btnfileInput.style.display = 'none';
          btnfileInput1.style.display = 'none';
          btnfileInput2.style.display = 'none';
          btnfileInput3.style.display = 'block';
          btnfileInput4.style.display = 'none';
        } 
    }else{
      
      btnfileInput.style.display = 'none';
      btnfileInput1.style.display = 'none';
      btnfileInput2.style.display = 'none';
      btnfileInput3.style.display = 'none';
      btnfileInput4.style.display = 'none';
  }
});

fileList2.addEventListener('click', function (e) {
  
  console.log(e.target.classList.value);
    if (e.target.classList.value == 'grid-file-item-btn') {
        const fileName = e.target.getAttribute('data-name');
        const fileItem = e.target.parentElement;
        fileItem.remove();

        btnfileInput.style.display = 'none';
        btnfileInput1.style.display = 'none';
        btnfileInput2.style.display = 'block';
        btnfileInput3.style.display = 'none';
        btnfileInput4.style.display = 'none';
        // Remove the file name from the uploadedFiles array
        const fileIndex = uploadedFiles.indexOf(fileName);
        if (fileIndex !== -1) {
            uploadedFiles.splice(fileIndex, 1);
        }
        // Update the hidden input with the updated uploaded files
        // myUploadedFilesInput.value = JSON.stringify(uploadedFiles);
        // You can perform additional actions here (e.g., remove the file from the server).
    }
});

fileInput3.addEventListener('change', function () {
    const files = this.files; 
    // Initialize an array to store uploaded file names

    if (files.length > 0 && uploadedFiles.length < 5) {
      
        // Add the uploaded files to the uploadedFiles array
        Array.from(files).forEach(file => {
          
            uploadedFiles.push(file);

            const listItem = document.createElement('li');
            listItem.className = 'file-item pb-1 w-full';
            listItem.setAttribute('data-aos', 'fade-right');
            listItem.setAttribute('data-aos-offset', '200');
            listItem.setAttribute('data-aos-delay', '10');
            listItem.setAttribute('data-aos-duration', '500');
            listItem.setAttribute('data-aos-easing', 'ease-in-out');
            listItem.setAttribute('data-aos-anchor-placement', 'top-bottom');
            listItem.setAttribute('data-aos-once', 'true');
            listItem.innerHTML = `
                <span class="grid-file-item">
                  <span>
                    <svg style="color:#56B493" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                      <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                    </svg>
                  </span>
                  ${file.name}
                  <!---<button style="font-weight:bold; color:red" title="Remove" class="grid-file-item-btn" data-name="${file.name}">
                    x
                  </button>-->
                </span>
            `;

            fileList3.appendChild(listItem);
        });

        if(uploadedFiles.length  < 5){
          btnfileInput.style.display = 'none';
          btnfileInput1.style.display = 'none';
          btnfileInput2.style.display = 'none';
          btnfileInput3.style.display = 'none';
          btnfileInput4.style.display = 'block';
        }
    }else{
      
      btnfileInput.style.display = 'none';
      btnfileInput1.style.display = 'none';
      btnfileInput2.style.display = 'none';
      btnfileInput3.style.display = 'none';
      btnfileInput4.style.display = 'none';
  }
});

fileList3.addEventListener('click', function (e) {
  
  console.log(e.target.classList.value);
    if (e.target.classList.value == 'grid-file-item-btn') {
        const fileName = e.target.getAttribute('data-name');
        const fileItem = e.target.parentElement;
        fileItem.remove();
        btnfileInput.style.display = 'none';
        btnfileInput1.style.display = 'none';
        btnfileInput2.style.display = 'none';
        btnfileInput3.style.display = 'block';
        btnfileInput4.style.display = 'none';
        // Remove the file name from the uploadedFiles array
        const fileIndex = uploadedFiles.indexOf(fileName);
        if (fileIndex !== -1) {
            uploadedFiles.splice(fileIndex, 1);
        }
        // Update the hidden input with the updated uploaded files
        // myUploadedFilesInput.value = JSON.stringify(uploadedFiles);
        // You can perform additional actions here (e.g., remove the file from the server).

    }
});

fileInput4.addEventListener('change', function () {
    const files = this.files; 
    // Initialize an array to store uploaded file names

    if (files.length > 0 && uploadedFiles.length < 5) {
      
        // Add the uploaded files to the uploadedFiles array
        Array.from(files).forEach(file => {
          
            uploadedFiles.push(file);

            const listItem = document.createElement('li');
            listItem.className = 'file-item pb-1 w-full';
            listItem.setAttribute('data-aos', 'fade-right');
            listItem.setAttribute('data-aos-offset', '200');
            listItem.setAttribute('data-aos-delay', '10');
            listItem.setAttribute('data-aos-duration', '500');
            listItem.setAttribute('data-aos-easing', 'ease-in-out');
            listItem.setAttribute('data-aos-anchor-placement', 'top-bottom');
            listItem.setAttribute('data-aos-once', 'true');
            listItem.innerHTML = `
                <span class="grid-file-item">
                  <span>
                    <svg style="color:#56B493" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                      <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                    </svg>
                  </span>
                  ${file.name}
                  <!---<button style="font-weight:bold; color:red" title="Remove" class="grid-file-item-btn" data-name="${file.name}">
                    x
                  </button>-->
                </span>
            `;

            fileList4.appendChild(listItem);
        });
        if(uploadedFiles.length  < 5){
          btnfileInput.style.display = 'none';
          btnfileInput1.style.display = 'none';
          btnfileInput2.style.display = 'none';
          btnfileInput3.style.display = 'none';
          btnfileInput4.style.display = 'none';
        }
    }else{
      
      btnfileInput.style.display = 'none';
      btnfileInput1.style.display = 'none';
      btnfileInput2.style.display = 'none';
      btnfileInput3.style.display = 'none';
      btnfileInput4.style.display = 'none';
  }
});

fileList4.addEventListener('click', function (e) {
  
  console.log(e.target.classList.value);
    if (e.target.classList.value == 'grid-file-item-btn') {
        const fileName = e.target.getAttribute('data-name');
        const fileItem = e.target.parentElement;
        fileItem.remove();
        btnfileInput.style.display = 'none';
        btnfileInput1.style.display = 'none';
        btnfileInput2.style.display = 'none';
        btnfileInput3.style.display = 'none';
        btnfileInput4.style.display = 'block';
        // Remove the file name from the uploadedFiles array
        const fileIndex = uploadedFiles.indexOf(fileName);
        if (fileIndex !== -1) {
            uploadedFiles.splice(fileIndex, 1);
        }
        // Update the hidden input with the updated uploaded files
        // myUploadedFilesInput.value = JSON.stringify(uploadedFiles);
        // You can perform additional actions here (e.g., remove the file from the server).
    }
});
</script>
</body>
</html>