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
							<li class="nav-item" role="presentation"><a class="nav-link list_tab" role="tab" data-bs-toggle="tab" href="#tab-2">Pending<span id="recent-counter" class="counter counter-recent">0</span></a></li>
							<li class="nav-item" role="presentation"><a class="nav-link list_tab" role="tab" data-bs-toggle="tab" href="#tab-3">Rejected<span id="rejected-counter" class="counter counter-rejected">0</span></a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link list_tab" role="tab" data-bs-toggle="tab" href="#tab-4">History<span id="history-counter" class="counter counter-history">0</span></a></li>
						</ul>
						<div class="tab-content" style="width: 100%;">
							<div class="tab-pane active appointment_list_container" role="tabpanel" id="tab-1" style="overflow:auto;">
							
								<div id="appointment_table_container"  class="w-100" style="overflow: auto;">
									<table class="table table-responsive mt-3 w-100">
										<thead>
											<tr>
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
                                            <td class="text-style">{{ $index + 1 }}</td>
                                            <td class="text-style">{{ $appointment['petType'] }} ({{ $appointment['breed'] }})</td>
                                            <td class="text-style">{{ $appointment['appointmentType'] }}</td>
                                            <td class="text-style">{{ $appointment['appointmentDate'] }} {{ $appointment['appointmentTime'] }}</td>
                                        </tr>
                                        @endforeach
                                        </tbody>
									</table>
									
								</div>

								

							</div>
							
							<div class="tab-pane appointment_list_container" role="tabpanel" id="tab-2" style="overflow:auto;">
								
								<table class="table table-responsive mt-3 w-100" id="approved_table">
										<thead>
											<tr>
												<th>No.</th>
												<th>Patient Info</th>
												<th>Surgery Type</th>
												<th>Appointment</th>
												<th>Additional Note</th>
												<th>Actions</th>
											</tr>
										</thead>
										<tbody id="appointment_pending_table_body">
										@foreach ($appointments as $index => $appointmentpending)
                                        <tr>
                                            <td class="text-style">{{ $index + 1 }}</td>
                                            <td class="text-style">{{ $appointmentpending['petType'] }} ({{ $appointmentpending['breed'] }})</td>
                                            <td class="text-style">{{ $appointmentpending['appointmentType'] }}</td>
                                            <td class="text-style">{{ $appointmentpending['appointmentDate'] }} {{ $appointmentpending['appointmentTime'] }}</td>
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
																data-action="reschedule"
                                                                class="dropdown-item reschedule-action"><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="24" height="24"
                                                                    viewBox="0 0 24 24" fill="none">
                                                                    <g clip-path="url(#clip0_6291_2186)">
                                                                        <path
                                                                            d="M15.5 12H12V7M3 12C3 13.1819 3.23279 14.3522 3.68508 15.4442C4.13738 16.5361 4.80031 17.5282 5.63604 18.364C6.47177 19.1997 7.46392 19.8626 8.55585 20.3149C9.64778 20.7672 10.8181 21 12 21C13.1819 21 14.3522 20.7672 15.4442 20.3149C16.5361 19.8626 17.5282 19.1997 18.364 18.364C19.1997 17.5282 19.8626 16.5361 20.3149 15.4442C20.7672 14.3522 21 13.1819 21 12C21 10.8181 20.7672 9.64778 20.3149 8.55585C19.8626 7.46392 19.1997 6.47177 18.364 5.63604C17.5282 4.80031 16.5361 4.13738 15.4442 3.68508C14.3522 3.23279 13.1819 3 12 3C10.8181 3 9.64778 3.23279 8.55585 3.68508C7.46392 4.13738 6.47177 4.80031 5.63604 5.63604C4.80031 6.47177 4.13738 7.46392 3.68508 8.55585C3.23279 9.64778 3 10.8181 3 12Z"
                                                                            stroke="#1C1C1C" stroke-opacity="0.7"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </g>
                                                                    <defs>
                                                                        <clipPath id="clip0_6291_2186">
                                                                            <rect width="24" height="24"
                                                                                fill="white" />
                                                                        </clipPath>
                                                                    </defs>
                                                                </svg> Reschedule</button>
                                                                <button
                                                                data-id=""
																data-action="cancel_appointment"
                                                                class="dropdown-item cancel_appointment-action"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M18 6l-12 12" />
  <path d="M6 6l12 12" />
