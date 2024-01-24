<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
	<meta charset="utf-8">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Admin | Dashboard</title>
	<link rel="icon" href="/img/dogs&cats.png" type="image/x-icon">
	<link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter&amp;display=swap">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:300,400,500,600,700&amp;display=swap">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap">
	<link rel="stylesheet" href="{{ asset('assets/css/bs-theme-overrides.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/Multi-step-form.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/Navbar-Centered-Links-icons.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/newstyles.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/Toggle-Switch.css') }}">
</head>

<body>
	<main class="d-flex flex-row container-fluid" style="padding: 0; margin: 0;">
    @php
    $activeTab = 'dashboard'; // Set the active tab
    @endphp
        @include('includes.admin_header')
		<div class="content">
			<div class="rectangle">
				<button class="btn notification" id="notification" type="button"><span class="notification_base"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="18" viewbox="0 0 15 18" fill="none"><path d="M2.29482 10.4791L2.93736 10.866L2.93903 10.8632L2.29482 10.4791ZM1.38031 11.998L0.737787 11.6112L0.737673 11.6113L1.38031 11.998ZM2.23916 14.328L1.99871 15.0385L2.00149 15.0394L2.23916 14.328ZM12.7918 14.328L12.5564 13.6159L12.5542 13.6167L12.7918 14.328ZM13.6507 11.998L14.2938 11.6121L14.2932 11.6112L13.6507 11.998ZM12.7362 10.4791L12.0864 10.854L12.0937 10.866L12.7362 10.4791ZM8.99065 2.00199L8.78522 2.7233C9.0594 2.80139 9.35415 2.71728 9.54583 2.50625C9.7375 2.29522 9.79296 1.99376 9.68894 1.72833L8.99065 2.00199ZM6.0483 2.00199L5.35001 1.72833C5.24599 1.99376 5.30145 2.29522 5.49313 2.50625C5.68481 2.71728 5.97955 2.80139 6.25374 2.7233L6.0483 2.00199ZM5.83359 16.3002L5.30286 16.8301L5.30326 16.8305L5.83359 16.3002ZM7.51948 1.02137C4.47306 1.02137 1.99811 3.49632 1.99811 6.54274H3.49811C3.49811 4.32475 5.30148 2.52137 7.51948 2.52137V1.02137ZM1.99811 6.54274V8.84096H3.49811V6.54274H1.99811ZM1.99811 8.84096C1.99811 8.99314 1.96284 9.22832 1.89124 9.48627C1.8197 9.74398 1.72858 9.96429 1.65061 10.0951L2.93903 10.8632C3.10759 10.5804 3.24311 10.2242 3.33658 9.88749C3.42999 9.551 3.49811 9.17386 3.49811 8.84096H1.99811ZM1.6523 10.0923L0.737787 11.6112L2.02284 12.3849L2.93735 10.866L1.6523 10.0923ZM0.737673 11.6113C0.34933 12.2568 0.264391 12.9889 0.507 13.6441C0.749283 14.2984 1.2894 14.7984 1.99871 15.0384L2.47961 13.6176C2.15512 13.5078 1.98351 13.3119 1.91366 13.1233C1.84415 12.9355 1.84668 12.6776 2.02295 12.3847L0.737673 11.6113ZM2.00149 15.0394C5.58318 16.236 9.44782 16.236 13.0295 15.0394L12.5542 13.6167C9.28099 14.7103 5.75001 14.7103 2.47682 13.6167L2.00149 15.0394ZM13.0272 15.0401C14.4485 14.5703 15.0644 12.8965 14.2938 11.6121L13.0076 12.3839C13.2867 12.849 13.0596 13.4496 12.5564 13.6159L13.0272 15.0401ZM14.2932 11.6112L13.3787 10.0923L12.0937 10.866L13.0082 12.3849L14.2932 11.6112ZM13.3858 10.1043C13.3086 9.97054 13.2183 9.7472 13.1473 9.48852C13.0762 9.22901 13.0408 8.99336 13.0408 8.84096H11.5408C11.5408 9.17364 11.6089 9.55031 11.7008 9.88524C11.7928 10.221 11.9252 10.5742 12.0865 10.8539L13.3858 10.1043ZM13.0408 8.84096V6.54274H11.5408V8.84096H13.0408ZM13.0408 6.54274C13.0408 3.50428 10.5579 1.02137 7.51948 1.02137V2.52137C9.72952 2.52137 11.5408 4.3327 11.5408 6.54274H13.0408ZM9.19608 1.28067C8.10014 0.968542 6.93882 0.968542 5.84287 1.28067L6.25374 2.7233C7.08111 2.48766 7.95784 2.48766 8.78522 2.7233L9.19608 1.28067ZM6.7466 2.27564C6.86777 1.96645 7.16863 1.75 7.51948 1.75V0.25C6.53434 0.25 5.69008 0.860583 5.35001 1.72833L6.7466 2.27564ZM7.51948 1.75C7.87033 1.75 8.17119 1.96645 8.29236 2.27564L9.68894 1.72833C9.34888 0.860583 8.50461 0.25 7.51948 0.25V1.75ZM9.15516 14.6143C9.15516 15.5122 8.41739 16.25 7.51948 16.25V17.75C9.24582 17.75 10.6552 16.3407 10.6552 14.6143H9.15516ZM7.51948 16.25C7.07487 16.25 6.65887 16.0648 6.36392 15.7699L5.30326 16.8305C5.86716 17.3944 6.65991 17.75 7.51948 17.75V16.25ZM6.36432 15.7703C6.05752 15.463 5.88477 15.0468 5.88379 14.6126L4.38379 14.616C4.38567 15.4465 4.71607 16.2425 5.30286 16.8301L6.36432 15.7703Z" fill="#1C1C1C"></path></svg></span></button>
				<div class="dropdown admin_btn">
					<button class="btn dropdown-toggle admin" aria-expanded="false" data-bs-toggle="dropdown" type="button"><img src="{{ asset('assets/img/image%2011%20(1).png') }}" width="40" height="40" alt="Admin"></button>
					<div class="dropdown-menu"><a class="dropdown-item" href="{{ route('admin.signout') }}">Sign Out</a></div>
				</div>
			</div>
			<div class="main_content">
				<div id="dashboard_header" class="dashboard_header">
					<div class="header_text_container">
						<h1><strong>Welcome back</strong></h1>
					</div>
					<button class="btn add_patient_btn" id="add_patient_btn" type="button"><span class="add_patient_btn_base">Add Client</span></button>
				</div>
				<div id="summary_container" class="summary_container">
					<div class="card summary">
						<div class="card-body">
							<div class="card_body_img_container dog"><img src="{{ asset('assets/img/Asset%2017%201.png') }}" width="58" height="88"></div>
							<div class="card_info_container">
								<div class="card_body_summary">
									<div class="upper_part_summary">
										<div class="staff_icon_container">
											<div class="staff_icon">
												<svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
													<path d="M14.3906 5.07315C14.3279 5.06436 14.2642 5.06436 14.2014 5.07315C13.5283 5.05166 12.8902 4.77526 12.4225 4.30254C11.9548 3.82983 11.6941 3.19798 11.6959 2.54097C11.6959 1.143 12.8585 0 14.3005 0C15.7335 0 16.9051 1.1342 16.9051 2.54097C16.9032 3.19839 16.6402 3.8295 16.1713 4.30169C15.7024 4.77388 15.0641 5.0504 14.3906 5.07315ZM17.3305 11.1662C16.3211 11.8256 14.9062 12.0718 13.5994 11.9047C13.9418 11.1838 14.1221 10.3837 14.1311 9.53963C14.1311 8.6604 13.9328 7.82513 13.5543 7.09537C14.8881 6.91953 16.3031 7.16571 17.3215 7.82513C18.7455 8.73953 18.7455 10.243 17.3305 11.1662ZM4.39578 5.07315C4.45887 5.06435 4.52196 5.06435 4.58504 5.07315C5.25815 5.05166 5.89622 4.77526 6.36395 4.30254C6.83168 3.82983 7.09229 3.19798 7.09052 2.54097C7.09052 2.20786 7.02327 1.87802 6.8926 1.57026C6.76193 1.26251 6.57041 0.982884 6.32897 0.747341C6.08752 0.511799 5.80089 0.324956 5.48543 0.197481C5.16997 0.0700065 4.83186 0.00439603 4.49041 0.00439603C4.14896 0.00439603 3.81085 0.0700065 3.4954 0.197481C3.17994 0.324956 2.8933 0.511799 2.65186 0.747341C2.41042 0.982884 2.21889 1.26251 2.08823 1.57026C1.95756 1.87802 1.89031 2.20786 1.89031 2.54097C1.89031 3.91257 2.99884 5.02919 4.39578 5.07315ZM4.49582 9.53963C4.49582 10.3925 4.68508 11.2014 5.02756 11.9311C3.7568 12.063 2.43196 11.7992 1.45861 11.175C0.0346311 10.2518 0.0346311 8.74832 1.45861 7.82513C2.42294 7.19209 3.78383 6.93711 5.06361 7.07779C4.6941 7.81634 4.49582 8.65161 4.49582 9.53963ZM9.51488 12.1949C9.43704 12.1861 9.35841 12.1861 9.28056 12.1949C8.47921 12.1686 7.71978 11.8392 7.163 11.2763C6.60623 10.7135 6.2958 9.96135 6.29742 9.17914C6.30643 7.50861 7.68535 6.1546 9.40673 6.1546C11.1191 6.1546 12.507 7.50861 12.507 9.17914C12.5065 9.96223 12.1942 10.7145 11.6359 11.2772C11.0777 11.8398 10.3171 12.1689 9.51488 12.1949ZM6.58582 14.0149C5.22493 14.9029 5.22493 16.3624 6.58582 17.2417C8.13597 18.2528 10.6775 18.2528 12.2276 17.2417C13.5885 16.3536 13.5885 14.8941 12.2276 14.0149C10.6865 13.0038 8.14498 13.0038 6.58582 14.0149Z" fill="#045B62" /> </svg>
											</div>
										</div>
										<p><strong>Total Clients</strong></p>
									</div>
									<div class="lower_part_summary"><span class="count_of_staff">{{ $clients }}</span></div>
								</div>
								<div class="card_body_summary_count"><span class="count_today_label">Today:</span><span class="staff_count">15</span></div>
							</div>
						</div>
					</div>
					<div class="card summary">
						<div class="card-body">
							<div class="card_body_img_container"><img src="{{ asset('img/dog.png') }}"></div>
							<div class="card_info_container">
								<div class="card_body_summary">
									<div class="upper_part_summary">
										<div class="staff_icon_container">
											<div class="staff_icon">
												<svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
													<path d="M13.1616 0H5.61962C2.34362 0 0.390625 1.953 0.390625 5.229V12.771C0.390625 15.3 1.55162 17.037 3.59462 17.694C4.18862 17.901 4.87262 18 5.61962 18H13.1616C13.9086 18 14.5926 17.901 15.1866 17.694C17.2296 17.037 18.3906 15.3 18.3906 12.771V5.229C18.3906 1.953 16.4376 0 13.1616 0ZM17.0406 12.771C17.0406 14.697 16.2846 15.912 14.7636 16.416C13.8906 14.697 11.8206 13.473 9.39062 13.473C6.96062 13.473 4.89963 14.688 4.01763 16.416H4.00862C2.50563 15.93 1.74062 14.706 1.74062 12.78V5.229C1.74062 2.691 3.08162 1.35 5.61962 1.35H13.1616C15.6996 1.35 17.0406 2.691 17.0406 5.229V12.771Z" fill="#045B62" />
													<path d="M9.39242 5.4C7.61042 5.4 6.17042 6.84 6.17042 8.622C6.17042 10.404 7.61042 11.853 9.39242 11.853C11.1744 11.853 12.6144 10.404 12.6144 8.622C12.6144 6.84 11.1744 5.4 9.39242 5.4Z" fill="#045B62" /> </svg>
											</div>
										</div>
										<p><strong>Total Pets</strong></p>
									</div>
									<div class="lower_part_summary"><span class="count_of_staff">{{ $pets }}</span></div>
								</div>
								<div class="card_body_summary_count"><span class="count_today_label">Today:</span><span class="staff_count">1304</span></div>
							</div>
						</div>
					</div>
					<div class="card summary">
						<div class="card-body">
							<div class="card_body_img_container appointments"><img src="{{ asset('assets/img/image%208.png') }}"></div>
							<div class="card_info_container">
								<div class="card_body_summary">
									<div class="upper_part_summary">
										<div class="staff_icon_container">
											<div class="staff_icon">
												<svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
													<path d="M14.1406 2.00386V0.650602C14.1406 0.29494 13.8006 0 13.3906 0C12.9806 0 12.6406 0.29494 12.6406 0.650602V1.95181H6.14062V0.650602C6.14062 0.29494 5.80062 0 5.39062 0C4.98063 0 4.64062 0.29494 4.64062 0.650602V2.00386C1.94062 2.22072 0.630625 3.61735 0.430625 5.6906C0.410625 5.94217 0.650625 6.15036 0.930625 6.15036H17.8506C18.1406 6.15036 18.3806 5.93349 18.3506 5.6906C18.1506 3.61735 16.8406 2.22072 14.1406 2.00386ZM17.3906 7.45157H1.39062C0.840625 7.45157 0.390625 7.84193 0.390625 8.31904V13.6627C0.390625 16.2651 1.89062 18 5.39062 18H13.3906C16.8906 18 18.3906 16.2651 18.3906 13.6627V8.31904C18.3906 7.84193 17.9406 7.45157 17.3906 7.45157ZM12.2306 11.919L11.7306 12.3614H11.7206L8.69063 14.9899C8.56063 15.1027 8.29063 15.2241 8.10063 15.2414L6.75062 15.4149C6.26062 15.4757 5.92063 15.172 5.99063 14.7557L6.18062 13.5759C6.21063 13.4111 6.34062 13.1855 6.47062 13.0641L9.51062 10.4357L10.0106 9.99325C10.3406 9.70699 10.7106 9.4988 11.1106 9.4988C11.4506 9.4988 11.8206 9.63759 12.2306 9.99325C13.1306 10.774 12.8406 11.3899 12.2306 11.919Z" fill="#045B62" /> </svg>
											</div>
										</div>
										<p><strong>Appointments</strong></p>
									</div>
									<div class="lower_part_summary"><span class="count_of_staff">{{ $appointmentCount }}</span></div>
								</div>
								<div class="card_body_summary_count"><span class="count_today_label">Completed Today:</span><span class="staff_count">2</span></div>
							</div>
						</div>
					</div>
				</div>
				<div id="dashboard_table_container" class="dashboard_table_container">
					<div class="dashboard_table_header">
						<h1>Appointments</h1>
						<button class="btn dashboard_view_btn" type="button"><span class="dashboard_view_btn_base">View</span></button>
					</div>
					<div class="container_header">
                                <form action="" id="approvedForm">
                                    <div class="left_part_product_header">
                                        <div class="search_container">
                                            <input type="text" class="search_input" name="qApproved"
                                            value="{{ request('qApproved') }}" placeholder="Search Appointment">
                                            <input type="hidden" id="pageForm" name="page"
                                            value="{{ request('page') }}">
                                            <input type="hidden" id="perPageForm" name="perPage"
                                                value="{{ request('perPage') }}">

                                        </div>
                                        <button type="submit" form="approvedForm" class="btn filter_btn fw-bold"><i class="fa-solid fa-magnifying-glass"></i>Search</button>
                                        <div class="dropdown">
                                            <button class="filter_btn dropdown-toggle fw-bold" type="button"
                                                id="dropdownMenuButton1" data-bs-toggle="dropdown" data-bs-auto-close="false"
                                                aria-expanded="false"><div class="filter_btn_base"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="26" viewBox="0 0 24 26" fill="none">
                                                  <g clip-path="url(#clip0_3674_15869)" filter="url(#filter0_d_3674_15869)">
                                                    <path d="M4 4H20V6.172C19.9999 6.70239 19.7891 7.21101 19.414 7.586L15 12V19L9 21V12.5L4.52 7.572C4.18545 7.20393 4.00005 6.7244 4 6.227V4Z" stroke="#1C1C1C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                  </g>
                                                  <defs>
                                                    <filter id="filter0_d_3674_15869" x="-2" y="0" width="28" height="28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                                      <feOffset dy="2"/>
                                                      <feGaussianBlur stdDeviation="1"/>
                                                      <feComposite in2="hardAlpha" operator="out"/>
                                                      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                                                      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_3674_15869"/>
                                                      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_3674_15869" result="shape"/>
                                                    </filter>
                                                    <clipPath id="clip0_3674_15869">
                                                      <rect width="24" height="24" fill="white"/>
                                                    </clipPath>
                                                  </defs>
                                              </svg>Filter By</div>
                                                
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-item ">
                                                  <div class="form-check form-switch">
                                                    <!-- Size of the default switch will increase 1.8 times -->
                                                    <input class="form-check-input my-3"
                                                          {{ request()->input('approvedCheck') == 'on' ? 'checked' : '' }}
                                                           name ="approvedCheck" 
                                                           type="checkbox" 
                                                           role="switch" 
                                                           id="approvedCheck" 
                                                           style="transform: scale(1.5);"
                                                           >
                                                    <label class="form-check-label fs-6 my-1" 
                                                           for="approvedCheck" 
                                                           >Approved</label>
                                                  </div>
                                          
                                                </li>
                                                <li class="dropdown-item ">
                                                  <div class="form-check form-switch">
                                                    <!-- Size of the default switch will increase 1.8 times -->
                                                    <input class="form-check-input my-3"
                                                          {{ request()->input('completedCheck') == 'on' ? 'checked' : '' }}
                                                           name ="completedCheck" 
                                                           type="checkbox" 
                                                           role="switch" 
                                                           id="completedCheck" 
                                                           style="transform: scale(1.5);"
                                                           >
                                                  
                                                    <label class="form-check-label fs-6 my-1" 
                                                           for="completedCheck" 
                                                           >Completed</label>
                                                  </div>
                                                </li>
                                                <li class="dropdown-item ">
                                                  <div class="form-check form-switch">
                                                    <!-- Size of the default switch will increase 1.8 times -->
                                                    <input class="form-check-input my-3"
                                                          {{ request()->input('dogCheck') == 'on' ? 'checked' : '' }}
                                                           name ="dogCheck" 
                                                           type="checkbox" 
                                                           role="switch" 
                                                           id="dogCheck" 
                                                           style="transform: scale(1.5);"
                                                           >
                                                  
                                                    <label class="form-check-label fs-6 my-1" 
                                                           for="dogCheck" 
                                                           >Dog</label>
                                                  </div>
                                          
                                                </li>
                                                <li class="dropdown-item ">
                                                    <div class="form-check form-switch">
                                                      <!-- Size of the default switch will increase 1.8 times -->
                                                      <input class="form-check-input my-3"
                                                            {{ request()->input('catCheck') == 'on' ? 'checked' : '' }}
                                                             name ="catCheck" 
                                                             type="checkbox" 
                                                             role="switch" 
                                                             id="catCheck" 
                                                             style="transform: scale(1.5);"
                                                             >
                                                    
                                                      <label class="form-check-label fs-6 my-1" 
                                                             for="catCheck" 
                                                             >Cat</label>
                                                    </div>
                                            
                                                  </li>
                                            </ul>
                                        </div>
                                        
                                        <div class="dropdown">
                                            <button class="filter_btn dropdown-toggle fw-bold" type="button"
                                                id="dropdownMenuButton1" data-bs-toggle="dropdown" data-bs-auto-close="false"
                                                aria-expanded="false"><div class="filter_btn_base"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g clip-path="url(#clip0_6770_4127)">
    <path d="M4 6H13M4 12H11M4 18H11M15 15L18 18M18 18L21 15M18 18V6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_6770_4127">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg> Sort By</div>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-item ">
                                                    <input class="checkbox me-1" type="radio" id = "radio1"
                                                        name="sortItems"{{ request()->input('sortItems', '0') == '0' ? 'checked' : '' }}  value="0">
                                                    <label class="form-check-label ms-1 fs-6" for="radio1">
                                                        Appointment
                                                </li>
                                                <li class="dropdown-item">
                                                    <input class="checkbox me-1" type="radio" id = "radio2"
                                                        name="sortItems" {{ request()->input('sortItems') == '1' ? 'checked' : '' }} value="1">
                                                    <label class="form-check-label ms-1 fs-6" for="radio2">
                                                        Status
                                                </li>
                                                <li class="dropdown-item">
                                                    <input class="checkbox me-1" type="radio" id = "radio3"
                                                        name="sortItems" {{ request()->input('sortItems') == '2' ? 'checked' : '' }} value="2">
                                                    <label class="form-check-label ms-1 fs-6" for="radio3">
                                                        Patient
                                                </li>
                                                <li class="dropdown-item">
                                                    <input class="checkbox me-1" type="radio" id = "radio4"
                                                        name="sortItems" {{ request()->input('sortItems') == '3' ? 'checked' : '' }} value="3">
                                                    <label class="form-check-label ms-1 fs-6" for="radio4">
                                                        Client
                                                </li>
                                                <li>
                                                  <li class="dropdown-item">
                                                    <input class="checkbox me-1" type="radio" id = "radio5"
                                                        name="sortItems" {{ request()->input('sortItems') == '4' ? 'checked' : '' }} value="4">
                                                    <label class="form-check-label ms-1 fs-6" for="radio5">
                                                        Surgery Type
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider me-2 ms-2">
                                                </li>
                                                <li class="dropdown-item">
                                                    <input class="checkbox me-1" type="radio" id = "radio6"
                                                        name="sortOrder" {{ request()->input('sortOrder') == '0' ? 'checked' : '' }} value="0">
                                                    <label class="form-check-label ms-1 fs-6" for="radio6">
                                                        Ascending
                                                </li>
                                                <li class="dropdown-item">
                                                    <input class="checkbox me-1" type="radio" id = "radio7"
                                                        name="sortOrder" {{ request()->input('sortOrder', '1') == '1' ? 'checked' : '' }} value="1">
                                                    <label class="form-check-label ms-1 fs-6" for="radio7">
                                                        Descending
                                                </li>
                                                <li class="dropdown-item ">
                                                  <div class="row">
                                                      <div class="col-md-5">
                                                          <button type = "reset" class="btn cancel_filter btn-sm me-3"><div class="cancel_filter_base">Cancel</div></button>
                                                      </div>
                                                      <div class="col-md-5 text-center">
                                                          <button type="submit" form="approvedForm" class="btn apply_filter btn-sm ms-3"><div class="apply_filter_base">Apply Filter</div></button>
                                                      </div>
                                                  </div>
                                              </li>
                                            </ul>
                                        </div>
          
                                    </div>
                                </form>


                            </div>
					<div class="w-100" style="overflow: auto;">
						<table class="table table-responsive mt-3 w-100">
							<thead>
								<tr>
									<th>
										<input id="SelectAllClients" type="radio" class="checkbox">
									</th>
									<th>No.</th>
									<th>Client</th>
									<th>Patient Info</th>
									<th>Appointment Date</th>
									<th>Appointment Time</th>
									<th>Surgery Type</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody id="dashboard_appointments_table_body">
							@foreach ($appointment_approved as $index => $appointment)
								<tr>
								<td > <input type="radio" class="checkbox"></td> 
								<td >{{ $index + 1 }}</td>
								<td >{{ $appointment->clients->first_name }} {{ $appointment->clients->last_name }}</td> 
								<td >{{ $appointment['petType'] }} ({{ $appointment['breed'] }})</td>
								<td >{{ $appointment['appointmentDate'] }}</td>
								<td>{{ \Carbon\Carbon::parse($appointment['appointmentTime'])->format('g:ia') }}</td>
								<td >{{ $appointment['appointmentType'] }}</td>
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
                                                                data-id="{{ $appointment->id }}"
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
                                                                data-id="{{ $appointment->id }}"><svg
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
					</div>
					
					<div class="pagination">
						<div class="pagination-menu">
                                    <span>Go to:</span>
                                    <select class="paginationGoToSelect" onchange="changePage(this)">
                                        @for ($i = 1; $i <= $appointment_approved->lastPage(); $i++)
                                            <option value="{{ $i }}"
                                                {{ request()->input('page') == $i ? 'selected' : '' }}>
                                                {{ $i }}
                                            </option>
                                        @endfor
                                    </select>
  
                            </div>
						<div class="pagination-pages">
							{{ $appointment_approved->appends([
				
							  ])->links() }}
						</div>
						
						<div class="pagination-items">
                                    <span>Show:</span>
                                    <select class="paginationItemsSelect" onchange="changeItemsPerPage(this)">
                                        <option value="5"
                                            {{ request()->input('perPage') == 5 ? 'selected' : '' }}>5
                                            items</option>
                                        <option value="10"
                                            {{ request()->input('perPage') == 10 ? 'selected' : '' }}>10
                                            items</option>
                                        <option value="25"
                                            {{ request()->input('perPage') == 25 ? 'selected' : '' }}>25
                                            items</option>
                                        <option value="100"
                                            {{ request()->input('perPage') == 100 ? 'selected' : '' }}>
                                            100 items</option>
  
                                    </select>
                                </div>
					</div>
				</div>
				<div id="inventory_table_container" class="dashboard_table_container">
					<div class="dashboard_table_header">
						<h1>Inventory</h1>
						<button class="btn dashboard_view_btn" type="button"><span class="dashboard_view_btn_base">View</span></button>
					</div>

					<div class="container_header">
                          <form action="" method="GET" role="search" id="searchForm">
                            <div class="left_part_product_header">
                              <div class="search_container">
                                  <input type="text" class="search_input" name="q"
                                      value="{{ request('q') }}" placeholder="Search Client">
                                  <!-- Other input fields or elements for pagination -->
                                  <input type="hidden" id="pageForm" name="page"
                                      value="{{ request('page') }}">
                                  <input type="hidden" id="perPageForm" name="perPage"
                                      value="{{ request('perPage') }}">

                              </div>
                              <button type="submit" form="searchForm" class="btn filter_btn">
                                  <i class="fa-solid fa-magnifying-glass" style="size: 56px"></i>
                                  Search
                                </button>
                                <div class="dropdown">
                                  <button class="filter_btn dropdown-toggle" type="button"
                                      id="dropdownMenuButton1" data-bs-toggle="dropdown" data-bs-auto-close="false"
                                      aria-expanded="false"><div class="filter_btn_base"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="26" viewBox="0 0 24 26" fill="none">
                                        <g clip-path="url(#clip0_3674_15869)" filter="url(#filter0_d_3674_15869)">
                                          <path d="M4 4H20V6.172C19.9999 6.70239 19.7891 7.21101 19.414 7.586L15 12V19L9 21V12.5L4.52 7.572C4.18545 7.20393 4.00005 6.7244 4 6.227V4Z" stroke="#1C1C1C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                          <filter id="filter0_d_3674_15869" x="-2" y="0" width="28" height="28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                            <feOffset dy="2"/>
                                            <feGaussianBlur stdDeviation="1"/>
                                            <feComposite in2="hardAlpha" operator="out"/>
                                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_3674_15869"/>
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_3674_15869" result="shape"/>
                                          </filter>
                                          <clipPath id="clip0_3674_15869">
                                            <rect width="24" height="24" fill="white"/>
                                          </clipPath>
                                        </defs>
                                    </svg>Filter By</div>
                                      
                                  </button>
                                  <ul class="dropdown-menu">
                                      <li class="dropdown-item ">
                                        <div class="form-check form-switch">
                                          <!-- Size of the default switch will increase 1.8 times -->
                                          <input class="form-check-input my-3"
                                                {{ request()->input('medSwitch') == 'on' ? 'checked' : '' }}
                                                 name ="medSwitch" 
                                                 type="checkbox" 
                                                 role="switch" 
                                                 id="medSwitch" 
                                                 style="transform: scale(1.5);"
                                                 >
                                          <label class="form-check-label fs-6 my-1" 
                                                 for="medSwitch" 
                                                 >Medicine</label>
                                        </div>
                                
                                      </li>
                                      <li class="dropdown-item ">
                                        <div class="form-check form-switch">
                                          <!-- Size of the default switch will increase 1.8 times -->
                                          <input class="form-check-input my-3"
                                                {{ request()->input('vaxSwitch') == 'on' ? 'checked' : '' }}
                                                 name ="vaxSwitch" 
                                                 type="checkbox" 
                                                 role="switch" 
                                                 id="vaxSwitch" 
                                                 style="transform: scale(1.5);"
                                                 >
                                        
                                          <label class="form-check-label fs-6 my-1" 
                                                 for="vaxSwitch" 
                                                 >Vaccine</label>
                                        </div>
                                      </li>
                                      <li class="dropdown-item ">
                                        <div class="form-check form-switch">
                                          <!-- Size of the default switch will increase 1.8 times -->
                                          <input class="form-check-input my-3"
                                                {{ request()->input('vitSwitch') == 'on' ? 'checked' : '' }}
                                                 name ="vitSwitch" 
                                                 type="checkbox" 
                                                 role="switch" 
                                                 id="vitSwitch" 
                                                 style="transform: scale(1.5);"
                                                 >
                                        
                                          <label class="form-check-label fs-6 my-1" 
                                                 for="vitSwitch" 
                                                 >Vitamin</label>
                                        </div>
                                
                                      </li>
                                  </ul>
                              </div>



                              <div class="dropdown">
                                  <button class="filter_btn dropdown-toggle" type="button"
                                      id="dropdownMenuButton1" data-bs-toggle="dropdown" data-bs-auto-close="false"
                                      aria-expanded="false"><div class="filter_btn_base"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g clip-path="url(#clip0_6770_4127)">
    <path d="M4 6H13M4 12H11M4 18H11M15 15L18 18M18 18L21 15M18 18V6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_6770_4127">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg> Sort By</div>
                                  </button>
                                  <ul class="dropdown-menu">
                                      <li class="dropdown-item ">
                                          <input class="checkbox me-1" type="radio" id = "radio1"
                                              name="sortItems"{{ request()->input('sortItems', '0') == '0' ? 'checked' : '' }}  value="0">
                                          <label class="form-check-label ms-1 fs-6" for="radio1">
                                              Product Name
                                      </li>
                                      <li class="dropdown-item">
                                          <input class="checkbox me-1" type="radio" id = "radio2"
                                              name="sortItems" {{ request()->input('sortItems') == '1' ? 'checked' : '' }} value="1">
                                          <label class="form-check-label ms-1 fs-6" for="radio2">
                                              Category
                                      </li>
                                      <li class="dropdown-item">
                                          <input class="checkbox me-1" type="radio" id = "radio3"
                                              name="sortItems" {{ request()->input('sortItems') == '2' ? 'checked' : '' }} value="2">
                                          <label class="form-check-label ms-1 fs-6" for="radio3">
                                              On Hand
                                      </li>
                                      <li class="dropdown-item">
                                          <input class="checkbox me-1" type="radio" id = "radio4"
                                              name="sortItems" {{ request()->input('sortItems') == '3' ? 'checked' : '' }} value="3">
                                          <label class="form-check-label ms-1 fs-6" for="radio4">
                                              Date Stocked
                                      </li>
                                      <li>
                                        <li class="dropdown-item">
                                          <input class="checkbox me-1" type="radio" id = "radio5"
                                              name="sortItems" {{ request()->input('sortItems') == '4' ? 'checked' : '' }} value="4">
                                          <label class="form-check-label ms-1 fs-6" for="radio5">
                                              Expiration Date
                                      </li>
                                      <li>
                                          <hr class="dropdown-divider">
                                      </li>
                                      <li class="dropdown-item">
                                          <input class="checkbox me-1" type="radio" id = "radio6"
                                              name="sortOrder" {{ request()->input('sortOrder', '0') == '0' ? 'checked' : '' }} value="0">
                                          <label class="form-check-label ms-1 fs-6" for="radio6">
                                              Ascending
                                      </li>
                                      <li class="dropdown-item">
                                          <input class="checkbox me-1" type="radio" id = "radio7"
                                              name="sortOrder" {{ request()->input('sortOrder') == '1' ? 'checked' : '' }} value="1">
                                          <label class="form-check-label ms-1 fs-6" for="radio7">
                                              Descending
                                      </li>
                                      <li class="dropdown-item ">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <button class="btn cancel_filter btn-sm me-3"><div class="cancel_filter_base">Cancel</div></button>
                                            </div>
                                            <div class="col-md-5 text-center">
                                                <button type="submit" form="searchForm" class="btn apply_filter btn-sm ms-3"><div class="apply_filter_base">Apply Filter</div></button>
                                            </div>
                                        </div>
                                    </li>
                                  </ul>
                              </div>



                          </div>

                          </form>
       
                            <div class="right_part_product_header">
                                <div class="inventory_header_right_btn_icon_container"><button
                                        class="btn inventory_header_left_btn" type="button"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <g clip-path="url(#clip0_1917_11682)">
                                                <path
                                                    d="M13.5 6.5L17.5 10.5M4 20.0001H8L18.5 9.50006C19.0304 8.96963 19.3284 8.2502 19.3284 7.50006C19.3284 6.74991 19.0304 6.03049 18.5 5.50006C17.9696 4.96963 17.2501 4.67163 16.5 4.67163C15.7499 4.67163 15.0304 4.96963 14.5 5.50006L4 16.0001V20.0001Z"
                                                    stroke="black" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1917_11682">
                                                    <rect width="24" height="24" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg></button></div>
                                <div class="inventory_header_right_btn_icon_container"><button
                                        class="btn inventory_header_right_btn" type="button"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <g clip-path="url(#clip0_3686_18447)">
                                                <path
                                                    d="M19 8C19.5304 8 20.0391 7.78929 20.4142 7.41421C20.7893 7.03914 21 6.53043 21 6C21 5.46957 20.7893 4.96086 20.4142 4.58579C20.0391 4.21071 19.5304 4 19 4H5C4.46957 4 3.96086 4.21071 3.58579 4.58579C3.21071 4.96086 3 5.46957 3 6C3 6.53043 3.21071 7.03914 3.58579 7.41421C3.96086 7.78929 4.46957 8 5 8M19 8H5M19 8V18C19 18.5304 18.7893 19.0391 18.4142 19.4142C18.0391 19.7893 17.5304 20 17 20H7C6.46957 20 5.96086 19.7893 5.58579 19.4142C5.21071 19.0391 5 18.5304 5 18V8M10 12H14"
                                                    stroke="black" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_3686_18447">
                                                    <rect width="24" height="24" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg></button></div>
                            </div>
                        </div>
					<div class="w-100" style="overflow: auto;">
					<table id="dashboard_table" class="table table-responsive w-100 mt-3">
						<thead>
							<tr>
								<th>
									<input id="SelectAllProducts" type="radio" class="checkbox">
								</th>
								<th>No.</th>
								<th>Product Name</th>
								<th>Category</th>
								<th>Stock</th>
								<th>Date Stocked</th>
								<th>Expiration Date</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody id="dashboard_product_table_body" class="dashboard_table_body">
							@foreach ($products as $product)
                            <tr>
							<td><input type="radio" class="checkbox"></td>
                            <td >{{ $loop->index + 1 }}</td>
                            <td >{{ $product->item_name }}</td> 
							<td>{{ $product->item_name }}</td>
							<td>{{ $product->product_type }}</td>
							<td>{{ $product->info_quantity }}</td>
							<td>{{ $product->date_stocked }}</td>
							<td>{{ $product->expiration_date }}</td>
							<td class="dropdown button-action">
							<button class="dropbtn" id="dropbtn" style="background-color: transparent; border:none;" aria-expanded="false" data-bs-toggle="dropdown"
                                                            type="button"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
  <path d="M9 5C7.61929 5 6.5 3.88071 6.5 2.5C6.5 1.11929 7.61929 -6.03528e-08 9 0C10.3807 6.03528e-08 11.5 1.11929 11.5 2.5C11.5 3.88071 10.3807 5 9 5Z" fill="#045B62"/>
  <path d="M9 11.5C7.61929 11.5 6.5 10.3807 6.5 9C6.5 7.61929 7.61929 6.5 9 6.5C10.3807 6.5 11.5 7.61929 11.5 9C11.5 10.3807 10.3807 11.5 9 11.5Z" fill="#045B62"/>
  <path d="M9 18C7.61929 18 6.5 16.8807 6.5 15.5C6.5 14.1193 7.61929 13 9 13C10.3807 13 11.5 14.1193 11.5 15.5C11.5 16.8807 10.3807 18 9 18Z" fill="#045B62"/>
