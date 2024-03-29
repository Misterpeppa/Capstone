<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>TAGAPO CATS & DOGS</title>
    <link rel="icon" href="/img/dogs&cats.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:300,400,500,600,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('assets/css/bs-theme-overrides.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Navbar-Centered-Links-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/newstyles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Multi-step-form.css') }}">

</head>

<style>
.customized-row {
    margin: 0;
    padding: 0;
    min-height: 100vh;
    width: 100%;
    background: linear-gradient(90deg, rgba(0, 0, 0, 0.00) 0%, #1C1C1C 100%), url('{{ asset('img/clientclinic.jpg') }}') no-repeat center/cover;
}

.notification-dropdown {
      width: 300px;
      max-height: 500px;
      overflow-y: auto;
    }

.notification-item {
    padding: 10px;
    border-bottom: 1px solid #ccc;
}
</style>


<body>
    @include('includes.user_header')
    <main>
    
        <div class="container-fluid" style="padding:0; margin:0;">
            <div class="customized-row row d-flex align-items-center justify-content-start">
                <div class="customized-col col-8 col-md-6 mt-4 mt-md-0 d-flex flex-column justify-content-center align-items-start" style="margin-left: 17%;">
                    <div class="landing_welcome">
                    <div class="landing_headers">
                        <h1>Welcome to</h1>
                        <h2>Tagapo Dogs &amp; Cats Veterinary Clinic</h2>
                    </div>

                    <div class="landing_btns w-100">
                        <a class="btn custom-book-appointment-btn" role="button" href="{{ route('appointment.form') }}">
                            BOOK AN APPOINTMENT
                        </a>
                        <a class="btn custom-btn-check-schedule w-100" role="button" href="{{ route('appointment.list') }}">
                            CHECK SCHEDULE
                        </a>
                    </div>
                </div>
            </div>

            <div class="floating-div mt-4 mb-5">
                <div class="row w-100 d-flex justify-content-center" style="padding: 0; margin: 0;">
                    <div class="col-6 col-sm-6 col-md-8 mb-3">
                        <div class="card service_icons">
                            <div class="card-body landingpage d-flex flex-column justify-content-center flex-sm-column flex-md-row">
                                <div class="services">
                                    <div class="frame504 text-center"><svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none"><g clip-path="url(#clip0_6528_22801)"><path d="M19.8343 19.8332L36.1676 36.1665M10.4999 29.1666L29.1666 10.4999C31.3325 8.334 34.2702 7.11719 37.3333 7.11719C40.3964 7.11719 43.334 8.334 45.4999 10.4999C47.6659 12.6659 48.8827 15.6035 48.8827 18.6666C48.8827 21.7297 47.6659 24.6673 45.4999 26.8333L26.8333 45.4999C24.6673 47.6659 21.7297 48.8827 18.6666 48.8827C15.6035 48.8827 12.6659 47.6659 10.4999 45.4999C8.334 43.334 7.11719 40.3964 7.11719 37.3333C7.11719 34.2702 8.334 31.3325 10.4999 29.1666Z" stroke="#045B62" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_6528_22801"><rect width="56" height="56" fill="white"/></clipPath></defs></svg></div>
                                    <p>DEWORMING</p>
                                </div>
                                <div class="services">
                                    <div class="frame504 text-center"><svg xmlns="http://www.w3.org/2000/svg" width="57" height="56" viewBox="0 0 57 56" fill="none"><g clip-path="url(#clip0_6528_7284)"><path d="M40.4167 7L49.75 16.3333M45.0833 11.6667L34.5833 22.1667M27.5833 15.1667L41.5833 29.1667M39.25 26.8333L24.0833 42H14.75M14.75 42V32.6667L29.9167 17.5M14.75 42L7.75 49M18.25 29.1667L21.75 32.6667M25.25 22.1667L28.75 25.6667" stroke="#045B62" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_6528_7284"><rect width="56" height="56" fill="white" transform="translate(0.75)"/></clipPath></defs></svg></div>
                                    <p>VACCINATION</p>
                                </div>
                                <div class="services">
                                    <div class="frame504 text-center"><svg xmlns="http://www.w3.org/2000/svg" width="57" height="56" viewBox="0 0 57 56" fill="none"><g clip-path="url(#clip0_6528_23470)"><path d="M14.5 9.33333H12.1667C10.929 9.33333 9.742 9.825 8.86683 10.7002C7.99167 11.5753 7.5 12.7623 7.5 14V22.1667C7.5 25.5703 8.85208 28.8345 11.2588 31.2412C13.6655 33.6479 16.9297 35 20.3333 35C23.7369 35 27.0012 33.6479 29.4079 31.2412C31.8146 28.8345 33.1667 25.5703 33.1667 22.1667V14C33.1667 12.7623 32.675 11.5753 31.7998 10.7002C30.9247 9.825 29.7377 9.33333 28.5 9.33333H26.1667M19.1667 35C19.1667 36.8385 19.5288 38.659 20.2324 40.3576C20.9359 42.0561 21.9672 43.5995 23.2672 44.8995C24.5672 46.1995 26.1105 47.2307 27.8091 47.9343C29.5077 48.6379 31.3282 49 33.1667 49C35.0052 49 36.8257 48.6379 38.5242 47.9343C40.2228 47.2307 41.7661 46.1995 43.0662 44.8995C44.3662 43.5995 45.3974 42.0561 46.101 40.3576C46.8045 38.659 47.1667 36.8385 47.1667 35V28M47.1667 28C45.929 28 44.742 27.5083 43.8668 26.6332C42.9917 25.758 42.5 24.571 42.5 23.3333C42.5 22.0957 42.9917 20.9087 43.8668 20.0335C44.742 19.1583 45.929 18.6667 47.1667 18.6667C48.4043 18.6667 49.5913 19.1583 50.4665 20.0335C51.3417 20.9087 51.8333 22.0957 51.8333 23.3333C51.8333 24.571 51.3417 25.758 50.4665 26.6332C49.5913 27.5083 48.4043 28 47.1667 28ZM26.1667 7V11.6667M14.5 7V11.6667" stroke="#045B62" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_6528_23470"><rect width="56" height="56" fill="white" transform="translate(0.5)"/></clipPath></defs></svg></div>
                                    <p>CHECKUP</p>
                                </div>
                                <div class="services">
                                    <div class="frame504 text-center"><svg xmlns="http://www.w3.org/2000/svg" width="57" height="56" viewBox="0 0 57 56" fill="none"><g clip-path="url(#clip0_6528_17219)"><path d="M21.2513 11.6667H16.5846C15.347 11.6667 14.16 12.1583 13.2848 13.0335C12.4096 13.9087 11.918 15.0957 11.918 16.3333V44.3333C11.918 45.571 12.4096 46.758 13.2848 47.6332C14.16 48.5083 15.347 49 16.5846 49H39.918C41.1556 49 42.3426 48.5083 43.2178 47.6332C44.093 46.758 44.5846 45.571 44.5846 44.3333V16.3333C44.5846 15.0957 44.093 13.9087 43.2178 13.0335C42.3426 12.1583 41.1556 11.6667 39.918 11.6667H35.2513M21.2513 11.6667C21.2513 10.429 21.743 9.242 22.6181 8.36683C23.4933 7.49167 24.6803 7 25.918 7H30.5846C31.8223 7 33.0093 7.49167 33.8845 8.36683C34.7596 9.242 35.2513 10.429 35.2513 11.6667M21.2513 11.6667C21.2513 12.9043 21.743 14.0913 22.6181 14.9665C23.4933 15.8417 24.6803 16.3333 25.918 16.3333H30.5846C31.8223 16.3333 33.0093 15.8417 33.8845 14.9665C34.7596 14.0913 35.2513 12.9043 35.2513 11.6667M28.234 39.0833L34.6436 32.515C35.4365 31.6893 35.8792 30.589 35.8792 29.4443C35.8792 28.2996 35.4365 27.1993 34.6436 26.3736C34.2571 25.9714 33.7934 25.6513 33.2801 25.4327C32.7669 25.214 32.2148 25.1013 31.657 25.1013C31.0991 25.1013 30.547 25.214 30.0338 25.4327C29.5205 25.6513 29.0568 25.9714 28.6703 26.3736L28.2433 26.8123L27.8163 26.3713C27.4298 25.969 26.966 25.649 26.4528 25.4303C25.9396 25.2117 25.3875 25.099 24.8296 25.099C24.2718 25.099 23.7197 25.2117 23.2064 25.4303C22.6932 25.649 22.2294 25.969 21.843 26.3713C21.0496 27.1967 20.6064 28.2971 20.6064 29.442C20.6064 30.5868 21.0496 31.6873 21.843 32.5126L28.2316 39.1043L28.234 39.0833Z" stroke="#045B62" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_6528_17219"><rect width="56" height="56" fill="white" transform="translate(0.25)"/></clipPath></defs></svg></div>
                                    <p>LAB. EXAM</p>
                                </div>
                                <div class="services">
                                    <div class="frame504 text-center"><svg xmlns="http://www.w3.org/2000/svg" width="57" height="56" viewBox="0 0 57 56" fill="none"><g clip-path="url(#clip0_6528_17886)"><path d="M7.5 44.334L42.5 9.33398L49.5 16.334L35.5 30.334L40.1667 35.0007C36.1014 39.4028 30.9036 42.6019 25.1421 44.2481C19.3806 45.8942 13.2773 45.9239 7.5 44.334Z" stroke="#045B62" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_6528_17886"><rect width="56" height="56" fill="white" transform="translate(0.5)"/></clipPath></defs></svg></div>
                                    <p>SURGERY</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            




         
 
                <div class="row w-100 loc_and_working_hours d-flex justify-content-center" style="padding: 0; margin: 0;">
                    <div class="col-6 col-sm-6 col-md-4">
                        <div class="card location mb-4">
                            <div class="location_heading">
                                <h1>LOCATION</h1>
                                <div class="frame480">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none">
                                        <g clip-path="url(#clip0_2358_21426)">
                                            <path d="M28 43.1667L21 39.6667M21 39.6667L7 46.6667V16.3333L21 9.33334M21 39.6667V9.33334M21 9.33334L35 16.3333M35 16.3333L49 9.33334V25.6667M35 16.3333V28M44.3333 42V42.0233M49.2823 46.949C50.2615 45.9701 50.9284 44.7228 51.1987 43.3649C51.4689 42.007 51.3304 40.5994 50.8007 39.3202C50.2709 38.041 49.3737 36.9476 48.2225 36.1784C47.0714 35.4091 45.7179 34.9985 44.3333 34.9985C42.9488 34.9985 41.5953 35.4091 40.4441 36.1784C39.2929 36.9476 38.3957 38.041 37.866 39.3202C37.3362 40.5994 37.1977 42.007 37.468 43.3649C37.7383 44.7228 38.4052 45.9701 39.3843 46.949C40.3597 47.9267 42.0093 49.3873 44.3333 51.3333C46.7857 49.2567 48.4377 47.796 49.2823 46.949Z" stroke="#045B62" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_2358_21426">
                                            <rect width="56" height="56" fill="white"/>
                                            </clipPath>
                                        </defs>
                                        </svg>
                                    </div>
                            </div>
                            <p>#170 J.P. Rizal Boulevard, Barangay Tagapo, Santa Rosa, Laguna, 4026</p>

                        </div>
                    </div>

                    <div class="col-6 col-sm-6 col-md-4">
                        <div class="card location mb-4">
                            <div class="location_heading">
                                <h1>WORKING HOURS</h1>
                                <div class="frame480">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none">
                                        <g clip-path="url(#clip0_2358_21432)">
                                            <path d="M36.1667 28H28V16.3333M7 28C7 30.7578 7.54318 33.4885 8.59853 36.0364C9.65388 38.5842 11.2007 40.8992 13.1508 42.8492C15.1008 44.7993 17.4158 46.3461 19.9636 47.4015C22.5115 48.4568 25.2422 49 28 49C30.7578 49 33.4885 48.4568 36.0364 47.4015C38.5842 46.3461 40.8992 44.7993 42.8492 42.8492C44.7993 40.8992 46.3461 38.5842 47.4015 36.0364C48.4568 33.4885 49 30.7578 49 28C49 25.2422 48.4568 22.5115 47.4015 19.9636C46.3461 17.4158 44.7993 15.1008 42.8492 13.1508C40.8992 11.2007 38.5842 9.65388 36.0364 8.59853C33.4885 7.54318 30.7578 7 28 7C25.2422 7 22.5115 7.54318 19.9636 8.59853C17.4158 9.65388 15.1008 11.2007 13.1508 13.1508C11.2007 15.1008 9.65388 17.4158 8.59853 19.9636C7.54318 22.5115 7 25.2422 7 28Z" stroke="#045B62" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_2358_21432">
                                            <rect width="56" height="56" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                            <p>9:00 AM - 4:00 PM <br>Tuesday - Saturday</p>

                        </div>
                    </div>
                    
                </div>
            

        
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
						<h1>Your Email has been Verified!</h1>
						<p>You have successfully created an account!</p>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="modal fade show" role="dialog" tabindex="-1" id="signup_error">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content success_modal">
            <div class="modal-header success_header">
                <div class="failed_icon_container">
                <span class="discard_icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                    <g clip-path="url(#clip0_6746_5377)">
                        <path d="M13.3333 13.3333L18.6667 18.6667M18.6667 13.3333L13.3333 18.6667M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 14.4241 27.6896 12.8637 27.0866 11.4078C26.4835 9.95189 25.5996 8.62902 24.4853 7.51472C23.371 6.40042 22.0481 5.5165 20.5922 4.91345C19.1363 4.31039 17.5759 4 16 4C14.4241 4 12.8637 4.31039 11.4078 4.91345C9.95189 5.5165 8.62902 6.40042 7.51472 7.51472C6.40042 8.62902 5.5165 9.95189 4.91345 11.4078C4.31039 12.8637 4 14.4241 4 16Z" stroke="#DA534F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_6746_5377">
                        <rect width="32" height="32" fill="white"/>
                        </clipPath>
                    </defs>
                    </svg>
                </span>
                </div>
            </div>
            <div class="modal-body success_message">
                <div>
                    <h1>User Not Verified.</h1>
                    <p>Please verify your email to recieve appointment notification.&nbsp;</p>
                </div>
                
            </div>
            <div class="modal-footer mt-0">
            <form method="POST" action="{{ route('resend', ['clientId' => $clientInfo->id]) }}">
                    @csrf
                    <button type="submit" class="btn btn-link w-100">Resend Email Verification</button>
                </form>
            </div>
        </div>
    </div>
	</div>
    <div class="modal fade show" role="dialog" tabindex="-1" id="appointment_error">
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
						<h1>You Have Reached The Max Appointment For Today.</h1>
						<p>Come Back Tomorrow To Make Another Appointment.&nbsp;</p>
					</div>
				</div>
			</div>
		</div>
	</div>   
    </main>

    @include('includes.footer')

    <script>
    window.onload = function () {
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    }
</script>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
@if (session('unverified'))
<script>
    $(document).ready(function() {
        $('#signup_error').modal('show');
    });
    const notifications = [
        "Please Verify Your Email Using This Link"
    ];
</script>
@endif
@if (session('verified'))
<script>
    $(document).ready(function() {
        $('#signup_success').modal('show');
    });
    const notifications = [
        "You are now Verified"
    ];
</script>
@endif
@if (session('error1'))
    <script>
        $(document).ready(function() {
            console.log('Error');
        function showModal() {
            $('#appointment_error').show();
        }
        function hideModal() {
            $('#appointment_error').hide();
        }
        showModal();
    });
    </script>
    @endif
<script>


  // Function to populate all notification dropdowns
  function populateNotifications() {
    const dropdowns = document.querySelectorAll('.notification-dropdown');

    dropdowns.forEach(dropdown => {
      // Clear existing items
      dropdown.innerHTML = '';

      // Add new notification items
      notifications.forEach(notification => {
        const listItem = document.createElement('li');
        listItem.classList.add('notification-item');
        listItem.innerHTML = notification; // Use innerHTML to render HTML content
        dropdown.appendChild(listItem);
      });
    });
  }

  // Event listener for button click to populate and show the dropdowns
  const notificationButtons = document.querySelectorAll('.notification');
  
  notificationButtons.forEach(button => {
    button.addEventListener('click', () => {
      populateNotifications();
    });
  });
</script>



<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/bs-init.js') }}"></script>
<script src="{{ asset('assets/js/footer.js') }}"></script>

    
</body>

</html>