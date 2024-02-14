<!DOCTYPE html>
<html data-bs-theme="light" lang="en" data-bss-forced-theme="light">

<head>
	<meta charset="utf-8">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Customer Sign Up</title>
	<link rel="icon" href="/img/dogs&cats.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter&amp;display=swap">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:300,400,500,600,700&amp;display=swap">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap">
	<link rel="stylesheet" href="{{ asset('assets/css/bs-theme-overrides.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/newstyles.css') }}">
</head>

<body>
	<div class="container-fluid d-flex justify-content-center" style="padding-right: 0px;padding-left: 0px;flex-shrink: 0;margin-top: 50px;margin-bottom: 50px;">
		<div class="row g-0">
			<div class="signup_column col-12 d-flex justify-content-center">
				<div id="step-1" class="step active">
					<div class="vet_logo_btn_container">
						<div class="vet_logo_and_text_container d-flex align-items-center align-self-stretch" style="gap:8px;">
							<img src="{{ asset('assets/img/dogs_cats.png') }}">
							<h1>Tagapo Dogs &amp; Cats Veterinary Clinic</h1>
							
						</div>
						<div class="signup_already_user_container">
							<h1>Already a user?</h1>
                            <a href="{{ route('client.signin') }}">
							<button id="sign_in" class="sign_in" type="button" >Sign In</button></a>
						</div>
					</div>
					<div class="heading">
						<h1>Welcome to the family</h1>
						<p>Register your account.</p>
					</div>
					@error('email')
					<div class="error"><span class="text-red-500"><svg
                                xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                viewBox="0 0 32 32" fill="none">
                                <g clip-path="url(#clip0_5519_15576)">
                                    <path
                                        d="M13.3333 13.3333L18.6667 18.6667M18.6667 13.3333L13.3333 18.6667M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 14.4241 27.6896 12.8637 27.0866 11.4078C26.4835 9.95189 25.5996 8.62902 24.4853 7.51472C23.371 6.40042 22.0481 5.5165 20.5922 4.91345C19.1363 4.31039 17.5759 4 16 4C14.4241 4 12.8637 4.31039 11.4078 4.91345C9.95189 5.5165 8.62902 6.40042 7.51472 7.51472C6.40042 8.62902 5.5165 9.95189 4.91345 11.4078C4.31039 12.8637 4 14.4241 4 16Z"
                                        stroke="#DA534F" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_5519_15576">
                                        <rect width="32" height="32" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>{{ $message }}</span></div>
					
					@enderror

					<form id="form-1" class="signup_custom_container">

						<div class="signup_inputs_container">


							<div class="input-group">
								<div class="input_svg">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<g opacity="0.5" clip-path="url(#clip0_6078_282)">
											<path d="M3 7C3 6.46957 3.21071 5.96086 3.58579 5.58579C3.96086 5.21071 4.46957 5 5 5H19C19.5304 5 20.0391 5.21071 20.4142 5.58579C20.7893 5.96086 21 6.46957 21 7M3 7V17C3 17.5304 3.21071 18.0391 3.58579 18.4142C3.96086 18.7893 4.46957 19 5 19H19C19.5304 19 20.0391 18.7893 20.4142 18.4142C20.7893 18.0391 21 17.5304 21 17V7M3 7L12 13L21 7" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /> </g>
										<defs><clipPath id="clip0_6078_282"><rect width="24" height="24" fill="white" /> </clipPath></defs>
									</svg>
								</div>

								<div class="form-floating custom_form_floating">
									<input id="email" name="email" class="form-control custom_email" type="email" placeholder="Email Address" data-id="email">
									<label class="form-label" for="email">Email Address<span>&nbsp;*</span></label>
									<div id="guide_email_message" class="guide-message email"><span>• Please enter your email.<br>(e.g. pogiako@gmail.com/pogiako@yahoo.com)</span></div>
									<div id="error-email" class="error-message email"><span>• Please enter your Email Address.</span><span>• Invalid email format.</span></div>
								</div>
							</div>
							<div class="input-group">
								<div class="input_svg">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><g opacity="0.5" clip-path="url(#clip0_6078_1091)"><path d="M5 4H9L11 9L8.5 10.5C9.57096 12.6715 11.3285 14.429 13.5 15.5L15 13L20 15V19C20 19.5304 19.7893 20.0391 19.4142 20.4142C19.0391 20.7893 18.5304 21 18 21C14.0993 20.763 10.4202 19.1065 7.65683 16.3432C4.8935 13.5798 3.23705 9.90074 3 6C3 5.46957 3.21071 4.96086 3.58579 4.58579C3.96086 4.21071 4.46957 4 5 4Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /> </g><defs>
										<clipPath id="clip0_6078_1091"><rect width="24" height="24" fill="white" /> </clipPath></defs>
									</svg>
								</div>
								<div class="form-floating custom_form_floating">
									<input id="phone_number" name="phone" class="form-control custom_phone" type="number" data-id="phone_number" maxlength="11" placeholder="Number">
									<label class="form-label form-label" for="phone_number">Phone Number<span>&nbsp;*</span></label>
									<div id="error-phone_number" class="error-message phone_number"><span>• Please enter your phone number.</span></div>
									<div id="guide_phone_number" class="guide-message phone_number"><span>• Please enter 1-11 digits only. (e.g., 09172839117)</span></div>
								</div>
							</div>
							<div class="input-group">
								<div class="input_svg">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<g opacity="0.5" clip-path="url(#clip0_6078_13877)"><path d="M8 11V7C8 5.93913 8.42143 4.92172 9.17157 4.17157C9.92172 3.42143 10.9391 3 12 3C13.0609 3 14.0783 3.42143 14.8284 4.17157C15.5786 4.92172 16 5.93913 16 7V11M5 13C5 12.4696 5.21071 11.9609 5.58579 11.5858C5.96086 11.2107 6.46957 11 7 11H17C17.5304 11 18.0391 11.2107 18.4142 11.5858C18.7893 11.9609 19 12.4696 19 13V19C19 19.5304 18.7893 20.0391 18.4142 20.4142C18.0391 20.7893 17.5304 21 17 21H7C6.46957 21 5.96086 20.7893 5.58579 20.4142C5.21071 20.0391 5 19.5304 5 19V13ZM11 16C11 16.2652 11.1054 16.5196 11.2929 16.7071C11.4804 16.8946 11.7348 17 12 17C12.2652 17 12.5196 16.8946 12.7071 16.7071C12.8946 16.5196 13 16.2652 13 16C13 15.7348 12.8946 15.4804 12.7071 15.2929C12.5196 15.1054 12.2652 15 12 15C11.7348 15 11.4804 15.1054 11.2929 15.2929C11.1054 15.4804 11 15.7348 11 16Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /> </g><defs><clipPath id="clip0_6078_13877"><rect width="24" height="24" fill="white" /> </clipPath></defs>
									</svg>
								</div>
								<div class="align-self-stretch form-floating custom_form_floating">
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
						<button id="next_btn" class="disabled border-success next_btn" type="submit" style="--bs-success:#004D53;--bs-success-rgb:0,77,83;" disabled="">Next</button>
					</form>
				</div>

				<div id="step-2" class="step">
					<div class="justify-content-between signup_header" id="signup_header">
						<button id="signup_back_btn" class="signup_back_btn" type="button">
						<svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
  <g clip-path="url(#clip0_6550_4693)" filter="url(#filter0_d_6550_4693)">
    <path d="M5.5 12H19.5M5.5 12L11.5 18M5.5 12L11.5 6" stroke="#045B62" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <filter id="filter0_d_6550_4693" x="-1.5" y="0" width="28" height="28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
      <feOffset dy="2"/>
      <feGaussianBlur stdDeviation="1"/>
      <feComposite in2="hardAlpha" operator="out"/>
      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_6550_4693"/>
      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_6550_4693" result="shape"/>
    </filter>
    <clipPath id="clip0_6550_4693"><rect width="24" height="24" fill="white" transform="translate(0.5)"/></clipPath></defs>
