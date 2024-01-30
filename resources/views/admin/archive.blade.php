@php
    use Carbon\Carbon;
@endphp
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" />
    <title>Admin | Archive</title>
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
    <main class="d-flex flex-row container-fluid" style="padding: 0;">
    @php
    $activeTab = 'archive'; // Set the active tab
    @endphp
        @include('includes.admin_header')
        
        <div class="content">
          <div id="rectangle" class="rectangle justify-content-between">
                <div>
                    <a id="menu-toggle" class="btn menu_toggle btn-link" role="button" href="#menu-toggle"><i class="fa fa-bars"></i></a>
                </div>
                <div class="d-flex flex-direction-row">
                    <button class="btn notification" id="notification" type="button"><span class="notification_base"><svg
                                xmlns="http://www.w3.org/2000/svg" width="15" height="18" viewbox="0 0 15 18"
                                fill="none">
                                <path
                                    d="M2.29482 10.4791L2.93736 10.866L2.93903 10.8632L2.29482 10.4791ZM1.38031 11.998L0.737787 11.6112L0.737673 11.6113L1.38031 11.998ZM2.23916 14.328L1.99871 15.0385L2.00149 15.0394L2.23916 14.328ZM12.7918 14.328L12.5564 13.6159L12.5542 13.6167L12.7918 14.328ZM13.6507 11.998L14.2938 11.6121L14.2932 11.6112L13.6507 11.998ZM12.7362 10.4791L12.0864 10.854L12.0937 10.866L12.7362 10.4791ZM8.99065 2.00199L8.78522 2.7233C9.0594 2.80139 9.35415 2.71728 9.54583 2.50625C9.7375 2.29522 9.79296 1.99376 9.68894 1.72833L8.99065 2.00199ZM6.0483 2.00199L5.35001 1.72833C5.24599 1.99376 5.30145 2.29522 5.49313 2.50625C5.68481 2.71728 5.97955 2.80139 6.25374 2.7233L6.0483 2.00199ZM5.83359 16.3002L5.30286 16.8301L5.30326 16.8305L5.83359 16.3002ZM7.51948 1.02137C4.47306 1.02137 1.99811 3.49632 1.99811 6.54274H3.49811C3.49811 4.32475 5.30148 2.52137 7.51948 2.52137V1.02137ZM1.99811 6.54274V8.84096H3.49811V6.54274H1.99811ZM1.99811 8.84096C1.99811 8.99314 1.96284 9.22832 1.89124 9.48627C1.8197 9.74398 1.72858 9.96429 1.65061 10.0951L2.93903 10.8632C3.10759 10.5804 3.24311 10.2242 3.33658 9.88749C3.42999 9.551 3.49811 9.17386 3.49811 8.84096H1.99811ZM1.6523 10.0923L0.737787 11.6112L2.02284 12.3849L2.93735 10.866L1.6523 10.0923ZM0.737673 11.6113C0.34933 12.2568 0.264391 12.9889 0.507 13.6441C0.749283 14.2984 1.2894 14.7984 1.99871 15.0384L2.47961 13.6176C2.15512 13.5078 1.98351 13.3119 1.91366 13.1233C1.84415 12.9355 1.84668 12.6776 2.02295 12.3847L0.737673 11.6113ZM2.00149 15.0394C5.58318 16.236 9.44782 16.236 13.0295 15.0394L12.5542 13.6167C9.28099 14.7103 5.75001 14.7103 2.47682 13.6167L2.00149 15.0394ZM13.0272 15.0401C14.4485 14.5703 15.0644 12.8965 14.2938 11.6121L13.0076 12.3839C13.2867 12.849 13.0596 13.4496 12.5564 13.6159L13.0272 15.0401ZM14.2932 11.6112L13.3787 10.0923L12.0937 10.866L13.0082 12.3849L14.2932 11.6112ZM13.3858 10.1043C13.3086 9.97054 13.2183 9.7472 13.1473 9.48852C13.0762 9.22901 13.0408 8.99336 13.0408 8.84096H11.5408C11.5408 9.17364 11.6089 9.55031 11.7008 9.88524C11.7928 10.221 11.9252 10.5742 12.0865 10.8539L13.3858 10.1043ZM13.0408 8.84096V6.54274H11.5408V8.84096H13.0408ZM13.0408 6.54274C13.0408 3.50428 10.5579 1.02137 7.51948 1.02137V2.52137C9.72952 2.52137 11.5408 4.3327 11.5408 6.54274H13.0408ZM9.19608 1.28067C8.10014 0.968542 6.93882 0.968542 5.84287 1.28067L6.25374 2.7233C7.08111 2.48766 7.95784 2.48766 8.78522 2.7233L9.19608 1.28067ZM6.7466 2.27564C6.86777 1.96645 7.16863 1.75 7.51948 1.75V0.25C6.53434 0.25 5.69008 0.860583 5.35001 1.72833L6.7466 2.27564ZM7.51948 1.75C7.87033 1.75 8.17119 1.96645 8.29236 2.27564L9.68894 1.72833C9.34888 0.860583 8.50461 0.25 7.51948 0.25V1.75ZM9.15516 14.6143C9.15516 15.5122 8.41739 16.25 7.51948 16.25V17.75C9.24582 17.75 10.6552 16.3407 10.6552 14.6143H9.15516ZM7.51948 16.25C7.07487 16.25 6.65887 16.0648 6.36392 15.7699L5.30326 16.8305C5.86716 17.3944 6.65991 17.75 7.51948 17.75V16.25ZM6.36432 15.7703C6.05752 15.463 5.88477 15.0468 5.88379 14.6126L4.38379 14.616C4.38567 15.4465 4.71607 16.2425 5.30286 16.8301L6.36432 15.7703Z"
                                    fill="#1C1C1C"></path></svg></span></button>
                    <div class="dropdown admin_btn">
                        <button class="btn dropdown-toggle admin" aria-expanded="false" data-bs-toggle="dropdown"
                            type="button"><img src="{{ asset('assets/img/image%2011%20(1).png') }}" alt="Admin"
                                width="40" height="40"></button>
                        <div class="dropdown-menu"><a class="dropdown-item" href="{{ route('admin.signout') }}">Sign Out</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main_content">
                <div id="client_header" class="client_header">
                    <div class="header_text_container">
                        <h1><strong>Archives</strong></h1>
                    </div>
                    <div class="btn-group split_btn" id="add_approve_appointment_split_btn" style="display: none;"><button class="btn add_Product_btn" id="approve_appointment_btn" type="button"><span class="add_Product_btn_base"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="27" viewBox="0 0 25 27" fill="none">
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
</svg> Add Appointment</span></button><button class="btn dropdown-toggle dropdown-toggle-split add_product_dropdown" data-bs-toggle="dropdown" aria-expanded="false" type="button"></button>
                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Generate Report</a></div>
                    </div>
                    <div class="btn-group split_btn" id="add_pending_appointment_split_btn" style="display: none;"><button class="btn add_Product_btn" id="pending_appointment_btn" type="button"><span class="add_Product_btn_base"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="27" viewBox="0 0 25 27" fill="none">
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
</svg> Add Appointment</span></button><button class="btn dropdown-toggle dropdown-toggle-split add_product_dropdown" data-bs-toggle="dropdown" aria-expanded="false" type="button"></button>
                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Generate Report</a></div>
                    </div>
                    <div class="btn-group split_btn" id="add_rejected_appointment_split_btn" style="display: none;"><button class="btn add_Product_btn" id="reject_appointment_btn" type="button"><span class="add_Product_btn_base"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="27" viewBox="0 0 25 27" fill="none">
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
</svg> Add Appointment</span></button><button class="btn dropdown-toggle dropdown-toggle-split add_product_dropdown" data-bs-toggle="dropdown" aria-expanded="false" type="button"></button>
                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Generate Report</a></div>
                    </div>
                </div>
                <div id="client_container" class="client_container">
                <div class="container_header">
					                <form action="" method="GET" role="search" id="archivedForm">
                                    <div class="left_part_product_header">
                                        <div class="search_container">
                                            <input type="text" class="search_input" name="search"
                                            value="{{ request('search') }}" placeholder="Search Appointment">
                                        </div>
                                        <button type="submit" form="approvedForm" class="btn filter_btn fw-bold"><i class="fa-solid fa-magnifying-glass"></i><span class="filter_btn_base">Search</span></button>
                                        <div class="dropdown">
                                            <button class="filter_btn dropdown-toggle fw-bold" type="button"
                                                id="dropdownMenuButton1" data-bs-toggle="dropdown" data-bs-auto-close="false"
                                                aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="26" viewBox="0 0 24 26" fill="none">
                                                  <g clip-path="url(#clip0_3674_15869)" filter="url(#filter0_d_3674_15869)">
                                                    <path d="M4 4H20V6.172C19.9999 6.70239 19.7891 7.21101 19.414 7.586L15 12V19L9 21V12.5L4.52 7.572C4.18545 7.20393 4.00005 6.7244 4 6.227V4Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
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
                                              </svg><span class="filter_btn_base">Filter By</span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-item ">
                                                  <div class="form-check form-switch">
                                                    <!-- Size of the default switch will increase 1.8 times -->
                                                    <input class="form-check-input my-3"
                                                          {{ request()->input('appointmentCheck') == 'on' ? 'checked' : '' }}
                                                           name ="appointmentCheck" 
                                                           type="checkbox" 
                                                           role="switch" 
                                                           id="approvedCheck" 
                                                           style="transform: scale(1.5);"
                                                           >
                                                    <label class="form-check-label fs-6 my-1" 
                                                           for="approvedCheck" 
                                                           >Appointment</label>
                                                  </div>
                                          
                                                </li>
                                                <li class="dropdown-item ">
                                                  <div class="form-check form-switch">
                                                    <!-- Size of the default switch will increase 1.8 times -->
                                                    <input class="form-check-input my-3"
                                                          {{ request()->input('clientCheck') == 'on' ? 'checked' : '' }}
                                                           name ="clientCheck" 
                                                           type="checkbox" 
                                                           role="switch" 
                                                           id="completedCheck" 
                                                           style="transform: scale(1.5);"
                                                           >
                                                  
                                                    <label class="form-check-label fs-6 my-1" 
                                                           for="completedCheck" 
                                                           >Client</label>
                                                  </div>
                                                </li>
                                                <li class="dropdown-item ">
                                                  <div class="form-check form-switch">
                                                    <!-- Size of the default switch will increase 1.8 times -->
                                                    <input class="form-check-input my-3"
                                                          {{ request()->input('inventoryCheck') == 'on' ? 'checked' : '' }}
                                                           name ="inventoryCheck" 
                                                           type="checkbox" 
                                                           role="switch" 
                                                           id="dogCheck" 
                                                           style="transform: scale(1.5);"
                                                           >
                                                  
                                                    <label class="form-check-label fs-6 my-1" 
                                                           for="dogCheck" 
                                                           >Product</label>
                                                  </div>
                                          
                                                </li>
                                                <li class="dropdown-item ">
                                                    <div class="form-check form-switch">
                                                      <!-- Size of the default switch will increase 1.8 times -->
                                                      <input class="form-check-input my-3"
                                                            {{ request()->input('petrecordCheck') == 'on' ? 'checked' : '' }}
                                                             name ="petrecordCheck" 
                                                             type="checkbox" 
                                                             role="switch" 
                                                             id="catCheck" 
                                                             style="transform: scale(1.5);"
                                                             >
                                                    
                                                      <label class="form-check-label fs-6 my-1" 
                                                             for="catCheck" 
                                                             >Pet Record</label>
                                                    </div>
                                            
                                                  </li>
                                            </ul>
                                        </div>
                                        
                                        <div class="dropdown">
                                            <button class="filter_btn dropdown-toggle fw-bold" type="button"
                                                id="dropdownMenuButton1" data-bs-toggle="dropdown" data-bs-auto-close="false"
                                                aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<g clip-path="url(#clip0_6770_15021)">
														<path d="M4 6H13M4 12H11M4 18H11M15 15L18 18M18 18L21 15M18 18V6" stroke="black" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
													</g>
													<defs>
														<clipPath id="clip0_6770_15021">
														<rect width="24" height="24" fill="white"/>
														</clipPath>
													</defs>
													</svg><span class="filter_btn_base">
													Sort By 
												</span>
                                                </button>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-item ">
                                                    <input class="form-check-input me-1" type="radio" id = "radio1"
                                                        name="sortItems"{{ request()->input('sortItems', '0') == '0' ? 'checked' : '' }}  value="0">
                                                    <label class="form-check-label ms-1 fs-6" for="radio1">
                                                        Title
                                                </li>
                                                <li class="dropdown-item">
                                                    <input class="form-check-input me-1" type="radio" id = "radio2"
                                                        name="sortItems" {{ request()->input('sortItems') == '1' ? 'checked' : '' }} value="1">
                                                    <label class="form-check-label ms-1 fs-6" for="radio2">
                                                        Source
                                                </li>
                                                <li class="dropdown-item">
                                                    <input class="form-check-input me-1" type="radio" id = "radio3"
                                                        name="sortItems" {{ request()->input('sortItems') == '2' ? 'checked' : '' }} value="2">
                                                    <label class="form-check-label ms-1 fs-6" for="radio3">
                                                        Created Date
                                                </li>
                                                <li class="dropdown-item">
                                                    <input class="form-check-input me-1" type="radio" id = "radio4"
                                                        name="sortItems" {{ request()->input('sortItems') == '3' ? 'checked' : '' }} value="3">
                                                    <label class="form-check-label ms-1 fs-6" for="radio4">
                                                        Archived Date
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
                                                          <button type="submit" form="archivedForm" class="btn apply_filter btn-sm ms-3"><span class="apply_filter_base">Apply Sort</span></button>
                                                      </div>
                                                  </div>
                                              </li>
                                            </ul>
                                        </div>
          
                                    </div>
                                </form>
			</div>
                    <div id="archives_empty_state_container" class="empty_state_container">
                        <div class="empty_state"><div><svg xmlns="http://www.w3.org/2000/svg" width="176" height="110" viewBox="0 0 176 110" fill="none">
  <g clip-path="url(#clip0_6278_24732)">
    <path d="M135.115 83.0864C142.302 65.1185 140.128 45.0554 130.859 29.6466L33.8303 43.0813L126.814 23.7028C87.6255 -25.1661 11.3501 7.24805 18.7026 68.9485L135.115 83.0864Z" fill="#E6E6E6"/>
    <path d="M139.397 63.2246H15.7812V101.717H139.397V63.2246Z" fill="#004D53"/>
    <path d="M50.2571 58.5303C51.3662 59.3916 51.7717 59.6696 52.0079 59.6343C63.4514 62.9667 53.4195 66.872 47.8594 60.2429L50.2571 58.5303Z" fill="#FFB8B8"/>
    <path d="M12.4961 93.7372V101.561L18.1291 101.248L16.5645 93.1113L12.4961 93.7372Z" fill="#FFB8B8"/>
    <path d="M43.7894 93.7372V101.561L38.1562 101.248L39.7211 93.1113L43.7894 93.7372Z" fill="#FFB8B8"/>
    <path d="M26.5757 53.3667L35.0254 53.0537C54.5176 73.4886 47.1461 68.8278 46.6045 96.8667L36.2772 93.7372L38.4678 74.3343C38.4689 74.3336 39.0457 73.9491 38.5663 73.9402C35.568 74.9706 33.3803 62.2132 26.8887 63.694C19.5015 63.3406 18.2989 74.2991 15.3095 74.3343L17.5002 93.7372L7.1728 96.8667C6.01651 66.0548 0.349483 73.0152 18.752 53.0537L26.5757 53.3667Z" fill="#2F2E41"/>
    <path d="M14.0591 99.0574C14.0591 99.0574 12.8073 96.5538 11.2426 97.8056C9.67782 99.0574 5.92241 102.813 5.92241 102.813C5.92241 102.813 -3.15314 106.881 2.47996 109.385C8.11306 111.888 12.8073 105.942 12.8073 105.942C18.1728 104.823 21.2676 104.107 18.4222 98.2546C16.8068 98.9536 14.5207 99.7629 14.0591 99.0574Z" fill="#2F2E41"/>
    <path d="M42.2236 99.0574C42.2236 99.0574 43.4754 96.5538 45.0401 97.8056C46.6049 99.0574 50.3603 102.813 50.3603 102.813C50.3603 102.813 59.4358 106.881 53.8027 109.385C48.1696 111.888 43.4754 105.942 43.4754 105.942C38.1099 104.823 35.0151 104.107 37.8605 98.2546C39.4759 98.9536 41.762 99.7629 42.2236 99.0574Z" fill="#2F2E41"/>
    <path d="M35.0279 18.0037C34.5624 25.7943 23.93 25.1085 23.7617 18.0037C24.2271 10.2131 34.8596 10.899 35.0279 18.0037Z" fill="#FFB8B8"/>
    <path d="M26.8906 22.0717C29.6284 30.3461 23.1647 25.8412 32.2108 32.399L35.6532 25.5141C35.6532 25.5141 33.1496 24.5753 33.4626 21.1328L26.8906 22.0717Z" fill="#FFB8B8"/>
    <path d="M43.7897 26.7661L34.4607 24.6367C34.7231 30.2618 28.7202 29.1296 27.6727 26.3001L18.7536 31.4603C22.4972 45.4031 21.5485 45.9784 16.563 54.9316C14.6603 56.669 17.5058 57.6648 19.983 56.7141C21.8723 55.548 22.8318 54.5117 24.8563 54.7754C34.4226 56.7673 42.3864 57.2375 43.6467 56.4591C44.0977 55.8137 43.6336 26.8781 43.7897 26.7661Z" fill="#575A89"/>
    <path d="M41.2852 27.3919C41.5981 27.3919 43.2102 26.6339 43.2102 26.6339C47.9003 26.5549 51.0476 58.1031 51.2996 58.9999L48.1701 61.1905L43.1629 48.3596L41.2852 27.3919Z" fill="#575A89"/>
    <path d="M19.3789 64.0068C19.5389 65.1878 19.8112 78.4514 24.5625 72.2557C25.1859 67.7355 23.0666 66.3861 22.5084 63.3809L19.3789 64.0068Z" fill="#FFB8B8"/>
    <path d="M20.6299 31.4601L19.671 30.9285C17.1003 30.844 17.9105 37.6489 16.8228 42.6323C15.9343 48.4379 16.1873 54.8394 17.2298 63.3979C17.3209 66.5385 22.9461 64.56 23.7594 64.3199C23.7594 64.3199 21.8817 51.4889 22.8205 49.2983C23.7594 47.1076 20.6299 31.4601 20.6299 31.4601Z" fill="#575A89"/>
    <path d="M34.7812 12.5423C33.9121 11.131 32.5518 10.0911 30.962 9.6226L29.7943 10.5567L30.2483 9.46717C29.8665 9.40893 29.4802 9.3866 29.0942 9.40047L28.0436 10.7513L28.4784 9.44674C23.9702 9.9308 21.303 15.106 23.6434 18.728C24.0045 17.6185 24.4426 16.5775 24.8037 15.468C25.0874 15.5067 25.375 15.5081 25.6591 15.4722L26.0983 14.4473L26.221 15.4288C27.5825 15.3102 29.6018 15.0498 30.8925 14.8112L30.767 14.0582L31.5178 14.6839C31.9133 14.5929 32.1481 14.5104 32.1287 14.4473C33.0886 15.9947 34.0397 16.9832 34.9996 18.5306C35.3639 16.3479 36.0072 14.5335 34.7812 12.5423Z" fill="#2F2E41"/>
    <path d="M131.996 67.8682H104.695V80.8183H131.996V67.8682Z" fill="white"/>
    <path d="M126.835 70.5801H109.859V72.1329H126.835V70.5801Z" fill="#E6E6E6"/>
    <path d="M126.835 73.5664H109.859V75.1192H126.835V73.5664Z" fill="#E6E6E6"/>
    <path d="M126.835 76.5527H109.859V78.1055H126.835V76.5527Z" fill="#E6E6E6"/>
    <path d="M80.9231 70.9443L80.0351 69.4063L79.1472 67.8682L78.2592 69.4063L77.3711 70.9443H78.3252V75.3982H79.969V70.9443H80.9231Z" fill="white"/>
    <path d="M141.093 102.636C145.132 102.636 148.405 99.3621 148.405 95.3238C148.405 91.2854 145.132 88.0117 141.093 88.0117C137.055 88.0117 133.781 91.2854 133.781 95.3238C133.781 99.3621 137.055 102.636 141.093 102.636Z" fill="#3F3D56"/>
    <path d="M142.424 98.5642C144.214 98.5642 145.665 97.1133 145.665 95.3236C145.665 93.5339 144.214 92.083 142.424 92.083C140.634 92.083 139.184 93.5339 139.184 95.3236C139.184 97.1133 140.634 98.5642 142.424 98.5642Z" fill="#E6E6E6"/>
    <path d="M136.484 100.434L152.437 107.081L151.939 108.66L142.757 107.621L127.219 100.724L135.86 101.722L136.484 100.434Z" fill="#3F3D56"/>
    <path d="M150.584 106.782L170.426 41.6943L175.258 33.1134L175.275 33.0306C175.29 32.9549 175.645 31.1614 174.772 29.8625C174.552 29.5396 174.268 29.2655 173.938 29.0573C173.607 28.849 173.237 28.7111 172.851 28.6521C170.184 28.1521 164.218 27.9058 163.966 27.8955L163.918 27.8936L163.871 27.9C163.708 27.9222 159.895 28.4796 159.033 31.809L154.885 39.3585L154.869 39.4123L136.09 101.149L137.123 101.464L155.886 39.7803L160.048 32.2054L160.065 32.1357C160.674 29.6303 163.588 29.0441 163.975 28.9771C164.585 29.0031 170.192 29.2526 172.652 29.7138C172.896 29.7471 173.131 29.8307 173.341 29.9594C173.551 30.0881 173.733 30.259 173.873 30.4614C174.411 31.2577 174.277 32.4302 174.229 32.7384L169.427 41.2668L169.41 41.323L149.551 106.467L150.584 106.782Z" fill="#3F3D56"/>
    <path d="M153.485 45.6001L153.293 46.6631L167.623 49.2513L167.815 48.1883L153.485 45.6001Z" fill="#3F3D56"/>
    <path d="M150.81 54.4407L150.594 55.499L164.822 58.4029L165.038 57.3445L150.81 54.4407Z" fill="#3F3D56"/>
    <path d="M146.043 70.2506L145.746 71.2891L159.637 75.2638L159.934 74.2253L146.043 70.2506Z" fill="#3F3D56"/>
    <path d="M155.438 100.896L155.832 99.8895L142.349 94.6101L141.687 87.4413L154.271 92.1416L158.348 98.0406L159.237 97.4266L154.967 91.2482L140.453 85.8271L141.335 95.373L155.438 100.896Z" fill="#3F3D56"/>
    <path d="M160.121 109.615C164.159 109.615 167.433 106.342 167.433 102.303C167.433 98.2649 164.159 94.9912 160.121 94.9912C156.082 94.9912 152.809 98.2649 152.809 102.303C152.809 106.342 156.082 109.615 160.121 109.615Z" fill="#3F3D56"/>
    <path d="M162.034 105.876C163.823 105.876 165.274 104.425 165.274 102.635C165.274 100.845 163.823 99.3945 162.034 99.3945C160.244 99.3945 158.793 100.845 158.793 102.635C158.793 104.425 160.244 105.876 162.034 105.876Z" fill="#E6E6E6"/>
  </g>
  <defs>
    <clipPath id="clip0_6278_24732">
      <rect width="174.723" height="110" fill="white" transform="translate(0.636719)"/>
    </clipPath>
  </defs>
