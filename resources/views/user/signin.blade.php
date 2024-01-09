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
  <link rel="stylesheet" href="{{ asset('assets/css/newstyles.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/Toggle-Switch.css') }}">
</head>

<body>
    <div class="container-fluid d-flex justify-content-center" style="padding-right: 0px;padding-left: 0px;flex-shrink: 0;margin-top: 50px;margin-bottom: 50px;">
        <div class="row g-0">
            <div class="col-12 d-flex justify-content-center">
                <div id="signin" class="signin">
                    <div class="vet_logo_and_text_container d-flex align-items-center align-self-stretch" style="gap:8px;">
                        <img src="{{ asset('assets/img/dogs_cats.png') }}">
                        <h1>Tagapo Dogs &amp; Cats Veterinary Clinic</h1>
                        
                    </div>
                    <div class="signin_header">
                        <h1>Welcome</h1>
                        <p>Please sign in to your account.</p>
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
                            <div class="row" style="padding:0; margin:0; width:100%">
                                <div class="col" style="padding:0; margin:0;">
                                    <div class="input-group">
                                        <div class="input_svg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none"><g opacity="0.5" clip-path="url(#clip0_6488_6539)"><path d="M3 7.5C3 6.96957 3.21071 6.46086 3.58579 6.08579C3.96086 5.71071 4.46957 5.5 5 5.5H19C19.5304 5.5 20.0391 5.71071 20.4142 6.08579C20.7893 6.46086 21 6.96957 21 7.5M3 7.5V17.5C3 18.0304 3.21071 18.5391 3.58579 18.9142C3.96086 19.2893 4.46957 19.5 5 19.5H19C19.5304 19.5 20.0391 19.2893 20.4142 18.9142C20.7893 18.5391 21 18.0304 21 17.5V7.5M3 7.5L12 13.5L21 7.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_6488_6539"><rect width="24" height="24" fill="white" transform="translate(0 0.5)"/></clipPath></defs></svg></div>
                                        <div class="form-floating custom_form_floating">
                                            
                                            <input name="email" id="email" class="form-control custom_email" type="email" data-id="email" placeholder="Email Address" />
                                            <label class="form-label" for="email">Email Address<span>&nbsp;*</span></label>
                                            <div id="guide_email_message" class="guide-message email"><span>• Please enter your email.<br>(e.g. pogiako@gmail.com/pogiako@yahoo.com)</span></div>
                                            <div id="error-email" class="error-message email"><span>• Invalid email format.</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            

                            <div class="input-group">
                                <div class="input_svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none"><g opacity="0.5" clip-path="url(#clip0_6488_16728)"><path d="M8 11.5V7.5C8 6.43913 8.42143 5.42172 9.17157 4.67157C9.92172 3.92143 10.9391 3.5 12 3.5C13.0609 3.5 14.0783 3.92143 14.8284 4.67157C15.5786 5.42172 16 6.43913 16 7.5V11.5M5 13.5C5 12.9696 5.21071 12.4609 5.58579 12.0858C5.96086 11.7107 6.46957 11.5 7 11.5H17C17.5304 11.5 18.0391 11.7107 18.4142 12.0858C18.7893 12.4609 19 12.9696 19 13.5V19.5C19 20.0304 18.7893 20.5391 18.4142 20.9142C18.0391 21.2893 17.5304 21.5 17 21.5H7C6.46957 21.5 5.96086 21.2893 5.58579 20.9142C5.21071 20.5391 5 20.0304 5 19.5V13.5ZM11 16.5C11 16.7652 11.1054 17.0196 11.2929 17.2071C11.4804 17.3946 11.7348 17.5 12 17.5C12.2652 17.5 12.5196 17.3946 12.7071 17.2071C12.8946 17.0196 13 16.7652 13 16.5C13 16.2348 12.8946 15.9804 12.7071 15.7929C12.5196 15.6054 12.2652 15.5 12 15.5C11.7348 15.5 11.4804 15.6054 11.2929 15.7929C11.1054 15.9804 11 16.2348 11 16.5Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_6488_16728"><rect width="24" height="24" fill="white" transform="translate(0 0.5)"/></clipPath></defs></svg>
                                </div>
                                <div class="align-self-stretch form-floating custom_form_floating">
                                    <input name="password" id="password" class="form-control custom_password" type="password" placeholder="Password" data-id="password" />
                                    
                                    <div class="eye-icon" onclick="togglePasswordVisibility()">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none"><g opacity="0.5" clip-path="url(#clip0_6488_16733)"><path d="M21 9.5C18.6 12.167 15.6 13.5 12 13.5C8.4 13.5 5.4 12.167 3 9.5M3 15.5L5.5 11.7M20.9998 15.476L18.5078 11.7M9 17.5L9.5 13.5M15 17.5L14.5 13.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><defs><clipPath id="clip0_6488_16733"><rect width="24" height="24" fill="white" transform="translate(0 0.5)"/></clipPath></defs></svg>
                                    </div>
                                    <label class="form-label" for="password">Password<span>&nbsp;*</span></label>
                                    <div id="guide_password" class="guide-message password"><span>• Please enter your password.</span></div>
                                    <div id="error-password" class="error-message password"><span>• Please enter your password.</span></div>
                                </div>
                            </div>

                            <div class="remember_me_forget_container mt-3">
                                
                                <div class="d-flex align-items-center forgot_container"><a class="forgot_link" href="{{ route('client.forgotpass') }}">Forgot Password?</a></div>
                            </div>
                        </div>

                        <div class="bottom_btns">
                            <a class="create_account" type="button" href="{{ url('/user/signup') }}"><span class="create_account_base">Create Account</span></a>
                            <button id="signin_btn" class="disabled border-success signin_btn" type="submit" style="--bs-success: #004D53;--bs-success-rgb: 0,77,83;" disabled>
                            <div class="signin_btn_base">Sign In</div></button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="signup_bg-img">
        <div class="signup_overlay"></div><img class="img" src="{{ asset('assets/img/clientclinic.jpg') }}" width="100%" style="position: relative;">
    </div>

  <script src="{{ asset('assets/js/signin.js') }}"></script>
</body>

</html>