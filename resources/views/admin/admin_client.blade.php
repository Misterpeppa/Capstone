<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" />
    <title>Admin | Client</title>
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
        @php
            $activeTab = 'client'; // Set the active tab
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
                        <h1><strong>Clients</strong></h1>
                    </div>
                    <div class="btn-group split_btn" id="add_client_split_btn"><button class="btn add_Product_btn"
                            id="add_client_btn" type="button"><span class="add_Product_btn_base">Add
                                Client</span></button><button
                            class="btn dropdown-toggle dropdown-toggle-split add_product_dropdown"
                            data-bs-toggle="dropdown" aria-expanded="false" type="button"></button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('report.client') }}">Generate Report</a>
                        </div>
                    </div>
                </div>
                <div id="client_container" class="client_container">
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
                                <button type="submit" form="searchForm" class="btn filter_btn"><i
                                        class="fa-solid fa-magnifying-glass"></i><span class="filter_btn_base">Search</span></button>

                                <div class="dropdown">
                                    <button class="filter_btn dropdown-toggle" type="button"
                                        id="dropdownMenuButton1" data-bs-toggle="dropdown" data-bs-auto-close="false"
                                        aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g clip-path="url(#clip0_1917_11697)">
    <path d="M4 6H13M4 12H11M4 18H11M15 15L18 18M18 18L21 15M18 18V6" stroke="black" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_1917_11697">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg><span class="filter_btn_base">Sort By</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-item ">
                                            <input class="form-check-input me-1" type="radio" id = "radio1"
                                                name="sortBy"{{ request()->input('sortBy', '0') == '0' ? 'checked' : '' }}  value="0">
                                            <label class="form-check-label ms-1 fs-6" for="radio1">
                                                Client
                                        </li>
                                        <li class="dropdown-item">
                                            <input class="form-check-input me-1" type="radio" id = "radio2"
                                                name="sortBy" {{ request()->input('sortBy') == '1' ? 'checked' : '' }} value="1">
                                            <label class="form-check-label ms-1 fs-6" for="radio2">
                                                Email
                                        </li>
                                        <li class="dropdown-item">
                                            <input class="form-check-input me-1" type="radio" id = "radio3"
                                                name="sortBy" {{ request()->input('sortBy') == '2' ? 'checked' : '' }} value="2">
                                            <label class="form-check-label ms-1 fs-6" for="radio3">
                                                Phone
                                        </li>
                                        <li class="dropdown-item">
                                            <input class="form-check-input me-1" type="radio" id = "radio4"
                                                name="sortBy" {{ request()->input('sortBy') == '3' ? 'checked' : '' }} value="3">
                                            <label class="form-check-label ms-1 fs-6" for="radio4">
                                                Birthdate
                                        </li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li class="dropdown-item">
                                            <input class="form-check-input me-1" type="radio" id = "radio6"
                                                name="sortOrder" {{ request()->input('sortOrder', '0') == '0' ? 'checked' : '' }} value="0">
                                            <label class="form-check-label ms-1 fs-6" for="radio6">
                                                Ascending
                                        </li>
                                        <li class="dropdown-item">
                                            <input class="form-check-input me-1" type="radio" id = "radio7"
                                                name="sortOrder" {{ request()->input('sortOrder') == '1' ? 'checked' : '' }} value="1">
                                            <label class="form-check-label ms-1 fs-6" for="radio7">
                                                Descending
                                        </li>
                                        <li class="dropdown-item ">
                                          <div class="row" style="justify-content: space-around; gap: 8px;">
                                              <div class="col-md-5 colButton" style="display:flex; justify-content: center">
                                                  <button class="btn cancel_filter btn-sm me-3"><span class="cancel_filter_base">Cancel</span></button>
                                              </div>
                                              <div class="col-md-5 text-center colButton" style="display:flex; justify-content: center">
                                                  <button type="submit" form="searchForm" class="btn apply_filter btn-sm ms-3"><span class="apply_filter_base">Apply Sort</span></button>
                                              </div>
                                          </div>
                                      </li>
                                    </ul>
                                </div>
