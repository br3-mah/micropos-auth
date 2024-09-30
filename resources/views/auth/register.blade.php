<!DOCTYPE html>

<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Create an Account :: MicroPOS</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="public/data/js/bootstrap.min.css">

    <!-- External Css -->
    <link rel="stylesheet" href="public/data/js/line-awesome.min.css">
    <link rel="stylesheet" href="public/data/js/owl.carousel.min.css">

    <!-- Custom Css --> 
    <link rel="stylesheet" type="text/css" href="public/data/js/main.css">
    <link rel="stylesheet" type="text/css" href="public/data/js/theme-1.css">

    <!-- Fonts -->
    <link href="public/data/js/css2" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Line Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css">

    <!-- Favicon -->
    <link rel="icon" href="public/data/img/fav.jpeg">
    {{-- <link rel="apple-touch-icon" href="https://uigaint.com/demo/html/anfraa/login-register-1/assets/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="https://uigaint.com/demo/html/anfraa/login-register-1/assets/images/icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="https://uigaint.com/demo/html/anfraa/login-register-1/assets/images/icon-114x114.png"> --}}


  </head>
  <body>
    
    <div class="ugf-wrapper flat-grey-bg">
      
      <div class="ugf-content-block">
        <div class="logo">
          <a href="#">
            <img width="320" class="light-logo" src="public/data/img/2.png" alt="logo">
            <img width="250" class="dark-logo" src="public/data/img/2.png" alt="logo">
          </a>
        </div>
        
        {{-- Step 1 Email Verification --}}
        <div class="container-md">
          <div class="row">
            <div class="col-lg-7 offset-lg-5 p-sm-0">
              <div class="ugf-content pt340">
                <h2>Verify email address</h2>
                <p>Please check your email <strong id="output"></strong> <br> and put the verification code here</p>
                <form action="{{ route('verify-otp') }}" method="POST" class="form-flex email-verification-form" id="commentForm" novalidate="novalidate">
                    @csrf
                    <div class="form-group">
                      <input type="text" name="otp[]" placeholder="0" class="form-control" maxlength="1" required="">
                    </div>
                    <div class="form-group">
                      <input type="text" name="otp[]" placeholder="0" class="form-control" maxlength="1" required="">
                    </div>
                    <div class="form-group">
                      <input type="text" name="otp[]" placeholder="0" class="form-control" maxlength="1" required="">
                    </div>
                    <div class="form-group">
                      <input type="text" name="otp[]" placeholder="0" class="form-control" maxlength="1" required="">
                    </div>
                    <div class="form-group">
                      <input type="text" name="otp[]" placeholder="0" class="form-control" maxlength="1" required="">
                    </div>
                    <button type="submit" class="btn"><span>Next</span> <i class="las la-arrow-right"></i></button>
                  </form>
                <p class="resend-code">Don't get? <a href="#">Resend code</a></p>
              </div>
            </div>
          </div>
        </div>


        {{-- Step 2 Category --}}
        <div class="container-md" style="display: none;">
          <div class="row">
              <div class="col-lg-7 offset-lg-5 p-sm-0">
                  <div class="ugf-content pt150">
                      <h2>Choose account type</h2>
                      <p>Your email confirmed! <br> Let’s select your account type and go to next step</p>
                      <div class="account-category">
                          <a href="#" class="account-type personal" data-type="sole-trader">
                              <span class="account-icon"><img src="public/data/img/account-personal.png" alt=""></span>
                              <p>Sole Trader</p>
                              <span class="icon"><i class="las la-arrow-right"></i></span>
                          </a>
                          <a href="#" class="account-type business" data-type="private-ltd">
                              <span class="account-icon"><img src="public/data/img/account-business.png" alt=""></span>
                              <p>Private Limited Companies</p>
                              <span class="icon"><i class="las la-arrow-right"></i></span>
                          </a>
                          <a href="#" class="account-type public" data-type="public-ltd-plc">
                              <span class="account-icon"><img src="public/data/img/account-business.png" alt=""></span>
                              <p>Public Limited Companies<br>(PLC)</p>
                              <span class="icon"><i class="las la-arrow-right"></i></span>
                          </a>
                      </div>
                      <button id="nextStepButton" class="btn" style="display: none;">Next</button>
                  </div>
              </div>
          </div>
      </div>
        

        {{-- Step 3 --}}
        <div class="container-md" style="display: none;">
          <div class="row">
            <div class="col-lg-7 offset-lg-5 p-sm-0">
              <div class="ugf-content pt150">
                {{-- <a href="#" class="prev-page">Back to Previous</a> --}}
                <h2>Account details</h2>
                <p>Enter some fo your information &amp; secure password to go next step!</p>
                <form action="#" method="POST" class="account-form" id="commentForm2" novalidate="novalidate">
                  @csrf
                  <div class="row">
                    <div class="col-sm-6 p-sm-0">
                      <div class="form-group">
                        <label for="inputFname">First Name</label>
                        <input type="text" name="fname" placeholder="e.g. Jhon" class="form-control" id="inputFname" required="">
                      </div>
                    </div>
                    <div class="col-sm-6 p-sm-0">
                      <div class="form-group">
                        <label for="inputLname">Last Name</label>
                        <input type="text" name="lname" placeholder="e.g. Smith" class="form-control" id="inputLname" required="">
                      </div>
                    </div>
                    <div class="col-sm-6 p-sm-0">
                      <div class="form-group">
                        <label for="inputLname">TPIN </label>
                        <input type="text" name="tpin" placeholder="" class="form-control" id="inputLname" required="">
                      </div>
                    </div>
                    <div class="col-sm-6 p-sm-0">
                      <div class="form-group">
                        <label for="inputLname">Legal Business Name </label>
                        <input type="text" name="bizname" placeholder="" class="form-control" id="inputLname" required="">
                      </div>
                    </div>
                    <div class="col-md-6 p-sm-0">
                      <div class="form-group">
                        <label for="inputPhone">Phone Number</label>
                        <input type="text" name="phone" placeholder="e.g. +99 123 4567 890" class="form-control" id="inputPhone" required="">
                      </div>
                    </div>
                    <div class="col-md-6 p-sm-0">
                      <div class="form-group">
                        <label for="inputDate">Date of Birth</label>
                        <div class="birth-date">
                          <div class="select-input birth-date-input">
                            <span></span>
                            <select id="inputDate" name="date" class="form-control">
                              <option value="">Date</option>
                              <option value="01">01</option>
                              <option value="02">02</option>
                              <option value="03">03</option>
                              <option value="04">04</option>
                              <option value="05">05</option>
                              <option value="06">06</option>
                              <option value="07">07</option>
                              <option value="08">08</option>
                              <option value="09">09</option>
                              <option value="10">10</option>
                              <option value="11">11</option>
                              <option value="12">12</option>
                              <option value="13">13</option>
                              <option value="14">14</option>
                              <option value="15">15</option>
                              <option value="16">16</option>
                              <option value="17">17</option>
                              <option value="18">18</option>
                              <option value="19">19</option>
                              <option value="20">20</option>
                              <option value="21">21</option>
                              <option value="22">22</option>
                              <option value="23">23</option>
                              <option value="24">24</option>
                              <option value="25">25</option>
                              <option value="26">26</option>
                              <option value="27">27</option>
                              <option value="28">28</option>
                              <option value="29">29</option>
                              <option value="30">30</option>
                              <option value="31">31</option> <!-- Add this for months that have 31 days -->
                            </select>
                          </div>
                          <div class="select-input birth-date-input">
                            <span></span>
                            <select id="inputDate" name="month" class="form-control">
                              <option value="">Month</option>
                              <option value="01">01</option>
                              <option value="02">02</option>
                              <option value="03">03</option>
                              <option value="04">04</option>
                              <option value="05">05</option>
                              <option value="06">06</option>
                              <option value="07">07</option>
                              <option value="08">08</option>
                              <option value="09">09</option>
                              <option value="10">10</option>
                              <option value="11">11</option>
                              <option value="12">12</option> <!-- Add this for months that have 31 days -->
                            </select>
                          </div>
                          <div class="select-input birth-date-input">
                            <span></span>
                            <select id="inputDate" name="year" class="form-control">
                            <option value="">Year</option>
                            <option value="1990">1990</option>
                            <option value="1991">1991</option>
                            <option value="1992">1992</option>
                            <option value="1993">1993</option>
                            <option value="1994">1994</option>
                            <option value="1995">1995</option>
                            <option value="1996">1996</option>
                            <option value="1997">1997</option>
                            <option value="1998">1998</option>
                            <option value="1999">1999</option>
                            <option value="2000">2000</option> 
                            <option value="2001">2001</option>
                            <option value="2002">2002</option>
                            <option value="2003">2003</option>
                            <option value="2004">2004</option>
                            <option value="2005">2005</option>
                            <option value="2006">2006</option>
                            <option value="2007">2007</option>
                            <option value="2008">2008</option>
                            <option value="2009">2009</option>
                            <option value="2010">2010</option>
                          </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group pass-group">
                    <label for="inputPass">Password</label>
                    <input type="password" id="inputPass" name="password" class="form-control" placeholder="8+ Characters" required="" oninput="updateProgressBar()">
                    <div class="pass-toggler-btn">
                      <i id="eye" class="lar la-eye"></i>
                      <i id="eye-slash" class="lar la-eye-slash"></i>
                    </div>
                  </div>
                  <div class="form-group">
                    <div id="progress-bar" class="progress">
                      <div id="progress" class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div id="suggestions">
                    <p class="suggestion">
                      Minimum 8 characters long and containing at least one numeric, uppercase, lowercase, and special character.
                    </p>
                  </div>
                  
                  <div class="form-group check-gender">
                    <div class="custom-radio">
                      <input type="radio" name="gender" class="custom-control-input" id="Gmale" required="">
                      <label class="custom-control-label" for="Gmale">Male</label>
                    </div>
                    <div class="custom-radio">
                      <input type="radio" name="gender" class="custom-control-input" id="Gfemale" required="">
                      <label class="custom-control-label" for="Gfemale">Female</label>
                    </div>
                  </div>
                  <button class="btn"><span>Next Step</span> <i class="las la-arrow-right"></i></button>
                </form>
              </div>
            </div>
          </div>
        </div>

        
      </div>

      
      <div class="ugf-sidebar flex-bottom ugf-sidebar-bg-2 sidebar-steps">
        <div class="steps">
          <div class="step step-onprocess">
            <span>1</span>
            <p>Email verification</p>
          </div>
          <div class="step">
            <span>2</span>
            <p>Category</p>
          </div>
          <div class="step">
            <span>3</span>
            <p>Account Details</p>
          </div>
          {{-- <div class="step">
            <span>4</span>
            <p>Login Info</p>
          </div> --}}
           {{--<div class="step">
            <span>5</span>
            <p>Billing Details</p>
          </div> --}}
        </div>
      </div>
    </div>

    <script>
      // Wait for the DOM to be fully loaded
      document.addEventListener('DOMContentLoaded', function() {
        let currentStep = 1;
        const totalSteps = 5;

        function updateSidebarSteps(step) {
            document.querySelectorAll('.ugf-sidebar .steps .step').forEach((el, index) => {
                if (index + 1 < step) {
                    el.classList.add('step-completed');
                    el.classList.remove('step-onprocess');
                } else if (index + 1 === step) {
                    el.classList.add('step-onprocess');
                    el.classList.remove('step-completed');
                } else {
                    el.classList.remove('step-completed', 'step-onprocess');
                }
            });
        }

        function showStep(step) {
            document.querySelectorAll('.ugf-content-block .container-md').forEach((el, index) => {
                if (index + 1 === step) {
                    el.style.display = 'block';
                } else {
                    el.style.display = 'none';
                }
            });
            updateSidebarSteps(step);
        }

        function nextStep() {
            if (currentStep < totalSteps) {
                currentStep++;
                showStep(currentStep);
            }
        }

        function prevStep() {
            if (currentStep > 1) {
                currentStep--;
                showStep(currentStep);
            }
        }

        // Step 1: Email Verification
        const emailVerificationForm = document.querySelector('.email-verification-form');
          if (emailVerificationForm) {
              emailVerificationForm.addEventListener('submit', async function(e) {
                  e.preventDefault();
                  
                  // Gather OTP inputs
                  const otpInputs = emailVerificationForm.querySelectorAll('input[name="otp[]"]');
                  let otpCode = '';
                  
                  otpInputs.forEach(input => {
                      otpCode += input.value; // Combine all input values into a single OTP string
                  });

                  // Validate OTP code format (length, numeric)
                  if (otpCode.length === 5 && /^[0-9]+$/.test(otpCode)) {
                      // Create FormData object to send via AJAX
                      const formData = new FormData();
                      formData.append('otp', otpCode);
                      formData.append('email', sessionStorage.getItem('authmail'));
                      formData.append('_token', document.querySelector('input[name="_token"]').value); // Include CSRF token

                      try {
                          const response = await fetch('api/verify-otp', {
                              method: 'POST',
                              body: formData
                          });

                          const responseData = await response.json();

                          // Check the result from the server response
                          if (responseData.result === 1) {
                              nextStep();
                          } else {
                              // Prevent and show error
                              Swal.fire({
                                icon: 'error',
                                title: 'Invalid OTP',
                                text: 'Invalid OTP code. Please try again.',
                                confirmButtonText: 'Ok'
                              });
                          }
                      } catch (error) {
                          console.error('Error:', error);
                          // toastr.error('An error occurred while verifying the OTP. Please try again.', 'Error', { timeOut: 5000 });
                      }
                  } else {
                      // toastr.warning('Please enter a valid OTP code.', 'Warning', { timeOut: 5000 });
                  }
              });
          }

        // Step 2: Account Type Selection
        const accountTypeLinks = document.querySelectorAll('.account-category .account-type');
        accountTypeLinks.forEach(link => {
            link.addEventListener('click', async function (e) {
                e.preventDefault(); // Prevent default link behavior
                selectedAccountType = this.dataset.type; // Save selected account type
                
                // Remove 'selected' class from all account types and add it to the clicked one
                document.querySelectorAll('.account-category .account-type').forEach(accType => accType.classList.remove('selected'));
                this.classList.add('selected');

                // Create a FormData object to send the selected account type
                const formData = new FormData();
                formData.append('account_type', selectedAccountType);
                formData.append('email', sessionStorage.getItem('authmail'));
                formData.append('_token', document.querySelector('input[name="_token"]').value); // Include CSRF token

                // Send the selected account type to the controller
                try {
                    const response = await fetch('api/select-account-type', {
                        method: 'POST',
                        body: formData
                    });

                    const responseData = await response.json();

                    // Check the result from the server response
                    if (response.ok) {
                        // Proceed to the next step if successful
                        nextStep();
                    }
                } catch (error) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Network Error',
                        text: 'Unable to connect to the server. Please check your internet connection.',
                        confirmButtonText: 'Ok'
                    });
                }
            });
        });


        // Step 3: Account Details
        const accountDetailsForm = document.querySelector('#commentForm2'); // Use the correct form ID
        if (accountDetailsForm) {
            accountDetailsForm.addEventListener('submit', async function(e) {
                e.preventDefault(); // Prevent default form submission

                // Create a FormData object to gather the form data
                const formData = new FormData(accountDetailsForm);
                formData.append('email', sessionStorage.getItem('authmail'));
                // Perform basic validation (you can expand this as needed)
                const requiredFields = ['fname', 'lname', 'tpin', 'bizname', 'phone', 'date', 'month', 'year', 'password', 'gender'];
                let isValid = true;

                requiredFields.forEach(field => {
                    const input = accountDetailsForm.querySelector(`[name="${field}"]`);
                    if (!input.value) {
                        isValid = false;
                        // Add an error message or highlight the field
                        input.classList.add('is-invalid'); // Example: add a class for invalid fields
                    } else {
                        input.classList.remove('is-invalid'); // Remove error if valid
                    }
                });

                if (!isValid) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Validation Error',
                        text: 'Please fill out all required fields.',
                        confirmButtonText: 'Ok'
                    });
                    return; // Stop the process if validation fails
                }

                // Prepare for POST request to the server
                try {
                    const response = await fetch('api/save-account-details', { // Adjust the endpoint URL
                        method: 'POST',
                        body: formData
                    });

                    const responseData = await response.json();

                    // Check the result from the server response
                    if (responseData.result === 1) {
                        // Proceed to the next step if successful
                        nextStep();
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Submission Error',
                            text: 'Unable to save your details. Please try again.',
                            confirmButtonText: 'Ok'
                        });
                    }
                } catch (error) {
                    console.error('Error:', error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Network Error',
                        text: 'Unable to connect to the server. Please check your internet connection.',
                        confirmButtonText: 'Ok'
                    });
                }
            });
        }


        // Step 4: Payment Details
        // Assuming there's a form for payment details
        const paymentDetailsForm = document.querySelector('#paymentDetailsForm');
        if (paymentDetailsForm) {
            paymentDetailsForm.addEventListener('submit', function(e) {
                e.preventDefault();
                // Here you would typically validate and process the payment details
                // For now, we'll just move to the next step
                // nextStep();
            });
        }

        // Step 5: Billing Details
        // Assuming there's a form for billing details
        const billingDetailsForm = document.querySelector('#billingDetailsForm');
        if (billingDetailsForm) {
            billingDetailsForm.addEventListener('submit', function(e) {
                e.preventDefault();
                // Here you would typically validate and save the billing details
                // For now, we'll just complete the wizard
                alert('Wizard completed! Account creation process finished.');
            });
        }


        // Initialize the wizard
        showStep(1);



        const form = document.getElementById('commentForm');
        const inputs = form.querySelectorAll('input[type="text"]');

        inputs.forEach((input, index) => {
            input.addEventListener('input', function(e) {
                if (this.value.length === this.maxLength) {
                    if (index < inputs.length - 1) {
                        inputs[index + 1].focus();
                    }
                }
            });

            input.addEventListener('keydown', function(e) {
                if (e.key === 'Backspace' && this.value.length === 0) {
                    if (index > 0) {
                        inputs[index - 1].focus();
                    }
                }
            });
        });
    });
    </script>
    <script>
      const storedValue = sessionStorage.getItem('authmail');
      document.getElementById('output').innerText = storedValue;
  
      document.addEventListener('DOMContentLoaded', function() {
          const phoneInput = document.getElementById('inputPhone');
          
          function formatPhoneNumber(value) {
              if (!value) return value;
              const phoneNumber = value.replace(/\D/g, '');
              const phoneNumberLength = phoneNumber.length;
              
              if (phoneNumberLength <= 3) return phoneNumber;
              if (phoneNumberLength <= 6) {
                  return `${phoneNumber.slice(0, 3)} ${phoneNumber.slice(3)}`;
              }
              if (phoneNumberLength <= 10) {
                  return `${phoneNumber.slice(0, 3)} ${phoneNumber.slice(3, 6)} ${phoneNumber.slice(6)}`;
              }
              return `${phoneNumber.slice(0, 3)} ${phoneNumber.slice(3, 6)} ${phoneNumber.slice(6, 10)}`;
          }
  
          phoneInput.addEventListener('input', function(e) {
              const formattedInputValue = formatPhoneNumber(e.target.value);
              e.target.value = formattedInputValue;
          });
  
          phoneInput.addEventListener('paste', function(e) {
              e.preventDefault();
              const pastedText = (e.clipboardData || window.clipboardData).getData('text');
              const formattedPastedText = formatPhoneNumber(pastedText);
              document.execCommand('insertText', false, formattedPastedText);
          });
  
          // phoneInput.addEventListener('blur', function(e) {
          //     const phoneNumber = e.target.value.replace(/\D/g, '');
          //     if (phoneNumber.length !== 10) {
          //         // alert('Please enter a valid 10-digit phone number.');
          //         e.target.value = '';
          //     }
          // });
      });
  </script>