</svg></button>
                                        <div class="dropdown-content"><div class="button-group">
                                            <button
		            data-action="AddStock" 
                                            data-product-type="{{ $product->product_type }}"
                                            data-product-id="{{ $product->id }}"
                                                class="btn border-0 addStock"style="color:gray"><div class="action_button_text"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
  <path d="M7 10H13M10 7V13M1 10C1 11.1819 1.23279 12.3522 1.68508 13.4442C2.13738 14.5361 2.80031 15.5282 3.63604 16.364C4.47177 17.1997 5.46392 17.8626 6.55585 18.3149C7.64778 18.7672 8.8181 19 10 19C11.1819 19 12.3522 18.7672 13.4442 18.3149C14.5361 17.8626 15.5282 17.1997 16.364 16.364C17.1997 15.5282 17.8626 14.5361 18.3149 13.4442C18.7672 12.3522 19 11.1819 19 10C19 8.8181 18.7672 7.64778 18.3149 6.55585C17.8626 5.46392 17.1997 4.47177 16.364 3.63604C15.5282 2.80031 14.5361 2.13738 13.4442 1.68508C12.3522 1.23279 11.1819 1 10 1C8.8181 1 7.64778 1.23279 6.55585 1.68508C5.46392 2.13738 4.47177 2.80031 3.63604 3.63604C2.80031 4.47177 2.13738 5.46392 1.68508 6.55585C1.23279 7.64778 1 8.8181 1 10Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg> Add Stock</div></button>
                                                <button 
                                                data-action="View"
                                                data-product-type="{{ $product->product_type }}"
                                                data-product-id="{{ $product->id }}"
                                                class="btn border-0 viewButton"style="color:gray"><div class="action_button_text"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g clip-path="url(#clip0_6559_23708)">
    <path d="M10 12C10 12.5304 10.2107 13.0391 10.5858 13.4142C10.9609 13.7893 11.4696 14 12 14C12.5304 14 13.0391 13.7893 13.4142 13.4142C13.7893 13.0391 14 12.5304 14 12C14 11.4696 13.7893 10.9609 13.4142 10.5858C13.0391 10.2107 12.5304 10 12 10C11.4696 10 10.9609 10.2107 10.5858 10.5858C10.2107 10.9609 10 11.4696 10 12Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M21 12C18.6 16 15.6 18 12 18C8.4 18 5.4 16 3 12C5.4 8 8.4 6 12 6C15.6 6 18.6 8 21 12Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_6559_23708">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg> View</div></button>
                                                <button 
                                                data-action="Edit" id="editButton"
                                                data-product-type="{{ $product->product_type }}"
                                                data-product-id="{{ $product->id }}"
                                                class="btn border-0"style="color:gray"><div class="action_button_text"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g clip-path="url(#clip0_6559_23808)">
    <path d="M13.5 6.5L17.5 10.5M4 20.0001H8L18.5 9.50006C19.0304 8.96963 19.3284 8.2502 19.3284 7.50006C19.3284 6.74991 19.0304 6.03049 18.5 5.50006C17.9696 4.96963 17.2501 4.67163 16.5 4.67163C15.7499 4.67163 15.0304 4.96963 14.5 5.50006L4 16.0001V20.0001Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_6559_23808">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg> Edit</div></button>
                                                <button 
                                                data-action="Archive"
                                                class="btn border-0"style="color:gray"><div class="action_button_text"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18" fill="none">
  <path d="M17 5C17.5304 5 18.0391 4.78929 18.4142 4.41421C18.7893 4.03914 19 3.53043 19 3C19 2.46957 18.7893 1.96086 18.4142 1.58579C18.0391 1.21071 17.5304 1 17 1H3C2.46957 1 1.96086 1.21071 1.58579 1.58579C1.21071 1.96086 1 2.46957 1 3C1 3.53043 1.21071 4.03914 1.58579 4.41421C1.96086 4.78929 2.46957 5 3 5M17 5H3M17 5V15C17 15.5304 16.7893 16.0391 16.4142 16.4142C16.0391 16.7893 15.5304 17 15 17H5C4.46957 17 3.96086 16.7893 3.58579 16.4142C3.21071 16.0391 3 15.5304 3 15V5M8 9H12" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg> Archive</div></button>
                                        </div>
                                            
                                            

                                        </td>
                            
                            </tr>
                        @endforeach 
                        </tbody>
					</table>
					</div>
					
					<div class="pagination">
					<div class="pagination-menu">
                                    <span>Go to:</span>
                                    <select class="paginationGoToSelect" onchange="changePage(this)">
                                        @for ($i = 1; $i <= $products->lastPage(); $i++)
                                            <option value="{{ $i }}"
                                                {{ request()->input('page') == $i ? 'selected' : '' }}>
                                                {{ $i }}
                                            </option>
                                        @endfor
                                    </select>

                                </div>
						<div class="pagination-pages text-center">
							{{ $products->appends([
				
							  ])->links() }}
						</div>
						<div class="pagination-items">
                                    <span>Show:</span>
                                    <select class="paginationItemsSelect" onchange="changeItemsPerPage(this)">
                                        <option value="5"
                                            {{ request()->input('perPage') == 5 ? 'selected' : '' }}>5
                                            items</option>
                                        <option value="10"
                                            {{ request()->input('perPage') == 10 ? 'selected' : '' }}>10
                                            items</option>
                                        <option value="25"
                                            {{ request()->input('perPage') == 25 ? 'selected' : '' }}>25
                                            items</option>
                                        <option value="100"
                                            {{ request()->input('perPage') == 100 ? 'selected' : '' }}>
                                            100 items</option>

                                    </select>
                                </div>
					
					</div>
				</div>
			</div>
		</div>
	</main>
	<div class="modal fade" role="dialog" tabindex="-1" id="add_patient_modal">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content add_client_modal">
				<div class="modal-header">
					<h1 class="modal-title">Add Client</h1>
					<button class="btn-close" id="close_client_modal" aria-label="Close" data-bs-dismiss="modal" type="button"></button>
				</div>
				<div class="modal-body" style="width:100%;">
					<form action="{{ route('dashboard.client.store') }}" method="POST" class="add_client" id="add_client_form">
                        @csrf
						<div class="mb-3 input_container">
							<div class="new_input_row">
								<div class="form-floating" style="width:100%;">
									<input class="form-control" type="text" id="first_name" name="first_name" data-id="first_name" placeholder="First Name">
									<label class="form-label" for="first_name">First Name<span>&nbsp;*</span></label>
									<div class="error-message" id="error-first_name"><span>• Please enter client first name.</span></div>
									<div id="guide-first_name" class="guide-message"><span>• Please enter client first name.</span></div>
								</div>
								<div class="form-floating" style="width:100%;">
									<input class="form-control" type="text" id="middle_name" name="middle_name" data-id="middle_name" placeholder="Middle Name">
									<label class="form-label" for="middle_name">Middle Name<span>&nbsp;*</span></label>
									<div class="error-message" id="error-middle_name"><span>• Please enter client middle name.</span></div>
									<div id="guide-middle_name" class="guide-message"><span>• Please enter client middle name.</span></div>
								</div>
							</div>
							<div class="new_input_row">
								<div class="form-floating" style="width:100%;">
									<input class="form-control" type="text" id="last_name" name="last_name" data-id="last_name" placeholder="Last Name">
									<label class="form-label" for="last_name">Last Name<span>&nbsp;*</span></label>
									<div id="error-last_name" class="error-message"><span>• Please enter client last name.</span></div>
									<div id="guide-last_name" class="guide-message"><span>• Please enter client last name.</span></div>
								</div>
								<div class="form-floating" style="width:100%;">
									<select id="suffix" class="form-select" name="suffix" data-id="suffix" onchange="handleSuffixChange()">
										<option value="" selected>Select a Suffix</option>
										<option value="Jr">Jr</option>
										<option value="Sr">Sr</option>
										<option value="II">II</option>
										<option value="Other">Other</option>
									</select>
									<label class="form-label" for="suffix">Suffix</label>
									<div id="error-suffix" class="error-message"><span>Please select a suffix.</span></div>
								</div>
								<div id="specific_suffix" class="form-floating" style="width: 100%;display: none;">
									<input class="form-control" type="text" id="specify_suffix" name="specify_suffix" data-id="specify_suffix" placeholder="Specify Suffix">
									<label class="form-label" for="specify_suffix">Specify suffix</label>
									<div id="error-specify_suffix" class="error-message"><span>Please specify suffix.</span></div>
								</div>
							</div>
							<div class="form-floating" style="width:100%;">
								<input class="form-control" id="client_birthdate" name="birthdate" data-id="client_birthdate" placeholder="Birthdate" type="date">
								<label class="form-label" for="client_birthdate">Birthdate<span>&nbsp;*</span></label>
								<div class="error-message" id="error-client_birthdate"><span>• Please click the calendar icon to select client birth date.</span></div>
								<div id="guide-client_birthdate" class="guide-message"><span>• Please click the calendar icon to select client birth date.</span></div>
							</div>
							<div class="form-floating" style="width:100%;">
								<input class="form-control" type="text" id="client_address" data-id="client_address" placeholder="Address">
								<label class="form-label" for="client_address">Address<span>&nbsp;*</span></label>
								<div class="error-message" id="error-client_address"><span>• Please enter client address.</span></div>
								<div id="guide-client_address" class="guide-message"><span>• Please enter client address.</span></div>
							</div>
							<div class="form-floating" style="width:100%;">
								<input class="form-control" type="email" id="client_email" name="email" data-id="client_email" placeholder="Email" required="">
								<label class="form-label" for="client_email">Email Address<span>&nbsp;*</span></label>
								<div class="error-message" id="error-client_email"><span>• Please enter Email Address of the client.</span><span>• Invalid email format.</span></div>
								<div id="guide-client_email" class="guide-message"><span>• Please enter Email Address of the client.</span><span>•&nbsp;(e.g. pogiako@gmail.com/pogiako@yahoo.com)</span></div>
							</div>
							<div class="form-floating" style="width:100%;">
								<input class="form-control" type="number" id="user_phone" name="phone" data-id="user_phone" placeholder="Phone Number">
								<label class="form-label" for="user_phone">Phone Number<span>&nbsp;*</span></label>
								<div class="error-message" id="error-user_phone"><span>• Please enter 1-11 digits only. (e.g., 09172839117)</span><span>• Please enter a valid phone number.</span></div>
								<div id="guide-user_phone" class="guide-message"><span>• Please enter 1-11 digits only. (e.g., 09172839117)</span></div>
							</div>
						</div>
				</div>
				<div class="modal-footer add_product_button">
					<button class="btn clear_form" id="clear_form" aria-label="Clear Form" role="button" type="button"><span class="clear_form_base">Clear Form</span></button>
					<button class="btn submit_product" type="submit"><span class="submit_product_base">Submit</span></button>
				</div>
                </form>
			</div>
		</div>
	</div>
	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/bs-init.js') }}"></script>
	<script src="{{ asset('assets/js/dashboard.js') }}"></script>
	<script src="{{ asset('assets/js/sidebar.js') }}"></script>

	<script>
            var SelectAllClients = document.getElementById("SelectAllClients");

            SelectAllClients.addEventListener("click", function () {
    var tableBody = document.getElementById('dashboard_appointments_table_body');
    var rowCheckboxes = tableBody.querySelectorAll("input[type='radio']");

    rowCheckboxes.forEach(function (checkbox) {
        checkbox.checked = !checkbox.checked; // Toggle the state
    });

});

var SelectAllProducts = document.getElementById("SelectAllProducts");

SelectAllProducts.addEventListener("click", function () {
var tableBody = document.getElementById('dashboard_product_table_body');
var rowCheckboxes = tableBody.querySelectorAll("input[type='radio']");

rowCheckboxes.forEach(function (checkbox) {
checkbox.checked = !checkbox.checked; // Toggle the state
});

});
    </script>

<script>
        function changePage(select) {
            let pageNumber = select.value;
            document.getElementById('pageForm').value = pageNumber; // Update page hidden input
            document.getElementById('approvedForm').submit(); // Submit the form after updating values
        }
  
        function changeItemsPerPage(select) {
            let itemsPerPage = select.value;
            document.getElementById('perPageForm').value = itemsPerPage; // Update perPage hidden input
            document.getElementById('pageForm').value = 1; // Reset page to 1 when changing items per page
            document.getElementById('approvedForm').submit(); // Submit the form after updating values
        }
  
        function submitForm() {
            document.getElementById('approvedForm').submit();
        }
      </script>
</body>

</html>