</form>
                    </div>
                    <div class="right_part_product_header">
                        <button class="btn archive_button d-none" id="archive_button"
                            type="button"><i class="fa-solid fa-boxes-stacked"></i>
                        </button>
                        </div>
                </div>
                <div id="empty_state_container" class="empty_state_container">
                    <div class="empty_state">
                        <div><svg xmlns="http://www.w3.org/2000/svg" width="176" height="110"
                                viewBox="0 0 176 110" fill="none">
                                <g clip-path="url(#clip0_3910_24046)">
                                    <path
                                        d="M135.118 83.0864C142.305 65.1185 140.131 45.0554 130.862 29.6466L33.8338 43.0813L126.818 23.7028C87.629 -25.1661 11.3536 7.24805 18.7062 68.9485L135.118 83.0864Z"
                                        fill="#E6E6E6" />
                                    <path d="M139.397 63.2246H15.7821V101.717H139.397V63.2246Z" fill="#004D53" />
                                    <path
                                        d="M50.2572 58.5303C51.3663 59.3916 51.7718 59.6696 52.008 59.6343C63.4515 62.9667 53.4196 66.872 47.8595 60.2429L50.2572 58.5303Z"
                                        fill="#FFB8B8" />
                                    <path d="M12.4962 93.7372V101.561L18.1292 101.248L16.5646 93.1113L12.4962 93.7372Z"
                                        fill="#FFB8B8" />
                                    <path d="M43.7911 93.7372V101.561L38.158 101.248L39.7228 93.1113L43.7911 93.7372Z"
                                        fill="#FFB8B8" />
                                    <path
                                        d="M26.5789 53.3667L35.0285 53.0537C54.5208 73.4886 47.1492 68.8278 46.6077 96.8667L36.2803 93.7372L38.471 74.3343C38.4721 74.3336 39.0489 73.9491 38.5695 73.9402C35.5711 74.9706 33.3835 62.2132 26.8918 63.694C19.5047 63.3406 18.3021 74.2991 15.3127 74.3343L17.5033 93.7372L7.17598 96.8667C6.01969 66.0548 0.352656 73.0152 18.7551 53.0537L26.5789 53.3667Z"
                                        fill="#2F2E41" />
                                    <path
                                        d="M14.0609 99.0574C14.0609 99.0574 12.8091 96.5538 11.2443 97.8056C9.67959 99.0574 5.92418 102.813 5.92418 102.813C5.92418 102.813 -3.15137 106.881 2.48173 109.385C8.11483 111.888 12.8091 105.942 12.8091 105.942C18.1745 104.823 21.2694 104.107 18.424 98.2546C16.8085 98.9536 14.5224 99.7629 14.0609 99.0574Z"
                                        fill="#2F2E41" />
                                    <path
                                        d="M42.2264 99.0574C42.2264 99.0574 43.4782 96.5538 45.043 97.8056C46.6077 99.0574 50.3631 102.813 50.3631 102.813C50.3631 102.813 59.4387 106.881 53.8056 109.385C48.1725 111.888 43.4782 105.942 43.4782 105.942C38.1128 104.823 35.018 104.107 37.8633 98.2546C39.4788 98.9536 41.7649 99.7629 42.2264 99.0574Z"
                                        fill="#2F2E41" />
                                    <path
                                        d="M35.0286 18.0033C34.5631 25.7939 23.9306 25.108 23.7624 18.0032C24.2278 10.2127 34.8603 10.8985 35.0286 18.0033Z"
                                        fill="#FFB8B8" />
                                    <path
                                        d="M26.8918 22.0717C29.6296 30.3461 23.1659 25.8412 32.212 32.399L35.6544 25.5141C35.6544 25.5141 33.1508 24.5753 33.4638 21.1328L26.8918 22.0717Z"
                                        fill="#FFB8B8" />
                                    <path
                                        d="M43.7911 26.7661L34.4622 24.6367C34.7246 30.2618 28.7216 29.1296 27.6742 26.3001L18.7551 31.4603C22.4987 45.4031 21.5499 45.9784 16.5645 54.9316C14.6618 56.669 17.5073 57.6648 19.9844 56.7141C21.8738 55.548 22.8333 54.5117 24.8578 54.7754C34.4241 56.7673 42.3878 57.2375 43.6481 56.4591C44.0991 55.8137 43.6351 26.8781 43.7911 26.7661Z"
                                        fill="#575A89" />
                                    <path
                                        d="M41.2875 27.3919C41.6005 27.3919 43.2125 26.6339 43.2125 26.6339C47.9026 26.5549 51.05 58.1031 51.3019 58.9999L48.1724 61.1905L43.1652 48.3596L41.2875 27.3919Z"
                                        fill="#575A89" />
                                    <path
                                        d="M19.381 64.0068C19.5411 65.1878 19.8134 78.4514 24.5647 72.2557C25.188 67.7355 23.0687 66.3861 22.5105 63.3809L19.381 64.0068Z"
                                        fill="#FFB8B8" />
                                    <path
                                        d="M20.6329 31.4601L19.674 30.9285C17.1033 30.844 17.9135 37.6489 16.8258 42.6323C15.9373 48.4379 16.1903 54.8394 17.2327 63.3979C17.3239 66.5385 22.9491 64.56 23.7624 64.3199C23.7624 64.3199 21.8847 51.4889 22.8235 49.2983C23.7624 47.1076 20.6329 31.4601 20.6329 31.4601Z"
                                        fill="#575A89" />
                                    <path
                                        d="M34.7823 12.5423C33.9132 11.131 32.5529 10.0911 30.9631 9.6226L29.7954 10.5567L30.2494 9.46717C29.8676 9.40893 29.4813 9.3866 29.0953 9.40047L28.0447 10.7513L28.4795 9.44674C23.9713 9.9308 21.3041 15.106 23.6445 18.728C24.0056 17.6185 24.4437 16.5775 24.8048 15.468C25.0885 15.5067 25.3761 15.5081 25.6602 15.4722L26.0994 14.4473L26.2221 15.4288C27.5836 15.3102 29.6029 15.0498 30.8936 14.8112L30.7681 14.0582L31.5189 14.6839C31.9144 14.5929 32.1492 14.5104 32.1298 14.4473C33.0897 15.9947 34.0408 16.9832 35.0007 18.5306C35.365 16.3479 36.0083 14.5335 34.7823 12.5423Z"
                                        fill="#2F2E41" />
                                    <path d="M131.999 67.8682H104.698V80.8183H131.999V67.8682Z" fill="white" />
                                    <path d="M126.836 70.5806H109.861V72.1334H126.836V70.5806Z" fill="#E6E6E6" />
                                    <path d="M126.836 73.5669H109.861V75.1197H126.836V73.5669Z" fill="#E6E6E6" />
                                    <path d="M126.836 76.5527H109.861V78.1055H126.836V76.5527Z" fill="#E6E6E6" />
                                    <path
                                        d="M80.9242 70.9443L80.0361 69.4063L79.1483 67.8682L78.2602 69.4063L77.3721 70.9443H78.3263V75.3982H79.97V70.9443H80.9242Z"
                                        fill="white" />
                                    <path
                                        d="M141.096 102.635C145.134 102.635 148.408 99.3616 148.408 95.3233C148.408 91.285 145.134 88.0112 141.096 88.0112C137.058 88.0112 133.784 91.285 133.784 95.3233C133.784 99.3616 137.058 102.635 141.096 102.635Z"
                                        fill="#3F3D56" />
                                    <path
                                        d="M142.426 98.5642C144.215 98.5642 145.666 97.1133 145.666 95.3236C145.666 93.5339 144.215 92.083 142.426 92.083C140.636 92.083 139.185 93.5339 139.185 95.3236C139.185 97.1133 140.636 98.5642 142.426 98.5642Z"
                                        fill="#E6E6E6" />
                                    <path
                                        d="M136.484 100.434L152.438 107.081L151.94 108.66L142.758 107.621L127.22 100.724L135.861 101.722L136.484 100.434Z"
                                        fill="#3F3D56" />
                                    <path
                                        d="M150.587 106.781L170.428 41.6938L175.26 33.113L175.277 33.0301C175.293 32.9544 175.648 31.1609 174.775 29.862C174.555 29.5391 174.271 29.265 173.94 29.0568C173.61 28.8485 173.24 28.7106 172.854 28.6516C170.187 28.1516 164.221 27.9053 163.968 27.895L163.921 27.8931L163.873 27.8995C163.71 27.9217 159.897 28.4791 159.036 31.8085L154.887 39.3581L154.871 39.4118L136.092 101.149L137.126 101.463L155.888 39.7798L160.05 32.2049L160.067 32.1352C160.677 29.6298 163.59 29.0436 163.978 28.9766C164.587 29.0026 170.195 29.2521 172.654 29.7133C172.899 29.7466 173.133 29.8303 173.344 29.9589C173.554 30.0876 173.735 30.2585 173.876 30.4609C174.414 31.2572 174.279 32.4297 174.232 32.7379L169.429 41.2663L169.412 41.3226L149.553 106.466L150.587 106.781Z"
                                        fill="#3F3D56" />
                                    <path
                                        d="M153.488 45.6001L153.296 46.6631L167.626 49.2513L167.818 48.1883L153.488 45.6001Z"
                                        fill="#3F3D56" />
                                    <path
                                        d="M150.811 54.4402L150.595 55.4985L164.823 58.4024L165.039 57.344L150.811 54.4402Z"
                                        fill="#3F3D56" />
                                    <path
                                        d="M146.046 70.2506L145.749 71.2891L159.64 75.2638L159.937 74.2253L146.046 70.2506Z"
                                        fill="#3F3D56" />
                                    <path
                                        d="M155.44 100.895L155.834 99.889L142.351 94.6096L141.689 87.4408L154.273 92.1411L158.35 98.0401L159.239 97.4261L154.969 91.2478L140.455 85.8267L141.337 95.3726L155.44 100.895Z"
                                        fill="#3F3D56" />
                                    <path
                                        d="M160.124 109.615C164.162 109.615 167.436 106.342 167.436 102.303C167.436 98.2649 164.162 94.9912 160.124 94.9912C156.086 94.9912 152.812 98.2649 152.812 102.303C152.812 106.342 156.086 109.615 160.124 109.615Z"
                                        fill="#3F3D56" />
                                    <path
                                        d="M162.035 105.876C163.825 105.876 165.276 104.425 165.276 102.636C165.276 100.846 163.825 99.395 162.035 99.395C160.245 99.395 158.795 100.846 158.795 102.636C158.795 104.425 160.245 105.876 162.035 105.876Z"
                                        fill="#E6E6E6" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_3910_24046">
                                        <rect width="174.723" height="110" fill="white"
                                            transform="translate(0.638489)" />
                                    </clipPath>
                                </defs>
                            </svg></div>
                        <div class="empty_state_message_container">
                            <h1>NO CLIENTS YET!</h1>
                            <div class="empty_state_paragraph_container">
                                <p>Looks like you have no clients yet.</p>
                                <p>You can add one by clicking the button below.</p>
                            </div>
                        </div>
                    </div><button id="add_client" class="btn add_client_button" type="button"><span
                            class="add_client_base"><svg xmlns="http://www.w3.org/2000/svg" width="25"
                                height="24" viewBox="0 0 25 24" fill="none">
                                <g clip-path="url(#clip0_5334_16405)" filter="url(#filter0_d_5334_16405)">
                                    <path d="M12.5 5V19M5.5 12H19.5" stroke="white" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <filter id="filter0_d_5334_16405" x="-1.5" y="0" width="28" height="28"
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
                                            result="effect1_dropShadow_5334_16405" />
                                        <feBlend mode="normal" in="SourceGraphic"
                                            in2="effect1_dropShadow_5334_16405" result="shape" />
                                    </filter>
                                    <clipPath id="clip0_5334_16405">
                                        <rect width="24" height="24" fill="white"
                                            transform="translate(0.5)" />
                                    </clipPath>
                                </defs>
                            </svg> Add Client</span></button>
                </div>

                <div id="client_table" class="w-100" style="overflow: auto;">
                    <table  class="table table-responsive mt-3 w-100">
                        <thead>
                            <tr>
                                <th><input id="SelectAll" type="checkbox" class="checkbox"></th>
                                <th>Client</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Birthdate</th>
                                <th>Next Visit</th>
                                <th>Last Appointment Visit</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="client_table_body">
                            @foreach ($clients as $clientInfo)
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>{{ $clientInfo->first_name }} {{ $clientInfo->middle_name }}
                                        {{ $clientInfo->last_name }} {{ $clientInfo->suffix }}</td>
                                    <td>{{ $clientInfo->email }}</td>
                                    <td>{{ $clientInfo->phone }}</td>
                                    <td>{{ $clientInfo->birthdate }}</td>
                                    @if ($clientInfo->appointmentapproved->where('status', 'Approved')->isNotEmpty())
                                        <td>{{ $clientInfo->appointmentapproved->where('status', 'Approved')->first()->appointmentDate }}</td>
                                    @else
                                        <td>No approved appointments</td>
                                    @endif
                                    @if ($clientInfo->appointmentapproved->where('status', 'Completed')->isNotEmpty())
                                        <td>{{ $clientInfo->appointmentapproved->where('status', 'Completed')->first()->appointmentDate }}</td>
                                    @else
                                        <td>No completed appointments</td>
                                    @endif
                                    <td class="dropdown button-action">
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
                                                            <div class="dropdown-menu client_menu"><div class="button-group">
                                                            <button
                                                data-action="View"
                                                data-container-id="{{ $clientInfo->id }}"
                                                data-first-name="{{ $clientInfo->first_name }}"
                                                data-middle-name="{{ $clientInfo->middle_name}}"
                                                data-last-name="{{ $clientInfo->last_name}}"
                                                data-suffix="{{ $clientInfo->suffix}}"
                                                data-birthdate="{{ $clientInfo->birthdate}}"
                                                data-email="{{ $clientInfo->email}}"
                                                data-phone="{{ $clientInfo->phone}}"
                                                data-gender="{{ $clientInfo->gender}}"
                                                class="btn border-0 viewButton"style="color:gray"><div class="action_button_text"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <g clip-path="url(#clip0_6559_23849)">
                                                        <path d="M10 12C10 12.5304 10.2107 13.0391 10.5858 13.4142C10.9609 13.7893 11.4696 14 12 14C12.5304 14 13.0391 13.7893 13.4142 13.4142C13.7893 13.0391 14 12.5304 14 12C14 11.4696 13.7893 10.9609 13.4142 10.5858C13.0391 10.2107 12.5304 10 12 10C11.4696 10 10.9609 10.2107 10.5858 10.5858C10.2107 10.9609 10 11.4696 10 12Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M21 12C18.6 16 15.6 18 12 18C8.4 18 5.4 16 3 12C5.4 8 8.4 6 12 6C15.6 6 18.6 8 21 12Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_6559_23849">
                                                        <rect width="24" height="24" fill="white"/>
                                                        </clipPath>
                                                    </defs>
                                                    </svg> View</div></button>
                                                <button 
                                                data-action="Edit" id="editButton"
                                                data-container-id="{{ $clientInfo->id }}"
                                                data-first-name="{{ $clientInfo->first_name }}"
                                                data-middle-name="{{ $clientInfo->middle_name}}"
                                                data-last-name="{{ $clientInfo->last_name}}"
                                                data-suffix="{{ $clientInfo->suffix}}"
                                                data-birthdate="{{ $clientInfo->birthdate}}"
                                                data-email="{{ $clientInfo->email}}"
                                                data-phone="{{ $clientInfo->phone}}"
                                                class="btn border-0 editButton"style="color:gray"><div class="action_button_text"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g clip-path="url(#clip0_6559_23478)">
    <path d="M13.5 6.5L17.5 10.5M4 20.0001H8L18.5 9.50006C19.0304 8.96963 19.3284 8.2502 19.3284 7.50006C19.3284 6.74991 19.0304 6.03049 18.5 5.50006C17.9696 4.96963 17.2501 4.67163 16.5 4.67163C15.7499 4.67163 15.0304 4.96963 14.5 5.50006L4 16.0001V20.0001Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_6559_23478">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg> Edit</div></button>
                                                <button 
                                                data-action="Archive"
                                                data-container-id="{{ $clientInfo->id }}"
                                                class="btn border-0 archiveButton"style="color:gray"><div class="action_button_text"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g clip-path="url(#clip0_6559_23857)">
    <path d="M19 8C19.5304 8 20.0391 7.78929 20.4142 7.41421C20.7893 7.03914 21 6.53043 21 6C21 5.46957 20.7893 4.96086 20.4142 4.58579C20.0391 4.21071 19.5304 4 19 4H5C4.46957 4 3.96086 4.21071 3.58579 4.58579C3.21071 4.96086 3 5.46957 3 6C3 6.53043 3.21071 7.03914 3.58579 7.41421C3.96086 7.78929 4.46957 8 5 8M19 8H5M19 8V18C19 18.5304 18.7893 19.0391 18.4142 19.4142C18.0391 19.7893 17.5304 20 17 20H7C6.46957 20 5.96086 19.7893 5.58579 19.4142C5.21071 19.0391 5 18.5304 5 18V8M10 12H14" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_6559_23857">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg> Archive</div></button>
                                        </div>
                                            
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
                                @for ($i = 1; $i <= $clients->lastPage(); $i++)
                                    <option value="{{ $i }}" {{ request()->input('page') == $i ? 'selected' : '' }}>
                                        {{ $i }}
                                    </option>
                                @endfor
                            </select>
                            
                        </div>
                        <div class="pagination-pages">
                            {{ $clients->appends([
                                'q' => request()->input('q'), 
                                'sortBy' => request()->input('sortBy'), 
                                'sortOrder' => request()->input('sortOrder'),
                                'perPage' => request()->input('perPage'),
                                ])->links() }}
                        </div>
                        <div class="pagination-items">
                            <span>Show:</span>
                            <select class="paginationItemsSelect" onchange="changeItemsPerPage(this)">
                                <option value="5" {{ request()->input('perPage') == 5 ? 'selected' : '' }}>5
                                    items</option>
                                <option value="10" {{ request()->input('perPage') == 10 ? 'selected' : '' }}>10
                                    items</option>
                                <option value="25" {{ request()->input('perPage') == 25 ? 'selected' : '' }}>25
                                    items</option>
                                <option value="100" {{ request()->input('perPage') == 100 ? 'selected' : '' }}>
                                    100 items</option>

                            </select>
                        </div>
                    </div>
            </div>
            <div id="edit_client_detail_header" class="prod_detail_header">
                <h1>Edit Client Information</h1>
            </div>
            <div id="view_client" class="view_client">
                <div class="product_detail_header"><button class="btn client_back_btn" id="view_client_back_btn"
                        type="button"><span class="view_back_btn_base"><svg xmlns="http://www.w3.org/2000/svg"
                                width="25" height="24" viewBox="0 0 25 24" fill="none">
                                <g clip-path="url(#clip0_5345_14456)" filter="url(#filter0_d_5345_14456)">
                                    <path d="M5.5 12H19.5M5.5 12L11.5 18M5.5 12L11.5 6" stroke="#045B62"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <filter id="filter0_d_5345_14456" x="-1.5" y="0" width="28" height="28"
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
                                            result="effect1_dropShadow_5345_14456" />
                                        <feBlend mode="normal" in="SourceGraphic"
                                            in2="effect1_dropShadow_5345_14456" result="shape" />
                                    </filter>
                                    <clipPath id="clip0_5345_14456">
                                        <rect width="24" height="24" fill="white"
                                            transform="translate(0.5)" />
                                    </clipPath>
                                </defs>
                            </svg> Back</span></button></div>
                <div class="client_info_container">
                    <div class="client_info w-100">
                        <div class="client_summary  w-100">
                            <div class="client_summary_header_container w-100">
                                <div class="client_summary_header client_name">
                                    <h1></h1>
                                </div>
                                <button class="btn edit_prod_detail" id="edit_client_detail" type="button"><span><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <g clip-path="url(#clip0_5345_10250)">
                                    <path
                                        d="M13.5 6.50024L17.5 10.5002M4 20.0003H8L18.5 9.5003C19.0304 8.96987 19.3284 8.25045 19.3284 7.5003C19.3284 6.75016 19.0304 6.03074 18.5 5.5003C17.9696 4.96987 17.2501 4.67188 16.5 4.67188C15.7499 4.67187 15.0304 4.96987 14.5 5.5003L4 16.0003V20.0003Z"
                                        stroke="#1C1C1C" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_5345_10250">
                                        <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg></span></button>
                            </div>
                            <div class="client_summary_body_container">
                                <div class="client_summary_row">
                                    <div class="client_summary_block client_birthdate">
                                        <h1>Birthday</h1>
                                        <p></p>
                                    </div>
                                    <div class="client_summary_block client_email-3">
                                        <h1>Email Address</h1>
                                        <p>xxxx@gmail.com</p>
                                    </div>
                                    <div class="client_summary_block user_phone-3">
                                        <h1>Phone Number</h1>
                                        <p></p>
                                    </div>
                                    <div class="client_summary_block">
                                        <h1>Address</h1>
                                        <p></p>
                                    </div>
                                    <div class="client_summary_block client_gender">
                                        <h1>Gender</h1>
                                        <p>xxxx</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container_header">
                    <div class="left_part_product_header">
                        <div class="search_container">
                            <input type="search" class="search_input" placeholder="Search Client" value="">
                        </div><button class="btn filter_btn" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none">
                                    <g clip-path="url(#clip0_5284_15912)">
                                        <path
                                            d="M4 4H20V6.172C19.9999 6.70239 19.7891 7.21101 19.414 7.586L15 12V19L9 21V12.5L4.52 7.572C4.18545 7.20393 4.00005 6.7244 4 6.227V4Z"
                                            stroke="black" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_5284_15912">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg><span class="filter_btn_base">Filter by</span></button><button class="btn sort_btn" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none">
                                    <g clip-path="url(#clip0_5284_15919)">
                                        <path d="M4 6H13M4 12H11M4 18H11M15 15L18 18M18 18L21 15M18 18V6"
                                            stroke="black" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_5284_15919">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg><span
                                class="filter_btn_base">Sort by</span></button>
                    </div>
                    <div class="right_part_product_header"><button class="btn add_pet_button" id="add_pet_button"
                            type="button"><span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none">
                                    <g clip-path="url(#clip0_5749_19213)">
                                        <path d="M12 5V19M5 12H19" stroke="#1C1C1C" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_5749_19213">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg></span></button></div>
                </div>
                <div id="pet_empty_state_container" class="empty_state_container">
                    <div class="empty_state">
                        <div><svg xmlns="http://www.w3.org/2000/svg" width="176" height="110"
                                viewBox="0 0 176 110" fill="none">
                                <g clip-path="url(#clip0_3910_24046)">
                                    <path
                                        d="M135.118 83.0864C142.305 65.1185 140.131 45.0554 130.862 29.6466L33.8338 43.0813L126.818 23.7028C87.629 -25.1661 11.3536 7.24805 18.7062 68.9485L135.118 83.0864Z"
                                        fill="#E6E6E6" />
                                    <path d="M139.397 63.2246H15.7821V101.717H139.397V63.2246Z" fill="#004D53" />
                                    <path
                                        d="M50.2572 58.5303C51.3663 59.3916 51.7718 59.6696 52.008 59.6343C63.4515 62.9667 53.4196 66.872 47.8595 60.2429L50.2572 58.5303Z"
                                        fill="#FFB8B8" />
                                    <path d="M12.4962 93.7372V101.561L18.1292 101.248L16.5646 93.1113L12.4962 93.7372Z"
                                        fill="#FFB8B8" />
                                    <path d="M43.7911 93.7372V101.561L38.158 101.248L39.7228 93.1113L43.7911 93.7372Z"
                                        fill="#FFB8B8" />
                                    <path
                                        d="M26.5789 53.3667L35.0285 53.0537C54.5208 73.4886 47.1492 68.8278 46.6077 96.8667L36.2803 93.7372L38.471 74.3343C38.4721 74.3336 39.0489 73.9491 38.5695 73.9402C35.5711 74.9706 33.3835 62.2132 26.8918 63.694C19.5047 63.3406 18.3021 74.2991 15.3127 74.3343L17.5033 93.7372L7.17598 96.8667C6.01969 66.0548 0.352656 73.0152 18.7551 53.0537L26.5789 53.3667Z"
                                        fill="#2F2E41" />
                                    <path
                                        d="M14.0609 99.0574C14.0609 99.0574 12.8091 96.5538 11.2443 97.8056C9.67959 99.0574 5.92418 102.813 5.92418 102.813C5.92418 102.813 -3.15137 106.881 2.48173 109.385C8.11483 111.888 12.8091 105.942 12.8091 105.942C18.1745 104.823 21.2694 104.107 18.424 98.2546C16.8085 98.9536 14.5224 99.7629 14.0609 99.0574Z"
                                        fill="#2F2E41" />
                                    <path
                                        d="M42.2264 99.0574C42.2264 99.0574 43.4782 96.5538 45.043 97.8056C46.6077 99.0574 50.3631 102.813 50.3631 102.813C50.3631 102.813 59.4387 106.881 53.8056 109.385C48.1725 111.888 43.4782 105.942 43.4782 105.942C38.1128 104.823 35.018 104.107 37.8633 98.2546C39.4788 98.9536 41.7649 99.7629 42.2264 99.0574Z"
                                        fill="#2F2E41" />
                                    <path
                                        d="M35.0286 18.0033C34.5631 25.7939 23.9306 25.108 23.7624 18.0032C24.2278 10.2127 34.8603 10.8985 35.0286 18.0033Z"
                                        fill="#FFB8B8" />
                                    <path
                                        d="M26.8918 22.0717C29.6296 30.3461 23.1659 25.8412 32.212 32.399L35.6544 25.5141C35.6544 25.5141 33.1508 24.5753 33.4638 21.1328L26.8918 22.0717Z"
                                        fill="#FFB8B8" />
                                    <path
                                        d="M43.7911 26.7661L34.4622 24.6367C34.7246 30.2618 28.7216 29.1296 27.6742 26.3001L18.7551 31.4603C22.4987 45.4031 21.5499 45.9784 16.5645 54.9316C14.6618 56.669 17.5073 57.6648 19.9844 56.7141C21.8738 55.548 22.8333 54.5117 24.8578 54.7754C34.4241 56.7673 42.3878 57.2375 43.6481 56.4591C44.0991 55.8137 43.6351 26.8781 43.7911 26.7661Z"
                                        fill="#575A89" />
                                    <path
                                        d="M41.2875 27.3919C41.6005 27.3919 43.2125 26.6339 43.2125 26.6339C47.9026 26.5549 51.05 58.1031 51.3019 58.9999L48.1724 61.1905L43.1652 48.3596L41.2875 27.3919Z"
                                        fill="#575A89" />
                                    <path
                                        d="M19.381 64.0068C19.5411 65.1878 19.8134 78.4514 24.5647 72.2557C25.188 67.7355 23.0687 66.3861 22.5105 63.3809L19.381 64.0068Z"
                                        fill="#FFB8B8" />
                                    <path
                                        d="M20.6329 31.4601L19.674 30.9285C17.1033 30.844 17.9135 37.6489 16.8258 42.6323C15.9373 48.4379 16.1903 54.8394 17.2327 63.3979C17.3239 66.5385 22.9491 64.56 23.7624 64.3199C23.7624 64.3199 21.8847 51.4889 22.8235 49.2983C23.7624 47.1076 20.6329 31.4601 20.6329 31.4601Z"
                                        fill="#575A89" />
                                    <path
                                        d="M34.7823 12.5423C33.9132 11.131 32.5529 10.0911 30.9631 9.6226L29.7954 10.5567L30.2494 9.46717C29.8676 9.40893 29.4813 9.3866 29.0953 9.40047L28.0447 10.7513L28.4795 9.44674C23.9713 9.9308 21.3041 15.106 23.6445 18.728C24.0056 17.6185 24.4437 16.5775 24.8048 15.468C25.0885 15.5067 25.3761 15.5081 25.6602 15.4722L26.0994 14.4473L26.2221 15.4288C27.5836 15.3102 29.6029 15.0498 30.8936 14.8112L30.7681 14.0582L31.5189 14.6839C31.9144 14.5929 32.1492 14.5104 32.1298 14.4473C33.0897 15.9947 34.0408 16.9832 35.0007 18.5306C35.365 16.3479 36.0083 14.5335 34.7823 12.5423Z"
                                        fill="#2F2E41" />
                                    <path d="M131.999 67.8682H104.698V80.8183H131.999V67.8682Z" fill="white" />
                                    <path d="M126.836 70.5806H109.861V72.1334H126.836V70.5806Z" fill="#E6E6E6" />
                                    <path d="M126.836 73.5669H109.861V75.1197H126.836V73.5669Z" fill="#E6E6E6" />
                                    <path d="M126.836 76.5527H109.861V78.1055H126.836V76.5527Z" fill="#E6E6E6" />
                                    <path
                                        d="M80.9242 70.9443L80.0361 69.4063L79.1483 67.8682L78.2602 69.4063L77.3721 70.9443H78.3263V75.3982H79.97V70.9443H80.9242Z"
                                        fill="white" />
                                    <path
                                        d="M141.096 102.635C145.134 102.635 148.408 99.3616 148.408 95.3233C148.408 91.285 145.134 88.0112 141.096 88.0112C137.058 88.0112 133.784 91.285 133.784 95.3233C133.784 99.3616 137.058 102.635 141.096 102.635Z"
                                        fill="#3F3D56" />
                                    <path
                                        d="M142.426 98.5642C144.215 98.5642 145.666 97.1133 145.666 95.3236C145.666 93.5339 144.215 92.083 142.426 92.083C140.636 92.083 139.185 93.5339 139.185 95.3236C139.185 97.1133 140.636 98.5642 142.426 98.5642Z"
                                        fill="#E6E6E6" />
                                    <path
                                        d="M136.484 100.434L152.438 107.081L151.94 108.66L142.758 107.621L127.22 100.724L135.861 101.722L136.484 100.434Z"
                                        fill="#3F3D56" />
                                    <path
                                        d="M150.587 106.781L170.428 41.6938L175.26 33.113L175.277 33.0301C175.293 32.9544 175.648 31.1609 174.775 29.862C174.555 29.5391 174.271 29.265 173.94 29.0568C173.61 28.8485 173.24 28.7106 172.854 28.6516C170.187 28.1516 164.221 27.9053 163.968 27.895L163.921 27.8931L163.873 27.8995C163.71 27.9217 159.897 28.4791 159.036 31.8085L154.887 39.3581L154.871 39.4118L136.092 101.149L137.126 101.463L155.888 39.7798L160.05 32.2049L160.067 32.1352C160.677 29.6298 163.59 29.0436 163.978 28.9766C164.587 29.0026 170.195 29.2521 172.654 29.7133C172.899 29.7466 173.133 29.8303 173.344 29.9589C173.554 30.0876 173.735 30.2585 173.876 30.4609C174.414 31.2572 174.279 32.4297 174.232 32.7379L169.429 41.2663L169.412 41.3226L149.553 106.466L150.587 106.781Z"
                                        fill="#3F3D56" />
                                    <path
                                        d="M153.488 45.6001L153.296 46.6631L167.626 49.2513L167.818 48.1883L153.488 45.6001Z"
                                        fill="#3F3D56" />
                                    <path
                                        d="M150.811 54.4402L150.595 55.4985L164.823 58.4024L165.039 57.344L150.811 54.4402Z"
                                        fill="#3F3D56" />
                                    <path
                                        d="M146.046 70.2506L145.749 71.2891L159.64 75.2638L159.937 74.2253L146.046 70.2506Z"
                                        fill="#3F3D56" />
                                    <path
                                        d="M155.44 100.895L155.834 99.889L142.351 94.6096L141.689 87.4408L154.273 92.1411L158.35 98.0401L159.239 97.4261L154.969 91.2478L140.455 85.8267L141.337 95.3726L155.44 100.895Z"
                                        fill="#3F3D56" />
                                    <path
                                        d="M160.124 109.615C164.162 109.615 167.436 106.342 167.436 102.303C167.436 98.2649 164.162 94.9912 160.124 94.9912C156.086 94.9912 152.812 98.2649 152.812 102.303C152.812 106.342 156.086 109.615 160.124 109.615Z"
                                        fill="#3F3D56" />
                                    <path
                                        d="M162.035 105.876C163.825 105.876 165.276 104.425 165.276 102.636C165.276 100.846 163.825 99.395 162.035 99.395C160.245 99.395 158.795 100.846 158.795 102.636C158.795 104.425 160.245 105.876 162.035 105.876Z"
                                        fill="#E6E6E6" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_3910_24046">
                                        <rect width="174.723" height="110" fill="white"
                                            transform="translate(0.638489)" />
                                    </clipPath>
                                </defs>
                            </svg></div>
                        <div class="empty_state_message_container">
                            <h1>NO PETS YET!</h1>
                            <div class="empty_state_paragraph_container">
                                <p>You can add a pet by clicking the button below.</p>
                            </div>
                        </div>
                    </div><a href="{{ route('admin_emr') }}" role="button" class="add_client_button"><span class="add_client_base"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
  <g clip-path="url(#clip0_6893_11565)" filter="url(#filter0_d_6893_11565)">
    <path d="M5.5 12H19.5M19.5 12L13.5 18M19.5 12L13.5 6" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <filter id="filter0_d_6893_11565" x="-1.5" y="0" width="28" height="28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
      <feOffset dy="2"/>
      <feGaussianBlur stdDeviation="1"/>
      <feComposite in2="hardAlpha" operator="out"/>
      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_6893_11565"/>
      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_6893_11565" result="shape"/>
    </filter>
    <clipPath id="clip0_6893_11565">
      <rect width="24" height="24" fill="white" transform="translate(0.5)"/>
    </clipPath>
  </defs>
