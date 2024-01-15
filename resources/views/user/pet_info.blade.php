<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
	<meta charset="utf-8">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Pet Information</title>
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
	@include('includes.user_header')
	<main>
		<div class="container-fluid mb-5">
			<div class="row d-flex flex-column align-content-center flex-wrap">
				<div class="col-9 col-xxl-8 user_appointment">
					<div id="appointment_list_heading_button_container" class="appointment_list_heading_button_container">
						<div class="appointment_list_heading_texts">
							<h1><strong>My Pets</strong></h1>
							<p>View all your pets and their information</p>
						</div>
						<button class="btn user_new_pet_btn" id="user_new_pet_btn" type="button"><span class="user_new_pet_btn_base"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<g clip-path="url(#clip0_6116_2623)" filter="url(#filter0_d_6116_2623)">
								<path d="M12 5V19M5 12H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</g>
							<defs>
								<filter id="filter0_d_6116_2623" x="-2" y="0" width="28" height="28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
								<feFlood flood-opacity="0" result="BackgroundImageFix"/>
								<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
								<feOffset dy="2"/>
								<feGaussianBlur stdDeviation="1"/>
								<feComposite in2="hardAlpha" operator="out"/>
								<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
								<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_6116_2623"/>
								<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_6116_2623" result="shape"/>
								</filter>
								<clipPath id="clip0_6116_2623">
								<rect width="24" height="24" fill="white"/>
								</clipPath>
							</defs>
							</svg> New Pet</span>
						</button>
					</div>
					<div id="pet_container" class="pet_container">
						<div class="container_header">
							<div class="left_part_product_header">
								<div class="search_container">
									<input type="search" class="search_input" placeholder="Search Pet" maxlength="255">
								</div>
								<button class="btn filter_btn" type="button"><span class="filter_btn_base"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<g clip-path="url(#clip0_5284_15912)">
										<path d="M4 4H20V6.172C19.9999 6.70239 19.7891 7.21101 19.414 7.586L15 12V19L9 21V12.5L4.52 7.572C4.18545 7.20393 4.00005 6.7244 4 6.227V4Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									</g>
									<defs>
										<clipPath id="clip0_5284_15912">
										<rect width="24" height="24" fill="white"/>
										</clipPath>
									</defs>
									</svg> Filter by</span></button>
																	<button class="btn sort_btn" type="button"><span class="sort_btn_base"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<g clip-path="url(#clip0_5284_15919)">
										<path d="M4 6H13M4 12H11M4 18H11M15 15L18 18M18 18L21 15M18 18V6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									</g>
									<defs>
										<clipPath id="clip0_5284_15919">
										<rect width="24" height="24" fill="white"/>
										</clipPath>
									</defs>
									</svg> Sort by</span>
								</button>
							</div>
						</div>
						<div id="empty_state_container" class="empty_state_container">
							<div class="empty_state">
								<div class="empty_state_message_container">
									<h1>NO PETS YET!</h1>
									<div class="empty_state_paragraph_container">
										<p>You can add a pet by clicking the button below.</p>
									</div>
								</div>
							</div>
							<button class="btn add_client_button" id="add_pet" type="button"><span class="add_client_base"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<g clip-path="url(#clip0_6001_19901)" filter="url(#filter0_d_6001_19901)">
									<path d="M12 5V19M5 12H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								</g>
								<defs>
									<filter id="filter0_d_6001_19901" x="-2" y="0" width="28" height="28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix"/>
									<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
									<feOffset dy="2"/>
									<feGaussianBlur stdDeviation="1"/>
									<feComposite in2="hardAlpha" operator="out"/>
									<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
									<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_6001_19901"/>
									<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_6001_19901" result="shape"/>
									</filter>
									<clipPath id="clip0_6001_19901">
									<rect width="24" height="24" fill="white"/>
									</clipPath>
								</defs>
								</svg> Add Pet</span>
							</button>
						</div>
						@foreach ($petrecords as $petrecord)
						<div id="pet_card_container" class="pet_card_container">
							<div class="card pet_card">
								<div class="card-body pet_card_body">
									<div class="pet_detail_header">
										<div class="pet_detail_heading_text_container">
											<h1>{{ $petrecord->pet->name }}</h1>
											<p>{{ $petrecord->pet->breed }}</p>
										</div>
										<div class="dropdown more_button">
											<button class="btn dropdown-toggle more_btn" aria-expanded="false" data-bs-toggle="dropdown" type="button"><span class="more_btn_base"><svg fill="none" height="18" viewbox="0 0 18 18" width="18" xmlns="http://www.w3.org/2000/svg"><path d="M9 5C7.61929 5 6.5 3.88071 6.5 2.5C6.5 1.11929 7.61929 -6.03528e-08 9 0C10.3807 6.03528e-08 11.5 1.11929 11.5 2.5C11.5 3.88071 10.3807 5 9 5Z" fill="#045B62"></path><path d="M9 11.5C7.61929 11.5 6.5 10.3807 6.5 9C6.5 7.61929 7.61929 6.5 9 6.5C10.3807 6.5 11.5 7.61929 11.5 9C11.5 10.3807 10.3807 11.5 9 11.5Z" fill="#045B62"></path><path d="M9 18C7.61929 18 6.5 16.8807 6.5 15.5C6.5 14.1193 7.61929 13 9 13C10.3807 13 11.5 14.1193 11.5 15.5C11.5 16.8807 10.3807 18 9 18Z" fill="#045B62"></path></svg></span></button>
											<div class="dropdown-menu more_button" data-bs-popper="none">
												<a class="dropdown-item View_pet" id="View">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<g clip-path="url(#clip0_6230_1794)">
															<path d="M10 12C10 12.5304 10.2107 13.0391 10.5858 13.4142C10.9609 13.7893 11.4696 14 12 14C12.5304 14 13.0391 13.7893 13.4142 13.4142C13.7893 13.0391 14 12.5304 14 12C14 11.4696 13.7893 10.9609 13.4142 10.5858C13.0391 10.2107 12.5304 10 12 10C11.4696 10 10.9609 10.2107 10.5858 10.5858C10.2107 10.9609 10 11.4696 10 12Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
															<path d="M21 12C18.6 16 15.6 18 12 18C8.4 18 5.4 16 3 12C5.4 8 8.4 6 12 6C15.6 6 18.6 8 21 12Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /> </g>
														<defs>
															<clipPath id="clip0_6230_1794">
																<rect width="24" height="24" fill="white" /> </clipPath>
														</defs>
													</svg>&nbsp;View</a>
												<a class="dropdown-item Edit_pet" id="Edit">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<g clip-path="url(#clip0_6230_538)">
															<path d="M13.5 6.5L17.5 10.5M4 20.0001H8L18.5 9.50006C19.0304 8.96963 19.3284 8.2502 19.3284 7.50006C19.3284 6.74991 19.0304 6.03049 18.5 5.50006C17.9696 4.96963 17.2501 4.67163 16.5 4.67163C15.7499 4.67163 15.0304 4.96963 14.5 5.50006L4 16.0001V20.0001Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /> </g>
														<defs>
															<clipPath id="clip0_6230_538">
																<rect width="24" height="24" fill="white" /> </clipPath>
														</defs>
													</svg>&nbsp;Edit</a>
												<a class="dropdown-item archive_pet" id="Archive">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<g clip-path="url(#clip0_6230_1803)">
															<path d="M19 8C19.5304 8 20.0391 7.78929 20.4142 7.41421C20.7893 7.03914 21 6.53043 21 6C21 5.46957 20.7893 4.96086 20.4142 4.58579C20.0391 4.21071 19.5304 4 19 4H5C4.46957 4 3.96086 4.21071 3.58579 4.58579C3.21071 4.96086 3 5.46957 3 6C3 6.53043 3.21071 7.03914 3.58579 7.41421C3.96086 7.78929 4.46957 8 5 8M19 8H5M19 8V18C19 18.5304 18.7893 19.0391 18.4142 19.4142C18.0391 19.7893 17.5304 20 17 20H7C6.46957 20 5.96086 19.7893 5.58579 19.4142C5.21071 19.0391 5 18.5304 5 18V8M10 12H14" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /> </g>
														<defs>
															<clipPath id="clip0_6230_1803">
																<rect width="24" height="24" fill="white" /> </clipPath>
														</defs>
													</svg>&nbsp;Archive</a>
												<a class="dropdown-item add_appointment" href="appointment.html" id="add_appointment">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<g clip-path="url(#clip0_6230_1769)">
															<path d="M9 12H15M12 9V15M3 12C3 13.1819 3.23279 14.3522 3.68508 15.4442C4.13738 16.5361 4.80031 17.5282 5.63604 18.364C6.47177 19.1997 7.46392 19.8626 8.55585 20.3149C9.64778 20.7672 10.8181 21 12 21C13.1819 21 14.3522 20.7672 15.4442 20.3149C16.5361 19.8626 17.5282 19.1997 18.364 18.364C19.1997 17.5282 19.8626 16.5361 20.3149 15.4442C20.7672 14.3522 21 13.1819 21 12C21 10.8181 20.7672 9.64778 20.3149 8.55585C19.8626 7.46392 19.1997 6.47177 18.364 5.63604C17.5282 4.80031 16.5361 4.13738 15.4442 3.68508C14.3522 3.23279 13.1819 3 12 3C10.8181 3 9.64778 3.23279 8.55585 3.68508C7.46392 4.13738 6.47177 4.80031 5.63604 5.63604C4.80031 6.47177 4.13738 7.46392 3.68508 8.55585C3.23279 9.64778 3 10.8181 3 12Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /> </g>
														<defs>
															<clipPath id="clip0_6230_1769">
																<rect width="24" height="24" fill="white" /> </clipPath>
														</defs>
													</svg>&nbsp;Add Appointment</a>
											</div>
										</div>
									</div>
									<div class="pet_detail_body">
										<div class="pet_upper_detail">
											<div class="pet_sex_container">
												<h1>Sex</h1>
												<p>{{ $petrecord->pet->gender }}</p>
											</div>
											<div class="pet_age_container">
												<h1>Age</h1>
												<p>{{ $petrecord->pet->age }}</p>
											</div>
										</div>
										<div class="pet_lower_detail">
											<div class="pet_weight_container">
												<h1>Weight</h1>
												<p>{{ $petrecord->pet->weigth }}</p>
											</div>
											<div class="pet_sterilization_status_container">
												<h1>Sterilization Status</h1>
												<p>{{ $petrecord->pet->sterilization }}</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
					<div id="edit_pet" class="edit_pet">
						<div class="edit_pet_back_btn_container">
							<button class="btn edit_pet_back_btn" id="edit_pet_back_btn" type="button"><span class="edit_pet_back_btn_base"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
								<g clip-path="url(#clip0_6089_3068)" filter="url(#filter0_d_6089_3068)">
									<path d="M5.5 12H19.5M5.5 12L11.5 18M5.5 12L11.5 6" stroke="#045B62" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								</g>
								<defs>
									<filter id="filter0_d_6089_3068" x="-1.5" y="0" width="28" height="28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix"/>
									<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
									<feOffset dy="2"/>
									<feGaussianBlur stdDeviation="1"/>
									<feComposite in2="hardAlpha" operator="out"/>
									<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
									<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_6089_3068"/>
									<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_6089_3068" result="shape"/>
									</filter>
									<clipPath id="clip0_6089_3068">
									<rect width="24" height="24" fill="white" transform="translate(0.5)"/>
									</clipPath>
								</defs>
								</svg> Back</span>
							</button>
						</div>
						<div class="input_details_container">
							<div class="detail_body">
								<div class="pet_details_container">
									<div class="align-self-stretch form-floating">
										<input type="text" class="form-control">
										<label class="form-label" for="pet_name">Pet Name</label>
										<div class="error-message"><span>• Error Message</span></div>
										<div class="guide-message"><span>• Guide Message</span></div>
									</div>
									<div class="align-self-stretch form-floating">
										<select aria-label="Floating label select example" class="form-select" id="pet_sex">
											<option value="" selected="">Select sex</option>
											<option value="1">Male</option>
											<option value="2">Female</option>
										</select>
										<label class="form-label" for="pet_sex">Sex</label>
										<div id="error_sex" class="error-message"><span>• Error Message</span></div>
										<div id="guide_sex" class="guide-message"><span>• Guide Message</span></div>
									</div>
									<div class="new_input_row">
										<div class="form-floating" style="width: 100%;">
											<input class="form-control" type="date">
											<label class="form-label">Label</label>
											<div class="error-message"></div>
											<div class="guide-message"></div>
										</div>
										<div class="form-floating" style="width: 100%;">
											<input type="text" class="form-control">
											<label class="form-label">Age</label>
										</div>
									</div>
									<div class="new_input_row">
										<div class="form-floating" style="width: 543px;">
											<select class="form-select" aria-label="Floating label select example">
												<option value="" selected="">Pet Type</option>
												<option value="Dog">Dog</option>
												<option value="Cat">Cat</option>
											</select>
											<label class="form-label" for="">Pet Type</label>
											<div class="error-message"><span>• Error Message</span></div>
											<div class="guide-message"><span>• Guide Message</span></div>
										</div>
										<div class="new_inputs_row">
											<div class="form-floating" style="width: 168px;">
												<select class="form-select" aria-label="Floating label select example">
													<option value="" selected="">Breed</option>
													<option value="other">Other</option>
												</select>
												<label class="form-label" for="">Breed</label>
												<div class="error-message"><span>• Error Message</span></div>
												<div class="guide-message"><span>• Guide Message</span></div>
											</div>
											<div class="align-self-stretch form-floating" id="specific_breed">
												<input type="text" id="specify_breed" class="form-control" placeholder="Specify Breed">
												<label class="form-label" for="specify_breed">Specify Breed</label>
												<div id="error_specify_breed" class="error-message"><span>• Error Message</span></div>
												<div id="guide_specify_breed" class="guide-message"><span>• Guide Message</span></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="view_pet" class="view_pet">
						<div class="view_pet_back_btn_container">
							<button class="btn edit_pet_back_btn" id="view_pet_back_btn" type="button"><span class="edit_pet_back_btn_base"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
  <g clip-path="url(#clip0_6089_3068)" filter="url(#filter0_d_6089_3068)">
    <path d="M5.5 12H19.5M5.5 12L11.5 18M5.5 12L11.5 6" stroke="#045B62" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <filter id="filter0_d_6089_3068" x="-1.5" y="0" width="28" height="28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
      <feOffset dy="2"/>
      <feGaussianBlur stdDeviation="1"/>
      <feComposite in2="hardAlpha" operator="out"/>
      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_6089_3068"/>
      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_6089_3068" result="shape"/>
    </filter>
    <clipPath id="clip0_6089_3068">
      <rect width="24" height="24" fill="white" transform="translate(0.5)"/>
    </clipPath>
  </defs>