</svg></div>
                            <div class="empty_state_message_container">
                                <h1>NO ARCHIVES YET!</h1>
                                <div class="empty_state_paragraph_container">
                                    <p>Looks like you have nothing in the archives yet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive" id="archives_table_container" style="align-self:stretch;display:none;overflow:visible;">
                        <table class="table table-responsive mt-3 w-100">
                            <thead>
                                <tr>
                                    <th><input type="radio" id="Select_All_Archive" class="checkbox"></th>
                                    <th>ID</th>
                                    <th>title</th>
                                    <th>source</th>
                                    <th>created</th>
                                    <th>archived</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="archive_table_body">
                              @foreach ($archived as $index => $record)
                                <tr>
                                    <td><input type="radio" class="checkbox"></td>
                                    <td>{{ $index + 1 }}</td>
                                    <td>
                                        @if ($record instanceof App\Models\Admin\MedInfo)
                                            {{ $record->item_name }} <!-- Display MedInfo-specific field -->
                                        @elseif ($record instanceof App\Models\Admin\VaxInfo)
                                            {{ $record->item_name }} <!-- Display VaxInfo-specific field -->
                                        @elseif ($record instanceof App\Models\Admin\VitInfo)
                                            {{ $record->item_name }} <!-- Display VitInfo-specific field -->
                                        @elseif ($record instanceof App\Models\Admin\PetRecord)
                                            {{ $record->pet->name }} <!-- Display PetRecord-specific field -->
                                        @elseif ($record instanceof App\Models\Admin\AppointmentApproved)
                                            {{$record->clients->first_name }} {{$record->clients->middle_name}} {{$record->clients->last_name }} {{$record->clients->suffix }} <!-- Display AppointmentApproved-specific field -->
                                        @elseif ($record instanceof App\Models\User\Clients)
                                            {{$record->first_name }} {{$record->middle_name}} {{$record->last_name }} {{$record->suffix }} <!-- Display AppointmentApproved-specific field -->
                                        @endif                                    
                                    </td>
                                    <td>
                                        @if ($record instanceof App\Models\Admin\MedInfo)
                                            Inventory <!-- Display common label for MedInfo -->
                                        @elseif ($record instanceof App\Models\Admin\VaxInfo)
                                            Inventory <!-- Display common label for VaxInfo -->
                                        @elseif ($record instanceof App\Models\Admin\VitInfo)
                                            Inventory <!-- Display common label for VitInfo -->
                                        @elseif ($record instanceof App\Models\Admin\PetRecord)
                                            Pet Record <!-- Display common label for PetRecord -->
                                        @elseif ($record instanceof App\Models\Admin\AppointmentApproved)
                                            Appointment <!-- Display common label for AppointmentApproved -->
                                        @elseif ($record instanceof App\Models\User\Clients)
                                            Client <!-- Display common label for AppointmentApproved -->
                                        @endif                                    </td>
                                    <td>{{ $record->created_at->format('Y-m-d') }}</td>
                                    <td>{{ Carbon::parse($record->archived_at)->format('Y-m-d') }}</td>
                                    <td>
                                      @if ($record instanceof App\Models\Admin\MedInfo)
                                      <button class="btn unarchive_med" id="unarchive_med" type="button" data-product-type="{{ $record->product_type }}" data-record-id="{{ $record->id }}"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <g clip-path="url(#clip0_6404_6376)">
                                          <path d="M9 14L5 10M5 10L9 6M5 10H16C17.0609 10 18.0783 10.4214 18.8284 11.1716C19.5786 11.9217 20 12.9391 20 14C20 15.0609 19.5786 16.0783 18.8284 16.8284C18.0783 17.5786 17.0609 18 16 18H15" stroke="#1C1C1C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                          <clipPath id="clip0_6404_6376">
                                            <rect width="24" height="24" fill="white"/>
                                          </clipPath>
                                        </defs>
                                        </svg></span>
                                      </button>
                                      @elseif ($record instanceof App\Models\Admin\VaxInfo)
                                      <button class="btn unarchive_vax" id="unarchive_vax" type="button" data-product-type="{{ $record->product_type }}" data-product-id="{{ $record->id }}"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <g clip-path="url(#clip0_6404_6376)">
                                          <path d="M9 14L5 10M5 10L9 6M5 10H16C17.0609 10 18.0783 10.4214 18.8284 11.1716C19.5786 11.9217 20 12.9391 20 14C20 15.0609 19.5786 16.0783 18.8284 16.8284C18.0783 17.5786 17.0609 18 16 18H15" stroke="#1C1C1C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                          <clipPath id="clip0_6404_6376">
                                            <rect width="24" height="24" fill="white"/>
                                          </clipPath>
                                        </defs>
                                        </svg></span>
                                      </button>
                                      @elseif  ($record instanceof App\Models\Admin\VitInfo)
                                      <button class="btn unarchive_vit" id="unarchive_vit" type="button" data-product-type="{{ $record->product_type }}" data-product-id="{{ $record->id }}"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <g clip-path="url(#clip0_6404_6376)">
                                          <path d="M9 14L5 10M5 10L9 6M5 10H16C17.0609 10 18.0783 10.4214 18.8284 11.1716C19.5786 11.9217 20 12.9391 20 14C20 15.0609 19.5786 16.0783 18.8284 16.8284C18.0783 17.5786 17.0609 18 16 18H15" stroke="#1C1C1C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                          <clipPath id="clip0_6404_6376">
                                            <rect width="24" height="24" fill="white"/>
                                          </clipPath>
                                        </defs>
                                        </svg></span>
                                      </button>
                                      @elseif ($record instanceof App\Models\Admin\PetRecord)
                                      <button class="btn unarchive_petrec" id="unarchive_petrec" type="button" data-record-id="{{ $record->id }}"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <g clip-path="url(#clip0_6404_6376)">
                                          <path d="M9 14L5 10M5 10L9 6M5 10H16C17.0609 10 18.0783 10.4214 18.8284 11.1716C19.5786 11.9217 20 12.9391 20 14C20 15.0609 19.5786 16.0783 18.8284 16.8284C18.0783 17.5786 17.0609 18 16 18H15" stroke="#1C1C1C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                          <clipPath id="clip0_6404_6376">
                                            <rect width="24" height="24" fill="white"/>
                                          </clipPath>
                                        </defs>
                                        </svg></span>
                                      </button>
                                      @elseif ($record instanceof App\Models\Admin\AppointmentApproved)
                                      <button class="btn unarchive_appointment" id="revert_archived-1" type="button" data-record-id="{{ $record->id }}"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <g clip-path="url(#clip0_6404_6376)">
                                          <path d="M9 14L5 10M5 10L9 6M5 10H16C17.0609 10 18.0783 10.4214 18.8284 11.1716C19.5786 11.9217 20 12.9391 20 14C20 15.0609 19.5786 16.0783 18.8284 16.8284C18.0783 17.5786 17.0609 18 16 18H15" stroke="#1C1C1C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                          <clipPath id="clip0_6404_6376">
                                            <rect width="24" height="24" fill="white"/>
                                          </clipPath>
                                        </defs>
                                        </svg></span>
                                      </button>
                                      @elseif ($record instanceof App\Models\User\Clients)
                                      <button class="btn unarchive_client" id="revert_archived-1" type="button" data-record-id="{{ $record->id }}"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <g clip-path="url(#clip0_6404_6376)">
                                          <path d="M9 14L5 10M5 10L9 6M5 10H16C17.0609 10 18.0783 10.4214 18.8284 11.1716C19.5786 11.9217 20 12.9391 20 14C20 15.0609 19.5786 16.0783 18.8284 16.8284C18.0783 17.5786 17.0609 18 16 18H15" stroke="#1C1C1C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                          <clipPath id="clip0_6404_6376">
                                            <rect width="24" height="24" fill="white"/>
                                          </clipPath>
                                        </defs>
                                        </svg></span>
                                      </button>
                                      @endif                                    
                                    </td>
                                </tr>
                              @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
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
                    </svg></span>
                    </div>
                </div>
                <div class="modal-body archive_message">
                    <div>
                        <h1><strong>Revert archive state?</strong></h1>
                        <p>You are about to restore the selected items. Continue?</p>
                    </div>
                </div>
                <div class="modal-footer discard_footer"><button class="btn return_btn" data-bs-dismiss="modal" type="button"><span class="return_btn_base">Cancel</span></button>
                <button class="btn archive_confirm" id="archive_confirm_button" type="button" data-bs-dismiss="modal"><span class="archive_confirm_button_base">Continue</span></button></div>
            </div>
        </div>
    </div>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  @if ($dataExist)
  <script>
        $('#archives_empty_state_container').hide();
        $('#archives_table_container').show();
  </script>
  @else
  <script>
        $('#archives_empty_state_container').show();
        $('#archives_table_container').hide();
  </script>  
  @endif
  @if ($dataExist)
  <script>
        $('#archives_empty_state_container').hide();
        $('#archives_table_container').show();
  </script>
  @else
  <script>
        $('#archives_empty_state_container').show();
        $('#archives_table_container').hide();
  </script>  
  @endif
  <script>
            var SelectAll = document.getElementById("Select_All_Archive");

            SelectAll.addEventListener("click", function () {
    var tableBody = document.getElementById('archive_table_body');
    var rowCheckboxes = tableBody.querySelectorAll("input[type='radio']");

    rowCheckboxes.forEach(function (checkbox) {
        checkbox.checked = !checkbox.checked; // Toggle the state
    });

});
    </script>

  <script>
    $(document).ready(function() {
      $('.unarchive_med').on('click', function() {
        const id = $(this).data('record-id');
        $('#archive_modal').modal('show');
        $('#archive_confirm_button').on('click', function() {
            $.ajax({
                type: 'POST',
                url: `/admin/archive/medicine/${id}`,
                data: {_token: '{{ csrf_token() }}'},
                success: function(response) {
                    alert('Product has been unarchived');
                    location.reload();
                },
                error: function(xhr) {
                    console.error(xhr.responseText);
                }
            });
        });
      });
      $('.unarchive_vax').on('click', function() {
        const id = $(this).data('record-id');
        $('#archive_modal').modal('show');
        $('#archive_confirm_button').on('click', function() {
            $.ajax({
                type: 'POST',
                url: `/admin/archive/vaccine/${id}`,
                data: {_token: '{{ csrf_token() }}'},
                success: function(response) {
                    alert('Product has been unarchived');
                    location.reload();
                },
                error: function(xhr) {
                    console.error(xhr.responseText);
                }
            });
        });
      });
      $('.unarchive_vit').on('click', function() {
        const id = $(this).data('record-id');
        $('#archive_modal').modal('show');
        $('#archive_confirm_button').on('click', function() {
            $.ajax({
                type: 'POST',
                url: `/admin/archive/vitamin/${id}`,
                data: {_token: '{{ csrf_token() }}'},
                success: function(response) {
                    alert('Product has been unarchived');
                    location.reload();
                },
                error: function(xhr) {
                    console.error(xhr.responseText);
                }
            });
        });
      });
      $('.unarchive_petrec').on('click', function() {
        const id = $(this).data('record-id');
        $('#archive_modal').modal('show');
        $('#archive_confirm_button').on('click', function() {
            $.ajax({
                type: 'POST',
                url: `/admin/archive/petrecord/${id}`,
                data: {_token: '{{ csrf_token() }}'},
                success: function(response) {
                    alert('Pet Record has been unarchived');
                    location.reload();
                },
                error: function(xhr) {
                    console.error(xhr.responseText);
                }
            });
        });
      });
      $('.unarchive_appointment').on('click', function() {
        const id = $(this).data('record-id');
        $('#archive_modal').modal('show');
        $('#archive_confirm_button').on('click', function() {
            $.ajax({
                type: 'POST',
                url: `/admin/archive/appointment/${id}`,
                data: {_token: '{{ csrf_token() }}'},
                success: function(response) {
                    alert('Appointment has been unarchived');
                    location.reload();
                },
                error: function(xhr) {
                    console.error(xhr.responseText);
                }
            });
        });
      });
      $('.unarchive_client').on('click', function() {
        const id = $(this).data('record-id');
        $('#archive_modal').modal('show');
        $('#archive_confirm_button').on('click', function() {
            $.ajax({
                type: 'POST',
                url: `/admin/archive/client/${id}`,
                data: {_token: '{{ csrf_token() }}'},
                success: function(response) {
                    alert('Client has been unarchived');
                    location.reload();
                },
                error: function(xhr) {
                    console.error(xhr.responseText);
                }
            });
        });
      });
    });
  </script>

  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/bs-init.js') }}"></script>
  <script src="{{ asset('assets/js/sidebartry.js') }}"></script>
  <script src="{{ asset('assets/js/sidebar.js') }}"></script> 


</body>

</html>