</svg> Go to Pet Records</span></a>
                </div>
                <div id="pet_card_container" class="pet_card_container">
                    <div class="card pet_card" id="pet_card" data-pet-id="pet_card_0">
                        <div class="card-body pet_card_body">
                            <div class="pet_detail_header">
                                <div class="pet_detail_heading_text_container">
                                    <h1>Pet Name</h1>
                                    <p>Pet Breed</p>
                                </div>
                                <div class="dropdown more_button"><button class="btn dropdown-toggle more_btn"
                                        aria-expanded="false" data-bs-toggle="dropdown" type="button"><span
                                            class="more_btn_base"><svg fill="none" height="18"
                                                viewbox="0 0 18 18" width="18"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9 5C7.61929 5 6.5 3.88071 6.5 2.5C6.5 1.11929 7.61929 -6.03528e-08 9 0C10.3807 6.03528e-08 11.5 1.11929 11.5 2.5C11.5 3.88071 10.3807 5 9 5Z"
                                                    fill="#045B62"></path>
                                                <path
                                                    d="M9 11.5C7.61929 11.5 6.5 10.3807 6.5 9C6.5 7.61929 7.61929 6.5 9 6.5C10.3807 6.5 11.5 7.61929 11.5 9C11.5 10.3807 10.3807 11.5 9 11.5Z"
                                                    fill="#045B62"></path>
                                                <path
                                                    d="M9 18C7.61929 18 6.5 16.8807 6.5 15.5C6.5 14.1193 7.61929 13 9 13C10.3807 13 11.5 14.1193 11.5 15.5C11.5 16.8807 10.3807 18 9 18Z"
                                                    fill="#045B62"></path>
                                            </svg></span></button>
                                    <div class="dropdown-menu more_button" data-bs-popper="none"><a
                                            class="dropdown-item" id="View"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <g clip-path="url(#clip0_5624_22297)">
                                                    <path
                                                        d="M10 12C10 12.5304 10.2107 13.0391 10.5858 13.4142C10.9609 13.7893 11.4696 14 12 14C12.5304 14 13.0391 13.7893 13.4142 13.4142C13.7893 13.0391 14 12.5304 14 12C14 11.4696 13.7893 10.9609 13.4142 10.5858C13.0391 10.2107 12.5304 10 12 10C11.4696 10 10.9609 10.2107 10.5858 10.5858C10.2107 10.9609 10 11.4696 10 12Z"
                                                        stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path
                                                        d="M21 12C18.6 16 15.6 18 12 18C8.4 18 5.4 16 3 12C5.4 8 8.4 6 12 6C15.6 6 18.6 8 21 12Z"
                                                        stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_5624_22297">
                                                        <rect width="24" height="24" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>&nbsp;View</a><a class="dropdown-item" id="Edit"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <g clip-path="url(#clip0_5624_22180)">
                                                    <path
                                                        d="M13.5 6.5L17.5 10.5M4 20.0001H8L18.5 9.50006C19.0304 8.96963 19.3284 8.2502 19.3284 7.50006C19.3284 6.74991 19.0304 6.03049 18.5 5.50006C17.9696 4.96963 17.2501 4.67163 16.5 4.67163C15.7499 4.67163 15.0304 4.96963 14.5 5.50006L4 16.0001V20.0001Z"
                                                        stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_5624_22180">
                                                        <rect width="24" height="24" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>&nbsp;Edit</a><a class="dropdown-item" id="Archive"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <g clip-path="url(#clip0_5624_22046)">
                                                    <path
                                                        d="M19 8C19.5304 8 20.0391 7.78929 20.4142 7.41421C20.7893 7.03914 21 6.53043 21 6C21 5.46957 20.7893 4.96086 20.4142 4.58579C20.0391 4.21071 19.5304 4 19 4H5C4.46957 4 3.96086 4.21071 3.58579 4.58579C3.21071 4.96086 3 5.46957 3 6C3 6.53043 3.21071 7.03914 3.58579 7.41421C3.96086 7.78929 4.46957 8 5 8M19 8H5M19 8V18C19 18.5304 18.7893 19.0391 18.4142 19.4142C18.0391 19.7893 17.5304 20 17 20H7C6.46957 20 5.96086 19.7893 5.58579 19.4142C5.21071 19.0391 5 18.5304 5 18V8M10 12H14"
                                                        stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_5624_22046">
                                                        <rect width="24" height="24" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>&nbsp;Archive</a></div>
                                </div>
                            </div>
                            <div class="pet_detail_body">
                                <div class="pet_upper_detail">
                                    <div class="pet_gender_container">
                                        <h1>Gender</h1>
                                        <p>Paragraph</p>
                                    </div>
                                    <div class="pet_age_container">
                                        <h1>Age</h1>
                                        <p>Paragraph</p>
                                    </div>
                                </div>
                                <div class="pet_lower_detail">
                                    <div class="pet_weight_container">
                                        <h1>Weight</h1>
                                        <p>Paragraph</p>
                                    </div>
                                    <div class="pet_sterilization_status_container">
                                        <h1>Sterilization Status</h1>
                                        <p>Paragraph</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="edit_client" class="prod_detail">
                <div class="product_detail_header"><button class="btn client_back_btn" id="edit_client_back_btn"
                        type="button"><span class="view_back_btn_base"><svg xmlns="http://www.w3.org/2000/svg"
                                width="25" height="24" viewBox="0 0 25 24" fill="none">
                                <g clip-path="url(#clip0_5345_14456)" filter="url(#filter0_d_5345_14456)">
                                    <path d="M5.5 12H19.5M5.5 12L11.5 18M5.5 12L11.5 6" stroke="#045B62"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <filter id="filter0_d_5345_14456" x="-1.5" y="0" width="28" height="28"
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
                                            result="effect1_dropShadow_5345_14456" />
                                        <feBlend mode="normal" in="SourceGraphic"
                                            in2="effect1_dropShadow_5345_14456" result="shape" />
                                    </filter>
                                    <clipPath id="clip0_5345_14456">
                                        <rect width="24" height="24" fill="white"
                                            transform="translate(0.5)" />
                                    </clipPath>
                                </defs>
                            </svg> Back</span></button></div>
                <div class="prod_detail_body">
                    <form action="{{ route('client.edit')}}" id="add_client_form-3" class="client_detail_fields_container">
                        @csrf
                        <div class="new_input_row">
                            <input type="hidden" name="client_id" id="editId">
                            <div class="form-floating" style="width:100%;"><input
                                    class="form-control" type="text"
                                    data-id="first_name" id="edit_first_name" placeholder="First Name"><label
                                    class="form-label form-label form-label form-label" for="edit_first_name">First
                                    Name</label>
                                <div id="error-first_name-3" class="error-message"><span>Please enter your first
                                        name.</span></div>
                            </div>
                            <div class="form-floating" style="width:100%;"><input
                                    class="form-control" type="text"
                                    data-id="middle_name" id="edit_middle_name" placeholder="Middle Name"><label
                                    class="form-label form-label form-label form-label" for="edit_middle_name">Middle
                                    Name</label>
                                <div id="error-middle_name-3" class="error-message"><span>Please enter your middle
                                        name.</span></div>
                            </div>
                        </div>
                        <div class="new_input_row">
                            <div class="form-floating" style="width:100%;"><input class="form-control"
                                    type="text" id="edit_last_name" data-id="last_name"
                                    placeholder="Last Name"><label class="form-label" for="edit_last_name">Last
                                    Name</label>
                                <div id="error-last_name-4" class="error-message"><span>Please enter your last
                                        name.</span></div>
                            </div>
                            <div class="form-floating" style="width:100%;"><select class="form-select"
                                    id="edit_suffix" data-id="suffix">
                                    <option value="none" selected="">Select a Suffix</option>
                                    <option value="Jr">Jr</option>
                                    <option value="Sr">Sr</option>
                                    <option value="II">II</option>
                                    <option value="Other">Other</option>
                                </select><label class="form-label" for="edit_suffix">Suffix</label>
                                <div id="error-suffix-4" class="error-message"><span>Please select a
                                        suffix.</span></div>
                            </div>
                            <div id="specific_suffix-1" class="form-floating" style="width: 100%;display: none;">
                                    <input class="form-control" type="text" name="specify_suffix"
                                        id="specify_suffix-1" data-id="specify_suffix"
                                        placeholder="Specify Suffix"><label class="form-label"
                                        for="specify_suffix">Specify suffix</label>
                                    <div id="error-specify_suffix-1" class="error-message"><span>Please specify
                                            suffix.</span></div>
                                </div>
                        </div>
                        <div class="form-floating" style="width:100%;"><input class="form-control"
                                id="edit_birthdate" data-id="birthdate" placeholder="Birth Date"
                                type="date"><label class="form-label" for="edit_birthdate">Birthdate</label>
                            <div id="error-client_birthdate-3" class="error-message"><span>Please enter the
                                    manufactured date.</span></div>
                        </div>
                        <div class="form-floating" style="width:100%;">
                            <textarea class="form-control" id="edit_client_address" data-id="client_address" placeholder="Address"></textarea><label class="form-label" for="edit_client">Address</label>
                            <div id="error-client_address-3" class="error-message"><span>Please enter your
                                    address.</span></div>
                        </div>
                        <div class="form-floating" style="width:100%;"><input class="form-control" type="email"
                                id="edit_email" data-id="client_email" placeholder="Email"><label
                                class="form-label" for="edit_email">Email
                                Address</label>
                            <div id="error-client_email-3" class="error-message"><span>Please enter a valid email
                                    address.</span></div>
                        </div>
                        <div class="form-floating" style="width:100%;"><input class="form-control" type="tel"
                                id="edit_phone" data-id="user_phone" placeholder="Phone Number"><label
                                class="form-label" for="edit_phone">Phone
                                Number</label>
                            <div id="error-user_phone-3" class="error-message"><span>Please enter a valid phone
                                    number.</span></div>
                        </div>
                    </form>
                    <div class="mb-3 mt-3 prod_detail_fields_buttons">
                        <button class="btn cancel_edit" id="cancel_edit"
                            type="button"><span class="cancel_edit_base">Cancel</span></button>
                        <button
                            class="btn edit_save_changes" id="edit_save_changes" form="add_client_form-3" type="submit"
                            disabled=""><span class="edit_save_changes_base">Save Changes</span></button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
    <div class="modal fade" role="dialog" tabindex="-1" id="add_client_modal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content add_client_modal">
                <div class="modal-header">
                    <h1 class="modal-title">Add Client</h1><button class="btn-close" aria-label="Close"
                        data-bs-dismiss="modal" type="button"></button>
                </div>
                <div class="modal-body" style="width:100%;">
                    <form action="#" method="POST" class="add_client" id="add_client_form">
                    @csrf
                    <div class="mb-3 input_container">
                            <div class="new_input_row">
                                <div class="form-floating" style="width:100%;"><input class="form-control"
                                        type="text" id="first_name" data-id="first_name"
                                        placeholder="First Name"><label class="form-label" for="first_name">First
                                        Name <span>&nbsp;*</span></label>
                                    <div class="error-message" id="error-first_name"><span>Please enter client first
                                            name.</span></div>
                                </div>
                                <div class="form-floating" style="width:100%;"><input class="form-control"
                                        type="text" id="middle_name" data-id="middle_name"
                                        placeholder="Middle Name"><label class="form-label" for="middle_name">Middle
                                        Name <span>&nbsp;*</span></label>
                                    <div class="error-message" id="error-middle_name"><span>Please enter client middle
                                            name.</span></div>
                                </div>
                            </div>
                            <div class="new_input_row">
                                <div class="form-floating" style="width:100%;"><input class="form-control"
                                        type="text" id="last_name" data-id="last_name"
                                        placeholder="Last Name"><label class="form-label" for="last_name">Last
                                        Name <span>&nbsp;*</span></label>
                                    <div id="error-last_name" class="error-message"><span>Please enter client last
                                            name.</span></div>
                                </div>
                                <div class="form-floating" style="width:100%;"><select id="suffix"
                                        class="form-select" data-id="suffix" onchange="handleSuffixChange()">
                                        <option value="none" selected>Select a Suffix</option>
                                        <option value="Jr">Jr</option>
                                        <option value="Sr">Sr</option>
                                        <option value="II">II</option>
                                        <option value="Other">Other</option>
                                    </select><label class="form-label" for="suffix">Suffix</label>
                                    <div id="error-suffix" class="error-message"><span>Please select a suffix.</span>
                                    </div>
                                </div>
                                <div id="specific_suffix" class="form-floating" style="width: 100%;display: none;">
                                    <input class="form-control" type="text" id="specify_suffix"
                                        data-id="specify_suffix" placeholder="Specify Suffix"><label
                                        class="form-label" for="specify_suffix">Specify suffix</label>
                                    <div id="error-specify_suffix" class="error-message"><span>Please specify
                                            suffix.</span></div>
                                </div>
                            </div>
                            <div class="form-floating" style="width:100%;"><input class="form-control"
                                    id="client_birthdate" data-id="client_birthdate" placeholder="Birthdate"
                                    type="date"><label class="form-label" for="client_birthdate">Birthdate <span>&nbsp;*</span></label>
                                <div class="error-message" id="error-client_birthdate"><span>Please enter the client
                                        birthdate.</span></div>
                            </div>
                            <div class="form-floating" style="width:100%;">
                                <textarea class="form-control" id="client_address" data-id="client_address" placeholder="Address"></textarea><label class="form-label"
                                    for="client_address">Address <span>&nbsp;*</span></label>
                                <div class="error-message" id="error-client_address"><span>Please enter client
                                        address.</span></div>
                            </div>
                            <div class="form-floating" style="width:100%;"><input class="form-control"
                                    type="email" id="client_email" data-id="client_email"
                                    placeholder="Email"><label class="form-label" for="client_email">Email
                                    Address <span>&nbsp;*</span></label>
                                <div class="error-message" id="error-client_email"><span>Please enter a valid email
                                        address.</span></div>
                            </div>
                            <div class="form-floating" style="width:100%;"><input class="form-control"
                                    type="tel" id="user_phone" data-id="user_phone"
                                    placeholder="Phone Number"><label class="form-label" for="user_phone">Phone
                                    Number <span>&nbsp;*</span></label>
                                <div class="error-message" id="error-user_phone"><span>Please enter a valid phone
                                        number.</span></div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer add_product_button"><button class="btn clear_form" id="clear_form"
                        aria-label="Clear Form" role="button" type="button"><span class="clear_form_base">Clear
                            Form</span></button><button class="btn submit_product" id="submit_Client"
                        type="submit" ><span class="submit_product_base">Submit</span></button></div>
            </div>
        </div>
    </div>

    <div class="modal fade" role="dialog" tabindex="-1" id="add_client_modal-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content add_client_modal">
                <div class="modal-header">
                    <h1 class="modal-title">Add Client</h1><button class="btn-close" id="close_addClient" aria-label="Close"
                        data-bs-dismiss="modal" type="button"></button>
                </div>
                <div class="modal-body" style="width:100%;">
                
                    <form action="{{ route('client.store') }}" method="POST" class="add_client" id="add_client_form-1">
                        @csrf
                        <div class="mb-3 input_container">
                            <div class="new_input_row">
                                <div class="form-floating" style="width:100%;"><input class="form-control"
                                        type="text" name="first_name" id="First_name-1" data-id="first_name"
                                        placeholder="First Name" style="text-transform: capitalize;"><label class="form-label" for="first_name-1">First
                                        Name <span>&nbsp;*</span></label>
                                    <div class="error-message" id="error-first_name-1"><span>Please enter client first
                                            name.</span></div>
                                </div>
                                <div class="form-floating" style="width:100%;"><input class="form-control"
                                        type="text" name="middle_name" id="Middle_name-1" data-id="middle_name"
                                        placeholder="Middle Name" style="text-transform: capitalize;"><label class="form-label" for="middle_name-1">Middle
                                        Name <span>&nbsp;*</span></label>
                                    <div class="error-message" id="error-middle_name-1"><span>Please enter client
                                            middle name.</span></div>
                                </div>
                            </div>
                            <div class="new_input_row">
                                <div class="form-floating" style="width:100%;"><input class="form-control"
                                        type="text" name="last_name" id="Last_name-1" data-id="last_name"
                                        placeholder="Last Name" onBlur="HandleInput()" style="text-transform: capitalize;"><label class="form-label" for="last_name-1">Last
                                        Name <span>&nbsp;*</span></label>
                                    <div id="error-last_name-1" class="error-message"><span>Please enter client last
                                            name.</span></div>
                                </div>
                                <div class="form-floating" style="width:100%;"><select class="form-select"
                                        name="suffix" id="suffix-1" data-id="suffix">
                                        <option value="" selected="">Select a Suffix</option>

                                        <option value="Jr">Jr</option>
                                        <option value="Sr">Sr</option>
                                        <option value="II">II</option>
                                        <option value="Other">Other</option>
                                    </select><label class="form-label" for="suffix-1">Suffix</label>
                                    <div id="error-suffix-1" class="error-message"><span>Please select a
                                            suffix.</span></div>
                                </div>
                                <div id="specific_suffix-1" class="form-floating" style="width: 100%;display: none;">
                                    <input class="form-control" type="text" name="specify_suffix"
                                        id="specify_suffix-1" data-id="specify_suffix"
                                        placeholder="Specify Suffix"><label class="form-label"
                                        for="specify_suffix-1">Specify suffix</label>
                                    <div id="error-specify_suffix-1" class="error-message"><span>Please specify
                                            suffix.</span></div>
                                </div>
                            </div>
                            <div class="form-floating" style="width:100%;"><input class="form-control"
                                    name="birthdate" id="Client_birthdate-1" data-id="client_birthdate-1"
                                    placeholder="Birthdate" type="date"><label class="form-label"
                                    for="client_birthdate-1">Birthdate <span>&nbsp;*</span></label>
                                <div class="error-message" id="error-client_birthdate-1"><span>Please enter the
                                        client birthdate.</span></div>
                            </div>
                            <div class="form-floating" style="width:100%;">
