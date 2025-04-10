<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
    <title>Appointment Management</title>
    <link rel="icon" href="/img/dogs&cats.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/admin/approved_pending_rejected.css') }}"> 

</head>

<body>
    <main class="container">
      <div class="sidebar sidebar_collapsed" id="sidebarArrow">
            <div class="logo">
                <a href="#" id="logoLink" class="logo-link">
                    <img src="{{ asset('img/dogs&cats.png') }}" alt="Clinic Logo">
                </a>
                <button class="sidebar_arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="arrow-svg">
                        <g clip-path="url(#clip0_1917_11698)">
                            <path d="M15 6L9 12L15 18" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_1917_11698">
                                <rect width="24" height="24" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                </button>
            </div>


            <ul>
                <div class="first_group">
                    <a href="#">
                    <li  data-tab="dashboard"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <g clip-path="url(#clip0_3484_11828)">
                            <path d="M4 5C4 4.73478 4.10536 4.48043 4.29289 4.29289C4.48043 4.10536 4.73478 4 5 4H9C9.26522 4 9.51957 4.10536 9.70711 4.29289C9.89464 4.48043 10 4.73478 10 5V9C10 9.26522 9.89464 9.51957 9.70711 9.70711C9.51957 9.89464 9.26522 10 9 10H5C4.73478 10 4.48043 9.89464 4.29289 9.70711C4.10536 9.51957 4 9.26522 4 9V5Z" stroke="#1C1C1C" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14 5C14 4.73478 14.1054 4.48043 14.2929 4.29289C14.4804 4.10536 14.7348 4 15 4H19C19.2652 4 19.5196 4.10536 19.7071 4.29289C19.8946 4.48043 20 4.73478 20 5V9C20 9.26522 19.8946 9.51957 19.7071 9.70711C19.5196 9.89464 19.2652 10 19 10H15C14.7348 10 14.4804 9.89464 14.2929 9.70711C14.1054 9.51957 14 9.26522 14 9V5Z" stroke="#1C1C1C" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M4 15C4 14.7348 4.10536 14.4804 4.29289 14.2929C4.48043 14.1054 4.73478 14 5 14H9C9.26522 14 9.51957 14.1054 9.70711 14.2929C9.89464 14.4804 10 14.7348 10 15V19C10 19.2652 9.89464 19.5196 9.70711 19.7071C9.51957 19.8946 9.26522 20 9 20H5C4.73478 20 4.48043 19.8946 4.29289 19.7071C4.10536 19.5196 4 19.2652 4 19V15Z" stroke="#1C1C1C" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14 15C14 14.7348 14.1054 14.4804 14.2929 14.2929C14.4804 14.1054 14.7348 14 15 14H19C19.2652 14 19.5196 14.1054 19.7071 14.2929C19.8946 14.4804 20 14.7348 20 15V19C20 19.2652 19.8946 19.5196 19.7071 19.7071C19.5196 19.8946 19.2652 20 19 20H15C14.7348 20 14.4804 19.8946 14.2929 19.7071C14.1054 19.5196 14 19.2652 14 19V15Z" stroke="#1C1C1C" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_3484_11828">
                            <rect width="24" height="24" fill="white"/>
                            </clipPath>
                        </defs>
                        </svg><span>Dashboard</span></li>
                    </a>
                    <a href="#">
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <g clip-path="url(#clip0_3489_3645)">
                            <path d="M9 5H7C6.46957 5 5.96086 5.21071 5.58579 5.58579C5.21071 5.96086 5 6.46957 5 7V19C5 19.5304 5.21071 20.0391 5.58579 20.4142C5.96086 20.7893 6.46957 21 7 21H17C17.5304 21 18.0391 20.7893 18.4142 20.4142C18.7893 20.0391 19 19.5304 19 19V7C19 6.46957 18.7893 5.96086 18.4142 5.58579C18.0391 5.21071 17.5304 5 17 5H15M9 5C9 4.46957 9.21071 3.96086 9.58579 3.58579C9.96086 3.21071 10.4696 3 11 3H13C13.5304 3 14.0391 3.21071 14.4142 3.58579C14.7893 3.96086 15 4.46957 15 5M9 5C9 5.53043 9.21071 6.03914 9.58579 6.41421C9.96086 6.78929 10.4696 7 11 7H13C13.5304 7 14.0391 6.78929 14.4142 6.41421C14.7893 6.03914 15 5.53043 15 5M9 17V12M12 17V16M15 17V14" stroke="#1C1C1C" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_3489_3645">
                            <rect width="24" height="24" fill="white"/>
                            </clipPath>
                        </defs>
                        </svg><span>Reports</span></li>
                    </a>
                    <a href="{{ route('appointment.page') }}">
                        <li class="active" data-tab="approved"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <g clip-path="url(#clip0_3489_3651)">
                            <path d="M11.795 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V7C3 6.46957 3.21071 5.96086 3.58579 5.58579C3.96086 5.21071 4.46957 5 5 5H17C17.5304 5 18.0391 5.21071 18.4142 5.58579C18.7893 5.96086 19 6.46957 19 7V11H3M15 3V7M7 3V7M18 16.496V18L19 19M14 18C14 19.0609 14.4214 20.0783 15.1716 20.8284C15.9217 21.5786 16.9391 22 18 22C19.0609 22 20.0783 21.5786 20.8284 20.8284C21.5786 20.0783 22 19.0609 22 18C22 16.9391 21.5786 15.9217 20.8284 15.1716C20.0783 14.4214 19.0609 14 18 14C16.9391 14 15.9217 14.4214 15.1716 15.1716C14.4214 15.9217 14 16.9391 14 18Z" stroke="#1C1C1C" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_3489_3651">
                            <rect width="24" height="24" fill="white"/>
                            </clipPath>
                        </defs>
                        </svg><span>Appointments</span></li>
                    </a>
                    
                </div>               
                <div class="sidebar_group">
                    <hr class="sidebar_break">
                    <a href="{{ url('/petrecord') }}">
                        <li  data-tab="petinfo"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <g clip-path="url(#clip0_3489_3660)">
                            <path d="M14.7003 13.5C13.6003 11.5 13.2593 11 12.0003 11C10.7413 11 10.2643 11.755 9.16426 13.747C8.22226 15.45 6.31826 15.592 5.84326 17.038C5.74626 17.303 5.69826 17.715 5.70026 18C5.70026 19.176 6.48726 20 7.50026 20C8.75926 20 10.5003 19 12.0003 19C13.5003 19 15.2413 20 16.5003 20C17.5133 20 18.3003 19.177 18.3003 18C18.3003 17.715 18.2513 17.303 18.1543 17.038C17.6793 15.587 15.6423 15.203 14.7003 13.5Z" stroke="#1C1C1C" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M20.1882 8.082C20.0597 8.0277 19.9216 7.99981 19.7822 8H19.7672C19.0322 8.012 18.2072 8.75 17.7742 9.866C17.2552 11.201 17.4942 12.566 18.3122 12.918C18.4412 12.973 18.5792 13 18.7182 13C19.4572 13 20.2932 12.258 20.7292 11.134C21.2452 9.799 21.0012 8.434 20.1882 8.082Z" stroke="#1C1C1C" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M9.47358 9C9.52858 9 9.58258 9 9.63658 8.989C10.5806 8.861 11.1696 7.643 10.9566 6.267C10.7536 4.97 9.90958 4 9.02458 4C8.96958 4 8.91558 4 8.86158 4.011C7.91758 4.139 7.32858 5.357 7.54158 6.733C7.74558 8.026 8.58958 9 9.47458 9H9.47358Z" stroke="#1C1C1C" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M16.4559 6.733C16.6699 5.357 16.0809 4.139 15.1359 4.011C15.0822 4.00357 15.0281 3.99989 14.9739 4C14.0889 4 13.2459 4.97 13.0439 6.267C12.8299 7.643 13.4189 8.861 14.3639 8.989C14.4179 8.996 14.4719 9 14.5259 9C15.4109 9 16.2559 8.026 16.4559 6.733Z" stroke="#1C1C1C" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M5.68982 12.918C6.50582 12.566 6.74382 11.199 6.22582 9.866C5.78982 8.742 4.95482 8 4.21682 8C4.07682 8 3.93982 8.027 3.80982 8.082C2.99382 8.434 2.75582 9.801 3.27382 11.134C3.70982 12.258 4.54482 13 5.28282 13C5.42282 13 5.55982 12.973 5.68982 12.918Z" stroke="#1C1C1C" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_3489_3660">
                            <rect width="24" height="24" fill="white"/>
                            </clipPath>
                        </defs>
                        </svg><span>Pet Records</span></li>
                    </a>
                    <a href="{{ url('/admin_client') }}">
                    <a href="">
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <g clip-path="url(#clip0_3489_3666)">
                            <path d="M3 21V19C3 17.9391 3.42143 16.9217 4.17157 16.1716C4.92172 15.4214 5.93913 15 7 15H11C12.0609 15 13.0783 15.4214 13.8284 16.1716C14.5786 16.9217 15 17.9391 15 19V21M16 3.13C16.8604 3.35031 17.623 3.85071 18.1676 4.55232C18.7122 5.25392 19.0078 6.11683 19.0078 7.005C19.0078 7.89318 18.7122 8.75608 18.1676 9.45769C17.623 10.1593 16.8604 10.6597 16 10.88M21 21V19C20.9949 18.1172 20.6979 17.2608 20.1553 16.5644C19.6126 15.868 18.8548 15.3707 18 15.15M5 7C5 8.06087 5.42143 9.07828 6.17157 9.82843C6.92172 10.5786 7.93913 11 9 11C10.0609 11 11.0783 10.5786 11.8284 9.82843C12.5786 9.07828 13 8.06087 13 7C13 5.93913 12.5786 4.92172 11.8284 4.17157C11.0783 3.42143 10.0609 3 9 3C7.93913 3 6.92172 3.42143 6.17157 4.17157C5.42143 4.92172 5 5.93913 5 7Z" stroke="#1C1C1C" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_3489_3666">
                            <rect width="24" height="24" fill="white"/>
                            </clipPath>
                        </defs>
                        </svg><span>Clients</span></li>
                    </a>
                    <a href="{{ url('/inventory') }}">
                    
                    <li data-tab="inventory"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <g clip-path="url(#clip0_3489_3672)">
                            <path d="M20 7.5L12 3L4 7.5M20 7.5V16.5L12 21M20 7.5L12 12M12 21L4 16.5V7.5M12 21V12M4 7.5L12 12M8.2002 9.79995L15.8002 5.19995" stroke="#1C1C1C" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_3489_3672">
                            <rect width="24" height="24" fill="white"/>
                            </clipPath>
                        </defs>
                        </svg><span>Inventory</span></li>
                    </a>
                    
                </div>
                <hr class="sidebar_break">
                <div class="sidebar_group">
                    <a href="#">
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <g clip-path="url(#clip0_3489_3681)">
                                <path d="M12 8V12M12 16H12.01M3 12C3 13.1819 3.23279 14.3522 3.68508 15.4442C4.13738 16.5361 4.80031 17.5282 5.63604 18.364C6.47177 19.1997 7.46392 19.8626 8.55585 20.3149C9.64778 20.7672 10.8181 21 12 21C13.1819 21 14.3522 20.7672 15.4442 20.3149C16.5361 19.8626 17.5282 19.1997 18.364 18.364C19.1997 17.5282 19.8626 16.5361 20.3149 15.4442C20.7672 14.3522 21 13.1819 21 12C21 9.61305 20.0518 7.32387 18.364 5.63604C16.6761 3.94821 14.3869 3 12 3C9.61305 3 7.32387 3.94821 5.63604 5.63604C3.94821 7.32387 3 9.61305 3 12Z" stroke="#1C1C1C" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_3489_3681">
                                <rect width="24" height="24" fill="white"/>
                                </clipPath>
                            </defs>
                            </svg><span>Help</span>
                        </li>
                    </a>
                    <a href="#">    
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <g clip-path="url(#clip0_3489_3687)">
                                <path d="M10.325 4.317C10.751 2.561 13.249 2.561 13.675 4.317C13.7389 4.5808 13.8642 4.82578 14.0407 5.032C14.2172 5.23822 14.4399 5.39985 14.6907 5.50375C14.9414 5.60764 15.2132 5.65085 15.4838 5.62987C15.7544 5.60889 16.0162 5.5243 16.248 5.383C17.791 4.443 19.558 6.209 18.618 7.753C18.4769 7.98466 18.3924 8.24634 18.3715 8.51677C18.3506 8.78721 18.3938 9.05877 18.4975 9.30938C18.6013 9.55999 18.7627 9.78258 18.9687 9.95905C19.1747 10.1355 19.4194 10.2609 19.683 10.325C21.439 10.751 21.439 13.249 19.683 13.675C19.4192 13.7389 19.1742 13.8642 18.968 14.0407C18.7618 14.2172 18.6001 14.4399 18.4963 14.6907C18.3924 14.9414 18.3491 15.2132 18.3701 15.4838C18.3911 15.7544 18.4757 16.0162 18.617 16.248C19.557 17.791 17.791 19.558 16.247 18.618C16.0153 18.4769 15.7537 18.3924 15.4832 18.3715C15.2128 18.3506 14.9412 18.3938 14.6906 18.4975C14.44 18.6013 14.2174 18.7627 14.0409 18.9687C13.8645 19.1747 13.7391 19.4194 13.675 19.683C13.249 21.439 10.751 21.439 10.325 19.683C10.2611 19.4192 10.1358 19.1742 9.95929 18.968C9.7828 18.7618 9.56011 18.6001 9.30935 18.4963C9.05859 18.3924 8.78683 18.3491 8.51621 18.3701C8.24559 18.3911 7.98375 18.4757 7.752 18.617C6.209 19.557 4.442 17.791 5.382 16.247C5.5231 16.0153 5.60755 15.7537 5.62848 15.4832C5.64942 15.2128 5.60624 14.9412 5.50247 14.6906C5.3987 14.44 5.23726 14.2174 5.03127 14.0409C4.82529 13.8645 4.58056 13.7391 4.317 13.675C2.561 13.249 2.561 10.751 4.317 10.325C4.5808 10.2611 4.82578 10.1358 5.032 9.95929C5.23822 9.7828 5.39985 9.56011 5.50375 9.30935C5.60764 9.05859 5.65085 8.78683 5.62987 8.51621C5.60889 8.24559 5.5243 7.98375 5.383 7.752C4.443 6.209 6.209 4.442 7.753 5.382C8.753 5.99 10.049 5.452 10.325 4.317Z" stroke="#1C1C1C" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M9 12C9 12.7956 9.31607 13.5587 9.87868 14.1213C10.4413 14.6839 11.2044 15 12 15C12.7956 15 13.5587 14.6839 14.1213 14.1213C14.6839 13.5587 15 12.7956 15 12C15 11.2044 14.6839 10.4413 14.1213 9.87868C13.5587 9.31607 12.7956 9 12 9C11.2044 9 10.4413 9.31607 9.87868 9.87868C9.31607 10.4413 9 11.2044 9 12Z" stroke="#1C1C1C" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_3489_3687">
                                <rect width="24" height="24" fill="white"/>
                                </clipPath>
                            </defs>
                            </svg><span>Settings</span>
                        </li>
                    </a>           
                </div>
            </ul>
        </div>

        <div class="content">
          <div class="rectangle">
            <div class="icon-button">
              <div class="icon-notification">
                  <svg xmlns="http://www.w3.org/2000/svg" width="15" height="18" viewBox="0 0 15 18" fill="none">
                    <path d="M2.29507 10.4791L2.9376 10.866L2.93928 10.8632L2.29507 10.4791ZM1.38056 11.998L0.738031 11.6112L0.737917 11.6113L1.38056 11.998ZM2.2394 14.328L1.99895 15.0385L2.00174 15.0394L2.2394 14.328ZM12.7921 14.328L12.5567 13.6159L12.5544 13.6167L12.7921 14.328ZM13.6509 11.998L14.2941 11.6121L14.2935 11.6112L13.6509 11.998ZM12.7364 10.4791L12.0867 10.854L12.0939 10.866L12.7364 10.4791ZM8.99089 2.00199L8.78546 2.7233C9.05964 2.80139 9.35439 2.71728 9.54607 2.50625C9.73775 2.29522 9.79321 1.99376 9.68919 1.72833L8.99089 2.00199ZM6.04855 2.00199L5.35026 1.72833C5.24623 1.99376 5.3017 2.29522 5.49337 2.50625C5.68505 2.71728 5.9798 2.80139 6.25398 2.7233L6.04855 2.00199ZM5.83384 16.3002L5.30311 16.8301L5.30351 16.8305L5.83384 16.3002ZM7.51972 1.02137C4.4733 1.02137 1.99835 3.49632 1.99835 6.54274H3.49835C3.49835 4.32475 5.30173 2.52137 7.51972 2.52137V1.02137ZM1.99835 6.54274V8.84096H3.49835V6.54274H1.99835ZM1.99835 8.84096C1.99835 8.99314 1.96309 9.22832 1.89148 9.48627C1.81994 9.74398 1.72883 9.96429 1.65086 10.0951L2.93928 10.8632C3.10783 10.5804 3.24336 10.2242 3.33683 9.88749C3.43023 9.551 3.49835 9.17386 3.49835 8.84096H1.99835ZM1.65254 10.0923L0.738031 11.6112L2.02308 12.3849L2.93759 10.866L1.65254 10.0923ZM0.737917 11.6113C0.349574 12.2568 0.264635 12.9889 0.507244 13.6441C0.749527 14.2984 1.28965 14.7984 1.99896 15.0384L2.47985 13.6176C2.15536 13.5078 1.98375 13.3119 1.91391 13.1233C1.84439 12.9355 1.84693 12.6776 2.02319 12.3847L0.737917 11.6113ZM2.00174 15.0394C5.58343 16.236 9.44806 16.236 13.0298 15.0394L12.5544 13.6167C9.28124 14.7103 5.75025 14.7103 2.47707 13.6167L2.00174 15.0394ZM13.0275 15.0401C14.4488 14.5703 15.0647 12.8965 14.2941 11.6121L13.0078 12.3839C13.2869 12.849 13.0599 13.4496 12.5567 13.6159L13.0275 15.0401ZM14.2935 11.6112L13.3789 10.0923L12.0939 10.866L13.0084 12.3849L14.2935 11.6112ZM13.3861 10.1043C13.3089 9.97054 13.2185 9.7472 13.1476 9.48852C13.0764 9.22901 13.0411 8.99336 13.0411 8.84096H11.5411C11.5411 9.17364 11.6091 9.55031 11.701 9.88524C11.7931 10.221 11.9254 10.5742 12.0868 10.8539L13.3861 10.1043ZM13.0411 8.84096V6.54274H11.5411V8.84096H13.0411ZM13.0411 6.54274C13.0411 3.50428 10.5582 1.02137 7.51972 1.02137V2.52137C9.72976 2.52137 11.5411 4.3327 11.5411 6.54274H13.0411ZM9.19633 1.28067C8.10038 0.968542 6.93906 0.968542 5.84311 1.28067L6.25398 2.7233C7.08136 2.48766 7.95809 2.48766 8.78546 2.7233L9.19633 1.28067ZM6.74684 2.27564C6.86801 1.96645 7.16887 1.75 7.51972 1.75V0.25C6.53459 0.25 5.69032 0.860583 5.35026 1.72833L6.74684 2.27564ZM7.51972 1.75C7.87057 1.75 8.17143 1.96645 8.2926 2.27564L9.68919 1.72833C9.34912 0.860583 8.50486 0.25 7.51972 0.25V1.75ZM9.15541 14.6143C9.15541 15.5122 8.41764 16.25 7.51972 16.25V17.75C9.24606 17.75 10.6554 16.3407 10.6554 14.6143H9.15541ZM7.51972 16.25C7.07512 16.25 6.65911 16.0648 6.36417 15.7699L5.30351 16.8305C5.8674 17.3944 6.66015 17.75 7.51972 17.75V16.25ZM6.36456 15.7703C6.05777 15.463 5.88501 15.0468 5.88403 14.6126L4.38404 14.616C4.38591 15.4465 4.71632 16.2425 5.30311 16.8301L6.36456 15.7703Z" fill="#1C1C1C"/>
                  </svg>
              </div>   
            </div>
            <div class="user">
              <div class="frame202">
                <div class="frame417">
                  <img src="{{ asset('img/LISA.png') }}" alt="Clinic Logo">
                    <p>Lisa</p>
                </div>
                <div class="icon-arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="7" viewBox="0 0 14 7" fill="none">
                      <path d="M12 1.75977L7.88384 5.87593C7.39773 6.36204 6.60227 6.36204 6.11616 5.87593L2 1.75977" stroke="#1C1C1C" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="square" stroke-linejoin="round"/>
                    </svg>
                </div>
              </div>
            </div>
          </div>

          <div class="main-content">
            <div class="tab-content-header">
              <div class="header-left">
                        <h1>Appointments</h1>
              </div>
              <div class="header-right">
                        <button class="new-appointment-button"><img src="{{ asset('img/icon.svg') }}">New Appointment</button>
              </div>
            </div>

            <div class="tabs">
                <button class="tab active" data-tab="approved" onclick="changeTab('approved')">
                    Approved <span class="tab-count" id="approvedCount"></span>
                </button>
                <button class="tab" data-tab="pending" onclick="changeTab('pending')">
                    Pending <span class="tab-count" id="pendingCount"></span>
                </button>
                <button class="tab" data-tab="rejected" onclick="changeTab('rejected')">
                    Rejected <span class="tab-count" id="rejectedCount"></span>
                </button>
            </div>

            <div class="tab-content active" id="approved" data-index="0">
              <div class="table-content-header">
                <div class="header-right">
                  <div class="search-container">
                    <div class="search-bar">
                        <input id="approvedSearchInput" type="text" placeholder="Search...">
                      <div class="search-icon"><span class="icon-search"></span></div>
                    </div>
                    <div class="filters">
                        <select id="approvedFilterSelect">
                          <option value="all">All</option>
                          <option value="today">Today</option>
                          <option value="week">This Week</option>
                          <option value="month">This Month</option>
                        </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="table-container">
                  <table>
                    <thead>
                      <tr>
                        <th><input id="approvedSelectAll" type="checkbox"></th>
                        <th>No.</th>
                        <th>Client</th>
                        <th>Patient Info</th>
                        <th>Appointment</th>
                        <th>Service</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody id="approvedTableBody">
                    @foreach ($appointment_approved as $index => $appointment)
                      <tr>
                        <td class="text-style"></td> 
                        <td class="text-style">{{ $index + 1 }}</td>
                        <td class="text-style">{{ $appointment->clients->first_name }} {{ $appointment->clients->last_name }}</td> 
          
                        <td class="text-style">{{ $appointment['petType'] }} ({{ $appointment['breed'] }})</td>
                        <td class="text-style">{{ $appointment['appointmentDate'] }} ({{ \Carbon\Carbon::parse($appointment['appointmentTime'])->format('g:ia') }})</td>
                        <td class="text-style">{{ $appointment['appointmentType'] }}</td>
                        
                      </tr>
                    @endforeach   
                              <!-- Table rows will be dynamically generated here -->
                    </tbody>
                  </table>
              </div>
              <div class="calendar-container hidden">
                  <!-- Your calendar-like view content goes here -->
              </div>
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
                          <path d="M5.48 12L1.36452 7.88384C0.878492 7.39773 0.878492 6.60227 1.36452 6.11616L5.48 2" stroke="#1C1C1C" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="square" stroke-linejoin="round"/>
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
                          <path d="M1.47998 12L5.59546 7.88384C6.08149 7.39773 6.08149 6.60227 5.59546 6.11616L1.47998 2" stroke="#1C1C1C" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="square" stroke-linejoin="round"/>
                        </svg>
                      </span>
                </div>
                <div class="pagination-items">
                      <span>Show:</span>
                        <select class="paginationItemsSelect">
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                        </select>
                </div>
              </div>
              <div id="ApproveModal" class="modal">
                <div class="modal-content">
                  <div claass="modal-icon">
                    <div class="modal-icon-success">
                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                          <g clip-path="url(#clip0_2398_7748)">
                            <path d="M12 16L14.6667 18.6667L20 13.3333M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 14.4241 27.6896 12.8637 27.0866 11.4078C26.4835 9.95189 25.5996 8.62902 24.4853 7.51472C23.371 6.40042 22.0481 5.5165 20.5922 4.91345C19.1363 4.31039 17.5759 4 16 4C14.4241 4 12.8637 4.31039 11.4078 4.91345C9.95189 5.5165 8.62902 6.40042 7.51472 7.51472C6.40042 8.62902 5.5165 9.95189 4.91345 11.4078C4.31039 12.8637 4 14.4241 4 16Z" stroke="#5BB85A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          </g>
                          <defs>
                            <clipPath id="clip0_2398_7748">
                              <rect width="32" height="32" fill="white"/>
                            </clipPath>
                          </defs>
                      </svg>
                    </div>
                  </div>
                  <div class="modal-text">  
                      <h2>Complete appointment?</h2>
                      <p>You are about to mark this appointment as complete. Do you wish to continue?</p>
                  </div>
                  <div class="modal-buttons">
                      <button id="cancelBtn" class="cancel">Cancel</button>
                      <button id="continueBtn" class="continue">Continue</button>
                  </div>
                </div>
              </div>
            </div>
                
            <div class="tab-content" id="pending" data-index="1">
              <div class="table-content-header">
                <div class="header-right">
                  <div class="search-container">
                    <div class="search-bar">
                        <input id="approvedSearchInput" type="text" placeholder="Search...">
                      <div class="search-icon"><span class="icon-search"></span></div>
                    </div>
                    <div class="filters">
                        <select id="approvedFilterSelect">
                          <option value="all">All</option>
                          <option value="today">Today</option>
                          <option value="week">This Week</option>
                          <option value="month">This Month</option>
                        </select>
                    </div>
                  </div>
                </div>
                  
                <div class="header-buttons">
                    <button class="accept-button">Accept</button>
                    <button class="reject-button">Reject</button>
                </div>
              </div>
              <div class="table-container">
                  <table>
                    <thead>
                      <tr>
                        <th><input id="pendingSelectAll" type="checkbox"></th>
                        <th>No.</th>
                        <th>Client</th>
                        <th>Patient Info</th>
                        <th>Appointment</th>
                        <th>Service</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody id="pendingTableBody">
                    @foreach ($appointment_pending as $index => $appointment)
                      <tr>
                        <td class="text-style"></td> 
                        <td class="text-style">{{ $index + 1 }}</td>
                        <td class="text-style">{{ $appointment->clients->first_name }} {{ $appointment->clients->last_name }}</td> 
            
                        <td class="text-style">{{ $appointment['petType'] }} ({{ $appointment['breed'] }})</td>
                        <td class="text-style">{{ $appointment['appointmentDate'] }} ( {{ \Carbon\Carbon::parse($appointment['appointmentTime'])->format('g:ia') }})</td>
                        <td class="text-style">{{ $appointment['appointmentType'] }}</td>
                        <td>
                          <button class="approve-btn" data-id="{{ $appointment->id }}">Approve</button>
                          <button class="reject-btn" data-id="{{ $appointment->id }}">Reject</button>
                        </td>
                      </tr>
                    @endforeach       <!-- Table rows will be dynamically generated here -->
                    </tbody>
                  </table>
              </div>
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
                        <path d="M5.48 12L1.36452 7.88384C0.878492 7.39773 0.878492 6.60227 1.36452 6.11616L5.48 2" stroke="#1C1C1C" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="square" stroke-linejoin="round"/>
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
                        <path d="M1.47998 12L5.59546 7.88384C6.08149 7.39773 6.08149 6.60227 5.59546 6.11616L1.47998 2" stroke="#1C1C1C" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="square" stroke-linejoin="round"/>
                      </svg>
                    </span>
                </div>
                <div class="pagination-items">
                    <span>Show:</span>
                    <select class="paginationItemsSelect">
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                    </select>
                </div>
              </div>
              <div id="acceptModal" class="modal">
                <div class="modal-content">
                  <div claass="modal-icon">
                    <div class="modal-icon-accept">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                          <g clip-path="url(#clip0_2419_12754)">
                            <path d="M12 16L14.6667 18.6667L20 13.3333M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 14.4241 27.6896 12.8637 27.0866 11.4078C26.4835 9.95189 25.5996 8.62902 24.4853 7.51472C23.371 6.40042 22.0481 5.5165 20.5922 4.91345C19.1363 4.31039 17.5759 4 16 4C14.4241 4 12.8637 4.31039 11.4078 4.91345C9.95189 5.5165 8.62902 6.40042 7.51472 7.51472C6.40042 8.62902 5.5165 9.95189 4.91345 11.4078C4.31039 12.8637 4 14.4241 4 16Z" stroke="#5BB85A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          </g>
                          <defs>
                            <clipPath id="clip0_2419_12754">
                              <rect width="32" height="32" fill="white"/>
                            </clipPath>
                          </defs>
                        </svg>
                    </div>
                  </div>
                  <div class="modal-text">  
                      <h2>Approve appointment?</h2>
                      <p>You are approving a pending appointment. Do you wish to continue?</p>
                  </div>
                  <div class="modal-buttons">
                      <button id="cancelAcceptBtn" class="cancel">Cancel</button>
                      <button id="continueAcceptBtn" class="approve">Approve</button>
                  </div>
                </div>
              </div>

              <div id="rejectModal" class="modal">
                <div class="modal-content">
                  <div claass="modal-icon">
                    <div class="modal-icon-reject">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                          <g clip-path="url(#clip0_2398_10910)">
                            <path d="M13.3333 13.3333L18.6667 18.6667M18.6667 13.3333L13.3333 18.6667M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 14.4241 27.6896 12.8637 27.0866 11.4078C26.4835 9.95189 25.5996 8.62902 24.4853 7.51472C23.371 6.40042 22.0481 5.5165 20.5922 4.91345C19.1363 4.31039 17.5759 4 16 4C14.4241 4 12.8637 4.31039 11.4078 4.91345C9.95189 5.5165 8.62902 6.40042 7.51472 7.51472C6.40042 8.62902 5.5165 9.95189 4.91345 11.4078C4.31039 12.8637 4 14.4241 4 16Z" stroke="#DA534F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          </g>
                          <defs>
                            <clipPath id="clip0_2398_10910">
                              <rect width="32" height="32" fill="white"/>
                            </clipPath>
                          </defs>
                        </svg>
                    </div>
                  </div>
                  <div class="modal-text">  
                      <h2>Complete appointment?</h2>
                      <p>You are about to rejetct a pending appointment. Do you wish to continue?</p>
                  </div>
                  <div class="modal-buttons">
                      <button id="cancelRejectBtn" class="cancel">Cancel</button>
                      <button id="continueRejectBtn" class="reject">Reject</button>
                  </div>
                </div>
              </div>

              <div id="deleteModal" class="modal">
                <div class="modal-content">
                  <div class="modal-icon-delete">
                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                        <g clip-path="url(#clip0_2426_10757)">
                          <path d="M13.3333 13.3333L18.6667 18.6667M18.6667 13.3333L13.3333 18.6667M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 14.4241 27.6896 12.8637 27.0866 11.4078C26.4835 9.95189 25.5996 8.62902 24.4853 7.51472C23.371 6.40042 22.0481 5.5165 20.5922 4.91345C19.1363 4.31039 17.5759 4 16 4C14.4241 4 12.8637 4.31039 11.4078 4.91345C9.95189 5.5165 8.62902 6.40042 7.51472 7.51472C6.40042 8.62902 5.5165 9.95189 4.91345 11.4078C4.31039 12.8637 4 14.4241 4 16Z" stroke="#DA534F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                          <clipPath id="clip0_2426_10757">
                            <rect width="32" height="32" fill="white"/>
                          </clipPath>
                        </defs>
                      </svg>
                  </div>
                  <div class="modal-text">  
                        <h2>Delete appointment?</h2>
                        <p>You are about to delete this appointment. Do you wish to continue?</p>
                  </div>
                  <div class="modal-buttons">
                      <button id="cancelDeleteBtn" class="cancel">Cancel</button>
                      <button id="continueDeleteBtn" class="delete">Delete</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-content" id="rejected" data-index="2">
              <div class="table-content-header">
                <div class="header-right">
                  <div class="search-container">
                    <div class="search-bar">
                        <input id="rejectedSearchInput" type="text" placeholder="Search...">
                          <div class="search-icon"><span class="icon-search"></span></div>
                    </div>
                    <div class="filters">
                        <select id="rejectedFilterSelect">
                          <option value="all">All</option>
                                        <option value="today">Today</option>
                                        <option value="week">This Week</option>
                                        <option value="month">This Month</option>
                        </select>
                    </div>
                  </div>
                </div>
              </div>

              <div class="table-container">
                  <table>
                    <thead>
                      <tr>
                        <th><input id="rejectedSelectAll" type="checkbox"></th>
                        <th>No.</th>
                        <th>Client</th>
                        <th>Patient Info</th>
                        <th>Appointment</th>
                        <th>Service</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody id="rejectedTableBody">
                    @foreach ($appointment_rejected as $index => $appointment)
                      <tr>
                        <td class="text-style"></td> 
                        <td class="text-style">{{ $index + 1 }}</td>
                        <td class="text-style">{{ $appointment->clients->first_name }} {{ $appointment->clients->last_name }}</td> 
     
                        <td class="text-style">{{ $appointment['petType'] }} ({{ $appointment['breed'] }})</td>
                        <td class="text-style">{{ $appointment['appointmentDate'] }} ({{ \Carbon\Carbon::parse($appointment['appointmentTime'])->format('g:ia') }})</td>
                        <td class="text-style">{{ $appointment['appointmentType'] }}</td>
                      </tr>
                    @endforeach             <!-- Table rows will be dynamically generated here -->
                    </tbody>
                  </table>
              </div>
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
                            <path d="M5.48 12L1.36452 7.88384C0.878492 7.39773 0.878492 6.60227 1.36452 6.11616L5.48 2" stroke="#1C1C1C" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="square" stroke-linejoin="round"/>
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
                            <path d="M1.47998 12L5.59546 7.88384C6.08149 7.39773 6.08149 6.60227 5.59546 6.11616L1.47998 2" stroke="#1C1C1C" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="square" stroke-linejoin="round"/>
                          </svg>
                      </span>
                </div>
                <div class="pagination-items">
                    <span>Show:</span>
                    <select class="paginationItemsSelect">
                      <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                    </select>
                </div>
              </div>
              <div id="rejectedModal" class="modal">
                <div class="modal-content">
                  <div class="modal-icon-revert">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                      <g clip-path="url(#clip0_2426_1736)">
                        <path d="M16 10.6667V16M16 21.3333H16.0133M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 12.8174 26.7357 9.76516 24.4853 7.51472C22.2348 5.26428 19.1826 4 16 4C12.8174 4 9.76516 5.26428 7.51472 7.51472C5.26428 9.76516 4 12.8174 4 16Z" stroke="#045B62" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      </g>
                      <defs>
                        <clipPath id="clip0_2426_1736">
                          <rect width="32" height="32" fill="white"/>
                        </clipPath>
                      </defs>
                    </svg>
                  </div>
                  <div class="modal-text">  
                      <h2>Revert appointment?</h2>
                      <p>You are about to revert a rejected appointment. Do you wish to continue?</p>
                  </div>
                  <div class="modal-buttons">
                      <button id="cancelRevertBtn" class="cancel">Cancel</button>
                      <button id="continueRevertBtn" class="revert">Revert</button>
                  </div>
                </div>
              </div>
              <div id="eraseModal" class="modal">
                <div class="modal-content">
                  <div class="modal-icon-delete">
                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                        <g clip-path="url(#clip0_2426_10757)">
                          <path d="M13.3333 13.3333L18.6667 18.6667M18.6667 13.3333L13.3333 18.6667M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 14.4241 27.6896 12.8637 27.0866 11.4078C26.4835 9.95189 25.5996 8.62902 24.4853 7.51472C23.371 6.40042 22.0481 5.5165 20.5922 4.91345C19.1363 4.31039 17.5759 4 16 4C14.4241 4 12.8637 4.31039 11.4078 4.91345C9.95189 5.5165 8.62902 6.40042 7.51472 7.51472C6.40042 8.62902 5.5165 9.95189 4.91345 11.4078C4.31039 12.8637 4 14.4241 4 16Z" stroke="#DA534F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                          <clipPath id="clip0_2426_10757">
                            <rect width="32" height="32" fill="white"/>
                          </clipPath>
                        </defs>
                      </svg>
                  </div>
                  <div class="modal-text">  
                      <h2>Delete appointment?</h2>
                      <p>You are about to delete this appointment. Do you wish to continue?</p>
                  </div>
                  <div class="modal-buttons">
                      <button id="cancelEraseBtn" class="cancel">Cancel</button>
                      <button id="continueEraseBtn" class="delete">Delete</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        // Handle the "Approve" button click
        $('.approve-btn').click(function() {
            var appointmentId = $(this).data('id');
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
        });

        // Handle the "Reject" button click
        $('.reject-btn').click(function() {
            var appointmentId = $(this).data('id');
            $.ajax({
                type: 'POST',
                url: '/admin/appointment/reject/' + appointmentId,
                data: {
                    _token: '{{ csrf_token() }}'
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
        });
    });
    </script>
    <script src="{{ asset('js/adminAppointment_multitabs.js')}}"></script>
    <script src="{{ asset('js/adminAppointment_pagination.js')}}"></script>
    <script src="{{ asset('js/sidebar.js') }}"></script>
    
  

</body>

</html>