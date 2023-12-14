<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Customer Sign Up</title>
    <link rel="icon" href="/img/dogs&cats.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:300,400,500,600,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bs-theme-overrides.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Bootstrap-4-Custom-Radio.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Multi-step-form.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Navbar-Centered-Links-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">

</head>

<body>
    <div class="container d-flex justify-content-center" style="padding-right: 0px;padding-left: 0px;flex-shrink: 0;margin-top: 50px;margin-bottom: 50px;">
        <div class="row g-0">
            <div class="col-12">
                <div class="d-flex justify-content-center align-items-center row">
                    <div id="step-1" class="step active">
                        <div class="justify-content-between vet_logo_btn_container">
                            <div class="vet_logo"><img src="{{ asset('assets/img/dogs_cats.png') }}">
                                <h1>Tagapo Dogs &amp; Cats Veterinary Clinic</h1>
                            </div>
                            <div class="signup_already_user_container">
                                <h1>Already a user?</h1><a href="{{ route('client.signin') }}"><button id="sign_in" class="sign_in" type="button">Sign In</button></a>
                            </div>
                        </div>
                        <div class="signup_form_container">
                            <div class="heading">
                                <h1>Welcome to the family</h1>
                                <p>Register your account.</p>
                            </div>
                        </div>
                        <form id="form-1" class="signup_custom_container" >
                            <div class="signup_inputs_container">
                                <div class="input-group"><span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <g opacity="0.5" clip-path="url(#clip0_5236_308)">
                                    <path d="M3 7C3 6.46957 3.21071 5.96086 3.58579 5.58579C3.96086 5.21071 4.46957 5 5 5H19C19.5304 5 20.0391 5.21071 20.4142 5.58579C20.7893 5.96086 21 6.46957 21 7M3 7V17C3 17.5304 3.21071 18.0391 3.58579 18.4142C3.96086 18.7893 4.46957 19 5 19H19C19.5304 19 20.0391 18.7893 20.4142 18.4142C20.7893 18.0391 21 17.5304 21 17V7M3 7L12 13L21 7" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_5236_308">
                                    <rect width="24" height="24" fill="white"/>
                                    </clipPath>
                                </defs>
                                </svg></span>
                                    <div class="form-floating">
                                        <input id="email" name="email" class="form-control" type="email" placeholder="Email Address" data-id="email" onblur="checkInput(this)" onclick="hideErrorOnInputClick('error-email')"/>
                                <label class="form-label" for="email">Email Address</label><div class="error-message" id="error-email">Please enter your email.</div></div>
                                </div>
                                <div class="input-group"><span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <g opacity="0.5" clip-path="url(#clip0_5236_957)">
                                            <path d="M5 4H9L11 9L8.5 10.5C9.57096 12.6715 11.3285 14.429 13.5 15.5L15 13L20 15V19C20 19.5304 19.7893 20.0391 19.4142 20.4142C19.0391 20.7893 18.5304 21 18 21C14.0993 20.763 10.4202 19.1065 7.65683 16.3432C4.8935 13.5798 3.23705 9.90074 3 6C3 5.46957 3.21071 4.96086 3.58579 4.58579C3.96086 4.21071 4.46957 4 5 4Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_5236_957">
                                            <rect width="24" height="24" fill="white"/>
                                            </clipPath>
                                        </defs>
                                        </svg></span>
                                        <div class="form-floating">
                                            <input id="phone_number" name="phone" class="form-control" type="tel" placeholder="Phone Number" data-id="phone_number" onblur="checkInput(this)" onclick="hideErrorOnInputClick('error-phone_number')" />
                                        <label class="form-label" for="phone_number">Phone Number</label><div class="error-message" id="error-phone_number">Please enter your phone number.</div></div>
                                        </div>
                                        <div class="input-group"><span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <g opacity="0.5" clip-path="url(#clip0_5236_14313)">
                                            <path d="M8 11V7C8 5.93913 8.42143 4.92172 9.17157 4.17157C9.92172 3.42143 10.9391 3 12 3C13.0609 3 14.0783 3.42143 14.8284 4.17157C15.5786 4.92172 16 5.93913 16 7V11M5 13C5 12.4696 5.21071 11.9609 5.58579 11.5858C5.96086 11.2107 6.46957 11 7 11H17C17.5304 11 18.0391 11.2107 18.4142 11.5858C18.7893 11.9609 19 12.4696 19 13V19C19 19.5304 18.7893 20.0391 18.4142 20.4142C18.0391 20.7893 17.5304 21 17 21H7C6.46957 21 5.96086 20.7893 5.58579 20.4142C5.21071 20.0391 5 19.5304 5 19V13ZM11 16C11 16.2652 11.1054 16.5196 11.2929 16.7071C11.4804 16.8946 11.7348 17 12 17C12.2652 17 12.5196 16.8946 12.7071 16.7071C12.8946 16.5196 13 16.2652 13 16C13 15.7348 12.8946 15.4804 12.7071 15.2929C12.5196 15.1054 12.2652 15 12 15C11.7348 15 11.4804 15.1054 11.2929 15.2929C11.1054 15.4804 11 15.7348 11 16Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_5236_14313">
                                            <rect width="24" height="24" fill="white"/>
                                            </clipPath>
                                        </defs>
                                        </svg></span>
                                        <div class="align-self-stretch form-floating">
                                            <input id="password" name="password" class="form-control" type="password" placeholder="Password" data-id="password" onblur="checkInput(this)" onclick="hideErrorOnInputClick('error-password')" /><label class="form-label" for="password">Password</label><div class="error-message" id="error-password">Please enter your password.</div></div>
                                        </div>
                                        <div class="input-group"><span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <g opacity="0.5" clip-path="url(#clip0_5236_14313)">
                                            <path d="M8 11V7C8 5.93913 8.42143 4.92172 9.17157 4.17157C9.92172 3.42143 10.9391 3 12 3C13.0609 3 14.0783 3.42143 14.8284 4.17157C15.5786 4.92172 16 5.93913 16 7V11M5 13C5 12.4696 5.21071 11.9609 5.58579 11.5858C5.96086 11.2107 6.46957 11 7 11H17C17.5304 11 18.0391 11.2107 18.4142 11.5858C18.7893 11.9609 19 12.4696 19 13V19C19 19.5304 18.7893 20.0391 18.4142 20.4142C18.0391 20.7893 17.5304 21 17 21H7C6.46957 21 5.96086 20.7893 5.58579 20.4142C5.21071 20.0391 5 19.5304 5 19V13ZM11 16C11 16.2652 11.1054 16.5196 11.2929 16.7071C11.4804 16.8946 11.7348 17 12 17C12.2652 17 12.5196 16.8946 12.7071 16.7071C12.8946 16.5196 13 16.2652 13 16C13 15.7348 12.8946 15.4804 12.7071 15.2929C12.5196 15.1054 12.2652 15 12 15C11.7348 15 11.4804 15.1054 11.2929 15.2929C11.1054 15.4804 11 15.7348 11 16Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_5236_14313">
                                            <rect width="24" height="24" fill="white"/>
                                            </clipPath>
                                        </defs>
                                        </svg></span>
                                    <div class="align-self-stretch form-floating"><input id="password_confirmation" class="form-control" type="password" placeholder="Repeat Password" data-id="password_confirmation" onblur="checkPasswordMatch()" onclick="hideErrorOnInputClick('error-password_confirmation')" /><label class="form-label" for="password_confirmation">Repeat Password</label><div class="error-message" id="error-password_confirmation">Please enter your password first.</div><div id="error-password_confirmation_1" class="error-message">Password does not match.</div></div>
                                </div>
                            </div>
                            <button id="next_btn" class="disabled border-success next_btn" type="submit" style="--bs-success: #004D53;--bs-success-rgb: 0,77,83;" disabled>
                            Next
                            </button>
                        </form>
                    </div>
                    <div id="step-2" class="step">
                        <div class="justify-content-between signup_header" id="signup_header"><button id="signup_back_btn" class="signup_back_btn" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                        <g clip-path="url(#clip0_5236_7807)" filter="url(#filter0_d_5236_7807)">
                            <path d="M5.5 12H19.5M5.5 12L11.5 18M5.5 12L11.5 6" stroke="#045B62" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                            <filter id="filter0_d_5236_7807" x="-1.5" y="0" width="28" height="28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                            <feOffset dy="2"/>
                            <feGaussianBlur stdDeviation="1"/>
                            <feComposite in2="hardAlpha" operator="out"/>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5236_7807"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5236_7807" result="shape"/>
                            </filter>
                            <clipPath id="clip0_5236_7807">
                            <rect width="24" height="24" fill="white" transform="translate(0.5)"/>
                            </clipPath>
                        </defs>
                        </svg> Back
                        </button></div>
                        <div class="signup_form_container">
                            <div class="heading">
                                <h1>Introduce yourself</h1>
                                <p>Providing your basic info can help us get to know you more.</p>
                            </div>
                        </div>
                        <form class="signup_custom_container" method="POST" action="{{ route('client.signup') }}" >
                            @csrf
                            <div class="signup_inputs_container">
                                    <input type="hidden" id="Hform2Email" name="email">
                                    <input type="hidden" id="Hform2Phone" name="phone">
                                    <input type="hidden" id="Hform2Password" name="password">

                                <div class="input-group fName_lname">
                                    <div class="form-floating"><input name="first_name" id="first_name" class="form-control" type="text" placeholder="First Name" data-id="first_name" onblur="checkInput(this)" onclick="hideErrorOnInputClick('error-first_name')"/><label class="form-label" for="first_name">First Name</label><div class="error-message" id="error-first_name">Please enter your first name.</div></div>
                                    <div class="form-floating"><input name="middle_name" id="middle_name" class="form-control last_name" type="text" placeholder="Middle Name"  data-id="middle_name" onblur="checkInput(this)" onclick="hideErrorOnInputClick('error-middle_name')" /><label class="form-label" for="middle_name">Middle Name</label><div class="error-message" id="error-middle_name">Please enter your middle name.</div></div>
                                </div>
                                <div class="input-group lname_suffix">
                                    <div class="form-floating"><input name="last_name" id="last_name" class="form-control" type="text" placeholder="Last Name" data-id="last_name" onblur="checkInput(this)" onclick="hideErrorOnInputClick('error-last_name')"/><label class="form-label" for="last_name">Last Name</label><div class="error-message" id="error-last_name">Please enter your last name.</div></div>
                                    <div class="form-floating">
                                        <select class="form-select" name="suffix" id="suffix">
                                            <option value="none" selected="">Select a suffix (optional)</option>
                                            <option value="I">I</option>
                                            <option value="II">II</option>
                                            <option value="III">III</option>
                                            <option value="IV">IV</option>
                                            <option value="Other">Other</option>
                                        </select><label class="form-label" for="suffix">Suffix</label></div>
                                    <div class="form-floating specify_suffix">
                                        <input id="specify_suffix" class="form-control" name="specify_suffix" type="text" placeholder="Specify suffix" data-id="specify_suffix" onblur="checkInput(this)" onclick="hideErrorOnInputClick('error-specify_suffix')"/>
                                        <label class="form-label" for="specify_suffix">Specify Suffix</label>
                                        <div class="error-message" id="error-specify_suffix">Please enter your suffix.</div>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <div class="align-self-stretch form-floating">
                                        <select class="form-select" name="gender" id="gender">
                                            <option value="none" selected="">Gender (optional)</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Non-Binary">Non-Binary</option>
                                            <option value="none">Prefer not to say</option>
                                        </select><label class="form-label" for="gender">Gender</label></div>
                                </div>
                                <div class="input-group">
                                    <div class="align-self-stretch form-floating" id="birthdate-container"><input class="form-control" type="date" name="birthdate" id="birthdate" placeholder=" " onblur="checkInput(this)" data-id="birthdate" onclick="hideIconOnClick(this)"><label class="form-label" for="birthdate">Birthdate</label><div class="error-message" id="error-birthdate">Please enter your birthdate.</div></div>
                                </div>
                            </div>
                                <button id="signup_btn" class="disabled border-success signup_btn" type="submit" style="--bs-success: #004D53;--bs-success-rgb: 0,77,83;" disabled>Sign Up
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="signup_bg-img">
        <div class="signup_overlay"></div><img class="img-fluid" src="{{ asset('img/clientclinic.jpg') }}" width="100%" style="position: relative;">
    </div>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/js/appointmentforms.js"></script>
    <script src="/assets/js/calendar.js"></script>
    <script src="/assets/js/Multi-step-form-script.js"></script>
    <script src="/assets/js/signup.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            // Handle form submission for Form 1
            $('#form-1').submit(function(e) {
                e.preventDefault(); // Prevent the default form submission behavior

                // Capture data from Form 1
                var form1Email = $('#email').val();
                var form1Phone = $('#phone_number').val();
                var form1Password = $('#password').val();

                // Populate corresponding fields in Form 2
                $('#form2Email').text(form1Email);
                $('#form2Phone').text(form1Phone);
                $('#form2Password').text(form1Password);

                $('#Hform2Email').val(form1Email);
                $('#Hform2Phone').val(form1Phone);
                $('#Hform2Password').val(form1Password);

            });

            // Handle form submission for Form 2
            $('#submitBtn').click(function() {
                // Simulate submitting Form 2 (you can replace this with your actual form submission logic)
                $('#form2').submit();
            });
        });
    </script>
</body>

</html>