<select class="form-select" id="Sex" name="sex">
    <option value=""selected="">Select Sex</option>
    <option value="male">Male</option>
    <option value="female">Female</option>
</select></textarea><label class="form-label"
                                    for="sex">Sex <span>&nbsp;*</span></label>
                                <div class="error-message" id="error-sex"><span>Please enter client
                                        address.</span></div>
                            </div>
                            <div class="form-floating" style="width:100%;"><input class="form-control"
                                    type="email" name="email" id="Client_email-1" data-id="client_email"
                                    placeholder="Email"><label class="form-label" for="client_email-1">Email
                                    Address <span>&nbsp;*</span></label>
                                <div class="error-message" id="error-client_email-1"><span>Please enter a valid
                                        email address.</span></div>
                            </div>
                            <div class="form-floating" style="width:100%;"><input class="form-control"
                                    type="tel" name="phone" id="User_phone-1" data-id="user_phone"
                                    placeholder="Phone Number" maxlength="11"><label class="form-label" for="user_phone-1">Phone
                                    Number <span>&nbsp;*</span></label>
                                <div class="error-message" id="error-user_phone-1"><span>Please enter a valid phone
                                        number.</span></div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer add_product_button">
                    <button class="btn clear_form" id="clear_form-1" aria-label="Clear Form" role="button"
                        type="button"><span class="clear_form_base">Clear Form</span></button>
                    <button class="btn submit_product" id="submit_client-1" type="submit" form="add_client_form-1" disabled><span
                            class="submit_product_base">Submit</span></button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="add_pet_record_modal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content add_pet_record_modal">
                <div class="modal-header">
                    <h1 class="modal-title">Add Pet Record</h1><button class="btn-close" aria-label="Close"
                        data-bs-dismiss="modal" type="button"></button>
                </div>
                <div class="modal-body" style="width:100%;">
                    <form action="{{ route('client.addpet')}}" method="POST" id="add_pet_form" class="add_client">
                        @csrf
                        <div class="mb-3 input_container">
                            <div class="new_input_row">
                                <div class="form-floating" style="width:100%;"><input class="form-control"
                                        type="text" id="pet_name" data-id="pet_name"
                                        placeholder="Pet Name"><label class="form-label" for="pet_name">Pet
                                        Name</label>
                                    <div id="error-pet_name" class="error-message"><span>Please enter pet
                                            name.</span></div>
                                </div>
                                <div class="form-floating" style="width:100%;"><select class="form-select"
                                        id="gender" data-id="gender" placeholder="Gender">
                                        <option value="" selected="">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select><label class="form-label" for="gender">Gender</label>
                                    <div id="error-gender" class="error-message"><span>Please select gender of
                                            pet.</span></div>
                                </div>
                            </div>
                            <div class="new_input_row">
                                <div class="form-floating" style="width:100%;"><select class="form-select"
                                        id="pet_type" data-id="pet_type" placeholder="Pet Type">
                                        <option value="" selected="">Select Pet Type</option>
                                        <option value="Dog">Dog</option>
                                        <option value="Cat">Cat</option>
                                    </select><label class="form-label" for="pet_type">Pet Type</label>
                                    <div id="error-pet_type" class="error-message"><span>Please select pet
                                            type</span></div>
                                </div>
                                <div class="form-floating" style="width:100%;"><select class="form-select"
                                        id="breed" data-id="breed" disabled="" placeholder="Breed">
                                        <option value="" selected="">Select a Pet Type first</option>
                                    </select><label class="form-label" for="breed">Breed</label>
                                    <div id="error-breed" class="error-message"><span>Please select a breed.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="new_input_row">
                                <div class="form-floating" style="width:100%;"><input class="form-control"
                                        id="pet_birthdate" data-id="pet_birthdate" placeholder="Birthdate"
                                        type="date"><label class="form-label"
                                        for="pet_birthdate">Birthdate</label>
                                    <div id="error-pet_birthdate" class="error-message"><span>Please enter the
                                            birthdate of pet.</span></div>
                                </div>
                                <div class="form-floating" style="width:100%;"><input class="form-control"
                                        type="text" id="age" data-id="age" disabled=""><label
                                        class="form-label" for="age">Age</label>
                                    <div id="error-age" class="error-message" style="color:red;"></div>
                                </div>
                            </div>
                            <div class="new_input_row">
                                <div class="form-floating" style="width:100%;"><input class="form-control"
                                        type="text" id="weight" data-id="weight"
                                        placeholder="Weight"><label class="form-label"
                                        for="weight">Weight</label>
                                    <div id="error-weight" class="error-message"><span>Please enter weight of
                                            pet.</span></div>
                                </div>
                                <div class="form-floating" style="width:100%;"><select class="form-select"
                                        id="sterilization_status" data-id="sterilization_status"
                                        placeholder="Sterilization Status">
                                        <option value="" selected="">Select Sterilization Status</option>
                                        <option value="None">None</option>
                                        <option value="Spayed">Spayed</option>
                                        <option value="Neutered">Neutered</option>
                                    </select><label class="form-label" for="sterilization_status">Sterilization
                                        Status</label>
                                    <div id="error-sterilization_status" class="error-message"><span>Please select a
                                            sterilization status.</span></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer add_product_button"><button class="btn clear_form" id="clear_form-2"
                        aria-label="Clear Form" role="button" type="button"><span
                            class="clear_form_base">Clear Form</span></button><button form="add_pet_form" class="btn submit_pet"
                        id="submit_pet" type="submit"><span class="submit_product_base">Submit</span></button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="add_pet_record_modal-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content add_pet_record_modal">
                <div class="modal-header">
                    <h1 class="modal-title">Add Pet Record</h1><button class="btn-close" aria-label="Close"
                        data-bs-dismiss="modal" type="button"></button>
                </div>
                <div class="modal-body" style="width:100%;">
                    <form id="add_pet_form-1" class="add_client"><img src="assets/img/image%2010.png">
                        <div class="mb-3 input_container">
                            <div class="new_input_row">
                                <div class="form-floating" style="width:100%;"><input class="form-control"
                                        type="text" id="pet_name-1" data-id="pet_name"
                                        placeholder="Pet Name"><label class="form-label" for="pet_name">Pet
                                        Name</label>
                                    <div id="error-pet_name-1" class="error-message"><span>Please enter pet
                                            name.</span></div>
                                </div>
                                <div class="form-floating" style="width:100%;"><select class="form-select"
                                        id="gender-1" data-id="gender" placeholder="Gender">
                                        <option value="" selected="">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select><label class="form-label" for="gender">Gender</label>
                                    <div id="error-gender-1" class="error-message"><span>Please select gender of
                                            pet.</span></div>
                                </div>
                            </div>
                            <div class="new_input_row">
                                <div class="form-floating" style="width:100%;"><select class="form-select"
                                        id="pet_type-1" data-id="pet_type" placeholder="Pet Type">
                                        <option value="" selected="">Select Pet Type</option>
                                        <option value="Dog">Dog</option>
                                        <option value="Cat">Cat</option>
                                    </select><label class="form-label" for="pet_type">Pet Type</label>
                                    <div id="error-pet_type-1" class="error-message"><span>Please select pet
                                            type</span></div>
                                </div>
                                <div class="form-floating" style="width:100%;"><select class="form-select"
                                        id="breed-1" data-id="breed" disabled="" placeholder="Breed">
                                        <option value="" selected="">Select a Pet Type first</option>
                                    </select><label class="form-label" for="breed">Breed</label>
                                    <div id="error-breed-1" class="error-message"><span>Please select a
                                            breed.</span></div>
                                </div>
                            </div>
                            <div class="new_input_row">
                                <div class="form-floating" style="width:100%;"><input class="form-control"
                                        id="pet_birthdate-1" data-id="pet_birthdate" placeholder="Birthdate"
                                        type="date"><label class="form-label"
                                        for="pet_birthdate">Birthdate</label>
                                    <div id="error-pet_birthdate-1" class="error-message"><span>Please enter the
                                            birthdate of pet.</span></div>
                                </div>
                                <div class="form-floating" style="width:100%;"><input class="form-control"
                                        type="text" id="age-1" data-id="age" disabled=""><label
                                        class="form-label" for="age">Age</label>
                                    <div id="error-age-1" class="error-message" style="color:red;"></div>
                                </div>
                            </div>
                            <div class="new_input_row">
                                <div class="form-floating" style="width:100%;"><input class="form-control"
                                        type="text" id="weight-1" data-id="weight"
                                        placeholder="Weight"><label class="form-label"
                                        for="weight">Weight</label>
                                    <div id="error-weight-1" class="error-message"><span>Please enter weight of
                                            pet.</span></div>
                                </div>
                                <div class="form-floating" style="width:100%;"><select class="form-select"
                                        id="sterilization_status-1" data-id="sterilization_status"
                                        placeholder="Sterilization Status">
                                        <option value="" selected="">Select Sterilization Status</option>
                                        <option value="None">None</option>
                                        <option value="Spayed">Spayed</option>
                                        <option value="Neutered">Neutered</option>
                                    </select><label class="form-label" for="sterilization_status">Sterilization
                                        Status</label>
                                    <div id="error-sterilization_status-1" class="error-message"><span>Please select
                                            a sterilization status.</span></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer add_product_button"><button class="btn clear_form" id="clear_form-3"
                        aria-label="Clear Form" role="button" type="button"><span
                            class="clear_form_base">Clear Form</span></button><button class="btn submit_pet"
                        id="submit_pet-1" type="submit"><span class="submit_product_base">Submit</span></button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="add_pet_record_modal-2">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content add_pet_record_modal">
                <div class="modal-header">
                    <h1 class="modal-title">Add Pet Record</h1><button class="btn-close" aria-label="Close"
                        data-bs-dismiss="modal" type="button"></button>
                </div>
                <div class="modal-body" style="width:100%;">
                    <form id="add_pet_form-2" class="add_client"><img src="assets/img/image%2010.png">
                        <div class="mb-3 input_container">
                            <div class="new_input_row">
                                <div class="form-floating" style="width:100%;"><input class="form-control"
                                        type="text" id="pet_name-2" data-id="pet_name"
                                        placeholder="Pet Name"><label class="form-label" for="pet_name">Pet
                                        Name</label>
                                    <div id="error-pet_name-2" class="error-message"><span>Please enter pet
                                            name.</span></div>
                                </div>
                                <div class="form-floating" style="width:100%;"><select class="form-select"
                                        id="gender-2" data-id="gender" placeholder="Gender">
                                        <option value="" selected="">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select><label class="form-label" for="gender">Gender</label>
                                    <div id="error-gender-2" class="error-message"><span>Please select gender of
                                            pet.</span></div>
                                </div>
                            </div>
                            <div class="new_input_row">
                                <div class="form-floating" style="width:100%;"><select class="form-select"
                                        id="pet_type-2" data-id="pet_type" placeholder="Pet Type">
                                        <option value="" selected="">Select Pet Type</option>
                                        <option value="Dog">Dog</option>
                                        <option value="Cat">Cat</option>
                                    </select><label class="form-label" for="pet_type">Pet Type</label>
                                    <div id="error-pet_type-2" class="error-message"><span>Please select pet
                                            type</span></div>
                                </div>
                                <div class="form-floating" style="width:100%;"><select class="form-select"
                                        id="breed-2" data-id="breed" disabled="" placeholder="Breed">
                                        <option value="" selected="">Select a Pet Type first</option>
                                    </select><label class="form-label" for="breed">Breed</label>
                                    <div id="error-breed-2" class="error-message"><span>Please select a
                                            breed.</span></div>
                                </div>
                            </div>
                            <div class="new_input_row">
                                <div class="form-floating" style="width:100%;"><input class="form-control"
                                        id="pet_birthdate-2" data-id="pet_birthdate" placeholder="Birthdate"
                                        type="date"><label class="form-label"
                                        for="pet_birthdate">Birthdate</label>
                                    <div id="error-pet_birthdate-2" class="error-message"><span>Please enter the
                                            birthdate of pet.</span></div>
                                </div>
                                <div class="form-floating" style="width:100%;"><input class="form-control"
                                        type="text" id="age-2" data-id="age" disabled=""><label
                                        class="form-label" for="age">Age</label>
                                    <div id="error-age-2" class="error-message" style="color:red;"></div>
                                </div>
                            </div>
                            <div class="new_input_row">
                                <div class="form-floating" style="width:100%;"><input class="form-control"
                                        type="text" id="weight-2" data-id="weight"
                                        placeholder="Weight"><label class="form-label"
                                        for="weight">Weight</label>
                                    <div id="error-weight-2" class="error-message"><span>Please enter weight of
                                            pet.</span></div>
                                </div>
                                <div class="form-floating" style="width:100%;"><select class="form-select"
                                        id="sterilization_status-2" data-id="sterilization_status"
                                        placeholder="Sterilization Status">
                                        <option value="" selected="">Select Sterilization Status</option>
                                        <option value="None">None</option>
                                        <option value="Spayed">Spayed</option>
                                        <option value="Neutered">Neutered</option>
                                    </select><label class="form-label" for="sterilization_status">Sterilization
                                        Status</label>
                                    <div id="error-sterilization_status-2" class="error-message"><span>Please select
                                            a sterilization status.</span></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer add_product_button"><button class="btn clear_form" id="clear_form-4"
                        aria-label="Clear Form" role="button" type="button"><span
                            class="clear_form_base">Clear Form</span></button><button class="btn submit_pet"
                        id="submit_pet-2" type="submit"><span class="submit_product_base">Submit</span></button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade show" role="dialog" tabindex="-1" id="edit_discard">
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
                <div class="modal-body discard_message">
                    <div>
                        <h1>Discard changes?</h1>
                        <p>Any unsaved progress will be lost.</p>
                    </div>
                </div>
                <div class="modal-footer discard_footer"><button class="btn return_btn" data-bs-dismiss="modal"
                        id="return_btn" type="button"><span class="return_btn_base">Return</span></button><button
                        class="btn discard_btn" id="discard_btn" type="button"><span
                            class="discard_btn_base">Discard</span></button></div>
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
    <div class="modal fade show" role="dialog" tabindex="-1" id="add_pet_success">
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
    <div class="modal fade show" role="dialog" tabindex="-1" id="archive_modal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content archive_modal">
                <div class="modal-header archive_header">
                    <div class="archive_icon_container"><span class="success_icon"><svg
                                xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                viewBox="0 0 32 32" fill="none">
                                <g clip-path="url(#clip0_5693_10845)">
                                    <path
                                        d="M16 10.6667V16M16 21.3333H16.0133M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 12.8174 26.7357 9.76516 24.4853 7.51472C22.2348 5.26428 19.1826 4 16 4C12.8174 4 9.76516 5.26428 7.51472 7.51472C5.26428 9.76516 4 12.8174 4 16Z"
                                        stroke="#045B62" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_5693_10845">
                                        <rect width="32" height="32" fill="white" />
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
                <div class="modal-footer discard_footer"><button class="btn return_btn" data-bs-dismiss="modal"
                        type="button"><span class="return_btn_base">Cancel</span></button><button
                        class="btn archive_confirm" id="archive_confirm_button" type="button"><span
                            class="archive_confirm_button_base">Archive</span></button></div>
            </div>
        </div>
    </div>
    <div class="modal fade show" role="dialog" tabindex="-1" id="archive_modal-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content archive_modal">
                <div class="modal-header archive_header">
                    <div class="archive_icon_container"><span class="success_icon"><svg
                                xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                viewBox="0 0 32 32" fill="none">
                                <g clip-path="url(#clip0_5693_10845)">
                                    <path
                                        d="M16 10.6667V16M16 21.3333H16.0133M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 12.8174 26.7357 9.76516 24.4853 7.51472C22.2348 5.26428 19.1826 4 16 4C12.8174 4 9.76516 5.26428 7.51472 7.51472C5.26428 9.76516 4 12.8174 4 16Z"
                                        stroke="#045B62" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_5693_10845">
                                        <rect width="32" height="32" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg></span></div>
                </div>
                <div class="modal-body archive_message">
                    <div>
                        <h1>Archive multiple clients?</h1>
                        <p>You can restore archived clients at a later time.</p>
                    </div>
                </div>
                <div class="modal-footer discard_footer"><button class="btn return_btn" data-bs-dismiss="modal"
                        type="button"><span class="return_btn_base">Cancel</span></button><button
                        class="btn archive_confirm" id="archive_confirm_button-1" type="button"><span
                            class="archive_confirm_button_base">Archive</span></button></div>
            </div>
        </div>
    </div>
    <div class="modal fade show" role="dialog" tabindex="-1" id="archive_modal-2">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content archive_modal">
                <div class="modal-header archive_header">
                    <div class="archive_icon_container"><span class="success_icon"><svg
                                xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                viewBox="0 0 32 32" fill="none">
                                <g clip-path="url(#clip0_5693_10845)">
                                    <path
                                        d="M16 10.6667V16M16 21.3333H16.0133M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 12.8174 26.7357 9.76516 24.4853 7.51472C22.2348 5.26428 19.1826 4 16 4C12.8174 4 9.76516 5.26428 7.51472 7.51472C5.26428 9.76516 4 12.8174 4 16Z"
                                        stroke="#045B62" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_5693_10845">
                                        <rect width="32" height="32" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg></span></div>
                </div>
                <div class="modal-body archive_message">
                    <div>
                        <h1>Archive '(Pet Name)'?</h1>
                        <p>You can restore archived pets at a later time.</p>
                    </div>
                </div>
                <div class="modal-footer discard_footer"><button class="btn return_btn" data-bs-dismiss="modal"
                        type="button"><span class="return_btn_base">Cancel</span></button><button
                        class="btn archive_confirm" id="archive_confirm_button-2" type="button"><span
                            class="archive_confirm_button_base">Archive</span></button></div>
            </div>
        </div>
    </div>
    <div class="modal fade show" role="dialog" tabindex="-1" id="signup_error">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content success_modal">
				<div class="modal-header success_header">
					<div class="failed_icon_container"><span class="success_icon"><svg
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
				<div class="modal-body success_message">
					<div>
						<h1>Adding Client Failed</h1>
						<p>Please use a different email address &nbsp;</p>
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
						</svg></span>
					</div>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @if ($errors->has('email'))
    <script>
        $(document).ready(function() {
            $('#signup_error').modal('show');
            setTimeout(function() {
                $('#signup_error').hide();
            }, 2000);
        });
    </script>
    @endif
    @if (session('success'))
    <script>
        $(document).ready(function() {
            $('#add_client_success').show();
            setTimeout(function() {
                $('#add_client_success').hide();
            }, 2000);
        });
    </script>
    @endif
    <script>
    $(document).ready(function() {
        $('.editButton').click(function() {
            const id = $(this).data('container-id');
            $('#editId').val(id);
            const clientData = {
                'first_name' :$(this).data('first-name'),
                'middle_name' :$(this).data('middle-name'),
                'last_name' :$(this).data('last-name'),
                'suffix' :$(this).data('suffix'),
                'birthdate' :$(this).data('birthdate'),
                'email' :$(this).data('email'),
                'phone' :$(this).data('phone'),
            };      
            $('#edit_first_name').val(clientData.first_name);
            $('#edit_middle_name').val(clientData.middle_name);
            $('#edit_last_name').val(clientData.last_name);
            $('#edit_suffix').val(clientData.suffix);
            $('#edit_birthdate').val(clientData.birthdate);
            $('#edit_email').val(clientData.email);
            $('#edit_phone').val(clientData.phone);
        });
        $('.viewButton').click(function() {
            const id = $(this).data('container-id');
            $('#editId').val(id);
            $('#clientId').val(id);
            $.ajax({
                type: 'GET',
				url: `/admin/client/viewpet/${id}`,// Your route URL
                success: function(data) {
                $('#pet_card_container').empty();
                console.log('Success: Data received', data);
                if (data.length === 0) {
                    $('#pet_empty_state_container').show();
                } else {
                    $('#pet_empty_state_container').hide();
                    $('#pet_card_container').css('display', 'flex');
                    $.each(data, function(index, petInfo) {
                        var newItem = 
                        '<div class="card pet_card">' +
                        '<div class="card-body pet_card_body">' +
                            '<div class="pet_detail_header">' +
                            '<div class="pet_detail_heading_text_container">' +
                                '<h1>' + petInfo.pet.name + '</h1>' +
                                '<p>' + petInfo.pet.breed + '</p>' + 
                            '</div>' +
                            '</div>' +
                            '<div class="pet_detail_body">' +
                                '<div class="pet_upper_detail">' +
                                    '<div class="pet_age_container">' +
                                    '<h1>' + 'Gender' + '</h1>' +
                                    '<p>' + petInfo.pet.gender + '</p>' +
                                    '</div>' +
                                    '<div class="pet_age_container">' +
                                    '<h1>' + 'Age' + '</h1>' +
                                    '<p>' + petInfo.pet.age + '</p>' +
                                    '</div>' +
                                '</div>' +
                                '<div class="pet_lower_detail">' +
                                    '<div class="pet_weight_container">' +
                                    '<h1>' + 'Weight' + '</h1>' +
                                    '<p>' + petInfo.pet.weight + '</p>' +
                                    '</div>' +
                                    '<div class="pet_sterilization_status_container">' +
                                    '<h1>' + 'Sterilization Status' + '</h1>' +
                                    '<p>' + petInfo.pet.sterilization + '</p>' +
                                    '</div>' +
                                '</div>' +
                            '</div>' +
                        '</div>' +
                        '</div>';
                        $('#pet_card_container').append(newItem);
                    });
                }
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }

            });
            const clientData = {
                'first_name' :$(this).data('first-name'),
                'middle_name' :$(this).data('middle-name'),
                'last_name' :$(this).data('last-name'),
                'suffix' :$(this).data('suffix'),
                'birthdate' :$(this).data('birthdate'),
                'email' :$(this).data('email'),
                'phone' :$(this).data('phone'),
                'gender':$(this).data('gender'),
            };      
            $('.client_name h1').text(clientData.first_name + ' ' + clientData.middle_name + ' ' + clientData.last_name + ' ' + clientData.suffix);
            $('.client_birthdate p').text(clientData.birthdate);
            $('.client_email-3 p').text(clientData.email);
            $('.user_phone-3 p').text(clientData.phone);
            $('.client_gender p').text(clientData.gender);
            $('#edit_first_name').val(clientData.first_name);
            $('#edit_middle_name').val(clientData.middle_name);
            $('#edit_last_name').val(clientData.last_name);
            $('#edit_suffix').val(clientData.suffix);
            $('#edit_birthdate').val(clientData.birthdate);
            $('#edit_email').val(clientData.email);
            $('#edit_phone').val(clientData.phone);
        });
        $('.archiveButton').click(function() {
            const id = $(this).data('container-id');
            $('#archiveId').val(id);
        });

    });
    </script>