</svg> Back

						</button>
					</div>
					<div class="heading">
						<h1>Introduce yourself</h1>
						<p>Providing your basic info can help us get to know you more.</p>
					</div>
					<form class="signup_custom_container" method="POST" action="{{ route('client.signup') }}" id="form2"> 
                        @csrf
						<div class="signup_inputs_container">
							<input type="hidden" id="Hform2Email" name="email">
							<input type="hidden" id="Hform2Phone" name="phone">
							<input type="hidden" id="Hform2Password" name="password">
							<div class="input-group fName_lname">
								<div class="form-floating">
									<input id="first_name" name="first_name" class="form-control" type="text" placeholder="First Name" data-id="first_name" maxlength="50">
									<label class="form-label" for="first_name">First Name<span>&nbsp;*</span></label>
									<div id="error-first_name" class="error-message"><span>• Please enter your first name.</span></div>
									<div id="guide_first_name" class="guide-message"><span>• Please enter your first name only.<br>(ex. Harold)</span></div>
								</div>
								<div class="form-floating">
									<input id="middle_name" name="middle_name" class="form-control last_name" type="text" placeholder="Middle Name" data-id="middle_name" maxlength="50">
									<label class="form-label" for="middle_name">Middle Name</label>
									<div id="error-middle_name" class="error-message"><span>• Please enter your middle name.</span></div>
									<div id="guide_middle_name" class="guide-message"><span>• Please enter your middle name.</span></div>
								</div>
							</div>
							<div class="input-group lname_suffix">
								<div class="form-floating">
									<input id="last_name" name="last_name" class="form-control" type="text" placeholder="Last Name" data-id="last_name" maxlength="50">
									<label class="form-label" for="last_name">Last Name<span>&nbsp;*</span></label>
									<div id="error-last_name" class="error-message"><span>• Please enter your last name.</span></div>
									<div id="guide_last_name" class="guide-message"><span>• Please enter your last name.</span></div>
								</div>
								<div class="form-floating">
									<select id="suffix" name="suffix" class="form-select">
										<option value="" selected="">Select a suffix (optional)</option>
										<option value="I">I</option>
										<option value="II">II</option>
										<option value="III">III</option>
										<option value="IV">IV</option>
										<option value="Other">Other</option>
									</select>
									<label class="form-label" for="suffix">Suffix</label>
								</div>
								<div class="form-floating specify_suffix" style="display:none;">
									<input id="specify_suffix" class="form-control" type="text" name="specify_suffix" placeholder="Specify suffix" data-id="specify_suffix">
									<label class="form-label" for="specify_suffix">Specify Suffix<span>&nbsp;*</span></label>
									<div id="error-specify_suffix" class="error-message"><span>• Please enter your suffix.</span></div>
									<div id="guide_specify_suffix" class="guide-message"><span>• Please specify your suffix.</span></div>
								</div>
							</div>
							<div class="input-group">
								<div class="align-self-stretch form-floating">
									<select id="gender" name="gender" class="form-select">
										<option value="Prefer not to say" selected="">Sex (optional)</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
									<label class="form-label" for="gender">Gender</label>
								</div>
							</div>
							<div class="input-group">
								<div id="birthdate-container" name="birthdate" class="align-self-stretch form-floating">
									<input id="birthdate" class="form-control" type="date" name="birthdate" placeholder=" " data-id="birthdate">
									<label class="form-label" for="birthdate">Birthdate<span>&nbsp;*</span></label>
									<div id="error-birthdate" class="error-message"><span>• Please enter your birthdate.</span></div>
									<div id="guide_birthdate" class="guide-message"><span>• Please click the calendar icon on the right part, and select your birthdate.</span><span>• User must be 18 years old and above.</span></div>
								</div>
							</div>
						</div>
						<button id="signup_btn" class="disabled border-success signup_btn" type="submit" style="--bs-success:#004D53;--bs-success-rgb:0,77,83;" disabled="">Sign Up</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="signup_bg-img">
		<div class="signup_overlay"></div><img class="img" src="{{ asset('img/clientclinic.jpg') }}" width="100%" style="position:relative;"> 
    </div>
	
	<div class="modal fade show" role="dialog" tabindex="-1" id="signup_success">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content success_modal">
				<div class="modal-header success_header">
					<div class="success_icon_container"><span class="success_icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
						<g clip-path="url(#clip0_5693_10654)">
							<path d="M12 16L14.6667 18.6667L20 13.3333M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 14.4241 27.6896 12.8637 27.0866 11.4078C26.4835 9.95189 25.5996 8.62902 24.4853 7.51472C23.371 6.40042 22.0481 5.5165 20.5922 4.91345C19.1363 4.31039 17.5759 4 16 4C14.4241 4 12.8637 4.31039 11.4078 4.91345C9.95189 5.5165 8.62902 6.40042 7.51472 7.51472C6.40042 8.62902 5.5165 9.95189 4.91345 11.4078C4.31039 12.8637 4 14.4241 4 16Z" stroke="#5BB85A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						</g>
						<defs>
							<clipPath id="clip0_5693_10654">
							<rect width="32" height="32" fill="white"/>
							</clipPath>
						</defs>
						</svg></span>
					</div>
				</div>
				<div class="modal-body success_message">
					<div>
						<h1>Welcome to the family!</h1>
						<p>You have successfully created an account!</p>
					</div>
				</div>
				<div class="modal-footer"><a class="btn sign_in_btn" role="button" href="{{ route('client.signin') }}" id="go_to_signin"><span class="sign_in_btn_base">Sign In</span></a></div>
			</div>
		</div>
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
	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    @if ($errors->has('email'))
    <script>
        $(document).ready(function() {
			var signup_error = new bootstrap.Modal(document.getElementById('signup_error'));
			signup_error.show();
			setTimeout(function () {
				signup_error.hide();
        }, 2000);
        });
    </script>
    @elseif (session('success'))
	<script>
        $(document).ready(function() {
            $('#signup_success').modal('show');
        });
    </script>
	@endif
	<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/signup.js') }}"></script>
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
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#form2').submit(function(event) {
                var form = $(this);
                $.ajax({
                    url: '/user/signup',
                    method: 'POST',
                    data: Form.serialize(),
                    success: function(response) {
                        $('#signup_success').modal('show');
                        console.log(response);
                    },
                    error: function(xhr) {
                        // Handle validation errors
                        if (xhr.status === 422) {
                            var error = xhr.responseJSON.error; // Use 'error' instead of 'errors'
                            if (error === 'The email has already been taken') {
                                // Show the email already taken modal
                                $('#signup_error').modal('show');
                            }
                        }
                    }
                });
            });
        });
    </script>

	
</body>

</html>