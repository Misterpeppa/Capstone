<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
	<meta charset="utf-8">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Settings</title>
    <link rel="icon" href="/img/dogs&cats.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:300,400,500,600,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('assets/css/Bootstrap-4-Custom-Radio.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Multi-step-form.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Navbar-Centered-Links-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Toggle-Switch.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/newstyles.css') }}">
</head>

<body>
	@include('includes.user_header')
	<main>
		<div class="container-fluid mb-5">
			<div class="row d-flex flex-column align-content-center flex-wrap">
				<div class="col-9 user_settings_col">
					<div class="d-flex flex-row user_settings" style="width: 100%;height: 100%;">
						<ul class="nav d-none" id="mobile_nav_tabs" role="tablist" >
							<li role="presentation"><a class="nav-link active" role="tab" data-bs-toggle="tab" href="#tab-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g clip-path="url(#clip0_6220_17646)">
    <path d="M13.5 6.50024L17.5 10.5002M4 20.0003H8L18.5 9.5003C19.0304 8.96987 19.3284 8.25045 19.3284 7.5003C19.3284 6.75016 19.0304 6.03074 18.5 5.5003C17.9696 4.96987 17.2501 4.67188 16.5 4.67188C15.7499 4.67187 15.0304 4.96987 14.5 5.5003L4 16.0003V20.0003Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_6220_17646">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg></a></li>				<li role="presentation"><a class="nav-link" href="{{ route('client.pet') }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
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
</svg></a></li>
							<li role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g clip-path="url(#clip0_6220_14917)">
    <path d="M9 17V18C9 18.7956 9.31607 19.5587 9.87868 20.1213C10.4413 20.6839 11.2044 21 12 21C12.7956 21 13.5587 20.6839 14.1213 20.1213C14.6839 19.5587 15 18.7956 15 18V17M10 5C10 4.46957 10.2107 3.96086 10.5858 3.58579C10.9609 3.21071 11.4696 3 12 3C12.5304 3 13.0391 3.21071 13.4142 3.58579C13.7893 3.96086 14 4.46957 14 5C15.1484 5.54303 16.1274 6.38833 16.8321 7.4453C17.5367 8.50227 17.9404 9.73107 18 11V14C18.0753 14.6217 18.2954 15.2171 18.6428 15.7381C18.9902 16.2592 19.4551 16.6914 20 17H4C4.54494 16.6914 5.00981 16.2592 5.35719 15.7381C5.70457 15.2171 5.92474 14.6217 6 14V11C6.05956 9.73107 6.4633 8.50227 7.16795 7.4453C7.8726 6.38833 8.85159 5.54303 10 5Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_6220_14917">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg></a></li>
							<li role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g clip-path="url(#clip0_6220_12970)">
    <path d="M11.999 12C11.7338 12 11.4795 11.8946 11.2919 11.7071C11.1044 11.5196 10.999 11.2652 10.999 11C10.999 10.7348 11.1044 10.4804 11.2919 10.2929C11.4795 10.1054 11.7338 10 11.999 10C12.2642 10 12.5186 10.1054 12.7061 10.2929C12.8937 10.4804 12.999 10.7348 12.999 11C12.999 11.2652 12.8937 11.5196 12.7061 11.7071C12.5186 11.8946 12.2642 12 11.999 12ZM11.999 12V14.5M11.9989 3C14.3347 5.06658 17.3833 6.14257 20.4989 6C20.9524 7.54302 21.0912 9.16147 20.907 10.7592C20.7227 12.3569 20.2192 13.9013 19.4263 15.3005C18.6333 16.6998 17.5672 17.9254 16.2913 18.9045C15.0154 19.8836 13.5556 20.5962 11.9989 21C10.4421 20.5962 8.98234 19.8836 7.7064 18.9045C6.43047 17.9254 5.36437 16.6998 4.57145 15.3005C3.77854 13.9013 3.27499 12.3569 3.09073 10.7592C2.90647 9.16147 3.04527 7.54302 3.49886 6C6.61439 6.14257 9.66303 5.06658 11.9989 3Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_6220_12970">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg></a></li>
						</ul>
						<ul class="nav nav-tabs" id="pc_view_nav-tabs" role="tablist">
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
										<div class="my_profile_details_containers">
											<div class="card my_profile_cards">
												<div class="card_header">
													<h1>Personal Information</h1>
													<button id="edit_profile_personal_info" class="btn edit_profile_personal_info" type="button"><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" viewBox="0 0 16 18" fill="none">
                                            			<path d="M7.91187 3.33001C8.08095 4.4114 8.60433 5.40602 9.39986 6.15776C10.1954 6.9095 11.218 7.37579 12.3072 7.48343M0.742188 17H15.259M9.01676 2.1606L2.39549 9.16899C2.14548 9.43513 1.90353 9.95935 1.85514 10.3223L1.55674 12.9353C1.4519 13.8789 2.12935 14.5241 3.06488 14.3628L5.66177 13.9192C6.02469 13.8547 6.53278 13.5886 6.78279 13.3143L13.4041 6.30596C14.5493 5.09622 15.0654 3.71713 13.2831 2.03157C11.5088 0.362135 10.162 0.950872 9.01676 2.1606Z" stroke="#1C1C1C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg></span>
													</button>
												</div>
												<form action="{{ route('client.profile') }}" method="POST" style="width: 100%;">
												@csrf
												@method('PUT')
												<div class="card_body user_settings_card">
													<div class="card_body_row">
														<div class="form-floating" style="width: 100%;">
															<input id="user_first_name" class="form-control" type="text" name="first_name" value="{{ $clientInfo->first_name }}" data-id="user_first_name" maxlength="50" placeholder="First Name" disabled />
															<label class="form-label" for="user_first_name">First Name<span> *</span></label>
															<div id="error-user_first_name" class="error-message"><span>• Please enter your first name.</span></div>
															<div id="guide_user_first_name" class="guide-message"><span>• Please enter your first name only.<br />(ex. Harold)</span></div>
														</div>
														<div class="form-floating" style="width: 100%;">
															<input id="user_middle_name" class="form-control" type="text" name="middle_name" value="{{ $clientInfo->middle_name }}" data-id="user_middle_name" maxlength="50" placeholder="Middle Name" disabled />
															<label class="form-label" for="user_middle_name">Middle Name<span> *</span></label>
															<div id="error-middle_name" class="error-message"><span>• Please enter your first name.</span></div>
															<div id="guide-middle_name" class="guide-message"><span>• Please enter your first name only.<br />(ex. Harold)</span></div>
														</div>
														
														
													</div>

													<div class="card_body_row">
													<div class="form-floating" style="width: 100%;">
															<input id="user_last_name" class="form-control" type="text" name="last_name" value="{{ $clientInfo->last_name }}" data-id="user_last_name" maxlength="50" placeholder="Last Name" disabled />
															<label class="form-label" for="user_last_name">Last Name <span> *</span></label>
															<div id="error-last_name" class="error-message"><span>• Please enter your first name.</span></div>
															<div id="guide-last_name" class="guide-message"><span>• Please enter your first name only.<br />(ex. Harold)</span></div>
														</div>
														<div class="form-floating" style="width:100%;"><select class="form-select"
																id="suffix" data-id="suffix" disabled>
																<option value="none" selected="">Select a Suffix</option>
																<option value="Jr">Jr</option>
																<option value="Sr">Sr</option>
																<option value="II">II</option>
																<option value="Other">Other</option>
															</select><label class="form-label" for="suffix">Suffix</label>
															<div id="error-suffix" class="error-message"><span>Please select a
																	suffix.</span></div>
														</div>

														<div id="specify_user_suffix" class="form-floating" style="width: 100%;display: none;"><input id="specify_suffix" class="form-control" type="text" data-id="specify_suffix" /><label class="form-label" for="suffix">Specify Suffix</label>
															<div id="error-suffix-2" class="error-message"><span>Please select a suffix.</span></div>
														</div>
													</div>
													<div class="card_body_row">
														<div class="form-floating" style="width: 100%;">
															<input id="user_email" class="form-control" type="email" name="email" value="{{ $clientInfo->email }}" data-id="user_email" maxlength="50" placeholder="Email" disabled />
															<label class="form-label" for="user_email">Email<span> *</span></label>
															<div id="error-user_email" class="error-message"><span>• Please enter your first name.</span></div>
															<div id="guide-user_email" class="guide-message"><span>• Please enter your first name only.<br />(ex. Harold)</span></div>
														</div>
														<div class="form-floating" style="width: 100%;">
															<input id="user_phone_number" class="form-control" type="tel" name="phone" value="{{ $clientInfo->phone }}" data-id="user_phone_number" maxlength="11" placeholder="Phone Number" disabled />
															<label class="form-label" for="user_email">Phone Number<span> *</span></label>
															<div id="error-user_phone_number" class="error-message"><span>• Please enter your first name.</span></div>
															<div id="guide-user_phone_number" class="guide-message"><span>• Please enter your first name only.<br />(ex. Harold)</span></div>
														</div>
													</div>
												</div>
												<div id="edit_personal_info_buttons" class="change_pass_buttons mt-3" style="display: none;">
													<button id="cancel_edit_profile" class="btn cancel_pass_btn" type="button"><span class="cancel_pass_btn_base">Cancel</span></button>
													<button id="edit_save_changes-1" class="btn edit_save_changes" type="submit"><span class="edit_save_changes_base">Save Changes</span></button>
												</div>
											</div>
											</form>
											<div class="card my_profile_cards">
												<div class="card_header">
													<h1>Address</h1>
													<button id="edit_profile_address" class="btn edit_profile" type="button"><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" viewBox="0 0 16 18" fill="none">
                                            <path d="M7.91187 3.33001C8.08095 4.4114 8.60433 5.40602 9.39986 6.15776C10.1954 6.9095 11.218 7.37579 12.3072 7.48343M0.742188 17H15.259M9.01676 2.1606L2.39549 9.16899C2.14548 9.43513 1.90353 9.95935 1.85514 10.3223L1.55674 12.9353C1.4519 13.8789 2.12935 14.5241 3.06488 14.3628L5.66177 13.9192C6.02469 13.8547 6.53278 13.5886 6.78279 13.3143L13.4041 6.30596C14.5493 5.09622 15.0654 3.71713 13.2831 2.03157C11.5088 0.362135 10.162 0.950872 9.01676 2.1606Z" stroke="#1C1C1C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg></span></button>
												</div>
												<div class="card_body user_settings_card">
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
										<form action="{{ route('client.changepassword') }}" method="POST">
											@csrf
											@method('PUT')
											<div class="change_pass_input_container">
												<div class="align-self-stretch form-floating">
													<input id="old_password" class="form-control" name="current_password" type="password" placeholder="Old Password" data-id="old_password" />
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
													<label class="form-label" for="old_password">Old Password<span> *</span></label>
													<div id="error-old_password" class="error-message"><span>• Please enter your password.</span><span>• Password must have 8 or more characters.</span><span>• Password must have at least 1 uppercase character.</span><span>• Password must have at least 1 special character.</span></div>
													<div id="guide-old_password" class="guide-message"><span>• Password must have more than 8 characters.</span><span>• Password must have at least 1 uppercase character.</span><span>• Password must have at least 1 special character.</span></div>
												</div>
												<div class="align-self-stretch form-floating">
													<input id="new_password" class="form-control" name="new_password" type="password" placeholder="New Password" data-id="new_password" />
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
													<label class="form-label" for="new_password">New Password<span> *</span></label>
													<div id="error-new_password" class="error-message"><span>• Please enter your password.</span><span>• Password must have 8 or more characters.</span><span>• Password must have at least 1 uppercase character.</span><span>• Password must have at least 1 special character.</span></div>
													<div id="guide-new_password" class="guide-message"><span>• Password must have more than 8 characters.</span><span>• Password must have at least 1 uppercase character.</span><span>• Password must have at least 1 special character.</span></div>
												</div>
												<div class="align-self-stretch form-floating">
													<input id="confirm_password" class="form-control" name="new_password_confirmation" type="password" placeholder="Confirm Password" data-id="confirm_password" />
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
													<label class="form-label" for="confirm_password">Confirm Password<span> *</span></label>
													<div id="error-confirm_password" class="error-message"><span>• Please enter your password.</span><span>• Password must have 8 or more characters.</span><span>• Password must have at least 1 uppercase character.</span><span>• Password must have at least 1 special character.</span></div>
													<div id="guide-confirm_password" class="guide-message"><span>• Password must have more than 8 characters.</span><span>• Password must have at least 1 uppercase character.</span><span>• Password must have at least 1 special character.</span></div>
												</div>
											</div>
										<div class="change_pass_buttons">
											<button id="cancel_pass_btn" class="btn cancel_pass_btn" type="button"><span class="cancel_pass_btn_base">Cancel</span></button>
											<button id="edit_save_changes" class="btn edit_save_changes" type="submit"><span class="edit_save_changes_base">Save Changes</span></button>
										</div>
										</form>
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

	@include('includes.footer')

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
						</span>
					</div>
				</div>
				<form action="{{ route('client.delete') }}" method="POST">
				@csrf
				<div class="modal-body discard_message">
					<div>
						<h1>Confirm Account Deletion.</h1>
						<p>Are you sure to delete your account? This account cannot be undone.</p>
					</div>
				</div>
				<div class="modal-footer discard_footer">
					<button class="btn return_btn" data-bs-dismiss="modal" id="return_btn-1" type="button"><span class="return_btn_base">Return</span></button>
					<button class="btn discard_btn" id="discard_btn-1" type="submit"><span class="discard_btn_base">Delete</span></button>
				</div>
				</form>
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
						</svg></span>
					</div>
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
	@if(session('success'))
    <script>
        $(document).ready(function () {
            $('#save_changes_success-1').modal('show');

            // Hide the modal after 2 seconds
            setTimeout(function () {
                $('#save_changes_success-1').modal('hide');
            }, 2000);
        });
    </script>
	@endif

	<script>
            document.getElementById('suffix').addEventListener('change', function() {
        var specifySuffixDiv = document.getElementById('specify_user_suffix');
        var selectedValue = this.value;

        if (selectedValue === 'Other') {
            specifySuffixDiv.style.display = 'flex';
        } else {
            specifySuffixDiv.style.display = 'none';
        }
    });
    </script>

  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/sidebar.js') }}"></script>
  <script src="{{ asset('assets/js/user_settings.js') }}"></script>
  <script src="{{ asset('assets/js/footer.js') }}"></script>
</body>

</html>