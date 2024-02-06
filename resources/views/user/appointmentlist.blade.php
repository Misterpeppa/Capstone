<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" />
    <title>Appointment List</title>
    <link rel="icon" href="/img/dogs&cats.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter&amp;display=swap">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Noto+Sans:300,400,500,600,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('assets/css/Bootstrap-4-Custom-Radio.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Multi-step-form.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Navbar-Centered-Links-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/newstyles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body> 
    @include('includes.user_header')
	<main>
		<div class="container-fluid mb-5">
			<div class="row d-flex flex-column align-content-center flex-wrap">
				<div class="col-10 col-xxl-8 user_appointment">
					<div class="appointment_list_heading_button_container">
						<div class="appointment_list_heading_texts">
							<h1><strong>My Appointments</strong></h1>
							<p>View your upcoming and past appointments here.</p>
						</div>
                        <a class="btn new_appointment_btn" role="button" href="{{ route('appointment.form') }}"><span class="new_appointment_btn_base"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <g clip-path="url(#clip0_5910_1403)" filter="url(#filter0_d_5910_1403)">
                                <path d="M12 5V19M5 12H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                            <defs>
                                <filter id="filter0_d_5910_1403" x="-2" y="0" width="28" height="28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                <feOffset dy="2"/>
                                <feGaussianBlur stdDeviation="1"/>
                                <feComposite in2="hardAlpha" operator="out"/>
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5910_1403"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5910_1403" result="shape"/>
                                </filter>
                                <clipPath id="clip0_5910_1403">
                                <rect width="24" height="24" fill="white"/>
                                </clipPath>
                            </defs>
                            </svg> New Appointment</span></a> 
                        </div>
					<div class="appointment_list_tabs">
						<ul class="nav nav-tabs appointment_list_tab_items" role="tablist">
							<li class="nav-item" role="presentation"><a class="nav-link active list_tab" role="tab" data-bs-toggle="tab" href="#tab-1">Approved<span id="upcoming-counter" class="counter counter-upcoming">0</span></a></li>
							<li class="nav-item" role="presentation"><a class="nav-link list_tab" role="tab" data-bs-toggle="tab" href="#tab-2">Pending<span id="history-counter" class="counter counter-recent">0</span></a></li>
						</ul>
						<div class="tab-content" style="width: 100%;">
							<div class="tab-pane active appointment_list_container" role="tabpanel" id="tab-1" style="overflow:auto;">
							<div class="container_header">
									<div class="left_part_product_header">
										<div class="search_container">
											<input type="search" class="search_input" placeholder="Search Appointment">
										</div>
										<button class="btn filter_btn" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<g clip-path="url(#clip0_5284_15912)">
												<path d="M4 4H20V6.172C19.9999 6.70239 19.7891 7.21101 19.414 7.586L15 12V19L9 21V12.5L4.52 7.572C4.18545 7.20393 4.00005 6.7244 4 6.227V4Z" stroke="black" stroke-width="2" stroke-width="2" stroke-opacity="0.7" stroke-linecap="round" stroke-linejoin="round"/>
											</g>
											<defs>
												<clipPath id="clip0_5284_15912">
												<rect width="24" height="24" fill="white"/>
												</clipPath>
											</defs>
											</svg><span class="filter_btn_base">Filter by</span></button>
																					<button class="btn sort_btn" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<g clip-path="url(#clip0_5284_15919)">
												<path d="M4 6H13M4 12H11M4 18H11M15 15L18 18M18 18L21 15M18 18V6" stroke="black" stroke-width="2" stroke-width="2" stroke-opacity="0.7" stroke-linecap="round" stroke-linejoin="round"/>
											</g>
											<defs>
												<clipPath id="clip0_5284_15919">
												<rect width="24" height="24" fill="white"/>
												</clipPath>
											</defs>
											</svg><span class="sort_btn_base">Sort by</span>
										</button>
									</div>
									<div class="right_part_product_header">
										<button class="btn archive_button" id="archive_button-1" type="button">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<g clip-path="url(#clip0_5824_17335)">
													<path d="M19 8C19.5304 8 20.0391 7.78929 20.4142 7.41421C20.7893 7.03914 21 6.53043 21 6C21 5.46957 20.7893 4.96086 20.4142 4.58579C20.0391 4.21071 19.5304 4 19 4H5C4.46957 4 3.96086 4.21071 3.58579 4.58579C3.21071 4.96086 3 5.46957 3 6C3 6.53043 3.21071 7.03914 3.58579 7.41421C3.96086 7.78929 4.46957 8 5 8M19 8H5M19 8V18C19 18.5304 18.7893 19.0391 18.4142 19.4142C18.0391 19.7893 17.5304 20 17 20H7C6.46957 20 5.96086 19.7893 5.58579 19.4142C5.21071 19.0391 5 18.5304 5 18V8M10 12H14" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /> </g>
												<defs>
													<clipPath id="clip0_5824_17335">
														<rect width="24" height="24" fill="white" /> </clipPath>
												</defs>
											</svg>
										</button>
									</div>
								</div>
								<div id="appointment_table_container"  class="w-100" style="overflow: auto;">
									<table class="table table-responsive mt-3 w-100">
										<thead>
											<tr>
												<th>
													<input id="SelectAll" type="radio" class="checkbox">
												</th>
												<th>No.</th>
												<th>Patient Info</th>
												<th>Surgery Type</th>
												<th>Appointment Date</th>
												<th>Appointment Time</th>
											</tr>
										</thead>
										<tbody id="appointment_table_body">
                                        @foreach ($appointmentapproved as $index => $appointment)
                                        <tr>
                                            <td class="text-style"><input type="radio" class="checkbox"></td> 
                                            <td class="text-style">{{ $index + 1 }}</td>
                                            <td class="text-style">{{ $appointment['petType'] }} ({{ $appointment['breed'] }})</td>
                                            <td class="text-style">{{ $appointment['appointmentType'] }}</td>
                                            <td class="text-style">{{ $appointment['appointmentDate'] }}</td>
                                            <td class="text-style">{{ $appointment['appointmentTime'] }}</td>
                                        </tr>
                                        @endforeach
                                        </tbody>
									</table>
									
								</div>
								<div class="pagination d-none">
									<div class="pagination-menu"> <span>Go to:</span>
										<select class="paginationGoToSelect">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select>
									</div>
									<div class="pagination-pages"> <span class="pagination-arrow previous-page">
											<svg xmlns="http://www.w3.org/2000/svg" width="7" height="14" viewBox="0 0 7 14" fill="none">
											<path d="M5.48 12L1.36452 7.88384C0.878492 7.39773 0.878492 6.60227 1.36452 6.11616L5.48 2" stroke="#1C1C1C" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="square" stroke-linejoin="round"/>
											</svg>
										</span>
										<div class="pages"> <span class="pagination-page active">1</span> <span class="pagination-page">2</span> <span class="pagination-page">3</span> <span class="pagination-page">4</span> <span class="pagination-page">5</span> </div> <span class="pagination-arrow next-page">
											<svg xmlns="http://www.w3.org/2000/svg" width="7" height="14" viewBox="0 0 7 14" fill="none">
											<path d="M1.47998 12L5.59546 7.88384C6.08149 7.39773 6.08149 6.60227 5.59546 6.11616L1.47998 2" stroke="#1C1C1C" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="square" stroke-linejoin="round"/>
											</svg>
										</span> 
									</div>
									<div class="pagination-items"> <span>Show:</span>
											<select class="paginationItemsSelect">
												<option value="2">2 items</option>
												<option value="3">3 items</option>
												<option value="4">4 items</option>
												<option value="5">5 items</option>
												<option value="6">6 items</option>
											</select>
									</div>
								</div>
							</div>
							<div class="tab-pane appointment_list_container" role="tabpanel" id="tab-2" style="overflow:auto;">
								<div class="container_header">
									<div class="left_part_product_header">
										<div class="search_container">
											<input type="search" class="search_input" placeholder="Search Appointment">
										</div>
										<button class="btn filter_btn" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<g clip-path="url(#clip0_5284_15912)">
												<path d="M4 4H20V6.172C19.9999 6.70239 19.7891 7.21101 19.414 7.586L15 12V19L9 21V12.5L4.52 7.572C4.18545 7.20393 4.00005 6.7244 4 6.227V4Z" stroke="black" stroke-width="2" stroke-width="2" stroke-opacity="0.7" stroke-linecap="round" stroke-linejoin="round"/>
											</g>
											<defs>
												<clipPath id="clip0_5284_15912">
												<rect width="24" height="24" fill="white"/>
												</clipPath>
											</defs>
											</svg><span class="filter_btn_base">Filter by</span></button>
																					<button class="btn sort_btn" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<g clip-path="url(#clip0_5284_15919)">
												<path d="M4 6H13M4 12H11M4 18H11M15 15L18 18M18 18L21 15M18 18V6" stroke="black" stroke-width="2" stroke-opacity="0.7" stroke-linecap="round" stroke-linejoin="round"/>
											</g>
											<defs>
												<clipPath id="clip0_5284_15919">
												<rect width="24" height="24" fill="white"/>
												</clipPath>
											</defs>
											</svg> <span class="sort_btn_base">Sort by</span>
										</button>
									</div>
									<div class="right_part_product_header">
										<button class="btn archive_button" id="archive_button-1" type="button">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<g clip-path="url(#clip0_5824_17335)">
													<path d="M19 8C19.5304 8 20.0391 7.78929 20.4142 7.41421C20.7893 7.03914 21 6.53043 21 6C21 5.46957 20.7893 4.96086 20.4142 4.58579C20.0391 4.21071 19.5304 4 19 4H5C4.46957 4 3.96086 4.21071 3.58579 4.58579C3.21071 4.96086 3 5.46957 3 6C3 6.53043 3.21071 7.03914 3.58579 7.41421C3.96086 7.78929 4.46957 8 5 8M19 8H5M19 8V18C19 18.5304 18.7893 19.0391 18.4142 19.4142C18.0391 19.7893 17.5304 20 17 20H7C6.46957 20 5.96086 19.7893 5.58579 19.4142C5.21071 19.0391 5 18.5304 5 18V8M10 12H14" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /> </g>
												<defs>
													<clipPath id="clip0_5824_17335">
														<rect width="24" height="24" fill="white" /> </clipPath>
												</defs>
											</svg>
										</button>
									</div>
								</div>
								<table class="table table-responsive mt-3 w-100" id="approved_table">
										<thead>
											<tr>
												<th>
													<input id="SelectAllPending" type="radio" class="checkbox">
												</th>
												<th></th>
												<th>Patient Info</th>
												<th>Appointment</th>
												<th>Surgery Type</th>
												<th>Status</th>
												<th>Additional Notes</th>
												<th>Actions</th>
											</tr>
										</thead>
										<tbody id="appointment_pending_table_body">
										@foreach ($appointments as $index => $appointmentpending)
                                        <tr>
                                            <td class="text-style"><input type="radio" class="checkbox"></td> 
                                            <td class="text-style">{{ $index + 1 }}</td>
                                            <td class="text-style">{{ $appointmentpending['petType'] }} ({{ $appointmentpending['breed'] }})</td>
                                            <td class="text-style">{{ $appointmentpending['appointmentType'] }}</td>
                                            <td class="text-style">{{ $appointmentpending['appointmentDate'] }} {{ $appointmentpending['appointmentTime'] }}</td>
											<td class="text-style">{{ $appointmentpending['status'] }}</td>
                                            <td class="text-style"></td>
											<td></td>
											<td class="dropdown button-action">
                                                <button class="dropbtn" id="dropbtn" style="background-color: transparent; border:none;"
                                                            aria-expanded="false" data-bs-toggle="dropdown"
                                                            type="button"><svg xmlns="http://www.w3.org/2000/svg"
                                                                width="18" height="18" viewBox="0 0 18 18"
                                                                fill="none">
                                                                <path
                                                                    d="M9 5C7.61929 5 6.5 3.88071 6.5 2.5C6.5 1.11929 7.61929 -6.03528e-08 9 0C10.3807 6.03528e-08 11.5 1.11929 11.5 2.5C11.5 3.88071 10.3807 5 9 5Z"
                                                                    fill="#045B62" />
                                                                <path
                                                                    d="M9 11.5C7.61929 11.5 6.5 10.3807 6.5 9C6.5 7.61929 7.61929 6.5 9 6.5C10.3807 6.5 11.5 7.61929 11.5 9C11.5 10.3807 10.3807 11.5 9 11.5Z"
                                                                    fill="#045B62" />
                                                                <path
                                                                    d="M9 18C7.61929 18 6.5 16.8807 6.5 15.5C6.5 14.1193 7.61929 13 9 13C10.3807 13 11.5 14.1193 11.5 15.5C11.5 16.8807 10.3807 18 9 18Z"
                                                                    fill="#045B62" />
                                                            </svg></button>
                                                        <div class="dropdown-menu"><button
                                                                data-id=""
                                                                class="dropdown-item complete-action"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="22"
                                                                    height="12" viewBox="0 0 22 12"
                                                                    fill="none">
                                                                    <path d="M6 6L11 11L21 1M1 6L6 11M11 6L16 1"
                                                                        stroke="#1C1C1C" stroke-opacity="0.7"
                                                                        stroke-width="2" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg> Mark as complete</button>
                                                            <hr />
                                                            <a class="dropdown-item archive-action"
                                                                data-id=""><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24"
                                                                    fill="none">
                                                                    <g clip-path="url(#clip0_6291_1005)">
                                                                        <path
                                                                            d="M19 8C19.5304 8 20.0391 7.78929 20.4142 7.41421C20.7893 7.03914 21 6.53043 21 6C21 5.46957 20.7893 4.96086 20.4142 4.58579C20.0391 4.21071 19.5304 4 19 4H5C4.46957 4 3.96086 4.21071 3.58579 4.58579C3.21071 4.96086 3 5.46957 3 6C3 6.53043 3.21071 7.03914 3.58579 7.41421C3.96086 7.78929 4.46957 8 5 8M19 8H5M19 8V18C19 18.5304 18.7893 19.0391 18.4142 19.4142C18.0391 19.7893 17.5304 20 17 20H7C6.46957 20 5.96086 19.7893 5.58579 19.4142C5.21071 19.0391 5 18.5304 5 18V8M10 12H14"
                                                                            stroke="#1C1C1C" stroke-opacity="0.7"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </g>
                                                                    <defs>
                                                                        <clipPath id="clip0_6291_1005">
                                                                            <rect width="24" height="24"
                                                                                fill="white" />
                                                                        </clipPath>
                                                                    </defs>
                                                                </svg> Archive</a>
                                                        </div>
                                                </td>
                                        </tr>
                                        @endforeach
										</tbody>
									</table>
									<div class="pagination">
                                <div class="pagination-menu">
                                    <span>Go to:</span>
                                    
  
                                </div>
                                <div class="pagination-pages">
                                    
                                </div>
                                <div class="pagination-items">
                                    <span>Show:</span>
                                    
                                </div>
                            </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<footer class="text-center py-4" style="background: rgba(4, 91, 98, 0.10); width:100%; position: static; left: 0; bottom: 0;">
        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-lg-3">
                <div class="col-lg-3"><img src="{{ asset('assets/img/dogs_cats.png') }}" style="width: 50px;height: 50px;flex-shrink: 0;" /></div>
                <div class="col">
                    <p style="color: #000;font-family: Inter;font-size: 16px;font-style: normal;font-weight: 400;line-height: normal;margin-bottom: 0;">Copyright © 2023, MediPaws | All Rights Reserved |</p><a href="https://tabler.io/icons" style="color: #000;font-family: Inter;font-size: 16px;font-style: normal;font-weight: 400;line-height: normal;margin-bottom: 0;">Icons-by-Tabler-Icons</a>
                </div>
                <div class="col">
                    <ul class="list-inline my-2">
                        <li class="list-inline-item"><a id="terms_and_conditions" class="terms_and_conditions" style="color: #000;font-family: Inter;font-size: 16px;font-style: normal;font-weight: 400;line-height: normal;margin-right: 20px;cursor: pointer;">Terms &amp; Conditions</a></li>
                        <li class="list-inline-item"><a id="privacy_and_policy" class="terms_and_conditions" style="margin-left: 10px;margin-top: 0;margin-bottom: 0;color: #000;font-family: Inter;font-size: 16px;font-style: normal;font-weight: 400;line-height: normal;cursor: pointer;">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
	
	<div class="modal fade" role="dialog" tabindex="-1" id="consent_modal">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content add_client_modal">
				<div class="modal-header">
					<div class="icon-container">
						<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
							<g clip-path="url(#clip0_5910_18516)">
								<path d="M16 10.6667V16M16 21.3333H16.0133M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 12.8174 26.7357 9.76516 24.4853 7.51472C22.2348 5.26428 19.1826 4 16 4C12.8174 4 9.76516 5.26428 7.51472 7.51472C5.26428 9.76516 4 12.8174 4 16Z" stroke="#045B62" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /> </g>
							<defs>
								<clipPath id="clip0_5910_18516">
									<rect width="32" height="32" fill="white" /> </clipPath>
							</defs>
						</svg>
					</div>
				</div>
				<div class="modal-body">
					<div class="consent-title">
						<h1>Informed Consent and Acknowledgement</h1>
						<p>Before scheduling your pet's surgery, please carefully read and acknowledge the following:</p>
					</div>
					<div class="consent-text">
						<p><span class="custom-style">1. Understanding the Procedure:</span> I understand that my pet will undergo a surgical procedure as recommended by the veterinarian. I have received information about the procedure, its risks, and its benefits.</p>
						<p><span class="custom-style">2. Health Status:</span> I confirm that I have provided accurate information about my pet's health, including any known medical conditions, allergies, or medications.</p>
						<p><span class="custom-style">3. Financial Responsibility:</span> I acknowledge that I am responsible for the cost of the surgical procedure and any related services. I have discussed the estimated costs with the clinic.</p>
						<p><span class="custom-style">4. Postoperative Care:</span> I understand that postoperative care is essential for my pet's recovery. I will follow the post-surgery care instructions provided by the clinic.</p>
						<p><span class="custom-style">5. Emergency Contact:</span> I have provided a valid emergency contact person and phone number in case of unforeseen circumstances during or after the surgery.</p>
						<p>By clicking "I Agree," I confirm that I have read, understood, and agree to the terms and conditions mentioned above. I consent to my pet undergoing the scheduled surgery.</p>
						<p>Please note that your agreement is required to proceed with scheduling the surgery for your pet.</p>
					</div>
				</div>
				<div class="modal-footer consent_buttons">
					<button class="btn disagree" id="disagree" type="button"><span class="disagree_base">I disagree</span></button>
					<button class="btn agree" id="agree" type="submit"><span class="agree_base">I Agree</span></button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade show" role="dialog" tabindex="-1" id="book_appointment_success">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content success_modal">
				<div class="modal-header success_header">
					<div class="success_icon_container"><span class="success_icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
  <g clip-path="url(#clip0_5910_17688)">
    <path d="M12 16L14.6667 18.6667L20 13.3333M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 14.4241 27.6896 12.8637 27.0866 11.4078C26.4835 9.95189 25.5996 8.62902 24.4853 7.51472C23.371 6.40042 22.0481 5.5165 20.5922 4.91345C19.1363 4.31039 17.5759 4 16 4C14.4241 4 12.8637 4.31039 11.4078 4.91345C9.95189 5.5165 8.62902 6.40042 7.51472 7.51472C6.40042 8.62902 5.5165 9.95189 4.91345 11.4078C4.31039 12.8637 4 14.4241 4 16Z" stroke="#5BB85A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_5910_17688">
      <rect width="32" height="32" fill="white"/>
    </clipPath>
  </defs>
</svg></span></div>
				</div>
				<div class="modal-body success_message">
					<div>
						<h1>Appointment completed!</h1>
						<p>Please wait for your appointment to be confirmed.</p>
					</div>
				</div>
				<div class="modal-footer"><a class="btn view_appointments" role="button"><span class="view_appointments_base">View Appointments</span></a></div>
			</div>
		</div>
	</div>
	<div class="modal fade show" role="dialog" tabindex="-1" id="archive_appointment_modal">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content archive_modal">
				<div class="modal-header archive_header">
					<div class="archive_icon_container"><span class="success_icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
  <g clip-path="url(#clip0_5935_6779)">
    <path d="M16 10.6667V16M16 21.3333H16.0133M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 12.8174 26.7357 9.76516 24.4853 7.51472C22.2348 5.26428 19.1826 4 16 4C12.8174 4 9.76516 5.26428 7.51472 7.51472C5.26428 9.76516 4 12.8174 4 16Z" stroke="#045B62" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_5935_6779">
      <rect width="32" height="32" fill="white"/>
    </clipPath>
  </defs>
</svg></span></div>
				</div>
				<div class="modal-body archive_message">
					<div>
						<h1><strong>Archive appointments?</strong></h1>
						<p>You can restore archived appointments at a later time.</p>
					</div>
				</div>
				<div class="modal-footer discard_footer">
					<button class="btn return_btn" data-bs-dismiss="modal" type="button"><span class="return_btn_base">Cancel</span></button>
					<button class="btn archive_confirm" id="archive_confirm_button" type="button"><span class="archive_confirm_button_base">Archive</span></button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade show" role="dialog" tabindex="-1" id="archive_appointment_modal-1">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content archive_modal">
				<div class="modal-header archive_header">
					<div class="archive_icon_container"><span class="success_icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
  <g clip-path="url(#clip0_5935_6779)">
    <path d="M16 10.6667V16M16 21.3333H16.0133M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 12.8174 26.7357 9.76516 24.4853 7.51472C22.2348 5.26428 19.1826 4 16 4C12.8174 4 9.76516 5.26428 7.51472 7.51472C5.26428 9.76516 4 12.8174 4 16Z" stroke="#045B62" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_5935_6779">
      <rect width="32" height="32" fill="white"/>
    </clipPath>
  </defs>
</svg></span></div>
				</div>
				<div class="modal-body archive_message">
					<div>
						<h1><strong>Archive multiple appointments?</strong></h1>
						<p>You can restore archived appointments at a later time.</p>
					</div>
				</div>
				<div class="modal-footer discard_footer">
					<button class="btn return_btn" data-bs-dismiss="modal" type="button"><span class="return_btn_base">Cancel</span></button>
					<button class="btn archive_confirm" id="archive_confirm_button-1" type="button"><span class="archive_confirm_button_base">Archive</span></button>
				</div>
			</div>
		</div>
	</div>
	
	<script>
            var SelectAll = document.getElementById("SelectAll");

            SelectAll.addEventListener("click", function () {
    var tableBody = document.getElementById('appointment_table_body');
    var rowCheckboxes = tableBody.querySelectorAll("input[type='radio']");

    rowCheckboxes.forEach(function (checkbox) {
        checkbox.checked = !checkbox.checked; // Toggle the state
    });

});

var SelectAllPending = document.getElementById("SelectAllPending");

SelectAllPending.addEventListener("click", function () {
var tableBody = document.getElementById('appointment_pending_table_body');
var rowCheckboxes = tableBody.querySelectorAll("input[type='radio']");

rowCheckboxes.forEach(function (checkbox) {
checkbox.checked = !checkbox.checked; // Toggle the state
});

});
    </script>

							
	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/bs-init.js') }}"></script>
	<script src="{{ asset('assets/js/appointment_list.js') }}"></script>

</body>

</html>