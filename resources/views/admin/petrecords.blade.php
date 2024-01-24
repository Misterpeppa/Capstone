<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
<meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin | Pet Records</title>
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
</head>

<body>
	<main class="d-flex flex-row container-fluid" style="padding: 0;"> @php $activeTab = 'emr'; // Set the active tab @endphp @include('includes.admin_header')
		<div class="content">
			<div id="rectangle" class="rectangle"><button class="btn notification" id="notification" type="button"><span class="notification_base"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="18" viewbox="0 0 15 18" fill="none"><path d="M2.29482 10.4791L2.93736 10.866L2.93903 10.8632L2.29482 10.4791ZM1.38031 11.998L0.737787 11.6112L0.737673 11.6113L1.38031 11.998ZM2.23916 14.328L1.99871 15.0385L2.00149 15.0394L2.23916 14.328ZM12.7918 14.328L12.5564 13.6159L12.5542 13.6167L12.7918 14.328ZM13.6507 11.998L14.2938 11.6121L14.2932 11.6112L13.6507 11.998ZM12.7362 10.4791L12.0864 10.854L12.0937 10.866L12.7362 10.4791ZM8.99065 2.00199L8.78522 2.7233C9.0594 2.80139 9.35415 2.71728 9.54583 2.50625C9.7375 2.29522 9.79296 1.99376 9.68894 1.72833L8.99065 2.00199ZM6.0483 2.00199L5.35001 1.72833C5.24599 1.99376 5.30145 2.29522 5.49313 2.50625C5.68481 2.71728 5.97955 2.80139 6.25374 2.7233L6.0483 2.00199ZM5.83359 16.3002L5.30286 16.8301L5.30326 16.8305L5.83359 16.3002ZM7.51948 1.02137C4.47306 1.02137 1.99811 3.49632 1.99811 6.54274H3.49811C3.49811 4.32475 5.30148 2.52137 7.51948 2.52137V1.02137ZM1.99811 6.54274V8.84096H3.49811V6.54274H1.99811ZM1.99811 8.84096C1.99811 8.99314 1.96284 9.22832 1.89124 9.48627C1.8197 9.74398 1.72858 9.96429 1.65061 10.0951L2.93903 10.8632C3.10759 10.5804 3.24311 10.2242 3.33658 9.88749C3.42999 9.551 3.49811 9.17386 3.49811 8.84096H1.99811ZM1.6523 10.0923L0.737787 11.6112L2.02284 12.3849L2.93735 10.866L1.6523 10.0923ZM0.737673 11.6113C0.34933 12.2568 0.264391 12.9889 0.507 13.6441C0.749283 14.2984 1.2894 14.7984 1.99871 15.0384L2.47961 13.6176C2.15512 13.5078 1.98351 13.3119 1.91366 13.1233C1.84415 12.9355 1.84668 12.6776 2.02295 12.3847L0.737673 11.6113ZM2.00149 15.0394C5.58318 16.236 9.44782 16.236 13.0295 15.0394L12.5542 13.6167C9.28099 14.7103 5.75001 14.7103 2.47682 13.6167L2.00149 15.0394ZM13.0272 15.0401C14.4485 14.5703 15.0644 12.8965 14.2938 11.6121L13.0076 12.3839C13.2867 12.849 13.0596 13.4496 12.5564 13.6159L13.0272 15.0401ZM14.2932 11.6112L13.3787 10.0923L12.0937 10.866L13.0082 12.3849L14.2932 11.6112ZM13.3858 10.1043C13.3086 9.97054 13.2183 9.7472 13.1473 9.48852C13.0762 9.22901 13.0408 8.99336 13.0408 8.84096H11.5408C11.5408 9.17364 11.6089 9.55031 11.7008 9.88524C11.7928 10.221 11.9252 10.5742 12.0865 10.8539L13.3858 10.1043ZM13.0408 8.84096V6.54274H11.5408V8.84096H13.0408ZM13.0408 6.54274C13.0408 3.50428 10.5579 1.02137 7.51948 1.02137V2.52137C9.72952 2.52137 11.5408 4.3327 11.5408 6.54274H13.0408ZM9.19608 1.28067C8.10014 0.968542 6.93882 0.968542 5.84287 1.28067L6.25374 2.7233C7.08111 2.48766 7.95784 2.48766 8.78522 2.7233L9.19608 1.28067ZM6.7466 2.27564C6.86777 1.96645 7.16863 1.75 7.51948 1.75V0.25C6.53434 0.25 5.69008 0.860583 5.35001 1.72833L6.7466 2.27564ZM7.51948 1.75C7.87033 1.75 8.17119 1.96645 8.29236 2.27564L9.68894 1.72833C9.34888 0.860583 8.50461 0.25 7.51948 0.25V1.75ZM9.15516 14.6143C9.15516 15.5122 8.41739 16.25 7.51948 16.25V17.75C9.24582 17.75 10.6552 16.3407 10.6552 14.6143H9.15516ZM7.51948 16.25C7.07487 16.25 6.65887 16.0648 6.36392 15.7699L5.30326 16.8305C5.86716 17.3944 6.65991 17.75 7.51948 17.75V16.25ZM6.36432 15.7703C6.05752 15.463 5.88477 15.0468 5.88379 14.6126L4.38379 14.616C4.38567 15.4465 4.71607 16.2425 5.30286 16.8301L6.36432 15.7703Z" fill="#1C1C1C"></path></svg></span></button>
                <div class="dropdown admin_btn"><button class="btn dropdown-toggle admin" aria-expanded="false" data-bs-toggle="dropdown" type="button"><img src="assets/img/image%2011%20(1).png" alt="Admin" width="40" height="40"></button>
                    <div class="dropdown-menu"><a class="dropdown-item" href="#">Sign Out</a></div>
                </div>
            </div>
			<div class="main_content">
				<div id="client_header" class="client_header">
					<div class="header_text_container">
						<h1><strong>Pet Records</strong></h1> </div>
					<div class="btn-group split_btn" id="add_pet_split_btn">
						<button class="btn add_Product_btn" id="add_pet_btn-1" type="button"><span class="add_Product_btn_base"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="27" viewBox="0 0 25 27" fill="none">
                        <g clip-path="url(#clip0_6404_17517)" filter="url(#filter0_d_6404_17517)">
                            <path d="M12.5 21H6C5.46957 21 4.96086 20.7893 4.58579 20.4142C4.21071 20.0391 4 19.5304 4 19V7C4 6.46957 4.21071 5.96086 4.58579 5.58579C4.96086 5.21071 5.46957 5 6 5H18C18.5304 5 19.0391 5.21071 19.4142 5.58579C19.7893 5.96086 20 6.46957 20 7V12M16 3V7M8 3V7M4 11H20M16 19H22M19 16V22" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                            <filter id="filter0_d_6404_17517" x="-2" y="0" width="28" height="28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                            <feOffset dy="2"/>
                            <feGaussianBlur stdDeviation="1"/>
                            <feComposite in2="hardAlpha" operator="out"/>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_6404_17517"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_6404_17517" result="shape"/>
                            </filter>
                            <clipPath id="clip0_6404_17517">
                            <rect width="24" height="24" fill="white"/>
                            </clipPath>
                        </defs>
                        </svg> Add Record</span></button>
						<button class="btn dropdown-toggle dropdown-toggle-split add_product_dropdown" data-bs-toggle="dropdown" aria-expanded="false" type="button"></button>
						<div class="dropdown-menu"><a class="dropdown-item" href="{{ route('report.emr') }}">Generate Report</a></div>
					</div>
				</div>
				<div id="client_container" class="client_container">
					<div class="container_header">
					<form action="" id="approvedForm">
                                    <div class="left_part_product_header">
                                        <div class="search_container">
                                            <input type="text" class="search_input" name="search"
                                            value="{{ request('search') }}" placeholder="Search Appointment">
                                        </div>
                                        <button type="submit" form="approvedForm" class="btn filter_btn fw-bold"><i class="fa-solid fa-magnifying-glass"></i>Search</button>
                                        <div class="dropdown">
                                            <button class="filter_btn dropdown-toggle fw-bold" type="button"
                                                id="dropdownMenuButton1" data-bs-toggle="dropdown" data-bs-auto-close="false"
                                                aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="26" viewBox="0 0 24 26" fill="none">
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
                                              </svg>Filter By
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
                                                aria-expanded="false"><span class="filter_btn_base">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<g clip-path="url(#clip0_6770_15021)">
														<path d="M4 6H13M4 12H11M4 18H11M15 15L18 18M18 18L21 15M18 18V6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
													</g>
													<defs>
														<clipPath id="clip0_6770_15021">
														<rect width="24" height="24" fill="white"/>
														</clipPath>
													</defs>
													</svg>Sort By 
												</span>
                                                </button>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-item ">
                                                    <input class="form-check-input me-1" type="radio" id = "radio1"
                                                        name="sortItems"{{ request()->input('sortItems', '0') == '0' ? 'checked' : '' }}  value="0">
                                                    <label class="form-check-label ms-1 fs-6" for="radio1">
                                                        Appointment
                                                </li>
                                                <li class="dropdown-item">
                                                    <input class="form-check-input me-1" type="radio" id = "radio2"
                                                        name="sortItems" {{ request()->input('sortItems') == '1' ? 'checked' : '' }} value="1">
                                                    <label class="form-check-label ms-1 fs-6" for="radio2">
                                                        Status
                                                </li>
                                                <li class="dropdown-item">
                                                    <input class="form-check-input me-1" type="radio" id = "radio3"
                                                        name="sortItems" {{ request()->input('sortItems') == '2' ? 'checked' : '' }} value="2">
                                                    <label class="form-check-label ms-1 fs-6" for="radio3">
                                                        Patient
                                                </li>
                                                <li class="dropdown-item">
                                                    <input class="form-check-input me-1" type="radio" id = "radio4"
                                                        name="sortItems" {{ request()->input('sortItems') == '3' ? 'checked' : '' }} value="3">
                                                    <label class="form-check-label ms-1 fs-6" for="radio4">
                                                        Client
                                                </li>
                                                <li>
                                                  <li class="dropdown-item">
                                                    <input class="form-check-input me-1" type="radio" id = "radio5"
                                                        name="sortItems" {{ request()->input('sortItems') == '4' ? 'checked' : '' }} value="4">
                                                    <label class="form-check-label ms-1 fs-6" for="radio5">
                                                        Surgery Type
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider me-2 ms-2">
                                                </li>
                                                <li class="dropdown-item">
                                                    <input class="form-check-input me-1" type="radio" id = "radio6"
                                                        name="sortOrder" {{ request()->input('sortOrder') == '0' ? 'checked' : '' }} value="0">
                                                    <label class="form-check-label ms-1 fs-6" for="radio6">
                                                        Ascending
                                                </li>
                                                <li class="dropdown-item">
                                                    <input class="form-check-input me-1" type="radio" id = "radio7"
                                                        name="sortOrder" {{ request()->input('sortOrder', '1') == '1' ? 'checked' : '' }} value="1">
                                                    <label class="form-check-label ms-1 fs-6" for="radio7">
                                                        Descending
                                                </li>
                                                <li class="dropdown-item ">
                                                  <div class="row">
                                                      <div class="col-md-5">
                                                          <button type = "reset" class="btn cancel_filter btn-sm me-3"><span class="cancel_filter_base">Cancel</span></button>
                                                      </div>
                                                      <div class="col-md-5 text-center">
                                                          <button type="submit" form="approvedForm" class="btn apply_filter btn-sm ms-3"><span class="apply_filter_base">Apply Sort</span></button>
                                                      </div>
                                                  </div>
                                              </li>
                                            </ul>
                                        </div>
          
                                    </div>
                                </form>
			</div>

							
                        
					<div id="empty_state_container" class="empty_state_container">
						<div class="empty_state">
							<div>
								<svg xmlns="http://www.w3.org/2000/svg" width="150" height="106" viewBox="0 0 150 106" fill="none">
									<g clip-path="url(#clip0_3896_30773)">
										<path d="M58.9852 66.2918C59.0314 65.9776 59.0081 65.6571 58.9171 65.3529C58.826 65.0487 58.6693 64.7681 58.4581 64.531C58.2469 64.2939 57.9863 64.1059 57.6946 63.9804C57.4029 63.8549 57.0872 63.7949 56.7698 63.8046L42.8577 49.7383L40.1094 53.5803L54.6487 66.1989C54.7004 66.731 54.9454 67.2257 55.3374 67.5893C55.7294 67.9529 56.2412 68.16 56.7757 68.1714C57.3102 68.1829 57.8304 67.9979 58.2376 67.6514C58.6448 67.305 58.9108 66.8212 58.9852 66.2918Z" fill="#FFB8B8" />
										<path d="M52.3935 58.1699L48.8427 61.7169C48.6726 61.8858 48.4429 61.981 48.2032 61.9819C47.9636 61.9829 47.7331 61.8896 47.5617 61.722L37.8587 52.1827C37.5233 51.8528 37.2565 51.4598 37.0739 51.0262C36.8913 50.5926 36.7965 50.1271 36.7949 49.6566C36.7934 49.1861 36.8851 48.72 37.0648 48.2852C37.2445 47.8504 37.5086 47.4556 37.8419 47.1235C38.1751 46.7914 38.5709 46.5287 39.0064 46.3505C39.4418 46.1724 39.9082 46.0823 40.3787 46.0855C40.8491 46.0888 41.3143 46.1852 41.7472 46.3694C42.1802 46.5535 42.5723 46.8216 42.901 47.1583L52.4016 56.8906C52.5682 57.0623 52.6606 57.2926 52.6591 57.5319C52.6576 57.7712 52.5622 58.0003 52.3935 58.1699Z" fill="#045B62" />
										<path d="M39.9408 40.7595C42.6836 40.7595 44.907 38.5361 44.907 35.7933C44.907 33.0506 42.6836 30.8271 39.9408 30.8271C37.1981 30.8271 34.9746 33.0506 34.9746 35.7933C34.9746 38.5361 37.1981 40.7595 39.9408 40.7595Z" fill="#FFB8B8" />
										<path d="M23.1602 95.3049L24.4176 97.4411L33.2561 93.6077L31.4001 90.4546L23.1602 95.3049Z" fill="#FFB8B8" />
										<path d="M23.5378 94.3496L26.0142 98.5567C26.2215 98.9088 26.3574 99.2985 26.4141 99.7031C26.4709 100.108 26.4473 100.519 26.3449 100.915C26.2425 101.31 26.0631 101.682 25.8171 102.008C25.5712 102.334 25.2633 102.609 24.9112 102.816L24.8241 102.867L20.7695 95.9791L23.5378 94.3496Z" fill="#2F2E41" />
										<path d="M37.7309 103.001H40.2098L41.389 93.4395L37.7305 93.4397L37.7309 103.001Z" fill="#FFB8B8" />
										<path d="M37.0977 102.192L41.9795 102.192H41.9797C42.3883 102.192 42.7928 102.272 43.1703 102.429C43.5477 102.585 43.8907 102.814 44.1796 103.103C44.4685 103.392 44.6977 103.735 44.854 104.112C45.0104 104.49 45.0908 104.894 45.0908 105.303V105.404L37.0978 105.404L37.0977 102.192Z" fill="#2F2E41" />
										<path d="M27.7636 97.2083C27.6209 97.2084 27.4803 97.1749 27.353 97.1105C27.2256 97.0461 27.1153 96.9527 27.0308 96.8377L24.6401 93.5907C24.5672 93.4916 24.5151 93.3788 24.487 93.2591C24.4589 93.1393 24.4553 93.0151 24.4766 92.894C24.4978 92.7728 24.5434 92.6572 24.6106 92.5542C24.6778 92.4512 24.7652 92.3628 24.8675 92.2945L35.5059 85.189L29.0868 68.3105L42.8139 69.4434L43.2763 83.9477C43.3196 85.2687 43.003 86.5765 42.3603 87.7313C41.7176 88.8862 40.773 89.8445 39.6275 90.5038L28.2182 97.0861C28.0801 97.1661 27.9232 97.2083 27.7636 97.2083Z" fill="#2F2E41" />
										<path d="M37.8052 101.06C37.5698 101.06 37.3437 100.968 37.1745 100.805C37.0052 100.641 36.906 100.418 36.8976 100.183L36.3945 86.0528L42.6239 85.7246L42.1279 99.9561C42.1206 100.182 42.0296 100.396 41.8726 100.558C41.7156 100.72 41.5039 100.818 41.2787 100.832L37.8671 101.058C37.8464 101.06 37.8258 101.06 37.8052 101.06Z" fill="#2F2E41" />
										<path d="M44.4035 72.2495C42.8186 72.2495 37.2828 70.4668 35.361 69.8314C35.0735 70.0615 33.494 71.2425 31.6504 71.0266C30.5128 70.8932 29.5114 70.2492 28.6738 69.1127C26.8243 66.6026 29.1087 55.8381 31.3507 47.2498C31.8002 45.5138 32.9052 44.0197 34.4335 43.0815C35.9617 42.1434 37.7941 41.8342 39.5456 42.2191C40.815 42.4993 41.9811 43.128 42.9129 44.0345C43.8447 44.9409 44.5053 46.0893 44.8204 47.3505C45.2425 49.0688 44.8794 51.09 44.6143 52.566C44.4896 53.2598 44.3912 53.808 44.4248 54.0773C44.5549 55.1183 45.2778 71.4445 44.813 72.1417C44.7635 72.2159 44.6204 72.2495 44.4035 72.2495Z" fill="#045B62" />
										<path d="M38.6055 72.278C38.8602 72.0884 39.0702 71.8452 39.2208 71.5656C39.3714 71.2861 39.4588 70.9769 39.477 70.6598C39.4951 70.3428 39.4436 70.0256 39.3259 69.7307C39.2082 69.4358 39.0273 69.1702 38.7959 68.9527L38.894 49.1689L34.2344 49.9449L35.6031 69.1477C35.2636 69.5607 35.0873 70.0839 35.1077 70.6181C35.1281 71.1524 35.3438 71.6606 35.7139 72.0464C36.084 72.4323 36.5827 72.669 37.1157 72.7117C37.6486 72.7543 38.1787 72.6001 38.6055 72.278Z" fill="#FFB8B8" />
										<path d="M39.683 61.8745H34.6641C34.4244 61.8738 34.1947 61.7788 34.0244 61.6102C33.8542 61.4415 33.7571 61.2126 33.7542 60.9729L33.631 47.3666C33.6267 46.8961 33.7158 46.4294 33.893 45.9936C34.0702 45.5577 34.3321 45.1613 34.6635 44.8273C34.9948 44.4933 35.3892 44.2283 35.8236 44.0477C36.2581 43.867 36.724 43.7743 37.1945 43.7749C37.665 43.7755 38.1307 43.8693 38.5647 44.051C38.9987 44.2327 39.3924 44.4987 39.723 44.8335C40.0535 45.1683 40.3144 45.5654 40.4906 46.0016C40.6667 46.4379 40.7546 46.9048 40.7492 47.3753L40.5929 60.9751C40.5893 61.2143 40.492 61.4426 40.3218 61.6108C40.1517 61.779 39.9223 61.8737 39.683 61.8745Z" fill="#045B62" />
										<path d="M38.677 40.7386C36.4033 40.7427 34.2582 38.9455 33.8641 36.7061C33.7231 35.8263 33.7867 34.9259 34.05 34.0747C34.3359 33.1057 34.8263 32.2093 35.488 31.4459C36.1497 30.6825 36.9673 30.0698 37.8859 29.6491C38.8044 29.2285 39.8025 29.0096 40.8127 29.0073C41.823 29.0051 42.822 29.2194 43.7424 29.6359C44.3507 29.9112 44.9499 30.3065 45.2284 30.9133C45.5069 31.5201 45.3326 32.3681 44.7233 32.6412C44.3252 32.8196 43.8255 32.732 43.4723 32.9881C42.9649 33.356 43.0955 34.1389 43.3221 34.7232C43.5486 35.3075 43.8049 36.0146 43.4251 36.5131C43.0712 36.9776 42.3638 36.9632 41.8066 36.7884C41.2494 36.6135 40.6995 36.3208 40.1185 36.3803C39.2712 36.4672 38.6624 37.31 38.5497 38.1542C38.437 38.9984 38.7023 39.8423 38.9642 40.6528L38.677 40.7386Z" fill="#2F2E41" />
										<path d="M100.82 45.8071C100.82 32.2264 111.83 0 125.41 0C138.991 0 150 32.2264 150 45.8071C150 52.3288 147.41 58.5834 142.798 63.195C138.187 67.8065 131.932 70.3972 125.41 70.3972C118.889 70.3972 112.634 67.8065 108.023 63.195C103.411 58.5834 100.82 52.3288 100.82 45.8071Z" fill="#045B62" />
										<path d="M125.409 105.632C125.356 105.632 125.304 105.611 125.266 105.573C125.228 105.535 125.207 105.484 125.207 105.43V20.6514C125.207 20.5978 125.228 20.5464 125.266 20.5084C125.304 20.4705 125.356 20.4492 125.409 20.4492C125.463 20.4492 125.514 20.4705 125.552 20.5084C125.59 20.5464 125.611 20.5978 125.611 20.6514V105.43C125.611 105.484 125.59 105.535 125.552 105.573C125.514 105.611 125.463 105.632 125.409 105.632Z" fill="#3F3D56" />
										<path d="M125.411 37.0185C125.384 37.0185 125.358 37.0133 125.333 37.0031C125.309 36.993 125.286 36.9781 125.268 36.9592L115.535 27.2266C115.497 27.1886 115.476 27.1373 115.477 27.0839C115.477 27.0305 115.498 26.9793 115.536 26.9415C115.574 26.9038 115.625 26.8825 115.678 26.8823C115.732 26.8822 115.783 26.9031 115.821 26.9407L125.554 36.6733C125.582 36.7016 125.601 36.7376 125.609 36.7768C125.617 36.8161 125.613 36.8567 125.597 36.8937C125.582 36.9306 125.556 36.9622 125.523 36.9844C125.49 37.0066 125.451 37.0185 125.411 37.0185Z" fill="#3F3D56" />
										<path d="M125.409 53.8677C125.369 53.8677 125.33 53.8559 125.297 53.8336C125.264 53.8114 125.238 53.7798 125.222 53.7429C125.207 53.706 125.203 53.6653 125.211 53.6261C125.219 53.5869 125.238 53.5508 125.266 53.5226L141.565 37.2233C141.603 37.1858 141.655 37.1649 141.708 37.165C141.762 37.1652 141.813 37.1865 141.85 37.2242C141.888 37.262 141.909 37.3131 141.91 37.3665C141.91 37.4199 141.889 37.4712 141.851 37.5092L125.552 53.8085C125.533 53.8273 125.511 53.8422 125.487 53.8524C125.462 53.8625 125.436 53.8678 125.409 53.8677Z" fill="#3F3D56" />
										<path d="M57.3586 66.1769C60.5846 65.4476 64.2395 67.971 64.3528 71.3587C64.3846 72.3116 64.1054 73.3122 63.3721 73.9605C62.7668 74.4956 61.8661 74.7655 61.0835 74.504C59.5777 74.0006 59.4973 71.9023 60.3051 70.7816C61.3988 69.2642 63.5657 69.005 65.285 69.1855C67.3871 69.4062 69.385 70.3279 71.0615 71.5912C74.4177 74.1203 76.5548 77.9964 78.2846 81.7414C80.0554 85.5831 81.3431 89.6296 82.1181 93.7882C82.2157 94.3105 82.305 94.8343 82.3862 95.3594C82.4092 95.4363 82.4615 95.5011 82.5319 95.5398C82.6023 95.5784 82.685 95.5878 82.7623 95.5659C82.8384 95.5417 82.9023 95.4891 82.9407 95.4191C82.9791 95.3491 82.9892 95.267 82.9687 95.1898C82.2607 90.6518 80.9529 86.228 79.0795 82.0344C77.2684 77.9758 74.985 73.7659 71.3526 71.0573C69.5418 69.7071 67.4035 68.7675 65.1406 68.5666C63.2355 68.3974 60.9796 68.8005 59.7949 70.4573C58.8603 71.7645 58.9553 73.9368 60.4014 74.8472C61.1964 75.3477 62.2067 75.2892 63.0322 74.9001C63.4703 74.6838 63.8561 74.3748 64.1628 73.9945C64.4696 73.6142 64.69 73.1718 64.8087 72.6979C65.3222 70.8164 64.5425 68.7813 63.2057 67.4365C61.951 66.1708 60.2459 65.4537 58.4638 65.4424C58.0346 65.4471 57.6072 65.498 57.189 65.5944C56.8082 65.6805 56.9784 66.2628 57.3586 66.1769Z" fill="#A5A5A5" />
										<path d="M72.9169 103.435L70.9121 100.012L73.3841 98.564L75.3889 101.987C75.5809 102.314 75.6348 102.705 75.5388 103.073C75.4427 103.44 75.2046 103.755 74.8768 103.947C74.549 104.139 74.1583 104.193 73.7908 104.097C73.4232 104.001 73.1089 103.763 72.9169 103.435Z" fill="#045B62" />
										<path d="M66.2884 96.3199C67.262 96.3199 68.0513 95.5306 68.0513 94.5569C68.0513 93.5832 67.262 92.7939 66.2884 92.7939C65.3147 92.7939 64.5254 93.5832 64.5254 94.5569C64.5254 95.5306 65.3147 96.3199 66.2884 96.3199Z" fill="#045B62" />
										<path d="M80.6727 103.435L78.668 100.012L81.1399 98.564L83.1447 101.987C83.3362 102.314 83.3898 102.705 83.2937 103.072C83.1975 103.439 82.9595 103.754 82.632 103.945C82.3044 104.137 81.914 104.191 81.5466 104.096C81.1793 104 80.8649 103.762 80.6727 103.435Z" fill="#045B62" />
										<path d="M66.623 98.1086C66.6242 97.1154 67.0192 96.1631 67.7215 95.4608C68.4239 94.7585 69.3761 94.3634 70.3693 94.3623H82.2285C82.6483 94.3628 83.0508 94.5298 83.3476 94.8266C83.6445 95.1235 83.8114 95.526 83.8119 95.9458V97.2952C83.8105 98.5041 83.3297 99.6631 82.4749 100.518C81.6201 101.373 80.4611 101.854 79.2522 101.855H70.3693C69.3761 101.854 68.4239 101.459 67.7215 100.756C67.0192 100.054 66.6242 99.1018 66.623 98.1086Z" fill="#3F3D56" />
										<path d="M69.3574 103.876V99.9092H72.2222V103.876C72.2222 104.256 72.0713 104.62 71.8027 104.889C71.5341 105.157 71.1697 105.308 70.7898 105.308C70.4099 105.308 70.0456 105.157 69.777 104.889C69.5083 104.62 69.3574 104.256 69.3574 103.876Z" fill="#3F3D56" />
										<path d="M77.6719 103.876V99.9092H80.5367V103.876C80.5369 104.064 80.5 104.251 80.4281 104.425C80.3563 104.598 80.2508 104.757 80.1177 104.89C79.9847 105.023 79.8267 105.129 79.6528 105.201C79.4789 105.273 79.2925 105.31 79.1043 105.31C78.916 105.31 78.7296 105.273 78.5557 105.201C78.3818 105.129 78.2238 105.023 78.0908 104.89C77.9578 104.757 77.8523 104.598 77.7804 104.425C77.7085 104.251 77.6717 104.064 77.6719 103.876Z" fill="#3F3D56" />
										<path d="M89.3275 88.1821C89.6207 87.8187 90.046 87.5863 90.5103 87.5361C90.9745 87.4859 91.4397 87.6219 91.8038 87.9143C92.1679 88.2067 92.4011 88.6316 92.4522 89.0958C92.5033 89.5599 92.3683 90.0254 92.0766 90.39L89.1787 93.9982L86.4297 91.7903L89.3275 88.1821Z" fill="#045B62" />
										<path d="M82.3459 95.2901L84.6675 92.3995C85.232 91.6983 86.0516 91.2496 86.9464 91.1519C87.8413 91.0542 88.7384 91.3155 89.4409 91.8784L90.1663 92.4609C91.0024 93.134 91.5373 94.1112 91.6538 95.1782C91.7703 96.2451 91.4588 97.3147 90.7876 98.1523L88.8749 100.534C88.6636 100.796 88.3567 100.964 88.0217 101.001C87.6866 101.038 87.3507 100.94 87.0877 100.729L82.541 97.0773C82.2785 96.8659 82.1105 96.5591 82.0739 96.224C82.0374 95.889 82.1352 95.5531 82.3459 95.2901Z" fill="#3F3D56" />
										<path d="M89.6725 87.7524C89.7722 87.6283 89.8953 87.525 90.0349 87.4485C90.1745 87.372 90.3278 87.3238 90.486 87.3065C90.6442 87.2892 90.8043 87.3033 90.9571 87.3478C91.1099 87.3924 91.2524 87.4667 91.3765 87.5664C91.5006 87.666 91.6038 87.7892 91.6804 87.9287C91.7569 88.0683 91.8051 88.2216 91.8224 88.3798C91.8397 88.538 91.8256 88.6981 91.781 88.8509C91.7364 89.0037 91.6622 89.1462 91.5625 89.2703L88.3197 93.308L86.4297 91.7901L89.6725 87.7524Z" fill="#3F3D56" />
										<path d="M85.0263 94.5015L90.0089 98.5033C90.3721 98.7965 90.6042 99.2218 90.6542 99.6859C90.7043 100.15 90.5682 100.615 90.276 100.979C89.9837 101.343 89.559 101.576 89.095 101.627C88.6311 101.679 88.1657 101.544 87.801 101.252L82.8184 97.2505L85.0263 94.5015Z" fill="#3F3D56" />
										<path d="M90.4928 101.112C90.7501 100.792 90.8143 100.417 90.6364 100.274C90.4585 100.131 90.1058 100.275 89.8485 100.595C89.5913 100.915 89.527 101.291 89.705 101.434C89.8829 101.576 90.2356 101.433 90.4928 101.112Z" fill="#045B62" />
										<path d="M139.921 105.594H0.202198C0.148572 105.594 0.0971419 105.573 0.0592224 105.535C0.0213028 105.497 0 105.446 0 105.392C0 105.339 0.0213028 105.287 0.0592224 105.249C0.0971419 105.211 0.148572 105.19 0.202198 105.19H139.921C139.975 105.19 140.026 105.211 140.064 105.249C140.102 105.287 140.123 105.339 140.123 105.392C140.123 105.446 140.102 105.497 140.064 105.535C140.026 105.573 139.975 105.594 139.921 105.594Z" fill="#A5A5A5" /> </g>
									<defs>
										<clipPath id="clip0_3896_30773">
											<rect width="150" height="105.632" fill="white" /> </clipPath>
									</defs>
								</svg>
							</div>
							<div class="empty_state_message_container">
								<h1>NO PETS YET!</h1>
								<div class="empty_state_paragraph_container">
									<p>Looks like you haven’t added any of pet records just yet.</p>
									<p>You can do so by clicking the button below.</p>
								</div>
							</div>
						</div>
						<button class="btn add_client_button" id="add_pet_btn" type="button"><span class="add_client_base"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
  <g clip-path="url(#clip0_6127_20125)" filter="url(#filter0_d_6127_20125)">
    <path d="M12.5 5.63184V19.6318M5.5 12.6318H19.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <filter id="filter0_d_6127_20125" x="-1.5" y="0.631836" width="28" height="28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
      <feOffset dy="2"/>
      <feGaussianBlur stdDeviation="1"/>
      <feComposite in2="hardAlpha" operator="out"/>
      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_6127_20125"/>
      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_6127_20125" result="shape"/>
    </filter>
    <clipPath id="clip0_6127_20125">
      <rect width="24" height="24" fill="white" transform="translate(0.5 0.631836)"/>
    </clipPath>
  </defs>