</svg> Back</span></button>
						</div>
						<div class="pet_record_item">
							<div class="pet_record"><img src="assets/img/koda%201.png">
								<div class="pet_record_details">
									<div class="pet_record_details_second_row">
										<div class="pet_name_breed_container">
											<h1>Pet Name</h1>
											<p>Breed</p>
										</div>
									</div>
									<div class="pet_record_details_first_row">
										<div class="pet_other_details">
											<div class="other_details">
												<h1>Sex</h1>
												<p>Paragraph</p>
											</div>
											<div class="other_details">
												<h1>Birth Date</h1>
												<p>Paragraph</p>
											</div>
											<div class="other_details">
												<h1>Age</h1>
												<p>Paragraph</p>
											</div>
											<div class="other_details">
												<h1>Weight</h1>
												<p>Paragraph</p>
											</div>
											<div class="other_details">
												<h1><strong>Sterilization Status</strong></h1>
												<p>Paragraph</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<button class="btn edit_pet_btn" type="button"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<g clip-path="url(#clip0_6127_11956)">
									<path d="M13.5 6.50024L17.5 10.5002M4 20.0003H8L18.5 9.5003C19.0304 8.96987 19.3284 8.25045 19.3284 7.5003C19.3284 6.75016 19.0304 6.03074 18.5 5.5003C17.9696 4.96987 17.2501 4.67188 16.5 4.67188C15.7499 4.67187 15.0304 4.96987 14.5 5.5003L4 16.0003V20.0003Z" stroke="#1C1C1C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								</g>
								<defs>
									<clipPath id="clip0_6127_11956">
									<rect width="24" height="24" fill="white"/>
									</clipPath>
								</defs>
								</svg>
								</span>
							</button>
						</div>
						<div class="align-self-stretch pet_records">
							<ul class="nav nav-tabs pet_nav_tabs" role="tablist">
								<li class="nav-item" role="presentation"><a class="nav-link active" role="tab" data-bs-toggle="tab" href="#tab-1">Information</a></li>
								<li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-2">Medical History</a></li>
								<li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-3">Immunization History</a></li>
								<li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-4">Surgeries</a></li>
							</ul>
							<div class="tab-content view_pet_content">
								<div class="tab-pane active pet_information" role="tabpanel" id="tab-1" style="width: 100%;">
									<div>
										<div class="owner_information">
											<div class="owner_info_heading">
												<h1><strong>Owner Information</strong></h1> </div>
										</div>
										<div class="owner_details">
											<div class="owner_details_row">
												<div class="owner_detail_container">
													<h1>Name</h1>
													<p>Harold</p>
												</div>
												<div class="owner_detail_container">
													<h1>Address</h1>
													<p>Name</p>
												</div>
											</div>
											<div class="owner_details_row">
												<div class="owner_detail_container">
													<h1>Email</h1>
													<p>r@gmail.com</p>
												</div>
												<div class="owner_detail_container">
													<h1>Contact Number</h1>
													<p>+63 948 745 1489</p>
												</div>
											</div>
										</div>
									</div>
									<hr>
									<div>
										<div class="owner_information">
											<div class="owner_info_heading">
												<h1><strong>Health Concerns</strong></h1> </div>
										</div>
										<div class="owner_details">
											<div class="owner_details_row">
												<div class="owner_detail_container">
													<h1><strong>Allergies</strong></h1>
													<p><strong>None</strong></p>
												</div>
												<div class="owner_detail_container">
													<h1><strong>Existing Conditions</strong></h1>
													<p><strong>None</strong></p>
												</div>
											</div>
											<div class="owner_details_row">
												<div class="owner_detail_container">
													<h1><strong>Current Medications</strong></h1>
													<p><strong>None</strong></p>
												</div>
												<div class="owner_detail_container"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane pet_information" role="tabpanel" id="tab-2">
									<div id="medical_empty_state" class="pet_record_empty_state_message_container">
										<div class="pet_info_empty_state">
											<h1>NO MEDICAL HISTORY FOUND</h1>
											<div class="pet_info_empty_state_p_container">
												<p>You can add a medical history by clicking the button below.</p>
											</div>
										</div>
									</div>
									<div id="medical_history_table_container" class="medical_history_table_container">
										<div class="table-responsive" id="medical_history_table">
											<table class="table">
												<thead>
													<tr>
														<th>Diagnosis</th>
														<th>Date Diagnosed</th>
														<th>Treatment</th>
														<th>Medication</th>
														<th>Note</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Cell 1</td>
														<td>Cell 1</td>
														<td>Cell 1</td>
														<td>Cell 2</td>
														<td>Cell 2</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="tab-pane pet_information" role="tabpanel" id="tab-3">
									<div id="immunization_empty_state" class="pet_record_empty_state_message_container">
										<div class="pet_info_empty_state">
											<h1>NO IMMUNIZATION HISTORY FOUND</h1>
											<div class="pet_info_empty_state_p_container">
												<p>You can add an immunization&nbsp;history by clicking the button below.</p>
											</div>
										</div>
									</div>
									<div id="immunization_history_table_container" class="immunization_history_table_container">
										<div class="table-responsive" id="immunization_history_table">
											<table class="table">
												<thead>
													<tr>
														<th>Date</th>
														<th>Vaccination</th>
														<th>Details</th>
														<th>Next Vaccination</th>
														<th>Status</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Cell 1</td>
														<td>Cell 1</td>
														<td>Cell 1</td>
														<td>Cell 2</td>
														<td>Cell 2</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="tab-pane pet_information" role="tabpanel" id="tab-4">
									<div id="surgery_empty_state" class="pet_record_empty_state_message_container">
										<div class="pet_info_empty_state">
											<h1>NO SURGICAL HISTORY FOUND</h1>
											<div class="pet_info_empty_state_p_container">
												<p>You can add a surgical history by clicking the button below.</p>
											</div>
										</div>
									</div>
									<div id="surgery_history_table_container" class="surgery_history_table_container">
										<div class="table-responsive" id="surgery_history_table">
											<table class="table">
												<thead>
													<tr>
														<th>Surgery Performed</th>
														<th>Date of Surgery</th>
														<th>Reason</th>
														<th>Medication</th>
														<th>Note</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Cell 1</td>
														<td>Cell 1</td>
														<td>Cell 1</td>
														<td>Cell 2</td>
														<td>Cell 2</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<footer class="footer"><img src="assets/img/dogs&cats.png" style="width: 159.783px;height: 150px;flex-shrink: 0;"></footer>
	<div class="modal fade show" role="dialog" tabindex="-1" id="add_pet_success">
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
						<p>Pet have been successfully saved.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade show" role="dialog" tabindex="-1" id="archive_pet_modal">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content archive_modal">
				<div class="modal-header archive_header">
					<div class="archive_icon_container"><span class="success_icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
  <g clip-path="url(#clip0_6116_19764)">
    <path d="M16 10.6667V16M16 21.3333H16.0133M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 12.8174 26.7357 9.76516 24.4853 7.51472C22.2348 5.26428 19.1826 4 16 4C12.8174 4 9.76516 5.26428 7.51472 7.51472C5.26428 9.76516 4 12.8174 4 16Z" stroke="#045B62" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_6116_19764">
      <rect width="32" height="32" fill="white"/>
    </clipPath>
  </defs>
