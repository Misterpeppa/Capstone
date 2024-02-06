<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" />
    <title>Admin | Inventory</title>
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
            $activeTab = 'inventory'; // Set the active tab
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
                <div id="inventory_container" class="inventory_container" >
                    <div id="inventory_header" class="inventory_header">
                        <div class="d-flex flex-column justify-content-center align-items-start">
                            <h1>Inventory</h1>
                        </div>
                        <div class="btn-group split_btn" id="split_btn"><button class="btn add_Product_btn"
                                id="add_Product_btn" type="button"><span class="add_Product_btn_base">Add
                                    Product</span></button><button
                                class="btn dropdown-toggle dropdown-toggle-split add_product_dropdown"
                                data-bs-toggle="dropdown" aria-expanded="false" type="button"></button>
                            <div class="dropdown-menu"><a class="dropdown-item" id="add_Product_btn_1"
                                    data-bs-toggle="modal">Add Product</a><a class="dropdown-item"
                                    href="{{ route('report.inventory') }}">Generate Report</a></div>
                        </div>
                    </div>
                    <div id="prod_info_header" class="prod_info_header">
                        <div class="d-flex flex-column justify-content-center align-items-start">
                            <h1>Product Information</h1>
                        </div>
                    </div>
                    <div id="view_product" class="view_product">
                        <div class="view_product_header"><button class="btn view_back_btn" type="button"><span
                                    class="view_back_btn_base"><svg xmlns="http://www.w3.org/2000/svg" width="25"
                                        height="24" viewBox="0 0 25 24" fill="none">
                                        <g clip-path="url(#clip0_5345_14456)" filter="url(#filter0_d_5345_14456)">
                                            <path d="M5.5 12H19.5M5.5 12L11.5 18M5.5 12L11.5 6" stroke="#045B62"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                        <defs>
                                            <filter id="filter0_d_5345_14456" x="-1.5" y="0" width="28"
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
                        <div class="product_info_container">
                            <div class="product_info">
                                <div class="product_details">
                                    <div class="prod_detail_head">
                                        <div class="prod_head_info">
                                            <h1></h1>
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="prod_detail_body">
                                        <div class="batchno_barcode">
                                            <div class="batch_number">
                                                <h1>Batch Number</h1>
                                                <p></p>
                                            </div>
                                            <div class="bar_code">
                                                <h1>Product Code</h1>
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="manu_expi_stocked_date">
                                            <div class="manufactured_date">
                                                <h1>Manufactured Date</h1>
                                                <p></p>
                                            </div>
                                            <div class="expiration_date">
                                                <h1>Expiration Date</h1>
                                                <p></p>
                                            </div>
                                            <div class="date_stocked">
                                                <h1>Date Stocked</h1>
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="product_Description">
                                            <h1>Product Description</h1>
                                            <p></p>
                                        </div>
                                    </div>
                                </div><button class="btn edit_prod_detail" id="edit_prod_detail"
                                    type="button"><span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none">
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
                        </div>
                    </div>
                    <div id="InventoryContainer" class="InventoryContainer">
                    <div class="container_header">
                    <form action="" method="GET" role="search" id="searchForm">
                            <div class="left_part_product_header">
                              <div class="search_container">
                                  <input type="text" class="search_input" name="q"
                                      value="{{ request('q') }}" placeholder="Search Product">
                                  <!-- Other input fields or elements for pagination -->
                                  <input type="hidden" id="pageForm" name="page"
                                      value="{{ request('page') }}">
                                  <input type="hidden" id="perPageForm" name="perPage"
                                      value="{{ request('perPage') }}">


                                        </div>
                                        <button type="submit" form="approvedForm" class="btn filter_btn fw-bold"><i class="fa-solid fa-magnifying-glass"></i><span class="filter_btn_base">Search</span></button>
                                        <div class="dropdown">
                                            <button class="filter_btn dropdown-toggle fw-bold" type="button"
                                                id="dropdownMenuButton1" data-bs-toggle="dropdown" data-bs-auto-close="false"
                                                aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="26" viewBox="0 0 24 26" fill="none">
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
                                                </svg><span class="filter_btn_base">Sort By</span>
                                            </button>
                                            <ul class="dropdown-menu">
                                      <li class="dropdown-item ">
                                          <input class="form-check-input me-1" type="radio" id = "radio1"
                                              name="sortItems"{{ request()->input('sortItems', '0') == '0' ? 'checked' : '' }}  value="0">
                                          <label class="form-check-label ms-1 fs-6" for="radio1">
                                              Product Name
                                      </li>
                                      <li class="dropdown-item">
                                          <input class="form-check-input me-1" type="radio" id = "radio2"
                                              name="sortItems" {{ request()->input('sortItems') == '1' ? 'checked' : '' }} value="1">
                                          <label class="form-check-label ms-1 fs-6" for="radio2">
                                              Category
                                      </li>
                                      <li class="dropdown-item">
                                          <input class="form-check-input me-1" type="radio" id = "radio3"
                                              name="sortItems" {{ request()->input('sortItems') == '2' ? 'checked' : '' }} value="2">
                                          <label class="form-check-label ms-1 fs-6" for="radio3">
                                              On Hand
                                      </li>
                                      <li class="dropdown-item">
                                          <input class="form-check-input me-1" type="radio" id = "radio4"
                                              name="sortItems" {{ request()->input('sortItems') == '3' ? 'checked' : '' }} value="3">
                                          <label class="form-check-label ms-1 fs-6" for="radio4">
                                              Date Stocked
                                      </li>
                                      <li>
                                        <li class="dropdown-item">
                                          <input class="form-check-input me-1" type="radio" id = "radio5"
                                              name="sortItems" {{ request()->input('sortItems') == '4' ? 'checked' : '' }} value="4">
                                          <label class="form-check-label ms-1 fs-6" for="radio5">
                                              Expiration Date
                                      </li>
                                      <li>
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
                                        <div class="row">
                                            <div class="col-md-6">
                                                <button class="btn btn-outline-secondary btn-sm me-3">Cancel</button>
                                            </div>
                                            <div class="col-md-6 text-center">
                                                <button type="submit" form="searchForm" class="btn btn-primary btn-sm ms-3">Apply</button>
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
                                <div><svg xmlns="http://www.w3.org/2000/svg" width="176" height="110"
                                        viewBox="0 0 176 110" fill="none">
                                        <g clip-path="url(#clip0_3910_24046)">
                                            <path
                                                d="M135.118 83.0864C142.305 65.1185 140.131 45.0554 130.862 29.6466L33.8338 43.0813L126.818 23.7028C87.629 -25.1661 11.3536 7.24805 18.7062 68.9485L135.118 83.0864Z"
                                                fill="#E6E6E6" />
                                            <path d="M139.397 63.2246H15.7821V101.717H139.397V63.2246Z"
                                                fill="#004D53" />
                                            <path
                                                d="M50.2572 58.5303C51.3663 59.3916 51.7718 59.6696 52.008 59.6343C63.4515 62.9667 53.4196 66.872 47.8595 60.2429L50.2572 58.5303Z"
                                                fill="#FFB8B8" />
                                            <path
                                                d="M12.4962 93.7372V101.561L18.1292 101.248L16.5646 93.1113L12.4962 93.7372Z"
                                                fill="#FFB8B8" />
                                            <path
                                                d="M43.7911 93.7372V101.561L38.158 101.248L39.7228 93.1113L43.7911 93.7372Z"
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
                                            <path d="M131.999 67.8682H104.698V80.8183H131.999V67.8682Z"
                                                fill="white" />
                                            <path d="M126.836 70.5806H109.861V72.1334H126.836V70.5806Z"
                                                fill="#E6E6E6" />
                                            <path d="M126.836 73.5669H109.861V75.1197H126.836V73.5669Z"
                                                fill="#E6E6E6" />
                                            <path d="M126.836 76.5527H109.861V78.1055H126.836V76.5527Z"
                                                fill="#E6E6E6" />
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
                                    <h1>NO PRODUCTS YET!</h1>
                                    <div class="empty_state_paragraph_container">
                                        <p>Looks like you have an empty inventory.</p>
                                        <p>You can add products by clicking the button below.</p>
                                    </div>
                                </div>
                            </div><button id="add_product" class="btn add_product" type="button"><span
                                    class="add_product_base"><svg xmlns="http://www.w3.org/2000/svg" width="25"
                                        height="24" viewBox="0 0 25 24" fill="none">
                                        <g clip-path="url(#clip0_5334_16405)" filter="url(#filter0_d_5334_16405)">
                                            <path d="M12.5 5V19M5.5 12H19.5" stroke="white" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                        <defs>
                                            <filter id="filter0_d_5334_16405" x="-1.5" y="0" width="28"
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
                                                    result="effect1_dropShadow_5334_16405" />
                                                <feBlend mode="normal" in="SourceGraphic"
                                                    in2="effect1_dropShadow_5334_16405" result="shape" />
                                            </filter>
                                            <clipPath id="clip0_5334_16405">
                                                <rect width="24" height="24" fill="white"
                                                    transform="translate(0.5)" />
                                            </clipPath>
                                        </defs>
                                    </svg> Add Product</span></button>
                        </div>
                        <div id="product_table_container" class="w-100">
                            <table class="table table-responsive mt-3 w-100" >
                                <thead>
                                    <tr>
                                        <th><input id="SelectAll" type="radio" class="checkbox"></th>
                                        <th>Product Name</th>
                                        <th>Category</th>
                                        <th>On Hand</th>
                                        <th>Date Stocked</th>
                                        <th>Expiration Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="inventory_table_body">
                                  
                                    @foreach ($products as $product)
                                    
                                        @php
                                            $medBatch = $productBatch->where('med_id', $product->id)->first();
                                        
                                        @endphp
                               
                                        <tr data-row-id="{{ $product->id }}">
                                          <td><input type="radio" class="checkbox"></td>
                                          <td>{{ $product->item_name }}</td>
                                          <td>{{ $product->product_type }}</td>
                                          <td>{{ $product->info_quantity }}</td>
                                          <td>{{ $product->date_stocked }}</td>
                                          <td>{{ $product->expiration_date }}</td>
                                          <td class="status-td"></td>
                                          <td class="dropdown button-action">
                                            <button class="dropbtn" id="dropbtn" style="background-color: transparent; border:none;"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                <path d="M9 5C7.61929 5 6.5 3.88071 6.5 2.5C6.5 1.11929 7.61929 -6.03528e-08 9 0C10.3807 6.03528e-08 11.5 1.11929 11.5 2.5C11.5 3.88071 10.3807 5 9 5Z" fill="#045B62"/>
                                                <path d="M9 11.5C7.61929 11.5 6.5 10.3807 6.5 9C6.5 7.61929 7.61929 6.5 9 6.5C10.3807 6.5 11.5 7.61929 11.5 9C11.5 10.3807 10.3807 11.5 9 11.5Z" fill="#045B62"/>
                                                <path d="M9 18C7.61929 18 6.5 16.8807 6.5 15.5C6.5 14.1193 7.61929 13 9 13C10.3807 13 11.5 14.1193 11.5 15.5C11.5 16.8807 10.3807 18 9 18Z" fill="#045B62"/>
                                                </svg></button>
                                        <div class="dropdown-menu"><div class="button-group">
                                        <button
		            data-action="AddStock" 
                                            data-product-type="{{ $product->product_type }}"
                                            data-product-id="{{ $product->id }}"
                                                class="btn border-0 addStock"style="color:gray"><div class="action_button_text"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M7 10H13M10 7V13M1 10C1 11.1819 1.23279 12.3522 1.68508 13.4442C2.13738 14.5361 2.80031 15.5282 3.63604 16.364C4.47177 17.1997 5.46392 17.8626 6.55585 18.3149C7.64778 18.7672 8.8181 19 10 19C11.1819 19 12.3522 18.7672 13.4442 18.3149C14.5361 17.8626 15.5282 17.1997 16.364 16.364C17.1997 15.5282 17.8626 14.5361 18.3149 13.4442C18.7672 12.3522 19 11.1819 19 10C19 8.8181 18.7672 7.64778 18.3149 6.55585C17.8626 5.46392 17.1997 4.47177 16.364 3.63604C15.5282 2.80031 14.5361 2.13738 13.4442 1.68508C12.3522 1.23279 11.1819 1 10 1C8.8181 1 7.64778 1.23279 6.55585 1.68508C5.46392 2.13738 4.47177 2.80031 3.63604 3.63604C2.80031 4.47177 2.13738 5.46392 1.68508 6.55585C1.23279 7.64778 1 8.8181 1 10Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg> Add Stock</div></button>

                                            <button
		                                data-action="DeductStock" 
                                            data-product-type="{{ $product->product_type }}"
                                            data-product-id="{{ $product->id }}"
                                                class="btn border-0 addStock"style="color:gray"><div class="action_button_text"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-minus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M5 12l14 0" />