</svg> Add Record</span></button>
					</div>
					<div id="pet_records" class="pet_records_container"> 
					@foreach($petrecord as $petrecord)
						<div class="card pet_card" data-container-id="{{ $petrecord->id }}">
							<div class="card-body pet_card_body">
								<div id="pet_detail_header" class="pet_detail_header">
									<div class="pet_detail_heading_text_container">
                                        <h1>{{ $petrecord->pet->name }}</h1> <!--Change into actual pet name-->
                                        <p>{{ $petrecord->pet->breed }}</p>
									</div>
									<div class="dropdown">
										<button class="btn dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button">
											<svg fill="none" height="18" viewbox="0 0 18 18" width="18" xmlns="http://www.w3.org/2000/svg">
												<path d="M9 5C7.61929 5 6.5 3.88071 6.5 2.5C6.5 1.11929 7.61929 -6.03528e-08 9 0C10.3807 6.03528e-08 11.5 1.11929 11.5 2.5C11.5 3.88071 10.3807 5 9 5Z" fill="#045B62"></path>
												<path d="M9 11.5C7.61929 11.5 6.5 10.3807 6.5 9C6.5 7.61929 7.61929 6.5 9 6.5C10.3807 6.5 11.5 7.61929 11.5 9C11.5 10.3807 10.3807 11.5 9 11.5Z" fill="#045B62"></path>
												<path d="M9 18C7.61929 18 6.5 16.8807 6.5 15.5C6.5 14.1193 7.61929 13 9 13C10.3807 13 11.5 14.1193 11.5 15.5C11.5 16.8807 10.3807 18 9 18Z" fill="#045B62"></path>
											</svg>
										</button>
										<div class="dropdown-menu more_button" data-bs-popper="none">
										<button class="dropdown-item add_diagnosis-action" data-container-id="{{ $petrecord->id }}">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<g clip-path="url(#clip0_6230_1794)">
														<path d="M10 12C10 12.5304 10.2107 13.0391 10.5858 13.4142C10.9609 13.7893 11.4696 14 12 14C12.5304 14 13.0391 13.7893 13.4142 13.4142C13.7893 13.0391 14 12.5304 14 12C14 11.4696 13.7893 10.9609 13.4142 10.5858C13.0391 10.2107 12.5304 10 12 10C11.4696 10 10.9609 10.2107 10.5858 10.5858C10.2107 10.9609 10 11.4696 10 12Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
														<path d="M21 12C18.6 16 15.6 18 12 18C8.4 18 5.4 16 3 12C5.4 8 8.4 6 12 6C15.6 6 18.6 8 21 12Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /> </g>
													<defs>
														<clipPath id="clip0_6230_1794">
															<rect width="24" height="24" fill="white" /> </clipPath>
													</defs>
												</svg>Add Diagnosis
											</button>
											<button class="dropdown-item add_immunization_action" data-container-id="{{ $petrecord->id }}">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<g clip-path="url(#clip0_6230_538)">
														<path d="M13.5 6.5L17.5 10.5M4 20.0001H8L18.5 9.50006C19.0304 8.96963 19.3284 8.2502 19.3284 7.50006C19.3284 6.74991 19.0304 6.03049 18.5 5.50006C17.9696 4.96963 17.2501 4.67163 16.5 4.67163C15.7499 4.67163 15.0304 4.96963 14.5 5.50006L4 16.0001V20.0001Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /> </g>
													<defs>
														<clipPath id="clip0_6230_538">
															<rect width="24" height="24" fill="white" /> </clipPath>
													</defs>
												</svg>Add Vaccine</button>
											<button class="dropdown-item add_surgery_action" data-container-id="{{ $petrecord->id }}">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<g clip-path="url(#clip0_6230_1803)">
														<path d="M19 8C19.5304 8 20.0391 7.78929 20.4142 7.41421C20.7893 7.03914 21 6.53043 21 6C21 5.46957 20.7893 4.96086 20.4142 4.58579C20.0391 4.21071 19.5304 4 19 4H5C4.46957 4 3.96086 4.21071 3.58579 4.58579C3.21071 4.96086 3 5.46957 3 6C3 6.53043 3.21071 7.03914 3.58579 7.41421C3.96086 7.78929 4.46957 8 5 8M19 8H5M19 8V18C19 18.5304 18.7893 19.0391 18.4142 19.4142C18.0391 19.7893 17.5304 20 17 20H7C6.46957 20 5.96086 19.7893 5.58579 19.4142C5.21071 19.0391 5 18.5304 5 18V8M10 12H14" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /> </g>
													<defs>
														<clipPath id="clip0_6230_1803">
															<rect width="24" height="24" fill="white" /> </clipPath>
													</defs>
												</svg>Add Surgery</button>

											<hr />
											<button class="dropdown-item View_pet-action" id="View" data-container-id="{{ $petrecord->id }}">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<g clip-path="url(#clip0_6230_1794)">
														<path d="M10 12C10 12.5304 10.2107 13.0391 10.5858 13.4142C10.9609 13.7893 11.4696 14 12 14C12.5304 14 13.0391 13.7893 13.4142 13.4142C13.7893 13.0391 14 12.5304 14 12C14 11.4696 13.7893 10.9609 13.4142 10.5858C13.0391 10.2107 12.5304 10 12 10C11.4696 10 10.9609 10.2107 10.5858 10.5858C10.2107 10.9609 10 11.4696 10 12Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
														<path d="M21 12C18.6 16 15.6 18 12 18C8.4 18 5.4 16 3 12C5.4 8 8.4 6 12 6C15.6 6 18.6 8 21 12Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /> </g>
													<defs>
														<clipPath id="clip0_6230_1794">
															<rect width="24" height="24" fill="white" /> </clipPath>
													</defs>
												</svg>&nbsp;View
											</button>
											<button class="dropdown-item Edit_pet-action" id="Edit" 
											data-container-id="{{ $petrecord->pet->id }}" data-pet_name="{{ $petrecord->pet->name }}"
											data-gender="{{ $petrecord->pet->gender }}" data-birthdate="{{ $petrecord->pet->birthdate}}"
											data-age="{{ $petrecord->pet->age}}" data-specied="{{ $petrecord->pet->species}}" data-breed="{{ $petrecord->pet->breed }}">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<g clip-path="url(#clip0_6230_538)">
														<path d="M13.5 6.5L17.5 10.5M4 20.0001H8L18.5 9.50006C19.0304 8.96963 19.3284 8.2502 19.3284 7.50006C19.3284 6.74991 19.0304 6.03049 18.5 5.50006C17.9696 4.96963 17.2501 4.67163 16.5 4.67163C15.7499 4.67163 15.0304 4.96963 14.5 5.50006L4 16.0001V20.0001Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /> </g>
													<defs>
														<clipPath id="clip0_6230_538">
															<rect width="24" height="24" fill="white" /> </clipPath>
													</defs>
												</svg>&nbsp;Edit</button>
											<button class="dropdown-item archive_pet-action" id="Archive1" data-container-id="{{ $petrecord->id }}">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<g clip-path="url(#clip0_6230_1803)">
														<path d="M19 8C19.5304 8 20.0391 7.78929 20.4142 7.41421C20.7893 7.03914 21 6.53043 21 6C21 5.46957 20.7893 4.96086 20.4142 4.58579C20.0391 4.21071 19.5304 4 19 4H5C4.46957 4 3.96086 4.21071 3.58579 4.58579C3.21071 4.96086 3 5.46957 3 6C3 6.53043 3.21071 7.03914 3.58579 7.41421C3.96086 7.78929 4.46957 8 5 8M19 8H5M19 8V18C19 18.5304 18.7893 19.0391 18.4142 19.4142C18.0391 19.7893 17.5304 20 17 20H7C6.46957 20 5.96086 19.7893 5.58579 19.4142C5.21071 19.0391 5 18.5304 5 18V8M10 12H14" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /> </g>
													<defs>
														<clipPath id="clip0_6230_1803">
															<rect width="24" height="24" fill="white" /> </clipPath>
													</defs>
												</svg>&nbsp;Archive</button>
										</div>
									</div>
								</div>
								<div class="pet_detail_body">
									<div class="pet_upper_detail">
										<div class="pet_sex_container">
											<h1>Owner</h1>
											<p>{{ $petrecord->owner->first_name }} {{ $petrecord->owner->middle_name}} {{ $petrecord->owner->last_name}} {{ $petrecord->owner->suffix }}</p>
										</div>
									
									</div>
									<div class="pet_lower_detail">
										<div class="pet_weight_container">
											<h1>Email</h1>
											<p>{{ $petrecord->owner->email }}</p>
										</div>
										<div class="pet_sterilization_status_container">
											<h1>Contact Number</h1>
											<p>{{ $petrecord->owner->phone }}</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						@endforeach

					</div>
				</div>
				<div id="view_pet_container" class="view_pet">
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
						<div class="pet_record">
							<div class="pet_record_details">
								<div class="pet_record_details_second_row">
									<div class="pet_name_breed_container" id="petInfo">
										<h1>Pet Name</h1>
										<p>Breed</p>
									</div>
								</div>
								<div class="pet_record_details_first_row">
									<div class="pet_other_details">
										<div class="other_details" id="sex">
											<h1>Sex</h1>
											<p>Paragraph</p>
										</div>
										<div class="other_details" id="birthdate">
											<h1>Birth Date</h1>
											<p>Paragraph</p>
										</div>
										<div class="other_details" id="age">
											<h1>Age</h1>
											<p>Paragraph</p>
										</div>
										<div class="other_details" id="weight">
											<h1>Weight</h1>
											<p>Paragraph</p>
										</div>
										<div class="other_details" id="sterilization_status">
											<h1><strong>Sterilization Status</strong></h1>
											<p>Paragraph</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<button class="btn edit_pet_btn" id="edit_pet_btn" type="button"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g clip-path="url(#clip0_6127_11956)">
    <path d="M13.5 6.50024L17.5 10.5002M4 20.0003H8L18.5 9.5003C19.0304 8.96987 19.3284 8.25045 19.3284 7.5003C19.3284 6.75016 19.0304 6.03074 18.5 5.5003C17.9696 4.96987 17.2501 4.67188 16.5 4.67188C15.7499 4.67187 15.0304 4.96987 14.5 5.5003L4 16.0003V20.0003Z" stroke="#1C1C1C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_6127_11956">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg>
