<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" />
    <title>Appointment Management</title>
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
<style>
    .dropdown-item label {
         display: block;
         padding: 0.5rem 1rem;
         cursor: pointer;
     }
 </style>

<body>
    <main class="d-flex flex-row container-fluid" style="padding: 0;">
     @php $activeTab = 'appointment'; @endphp 
        @include('includes.admin_header')
        <div class="content">
            <div id="rectangle" class="rectangle">
                <button class="btn notification" id="notification" type="button"><span class="notification_base"><svg
                            xmlns="http://www.w3.org/2000/svg" width="15" height="18" viewbox="0 0 15 18"
                            fill="none">
                            <path
                                d="M2.29482 10.4791L2.93736 10.866L2.93903 10.8632L2.29482 10.4791ZM1.38031 11.998L0.737787 11.6112L0.737673 11.6113L1.38031 11.998ZM2.23916 14.328L1.99871 15.0385L2.00149 15.0394L2.23916 14.328ZM12.7918 14.328L12.5564 13.6159L12.5542 13.6167L12.7918 14.328ZM13.6507 11.998L14.2938 11.6121L14.2932 11.6112L13.6507 11.998ZM12.7362 10.4791L12.0864 10.854L12.0937 10.866L12.7362 10.4791ZM8.99065 2.00199L8.78522 2.7233C9.0594 2.80139 9.35415 2.71728 9.54583 2.50625C9.7375 2.29522 9.79296 1.99376 9.68894 1.72833L8.99065 2.00199ZM6.0483 2.00199L5.35001 1.72833C5.24599 1.99376 5.30145 2.29522 5.49313 2.50625C5.68481 2.71728 5.97955 2.80139 6.25374 2.7233L6.0483 2.00199ZM5.83359 16.3002L5.30286 16.8301L5.30326 16.8305L5.83359 16.3002ZM7.51948 1.02137C4.47306 1.02137 1.99811 3.49632 1.99811 6.54274H3.49811C3.49811 4.32475 5.30148 2.52137 7.51948 2.52137V1.02137ZM1.99811 6.54274V8.84096H3.49811V6.54274H1.99811ZM1.99811 8.84096C1.99811 8.99314 1.96284 9.22832 1.89124 9.48627C1.8197 9.74398 1.72858 9.96429 1.65061 10.0951L2.93903 10.8632C3.10759 10.5804 3.24311 10.2242 3.33658 9.88749C3.42999 9.551 3.49811 9.17386 3.49811 8.84096H1.99811ZM1.6523 10.0923L0.737787 11.6112L2.02284 12.3849L2.93735 10.866L1.6523 10.0923ZM0.737673 11.6113C0.34933 12.2568 0.264391 12.9889 0.507 13.6441C0.749283 14.2984 1.2894 14.7984 1.99871 15.0384L2.47961 13.6176C2.15512 13.5078 1.98351 13.3119 1.91366 13.1233C1.84415 12.9355 1.84668 12.6776 2.02295 12.3847L0.737673 11.6113ZM2.00149 15.0394C5.58318 16.236 9.44782 16.236 13.0295 15.0394L12.5542 13.6167C9.28099 14.7103 5.75001 14.7103 2.47682 13.6167L2.00149 15.0394ZM13.0272 15.0401C14.4485 14.5703 15.0644 12.8965 14.2938 11.6121L13.0076 12.3839C13.2867 12.849 13.0596 13.4496 12.5564 13.6159L13.0272 15.0401ZM14.2932 11.6112L13.3787 10.0923L12.0937 10.866L13.0082 12.3849L14.2932 11.6112ZM13.3858 10.1043C13.3086 9.97054 13.2183 9.7472 13.1473 9.48852C13.0762 9.22901 13.0408 8.99336 13.0408 8.84096H11.5408C11.5408 9.17364 11.6089 9.55031 11.7008 9.88524C11.7928 10.221 11.9252 10.5742 12.0865 10.8539L13.3858 10.1043ZM13.0408 8.84096V6.54274H11.5408V8.84096H13.0408ZM13.0408 6.54274C13.0408 3.50428 10.5579 1.02137 7.51948 1.02137V2.52137C9.72952 2.52137 11.5408 4.3327 11.5408 6.54274H13.0408ZM9.19608 1.28067C8.10014 0.968542 6.93882 0.968542 5.84287 1.28067L6.25374 2.7233C7.08111 2.48766 7.95784 2.48766 8.78522 2.7233L9.19608 1.28067ZM6.7466 2.27564C6.86777 1.96645 7.16863 1.75 7.51948 1.75V0.25C6.53434 0.25 5.69008 0.860583 5.35001 1.72833L6.7466 2.27564ZM7.51948 1.75C7.87033 1.75 8.17119 1.96645 8.29236 2.27564L9.68894 1.72833C9.34888 0.860583 8.50461 0.25 7.51948 0.25V1.75ZM9.15516 14.6143C9.15516 15.5122 8.41739 16.25 7.51948 16.25V17.75C9.24582 17.75 10.6552 16.3407 10.6552 14.6143H9.15516ZM7.51948 16.25C7.07487 16.25 6.65887 16.0648 6.36392 15.7699L5.30326 16.8305C5.86716 17.3944 6.65991 17.75 7.51948 17.75V16.25ZM6.36432 15.7703C6.05752 15.463 5.88477 15.0468 5.88379 14.6126L4.38379 14.616C4.38567 15.4465 4.71607 16.2425 5.30286 16.8301L6.36432 15.7703Z"
                                fill="#1C1C1C"></path>
                        </svg></span></button>
                <div class="dropdown admin_btn">
                    <button class="btn dropdown-toggle admin" aria-expanded="false" data-bs-toggle="dropdown"
                        type="button"><img src="{{ asset('assets/img/image%2011%20(1).png') }}" alt="Admin"
                            width="40" height="40"></button>
                    <div class="dropdown-menu"><a class="dropdown-item" href="{{ route('admin.signout') }}">Sign Out</a>
                    </div>
                </div>
            </div>
            <div class="main_content">
                <div id="client_header" class="client_header">
                    <div class="header_text_container">
                        <h1><strong>Appointment</strong></h1>
                    </div>
                    <div class="btn-group split_btn" id="add_approve_appointment_split_btn" style="display: none;">
                        <button class="btn add_Product_btn" id="approved_appointment_btn" type="button"><span
                                class="add_Product_btn_base"><svg xmlns="http://www.w3.org/2000/svg" width="25"
                                    height="27" viewBox="0 0 25 27" fill="none">
                                    <g clip-path="url(#clip0_6356_20985)" filter="url(#filter0_d_6356_20985)">
                                        <path
                                            d="M12.5 21H6C5.46957 21 4.96086 20.7893 4.58579 20.4142C4.21071 20.0391 4 19.5304 4 19V7C4 6.46957 4.21071 5.96086 4.58579 5.58579C4.96086 5.21071 5.46957 5 6 5H18C18.5304 5 19.0391 5.21071 19.4142 5.58579C19.7893 5.96086 20 6.46957 20 7V12M16 3V7M8 3V7M4 11H20M16 19H22M19 16V22"
                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <filter id="filter0_d_6356_20985" x="-2" y="0" width="28" height="28"
                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                            <feOffset dy="2" />
                                            <feGaussianBlur stdDeviation="1" />
                                            <feComposite in2="hardAlpha" operator="out" />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" />
                                            <feBlend mode="normal" in2="BackgroundImageFix"
                                                result="effect1_dropShadow_6356_20985" />
                                            <feBlend mode="normal" in="SourceGraphic"
                                                in2="effect1_dropShadow_6356_20985" result="shape" />
                                        </filter>
                                        <clipPath id="clip0_6356_20985">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg> Add Appointment</span></button><button
                            class="btn dropdown-toggle dropdown-toggle-split add_product_dropdown"
                            data-bs-toggle="dropdown" aria-expanded="false" type="button"></button>
                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Generate Report</a></div>
                    </div>
                    <div class="btn-group split_btn" id="add_pending_appointment_split_btn" style="display: none;">
                        <button class="btn add_Product_btn" id="pending_appointment_btn" type="button"><span
                                class="add_Product_btn_base"><svg xmlns="http://www.w3.org/2000/svg" width="25"
                                    height="27" viewBox="0 0 25 27" fill="none">
                                    <g clip-path="url(#clip0_6356_20985)" filter="url(#filter0_d_6356_20985)">
                                        <path
                                            d="M12.5 21H6C5.46957 21 4.96086 20.7893 4.58579 20.4142C4.21071 20.0391 4 19.5304 4 19V7C4 6.46957 4.21071 5.96086 4.58579 5.58579C4.96086 5.21071 5.46957 5 6 5H18C18.5304 5 19.0391 5.21071 19.4142 5.58579C19.7893 5.96086 20 6.46957 20 7V12M16 3V7M8 3V7M4 11H20M16 19H22M19 16V22"
                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <filter id="filter0_d_6356_20985" x="-2" y="0" width="28" height="28"
                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                result="hardAlpha" />
                                            <feOffset dy="2" />
                                            <feGaussianBlur stdDeviation="1" />
                                            <feComposite in2="hardAlpha" operator="out" />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" />
                                            <feBlend mode="normal" in2="BackgroundImageFix"
                                                result="effect1_dropShadow_6356_20985" />
                                            <feBlend mode="normal" in="SourceGraphic"
                                                in2="effect1_dropShadow_6356_20985" result="shape" />
                                        </filter>
                                        <clipPath id="clip0_6356_20985">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg> Add Appointment</span></button><button
                            class="btn dropdown-toggle dropdown-toggle-split add_product_dropdown"
                            data-bs-toggle="dropdown" aria-expanded="false" type="button"></button>
                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Generate Report</a></div>
                    </div>
                    <div class="btn-group split_btn" id="add_rejected_appointment_split_btn" style="display: none;">
                        <button class="btn add_Product_btn" id="reject_appointment_btn" type="button"><span
                                class="add_Product_btn_base"><svg xmlns="http://www.w3.org/2000/svg" width="25"
                                    height="27" viewBox="0 0 25 27" fill="none">
                                    <g clip-path="url(#clip0_6356_20985)" filter="url(#filter0_d_6356_20985)">
                                        <path
                                            d="M12.5 21H6C5.46957 21 4.96086 20.7893 4.58579 20.4142C4.21071 20.0391 4 19.5304 4 19V7C4 6.46957 4.21071 5.96086 4.58579 5.58579C4.96086 5.21071 5.46957 5 6 5H18C18.5304 5 19.0391 5.21071 19.4142 5.58579C19.7893 5.96086 20 6.46957 20 7V12M16 3V7M8 3V7M4 11H20M16 19H22M19 16V22"
                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <filter id="filter0_d_6356_20985" x="-2" y="0" width="28" height="28"
                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                result="hardAlpha" />
                                            <feOffset dy="2" />
                                            <feGaussianBlur stdDeviation="1" />
                                            <feComposite in2="hardAlpha" operator="out" />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" />
                                            <feBlend mode="normal" in2="BackgroundImageFix"
                                                result="effect1_dropShadow_6356_20985" />
                                            <feBlend mode="normal" in="SourceGraphic"
                                                in2="effect1_dropShadow_6356_20985" result="shape" />
                                        </filter>
                                        <clipPath id="clip0_6356_20985">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg> Add Appointment</span></button>
                        <button class="btn dropdown-toggle dropdown-toggle-split add_product_dropdown"
                            data-bs-toggle="dropdown" aria-expanded="false" type="button"></button>
                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Generate Report</a></div>
                    </div>
                </div>
                <div class="d-flex flex-column align-items-start align-self-stretch"
                    style="gap: var(--Spacing-spacing-xs, 12px);">
                    <ul class="nav nav-tabs pet_nav_tabs" role="tablist">
                        <li class="nav-item" role="presentation" id="approve_tab"><a
                                class="nav-link  list_tab" role="tab" data-bs-toggle="tab"
                                href="#approved_tab">Approved<span id="approvedCount" class="tab-count">0</span></a>
                        </li>
                        <li class="nav-item" role="presentation" id="pending-tab"><a class="nav-link list_tab"
                                role="tab" data-bs-toggle="tab" href="#pending_tab">Pending<span
                                    id="pendingCount" class="tab-count">0</span></a></li>
                        <li class="nav-item" role="presentation" id="reject_tab"><a class="nav-link list_tab"
                                role="tab" data-bs-toggle="tab" href="#rejected_tab">Rejected<span
                                    id="rejectedCount" class="tab-count">0</span></a></li>
                    </ul>
                    <div class="tab-content appointment_tab_content">
                        <div class="tab-pane  align-self-stretch appointment_tab" role="tabpanel"
                            id="approved_tab">
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
                                                      <div class="col-md-6">
                                                          <button type = "reset" class="btn btn-outline-secondary btn-sm me-3">Cancel</button>
                                                      </div>
                                                      <div class="col-md-6 text-center">
                                                          <button type="submit" form="approvedForm" class="btn btn-primary btn-sm ms-3">Apply</button>
                                                      </div>
                                                  </div>
                                              </li>
                                            </ul>
                                        </div>
          
                                    </div>
                                </form>


                            </div>
                            <div id="approved_appointment_empty_state" class="appointment_empty_state">
                                <svg xmlns="http://www.w3.org/2000/svg" width="220" height="110"
                                    viewBox="0 0 220 110" fill="none">
                                    <g clip-path="url(#clip0_3896_26042)">
                                        <path
                                            d="M198.031 89.4723H32.121C30 89.4699 27.9666 88.6263 26.4668 87.1266C24.9671 85.6268 24.1235 83.5934 24.1211 81.4725V18.517C24.1235 16.396 24.9671 14.3626 26.4669 12.8629C27.9666 11.3631 30 10.5195 32.121 10.5171H198.031C200.152 10.5195 202.186 11.3631 203.685 12.8629C205.185 14.3626 206.029 16.396 206.031 18.517V81.4725C206.029 83.5934 205.185 85.6268 203.685 87.1266C202.186 88.6263 200.152 89.4699 198.031 89.4723Z"
                                            fill="white" />
                                        <path
                                            d="M198.031 89.4723H32.121C30 89.4699 27.9666 88.6263 26.4668 87.1266C24.9671 85.6268 24.1235 83.5934 24.1211 81.4725V18.517C24.1235 16.396 24.9671 14.3626 26.4669 12.8629C27.9666 11.3631 30 10.5195 32.121 10.5171H198.031C200.152 10.5195 202.186 11.3631 203.685 12.8629C205.185 14.3626 206.029 16.396 206.031 18.517V81.4725C206.029 83.5934 205.185 85.6268 203.685 87.1266C202.186 88.6263 200.152 89.4699 198.031 89.4723ZM32.121 11.2127C30.1838 11.2127 28.3259 11.9823 26.9561 13.3521C25.5863 14.7219 24.8167 16.5798 24.8167 18.517V81.4725C24.8167 82.4317 25.0057 83.3815 25.3727 84.2677C25.7398 85.1538 26.2778 85.9591 26.9561 86.6373C27.6343 87.3156 28.4396 87.8536 29.3258 88.2207C30.2119 88.5877 31.1618 88.7767 32.121 88.7767H198.031C198.99 88.7767 199.94 88.5877 200.826 88.2207C201.713 87.8536 202.518 87.3156 203.196 86.6373C203.874 85.9591 204.412 85.1538 204.78 84.2677C205.147 83.3815 205.335 82.4317 205.335 81.4725V57.7348C205.335 45.3964 200.434 33.5633 191.71 24.8387C182.985 16.1142 171.152 11.2127 158.813 11.2127H32.121Z"
                                            fill="#E6E6E6" />
                                        <path
                                            d="M18.9919 102.875C19.0597 102.408 18.5713 101.951 17.9009 101.854C17.2306 101.756 16.6321 102.055 16.5643 102.521C16.4964 102.988 16.9848 103.445 17.6552 103.542C18.3256 103.64 18.924 103.341 18.9919 102.875Z"
                                            fill="white" />
                                        <path
                                            d="M26.9763 102.096C27.0441 101.629 26.5557 101.172 25.8853 101.075C25.2149 100.977 24.6165 101.276 24.5486 101.743C24.4808 102.209 24.9692 102.666 25.6396 102.764C26.31 102.861 26.9084 102.562 26.9763 102.096Z"
                                            fill="#3F3D56" />
                                        <path
                                            d="M16.8083 96.4126C16.8761 95.9463 16.3877 95.4892 15.7173 95.3916C15.047 95.2941 14.4485 95.5931 14.3807 96.0594C14.3128 96.5258 14.8013 96.9829 15.4716 97.0804C16.142 97.178 16.7404 96.879 16.8083 96.4126Z"
                                            fill="#FF6584" />
                                        <path
                                            d="M13.3383 93.7662C13.3415 93.338 13.1027 92.9892 12.8049 92.9869C12.5071 92.9847 12.263 93.3299 12.2598 93.758C12.2565 94.1861 12.4953 94.535 12.7932 94.5373C13.091 94.5395 13.335 94.1943 13.3383 93.7662Z"
                                            fill="#E6E6E6" />
                                        <path
                                            d="M12.1625 88.836C12.1657 88.4079 11.9269 88.059 11.6291 88.0567C11.3313 88.0545 11.0872 88.3997 11.084 88.8278C11.0807 89.256 11.3196 89.6049 11.6174 89.6071C11.9152 89.6094 12.1593 89.2641 12.1625 88.836Z"
                                            fill="#3F3D56" />
                                        <path
                                            d="M21.3109 97.5123C21.3142 97.0841 21.0754 96.7353 20.7775 96.733C20.4797 96.7308 20.2357 97.076 20.2324 97.5041C20.2292 97.9322 20.468 98.2811 20.7658 98.2834C21.0636 98.2856 21.3077 97.9404 21.3109 97.5123Z"
                                            fill="#E6E6E6" />
                                        <path
                                            d="M17.4516 99.438C17.4548 99.0099 17.216 98.661 16.9182 98.6588C16.6203 98.6565 16.3763 99.0018 16.373 99.4299C16.3698 99.858 16.6086 100.207 16.9064 100.209C17.2043 100.211 17.4483 99.8662 17.4516 99.438Z"
                                            fill="#FF6584" />
                                        <path
                                            d="M22.8227 102.997C22.8259 102.569 22.5871 102.22 22.2893 102.218C21.9914 102.216 21.7474 102.561 21.7441 102.989C21.7409 103.417 21.9797 103.766 22.2775 103.768C22.5754 103.77 22.8194 103.425 22.8227 102.997Z"
                                            fill="#3F3D56" />
                                        <path
                                            d="M211.818 2.33786C211.966 1.75557 211.407 1.11158 210.57 0.899453C209.732 0.687327 208.934 0.987394 208.787 1.56968C208.639 2.15198 209.198 2.79599 210.035 3.00811C210.872 3.22024 211.67 2.92015 211.818 2.33786Z"
                                            fill="white" />
                                        <path
                                            d="M201.595 2.27196C201.743 1.68967 201.184 1.04566 200.347 0.833535C199.51 0.621409 198.712 0.921494 198.564 1.50378C198.416 2.08608 198.975 2.73007 199.812 2.94219C200.65 3.15432 201.448 2.85425 201.595 2.27196Z"
                                            fill="#3F3D56" />
                                        <path
                                            d="M213.736 10.8188C213.883 10.2365 213.325 9.59254 212.487 9.38041C211.65 9.16828 210.852 9.46835 210.705 10.0506C210.557 10.6329 211.116 11.2769 211.953 11.4891C212.79 11.7012 213.588 11.4011 213.736 10.8188Z"
                                            fill="#FF6584" />
                                        <path
                                            d="M216.117 14.0163C216.177 13.474 215.921 13.0001 215.543 12.958C215.166 12.9158 214.811 13.3213 214.75 13.8637C214.69 14.406 214.946 14.8799 215.324 14.922C215.701 14.9642 216.056 14.5587 216.117 14.0163Z"
                                            fill="#E6E6E6" />
                                        <path
                                            d="M216.96 20.4211C217.021 19.8788 216.764 19.4049 216.387 19.3628C216.01 19.3206 215.655 19.7261 215.594 20.2685C215.534 20.8108 215.79 21.2847 216.168 21.3268C216.545 21.369 216.9 20.9635 216.96 20.4211Z"
                                            fill="#3F3D56" />
                                        <path
                                            d="M206.507 8.21507C206.568 7.67271 206.311 7.19887 205.934 7.15671C205.557 7.11456 205.202 7.52005 205.141 8.06241C205.08 8.60477 205.337 9.07861 205.714 9.12077C206.092 9.16293 206.447 8.75743 206.507 8.21507Z"
                                            fill="#E6E6E6" />
                                        <path
                                            d="M211.652 6.28246C211.712 5.7401 211.456 5.26625 211.078 5.2241C210.701 5.18194 210.346 5.58743 210.286 6.12979C210.225 6.67215 210.482 7.14599 210.859 7.18815C211.236 7.23031 211.591 6.82482 211.652 6.28246Z"
                                            fill="#FF6584" />
                                        <path
                                            d="M205.316 1.06126C205.376 0.518905 205.12 0.045062 204.742 0.00290405C204.365 -0.0392539 204.01 0.366238 203.95 0.908597C203.889 1.45096 204.146 1.9248 204.523 1.96696C204.9 2.00912 205.255 1.60362 205.316 1.06126Z"
                                            fill="#3F3D56" />
                                        <path
                                            d="M90.4821 48.7131C90.4912 55.0134 88.1638 61.0934 83.95 65.7772V65.7807C83.3542 66.4431 82.725 67.0746 82.0648 67.6728C81.3892 68.2847 80.681 68.8594 79.9431 69.3945C79.4283 69.7702 78.8996 70.1249 78.357 70.4589C77.7136 70.8588 77.0515 71.2287 76.371 71.5684C75.8666 71.8223 75.3519 72.0588 74.8267 72.2779C71.6916 73.5955 68.3249 74.2731 64.9242 74.271C63.0036 74.2731 61.0889 74.0584 59.2165 73.631C58.3506 73.4341 57.496 73.1902 56.6565 72.9005C56.333 72.7927 56.0096 72.6745 55.6896 72.5493C53.7493 71.7992 51.9093 70.812 50.2114 69.6102C46.6227 67.0835 43.7451 63.6751 41.856 59.7136C39.9668 55.752 39.1296 51.3706 39.4252 46.9916C39.7208 42.6126 41.1391 38.3835 43.5435 34.7117C45.9478 31.0399 49.2573 28.0492 53.153 26.0277C57.0487 24.0061 61.3994 23.0219 65.7859 23.1698C70.1723 23.3177 74.4468 24.5927 78.1975 26.8721C81.9482 29.1514 85.0487 32.3583 87.2003 36.1837C89.3519 40.0091 90.4821 44.3241 90.4821 48.7131Z"
                                            fill="#F2F2F2" />
                                        <path
                                            d="M166.976 29.7147H122.803C122.435 29.7142 122.081 29.5673 121.821 29.3065C121.56 29.0456 121.414 28.692 121.414 28.3234C121.414 27.9548 121.56 27.6012 121.821 27.3403C122.081 27.0795 122.435 26.9327 122.803 26.9321H166.976C167.345 26.9321 167.699 27.0787 167.96 27.3396C168.221 27.6005 168.368 27.9544 168.368 28.3234C168.368 28.6924 168.221 29.0463 167.96 29.3072C167.699 29.5681 167.345 29.7147 166.976 29.7147Z"
                                            fill="#045B62" />
                                        <path
                                            d="M166.976 48.4969H122.803C122.435 48.4964 122.081 48.3496 121.821 48.0887C121.56 47.8278 121.414 47.4743 121.414 47.1056C121.414 46.737 121.56 46.3834 121.821 46.1226C122.081 45.8617 122.435 45.7149 122.803 45.7144H166.976C167.345 45.7149 167.698 45.8617 167.959 46.1226C168.219 46.3834 168.366 46.737 168.366 47.1056C168.366 47.4743 168.219 47.8278 167.959 48.0887C167.698 48.3496 167.345 48.4964 166.976 48.4969Z"
                                            fill="#E6E6E6" />
                                        <path
                                            d="M166.976 67.2792H122.803C122.435 67.2786 122.081 67.1318 121.821 66.8709C121.56 66.6101 121.414 66.2565 121.414 65.8879C121.414 65.5192 121.56 65.1657 121.821 64.9048C122.081 64.644 122.435 64.4971 122.803 64.4966H166.976C167.345 64.4966 167.699 64.6432 167.96 64.9041C168.221 65.165 168.368 65.5189 168.368 65.8879C168.368 66.2569 168.221 66.6107 167.96 66.8717C167.699 67.1326 167.345 67.2792 166.976 67.2792Z"
                                            fill="#E6E6E6" />
                                        <path
                                            d="M56.54 108.785C51.5532 102.152 48.6709 94.7347 48.5765 86.2782C48.4158 85.8225 48.4425 85.3216 48.6506 84.8856C48.8588 84.4495 49.2314 84.1138 49.6867 83.9521L66.6845 77.9378C67.1402 77.7771 67.6411 77.8038 68.0772 78.0119C68.5132 78.2201 68.849 78.5927 69.0107 79.0481L76.9742 101.555C77.1349 102.011 77.1082 102.512 76.9001 102.948C76.6919 103.384 76.3193 103.719 75.864 103.881L58.8662 109.895C58.4105 110.056 57.9096 110.029 57.4736 109.821C57.0375 109.613 56.7017 109.241 56.54 108.785Z"
                                            fill="#E6E6E6" />
                                        <path
                                            d="M55.4396 101.526C52.4403 98.4933 51.1565 93.0846 50.3199 87.0563C50.1694 86.6295 50.1944 86.1605 50.3893 85.7521C50.5842 85.3437 50.9332 85.0293 51.3597 84.8778L65.9678 79.7091C66.3946 79.5586 66.8637 79.5835 67.2721 79.7785C67.6805 79.9734 67.995 80.3224 68.1464 80.7488L75.2329 100.777C75.3834 101.204 75.3584 101.673 75.1635 102.081C74.9685 102.49 74.6195 102.804 74.1931 102.956L65.1436 106.157C63.2425 106.828 61.1531 106.716 59.3339 105.848C57.5147 104.98 56.1142 103.425 55.4396 101.526Z"
                                            fill="white" />
                                        <path
                                            d="M68.3402 91.5381L56.9608 95.5999C56.8712 95.6319 56.7761 95.646 56.681 95.6412C56.5859 95.6365 56.4927 95.6131 56.4067 95.5723C56.3207 95.5315 56.2435 95.4742 56.1796 95.4036C56.1157 95.333 56.0664 95.2506 56.0344 95.1609C56.0024 95.0712 55.9883 94.9761 55.9931 94.8811C55.9978 94.786 56.0213 94.6928 56.062 94.6067C56.1028 94.5207 56.1601 94.4435 56.2307 94.3797C56.3013 94.3158 56.3838 94.2664 56.4734 94.2344L67.8528 90.1726C68.0338 90.1079 68.2332 90.1179 68.4069 90.2002C68.5807 90.2825 68.7146 90.4305 68.7792 90.6116C68.8439 90.7927 68.8339 90.992 68.7516 91.1658C68.6693 91.3395 68.5213 91.4734 68.3402 91.5381Z"
                                            fill="#045B62" />
                                        <path
                                            d="M58.1291 90.9622L55.6256 91.8558C55.5359 91.8879 55.4408 91.902 55.3456 91.8973C55.2505 91.8927 55.1572 91.8693 55.0711 91.8285C54.985 91.7878 54.9077 91.7305 54.8438 91.6598C54.7799 91.5892 54.7305 91.5067 54.6984 91.417C54.6664 91.3273 54.6524 91.2321 54.6572 91.137C54.6619 91.0418 54.6854 90.9485 54.7262 90.8625C54.7671 90.7764 54.8245 90.6992 54.8952 90.6354C54.9659 90.5715 55.0484 90.5222 55.1382 90.4902L57.6416 89.5966C57.7313 89.5645 57.8265 89.5504 57.9216 89.5551C58.0168 89.5597 58.1101 89.5831 58.1962 89.6239C58.2823 89.6646 58.3595 89.7219 58.4235 89.7926C58.4874 89.8632 58.5368 89.9457 58.5688 90.0354C58.6008 90.1252 58.6149 90.2203 58.6101 90.3155C58.6053 90.4106 58.5819 90.5039 58.541 90.5899C58.5002 90.676 58.4428 90.7532 58.3721 90.8171C58.3014 90.8809 58.2188 90.9302 58.1291 90.9622Z"
                                            fill="#045B62" />
                                        <path
                                            d="M70.484 97.5412L59.1047 101.603C58.9237 101.668 58.7245 101.657 58.5509 101.575C58.3773 101.493 58.2435 101.345 58.1789 101.164C58.1143 100.983 58.1242 100.784 58.2064 100.61C58.2886 100.436 58.4364 100.302 58.6173 100.238L69.9966 96.1757C70.1776 96.1113 70.3768 96.1214 70.5504 96.2038C70.724 96.2862 70.8578 96.4341 70.9224 96.615C70.987 96.796 70.9771 96.9952 70.8949 97.1689C70.8127 97.3425 70.6649 97.4765 70.484 97.5412Z"
                                            fill="#045B62" />
                                        <path
                                            d="M69.4105 94.5398L58.0312 98.6017C57.8501 98.6663 57.6507 98.6563 57.477 98.574C57.3033 98.4917 57.1693 98.3437 57.1047 98.1626C57.0401 97.9815 57.05 97.7822 57.1323 97.6084C57.2147 97.4347 57.3627 97.3008 57.5437 97.2361L68.9231 93.1743C69.0128 93.1422 69.1079 93.128 69.2031 93.1327C69.2982 93.1374 69.3915 93.1608 69.4776 93.2015C69.5637 93.2423 69.641 93.2996 69.7049 93.3702C69.7688 93.4408 69.8182 93.5234 69.8503 93.6131C69.8823 93.7028 69.8963 93.7979 69.8915 93.8931C69.8868 93.9882 69.8633 94.0815 69.8224 94.1676C69.7816 94.2536 69.7242 94.3308 69.6535 94.3947C69.5828 94.4585 69.5003 94.5079 69.4105 94.5398Z"
                                            fill="#045B62" />
                                        <path
                                            d="M59.0773 37.1502C59.4478 40.14 61.5195 42.6051 64.5322 42.6051C65.9789 42.6051 67.3664 42.0304 68.3894 41.0074C69.4124 39.9844 69.9871 38.5969 69.9871 37.1502C69.9871 34.1375 67.5319 31.9738 64.5322 31.6953C61.3493 31.3997 58.6015 33.3117 59.0773 37.1502Z"
                                            fill="#2F2E41" />
                                        <path
                                            d="M69.2808 73.8991C65.9405 74.4733 62.5198 74.3823 59.2148 73.6313C60.7835 72.7652 65.5417 73.2974 69.2808 73.8991Z"
                                            fill="#2F2E41" />
                                        <path
                                            d="M48.0499 83.494L50.6702 77.1616L52.7346 78.3086L51.4879 84.7502C51.6127 85.1583 51.6213 85.5931 51.5126 86.0058C51.4039 86.4185 51.1822 86.7927 50.8725 87.0863C50.5627 87.3799 50.1772 87.5813 49.7593 87.6679C49.3414 87.7544 48.9077 87.7227 48.5068 87.5762C48.106 87.4297 47.7539 87.1744 47.4902 86.8388C47.2266 86.5032 47.0617 86.1007 47.0142 85.6766C46.9668 85.2525 47.0385 84.8235 47.2215 84.4379C47.4044 84.0524 47.6913 83.7255 48.0499 83.494Z"
                                            fill="#FFB6B6" />
                                        <path
                                            d="M75.1585 66.358V66.3615C75.0646 68.5667 74.9359 70.6641 74.8281 72.2779C71.6931 73.5955 68.3263 74.2731 64.9257 74.2709C63.0051 74.2731 61.0904 74.0584 59.2179 73.631C58.352 73.4341 57.4974 73.1902 56.658 72.9005C56.7748 72.8251 56.9011 72.7655 57.0336 72.7232C58.2858 72.2988 57.0475 71.9127 57.058 71.5093C57.0962 70.0345 57.5032 68.2641 58.0284 66.5667L55.691 72.5493L54.4736 75.6588C54.4736 75.6588 54.5154 78.3439 53.7432 77.5231C52.9676 76.7022 53.0232 79.3596 53.0232 79.3596C52.7822 79.5313 52.5747 79.7459 52.4111 79.9926C52.3422 80.1036 52.3163 80.236 52.338 80.3648V80.3683C52.373 80.4694 52.4418 80.5554 52.5328 80.6117C53.058 80.9665 52.3032 81.9056 51.9693 82.2778C51.8789 82.3786 51.8198 82.4378 51.8198 82.4378L48.6094 82.2082V82.1456C48.6233 81.7665 48.7103 79.77 49.2076 79.2935C49.7537 78.7683 49.4859 77.937 49.4859 77.937C49.4859 77.937 50.9119 76.6744 49.9554 75.6483C49.5728 75.2344 49.7433 72.7823 50.2128 69.6102C51.2389 62.612 53.698 52.1079 54.7623 52.2574C54.9816 51.192 55.491 50.2078 56.2343 49.4136C56.9776 48.6194 57.9258 48.046 58.9744 47.7566L62.4422 46.8036L63.0613 44.3584H67.9447L68.7934 45.9653L72.3516 47.5723L72.3968 47.5931L72.5081 47.6418L72.5499 47.774C72.5499 47.774 72.5464 47.7775 72.5499 47.7775L74.529 53.993C75.4194 55.0156 75.3846 60.9912 75.1585 66.358Z"
                                            fill="#045B62" />
                                        <path
                                            d="M83.4747 78.8831L80.168 72.8806L82.3534 71.9854L86.6037 76.9838C87.0004 77.1413 87.3452 77.4063 87.5995 77.749C87.8538 78.0918 88.0074 78.4987 88.0431 78.924C88.0788 79.3492 87.9952 79.776 87.8016 80.1564C87.6081 80.5368 87.3123 80.8556 86.9474 81.077C86.5826 81.2985 86.1633 81.4138 85.7365 81.41C85.3097 81.4062 84.8925 81.2834 84.5317 81.0554C84.1709 80.8275 83.8808 80.5034 83.6941 80.1196C83.5074 79.7359 83.4314 79.3076 83.4747 78.8831Z"
                                            fill="#FFB6B6" />
                                        <path
                                            d="M72.3516 47.5244C72.9398 48.5813 78.3191 51.2995 77.3869 54.0283C77.3869 54.0283 82.4406 69.8393 83.0977 69.7361C83.7549 69.6329 84.3963 71.266 84.3963 71.266C84.3963 71.266 84.2569 72.3319 84.6668 71.889C85.0767 71.4461 84.9786 72.6072 84.9786 72.6072C84.9786 72.6072 84.7822 73.632 85.3026 73.3534C85.8231 73.0747 85.1388 75.036 85.1388 75.036L82.0111 76.5087L81.4168 75.6241C81.4168 75.6241 80.1468 75.3822 80.7444 75.1906C81.342 74.999 80.1824 74.3542 80.1824 74.3542C80.1824 74.3542 78.9693 73.5297 79.1384 72.1643C79.3074 70.7989 75.9903 68.1148 75.9903 68.1148C73.71 63.6126 72.4626 58.9902 72.4669 54.2221L72.3516 47.5244Z"
                                            fill="#045B62" />
                                        <path
                                            d="M65.138 42.9293C67.8095 42.9293 69.9752 40.7636 69.9752 38.0921C69.9752 35.4206 67.8095 33.2549 65.138 33.2549C62.4665 33.2549 60.3008 35.4206 60.3008 38.0921C60.3008 40.7636 62.4665 42.9293 65.138 42.9293Z"
                                            fill="#FFB6B6" />
                                        <path
                                            d="M60.1276 38.6193C60.2808 39.6704 61.1767 41.1369 60.9669 41.1369C60.7571 41.1369 59.2654 36.8038 60.7571 36.5212C61.8391 36.3163 62.0809 36.4961 63.0922 36.0576L62.9495 36.1918C63.6188 36.6786 64.5503 36.3786 65.314 36.0618C66.0798 35.7471 67.0092 35.447 67.6806 35.9317C68.1023 36.2359 68.2806 36.7646 68.5429 37.2136C68.8052 37.6647 69.2898 38.0906 69.7891 37.9521C69.9837 37.8769 70.1495 37.742 70.2626 37.5667C70.3757 37.3914 70.4303 37.1848 70.4185 36.9765C70.4164 36.5611 69.8755 36.1659 70.0577 35.7932C70.5976 34.6887 70.1121 33.9359 68.9352 33.4161C68.5072 33.3511 68.0792 33.2847 67.6512 33.2168C67.8755 32.9062 68.1474 32.6329 68.4569 32.407C68.3261 32.0717 68.1 31.7822 67.8065 31.574C67.4438 31.4055 67.0397 31.3471 66.6442 31.4062C65.7588 31.4524 64.8741 31.4985 63.9901 31.5447C63.3318 31.5329 62.6784 31.6602 62.0725 31.9181C61.3424 32.2937 60.8641 33.0259 60.5158 33.7707C59.7353 35.4449 59.8591 36.7919 60.1276 38.6193Z"
                                            fill="#2F2E41" />
                                        <path
                                            d="M181.129 35.4464H108.384C108.304 35.4464 108.227 35.4145 108.17 35.3579C108.114 35.3013 108.082 35.2244 108.082 35.1443C108.082 35.0642 108.114 34.9874 108.17 34.9308C108.227 34.8741 108.304 34.8423 108.384 34.8423H181.129C181.209 34.8423 181.286 34.8741 181.343 34.9308C181.4 34.9874 181.431 35.0642 181.431 35.1443C181.431 35.2244 181.4 35.3013 181.343 35.3579C181.286 35.4145 181.209 35.4464 181.129 35.4464Z"
                                            fill="#E6E6E6" />
                                        <path
                                            d="M181.129 54.1724H108.384C108.304 54.1724 108.227 54.1406 108.17 54.084C108.114 54.0273 108.082 53.9505 108.082 53.8704C108.082 53.7903 108.114 53.7135 108.17 53.6568C108.227 53.6002 108.304 53.5684 108.384 53.5684H181.129C181.209 53.5684 181.286 53.6002 181.343 53.6568C181.4 53.7135 181.431 53.7903 181.431 53.8704C181.431 53.9505 181.4 54.0273 181.343 54.084C181.286 54.1406 181.209 54.1724 181.129 54.1724Z"
                                            fill="#E6E6E6" />
                                        <path
                                            d="M181.129 72.8985H108.384C108.304 72.8985 108.227 72.8667 108.17 72.81C108.114 72.7534 108.082 72.6766 108.082 72.5965C108.082 72.5164 108.114 72.4395 108.17 72.3829C108.227 72.3263 108.304 72.2944 108.384 72.2944H181.129C181.209 72.2944 181.286 72.3263 181.343 72.3829C181.4 72.4395 181.431 72.5164 181.431 72.5965C181.431 72.6766 181.4 72.7534 181.343 72.81C181.286 72.8667 181.209 72.8985 181.129 72.8985Z"
                                            fill="#E6E6E6" />
                                        <path
                                            d="M191.957 71.7013C189.294 71.7013 186.719 70.7503 184.695 69.0194C184.019 68.4415 183.3 67.4367 182.556 66.0333C182.082 65.1292 181.816 64.1303 181.779 63.11C181.741 62.0897 181.933 61.0739 182.34 60.1375C181.948 60.5365 181.514 60.8924 181.046 61.199L180.809 61.3564L180.796 61.0727C180.787 60.8882 180.782 60.7043 180.782 60.5262C180.782 59.4762 181.576 58.4108 181.21 57.4404C179.666 53.3501 174.77 49.2852 181.866 42.9549C182.522 42.3694 181.646 41.1985 181.646 40.3126C181.646 31.6297 193.917 16.6081 197.396 24.5657C201.685 34.3795 209.075 33.3298 212.349 35.3568L212.396 35.5002L212.256 35.5568C211.54 35.8579 210.785 36.0587 210.014 36.1533C210.836 36.321 211.675 36.3913 212.514 36.3628L212.644 36.3582L212.676 36.4847C212.988 37.7367 213.146 39.0222 213.145 40.3126L213.145 40.452C213.142 41.4321 213.346 42.4018 213.743 43.2979C214.14 44.194 214.721 44.9963 215.449 45.6526C216.599 46.7009 217.517 47.9773 218.147 49.4003C218.776 50.8233 219.101 52.3618 219.103 53.9177C219.103 55.7584 217.852 58.1747 216.802 59.8775C216.536 60.3113 216.176 60.6792 215.747 60.9537C215.319 61.2281 214.834 61.402 214.328 61.4622C213.85 61.5225 213.364 61.477 212.905 61.3287C212.446 61.1804 212.025 60.9331 211.672 60.6041C212.169 61.603 212.816 62.5195 213.592 63.3216L213.735 63.4692L213.557 63.5728C211.848 64.5691 209.906 65.0937 207.928 65.093L207.812 65.0926C206.362 65.0777 204.923 65.3523 203.58 65.9004C202.238 66.4484 201.018 67.259 199.992 68.2845C198.948 69.3603 197.699 70.2167 196.319 70.8034C194.94 71.3901 193.457 71.6954 191.957 71.7013Z"
                                            fill="#E6E6E6" />
                                        <path
                                            d="M188.114 89.3985C188.066 89.3985 188.019 89.381 187.982 89.3493C187.946 89.3176 187.922 89.2738 187.915 89.2259C187.39 84.5394 187.358 79.8107 187.821 75.1177C188.515 67.7143 190.743 57.0508 197.416 48.293C197.432 48.272 197.452 48.2544 197.475 48.2411C197.498 48.2279 197.523 48.2192 197.549 48.2157C197.575 48.2121 197.602 48.2138 197.627 48.2205C197.653 48.2273 197.677 48.239 197.698 48.255C197.719 48.271 197.736 48.291 197.75 48.3138C197.763 48.3366 197.771 48.3618 197.775 48.3879C197.779 48.4141 197.777 48.4407 197.77 48.4662C197.763 48.4917 197.752 48.5157 197.736 48.5367C191.12 57.2188 188.91 67.8041 188.222 75.1552C187.761 79.8168 187.792 84.514 188.313 89.1692C188.317 89.1978 188.315 89.2268 188.307 89.2544C188.299 89.282 188.285 89.3076 188.266 89.3293C188.247 89.3511 188.224 89.3685 188.197 89.3804C188.171 89.3924 188.143 89.3985 188.114 89.3985Z"
                                            fill="#3F3D56" />
                                        <path
                                            d="M193.561 60.6463C193.518 60.6464 193.477 60.633 193.442 60.608C193.408 60.5831 193.382 60.5479 193.369 60.5076C193.356 60.4672 193.356 60.4237 193.369 60.3833C193.382 60.3429 193.408 60.3077 193.442 60.2828C195.344 58.9957 197.398 57.9501 199.557 57.1699C202.931 55.9347 208.061 54.815 213.343 56.4959C213.368 56.5039 213.391 56.5168 213.412 56.5338C213.432 56.5508 213.448 56.5716 213.461 56.5951C213.473 56.6185 213.48 56.6441 213.482 56.6704C213.484 56.6967 213.482 56.7232 213.474 56.7483C213.466 56.7735 213.453 56.7968 213.436 56.817C213.419 56.8371 213.398 56.8538 213.374 56.8659C213.351 56.878 213.325 56.8854 213.299 56.8876C213.273 56.8899 213.246 56.8869 213.221 56.8789C208.048 55.2325 203.01 56.3337 199.695 57.5474C197.571 58.3142 195.55 59.3422 193.678 60.6079C193.644 60.6329 193.603 60.6463 193.561 60.6463Z"
                                            fill="#3F3D56" />
                                        <path
                                            d="M184.36 37.7371C184.357 37.6947 184.367 37.6525 184.39 37.6165C184.412 37.5804 184.445 37.5523 184.485 37.5363C184.524 37.5203 184.567 37.5172 184.608 37.5273C184.65 37.5375 184.687 37.5604 184.714 37.5929C186.135 39.3967 187.326 41.3702 188.259 43.4679C189.734 46.744 191.22 51.7804 189.924 57.1693C189.918 57.195 189.907 57.2193 189.891 57.2407C189.876 57.2621 189.856 57.2803 189.834 57.2941C189.811 57.3079 189.786 57.3172 189.76 57.3213C189.734 57.3255 189.707 57.3244 189.682 57.3183C189.656 57.3121 189.632 57.3009 189.61 57.2853C189.589 57.2698 189.571 57.2501 189.557 57.2276C189.543 57.205 189.534 57.1799 189.53 57.1538C189.526 57.1277 189.527 57.101 189.533 57.0753C190.803 51.7968 189.342 46.8518 187.893 43.6329C186.975 41.5689 185.804 39.627 184.407 37.852C184.379 37.8196 184.363 37.7794 184.36 37.7371Z"
                                            fill="#3F3D56" />
                                        <path
                                            d="M20.0095 67.6805C18.9839 66.6549 17.764 65.8444 16.4212 65.2963C15.0784 64.7483 13.6397 64.4737 12.1894 64.4886L12.0736 64.4889C10.0957 64.4897 8.15304 63.9651 6.4444 62.9688L6.26661 62.8652L6.40981 62.7176C7.18509 61.9155 7.83245 60.999 8.32921 60.0001C7.9764 60.3291 7.5556 60.5764 7.0966 60.7247C6.6376 60.873 6.15161 60.9185 5.67304 60.8582C5.16779 60.798 4.68274 60.6241 4.25427 60.3497C3.8258 60.0752 3.46503 59.7073 3.19903 59.2735C2.1495 57.5707 0.898438 55.1544 0.898438 53.3137C0.900071 51.7578 1.22584 50.2193 1.85499 48.7963C2.48414 47.3733 3.40287 46.0969 4.55261 45.0487C5.28049 44.3923 5.86189 43.59 6.25888 42.6939C6.65588 41.7978 6.85956 40.8281 6.85666 39.848L6.85608 39.7086C6.85588 38.4182 7.01356 37.1327 7.32561 35.8807L7.35729 35.7542L7.48737 35.7588C8.32623 35.7873 9.16553 35.717 9.98794 35.5493C9.21652 35.4547 8.46186 35.2539 7.74536 34.9528L7.60542 34.8962L7.65291 34.7528C10.9267 32.7258 18.3167 33.7755 22.606 23.9617C26.0841 16.0041 38.3559 31.0257 38.3559 39.7086C38.3559 40.5945 37.4791 41.7653 38.1355 42.3509C45.231 48.6812 40.3352 52.7461 38.7916 56.8364C38.4254 57.8068 39.2195 58.8722 39.2195 59.9221C39.2195 60.1003 39.2149 60.2842 39.206 60.4687L39.1923 60.7524L38.9557 60.595C38.4877 60.2884 38.0539 59.9325 37.6616 59.5335C38.0685 60.4699 38.2603 61.4857 38.2228 62.506C38.1853 63.5263 37.9196 64.5252 37.445 65.4292C36.7014 66.8327 35.982 67.8375 35.3069 68.4154C33.144 70.2663 30.3557 71.2211 27.5123 71.0845C24.6688 70.9479 21.985 69.7302 20.0095 67.6805Z"
                                            fill="#E6E6E6" />
                                        <path
                                            d="M31.8894 88.795C31.9378 88.795 31.9845 88.7775 32.021 88.7458C32.0575 88.7141 32.0813 88.6703 32.0881 88.6224C32.6137 83.9359 32.6451 79.2072 32.1819 74.5142C31.4882 67.1108 29.2606 56.4473 22.5874 47.6895C22.5714 47.6685 22.5514 47.6509 22.5286 47.6376C22.5058 47.6243 22.4806 47.6157 22.4544 47.6122C22.4283 47.6086 22.4017 47.6103 22.3762 47.617C22.3507 47.6238 22.3267 47.6355 22.3057 47.6515C22.2847 47.6675 22.2671 47.6874 22.2538 47.7103C22.2405 47.7331 22.2319 47.7583 22.2284 47.7844C22.2248 47.8106 22.2265 47.8372 22.2332 47.8627C22.24 47.8882 22.2517 47.9122 22.2677 47.9332C28.8832 56.6153 31.0929 67.2005 31.7817 74.5516C32.2424 79.2133 32.2117 83.9105 31.6902 88.5657C31.6861 88.5942 31.6883 88.6233 31.6965 88.6509C31.7046 88.6785 31.7186 88.7041 31.7375 88.7258C31.7564 88.7475 31.7797 88.765 31.8059 88.7769C31.8321 88.7889 31.8606 88.795 31.8894 88.795Z"
                                            fill="#3F3D56" />
                                        <path
                                            d="M26.442 60.0428C26.4845 60.0428 26.5259 60.0294 26.5602 60.0045C26.5946 59.9796 26.6202 59.9444 26.6333 59.904C26.6464 59.8637 26.6465 59.8202 26.6333 59.7798C26.6202 59.7394 26.5947 59.7042 26.5603 59.6793C24.6589 58.3922 22.6048 57.3465 20.4453 56.5664C17.0715 55.3312 11.9411 54.2114 6.65954 55.8924C6.6344 55.9004 6.61107 55.9133 6.5909 55.9303C6.57073 55.9473 6.55412 55.9681 6.54199 55.9916C6.52987 56.015 6.52248 56.0406 6.52025 56.0669C6.51802 56.0932 6.52099 56.1197 6.529 56.1448C6.537 56.17 6.54987 56.1933 6.56689 56.2135C6.58391 56.2336 6.60474 56.2502 6.62818 56.2624C6.65162 56.2745 6.67721 56.2819 6.70351 56.2841C6.7298 56.2863 6.75628 56.2834 6.78142 56.2754C11.9548 54.629 16.9922 55.7302 20.3071 56.9438C22.4319 57.7107 24.453 58.7387 26.324 60.0044C26.3583 60.0294 26.3996 60.0428 26.442 60.0428Z"
                                            fill="#3F3D56" />
                                        <path
                                            d="M35.6427 37.1331C35.6458 37.0908 35.6354 37.0485 35.613 37.0125C35.5906 36.9764 35.5574 36.9483 35.5181 36.9323C35.4788 36.9163 35.4354 36.9132 35.3942 36.9233C35.3529 36.9335 35.316 36.9565 35.2886 36.9889C33.868 38.7927 32.6771 40.7662 31.7434 42.8639C30.2685 46.14 28.7822 51.1764 30.0784 56.5653C30.0845 56.591 30.0957 56.6153 30.1112 56.6367C30.1267 56.6581 30.1462 56.6763 30.1688 56.6901C30.1913 56.704 30.2163 56.7132 30.2425 56.7174C30.2686 56.7215 30.2952 56.7204 30.3209 56.7143C30.3466 56.7081 30.3709 56.6969 30.3922 56.6813C30.4136 56.6658 30.4317 56.6461 30.4455 56.6236C30.4592 56.601 30.4684 56.5759 30.4725 56.5498C30.4766 56.5237 30.4754 56.497 30.4692 56.4713C29.1996 51.1928 30.6608 46.2478 32.11 43.0289C33.0278 40.9649 34.1988 39.023 35.5959 37.248C35.6233 37.2156 35.6397 37.1754 35.6427 37.1331Z"
                                            fill="#3F3D56" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_3896_26042">
                                            <rect width="218.206" height="110" fill="white"
                                                transform="translate(0.898438)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <div class="approved_appointments_empty_state_message_container">
                                    <div class="pet_info_empty_state">
                                        <h1>NO APPROVED APPOINTMENTS FOUND</h1>
                                        <div class="pet_info_empty_state_p_container">
                                            <p>Looks like there’s no approved appointments yet.</p>
                                            <p>You can add view pending appointments by clicking the tab above, or you
                                                can create one by yourself by clicking the button below.</p>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn new_appointment_btn" id="approve_appointment_tab_button"
                                    type="button" data-bs-dismiss="modal"><span
                                        class="new_appointment_btn_base"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <g clip-path="url(#clip0_5910_1403)" filter="url(#filter0_d_5910_1403)">
                                                <path d="M12 5V19M5 12H19" stroke="white" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <filter id="filter0_d_5910_1403" x="-2" y="0" width="28"
                                                    height="28" filterUnits="userSpaceOnUse"
                                                    color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                        result="hardAlpha" />
                                                    <feOffset dy="2" />
                                                    <feGaussianBlur stdDeviation="1" />
                                                    <feComposite in2="hardAlpha" operator="out" />
                                                    <feColorMatrix type="matrix"
                                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" />
                                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                                        result="effect1_dropShadow_5910_1403" />
                                                    <feBlend mode="normal" in="SourceGraphic"
                                                        in2="effect1_dropShadow_5910_1403" result="shape" />
                                                </filter>
                                                <clipPath id="clip0_5910_1403">
                                                    <rect width="24" height="24" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg> New Appointment</span></button>
                            </div>
                            <div class="table-responsive mt-3" id="approved_table">
                                <table class="table approve_table" id="approve_table">
                                    <thead>
                                        <tr>
                                            <th>
                                                <input type="radio" id="selectAll_approve" class="checkbox">
                                            </th>
                                            <th>No.</th>
                                            <th>Client</th>
                                            <th>Status</th>
                                            <th>Patient Info</th>
                                            <th>Appointment</th>
                                            <th>surgery type</th>
                                            <th>additional notes</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="approvedTableBody">
                                        @foreach ($appointment_approved as $index => $appointment)
                                            <tr data-row-id="{{ $appointment->id }}">
                                                <td ><input type="radio" class="checkbox"></td>
                                                <td >{{ $index + 1 }}</td>
                                                <td >{{ $appointment->clients->first_name }}
                                                    {{ $appointment->clients->middle_name }}
                                                    {{ $appointment->clients->last_name }}
                                                    {{ $appointment->clients->suffix }}</td>
                                                <td >{{ $appointment->status }}</td>
                                                <td >{{ $appointment['petType'] }}
                                                    ({{ $appointment['breed'] }})</td>
                                                <td >{{ $appointment['appointmentDate'] }} |
                                                    {{ $appointment['appointmentTime'] }}</td>
                                                <td >{{ $appointment['appointmentType'] }}</td>
                                                <td >{{ $appointment->notes }}</td>
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
                                      'qApproved' => request()->input('qApproved'), 'sortBy' => request()->input('sortBy'), 
                                      'perPage' => request()->input('perPage'),
                                      'sortItems' => request()->input('sortItems'),
                                      'sortOrder' => request()->input('sortOrder'),
                                      'approvedCheck' => request()->input('approvedCheck'),
                                      'completedCheck' => request()->input('completedCheck'),
                                      'dogCheck' => request()->input('dogCheck'),
                                      'catCheck' => request()->input('catCheck'),
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
                        <div class="tab-pane align-self-stretch appointment_tab" role="tabpanel" id="pending_tab">
                            <div class="container_header">
                                <form action="" id="pendingForm">
                                    <div class="left_part_product_header">
                                        <div class="search_container">
                                            <input type="text" class="search_input" name="qPending"
                                            value="{{ request('qPending') }}" placeholder="Search Appointment">
                                            <input type="hidden" id="pendingPageForm" name="page"
                                            value="{{ request('page') }}">
                                            <input type="hidden" id="pendingPerPageForm" name="perPage"
                                                value="{{ request('perPage') }}">

                                        </div>
                                        <button type="submit" form="pendingForm" class="btn filter_btn fw-bold"><i class="fa-solid fa-magnifying-glass"></i>Search</button>
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
                                                          {{ request()->input('dogCheck') == 'on' ? 'checked' : '' }}
                                                           name ="dogCheck" 
                                                           type="checkbox" 
                                                           role="switch" 
                                                           id="pendingDogCheck" 
                                                           style="transform: scale(1.5);"
                                                           >
                                                  
                                                    <label class="form-check-label fs-6 my-1" 
                                                           for="pendingDogCheck" 
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
                                                             id="pendingCatCheck" 
                                                             style="transform: scale(1.5);"
                                                             >
                                                    
                                                      <label class="form-check-label fs-6 my-1" 
                                                             for="pendingCatCheck" 
                                                             >Cat</label>
                                                    </div>
                                            
                                                  </li>
                                            </ul>
                                        </div>
                                        
                                        <div class="dropdown">
                                            <button class="filter_btn dropdown-toggle fw-bold" type="button"
                                                id="dropdownMenuButton1" data-bs-toggle="dropdown" data-bs-auto-close="false"
                                                aria-expanded="false">
                                                <i class="fa-solid fa-arrow-down-short-wide"></i>Sort
                                                By
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-item ">
                                                    <input class="form-check-input me-1" type="radio" id = "pending1"
                                                        name="sortItems"{{ request()->input('sortItems', '0') == '0' ? 'checked' : '' }}  value="0">
                                                    <label class="form-check-label ms-1 fs-6" for="pending1">
                                                        Appointment
                                                </li>
                                                <li class="dropdown-item">
                                                    <input class="form-check-input me-1" type="radio" id = "pending2"
                                                        name="sortItems" {{ request()->input('sortItems') == '1' ? 'checked' : '' }} value="1">
                                                    <label class="form-check-label ms-1 fs-6" for="pending2">
                                                        Status
                                                </li>
                                                <li class="dropdown-item">
                                                    <input class="form-check-input me-1" type="radio" id = "pending3"
                                                        name="sortItems" {{ request()->input('sortItems') == '2' ? 'checked' : '' }} value="2">
                                                    <label class="form-check-label ms-1 fs-6" for="pending3">
                                                        Patient
                                                </li>
                                                <li class="dropdown-item">
                                                    <input class="form-check-input me-1" type="radio" id = "pending4"
                                                        name="sortItems" {{ request()->input('sortItems') == '3' ? 'checked' : '' }} value="3">
                                                    <label class="form-check-label ms-1 fs-6" for="pending4">
                                                        Client
                                                </li>
                                                <li>
                                                  <li class="dropdown-item">
                                                    <input class="form-check-input me-1" type="radio" id = "pending5"
                                                        name="sortItems" {{ request()->input('sortItems') == '4' ? 'checked' : '' }} value="4">
                                                    <label class="form-check-label ms-1 fs-6" for="pending5">
                                                        Surgery Type
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider me-2 ms-2">
                                                </li>
                                                <li class="dropdown-item">
                                                    <input class="form-check-input me-1" type="radio" id = "pending6"
                                                        name="sortOrder" {{ request()->input('sortOrder') == '0' ? 'checked' : '' }} value="0">
                                                    <label class="form-check-label ms-1 fs-6" for="pending6">
                                                        Ascending
                                                </li>
                                                <li class="dropdown-item">
                                                    <input class="form-check-input me-1" type="radio" id = "pending7"
                                                        name="sortOrder" {{ request()->input('sortOrder', '1') == '1' ? 'checked' : '' }} value="1">
                                                    <label class="form-check-label ms-1 fs-6" for="pending7">
                                                        Descending
                                                </li>
                                                <li class="dropdown-item ">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <button type = "reset" class="btn btn-outline-secondary btn-sm me-3">Cancel</button>
                                                      </div>
                                                      <div class="col-md-6 text-center">
                                                          <button type="submit" form="pendingForm" class="btn btn-primary btn-sm ms-3">Apply</button>
                                                      </div>
                                                  </div>
                                              </li>
                                            </ul>
                                        </div>
          
                                    </div>
                                </form>


                            </div>
                            <div id="pending_appointment_empty_state" class="appointment_empty_state">
                                <svg xmlns="http://www.w3.org/2000/svg" width="220" height="110"
                                    viewBox="0 0 220 110" fill="none">
                                    <g clip-path="url(#clip0_3896_26042)">
                                        <path
                                            d="M198.031 89.4723H32.121C30 89.4699 27.9666 88.6263 26.4668 87.1266C24.9671 85.6268 24.1235 83.5934 24.1211 81.4725V18.517C24.1235 16.396 24.9671 14.3626 26.4669 12.8629C27.9666 11.3631 30 10.5195 32.121 10.5171H198.031C200.152 10.5195 202.186 11.3631 203.685 12.8629C205.185 14.3626 206.029 16.396 206.031 18.517V81.4725C206.029 83.5934 205.185 85.6268 203.685 87.1266C202.186 88.6263 200.152 89.4699 198.031 89.4723Z"
                                            fill="white" />
                                        <path
                                            d="M198.031 89.4723H32.121C30 89.4699 27.9666 88.6263 26.4668 87.1266C24.9671 85.6268 24.1235 83.5934 24.1211 81.4725V18.517C24.1235 16.396 24.9671 14.3626 26.4669 12.8629C27.9666 11.3631 30 10.5195 32.121 10.5171H198.031C200.152 10.5195 202.186 11.3631 203.685 12.8629C205.185 14.3626 206.029 16.396 206.031 18.517V81.4725C206.029 83.5934 205.185 85.6268 203.685 87.1266C202.186 88.6263 200.152 89.4699 198.031 89.4723ZM32.121 11.2127C30.1838 11.2127 28.3259 11.9823 26.9561 13.3521C25.5863 14.7219 24.8167 16.5798 24.8167 18.517V81.4725C24.8167 82.4317 25.0057 83.3815 25.3727 84.2677C25.7398 85.1538 26.2778 85.9591 26.9561 86.6373C27.6343 87.3156 28.4396 87.8536 29.3258 88.2207C30.2119 88.5877 31.1618 88.7767 32.121 88.7767H198.031C198.99 88.7767 199.94 88.5877 200.826 88.2207C201.713 87.8536 202.518 87.3156 203.196 86.6373C203.874 85.9591 204.412 85.1538 204.78 84.2677C205.147 83.3815 205.335 82.4317 205.335 81.4725V57.7348C205.335 45.3964 200.434 33.5633 191.71 24.8387C182.985 16.1142 171.152 11.2127 158.813 11.2127H32.121Z"
                                            fill="#E6E6E6" />
                                        <path
                                            d="M18.9919 102.875C19.0597 102.408 18.5713 101.951 17.9009 101.854C17.2306 101.756 16.6321 102.055 16.5643 102.521C16.4964 102.988 16.9848 103.445 17.6552 103.542C18.3256 103.64 18.924 103.341 18.9919 102.875Z"
                                            fill="white" />
                                        <path
                                            d="M26.9763 102.096C27.0441 101.629 26.5557 101.172 25.8853 101.075C25.2149 100.977 24.6165 101.276 24.5486 101.743C24.4808 102.209 24.9692 102.666 25.6396 102.764C26.31 102.861 26.9084 102.562 26.9763 102.096Z"
                                            fill="#3F3D56" />
                                        <path
                                            d="M16.8083 96.4126C16.8761 95.9463 16.3877 95.4892 15.7173 95.3916C15.047 95.2941 14.4485 95.5931 14.3807 96.0594C14.3128 96.5258 14.8013 96.9829 15.4716 97.0804C16.142 97.178 16.7404 96.879 16.8083 96.4126Z"
                                            fill="#FF6584" />
                                        <path
                                            d="M13.3383 93.7662C13.3415 93.338 13.1027 92.9892 12.8049 92.9869C12.5071 92.9847 12.263 93.3299 12.2598 93.758C12.2565 94.1861 12.4953 94.535 12.7932 94.5373C13.091 94.5395 13.335 94.1943 13.3383 93.7662Z"
                                            fill="#E6E6E6" />
                                        <path
                                            d="M12.1625 88.836C12.1657 88.4079 11.9269 88.059 11.6291 88.0567C11.3313 88.0545 11.0872 88.3997 11.084 88.8278C11.0807 89.256 11.3196 89.6049 11.6174 89.6071C11.9152 89.6094 12.1593 89.2641 12.1625 88.836Z"
                                            fill="#3F3D56" />
                                        <path
                                            d="M21.3109 97.5123C21.3142 97.0841 21.0754 96.7353 20.7775 96.733C20.4797 96.7308 20.2357 97.076 20.2324 97.5041C20.2292 97.9322 20.468 98.2811 20.7658 98.2834C21.0636 98.2856 21.3077 97.9404 21.3109 97.5123Z"
                                            fill="#E6E6E6" />
                                        <path
                                            d="M17.4516 99.438C17.4548 99.0099 17.216 98.661 16.9182 98.6588C16.6203 98.6565 16.3763 99.0018 16.373 99.4299C16.3698 99.858 16.6086 100.207 16.9064 100.209C17.2043 100.211 17.4483 99.8662 17.4516 99.438Z"
                                            fill="#FF6584" />
                                        <path
                                            d="M22.8227 102.997C22.8259 102.569 22.5871 102.22 22.2893 102.218C21.9914 102.216 21.7474 102.561 21.7441 102.989C21.7409 103.417 21.9797 103.766 22.2775 103.768C22.5754 103.77 22.8194 103.425 22.8227 102.997Z"
                                            fill="#3F3D56" />
                                        <path
                                            d="M211.818 2.33786C211.966 1.75557 211.407 1.11158 210.57 0.899453C209.732 0.687327 208.934 0.987394 208.787 1.56968C208.639 2.15198 209.198 2.79599 210.035 3.00811C210.872 3.22024 211.67 2.92015 211.818 2.33786Z"
                                            fill="white" />
                                        <path
                                            d="M201.595 2.27196C201.743 1.68967 201.184 1.04566 200.347 0.833535C199.51 0.621409 198.712 0.921494 198.564 1.50378C198.416 2.08608 198.975 2.73007 199.812 2.94219C200.65 3.15432 201.448 2.85425 201.595 2.27196Z"
                                            fill="#3F3D56" />
                                        <path
                                            d="M213.736 10.8188C213.883 10.2365 213.325 9.59254 212.487 9.38041C211.65 9.16828 210.852 9.46835 210.705 10.0506C210.557 10.6329 211.116 11.2769 211.953 11.4891C212.79 11.7012 213.588 11.4011 213.736 10.8188Z"
                                            fill="#FF6584" />
                                        <path
                                            d="M216.117 14.0163C216.177 13.474 215.921 13.0001 215.543 12.958C215.166 12.9158 214.811 13.3213 214.75 13.8637C214.69 14.406 214.946 14.8799 215.324 14.922C215.701 14.9642 216.056 14.5587 216.117 14.0163Z"
                                            fill="#E6E6E6" />
                                        <path
                                            d="M216.96 20.4211C217.021 19.8788 216.764 19.4049 216.387 19.3628C216.01 19.3206 215.655 19.7261 215.594 20.2685C215.534 20.8108 215.79 21.2847 216.168 21.3268C216.545 21.369 216.9 20.9635 216.96 20.4211Z"
                                            fill="#3F3D56" />
                                        <path
                                            d="M206.507 8.21507C206.568 7.67271 206.311 7.19887 205.934 7.15671C205.557 7.11456 205.202 7.52005 205.141 8.06241C205.08 8.60477 205.337 9.07861 205.714 9.12077C206.092 9.16293 206.447 8.75743 206.507 8.21507Z"
                                            fill="#E6E6E6" />
                                        <path
                                            d="M211.652 6.28246C211.712 5.7401 211.456 5.26625 211.078 5.2241C210.701 5.18194 210.346 5.58743 210.286 6.12979C210.225 6.67215 210.482 7.14599 210.859 7.18815C211.236 7.23031 211.591 6.82482 211.652 6.28246Z"
                                            fill="#FF6584" />
                                        <path
                                            d="M205.316 1.06126C205.376 0.518905 205.12 0.045062 204.742 0.00290405C204.365 -0.0392539 204.01 0.366238 203.95 0.908597C203.889 1.45096 204.146 1.9248 204.523 1.96696C204.9 2.00912 205.255 1.60362 205.316 1.06126Z"
                                            fill="#3F3D56" />
                                        <path
                                            d="M90.4821 48.7131C90.4912 55.0134 88.1638 61.0934 83.95 65.7772V65.7807C83.3542 66.4431 82.725 67.0746 82.0648 67.6728C81.3892 68.2847 80.681 68.8594 79.9431 69.3945C79.4283 69.7702 78.8996 70.1249 78.357 70.4589C77.7136 70.8588 77.0515 71.2287 76.371 71.5684C75.8666 71.8223 75.3519 72.0588 74.8267 72.2779C71.6916 73.5955 68.3249 74.2731 64.9242 74.271C63.0036 74.2731 61.0889 74.0584 59.2165 73.631C58.3506 73.4341 57.496 73.1902 56.6565 72.9005C56.333 72.7927 56.0096 72.6745 55.6896 72.5493C53.7493 71.7992 51.9093 70.812 50.2114 69.6102C46.6227 67.0835 43.7451 63.6751 41.856 59.7136C39.9668 55.752 39.1296 51.3706 39.4252 46.9916C39.7208 42.6126 41.1391 38.3835 43.5435 34.7117C45.9478 31.0399 49.2573 28.0492 53.153 26.0277C57.0487 24.0061 61.3994 23.0219 65.7859 23.1698C70.1723 23.3177 74.4468 24.5927 78.1975 26.8721C81.9482 29.1514 85.0487 32.3583 87.2003 36.1837C89.3519 40.0091 90.4821 44.3241 90.4821 48.7131Z"
                                            fill="#F2F2F2" />
                                        <path
                                            d="M166.976 29.7147H122.803C122.435 29.7142 122.081 29.5673 121.821 29.3065C121.56 29.0456 121.414 28.692 121.414 28.3234C121.414 27.9548 121.56 27.6012 121.821 27.3403C122.081 27.0795 122.435 26.9327 122.803 26.9321H166.976C167.345 26.9321 167.699 27.0787 167.96 27.3396C168.221 27.6005 168.368 27.9544 168.368 28.3234C168.368 28.6924 168.221 29.0463 167.96 29.3072C167.699 29.5681 167.345 29.7147 166.976 29.7147Z"
                                            fill="#045B62" />
                                        <path
                                            d="M166.976 48.4969H122.803C122.435 48.4964 122.081 48.3496 121.821 48.0887C121.56 47.8278 121.414 47.4743 121.414 47.1056C121.414 46.737 121.56 46.3834 121.821 46.1226C122.081 45.8617 122.435 45.7149 122.803 45.7144H166.976C167.345 45.7149 167.698 45.8617 167.959 46.1226C168.219 46.3834 168.366 46.737 168.366 47.1056C168.366 47.4743 168.219 47.8278 167.959 48.0887C167.698 48.3496 167.345 48.4964 166.976 48.4969Z"
                                            fill="#E6E6E6" />
                                        <path
                                            d="M166.976 67.2792H122.803C122.435 67.2786 122.081 67.1318 121.821 66.8709C121.56 66.6101 121.414 66.2565 121.414 65.8879C121.414 65.5192 121.56 65.1657 121.821 64.9048C122.081 64.644 122.435 64.4971 122.803 64.4966H166.976C167.345 64.4966 167.699 64.6432 167.96 64.9041C168.221 65.165 168.368 65.5189 168.368 65.8879C168.368 66.2569 168.221 66.6107 167.96 66.8717C167.699 67.1326 167.345 67.2792 166.976 67.2792Z"
                                            fill="#E6E6E6" />
                                        <path
                                            d="M56.54 108.785C51.5532 102.152 48.6709 94.7347 48.5765 86.2782C48.4158 85.8225 48.4425 85.3216 48.6506 84.8856C48.8588 84.4495 49.2314 84.1138 49.6867 83.9521L66.6845 77.9378C67.1402 77.7771 67.6411 77.8038 68.0772 78.0119C68.5132 78.2201 68.849 78.5927 69.0107 79.0481L76.9742 101.555C77.1349 102.011 77.1082 102.512 76.9001 102.948C76.6919 103.384 76.3193 103.719 75.864 103.881L58.8662 109.895C58.4105 110.056 57.9096 110.029 57.4736 109.821C57.0375 109.613 56.7017 109.241 56.54 108.785Z"
                                            fill="#E6E6E6" />
                                        <path
                                            d="M55.4396 101.526C52.4403 98.4933 51.1565 93.0846 50.3199 87.0563C50.1694 86.6295 50.1944 86.1605 50.3893 85.7521C50.5842 85.3437 50.9332 85.0293 51.3597 84.8778L65.9678 79.7091C66.3946 79.5586 66.8637 79.5835 67.2721 79.7785C67.6805 79.9734 67.995 80.3224 68.1464 80.7488L75.2329 100.777C75.3834 101.204 75.3584 101.673 75.1635 102.081C74.9685 102.49 74.6195 102.804 74.1931 102.956L65.1436 106.157C63.2425 106.828 61.1531 106.716 59.3339 105.848C57.5147 104.98 56.1142 103.425 55.4396 101.526Z"
                                            fill="white" />
                                        <path
                                            d="M68.3402 91.5381L56.9608 95.5999C56.8712 95.6319 56.7761 95.646 56.681 95.6412C56.5859 95.6365 56.4927 95.6131 56.4067 95.5723C56.3207 95.5315 56.2435 95.4742 56.1796 95.4036C56.1157 95.333 56.0664 95.2506 56.0344 95.1609C56.0024 95.0712 55.9883 94.9761 55.9931 94.8811C55.9978 94.786 56.0213 94.6928 56.062 94.6067C56.1028 94.5207 56.1601 94.4435 56.2307 94.3797C56.3013 94.3158 56.3838 94.2664 56.4734 94.2344L67.8528 90.1726C68.0338 90.1079 68.2332 90.1179 68.4069 90.2002C68.5807 90.2825 68.7146 90.4305 68.7792 90.6116C68.8439 90.7927 68.8339 90.992 68.7516 91.1658C68.6693 91.3395 68.5213 91.4734 68.3402 91.5381Z"
                                            fill="#045B62" />
                                        <path
                                            d="M58.1291 90.9622L55.6256 91.8558C55.5359 91.8879 55.4408 91.902 55.3456 91.8973C55.2505 91.8927 55.1572 91.8693 55.0711 91.8285C54.985 91.7878 54.9077 91.7305 54.8438 91.6598C54.7799 91.5892 54.7305 91.5067 54.6984 91.417C54.6664 91.3273 54.6524 91.2321 54.6572 91.137C54.6619 91.0418 54.6854 90.9485 54.7262 90.8625C54.7671 90.7764 54.8245 90.6992 54.8952 90.6354C54.9659 90.5715 55.0484 90.5222 55.1382 90.4902L57.6416 89.5966C57.7313 89.5645 57.8265 89.5504 57.9216 89.5551C58.0168 89.5597 58.1101 89.5831 58.1962 89.6239C58.2823 89.6646 58.3595 89.7219 58.4235 89.7926C58.4874 89.8632 58.5368 89.9457 58.5688 90.0354C58.6008 90.1252 58.6149 90.2203 58.6101 90.3155C58.6053 90.4106 58.5819 90.5039 58.541 90.5899C58.5002 90.676 58.4428 90.7532 58.3721 90.8171C58.3014 90.8809 58.2188 90.9302 58.1291 90.9622Z"
                                            fill="#045B62" />
                                        <path
                                            d="M70.484 97.5412L59.1047 101.603C58.9237 101.668 58.7245 101.657 58.5509 101.575C58.3773 101.493 58.2435 101.345 58.1789 101.164C58.1143 100.983 58.1242 100.784 58.2064 100.61C58.2886 100.436 58.4364 100.302 58.6173 100.238L69.9966 96.1757C70.1776 96.1113 70.3768 96.1214 70.5504 96.2038C70.724 96.2862 70.8578 96.4341 70.9224 96.615C70.987 96.796 70.9771 96.9952 70.8949 97.1689C70.8127 97.3425 70.6649 97.4765 70.484 97.5412Z"
                                            fill="#045B62" />
                                        <path
                                            d="M69.4105 94.5398L58.0312 98.6017C57.8501 98.6663 57.6507 98.6563 57.477 98.574C57.3033 98.4917 57.1693 98.3437 57.1047 98.1626C57.0401 97.9815 57.05 97.7822 57.1323 97.6084C57.2147 97.4347 57.3627 97.3008 57.5437 97.2361L68.9231 93.1743C69.0128 93.1422 69.1079 93.128 69.2031 93.1327C69.2982 93.1374 69.3915 93.1608 69.4776 93.2015C69.5637 93.2423 69.641 93.2996 69.7049 93.3702C69.7688 93.4408 69.8182 93.5234 69.8503 93.6131C69.8823 93.7028 69.8963 93.7979 69.8915 93.8931C69.8868 93.9882 69.8633 94.0815 69.8224 94.1676C69.7816 94.2536 69.7242 94.3308 69.6535 94.3947C69.5828 94.4585 69.5003 94.5079 69.4105 94.5398Z"
                                            fill="#045B62" />
                                        <path
                                            d="M59.0773 37.1502C59.4478 40.14 61.5195 42.6051 64.5322 42.6051C65.9789 42.6051 67.3664 42.0304 68.3894 41.0074C69.4124 39.9844 69.9871 38.5969 69.9871 37.1502C69.9871 34.1375 67.5319 31.9738 64.5322 31.6953C61.3493 31.3997 58.6015 33.3117 59.0773 37.1502Z"
                                            fill="#2F2E41" />
                                        <path
                                            d="M69.2808 73.8991C65.9405 74.4733 62.5198 74.3823 59.2148 73.6313C60.7835 72.7652 65.5417 73.2974 69.2808 73.8991Z"
                                            fill="#2F2E41" />
                                        <path
                                            d="M48.0499 83.494L50.6702 77.1616L52.7346 78.3086L51.4879 84.7502C51.6127 85.1583 51.6213 85.5931 51.5126 86.0058C51.4039 86.4185 51.1822 86.7927 50.8725 87.0863C50.5627 87.3799 50.1772 87.5813 49.7593 87.6679C49.3414 87.7544 48.9077 87.7227 48.5068 87.5762C48.106 87.4297 47.7539 87.1744 47.4902 86.8388C47.2266 86.5032 47.0617 86.1007 47.0142 85.6766C46.9668 85.2525 47.0385 84.8235 47.2215 84.4379C47.4044 84.0524 47.6913 83.7255 48.0499 83.494Z"
                                            fill="#FFB6B6" />
                                        <path
                                            d="M75.1585 66.358V66.3615C75.0646 68.5667 74.9359 70.6641 74.8281 72.2779C71.6931 73.5955 68.3263 74.2731 64.9257 74.2709C63.0051 74.2731 61.0904 74.0584 59.2179 73.631C58.352 73.4341 57.4974 73.1902 56.658 72.9005C56.7748 72.8251 56.9011 72.7655 57.0336 72.7232C58.2858 72.2988 57.0475 71.9127 57.058 71.5093C57.0962 70.0345 57.5032 68.2641 58.0284 66.5667L55.691 72.5493L54.4736 75.6588C54.4736 75.6588 54.5154 78.3439 53.7432 77.5231C52.9676 76.7022 53.0232 79.3596 53.0232 79.3596C52.7822 79.5313 52.5747 79.7459 52.4111 79.9926C52.3422 80.1036 52.3163 80.236 52.338 80.3648V80.3683C52.373 80.4694 52.4418 80.5554 52.5328 80.6117C53.058 80.9665 52.3032 81.9056 51.9693 82.2778C51.8789 82.3786 51.8198 82.4378 51.8198 82.4378L48.6094 82.2082V82.1456C48.6233 81.7665 48.7103 79.77 49.2076 79.2935C49.7537 78.7683 49.4859 77.937 49.4859 77.937C49.4859 77.937 50.9119 76.6744 49.9554 75.6483C49.5728 75.2344 49.7433 72.7823 50.2128 69.6102C51.2389 62.612 53.698 52.1079 54.7623 52.2574C54.9816 51.192 55.491 50.2078 56.2343 49.4136C56.9776 48.6194 57.9258 48.046 58.9744 47.7566L62.4422 46.8036L63.0613 44.3584H67.9447L68.7934 45.9653L72.3516 47.5723L72.3968 47.5931L72.5081 47.6418L72.5499 47.774C72.5499 47.774 72.5464 47.7775 72.5499 47.7775L74.529 53.993C75.4194 55.0156 75.3846 60.9912 75.1585 66.358Z"
                                            fill="#045B62" />
                                        <path
                                            d="M83.4747 78.8831L80.168 72.8806L82.3534 71.9854L86.6037 76.9838C87.0004 77.1413 87.3452 77.4063 87.5995 77.749C87.8538 78.0918 88.0074 78.4987 88.0431 78.924C88.0788 79.3492 87.9952 79.776 87.8016 80.1564C87.6081 80.5368 87.3123 80.8556 86.9474 81.077C86.5826 81.2985 86.1633 81.4138 85.7365 81.41C85.3097 81.4062 84.8925 81.2834 84.5317 81.0554C84.1709 80.8275 83.8808 80.5034 83.6941 80.1196C83.5074 79.7359 83.4314 79.3076 83.4747 78.8831Z"
                                            fill="#FFB6B6" />
                                        <path
                                            d="M72.3516 47.5244C72.9398 48.5813 78.3191 51.2995 77.3869 54.0283C77.3869 54.0283 82.4406 69.8393 83.0977 69.7361C83.7549 69.6329 84.3963 71.266 84.3963 71.266C84.3963 71.266 84.2569 72.3319 84.6668 71.889C85.0767 71.4461 84.9786 72.6072 84.9786 72.6072C84.9786 72.6072 84.7822 73.632 85.3026 73.3534C85.8231 73.0747 85.1388 75.036 85.1388 75.036L82.0111 76.5087L81.4168 75.6241C81.4168 75.6241 80.1468 75.3822 80.7444 75.1906C81.342 74.999 80.1824 74.3542 80.1824 74.3542C80.1824 74.3542 78.9693 73.5297 79.1384 72.1643C79.3074 70.7989 75.9903 68.1148 75.9903 68.1148C73.71 63.6126 72.4626 58.9902 72.4669 54.2221L72.3516 47.5244Z"
                                            fill="#045B62" />
                                        <path
                                            d="M65.138 42.9293C67.8095 42.9293 69.9752 40.7636 69.9752 38.0921C69.9752 35.4206 67.8095 33.2549 65.138 33.2549C62.4665 33.2549 60.3008 35.4206 60.3008 38.0921C60.3008 40.7636 62.4665 42.9293 65.138 42.9293Z"
                                            fill="#FFB6B6" />
                                        <path
                                            d="M60.1276 38.6193C60.2808 39.6704 61.1767 41.1369 60.9669 41.1369C60.7571 41.1369 59.2654 36.8038 60.7571 36.5212C61.8391 36.3163 62.0809 36.4961 63.0922 36.0576L62.9495 36.1918C63.6188 36.6786 64.5503 36.3786 65.314 36.0618C66.0798 35.7471 67.0092 35.447 67.6806 35.9317C68.1023 36.2359 68.2806 36.7646 68.5429 37.2136C68.8052 37.6647 69.2898 38.0906 69.7891 37.9521C69.9837 37.8769 70.1495 37.742 70.2626 37.5667C70.3757 37.3914 70.4303 37.1848 70.4185 36.9765C70.4164 36.5611 69.8755 36.1659 70.0577 35.7932C70.5976 34.6887 70.1121 33.9359 68.9352 33.4161C68.5072 33.3511 68.0792 33.2847 67.6512 33.2168C67.8755 32.9062 68.1474 32.6329 68.4569 32.407C68.3261 32.0717 68.1 31.7822 67.8065 31.574C67.4438 31.4055 67.0397 31.3471 66.6442 31.4062C65.7588 31.4524 64.8741 31.4985 63.9901 31.5447C63.3318 31.5329 62.6784 31.6602 62.0725 31.9181C61.3424 32.2937 60.8641 33.0259 60.5158 33.7707C59.7353 35.4449 59.8591 36.7919 60.1276 38.6193Z"
                                            fill="#2F2E41" />
                                        <path
                                            d="M181.129 35.4464H108.384C108.304 35.4464 108.227 35.4145 108.17 35.3579C108.114 35.3013 108.082 35.2244 108.082 35.1443C108.082 35.0642 108.114 34.9874 108.17 34.9308C108.227 34.8741 108.304 34.8423 108.384 34.8423H181.129C181.209 34.8423 181.286 34.8741 181.343 34.9308C181.4 34.9874 181.431 35.0642 181.431 35.1443C181.431 35.2244 181.4 35.3013 181.343 35.3579C181.286 35.4145 181.209 35.4464 181.129 35.4464Z"
                                            fill="#E6E6E6" />
                                        <path
                                            d="M181.129 54.1724H108.384C108.304 54.1724 108.227 54.1406 108.17 54.084C108.114 54.0273 108.082 53.9505 108.082 53.8704C108.082 53.7903 108.114 53.7135 108.17 53.6568C108.227 53.6002 108.304 53.5684 108.384 53.5684H181.129C181.209 53.5684 181.286 53.6002 181.343 53.6568C181.4 53.7135 181.431 53.7903 181.431 53.8704C181.431 53.9505 181.4 54.0273 181.343 54.084C181.286 54.1406 181.209 54.1724 181.129 54.1724Z"
                                            fill="#E6E6E6" />
                                        <path
                                            d="M181.129 72.8985H108.384C108.304 72.8985 108.227 72.8667 108.17 72.81C108.114 72.7534 108.082 72.6766 108.082 72.5965C108.082 72.5164 108.114 72.4395 108.17 72.3829C108.227 72.3263 108.304 72.2944 108.384 72.2944H181.129C181.209 72.2944 181.286 72.3263 181.343 72.3829C181.4 72.4395 181.431 72.5164 181.431 72.5965C181.431 72.6766 181.4 72.7534 181.343 72.81C181.286 72.8667 181.209 72.8985 181.129 72.8985Z"
                                            fill="#E6E6E6" />
                                        <path
                                            d="M191.957 71.7013C189.294 71.7013 186.719 70.7503 184.695 69.0194C184.019 68.4415 183.3 67.4367 182.556 66.0333C182.082 65.1292 181.816 64.1303 181.779 63.11C181.741 62.0897 181.933 61.0739 182.34 60.1375C181.948 60.5365 181.514 60.8924 181.046 61.199L180.809 61.3564L180.796 61.0727C180.787 60.8882 180.782 60.7043 180.782 60.5262C180.782 59.4762 181.576 58.4108 181.21 57.4404C179.666 53.3501 174.77 49.2852 181.866 42.9549C182.522 42.3694 181.646 41.1985 181.646 40.3126C181.646 31.6297 193.917 16.6081 197.396 24.5657C201.685 34.3795 209.075 33.3298 212.349 35.3568L212.396 35.5002L212.256 35.5568C211.54 35.8579 210.785 36.0587 210.014 36.1533C210.836 36.321 211.675 36.3913 212.514 36.3628L212.644 36.3582L212.676 36.4847C212.988 37.7367 213.146 39.0222 213.145 40.3126L213.145 40.452C213.142 41.4321 213.346 42.4018 213.743 43.2979C214.14 44.194 214.721 44.9963 215.449 45.6526C216.599 46.7009 217.517 47.9773 218.147 49.4003C218.776 50.8233 219.101 52.3618 219.103 53.9177C219.103 55.7584 217.852 58.1747 216.802 59.8775C216.536 60.3113 216.176 60.6792 215.747 60.9537C215.319 61.2281 214.834 61.402 214.328 61.4622C213.85 61.5225 213.364 61.477 212.905 61.3287C212.446 61.1804 212.025 60.9331 211.672 60.6041C212.169 61.603 212.816 62.5195 213.592 63.3216L213.735 63.4692L213.557 63.5728C211.848 64.5691 209.906 65.0937 207.928 65.093L207.812 65.0926C206.362 65.0777 204.923 65.3523 203.58 65.9004C202.238 66.4484 201.018 67.259 199.992 68.2845C198.948 69.3603 197.699 70.2167 196.319 70.8034C194.94 71.3901 193.457 71.6954 191.957 71.7013Z"
                                            fill="#E6E6E6" />
                                        <path
                                            d="M188.114 89.3985C188.066 89.3985 188.019 89.381 187.982 89.3493C187.946 89.3176 187.922 89.2738 187.915 89.2259C187.39 84.5394 187.358 79.8107 187.821 75.1177C188.515 67.7143 190.743 57.0508 197.416 48.293C197.432 48.272 197.452 48.2544 197.475 48.2411C197.498 48.2279 197.523 48.2192 197.549 48.2157C197.575 48.2121 197.602 48.2138 197.627 48.2205C197.653 48.2273 197.677 48.239 197.698 48.255C197.719 48.271 197.736 48.291 197.75 48.3138C197.763 48.3366 197.771 48.3618 197.775 48.3879C197.779 48.4141 197.777 48.4407 197.77 48.4662C197.763 48.4917 197.752 48.5157 197.736 48.5367C191.12 57.2188 188.91 67.8041 188.222 75.1552C187.761 79.8168 187.792 84.514 188.313 89.1692C188.317 89.1978 188.315 89.2268 188.307 89.2544C188.299 89.282 188.285 89.3076 188.266 89.3293C188.247 89.3511 188.224 89.3685 188.197 89.3804C188.171 89.3924 188.143 89.3985 188.114 89.3985Z"
                                            fill="#3F3D56" />
                                        <path
                                            d="M193.561 60.6463C193.518 60.6464 193.477 60.633 193.442 60.608C193.408 60.5831 193.382 60.5479 193.369 60.5076C193.356 60.4672 193.356 60.4237 193.369 60.3833C193.382 60.3429 193.408 60.3077 193.442 60.2828C195.344 58.9957 197.398 57.9501 199.557 57.1699C202.931 55.9347 208.061 54.815 213.343 56.4959C213.368 56.5039 213.391 56.5168 213.412 56.5338C213.432 56.5508 213.448 56.5716 213.461 56.5951C213.473 56.6185 213.48 56.6441 213.482 56.6704C213.484 56.6967 213.482 56.7232 213.474 56.7483C213.466 56.7735 213.453 56.7968 213.436 56.817C213.419 56.8371 213.398 56.8538 213.374 56.8659C213.351 56.878 213.325 56.8854 213.299 56.8876C213.273 56.8899 213.246 56.8869 213.221 56.8789C208.048 55.2325 203.01 56.3337 199.695 57.5474C197.571 58.3142 195.55 59.3422 193.678 60.6079C193.644 60.6329 193.603 60.6463 193.561 60.6463Z"
                                            fill="#3F3D56" />
                                        <path
                                            d="M184.36 37.7371C184.357 37.6947 184.367 37.6525 184.39 37.6165C184.412 37.5804 184.445 37.5523 184.485 37.5363C184.524 37.5203 184.567 37.5172 184.608 37.5273C184.65 37.5375 184.687 37.5604 184.714 37.5929C186.135 39.3967 187.326 41.3702 188.259 43.4679C189.734 46.744 191.22 51.7804 189.924 57.1693C189.918 57.195 189.907 57.2193 189.891 57.2407C189.876 57.2621 189.856 57.2803 189.834 57.2941C189.811 57.3079 189.786 57.3172 189.76 57.3213C189.734 57.3255 189.707 57.3244 189.682 57.3183C189.656 57.3121 189.632 57.3009 189.61 57.2853C189.589 57.2698 189.571 57.2501 189.557 57.2276C189.543 57.205 189.534 57.1799 189.53 57.1538C189.526 57.1277 189.527 57.101 189.533 57.0753C190.803 51.7968 189.342 46.8518 187.893 43.6329C186.975 41.5689 185.804 39.627 184.407 37.852C184.379 37.8196 184.363 37.7794 184.36 37.7371Z"
                                            fill="#3F3D56" />
                                        <path
                                            d="M20.0095 67.6805C18.9839 66.6549 17.764 65.8444 16.4212 65.2963C15.0784 64.7483 13.6397 64.4737 12.1894 64.4886L12.0736 64.4889C10.0957 64.4897 8.15304 63.9651 6.4444 62.9688L6.26661 62.8652L6.40981 62.7176C7.18509 61.9155 7.83245 60.999 8.32921 60.0001C7.9764 60.3291 7.5556 60.5764 7.0966 60.7247C6.6376 60.873 6.15161 60.9185 5.67304 60.8582C5.16779 60.798 4.68274 60.6241 4.25427 60.3497C3.8258 60.0752 3.46503 59.7073 3.19903 59.2735C2.1495 57.5707 0.898438 55.1544 0.898438 53.3137C0.900071 51.7578 1.22584 50.2193 1.85499 48.7963C2.48414 47.3733 3.40287 46.0969 4.55261 45.0487C5.28049 44.3923 5.86189 43.59 6.25888 42.6939C6.65588 41.7978 6.85956 40.8281 6.85666 39.848L6.85608 39.7086C6.85588 38.4182 7.01356 37.1327 7.32561 35.8807L7.35729 35.7542L7.48737 35.7588C8.32623 35.7873 9.16553 35.717 9.98794 35.5493C9.21652 35.4547 8.46186 35.2539 7.74536 34.9528L7.60542 34.8962L7.65291 34.7528C10.9267 32.7258 18.3167 33.7755 22.606 23.9617C26.0841 16.0041 38.3559 31.0257 38.3559 39.7086C38.3559 40.5945 37.4791 41.7653 38.1355 42.3509C45.231 48.6812 40.3352 52.7461 38.7916 56.8364C38.4254 57.8068 39.2195 58.8722 39.2195 59.9221C39.2195 60.1003 39.2149 60.2842 39.206 60.4687L39.1923 60.7524L38.9557 60.595C38.4877 60.2884 38.0539 59.9325 37.6616 59.5335C38.0685 60.4699 38.2603 61.4857 38.2228 62.506C38.1853 63.5263 37.9196 64.5252 37.445 65.4292C36.7014 66.8327 35.982 67.8375 35.3069 68.4154C33.144 70.2663 30.3557 71.2211 27.5123 71.0845C24.6688 70.9479 21.985 69.7302 20.0095 67.6805Z"
                                            fill="#E6E6E6" />
                                        <path
                                            d="M31.8894 88.795C31.9378 88.795 31.9845 88.7775 32.021 88.7458C32.0575 88.7141 32.0813 88.6703 32.0881 88.6224C32.6137 83.9359 32.6451 79.2072 32.1819 74.5142C31.4882 67.1108 29.2606 56.4473 22.5874 47.6895C22.5714 47.6685 22.5514 47.6509 22.5286 47.6376C22.5058 47.6243 22.4806 47.6157 22.4544 47.6122C22.4283 47.6086 22.4017 47.6103 22.3762 47.617C22.3507 47.6238 22.3267 47.6355 22.3057 47.6515C22.2847 47.6675 22.2671 47.6874 22.2538 47.7103C22.2405 47.7331 22.2319 47.7583 22.2284 47.7844C22.2248 47.8106 22.2265 47.8372 22.2332 47.8627C22.24 47.8882 22.2517 47.9122 22.2677 47.9332C28.8832 56.6153 31.0929 67.2005 31.7817 74.5516C32.2424 79.2133 32.2117 83.9105 31.6902 88.5657C31.6861 88.5942 31.6883 88.6233 31.6965 88.6509C31.7046 88.6785 31.7186 88.7041 31.7375 88.7258C31.7564 88.7475 31.7797 88.765 31.8059 88.7769C31.8321 88.7889 31.8606 88.795 31.8894 88.795Z"
                                            fill="#3F3D56" />
                                        <path
                                            d="M26.442 60.0428C26.4845 60.0428 26.5259 60.0294 26.5602 60.0045C26.5946 59.9796 26.6202 59.9444 26.6333 59.904C26.6464 59.8637 26.6465 59.8202 26.6333 59.7798C26.6202 59.7394 26.5947 59.7042 26.5603 59.6793C24.6589 58.3922 22.6048 57.3465 20.4453 56.5664C17.0715 55.3312 11.9411 54.2114 6.65954 55.8924C6.6344 55.9004 6.61107 55.9133 6.5909 55.9303C6.57073 55.9473 6.55412 55.9681 6.54199 55.9916C6.52987 56.015 6.52248 56.0406 6.52025 56.0669C6.51802 56.0932 6.52099 56.1197 6.529 56.1448C6.537 56.17 6.54987 56.1933 6.56689 56.2135C6.58391 56.2336 6.60474 56.2502 6.62818 56.2624C6.65162 56.2745 6.67721 56.2819 6.70351 56.2841C6.7298 56.2863 6.75628 56.2834 6.78142 56.2754C11.9548 54.629 16.9922 55.7302 20.3071 56.9438C22.4319 57.7107 24.453 58.7387 26.324 60.0044C26.3583 60.0294 26.3996 60.0428 26.442 60.0428Z"
                                            fill="#3F3D56" />
                                        <path
                                            d="M35.6427 37.1331C35.6458 37.0908 35.6354 37.0485 35.613 37.0125C35.5906 36.9764 35.5574 36.9483 35.5181 36.9323C35.4788 36.9163 35.4354 36.9132 35.3942 36.9233C35.3529 36.9335 35.316 36.9565 35.2886 36.9889C33.868 38.7927 32.6771 40.7662 31.7434 42.8639C30.2685 46.14 28.7822 51.1764 30.0784 56.5653C30.0845 56.591 30.0957 56.6153 30.1112 56.6367C30.1267 56.6581 30.1462 56.6763 30.1688 56.6901C30.1913 56.704 30.2163 56.7132 30.2425 56.7174C30.2686 56.7215 30.2952 56.7204 30.3209 56.7143C30.3466 56.7081 30.3709 56.6969 30.3922 56.6813C30.4136 56.6658 30.4317 56.6461 30.4455 56.6236C30.4592 56.601 30.4684 56.5759 30.4725 56.5498C30.4766 56.5237 30.4754 56.497 30.4692 56.4713C29.1996 51.1928 30.6608 46.2478 32.11 43.0289C33.0278 40.9649 34.1988 39.023 35.5959 37.248C35.6233 37.2156 35.6397 37.1754 35.6427 37.1331Z"
                                            fill="#3F3D56" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_3896_26042">
                                            <rect width="218.206" height="110" fill="white"
                                                transform="translate(0.898438)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <div class="pending_appointments_empty_state_message_container">
                                    <div class="pet_info_empty_state">
                                        <h1>NO PENDING APPOINTMENTS YET</h1>
                                        <div class="pet_info_empty_state_p_container">
                                            <p>Looks like no one has made an appointment yet.</p>
                                            <p>You can add one by yourself by clicking the button below.</p>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn new_appointment_btn" id="pending_appointment_tab_button"
                                    type="button"><span class="new_appointment_btn_base"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <g clip-path="url(#clip0_5910_1403)" filter="url(#filter0_d_5910_1403)">
                                                <path d="M12 5V19M5 12H19" stroke="white" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <filter id="filter0_d_5910_1403" x="-2" y="0" width="28"
                                                    height="28" filterUnits="userSpaceOnUse"
                                                    color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                        result="hardAlpha" />
                                                    <feOffset dy="2" />
                                                    <feGaussianBlur stdDeviation="1" />
                                                    <feComposite in2="hardAlpha" operator="out" />
                                                    <feColorMatrix type="matrix"
                                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" />
                                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                                        result="effect1_dropShadow_5910_1403" />
                                                    <feBlend mode="normal" in="SourceGraphic"
                                                        in2="effect1_dropShadow_5910_1403" result="shape" />
                                                </filter>
                                                <clipPath id="clip0_5910_1403">
                                                    <rect width="24" height="24" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg> New Appointment</span></button>
                            </div>
                            <div class="table-responsive mt-3" id="pending_table">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>
                                                <input type="radio" id="selectAll_pending" class="checkbox">
                                            </th>
                                            <th>No.</th>
                                            <th>Client</th>
                                            <th>Status</th>
                                            <th>Patient Info</th>
                                            <th>Appointment</th>
                                            <th>Surgery type</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="pendingTableBody">
                                        @foreach ($appointment_pending as $index => $appointment)
                                            <tr>
                                                <td ><input type="radio" class="checkbox"></td></td>
                                                <td >{{ $index + 1 }}</td>
                                                <td >{{ $appointment->clients->first_name }}
                                                    {{ $appointment->clients->middle_name }}
                                                    {{ $appointment->clients->last_name }}
                                                    {{ $appointment->clients->suffix }}</td>
                                                <td >{{ $appointment->status }}</td>
                                                <td >{{ $appointment['petType'] }}
                                                    ({{ $appointment['breed'] }})</td>
                                                <td >{{ $appointment['appointmentDate'] }} |
                                                    {{ $appointment['appointmentTime'] }}</td>
                                                <td >{{ $appointment['appointmentType'] }}</td>
                                                <td>
                                                    <div class="dropdown"><button class="dropbtn" style="background-color: transparent; border:none;"
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
                                                        <div class="dropdown-menu"><button id="approve-btn"
                                                                data-id="{{ $appointment->id }}"
                                                                class="dropdown-item accept-action"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24"
                                                                    fill="none">
                                                                    <g clip-path="url(#clip0_6291_1355)">
                                                                        <path d="M5 12L10 17L20 7" stroke="#1C1C1C"
                                                                            stroke-opacity="0.7" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </g>
                                                                    <defs>
                                                                        <clipPath id="clip0_6291_1355">
                                                                            <rect width="24" height="24"
                                                                                fill="white" />
                                                                        </clipPath>
                                                                    </defs>
                                                                </svg> Aprove</button><button id="reject-btn"
                                                                data-id="{{ $appointment->id }}"
                                                                class="dropdown-item reject-action"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24"
                                                                    fill="none">
                                                                    <g clip-path="url(#clip0_6291_1893)">
                                                                        <path d="M18 6L6 18M6 6L18 18" stroke="#1C1C1C"
                                                                            stroke-opacity="0.7" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </g>
                                                                    <defs>
                                                                        <clipPath id="clip0_6291_1893">
                                                                            <rect width="24" height="24"
                                                                                fill="white" />
                                                                        </clipPath>
                                                                    </defs>
                                                                </svg> Reject</button>
                                                        </div>
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
                                        @for ($i = 1; $i <= $appointment_pending->lastPage(); $i++)
                                            <option value="{{ $i }}"
                                                {{ request()->input('page') == $i ? 'selected' : '' }}>
                                                {{ $i }}
                                            </option>
                                        @endfor
                                    </select>
  
                                </div>
                                <div class="pagination-pages">
                                    {{ $appointment_pending->appends([
                                      'qPending' => request()->input('qPending'), 
                                      'sortBy' => request()->input('sortBy'), 
                                      'perPage' => request()->input('perPage'),
                                      'sortItems' => request()->input('sortItems'),
                                      'sortOrder' => request()->input('sortOrder'),
                                      'dogCheck' => request()->input('dogCheck'),
                                      'catCheck' => request()->input('catCheck'),
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
                        <div class="tab-pane align-self-stretch appointment_tab" role="tabpanel" id="rejected_tab">
                            <div class="container_header">
                                <form action="" id="rejectForm">
                                    <div class="left_part_product_header">
                                        <div class="search_container">
                                            <input type="text" class="search_input" name="qPending"
                                            value="{{ request('qReject') }}" placeholder="Search Appointment">
                                            <input type="hidden" id="rejectPageForm" name="page"
                                            value="{{ request('page') }}">
                                            <input type="hidden" id="rejectPerPageForm" name="perPage"
                                                value="{{ request('perPage') }}">

                                        </div>
                                        <button type="submit" form="rejectForm" class="btn filter_btn fw-bold"><i class="fa-solid fa-magnifying-glass"></i>Search</button>
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
                                                          {{ request()->input('dogCheck') == 'on' ? 'checked' : '' }}
                                                           name ="dogCheck" 
                                                           type="checkbox" 
                                                           role="switch" 
                                                           id="rejectDogCheck" 
                                                           style="transform: scale(1.5);"
                                                           >
                                                  
                                                    <label class="form-check-label fs-6 my-1" 
                                                           for="rejectDogCheck" 
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
                                                             id="rejectCatCheck" 
                                                             style="rejectCatCheck: scale(1.5);"
                                                             >
                                                    
                                                      <label class="form-check-label fs-6 my-1" 
                                                             for="pendingCatCheck" 
                                                             >Cat</label>
                                                    </div>
                                            
                                                  </li>
                                            </ul>
                                        </div>
                                        
                                        <div class="dropdown">
                                            <button class="filter_btn dropdown-toggle fw-bold" type="button"
                                                id="dropdownMenuButton1" data-bs-toggle="dropdown" data-bs-auto-close="false"
                                                aria-expanded="false">
                                                <i class="fa-solid fa-arrow-down-short-wide"></i>Sort
                                                By
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-item ">
                                                    <input class="form-check-input me-1" type="radio" id = "reject1"
                                                        name="sortItems"{{ request()->input('sortItems', '0') == '0' ? 'checked' : '' }}  value="0">
                                                    <label class="form-check-label ms-1 fs-6" for="reject1">
                                                        Appointment
                                                </li>
                                                <li class="dropdown-item">
                                                    <input class="form-check-input me-1" type="radio" id = "reject2"
                                                        name="sortItems" {{ request()->input('sortItems') == '1' ? 'checked' : '' }} value="1">
                                                    <label class="form-check-label ms-1 fs-6" for="reject2">
                                                        Status
                                                </li>
                                                <li class="dropdown-item">
                                                    <input class="form-check-input me-1" type="radio" id = "reject3"
                                                        name="sortItems" {{ request()->input('sortItems') == '2' ? 'checked' : '' }} value="2">
                                                    <label class="form-check-label ms-1 fs-6" for="reject3">
                                                        Patient
                                                </li>
                                                <li class="dropdown-item">
                                                    <input class="form-check-input me-1" type="radio" id = "reject4"
                                                        name="sortItems" {{ request()->input('sortItems') == '3' ? 'checked' : '' }} value="3">
                                                    <label class="form-check-label ms-1 fs-6" for="reject4">
                                                        Client
                                                </li>
                                                <li>
                                                  <li class="dropdown-item">
                                                    <input class="form-check-input me-1" type="radio" id = "reject5"
                                                        name="sortItems" {{ request()->input('sortItems') == '4' ? 'checked' : '' }} value="4">
                                                    <label class="form-check-label ms-1 fs-6" for="reject5">
                                                        Surgery Type
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider me-2 ms-2">
                                                </li>
                                                <li class="dropdown-item">
                                                    <input class="form-check-input me-1" type="radio" id = "reject6"
                                                        name="sortOrder" {{ request()->input('sortOrder') == '0' ? 'checked' : '' }} value="0">
                                                    <label class="form-check-label ms-1 fs-6" for="reject6">
                                                        Ascending
                                                </li>
                                                <li class="dropdown-item">
                                                    <input class="form-check-input me-1" type="radio" id = "reject7"
                                                        name="sortOrder" {{ request()->input('sortOrder', '1') == '1' ? 'checked' : '' }} value="1">
                                                    <label class="form-check-label ms-1 fs-6" for="reject7">
                                                        Descending
                                                </li>
                                                <li class="dropdown-item ">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <button type = "reset" class="btn btn-outline-secondary btn-sm me-3">Cancel</button>
                                                      </div>
                                                      <div class="col-md-6 text-center">
                                                          <button type="submit" form="pendingForm" class="btn btn-primary btn-sm ms-3">Apply</button>
                                                      </div>
                                                  </div>
                                              </li>
                                            </ul>
                                        </div>
          
                                    </div>
                                </form>


                            </div>
                            <div id="rejected_appointment_empty_state" class="appointment_empty_state">
                                <svg xmlns="http://www.w3.org/2000/svg" width="220" height="110"
                                    viewBox="0 0 220 110" fill="none">
                                    <g clip-path="url(#clip0_3896_26042)">
                                        <path
                                            d="M198.031 89.4723H32.121C30 89.4699 27.9666 88.6263 26.4668 87.1266C24.9671 85.6268 24.1235 83.5934 24.1211 81.4725V18.517C24.1235 16.396 24.9671 14.3626 26.4669 12.8629C27.9666 11.3631 30 10.5195 32.121 10.5171H198.031C200.152 10.5195 202.186 11.3631 203.685 12.8629C205.185 14.3626 206.029 16.396 206.031 18.517V81.4725C206.029 83.5934 205.185 85.6268 203.685 87.1266C202.186 88.6263 200.152 89.4699 198.031 89.4723Z"
                                            fill="white" />
                                        <path
                                            d="M198.031 89.4723H32.121C30 89.4699 27.9666 88.6263 26.4668 87.1266C24.9671 85.6268 24.1235 83.5934 24.1211 81.4725V18.517C24.1235 16.396 24.9671 14.3626 26.4669 12.8629C27.9666 11.3631 30 10.5195 32.121 10.5171H198.031C200.152 10.5195 202.186 11.3631 203.685 12.8629C205.185 14.3626 206.029 16.396 206.031 18.517V81.4725C206.029 83.5934 205.185 85.6268 203.685 87.1266C202.186 88.6263 200.152 89.4699 198.031 89.4723ZM32.121 11.2127C30.1838 11.2127 28.3259 11.9823 26.9561 13.3521C25.5863 14.7219 24.8167 16.5798 24.8167 18.517V81.4725C24.8167 82.4317 25.0057 83.3815 25.3727 84.2677C25.7398 85.1538 26.2778 85.9591 26.9561 86.6373C27.6343 87.3156 28.4396 87.8536 29.3258 88.2207C30.2119 88.5877 31.1618 88.7767 32.121 88.7767H198.031C198.99 88.7767 199.94 88.5877 200.826 88.2207C201.713 87.8536 202.518 87.3156 203.196 86.6373C203.874 85.9591 204.412 85.1538 204.78 84.2677C205.147 83.3815 205.335 82.4317 205.335 81.4725V57.7348C205.335 45.3964 200.434 33.5633 191.71 24.8387C182.985 16.1142 171.152 11.2127 158.813 11.2127H32.121Z"
                                            fill="#E6E6E6" />
                                        <path
                                            d="M18.9919 102.875C19.0597 102.408 18.5713 101.951 17.9009 101.854C17.2306 101.756 16.6321 102.055 16.5643 102.521C16.4964 102.988 16.9848 103.445 17.6552 103.542C18.3256 103.64 18.924 103.341 18.9919 102.875Z"
                                            fill="white" />
                                        <path
                                            d="M26.9763 102.096C27.0441 101.629 26.5557 101.172 25.8853 101.075C25.2149 100.977 24.6165 101.276 24.5486 101.743C24.4808 102.209 24.9692 102.666 25.6396 102.764C26.31 102.861 26.9084 102.562 26.9763 102.096Z"
                                            fill="#3F3D56" />
                                        <path
                                            d="M16.8083 96.4126C16.8761 95.9463 16.3877 95.4892 15.7173 95.3916C15.047 95.2941 14.4485 95.5931 14.3807 96.0594C14.3128 96.5258 14.8013 96.9829 15.4716 97.0804C16.142 97.178 16.7404 96.879 16.8083 96.4126Z"
                                            fill="#FF6584" />
                                        <path
                                            d="M13.3383 93.7662C13.3415 93.338 13.1027 92.9892 12.8049 92.9869C12.5071 92.9847 12.263 93.3299 12.2598 93.758C12.2565 94.1861 12.4953 94.535 12.7932 94.5373C13.091 94.5395 13.335 94.1943 13.3383 93.7662Z"
                                            fill="#E6E6E6" />
                                        <path
                                            d="M12.1625 88.836C12.1657 88.4079 11.9269 88.059 11.6291 88.0567C11.3313 88.0545 11.0872 88.3997 11.084 88.8278C11.0807 89.256 11.3196 89.6049 11.6174 89.6071C11.9152 89.6094 12.1593 89.2641 12.1625 88.836Z"
                                            fill="#3F3D56" />
                                        <path
                                            d="M21.3109 97.5123C21.3142 97.0841 21.0754 96.7353 20.7775 96.733C20.4797 96.7308 20.2357 97.076 20.2324 97.5041C20.2292 97.9322 20.468 98.2811 20.7658 98.2834C21.0636 98.2856 21.3077 97.9404 21.3109 97.5123Z"
                                            fill="#E6E6E6" />
                                        <path
                                            d="M17.4516 99.438C17.4548 99.0099 17.216 98.661 16.9182 98.6588C16.6203 98.6565 16.3763 99.0018 16.373 99.4299C16.3698 99.858 16.6086 100.207 16.9064 100.209C17.2043 100.211 17.4483 99.8662 17.4516 99.438Z"
                                            fill="#FF6584" />
                                        <path
                                            d="M22.8227 102.997C22.8259 102.569 22.5871 102.22 22.2893 102.218C21.9914 102.216 21.7474 102.561 21.7441 102.989C21.7409 103.417 21.9797 103.766 22.2775 103.768C22.5754 103.77 22.8194 103.425 22.8227 102.997Z"
                                            fill="#3F3D56" />
                                        <path
                                            d="M211.818 2.33786C211.966 1.75557 211.407 1.11158 210.57 0.899453C209.732 0.687327 208.934 0.987394 208.787 1.56968C208.639 2.15198 209.198 2.79599 210.035 3.00811C210.872 3.22024 211.67 2.92015 211.818 2.33786Z"
                                            fill="white" />
                                        <path
                                            d="M201.595 2.27196C201.743 1.68967 201.184 1.04566 200.347 0.833535C199.51 0.621409 198.712 0.921494 198.564 1.50378C198.416 2.08608 198.975 2.73007 199.812 2.94219C200.65 3.15432 201.448 2.85425 201.595 2.27196Z"
                                            fill="#3F3D56" />
                                        <path
                                            d="M213.736 10.8188C213.883 10.2365 213.325 9.59254 212.487 9.38041C211.65 9.16828 210.852 9.46835 210.705 10.0506C210.557 10.6329 211.116 11.2769 211.953 11.4891C212.79 11.7012 213.588 11.4011 213.736 10.8188Z"
                                            fill="#FF6584" />
                                        <path
                                            d="M216.117 14.0163C216.177 13.474 215.921 13.0001 215.543 12.958C215.166 12.9158 214.811 13.3213 214.75 13.8637C214.69 14.406 214.946 14.8799 215.324 14.922C215.701 14.9642 216.056 14.5587 216.117 14.0163Z"
                                            fill="#E6E6E6" />
                                        <path
                                            d="M216.96 20.4211C217.021 19.8788 216.764 19.4049 216.387 19.3628C216.01 19.3206 215.655 19.7261 215.594 20.2685C215.534 20.8108 215.79 21.2847 216.168 21.3268C216.545 21.369 216.9 20.9635 216.96 20.4211Z"
                                            fill="#3F3D56" />
                                        <path
                                            d="M206.507 8.21507C206.568 7.67271 206.311 7.19887 205.934 7.15671C205.557 7.11456 205.202 7.52005 205.141 8.06241C205.08 8.60477 205.337 9.07861 205.714 9.12077C206.092 9.16293 206.447 8.75743 206.507 8.21507Z"
                                            fill="#E6E6E6" />
                                        <path
                                            d="M211.652 6.28246C211.712 5.7401 211.456 5.26625 211.078 5.2241C210.701 5.18194 210.346 5.58743 210.286 6.12979C210.225 6.67215 210.482 7.14599 210.859 7.18815C211.236 7.23031 211.591 6.82482 211.652 6.28246Z"
                                            fill="#FF6584" />
                                        <path
                                            d="M205.316 1.06126C205.376 0.518905 205.12 0.045062 204.742 0.00290405C204.365 -0.0392539 204.01 0.366238 203.95 0.908597C203.889 1.45096 204.146 1.9248 204.523 1.96696C204.9 2.00912 205.255 1.60362 205.316 1.06126Z"
                                            fill="#3F3D56" />
                                        <path
                                            d="M90.4821 48.7131C90.4912 55.0134 88.1638 61.0934 83.95 65.7772V65.7807C83.3542 66.4431 82.725 67.0746 82.0648 67.6728C81.3892 68.2847 80.681 68.8594 79.9431 69.3945C79.4283 69.7702 78.8996 70.1249 78.357 70.4589C77.7136 70.8588 77.0515 71.2287 76.371 71.5684C75.8666 71.8223 75.3519 72.0588 74.8267 72.2779C71.6916 73.5955 68.3249 74.2731 64.9242 74.271C63.0036 74.2731 61.0889 74.0584 59.2165 73.631C58.3506 73.4341 57.496 73.1902 56.6565 72.9005C56.333 72.7927 56.0096 72.6745 55.6896 72.5493C53.7493 71.7992 51.9093 70.812 50.2114 69.6102C46.6227 67.0835 43.7451 63.6751 41.856 59.7136C39.9668 55.752 39.1296 51.3706 39.4252 46.9916C39.7208 42.6126 41.1391 38.3835 43.5435 34.7117C45.9478 31.0399 49.2573 28.0492 53.153 26.0277C57.0487 24.0061 61.3994 23.0219 65.7859 23.1698C70.1723 23.3177 74.4468 24.5927 78.1975 26.8721C81.9482 29.1514 85.0487 32.3583 87.2003 36.1837C89.3519 40.0091 90.4821 44.3241 90.4821 48.7131Z"
                                            fill="#F2F2F2" />
                                        <path
                                            d="M166.976 29.7147H122.803C122.435 29.7142 122.081 29.5673 121.821 29.3065C121.56 29.0456 121.414 28.692 121.414 28.3234C121.414 27.9548 121.56 27.6012 121.821 27.3403C122.081 27.0795 122.435 26.9327 122.803 26.9321H166.976C167.345 26.9321 167.699 27.0787 167.96 27.3396C168.221 27.6005 168.368 27.9544 168.368 28.3234C168.368 28.6924 168.221 29.0463 167.96 29.3072C167.699 29.5681 167.345 29.7147 166.976 29.7147Z"
                                            fill="#045B62" />
                                        <path
                                            d="M166.976 48.4969H122.803C122.435 48.4964 122.081 48.3496 121.821 48.0887C121.56 47.8278 121.414 47.4743 121.414 47.1056C121.414 46.737 121.56 46.3834 121.821 46.1226C122.081 45.8617 122.435 45.7149 122.803 45.7144H166.976C167.345 45.7149 167.698 45.8617 167.959 46.1226C168.219 46.3834 168.366 46.737 168.366 47.1056C168.366 47.4743 168.219 47.8278 167.959 48.0887C167.698 48.3496 167.345 48.4964 166.976 48.4969Z"
                                            fill="#E6E6E6" />
                                        <path
                                            d="M166.976 67.2792H122.803C122.435 67.2786 122.081 67.1318 121.821 66.8709C121.56 66.6101 121.414 66.2565 121.414 65.8879C121.414 65.5192 121.56 65.1657 121.821 64.9048C122.081 64.644 122.435 64.4971 122.803 64.4966H166.976C167.345 64.4966 167.699 64.6432 167.96 64.9041C168.221 65.165 168.368 65.5189 168.368 65.8879C168.368 66.2569 168.221 66.6107 167.96 66.8717C167.699 67.1326 167.345 67.2792 166.976 67.2792Z"
                                            fill="#E6E6E6" />
                                        <path
                                            d="M56.54 108.785C51.5532 102.152 48.6709 94.7347 48.5765 86.2782C48.4158 85.8225 48.4425 85.3216 48.6506 84.8856C48.8588 84.4495 49.2314 84.1138 49.6867 83.9521L66.6845 77.9378C67.1402 77.7771 67.6411 77.8038 68.0772 78.0119C68.5132 78.2201 68.849 78.5927 69.0107 79.0481L76.9742 101.555C77.1349 102.011 77.1082 102.512 76.9001 102.948C76.6919 103.384 76.3193 103.719 75.864 103.881L58.8662 109.895C58.4105 110.056 57.9096 110.029 57.4736 109.821C57.0375 109.613 56.7017 109.241 56.54 108.785Z"
                                            fill="#E6E6E6" />
                                        <path
                                            d="M55.4396 101.526C52.4403 98.4933 51.1565 93.0846 50.3199 87.0563C50.1694 86.6295 50.1944 86.1605 50.3893 85.7521C50.5842 85.3437 50.9332 85.0293 51.3597 84.8778L65.9678 79.7091C66.3946 79.5586 66.8637 79.5835 67.2721 79.7785C67.6805 79.9734 67.995 80.3224 68.1464 80.7488L75.2329 100.777C75.3834 101.204 75.3584 101.673 75.1635 102.081C74.9685 102.49 74.6195 102.804 74.1931 102.956L65.1436 106.157C63.2425 106.828 61.1531 106.716 59.3339 105.848C57.5147 104.98 56.1142 103.425 55.4396 101.526Z"
                                            fill="white" />
                                        <path
                                            d="M68.3402 91.5381L56.9608 95.5999C56.8712 95.6319 56.7761 95.646 56.681 95.6412C56.5859 95.6365 56.4927 95.6131 56.4067 95.5723C56.3207 95.5315 56.2435 95.4742 56.1796 95.4036C56.1157 95.333 56.0664 95.2506 56.0344 95.1609C56.0024 95.0712 55.9883 94.9761 55.9931 94.8811C55.9978 94.786 56.0213 94.6928 56.062 94.6067C56.1028 94.5207 56.1601 94.4435 56.2307 94.3797C56.3013 94.3158 56.3838 94.2664 56.4734 94.2344L67.8528 90.1726C68.0338 90.1079 68.2332 90.1179 68.4069 90.2002C68.5807 90.2825 68.7146 90.4305 68.7792 90.6116C68.8439 90.7927 68.8339 90.992 68.7516 91.1658C68.6693 91.3395 68.5213 91.4734 68.3402 91.5381Z"
                                            fill="#045B62" />
                                        <path
                                            d="M58.1291 90.9622L55.6256 91.8558C55.5359 91.8879 55.4408 91.902 55.3456 91.8973C55.2505 91.8927 55.1572 91.8693 55.0711 91.8285C54.985 91.7878 54.9077 91.7305 54.8438 91.6598C54.7799 91.5892 54.7305 91.5067 54.6984 91.417C54.6664 91.3273 54.6524 91.2321 54.6572 91.137C54.6619 91.0418 54.6854 90.9485 54.7262 90.8625C54.7671 90.7764 54.8245 90.6992 54.8952 90.6354C54.9659 90.5715 55.0484 90.5222 55.1382 90.4902L57.6416 89.5966C57.7313 89.5645 57.8265 89.5504 57.9216 89.5551C58.0168 89.5597 58.1101 89.5831 58.1962 89.6239C58.2823 89.6646 58.3595 89.7219 58.4235 89.7926C58.4874 89.8632 58.5368 89.9457 58.5688 90.0354C58.6008 90.1252 58.6149 90.2203 58.6101 90.3155C58.6053 90.4106 58.5819 90.5039 58.541 90.5899C58.5002 90.676 58.4428 90.7532 58.3721 90.8171C58.3014 90.8809 58.2188 90.9302 58.1291 90.9622Z"
                                            fill="#045B62" />
                                        <path
                                            d="M70.484 97.5412L59.1047 101.603C58.9237 101.668 58.7245 101.657 58.5509 101.575C58.3773 101.493 58.2435 101.345 58.1789 101.164C58.1143 100.983 58.1242 100.784 58.2064 100.61C58.2886 100.436 58.4364 100.302 58.6173 100.238L69.9966 96.1757C70.1776 96.1113 70.3768 96.1214 70.5504 96.2038C70.724 96.2862 70.8578 96.4341 70.9224 96.615C70.987 96.796 70.9771 96.9952 70.8949 97.1689C70.8127 97.3425 70.6649 97.4765 70.484 97.5412Z"
                                            fill="#045B62" />
                                        <path
                                            d="M69.4105 94.5398L58.0312 98.6017C57.8501 98.6663 57.6507 98.6563 57.477 98.574C57.3033 98.4917 57.1693 98.3437 57.1047 98.1626C57.0401 97.9815 57.05 97.7822 57.1323 97.6084C57.2147 97.4347 57.3627 97.3008 57.5437 97.2361L68.9231 93.1743C69.0128 93.1422 69.1079 93.128 69.2031 93.1327C69.2982 93.1374 69.3915 93.1608 69.4776 93.2015C69.5637 93.2423 69.641 93.2996 69.7049 93.3702C69.7688 93.4408 69.8182 93.5234 69.8503 93.6131C69.8823 93.7028 69.8963 93.7979 69.8915 93.8931C69.8868 93.9882 69.8633 94.0815 69.8224 94.1676C69.7816 94.2536 69.7242 94.3308 69.6535 94.3947C69.5828 94.4585 69.5003 94.5079 69.4105 94.5398Z"
                                            fill="#045B62" />
                                        <path
                                            d="M59.0773 37.1502C59.4478 40.14 61.5195 42.6051 64.5322 42.6051C65.9789 42.6051 67.3664 42.0304 68.3894 41.0074C69.4124 39.9844 69.9871 38.5969 69.9871 37.1502C69.9871 34.1375 67.5319 31.9738 64.5322 31.6953C61.3493 31.3997 58.6015 33.3117 59.0773 37.1502Z"
                                            fill="#2F2E41" />
                                        <path
                                            d="M69.2808 73.8991C65.9405 74.4733 62.5198 74.3823 59.2148 73.6313C60.7835 72.7652 65.5417 73.2974 69.2808 73.8991Z"
                                            fill="#2F2E41" />
                                        <path
                                            d="M48.0499 83.494L50.6702 77.1616L52.7346 78.3086L51.4879 84.7502C51.6127 85.1583 51.6213 85.5931 51.5126 86.0058C51.4039 86.4185 51.1822 86.7927 50.8725 87.0863C50.5627 87.3799 50.1772 87.5813 49.7593 87.6679C49.3414 87.7544 48.9077 87.7227 48.5068 87.5762C48.106 87.4297 47.7539 87.1744 47.4902 86.8388C47.2266 86.5032 47.0617 86.1007 47.0142 85.6766C46.9668 85.2525 47.0385 84.8235 47.2215 84.4379C47.4044 84.0524 47.6913 83.7255 48.0499 83.494Z"
                                            fill="#FFB6B6" />
                                        <path
                                            d="M75.1585 66.358V66.3615C75.0646 68.5667 74.9359 70.6641 74.8281 72.2779C71.6931 73.5955 68.3263 74.2731 64.9257 74.2709C63.0051 74.2731 61.0904 74.0584 59.2179 73.631C58.352 73.4341 57.4974 73.1902 56.658 72.9005C56.7748 72.8251 56.9011 72.7655 57.0336 72.7232C58.2858 72.2988 57.0475 71.9127 57.058 71.5093C57.0962 70.0345 57.5032 68.2641 58.0284 66.5667L55.691 72.5493L54.4736 75.6588C54.4736 75.6588 54.5154 78.3439 53.7432 77.5231C52.9676 76.7022 53.0232 79.3596 53.0232 79.3596C52.7822 79.5313 52.5747 79.7459 52.4111 79.9926C52.3422 80.1036 52.3163 80.236 52.338 80.3648V80.3683C52.373 80.4694 52.4418 80.5554 52.5328 80.6117C53.058 80.9665 52.3032 81.9056 51.9693 82.2778C51.8789 82.3786 51.8198 82.4378 51.8198 82.4378L48.6094 82.2082V82.1456C48.6233 81.7665 48.7103 79.77 49.2076 79.2935C49.7537 78.7683 49.4859 77.937 49.4859 77.937C49.4859 77.937 50.9119 76.6744 49.9554 75.6483C49.5728 75.2344 49.7433 72.7823 50.2128 69.6102C51.2389 62.612 53.698 52.1079 54.7623 52.2574C54.9816 51.192 55.491 50.2078 56.2343 49.4136C56.9776 48.6194 57.9258 48.046 58.9744 47.7566L62.4422 46.8036L63.0613 44.3584H67.9447L68.7934 45.9653L72.3516 47.5723L72.3968 47.5931L72.5081 47.6418L72.5499 47.774C72.5499 47.774 72.5464 47.7775 72.5499 47.7775L74.529 53.993C75.4194 55.0156 75.3846 60.9912 75.1585 66.358Z"
                                            fill="#045B62" />
                                        <path
                                            d="M83.4747 78.8831L80.168 72.8806L82.3534 71.9854L86.6037 76.9838C87.0004 77.1413 87.3452 77.4063 87.5995 77.749C87.8538 78.0918 88.0074 78.4987 88.0431 78.924C88.0788 79.3492 87.9952 79.776 87.8016 80.1564C87.6081 80.5368 87.3123 80.8556 86.9474 81.077C86.5826 81.2985 86.1633 81.4138 85.7365 81.41C85.3097 81.4062 84.8925 81.2834 84.5317 81.0554C84.1709 80.8275 83.8808 80.5034 83.6941 80.1196C83.5074 79.7359 83.4314 79.3076 83.4747 78.8831Z"
                                            fill="#FFB6B6" />
                                        <path
                                            d="M72.3516 47.5244C72.9398 48.5813 78.3191 51.2995 77.3869 54.0283C77.3869 54.0283 82.4406 69.8393 83.0977 69.7361C83.7549 69.6329 84.3963 71.266 84.3963 71.266C84.3963 71.266 84.2569 72.3319 84.6668 71.889C85.0767 71.4461 84.9786 72.6072 84.9786 72.6072C84.9786 72.6072 84.7822 73.632 85.3026 73.3534C85.8231 73.0747 85.1388 75.036 85.1388 75.036L82.0111 76.5087L81.4168 75.6241C81.4168 75.6241 80.1468 75.3822 80.7444 75.1906C81.342 74.999 80.1824 74.3542 80.1824 74.3542C80.1824 74.3542 78.9693 73.5297 79.1384 72.1643C79.3074 70.7989 75.9903 68.1148 75.9903 68.1148C73.71 63.6126 72.4626 58.9902 72.4669 54.2221L72.3516 47.5244Z"
                                            fill="#045B62" />
                                        <path
                                            d="M65.138 42.9293C67.8095 42.9293 69.9752 40.7636 69.9752 38.0921C69.9752 35.4206 67.8095 33.2549 65.138 33.2549C62.4665 33.2549 60.3008 35.4206 60.3008 38.0921C60.3008 40.7636 62.4665 42.9293 65.138 42.9293Z"
                                            fill="#FFB6B6" />
                                        <path
                                            d="M60.1276 38.6193C60.2808 39.6704 61.1767 41.1369 60.9669 41.1369C60.7571 41.1369 59.2654 36.8038 60.7571 36.5212C61.8391 36.3163 62.0809 36.4961 63.0922 36.0576L62.9495 36.1918C63.6188 36.6786 64.5503 36.3786 65.314 36.0618C66.0798 35.7471 67.0092 35.447 67.6806 35.9317C68.1023 36.2359 68.2806 36.7646 68.5429 37.2136C68.8052 37.6647 69.2898 38.0906 69.7891 37.9521C69.9837 37.8769 70.1495 37.742 70.2626 37.5667C70.3757 37.3914 70.4303 37.1848 70.4185 36.9765C70.4164 36.5611 69.8755 36.1659 70.0577 35.7932C70.5976 34.6887 70.1121 33.9359 68.9352 33.4161C68.5072 33.3511 68.0792 33.2847 67.6512 33.2168C67.8755 32.9062 68.1474 32.6329 68.4569 32.407C68.3261 32.0717 68.1 31.7822 67.8065 31.574C67.4438 31.4055 67.0397 31.3471 66.6442 31.4062C65.7588 31.4524 64.8741 31.4985 63.9901 31.5447C63.3318 31.5329 62.6784 31.6602 62.0725 31.9181C61.3424 32.2937 60.8641 33.0259 60.5158 33.7707C59.7353 35.4449 59.8591 36.7919 60.1276 38.6193Z"
                                            fill="#2F2E41" />
                                        <path
                                            d="M181.129 35.4464H108.384C108.304 35.4464 108.227 35.4145 108.17 35.3579C108.114 35.3013 108.082 35.2244 108.082 35.1443C108.082 35.0642 108.114 34.9874 108.17 34.9308C108.227 34.8741 108.304 34.8423 108.384 34.8423H181.129C181.209 34.8423 181.286 34.8741 181.343 34.9308C181.4 34.9874 181.431 35.0642 181.431 35.1443C181.431 35.2244 181.4 35.3013 181.343 35.3579C181.286 35.4145 181.209 35.4464 181.129 35.4464Z"
                                            fill="#E6E6E6" />
                                        <path
                                            d="M181.129 54.1724H108.384C108.304 54.1724 108.227 54.1406 108.17 54.084C108.114 54.0273 108.082 53.9505 108.082 53.8704C108.082 53.7903 108.114 53.7135 108.17 53.6568C108.227 53.6002 108.304 53.5684 108.384 53.5684H181.129C181.209 53.5684 181.286 53.6002 181.343 53.6568C181.4 53.7135 181.431 53.7903 181.431 53.8704C181.431 53.9505 181.4 54.0273 181.343 54.084C181.286 54.1406 181.209 54.1724 181.129 54.1724Z"
                                            fill="#E6E6E6" />
                                        <path
                                            d="M181.129 72.8985H108.384C108.304 72.8985 108.227 72.8667 108.17 72.81C108.114 72.7534 108.082 72.6766 108.082 72.5965C108.082 72.5164 108.114 72.4395 108.17 72.3829C108.227 72.3263 108.304 72.2944 108.384 72.2944H181.129C181.209 72.2944 181.286 72.3263 181.343 72.3829C181.4 72.4395 181.431 72.5164 181.431 72.5965C181.431 72.6766 181.4 72.7534 181.343 72.81C181.286 72.8667 181.209 72.8985 181.129 72.8985Z"
                                            fill="#E6E6E6" />
                                        <path
                                            d="M191.957 71.7013C189.294 71.7013 186.719 70.7503 184.695 69.0194C184.019 68.4415 183.3 67.4367 182.556 66.0333C182.082 65.1292 181.816 64.1303 181.779 63.11C181.741 62.0897 181.933 61.0739 182.34 60.1375C181.948 60.5365 181.514 60.8924 181.046 61.199L180.809 61.3564L180.796 61.0727C180.787 60.8882 180.782 60.7043 180.782 60.5262C180.782 59.4762 181.576 58.4108 181.21 57.4404C179.666 53.3501 174.77 49.2852 181.866 42.9549C182.522 42.3694 181.646 41.1985 181.646 40.3126C181.646 31.6297 193.917 16.6081 197.396 24.5657C201.685 34.3795 209.075 33.3298 212.349 35.3568L212.396 35.5002L212.256 35.5568C211.54 35.8579 210.785 36.0587 210.014 36.1533C210.836 36.321 211.675 36.3913 212.514 36.3628L212.644 36.3582L212.676 36.4847C212.988 37.7367 213.146 39.0222 213.145 40.3126L213.145 40.452C213.142 41.4321 213.346 42.4018 213.743 43.2979C214.14 44.194 214.721 44.9963 215.449 45.6526C216.599 46.7009 217.517 47.9773 218.147 49.4003C218.776 50.8233 219.101 52.3618 219.103 53.9177C219.103 55.7584 217.852 58.1747 216.802 59.8775C216.536 60.3113 216.176 60.6792 215.747 60.9537C215.319 61.2281 214.834 61.402 214.328 61.4622C213.85 61.5225 213.364 61.477 212.905 61.3287C212.446 61.1804 212.025 60.9331 211.672 60.6041C212.169 61.603 212.816 62.5195 213.592 63.3216L213.735 63.4692L213.557 63.5728C211.848 64.5691 209.906 65.0937 207.928 65.093L207.812 65.0926C206.362 65.0777 204.923 65.3523 203.58 65.9004C202.238 66.4484 201.018 67.259 199.992 68.2845C198.948 69.3603 197.699 70.2167 196.319 70.8034C194.94 71.3901 193.457 71.6954 191.957 71.7013Z"
                                            fill="#E6E6E6" />
                                        <path
                                            d="M188.114 89.3985C188.066 89.3985 188.019 89.381 187.982 89.3493C187.946 89.3176 187.922 89.2738 187.915 89.2259C187.39 84.5394 187.358 79.8107 187.821 75.1177C188.515 67.7143 190.743 57.0508 197.416 48.293C197.432 48.272 197.452 48.2544 197.475 48.2411C197.498 48.2279 197.523 48.2192 197.549 48.2157C197.575 48.2121 197.602 48.2138 197.627 48.2205C197.653 48.2273 197.677 48.239 197.698 48.255C197.719 48.271 197.736 48.291 197.75 48.3138C197.763 48.3366 197.771 48.3618 197.775 48.3879C197.779 48.4141 197.777 48.4407 197.77 48.4662C197.763 48.4917 197.752 48.5157 197.736 48.5367C191.12 57.2188 188.91 67.8041 188.222 75.1552C187.761 79.8168 187.792 84.514 188.313 89.1692C188.317 89.1978 188.315 89.2268 188.307 89.2544C188.299 89.282 188.285 89.3076 188.266 89.3293C188.247 89.3511 188.224 89.3685 188.197 89.3804C188.171 89.3924 188.143 89.3985 188.114 89.3985Z"
                                            fill="#3F3D56" />
                                        <path
                                            d="M193.561 60.6463C193.518 60.6464 193.477 60.633 193.442 60.608C193.408 60.5831 193.382 60.5479 193.369 60.5076C193.356 60.4672 193.356 60.4237 193.369 60.3833C193.382 60.3429 193.408 60.3077 193.442 60.2828C195.344 58.9957 197.398 57.9501 199.557 57.1699C202.931 55.9347 208.061 54.815 213.343 56.4959C213.368 56.5039 213.391 56.5168 213.412 56.5338C213.432 56.5508 213.448 56.5716 213.461 56.5951C213.473 56.6185 213.48 56.6441 213.482 56.6704C213.484 56.6967 213.482 56.7232 213.474 56.7483C213.466 56.7735 213.453 56.7968 213.436 56.817C213.419 56.8371 213.398 56.8538 213.374 56.8659C213.351 56.878 213.325 56.8854 213.299 56.8876C213.273 56.8899 213.246 56.8869 213.221 56.8789C208.048 55.2325 203.01 56.3337 199.695 57.5474C197.571 58.3142 195.55 59.3422 193.678 60.6079C193.644 60.6329 193.603 60.6463 193.561 60.6463Z"
                                            fill="#3F3D56" />
                                        <path
                                            d="M184.36 37.7371C184.357 37.6947 184.367 37.6525 184.39 37.6165C184.412 37.5804 184.445 37.5523 184.485 37.5363C184.524 37.5203 184.567 37.5172 184.608 37.5273C184.65 37.5375 184.687 37.5604 184.714 37.5929C186.135 39.3967 187.326 41.3702 188.259 43.4679C189.734 46.744 191.22 51.7804 189.924 57.1693C189.918 57.195 189.907 57.2193 189.891 57.2407C189.876 57.2621 189.856 57.2803 189.834 57.2941C189.811 57.3079 189.786 57.3172 189.76 57.3213C189.734 57.3255 189.707 57.3244 189.682 57.3183C189.656 57.3121 189.632 57.3009 189.61 57.2853C189.589 57.2698 189.571 57.2501 189.557 57.2276C189.543 57.205 189.534 57.1799 189.53 57.1538C189.526 57.1277 189.527 57.101 189.533 57.0753C190.803 51.7968 189.342 46.8518 187.893 43.6329C186.975 41.5689 185.804 39.627 184.407 37.852C184.379 37.8196 184.363 37.7794 184.36 37.7371Z"
                                            fill="#3F3D56" />
                                        <path
                                            d="M20.0095 67.6805C18.9839 66.6549 17.764 65.8444 16.4212 65.2963C15.0784 64.7483 13.6397 64.4737 12.1894 64.4886L12.0736 64.4889C10.0957 64.4897 8.15304 63.9651 6.4444 62.9688L6.26661 62.8652L6.40981 62.7176C7.18509 61.9155 7.83245 60.999 8.32921 60.0001C7.9764 60.3291 7.5556 60.5764 7.0966 60.7247C6.6376 60.873 6.15161 60.9185 5.67304 60.8582C5.16779 60.798 4.68274 60.6241 4.25427 60.3497C3.8258 60.0752 3.46503 59.7073 3.19903 59.2735C2.1495 57.5707 0.898438 55.1544 0.898438 53.3137C0.900071 51.7578 1.22584 50.2193 1.85499 48.7963C2.48414 47.3733 3.40287 46.0969 4.55261 45.0487C5.28049 44.3923 5.86189 43.59 6.25888 42.6939C6.65588 41.7978 6.85956 40.8281 6.85666 39.848L6.85608 39.7086C6.85588 38.4182 7.01356 37.1327 7.32561 35.8807L7.35729 35.7542L7.48737 35.7588C8.32623 35.7873 9.16553 35.717 9.98794 35.5493C9.21652 35.4547 8.46186 35.2539 7.74536 34.9528L7.60542 34.8962L7.65291 34.7528C10.9267 32.7258 18.3167 33.7755 22.606 23.9617C26.0841 16.0041 38.3559 31.0257 38.3559 39.7086C38.3559 40.5945 37.4791 41.7653 38.1355 42.3509C45.231 48.6812 40.3352 52.7461 38.7916 56.8364C38.4254 57.8068 39.2195 58.8722 39.2195 59.9221C39.2195 60.1003 39.2149 60.2842 39.206 60.4687L39.1923 60.7524L38.9557 60.595C38.4877 60.2884 38.0539 59.9325 37.6616 59.5335C38.0685 60.4699 38.2603 61.4857 38.2228 62.506C38.1853 63.5263 37.9196 64.5252 37.445 65.4292C36.7014 66.8327 35.982 67.8375 35.3069 68.4154C33.144 70.2663 30.3557 71.2211 27.5123 71.0845C24.6688 70.9479 21.985 69.7302 20.0095 67.6805Z"
                                            fill="#E6E6E6" />
                                        <path
                                            d="M31.8894 88.795C31.9378 88.795 31.9845 88.7775 32.021 88.7458C32.0575 88.7141 32.0813 88.6703 32.0881 88.6224C32.6137 83.9359 32.6451 79.2072 32.1819 74.5142C31.4882 67.1108 29.2606 56.4473 22.5874 47.6895C22.5714 47.6685 22.5514 47.6509 22.5286 47.6376C22.5058 47.6243 22.4806 47.6157 22.4544 47.6122C22.4283 47.6086 22.4017 47.6103 22.3762 47.617C22.3507 47.6238 22.3267 47.6355 22.3057 47.6515C22.2847 47.6675 22.2671 47.6874 22.2538 47.7103C22.2405 47.7331 22.2319 47.7583 22.2284 47.7844C22.2248 47.8106 22.2265 47.8372 22.2332 47.8627C22.24 47.8882 22.2517 47.9122 22.2677 47.9332C28.8832 56.6153 31.0929 67.2005 31.7817 74.5516C32.2424 79.2133 32.2117 83.9105 31.6902 88.5657C31.6861 88.5942 31.6883 88.6233 31.6965 88.6509C31.7046 88.6785 31.7186 88.7041 31.7375 88.7258C31.7564 88.7475 31.7797 88.765 31.8059 88.7769C31.8321 88.7889 31.8606 88.795 31.8894 88.795Z"
                                            fill="#3F3D56" />
                                        <path
                                            d="M26.442 60.0428C26.4845 60.0428 26.5259 60.0294 26.5602 60.0045C26.5946 59.9796 26.6202 59.9444 26.6333 59.904C26.6464 59.8637 26.6465 59.8202 26.6333 59.7798C26.6202 59.7394 26.5947 59.7042 26.5603 59.6793C24.6589 58.3922 22.6048 57.3465 20.4453 56.5664C17.0715 55.3312 11.9411 54.2114 6.65954 55.8924C6.6344 55.9004 6.61107 55.9133 6.5909 55.9303C6.57073 55.9473 6.55412 55.9681 6.54199 55.9916C6.52987 56.015 6.52248 56.0406 6.52025 56.0669C6.51802 56.0932 6.52099 56.1197 6.529 56.1448C6.537 56.17 6.54987 56.1933 6.56689 56.2135C6.58391 56.2336 6.60474 56.2502 6.62818 56.2624C6.65162 56.2745 6.67721 56.2819 6.70351 56.2841C6.7298 56.2863 6.75628 56.2834 6.78142 56.2754C11.9548 54.629 16.9922 55.7302 20.3071 56.9438C22.4319 57.7107 24.453 58.7387 26.324 60.0044C26.3583 60.0294 26.3996 60.0428 26.442 60.0428Z"
                                            fill="#3F3D56" />
                                        <path
                                            d="M35.6427 37.1331C35.6458 37.0908 35.6354 37.0485 35.613 37.0125C35.5906 36.9764 35.5574 36.9483 35.5181 36.9323C35.4788 36.9163 35.4354 36.9132 35.3942 36.9233C35.3529 36.9335 35.316 36.9565 35.2886 36.9889C33.868 38.7927 32.6771 40.7662 31.7434 42.8639C30.2685 46.14 28.7822 51.1764 30.0784 56.5653C30.0845 56.591 30.0957 56.6153 30.1112 56.6367C30.1267 56.6581 30.1462 56.6763 30.1688 56.6901C30.1913 56.704 30.2163 56.7132 30.2425 56.7174C30.2686 56.7215 30.2952 56.7204 30.3209 56.7143C30.3466 56.7081 30.3709 56.6969 30.3922 56.6813C30.4136 56.6658 30.4317 56.6461 30.4455 56.6236C30.4592 56.601 30.4684 56.5759 30.4725 56.5498C30.4766 56.5237 30.4754 56.497 30.4692 56.4713C29.1996 51.1928 30.6608 46.2478 32.11 43.0289C33.0278 40.9649 34.1988 39.023 35.5959 37.248C35.6233 37.2156 35.6397 37.1754 35.6427 37.1331Z"
                                            fill="#3F3D56" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_3896_26042">
                                            <rect width="218.206" height="110" fill="white"
                                                transform="translate(0.898438)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <div class="pending_appointments_empty_state_message_container">
                                    <div class="pet_info_empty_state">
                                        <h1>NO REJECTED APPOINTMENTS YET</h1>
                                        <div class="pet_info_empty_state_p_container">
                                            <p>You haven’t rejected any appointments yet.</p>
                                            <p>However, you can add one by yourself by clicking the pending tab above,
                                                or you can create an appointment by clicking the button below.</p>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn new_appointment_btn" id="rejected_appointment_tab_button"
                                    type="button" data-bs-dismiss="modal"><span
                                        class="new_appointment_btn_base"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <g clip-path="url(#clip0_5910_1403)" filter="url(#filter0_d_5910_1403)">
                                                <path d="M12 5V19M5 12H19" stroke="white" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <filter id="filter0_d_5910_1403" x="-2" y="0" width="28"
                                                    height="28" filterUnits="userSpaceOnUse"
                                                    color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                        result="hardAlpha" />
                                                    <feOffset dy="2" />
                                                    <feGaussianBlur stdDeviation="1" />
                                                    <feComposite in2="hardAlpha" operator="out" />
                                                    <feColorMatrix type="matrix"
                                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" />
                                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                                        result="effect1_dropShadow_5910_1403" />
                                                    <feBlend mode="normal" in="SourceGraphic"
                                                        in2="effect1_dropShadow_5910_1403" result="shape" />
                                                </filter>
                                                <clipPath id="clip0_5910_1403">
                                                    <rect width="24" height="24" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg> New Appointment</span></button>
                            </div>
                            <div class="table-responsive mt-3" id="rejected_table"
                                style="overflow: visible; display:none;">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>
                                                <input type="radio" id="selectAll_rejected" class="checkbox">
                                            </th>
                                            <th>No.</th>
                                            <th>Client</th>
                                            <th>Patient Info</th>
                                            <th>Appointment</th>
                                            <th>Surgery type</th>
                                            <th>Reasons</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="rejectedTableBody">
                                        @foreach ($appointment_rejected as $index => $appointment)
                                            <tr>
                                                <td ><input type="radio" class="checkbox"></td></td>
                                                <td >{{ $index + 1 }}</td>
                                                <td >{{ $appointment->clients->first_name }}
                                                    {{ $appointment->clients->middle_name }}
                                                    {{ $appointment->clients->last_name }}
                                                    {{ $appointment->clients->suffix }}</td>
                                                <td >{{ $appointment['petType'] }}
                                                    ({{ $appointment['breed'] }})</td>
                                                <td >{{ $appointment['appointmentDate'] }} |
                                                    {{ $appointment['appointmentTime'] }}</td>
                                                <td >{{ $appointment['appointmentType'] }}</td>
                                                <td >{{ $appointment->notes }}</td>
                                                <td>
                                                    <div class="dropdown"><button class="dropbtn" style="background-color: transparent; border:none;"
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
                                                        <div class="dropdown-menu"><a
                                                                class="dropdown-item accept-action"><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="24" height="24"
                                                                    viewBox="0 0 24 24" fill="none">
                                                                    <g clip-path="url(#clip0_6291_1355)">
                                                                        <path d="M5 12L10 17L20 7" stroke="#1C1C1C"
                                                                            stroke-opacity="0.7" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </g>
                                                                    <defs>
                                                                        <clipPath id="clip0_6291_1355">
                                                                            <rect width="24" height="24"
                                                                                fill="white" />
                                                                        </clipPath>
                                                                    </defs>
                                                                </svg> Accept</a><a
                                                                class="dropdown-item reject-action"><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="24" height="24"
                                                                    viewBox="0 0 24 24" fill="none">
                                                                    <g clip-path="url(#clip0_6291_1893)">
                                                                        <path d="M18 6L6 18M6 6L18 18"
                                                                            stroke="#1C1C1C" stroke-opacity="0.7"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </g>
                                                                    <defs>
                                                                        <clipPath id="clip0_6291_1893">
                                                                            <rect width="24" height="24"
                                                                                fill="white" />
                                                                        </clipPath>
                                                                    </defs>
                                                                </svg> Reject</a><button
                                                                class="dropdown-item resched-action"
                                                                data-id="{{ $appointment->id }}"><svg
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
                                                        </div>
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
                                        @for ($i = 1; $i <= $appointment_rejected->lastPage(); $i++)
                                            <option value="{{ $i }}"
                                                {{ request()->input('page') == $i ? 'selected' : '' }}>
                                                {{ $i }}
                                            </option>
                                        @endfor
                                    </select>
  
                                </div>
                                <div class="pagination-pages">
                                    {{ $appointment_rejected->appends([
                                      'qReject' => request()->input('qReject'), 
                                      'sortBy' => request()->input('sortBy'), 
                                      'perPage' => request()->input('perPage'),
                                      'sortItems' => request()->input('sortItems'),
                                      'sortOrder' => request()->input('sortOrder'),
                                      'dogCheck' => request()->input('dogCheck'),
                                      'catCheck' => request()->input('catCheck'),
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
            </div>
    </main>

    <div class="modal fade" role="dialog" tabindex="-1" id="add_appointment_modal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content add_appointment_modal">
                <div class="modal-header">
                    <h1 class="modal-title">Add Appointment</h1><button class="btn-close"
                        id="close_client_modal-1" aria-label="Close" data-bs-dismiss="modal"
                        type="button"></button>
                </div>
                <div class="modal-body" style="width:100%;">
                    <form id="add_appointment_form-1" class="add_client">
                        <div class="mb-3 input_container">
                            <div class="form-floating" style="width:100%;"><select class="form-select"
                                    id="owner_name" data-id="owner_name">
                                    <option value="" selected="">Select an owner</option>
                                </select><label class="form-label" for="owner_name">Owner
                                    Name<span>&nbsp;*</span></label>
                                <div id="error-owner_name-2" class="error-message"><span>• Please enter client first
                                        name.</span></div>
                                <div id="guide-owner_name-2" class="guide-message"><span>• Please enter client first
                                        name.</span></div>
                            </div>
                            <div class="form-floating" style="width:100%;"><input class="form-control"
                                    type="text" id="email" data-id="email" placeholder="Email"><label
                                    class="form-label" for="email">Email<span>&nbsp;*</span></label></div>
                            <div class="form-floating" style="width:100%;"><select class="form-select"
                                    id="pet_name" data-id="pet_name">
                                    <option value="" selected="">Select a pet</option>
                                </select><label class="form-label" for="pet_name">Pet
                                    Name<span>&nbsp;*</span></label>
                                <div id="error-pet_name-1" class="error-message"><span>• Please enter client first
                                        name.</span></div>
                                <div id="guide-pet_name-1" class="guide-message"><span>• Please enter client first
                                        name.</span></div>
                            </div>
                            <div class="pet_type_and_breed_container">
                                <div class="species_container">
                                    <div id="dog_cat_btn-1" class="species"
                                        style="display: flex;align-items: flex-start;gap: var(--spacing-spacing-xs, 12px);align-self: stretch;">
                                        <button id="dog" data-id="dog" class="btn custom-radio"
                                            type="button" onclick="checkRadio('dog');  selectBreed('dog');">
                                            <label class="form-label custom-control-label">Dog</label>
                                            <input name="species" id="dog-radio" class="checkbox"
                                                type="radio" />
                                        </button><button id="cat" data-id="cat" class="btn custom-radio"
                                            type="button" onclick="checkRadio('cat');  selectBreed('cat');">
                                            <label class="form-label custom-control-label">Cat</label>
                                            <input name="species" id="cat-radio" class="checkbox"
                                                type="radio" />
                                        </button></div>
                                </div>
                                <div class="align-self-stretch form-floating breed_container"><select
                                        class="form-select" id="breed" data-id="breed" disabled=""
                                        required="" style="height:100%;"></select><label class="form-label"
                                        for="breed">Select a breed<span>&nbsp;*</span></label>
                                    <div id="error-breed-1" class="error-message"><span>• Please select a
                                            breed</span></div>
                                </div>
                            </div>
                            <div class="form-floating" style="width:100%;"><select class="form-select"
                                    id="surgery_type" data-id="surgery_type">
                                    <option value="" selected="">Surgery Type</option>
                                    <option value="Neuter">Neuter</option>
                                    <option value="Tooth Extraction">Tooth Extraction</option>
                                </select><label class="form-label" for="surgery_type">Surgery
                                    Type<span>&nbsp;*</span></label>
                                <div id="error-surgery_type-1" class="error-message"><span>• Please select a
                                        surgery.</span></div>
                            </div>
                            <div class="form-floating" style="width:100%;">
                                <textarea class="form-control" id="additional_notes" data-id="additional_notes" placeholder="Additional Notes"></textarea><label class="form-label"
                                    for="additional_notes-1">Additional Notes</label>
                                <div id="guide-additional_notes-1" class="guide-message"><span>• Please enter client
                                        last name.</span></div>
                            </div>
                            <div class="date_time_container">
                                <div class="form-floating" style="width: 100%;"><input class="form-control"
                                        id="appointment_date" type="date" data-id="appointment_date"><label
                                        class="form-label" for="appointment_date">Date<span>&nbsp;*</span></label>
                                </div>
                                <div class="form-floating" style="width: 100%;"><input class="form-control"
                                        id="appointment_time" type="time" data-id="appointment_time"><label
                                        class="form-label" for="appointment_time">Time<span>&nbsp;*</span></label>
                                    <div id="error-appointment_time-1" class="error-message"><span>• Please select a
                                            breed</span></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer add_product_button"><button class="btn clear_form" id="clear_form"
                        aria-label="Clear Form" role="button" type="button"><span
                            class="clear_form_base">Clear Form</span></button><button class="btn submit_product"
                        id="submit_pending_appointment" type="submit" data-bs-dismiss="modal"><span
                            class="submit_product_base">Submit</span></button></div>
            </div>
        </div>
    </div>

    <div class="modal fade show" role="dialog" tabindex="-1" id="add_appointment_success">
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
                        <p>Client have been successfully added.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade show" role="dialog" tabindex="-1" id="success_reschedule_modal">
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
                        <p>The appointment has been rescheduled.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade show" role="dialog" tabindex="-1" id="accept_modal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content discard_modal">
                <div class="modal-header success_header">
                    <div class="success_icon_container"><span class="success_icon"><svg
                                xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                viewBox="0 0 32 32" fill="none">
                                <g clip-path="url(#clip0_6319_20047)">
                                    <path
                                        d="M12 16L14.6667 18.6667L20 13.3333M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 14.4241 27.6896 12.8637 27.0866 11.4078C26.4835 9.95189 25.5996 8.62902 24.4853 7.51472C23.371 6.40042 22.0481 5.5165 20.5922 4.91345C19.1363 4.31039 17.5759 4 16 4C14.4241 4 12.8637 4.31039 11.4078 4.91345C9.95189 5.5165 8.62902 6.40042 7.51472 7.51472C6.40042 8.62902 5.5165 9.95189 4.91345 11.4078C4.31039 12.8637 4 14.4241 4 16Z"
                                        stroke="#5BB85A" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_6319_20047">
                                        <rect width="32" height="32" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg></span></div>
                </div>
                <div class="modal-body success_message">
                    <div>
                        <h1>Approve appointment?</h1>
                        <p>You are approving a pending appointment. Do you wish to continue?</p>
                    </div>
                </div>
                <div class="modal-footer discard_footer">
                    <button class="btn return_btn" id="cancel_appointment_btn" data-bs-dismiss="modal"
                        type="button"><span class="return_btn_base">Cancel</span></button>
                    <button class="btn approve_appointment_btn" id="confirm_approve_appointment_btn"
                        type="button"><span class="discard_btn_base">Approve</span></button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade show" role="dialog" tabindex="-1" id="reject_modal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content discard_modal">
                <div class="modal-header discard_header">
                    <div class="discard_icon_container"><span class="discard_icon"><svg
                                xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                viewBox="0 0 32 32" fill="none">
                                <g clip-path="url(#clip0_5693_21111)">
                                    <path
                                        d="M13.3333 13.3333L18.6667 18.6667M18.6667 13.3333L13.3333 18.6667M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 14.4241 27.6896 12.8637 27.0866 11.4078C26.4835 9.95189 25.5996 8.62902 24.4853 7.51472C23.371 6.40042 22.0481 5.5165 20.5922 4.91345C19.1363 4.31039 17.5759 4 16 4C14.4241 4 12.8637 4.31039 11.4078 4.91345C9.95189 5.5165 8.62902 6.40042 7.51472 7.51472C6.40042 8.62902 5.5165 9.95189 4.91345 11.4078C4.31039 12.8637 4 14.4241 4 16Z"
                                        stroke="#DA534F" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_5693_21111">
                                        <rect width="32" height="32" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg></span></div>
                </div>
                <form action="{{ route('reject', ['id' => $appointment->id]) }}" method="POST">
                    @csrf
                    <div class="modal-body discard_message">
                        <div>
                            <h1>Reject appointment</h1>
                            <p>You are about to reject a pending appointment. Do you wish to continue?</p>
                        </div>
                        <div class="form-floating" style="width:100%;">
                            <select name="reason" id="rejection_reason" class="form-select">
                                <option value="" selected="">Rejection reason</option>
                                <option value="Reason 1">Reason 1</option>
                                <option value="Reason 2">Reason 2</option>
                                <option value="other">Other reason</option>
                            </select>
                            <label class="form-label" for="rejection_reason">Rejection
                                reason<span>&nbsp;*</span></label>
                        </div>
                        <div id="specific_reason" class="form-floating specific_reason" style="width:100%;">
                            <textarea id="specify_reason" name="otherReason" class="form-control"></textarea>
                            <label class="form-label" for="specific_reason">Other
                                reasons<span>&nbsp;*</span></label>
                        </div>
                    </div>
                    <div class="modal-footer discard_footer">
                        <button class="btn return_btn" data-bs-dismiss="modal" id="return_btn"
                            type="button"><span class="return_btn_base">Cancel</span></button>
                        <button class="btn reject_btn" id="reject_btn" type="button"><span
                                class="discard_btn_base">Reject</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade show" role="dialog" tabindex="-1" id="resched_modal" style="display:none;">
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
                    <div>
                        <h1><strong>Reschedule appointment</strong></h1>
                        <p>You are about to reschedule an appointment. Please make sure that all information are
                            correct.</p>
                    </div>
                    <div class="date_time_container">
                        <div class="form-floating" style="width:100%;">
                            <input class="form-control" data-id="appointment_date-3" id="appointment_date-3"
                                type="date">
                            <label class="form-label form-label"
                                for="appointment_date-3">Date<span>&nbsp;*</span></label>
                        </div>
                        <div class="form-floating" style="width:100%;">
                            <input class="form-control" data-id="appointment_time-3" id="appointment_time-3"
                                type="time">
                            <label class="form-label form-label"
                                for="appointment_time-3">Time<span>&nbsp;*</span></label>
                            <div class="error-message" id="error-appointment_time-3"><span>• Please select a
                                    breed</span></div>
                        </div>
                    </div>
                    <div class="form-floating" style="width:100%;">
                        <select id="rejection_reason-1" class="form-select" data-id="rejection_reason-1">
                            <option value="" selected="">Reschedule reason</option>
                            <option value="Reason 1">Reason 1</option>
                            <option value="Reason 2">Reason 2</option>
                            <option value="other">Other reason</option>
                        </select>
                        <label class="form-label form-label" for="rejection_reason">Reschedule
                            reason<span>&nbsp;*</span></label>
                    </div>
                    <div class="form-floating specific_reason" id="specific_reason-1" style="width:100%;">
                        <textarea class="form-control" id="specify_reason-1"></textarea>
                        <label class="form-label form-label" for="specific_reason">Other
                            reasons<span>&nbsp;*</span></label>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-end align-items-center align-self-stretch">
                    <button class="btn cancel_btn" data-bs-dismiss="modal" id="cancel_reschedule_btn"
                        type="button"><span class="return_btn_base">Cancel</span></button>
                    <button id="reschedule_btn" class="btn reschedule_btn" type="button"
                        data-bs-dismiss="modal"><span class="archive_confirm_button_base">Reschedule</span></button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade show" role="dialog" tabindex="-1" id="resched_modal-1">
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
                    <form action="{{ route('resched', ['id' => $appointment->id]) }}" method="POST">
                        @csrf
                        <div>
                            <h1><strong>Reschedule appointment</strong></h1>
                            <p>You are about to reschedule an appointment. Please make sure that all information are
                                correct.</p>
                        </div>
                        <div class="date_time_container">
                            <div class="form-floating" style="width:100%;">
                                <input class="form-control" name="appointmentDate" data-id="appointment_date-4"
                                    id="appointmentDate" type="date">
                                <label class="form-label form-label"
                                    for="appointment_date-4">Date<span>&nbsp;*</span></label>
                            </div>
                            <div class="form-floating" style="width:100%;">
                                <input class="form-control" name="appointmentTime" data-id="appointment_time-4"
                                    id="appointmentTime" type="time">
                                <label class="form-label form-label"
                                    for="appointment_time-4">Time<span>&nbsp;*</span></label>
                                <div class="error-message" id="error-appointment_time-4"><span>• Please select a
                                        breed</span></div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer d-flex justify-content-end align-items-center align-self-stretch">
                    <button class="btn cancel_btn" data-bs-dismiss="modal" id="cancel_reschedule_btn-1"
                        type="button"><span class="return_btn_base">Cancel</span></button>
                    <button id="reschedule_btn-1" class="btn reschedule_btn" type="button"
                        data-bs-dismiss="modal"><span class="archive_confirm_button_base">Reschedule</span></button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade show" role="dialog" tabindex="-1" id="archive_modal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content archive_modal">
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
                    <div>
                        <h1><strong>Archive appointment?</strong></h1>
                        <p>You are about to archive an appointment. Do you wish to continue?</p>
                    </div>
                </div>
                <div class="modal-footer discard_footer">
                    <button class="btn return_btn" data-bs-dismiss="modal" type="button"><span
                            class="return_btn_base">Cancel</span></button>
                    <button class="btn archive_confirm" id="archive_confirm_button" type="button"><span
                            class="archive_confirm_button_base">Archive</span></button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade show" role="dialog" tabindex="-1" id="mark_complete_modal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content archive_modal">
                <div class="modal-header archive_header">
                    <div class="complete_icon_container"><span class="success_icon"><svg
                                xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                viewBox="0 0 32 32" fill="none">
                                <g clip-path="url(#clip0_6356_15066)">
                                    <path
                                        d="M12 16L14.6667 18.6667L20 13.3333M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 14.4241 27.6896 12.8637 27.0866 11.4078C26.4835 9.95189 25.5996 8.62902 24.4853 7.51472C23.371 6.40042 22.0481 5.5165 20.5922 4.91345C19.1363 4.31039 17.5759 4 16 4C14.4241 4 12.8637 4.31039 11.4078 4.91345C9.95189 5.5165 8.62902 6.40042 7.51472 7.51472C6.40042 8.62902 5.5165 9.95189 4.91345 11.4078C4.31039 12.8637 4 14.4241 4 16Z"
                                        stroke="#5BB85A" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_6356_15066">
                                        <rect width="32" height="32" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg></span>
                    </div>
                </div>
                <div class="modal-body archive_message">
                    <div>
                        <h1><strong>Complete appointment?</strong></h1>
                        <p>You are about to mark this appointment as complete. Do you wish to continue?</p>
                    </div>
                </div>
                <div class="modal-footer discard_footer">
                    <button class="btn return_btn" data-bs-dismiss="modal" type="button"><span
                            class="return_btn_base">Cancel</span></button>
                    <button class="btn confirm_complete" id="confirm_complete_btn" type="button"><span
                            class="archive_confirm_button_base">Continue</span></button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @if ($approvedExist)
        <script>
            $('#approved_appointment_empty_state').hide();
            $('#approved_table').show();
        </script>
    @else
        <script>
            $('#approved_appointment_empty_state').show();
            $('#approved_table').hide();
        </script>
    @endif
    @if ($pendingExist)
        <script>
            $('#pending_appointment_empty_state').hide();
            $('#pending_table').show();
        </script>
    @else
        <script>
            $('#pending_appointment_empty_state').show();
            $('#pending_table').hide();
        </script>
    @endif
    @if ($rejectedExist)
        <script>
            $('#rejected_appointment_empty_state').hide();
            $('#rejected_table').show();
        </script>
    @else
        <script>
            $('#rejected_appointment_empty_state').show();
            $('#rejected_table').hide();
        </script>
    @endif
    <script>
        $(document).ready(function() {
            $('.archive-action').on('click', function() {
                const id = $(this).data('id');
                $('#archive_modal').modal('show');
                $('#archive_confirm_button').on('click', function() {
                    $.ajax({
                        type: 'POST',
                        url: `/admin/appointment/archive/${id}`,
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            alert('Appointment has been archived');
                            location.reload();
                        },
                        error: function(xhr) {
                            // Handle errors
                            console.error(xhr.responseText);
                        }
                    });
                });
            });
            $('.accept-action').click(function() {
                var appointmentId = $(this).data('id');
                var acceptModal = new bootstrap.Modal(document.getElementById('accept_modal'));
                acceptModal.show();
                $('#confirm_approve_appointment_btn').off('click').on('click', function() {
                    $.ajax({
                        type: 'POST',
                        url: '/admin/appointment/approve/' + appointmentId,
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            $('#row_' + appointmentId).remove();
                            alert('Appointment has been approved');
                            window.location.href = '/admin/appointment';
                        },
                        error: function(error) {
                            alert('An error occurred while processing the request.');
                        }
                    });
                    acceptModal.hide();
                });
            });
            $('.reject-action').click(function() {
                var appointmentId = $(this).data('id');
                var rejectModal = new bootstrap.Modal(document.getElementById('reject_modal'));
                rejectModal.show();
                $('#reject_btn').off('click').on('click', function() {
                    var reason = $('#rejection_reason').val();
                    console.log('Reason: ', reason);
                    if (reason === 'other') {
                        // If 'other' is selected, get the value from the textarea
                        var otherReason = $('#specify_reason').val();
                        if (!otherReason.trim()) {
                            alert('Please specify the other reason.');
                            return;
                        }
                    }
                    $.ajax({
                        type: 'POST',
                        url: '/admin/appointment/reject/' + appointmentId,
                        data: {
                            _token: '{{ csrf_token() }}',
                            reason: reason,
                            otherReason: otherReason,
                        },
                        success: function(response) {
                            $('#row_' + appointmentId).remove();
                            alert('Appointment has been rejected');
                            window.location.href = '/admin/appointment';
                        },
                        error: function(error) {
                            alert('An error occurred while processing the request.');
                        }
                    });
                    rejectModal.hide();
                });
            });
            $('.resched-action').click(function() {
                var appointmentId = $(this).data('id');
                var reschedModal1 = new bootstrap.Modal(document.getElementById('resched_modal-1'));
                reschedModal1.show();
                $('#reschedule_btn-1').off('click').on('click', function() {
                    var appointmentDate = $('#appointmentDate').val();
                    var appointmentTime = $('#appointmentTime').val();
                    $.ajax({
                        type: 'POST',
                        url: '/admin/appointment/resched/' + appointmentId,
                        data: {
                            _token: '{{ csrf_token() }}',
                            appointmentDate: appointmentDate,
                            appointmentTime: appointmentTime,
                        },
                        success: function(response) {
                            $('#row_' + appointmentId).remove();
                            alert('Appointment has been rescheduled');
                            window.location.href = '/admin/appointment';
                        },
                        error: function(error) {
                            alert('An error occurred while processing the request.');
                        }
                    });
                    reschedModal1.hide();
                });
            });
            $('.complete-action').on('click', function(event) {
                var appointmentId = $(this).data('id');
                var completeModal = new bootstrap.Modal(document.getElementById('mark_complete_modal'));
                completeModal.show();
                $('.confirm_complete').off('click').on('click', function() {
                    // Access the appointmentId from the outer scope
                    $.ajax({
                        url: '/admin/appointment/markascomplete/' + appointmentId,
                        type: 'POST',
                        data: {
                            _token: "{{ csrf_token() }}",
                            id: appointmentId
                        },
                        success: function(response) {
                            console.log('Appointment marked as completed:', response);
                            // You can update the UI or perform additional actions as needed
                        },
                        error: function(error) {
                            console.error('Error marking appointment as completed:',
                                error);
                        }
                    });

                    completeModal.hide();
                });
            });
        });
    </script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/sidebar.js') }}"></script>
    <script src="{{ asset('assets/js/admin_appointment.js') }}"></script>
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
      <script>

          $(document).ready(function() {
              // Get the URL parameters
              const urlParams = new URLSearchParams(window.location.search);
      
              // Check if 'pendingPage' parameter exists
              const hasPendingPage = urlParams.has('pendingPage');
              const hasRejectPage = urlParams.has('rejectPage');
              const hasRejectSearch = urlParams.has('qReject');
              const hasPendingSearch = urlParams.has('qPending');
      
              // Activate the corresponding tab based on the URL parameter
              if (hasPendingPage || hasPendingSearch) {
                  $('[href="#pending_tab"]').tab('show');
              }else if(hasRejectPage || hasRejectSearch){
                $('[href="#rejected_tab"]').tab('show');
              }
              else{
                  $('[href="#approved_tab"]').tab('show');
              }
          });
      </script>
      
</body>

</html>
