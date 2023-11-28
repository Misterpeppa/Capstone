<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
  <meta charset="utf-8">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Admin | Inventory</title>
  <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter&amp;display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:300,400,500,600,700&amp;display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap">
  <link rel="stylesheet" href="{{ asset('assets/css/bs-theme-overrides.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/Bootstrap-4-Custom-Radio.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/Multi-step-form.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/Navbar-Centered-Links-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/Toggle-Switch-toggle-switch.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/Toggle-Switch.css') }}">

</head>

<body>
  <main class="d-flex flex-row container-fluid" style="padding: 0;">
  <div id="sidebarArrow" class="sidebar sidebar_collapsed">
            <div class="logo"><a id="logo_link" class="logo_link" href="#"><img src="assets/img/dogs&cats.png" alt="Clinic Logo"></a><button id="sidebar_arrow" class="sidebar_arrow" type="button" onclick="toggleSidebar()"><svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none" class="arrow-svg">
        <path d="M6 12L1.88453 7.88384C1.3985 7.39773 1.3985 6.60227 1.88453 6.11616L6 2" stroke="#004D53" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="round"></path>
    </svg></button></div>
            <div class="items_and_button">
                <div class="navigation_links">
                    <ul class="list-inline first_group">
                        <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g clip-path="url(#clip0_5274_11618)">
    <path d="M4 5C4 4.73478 4.10536 4.48043 4.29289 4.29289C4.48043 4.10536 4.73478 4 5 4H9C9.26522 4 9.51957 4.10536 9.70711 4.29289C9.89464 4.48043 10 4.73478 10 5V9C10 9.26522 9.89464 9.51957 9.70711 9.70711C9.51957 9.89464 9.26522 10 9 10H5C4.73478 10 4.48043 9.89464 4.29289 9.70711C4.10536 9.51957 4 9.26522 4 9V5Z" stroke="#1C1C1C" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M14 5C14 4.73478 14.1054 4.48043 14.2929 4.29289C14.4804 4.10536 14.7348 4 15 4H19C19.2652 4 19.5196 4.10536 19.7071 4.29289C19.8946 4.48043 20 4.73478 20 5V9C20 9.26522 19.8946 9.51957 19.7071 9.70711C19.5196 9.89464 19.2652 10 19 10H15C14.7348 10 14.4804 9.89464 14.2929 9.70711C14.1054 9.51957 14 9.26522 14 9V5Z" stroke="#1C1C1C" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M4 15C4 14.7348 4.10536 14.4804 4.29289 14.2929C4.48043 14.1054 4.73478 14 5 14H9C9.26522 14 9.51957 14.1054 9.70711 14.2929C9.89464 14.4804 10 14.7348 10 15V19C10 19.2652 9.89464 19.5196 9.70711 19.7071C9.51957 19.8946 9.26522 20 9 20H5C4.73478 20 4.48043 19.8946 4.29289 19.7071C4.10536 19.5196 4 19.2652 4 19V15Z" stroke="#1C1C1C" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M14 15C14 14.7348 14.1054 14.4804 14.2929 14.2929C14.4804 14.1054 14.7348 14 15 14H19C19.2652 14 19.5196 14.1054 19.7071 14.2929C19.8946 14.4804 20 14.7348 20 15V19C20 19.2652 19.8946 19.5196 19.7071 19.7071C19.5196 19.8946 19.2652 20 19 20H15C14.7348 20 14.4804 19.8946 14.2929 19.7071C14.1054 19.5196 14 19.2652 14 19V15Z" stroke="#1C1C1C" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_5274_11618">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg>
<a href="#"> Dashboard</a></li>
                        <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g clip-path="url(#clip0_5274_11624)">
    <path d="M9 5H7C6.46957 5 5.96086 5.21071 5.58579 5.58579C5.21071 5.96086 5 6.46957 5 7V19C5 19.5304 5.21071 20.0391 5.58579 20.4142C5.96086 20.7893 6.46957 21 7 21H17C17.5304 21 18.0391 20.7893 18.4142 20.4142C18.7893 20.0391 19 19.5304 19 19V7C19 6.46957 18.7893 5.96086 18.4142 5.58579C18.0391 5.21071 17.5304 5 17 5H15M9 5C9 4.46957 9.21071 3.96086 9.58579 3.58579C9.96086 3.21071 10.4696 3 11 3H13C13.5304 3 14.0391 3.21071 14.4142 3.58579C14.7893 3.96086 15 4.46957 15 5M9 5C9 5.53043 9.21071 6.03914 9.58579 6.41421C9.96086 6.78929 10.4696 7 11 7H13C13.5304 7 14.0391 6.78929 14.4142 6.41421C14.7893 6.03914 15 5.53043 15 5M9 17V12M12 17V16M15 17V14" stroke="#1C1C1C" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_5274_11624">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg><a href="#">Reports</a></li>
                        <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g clip-path="url(#clip0_5274_11630)">
    <path d="M11.795 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V7C3 6.46957 3.21071 5.96086 3.58579 5.58579C3.96086 5.21071 4.46957 5 5 5H17C17.5304 5 18.0391 5.21071 18.4142 5.58579C18.7893 5.96086 19 6.46957 19 7V11H3M15 3V7M7 3V7M18 16.496V18L19 19M14 18C14 19.0609 14.4214 20.0783 15.1716 20.8284C15.9217 21.5786 16.9391 22 18 22C19.0609 22 20.0783 21.5786 20.8284 20.8284C21.5786 20.0783 22 19.0609 22 18C22 16.9391 21.5786 15.9217 20.8284 15.1716C20.0783 14.4214 19.0609 14 18 14C16.9391 14 15.9217 14.4214 15.1716 15.1716C14.4214 15.9217 14 16.9391 14 18Z" stroke="#1C1C1C" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_5274_11630">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg><a href="#">Appointments</a></li>
                    </ul>
                    <hr class="line_separator">
                    <ul class="list-inline second_group">
                        <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g clip-path="url(#clip0_5274_11639)">
    <path d="M14.7003 13.5C13.6003 11.5 13.2593 11 12.0003 11C10.7413 11 10.2643 11.755 9.16426 13.747C8.22226 15.45 6.31826 15.592 5.84326 17.038C5.74626 17.303 5.69826 17.715 5.70026 18C5.70026 19.176 6.48726 20 7.50026 20C8.75926 20 10.5003 19 12.0003 19C13.5003 19 15.2413 20 16.5003 20C17.5133 20 18.3003 19.177 18.3003 18C18.3003 17.715 18.2513 17.303 18.1543 17.038C17.6793 15.587 15.6423 15.203 14.7003 13.5Z" stroke="#1C1C1C" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M20.1882 8.082C20.0597 8.0277 19.9216 7.99981 19.7822 8H19.7672C19.0322 8.012 18.2072 8.75 17.7742 9.866C17.2552 11.201 17.4942 12.566 18.3122 12.918C18.4412 12.973 18.5792 13 18.7182 13C19.4572 13 20.2932 12.258 20.7292 11.134C21.2452 9.799 21.0012 8.434 20.1882 8.082Z" stroke="#1C1C1C" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M9.47358 9C9.52858 9 9.58258 9 9.63658 8.989C10.5806 8.861 11.1696 7.643 10.9566 6.267C10.7536 4.97 9.90958 4 9.02458 4C8.96958 4 8.91558 4 8.86158 4.011C7.91758 4.139 7.32858 5.357 7.54158 6.733C7.74558 8.026 8.58958 9 9.47458 9H9.47358Z" stroke="#1C1C1C" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M16.4559 6.733C16.6699 5.357 16.0809 4.139 15.1359 4.011C15.0822 4.00357 15.0281 3.99989 14.9739 4C14.0889 4 13.2459 4.97 13.0439 6.267C12.8299 7.643 13.4189 8.861 14.3639 8.989C14.4179 8.996 14.4719 9 14.5259 9C15.4109 9 16.2559 8.026 16.4559 6.733Z" stroke="#1C1C1C" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M5.68982 12.918C6.50582 12.566 6.74382 11.199 6.22582 9.866C5.78982 8.742 4.95482 8 4.21682 8C4.07682 8 3.93982 8.027 3.80982 8.082C2.99382 8.434 2.75582 9.801 3.27382 11.134C3.70982 12.258 4.54482 13 5.28282 13C5.42282 13 5.55982 12.973 5.68982 12.918Z" stroke="#1C1C1C" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_5274_11639">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg>