</span></button>
					</div>
					<div class="align-self-stretch pet_records">
						<div class="tabpane_header">
                        <div class="tab_header_left">
                            <ul class="nav nav-tabs pet_nav_tabs" role="tablist">
								<li class="nav-item" role="presentation"><a class="nav-link active" role="tab" data-bs-toggle="tab" href="#tab-1">Information</a></li>
								<li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-2">Medical History</a></li>
								<li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-3">Immunization History</a></li>
								<li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-4">Surgeries</a></li>
							</ul>
                            </div>
                            <div class="tab_header_right" id="tab_header_right">
                                <button id="add_diagnosis" class="btn edit_pet_btn" type="button" style="display:none;"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <g clip-path="url(#clip0_6456_9985)">
                                    <path d="M12 5V19M5 12H19" stroke="#1C1C1C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_6456_9985">
                                        <rect width="24" height="24" fill="white"/>
                                    </clipPath>
                                    </defs>
                                </svg></span></button>
                                <button id="add_immunization" class="btn edit_pet_btn" type="button" style="display:none;"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <g clip-path="url(#clip0_6456_9985)">
                                    <path d="M12 5V19M5 12H19" stroke="#1C1C1C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_6456_9985">
                                        <rect width="24" height="24" fill="white"/>
                                    </clipPath>
                                    </defs>
                                </svg></span></button>
                                <button id="add_surgery" class="btn edit_pet_btn" type="button" style="display:none;"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <g clip-path="url(#clip0_6456_9985)">
                                    <path d="M12 5V19M5 12H19" stroke="#1C1C1C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_6456_9985">
                                        <rect width="24" height="24" fill="white"/>
                                    </clipPath>
                                    </defs>
                                </svg></span></button>
                            </div>
						</div>
						<div class="tab-content view_pet_content">
							<div class="tab-pane active pet_information" role="tabpanel" id="tab-1" style="width: 100%;">
								<div>
									<div class="owner_information">
										<div class="owner_info_heading">
											<h1><strong>Owner Information</strong></h1> </div>
									</div>
									<div class="owner_details">
										<div class="owner_details_row">
											<div class="owner_detail_container" id="ownerName">
												<h1>Name</h1>
												<p></p>
											</div>
											<div class="owner_detail_container" id="">
												
											</div>
										</div>
										<div class="owner_details_row">
											<div class="owner_detail_container" id="ownerEmail">
												<h1>Email</h1>
												<p></p>
											</div>
											<div class="owner_detail_container" id="ownerPhone">
												<h1>Contact Number</h1>
												<p></p>
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
									<button class="btn add_history" id="add_medical_history" type="button"><span id="add_medical_history" class="add_history_base"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
										<g clip-path="url(#clip0_6404_5410)" filter="url(#filter0_d_6404_5410)">
											<path d="M12.5 5V19M5.5 12H19.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										</g>
										<defs>
											<filter id="filter0_d_6404_5410" x="-1.5" y="0" width="28" height="28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
											<feFlood flood-opacity="0" result="BackgroundImageFix"/>
											<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
											<feOffset dy="2"/>
											<feGaussianBlur stdDeviation="1"/>
											<feComposite in2="hardAlpha" operator="out"/>
											<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
											<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_6404_5410"/>
											<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_6404_5410" result="shape"/>
											</filter>
											<clipPath id="clip0_6404_5410">
											<rect width="24" height="24" fill="white" transform="translate(0.5)"/>
											</clipPath>
										</defs>
										</svg>&nbsp;Add Diagnosis</span>
									</button>
								</div>
								<div class="table-responsive mt-3" id="medical_history_table" style="width: 100%;">
										<table class="table"   id="medhisto_Table">
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

											</tbody>
										</table>
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
									<button class="btn add_history" id="add_vaccine_history" type="button"><span id="add_vaccine_history" class="add_history_base"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
  <g clip-path="url(#clip0_6404_5410)" filter="url(#filter0_d_6404_5410)">
    <path d="M12.5 5V19M5.5 12H19.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <filter id="filter0_d_6404_5410" x="-1.5" y="0" width="28" height="28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
      <feOffset dy="2"/>
      <feGaussianBlur stdDeviation="1"/>
      <feComposite in2="hardAlpha" operator="out"/>
      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_6404_5410"/>
      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_6404_5410" result="shape"/>
    </filter>
    <clipPath id="clip0_6404_5410">
      <rect width="24" height="24" fill="white" transform="translate(0.5)"/>
    </clipPath>
  </defs>
