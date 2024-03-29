<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
<meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin | Settings</title>
    <link rel="icon" href="/img/dogs&cats.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter&amp;display=swap">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Noto+Sans:300,400,500,600,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('assets/css/bs-theme-overrides.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Bootstrap-4-Custom-Radio.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Multi-step-form.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Navbar-Centered-Links-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/newstyles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Toggle-Switch.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

<body>
	<main class="d-flex flex-row container-fluid" style="padding: 0;">
    @php
    $activeTab = 'settings'; // Set the active tab
    @endphp
        @include('includes.admin_header')
		<div class="content">
		<div id="rectangle" class="rectangle justify-content-between">
                <div>
                    <a id="menu-toggle" class="btn menu_toggle btn-link" role="button" href="#menu-toggle"><i class="fa fa-bars custom-bars-icon"></i></a>
                </div>
                <div class="d-flex flex-direction-row">
                    <button class="btn notification" id="notification" type="button"><span class="notification_base"><svg
                                xmlns="http://www.w3.org/2000/svg" width="15" height="18" viewbox="0 0 15 18"
                                fill="none">
                                <path
                                    d="M2.29482 10.4791L2.93736 10.866L2.93903 10.8632L2.29482 10.4791ZM1.38031 11.998L0.737787 11.6112L0.737673 11.6113L1.38031 11.998ZM2.23916 14.328L1.99871 15.0385L2.00149 15.0394L2.23916 14.328ZM12.7918 14.328L12.5564 13.6159L12.5542 13.6167L12.7918 14.328ZM13.6507 11.998L14.2938 11.6121L14.2932 11.6112L13.6507 11.998ZM12.7362 10.4791L12.0864 10.854L12.0937 10.866L12.7362 10.4791ZM8.99065 2.00199L8.78522 2.7233C9.0594 2.80139 9.35415 2.71728 9.54583 2.50625C9.7375 2.29522 9.79296 1.99376 9.68894 1.72833L8.99065 2.00199ZM6.0483 2.00199L5.35001 1.72833C5.24599 1.99376 5.30145 2.29522 5.49313 2.50625C5.68481 2.71728 5.97955 2.80139 6.25374 2.7233L6.0483 2.00199ZM5.83359 16.3002L5.30286 16.8301L5.30326 16.8305L5.83359 16.3002ZM7.51948 1.02137C4.47306 1.02137 1.99811 3.49632 1.99811 6.54274H3.49811C3.49811 4.32475 5.30148 2.52137 7.51948 2.52137V1.02137ZM1.99811 6.54274V8.84096H3.49811V6.54274H1.99811ZM1.99811 8.84096C1.99811 8.99314 1.96284 9.22832 1.89124 9.48627C1.8197 9.74398 1.72858 9.96429 1.65061 10.0951L2.93903 10.8632C3.10759 10.5804 3.24311 10.2242 3.33658 9.88749C3.42999 9.551 3.49811 9.17386 3.49811 8.84096H1.99811ZM1.6523 10.0923L0.737787 11.6112L2.02284 12.3849L2.93735 10.866L1.6523 10.0923ZM0.737673 11.6113C0.34933 12.2568 0.264391 12.9889 0.507 13.6441C0.749283 14.2984 1.2894 14.7984 1.99871 15.0384L2.47961 13.6176C2.15512 13.5078 1.98351 13.3119 1.91366 13.1233C1.84415 12.9355 1.84668 12.6776 2.02295 12.3847L0.737673 11.6113ZM2.00149 15.0394C5.58318 16.236 9.44782 16.236 13.0295 15.0394L12.5542 13.6167C9.28099 14.7103 5.75001 14.7103 2.47682 13.6167L2.00149 15.0394ZM13.0272 15.0401C14.4485 14.5703 15.0644 12.8965 14.2938 11.6121L13.0076 12.3839C13.2867 12.849 13.0596 13.4496 12.5564 13.6159L13.0272 15.0401ZM14.2932 11.6112L13.3787 10.0923L12.0937 10.866L13.0082 12.3849L14.2932 11.6112ZM13.3858 10.1043C13.3086 9.97054 13.2183 9.7472 13.1473 9.48852C13.0762 9.22901 13.0408 8.99336 13.0408 8.84096H11.5408C11.5408 9.17364 11.6089 9.55031 11.7008 9.88524C11.7928 10.221 11.9252 10.5742 12.0865 10.8539L13.3858 10.1043ZM13.0408 8.84096V6.54274H11.5408V8.84096H13.0408ZM13.0408 6.54274C13.0408 3.50428 10.5579 1.02137 7.51948 1.02137V2.52137C9.72952 2.52137 11.5408 4.3327 11.5408 6.54274H13.0408ZM9.19608 1.28067C8.10014 0.968542 6.93882 0.968542 5.84287 1.28067L6.25374 2.7233C7.08111 2.48766 7.95784 2.48766 8.78522 2.7233L9.19608 1.28067ZM6.7466 2.27564C6.86777 1.96645 7.16863 1.75 7.51948 1.75V0.25C6.53434 0.25 5.69008 0.860583 5.35001 1.72833L6.7466 2.27564ZM7.51948 1.75C7.87033 1.75 8.17119 1.96645 8.29236 2.27564L9.68894 1.72833C9.34888 0.860583 8.50461 0.25 7.51948 0.25V1.75ZM9.15516 14.6143C9.15516 15.5122 8.41739 16.25 7.51948 16.25V17.75C9.24582 17.75 10.6552 16.3407 10.6552 14.6143H9.15516ZM7.51948 16.25C7.07487 16.25 6.65887 16.0648 6.36392 15.7699L5.30326 16.8305C5.86716 17.3944 6.65991 17.75 7.51948 17.75V16.25ZM6.36432 15.7703C6.05752 15.463 5.88477 15.0468 5.88379 14.6126L4.38379 14.616C4.38567 15.4465 4.71607 16.2425 5.30286 16.8301L6.36432 15.7703Z"
                                    fill="#1C1C1C"></path></svg></span></button>
                    
                </div>
            </div>
			<div class="main_content">
				<div id="client_header" class="client_header">
					<div class="header_text_container">
						<h1><strong>Settings</strong></h1> </div>
					<div class="btn-group split_btn" id="add_approve_appointment_split_btn" style="display: none;">
						<button class="btn add_Product_btn" id="approve_appointment_btn" type="button"><span class="add_Product_btn_base"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="27" viewBox="0 0 25 27" fill="none">
  <g clip-path="url(#clip0_6356_20985)" filter="url(#filter0_d_6356_20985)">
    <path d="M12.5 21H6C5.46957 21 4.96086 20.7893 4.58579 20.4142C4.21071 20.0391 4 19.5304 4 19V7C4 6.46957 4.21071 5.96086 4.58579 5.58579C4.96086 5.21071 5.46957 5 6 5H18C18.5304 5 19.0391 5.21071 19.4142 5.58579C19.7893 5.96086 20 6.46957 20 7V12M16 3V7M8 3V7M4 11H20M16 19H22M19 16V22" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <filter id="filter0_d_6356_20985" x="-2" y="0" width="28" height="28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
      <feOffset dy="2"/>
      <feGaussianBlur stdDeviation="1"/>
      <feComposite in2="hardAlpha" operator="out"/>
      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_6356_20985"/>
      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_6356_20985" result="shape"/>
    </filter>
    <clipPath id="clip0_6356_20985">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg> Add Appointment</span></button>
						<button class="btn dropdown-toggle dropdown-toggle-split add_product_dropdown" data-bs-toggle="dropdown" aria-expanded="false" type="button"></button>
						<div class="dropdown-menu"><a class="dropdown-item" href="#">Generate Report</a></div>
					</div>
					<div class="btn-group split_btn" id="add_pending_appointment_split_btn" style="display: none;">
						<button class="btn add_Product_btn" id="pending_appointment_btn" type="button"><span class="add_Product_btn_base"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="27" viewBox="0 0 25 27" fill="none">
  <g clip-path="url(#clip0_6356_20985)" filter="url(#filter0_d_6356_20985)">
    <path d="M12.5 21H6C5.46957 21 4.96086 20.7893 4.58579 20.4142C4.21071 20.0391 4 19.5304 4 19V7C4 6.46957 4.21071 5.96086 4.58579 5.58579C4.96086 5.21071 5.46957 5 6 5H18C18.5304 5 19.0391 5.21071 19.4142 5.58579C19.7893 5.96086 20 6.46957 20 7V12M16 3V7M8 3V7M4 11H20M16 19H22M19 16V22" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <filter id="filter0_d_6356_20985" x="-2" y="0" width="28" height="28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
      <feOffset dy="2"/>
      <feGaussianBlur stdDeviation="1"/>
      <feComposite in2="hardAlpha" operator="out"/>
      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_6356_20985"/>
      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_6356_20985" result="shape"/>
    </filter>
    <clipPath id="clip0_6356_20985">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg> Add Appointment</span></button>
						<button class="btn dropdown-toggle dropdown-toggle-split add_product_dropdown" data-bs-toggle="dropdown" aria-expanded="false" type="button"></button>
						<div class="dropdown-menu"><a class="dropdown-item" href="#">Generate Report</a></div>
					</div>
					<div class="btn-group split_btn" id="add_rejected_appointment_split_btn" style="display: none;">
						<button class="btn add_Product_btn" id="reject_appointment_btn" type="button"><span class="add_Product_btn_base"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="27" viewBox="0 0 25 27" fill="none">
  <g clip-path="url(#clip0_6356_20985)" filter="url(#filter0_d_6356_20985)">
    <path d="M12.5 21H6C5.46957 21 4.96086 20.7893 4.58579 20.4142C4.21071 20.0391 4 19.5304 4 19V7C4 6.46957 4.21071 5.96086 4.58579 5.58579C4.96086 5.21071 5.46957 5 6 5H18C18.5304 5 19.0391 5.21071 19.4142 5.58579C19.7893 5.96086 20 6.46957 20 7V12M16 3V7M8 3V7M4 11H20M16 19H22M19 16V22" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <filter id="filter0_d_6356_20985" x="-2" y="0" width="28" height="28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
      <feOffset dy="2"/>
      <feGaussianBlur stdDeviation="1"/>
      <feComposite in2="hardAlpha" operator="out"/>
      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_6356_20985"/>
      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_6356_20985" result="shape"/>
    </filter>
    <clipPath id="clip0_6356_20985">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg> Add Appointment</span></button>
						<button class="btn dropdown-toggle dropdown-toggle-split add_product_dropdown" data-bs-toggle="dropdown" aria-expanded="false" type="button"></button>
						<div class="dropdown-menu"><a class="dropdown-item" href="#">Generate Report</a></div>
					</div>
				</div>
				<div class="d-flex flex-column align-items-start align-self-stretch" style="gap: var(--Spacing-spacing-xs, 12px);">
					<ul class="nav nav-tabs pet_nav_tabs" role="tablist">
						<li class="nav-item" role="presentation"><a class="nav-link active list_tab" role="tab" data-bs-toggle="tab" href="#pass_and_security"><span class="Notifications_tab">Password and Security</span></a></li>
					</ul>
					<div class="tab-content appointment_tab_content">
						<div class="tab-pane  align-self-stretch appointment_tab" role="tabpanel" id="notifications">
							<div class="notifications_content">
								<h1>Notification Settings</h1>
								<div class="Notifications">
									<div class="card notifications_settings">
										<div class="left_notification_settings">
											<h1>Email Notifications</h1>
											<p>Get emails to stay updated even when you’re not here. You can turn these off.</p>
										</div>
										<div class="right_notification_settings">
											<div class="notif_buttons_and_texts">
												<div class="toggle_container">
													<label class="form-label switch">
														<input type="checkbox"><span class="slider round"></span></label>
												</div>
												<div class="text_container">
													<h1>Appointment Confirmation/Cancellation</h1>
													<p>Get to know if your appointment has been approved.</p>
												</div>
											</div>
											<div class="notif_buttons_and_texts">
												<div class="toggle_container">
													<label class="form-label switch">
														<input type="checkbox"><span class="slider round"></span></label>
												</div>
												<div class="text_container">
													<h1>Appointment Reminders</h1>
													<p>Get reminded prior to your scheduled appointment so you don’t miss it.</p>
												</div>
											</div>
											<div class="notif_buttons_and_texts">
												<div class="toggle_container">
													<label class="form-label switch">
														<input type="checkbox"><span class="slider round"></span></label>
												</div>
												<div class="text_container">
													<h1>Inventory Updates</h1>
													<p>Get reminded when stocks get low or expired.</p>
												</div>
											</div>
											
										</div>
									</div>
									
								</div>
							</div>
						</div>
						<div class="tab-pane active align-self-stretch appointment_tab" role="tabpanel" id="pass_and_security">
							<div class="pass_and_security_content">
								<h1>Password and Security</h1>
								<div class="card pass_and_security_card" id="pass_and_security_box">
									<div class="pass_and_security_text">
										<h4>Password</h4>
										<p>Set a unique password to protect your account.</p>
									</div>
									<button class="btn change_password_btn" id="change_password_btn" type="button"><span class="change_password_btn_base">Change Password</span></button>
								</div>
								<div class="card change_password" id="change_password">
									<form action="{{ route('admin.changepassword')}}" method="POST" id="adminChangePassword">
										@csrf
										<div class="change_pass_input_container">
											<div class="align-self-stretch form-floating">
												<input class="form-control form-control form-control" name="current_password" type="password" data-id="old_password" id="old_password" placeholder="Old Password">
												<div id="eye-icon-old-password" class="eye-icon">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g opacity="0.5" clip-path="url(#clip0_6818_21927)">
    <path d="M21 9C18.6 11.667 15.6 13 12 13C8.4 13 5.4 11.667 3 9M3 15L5.5 11.2M20.9998 14.976L18.5078 11.2M9 17L9.5 13M15 17L14.5 13" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_6818_21927">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg>
												</div>
												<label class="form-label form-label form-label" for="old_password">Old Password<span>&nbsp;*</span></label>
												<div id="error-old_password" class="error-message"><span>• Please enter your password.</span><span>• Password must have 8 or more characters.</span><span>• Password must have at least 1 uppercase character.</span><span>• Password must have at least 1 special character.</span></div>
												<div id="guide-old_password" class="guide-message"><span>• Password must have more than 8 characters.</span><span>• Password must have at least 1 uppercase character.</span><span>• Password must have at least 1 special character.</span></div>
											</div>
											<div class="align-self-stretch form-floating">
												<input class="form-control form-control form-control" name="new_password" type="password" data-id="new_password" id="new_password" placeholder="New Password">
												<div id="eye-icon-new-password" class="eye-icon">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g opacity="0.5" clip-path="url(#clip0_6818_21927)">
    <path d="M21 9C18.6 11.667 15.6 13 12 13C8.4 13 5.4 11.667 3 9M3 15L5.5 11.2M20.9998 14.976L18.5078 11.2M9 17L9.5 13M15 17L14.5 13" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_6818_21927">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg>
												</div>
												<label class="form-label form-label form-label" for="new_password">New Password<span>&nbsp;*</span></label>
												<div id="error-new_password" class="error-message"><span>• Please enter your password.</span><span>• Password must have 8 or more characters.</span><span>• Password must have at least 1 uppercase character.</span><span>• Password must have at least 1 special character.</span></div>
												<div id="guide-new_password" class="guide-message"><span>• Password must have more than 8 characters.</span><span>• Password must have at least 1 uppercase character.</span><span>• Password must have at least 1 special character.</span></div>
											</div>
											<div class="align-self-stretch form-floating">
												<input class="form-control form-control form-control" name="new_password_confirmation" type="password" data-id="confirm_password" id="confirm_password" placeholder="Confirm Password">
												<div id="eye-icon-confirm-password" class="eye-icon">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g opacity="0.5" clip-path="url(#clip0_6818_21927)">
    <path d="M21 9C18.6 11.667 15.6 13 12 13C8.4 13 5.4 11.667 3 9M3 15L5.5 11.2M20.9998 14.976L18.5078 11.2M9 17L9.5 13M15 17L14.5 13" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_6818_21927">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg>
												</div>
												<label class="form-label form-label form-label" for="confirm_password">Confirm Password<span>&nbsp;*</span></label>
												<div id="error-confirm_password" class="error-message"><span>• Please enter your password.</span><span>• Password must have 8 or more characters.</span><span>• Password must have at least 1 uppercase character.</span><span>• Password must have at least 1 special character.</span></div>
												<div id="guide-confirm_password" class="guide-message"><span>• Password must have more than 8 characters.</span><span>• Password must have at least 1 uppercase character.</span><span>• Password must have at least 1 special character.</span></div>
											</div>
										</div>
									</form>
									<div class="change_pass_buttons">
										<button class="btn cancel_pass_btn" id="cancel_pass_btn" type="button"><span class="cancel_pass_btn_base">Cancel</span></button>
										<button class="btn edit_save_changes" id="edit_save_changes" form="adminChangePassword" type="submit"><span class="edit_save_changes_base">Save Changes</span></button>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<div class="modal fade show" role="dialog" tabindex="-1" id="cancel_change_pass">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content discard_modal">
				<div class="modal-header discard_header">
					<div class="discard_icon_container"><span class="discard_icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
  <g clip-path="url(#clip0_6173_15044)">
    <path d="M13.3333 13.3333L18.6667 18.6667M18.6667 13.3333L13.3333 18.6667M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 14.4241 27.6896 12.8637 27.0866 11.4078C26.4835 9.95189 25.5996 8.62902 24.4853 7.51472C23.371 6.40042 22.0481 5.5165 20.5922 4.91345C19.1363 4.31039 17.5759 4 16 4C14.4241 4 12.8637 4.31039 11.4078 4.91345C9.95189 5.5165 8.62902 6.40042 7.51472 7.51472C6.40042 8.62902 5.5165 9.95189 4.91345 11.4078C4.31039 12.8637 4 14.4241 4 16Z" stroke="#DA534F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_6173_15044">
      <rect width="32" height="32" fill="white"/>
    </clipPath>
  </defs>
</svg>
</span></div>
				</div>
				<div class="modal-body discard_message">
					<div>
						<h1>Discard changes?</h1>
						<p>Any unsaved progress will be lost.</p>
					</div>
				</div>
				<div class="modal-footer discard_footer">
					<button class="btn return_btn" data-bs-dismiss="modal" id="return_btn-1" type="button"><span class="return_btn_base">Return</span></button>
					<button class="btn discard_btn" id="discard_btn" type="button" data-bs-dismiss="modal"><span class="discard_btn_base">Discard</span></button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade show" role="dialog" tabindex="-1" id="save_changes_success">
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
</svg></span></div>
				</div>
				<div class="modal-body success_message">
					<div>
						<h1>Success!</h1>
						<p>Your changes have been successfully saved.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

  <div class="modal fade show" role="dialog" tabindex="-1" id="save_changes_success">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content success_modal">
                <div class="modal-header success_header">
                    <div class="success_icon_container"><span class="success_icon"><svg
                                xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                viewBox="0 0 32 32" fill="none">
                                <g clip-path="url(#clip0_5693_10654)">
                                    <path
                                        d="M12 16L14.6667 18.6667L20 13.3333M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 14.4241 27.6896 12.8637 27.0866 11.4078C26.4835 9.95189 25.5996 8.62902 24.4853 7.51472C23.371 6.40042 22.0481 5.5165 20.5922 4.91345C19.1363 4.31039 17.5759 4 16 4C14.4241 4 12.8637 4.31039 11.4078 4.91345C9.95189 5.5165 8.62902 6.40042 7.51472 7.51472C6.40042 8.62902 5.5165 9.95189 4.91345 11.4078C4.31039 12.8637 4 14.4241 4 16Z"
                                        stroke="#5BB85A" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_5693_10654">
                                        <rect width="32" height="32" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg></span></div>
                </div>
                <div class="modal-body success_message">
                    <div>
                        <h1>Success!</h1>
                        <p>Your changes have been successfully saved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <div class="modal fade show" role="dialog" tabindex="-1" id="edit_discard">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content discard_modal">
				<div class="modal-header discard_header">
					<div class="discard_icon_container"><span class="discard_icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
  <g clip-path="url(#clip0_5693_21111)">
    <path d="M13.3333 13.3333L18.6667 18.6667M18.6667 13.3333L13.3333 18.6667M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 14.4241 27.6896 12.8637 27.0866 11.4078C26.4835 9.95189 25.5996 8.62902 24.4853 7.51472C23.371 6.40042 22.0481 5.5165 20.5922 4.91345C19.1363 4.31039 17.5759 4 16 4C14.4241 4 12.8637 4.31039 11.4078 4.91345C9.95189 5.5165 8.62902 6.40042 7.51472 7.51472C6.40042 8.62902 5.5165 9.95189 4.91345 11.4078C4.31039 12.8637 4 14.4241 4 16Z" stroke="#DA534F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_5693_21111">
      <rect width="32" height="32" fill="white"/>
    </clipPath>
  </defs>
</svg></span></div>
				</div>
				<div class="modal-body discard_message">
					<div>
						<h1>Discard changes?</h1>
						<p>Any unsaved progress will be lost.</p>
					</div>
				</div>
				<div class="modal-footer discard_footer">
					<button class="btn return_btn" data-bs-dismiss="modal" id="return_btn" type="button"><span class="return_btn_base">Return</span></button>
					<button class="btn discard_btn" id="edit_discard_btn" type="button" data-bs-dismiss="modal"><span class="discard_btn_base">Discard</span></button>
				</div>
			</div>
		</div>
	</div>
	@if (session('success'))
	<script>
        $(document).ready(function() {
            $('#save_changes_success').show();
            setTimeout(function() {
                $('#save_changes_success').hide();
            }, 2000);
        });
    </script>
	@endif
	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/bs-init.js') }}"></script>
	<script src="{{ asset('assets/js/sidebar.js') }}"></script>
	<script src="{{ asset('assets/js/sidebartry.js') }}"></script>

	<script>

var edit_save_changes = document.getElementById('edit_save_changes');
var save_changes_success = new bootstrap.Modal(document.getElementById('save_changes_success'));

edit_save_changes.addEventListener('click', function(){
  save_changes_success.show();
  setTimeout(function () {
    save_changes_success.hide(); // Use Bootstrap modal's hide() method
  }, 2000);
});


        var cancel_pass_btn = document.getElementById('cancel_pass_btn');
        var edit_discard = new bootstrap.Modal(document.getElementById('edit_discard'));

        cancel_pass_btn.addEventListener('click', function(){
          edit_discard.show();
        });

        var edit_discard_btn = document.getElementById('edit_discard_btn');

        edit_discard_btn.addEventListener('click', function(){
    var old_password = document.getElementById('old_password');
    var new_password = document.getElementById('new_password');
    var confirm_password = document.getElementById('confirm_password');

    // Clear the values
    old_password.value = "";
    new_password.value = "";
    confirm_password.value = "";
});

        


		// Get references to the elements
		const passAndSecurityBox = document.getElementById('pass_and_security_box');
      const changePasswordDiv = document.getElementById('change_password');
      const changePasswordBtn = document.getElementById('change_password_btn');
    
      // Add click event listener to the button
      changePasswordBtn.addEventListener('click', function () {
        // Hide pass_and_security_box
        passAndSecurityBox.style.display = 'none';
        // Show change_password
        changePasswordDiv.style.display = 'flex';
      });

	//   document.getElementById('edit_save_changes').addEventListener('click', function () {
    //     // Show the Bootstrap modal
    //     $('#save_changes_success').modal('show');
         
    //      // Hide the modal after 2 seconds
    //     setTimeout(function () {
    //       $('#save_changes_success').modal('hide');
    //     }, 2000);
        
    //     // Reset the input values
    //     document.getElementById('old_password').value = '';
    //     document.getElementById('new_password').value = '';
    //     document.getElementById('confirm_password').value = '';
    //   });
	</script>

	<script>
		function togglePasswordVisibility2(inputField, eyeIcon) {
      if (inputField.type === "password") {
        inputField.type = "text";
        // Change the eye-icon to the visible state
        eyeIcon.innerHTML = getVisibleEyeIcon();
      } else {
        inputField.type = "password";
        // Change the eye-icon to the initial state
        eyeIcon.innerHTML = getHiddenEyeIcon();
      }
    }
    
    function getVisibleEyeIcon() {
      return `
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
    }
    
    function getHiddenEyeIcon() {
      return `
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
	
		    function togglePasswordVisibility2(inputField, eyeIcon) {
      if (inputField.type === "password") {
        inputField.type = "text";
        // Change the eye-icon to the visible state
        eyeIcon.innerHTML = getVisibleEyeIcon();
      } else {
        inputField.type = "password";
        // Change the eye-icon to the initial state
        eyeIcon.innerHTML = getHiddenEyeIcon();
      }
    }
		// Example usage
		var edit_save_changes = document.getElementById("edit_save_changes");
    var oldPasswordInput = document.getElementById("old_password");
    var oldPasswordEyeIcon = document.getElementById("eye-icon-old-password");
    
    oldPasswordEyeIcon.addEventListener("click", function() {
      togglePasswordVisibility2(oldPasswordInput, oldPasswordEyeIcon);
    });
    
    var newPasswordInput = document.getElementById("new_password");
    var newPasswordEyeIcon = document.getElementById("eye-icon-new-password");
    
    newPasswordEyeIcon.addEventListener("click", function() {
      togglePasswordVisibility2(newPasswordInput, newPasswordEyeIcon);
    });
    

    var confirmPasswordInput = document.getElementById("confirm_password");
    var confirmPasswordEyeIcon = document.getElementById("eye-icon-confirm-password");
    
    confirmPasswordEyeIcon.addEventListener("click", function() {
      togglePasswordVisibility2(confirmPasswordInput, confirmPasswordEyeIcon);
    });
    //validation for change password
    function checkInputs() {
      var newPassword = newPasswordInput.value.trim();  // Trim to remove leading and trailing whitespaces
      var confirmPassword = confirmPasswordInput.value.trim();
  
      if (
          oldPasswordInput.value !== '' &&
          newPassword !== '' &&
          confirmPassword !== '' &&
          newPassword === confirmPassword
      ) {
          edit_save_changes.removeAttribute('disabled');
          edit_save_changes.classList.remove('disabled');
      } else {
          edit_save_changes.setAttribute('disabled', 'true');
          edit_save_changes.classList.add('disabled');
      }
  }
  
  // Call the function whenever the inputs change
  oldPasswordInput.addEventListener('input', checkInputs);
  newPasswordInput.addEventListener('input', checkInputs);
  confirmPasswordInput.addEventListener('input', checkInputs);
  
  // Initial check when the page loads
  checkInputs();
	</script>

</body>

</html>