<a href="#">Pet Records</a></li>
                        <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g clip-path="url(#clip0_5274_11645)">
    <path d="M3 21V19C3 17.9391 3.42143 16.9217 4.17157 16.1716C4.92172 15.4214 5.93913 15 7 15H11C12.0609 15 13.0783 15.4214 13.8284 16.1716C14.5786 16.9217 15 17.9391 15 19V21M16 3.13C16.8604 3.35031 17.623 3.85071 18.1676 4.55232C18.7122 5.25392 19.0078 6.11683 19.0078 7.005C19.0078 7.89318 18.7122 8.75608 18.1676 9.45769C17.623 10.1593 16.8604 10.6597 16 10.88M21 21V19C20.9949 18.1172 20.6979 17.2608 20.1553 16.5644C19.6126 15.868 18.8548 15.3707 18 15.15M5 7C5 8.06087 5.42143 9.07828 6.17157 9.82843C6.92172 10.5786 7.93913 11 9 11C10.0609 11 11.0783 10.5786 11.8284 9.82843C12.5786 9.07828 13 8.06087 13 7C13 5.93913 12.5786 4.92172 11.8284 4.17157C11.0783 3.42143 10.0609 3 9 3C7.93913 3 6.92172 3.42143 6.17157 4.17157C5.42143 4.92172 5 5.93913 5 7Z" stroke="#1C1C1C" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_5274_11645">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg>
<a href="#">Clients</a></li>
                        <li class="list-inline-item active"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g clip-path="url(#clip0_5274_11651)">
    <path d="M20 7.5L12 3L4 7.5M20 7.5V16.5L12 21M20 7.5L12 12M12 21L4 16.5V7.5M12 21V12M4 7.5L12 12M8.2002 9.79995L15.8002 5.19995" stroke="#004D53" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_5274_11651">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg><a href="#">Inventory</a></li>
                    </ul>
                    <hr class="line_separator">
                    <ul class="list-inline third_group">
                        <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g clip-path="url(#clip0_5274_11661)">
    <path d="M12 8V12M12 16H12.01M3 12C3 13.1819 3.23279 14.3522 3.68508 15.4442C4.13738 16.5361 4.80031 17.5282 5.63604 18.364C6.47177 19.1997 7.46392 19.8626 8.55585 20.3149C9.64778 20.7672 10.8181 21 12 21C13.1819 21 14.3522 20.7672 15.4442 20.3149C16.5361 19.8626 17.5282 19.1997 18.364 18.364C19.1997 17.5282 19.8626 16.5361 20.3149 15.4442C20.7672 14.3522 21 13.1819 21 12C21 9.61305 20.0518 7.32387 18.364 5.63604C16.6761 3.94821 14.3869 3 12 3C9.61305 3 7.32387 3.94821 5.63604 5.63604C3.94821 7.32387 3 9.61305 3 12Z" stroke="#1C1C1C" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_5274_11661">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg><a href="#">Help</a></li>
                        <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g clip-path="url(#clip0_5274_11667)">
    <path d="M10.325 4.317C10.751 2.561 13.249 2.561 13.675 4.317C13.7389 4.5808 13.8642 4.82578 14.0407 5.032C14.2172 5.23822 14.4399 5.39985 14.6907 5.50375C14.9414 5.60764 15.2132 5.65085 15.4838 5.62987C15.7544 5.60889 16.0162 5.5243 16.248 5.383C17.791 4.443 19.558 6.209 18.618 7.753C18.4769 7.98466 18.3924 8.24634 18.3715 8.51677C18.3506 8.78721 18.3938 9.05877 18.4975 9.30938C18.6013 9.55999 18.7627 9.78258 18.9687 9.95905C19.1747 10.1355 19.4194 10.2609 19.683 10.325C21.439 10.751 21.439 13.249 19.683 13.675C19.4192 13.7389 19.1742 13.8642 18.968 14.0407C18.7618 14.2172 18.6001 14.4399 18.4963 14.6907C18.3924 14.9414 18.3491 15.2132 18.3701 15.4838C18.3911 15.7544 18.4757 16.0162 18.617 16.248C19.557 17.791 17.791 19.558 16.247 18.618C16.0153 18.4769 15.7537 18.3924 15.4832 18.3715C15.2128 18.3506 14.9412 18.3938 14.6906 18.4975C14.44 18.6013 14.2174 18.7627 14.0409 18.9687C13.8645 19.1747 13.7391 19.4194 13.675 19.683C13.249 21.439 10.751 21.439 10.325 19.683C10.2611 19.4192 10.1358 19.1742 9.95929 18.968C9.7828 18.7618 9.56011 18.6001 9.30935 18.4963C9.05859 18.3924 8.78683 18.3491 8.51621 18.3701C8.24559 18.3911 7.98375 18.4757 7.752 18.617C6.209 19.557 4.442 17.791 5.382 16.247C5.5231 16.0153 5.60755 15.7537 5.62848 15.4832C5.64942 15.2128 5.60624 14.9412 5.50247 14.6906C5.3987 14.44 5.23726 14.2174 5.03127 14.0409C4.82529 13.8645 4.58056 13.7391 4.317 13.675C2.561 13.249 2.561 10.751 4.317 10.325C4.5808 10.2611 4.82578 10.1358 5.032 9.95929C5.23822 9.7828 5.39985 9.56011 5.50375 9.30935C5.60764 9.05859 5.65085 8.78683 5.62987 8.51621C5.60889 8.24559 5.5243 7.98375 5.383 7.752C4.443 6.209 6.209 4.442 7.753 5.382C8.753 5.99 10.049 5.452 10.325 4.317Z" stroke="#1C1C1C" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M9 12C9 12.7956 9.31607 13.5587 9.87868 14.1213C10.4413 14.6839 11.2044 15 12 15C12.7956 15 13.5587 14.6839 14.1213 14.1213C14.6839 13.5587 15 12.7956 15 12C15 11.2044 14.6839 10.4413 14.1213 9.87868C13.5587 9.31607 12.7956 9 12 9C11.2044 9 10.4413 9.31607 9.87868 9.87868C9.31607 10.4413 9 11.2044 9 12Z" stroke="#1C1C1C" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_5274_11667">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg>