<script>
    var SelectAll = document.getElementById("SelectAll");
    var tableBody = document.getElementById('client_table_body');
    var rowCheckboxes = tableBody.querySelectorAll("input[type='checkbox']");

    // Function to toggle all checkboxes
    function toggleAllCheckboxes(checked) {
        rowCheckboxes.forEach(function (checkbox) {
            checkbox.checked = checked;
        });
    }

    // Click event listener for "SelectAll"
    SelectAll.addEventListener("click", function () {
        toggleAllCheckboxes(SelectAll.checked);
    });

    // Click event listener for individual checkboxes
    rowCheckboxes.forEach(function (checkbox) {
        checkbox.addEventListener("click", function () {
            var allChecked = true;
            rowCheckboxes.forEach(function (cb) {
                if (!cb.checked) {
                    allChecked = false;
                }
            });
            SelectAll.checked = allChecked;
        });
    });
</script>

    <script>
function enableSubmitBtn() {
  var first_name1 = document.getElementById("First_name-1").value;
  var middle_name1 = document.getElementById("Middle_name-1").value;
  var last_name1 = document.getElementById("Last_name-1").value;
  var client_birthdate1 = document.getElementById("Client_birthdate-1").value;
  var sex = document.getElementById("Sex").value;
  var client_email1 = document.getElementById("Client_email-1").value;
  var user_phone1 = document.getElementById("User_phone-1").value;

  var submit_Client1 = document.getElementById("submit_client-1");

  // Add additional validation conditions as needed
  if (
    first_name1.trim() !== "" &&
    middle_name1.trim() !== "" &&
    last_name1.trim() !== "" &&
    client_birthdate1.trim() !== "" &&
    sex.trim() !== "" &&
    user_phone1.trim().length === 11 && // Check for 11 digits
    (client_email1.includes("@gmail.com") || client_email.includes("@yahoo.com")) // Check for email format
  ) {
    submit_Client1.removeAttribute("disabled");
    submit_Client1.classList.remove("disabled");
  } else {
    submit_Client1.setAttribute("disabled", true);
    submit_Client1.classList.add("disabled");
  }

  // Logging values for debugging
  console.log('first_name:', first_name1);
  console.log('middle_name:', middle_name1);
  console.log('last_name:', last_name1);
  console.log('client_birthdate:', client_birthdate1);
  console.log('sex:', sex);
  console.log('client_email:', client_email1);
  console.log('user_phone:', user_phone1);
  console.log('submit_Client disabled:', submit_Client1.disabled);
}