</svg>


 Cancel</button>
                                                        </div>
                                                </td>
                                        </tr>
                                        @endforeach
										</tbody>
									</table>
									
							</div>
							<div class="tab-pane appointment_list_container" role="tabpanel" id="tab-3" style="overflow:auto;">
								
								<table class="table table-responsive mt-3 w-100" id="approved_table">
										<thead>
											<tr>
												<th>No.</th>
												<th>Patient Info</th>
												<th>Surgery Type</th>
												<th>Appointment</th>
												<th>Reason</th>
											</tr>
										</thead>
										<tbody id="appointment_rejected_table_body">
										@foreach ($appointmentrejected as $index => $appointmentrejected)
                                        <tr>
                                            <td class="text-style">{{ $index + 1 }}</td>
                                            <td class="text-style">{{ $appointmentrejected['petType'] }} ({{ $appointmentrejected['breed'] }})</td>
                                            <td class="text-style">{{ $appointmentrejected['appointmentType'] }}</td>
                                            <td class="text-style">{{ $appointmentrejected['appointmentDate'] }} {{ $appointmentrejected['appointmentTime'] }}</td>
											<td class="text-style"></td>
											
                                        </tr>
                                        @endforeach
										</tbody>
									</table>
									
						</div>
                        <div class="tab-pane appointment_list_container" role="tabpanel" id="tab-4" style="overflow:auto;">
								
								<table class="table table-responsive mt-3 w-100" id="history_table">
										<thead>
											<tr>
												<th>No.</th>
												<th>Patient Info</th>
												<th>Surgery Type</th>
												<th>Appointment</th>
												<th>Note</th>
											</tr>
										</thead>
										<tbody id="appointment_history_table_body">
										
                                        <tr>
                                            <td class="text-style">{{ $index + 1 }}</td>
                                            <td class="text-style"></td>
                                            <td class="text-style"></td>
                                            <td class="text-style"></td>
											<td></td>
											
                                        </tr>
										</tbody>
									</table>
									
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

	<div class="modal fade show" role="dialog" tabindex="-1" id="resched_modal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content resched_modal">
                <div class="modal-header archive_header">
                    <div class="archive_icon_container"><span class="success_icon"><svg
                                xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                viewBox="0 0 32 32" fill="none">
                                <g clip-path="url(#clip0_6356_1845)">
                                    <path
                                        d="M16 10.6667V16M16 21.3333H16.0133M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 12.8174 26.7357 9.76516 24.4853 7.51472C22.2348 5.26428 19.1826 4 16 4C12.8174 4 9.76516 5.26428 7.51472 7.51472C5.26428 9.76516 4 12.8174 4 16Z"
                                        stroke="#045B62" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_6356_1845">
                                        <rect width="32" height="32" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg></span></div>
                </div>
                <div class="modal-body archive_message">
                    <form  method="POST">
                        @csrf
                        <div>
                            <h1><strong>Reschedule appointment</strong></h1>
                            <p>You are about to reschedule an appointment. Please make sure that all information are
                                correct.</p>
                        </div>
                        <div class="date_time_container">
                            <div class="form-floating" style="width:100%;">
                                <input class="form-control" name="appointmentDate" data-id="appointment_date"
                                    id="appointment_date-1" type="date">
                                <label class="form-label form-label"
                                    for="appointment_date">Date<span>&nbsp;*</span></label>
                                    <div id="error-date1" class="error-message"><span>• Please select a
                                            date</span></div>
                            </div>
                            <div class="form-floating" style="width:100%;">
                                <input class="form-control" name="appointmentTime" data-id="appointment_time-4"
                                    id="appointmentTime" type="time">
                                <label class="form-label form-label"
                                    for="appointment_time-4">Time<span>&nbsp;*</span></label>
                                <div class="error-message" id="error-appointment_time-4"><span>• Please select a
                                        time</span></div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer resched_footer d-flex justify-content-end align-items-center align-self-stretch">
                    <button class="btn return_btn" data-bs-dismiss="modal" id="cancel_reschedule_btn-1"
                        type="button" onClick="cancelReschedule()"><span class="return_btn_base">Cancel</span></button>
                    <button id="reschedule_btn-1" class="btn reschedule_btn" type="button"
                        data-bs-dismiss="modal" disabled><span class="archive_confirm_button_base">Reschedule</span></button>
                </div>
                </form>
            </div>
        </div>
    </div>

	<script>
		function enableRescheduleBtn() {
        var appointment_date1 = document.getElementById("appointment_date-1").value;
        var appointmentTime = document.getElementById("appointmentTime").value;
      
        var reschedule_btn1 = document.getElementById("reschedule_btn-1");
      
        // Add additional validation conditions as needed
        if (
          appointment_date1.trim() !== "" &&
          appointmentTime.trim() !== ""
        ) {
          reschedule_btn1.removeAttribute("disabled");
          reschedule_btn1.classList.remove("disabled");
        } else {
          reschedule_btn1.setAttribute("disabled", true);
          reschedule_btn1.classList.add("disabled");
        }
      }
      
      // Example: Call enableSubmitButton() on input change events
      document.getElementById("appointment_date-1").addEventListener("input", enableRescheduleBtn);
      document.getElementById("appointmentTime").addEventListener("input", enableRescheduleBtn);
      
              function cancelReschedule() {
        var appointment_date1 = document.getElementById("appointment_date-1");
        var appointmentTime = document.getElementById("appointmentTime");
      
        var reschedule_btn1 = document.getElementById("reschedule_btn-1");
      
        appointment_date1.value = "";
        appointmentTime.value = "";
      
        reschedule_btn1.disabled = true;
      
      }
	</script>

	<script>
        function changePage(select) {
            let pageNumber = select.value;
            document.getElementById('pageForm').value = pageNumber; // Update page hidden input
            document.getElementById('searchForm').submit(); // Submit the form after updating values
        }

        function changeItemsPerPage(select) {
            let itemsPerPage = select.value;
            document.getElementById('perPageForm').value = itemsPerPage; // Update perPage hidden input
            document.getElementById('pageForm').value = 1; // Reset page to 1 when changing items per page
            document.getElementById('searchForm').submit(); // Submit the form after updating values
        }

        function submitForm() {
            document.getElementById('searchForm').submit();
        }
    </script>
	
	<script>
            var SelectAll = document.getElementById("SelectAll");

            SelectAll.addEventListener("click", function () {
    var tableBody = document.getElementById('appointment_table_body');
    var rowCheckboxes = tableBody.querySelectorAll("input[type='checkbox']");

    rowCheckboxes.forEach(function (checkbox) {
        checkbox.checked = !checkbox.checked; // Toggle the state
    });

});

var SelectAllPending = document.getElementById("SelectAllPending");

SelectAllPending.addEventListener("click", function () {
var tableBody = document.getElementById('appointment_pending_table_body');
var rowCheckboxes = tableBody.querySelectorAll("input[type='checkbox']");

rowCheckboxes.forEach(function (checkbox) {
checkbox.checked = !checkbox.checked; // Toggle the state
});



});

var SelectAllrejected = document.getElementById("SelectAllrejected");

SelectAllrejected.addEventListener("click", function () {
var tableBody = document.getElementById('appointment_rejected_table_body');
var rowCheckboxes = tableBody.querySelectorAll("input[type='checkbox']");

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