<script>
  document.addEventListener("DOMContentLoaded", function() {
      const resendCodeLink = document.querySelector(".resend-code a");
      const outputMessage = document.getElementById("output");
      const form = document.getElementById("commentForm");
  
      resendCodeLink.addEventListener("click", function(event) {
          event.preventDefault();
          resendCodeLink.textContent = "Resending...";
          resendCodeLink.disabled = true;
  
          // Send AJAX request to resend the OTP
          fetch("api/resend-otp", {
              method: 'POST',
              headers: {
                  'Content-Type': 'application/json'
              },
              body: JSON.stringify({ email: sessionStorage.getItem('authmail') }) // You can pass the email if necessary
          })
          .then(response => response.json())
          .then(data => {
              // Display success message
              outputMessage.textContent = data.message;
              resendCodeLink.textContent = "Resend code";
              resendCodeLink.disabled = false;
          })
          .catch(error => {
              // Handle errors
              outputMessage.textContent = "Failed to resend code. Please try again.";
              resendCodeLink.textContent = "Resend code";
              resendCodeLink.disabled = false;
          });
      });
  });
  </script>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="public/data/js/jquery.min.js.download"></script>
    <script src="public/data/js/popper.min.js.download"></script>
    <script src="public/data/js/bootstrap.min.js.download"></script>

    <script src="public/data/js/owl.carousel.min.js.download"></script>
    <script src="public/data/js/countrySelect.min.js.download"></script>
    <script src="public/data/js/jquery.validate.min.js.download"></script>

    <script src="public/data/js/custom.js.download"></script>
  
</body></html>