</svg>&nbsp;Vaccine Record</span></button>
								</div>
								<div class="table-responsive mt-3" id="immunization_history_table" style="width: 100%;">
										<table class="table" id="immuno_Table">
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
												
											</tbody>
										</table>
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
									<button class="btn add_history" id="add_surgery_history" type="button"><span id="add_surgery_history" class="add_history_base"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
  <g clip-path="url(#clip0_6404_5410)" filter="url(#filter0_d_6404_5410)">
    <path d="M12.5 5V19M5.5 12H19.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <filter id="filter0_d_6404_5410" x="-1.5" y="0" width="28" height="28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
      <feOffset dy="2"/>
      <feGaussianBlur stdDeviation="1"/>
      <feComposite in2="hardAlpha" operator="out"/>
      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_6404_5410"/>
      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_6404_5410" result="shape"/>
    </filter>
    <clipPath id="clip0_6404_5410">
      <rect width="24" height="24" fill="white" transform="translate(0.5)"/>
    </clipPath>
  </defs>
</svg>&nbsp;Add Surgery</span></button>
								</div>
								<div class="table-responsive mt-3" id="surgery_history_table" style="width: 100%;">
										<table class="table" id="surghisto_Table">
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
												
											</tbody>
										</table>
									</div>
							</div>
						</div>
					</div>
				</div>
				<div id="edit_pet_container" class="view_pet">
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
							<form action="{{ route('edit.petrecord') }}" method="POST" style="width:100%;">
								@csrf
							<div class="pet_details_container">
								<input type="hidden" name="pet_id" id="editpetId">
								<div class="align-self-stretch form-floating">
									<input type="text" class="form-control" name="pet_name" id="editPetName">
									<label class="form-label" for="pet_name">Pet Name</label>
									<div class="error-message" id="edit_pet_error"><span>• Error Message</span></div>
									<div class="guide-message"><span>• Guide Message</span></div>
								</div>
								<div class="align-self-stretch form-floating">
									<select aria-label="Floating label select example" name="gender" class="form-select editGender" id="editGender">
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
										<input class="form-control" id="editBirthdate" name="pet_birthday" type="date">
										<label class="form-label">Birth Date</label>
										<div class="error-message" id="edit_birthdate_error"><span>• Error Message</span></div>
										<div class="guide-message"></div>
									</div>
									<div class="form-floating" id="pet_age_edit" style="width: 100%;">
										<input type="text" id="editAge" name="pet_age" class="form-control">
										<label class="form-label">Age</label>
										<div class="error-message" id="edit_age_error"><span>• Error Message</span></div>
										<div class="guide-message"></div>
									</div>
								</div>
								<div class="new_input_row">
									<div class="form-floating" style="width: 543px;">
										<select class="form-select" id="editSpecies" name="species" aria-label="Floating label select example">
											<option value="" selected="">Pet Type</option>
											<option value="Dog">Dog</option>
											<option value="Cat">Cat</option>
										</select>
										<label class="form-label" for="">Pet Type</label>
										<div class="error-message" id="edit_pet_type_error"><span>• Error Message</span></div>
										<div class="guide-message"><span>• Guide Message</span></div>
									</div>
									<div class="new_inputs_row">
										<div class="form-floating" style="width: 100%;">
											<select class="form-select" id="editBreed" name="breed" aria-label="Floating label select example">
												<option value="" selected="">Breed</option>
												<option value="other">Other</option>
											</select>
											<label class="form-label" for="">Breed</label>
											<div class="error-message" id="edit_breed_error"><span>• Error Message</span></div>
											<div class="guide-message"><span>• Guide Message</span></div>
										</div>
										<div class="form-floating" id="pet_breed_specify" style="width: 100%; display: none;">
											<input type="text" class="form-control" id="pet_breed1" placeholder="Specify Breed">
											<label class="form-label" for="pet_breed1">Specify Breed</label>
											<div class="error-message" id="edit_breed_error1"><span>• Error Message</span></div>
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
					<div class="mb-3 prod_detail_fields_buttons">
						<button id="cancel_edit" class="btn cancel_edit" type="button"><span class="cancel_edit_base">Cancel</span></button>
						<button id="edit_save_changes" class="btn edit_save_changes" type="submit"><span class="edit_save_changes_base">Save Changes</span></button>
					</div>
				</div>
				</form>
			</div>
			
		</div>
	</main>
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
					<button class="btn discard_btn" id="discard_btn" type="button" data-bs-dismiss="modal"><span class="discard_btn_base">Discard</span></button>
				</div>
			</div>
		</div>
	</div>

	<div id="add_medical_histo_success" class="modal fade show" role="dialog" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content success_modal">
				<div class="modal-header success_header">
					<div class="success_icon_container"><span class="success_icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
  <g clip-path="url(#clip0_6653_17305)">
    <path d="M12 16L14.6667 18.6667L20 13.3333M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 14.4241 27.6896 12.8637 27.0866 11.4078C26.4835 9.95189 25.5996 8.62902 24.4853 7.51472C23.371 6.40042 22.0481 5.5165 20.5922 4.91345C19.1363 4.31039 17.5759 4 16 4C14.4241 4 12.8637 4.31039 11.4078 4.91345C9.95189 5.5165 8.62902 6.40042 7.51472 7.51472C6.40042 8.62902 5.5165 9.95189 4.91345 11.4078C4.31039 12.8637 4 14.4241 4 16Z" stroke="#5BB85A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_6653_17305">
      <rect width="32" height="32" fill="white"/>
    </clipPath>
  </defs>
