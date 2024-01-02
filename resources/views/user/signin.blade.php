<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Sign In</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter&amp;display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:300,400,500,600,700&amp;display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap">
  <link rel="stylesheet" href="{{ asset('assets/css/bs-theme-overrides.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/Bootstrap-4-Custom-Radio.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/Multi-step-form.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/Navbar-Centered-Links-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/Toggle-Switch-toggle-switch.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/Toggle-Switch.css') }}">
</head>

<body>
    <div class="container-fluid d-flex justify-content-center" style="padding-right: 0px;padding-left: 0px;flex-shrink: 0;margin-top: 50px;margin-bottom: 50px;">
        <div class="row g-0">
            <div class="col-12">
                <div id="signin" class="signin">
                    <div class="justify-content-between vet_logo_btn_container">
                        <div class="vet_logo"><img src="{{ asset('assets/img/dogs_cats.png') }}">
                            <h1>Tagapo Dogs &amp; Cats Veterinary Clinic</h1>
                        </div>
                    </div>
                    <div class="signin_header">
                        <div class="heading">
                            <h1>Welcome</h1>
                            <p>Please sign in to your account.</p>
                        </div>
                    </div>
                    @if($errors->has('usernameNotice'))
                                    <div class="alert alert-danger">
                                        {{ $errors->first('usernameNotice') }}
                                    </div>
                                @endif

                                @if($errors->has('passwordNotice'))
                                    <div class="alert alert-danger">
                                        {{ $errors->first('passwordNotice') }}
                                    </div>
                                @endif
                    <form action="{{ route('client.auth') }}" method="POST" id="signin_custom_container" class="signin_custom_container">
                        @csrf
                        <div class="signin_inputs_container">
                            <div class="signup_inputs_container">
                                <div class="input-group">
                                    <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <g opacity="0.5" clip-path="url(#clip0_5236_308)">
                                            <path d="M3 7C3 6.46957 3.21071 5.96086 3.58579 5.58579C3.96086 5.21071 4.46957 5 5 5H19C19.5304 5 20.0391 5.21071 20.4142 5.58579C20.7893 5.96086 21 6.46957 21 7M3 7V17C3 17.5304 3.21071 18.0391 3.58579 18.4142C3.96086 18.7893 4.46957 19 5 19H19C19.5304 19 20.0391 18.7893 20.4142 18.4142C20.7893 18.0391 21 17.5304 21 17V7M3 7L12 13L21 7" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_5236_308">
                                            <rect width="24" height="24" fill="white"/>
                                            </clipPath>
                                        </defs>
                                        </svg>
                                    </span>
                                    <div class="form-floating"><input name="email" id="email" class="form-control" type="email" data-id="email" placeholder="Email Address" />
                                    <label class="form-label" for="email">Email Address</label><div class="error-message" id="error-email">Please enter your email.</div></div>
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
                                    <div class="align-self-stretch form-floating"><input name="password" class="form-control" type="password" data-id="password" id="password" placeholder="Password">
                                    <label class="form-label" for="password">Password</label><div class="error-message" id="error-password">Please enter your password.</div></div>
                                </div>
                            </div>
                            <div class="remember_me_forget_container">
                                <div class="remember_me"><label class="switch">
                                    <input type="checkbox" name="rememeber_me">
                                    <span class="slider round"></span>
                                    </label>
                                    <p class="align-items-xl-center">Remember me</p>
                                </div>
                                <div class="d-flex align-items-center forgot_container"><a class="forgot_link" href="{{ route('client.forgotpass') }}">Forgot Password?</a></div>
                            </div>
                        </div>
                        <div class="bottom_btns">
                            <a class="create_account" type="button" href="{{ url('/user/signup') }}"><span class="create_account_base">Create Account</span></a>
                            <button id="signin_btn" class="disabled border-success signin_btn" type="submit" style="--bs-success: #004D53;--bs-success-rgb: 0,77,83;" disabled>
                            <div class="signin_btn_base">Sign In</div></button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="signup_bg-img">
        <div class="signup_overlay"></div><img class="img-fluid" src="{{ asset('assets/img/clientclinic.jpg') }}" width="100%" style="position: relative;">
    </div>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/appointmentforms.js') }}"></script>
  <script src="{{ asset('assets/js/calendar.js') }}"></script>
  <script src="{{ asset('assets/js/inventory.js') }}"></script>
  <script src="{{ asset('assets/js/Multi-step-form-script.js') }}"></script>
  <script src="{{ asset('assets/js/signin.js') }}"></script>
  <script src="{{ asset('assets/js/signup.js') }}"></script>
</body>

</html>