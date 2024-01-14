<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <title>Forgot Password</title>
    <link rel="icon" href="/img/dogs&cats.png" type="image/x-icon">
    @include('includes.head')
    <link rel="stylesheet" href="{{ asset('css/user/forgotPass.css') }}">
</head>

<body>
    <div class="container-fluid" style="margin: 0; padding: 0;">
        <div class="bg-img">
            <div class="overlay"></div>
            <img src="{{ asset('img/clientclinic.jpg') }}" alt="Logo">
        </div>
        <div class="row custom-row justify-content-center align-items-center mb-5 w-100">
            <div class="col-md-4 forgot-pass mt-5">
                <div id="initialState d-none">
                    <div class="d-flex flex-column" style="height: 100%;">
                        <div class="d-flex justify-content-between mb-5 mt-3">
                            <button class="custom-back-btn" onclick="goBack()">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" viewBox="0 0 14 12" fill="none">
                                    <path d="M5.28471 1.71527L1 5.99998L5.28471 10.2847M13 5.99998H1.12" stroke="#045B62" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Back
                            </button>
                            <a href="{{ route('client.signup') }}" style="text-decoration: none;"> <button class="custom-create-acc-btn">Create Account</button></a>
                        </div>
                        <div class="security-check">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" viewBox="0 0 16 20" fill="none">
                                <path d="M5.6317 9.89267L6.91987 11.2613L10.3603 7.60589M6.78385 1.69765L2.79135 3.29585C1.87123 3.6614 1.11914 4.81754 1.11914 5.85467V12.171C1.11914 13.1741 1.74322 14.4917 2.50331 15.0953L5.94374 17.8242C7.07188 18.7253 8.92812 18.7253 10.0563 17.8242L13.4967 15.0953C14.2568 14.4917 14.8809 13.1741 14.8809 12.171V5.85467C14.8809 4.80904 14.1288 3.65289 13.2087 3.28735L9.21615 1.69765C8.53607 1.43412 7.44793 1.43412 6.78385 1.69765Z" stroke="#1C1C1C" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h1>Forgot Password?</h1>
                        <p class="mb-5">No worries, we will be sending you reset instructions on your email.</p>

                        <form  method="POST" action="{{ route('password.form') }}" class="mb-5">
                            @csrf
                            <div class="mb-3">
                                <div class="form-group">


                                    <div class="input-group">
                                        <div class="input_svg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none"><g opacity="0.5" clip-path="url(#clip0_6488_6539)"><path d="M3 7.5C3 6.96957 3.21071 6.46086 3.58579 6.08579C3.96086 5.71071 4.46957 5.5 5 5.5H19C19.5304 5.5 20.0391 5.71071 20.4142 6.08579C20.7893 6.46086 21 6.96957 21 7.5M3 7.5V17.5C3 18.0304 3.21071 18.5391 3.58579 18.9142C3.96086 19.2893 4.46957 19.5 5 19.5H19C19.5304 19.5 20.0391 19.2893 20.4142 18.9142C20.7893 18.5391 21 18.0304 21 17.5V7.5M3 7.5L12 13.5L21 7.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_6488_6539"><rect width="24" height="24" fill="white" transform="translate(0 0.5)"/></clipPath></defs></svg></div>
                                        <div class="form-floating custom_form_floating">
                                            
                                            <input name="email" id="email" class="form-control custom_email" type="email" data-id="email" placeholder="Email Address" />
                                            <label class="form-label" for="email">Email Address<span>&nbsp;*</span></label>
                                            
                                            <div id="error-email" class="error-message email"><span>• Invalid email format.</span></div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="text-center">
                                <button class="btn custom-reset-btn" type="submit">Send Reset Instructions</button>
                            </div>
                        </form>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            Email not found.
                        </div>
                        @endif
                        <div id="error-message" class="error-message"></div>

                    </div>
                </div>
                <div id="changedState" class="d-none">
                    <div class="d-flex flex-column" style="height: 100%; width: 100%">
                        <div class="email-icon mt-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M9.99997 17.1216H5.67564C3.08105 17.1216 1.35132 15.7432 1.35132 12.527V6.09459C1.35132 2.87838 3.08105 1.5 5.67564 1.5H14.3243C16.9189 1.5 18.6486 2.87838 18.6486 6.09459V8.85135M14.3243 6.55405L11.6173 8.85135C10.7265 9.60486 9.26483 9.60486 8.37402 8.85135L5.67564 6.55405M18.6486 18.5L17.7838 17.5811M15.3621 17.9486C16.0961 17.9486 16.8001 17.6388 17.3191 17.0874C17.8381 16.5359 18.1297 15.788 18.1297 15.0081C18.1297 14.2282 17.8381 13.4803 17.3191 12.9288C16.8001 12.3774 16.0961 12.0676 15.3621 12.0676C14.6281 12.0676 13.9242 12.3774 13.4052 12.9288C12.8861 13.4803 12.5946 14.2282 12.5946 15.0081C12.5946 15.788 12.8861 16.5359 13.4052 17.0874C13.9242 17.6388 14.6281 17.9486 15.3621 17.9486Z" stroke="#1C1C1C" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="mt-4 mb-2">
                            <h1>Email Sent!</h1>
                            <p>We have sent password reset instructions to your email. Please check your inbox.</p>
                        </div>
                        <form id="resetCode_Form" method="POST" action="#">
                            @csrf
                            <div class="input-group group-input mb-3">
                                <!-- Add 6 input boxes for the reset code -->
                                <input class="form-controls" type="text" name="digit1" maxlength="1" required>
                                <input class="form-controls" type="text" name="digit2" maxlength="1" required>
                                <input class="form-controls"  type="text" name="digit3" maxlength="1" required>
                                <input class="form-controls"  type="text" name="digit4" maxlength="1" required>
                                <input class="form-controls"  type="text" name="digit5" maxlength="1" required>
                                <input class="form-controls"  type="text" name="digit6" maxlength="1" required>
                            </div>
                            <div class="text-center">
                                <button class="btn custom-reset-btn" id="continue_button" type="submit">Continue</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="passwordState" class="d-none">
                    <div class="d-flex flex-column" style="height: 100%; width: 100%">
                        <div class="email-icon mt-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M9.99997 17.1216H5.67564C3.08105 17.1216 1.35132 15.7432 1.35132 12.527V6.09459C1.35132 2.87838 3.08105 1.5 5.67564 1.5H14.3243C16.9189 1.5 18.6486 2.87838 18.6486 6.09459V8.85135M14.3243 6.55405L11.6173 8.85135C10.7265 9.60486 9.26483 9.60486 8.37402 8.85135L5.67564 6.55405M18.6486 18.5L17.7838 17.5811M15.3621 17.9486C16.0961 17.9486 16.8001 17.6388 17.3191 17.0874C17.8381 16.5359 18.1297 15.788 18.1297 15.0081C18.1297 14.2282 17.8381 13.4803 17.3191 12.9288C16.8001 12.3774 16.0961 12.0676 15.3621 12.0676C14.6281 12.0676 13.9242 12.3774 13.4052 12.9288C12.8861 13.4803 12.5946 14.2282 12.5946 15.0081C12.5946 15.788 12.8861 16.5359 13.4052 17.0874C13.9242 17.6388 14.6281 17.9486 15.3621 17.9486Z" stroke="#1C1C1C" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="mt-4 mb-4">
                            <h1>Set New Password</h1>
                            <p>Your new password must be at least 8 characters.</p>
                        </div>
                        <form id="resetPassword_Form" method="POST" action="#">
                            @csrf

                            <div class="mb-3">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input_svg">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <g opacity="0.5" clip-path="url(#clip0_6078_13877)"><path d="M8 11V7C8 5.93913 8.42143 4.92172 9.17157 4.17157C9.92172 3.42143 10.9391 3 12 3C13.0609 3 14.0783 3.42143 14.8284 4.17157C15.5786 4.92172 16 5.93913 16 7V11M5 13C5 12.4696 5.21071 11.9609 5.58579 11.5858C5.96086 11.2107 6.46957 11 7 11H17C17.5304 11 18.0391 11.2107 18.4142 11.5858C18.7893 11.9609 19 12.4696 19 13V19C19 19.5304 18.7893 20.0391 18.4142 20.4142C18.0391 20.7893 17.5304 21 17 21H7C6.46957 21 5.96086 20.7893 5.58579 20.4142C5.21071 20.0391 5 19.5304 5 19V13ZM11 16C11 16.2652 11.1054 16.5196 11.2929 16.7071C11.4804 16.8946 11.7348 17 12 17C12.2652 17 12.5196 16.8946 12.7071 16.7071C12.8946 16.5196 13 16.2652 13 16C13 15.7348 12.8946 15.4804 12.7071 15.2929C12.5196 15.1054 12.2652 15 12 15C11.7348 15 11.4804 15.1054 11.2929 15.2929C11.1054 15.4804 11 15.7348 11 16Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /> </g><defs><clipPath id="clip0_6078_13877"><rect width="24" height="24" fill="white" /> </clipPath></defs>
                                            </svg>
                                        </div>
                                        <div class="form-floating custom_form_floating">
                                            <input id="password" name="password" class="form-control custom_password" type="password" placeholder="Password" data-id="password">
                                            <div id="eye-icon" class="eye-icon" onclick="togglePasswordVisibility()">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><g opacity="0.5" clip-path="url(#clip0_6078_13948)"><path d="M21 9C18.6 11.667 15.6 13 12 13C8.4 13 5.4 11.667 3 9M3 15L5.5 11.2M20.9998 14.976L18.5078 11.2M9 17L9.5 13M15 17L14.5 13" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /> </g>
                                                    <defs><clipPath id="clip0_6078_13948"><rect width="24" height="24" fill="white" /> </clipPath></defs>
                                                </svg>
                                            </div>
                                            <label class="form-label" for="password">Password<span>&nbsp;*</span></label>
                                            <div id="error-password" class="error-message password"><span>• Please enter your password.</span><span>• Password must have 8 or more characters.</span><span>• Password must have at least 1 uppercase character.</span><span>• Password must have at least 1 special character.</span></div>
                                            <div id="guide_password" class="guide-message password"><span>• Password must have more than 8 characters.</span><span>• Password must have at least 1 uppercase character.</span><span>• Password must have at least 1 special character.</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input_svg">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><g opacity="0.5" clip-path="url(#clip0_6078_13877)"><path d="M8 11V7C8 5.93913 8.42143 4.92172 9.17157 4.17157C9.92172 3.42143 10.9391 3 12 3C13.0609 3 14.0783 3.42143 14.8284 4.17157C15.5786 4.92172 16 5.93913 16 7V11M5 13C5 12.4696 5.21071 11.9609 5.58579 11.5858C5.96086 11.2107 6.46957 11 7 11H17C17.5304 11 18.0391 11.2107 18.4142 11.5858C18.7893 11.9609 19 12.4696 19 13V19C19 19.5304 18.7893 20.0391 18.4142 20.4142C18.0391 20.7893 17.5304 21 17 21H7C6.46957 21 5.96086 20.7893 5.58579 20.4142C5.21071 20.0391 5 19.5304 5 19V13ZM11 16C11 16.2652 11.1054 16.5196 11.2929 16.7071C11.4804 16.8946 11.7348 17 12 17C12.2652 17 12.5196 16.8946 12.7071 16.7071C12.8946 16.5196 13 16.2652 13 16C13 15.7348 12.8946 15.4804 12.7071 15.2929C12.5196 15.1054 12.2652 15 12 15C11.7348 15 11.4804 15.1054 11.2929 15.2929C11.1054 15.4804 11 15.7348 11 16Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /> </g><defs><clipPath id="clip0_6078_13877">
                                                <rect width="24" height="24" fill="white" /> </clipPath></defs>
                                            </svg>
                                        </div>
                                        <div class="align-self-stretch form-floating custom_form_floating">
                                            <input id="password_confirmation" class="form-control custom_password" type="password" placeholder="Repeat Password" data-id="password_confirmation">
                                            <div class="eye-icon1" onclick="togglePasswordVisibility1()">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><g opacity="0.5" clip-path="url(#clip0_6078_13948)"><path d="M21 9C18.6 11.667 15.6 13 12 13C8.4 13 5.4 11.667 3 9M3 15L5.5 11.2M20.9998 14.976L18.5078 11.2M9 17L9.5 13M15 17L14.5 13" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /> </g><defs>
                                                    <clipPath id="clip0_6078_13948"><rect width="24" height="24" fill="white" /> </clipPath></defs>
                                                </svg>
                                            </div>
                                            <label class="form-label" for="password_confirmation">Repeat Password<span>&nbsp;*</span></label>
                                            <div id="error-password_confirmation" class="error-message password_confirmation"><span>•&nbsp;Please enter your password first.</span></div>
                                            <div id="error-password_confirmation_1" class="error-message password_confirmation"><span>• Password does not match.</span></div>
                                            <div id="guide_password_confirmation" class="guide-message password_confirmation"><span>• Password and Repeat Password must be matched.</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                  
                            <div class="text-center">
                                <button class="btn custom-reset-btn" id="reset_pass" type="submit" value="submit">Reset Password</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="finalState" class="d-none">
                    <div class="d-flex flex-column" style="height: 100%;">
                        <div class="mt-4 mb-4">
                            <h1>Password Reset Successful!</h1>
                            <p class="mb-5">Your password has been successfully reset.</p>
                        </div>
                        <div class="text-center">
                            <a href="{{ route('client.signin') }}" style="text-decoration: none;"><button class="btn custom-reset-btn mb-2">Sign In</button></a>
                            <a href="{{ route('client.signup') }}" style="text-decoration: none;"><button class="btn custom-reset-btn">Create New Account</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function goBack() {
            window.history.back();
        }

        $(document).ready(function () {
            $('#forgotPassword_Form').on('submit', function (event) {
                event.preventDefault();

                // Simulate email sending
                setTimeout(function () {
                    // Hide initial state
                    $('#initialState').addClass('d-none');

                    // Show changed state
                    $('#changedState').removeClass('d-none');
                }, 2000);
            });

            $('#resetCode_Form').on('submit', function (event) {
                event.preventDefault();

                // Hide changed state
                $('#changedState').addClass('d-none');

                // Show password state
                $('#passwordState').removeClass('d-none');
            });

            $('#resetPassword_Form').on('submit', function (event) {
                event.preventDefault();

                // Simulate password reset
                setTimeout(function () {
                    // Hide password state
                    $('#passwordState').addClass('d-none');

                    // Show final state
                    $('#finalState').removeClass('d-none');
                }, 2000);
            });


            var eyeIcon = document.querySelector(".eye-icon");
 var eyeIcon1 = document.querySelector(".eye-icon1");
eyeIcon.addEventListener('mousedown', function (event) {
// Prevent the default behavior to stop the input from losing focus
event.preventDefault();
togglePasswordVisibility();
});    
eyeIcon1.addEventListener('mousedown', function (event) {
// Prevent the default behavior to stop the input from losing focus
event.preventDefault();
togglePasswordVisibility1();
});   

function togglePasswordVisibility() {
  var passwordInput = document.getElementById("password");
  var eyeIcon = document.querySelector(".eye-icon");

  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    // Change the eye-icon to the visible state
    eyeIcon.innerHTML = `
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <g clip-path="url(#clip0_1917_11689)">
          <path d="M10 12C10 12.5304 10.2107 13.0391 10.5858 13.4142C10.9609 13.7893 11.4696 14 12 14C12.5304 14 13.0391 13.7893 13.4142 13.4142C13.7893 13.0391 14 12.5304 14 12C14 11.4696 13.7893 10.9609 13.4142 10.5858C13.0391 10.2107 12.5304 10 12 10C11.4696 10 10.9609 10.2107 10.5858 10.5858C10.2107 10.9609 10 11.4696 10 12Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M21 12C18.6 16 15.6 18 12 18C8.4 18 5.4 16 3 12C5.4 8 8.4 6 12 6C15.6 6 18.6 8 21 12Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </g>
        <defs>
          <clipPath id="clip0_1917_11689">
            <rect width="24" height="24" fill="white"/>
          </clipPath>
        </defs>
      </svg>`;
  } else {
    passwordInput.type = "password";
    // Change the eye-icon to the initial state
    eyeIcon.innerHTML = `
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <g clip-path="url(#clip0_1917_11666)">
          <path d="M21 9C18.6 11.667 15.6 13 12 13C8.4 13 5.4 11.667 3 9M3 15L5.5 11.2M20.9998 14.976L18.5078 11.2M9 17L9.5 13M15 17L14.5 13" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </g>
        <defs>
          <clipPath id="clip0_1917_11666">
            <rect width="24" height="24" fill="white"/>
          </clipPath>
        </defs>
      </svg>`;
  }
}

function togglePasswordVisibility1() {

var passwordInput1 = document.getElementById("password_confirmation");
  var eyeIcon1 = document.querySelector(".eye-icon1");

  if (passwordInput1.type === "password") {
    passwordInput1.type = "text";
    // Change the eye-icon to the visible state
    eyeIcon1.innerHTML = `
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <g clip-path="url(#clip0_1917_11689)">
          <path d="M10 12C10 12.5304 10.2107 13.0391 10.5858 13.4142C10.9609 13.7893 11.4696 14 12 14C12.5304 14 13.0391 13.7893 13.4142 13.4142C13.7893 13.0391 14 12.5304 14 12C14 11.4696 13.7893 10.9609 13.4142 10.5858C13.0391 10.2107 12.5304 10 12 10C11.4696 10 10.9609 10.2107 10.5858 10.5858C10.2107 10.9609 10 11.4696 10 12Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M21 12C18.6 16 15.6 18 12 18C8.4 18 5.4 16 3 12C5.4 8 8.4 6 12 6C15.6 6 18.6 8 21 12Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </g>
        <defs>
          <clipPath id="clip0_1917_11689">
            <rect width="24" height="24" fill="white"/>
          </clipPath>
        </defs>
      </svg>`;
  } else {
    passwordInput1.type = "password";
    // Change the eye-icon to the initial state
    eyeIcon1.innerHTML = `
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <g clip-path="url(#clip0_1917_11666)">
          <path d="M21 9C18.6 11.667 15.6 13 12 13C8.4 13 5.4 11.667 3 9M3 15L5.5 11.2M20.9998 14.976L18.5078 11.2M9 17L9.5 13M15 17L14.5 13" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </g>
        <defs>
          <clipPath id="clip0_1917_11666">
            <rect width="24" height="24" fill="white"/>
          </clipPath>
        </defs>
      </svg>`;
  }
}
        });
    </script>
    <script>
// Get all the elements with the name "digit1" through "digit6"
var digitInputs = document.querySelectorAll('[name^="digit"]');

// Get the continue_button element
var continueButton = document.getElementById('continue_button');

// Initially disable the continue_button
continueButton.disabled = true;

// Function to check if all digit inputs have values
function checkDigitInputs() {
    // Convert NodeList to an array and use every() to check if all inputs have values
    var allInputsFilled = Array.from(digitInputs).every(function(input) {
        return input.value.trim() !== ''; // Check if the input value is not empty after trimming
    });

    // Enable or disable the continue_button based on the result
    continueButton.disabled = !allInputsFilled;
}

// Add event listeners to each digit input
digitInputs.forEach(function(input) {
    input.addEventListener('input', checkDigitInputs);
});

    </script>


<script>



    var password = document.getElementById("password");
    var errorPassword = document.getElementById('error-password');
    var password_confirmation = document.getElementById("password_confirmation");
    var errorConfirmPassword = document.getElementById('error-password_confirmation');

    var reset_pass = document.getElementById("reset_pass");

    // Initially disable the reset_pass button
reset_pass.disabled = true;

    function handleInputError(input, error) {
      function onBlur() {
      if (input.value.trim() === '' || input.value.trim() === '0') {
          error.style.display = 'flex'; // Show the error message
          input.classList.add('is-invalid');
          input.classList.add('error-border');
      } else if (input.type === 'email' && !isValidEmail(input.value.trim())) {
          error.style.display = 'flex'; // Show the error message
          input.classList.add('is-invalid');
          input.classList.add('error-border');
      } else {
          error.style.display = 'none'; // Hide the error message
          input.classList.remove('is-invalid');
          input.classList.remove('error-border');
      }
  }
  
  
      function onFocus() {
          error.style.display = 'none'; // Hide the error message
          input.classList.remove('is-invalid');
          input.classList.remove('error-border');
      }
  
      // Add event listeners to inputs
      input.addEventListener('blur', onBlur);
      input.addEventListener('focus', onFocus);
  } 

handleInputError(password, errorPassword);
handleInputError(password_confirmation, errorConfirmPassword);






// Function to check if password and password_confirmation match
function checkPasswordMatch() {
    var passwordValue = password.value;
    var confirmationValue = password_confirmation.value;

    // Check if password meets the criteria
    var isValidPassword = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{8,}$/.test(passwordValue);

    // Enable the reset_pass button if the passwords match and meet the criteria, otherwise disable it
    reset_pass.disabled = !(passwordValue === confirmationValue && isValidPassword);
}

// Add event listeners to password and password_confirmation fields
password.addEventListener("input", checkPasswordMatch);
password_confirmation.addEventListener("input", checkPasswordMatch);
</script>
</body>

</html>