</svg></span></div>
				</div>
				<div class="modal-body success_message">
					<div>
						<h1>Success!</h1>
						<p>Medical history has been added.</p>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div id="add_immunization_histo_success" class="modal fade show" role="dialog" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content success_modal">
				<div class="modal-header success_header">
					<div class="success_icon_container"><span class="success_icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
  <g clip-path="url(#clip0_6653_17305)">
    <path d="M12 16L14.6667 18.6667L20 13.3333M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 14.4241 27.6896 12.8637 27.0866 11.4078C26.4835 9.95189 25.5996 8.62902 24.4853 7.51472C23.371 6.40042 22.0481 5.5165 20.5922 4.91345C19.1363 4.31039 17.5759 4 16 4C14.4241 4 12.8637 4.31039 11.4078 4.91345C9.95189 5.5165 8.62902 6.40042 7.51472 7.51472C6.40042 8.62902 5.5165 9.95189 4.91345 11.4078C4.31039 12.8637 4 14.4241 4 16Z" stroke="#5BB85A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_6653_17305">
      <rect width="32" height="32" fill="white"/>
    </clipPath>
  </defs>
</svg></span></div>
				</div>
				<div class="modal-body success_message">
					<div>
						<h1>Success!</h1>
						<p>Immunization history has been added.</p>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div id="add_surgery_histo_success" class="modal fade show" role="dialog" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content success_modal">
				<div class="modal-header success_header">
					<div class="success_icon_container"><span class="success_icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
  <g clip-path="url(#clip0_6653_17305)">
    <path d="M12 16L14.6667 18.6667L20 13.3333M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 14.4241 27.6896 12.8637 27.0866 11.4078C26.4835 9.95189 25.5996 8.62902 24.4853 7.51472C23.371 6.40042 22.0481 5.5165 20.5922 4.91345C19.1363 4.31039 17.5759 4 16 4C14.4241 4 12.8637 4.31039 11.4078 4.91345C9.95189 5.5165 8.62902 6.40042 7.51472 7.51472C6.40042 8.62902 5.5165 9.95189 4.91345 11.4078C4.31039 12.8637 4 14.4241 4 16Z" stroke="#5BB85A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_6653_17305">
      <rect width="32" height="32" fill="white"/>
    </clipPath>
  </defs>
