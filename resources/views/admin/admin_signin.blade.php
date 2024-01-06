<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
	<meta charset="utf-8">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Admin | Signin</title>
    <link rel="icon" href="/img/dogs&cats.png" type="image/x-icon">
	<link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter&amp;display=swap">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:300,400,500,600,700&amp;display=swap">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap">
	<link rel="stylesheet" href="{{ asset('assets/css/bs-theme-overrides.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/Multi-step-form.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/Navbar-Centered-Links-icons.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/Toggle-Switch-toggle-switch.css') }}">
</head>

<body style="background: #EEEBEF;">
	<div class="container-fluid d-flex justify-content-center" style="padding-right: 0px;padding-left: 0px;flex-shrink: 0;margin-top: 50px;margin-bottom: 50px;height: 100%;">
		<div class="row g-0">
			<div class="col-12 mt-3">
				<div id="signin" class="admin_signin"><img src="{{ asset('assets/img/dogs_cats.png') }}">
				@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
                <form action="{{ route('admin.auth') }}" method="POST" >
                    @csrf
					<div class="input-group">
						<div class="input_svg">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<g opacity="0.5" clip-path="url(#clip0_6266_21985)">
									<path d="M6.16797 18.849C6.41548 18.0252 6.92194 17.3032 7.61222 16.79C8.30249 16.2768 9.13982 15.9997 9.99997 16H14C14.8612 15.9997 15.6996 16.2774 16.3904 16.7918C17.0811 17.3062 17.5874 18.0298 17.834 18.855M3 12C3 13.1819 3.23279 14.3522 3.68508 15.4442C4.13738 16.5361 4.80031 17.5282 5.63604 18.364C6.47177 19.1997 7.46392 19.8626 8.55585 20.3149C9.64778 20.7672 10.8181 21 12 21C13.1819 21 14.3522 20.7672 15.4442 20.3149C16.5361 19.8626 17.5282 19.1997 18.364 18.364C19.1997 17.5282 19.8626 16.5361 20.3149 15.4442C20.7672 14.3522 21 13.1819 21 12C21 10.8181 20.7672 9.64778 20.3149 8.55585C19.8626 7.46392 19.1997 6.47177 18.364 5.63604C17.5282 4.80031 16.5361 4.13738 15.4442 3.68508C14.3522 3.23279 13.1819 3 12 3C10.8181 3 9.64778 3.23279 8.55585 3.68508C7.46392 4.13738 6.47177 4.80031 5.63604 5.63604C4.80031 6.47177 4.13738 7.46392 3.68508 8.55585C3.23279 9.64778 3 10.8181 3 12ZM9 10C9 10.7956 9.31607 11.5587 9.87868 12.1213C10.4413 12.6839 11.2044 13 12 13C12.7956 13 13.5587 12.6839 14.1213 12.1213C14.6839 11.5587 15 10.7956 15 10C15 9.20435 14.6839 8.44129 14.1213 7.87868C13.5587 7.31607 12.7956 7 12 7C11.2044 7 10.4413 7.31607 9.87868 7.87868C9.31607 8.44129 9 9.20435 9 10Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /> </g>
								<defs>
									<clipPath id="clip0_6266_21985">
										<rect width="24" height="24" fill="white" /> </clipPath>
								</defs>
							</svg>
						</div>
						<div class="form-floating custom_form_floating">
							<input id="email" name="email" class="form-control custom_email" type="email" placeholder="Email Address" data-id="email">
							<label class="form-label" for="email">Admin ID<span>&nbsp;*</span></label>
							<div id="guide_email_message" class="guide-message email"><span>• Please enter your Admin ID.</span></div>
							<div id="error-email" class="error-message email"><span>• Invalid ID</span><span>• Please enter your ID.</span></div>
						</div>
					</div>
					<div class="input-group">
						<div class="input_svg">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<g opacity="0.5" clip-path="url(#clip0_6266_21994)">
									<path d="M8 11V7C8 5.93913 8.42143 4.92172 9.17157 4.17157C9.92172 3.42143 10.9391 3 12 3C13.0609 3 14.0783 3.42143 14.8284 4.17157C15.5786 4.92172 16 5.93913 16 7V11M5 13C5 12.4696 5.21071 11.9609 5.58579 11.5858C5.96086 11.2107 6.46957 11 7 11H17C17.5304 11 18.0391 11.2107 18.4142 11.5858C18.7893 11.9609 19 12.4696 19 13V19C19 19.5304 18.7893 20.0391 18.4142 20.4142C18.0391 20.7893 17.5304 21 17 21H7C6.46957 21 5.96086 20.7893 5.58579 20.4142C5.21071 20.0391 5 19.5304 5 19V13ZM11 16C11 16.2652 11.1054 16.5196 11.2929 16.7071C11.4804 16.8946 11.7348 17 12 17C12.2652 17 12.5196 16.8946 12.7071 16.7071C12.8946 16.5196 13 16.2652 13 16C13 15.7348 12.8946 15.4804 12.7071 15.2929C12.5196 15.1054 12.2652 15 12 15C11.7348 15 11.4804 15.1054 11.2929 15.2929C11.1054 15.4804 11 15.7348 11 16Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /> </g>
								<defs>
									<clipPath id="clip0_6266_21994">
										<rect width="24" height="24" fill="white" /> </clipPath>
								</defs>
							</svg>
						</div>
						<div class="align-self-stretch form-floating custom_form_floating">
							<input id="password" name="password" class="form-control custom_password" type="password" placeholder="Password" data-id="password">
							<div id="eye-icon" class="eye-icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path d="M21 9C18.6 11.667 15.6 13 12 13C8.4 13 5.4 11.667 3 9M3 15L5.5 11.2M20.9998 14.976L18.5078 11.2M9 17L9.5 13M15 17L14.5 13" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
									<rect width="24" height="24" fill="white"></rect>
								</svg>
							</div>
							<label class="form-label" for="password">Password<span>&nbsp;*</span></label>
							<div id="error-password" class="error-message password"><span>• Invalid password.</span></div>
							<div id="guide_password" class="guide-message password"><span>• Please enter your password.</span></div>
						</div>
					</div>
					<button class="btn signin_btn" type="submit"><span class="signin_btn_base">Sign In</span></button>
                </form>
				</div>
			</div>
		</div>
	</div>
	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/bs-init.js') }}"></script>
	<script src="{{ asset('assets/js/admin_signin.js') }}"></script>
	<script src="{{ asset('assets/js/appointment_list.js') }}"></script>
	<script src="{{ asset('assets/js/appointmentforms.js') }}"></script>
	<script src="{{ asset('assets/js/client.js') }}"></script>
	<script src="{{ asset('assets/js/dashboard.js') }}"></script>
	<script src="{{ asset('assets/js/inventory.js') }}"></script>
	<script src="{{ asset('assets/js/Multi-step-form-script.js') }}"></script>
	<script src="{{ asset('assets/js/pet_information.js') }}"></script>
	<script src="{{ asset('assets/js/pet_records.js') }}"></script>
	<script src="{{ asset('assets/js/sidebar.js') }}"></script>
	<script src="{{ asset('assets/js/signin.js') }}"></script>
	<script src="{{ asset('assets/js/signup.js') }}"></script>
	<script src="{{ asset('assets/js/user_settings.js') }}"></script>

</body>

</html>