<a href="#">Settings</a></li>
                    </ul>
                </div><button class="add" type="button"><div class="add_base"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g clip-path="url(#clip0_5266_11673)" filter="url(#filter0_d_5266_11673)">
    <path d="M12 5V19M5 12H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <filter id="filter0_d_5266_11673" x="-2" y="0" width="28" height="28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
      <feOffset dy="2"/>
      <feGaussianBlur stdDeviation="1"/>
      <feComposite in2="hardAlpha" operator="out"/>
      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5266_11673"/>
      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5266_11673" result="shape"/>
    </filter>
    <clipPath id="clip0_5266_11673">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg> Add</div></button>
            </div>
        </div>
 
    <div class="content">
      <div class="rectangle"></div>
      <div class="main_content">
        <div id="inventory_container" class="inventory_container">
          <div id="inventory_header" class="inventory_header">
            <div class="d-flex flex-column justify-content-center align-items-start">
              <h1>Inventory</h1>
            </div>
            <div class="btn-group split_btn" id="split_btn"><button class="btn add_Product_btn" id="add_Product_btn" type="button"><span class="add_Product_btn_base">Add Product</span></button><button class="btn dropdown-toggle dropdown-toggle-split add_product_dropdown" data-bs-toggle="dropdown" aria-expanded="false" type="button"></button>
              <div class="dropdown-menu"><a class="dropdown-item" id="add_Product_btn_1" data-bs-toggle="modal">Add Product</a><a class="dropdown-item" href="#">Generate Report</a></div>
            </div>
          </div>
          <div id="prod_info_header" class="prod_info_header">
            <div class="d-flex flex-column justify-content-center align-items-start">
              <h1>Product Information</h1>
            </div>
          </div>
          <div id="view_product" class="view_product">
            <div class="view_product_header"><button class="btn view_back_btn" type="button"><span class="view_back_btn_base"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                    <g clip-path="url(#clip0_5345_14456)" filter="url(#filter0_d_5345_14456)">
                      <path d="M5.5 12H19.5M5.5 12L11.5 18M5.5 12L11.5 6" stroke="#045B62" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                    <defs>
                      <filter id="filter0_d_5345_14456" x="-1.5" y="0" width="28" height="28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                        <feOffset dy="2" />
                        <feGaussianBlur stdDeviation="1" />
                        <feComposite in2="hardAlpha" operator="out" />
                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" />
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5345_14456" />
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5345_14456" result="shape" />
                      </filter>
                      <clipPath id="clip0_5345_14456">
                        <rect width="24" height="24" fill="white" transform="translate(0.5)" />
                      </clipPath>
                    </defs>
                  </svg> Back</span></button></div>
            <div class="product_info_container">
              <div class="product_info"><img src="assets/img/image%209.png">
                <div class="product_details">
                  <div class="prod_detail_head">
                    <div class="prod_head_info">
                      <h1>Rabbies</h1>
                      <p>Vaccine</p>
                    </div>
                  </div>
                  <div class="prod_detail_body">
                    <div class="batchno_barcode">
                      <div class="batch_number">
                        <h1>Batch Number</h1>
                        <p>Paragraph</p>
                      </div>
                      <div class="bar_code">
                        <h1>Product Code</h1>
                        <p>Paragraph</p>
                      </div>
                    </div>
                    <div class="manu_expi_stocked_date">
                      <div class="manufactured_date">
                        <h1>Manufactured Date</h1>
                        <p>Paragraph</p>
                      </div>
                      <div class="expiration_date">
                        <h1>Expiration Date</h1>
                        <p>Paragraph</p>
                      </div>
                      <div class="date_stocked">
                        <h1>Date Stocked</h1>
                        <p>Paragraph</p>
                      </div>
                    </div>
                    <div class="product_Description">
                      <h1>Heading</h1>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed odio feugiat, ullamcorper metus in, imperdiet ligula. Duis suscipit viverra lectus et semper. Mauris eleifend cursus pulvinar. Nunc cursus dui eu velit scelerisque viverra nec vitae velit. Nullam hendrerit erat fermentum ornare finibus.</p>
                    </div>
                  </div>
                </div><button class="btn edit_prod_detail" id="edit_prod_detail" type="button"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <g clip-path="url(#clip0_5345_10250)">
                        <path d="M13.5 6.50024L17.5 10.5002M4 20.0003H8L18.5 9.5003C19.0304 8.96987 19.3284 8.25045 19.3284 7.5003C19.3284 6.75016 19.0304 6.03074 18.5 5.5003C17.9696 4.96987 17.2501 4.67188 16.5 4.67188C15.7499 4.67187 15.0304 4.96987 14.5 5.5003L4 16.0003V20.0003Z" stroke="#1C1C1C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
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
              <div class="left_part_product_header">
                <div class="search_container"><input type="search" class="search_input" placeholder="Search Product"></div><button class="btn filter_btn" type="button"><span class="filter_btn_base"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <g clip-path="url(#clip0_5284_15912)">
                        <path d="M4 4H20V6.172C19.9999 6.70239 19.7891 7.21101 19.414 7.586L15 12V19L9 21V12.5L4.52 7.572C4.18545 7.20393 4.00005 6.7244 4 6.227V4Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      </g>
                      <defs>
                        <clipPath id="clip0_5284_15912">
                          <rect width="24" height="24" fill="white" />
                        </clipPath>
                      </defs>
                    </svg> Filter by</span></button><button class="btn sort_btn" type="button"><span class="sort_btn_base"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <g clip-path="url(#clip0_5284_15919)">
                        <path d="M4 6H13M4 12H11M4 18H11M15 15L18 18M18 18L21 15M18 18V6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      </g>
                      <defs>
                        <clipPath id="clip0_5284_15919">
                          <rect width="24" height="24" fill="white" />
                        </clipPath>
                      </defs>
                    </svg> Sort by</span></button>
              </div>
              <div class="right_part_product_header">
                <div class="inventory_header_right_btn_icon_container"><button class="btn inventory_header_left_btn" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <g clip-path="url(#clip0_1917_11682)">
                        <path d="M13.5 6.5L17.5 10.5M4 20.0001H8L18.5 9.50006C19.0304 8.96963 19.3284 8.2502 19.3284 7.50006C19.3284 6.74991 19.0304 6.03049 18.5 5.50006C17.9696 4.96963 17.2501 4.67163 16.5 4.67163C15.7499 4.67163 15.0304 4.96963 14.5 5.50006L4 16.0001V20.0001Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      </g>
                      <defs>
                        <clipPath id="clip0_1917_11682">
                          <rect width="24" height="24" fill="white" />
                        </clipPath>
                      </defs>
                    </svg></button></div>
                <div class="inventory_header_right_btn_icon_container"><button class="btn inventory_header_right_btn" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <g clip-path="url(#clip0_3686_18447)">
                        <path d="M19 8C19.5304 8 20.0391 7.78929 20.4142 7.41421C20.7893 7.03914 21 6.53043 21 6C21 5.46957 20.7893 4.96086 20.4142 4.58579C20.0391 4.21071 19.5304 4 19 4H5C4.46957 4 3.96086 4.21071 3.58579 4.58579C3.21071 4.96086 3 5.46957 3 6C3 6.53043 3.21071 7.03914 3.58579 7.41421C3.96086 7.78929 4.46957 8 5 8M19 8H5M19 8V18C19 18.5304 18.7893 19.0391 18.4142 19.4142C18.0391 19.7893 17.5304 20 17 20H7C6.46957 20 5.96086 19.7893 5.58579 19.4142C5.21071 19.0391 5 18.5304 5 18V8M10 12H14" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      </g>
                      <defs>
                        <clipPath id="clip0_3686_18447">
                          <rect width="24" height="24" fill="white" />
                        </clipPath>
                      </defs>
                    </svg></button></div>
              </div>
            </div>
            <div id="empty_state_container" class="empty_state_container">
              <div class="empty_state">
                <div><svg xmlns="http://www.w3.org/2000/svg" width="176" height="110" viewBox="0 0 176 110" fill="none">
                    <g clip-path="url(#clip0_3910_24046)">
                      <path d="M135.118 83.0864C142.305 65.1185 140.131 45.0554 130.862 29.6466L33.8338 43.0813L126.818 23.7028C87.629 -25.1661 11.3536 7.24805 18.7062 68.9485L135.118 83.0864Z" fill="#E6E6E6" />
                      <path d="M139.397 63.2246H15.7821V101.717H139.397V63.2246Z" fill="#004D53" />
                      <path d="M50.2572 58.5303C51.3663 59.3916 51.7718 59.6696 52.008 59.6343C63.4515 62.9667 53.4196 66.872 47.8595 60.2429L50.2572 58.5303Z" fill="#FFB8B8" />
                      <path d="M12.4962 93.7372V101.561L18.1292 101.248L16.5646 93.1113L12.4962 93.7372Z" fill="#FFB8B8" />
                      <path d="M43.7911 93.7372V101.561L38.158 101.248L39.7228 93.1113L43.7911 93.7372Z" fill="#FFB8B8" />
                      <path d="M26.5789 53.3667L35.0285 53.0537C54.5208 73.4886 47.1492 68.8278 46.6077 96.8667L36.2803 93.7372L38.471 74.3343C38.4721 74.3336 39.0489 73.9491 38.5695 73.9402C35.5711 74.9706 33.3835 62.2132 26.8918 63.694C19.5047 63.3406 18.3021 74.2991 15.3127 74.3343L17.5033 93.7372L7.17598 96.8667C6.01969 66.0548 0.352656 73.0152 18.7551 53.0537L26.5789 53.3667Z" fill="#2F2E41" />
                      <path d="M14.0609 99.0574C14.0609 99.0574 12.8091 96.5538 11.2443 97.8056C9.67959 99.0574 5.92418 102.813 5.92418 102.813C5.92418 102.813 -3.15137 106.881 2.48173 109.385C8.11483 111.888 12.8091 105.942 12.8091 105.942C18.1745 104.823 21.2694 104.107 18.424 98.2546C16.8085 98.9536 14.5224 99.7629 14.0609 99.0574Z" fill="#2F2E41" />
                      <path d="M42.2264 99.0574C42.2264 99.0574 43.4782 96.5538 45.043 97.8056C46.6077 99.0574 50.3631 102.813 50.3631 102.813C50.3631 102.813 59.4387 106.881 53.8056 109.385C48.1725 111.888 43.4782 105.942 43.4782 105.942C38.1128 104.823 35.018 104.107 37.8633 98.2546C39.4788 98.9536 41.7649 99.7629 42.2264 99.0574Z" fill="#2F2E41" />
                      <path d="M35.0286 18.0033C34.5631 25.7939 23.9306 25.108 23.7624 18.0032C24.2278 10.2127 34.8603 10.8985 35.0286 18.0033Z" fill="#FFB8B8" />
                      <path d="M26.8918 22.0717C29.6296 30.3461 23.1659 25.8412 32.212 32.399L35.6544 25.5141C35.6544 25.5141 33.1508 24.5753 33.4638 21.1328L26.8918 22.0717Z" fill="#FFB8B8" />
                      <path d="M43.7911 26.7661L34.4622 24.6367C34.7246 30.2618 28.7216 29.1296 27.6742 26.3001L18.7551 31.4603C22.4987 45.4031 21.5499 45.9784 16.5645 54.9316C14.6618 56.669 17.5073 57.6648 19.9844 56.7141C21.8738 55.548 22.8333 54.5117 24.8578 54.7754C34.4241 56.7673 42.3878 57.2375 43.6481 56.4591C44.0991 55.8137 43.6351 26.8781 43.7911 26.7661Z" fill="#575A89" />
                      <path d="M41.2875 27.3919C41.6005 27.3919 43.2125 26.6339 43.2125 26.6339C47.9026 26.5549 51.05 58.1031 51.3019 58.9999L48.1724 61.1905L43.1652 48.3596L41.2875 27.3919Z" fill="#575A89" />
                      <path d="M19.381 64.0068C19.5411 65.1878 19.8134 78.4514 24.5647 72.2557C25.188 67.7355 23.0687 66.3861 22.5105 63.3809L19.381 64.0068Z" fill="#FFB8B8" />
                      <path d="M20.6329 31.4601L19.674 30.9285C17.1033 30.844 17.9135 37.6489 16.8258 42.6323C15.9373 48.4379 16.1903 54.8394 17.2327 63.3979C17.3239 66.5385 22.9491 64.56 23.7624 64.3199C23.7624 64.3199 21.8847 51.4889 22.8235 49.2983C23.7624 47.1076 20.6329 31.4601 20.6329 31.4601Z" fill="#575A89" />
                      <path d="M34.7823 12.5423C33.9132 11.131 32.5529 10.0911 30.9631 9.6226L29.7954 10.5567L30.2494 9.46717C29.8676 9.40893 29.4813 9.3866 29.0953 9.40047L28.0447 10.7513L28.4795 9.44674C23.9713 9.9308 21.3041 15.106 23.6445 18.728C24.0056 17.6185 24.4437 16.5775 24.8048 15.468C25.0885 15.5067 25.3761 15.5081 25.6602 15.4722L26.0994 14.4473L26.2221 15.4288C27.5836 15.3102 29.6029 15.0498 30.8936 14.8112L30.7681 14.0582L31.5189 14.6839C31.9144 14.5929 32.1492 14.5104 32.1298 14.4473C33.0897 15.9947 34.0408 16.9832 35.0007 18.5306C35.365 16.3479 36.0083 14.5335 34.7823 12.5423Z" fill="#2F2E41" />
                      <path d="M131.999 67.8682H104.698V80.8183H131.999V67.8682Z" fill="white" />
                      <path d="M126.836 70.5806H109.861V72.1334H126.836V70.5806Z" fill="#E6E6E6" />
                      <path d="M126.836 73.5669H109.861V75.1197H126.836V73.5669Z" fill="#E6E6E6" />
                      <path d="M126.836 76.5527H109.861V78.1055H126.836V76.5527Z" fill="#E6E6E6" />
                      <path d="M80.9242 70.9443L80.0361 69.4063L79.1483 67.8682L78.2602 69.4063L77.3721 70.9443H78.3263V75.3982H79.97V70.9443H80.9242Z" fill="white" />
                      <path d="M141.096 102.635C145.134 102.635 148.408 99.3616 148.408 95.3233C148.408 91.285 145.134 88.0112 141.096 88.0112C137.058 88.0112 133.784 91.285 133.784 95.3233C133.784 99.3616 137.058 102.635 141.096 102.635Z" fill="#3F3D56" />
                      <path d="M142.426 98.5642C144.215 98.5642 145.666 97.1133 145.666 95.3236C145.666 93.5339 144.215 92.083 142.426 92.083C140.636 92.083 139.185 93.5339 139.185 95.3236C139.185 97.1133 140.636 98.5642 142.426 98.5642Z" fill="#E6E6E6" />
                      <path d="M136.484 100.434L152.438 107.081L151.94 108.66L142.758 107.621L127.22 100.724L135.861 101.722L136.484 100.434Z" fill="#3F3D56" />
                      <path d="M150.587 106.781L170.428 41.6938L175.26 33.113L175.277 33.0301C175.293 32.9544 175.648 31.1609 174.775 29.862C174.555 29.5391 174.271 29.265 173.94 29.0568C173.61 28.8485 173.24 28.7106 172.854 28.6516C170.187 28.1516 164.221 27.9053 163.968 27.895L163.921 27.8931L163.873 27.8995C163.71 27.9217 159.897 28.4791 159.036 31.8085L154.887 39.3581L154.871 39.4118L136.092 101.149L137.126 101.463L155.888 39.7798L160.05 32.2049L160.067 32.1352C160.677 29.6298 163.59 29.0436 163.978 28.9766C164.587 29.0026 170.195 29.2521 172.654 29.7133C172.899 29.7466 173.133 29.8303 173.344 29.9589C173.554 30.0876 173.735 30.2585 173.876 30.4609C174.414 31.2572 174.279 32.4297 174.232 32.7379L169.429 41.2663L169.412 41.3226L149.553 106.466L150.587 106.781Z" fill="#3F3D56" />
                      <path d="M153.488 45.6001L153.296 46.6631L167.626 49.2513L167.818 48.1883L153.488 45.6001Z" fill="#3F3D56" />
                      <path d="M150.811 54.4402L150.595 55.4985L164.823 58.4024L165.039 57.344L150.811 54.4402Z" fill="#3F3D56" />
                      <path d="M146.046 70.2506L145.749 71.2891L159.64 75.2638L159.937 74.2253L146.046 70.2506Z" fill="#3F3D56" />
                      <path d="M155.44 100.895L155.834 99.889L142.351 94.6096L141.689 87.4408L154.273 92.1411L158.35 98.0401L159.239 97.4261L154.969 91.2478L140.455 85.8267L141.337 95.3726L155.44 100.895Z" fill="#3F3D56" />
                      <path d="M160.124 109.615C164.162 109.615 167.436 106.342 167.436 102.303C167.436 98.2649 164.162 94.9912 160.124 94.9912C156.086 94.9912 152.812 98.2649 152.812 102.303C152.812 106.342 156.086 109.615 160.124 109.615Z" fill="#3F3D56" />
                      <path d="M162.035 105.876C163.825 105.876 165.276 104.425 165.276 102.636C165.276 100.846 163.825 99.395 162.035 99.395C160.245 99.395 158.795 100.846 158.795 102.636C158.795 104.425 160.245 105.876 162.035 105.876Z" fill="#E6E6E6" />
                    </g>
                    <defs>
                      <clipPath id="clip0_3910_24046">
                        <rect width="174.723" height="110" fill="white" transform="translate(0.638489)" />
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
              </div><button id="add_product" class="btn add_product" type="button"><span class="add_product_base"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                    <g clip-path="url(#clip0_5334_16405)" filter="url(#filter0_d_5334_16405)">
                      <path d="M12.5 5V19M5.5 12H19.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                    <defs>
                      <filter id="filter0_d_5334_16405" x="-1.5" y="0" width="28" height="28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                        <feOffset dy="2" />
                        <feGaussianBlur stdDeviation="1" />
                        <feComposite in2="hardAlpha" operator="out" />
                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" />
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5334_16405" />
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5334_16405" result="shape" />
                      </filter>
                      <clipPath id="clip0_5334_16405">
                        <rect width="24" height="24" fill="white" transform="translate(0.5)" />
                      </clipPath>
                    </defs>
                  </svg> Add Product</span></button>
            </div>
            <div id="product_table_container" class="product_table_container">
              <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th><input id="SelectAll" type="checkbox" class="checkbox"></th>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>On Hand</th>
                    <th>Date Stocked</th>
                    <th>Expiration Date</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody id="inventory_table_body" class="inventoryTableBody">
                 @foreach($productInfo as $medInfo)
                 @php
                  $medBatch = $productBatch->where('med_id', $medInfo->id)->first();
                 @endphp
                 @if ($medBatch)
                 <tr data-row-id="{{ $medInfo->id }}">
                  <td><input type="checkbox"></td>
                  <td>{{ $medInfo->item_name }}</td>
                  <td>{{ $medInfo->product_type }}</td>
                  <td>{{ $medInfo->quantity }}</td>
                  <td>{{ $medBatch->date_stocked }}</td>
                  <td>{{ $medBatch->expiration_date }}</td>
                  <td>
                   <div class="dropdown">
                    <button class="dropbtn">Actions</button>
                    <div class="dropdown-content" id="dropdown-content">
                     <button data-action="AddStock" id="addStock" data-product-type="{{ $medInfo->product_type }}" data-product-id="{{ $medInfo->id }}">
                      <div class="action_button_text" id="action_button_text"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <g clip-path="url(#clip0_4467_23446)">
                       <path d="M9 12H15M12 9V15M3 12C3 13.1819 3.23279 14.3522 3.68508 15.4442C4.13738 16.5361 4.80031 17.5282 5.63604 18.364C6.47177 19.1997 7.46392 19.8626 8.55585 20.3149C9.64778 20.7672 10.8181 21 12 21C13.1819 21 14.3522 20.7672 15.4442 20.3149C16.5361 19.8626 17.5282 19.1997 18.364 18.364C19.1997 17.5282 19.8626 16.5361 20.3149 15.4442C20.7672 14.3522 21 13.1819 21 12C21 10.8181 20.7672 9.64778 20.3149 8.55585C19.8626 7.46392 19.1997 6.47177 18.364 5.63604C17.5282 4.80031 16.5361 4.13738 15.4442 3.68508C14.3522 3.23279 13.1819 3 12 3C10.8181 3 9.64778 3.23279 8.55585 3.68508C7.46392 4.13738 6.47177 4.80031 5.63604 5.63604C4.80031 6.47177 4.13738 7.46392 3.68508 8.55585C3.23279 9.64778 3 10.8181 3 12Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      </g>
                      <defs>
                       <clipPath id="clip0_4467_23446">
                       <rect width="24" height="24" fill="white"/>
                       </clipPath>
                      </defs>
                      </svg>Add Stock</div></button>
                     <button data-action="View" class="viewButton" data-product-type="{{ $medInfo->product_type }}" data-product-id="{{ $medInfo->id }}" >
                      <div class="action_button_text"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <g clip-path="url(#clip0_1917_11689)">
                       <path d="M10 12C10 12.5304 10.2107 13.0391 10.5858 13.4142C10.9609 13.7893 11.4696 14 12 14C12.5304 14 13.0391 13.7893 13.4142 13.4142C13.7893 13.0391 14 12.5304 14 12C14 11.4696 13.7893 10.9609 13.4142 10.5858C13.0391 10.2107 12.5304 10 12 10C11.4696 10 10.9609 10.2107 10.5858 10.5858C10.2107 10.9609 10 11.4696 10 12Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                       <path d="M21 12C18.6 16 15.6 18 12 18C8.4 18 5.4 16 3 12C5.4 8 8.4 6 12 6C15.6 6 18.6 8 21 12Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      </g>
                      <defs>
                       <clipPath id="clip0_1917_11689">
                       <rect width="24" height="24" fill="white"/>
                       </clipPath>
                      </defs>
                      </svg>View</div></button>
                     <button data-action="Edit" id='editButton' data-product-type="{{ $medInfo->product_type }}" data-product-id="{{ $medInfo->id }}">
                      <div class="action_button_text"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <g clip-path="url(#clip0_4467_23582)">
                       <path d="M13.5 6.5L17.5 10.5M4 20.0001H8L18.5 9.50006C19.0304 8.96963 19.3284 8.2502 19.3284 7.50006C19.3284 6.74991 19.0304 6.03049 18.5 5.50006C17.9696 4.96963 17.2501 4.67163 16.5 4.67163C15.7499 4.67163 15.0304 4.96963 14.5 5.50006L4 16.0001V20.0001Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      </g>
                      <defs>
                       <clipPath id="clip0_4467_23582">
                       <rect width="24" height="24" fill="white"/>
                       </clipPath>
                      </defs>
                      </svg>Edit</div></button>
                              <button data-action="Archive"><div class="action_button_text"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <g clip-path="url(#clip0_4467_23688)">
                       <path d="M19 8C19.5304 8 20.0391 7.78929 20.4142 7.41421C20.7893 7.03914 21 6.53043 21 6C21 5.46957 20.7893 4.96086 20.4142 4.58579C20.0391 4.21071 19.5304 4 19 4H5C4.46957 4 3.96086 4.21071 3.58579 4.58579C3.21071 4.96086 3 5.46957 3 6C3 6.53043 3.21071 7.03914 3.58579 7.41421C3.96086 7.78929 4.46957 8 5 8M19 8H5M19 8V18C19 18.5304 18.7893 19.0391 18.4142 19.4142C18.0391 19.7893 17.5304 20 17 20H7C6.46957 20 5.96086 19.7893 5.58579 19.4142C5.21071 19.0391 5 18.5304 5 18V8M10 12H14" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      </g>
                      <defs>
                       <clipPath id="clip0_4467_23688">
                       <rect width="24" height="24" fill="white"/>
                       </clipPath>
                      </defs>
                      </svg>Archive</div></button>
                    </div>
                   </div>
                  </td>
                 </tr>
                 @endif
                 @endforeach<!-- Add this section inside the <tbody> element of your table -->
                 @foreach($productInfo as $vitInfo)
                 @php
                  $vitBatch = $productBatch->where('vit_id', $vitInfo->id)->first();
                 @endphp
                 @if ($vitBatch)
                 <tr data-row-id="{{ $vitInfo->id }}">
                  <td><input type="checkbox"></td>
                  <td>{{ $vitInfo->item_name }}</td>
                  <td>{{ $vitInfo->product_type }}</td>
                  <td>{{ $vitInfo->quantity }}</td>
                  <td>{{ $vitBatch->date_stocked }}</td>
                  <td>{{ $vitBatch->expiration_date }}</td>
                  <td>
                   <div class="dropdown">
                    <button class="dropbtn">Actions</button>
                    <div class="dropdown-content" id="dropdown-content">
                     <button data-action="AddStock" id="addStock"><div class="action_button_text" id="action_button_text"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <g clip-path="url(#clip0_4467_23446)">
                       <path d="M9 12H15M12 9V15M3 12C3 13.1819 3.23279 14.3522 3.68508 15.4442C4.13738 16.5361 4.80031 17.5282 5.63604 18.364C6.47177 19.1997 7.46392 19.8626 8.55585 20.3149C9.64778 20.7672 10.8181 21 12 21C13.1819 21 14.3522 20.7672 15.4442 20.3149C16.5361 19.8626 17.5282 19.1997 18.364 18.364C19.1997 17.5282 19.8626 16.5361 20.3149 15.4442C20.7672 14.3522 21 13.1819 21 12C21 10.8181 20.7672 9.64778 20.3149 8.55585C19.8626 7.46392 19.1997 6.47177 18.364 5.63604C17.5282 4.80031 16.5361 4.13738 15.4442 3.68508C14.3522 3.23279 13.1819 3 12 3C10.8181 3 9.64778 3.23279 8.55585 3.68508C7.46392 4.13738 6.47177 4.80031 5.63604 5.63604C4.80031 6.47177 4.13738 7.46392 3.68508 8.55585C3.23279 9.64778 3 10.8181 3 12Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      </g>
                      <defs>
                       <clipPath id="clip0_4467_23446">
                       <rect width="24" height="24" fill="white"/>
                       </clipPath>
                      </defs>
                      </svg>Add Stock</div></button>
                      <button data-action="View" class="viewButton" data-product-type="{{ $vitInfo->product_type }}" data-product-id="{{ $vitInfo->id }}" ><div class="action_button_text"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <g clip-path="url(#clip0_1917_11689)">
                       <path d="M10 12C10 12.5304 10.2107 13.0391 10.5858 13.4142C10.9609 13.7893 11.4696 14 12 14C12.5304 14 13.0391 13.7893 13.4142 13.4142C13.7893 13.0391 14 12.5304 14 12C14 11.4696 13.7893 10.9609 13.4142 10.5858C13.0391 10.2107 12.5304 10 12 10C11.4696 10 10.9609 10.2107 10.5858 10.5858C10.2107 10.9609 10 11.4696 10 12Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                       <path d="M21 12C18.6 16 15.6 18 12 18C8.4 18 5.4 16 3 12C5.4 8 8.4 6 12 6C15.6 6 18.6 8 21 12Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      </g>
                      <defs>
                       <clipPath id="clip0_1917_11689">
                       <rect width="24" height="24" fill="white"/>
                       </clipPath>
                      </defs>
                      </svg>View</div></button>
                     <button data-action="Edit"  id='editButton' data-product-type="{{ $vitInfo->product_type }}" data-product-id="{{ $vitInfo->id }}">
                      <div class="action_button_text"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <g clip-path="url(#clip0_4467_23582)">
                       <path d="M13.5 6.5L17.5 10.5M4 20.0001H8L18.5 9.50006C19.0304 8.96963 19.3284 8.2502 19.3284 7.50006C19.3284 6.74991 19.0304 6.03049 18.5 5.50006C17.9696 4.96963 17.2501 4.67163 16.5 4.67163C15.7499 4.67163 15.0304 4.96963 14.5 5.50006L4 16.0001V20.0001Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      </g>
                      <defs>
                       <clipPath id="clip0_4467_23582">
                       <rect width="24" height="24" fill="white"/>
                       </clipPath>
                      </defs>
                      </svg>Edit</div></button>
                              <button data-action="Archive"><div class="action_button_text"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <g clip-path="url(#clip0_4467_23688)">
                       <path d="M19 8C19.5304 8 20.0391 7.78929 20.4142 7.41421C20.7893 7.03914 21 6.53043 21 6C21 5.46957 20.7893 4.96086 20.4142 4.58579C20.0391 4.21071 19.5304 4 19 4H5C4.46957 4 3.96086 4.21071 3.58579 4.58579C3.21071 4.96086 3 5.46957 3 6C3 6.53043 3.21071 7.03914 3.58579 7.41421C3.96086 7.78929 4.46957 8 5 8M19 8H5M19 8V18C19 18.5304 18.7893 19.0391 18.4142 19.4142C18.0391 19.7893 17.5304 20 17 20H7C6.46957 20 5.96086 19.7893 5.58579 19.4142C5.21071 19.0391 5 18.5304 5 18V8M10 12H14" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      </g>
                      <defs>
                       <clipPath id="clip0_4467_23688">
                       <rect width="24" height="24" fill="white"/>
                       </clipPath>
                      </defs>
                      </svg>Archive</div></button>
                    </div>
                   </div>
                  </td>
                 </tr>
                 @endif
                 @endforeach
                 @foreach($productInfo as $vaxInfo)
                 @php
                  $vaxBatch = $productBatch->where('vax_id', $vaxInfo->id)->first();
                 @endphp
                 @if ($vaxBatch)
                 <tr data-row-id="{{ $vaxInfo->id }}">
                  <td><input type="checkbox"></td>
                  <td>{{ $vaxInfo->item_name }}</td>
                  <td>{{ $vaxInfo->product_type }}</td>
                  <td>{{ $vaxInfo->quantity }}</td>
               
                  <td>{{ $vaxBatch->date_stocked }}</td>
                  <td>{{ $vaxBatch->expiration_date }}</td>
                  <td>
                  <div class="dropdown">
                   <button class="dropbtn">Actions</button>
                   <div class="dropdown-content" id="dropdown-content">
                    <button data-action="AddStock" id="addStock"><div class="action_button_text" id="action_button_text"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                     <g clip-path="url(#clip0_4467_23446)">
                      <path d="M9 12H15M12 9V15M3 12C3 13.1819 3.23279 14.3522 3.68508 15.4442C4.13738 16.5361 4.80031 17.5282 5.63604 18.364C6.47177 19.1997 7.46392 19.8626 8.55585 20.3149C9.64778 20.7672 10.8181 21 12 21C13.1819 21 14.3522 20.7672 15.4442 20.3149C16.5361 19.8626 17.5282 19.1997 18.364 18.364C19.1997 17.5282 19.8626 16.5361 20.3149 15.4442C20.7672 14.3522 21 13.1819 21 12C21 10.8181 20.7672 9.64778 20.3149 8.55585C19.8626 7.46392 19.1997 6.47177 18.364 5.63604C17.5282 4.80031 16.5361 4.13738 15.4442 3.68508C14.3522 3.23279 13.1819 3 12 3C10.8181 3 9.64778 3.23279 8.55585 3.68508C7.46392 4.13738 6.47177 4.80031 5.63604 5.63604C4.80031 6.47177 4.13738 7.46392 3.68508 8.55585C3.23279 9.64778 3 10.8181 3 12Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                     </g>
                     <defs>
                      <clipPath id="clip0_4467_23446">
                      <rect width="24" height="24" fill="white"/>
                      </clipPath>
                     </defs>
                     </svg>Add Stock</div></button>
                     <button data-action="View" class="viewButton" data-product-type="{{ $vaxInfo->product_type }}" data-product-id="{{ $vaxInfo->id }}" ><div class="action_button_text"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                     <g clip-path="url(#clip0_1917_11689)">
                      <path d="M10 12C10 12.5304 10.2107 13.0391 10.5858 13.4142C10.9609 13.7893 11.4696 14 12 14C12.5304 14 13.0391 13.7893 13.4142 13.4142C13.7893 13.0391 14 12.5304 14 12C14 11.4696 13.7893 10.9609 13.4142 10.5858C13.0391 10.2107 12.5304 10 12 10C11.4696 10 10.9609 10.2107 10.5858 10.5858C10.2107 10.9609 10 11.4696 10 12Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M21 12C18.6 16 15.6 18 12 18C8.4 18 5.4 16 3 12C5.4 8 8.4 6 12 6C15.6 6 18.6 8 21 12Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                     </g>
                     <defs>
                      <clipPath id="clip0_1917_11689">
                      <rect width="24" height="24" fill="white"/>
                      </clipPath>
                     </defs>
                     </svg>View</div></button>
                    <button data-action="Edit"  id='editButton' data-product-type="{{ $vaxInfo->product_type }}" data-product-id="{{ $vaxInfo->id }}">
                     <div class="action_button_text"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                     <g clip-path="url(#clip0_4467_23582)">
                      <path d="M13.5 6.5L17.5 10.5M4 20.0001H8L18.5 9.50006C19.0304 8.96963 19.3284 8.2502 19.3284 7.50006C19.3284 6.74991 19.0304 6.03049 18.5 5.50006C17.9696 4.96963 17.2501 4.67163 16.5 4.67163C15.7499 4.67163 15.0304 4.96963 14.5 5.50006L4 16.0001V20.0001Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                     </g>
                     <defs>
                      <clipPath id="clip0_4467_23582">
                      <rect width="24" height="24" fill="white"/>
                      </clipPath>
                     </defs>
                     </svg>Edit</div></button>
                    <button data-action="Archive"><div class="action_button_text"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                     <g clip-path="url(#clip0_4467_23688)">
                      <path d="M19 8C19.5304 8 20.0391 7.78929 20.4142 7.41421C20.7893 7.03914 21 6.53043 21 6C21 5.46957 20.7893 4.96086 20.4142 4.58579C20.0391 4.21071 19.5304 4 19 4H5C4.46957 4 3.96086 4.21071 3.58579 4.58579C3.21071 4.96086 3 5.46957 3 6C3 6.53043 3.21071 7.03914 3.58579 7.41421C3.96086 7.78929 4.46957 8 5 8M19 8H5M19 8V18C19 18.5304 18.7893 19.0391 18.4142 19.4142C18.0391 19.7893 17.5304 20 17 20H7C6.46957 20 5.96086 19.7893 5.58579 19.4142C5.21071 19.0391 5 18.5304 5 18V8M10 12H14" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                     </g>
                     <defs>
                      <clipPath id="clip0_4467_23688">
                      <rect width="24" height="24" fill="white"/>
                      </clipPath>
                     </defs>
                     </svg>Archive</div></button>
                   </div>
                  </div>
                  </td>
                 </tr>
                 @endif
                @endforeach
                </tbody>
              </table>
              <div class="pagination">
                <div class="pagination-menu">
                  <span>Go to:</span>
                  <select class="paginationGoToSelect">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                </div>
                <div class="pagination-pages">
                  <span class="pagination-arrow previous-page">
                    <svg xmlns="http://www.w3.org/2000/svg" width="7" height="14" viewBox="0 0 7 14" fill="none">
                      <path d="M5.48 12L1.36452 7.88384C0.878492 7.39773 0.878492 6.60227 1.36452 6.11616L5.48 2" stroke="#1C1C1C" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="square" stroke-linejoin="round" />
                    </svg>
                  </span>
                  <div class="pages">
                    <span class="pagination-page active">1</span>
                    <span class="pagination-page">2</span>
                    <span class="pagination-page">3</span>
                    <span class="pagination-page">4</span>
                    <span class="pagination-page">5</span>
                  </div>
                  <span class="pagination-arrow next-page">
                    <svg xmlns="http://www.w3.org/2000/svg" width="7" height="14" viewBox="0 0 7 14" fill="none">
                      <path d="M1.47998 12L5.59546 7.88384C6.08149 7.39773 6.08149 6.60227 5.59546 6.11616L1.47998 2" stroke="#1C1C1C" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="square" stroke-linejoin="round" />
                    </svg>
                  </span>
                </div>
                <div class="pagination-items">
                  <span>Show:</span>
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
            <div></div>
          </div>
          <div id="prod_detail_header" class="prod_detail_header">
            <h1>Edit Product Information</h1>
          </div>
          <div id="prod_detail" class="prod_detail">
            <div class="product_detail_header"><button class="btn product_back_btn" type="button"><span class="view_back_btn_base"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                    <g clip-path="url(#clip0_5345_14456)" filter="url(#filter0_d_5345_14456)">
                      <path d="M5.5 12H19.5M5.5 12L11.5 18M5.5 12L11.5 6" stroke="#045B62" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                    <defs>
                      <filter id="filter0_d_5345_14456" x="-1.5" y="0" width="28" height="28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                        <feOffset dy="2" />
                        <feGaussianBlur stdDeviation="1" />
                        <feComposite in2="hardAlpha" operator="out" />
                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" />
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5345_14456" />
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5345_14456" result="shape" />
                      </filter>
                      <clipPath id="clip0_5345_14456">
                        <rect width="24" height="24" fill="white" transform="translate(0.5)" />
                      </clipPath>
                    </defs>
                  </svg> Back</span></button></div>
            <div class="prod_detail_body">
              <form class="mb-3 prod_detail_fields_container">
                <div class="new_input_row">
                  <div class="form-floating"><select class="form-select form-select" data-id="product-categ" id="product-categ-3">
                      <option value="none" selected="">Select a Product</option>
                      <option value="Medicine">Medicine</option>
                      <option value="Vaccine">Vaccine</option>
                      <option value="Vitamin">Vitamin</option>
                    </select><label class="form-label form-label" for="product-categ">Product Category</label>
                    <div id="error-product_categ-3" class="error-message"><span>Please select a category.</span></div>
                  </div>
                  <div class="form-floating"><select class="form-select form-select" data-id="product_name" id="product_name-3">
                      <option value="none" selected="">Select a Product Name</option>
                    </select><label class="form-label form-label" for="product_name">Product Name</label>
                    <div id="error-product_name-3" class="error-message"><span>Please select product name.</span></div>
                  </div>
                  <div class="form-floating"><input class="form-control form-control" type="text" data-id="product_code" id="product_code-3" placeholder="Product Code"><label class="form-label form-label" for="product_code">Product Code</label>
                    <div class="error-message" id="error-product_code-3"><span>Please enter product code.</span></div>
                  </div>
                  <div class="form-floating"><input class="form-control form-control" type="text" data-id="batch_number" id="batch_number-3" placeholder="Batch Number"><label class="form-label form-label" for="batch_number">Batch Number</label>
                    <div class="error-message" id="error-batch_number-3"><span>Please enter batch number.</span></div>
                  </div>
                </div>
                <div class="new_input_row">
                  <div class="form-floating" style="width:100%;"><input class="form-control form-control" data-id="manufactured_date" id="manufactured_date-3" placeholder="Manufactured Date" type="date"><label class="form-label form-label" for="manufactured_date">Manufactured Date</label>
                    <div class="error-message" id="error-manufactured_date-3"><span>Please enter the manufactured date.</span></div>
                  </div>
                  <div class="form-floating" style="width:100%;"><input class="form-control form-control" data-id="expiration_date" id="expiration_date-3" placeholder="Expiration Date" type="date"><label class="form-label form-label" for="expiration_date">Expiration Date</label>
                    <div class="error-message" id="error-expiration_date-3"><span>Please enter the expiration date.</span></div>
                  </div>
                  <div class="form-floating" style="width:100%;"><input class="form-control form-control" data-id="datestocked" id="datestocked-3" placeholder="Expiration Date" type="date"><label class="form-label form-label" for="datestocked">Date Stocked</label>
                    <div class="error-message" id="error-datestocked-3"><span>Please enter the date stocked.</span></div>
                  </div>
                </div>
                <div class="form-floating" style="width:100%;"><textarea class="form-control" id="prod_description-3" data-id="prod_description" placeholder="Product Description"></textarea><label class="form-label form-label" for="prod_description">Product Description</label>
                  <div id="error-prod_description-3" class="error-message"><span>Please enter product description.</span></div>
                </div>
                <div class="quantity_input_container_edit">
                  <h1>Quantity</h1>
                  <div class="form-floating">
                    <div class="quantity_input"><button class="quantity_minus" type="button" onclick="decrementQuantity()">-</button><input type="number" aria-labelledby="label-quantity" class="input_quantity" data-id="quantity" id="quantity-3" min="0" name="quantity" required="" value="0"><button class="quantity_add" type="button" onclick="incrementQuantity()">+</button>
                      <div id="error-quantity-3" class="error-message"><span>Please input a quantity value more than 0.</span></div>
                    </div>
                  </div>
                </div>
              </form>
              <div class="mb-3 prod_detail_fields_buttons"><button class="btn cancel_edit" id="cancel_edit" type="button"><span class="cancel_edit_base">Cancel</span></button><button class="btn edit_save_changes" id="edit_save_changes" type="button"><span class="edit_save_changes_base">Save Changes</span></button></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <div class="modal fade" role="dialog" tabindex="-1" id="add_product_modal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title">Add New Product</h1><button class="btn-close" aria-label="Close" data-bs-dismiss="modal" type="button"></button>
        </div>
        <div class="modal-body">
          <form id="add_product_form" method="POST" action="{{ route('inv.store') }}">
            @csrf
            <div class="mb-3 input_container">
              <div class="new_input_row">
                <div class="form-floating"><select class="form-select form-select" name="product_type" data-id="product-categ" id="product-categ">
                    <option value="none" selected="">Select a Product</option>
                    <option value="Medicine">Medicine</option>
                    <option value="Vaccine">Vaccine</option>
                    <option value="Vitamin">Vitamin</option>
                  </select><label class="form-label form-label" for="product-categ">Product Category</label>
                  <div id="error-product_categ" class="error-message"><span>Please select a category.</span></div>
                </div>
                <div class="form-floating"><select class="form-select form-select" name="item_name" data-id="product_name" id="product_name">
                    <option value="none" selected="">Select a Product Name</option>
                  </select><label class="form-label form-label" for="product_name">Product Name</label>
                  <div id="error-product_name" class="error-message"><span>Please select product name.</span></div>
                </div>
                <div class="form-floating"><input class="form-control form-control" type="text" name="product_code" data-id="product_code" id="product_code" placeholder="Product Code"><label class="form-label form-label" for="product_code">Product Code</label>
                  <div class="error-message" id="error-product_code"><span>Please enter product code.</span></div>
                </div>
                <div class="form-floating"><input class="form-control form-control" type="text" name="batch_no" data-id="batch_number" id="batch_number" placeholder="Batch Number"><label class="form-label form-label" for="batch_number">Batch Number</label>
                  <div class="error-message" id="error-batch_number"><span>Please enter batch number.</span></div>
                </div>
              </div>
              <div class="new_input_row">
                <div class="form-floating" style="width:100%;"><input class="form-control form-control" name="manufacturing_date" data-id="manufactured_date" id="manufactured_date" placeholder="Manufactured Date" type="date"><label class="form-label form-label" for="manufactured_date">Manufactured Date</label>
                  <div class="error-message" id="error-manufactured_date"><span>Please enter the manufactured date.</span></div>
                </div>
                <div class="form-floating" style="width:100%;"><input class="form-control form-control" name="expiration_date" data-id="expiration_date" id="expiration_date" placeholder="Expiration Date" type="date"><label class="form-label form-label" for="expiration_date">Expiration Date</label>
                  <div class="error-message" id="error-expiration_date"><span>Please enter the expiration date.</span></div>
                </div>
                <div class="form-floating" style="width:100%;"><input class="form-control form-control" name="date_stocked" data-id="datestocked" id="datestocked" placeholder="Expiration Date" type="date"><label class="form-label form-label" for="datestocked">Date Stocked</label>
                  <div class="error-message" id="error-datestocked"><span>Please enter the date stocked.</span></div>
                </div>
              </div>
              <div class="form-floating" style="width:100%;"><textarea class="form-control" name="prod_desc" id="prod_description" data-id="prod_description" placeholder="Product Description"></textarea><label class="form-label form-label" for="prod_description">Product Description</label>
                <div id="error-prod_description" class="error-message"><span>Please enter product description.</span></div>
              </div>
              <div class="quantity_input_container">
                <h1>Quantity</h1>
                <div class="form-floating">
                  <div class="quantity_input"><button class="quantity_minus" type="button" onclick="decrementQuantity()">-</button><input type="number" aria-labelledby="label-quantity" class="input_quantity" data-id="quantity" id="quantity" min="0" name="quantity" required="" value="0"><button class="quantity_add" type="button" onclick="incrementQuantity()">+</button>
                    <div id="error-quantity" class="error-message"><span>Please input a quantity value more than 0.</span></div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="modal-footer add_product_button"><button class="btn clear_form" type="button" role="button" aria-label="Clear Form" onclick="clearForm()"><span class="clear_form_base">Clear Form</span></button>
        <button class="btn disabled submit_product" id="submit_product" type="submit"  disabled=""><span class="submit_product_base">Submit</span></button></div>
      </div>
      </form>

    </div>
  </div>
  <div class="modal fade" role="dialog" tabindex="-1" id="add_product_modal-1">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title">Add New Product</h1><button class="btn-close" aria-label="Close" data-bs-dismiss="modal" type="button"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{ route('inv.store') }}">
            @csrf
            <div class="mb-3 input_container">
              <div class="new_input_row">
                <div class="form-floating"><select class="form-select form-select" data-id="product-categ" id="product-categ-1">
                    <option value="none" selected="">Select a product</option>
                    <option value="Medicine">Medicine</option>
                    <option value="Vaccine">Vaccine</option>
                    <option value="Vitamin">Vitamin</option>
                  </select><label class="form-label form-label" for="product-categ">Product Category</label>
                  <div id="error-product_categ-1" class="error-message"><span>Please select a category.</span></div>
                </div>
                <div class="form-floating"><select class="form-select form-select" data-id="product_name" id="product_name-1">
                    <option value="none" selected="">Select a Product Name</option>
                  </select><label class="form-label form-label" for="product_name">Product Name</label>
                  <div id="error-product_name-1" class="error-message"><span>Please select product name.</span></div>
                </div>
                <div class="form-floating"><input class="form-control form-control" type="text" data-id="product_code" id="product_code-1" placeholder="Product Code"><label class="form-label form-label" for="product_code">Product Code</label>
                  <div class="error-message" id="error-product_code-1"><span>Please enter product code.</span></div>
                </div>
                <div class="form-floating"><input class="form-control form-control" type="text" data-id="batch_number" id="batch_number-1" placeholder="Batch Number"><label class="form-label form-label" for="batch_number">Batch Number</label>
                  <div class="error-message" id="error-batch_number-1"><span>Please enter batch number.</span></div>
                </div>
              </div>
              <div class="new_input_row">
                <div class="form-floating" style="width:100%;"><input class="form-control form-control" data-id="manufactured_date" id="manufactured_date-1" placeholder="Manufactured Date" type="date"><label class="form-label form-label" for="manufactured_date">Manufactured Date</label>
                  <div class="error-message" id="error-manufactured_date-1"><span>Please enter the manufactured date.</span></div>
                </div>
                <div class="form-floating" style="width:100%;"><input class="form-control form-control" data-id="expiration_date" id="expiration_date-1" placeholder="Expiration Date" type="date"><label class="form-label form-label" for="expiration_date">Expiration Date</label>
                  <div class="error-message" id="error-expiration_date-1"><span>Please enter the expiration date.</span></div>
                </div>
                <div class="form-floating" style="width:100%;"><input class="form-control form-control" data-id="datestocked" id="datestocked-1" placeholder="Expiration Date" type="date"><label class="form-label form-label" for="datestocked">Date Stocked</label>
                  <div class="error-message" id="error-datestocked-1"><span>Please enter the date stocked.</span></div>
                </div>
              </div>
              <div class="form-floating" style="width:100%;"><textarea class="form-control" id="prod_description-1" data-id="prod_description" placeholder="Product Description"></textarea><label class="form-label form-label" for="prod_description">Product Description</label>
                <div id="error-prod_description-1" class="error-message"><span>Please enter product description.</span></div>
              </div>
              <div class="quantity_input_container">
                <h1>Quantity</h1>
                <div class="form-floating">
                  <div class="quantity_input"><button class="quantity_minus" type="button" onclick="decrementQuantity1()">-</button><input type="number" aria-labelledby="label-quantity" class="input_quantity" data-id="quantity" id="quantity-1" min="0" name="quantity" required="" value="0"><button class="quantity_add" type="button" onclick="incrementQuantity1()">+</button>
                    <div id="error-quantity-1" class="error-message"><span>Please input a quantity value more than 0.</span></div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer add_product_button"><button class="btn clear_form" type="button" role="button" aria-label="Clear Form" onclick="clearForm1()"><span class="clear_form_base">Clear Form</span></button><button class="btn disabled submit_product" id="submit_product-1" type="button" disabled=""><span class="submit_product_base">Submit</span></button></div>
      </div>
    </div>
  </div>
  <div id="add_stock_modal" class="modal fade" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
      <div class="modal-content add_stock_modal">
        <div class="modal-header">
          <h1 class="modal-title">Add Stock</h1><button class="btn-close" aria-label="Close" data-bs-dismiss="modal" type="button"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3 stock_input_container">
              <div class="stock_image_container"><img src="assets/img/image%209.png" /><span class="product_name">Product Name</span></div>
              <div class="new_input_row">
                <div class="form-floating batch_number"><input id="batch_number-2" class="form-control form-control" type="text" data-id="batch_number" placeholder="Batch Number" /><label class="form-label form-label" for="batch_number">Batch Number</label>
                  <div id="error-batch_number-2" class="error-message"><span>Please enter batch number.</span></div>
                </div>
              </div>
              <div class="new_input_row">
                <div class="form-floating" style="width: 100%;"><input id="manufactured_date-2" class="form-control form-control" data-id="manufactured_date" placeholder="Manufactured Date" type="date" /><label class="form-label form-label" for="manufactured_date">Manufactured Date</label>
                  <div id="error-manufactured_date-2" class="error-message"><span>Please enter the manufactured date.</span></div>
                </div>
                <div class="form-floating" style="width: 100%;"><input id="expiration_date-2" class="form-control form-control" data-id="expiration_date" placeholder="Expiration Date" type="date" /><label class="form-label form-label" for="expiration_date">Expiration Date</label>
                  <div id="error-expiration_date-2" class="error-message"><span>Please enter the expiration date.</span></div>
                </div>
                <div class="form-floating" style="width: 100%;"><input id="datestocked-2" class="form-control form-control" data-id="datestocked" placeholder="Expiration Date" type="date" /><label class="form-label form-label" for="datestocked">Date Stocked</label>
                  <div id="error-datestocked-2" class="error-message"><span>Please enter the date stocked.</span></div>
                </div>
              </div>
              <div class="quantity_input_container">
                <h1>Quantity</h1>
                <div class="form-floating">
                  <div class="quantity_input"><button class="quantity_minus" type="button">-</button><input id="quantity-2" class="input_quantity" type="number" aria-labelledby="label-quantity" data-id="quantity" min="0" name="quantity" required value="0" /><button class="quantity_add" type="button">+</button>
                    <div id="error-quantity-2" class="error-message"><span>Please input a quantity value more than 0.</span></div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer add_stock_buttons"><button class="btn cancel_btn" type="button" role="button" aria-label="Cancel"><span class="cancel_btn_base">Cancel</span></button><button id="add_stock" class="btn add_stock" type="button" onclick="closeAddStockModal()"><span class="add_stock_base">Add Stock</span></button></div>
      </div>
    </div>
  </div>
  <div class="modal fade show" role="dialog" tabindex="-1" id="add_product_success">
    <div class="modal-dialog" role="document">
      <div class="modal-content success_modal">
        <div class="modal-header success_header">
          <div class="success_icon_container"><span class="success_icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                <g clip-path="url(#clip0_5345_9689)">
                  <path d="M12 16L14.6667 18.6667L20 13.3333M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 14.4241 27.6896 12.8637 27.0866 11.4078C26.4835 9.95189 25.5996 8.62902 24.4853 7.51472C23.371 6.40042 22.0481 5.5165 20.5922 4.91345C19.1363 4.31039 17.5759 4 16 4C14.4241 4 12.8637 4.31039 11.4078 4.91345C9.95189 5.5165 8.62902 6.40042 7.51472 7.51472C6.40042 8.62902 5.5165 9.95189 4.91345 11.4078C4.31039 12.8637 4 14.4241 4 16Z" stroke="#5BB85A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
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
    <div class="modal-dialog" role="document">
      <div class="modal-content success_modal">
        <div class="modal-header success_header">
          <div class="success_icon_container"><span class="success_icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                <g clip-path="url(#clip0_5345_9689)">
                  <path d="M12 16L14.6667 18.6667L20 13.3333M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 14.4241 27.6896 12.8637 27.0866 11.4078C26.4835 9.95189 25.5996 8.62902 24.4853 7.51472C23.371 6.40042 22.0481 5.5165 20.5922 4.91345C19.1363 4.31039 17.5759 4 16 4C14.4241 4 12.8637 4.31039 11.4078 4.91345C9.95189 5.5165 8.62902 6.40042 7.51472 7.51472C6.40042 8.62902 5.5165 9.95189 4.91345 11.4078C4.31039 12.8637 4 14.4241 4 16Z" stroke="#5BB85A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
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
            <p>Your changes have been successfully saved.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade show" role="dialog" tabindex="-1" id="add_product_discard">
    <div class="modal-dialog" role="document">
      <div class="modal-content discard_modal">
        <div class="modal-header discard_header">
          <div class="discard_icon_container"><span class="discard_icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                <g clip-path="url(#clip0_5519_15576)">
                  <path d="M13.3333 13.3333L18.6667 18.6667M18.6667 13.3333L13.3333 18.6667M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 14.4241 27.6896 12.8637 27.0866 11.4078C26.4835 9.95189 25.5996 8.62902 24.4853 7.51472C23.371 6.40042 22.0481 5.5165 20.5922 4.91345C19.1363 4.31039 17.5759 4 16 4C14.4241 4 12.8637 4.31039 11.4078 4.91345C9.95189 5.5165 8.62902 6.40042 7.51472 7.51472C6.40042 8.62902 5.5165 9.95189 4.91345 11.4078C4.31039 12.8637 4 14.4241 4 16Z" stroke="#DA534F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
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
        <div class="modal-footer discard_footer"><button class="btn return_btn" id="return_btn" data-bs-dismiss="modal" type="button"><span class="return_btn_base">Return</span></button><button class="btn discard_btn" id="discard_btn" type="button"><span class="discard_btn_base">Discard</span></button></div>
      </div>
    </div>
  </div>
  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/appointmentforms.js') }}"></script>
  <script src="{{ asset('assets/js/calendar.js') }}"></script>
  <script src="{{ asset('assets/js/inventory.js') }}"></script>
  <script src="{{ asset('assets/js/Multi-step-form-script.js') }}"></script>
  <script src="{{ asset('assets/js/signin.js') }}"></script>
  <script src="{{ asset('assets/js/signup.js') }}"></script>

</body>

</html>