</svg></span></div>
				</div>
				<div class="modal-body success_message">
					<div>
						<h1>Success!</h1>
						<p>Surgery history has been added.</p>
					</div>
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
	<div class="modal fade show" role="dialog" tabindex="-1" id="add_client_success">
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
						<p>Client have been successfully added.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade show" role="dialog" tabindex="-1" id="archive_modal">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content archive_modal">
				<div class="modal-header archive_header">
					<div class="archive_icon_container"><span class="success_icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
  <g clip-path="url(#clip0_5693_10845)">
    <path d="M16 10.6667V16M16 21.3333H16.0133M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 12.8174 26.7357 9.76516 24.4853 7.51472C22.2348 5.26428 19.1826 4 16 4C12.8174 4 9.76516 5.26428 7.51472 7.51472C5.26428 9.76516 4 12.8174 4 16Z" stroke="#045B62" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_5693_10845">
      <rect width="32" height="32" fill="white"/>
    </clipPath>
  </defs>
</svg></span></div>
				</div>
				<div class="modal-body archive_message">
					<div>
						<h1>Archive client?</h1>
						<p>You can restore archived clients at a later time.</p>
					</div>
				</div>
				<div class="modal-footer discard_footer">
					<button class="btn return_btn" data-bs-dismiss="modal" type="button"><span class="return_btn_base">Cancel</span></button>
					<button class="btn archive_confirm" id="archive_confirm_button" type="button"><span class="archive_confirm_button_base">Archive</span></button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade show" role="dialog" tabindex="-1" id="archive_pet_modal">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content archive_modal">
				<div class="modal-header archive_header">
					<div class="archive_icon_container"><span class="success_icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
  <g clip-path="url(#clip0_5693_10845)">
    <path d="M16 10.6667V16M16 21.3333H16.0133M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 12.8174 26.7357 9.76516 24.4853 7.51472C22.2348 5.26428 19.1826 4 16 4C12.8174 4 9.76516 5.26428 7.51472 7.51472C5.26428 9.76516 4 12.8174 4 16Z" stroke="#045B62" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_5693_10845">
      <rect width="32" height="32" fill="white"/>
    </clipPath>
  </defs>
