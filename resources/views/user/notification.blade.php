<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
	<meta charset="utf-8">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>appointmentformUserSide</title>
  <link rel="icon" href="/img/dogs&cats.png" type="image/x-icon">
  <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter&amp;display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:300,400,500,600,700&amp;display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap">
  <link rel="stylesheet" href="{{ asset('assets/css/Bootstrap-4-Custom-Radio.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/Multi-step-form.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/Navbar-Centered-Links-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/Toggle-Switch-toggle-switch.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
</head>

<body>
	<nav class="navbar navbar-expand-md bg-body d-flex py-3" style="max-width: 1920px;background: #EFEFEF;box-shadow: 0px 10px 15px -3px rgba(0, 0, 0, 0.10), 0px 4px 6px -2px rgba(28, 28, 28, 0.05);width: 100%;">
		<div class="container">
			<div class="d-flex align-items-center clinic_logo"><img src="assets/img/dogs&cats.png" style="width: 63.913px;height: 60px;">
				<p class="fw-bold" style="color: #000;font-size: 20px;font-family: Inter;--bs-body-font-weight: 700;width: 200px;margin: 0px;">Tagapo Dogs &amp; Cats Veterinary Clinic</p>
			</div>
			<button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-3" style="background: #EFEFEF;"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navcol-3">
				<ul class="navbar-nav mx-auto" style="font-family: Inter;--bs-body-font-weight: 700;">
					<li class="nav-item"><a class="nav-link active" href="#" style="color: #1C1C1C;">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="appointment_list.html" style="color: #1C1C1C;">Appointments</a></li>
					<li class="nav-item"><a class="nav-link" href="#" style="color: #1C1C1C;">Contact</a></li>
					<li class="nav-item"><a class="nav-link" href="#" style="color: #1C1C1C;">About Us</a></li>
				</ul>
				<div class="user">
					<button class="btn notification" id="notification" type="button"><span class="notification_base"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="18" viewbox="0 0 15 18" fill="none"><path d="M2.29482 10.4791L2.93736 10.866L2.93903 10.8632L2.29482 10.4791ZM1.38031 11.998L0.737787 11.6112L0.737673 11.6113L1.38031 11.998ZM2.23916 14.328L1.99871 15.0385L2.00149 15.0394L2.23916 14.328ZM12.7918 14.328L12.5564 13.6159L12.5542 13.6167L12.7918 14.328ZM13.6507 11.998L14.2938 11.6121L14.2932 11.6112L13.6507 11.998ZM12.7362 10.4791L12.0864 10.854L12.0937 10.866L12.7362 10.4791ZM8.99065 2.00199L8.78522 2.7233C9.0594 2.80139 9.35415 2.71728 9.54583 2.50625C9.7375 2.29522 9.79296 1.99376 9.68894 1.72833L8.99065 2.00199ZM6.0483 2.00199L5.35001 1.72833C5.24599 1.99376 5.30145 2.29522 5.49313 2.50625C5.68481 2.71728 5.97955 2.80139 6.25374 2.7233L6.0483 2.00199ZM5.83359 16.3002L5.30286 16.8301L5.30326 16.8305L5.83359 16.3002ZM7.51948 1.02137C4.47306 1.02137 1.99811 3.49632 1.99811 6.54274H3.49811C3.49811 4.32475 5.30148 2.52137 7.51948 2.52137V1.02137ZM1.99811 6.54274V8.84096H3.49811V6.54274H1.99811ZM1.99811 8.84096C1.99811 8.99314 1.96284 9.22832 1.89124 9.48627C1.8197 9.74398 1.72858 9.96429 1.65061 10.0951L2.93903 10.8632C3.10759 10.5804 3.24311 10.2242 3.33658 9.88749C3.42999 9.551 3.49811 9.17386 3.49811 8.84096H1.99811ZM1.6523 10.0923L0.737787 11.6112L2.02284 12.3849L2.93735 10.866L1.6523 10.0923ZM0.737673 11.6113C0.34933 12.2568 0.264391 12.9889 0.507 13.6441C0.749283 14.2984 1.2894 14.7984 1.99871 15.0384L2.47961 13.6176C2.15512 13.5078 1.98351 13.3119 1.91366 13.1233C1.84415 12.9355 1.84668 12.6776 2.02295 12.3847L0.737673 11.6113ZM2.00149 15.0394C5.58318 16.236 9.44782 16.236 13.0295 15.0394L12.5542 13.6167C9.28099 14.7103 5.75001 14.7103 2.47682 13.6167L2.00149 15.0394ZM13.0272 15.0401C14.4485 14.5703 15.0644 12.8965 14.2938 11.6121L13.0076 12.3839C13.2867 12.849 13.0596 13.4496 12.5564 13.6159L13.0272 15.0401ZM14.2932 11.6112L13.3787 10.0923L12.0937 10.866L13.0082 12.3849L14.2932 11.6112ZM13.3858 10.1043C13.3086 9.97054 13.2183 9.7472 13.1473 9.48852C13.0762 9.22901 13.0408 8.99336 13.0408 8.84096H11.5408C11.5408 9.17364 11.6089 9.55031 11.7008 9.88524C11.7928 10.221 11.9252 10.5742 12.0865 10.8539L13.3858 10.1043ZM13.0408 8.84096V6.54274H11.5408V8.84096H13.0408ZM13.0408 6.54274C13.0408 3.50428 10.5579 1.02137 7.51948 1.02137V2.52137C9.72952 2.52137 11.5408 4.3327 11.5408 6.54274H13.0408ZM9.19608 1.28067C8.10014 0.968542 6.93882 0.968542 5.84287 1.28067L6.25374 2.7233C7.08111 2.48766 7.95784 2.48766 8.78522 2.7233L9.19608 1.28067ZM6.7466 2.27564C6.86777 1.96645 7.16863 1.75 7.51948 1.75V0.25C6.53434 0.25 5.69008 0.860583 5.35001 1.72833L6.7466 2.27564ZM7.51948 1.75C7.87033 1.75 8.17119 1.96645 8.29236 2.27564L9.68894 1.72833C9.34888 0.860583 8.50461 0.25 7.51948 0.25V1.75ZM9.15516 14.6143C9.15516 15.5122 8.41739 16.25 7.51948 16.25V17.75C9.24582 17.75 10.6552 16.3407 10.6552 14.6143H9.15516ZM7.51948 16.25C7.07487 16.25 6.65887 16.0648 6.36392 15.7699L5.30326 16.8305C5.86716 17.3944 6.65991 17.75 7.51948 17.75V16.25ZM6.36432 15.7703C6.05752 15.463 5.88477 15.0468 5.88379 14.6126L4.38379 14.616C4.38567 15.4465 4.71607 16.2425 5.30286 16.8301L6.36432 15.7703Z" fill="#1C1C1C"></path></svg></span></button>
					<div class="dropdown admin_btn">
						<a class="dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" href="#"><img src="assets/img/image%2011%20(1).png"></a>
						<div class="dropdown-menu"><a class="dropdown-item" href="user_settings.html"><span>Settings</span></a>
							<hr><a class="dropdown-item" href="#"><span>Sign Out</span></a> </div>
					</div>
				</div>
			</div>
		</div>
	</nav>
	<main>
		<div class="container-fluid mb-5">
			<div class="row d-flex flex-column align-content-center flex-wrap">
				<div class="col-9 user_settings_col">
					<div class="d-flex flex-row user_settings" style="width: 100%;height: 100%;">
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item" role="presentation"><a class="nav-link active user_settings_nav_link" role="tab" data-bs-toggle="tab" href="#tab-1"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g clip-path="url(#clip0_6220_17646)">
    <path d="M13.5 6.50024L17.5 10.5002M4 20.0003H8L18.5 9.5003C19.0304 8.96987 19.3284 8.25045 19.3284 7.5003C19.3284 6.75016 19.0304 6.03074 18.5 5.5003C17.9696 4.96987 17.2501 4.67188 16.5 4.67188C15.7499 4.67187 15.0304 4.96987 14.5 5.5003L4 16.0003V20.0003Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_6220_17646">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg> My Profile</span></a></li>
							<li class="nav-item" role="presentation"><a class="nav-link user_settings_nav_link" href="pet_information.html"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g clip-path="url(#clip0_1917_11615)">
    <path d="M14.7003 13.5C13.6003 11.5 13.2593 11 12.0003 11C10.7413 11 10.2643 11.755 9.16426 13.747C8.22226 15.45 6.31826 15.592 5.84326 17.038C5.74626 17.303 5.69826 17.715 5.70026 18C5.70026 19.176 6.48726 20 7.50026 20C8.75926 20 10.5003 19 12.0003 19C13.5003 19 15.2413 20 16.5003 20C17.5133 20 18.3003 19.177 18.3003 18C18.3003 17.715 18.2513 17.303 18.1543 17.038C17.6793 15.587 15.6423 15.203 14.7003 13.5Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M20.1882 8.082C20.0597 8.0277 19.9216 7.99981 19.7822 8H19.7672C19.0322 8.012 18.2072 8.75 17.7742 9.866C17.2552 11.201 17.4942 12.566 18.3122 12.918C18.4412 12.973 18.5792 13 18.7182 13C19.4572 13 20.2932 12.258 20.7292 11.134C21.2452 9.799 21.0012 8.434 20.1882 8.082Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M9.47358 9C9.52858 9 9.58258 9 9.63658 8.989C10.5806 8.861 11.1696 7.643 10.9566 6.267C10.7536 4.97 9.90958 4 9.02458 4C8.96958 4 8.91558 4 8.86158 4.011C7.91758 4.139 7.32858 5.357 7.54158 6.733C7.74558 8.026 8.58958 9 9.47458 9H9.47358Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M16.4559 6.733C16.6699 5.357 16.0809 4.139 15.1359 4.011C15.0822 4.00357 15.0281 3.99989 14.9739 4C14.0889 4 13.2459 4.97 13.0439 6.267C12.8299 7.643 13.4189 8.861 14.3639 8.989C14.4179 8.996 14.4719 9 14.5259 9C15.4109 9 16.2559 8.026 16.4559 6.733Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M5.68982 12.918C6.50582 12.566 6.74382 11.199 6.22582 9.866C5.78982 8.742 4.95482 8 4.21682 8C4.07682 8 3.93982 8.027 3.80982 8.082C2.99382 8.434 2.75582 9.801 3.27382 11.134C3.70982 12.258 4.54482 13 5.28282 13C5.42282 13 5.55982 12.973 5.68982 12.918Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_1917_11615">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg> Pet Information</span></a></li>
							<li class="nav-item" role="presentation"><a class="nav-link user_settings_nav_link" role="tab" data-bs-toggle="tab" href="#tab-3"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g clip-path="url(#clip0_6220_14917)">
    <path d="M9 17V18C9 18.7956 9.31607 19.5587 9.87868 20.1213C10.4413 20.6839 11.2044 21 12 21C12.7956 21 13.5587 20.6839 14.1213 20.1213C14.6839 19.5587 15 18.7956 15 18V17M10 5C10 4.46957 10.2107 3.96086 10.5858 3.58579C10.9609 3.21071 11.4696 3 12 3C12.5304 3 13.0391 3.21071 13.4142 3.58579C13.7893 3.96086 14 4.46957 14 5C15.1484 5.54303 16.1274 6.38833 16.8321 7.4453C17.5367 8.50227 17.9404 9.73107 18 11V14C18.0753 14.6217 18.2954 15.2171 18.6428 15.7381C18.9902 16.2592 19.4551 16.6914 20 17H4C4.54494 16.6914 5.00981 16.2592 5.35719 15.7381C5.70457 15.2171 5.92474 14.6217 6 14V11C6.05956 9.73107 6.4633 8.50227 7.16795 7.4453C7.8726 6.38833 8.85159 5.54303 10 5Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_6220_14917">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg> Notifications</span></a></li>
							<li class="nav-item" role="presentation"><a class="nav-link user_settings_nav_link" role="tab" data-bs-toggle="tab" href="#tab-4"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g clip-path="url(#clip0_6220_12970)">
    <path d="M11.999 12C11.7338 12 11.4795 11.8946 11.2919 11.7071C11.1044 11.5196 10.999 11.2652 10.999 11C10.999 10.7348 11.1044 10.4804 11.2919 10.2929C11.4795 10.1054 11.7338 10 11.999 10C12.2642 10 12.5186 10.1054 12.7061 10.2929C12.8937 10.4804 12.999 10.7348 12.999 11C12.999 11.2652 12.8937 11.5196 12.7061 11.7071C12.5186 11.8946 12.2642 12 11.999 12ZM11.999 12V14.5M11.9989 3C14.3347 5.06658 17.3833 6.14257 20.4989 6C20.9524 7.54302 21.0912 9.16147 20.907 10.7592C20.7227 12.3569 20.2192 13.9013 19.4263 15.3005C18.6333 16.6998 17.5672 17.9254 16.2913 18.9045C15.0154 19.8836 13.5556 20.5962 11.9989 21C10.4421 20.5962 8.98234 19.8836 7.7064 18.9045C6.43047 17.9254 5.36437 16.6998 4.57145 15.3005C3.77854 13.9013 3.27499 12.3569 3.09073 10.7592C2.90647 9.16147 3.04527 7.54302 3.49886 6C6.61439 6.14257 9.66303 5.06658 11.9989 3Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_6220_12970">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg> Password and Security</span></a></li>
						</ul>
						<div class="tab-content">
							<div id="tab-1" class="tab-pane active" role="tabpanel">
								<div class="my_profile">
									<h1>My Profile</h1>
									<div class="my_profile_box">
										<div class="image_container"><img src="assets/img/image%2011%20(1).png" /></div>
										<div class="my_profile_details_containers">
											<div class="card my_profile_cards">
												<div class="card_header">
													<h1>Personal Information</h1>
													<button id="edit_profile_personal_info" class="btn edit_profile_personal_info" type="button"><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" viewBox="0 0 16 18" fill="none">
                                            <path d="M7.91187 3.33001C8.08095 4.4114 8.60433 5.40602 9.39986 6.15776C10.1954 6.9095 11.218 7.37579 12.3072 7.48343M0.742188 17H15.259M9.01676 2.1606L2.39549 9.16899C2.14548 9.43513 1.90353 9.95935 1.85514 10.3223L1.55674 12.9353C1.4519 13.8789 2.12935 14.5241 3.06488 14.3628L5.66177 13.9192C6.02469 13.8547 6.53278 13.5886 6.78279 13.3143L13.4041 6.30596C14.5493 5.09622 15.0654 3.71713 13.2831 2.03157C11.5088 0.362135 10.162 0.950872 9.01676 2.1606Z" stroke="#1C1C1C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg></span></button>
												</div>
												<div class="card_body user_settings">
													<div class="card_body_row mt-3">
														<div class="form-floating" style="width: 100%;">
															<input id="user_first_name" class="form-control" type="text" data-id="user_first_name" maxlength="50" placeholder="First Name" disabled />
															<label class="form-label" for="user_first_name">First Name<span> *</span></label>
															<div id="error-user_first_name" class="error-message"><span>• Please enter your first name.</span></div>
															<div id="guide_user_first_name" class="guide-message"><span>• Please enter your first name only.<br />(ex. Harold)</span></div>
														</div>
														<div class="form-floating" style="width: 100%;">
															<input id="user_middle_name" class="form-control" type="text" data-id="user_middle_name" maxlength="50" placeholder="Middle Name" disabled />
															<label class="form-label" for="user_middle_name">Middle Name<span> *</span></label>
															<div id="error-middle_name" class="error-message"><span>• Please enter your first name.</span></div>
															<div id="guide-middle_name" class="guide-message"><span>• Please enter your first name only.<br />(ex. Harold)</span></div>
														</div>
														<div class="form-floating" style="width: 100%;">
															<input id="user_last_name" class="form-control" type="text" data-id="user_last_name" maxlength="50" placeholder="Last Name" disabled />
															<label class="form-label" for="user_last_name">Last Name<span> *</span></label>
															<div id="error-last_name" class="error-message"><span>• Please enter your first name.</span></div>
															<div id="guide-last_name" class="guide-message"><span>• Please enter your first name only.<br />(ex. Harold)</span></div>
														</div>
													</div>
													<div class="card_body_row">
														<div class="form-floating" style="width: 100%;">
															<input id="user_email" class="form-control" type="email" data-id="user_email" maxlength="50" placeholder="Email" disabled />
															<label class="form-label" for="user_email">Email <span> *</span></label>
															<div id="error-user_email" class="error-message"><span>• Please enter your first name.</span></div>
															<div id="guide-user_email" class="guide-message"><span>• Please enter your first name only.<br />(ex. Harold)</span></div>
														</div>
														<div class="form-floating" style="width: 100%;">
															<input id="user_phone_number" class="form-control" type="tel" data-id="user_phone_number" maxlength="11" placeholder="Phone Number" disabled />
															<label class="form-label" for="user_email">Phone Number <span> *</span></label>
															<div id="error-user_phone_number" class="error-message"><span>• Please enter your first name.</span></div>
															<div id="guide-user_phone_number" class="guide-message"><span>• Please enter your first name only.<br />(ex. Harold)</span></div>
														</div>
													</div>
												</div>
												<div id="edit_personal_info_buttons" class="change_pass_buttons mt-3" style="display: none;">
													<button id="cancel_edit_profile" class="btn cancel_pass_btn" type="button"><span class="cancel_pass_btn_base">Cancel</span></button>
													<button id="edit_save_changes-1" class="btn edit_save_changes" type="button"><span class="edit_save_changes_base">Save Changes</span></button>
												</div>
											</div>
											<div class="card my_profile_cards">
												<div class="card_header">
													<h1>Address</h1>
													<button id="edit_profile_address" class="btn edit_profile" type="button"><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" viewBox="0 0 16 18" fill="none">
                                            <path d="M7.91187 3.33001C8.08095 4.4114 8.60433 5.40602 9.39986 6.15776C10.1954 6.9095 11.218 7.37579 12.3072 7.48343M0.742188 17H15.259M9.01676 2.1606L2.39549 9.16899C2.14548 9.43513 1.90353 9.95935 1.85514 10.3223L1.55674 12.9353C1.4519 13.8789 2.12935 14.5241 3.06488 14.3628L5.66177 13.9192C6.02469 13.8547 6.53278 13.5886 6.78279 13.3143L13.4041 6.30596C14.5493 5.09622 15.0654 3.71713 13.2831 2.03157C11.5088 0.362135 10.162 0.950872 9.01676 2.1606Z" stroke="#1C1C1C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg></span></button>
												</div>
												<div class="card_body mt-3">
													<div class="card_body_row">
														<div class="form-floating" style="width: 100%;">
															<input id="user_house_unit" class="form-control" type="text" data-id="user_house_unit" maxlength="255" placeholder="Address" disabled />
															<label class="form-label" for="user_house_unit">House Unit No. and Street <span> *</span></label>
															<div id="error-user_address" class="error-message"><span>• Please enter your first name.</span></div>
															<div id="guide-user_address" class="guide-message"><span>• Please enter your first name only.<br />(ex. Harold)</span></div>
														</div>
													</div>
													<div class="card_body_row">
														<div class="form-floating" style="width: 100%;">
															<input id="user_city" class="form-control" type="text" data-id="user_city" maxlength="255" placeholder="City" disabled />
															<label class="form-label" for="user_city">City <span> *</span></label>
															<div id="error-user_city" class="error-message"><span>• Please enter your first name.</span></div>
															<div id="guide-user_city" class="guide-message"><span>• Please enter your first name only.<br />(ex. Harold)</span></div>
														</div>
														<div class="form-floating" style="width: 100%;">
															<input id="user_state" class="form-control" type="number" data-id="user_state" maxlength="255" placeholder="State" disabled />
															<label class="form-label" for="user_city">State <span> *</span></label>
															<div id="error-user_state" class="error-message"><span>• Please enter your first name.</span></div>
															<div id="guide-user_state" class="guide-message"><span>• Please enter your first name only.<br />(ex. Harold)</span></div>
														</div>
													</div>
													<div class="card_body_row">
														<div class="form-floating" style="width: 100%;">
															<input id="user_zip_code" class="form-control" type="number" data-id="user_zip_code" maxlength="255" placeholder="ZIP Code" disabled />
															<label class="form-label" for="user_zip_code">ZIP Code <span> *</span></label>
															<div id="error-user_zip_code" class="error-message"><span>• Please enter your first name.</span></div>
															<div id="guide-user_zip_code" class="guide-message"><span>• Please enter your first name only.<br />(ex. Harold)</span></div>
														</div>
														<div class="form-floating" style="width: 100%;">
															<select id="user_country" class="form-control" data-id="user_country" placeholder="Country" disabled>
																<optgroup label="This is a group">
																	<option value="none" selected>Country select</option>
																	<option value="13">This is item 2</option>
																	<option value="14">This is item 3</option>
																</optgroup>
															</select>
															<label class="form-label" for="user_country">Country <span> *</span></label>
															<div id="error-user_country" class="error-message"><span>• Please enter your first name.</span></div>
															<div id="guide-user_country" class="guide-message"><span>• Please enter your first name only.<br />(ex. Harold)</span></div>
														</div>
													</div>
												</div>
												<div id="edit_address_buttons" class="change_pass_buttons mt-3" style="display: none;">
													<button id="cancel_edit_profile-2" class="btn cancel_pass_btn" type="button"><span class="cancel_pass_btn_base">Cancel</span></button>
													<button id="edit_save_changes-2" class="btn edit_save_changes" type="button"><span class="edit_save_changes_base">Save Changes</span></button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="tab-3" class="tab-pane" role="tabpanel">
								<div class="my_profile">
									<h1>Notification Settings</h1>
									<div class="notifications_boxes">
										<div class="card notification_settings">
											<div class="left_notification_settings">
												<h1>Email Notifications</h1>
												<p>Get emails to stay updated even when you’re not here. You can turn these off.</p>
											</div>
											<div class="right_notification_settings">
												<div class="notif_buttons_and_texts">
													<div class="toggle_container">
														<label class="switch">
															<input type="checkbox" /><span class="slider round"></span></label>
													</div>
													<div class="text_container">
														<h1>Appointment Confirmation/Cancellation</h1>
														<p>Get to know if your appointment has been approved.</p>
													</div>
												</div>
												<div class="notif_buttons_and_texts">
													<div class="toggle_container">
														<label class="switch">
															<input type="checkbox" /><span class="slider round"></span></label>
													</div>
													<div class="text_container">
														<h1>Appointment Reminders</h1>
														<p>Get reminded prior to your scheduled appointment so you don’t miss it.</p>
													</div>
												</div>
												<div class="notif_buttons_and_texts">
													<div class="toggle_container">
														<label class="switch">
															<input type="checkbox" /><span class="slider round"></span></label>
													</div>
													<div class="text_container">
														<h1>Pet Health Updates</h1>
														<p>Get updated on your pet’s health.</p>
													</div>
												</div>
												<div class="notif_buttons_and_texts">
													<div class="toggle_container">
														<label class="switch">
															<input type="checkbox" /><span class="slider round"></span></label>
													</div>
													<div class="text_container">
														<h1>Pet Care</h1>
														<p>Get reminded of your pet’s next vaccination</p>
													</div>
												</div>
												<div class="notif_buttons_and_texts">
													<div class="toggle_container">
														<label class="switch">
															<input type="checkbox" /><span class="slider round"></span></label>
													</div>
													<div class="text_container">
														<h1>Tips and Tricks</h1>
														<p>Want to know tips and tricks from your veterinarians? Turn notifications on to receive emails. </p>
													</div>
												</div>
												<div class="notif_buttons_and_texts">
													<div class="toggle_container">
														<label class="switch">
															<input type="checkbox" /><span class="slider round"></span></label>
													</div>
													<div class="text_container">
														<h1>News &amp; Events</h1>
														<p>Feel free to participate in special events.</p>
													</div>
												</div>
											</div>
										</div>
										<div class="card notification_settings">
											<div class="left_notification_settings">
												<h1>Text notifications</h1>
												<p>Get text messages to stay updated on your appointments. You can turn these off.</p>
											</div>
											<div class="right_notification_settings">
												<div class="notif_buttons_and_texts">
													<div class="toggle_container">
														<label class="switch">
															<input type="checkbox" /><span class="slider round"></span></label>
													</div>
													<div class="text_container">
														<h1>Appointment Confirmation/Cancellation</h1>
														<p>Get to know if your appointment has been approved.</p>
													</div>
												</div>
												<div class="notif_buttons_and_texts">
													<div class="toggle_container">
														<label class="switch">
															<input type="checkbox" /><span class="slider round"></span></label>
													</div>
													<div class="text_container">
														<h1>Appointment Reminders</h1>
														<p>Get reminded prior to your scheduled appointment so you don’t miss it.</p>
													</div>
												</div>
												<div class="notif_buttons_and_texts">
													<div class="toggle_container">
														<label class="switch">
															<input type="checkbox" /><span class="slider round"></span></label>
													</div>
													<div class="text_container">
														<h1>Pet Health Updates</h1>
														<p>Get updated on your pet’s health.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="tab-4" class="tab-pane" role="tabpanel">
								<div class="my_profile">
									<h1>Password and Security</h1>
									<div id="pass_and_security_box" class="card pass_and_security_box">
										<div class="pass_and_security_text">
											<h4>Password</h4>
											<p>Set a unique password to protect your account.</p>
										</div>
										<button id="change_password_btn" class="btn change_password_btn" type="button"><span class="change_password_btn_base">Change Password</span></button>
									</div>
									<div id="change_password" class="card change_password">
										<form>
											<div class="change_pass_input_container">
												<div class="align-self-stretch form-floating">
													<input id="old_password" class="form-control" type="password" placeholder="Old Password" data-id="old_password" />
													<div id="eye-icon-old-password" class="eye-icon">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path d="M21 9C18.6 11.667 15.6 13 12 13C8.4 13 5.4 11.667 3 9M3 15L5.5 11.2M20.9998 14.976L18.5078 11.2M9 17L9.5 13M15 17L14.5 13" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															<rect width="24" height="24" fill="white"></rect>
														</svg>
													</div>
													<label class="form-label" for="old_password">Old Password<span> *</span></label>
													<div id="error-old_password" class="error-message"><span>• Please enter your password.</span><span>• Password must have 8 or more characters.</span><span>• Password must have at least 1 uppercase character.</span><span>• Password must have at least 1 special character.</span></div>
													<div id="guide-old_password" class="guide-message"><span>• Password must have more than 8 characters.</span><span>• Password must have at least 1 uppercase character.</span><span>• Password must have at least 1 special character.</span></div>
												</div>
												<div class="align-self-stretch form-floating">
													<input id="new_password" class="form-control" type="password" placeholder="New Password" data-id="new_password" />
													<div id="eye-icon-new-password" class="eye-icon">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path d="M21 9C18.6 11.667 15.6 13 12 13C8.4 13 5.4 11.667 3 9M3 15L5.5 11.2M20.9998 14.976L18.5078 11.2M9 17L9.5 13M15 17L14.5 13" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															<rect width="24" height="24" fill="white"></rect>
														</svg>
													</div>
													<label class="form-label" for="new_password">New Password<span> *</span></label>
													<div id="error-new_password" class="error-message"><span>• Please enter your password.</span><span>• Password must have 8 or more characters.</span><span>• Password must have at least 1 uppercase character.</span><span>• Password must have at least 1 special character.</span></div>
													<div id="guide-new_password" class="guide-message"><span>• Password must have more than 8 characters.</span><span>• Password must have at least 1 uppercase character.</span><span>• Password must have at least 1 special character.</span></div>
												</div>
												<div class="align-self-stretch form-floating">
													<input id="confirm_password" class="form-control" type="password" placeholder="Confirm Password" data-id="confirm_password" />
													<div id="eye-icon-confirm-password" class="eye-icon">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path d="M21 9C18.6 11.667 15.6 13 12 13C8.4 13 5.4 11.667 3 9M3 15L5.5 11.2M20.9998 14.976L18.5078 11.2M9 17L9.5 13M15 17L14.5 13" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															<rect width="24" height="24" fill="white"></rect>
														</svg>
													</div>
													<label class="form-label" for="confirm_password">Confirm Password<span> *</span></label>
													<div id="error-confirm_password" class="error-message"><span>• Please enter your password.</span><span>• Password must have 8 or more characters.</span><span>• Password must have at least 1 uppercase character.</span><span>• Password must have at least 1 special character.</span></div>
													<div id="guide-confirm_password" class="guide-message"><span>• Password must have more than 8 characters.</span><span>• Password must have at least 1 uppercase character.</span><span>• Password must have at least 1 special character.</span></div>
												</div>
											</div>
										</form>
										<div class="change_pass_buttons">
											<button id="cancel_pass_btn" class="btn cancel_pass_btn" type="button"><span class="cancel_pass_btn_base">Cancel</span></button>
											<button id="edit_save_changes" class="btn edit_save_changes" type="button"><span class="edit_save_changes_base">Save Changes</span></button>
										</div>
									</div>
									<div class="card pass_and_security_box">
										<div class="pass_and_security_text">
											<h4>2-step verification</h4>
											<p>Make your account extra secure by enable 2-step verification.</p>
										</div>
										<label class="switch">
											<input type="checkbox" /><span class="slider round"></span></label>
									</div>
									<div class="card pass_and_security_box">
										<div class="pass_and_security_text">
											<h4>Delete Account</h4>
											<p>This will permanently delete your account. All your data cannot be retrieved.</p>
										</div>
										<button id="delete_acc_btn" class="btn delete_acc_btn" type="button"><span class="delete_acc_btn_base">Delete</span></button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<footer class="footer" style="position: relative;"><img src="assets/img/dogs&cats.png" style="width: 159.783px;height: 150px;flex-shrink: 0;"></footer>
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
					<button class="btn return_btn" data-bs-dismiss="modal" id="return_btn" type="button"><span class="return_btn_base">Return</span></button>
					<button class="btn discard_btn" id="discard_btn" type="button"><span class="discard_btn_base">Discard</span></button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade show" role="dialog" tabindex="-1" id="cancel_change_user_info">
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
					<button class="btn return_btn" data-bs-dismiss="modal" id="return_btn-2" type="button"><span class="return_btn_base">Return</span></button>
					<button class="btn discard_btn" id="discard_btn-2" type="button"><span class="discard_btn_base">Discard</span></button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade show" role="dialog" tabindex="-1" id="cancel_change_user_info-1">
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
					<button class="btn return_btn" data-bs-dismiss="modal" id="return_btn-3" type="button"><span class="return_btn_base">Return</span></button>
					<button class="btn discard_btn" id="discard_btn-3" type="button"><span class="discard_btn_base">Discard</span></button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade show" role="dialog" tabindex="-1" id="delete_account_modal">
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
						<h1>Confirm Account Deletion.</h1>
						<p>Are you sure to delete your account? This account cannot be undone.</p>
					</div>
				</div>
				<div class="modal-footer discard_footer">
					<button class="btn return_btn" data-bs-dismiss="modal" id="return_btn-1" type="button"><span class="return_btn_base">Return</span></button>
					<button class="btn discard_btn" id="discard_btn-1" type="button"><span class="discard_btn_base">Delete</span></button>
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
	<div class="modal fade show" role="dialog" tabindex="-1" id="save_changes_success-1">
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
  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/sidebar.js') }}"></script>
  <script src="{{ asset('assets/js/user_settings.js') }}"></script>
</body>

</html>