</svg></span></div>
				</div>
				<div class="modal-body archive_message">
					<div>
						<h1>Archive Pet?</h1>
						<p>You can restore archived pets at a later time.</p>
					</div>
				</div>
				<div class="modal-footer discard_footer">
					<button class="btn return_btn" data-bs-dismiss="modal" type="button"><span class="return_btn_base">Cancel</span></button>
					<button class="btn archive_confirm" id="archive_confirm_button" type="button"><span class="archive_confirm_button_base">Archive</span></button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" role="dialog" tabindex="-1" id="add_pet_modal">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content add_pet_record_modal">
				<div class="modal-header">
					<h1 class="modal-title">Add Pet Record</h1>
					<button class="btn-close" id="close_pet_modal" aria-label="Close" data-bs-dismiss="modal" type="button"></button>
				</div>
				<div class="modal-body" style="width:100%;">
					<form action="{{ route('client.addPet') }}" method="POST" class="add_client" id="add_pet_form">
						@csrf
						<div class="mb-3 input_container">
							<div class="new_input_row">
								<div class="form-floating" style="width:100%;">
									<input class="form-control form-control" type="text" name="pet_name" data-id="pet_name" id="pet_name" maxlength="255" placeholder="Pet Name">
									<label class="form-label form-label" for="pet_name">Pet Name<span>&nbsp;*</span></label>
									<div class="error-message" id="error-pet_name"><span>• Please enter pet name.</span></div>
									<div class="guide-message" id="guide-pet_name"><span>• Please enter pet name.</span></div>
								</div>
								<div class="form-floating" style="width:100%;">
									<select class="form-select form-select" data-id="gender" name="gender" id="gender" placeholder="Gender">
										<option value="none" selected="">Select Sex</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
									<label class="form-label form-label" for="gender">Sex<span>&nbsp;*</span></label>
									<div class="error-message" id="error-gender"><span>• Please select gender of pet.</span></div>
									<div class="guide-message" id="guide-gender"><span>• Please select gender of pet.</span></div>
								</div>
							</div>
							<div class="new_input_row">
								<div class="form-floating" style="width:100%;">
									<select class="form-select form-select" data-id="pet_type" name="species" id="pet_type" placeholder="Pet Type">
										<option value="" selected="">Select Pet Type</option>
										<option value="Dog">Dog</option>
										<option value="Cat">Cat</option>
									</select>
									<label class="form-label form-label" for="pet_type">Pet Type<span>&nbsp;*</span></label>
									<div class="error-message" id="error-pet_type"><span>• Please select pet type</span></div>
									<div class="guide-message" id="guide-pet_type"><span>• Please select pet type</span></div>
								</div>
								<div class="form-floating" style="width:100%;">
									<select class="form-select form-select" data-id="breed" name="breed" disabled="" id="breed" placeholder="Breed">
										<option value="none" selected="">Select a Pet Type first</option>
									</select>
									<label class="form-label form-label" for="breed">Breed<span>&nbsp;*</span></label>
									<div class="error-message" id="error-breed"><span>• Please select a breed.</span></div>
									<div class="guide-message" id="guide-breed"><span>• Please select a breed.</span></div>
								</div>
							</div>
							<div class="new_input_row">
								<div class="form-floating" style="width:100%;">
									<input class="form-control form-control" data-id="pet_birthdate" name="pet_birthdate" id="pet_birthdate" placeholder="Birthdate" type="date">
									<label class="form-label form-label" for="pet_birthdate">Birthdate<span>&nbsp;*</span></label>
									<div class="error-message" id="error-pet_birthdate"><span>• Please click the calendar icon on the right part, and select your pet birthdate.</span></div>
									<div class="guide-message" id="guide_pet_birthdate"><span>• Please click the calendar icon on the right part, and select your pet birthdate.</span></div>
								</div>
								<div class="form-floating" style="width:100%;">
									<input class="form-control form-control" type="text" data-bs-toggle="tooltip" data-id="age" name="pet_age" disabled="" value=" " id="age" maxlength="3" placeholder="Please select pet type, breed, and enter the birthdate first." title="Please select pet type and enter the birthdate first.">
									<label class="form-label form-label" for="age">Age</label>
									<div class="error-message" id="error-age" style="color:red;"></div>
								</div>
							</div>
							<div class="new_input_row">
								<div class="form-floating" style="width:100%;">
									<input class="form-control form-control" type="number" data-id="weight" name="weight" id="weight" maxlength="10" placeholder="Weight">
									<label class="form-label form-label" for="weight">Weight<span>&nbsp;*</span></label>
									<div class="error-message" id="error-weight"><span>• Please enter weight of pet.</span><span>• Only numerical inputs will be accepted</span></div>
									<div class="guide-message" id="guide_pet_weight"><span>• Please enter weight of pet.</span><span>• Only numerical inputs will be accepted</span></div>
								</div>
								<div class="form-floating" style="width:100%;">
									<select class="form-select form-select" data-id="sterilization_status" name="sterilization" id="sterilization_status" placeholder="Sterilization Status">
										<option value="none" selected="">Select Status</option>
										<option value="None">None</option>
										<option value="Spayed">Spayed</option>
										<option value="Neutered">Neutered</option>
									</select>
									<label class="form-label form-label" for="sterilization_status">Sterilization Status<span>&nbsp;*</span></label>
									<div class="error-message" id="error-sterilization_status"><span>• Please select a sterilization status.</span></div>
									<div class="guide-message" id="guide-sterilization_status"><span>• Please select a sterilization status.</span></div>
								</div>
							</div>
						</div>
				</div>
				<div class="modal-footer add_product_button">
					<button class="btn clear_form" aria-label="Clear Form" id="clear_form-2" role="button" type="button"><span class="clear_form_base">Clear Form</span></button>
					<button class="btn submit_pet" id="submit_Pet" title="Complete the fields first to make this clickable." type="submit"><span class="submit_product_base">Submit</span></button>
				</div>
				</form>
			</div>
		</div>
	</div>
	<div class="modal fade" role="dialog" tabindex="-1" id="add_pet_modal-1">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content add_pet_record_modal">
				<div class="modal-header">
					<h1 class="modal-title">Add Pet Record</h1>
					<button class="btn-close" id="close_pet_modal-1" aria-label="Close" data-bs-dismiss="modal" type="button"></button>
				</div>
				<div class="modal-body" style="width:100%;">
					<form class="add_client" id="add_pet_form-1"><img src="assets/img/image%2010.png">
						<div class="mb-3 input_container">
							<div class="new_input_row">
								<div class="form-floating" style="width:100%;">
									<input class="form-control form-control" type="text" data-id="pet_name" id="pet_name-1" maxlength="255" placeholder="Pet Name">
									<label class="form-label form-label" for="pet_name">Pet Name<span>&nbsp;*</span></label>
									<div class="error-message" id="error-pet_name-1"><span>• Please enter pet name.</span></div>
									<div class="guide-message" id="guide-pet_name-1"><span>• Please enter pet name.</span></div>
								</div>
								<div class="form-floating" style="width:100%;">
									<select class="form-select form-select" data-id="gender" id="gender-1" placeholder="Gender">
										<option value="none" selected="">Select Sex</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
									<label class="form-label form-label" for="gender">Sex<span>&nbsp;*</span></label>
									<div class="error-message" id="error-gender-1"><span>• Please select gender of pet.</span></div>
									<div class="guide-message" id="guide-gender-1"><span>• Please select gender of pet.</span></div>
								</div>
							</div>
							<div class="new_input_row">
								<div class="form-floating" style="width:100%;">
									<select class="form-select form-select" data-id="pet_type" id="pet_type-1" placeholder="Pet Type">
										<option value="" selected="">Select Pet Type</option>
										<option value="Dog">Dog</option>
										<option value="Cat">Cat</option>
									</select>
									<label class="form-label form-label" for="pet_type">Pet Type<span>&nbsp;*</span></label>
									<div class="error-message" id="error-pet_type-1"><span>• Please select pet type</span></div>
									<div class="guide-message" id="guide-pet_type-1"><span>• Please select pet type</span></div>
								</div>
								<div class="form-floating" style="width:100%;">
									<select class="form-select form-select" data-id="breed" disabled="" id="breed-1" placeholder="Breed">
										<option value="none" selected="">Select a Pet Type first</option>
									</select>
									<label class="form-label form-label" for="breed">Breed<span>&nbsp;*</span></label>
									<div class="error-message" id="error-breed-1"><span>• Please select a breed.</span></div>
									<div class="guide-message" id="guide-breed-1"><span>• Please select a breed.</span></div>
								</div>
							</div>
							<div class="new_input_row">
								<div class="form-floating" style="width:100%;">
									<input class="form-control form-control" data-id="pet_birthdate" id="pet_birthdate-1" placeholder="Birthdate" type="date">
									<label class="form-label form-label" for="pet_birthdate">Birthdate<span>&nbsp;*</span></label>
									<div class="error-message" id="error-pet_birthdate-1"><span>• Please click the calendar icon on the right part, and select your pet birthdate.</span></div>
									<div class="guide-message" id="guide_pet_birthdate-1"><span>• Please click the calendar icon on the right part, and select your pet birthdate.</span></div>
								</div>
								<div class="form-floating" style="width:100%;">
									<input class="form-control form-control" type="text" data-bs-toggle="tooltip" data-id="age" disabled="" id="age-1" maxlength="3" placeholder="Please select pet type, breed, and enter the birthdate first." title="Please select pet type and enter the birthdate first.">
									<label class="form-label form-label" for="age">Age</label>
									<div class="error-message" id="error-age-1" style="color:red;"></div>
								</div>
							</div>
							<div class="new_input_row">
								<div class="form-floating" style="width:100%;">
									<input class="form-control form-control" type="number" data-id="weight" id="weight-1" maxlength="10" placeholder="Weight">
									<label class="form-label form-label" for="weight">Weight<span>&nbsp;*</span></label>
									<div class="error-message" id="error-weight-1"><span>• Please enter weight of pet.</span><span>• Only numerical inputs will be accepted</span></div>
									<div class="guide-message" id="guide_pet_weight-1"><span>• Please enter weight of pet.</span><span>• Only numerical inputs will be accepted</span></div>
								</div>
								<div class="form-floating" style="width:100%;">
									<select class="form-select form-select" data-id="sterilization_status" id="sterilization_status-1" placeholder="Sterilization Status">
										<option value="none" selected="">Select Status</option>
										<option value="None">None</option>
										<option value="Spayed">Spayed</option>
										<option value="Neutered">Neutered</option>
									</select>
									<label class="form-label form-label" for="sterilization_status">Sterilization Status<span>&nbsp;*</span></label>
									<div class="error-message" id="error-sterilization_status-1"><span>• Please select a sterilization status.</span></div>
									<div class="guide-message" id="guide-sterilization_status-1"><span>• Please select a sterilization status.</span></div>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer add_product_button">
					<button class="btn clear_form" aria-label="Clear Form" id="clear_form-1" role="button" type="button"><span class="clear_form_base">Clear Form</span></button>
					<button class="btn submit_pet" id="submit_Pet-1" title="Complete the fields first to make this clickable." type="submit"><span class="submit_product_base">Submit</span></button>
				</div>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	@if ($petExist)
	<script>
	$('#empty_state_container').hide();
	$('#user_new_pet_btn').show();
	$('#pet_card_container').show();
	</script>
	@else
	<script>
	$('#empty_state_container').show();
	$('#user_new_pet_btn').hide();
	$('#pet_card_container').hide();
	</script>
	@endif
	<script>
	$(document).ready(function() {
	$('.Edit_pet-action').click(function() {
		const id = $(this).data(container-id);
		$('#editId').val(id);
	});
	$('.View_pet').click(function() {
			const id = $(this).data('container-id');
			$('#medhisId').val(id);
			$('#vaxhisId').val(id);
			$('#surghisId').val(id);
			$('#editId').val(id);
			// Make an AJAX request to retrieve data
			$.ajax({
				type: 'GET',
				url: `/admin/emr/view/${id}`,
				success: function(data) {
					// Update the HTML elements with the retrieved data
					$('#petInfo h1').text(data.petInfo.name);
					$('#petInfo p').text(data.petInfo.breed);
					$('#age p').text(data.petInfo.age);
					$('#birthdate p').text(data.petInfo.birthdate);
					$('#weight p').text(data.petInfo.weight);
					$('#sex p').text(data.petInfo.gender);
					$('#sterilization p').text(data.petInfo.sterilization);
					$('#ownerName p').text(data.ownerInfo.first_name + ' ' + 
					(data.ownerInfo.middle_name ? data.ownerInfo.middle_name + ' ' : '') + 
					data.ownerInfo.last_name + (data.ownerInfo.suffix ? ' ' + data.ownerInfo.suffix : ''));
					$('#ownerEmail p').text(data.ownerInfo.email);
					$('#ownerPhone p').text(data.ownerInfo.phone);
				},
				error: function(xhr) {
					// Handle errors
					console.log(xhr.responseText);
				}
			});
			$.ajax({
				type: 'GET',
				url: '/admin/emr/medhis/' + id, // Replace with your actual endpoint
				success: function(data) {
					$('#medhisto_Table tbody').empty();
					console.log('Success: Data received', data);
					$.each(data, function(index, medhisto) {
						var newRow = '<tr>' +
							'<td>' + medhisto.diagnosis + '</td>' +
							'<td>' + medhisto.diagnosis_date + '</td>' +
							'<td>' + medhisto.treatment + '</td>' +
							'<td>' + medhisto.med.item_name + '</td>' +
							'</tr>';
						$('#medhisto_Table tbody').append(newRow);
					});
				},
				error: function(xhr) {
					console.log(xhr.responseText);
				}
			});
			$.ajax({
				type: 'GET',
				url: '/admin/emr/vaxhis/' + id,
				success: function(data) {
					$('#immuno_Table tbody').empty();
					$.each(data, function(index, vaxhisto) {
						var newRow = '<tr>' +
						'<td>' + vaxhisto.vaccination_date + '</td>' +
						'<td>' + vaxhisto.vax.item_name + '</td>' +
						'<td>' + vaxhisto.vax.prod_desc + '</td>' +
						'<td>' + vaxhisto.revaccination_date + '</td>' +
						'</tr>';
					$('#immuno_Table tbody').append(newRow);

					});
				},
				error: function(xhr) {
					console.log(xhr.responseText);
				}
			});
			$.ajax({
				type: 'GET',
				url: '/admin/emr/surghis/' + id,
				success: function(data) {
					$('#surghisto_Table tbody').empty();
					$.each(data, function(index, surgery){
						var newRow = '<tr>' +
						'<td>' + surgery.surgery_type + '</td>' +
						'<td>' + surgery.surgery_date + '</td>' +
						'<td>' + surgery.reason + '</td>' +
						'<td>' + surgery.med.item_name + '</td>' +
						'<td>' + surgery.surgery_note + '</td>' +
						'</tr>';
					$('#surghisto_Table tbody').append(newRow);

					});
				},
				error: function(xhr) {
					console.log(xhr.responseText);
				}
			})
			
			
		});

	function displayMedicalHistoryTable(id) {
	// Make an AJAX request to fetch medical history data for the specific petrecord_id
	
	}

	function displayVaxHistoryTable(id) {
	
	$.ajax({
		type: 'GET',
		url: '/admin/emr/vaxhis/' + id,
		success: function(data) {
			$('#immunization_histo_Table tbody').empty();

			$.each(data, function(index, vax) {
				var newRow = '<tr>' +
				'<td>' + vax.vaccination_date + '</td>' +
				'<td>' + vax.Vax.item_name + '</td>' +
				'<td>' + vax.Vax.prod_desc + '</td>' +
				'<td>' + vax.revaccination_date + '</td>' +
				'</tr>';
			$('#immunization_histo_Table tbody').append(newRow);

			});
		},
		error: function(xhr) {
			console.log(xhr.responseText);
		}
	});
	}

	function displaySurgHistoryTable(id) {
	
	$.ajax({
		type: 'GET',
		url: '/admin/emr/surghis/' + id,
		success: function(data) {
			$('#surgery_histo_Table tbody').empty();

			$.each(data, function(index, surgery){
				var newRow = '<tr>' +
				'<td>' + surgery.surgery_type + '</td>' +
				'<td>' + surgery.surgery_date + '</td>' +
				'<td>' + surgery.severity + '</td>' +
				'<td>' + surgery.Med.item_name + '</td>' +
				'<td>' + surgery.surgery_note + '</td>' +
				'</tr>';
			$('#surgery_histo_Table tbody').append(newRow);

			});
		},
		error: function(xhr) {
			console.log(xhr.responseText);
		}
	})
	}

});
</script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/sidebar.js') }}"></script>
    <script src="{{ asset('assets/js/pet_information.js') }}"></script>
</body>

</html>