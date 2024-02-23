<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Medipaws Login page</title>
    <link rel="icon" href="/img/dogs&cats.png" type="image/x-icon">
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
                    @if (session('resetSuccess'))
                    <div>
                        <p>Password Reset Successfull</p>
                    </div>
                    @endif
                    @error('email')
                        <div class="error text-red-500"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
  <g clip-path="url(#clip0_6806_1362)">
    <path d="M13.3333 13.3333L18.6667 18.6667M18.6667 13.3333L13.3333 18.6667M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 14.4241 27.6896 12.8637 27.0866 11.4078C26.4835 9.95189 25.5996 8.62902 24.4853 7.51472C23.371 6.40042 22.0481 5.5165 20.5922 4.91345C19.1363 4.31039 17.5759 4 16 4C14.4241 4 12.8637 4.31039 11.4078 4.91345C9.95189 5.5165 8.62902 6.40042 7.51472 7.51472C6.40042 8.62902 5.5165 9.95189 4.91345 11.4078C4.31039 12.8637 4 14.4241 4 16Z" stroke="#DA534F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_6806_1362">
      <rect width="32" height="32" fill="white"/>
    </clipPath>
  </defs>
</svg>
                            <div class="error_statement">@foreach($errors->get('email') as $error)
            
            <span class="error-header">Error:</span>
            <span class="error-body">{{ $error }}</span>
        
    @endforeach</div></div>
                    @enderror
                    @error('password')
                        <div class="error text-center text-red-500"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
  <g clip-path="url(#clip0_6806_1362)">
    <path d="M13.3333 13.3333L18.6667 18.6667M18.6667 13.3333L13.3333 18.6667M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 14.4241 27.6896 12.8637 27.0866 11.4078C26.4835 9.95189 25.5996 8.62902 24.4853 7.51472C23.371 6.40042 22.0481 5.5165 20.5922 4.91345C19.1363 4.31039 17.5759 4 16 4C14.4241 4 12.8637 4.31039 11.4078 4.91345C9.95189 5.5165 8.62902 6.40042 7.51472 7.51472C6.40042 8.62902 5.5165 9.95189 4.91345 11.4078C4.31039 12.8637 4 14.4241 4 16Z" stroke="#DA534F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_6806_1362">
      <rect width="32" height="32" fill="white"/>
    </clipPath>
  </defs>
</svg><div class="error_statement">@foreach($errors->get('password') as $error)
            
                <span class="error-header">Error:</span>
                <span class="error-body">{{ $error }}</span>
            
        @endforeach</div></div>
                    @enderror
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
                            <div class="signin_btn_base">Login</div></button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="signup_bg-img">
        <div class="signup_overlay"></div><img class="img" src="{{ asset('assets/img/clientclinic.jpg') }}" width="100%" style="position: relative;">
    </div>
    <div class="modal fade show" role="dialog" tabindex="-1" id="signup_error">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content success_modal">
				<div class="modal-header success_header">
					<div class="failed_icon_container"><span class="success_icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
  <g clip-path="url(#clip0_3688_23848)">
    <path d="M13.3333 13.3333L18.6667 18.6667M18.6667 13.3333L13.3333 18.6667M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 14.4241 27.6896 12.8637 27.0866 11.4078C26.4835 9.95189 25.5996 8.62902 24.4853 7.51472C23.371 6.40042 22.0481 5.5165 20.5922 4.91345C19.1363 4.31039 17.5759 4 16 4C14.4241 4 12.8637 4.31039 11.4078 4.91345C9.95189 5.5165 8.62902 6.40042 7.51472 7.51472C6.40042 8.62902 5.5165 9.95189 4.91345 11.4078C4.31039 12.8637 4 14.4241 4 16Z" stroke="#C33834" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_3688_23848">
      <rect width="32" height="32" fill="white"/>
    </clipPath>
  </defs>
</svg></span></div>
				</div>
				<div class="modal-body success_message">
					<div>
						<h1>Sign Up failed.</h1>
						<p>Please use a different email address or sign in with your existing account.&nbsp;</p>
					</div>
				</div>
			</div>
		</div>
	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    @if (session('resetSuccess'))
	<script>
        $(document).ready(function() {
            console.log('WOrking');
            $('#signup_error').modal('show');
        });
    </script>
	@endif
  <script src="{{ asset('assets/js/signin.js') }}"></script>
</body>

</html>