document.getElementById("First_name-1").addEventListener("input", enableSubmitBtn);
document.getElementById("Middle_name-1").addEventListener("input", enableSubmitBtn);
document.getElementById("Last_name-1").addEventListener("input", enableSubmitBtn);
document.getElementById("Client_birthdate-1").addEventListener("input", enableSubmitBtn);
document.getElementById("Sex").addEventListener("input", enableSubmitBtn);
document.getElementById("Client_email-1").addEventListener("input", enableSubmitBtn);
document.getElementById("User_phone-1").addEventListener("input", enableSubmitBtn);


 var user_phone1 = document.getElementById('user_phone-1');

 function PhoneNumberInputLimit(inputElement) {
    inputElement.addEventListener('input', function () {
        if (this.value.length > 11) {
        this.value = this.value.slice(0, 11);
    }

    // Ensure the first two characters are '09'
    if (this.value.length >= 2 && this.value.slice(0, 2) !== '09') {
        // Adjust the input to start with '09'
        this.value = '09' + this.value.slice(2);
    }
    });

}

    
PhoneNumberInputLimit(user_phone1); 

document.getElementById("suffix-1").addEventListener("change", function () {
        var specificSuffixInput = document.getElementById("specific_suffix-1");

        // If the selected value is "Other", show the specific_suffix-1 input
        if (this.value === "Other") {
            specificSuffixInput.style.display = "block";
        } else {
            specificSuffixInput.style.display = "none";
        }
    });


    document.getElementById("suffix-4").addEventListener("change", function () {
        var specificSuffixInput = document.getElementById("specific_suffix-1");

        // If the selected value is "Other", show the specific_suffix-1 input
        if (this.value === "Other") {
            specificSuffixInput.style.display = "block";
        } else {
            specificSuffixInput.style.display = "none";
        }
    });


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
        function submitForm(){
            document.getElementById('searchForm').submit();
        }


        function enableSaveChangesButton() {
            var edit_first_name = document.getElementById("edit_first_name").value;
            var edit_middle_name = document.getElementById("edit_middle_name").value;
            var edit_last_name = document.getElementById("edit_last_name").value;
            var edit_suffix = document.getElementById("edit_suffix").value;
            var edit_birthdate = document.getElementById("edit_birthdate").value;
            var edit_client_address = document.getElementById("edit_client_address").value;
            var edit_email = document.getElementById("edit_email").value;
            var edit_phone = document.getElementById("edit_phone").value;

            var edit_save_changes = document.getElementById("edit_save_changes");

            if (
                edit_first_name.trim() !== "" ||
                edit_middle_name.trim() !== "" ||
                edit_last_name.trim() !== "" ||
                edit_suffix.trim() !== "" ||
                edit_birthdate.trim() !== "" ||
                edit_client_address.trim() !== "" ||
                edit_email.trim() !== "" ||
                edit_phone.trim() !== ""
            ) {
                edit_save_changes.disabled = false;
            } else {
                edit_save_changes.disabled = true;
            }
        }

        // Attach event listeners to input fields

        document.getElementById("edit_first_name").addEventListener("change", enableSaveChangesButton);
        document.getElementById("edit_middle_name").addEventListener("change", enableSaveChangesButton);
        document.getElementById("edit_last_name").addEventListener("change", enableSaveChangesButton);
        document.getElementById("edit_suffix").addEventListener("change", enableSaveChangesButton);
        document.getElementById("edit_birthdate").addEventListener("change", enableSaveChangesButton);
        document.getElementById("edit_client_address").addEventListener("change", enableSaveChangesButton);
        document.getElementById("edit_email").addEventListener("change", enableSaveChangesButton);
        document.getElementById("edit_phone").addEventListener("change", enableSaveChangesButton);


    </script>
    

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/sidebar.js') }}"></script>
    <script src="{{ asset('assets/js/client.js') }}"></script>
    <script src="{{ asset('assets/js/sidebartry.js') }}"></script>

</body>

</html>