</svg></span></div>
				</div>
				<form action="{{ route('archive.petrecord') }}" method="POST">
					@csrf
				<input type="hidden" name="petrecord_id" id="archiveId">
				<div class="modal-body archive_message">
					<div>
						<h1>Archive Pet?</h1>
						<p>You can restore archived pets at a later time.</p>
					</div>
				</div>
				<div class="modal-footer discard_footer">
					<button class="btn return_btn" data-bs-dismiss="modal" type="button"><span class="return_btn_base">Cancel</span></button>
					<button class="btn archive_confirm" id="archive_confirm_button-2" type="submit" data-bs-dismiss="modal"><span class="archive_confirm_button_base">Archive</span></button>
				</div>
				</form>
			</div>
		</div>
	</div>
	
	<div class="modal fade" role="dialog" tabindex="-1" id="add_pet_record_modal-1">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content add_pet_record_modal">
				<div class="modal-header">
					<h1 class="modal-title">Add Pet Record</h1>
					<button class="btn-close" id="close_pet_modal" aria-label="Close" data-bs-dismiss="modal" type="button"></button>
				</div>
				<div class="modal-body" style="width:100%;">
					<form action="{{ route('emr.pet') }}" method="POST" id="add_pet_form-1" class="add_client">
                        @csrf
						<div class="mb-3 input_container">
                            <div class="form-floating align-self-stretch">
                                    <select class="admin_petInfo_select form-control w-100" id="name" name="owner_id" placeholder="Owner Name">
                                        <option value=""disabled selected>Select Owner: </option>
                                        @foreach ($owners as $owners)
                                            <option value="{{ $owners->id }}">{{ $owners->first_name }} {{ $owners->middle_name }} {{ $owners->last_name }} {{ $owners->suffix }}</option>
                                        @endforeach
                                    </select>
                                </div>
							<div class="new_input_row">
								<div class="form-floating" style="width:100%;">
									<input class="form-control" type="text" name="pet_name" id="pet_name-1" data-id="pet_name-1" placeholder="Pet Name" maxlength="255">
									<label class="form-label" for="pet_name-1">Pet Name<span>&nbsp;*</span></label>
									<div id="error-pet_name-1" class="error-message"><span>• Please enter pet name.</span></div>
									<div id="guide-pet_name-1" class="guide-message"><span>• Please enter pet name.</span></div>
								</div>
								<div class="form-floating" style="width:100%;">
									<select class="form-select" name="gender" id="gender-1" data-id="gender-1" placeholder="Gender">
										<option value="" selected="">Select Sex</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
									<label class="form-label" for="gender-1">Sex<span>&nbsp;*</span></label>
									<div id="error-gender-1" class="error-message"><span>• Please select gender of pet.</span></div>
									<div id="guide-gender-1" class="guide-message"><span>• Please select gender of pet.</span></div>
								</div>
							</div>
							<div class="new_input_row">
								<div class="form-floating" style="width:100%;">
									<select class="form-select" name="species" id="pet_type-1" data-id="pet_type-1" placeholder="Pet Type">
										<option value="" selected="">Select Pet Type</option>
										<option value="Dog">Dog</option>
										<option value="Cat">Cat</option>
									</select>
									<label class="form-label" for="pet_type-1">Pet Type<span>&nbsp;*</span></label>
									<div id="error-pet_type-1" class="error-message"><span>• Please select pet type</span></div>
									<div id="guide-pet_type-1" class="guide-message"><span>• Please select pet type</span></div>
								</div>
								<div class="form-floating" style="width:100%;">
									<select class="form-select" name="breed" id="breed-1" data-id="breed-1" disabled="" placeholder="Breed">
										<option value="none" selected="">Select a Pet Type first.</option>
									</select>
									<label class="form-label" for="breed-1">Breed<span>&nbsp;*</span></label>
									<div id="error-breed-1" class="error-message"><span>• Please select a breed.</span></div>
									<div id="guide-breed-1" class="guide-message"><span>• Please select a breed.</span></div>
								</div>
							</div>
							<div class="new_input_row">
								<div class="form-floating" style="width:100%;">
									<input class="form-control" name="pet_birthday" id="pet_birthdate-1" data-id="pet_birthdate-1" placeholder="Birthdate" type="date">
									<label class="form-label" for="pet_birthdate-1">Birthdate<span>&nbsp;*</span></label>
									<div id="error-pet_birthdate-1" class="error-message"><span>• Please click the calendar icon on the right part, and select your pet birthdate.</span></div>
									<div id="guide_pet_birthdate-1" class="guide-message"><span>• Please click the calendar icon on the right part, and select your pet birthdate.</span></div>
								</div>
								<div class="form-floating" style="width:100%;">
									<input class="form-control" value="" type="text" name="pet_age" data-bs-toggle="tooltip" data-bss-tooltip="" id="age-1" data-id="age-1" 
									title="Please select pet type and enter the birthdate first." maxlength="3" disabled="" placeholder="Please select pet type, breed, and enter the birthdate first.">
									<label class="form-label" for="age-1">Age</label>
									<div id="error-age-1" class="error-message" style="color:red;"></div>
								</div>
							</div>
							<div class="new_input_row">
								<div class="form-floating" style="width:100%;">
									<input class="form-control" type="number" name="weight" id="weight-1" data-id="weight-1" maxlength="10" placeholder="Weight">
									<label class="form-label" for="weight">Weight<span>&nbsp;*</span></label>
									<div id="error-weight-1" class="error-message"><span>• Please enter weight of pet.</span><span>• Only numerical inputs will be accepted</span></div>
									<div id="guide_pet_weight-1" class="guide-message"><span>• Please enter weight of pet.</span><span>• Only numerical inputs will be accepted</span></div>
								</div>
								<div class="form-floating" style="width:100%;">
									<select class="form-select" name="sterilization" id="sterilization_status-1" data-id="sterilization_status-1" placeholder="Sterilization Status">
										<option value="" selected="">Select Status</option>
										<option value="None">None</option>
										<option value="Spayed">Spayed</option>
										<option value="Neutered">Neutered</option>
									</select>
									<label class="form-label" for="sterilization_status-1">Sterilization Status<span>&nbsp;*</span></label>
									<div id="error-sterilization_status-1" class="error-message"><span>• Please select a sterilization status.</span></div>
									<div id="guide-sterilization_status-1" class="guide-message"><span>• Please select a sterilization status.</span></div>
								</div>
							</div>
						</div>
				</div>
				<div class="modal-footer add_product_button">
					<button class="btn clear_form" id="clear_form-1" aria-label="Clear Form" role="button" type="button"><span class="clear_form_base">Clear Form</span></button>
					<button class="btn submit_pet" id="submit_Pet-1" type="submit" value="submit" title="Complete the fields first to make this clickable."><span class="submit_product_base">Submit</span></button>
				</div>
                </form>
			</div>
		</div>
	</div>

	<div class="modal fade" role="dialog" tabindex="-1" id="add_medical_history_modal">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content add_pet_record_modal">
				<div class="modal-header">
					<h1 class="modal-title">Add Diagnosis</h1>
					<button class="btn-close" id="close_diagnosis" aria-label="Close" data-bs-dismiss="modal" type="button"></button>
				</div>
				<div class="modal-body" style="width:100%;">
					<form action="{{ route('med.history') }}" method="POST" class="add_client" id="add_pet_form">
						@csrf
						<input type="hidden" name="petrecord_id" id="medhisId">
						<div class="mb-3 input_container">
							<div class="new_input_row">
								<div class="form-floating" style="width:100%;">
									<select class="form-select form-select" name="diagnosis" data-id="diagnosis" id="diagnosis" placeholder="Diagnosis">
										<option value="" selected="">Select Diagnosis</option>
										<option value="Diagnosis 1">Diagnosis 1</option>
										<option value="Diagnosis 2">Diagnosis 2</option>
										<option value="Diagnosis 3">Diagnosis 3</option>
									</select>
									<label class="form-label form-label" for="diagnosis">Diagnosis<span>&nbsp;*</span></label>
									<div class="error-message" id="error-pet_type"><span>• Please select diagnosis</span></div>
								</div>
								<div class="form-floating" style="width:100%;">
									<input class="form-control form-control" name="diagnosis_date" data-id="diagnosis_date" id="diagnosis_date" placeholder="Date" type="date">
									<label class="form-label form-label" for="diagnosis_date">Date<span>&nbsp;*</span></label>
									<div class="error-message" id="error-pet_birthdate"><span>• Please click the calendar icon on the right part, and select diagnosis date.</span></div>
									
								</div>
							</div>
							<div class="new_input_row">
								<div class="form-floating" style="width:100%;">
									<select class="form-select form-select" name="treatment" data-id="treatment_plan" id="treatment_plan" placeholder="Treatment Plan">
										<option value="" selected="">Select Treatment</option>
										<option value="Treatment 1">Treatment 1</option>
										<option value="Treatment 2">Treatment 2</option>
										<option value="Treatment 3">Treatment 3</option>
									</select>
									<label class="form-label form-label" for="diagnosis">Treatment Plan<span>&nbsp;*</span></label>
									<div class="error-message" id="error-pet_type-3"><span>• Please select treatment plan</span></div>
								</div>
								<div class="form-floating" style="width:100%;">
									<select class="form-select" name="medication" id="medication" data-id="medication" placeholder="Medication">
										<option value="" disabled selected>Medication</option>
										@foreach ($medInfo as $medInfo)
										<option value="{{ $medInfo->id }}">{{ $medInfo->item_name }}</option>
										@endforeach
									</select>
									<label class="form-label form-label" for="medication">Medication<span>&nbsp;*</span></label>
									<div class="error-message" id="error-pet_type-4"><span>• Please select medication</span></div>
								</div>
							</div>
							<div class="new_input_row">
								<div class="form-floating" style="width:100%;">
									<textarea class="form-control form-control" name="diagnosis_desc" data-id="diagnosis_description" id="diagnosis_description" placeholder="Diagnosis Description"></textarea>
									<label class="form-label form-label" for="diagnosis_description">Diagnosis Description<span>&nbsp;*</span></label>
									<div class="error-message" id="error-diagnosis_description"><span>• Please enter diagnosis description.</span></div>
								</div>
							</div>
						</div>
				</div>
				<div class="modal-footer add_product_button">
					<button class="btn clear_form" id="clear_diagnosis" aria-label="Clear Form" role="button" type="button"><span class="clear_form_base">Clear Form</span></button>
					<button class="btn submit_diagnosis" id="submit_diagnosis" type="submit"><span class="submit_product_base">Submit</span></button>
				</div>
				</form>
			</div>
		</div>
	</div>
	<div class="modal fade" role="dialog" tabindex="-1" id="add_immunization_history_modal">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content add_pet_record_modal">
				<div class="modal-header">
					<h1 class="modal-title">Add Vaccination History</h1>
					<button class="btn-close" id="close_vaccination" aria-label="Close" data-bs-dismiss="modal" type="button"></button>
				</div>
				<div class="modal-body" style="width:100%;">
					<form action="{{ route('vax.history') }}" method="POST" class="add_client" id="add_pet_form-2">
						@csrf
						<input type="hidden" name="petrecord_id" id="vaxhisId">
						<div class="mb-3 input_container">
							<div class="new_input_row">
								<div class="form-floating" style="width:100%;">
									<select class="form-select form-select" name="vax_id" id="vaccination" data-id="vaccination" placeholder="Vaccination">
										<option value=""disabled selected>Vaccine </option>
										@foreach ($vaxInfo as $vaxInfo)
										<option value="{{ $vaxInfo->id }}">{{ $vaxInfo->item_name }}</option>
										@endforeach
									</select>
									<label class="form-label form-label" for="vaccination">Diagnosis<span>&nbsp;*</span></label>
									<div id="error-vaccination" class="error-message"><span>• Please select pet type</span></div>
									<div id="guide-vaccination" class="guide-message"><span>• Please select pet type</span></div>
								</div>
								<div class="form-floating" style="width:100%;">
									<input class="form-control form-control" name="vaccination_date" id="vaccination_date" data-id="vaccination_date" placeholder="Date" type="date">
									<label class="form-label form-label" for="vaccination_date">Date<span>&nbsp;*</span></label>
									<div class="error-message" id="error-pet_birthdate-2"><span>• Please click the calendar icon on the right part, and select your pet birthdate.</span></div>
									<div class="guide-message" id="guide_pet_birthdate-2"><span>• Please click the calendar icon on the right part, and select your pet birthdate.</span></div>
								</div>
							</div>
							<div class="new_input_row">
								<div class="form-floating" style="width:100%;">
									<textarea class="form-control form-control" name="vaccination_description" id="vaccination_description" placeholder="Vaccination Details"></textarea>
									<label class="form-label" for="vaccination_description">Vaccination Details<span>&nbsp;*</span></label>
									<div class="error-message" id="error-pet_type-5"><span>• Please select pet type</span></div>
									<div class="guide-message" id="guide-pet_type-5"><span>• Please select pet type</span></div>
								</div>
								<div class="form-floating" style="width:100%;">
									<input class="form-control" id="next_schedule" name="revaccination_date" type="date" data-id="next_schedule">
									<label class="form-label form-label" for="next_schedule">Next Schedule Date<span>&nbsp;*</span></label>
									<div id="error-next_schedule" class="error-message"><span>• Please select pet type</span></div>
									<div id="guide-next_schedule" class="guide-message"><span>• Please select pet type</span></div>
								</div>
							</div>
							<div class="d-flex justify-content-end align-items-end align-content-end align-self-end newinput_row" style="width: 100%;">
								<div class="form-floating" style="width: 49.3%;">
									<select class="form-select" name="status" data-id="status" id="status">
										<option value="" selected="">Status</option>
										<option value="Status 1">Status 1</option>
										<option value="Status 2">Status 2</option>
										<option value="Status 3">Status 3</option>
									</select>
									<label class="form-label" for="status">Status<span>&nbsp;*</span></label>
									<div id="error-next_schedule-1" class="error-message"><span>• Please select pet type</span></div>
									<div id="guide-next_schedule-1" class="guide-message"><span>• Please select pet type</span></div>
								</div>
							</div>
						</div>
				</div>
				<div class="modal-footer add_product_button">
					<button class="btn clear_form" id="clear_vaccination" aria-label="Clear Form" role="button" type="button"><span class="clear_form_base">Clear Form</span></button>
					<button class="btn submit_immunization" id="submit_vaccination" type="submit"><span class="submit_product_base">Submit</span></button>
				</div>
				</form>
			</div>
		</div>
	</div>
	<div class="modal fade" role="dialog" tabindex="-1" id="add_surgery_history_modal">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content add_pet_record_modal">
				<div class="modal-header">
					<h1 class="modal-title">Add Surgery</h1>
					<button class="btn-close" id="close_surgery" aria-label="Close" data-bs-dismiss="modal" type="button"></button>
				</div>
				<div class="modal-body" style="width:100%;">
					<form action="{{ route('surg.history') }}" method="POST" class="add_client" id="add_pet_form-3">
						@csrf
						<input type="hidden" name="petrecord_id" id="surghisId">
						<div class="mb-3 input_container">
							<div class="new_input_row">
								<div class="form-floating" style="width:100%;">
									<select class="form-select form-select" name="surgery_type" id="surgery_type" data-id="surgery_type" placeholder="Surgery">
										<option value="" selected="">Surgery</option>
										<option value="Surgery 1">Surgery 1</option>
										<option value="Surgery 2">Surgery 2</option>
										<option value="Surgery 3">Surgery 3</option>
									</select>
									<label class="form-label form-label" for="surgery">Surgery<span>&nbsp;*</span></label>
									<div id="error-vaccination-1" class="error-message"><span>• Please select pet type</span></div>
									<div id="guide-vaccination-1" class="guide-message"><span>• Please select pet type</span></div>
								</div>
								<div class="form-floating" style="width:100%;">
									<input class="form-control form-control" name="surgery_date" id="surgery_date" data-id="surgery_date" placeholder="Date" type="date">
									<label class="form-label form-label" for="surgery_date">Date<span>&nbsp;*</span></label>
									<div class="error-message" id="error-pet_birthdate-3"><span>• Please click the calendar icon on the right part, and select your pet birthdate.</span></div>
									<div class="guide-message" id="guide_pet_birthdate-3"><span>• Please click the calendar icon on the right part, and select your pet birthdate.</span></div>
								</div>
							</div>
							<div class="new_input_row">
								<div class="form-floating" style="width:100%;">
									<select class="form-select" id="severity" name="severity" data-id="severity" placeholder="Reason for surgery">
										<option value="" selected="">Severity</option>
										<option value="Reason surgery 1">Low Risk</option>
										<option value="Reason surgery 2">Intermediate Risk</option>
										<option value="Reason surgery 3">High Risk</option>
									</select>
									<label class="form-label form-label" for="severity">Severity<span>&nbsp;*</span></label>
									<div id="error-medication-2" class="error-message"><span>• Please select pet type</span></div>
									<div id="guide-medication-2" class="guide-message"><span>• Please select pet type</span></div>
								</div>
								<div class="form-floating" style="width:100%;">
									<select class="form-select" id="med_id" name="med_id" data-id="med_id" placeholder="Medication">
										<option value=""disabled selected>Medication</option>
										@foreach ($med_info as $med_info)
										<option value="{{ $med_info->id }}">{{ $med_info->item_name }}</option>
										@endforeach
									</select>
									<label class="form-label form-label" for="med_id">Medication<span>&nbsp;*</span></label>
									<div id="error-medication-1" class="error-message"><span>• Please select pet type</span></div>
									<div id="guide-medication-1" class="guide-message"><span>• Please select pet type</span></div>
								</div>
							</div>
							<div class="d-flex justify-content-end align-items-end align-content-end align-self-end newinput_row" style="width: 100%;">
								<div class="form-floating" style="width: 100%;">
									<textarea class="form-control form-control" name="surgery_note" id="notes" data-id="notes" placeholder="Notes"></textarea>
									<label class="form-label" for="notes">Notes<span>&nbsp;*</span></label>
									<div id="error-notes" class="error-message"><span>• Please select pet type</span></div>
									<div id="guide-notes" class="guide-message"><span>• Please select pet type</span></div>
								</div>
							</div>
						</div>
				</div>
				<div class="modal-footer add_product_button">
					<button class="btn clear_form" id="clear_surgery" aria-label="Clear Form" role="button" type="button"><span class="clear_form_base">Clear Form</span></button>
					<button class="btn submit_surgery" id="submit_surgery" type="submit"><span class="submit_product_base">Submit</span></button>
				</div>
				</form>
			</div>
		</div>
	</div>


	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