</svg>


 Deduct Stock</div></button>
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
                                                data-item_name="{{ $product->item_name }}" data-product_code="{{ $product->product_code}}"
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
                                                data-product-type="{{ $product->product_type }}"
                                                data-product-id="{{ $product->id }}"
                                                class="btn border-0 archiveButton"style="color:gray"><div class="action_button_text"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18" fill="none">
                                                <path d="M17 5C17.5304 5 18.0391 4.78929 18.4142 4.41421C18.7893 4.03914 19 3.53043 19 3C19 2.46957 18.7893 1.96086 18.4142 1.58579C18.0391 1.21071 17.5304 1 17 1H3C2.46957 1 1.96086 1.21071 1.58579 1.58579C1.21071 1.96086 1 2.46957 1 3C1 3.53043 1.21071 4.03914 1.58579 4.41421C1.96086 4.78929 2.46957 5 3 5M17 5H3M17 5V15C17 15.5304 16.7893 16.0391 16.4142 16.4142C16.0391 16.7893 15.5304 17 15 17H5C4.46957 17 3.96086 16.7893 3.58579 16.4142C3.21071 16.0391 3 15.5304 3 15V5M8 9H12" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg> Archive</div></button>
                                        </div>
                                            
                                        </div>

                                        </td>
                                        
                                         

                                        </tr>
                                        {{-- @if ($medBatch)
                                            <tr data-row-id="{{ $medInfo->id }}">
                                                <td><input type="checkbox"></td>
                                                <td>{{ $medInfo->item_name }}</td>
                                                <td>{{ $medInfo->product_type }}</td>
                                                <td>{{ $medInfo->quantity }}</td>
                                                <td>{{ $medInfo->expiration_date }}</td>
                                                <td>{{ $medBatch->expiration_date }}</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="dropbtn">Actions</button>
                                                        <div class="dropdown-menu" id="dropdown-content">
                                                            <button data-action="AddStock" id="addStock"
                                                                data-product-type="{{ $medInfo->product_type }}"
                                                                data-product-id="{{ $medInfo->id }}">
                                                                <div class="action_button_text"
                                                                    id="action_button_text"><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none">
                                                                        <g clip-path="url(#clip0_4467_23446)">
                                                                            <path
                                                                                d="M9 12H15M12 9V15M3 12C3 13.1819 3.23279 14.3522 3.68508 15.4442C4.13738 16.5361 4.80031 17.5282 5.63604 18.364C6.47177 19.1997 7.46392 19.8626 8.55585 20.3149C9.64778 20.7672 10.8181 21 12 21C13.1819 21 14.3522 20.7672 15.4442 20.3149C16.5361 19.8626 17.5282 19.1997 18.364 18.364C19.1997 17.5282 19.8626 16.5361 20.3149 15.4442C20.7672 14.3522 21 13.1819 21 12C21 10.8181 20.7672 9.64778 20.3149 8.55585C19.8626 7.46392 19.1997 6.47177 18.364 5.63604C17.5282 4.80031 16.5361 4.13738 15.4442 3.68508C14.3522 3.23279 13.1819 3 12 3C10.8181 3 9.64778 3.23279 8.55585 3.68508C7.46392 4.13738 6.47177 4.80031 5.63604 5.63604C4.80031 6.47177 4.13738 7.46392 3.68508 8.55585C3.23279 9.64778 3 10.8181 3 12Z"
                                                                                stroke="#1C1C1C" stroke-opacity="0.7"
                                                                                stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_4467_23446">
                                                                                <rect width="24" height="24"
                                                                                    fill="white" />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>Add Stock</div>
                                                            </button>
                                                            <button data-action="View" class="viewButton"
                                                                data-product-type="{{ $medInfo->product_type }}"
                                                                data-product-id="{{ $medInfo->id }}">
                                                                <div class="action_button_text"><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none">
                                                                        <g clip-path="url(#clip0_1917_11689)">
                                                                            <path
                                                                                d="M10 12C10 12.5304 10.2107 13.0391 10.5858 13.4142C10.9609 13.7893 11.4696 14 12 14C12.5304 14 13.0391 13.7893 13.4142 13.4142C13.7893 13.0391 14 12.5304 14 12C14 11.4696 13.7893 10.9609 13.4142 10.5858C13.0391 10.2107 12.5304 10 12 10C11.4696 10 10.9609 10.2107 10.5858 10.5858C10.2107 10.9609 10 11.4696 10 12Z"
                                                                                stroke="#1C1C1C" stroke-opacity="0.7"
                                                                                stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path
                                                                                d="M21 12C18.6 16 15.6 18 12 18C8.4 18 5.4 16 3 12C5.4 8 8.4 6 12 6C15.6 6 18.6 8 21 12Z"
                                                                                stroke="#1C1C1C" stroke-opacity="0.7"
                                                                                stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_1917_11689">
                                                                                <rect width="24" height="24"
                                                                                    fill="white" />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>View</div>
                                                            </button>
                                                            <button data-action="Edit" id="editButton"
                                                                data-product-type="{{ $medInfo->product_type }}"
                                                                data-product-id="{{ $medInfo->id }}">
                                                                <div class="action_button_text"><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none">
                                                                        <g clip-path="url(#clip0_4467_23582)">
                                                                            <path
                                                                                d="M13.5 6.5L17.5 10.5M4 20.0001H8L18.5 9.50006C19.0304 8.96963 19.3284 8.2502 19.3284 7.50006C19.3284 6.74991 19.0304 6.03049 18.5 5.50006C17.9696 4.96963 17.2501 4.67163 16.5 4.67163C15.7499 4.67163 15.0304 4.96963 14.5 5.50006L4 16.0001V20.0001Z"
                                                                                stroke="#1C1C1C" stroke-opacity="0.7"
                                                                                stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_4467_23582">
                                                                                <rect width="24" height="24"
                                                                                    fill="white" />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>Edit</div>
                                                            </button>
                                                            <button data-action="Archive" id="archive"
                                                                data-product-type="{{ $medInfo->product_type }}"
                                                                data-product-id="{{ $medInfo->id }}">
                                                                <div class="action_button_text"><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none">
                                                                        <g clip-path="url(#clip0_4467_23688)">
                                                                            <path
                                                                                d="M19 8C19.5304 8 20.0391 7.78929 20.4142 7.41421C20.7893 7.03914 21 6.53043 21 6C21 5.46957 20.7893 4.96086 20.4142 4.58579C20.0391 4.21071 19.5304 4 19 4H5C4.46957 4 3.96086 4.21071 3.58579 4.58579C3.21071 4.96086 3 5.46957 3 6C3 6.53043 3.21071 7.03914 3.58579 7.41421C3.96086 7.78929 4.46957 8 5 8M19 8H5M19 8V18C19 18.5304 18.7893 19.0391 18.4142 19.4142C18.0391 19.7893 17.5304 20 17 20H7C6.46957 20 5.96086 19.7893 5.58579 19.4142C5.21071 19.0391 5 18.5304 5 18V8M10 12H14"
                                                                                stroke="#1C1C1C" stroke-opacity="0.7"
                                                                                stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_4467_23688">
                                                                                <rect width="24" height="24"
                                                                                    fill="white" />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>Archive</div>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                        @endif --}}
                                    @endforeach
                                    <!-- Add this section inside the <tbody> element of your table -->
                        
                                </tbody>
                            </table>
                            


                        </div>


                        <div id="batch_product" class="w-100" class="w-100" style="overflow: auto; display: none;">
                            <table class="table table-responsive mt-3 w-100">
                                <thead>
                                    <tr>
                                        <th>Batch Number</th>
                                        <th>Product Code</th>
                                        <th>Quantity Left</th>
                                        <th>Date Stocked</th>
                                        <th>Expiration Date</th>
                                        <th>Manufacturing Date</th>
                                    </tr>
                                </thead>
                                <tbody id="batch_table_body">
                                    <tr>
                                        <td><input type="radio"></td>
                                        <td>Cell 2</td>
                                        <td>Cell 2</td>
                                        <td>Cell 2</td>
                                        <td>Cell 2</td>
                                        <td>Cell 2</td>
                                        <td>Cell 2</td>
                                        <td class="dropdown button-action">
                                            <button class="dropbtn" id="dropbtn"  style="background-color: transparent; border:none;"
                                                            aria-expanded="false" data-bs-toggle="dropdown"
                                                            type="button"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                <path d="M9 5C7.61929 5 6.5 3.88071 6.5 2.5C6.5 1.11929 7.61929 -6.03528e-08 9 0C10.3807 6.03528e-08 11.5 1.11929 11.5 2.5C11.5 3.88071 10.3807 5 9 5Z" fill="#045B62"/>
                                                <path d="M9 11.5C7.61929 11.5 6.5 10.3807 6.5 9C6.5 7.61929 7.61929 6.5 9 6.5C10.3807 6.5 11.5 7.61929 11.5 9C11.5 10.3807 10.3807 11.5 9 11.5Z" fill="#045B62"/>
                                                <path d="M9 18C7.61929 18 6.5 16.8807 6.5 15.5C6.5 14.1193 7.61929 13 9 13C10.3807 13 11.5 14.1193 11.5 15.5C11.5 16.8807 10.3807 18 9 18Z" fill="#045B62"/>
                                                </svg></button>
                                        <div class="dropdown-menu" ><div class="button-group">
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
                                                data-item_name="{{ $product->item_name }}" data-product_code="{{ $product->product_code}}"
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
                                                class="btn border-0 archiveButton"style="color:gray"><div class="action_button_text"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18" fill="none">
                                                <path d="M17 5C17.5304 5 18.0391 4.78929 18.4142 4.41421C18.7893 4.03914 19 3.53043 19 3C19 2.46957 18.7893 1.96086 18.4142 1.58579C18.0391 1.21071 17.5304 1 17 1H3C2.46957 1 1.96086 1.21071 1.58579 1.58579C1.21071 1.96086 1 2.46957 1 3C1 3.53043 1.21071 4.03914 1.58579 4.41421C1.96086 4.78929 2.46957 5 3 5M17 5H3M17 5V15C17 15.5304 16.7893 16.0391 16.4142 16.4142C16.0391 16.7893 15.5304 17 15 17H5C4.46957 17 3.96086 16.7893 3.58579 16.4142C3.21071 16.0391 3 15.5304 3 15V5M8 9H12" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg> Archive</div></button>
                                        </div>
                                            
                                        </div>

                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>

                        

                        

                        <div class="pagination" id="pagination">
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
                                <div class="pagination-pages">
                                    {{ $products->appends([
                                      'q' => request()->input('q'), 'sortBy' => request()->input('sortBy'), 
                                      'perPage' => request()->input('perPage'),
                                      'sortItems' => request()->input('sortItems'),
                                      'sortOrder' => request()->input('sortOrder'),
                                      'medSwitch' => request()->input('medSwitch'),
                                      'vaxSwitch' => request()->input('vaxSwitch'),
                                      'vitSwitch' => request()->input('vitSwitch'),
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
                    <div id="prod_detail_header" class="prod_detail_header">
                        <h1>Edit Product Information</h1>
                    </div>
                    <div id="prod_detail" class="prod_detail">
                        <div class="product_detail_header"><button class="btn product_back_btn" type="button"><span
                                    class="view_back_btn_base"><svg xmlns="http://www.w3.org/2000/svg" width="25"
                                        height="24" viewBox="0 0 25 24" fill="none">
                                        <g clip-path="url(#clip0_5345_14456)" filter="url(#filter0_d_5345_14456)">
                                            <path d="M5.5 12H19.5M5.5 12L11.5 18M5.5 12L11.5 6" stroke="#045B62"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                        <defs>
                                            <filter id="filter0_d_5345_14456" x="-1.5" y="0" width="28"
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
                            @foreach ($products as $productInfo)
                                <form
                                    action="{{ route('product.edit', ['product_type' => $productInfo->product_type, 'id' => $productInfo->id]) }}"
                                    method="POST" class="mb-3 prod_detail_fields_container" id="edit_prod_form">
                            @endforeach
                            @csrf
                            @method('PUT')
                            <div class="new_input_row">
                                <div class="form-floating w-100"><select name="produt_type" class="form-select form-select"
                                        data-id="product-categ" id="product-categ-3">
                                        <option value="none" selected="">Select a Product</option>
                                        <option value="Medicine">Medicine</option>
                                        <option value="Vaccine">Vaccine</option>
                                        <option value="Vitamin">Vitamin</option>
                                    </select><label class="form-label form-label" for="product-categ">Product
                                        Category</label>
                                    <div id="error-product_categ-3" class="error-message"><span>Please select a
                                            category.</span></div>
                                </div>
                                <div class="form-floating w-100"><input class="form-control w-100" list="options" data-id="product_name" id="editItemName" name="item_name" placeholder="Owner Name">
								<label class="form-label" for="product_name">Product Name<span>&nbsp;*</span></label>
									<datalist id="options">

									</datalist>
                                    <div id="error-product_name-3" class="error-message"><span>Please select product
                                            name.</span></div>
                                </div>
                                <div class="form-floating w-100"><input class="form-control" type="text"
                                        name="product_code" data-id="product_code"
                                        id="product_code-3" placeholder="Product Code"><label
                                        class="form-label form-label" for="product_code">Product Code</label>
                                    <div class="error-message" id="error-product_code-3"><span>Please enter product
                                            code.</span></div>
                                </div>
                                <div class="form-floating w-100"><input class="form-control" type="text"
                                        name="batch_no" id="batch_no" data-id="batch_number"
                                        placeholder="Batch Number"><label class="form-label form-label"
                                        for="batch_number">Batch Number</label>
                                    <div class="error-message" id="error-batch_number-3"><span>Please enter batch
                                            number.</span></div>
                                </div>
                            </div>
                            <div class="new_input_row">
                                <div class="form-floating" style="width:100%;"><input
                                        class="form-control" name="manufacturing_date"
                                        id="manufacturing_date" data-id="manufactured_date"
                                        placeholder="Manufactured Date" type="date"><label
                                        class="form-label form-label" for="manufactured_date">Manufactured
                                        Date</label>
                                    <div class="error-message" id="error-manufactured_date-3"><span>Please enter the
                                            manufactured date.</span></div>
                                </div>
                                <div class="form-floating" style="width:100%;"><input
                                        class="form-control form-control" name="expiration_date" id="expiry_date"
                                        data-id="expiration_date"
                                        placeholder="Expiration Date" type="date"><label
                                        class="form-label form-label" for="expiration_date">Expiration Date</label>
                                    <div class="error-message" id="error-expiration_date-3"><span>Please enter the
                                            expiration date.</span></div>
                                </div>
                                <div class="form-floating" style="width:100%;"><input
                                        class="form-control form-control" name="date_stocked" id="date_stocked"
                                        data-id="datestocked"placeholder="Expiration Date"
                                        type="date"><label class="form-label form-label" for="datestocked">Date
                                        Stocked</label>
                                    <div class="error-message" id="error-datestocked-3"><span>Please enter the date
                                            stocked.</span></div>
                                </div>
                            </div>
                            <div class="form-floating" style="width:100%;">
                                <textarea class="form-control" id="prod_desc" name="prod_desc" data-id="prod_description"
                                    placeholder="Product Description"></textarea><label class="form-label form-label"
                                    for="prod_description">Product Description</label>
                                <div id="error-prod_description-3" class="error-message"><span>Please enter product
                                        description.</span></div>
                            </div>
                            <div class="quantity_input_container_edit">
                                <h1>Quantity</h1>
                                <div class="form-floating">
                                    <div class="quantity_input"><button class="quantity_minus" type="button"
                                            onclick="decrementQuantity()">-</button>
                                        <input type="number" aria-labelledby="label-quantity" class="input_quantity"
                                            data-id="quantity" id="quantity_input" min="0" name="quantity"
                                            required="" value="0">
                                        <button class="quantity_add" type="button"
                                            onclick="incrementQuantity()">+</button>
                                        <div id="error-quantity-3" class="error-message"><span>Please input a quantity
                                                value more than 0.</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 prod_detail_fields_buttons"><button class="btn cancel_edit"
                                    id="cancel_edit" type="button"><span
                                        class="cancel_edit_base">Cancel</span></button>
                                <button class="btn edit_save_changes" id="save_changes" disabled type="submit"><span
                                        class="edit_save_changes_base">Save Changes</span></button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="modal fade" role="dialog" tabindex="-1" id="add_product_modal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content add_client_modal">
                <div class="modal-header">
                    <h1 class="modal-title">Add New Product</h1><button class="btn-close" aria-label="Close"
                        data-bs-dismiss="modal" type="button"></button>
                </div>
                <div class="modal-body">
                    <form id="add_product_form" class="add_client" method="POST" action="{{ route('inv.store') }}">
                        @csrf
                        <div class="mb-3 input_container">
                            <div class="new_input_row">
                                <div class="form-floating" style="width: 100%;"><select
                                        class="form-select form-select" name="product_type" data-id="product-categ"
                                        id="product-categ">
                                        <option value="none" selected="">Select a Product</option>
                                        <option value="Medicine">Medicine</option>
                                        <option value="Vaccine">Vaccine</option>
                                        <option value="Vitamin">Vitamin</option>
                                    </select><label class="form-label form-label" for="product-categ">Product
                                        Category</label>
                                    <div id="error-product_categ" class="error-message"><span>Please select a
                                            category.</span></div>
                                </div>
                                <div class="form-floating" style="width: 100%;"><select
                                        class="form-select form-select" name="item_name" data-id="product_name"
                                        id="product_name">
                                        <option value="none" selected="">Select a Product Name</option>
                                    </select><label class="form-label form-label" for="product_name">Product
                                        Name</label>
                                    <div id="error-product_name" class="error-message"><span>Please select product
                                            name.</span></div>
                                </div>
                                <div class="form-floating"style="width: 100%;"><input
                                        class="form-control" type="text" name="product_code"
                                        data-id="product_code" id="product_code" placeholder="Product Code"><label
                                        class="form-label form-label" for="product_code">Product Code</label>
                                    <div class="error-message" id="error-product_code"><span>Please enter product
                                            code.</span></div>
                                </div>
                                <div class="form-floating" style="width: 100%;"><input
                                        class="form-control" type="text" name="batch_no"
                                        data-id="batch_number" id="batch_number" placeholder="Batch Number"><label
                                        class="form-label form-label" for="batch_number">Batch Number</label>
                                    <div class="error-message" id="error-batch_number"><span>Please enter batch
                                            number.</span></div>
                                </div>
                            </div>
                            <div class="new_input_row">
                                <div class="form-floating" style="width:100%;"><input
                                        class="form-control" name="manufacturing_date"
                                        data-id="manufactured_date" id="manufactured_date"
                                        placeholder="Manufactured Date" type="date"><label
                                        class="form-label form-label" for="manufactured_date">Manufactured
                                        Date</label>
                                    <div class="error-message" id="error-manufactured_date"><span>Please enter the
                                            manufactured date.</span></div>
                                </div>
                                <div class="form-floating" style="width:100%;"><input
                                        class="form-control form-control" name="expiration_date"
                                        data-id="expiration_date" id="expiration_date" placeholder="Expiration Date"
                                        type="date"><label class="form-label form-label"
                                        for="expiration_date">Expiration Date</label>
                                    <div class="error-message" id="error-expiration_date"><span>Please enter the
                                            expiration date.</span></div>
                                </div>
                                <div class="form-floating" style="width:100%;"><input
                                        class="form-control form-control" name="date_stocked" data-id="datestocked"
                                        id="datestocked" placeholder="Expiration Date" type="date"><label
                                        class="form-label form-label" for="datestocked">Date Stocked</label>
                                    <div class="error-message" id="error-datestocked"><span>Please enter the date
                                            stocked.</span></div>
                                </div>
                            </div>
                            <div class="form-floating" style="width:100%;">
                                <textarea class="form-control" name="prod_desc" id="prod_description" data-id="prod_description"
                                    placeholder="Product Description"></textarea><label class="form-label form-label"
                                    for="prod_description">Product Description</label>
                                <div id="error-prod_description" class="error-message"><span>Please enter product
                                        description.</span></div>
                            </div>
                            <div class="quantity_input_container">
                                <h1>Quantity</h1>
                                <div class="form-floating">
                                    <div class="quantity_input">
                                        <button class="quantity_minus" type="button"
                                            onclick="decrementQuantity()">-</button>
                                        <input type="number" aria-labelledby="label-quantity" class="input_quantity"
                                            data-id="quantity" id="quantity" min="0" name="quantity"
                                            required="" value="0">
                                        <button class="quantity_add" type="button"
                                            onclick="incrementQuantity1()">+</button>
                                        <div id="error-quantity" class="error-message"><span>Please input a quantity
                                                value more than 0.</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer add_product_button"><button class="btn clear_form" type="button"
                        role="button" aria-label="Clear Form" onclick="clearForm()"><span
                            class="clear_form_base">Clear Form</span></button>
                    <button class="btn disabled submit_product" id="submit_product" type="submit"
                        disabled=""><span class="submit_product_base">Submit</span></button>
                </div>
            </div>
            </form>

        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="add_product_modal-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content add_client_modal">
                <div class="modal-header">
                    <h1 class="modal-title">Add New Product</h1><button class="btn-close" aria-label="Close"
                        data-bs-dismiss="modal" type="button"></button>
                </div>
                <div class="modal-body">
                    <form id="add_product_form1" class="add_client" method="POST" action="{{ route('inv.store') }}">
                        @csrf
                        <div class="mb-3 input_container">
                            <div class="new_input_row">
                                <div class="form-floating" style="width: 100%;"><select
                                        class="form-select form-select" name="product_type"
                                        data-id="product-categ" id="product-categ-1">
                                        <option value="none" selected="">Select a product</option>
                                        <option value="Medicine">Medicine</option>
                                        <option value="Vaccine">Vaccine</option>
                                        <option value="Vitamin">Vitamin</option>
                                    </select><label class="form-label form-label" for="product-categ">Product
                                        Category <span>&nbsp;*</span></label>
                                    <div id="error-product_categ-1" class="error-message"><span>Please select a
                                            category.</span></div>
                                </div>
                                <div class="form-floating" style="width: 100%;">

                                        <input class="form-control w-100" list="options" data-id="product_name" id="product_name-1" name="item_name" placeholder="Owner Name">
								<label class="form-label" for="product_name">Product Name<span>&nbsp;*</span></label>
									<datalist id="options">

									</datalist>
                                    <div id="error-product_name-1" class="error-message"><span>Please select product
                                            name.</span></div>
                                </div>
                                <div class="form-floating" style="width: 100%;"><input
                                        class="form-control form-control" type="text" name="product_code"
                                        data-id="product_code" id="product_code-1"
                                        placeholder="Product Code"><label class="form-label form-label"
                                        for="product_code">Product Code <span>&nbsp;*</span></label>
                                    <div class="error-message" id="error-product_code-1"><span>Please enter product
                                            code.</span></div>
                                </div>
                                <div class="form-floating" style="width: 100%;"><input
                                        class="form-control" type="text" name="batch_no"
                                        data-id="batch_number" id="batch_number-1"
                                        placeholder="Batch Number"><label class="form-label form-label"
                                        for="batch_number">Batch Number <span>&nbsp;*</span></label>
                                    <div class="error-message" id="error-batch_number-1"><span>Please enter batch
                                            number.</span></div>
                                </div>
                            </div>
                            <div class="new_input_row">
                                <div class="form-floating" style="width:100%;"><input
                                        class="form-control" name="manufacturing_date"
                                        data-id="manufactured_date" id="manufactured_date-1"
                                        placeholder="Manufactured Date" type="date"><label
                                        class="form-label form-label" for="manufactured_date">Manufactured
                                        Date <span>&nbsp;*</span></label>
                                    <div class="error-message" id="error-manufactured_date-1"><span>Please enter the
                                            manufactured date.</span></div>
                                </div>
                                <div class="form-floating" style="width:100%;"><input
                                        class="form-control form-control" name="expiration_date"
                                        data-id="expiration_date" id="expiration_date-1"
                                        placeholder="Expiration Date" type="date"><label
                                        class="form-label form-label" for="expiration_date">Expiration Date <span>&nbsp;*</span></label>
                                    <div class="error-message" id="error-expiration_date-1"><span>Please enter the
                                            expiration date.</span></div>
                                </div>
                                <div class="form-floating" style="width:100%;"><input
                                        class="form-control form-control" name="date_stocked"
                                        data-id="datestocked" id="datestocked-1" placeholder="Expiration Date"
                                        type="date"><label class="form-label form-label" for="datestocked">Date
                                        Stocked <span>&nbsp;*</span></label>
                                    <div class="error-message" id="error-datestocked-1"><span>Please enter the date
                                            stocked.</span></div>
                                </div>
                            </div>
                            <div class="form-floating" style="width:100%;">
                                <textarea class="form-control" id="prod_description-1" name="prod_desc" data-id="prod_description"
                                    placeholder="Product Description"></textarea><label class="form-label form-label"
                                    for="prod_description">Product Description <span>&nbsp;*</span></label>
                                <div id="error-prod_description-1" class="error-message"><span>Please enter product
                                        description.</span></div>
                            </div>
                            <div class="quantity_input_container">
                                <h1>Quantity <span style="color: var(--bs-red);">&nbsp;*</span></h1>
                                <div class="form-floating">
                                    <div class="quantity_input"><button class="quantity_minus" type="button"
                                            onclick="decrementQuantity1()">-</button>
                                        <input type="number" aria-labelledby="label-quantity"
                                            class="input_quantity form-control" data-id="quantity" id="quantity-1"
                                            min="0" name="quantity" required="" value="0"><button
                                            class="quantity_add" type="button"
                                            onclick="incrementQuantity1()">+</button>
                                        <div id="error-quantity-1" class="error-message"><span>Please input a
                                                quantity value more than 0.</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer add_product_button"><button class="btn clear_form" type="button"
                        role="button" aria-label="Clear Form" onclick="clearForm1()"><span
                            class="clear_form_base">Clear Form</span></button>
                    <button class="btn disabled submit_product" id="submit_product-1" type="submit"
                        disabled=""><span class="submit_product_base">Submit</span></button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div id="add_stock_modal" class="modal fade" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content add_stock_modal">
                <div class="modal-header">
                    <h1 class="modal-title">Add Stock</h1><button class="btn-close" aria-label="Close"
                        data-bs-dismiss="modal" onClick="cancelStock()" type="button"></button>
                </div>
                <div class="modal-body add_stock_modal_body w-100">
                    @foreach ($products as $productInfo)
                        <form
                            action="{{ route('product.stock', ['product_type' => $productInfo->product_type, 'id' => $productInfo->id]) }}"
                            method="POST" id="add_stock_form">
                    @endforeach
                    @csrf
                    <input type="hidden" name="product_type" id="product_type">
                    <input type="hidden" name="id" id="product_id">
                    <div class="mb-3 stock_input_container">
                        <div class="stock_image_container"><span class="product_name">Product Name</span></div>
                        <div class="new_input_row">
                            <div class="form-floating batch_number"><input id="batch_no" name="batch_no"
                                    class="form-control" type="text" data-id="batch_no"
                                    placeholder="Batch Number" /><label class="form-label form-label"
                                    for="batch_number">Batch Number</label>
                                <div id="error-batch_number-2" class="error-message"><span>Please enter batch
                                        number.</span></div>
                            </div>
                        </div>
                        <div class="new_input_row">
                            <div class="form-floating w-100" ><input id="manufacturing_date"
                                    name="manufacturing_date" class="form-control"
                                    data-id="manufacturing_date" placeholder="Manufactured Date"
                                    type="date" /><label class="form-label form-label"
                                    for="manufacturing_date">Manufactured Date</label>
                                <div id="error-manufactured_date-2" class="error-message"><span>Please enter the
                                        manufactured date.</span></div>
                            </div>
                            <div class="form-floating w-100" ><input id="expired_date"
                                    name="expiration_date" class="form-control"
                                    data-id="expired_date" placeholder="Expiration Date"
                                    type="date" /><label class="form-label form-label"
                                    for="expiration_date">Expiration Date</label>
                                <div id="error-expiration_date-2" class="error-message"><span>Please enter the
                                        expiration date.</span></div>
                            </div>
                            <div class="form-floating w-100" ><input id="date_stocked"
                                    name="date_stocked" class="form-control form-control" data-id="date_stocked"
                                    placeholder="Expiration Date" type="date" /><label
                                    class="form-label form-label" for="datestocked">Date Stocked</label>
                                <div id="error-datestocked-2" class="error-message"><span>Please enter the date
                                        stocked.</span></div>
                            </div>
                        </div>
                        <div class="quantity_input_container">
                            <h1>Quantity</h1>
                            <div class="form-floating">
                                <div class="quantity_input">
                                    <button class="quantity_minus" onclick="decrementQuantity2()"
                                        type="button">-</button>
                                    <input id="deduct_quantity_input" class="input_quantity" type="number"
                                        aria-labelledby="label-quantity" data-id="quantity-2" min="0"
                                        name="quantity" required value="0" />
                                    <button class="quantity_add" onclick="incrementQuantity2()"
                                        type="button">+</button>
                                    <div id="error-quantity-2" class="error-message"><span>Please input a quantity
                                            value more than 0.</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer add_stock_buttons">
                    <button class="btn cancel_btn" id="cancel_btn" onClick="cancelStock()" data-bs-dismiss="modal" type="button" role="button" aria-label="Cancel"><span
                            class="cancel_btn_base">Cancel</span></button>
                    <button id="add_stock" class="btn add_stock" type="submit" disabled><span class="add_stock_base">Add
                            Stock</span></button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <div id="deduct_stock_modal" class="modal fade" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content deduct_stock_modal">
                <div class="modal-header">
                    <h1 class="modal-title">Deduct Stock</h1><button class="btn-close" aria-label="Close"
                        data-bs-dismiss="modal" onClick="cancelStock()" type="button"></button>
                </div>
                <div class="modal-body add_stock_modal_body w-100">
                    @foreach ($products as $productInfo)
                        <form
                            action="{{ route('product.stock', ['product_type' => $productInfo->product_type, 'id' => $productInfo->id]) }}"
                            method="POST" id="add_stock_form">
                    @endforeach
                    @csrf
                    <input type="hidden" name="product_type" id="product_type">
                    <input type="hidden" name="id" id="product_id">
                    <div class="mb-3 stock_input_container">
                        <div class="stock_image_container"><span class="product_name">Product Name</span></div>
                        
                        
                        <div class="quantity_input_container d-flex justify-content-center">
                            <h1>Quantity</h1>
                            <div class="form-floating">
                                <div class="quantity_input deduct">
                                    <button class="quantity_minus" onclick="decrementQuantity2()"
                                        type="button">-</button>
                                    <input id="quantity-2" class="input_quantity" type="number"
                                        aria-labelledby="label-quantity" data-id="quantity-2" min="0"
                                        name="quantity" required value="0" />
                                    <button class="quantity_add" onclick="incrementQuantity2()"
                                        type="button">+</button>
                                    <div id="error-quantity-2" class="error-message"><span>Please input a quantity
                                            value more than 0.</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer deduct_stock_buttons">
                    <button class="btn cancel_btn" id="cancel_btn" onClick="cancelDeductStock()" data-bs-dismiss="modal" type="button" role="button" aria-label="Cancel"><span
                            class="cancel_btn_base">Cancel</span></button>
                    <button id="deduct_stock" class="btn add_stock" data-bs-dismiss="modal" type="submit"><span class="add_stock_base">Deduct
                            Stock</span></button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade show" role="dialog" tabindex="-1" id="add_product_success">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content success_modal">
                <div class="modal-header success_header">
                    <div class="success_icon_container"><span class="success_icon"><svg
                                xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                viewBox="0 0 32 32" fill="none">
                                <g clip-path="url(#clip0_5345_9689)">
                                    <path
                                        d="M12 16L14.6667 18.6667L20 13.3333M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 14.4241 27.6896 12.8637 27.0866 11.4078C26.4835 9.95189 25.5996 8.62902 24.4853 7.51472C23.371 6.40042 22.0481 5.5165 20.5922 4.91345C19.1363 4.31039 17.5759 4 16 4C14.4241 4 12.8637 4.31039 11.4078 4.91345C9.95189 5.5165 8.62902 6.40042 7.51472 7.51472C6.40042 8.62902 5.5165 9.95189 4.91345 11.4078C4.31039 12.8637 4 14.4241 4 16Z"
                                        stroke="#5BB85A" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_5345_9689">
                                        <rect width="32" height="32" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg></span></div>
                </div>
                <div class="modal-body success_message">
                    <div>
                        <h1>Success</h1>
                        <p>Product was successfully added.</p>
                    </div>
                </div>
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
                                <g clip-path="url(#clip0_5345_9689)">
                                    <path
                                        d="M12 16L14.6667 18.6667L20 13.3333M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 14.4241 27.6896 12.8637 27.0866 11.4078C26.4835 9.95189 25.5996 8.62902 24.4853 7.51472C23.371 6.40042 22.0481 5.5165 20.5922 4.91345C19.1363 4.31039 17.5759 4 16 4C14.4241 4 12.8637 4.31039 11.4078 4.91345C9.95189 5.5165 8.62902 6.40042 7.51472 7.51472C6.40042 8.62902 5.5165 9.95189 4.91345 11.4078C4.31039 12.8637 4 14.4241 4 16Z"
                                        stroke="#5BB85A" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_5345_9689">
                                        <rect width="32" height="32" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg></span></div>
                </div>
                <div class="modal-body success_message">
                    <div>
                        <h1>Success!</h1>
                        <p>Product was successfully added.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade show" role="dialog" tabindex="-1" id="add_product_discard">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content discard_modal">
                <div class="modal-header discard_header">
                    <div class="discard_icon_container"><span class="discard_icon"><svg
                                xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                viewBox="0 0 32 32" fill="none">
                                <g clip-path="url(#clip0_5519_15576)">
                                    <path
                                        d="M13.3333 13.3333L18.6667 18.6667M18.6667 13.3333L13.3333 18.6667M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 14.4241 27.6896 12.8637 27.0866 11.4078C26.4835 9.95189 25.5996 8.62902 24.4853 7.51472C23.371 6.40042 22.0481 5.5165 20.5922 4.91345C19.1363 4.31039 17.5759 4 16 4C14.4241 4 12.8637 4.31039 11.4078 4.91345C9.95189 5.5165 8.62902 6.40042 7.51472 7.51472C6.40042 8.62902 5.5165 9.95189 4.91345 11.4078C4.31039 12.8637 4 14.4241 4 16Z"
                                        stroke="#DA534F" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_5519_15576">
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
                <div class="modal-footer discard_footer"><button class="btn return_btn" id="return_btn"
                        data-bs-dismiss="modal" type="button"><span
                            class="return_btn_base">Return</span></button><button class="btn discard_btn"
                        id="discard_btn" type="button"><span class="discard_btn_base">Discard</span></button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @if (session('success_product'))
    <script>
    $(document).ready(function() {
        $('#save_changes_success').show();
            setTimeout(function() {
                $('#save_changes_success').hide();
            }, 2000);
    });
    </script>
    @endif
    <script>
        function updateStatus() {
            // Iterate over each row in the table
            $('#inventory_table_body tr').each(function() {
                // Get the quantity value from the second column of the current row
                var quantity = parseInt($(this).find('td:eq(3)').text());

                // Determine the status based on the quantity
                var status;
                if (quantity === 0) {
                    status = "Out of Stock";
                } else if (quantity <= 50) {
                    status = "Low Stock";
                } else {
                    status = "High Stock";
                }

                var statusTd = $(this).find('.status-td');
        statusTd.text(status); // Update status text

        // Apply styles based on the status
        if (status === "Out of Stock") {
            statusTd.css({ backgroundColor: "#DA534F", color: "#fff" });
        } else if (status === "Low Stock") {
            statusTd.css({ backgroundColor: "#FFA800", color: "#fff" });
        } else {
            statusTd.css({ backgroundColor: "#5CA500", color: "var(--colors-main-neutral, #FFF)" });
        }
            });
        }
        $(document).ready(function() {
            updateStatus();
                $('#editButton').click(function() {
                const invData = {
                    'item_name' :$(this).data('item_name'),
                    'prodoct_code' :$(this).data('product_code'),
                    'last_name' :$(this).data('last-name'),
                    'suffix' :$(this).data('suffix'),
                    'birthdate' :$(this).data('birthdate'),
                    'email' :$(this).data('email'),
                    'phone' :$(this).data('phone'),
                };      
                $('#editItemName').val(invData.item_name);
                $('#product_code').val(invData.middle_name);
                $('#editLastName').val(clientData.last_name);
                $('#editSuffix').val(clientData.suffix);
                $('#editBirthdate').val(clientData.birthdate);
                $('#editEmail').val(clientData.email);
                $('#editPhone').val(clientData.phone);
            });
            $('.viewButton').click(function() {
                var inventory_header = document.getElementById("inventory_header");
                var rowId = $(this).closest('tr').data('row-id');
                const product_type = $(this).data('product-type');
                const id = $(this).data('product-id');

                inventory_header.style.display = 'none';
                // Make an AJAX request to retrieve data
                $.ajax({
                    type: 'GET',
                    url: `/admin/inventory/view/${product_type}/${id}`,
                    success: function(data) {
                        // Update the HTML elements with the retrieved data
                        $('.prod_head_info h1').text(data.productInfo.item_name);
                        $('.prod_head_info p').text(data.productInfo.product_type);
                        $('.batch_number p').text(data.productBatch.batch_no);
                        $('.bar_code p').text(data.productBatch.product_code);
                        $('.manufactured_date p').text(data.productBatch.manufacturing_date);
                        $('.expiration_date p').text(data.productBatch.expiration_date);
                        $('.date_stocked p').text(data.productBatch.date_stocked);
                        $('.product_Description p').text(data.productInfo.prod_desc);
                    },
                    error: function(xhr) {
                        // Handle errors
                        console.log(xhr.responseText);
                    }
                });
                $.ajax({
                    type: 'GET',
                    url: `/admin/inventory/viewBatch/${product_type}/${id}`,
                    success: function(data){
                        $('#batch_table tbody').empty();
                        $.each(data, function(index, batches) {
                            var newRow = '<tr>' +
							'<td>' + batches.batch_no + '</td>' +
                            '<td>' + batches.product_code + '</td>' +
                            '<td>' + batches.quantity + '</td>' +
							'<td>' + batches.date_stocked + '</td>' +
							'<td>' + batches.expiration_date + '</td>' +
                            '<td>' + batches.manufacturing_date + '</td>' +
							'</tr>';
						$('#batch_table tbody').append(newRow);
                        });
                    }
                })
            });
            $('#editButton').click(function() {
                // Get data attributes from the button
                const productType = $(this).data('product-type');
                const productId = $(this).data('product-id');

                const form = $(this).closest('tr').find('.edit_prod_form');
                // Set the values in the form fields
                form.find('.productTypeInput').val(productType);
                form.find('.productIdInput').val(productId);

                $.ajax({
                    type: 'GET',
                    url: `/admin/inventory/view/${product_type}/${id}`,
                    success: function(data) {
                        // Update the HTML elements with the retrieved data
                        $('.prod_head_info h1').text(data.productInfo.item_name);
                        $('.prod_head_info p').text(data.productInfo.product_type);
                        $('.batch_number p').text(data.productBatch.batch_no);
                        $('.bar_code p').text(data.productBatch.product_code);
                        $('.manufactured_date p').text(data.productBatch.manufacturing_date);
                        $('.expiration_date p').text(data.productBatch.expiration_date);
                        $('.date_stocked p').text(data.productBatch.date_stocked);
                        $('.product_Description p').text(data.productInfo.prod_desc);
                    },
                    error: function(xhr) {
                        // Handle errors
                        console.log(xhr.responseText);
                    }
                });
            });
            $('.addStock').click(function() {
                // Get data attributes from the button
                console.log('test');
                const productType = $(this).data('product-type');
                const productId = $(this).data('product-id');

                // Create a FormData object to send data to the server
                const formData = new FormData();
                formData.append('product_type', productType);
                formData.append('id', productId);

                // Perform an AJAX request to the server
                $.ajax({
                    url: `/admin/inventory/addStock/${product_type}/${productId}`, // Adjust the URL to your actual route
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        // Handle success, e.g., update the UI
                        console.log('Stock added successfully');
                    },
                    error: function() {
                        // Handle errors, e.g., display an error message
                        console.error('Error adding stock');
                    }
                });

            });
            $('.archiveButton').on('click', function() {
            var row = $(this).closest('row-id');
            const product_type = $(this).data('product-type');
            const id = $(this).data('product-id');

            // Send an AJAX request to the Laravel controller
                $.ajax({
                    type: 'POST',
                    url: `/admin/inventory/archive/${product_type}/${id}`,
                    data: {_token: '{{ csrf_token() }}'},
                    success: function(response) {
                        // Handle success, e.g., show a success message
                        alert('Product has been archived');
                        // Optionally, you can also reload the page or update the UI
                        location.reload();
                    },
                    error: function(xhr) {
                        // Handle errors
                        console.error(xhr.responseText);
                    }
                });
            });

        });

        

        document.querySelectorAll('#editButton').forEach(button => {
            button.addEventListener('click', function() {
                // Extract data from the button's data attributes
                const productType = this.getAttribute('data-product-type');
                const productId = this.getAttribute('data-product-id');

                // Set the form's action based on the data
                const editForm = document.querySelector('#edit_prod_form');
                editForm.action = `/admin/inventory/edit/${productType}/${productId}`;

                // Optionally, you can also populate form fields based on the data
                document.querySelector('#edit-product-type').value = productType;
                document.querySelector('#edit-product-id').value = productId;
            });
        });

        document.querySelectorAll('.addStock').forEach(button => {
            button.addEventListener('click', function() {
                // Extract data from the button's data attributes
                const productType = this.getAttribute('data-product-type');
                const productId = this.getAttribute('data-product-id');

                // Set the form's action based on the data
                const addStockForm = document.querySelector('#add_stock_form');
                addStockForm.action = `/admin/inventory/addStock/${productType}/${productId}`;

            });
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

        function submitForm() {
            document.getElementById('searchForm').submit();
        }
    </script>

<script>
            var SelectAll = document.getElementById("SelectAll");

            SelectAll.addEventListener("click", function () {
    var tableBody = document.getElementById('inventory_table_body');
    var rowCheckboxes = tableBody.querySelectorAll("input[type='radio']");

    rowCheckboxes.forEach(function (checkbox) {
        checkbox.checked = !checkbox.checked; // Toggle the state
    });

});
    </script>

    <script>
 function enableSaveChanges() {
  var product_categ = document.getElementById("product-categ-3").value;
  var editItemName = document.getElementById("editItemName").value;
  var product_code = document.getElementById("product_code-3").value;
  var batch_number = document.getElementById("batch_no").value;
  var manufactured_date = document.getElementById("manufacturing_date").value;
  var expiration_date = document.getElementById("expiry_date").value;
  var datestocked = document.getElementById("date_stocked").value;
  var prod_description = document.getElementById("prod_desc").value;
  var quantity = document.getElementById("quantity_input").value;

  var save_changes = document.getElementById("save_changes");

  // Add additional validation conditions as needed
  if (
    product_categ.trim() !== "" &&
    editItemName.trim() !== "" &&
    product_code.trim() !== "" &&
    batch_number.trim() !== "" &&
    manufactured_date.trim() !== "" &&
    expiration_date.trim() !== "" &&
    datestocked.trim() !== "" &&
    prod_description.trim() !== "" &&
    quantity.trim() >= 1
  ) {
    save_changes.removeAttribute("disabled");
  } else {
    save_changes.setAttribute("disabled", true);
  }

  // Logging values for debugging
  console.log('product-categ-3:', product_categ);
  console.log('editItemName:', editItemName);
  console.log('product_code:', product_code);
  console.log('batch_number:', batch_number);
  console.log('manufactured_date:', manufactured_date);
  console.log('expiration_date:', expiration_date);
  console.log('datestocked:', datestocked);
  console.log('prod_description', prod_description);
  console.log('quantity', quantity);
  console.log('save_changes disabled:', save_changes.disabled);

}


// Example: Call enableSaveChanges() on input change events
document.getElementById("product-categ-3").addEventListener("change", enableSaveChanges);
document.getElementById("editItemName").addEventListener("input", enableSaveChanges);
document.getElementById("product_code-3").addEventListener("input", enableSaveChanges);
document.getElementById("batch_no").addEventListener("input", enableSaveChanges);
document.getElementById("manufacturing_date").addEventListener("input", enableSaveChanges);
document.getElementById("expiry_date").addEventListener("input", enableSaveChanges);
document.getElementById("date_stocked").addEventListener("input", enableSaveChanges);
document.getElementById("prod_desc").addEventListener("input", enableSaveChanges);
document.getElementById("quantity_input").addEventListener("input", enableSaveChanges);



// // Assuming info_quantity is a variable in your JavaScript (replace with actual variable if different)
// var info_quantity = @json($product->info_quantity);

// // Determine the status based on the input quantity
// var status = info_quantity === "0" ? "Out of Stock" : (info_quantity <= 50 ? "Low Stock" : "High Stock");

// // Define styles for different statuses
// var statusStyles = {
//     "Out of Stock": {
//         backgroundColor: "#DA534F",
//         color: "#fff",
//     },
//     "Low Stock": {
//         backgroundColor: "#FFA800",
//         color: "#fff",
//     },
//     "High Stock": {
//         backgroundColor: "#5CA500",
//         color: "var(--colors-main-neutral, #FFF)",
//     },
// };

// // Update the content and style of all the status <td> elements
// var statusTdList = document.querySelectorAll('.status-td');

// statusTdList.forEach(function(statusTd) {
//     statusTd.textContent = status;
//     statusTd.style.backgroundColor = statusStyles[status].backgroundColor;
//     statusTd.style.color = statusStyles[status].color;
// });




    </script>


    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/inventory.js') }}"></script>
    <script src="{{ asset('assets/js/sidebar.js') }}"></script>
    <script src="{{ asset('assets/js/sidebartry.js') }}"></script>
    
    

</body>

</html>