@if (session('success'))
    <script>
        $(document).ready(function() {
            $('#add_pet_success').show();
            setTimeout(function() {
                $('#add_pet_success').hide();
            }, 2000);
        });
    </script>
@endif
@if (session('edit_success'))
    <script>
        $(document).ready(function() {
            $('#save_changes_success').show();
            setTimeout(function() {
                $('#save_changes_success').hide();
            }, 2000);
        });
    </script>
@endif
@if (session('med_success'))
    <script>
        $(document).ready(function() {
            $('#add_medical_histo_success').show();
            setTimeout(function() {
                $('#add_medical_histo_success').hide();
            }, 2000);
        });
    </script>
@endif
@if (session('vax_success'))
    <script>
        $(document).ready(function() {
            $('#add_immunization_histo_success').show();
            setTimeout(function() {
                $('#add_immunization_histo_success').hide();
            }, 2000);
        });
    </script>
@endif
@if (session('surg_success'))
    <script>
        $(document).ready(function() {
            $('#add_surgery_histo_success').show();
            setTimeout(function() {
                $('#add_surgery_histo_success').hide();
            }, 2000);
        });
    </script>
@endif
@if ($petrecordExists)
<script>
$('#empty_state_container').hide();
$('#add_pet_split_btn').css('display', 'flex');
$('#pet_records').css('display', 'flex');
</script>
@else
<script>
$('#empty_state_container').css('display', 'flex');
$('#add_pet_split_btn').hide();
$('#pet_records').hide();
</script> 
@endif
@if ($medHistoryExist)
<script>
$('#medical_empty_state').hide();
$('#add_diagnosis').css('display', 'flex');
$('#medical_history_table_container').css('display', 'flex');
</script>
@else
<script>
$('#medical_empty_state').css('display', 'flex');
$('#add_diagnosis').hide();
$('#medical_history_table_container').hide();
</script> 
@endif
@if ($vaxHistoryExist)
<script>
$('#immunization_empty_state').hide();
$('#add_immunization').css('display', 'flex');
$('#immunization_history_table_container').css('display', 'flex');
</script>
@else
<script>
$('#immunization_empty_state').css('display', 'flex');
$('#add_immunization').hide();
$('#immunization_history_table_container').hide();
</script> 
@endif
@if ($surgHistoryExist)
<script>
$('#surgery_empty_state').hide();
$('#add_surgery').css('display', 'flex');
$('#surgery_history_table_container').css('display', 'flex');
</script>
@else
<script>
$('#surgery_empty_state').css('display', 'flex');
$('#add_surgery').hide();
$('#surgery_history_table_container').hide();
</script> 
@endif
<script>
$(document).ready(function() {
	$('.archive_pet-action').click(function() {
		const id = $(this).data('container-id');
		$('#archiveId').val(id);
	});
	$('.Edit_pet-action').click(function() {
		const id = $(this).data('container-id');
		$('#editpetId').val(id);
		const petrecData = {
			'pet_name' :$(this).data('pet_name'),
			'gender' :$(this).data('gender'),
			'birthdate' :$(this).data('birthdate'),
			'age' :$(this).data('age'),
			'species' :$(this).data('species'),
			'breed' :$(this).data('breed'),
			'gender' :$(this).data('gender'),
		};
		$('#editPetName').val(petrecData.pet_name);
		$('.editGender').val(petrecData.gender);
		$('#editBirthdate').val(petrecData.birthdate);
		$('#editAge').val(petrecData.age);
		$('#editSpecies').val(petrecData.species);
		$('#editBreed').val(petrecData.breed);
	});
	$('.add_diagnosis-action').click(function() {
		const id = $(this).data('container-id');
		$('#medhisId').val(id);
	});
	$('.add_immunization_action').click(function() {
		const id = $(this).data('container-id');
		$('#vaxhisId').val(id);
	});
	$('.add_surgery_action').click(function() {
		const id = $(this).data('container-id');
		$('#surghisId').val(id);
	});
	$('.View_pet-action').click(function() {
			const id = $(this).data('container-id');
			$('#medhisId').val(id);
			$('#vaxhisId').val(id);
			$('#surghisId').val(id);
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
					$('#sterilization_status p').text(data.petInfo.sterilization);
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
							'<td>' + medhisto.diagnosis_desc + '</td>' +
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
						'<td>' + vaxhisto.status + '</td>' +
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
});
</script>

<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/sidebar.js') }}"></script>
<script src="{{ asset('assets/js/pet_records.js') }}"></script>


</body>

</html>
