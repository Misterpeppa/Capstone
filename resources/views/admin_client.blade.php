<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Admin | Clients</title>
    <link rel="icon" href="/img/dogs&cats.png" type="image/x-icon">
    <link href="/css/admin_client.css" rel="stylesheet">  
</head>

<body>
    <main class="container">
        <div class="sidebar sidebar_collapsed" id="sidebarArrow">
            <div class="logo">
                <a href="#" id="logoLink" class="logo-link">
                    <img src="/img/dogs&cats.png" alt="Clinic Logo">
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
                        <li data-tab="approved"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
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
                        <li class="active" data-tab="clients"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
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
                    <a href="{{ url('/inventory') }}" >
                    
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
                                <img src="/img/LISA.png" alt="Clinic admin">
                                <p>Admin</p>
                        </div>
                        <div class="icon-arrow" id="dropdownBtn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="7" viewBox="0 0 14 7" fill="none">
                                    <path d="M12 1.75977L7.88384 5.87593C7.39773 6.36204 6.60227 6.36204 6.11616 5.87593L2 1.75977" stroke="#1C1C1C" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="square" stroke-linejoin="round"/>
                                </svg>
                            <div class="dropdown-menu" id="menu">
                                    <!-- Dropdown menu content here -->
                                    <ul>
                                        <li><a href="#">Logout</a></li>
                                    </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main_content">
                <div class="client_container">
                    <div class="add_client_header">
                        <h1>Client</h1>
                        <div class="add_client_split_button" id="add_client_split_button">
                            <button id="client_new_button" class="client_new_button">
                                <div class="client_new_button_base">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="27" viewBox="0 0 25 27" fill="none">
                                        <g clip-path="url(#clip0_4408_18792)" filter="url(#filter0_d_4408_18792)">
                                            <path d="M16 19H22M19 16V22M6 21V19C6 17.9391 6.42143 16.9217 7.17157 16.1716C7.92172 15.4214 8.93913 15 10 15H14M8 7C8 8.06087 8.42143 9.07828 9.17157 9.82843C9.92172 10.5786 10.9391 11 12 11C13.0609 11 14.0783 10.5786 14.8284 9.82843C15.5786 9.07828 16 8.06087 16 7C16 5.93913 15.5786 4.92172 14.8284 4.17157C14.0783 3.42143 13.0609 3 12 3C10.9391 3 9.92172 3.42143 9.17157 4.17157C8.42143 4.92172 8 5.93913 8 7Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                            <filter id="filter0_d_4408_18792" x="-2" y="0" width="28" height="28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                            <feOffset dy="2"/>
                                            <feGaussianBlur stdDeviation="1"/>
                                            <feComposite in2="hardAlpha" operator="out"/>
                                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_4408_18792"/>
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_4408_18792" result="shape"/>
                                            </filter>
                                            <clipPath id="clip0_4408_18792">
                                            <rect width="24" height="24" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg> New Client
                                </div>
                            </button>
                            <div class="arrow_down" id="arrow_down">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <g clip-path="url(#clip0_4408_18797)" filter="url(#filter0_d_4408_18797)">
                                      <path d="M6 9L12 15L18 9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                      <filter id="filter0_d_4408_18797" x="-2" y="0" width="28" height="28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                        <feOffset dy="2"/>
                                        <feGaussianBlur stdDeviation="1"/>
                                        <feComposite in2="hardAlpha" operator="out"/>
                                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_4408_18797"/>
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_4408_18797" result="shape"/>
                                      </filter>
                                      <clipPath id="clip0_4408_18797">
                                        <rect width="24" height="24" fill="white"/>
                                      </clipPath>
                                    </defs>
                                </svg>
                                <ul class="dropdown-menu" id="dropdown-menu">
                                    <li><a href="#">Option 1</a></li>
                                    <li><a href="#">Option 2</a></li>
                                    <li><a href="#">Option 3</a></li>
                                </ul>
                            </div>
                        </div>
                          

                        
    
                        <div id="add_client_Modal" class="add_client_Modal">
                            <div class="add_client_Modal_content">
                                <div class="add_new_client_header">
                                    <h1>Add Client</h1>
                                    <div class="close_add_new_client" id="close_add_new_client">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                            <g clip-path="url(#clip0_3896_32139)">
                                            <path d="M18 6.5L6 18.5M6 6.5L18 18.5" stroke="black" stroke-opacity="0.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_3896_32139">
                                                <rect width="24" height="24" fill="white" transform="translate(0 0.5)"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                                <form class="add_new_client_content" id="add_client_Form">
                                    <img src="/img/new_client.png" alt="Pet logo">
                                    <!-- Client Name -->
                                    <div class="new_input_row">
                                        <div class="input_container">
                                            <input type="text" id="new_fname"  name="new_fname"  value="" aria-labelledby="label-new_fname" required/>
                                            <label class="label" for="new_fname" id="label-new_fname">
                                              <div class="text">First Name</div>
                                            </label>
                                        </div>        

                                        <div class="input_container">
                                            <input type="text" id="new_lname"  name="new_lname"  value="" aria-labelledby="label-new_lname" required/>
                                            <label class="label" for="new_lname" id="label-new_lname">
                                              <div class="text">Last Name</div>
                                            </label>
                                        </div>
                                      
                                        <div class="input_container suffix">
                                            <select  id="new_suffix" name="new_suffix" value="" aria-labelledby="label-new_suffix">
                                                <option value="">Select a Suffix</option>
                                                <option value="Jr">Jr</option>
                                                <option value="Sr">Sr</option>
                                                <option value="II">II (Second)</option>
                                                <option value="III">III (Third)</option>
                                                <option value="IV">IV (Fourth)</option>
                                                <!-- Add more options as needed -->
                                            </select>
                                            <label class="label" for="new_suffix" id="label-new_suffix">
                                                <div class="text">Suffix</div>
                                            </label>
                                        </div>
                                    </div>
                                    
                                    <div class="input_container">
                                        <input type="date" id="new_birthdate" name="new_birthdate" value="" aria-labelledby="label-new_birthdate" required>
                                        <label class="label" for="new_birthdate" id="label-new_birthdate">
                                            <div class="text">Birthdate</div>
                                        </label>
                                    </div>

                                    <div class="input_container">
                                        <input type="email" id="new_email" name="new_email" value="" placeholder="Ex. pogiako123@gmail.com" aria-labelledby="label-new_email" required>
                                        <label class="label" for="new_email" id="label-new_email">
                                            <div class="text">Email Address</div>
                                        </label>
                                    </div>


                                    <div class="input_container">
                                        <input type="tel" id="new_phone" name="new_phone" value="" placeholder="Ex. (+63) 945-0191-531" aria-labelledby="label-new_phone" required>
                                        <label class="label" for="new_phone" id="label-new_phone">
                                            <div class="text">Phone Number</div>
                                        </label>
                                    </div>
                                      
                                  
                                    <!-- Clear and Submit Buttons -->
                                    <div class="new_client_buttons">
                                        <button type="button" class="add_new_client_clear_btn" id="clearadd_ClientButton" onclick="clearadd_Inputs()">
                                            <div class="add_new_client_clear_btn_base">
                                                Clear Form
                                            </div>
                                        </button>
                                        <button type="submit" class="add_new_client_submit_btn">
                                            <div class="add_new_client_submit_btn_base">
                                                Submit
                                            </div>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <div class="clients_container">
                        <div class="container_header">
                            <div class="container_left_header">
                                <!-- Search Bar -->
                                
                                <div class="search_container">
                                    <input class="search_input" type="text" placeholder="Search Client">
                                </div>
                                
                                
                                <!-- Filter Dropdown Button -->
                                <button class="filter_btn dropdown-toggle" type="button" id="filterDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="filter_btn_base">
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
                                        </svg> Filter by
                                    </div>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="filterDropdown">
                                    <!-- Dropdown items here -->
                                    <a class="dropdown-item" href="#">Option 1</a>
                                    <a class="dropdown-item" href="#">Option 2</a>
                                    <a class="dropdown-item" href="#">Option 3</a>
                                </div>
                                    
    
                                
                                <!-- Sort Dropdown Button -->
                                <button class="sort_btn dropdown-toggle" type="button" id="sortDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="sort_btn_base">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <g clip-path="url(#clip0_3674_13020)" filter="url(#filter0_d_3674_13020)">
                                              <path d="M4 6H13M4 12H11M4 18H11M15 15L18 18M18 18L21 15M18 18V6" stroke="#1C1C1C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                              <filter id="filter0_d_3674_13020" x="-2" y="0" width="28" height="28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                                <feOffset dy="2"/>
                                                <feGaussianBlur stdDeviation="1"/>
                                                <feComposite in2="hardAlpha" operator="out"/>
                                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_3674_13020"/>
                                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_3674_13020" result="shape"/>
                                              </filter>
                                              <clipPath id="clip0_3674_13020">
                                                <rect width="24" height="24" fill="white"/>
                                              </clipPath>
                                            </defs>
                                        </svg> Sort by
                                    </div>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="sortDropdown">
                                    <!-- Dropdown items here -->
                                    <a class="dropdown-item" href="#">Option A</a>
                                    <a class="dropdown-item" href="#">Option B</a>
                                    <a class="dropdown-item" href="#">Option C</a>
                                </div>
                            </div>
                            <div class="container_right_header">
                                <!-- Button in the right header -->
                                <div class="right_header_btn_container">
                                    <button class="right_header_btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <g clip-path="url(#clip0_4137_10988)">
                                          <path d="M19 8C19.5304 8 20.0391 7.78929 20.4142 7.41421C20.7893 7.03914 21 6.53043 21 6C21 5.46957 20.7893 4.96086 20.4142 4.58579C20.0391 4.21071 19.5304 4 19 4H5C4.46957 4 3.96086 4.21071 3.58579 4.58579C3.21071 4.96086 3 5.46957 3 6C3 6.53043 3.21071 7.03914 3.58579 7.41421C3.96086 7.78929 4.46957 8 5 8M19 8H5M19 8V18C19 18.5304 18.7893 19.0391 18.4142 19.4142C18.0391 19.7893 17.5304 20 17 20H7C6.46957 20 5.96086 19.7893 5.58579 19.4142C5.21071 19.0391 5 18.5304 5 18V8M10 12H14" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                          <clipPath id="clip0_4137_10988">
                                            <rect width="24" height="24" fill="white"/>
                                          </clipPath>
                                        </defs>
                                      </svg>
                                    </button>
                                </div>
                            </div>                  
                        </div>
    
                        <div class="table_container">

                            <div class="clients_empty" id="clients_empty">
                                <div class="clients_empty_state">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="220" height="110" viewBox="0 0 220 110" fill="none">
                                        <g clip-path="url(#clip0_3894_22140)">
                                          <path d="M198.03 89.4723H32.12C29.999 89.4699 27.9656 88.6263 26.4659 87.1266C24.9661 85.6268 24.1225 83.5934 24.1201 81.4725V18.517C24.1225 16.396 24.9661 14.3626 26.4659 12.8629C27.9656 11.3631 29.999 10.5195 32.12 10.5171H198.03C200.151 10.5195 202.185 11.3631 203.684 12.8629C205.184 14.3626 206.028 16.396 206.03 18.517V81.4725C206.028 83.5934 205.184 85.6268 203.684 87.1266C202.185 88.6263 200.151 89.4699 198.03 89.4723Z" fill="white"/>
                                          <path d="M198.03 89.4723H32.12C29.999 89.4699 27.9656 88.6263 26.4659 87.1266C24.9661 85.6268 24.1225 83.5934 24.1201 81.4725V18.517C24.1225 16.396 24.9661 14.3626 26.4659 12.8629C27.9656 11.3631 29.999 10.5195 32.12 10.5171H198.03C200.151 10.5195 202.185 11.3631 203.684 12.8629C205.184 14.3626 206.028 16.396 206.03 18.517V81.4725C206.028 83.5934 205.184 85.6268 203.684 87.1266C202.185 88.6263 200.151 89.4699 198.03 89.4723ZM32.12 11.2127C30.1828 11.2127 28.3249 11.9823 26.9551 13.3521C25.5853 14.7219 24.8158 16.5798 24.8158 18.517V81.4725C24.8158 82.4317 25.0047 83.3815 25.3718 84.2677C25.7388 85.1538 26.2769 85.9591 26.9551 86.6373C27.6334 87.3156 28.4386 87.8536 29.3248 88.2207C30.211 88.5877 31.1608 88.7767 32.12 88.7767H198.03C198.99 88.7767 199.939 88.5877 200.826 88.2207C201.712 87.8536 202.517 87.3156 203.195 86.6373C203.873 85.9591 204.411 85.1538 204.779 84.2677C205.146 83.3815 205.335 82.4317 205.335 81.4725V57.7348C205.335 45.3964 200.433 33.5633 191.709 24.8387C182.984 16.1142 171.151 11.2127 158.812 11.2127H32.12Z" fill="#E6E6E6"/>
                                          <path d="M18.9929 102.875C19.0607 102.408 18.5723 101.951 17.9019 101.854C17.2315 101.756 16.6331 102.055 16.5652 102.521C16.4974 102.988 16.9858 103.445 17.6562 103.542C18.3266 103.64 18.925 103.341 18.9929 102.875Z" fill="white"/>
                                          <path d="M26.9743 102.096C27.0422 101.629 26.5537 101.172 25.8834 101.075C25.213 100.977 24.6145 101.276 24.5467 101.743C24.4788 102.209 24.9673 102.666 25.6376 102.764C26.308 102.861 26.9065 102.562 26.9743 102.096Z" fill="#3F3D56"/>
                                          <path d="M16.8073 96.4126C16.8752 95.9463 16.3867 95.4892 15.7164 95.3916C15.046 95.2941 14.4475 95.5931 14.3797 96.0594C14.3118 96.5258 14.8003 96.9829 15.4706 97.0804C16.141 97.178 16.7395 96.879 16.8073 96.4126Z" fill="#FF6584"/>
                                          <path d="M13.3393 93.7662C13.3425 93.338 13.1037 92.9892 12.8059 92.9869C12.508 92.9847 12.264 93.3299 12.2607 93.758C12.2575 94.1861 12.4963 94.535 12.7941 94.5373C13.092 94.5395 13.336 94.1943 13.3393 93.7662Z" fill="#E6E6E6"/>
                                          <path d="M12.1625 88.836C12.1657 88.4079 11.9269 88.059 11.6291 88.0567C11.3313 88.0545 11.0872 88.3997 11.084 88.8278C11.0807 89.256 11.3196 89.6049 11.6174 89.6071C11.9152 89.6094 12.1593 89.2641 12.1625 88.836Z" fill="#3F3D56"/>
                                          <path d="M21.309 97.5123C21.3122 97.0841 21.0734 96.7353 20.7756 96.733C20.4778 96.7308 20.2337 97.076 20.2305 97.5041C20.2272 97.9322 20.466 98.2811 20.7639 98.2834C21.0617 98.2856 21.3057 97.9404 21.309 97.5123Z" fill="#E6E6E6"/>
                                          <path d="M17.4516 99.438C17.4548 99.0099 17.216 98.661 16.9182 98.6588C16.6203 98.6565 16.3763 99.0018 16.373 99.4299C16.3698 99.858 16.6086 100.207 16.9064 100.209C17.2043 100.211 17.4483 99.8662 17.4516 99.438Z" fill="#FF6584"/>
                                          <path d="M22.8207 102.997C22.824 102.569 22.5851 102.22 22.2873 102.218C21.9895 102.216 21.7454 102.561 21.7422 102.989C21.739 103.417 21.9778 103.766 22.2756 103.768C22.5734 103.77 22.8175 103.425 22.8207 102.997Z" fill="#3F3D56"/>
                                          <path d="M211.816 2.33786C211.964 1.75557 211.405 1.11158 210.568 0.899453C209.731 0.687327 208.932 0.987394 208.785 1.56968C208.637 2.15198 209.196 2.79599 210.033 3.00811C210.87 3.22024 211.668 2.92015 211.816 2.33786Z" fill="white"/>
                                          <path d="M201.594 2.27196C201.742 1.68967 201.183 1.04566 200.346 0.833535C199.509 0.621409 198.711 0.921494 198.563 1.50378C198.416 2.08608 198.974 2.73007 199.812 2.94219C200.649 3.15432 201.447 2.85425 201.594 2.27196Z" fill="#3F3D56"/>
                                          <path d="M213.735 10.8188C213.882 10.2365 213.324 9.59254 212.487 9.38041C211.649 9.16828 210.851 9.46835 210.704 10.0506C210.556 10.6329 211.115 11.2769 211.952 11.4891C212.789 11.7012 213.587 11.4011 213.735 10.8188Z" fill="#FF6584"/>
                                          <path d="M216.118 14.0163C216.178 13.474 215.922 13.0001 215.544 12.958C215.167 12.9158 214.812 13.3213 214.751 13.8637C214.691 14.406 214.947 14.8799 215.325 14.922C215.702 14.9642 216.057 14.5587 216.118 14.0163Z" fill="#E6E6E6"/>
                                          <path d="M216.959 20.4211C217.02 19.8788 216.763 19.4049 216.386 19.3628C216.009 19.3206 215.654 19.7261 215.593 20.2685C215.533 20.8108 215.789 21.2847 216.167 21.3268C216.544 21.369 216.899 20.9635 216.959 20.4211Z" fill="#3F3D56"/>
                                          <path d="M206.507 8.21507C206.568 7.67271 206.311 7.19887 205.934 7.15671C205.557 7.11456 205.202 7.52005 205.141 8.06241C205.08 8.60477 205.337 9.07861 205.714 9.12077C206.092 9.16293 206.447 8.75743 206.507 8.21507Z" fill="#E6E6E6"/>
                                          <path d="M211.652 6.28246C211.712 5.7401 211.456 5.26625 211.078 5.2241C210.701 5.18194 210.346 5.58743 210.286 6.12979C210.225 6.67215 210.482 7.14599 210.859 7.18815C211.236 7.23031 211.591 6.82482 211.652 6.28246Z" fill="#FF6584"/>
                                          <path d="M205.314 1.06126C205.375 0.518905 205.118 0.045062 204.741 0.00290405C204.363 -0.0392539 204.008 0.366238 203.948 0.908597C203.887 1.45096 204.144 1.9248 204.521 1.96696C204.898 2.00912 205.253 1.60362 205.314 1.06126Z" fill="#3F3D56"/>
                                          <path d="M90.4811 48.7131C90.4902 55.0134 88.1628 61.0934 83.949 65.7772V65.7807C83.3533 66.4431 82.724 67.0746 82.0638 67.6728C81.3883 68.2847 80.68 68.8594 79.9421 69.3945C79.4273 69.7702 78.8987 70.1249 78.3561 70.4589C77.7126 70.8588 77.0506 71.2287 76.37 71.5684C75.8657 71.8223 75.3509 72.0588 74.8257 72.2779C71.6906 73.5955 68.3239 74.2731 64.9232 74.271C63.0026 74.2731 61.0879 74.0584 59.2155 73.631C58.3496 73.4341 57.495 73.1902 56.6555 72.9005C56.3321 72.7927 56.0086 72.6745 55.6886 72.5493C53.7483 71.7992 51.9083 70.812 50.2104 69.6102C46.6217 67.0835 43.7442 63.6751 41.855 59.7136C39.9658 55.752 39.1287 51.3706 39.4242 46.9916C39.7198 42.6126 41.1381 38.3835 43.5425 34.7117C45.9469 31.0399 49.2563 28.0492 53.152 26.0277C57.0477 24.0061 61.3984 23.0219 65.7849 23.1698C70.1714 23.3177 74.4458 24.5927 78.1965 26.8721C81.9472 29.1514 85.0477 32.3583 87.1993 36.1837C89.3509 40.0091 90.4812 44.3241 90.4811 48.7131Z" fill="#F2F2F2"/>
                                          <path d="M166.974 29.7147H122.8C122.432 29.7142 122.078 29.5673 121.818 29.3065C121.557 29.0456 121.411 28.692 121.411 28.3234C121.411 27.9548 121.557 27.6012 121.818 27.3403C122.078 27.0795 122.432 26.9327 122.8 26.9321H166.974C167.343 26.9321 167.696 27.0787 167.957 27.3396C168.218 27.6005 168.365 27.9544 168.365 28.3234C168.365 28.6924 168.218 29.0463 167.957 29.3072C167.696 29.5681 167.343 29.7147 166.974 29.7147Z" fill="#045B62"/>
                                          <path d="M166.974 48.4969H122.8C122.432 48.4964 122.078 48.3496 121.818 48.0887C121.557 47.8278 121.411 47.4743 121.411 47.1056C121.411 46.737 121.557 46.3834 121.818 46.1226C122.078 45.8617 122.432 45.7149 122.8 45.7144H166.974C167.342 45.7149 167.696 45.8617 167.956 46.1226C168.217 46.3834 168.363 46.737 168.363 47.1056C168.363 47.4743 168.217 47.8278 167.956 48.0887C167.696 48.3496 167.342 48.4964 166.974 48.4969Z" fill="#E6E6E6"/>
                                          <path d="M166.974 67.2792H122.8C122.432 67.2786 122.078 67.1318 121.818 66.8709C121.557 66.6101 121.411 66.2565 121.411 65.8879C121.411 65.5192 121.557 65.1657 121.818 64.9048C122.078 64.644 122.432 64.4971 122.8 64.4966H166.974C167.343 64.4966 167.696 64.6432 167.957 64.9041C168.218 65.165 168.365 65.5189 168.365 65.8879C168.365 66.2569 168.218 66.6107 167.957 66.8717C167.696 67.1326 167.343 67.2792 166.974 67.2792Z" fill="#E6E6E6"/>
                                          <path d="M56.5381 108.785C51.5513 102.152 48.669 94.7347 48.5745 86.2782C48.4139 85.8225 48.4405 85.3216 48.6487 84.8856C48.8568 84.4495 49.2294 84.1138 49.6848 83.9521L66.6825 77.9378C67.1383 77.7771 67.6391 77.8038 68.0752 78.0119C68.5113 78.2201 68.847 78.5927 69.0087 79.0481L76.9723 101.555C77.1329 102.011 77.1063 102.512 76.8981 102.948C76.69 103.384 76.3174 103.719 75.862 103.881L58.8643 109.895C58.4085 110.056 57.9077 110.029 57.4716 109.821C57.0355 109.613 56.6998 109.241 56.5381 108.785Z" fill="#E6E6E6"/>
                                          <path d="M55.4367 101.526C52.4374 98.4933 51.1535 93.0846 50.317 87.0563C50.1665 86.6295 50.1914 86.1605 50.3864 85.7521C50.5813 85.3437 50.9303 85.0293 51.3568 84.8778L65.9649 79.7091C66.3917 79.5586 66.8608 79.5835 67.2692 79.7785C67.6776 79.9734 67.992 80.3224 68.1435 80.7488L75.23 100.777C75.3805 101.204 75.3555 101.673 75.1605 102.081C74.9656 102.49 74.6166 102.804 74.1901 102.956L65.1407 106.157C63.2396 106.828 61.1502 106.716 59.331 105.848C57.5118 104.98 56.1112 103.425 55.4367 101.526Z" fill="white"/>
                                          <path d="M68.3392 91.5381L56.9599 95.5999C56.8702 95.6319 56.7751 95.646 56.68 95.6412C56.585 95.6365 56.4917 95.6131 56.4057 95.5723C56.3197 95.5315 56.2425 95.4742 56.1786 95.4036C56.1148 95.333 56.0654 95.2506 56.0334 95.1609C56.0014 95.0712 55.9874 94.9761 55.9921 94.8811C55.9969 94.786 56.0203 94.6928 56.061 94.6067C56.1018 94.5207 56.1591 94.4435 56.2297 94.3797C56.3003 94.3158 56.3828 94.2664 56.4724 94.2344L67.8518 90.1726C68.0329 90.1079 68.2322 90.1179 68.406 90.2002C68.5797 90.2825 68.7136 90.4305 68.7783 90.6116C68.8429 90.7927 68.833 90.992 68.7506 91.1658C68.6683 91.3395 68.5203 91.4734 68.3392 91.5381Z" fill="#045B62"/>
                                          <path d="M58.1271 90.9622L55.6237 91.8558C55.534 91.8879 55.4388 91.902 55.3437 91.8973C55.2485 91.8927 55.1552 91.8693 55.0691 91.8285C54.983 91.7878 54.9058 91.7305 54.8418 91.6598C54.7779 91.5892 54.7285 91.5067 54.6965 91.417C54.6645 91.3273 54.6504 91.2321 54.6552 91.137C54.66 91.0418 54.6835 90.9485 54.7243 90.8625C54.7651 90.7764 54.8225 90.6992 54.8932 90.6354C54.9639 90.5715 55.0465 90.5222 55.1362 90.4902L57.6397 89.5966C57.7294 89.5645 57.8245 89.5504 57.9197 89.5551C58.0148 89.5597 58.1081 89.5831 58.1942 89.6239C58.2803 89.6646 58.3576 89.7219 58.4215 89.7926C58.4854 89.8632 58.5348 89.9457 58.5669 90.0354C58.5989 90.1252 58.6129 90.2203 58.6081 90.3155C58.6034 90.4106 58.5799 90.5039 58.5391 90.5899C58.4982 90.676 58.4408 90.7532 58.3701 90.8171C58.2994 90.8809 58.2169 90.9302 58.1271 90.9622Z" fill="#045B62"/>
                                          <path d="M70.4821 97.5412L59.1027 101.603C58.9217 101.668 58.7225 101.657 58.5489 101.575C58.3753 101.493 58.2416 101.345 58.177 101.164C58.1124 100.983 58.1223 100.784 58.2044 100.61C58.2866 100.436 58.4344 100.302 58.6153 100.238L69.9946 96.1757C70.1757 96.1113 70.3749 96.1214 70.5484 96.2038C70.722 96.2862 70.8558 96.4341 70.9204 96.615C70.985 96.796 70.9751 96.9952 70.8929 97.1689C70.8107 97.3425 70.663 97.4765 70.4821 97.5412Z" fill="#045B62"/>
                                          <path d="M69.4105 94.5398L58.0312 98.6017C57.8501 98.6663 57.6507 98.6563 57.477 98.574C57.3033 98.4917 57.1693 98.3437 57.1047 98.1626C57.0401 97.9815 57.05 97.7822 57.1323 97.6084C57.2147 97.4347 57.3627 97.3008 57.5437 97.2361L68.9231 93.1743C69.0128 93.1422 69.1079 93.128 69.2031 93.1327C69.2982 93.1374 69.3915 93.1608 69.4776 93.2015C69.5637 93.2423 69.641 93.2996 69.7049 93.3702C69.7688 93.4408 69.8182 93.5234 69.8503 93.6131C69.8823 93.7028 69.8963 93.7979 69.8915 93.8931C69.8868 93.9882 69.8633 94.0815 69.8224 94.1676C69.7816 94.2536 69.7242 94.3308 69.6535 94.3947C69.5828 94.4585 69.5003 94.5079 69.4105 94.5398Z" fill="#045B62"/>
                                          <path d="M59.0773 37.1502C59.4478 40.14 61.5195 42.6051 64.5322 42.6051C65.9789 42.6051 67.3664 42.0304 68.3894 41.0074C69.4124 39.9844 69.9871 38.5969 69.9871 37.1502C69.9871 34.1375 67.5319 31.9738 64.5322 31.6953C61.3493 31.3997 58.6015 33.3117 59.0773 37.1502Z" fill="#2F2E41"/>
                                          <path d="M69.2817 73.8991C65.9415 74.4733 62.5208 74.3823 59.2158 73.6313C60.7845 72.7652 65.5427 73.2974 69.2817 73.8991Z" fill="#2F2E41"/>
                                          <path d="M48.0499 83.494L50.6702 77.1616L52.7346 78.3086L51.4879 84.7502C51.6127 85.1583 51.6213 85.5931 51.5126 86.0058C51.4039 86.4185 51.1822 86.7927 50.8725 87.0863C50.5627 87.3799 50.1772 87.5813 49.7593 87.6679C49.3414 87.7544 48.9077 87.7227 48.5068 87.5762C48.106 87.4297 47.7539 87.1744 47.4902 86.8388C47.2266 86.5032 47.0617 86.1007 47.0142 85.6766C46.9668 85.2525 47.0385 84.8235 47.2215 84.4379C47.4044 84.0524 47.6913 83.7255 48.0499 83.494Z" fill="#FFB6B6"/>
                                          <path d="M75.1566 66.358V66.3615C75.0626 68.5667 74.934 70.6641 74.8261 72.2779C71.6911 73.5955 68.3243 74.2731 64.9237 74.2709C63.0031 74.2731 61.0884 74.0584 59.216 73.631C58.35 73.4341 57.4955 73.1902 56.656 72.9005C56.7729 72.8251 56.8992 72.7655 57.0317 72.7232C58.2838 72.2988 57.0456 71.9127 57.056 71.5093C57.0943 70.0345 57.5012 68.2641 58.0264 66.5667L55.689 72.5493L54.4717 75.6588C54.4717 75.6588 54.5134 78.3439 53.7413 77.5231C52.9656 76.7022 53.0213 79.3596 53.0213 79.3596C52.7802 79.5313 52.5727 79.7459 52.4091 79.9926C52.3403 80.1036 52.3143 80.236 52.3361 80.3648V80.3683C52.371 80.4694 52.4398 80.5554 52.5308 80.6117C53.0561 80.9665 52.3013 81.9056 51.9674 82.2778C51.8769 82.3786 51.8178 82.4378 51.8178 82.4378L48.6074 82.2082V82.1456C48.6213 81.7665 48.7083 79.77 49.2057 79.2935C49.7518 78.7683 49.4839 77.937 49.4839 77.937C49.4839 77.937 50.91 76.6744 49.9535 75.6483C49.5709 75.2344 49.7413 72.7823 50.2109 69.6102C51.2369 62.612 53.696 52.1079 54.7604 52.2574C54.9797 51.192 55.4891 50.2078 56.2324 49.4136C56.9756 48.6194 57.9239 48.046 58.9725 47.7566L62.4402 46.8036L63.0594 44.3584H67.9428L68.7914 45.9653L72.3496 47.5723L72.3949 47.5931L72.5062 47.6418L72.5479 47.774C72.5479 47.774 72.5444 47.7775 72.5479 47.7775L74.527 53.993C75.4174 55.0156 75.3827 60.9912 75.1566 66.358Z" fill="#045B62"/>
                                          <path d="M83.4718 78.8831L80.165 72.8806L82.3505 71.9854L86.6008 76.9838C86.9974 77.1413 87.3423 77.4063 87.5965 77.749C87.8508 78.0918 88.0045 78.4987 88.0402 78.924C88.0759 79.3492 87.9923 79.776 87.7987 80.1564C87.6051 80.5368 87.3093 80.8556 86.9445 81.077C86.5797 81.2985 86.1603 81.4138 85.7336 81.41C85.3068 81.4062 84.8896 81.2834 84.5288 81.0554C84.168 80.8275 83.8779 80.5034 83.6912 80.1196C83.5045 79.7359 83.4285 79.3076 83.4718 78.8831Z" fill="#FFB6B6"/>
                                          <path d="M72.3496 47.5244C72.9378 48.5813 78.3172 51.2995 77.3849 54.0283C77.3849 54.0283 82.4386 69.8393 83.0958 69.7361C83.753 69.6329 84.3944 71.266 84.3944 71.266C84.3944 71.266 84.255 72.3319 84.6649 71.889C85.0748 71.4461 84.9767 72.6072 84.9767 72.6072C84.9767 72.6072 84.7802 73.632 85.3007 73.3534C85.8211 73.0747 85.1368 75.036 85.1368 75.036L82.0092 76.5087L81.4148 75.6241C81.4148 75.6241 80.1448 75.3822 80.7424 75.1906C81.34 74.999 80.1804 74.3542 80.1804 74.3542C80.1804 74.3542 78.9673 73.5297 79.1364 72.1643C79.3055 70.7989 75.9884 68.1148 75.9884 68.1148C73.7081 63.6126 72.4606 58.9902 72.465 54.2221L72.3496 47.5244Z" fill="#045B62"/>
                                          <path d="M65.136 42.9293C67.8075 42.9293 69.9732 40.7636 69.9732 38.0921C69.9732 35.4206 67.8075 33.2549 65.136 33.2549C62.4645 33.2549 60.2988 35.4206 60.2988 38.0921C60.2988 40.7636 62.4645 42.9293 65.136 42.9293Z" fill="#FFB6B6"/>
                                          <path d="M60.1267 38.6193C60.2798 39.6704 61.1757 41.1369 60.9659 41.1369C60.7561 41.1369 59.2644 36.8038 60.7561 36.5212C61.8381 36.3163 62.08 36.4961 63.0912 36.0576L62.9485 36.1918C63.6178 36.6786 64.5493 36.3786 65.313 36.0618C66.0788 35.7471 67.0082 35.447 67.6796 35.9317C68.1013 36.2359 68.2797 36.7646 68.5419 37.2136C68.8042 37.6647 69.2888 38.0906 69.7882 37.9521C69.9827 37.8769 70.1485 37.742 70.2616 37.5667C70.3747 37.3914 70.4293 37.1848 70.4176 36.9765C70.4155 36.5611 69.8745 36.1659 70.0567 35.7932C70.5966 34.6887 70.1111 33.9359 68.9343 33.4161C68.5063 33.3511 68.0783 33.2847 67.6502 33.2168C67.8745 32.9062 68.1464 32.6329 68.4559 32.407C68.3252 32.0717 68.0991 31.7822 67.8055 31.574C67.4429 31.4055 67.0387 31.3471 66.6432 31.4062C65.7578 31.4524 64.8731 31.4985 63.9892 31.5447C63.3308 31.5329 62.6774 31.6602 62.0716 31.9181C61.3414 32.2937 60.8631 33.0259 60.5148 33.7707C59.7343 35.4449 59.8581 36.7919 60.1267 38.6193Z" fill="#2F2E41"/>
                                          <path d="M181.129 35.4464H108.384C108.304 35.4464 108.227 35.4145 108.17 35.3579C108.114 35.3013 108.082 35.2244 108.082 35.1443C108.082 35.0642 108.114 34.9874 108.17 34.9308C108.227 34.8741 108.304 34.8423 108.384 34.8423H181.129C181.209 34.8423 181.286 34.8741 181.343 34.9308C181.4 34.9874 181.431 35.0642 181.431 35.1443C181.431 35.2244 181.4 35.3013 181.343 35.3579C181.286 35.4145 181.209 35.4464 181.129 35.4464Z" fill="#E6E6E6"/>
                                          <path d="M181.129 54.1724H108.384C108.304 54.1724 108.227 54.1406 108.17 54.084C108.114 54.0273 108.082 53.9505 108.082 53.8704C108.082 53.7903 108.114 53.7135 108.17 53.6568C108.227 53.6002 108.304 53.5684 108.384 53.5684H181.129C181.209 53.5684 181.286 53.6002 181.343 53.6568C181.4 53.7135 181.431 53.7903 181.431 53.8704C181.431 53.9505 181.4 54.0273 181.343 54.084C181.286 54.1406 181.209 54.1724 181.129 54.1724Z" fill="#E6E6E6"/>
                                          <path d="M181.129 72.8985H108.384C108.304 72.8985 108.227 72.8667 108.17 72.81C108.114 72.7534 108.082 72.6766 108.082 72.5965C108.082 72.5164 108.114 72.4395 108.17 72.3829C108.227 72.3263 108.304 72.2944 108.384 72.2944H181.129C181.209 72.2944 181.286 72.3263 181.343 72.3829C181.4 72.4395 181.431 72.5164 181.431 72.5965C181.431 72.6766 181.4 72.7534 181.343 72.81C181.286 72.8667 181.209 72.8985 181.129 72.8985Z" fill="#E6E6E6"/>
                                          <path d="M191.957 71.7013C189.294 71.7013 186.719 70.7503 184.695 69.0194C184.019 68.4415 183.3 67.4367 182.556 66.0333C182.082 65.1292 181.816 64.1303 181.779 63.11C181.741 62.0897 181.933 61.0739 182.34 60.1375C181.948 60.5365 181.514 60.8924 181.046 61.199L180.809 61.3564L180.796 61.0727C180.787 60.8882 180.782 60.7043 180.782 60.5262C180.782 59.4762 181.576 58.4108 181.21 57.4404C179.666 53.3501 174.77 49.2852 181.866 42.9549C182.522 42.3694 181.646 41.1985 181.646 40.3126C181.646 31.6297 193.917 16.6081 197.396 24.5657C201.685 34.3795 209.075 33.3298 212.349 35.3568L212.396 35.5002L212.256 35.5568C211.54 35.8579 210.785 36.0587 210.014 36.1533C210.836 36.321 211.675 36.3913 212.514 36.3628L212.644 36.3582L212.676 36.4847C212.988 37.7367 213.146 39.0222 213.145 40.3126L213.145 40.452C213.142 41.4321 213.346 42.4018 213.743 43.2979C214.14 44.194 214.721 44.9963 215.449 45.6526C216.599 46.7009 217.517 47.9773 218.147 49.4003C218.776 50.8233 219.101 52.3618 219.103 53.9177C219.103 55.7584 217.852 58.1747 216.802 59.8775C216.536 60.3113 216.176 60.6792 215.747 60.9537C215.319 61.2281 214.834 61.402 214.328 61.4622C213.85 61.5225 213.364 61.477 212.905 61.3287C212.446 61.1804 212.025 60.9331 211.672 60.6041C212.169 61.603 212.816 62.5195 213.592 63.3216L213.735 63.4692L213.557 63.5728C211.848 64.5691 209.906 65.0937 207.928 65.093L207.812 65.0926C206.362 65.0777 204.923 65.3523 203.58 65.9004C202.238 66.4484 201.018 67.259 199.992 68.2845C198.948 69.3603 197.699 70.2167 196.319 70.8034C194.94 71.3901 193.457 71.6954 191.957 71.7013Z" fill="#E6E6E6"/>
                                          <path d="M188.113 89.3985C188.065 89.3985 188.018 89.381 187.981 89.3493C187.945 89.3176 187.921 89.2738 187.914 89.2259C187.389 84.5394 187.357 79.8107 187.821 75.1177C188.514 67.7143 190.742 57.0508 197.415 48.293C197.431 48.272 197.451 48.2544 197.474 48.2411C197.497 48.2279 197.522 48.2192 197.548 48.2157C197.574 48.2121 197.601 48.2138 197.626 48.2205C197.652 48.2273 197.676 48.239 197.697 48.255C197.718 48.271 197.735 48.291 197.749 48.3138C197.762 48.3366 197.77 48.3618 197.774 48.3879C197.778 48.4141 197.776 48.4407 197.769 48.4662C197.762 48.4917 197.751 48.5157 197.735 48.5367C191.119 57.2188 188.909 67.8041 188.221 75.1552C187.76 79.8168 187.791 84.514 188.312 89.1692C188.316 89.1978 188.314 89.2268 188.306 89.2544C188.298 89.282 188.284 89.3076 188.265 89.3293C188.246 89.3511 188.223 89.3685 188.196 89.3804C188.17 89.3924 188.142 89.3985 188.113 89.3985Z" fill="#3F3D56"/>
                                          <path d="M193.559 60.6463C193.516 60.6464 193.475 60.633 193.44 60.608C193.406 60.5831 193.38 60.5479 193.367 60.5076C193.354 60.4672 193.354 60.4237 193.367 60.3833C193.38 60.3429 193.406 60.3077 193.44 60.2828C195.342 58.9957 197.396 57.9501 199.555 57.1699C202.929 55.9347 208.059 54.815 213.341 56.4959C213.366 56.5039 213.39 56.5168 213.41 56.5338C213.43 56.5508 213.446 56.5716 213.459 56.5951C213.471 56.6185 213.478 56.6441 213.48 56.6704C213.483 56.6967 213.48 56.7232 213.472 56.7483C213.464 56.7735 213.451 56.7968 213.434 56.817C213.417 56.8371 213.396 56.8538 213.372 56.8659C213.349 56.878 213.323 56.8854 213.297 56.8876C213.271 56.8899 213.244 56.8869 213.219 56.8789C208.046 55.2325 203.008 56.3337 199.694 57.5474C197.569 58.3142 195.548 59.3422 193.677 60.6079C193.642 60.6329 193.601 60.6463 193.559 60.6463Z" fill="#3F3D56"/>
                                          <path d="M184.36 37.7371C184.357 37.6947 184.367 37.6525 184.39 37.6165C184.412 37.5804 184.445 37.5523 184.485 37.5363C184.524 37.5203 184.567 37.5172 184.608 37.5273C184.65 37.5375 184.687 37.5604 184.714 37.5929C186.135 39.3967 187.326 41.3702 188.259 43.4679C189.734 46.744 191.22 51.7804 189.924 57.1693C189.918 57.195 189.907 57.2193 189.891 57.2407C189.876 57.2621 189.856 57.2803 189.834 57.2941C189.811 57.3079 189.786 57.3172 189.76 57.3213C189.734 57.3255 189.707 57.3244 189.682 57.3183C189.656 57.3121 189.632 57.3009 189.61 57.2853C189.589 57.2698 189.571 57.2501 189.557 57.2276C189.543 57.205 189.534 57.1799 189.53 57.1538C189.526 57.1277 189.527 57.101 189.533 57.0753C190.803 51.7968 189.342 46.8518 187.893 43.6329C186.975 41.5689 185.804 39.627 184.407 37.852C184.379 37.8196 184.363 37.7794 184.36 37.7371Z" fill="#3F3D56"/>
                                          <path d="M20.0085 67.6805C18.9829 66.6549 17.763 65.8444 16.4202 65.2963C15.0774 64.7483 13.6387 64.4737 12.1884 64.4886L12.0726 64.4889C10.0947 64.4897 8.15207 63.9651 6.44342 62.9688L6.26563 62.8652L6.40883 62.7176C7.18411 61.9155 7.83148 60.999 8.32824 60.0001C7.97543 60.3291 7.55463 60.5764 7.09563 60.7247C6.63662 60.873 6.15063 60.9185 5.67207 60.8582C5.16682 60.798 4.68177 60.6241 4.25329 60.3497C3.82482 60.0752 3.46405 59.7073 3.19806 59.2735C2.14852 57.5707 0.897461 55.1544 0.897461 53.3137C0.899094 51.7578 1.22487 50.2193 1.85402 48.7963C2.48317 47.3733 3.40189 46.0969 4.55163 45.0487C5.27952 44.3923 5.86091 43.59 6.25791 42.6939C6.6549 41.7978 6.85858 40.8281 6.85568 39.848L6.8551 39.7086C6.8549 38.4182 7.01259 37.1327 7.32463 35.8807L7.35631 35.7542L7.4864 35.7588C8.32525 35.7873 9.16455 35.717 9.98697 35.5493C9.21554 35.4547 8.46088 35.2539 7.74438 34.9528L7.60444 34.8962L7.65193 34.7528C10.9257 32.7258 18.3157 33.7755 22.605 23.9617C26.0831 16.0041 38.3549 31.0257 38.3549 39.7086C38.3549 40.5945 37.4781 41.7653 38.1345 42.3509C45.2301 48.6812 40.3342 52.7461 38.7906 56.8364C38.4244 57.8068 39.2185 58.8722 39.2185 59.9221C39.2185 60.1003 39.214 60.2842 39.205 60.4687L39.1913 60.7524L38.9547 60.595C38.4867 60.2884 38.0529 59.9325 37.6606 59.5335C38.0676 60.4699 38.2593 61.4857 38.2218 62.506C38.1844 63.5263 37.9186 64.5252 37.4441 65.4292C36.7005 66.8327 35.9811 67.8375 35.3059 68.4154C33.143 70.2663 30.3548 71.2211 27.5113 71.0845C24.6679 70.9479 21.984 69.7302 20.0085 67.6805Z" fill="#E6E6E6"/>
                                          <path d="M31.8884 88.795C31.9368 88.795 31.9835 88.7775 32.02 88.7458C32.0565 88.7141 32.0803 88.6703 32.0871 88.6224C32.6127 83.9359 32.6441 79.2072 32.1809 74.5142C31.4872 67.1108 29.2596 56.4473 22.5864 47.6895C22.5704 47.6685 22.5505 47.6509 22.5276 47.6376C22.5048 47.6243 22.4796 47.6157 22.4535 47.6122C22.4273 47.6086 22.4007 47.6103 22.3752 47.617C22.3497 47.6238 22.3257 47.6355 22.3047 47.6515C22.2838 47.6675 22.2661 47.6874 22.2528 47.7103C22.2396 47.7331 22.2309 47.7583 22.2274 47.7844C22.2239 47.8106 22.2255 47.8372 22.2323 47.8627C22.239 47.8882 22.2507 47.9122 22.2667 47.9332C28.8822 56.6153 31.0919 67.2005 31.7807 74.5516C32.2414 79.2133 32.2107 83.9105 31.6892 88.5657C31.6852 88.5942 31.6873 88.6233 31.6955 88.6509C31.7036 88.6785 31.7176 88.7041 31.7365 88.7258C31.7554 88.7475 31.7787 88.765 31.805 88.7769C31.8312 88.7889 31.8596 88.795 31.8884 88.795Z" fill="#3F3D56"/>
                                          <path d="M26.442 60.0428C26.4845 60.0428 26.5259 60.0294 26.5602 60.0045C26.5946 59.9796 26.6202 59.9444 26.6333 59.904C26.6464 59.8637 26.6465 59.8202 26.6333 59.7798C26.6202 59.7394 26.5947 59.7042 26.5603 59.6793C24.6589 58.3922 22.6048 57.3465 20.4453 56.5664C17.0715 55.3312 11.9411 54.2114 6.65954 55.8924C6.6344 55.9004 6.61107 55.9133 6.5909 55.9303C6.57073 55.9473 6.55412 55.9681 6.54199 55.9916C6.52987 56.015 6.52248 56.0406 6.52025 56.0669C6.51802 56.0932 6.52099 56.1197 6.529 56.1448C6.537 56.17 6.54987 56.1933 6.56689 56.2135C6.58391 56.2336 6.60474 56.2502 6.62818 56.2624C6.65162 56.2745 6.67721 56.2819 6.70351 56.2841C6.7298 56.2863 6.75628 56.2834 6.78142 56.2754C11.9548 54.629 16.9922 55.7302 20.3071 56.9438C22.4319 57.7107 24.453 58.7387 26.324 60.0044C26.3583 60.0294 26.3996 60.0428 26.442 60.0428Z" fill="#3F3D56"/>
                                          <path d="M35.6408 37.1331C35.6438 37.0908 35.6335 37.0485 35.6111 37.0125C35.5887 36.9764 35.5554 36.9483 35.5161 36.9323C35.4768 36.9163 35.4334 36.9132 35.3922 36.9233C35.351 36.9335 35.314 36.9565 35.2867 36.9889C33.866 38.7927 32.6751 40.7662 31.7415 42.8639C30.2666 46.14 28.7802 51.1764 30.0765 56.5653C30.0826 56.591 30.0937 56.6153 30.1092 56.6367C30.1247 56.6581 30.1443 56.6763 30.1668 56.6901C30.1893 56.704 30.2144 56.7132 30.2405 56.7174C30.2666 56.7215 30.2933 56.7204 30.319 56.7143C30.3447 56.7081 30.3689 56.6969 30.3903 56.6813C30.4117 56.6658 30.4298 56.6461 30.4435 56.6236C30.4573 56.601 30.4665 56.5759 30.4705 56.5498C30.4746 56.5237 30.4735 56.497 30.4672 56.4713C29.1977 51.1928 30.6588 46.2478 32.108 43.0289C33.0259 40.9649 34.1968 39.023 35.594 37.248C35.6213 37.2156 35.6377 37.1754 35.6408 37.1331Z" fill="#3F3D56"/>
                                        </g>
                                        <defs>
                                          <clipPath id="clip0_3894_22140">
                                            <rect width="218.206" height="110" fill="white" transform="translate(0.897461)"/>
                                          </clipPath>
                                        </defs>
                                      </svg>
                                    <div class="clients_empty_state_Msg">
                                        <h1>NO CLIENTS YET!</h1>
                                        <div class="clients_empty_state_msg_p">
                                            <p>Looks like you have no clients yet.</p>
                                            <p>You can add one by clicking the button below.</p>
                                        </div>
                                    </div>                                
                                </div>
                                <button id="client_new_btn" class="client_new_btn">
                                    <div class="client_new_btn_base">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                            <g clip-path="url(#clip0_3927_17777)" filter="url(#filter0_d_3927_17777)">
                                              <path d="M12.5 5.63184V19.6318M5.5 12.6318H19.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                              <filter id="filter0_d_3927_17777" x="-1.5" y="0.631836" width="28" height="28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                                <feOffset dy="2"/>
                                                <feGaussianBlur stdDeviation="1"/>
                                                <feComposite in2="hardAlpha" operator="out"/>
                                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_3927_17777"/>
                                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_3927_17777" result="shape"/>
                                              </filter>
                                              <clipPath id="clip0_3927_17777">
                                                <rect width="24" height="24" fill="white" transform="translate(0.5 0.631836)"/>
                                              </clipPath>
                                            </defs>
                                        </svg> New client
                                    </div>
                                </button>

                                <div id="new_client_modal" class="new_client_modal">
                                    <div class="new_client_modal_content">
                                        <div class="new_client_header">
                                            <h1>Add Client</h1>
                                            <div class="close_new_client" id="close_new_client">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                                    <g clip-path="url(#clip0_3896_32139)">
                                                    <path d="M18 6.5L6 18.5M6 6.5L18 18.5" stroke="black" stroke-opacity="0.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </g>
                                                    <defs>
                                                    <clipPath id="clip0_3896_32139">
                                                        <rect width="24" height="24" fill="white" transform="translate(0 0.5)"/>
                                                    </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                        </div>
                                        <form class="new_client_content" action="#">
                                            <img src="/img/new_client.png" alt="Pet logo">
                                            <!-- Client Name -->

                                            <div class="new_input_row">
                                                <div class="input_container">
                                                    <input type="text" id="fname"  name="fname"  value="" aria-labelledby="label-fname" required/>
                                                    <label class="label" for="fname" id="label-fname">
                                                      <div class="text">First Name</div>
                                                    </label>
                                                </div>        

                                                <div class="input_container">
                                                    <input type="text" id="lname"  name="lname"  value="" aria-labelledby="label-lname" required/>
                                                    <label class="label" for="lname" id="label-lname">
                                                      <div class="text">Last Name</div>
                                                    </label>
                                                </div>

                                                <div class="input_container suffix">
                                                    <select id="suffix" name="suffix" aria-labelledby="label-suffix" required>
                                                        <option value="" disabled selected>Select a Suffix</option>
                                                        <option value="Jr">Jr</option>
                                                        <option value="Sr">Sr</option>
                                                        <option value="II">II (Second)</option>
                                                        <option value="III">III (Third)</option>
                                                        <option value="IV">IV (Fourth)</option>
                                                        <!-- Add more options as needed -->
                                                    </select>
                                                    <label class="label" for="suffix" id="label-suffix">
                                                        <div class="text">Suffix</div>
                                                    </label>
                                                </div>
                                                
                                            </div>
                                            
                                            <div class="input_container">
                                                <input type="date" id="birthdate" name="birthdate" value="" aria-labelledby="label-birthdate" required>
                                                <label class="label" for="birthdate" id="label-birthdate">
                                                    <div class="text">Birthdate</div>
                                                </label>
                                            </div>

                                            <div class="input_container">
                                                <input type="email" id="email" name="email" value="" placeholder="Ex. pogiako123@gmail.com" aria-labelledby="label-email" required>
                                                <label class="label" for="email" id="label-email">
                                                    <div class="text">Email Address</div>
                                                </label>
                                            </div>


                                            <div class="input_container">
                                                <input type="tel" id="phone" name="phone" value="" placeholder="Ex. (+63) 945-0191-531" aria-labelledby="label-phone" required>
                                                <label class="label" for="phone" id="label-phone">
                                                    <div class="text">Phone Number</div>
                                                </label>
                                            </div>

                                            <!-- Clear and Submit Buttons -->
                                            <div class="new_pet_buttons">
                                                <button type="button" class="new_client_clear_btn" id="clearClientButton">
                                                    <div class="new_client_clear_btn_base">
                                                        Clear Form
                                                    </div>
                                                </button>
                                                <button type="submit" class="new_client_submit_btn">
                                                    <div class="new_client_submit_btn_base">
                                                        Submit
                                                    </div>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>


                            <table class="data-table" id="dataTable">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" id="selectAllCheckbox"></th>
                                        <th>Client</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Address</th>
                                        <th>Visits</th>
                                        <th>Last Visit</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Table rows will go here -->
                                
                                </tbody>
                            </table>
                                                                    
                        </div>       
                    </div> 
                </div>
                

                <div class="client_profile_container" id="client_profile_container">
                    <div class="client_profile_header_container">
                        <div class="client_profile_header">
                            <h1>Client</h1>
                        </div>
                        
                    </div>
                    <div class="client_profile_box">
                        <!-- Profile details will be displayed here -->
                        <div class="profile_back_container">
                            <button class="profile_back"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <g clip-path="url(#clip0_3708_640)" filter="url(#filter0_d_3708_640)">
                                <path d="M5 12H19M5 12L11 18M5 12L11 6" stroke="#045B62" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                <filter id="filter0_d_3708_640" x="-2" y="0" width="28" height="28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                    <feOffset dy="2"/>
                                    <feGaussianBlur stdDeviation="1"/>
                                    <feComposite in2="hardAlpha" operator="out"/>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_3708_640"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_3708_640" result="shape"/>
                                </filter>
                                <clipPath id="clip0_3708_640">
                                    <rect width="24" height="24" fill="white"/>
                                </clipPath>
                                </defs>
                            </svg> Back</button>

                        </div>
                        <div class="client_profile_info">
                            <div class="client_profile">
                                <img src="/img/Portrait_Placeholder 2.png" alt="Client Photo">
                                <div class="client_details">
                                    <div class="client_name_box">
                                        <div class="client_name">
                                            <h1></h1>
                                            <h2></h2>
                                            <h3></h3>
                                        </div>
                                    </div>
                                    <div class="client_info_container">
                                        <div class="client_info">
                                            <div class="email_address">
                                                <h1>Email Address</h1>
                                                <p></p>
                                            </div>
                                            <div class="phone_number">
                                                <h1>Phone Number</h1>
                                                <p></p>
                                            </div>
                                            <div class="address">
                                                <h1>Address</h1>
                                                <p></p>
                                            </div>
                                            <div class="gender">
                                                <h1>Gender</h1>
                                                <p>Gender</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <button class="client_edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <g clip-path="url(#clip0_3708_14309)">
                                <path d="M13.5 6.50024L17.5 10.5002M4 20.0003H8L18.5 9.5003C19.0304 8.96987 19.3284 8.25045 19.3284 7.5003C19.3284 6.75016 19.0304 6.03074 18.5 5.5003C17.9696 4.96987 17.2501 4.67188 16.5 4.67188C15.7499 4.67187 15.0304 4.96987 14.5 5.5003L4 16.0003V20.0003Z" stroke="#1C1C1C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_3708_14309">
                                    <rect width="24" height="24" fill="white"/>
                                </clipPath>
                                </defs>
                            </svg>
                            </button>

                        </div>
                        
                        <div class="client_pets_container">
                            <div class="container_header">
                                <div class="container_left_header">
                                    <!-- Search Bar -->
                                    <div class="search_container">
                                        <input class="search_input" type="text" placeholder="Search Pet">
                                    </div>

                                    <!-- Filter Dropdown Button -->
                                    <button class="filter_btn dropdown-toggle" type="button" id="filterDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="filter_btn_base">
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
                                            </svg> Filter by
                                        </div>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="filterDropdown">
                                        <!-- Dropdown items here -->
                                        <a class="dropdown-item" href="#">Option 1</a>
                                        <a class="dropdown-item" href="#">Option 2</a>
                                        <a class="dropdown-item" href="#">Option 3</a>
                                    </div>
                                        
        
                                    
                                    <!-- Sort Dropdown Button -->
                                    <button class="sort_btn dropdown-toggle" type="button" id="sortDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="sort_btn_base">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <g clip-path="url(#clip0_3674_13020)" filter="url(#filter0_d_3674_13020)">
                                                <path d="M4 6H13M4 12H11M4 18H11M15 15L18 18M18 18L21 15M18 18V6" stroke="#1C1C1C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </g>
                                                <defs>
                                                <filter id="filter0_d_3674_13020" x="-2" y="0" width="28" height="28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                                    <feOffset dy="2"/>
                                                    <feGaussianBlur stdDeviation="1"/>
                                                    <feComposite in2="hardAlpha" operator="out"/>
                                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_3674_13020"/>
                                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_3674_13020" result="shape"/>
                                                </filter>
                                                <clipPath id="clip0_3674_13020">
                                                    <rect width="24" height="24" fill="white"/>
                                                </clipPath>
                                                </defs>
                                            </svg> Sort by
                                        </div>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="sortDropdown">
                                        <!-- Dropdown items here -->
                                        <a class="dropdown-item" href="#">Option A</a>
                                        <a class="dropdown-item" href="#">Option B</a>
                                        <a class="dropdown-item" href="#">Option C</a>
                                    </div>
                                </div>
                                <div class="container_right_header">
                                    <button class="add_pet_button" id="add_pet_button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <g clip-path="url(#clip0_4053_8170)">
                                          <path d="M12 5V19M5 12H19" stroke="#1C1C1C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                          <clipPath id="clip0_4053_8170">
                                            <rect width="24" height="24" fill="white"/>
                                          </clipPath>
                                        </defs>
                                      </svg>
                                    </button>

                                    <div class="add_new_pet_modal" id="add_new_pet_modal">
                                        <div class="add_new_pet_modal_content">
                                            <div class="add_new_pet_header"><h1>Add New Pet</h1>
                                                <button class="close_add_new_pet" id="close_add_new_pet"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                                    <g clip-path="url(#clip0_3896_31668)">
                                                    <path d="M18 6.5L6 18.5M6 6.5L18 18.5" stroke="black" stroke-opacity="0.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </g>
                                                    <defs>
                                                    <clipPath id="clip0_3896_31668">
                                                        <rect width="24" height="24" fill="white" transform="translate(0 0.5)"/>
                                                    </clipPath>
                                                    </defs></svg>
                                                </button>
                                            </div>
                                            <form id="add_new_petForm" class="add_new_pet_content">
    
                                                <img src="/img/add_pet_icon.png" alt="Pet logo">                                   
                                              
                                                <!-- Pet Name -->
                                                <div class="input_container">
                                                    <input type="text" id="add_pet_name" name="add_pet_name"  aria-labelledby="label-pet_name" required/>
                                                    <label class="label" for="add_pet_name" id="label-add_pet_name">
                                                        <div class="text">Pet Name</div>
                                                    </label>
                                                </div>
                                                
                                       
                                                <!-- Species and Breed -->
                                                <div class="new_input_row">
                                                    <div class="input_container">
                                                        <select id="add_pet_species" name="add_pet_species" value="" aria-labelledby="label-add_pet_species" required>
                                                        <option value="" disabled selected>Species</option>
                                                        <option value="dog">Dog</option>
                                                        <option value="cat">Cat</option>
                                                        </select>
                                                        <label class="label" for="add_pet_species" id="label-add_pet_species">
                                                            <div class="text">Species</div>
                                                        </label>
                                                    </div>
                                                
                                                    <div class="input_container">
                                                        <select id="add_pet_breed" name="add_pet_breed" value="" aria-labelledby="label-add_pet_breed" required disabled>
                                                        <option value="">Select Species First</option>
                                                        </select>
                                                        <label class="label" for="add_pet_breed" id="label-add_pet_breed">
                                                            <div class="text">Breed</div>
                                                        </label>
                                                    </div>
                                                </div>
                                              
                                                <div class="new_input_row">
                                                    <div class="input_container">
                                                        <input type="date" id="add_pet_birthday" name="add_pet_birthday" onchange="calculateNewAge()"value="" aria-labelledby="label-add_pet_birthday" required/>
                                                        <label class="label" for="add_pet_birthday" id="label-add_pet_birthday">
                                                            <div class="text">Birthdate</div>
                                                        </label>
                                                    </div>
                                                
                                                    <div class="input_container">
                                                        <input type="text" id="add_pet_age" name="add_pet_age" value="" aria-labelledby="label-add_pet_age" required disabled/>
                                                        <label class="label" for="add_pet_age" id="label-add_pet_age">
                                                            <div class="text">Age</div>
                                                        </label>
                                                    </div>
                                                </div>
                                              
                                                <div class="new_input_row">
                                                    <div class="input_container">
                                                        <input type="text" id="add_pet_weight" name="add_pet_weight" value="" aria-labelledby="label-add_pet_weight" required/>
                                                        <label class="label" for="add_pet_weight" id="label-add_pet_weight">
                                                            <div class="text">Weight</div>
                                                        </label>
                                                    </div>
                                                
                                                    <div class="input_container">
                                                        <select id="add_pet_gender" name="add_pet_gender" value="" aria-labelledby="label-add_pet_gender" required>
                                                            <option value="" disabled selected></option>
                                                            <option value="male">Male</option>
                                                            <option value="female">Female</option>
                                                        </select>
                                                        <label class="label" for="add_pet_gender" id="label-add_pet_gender">
                                                            <div class="text">Gender</div>
                                                        </label>
                                                    </div>
                                                    
                                                </div>
                                              
                                                <!-- Clear and Submit Buttons -->
                                                <div class="new_pet_buttons">
                                                    <button type="button" class="add_new_pet_clear_btn" id="clear_add_pet_Button">
                                                        <div class="add_new_pet_clear_btn_base">
                                                            Clear Form
                                                        </div>
                                                    </button>
                                                    <button type="submit" class="add_new_pet_submit_btn">
                                                        <div class="add_new_pet_submit_btn_base">
                                                            Submit
                                                        </div>
                                                    </button>
                                                </div>
    
                                            </form>
    
                                        </div>
                                    </div>
                                </div>
                                        
                            </div>

                            <div class="client_pets_empty" id="client_pets_empty">
                                <div class="client_empty_state">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="150" height="106" viewBox="0 0 150 106" fill="none">
                                        <g clip-path="url(#clip0_3896_31428)">
                                          <path d="M58.9842 66.2918C59.0304 65.9776 59.0071 65.6571 58.9161 65.3529C58.825 65.0487 58.6684 64.7681 58.4572 64.531C58.2459 64.2939 57.9853 64.1059 57.6936 63.9804C57.4019 63.8549 57.0862 63.7949 56.7688 63.8046L42.8567 49.7383L40.1084 53.5803L54.6478 66.1989C54.6994 66.731 54.9444 67.2257 55.3364 67.5893C55.7284 67.9529 56.2402 68.16 56.7747 68.1714C57.3092 68.1829 57.8294 67.9979 58.2366 67.6514C58.6438 67.305 58.9098 66.8212 58.9842 66.2918Z" fill="#FFB8B8"/>
                                          <path d="M52.3945 58.1694L48.8436 61.7164C48.6736 61.8853 48.4439 61.9805 48.2042 61.9815C47.9646 61.9824 47.7341 61.8891 47.5627 61.7216L37.8597 52.1822C37.5242 51.8524 37.2575 51.4593 37.0749 51.0257C36.8923 50.5921 36.7975 50.1266 36.7959 49.6561C36.7943 49.1857 36.8861 48.7195 37.0658 48.2847C37.2455 47.8499 37.5096 47.4551 37.8429 47.123C38.1761 46.7909 38.5719 46.5282 39.0073 46.35C39.4428 46.1719 39.9092 46.0818 40.3797 46.085C40.8501 46.0883 41.3153 46.1847 41.7482 46.3689C42.1812 46.553 42.5733 46.8211 42.902 47.1578L52.4026 56.8901C52.5691 57.0619 52.6616 57.2921 52.6601 57.5314C52.6586 57.7707 52.5632 57.9998 52.3945 58.1694Z" fill="#045B62"/>
                                          <path d="M39.9408 40.7595C42.6836 40.7595 44.907 38.5361 44.907 35.7933C44.907 33.0506 42.6836 30.8271 39.9408 30.8271C37.1981 30.8271 34.9746 33.0506 34.9746 35.7933C34.9746 38.5361 37.1981 40.7595 39.9408 40.7595Z" fill="#FFB8B8"/>
                                          <path d="M23.1602 95.3054L24.4176 97.4416L33.2561 93.6082L31.4001 90.4551L23.1602 95.3054Z" fill="#FFB8B8"/>
                                          <path d="M23.5368 94.3496L26.0132 98.5567C26.2205 98.9088 26.3564 99.2985 26.4132 99.7031C26.4699 100.108 26.4464 100.519 26.3439 100.915C26.2415 101.31 26.0622 101.682 25.8162 102.008C25.5702 102.334 25.2623 102.609 24.9102 102.816L24.8231 102.867L20.7686 95.9791L23.5368 94.3496Z" fill="#2F2E41"/>
                                          <path d="M37.7299 103.001H40.2088L41.3881 93.4395L37.7295 93.4397L37.7299 103.001Z" fill="#FFB8B8"/>
                                          <path d="M37.0977 102.192L41.9795 102.191H41.9797C42.3883 102.191 42.7928 102.272 43.1703 102.428C43.5477 102.585 43.8907 102.814 44.1796 103.103C44.4685 103.391 44.6977 103.734 44.854 104.112C45.0104 104.489 45.0908 104.894 45.0908 105.302V105.404L37.0978 105.404L37.0977 102.192Z" fill="#2F2E41"/>
                                          <path d="M27.7646 97.2083C27.6219 97.2084 27.4812 97.1749 27.3539 97.1105C27.2266 97.0461 27.1163 96.9527 27.0318 96.8377L24.6411 93.5907C24.5681 93.4916 24.516 93.3788 24.4879 93.2591C24.4598 93.1393 24.4563 93.0151 24.4776 92.894C24.4988 92.7728 24.5444 92.6572 24.6116 92.5542C24.6788 92.4512 24.7662 92.3628 24.8684 92.2945L35.5069 85.189L29.0878 68.3105L42.8149 69.4434L43.2772 83.9477C43.3206 85.2687 43.004 86.5765 42.3613 87.7313C41.7186 88.8862 40.774 89.8445 39.6285 90.5038L28.2192 97.0861C28.081 97.1661 27.9242 97.2083 27.7646 97.2083Z" fill="#2F2E41"/>
                                          <path d="M37.8052 101.06C37.5698 101.06 37.3437 100.968 37.1745 100.805C37.0052 100.641 36.906 100.418 36.8976 100.183L36.3945 86.0528L42.6239 85.7246L42.1279 99.9561C42.1206 100.182 42.0296 100.396 41.8726 100.558C41.7156 100.72 41.5039 100.818 41.2787 100.832L37.8671 101.058C37.8464 101.06 37.8258 101.06 37.8052 101.06Z" fill="#2F2E41"/>
                                          <path d="M44.4035 72.2495C42.8186 72.2495 37.2828 70.4668 35.361 69.8314C35.0735 70.0615 33.494 71.2425 31.6504 71.0266C30.5128 70.8932 29.5114 70.2492 28.6738 69.1127C26.8243 66.6026 29.1087 55.8381 31.3507 47.2498C31.8002 45.5138 32.9052 44.0197 34.4335 43.0815C35.9617 42.1434 37.7941 41.8342 39.5456 42.2191C40.815 42.4993 41.9811 43.128 42.9129 44.0345C43.8447 44.9409 44.5053 46.0893 44.8204 47.3505C45.2425 49.0688 44.8794 51.09 44.6143 52.566C44.4896 53.2598 44.3912 53.808 44.4248 54.0773C44.5549 55.1183 45.2778 71.4445 44.813 72.1417C44.7635 72.2159 44.6204 72.2495 44.4035 72.2495Z" fill="#045B62"/>
                                          <path d="M38.6055 72.278C38.8602 72.0884 39.0702 71.8452 39.2208 71.5656C39.3714 71.2861 39.4588 70.9769 39.477 70.6598C39.4951 70.3428 39.4436 70.0256 39.3259 69.7307C39.2082 69.4358 39.0273 69.1702 38.7959 68.9527L38.894 49.1689L34.2344 49.9449L35.6031 69.1477C35.2636 69.5607 35.0873 70.0839 35.1077 70.6181C35.1281 71.1524 35.3438 71.6606 35.7139 72.0464C36.084 72.4323 36.5827 72.669 37.1157 72.7117C37.6486 72.7543 38.1787 72.6001 38.6055 72.278Z" fill="#FFB8B8"/>
                                          <path d="M39.683 61.874H34.6641C34.4244 61.8733 34.1947 61.7784 34.0244 61.6097C33.8542 61.441 33.7571 61.2121 33.7542 60.9724L33.631 47.3661C33.6267 46.8956 33.7158 46.4289 33.893 45.9931C34.0702 45.5572 34.3321 45.1608 34.6635 44.8268C34.9948 44.4928 35.3892 44.2278 35.8236 44.0472C36.2581 43.8666 36.724 43.7738 37.1945 43.7744C37.665 43.775 38.1307 43.8688 38.5647 44.0506C38.9987 44.2323 39.3924 44.4982 39.723 44.833C40.0535 45.1678 40.3144 45.5649 40.4906 46.0011C40.6667 46.4374 40.7546 46.9043 40.7492 47.3748L40.5929 60.9746C40.5893 61.2138 40.492 61.4421 40.3218 61.6103C40.1517 61.7785 39.9223 61.8732 39.683 61.874Z" fill="#045B62"/>
                                          <path d="M38.6761 40.739C36.4023 40.7432 34.2572 38.9459 33.8632 36.7066C33.7221 35.8268 33.7857 34.9264 34.049 34.0752C34.335 33.1062 34.8253 32.2098 35.487 31.4464C36.1487 30.683 36.9664 30.0703 37.8849 29.6496C38.8034 29.229 39.8015 29.0101 40.8118 29.0078C41.822 29.0055 42.821 29.2199 43.7415 29.6364C44.3497 29.9116 44.9489 30.307 45.2274 30.9138C45.5059 31.5206 45.3316 32.3686 44.7223 32.6417C44.3242 32.8201 43.8245 32.7325 43.4713 32.9886C42.9639 33.3565 43.0945 34.1394 43.3211 34.7237C43.5477 35.308 43.8039 36.0151 43.4241 36.5136C43.0702 36.9781 42.3628 36.9637 41.8056 36.7889C41.2485 36.614 40.6985 36.3212 40.1176 36.3808C39.2703 36.4677 38.6614 37.3104 38.5487 38.1547C38.436 38.9989 38.7013 39.8428 38.9632 40.6533L38.6761 40.739Z" fill="#2F2E41"/>
                                          <path d="M100.82 45.8071C100.82 32.2264 111.83 0 125.41 0C138.991 0 150 32.2264 150 45.8071C150 52.3288 147.41 58.5834 142.798 63.195C138.187 67.8065 131.932 70.3972 125.41 70.3972C118.889 70.3972 112.634 67.8065 108.023 63.195C103.411 58.5834 100.82 52.3288 100.82 45.8071Z" fill="#045B62"/>
                                          <path d="M125.41 105.632C125.357 105.632 125.305 105.611 125.267 105.573C125.229 105.535 125.208 105.484 125.208 105.43V20.6514C125.208 20.5978 125.229 20.5464 125.267 20.5084C125.305 20.4705 125.357 20.4492 125.41 20.4492C125.464 20.4492 125.515 20.4705 125.553 20.5084C125.591 20.5464 125.612 20.5978 125.612 20.6514V105.43C125.612 105.484 125.591 105.535 125.553 105.573C125.515 105.611 125.464 105.632 125.41 105.632Z" fill="#3F3D56"/>
                                          <path d="M125.41 37.018C125.383 37.018 125.357 37.0128 125.332 37.0026C125.308 36.9925 125.285 36.9776 125.267 36.9588L115.534 27.2261C115.496 27.1881 115.475 27.1368 115.476 27.0834C115.476 27.03 115.497 26.9788 115.535 26.941C115.573 26.9033 115.624 26.882 115.677 26.8818C115.731 26.8817 115.782 26.9026 115.82 26.9402L125.553 36.6728C125.581 36.7011 125.6 36.7371 125.608 36.7764C125.616 36.8156 125.612 36.8562 125.596 36.8932C125.581 36.9301 125.555 36.9617 125.522 36.9839C125.489 37.0061 125.45 37.018 125.41 37.018Z" fill="#3F3D56"/>
                                          <path d="M125.41 53.8677C125.37 53.8677 125.331 53.8559 125.298 53.8336C125.265 53.8114 125.239 53.7798 125.223 53.7429C125.208 53.706 125.204 53.6653 125.212 53.6261C125.22 53.5869 125.239 53.5508 125.267 53.5226L141.566 37.2233C141.604 37.1858 141.656 37.1649 141.709 37.165C141.762 37.1652 141.814 37.1865 141.851 37.2242C141.889 37.262 141.91 37.3131 141.911 37.3665C141.911 37.4199 141.89 37.4712 141.852 37.5092L125.553 53.8085C125.534 53.8273 125.512 53.8422 125.488 53.8524C125.463 53.8625 125.437 53.8678 125.41 53.8677Z" fill="#3F3D56"/>
                                          <path d="M57.3596 66.1769C60.5856 65.4476 64.2404 67.971 64.3537 71.3587C64.3856 72.3116 64.1063 73.3122 63.3731 73.9605C62.7678 74.4956 61.867 74.7655 61.0845 74.504C59.5787 74.0006 59.4983 71.9023 60.306 70.7816C61.3998 69.2642 63.5666 69.005 65.286 69.1855C67.3881 69.4062 69.386 70.3279 71.0625 71.5912C74.4187 74.1203 76.5558 77.9964 78.2856 81.7414C80.0564 85.5831 81.3441 89.6296 82.1191 93.7882C82.2166 94.3105 82.306 94.8343 82.3872 95.3594C82.4102 95.4363 82.4625 95.5011 82.5329 95.5398C82.6032 95.5784 82.686 95.5878 82.7632 95.5659C82.8393 95.5417 82.9032 95.4891 82.9417 95.4191C82.9801 95.3491 82.9901 95.267 82.9697 95.1898C82.2617 90.6518 80.9538 86.228 79.0805 82.0344C77.2693 77.9758 74.986 73.7659 71.3536 71.0573C69.5428 69.7071 67.4045 68.7675 65.1415 68.5666C63.2365 68.3974 60.9806 68.8005 59.7959 70.4573C58.8613 71.7645 58.9562 73.9368 60.4024 74.8472C61.1974 75.3477 62.2076 75.2892 63.0332 74.9001C63.4712 74.6838 63.857 74.3748 64.1638 73.9945C64.4705 73.6142 64.6909 73.1718 64.8097 72.6979C65.3232 70.8164 64.5434 68.7813 63.2066 67.4365C61.952 66.1708 60.2469 65.4537 58.4647 65.4424C58.0356 65.4471 57.6082 65.498 57.19 65.5944C56.8091 65.6805 56.9793 66.2628 57.3596 66.1769Z" fill="#A5A5A5"/>
                                          <path d="M72.9169 103.434L70.9121 100.011L73.3841 98.5635L75.3889 101.986C75.5809 102.314 75.6348 102.705 75.5388 103.072C75.4427 103.44 75.2046 103.754 74.8768 103.946C74.549 104.138 74.1583 104.192 73.7908 104.096C73.4232 104 73.1089 103.762 72.9169 103.434Z" fill="#045B62"/>
                                          <path d="M66.2884 96.3199C67.262 96.3199 68.0513 95.5306 68.0513 94.5569C68.0513 93.5832 67.262 92.7939 66.2884 92.7939C65.3147 92.7939 64.5254 93.5832 64.5254 94.5569C64.5254 95.5306 65.3147 96.3199 66.2884 96.3199Z" fill="#045B62"/>
                                          <path d="M80.6737 103.434L78.6689 100.011L81.1409 98.5635L83.1456 101.986C83.3372 102.314 83.3908 102.704 83.2947 103.072C83.1985 103.439 82.9605 103.753 82.6329 103.945C82.3054 104.137 81.915 104.191 81.5476 104.095C81.1802 103.999 80.8659 103.762 80.6737 103.434Z" fill="#045B62"/>
                                          <path d="M66.623 98.1086C66.6242 97.1154 67.0192 96.1631 67.7215 95.4608C68.4239 94.7585 69.3761 94.3634 70.3693 94.3623H82.2285C82.6483 94.3628 83.0508 94.5298 83.3476 94.8266C83.6445 95.1235 83.8114 95.526 83.8119 95.9458V97.2952C83.8105 98.5041 83.3297 99.6631 82.4749 100.518C81.6201 101.373 80.4611 101.854 79.2522 101.855H70.3693C69.3761 101.854 68.4239 101.459 67.7215 100.756C67.0192 100.054 66.6242 99.1018 66.623 98.1086Z" fill="#3F3D56"/>
                                          <path d="M69.3584 103.876V99.9092H72.2232V103.876C72.2232 104.256 72.0723 104.62 71.8037 104.889C71.535 105.157 71.1707 105.308 70.7908 105.308C70.4109 105.308 70.0466 105.157 69.778 104.889C69.5093 104.62 69.3584 104.256 69.3584 103.876Z" fill="#3F3D56"/>
                                          <path d="M77.6709 103.876V99.9092H80.5357V103.876C80.5359 104.064 80.499 104.251 80.4272 104.425C80.3553 104.598 80.2498 104.757 80.1168 104.89C79.9837 105.023 79.8257 105.129 79.6518 105.201C79.4779 105.273 79.2916 105.31 79.1033 105.31C78.9151 105.31 78.7287 105.273 78.5548 105.201C78.3809 105.129 78.2229 105.023 78.0898 104.89C77.9568 104.757 77.8513 104.598 77.7794 104.425C77.7076 104.251 77.6707 104.064 77.6709 103.876Z" fill="#3F3D56"/>
                                          <path d="M89.3266 88.1817C89.6197 87.8182 90.0451 87.5858 90.5093 87.5356C90.9735 87.4854 91.4387 87.6214 91.8028 87.9138C92.1669 88.2062 92.4001 88.6311 92.4512 89.0953C92.5024 89.5594 92.3673 90.0249 92.0756 90.3895L89.1778 93.9977L86.4287 91.7898L89.3266 88.1817Z" fill="#045B62"/>
                                          <path d="M82.3459 95.2901L84.6675 92.3995C85.232 91.6983 86.0516 91.2496 86.9464 91.1519C87.8413 91.0542 88.7384 91.3155 89.4409 91.8784L90.1663 92.4609C91.0024 93.134 91.5373 94.1112 91.6538 95.1782C91.7703 96.2451 91.4588 97.3147 90.7876 98.1523L88.8749 100.534C88.6636 100.796 88.3567 100.964 88.0217 101.001C87.6866 101.038 87.3507 100.94 87.0877 100.729L82.541 97.0773C82.2785 96.8659 82.1105 96.5591 82.0739 96.224C82.0374 95.889 82.1352 95.5531 82.3459 95.2901Z" fill="#3F3D56"/>
                                          <path d="M89.6716 87.7529C89.7712 87.6288 89.8944 87.5255 90.0339 87.449C90.1735 87.3725 90.3268 87.3242 90.485 87.307C90.6432 87.2897 90.8033 87.3037 90.9561 87.3483C91.1089 87.3929 91.2514 87.4672 91.3755 87.5668C91.4996 87.6665 91.6029 87.7896 91.6794 87.9292C91.7559 88.0688 91.8042 88.2221 91.8214 88.3803C91.8387 88.5385 91.8246 88.6986 91.78 88.8514C91.7355 89.0042 91.6612 89.1467 91.5615 89.2708L88.3187 93.3085L86.4287 91.7905L89.6716 87.7529Z" fill="#3F3D56"/>
                                          <path d="M85.0263 94.502L90.0089 98.5038C90.3721 98.797 90.6042 99.2223 90.6542 99.6864C90.7043 100.15 90.5682 100.615 90.276 100.979C89.9837 101.343 89.559 101.576 89.095 101.628C88.6311 101.679 88.1657 101.544 87.801 101.253L82.8184 97.251L85.0263 94.502Z" fill="#3F3D56"/>
                                          <path d="M90.4928 101.112C90.7501 100.792 90.8143 100.417 90.6364 100.274C90.4585 100.131 90.1058 100.275 89.8485 100.595C89.5913 100.915 89.527 101.291 89.705 101.434C89.8829 101.576 90.2356 101.433 90.4928 101.112Z" fill="#045B62"/>
                                          <path d="M139.921 105.595H0.202198C0.148572 105.595 0.0971419 105.574 0.0592224 105.536C0.0213028 105.498 0 105.446 0 105.393C0 105.339 0.0213028 105.288 0.0592224 105.25C0.0971419 105.212 0.148572 105.19 0.202198 105.19H139.921C139.975 105.19 140.026 105.212 140.064 105.25C140.102 105.288 140.123 105.339 140.123 105.393C140.123 105.446 140.102 105.498 140.064 105.536C140.026 105.574 139.975 105.595 139.921 105.595Z" fill="#A5A5A5"/>
                                        </g>
                                        <defs>
                                          <clipPath id="clip0_3896_31428">
                                            <rect width="150" height="105.632" fill="white"/>
                                          </clipPath>
                                        </defs>
                                    </svg>
                                    <div class="client_empty_state_Msg">
                                        <h1>NO PETS YET</h1>
                                        <div class="client_empty_state_msg_p">
                                            <p>Looks like you haven’t added any of pet records just yet.</p>
                                            <p>You can do so by clicking the button below.</p>
                                        </div>
                                    </div>                                
                                </div>
                                <button class="client_new_pet_btn" id="client_new_pet_btn">
                                    <div class="client_new_pet_btn_base">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                            <g clip-path="url(#clip0_3927_17777)" filter="url(#filter0_d_3927_17777)">
                                              <path d="M12.5 5.63184V19.6318M5.5 12.6318H19.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                              <filter id="filter0_d_3927_17777" x="-1.5" y="0.631836" width="28" height="28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                                <feOffset dy="2"/>
                                                <feGaussianBlur stdDeviation="1"/>
                                                <feComposite in2="hardAlpha" operator="out"/>
                                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_3927_17777"/>
                                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_3927_17777" result="shape"/>
                                              </filter>
                                              <clipPath id="clip0_3927_17777">
                                                <rect width="24" height="24" fill="white" transform="translate(0.5 0.631836)"/>
                                              </clipPath>
                                            </defs>
                                        </svg> New Pet
                                    </div> 
                                </button>

                                <div class="new_pet_modal" id="new_pet_modal">
                                    <div class="new_pet_modal_content">
                                        <div class="new_pet_header"><h1>Add New Pet</h1>
                                            <button class="close_new_pet"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                                <g clip-path="url(#clip0_3896_31668)">
                                                <path d="M18 6.5L6 18.5M6 6.5L18 18.5" stroke="black" stroke-opacity="0.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </g>
                                                <defs>
                                                <clipPath id="clip0_3896_31668">
                                                    <rect width="24" height="24" fill="white" transform="translate(0 0.5)"/>
                                                </clipPath>
                                                </defs></svg>
                                            </button>
                                        </div>
                                            <form id="petForm" class="new_pet_content">

                                                <img src="/img/add_pet_icon.png" alt="Pet logo">                                   
                                            
                                                <!-- Pet Name -->
                                                <div class="input_container">
                                                    <input type="text" name="pet_name" id="pet_name" value="" aria-labelledby="label-pet_name" required/>
                                                    <label class="label" for="pet_name" id="label-pet_name">
                                                        <div class="text">Pet Name</div>
                                                    </label>
                                                </div>     
                                    
                                                <!-- Species and Breed -->
                                                <div class="new_input_row">

                                                    <div class="input_container">
                                                        <select id="species" name="species" value="" aria-labelledby="label-species" required>
                                                            <option value="">Select Species</option>
                                                            <option value="dog">Dog</option>
                                                            <option value="cat">Cat</option>
                                                        </select>
                                                        <label class="label" for="species" id="label-species">
                                                            <div class="text">Species</div>
                                                        </label>
                                                    </div>
                                                    
                                                    <div class="input_container">
                                                        <select id="breed" name="breed" value="" aria-labelledby="label-breed" required disabled>
                                                            <option value="">Select Species First</option>
                                                        </select>
                                                        <label class="label" for="breed" id="label-breed">
                                                            <div class="text">Breed</div>
                                                        </label>
                                                    </div>
                                                    
                                                    
                                                </div>
                                            
                                                <div class="new_input_row">
                                                    <div class="input_container">
                                                        <input type="date" id="birthday" name="birthday" onchange="calculateAge()" value="" aria-labelledby="label-birthday" required/>
                                                        <label class="label" for="birthday" id="label-birthday">
                                                            <div class="text">Birthdate</div>
                                                        </label>
                                                    </div>
                                                
                                                    <div class="input_container">
                                                        <input type="text" id="age" name="age" value="" aria-labelledby="label-age" required disabled/>
                                                        <label class="label" for="age" id="label-age">
                                                            <div class="text">Age</div>
                                                        </label>
                                                    </div>
                                                </div>
                                            
                                                <div class="new_input_row">

                                                    <div class="input_container">
                                                        <input type="text" id="weight" name="weight" value="" placeholder="e.g., 5.5 kg" aria-labelledby="label-weight" required/>
                                                        <label class="label" for="weight" id="label-weight">
                                                            <div class="text">Weight</div>
                                                        </label>
                                                    </div>

                                                
                                                    <div class="input_container">
                                                        <select id="gender" name="gender" value="" aria-labelledby="label-gender" required>
                                                            <option value="" disabled selected></option>
                                                            <option value="male">Male</option>
                                                            <option value="female">Female</option>
                                                        </select>
                                                        <label class="label" for="gender" id="label-gender">
                                                            <div class="text">Gender</div>
                                                        </label>
                                                    </div>
                                                    
                                                </div>
                                            
                                                <!-- Clear and Submit Buttons -->
                                                <div class="new_pet_buttons">
                                                    <button type="button" class="new_pet_clear_btn" id="clearButton">
                                                        <div class="new_pet_clear_btn_base">
                                                            Clear Form
                                                        </div>
                                                    </button>
                                                    <button type="submit" class="new_pet_submit_btn">
                                                        <div class="new_pet_submit_btn_base">
                                                            Submit
                                                        </div>
                                                    </button>
                                                </div>

                                            </form>
                                    </div>
                                </div>

                                
                            </div>

                            <div class="client_pets" id="client_pets"> 
                                <div class="pet_container">
                                    <img src="" alt="Pet Photo">
                                    <div class="pet_details">
                                        <div class="pet_container_header">
                                            <div class="pet_name">
                                                <h1>Pet Name</h1>
                                                <p>Breed</p>
                                            </div>
                                            <button class="pet_action_button"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                <path d="M9 5C7.61929 5 6.5 3.88071 6.5 2.5C6.5 1.11929 7.61929 -6.03528e-08 9 0C10.3807 6.03528e-08 11.5 1.11929 11.5 2.5C11.5 3.88071 10.3807 5 9 5Z" fill="#045B62"/>
                                                <path d="M9 11.5C7.61929 11.5 6.5 10.3807 6.5 9C6.5 7.61929 7.61929 6.5 9 6.5C10.3807 6.5 11.5 7.61929 11.5 9C11.5 10.3807 10.3807 11.5 9 11.5Z" fill="#045B62"/>
                                                <path d="M9 18C7.61929 18 6.5 16.8807 6.5 15.5C6.5 14.1193 7.61929 13 9 13C10.3807 13 11.5 14.1193 11.5 15.5C11.5 16.8807 10.3807 18 9 18Z" fill="#045B62"/>
                                            </svg></button>
                                        </div>
                                        <div class="pet_details_content">
                                            <div class="pet_details_container">
                                                <div class="pet_birthdate">
                                                    <h1>Birthdate</h1>
                                                    <p><!--place where the birthdate should appear--></p>
                                                </div>
                                                <div class="pet_age">
                                                    <h1>Age</h1>
                                                    <p><!--place where the age should appear--></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                            </div>

                        </div> 

                    </div>
                      
                </div>



                <div class="client_edit_profile" id="client_edit_profile">
                    <div class="client_heading_container">
                        <div class="client_heading">
                            <h1>Edit Client Information</h1>
                        </div>                       
                    </div>
                    <div class="client_edit_content">
                        <div class="client_content_header">
                            <div class="back_btn_container">
                                <button class="back_btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <g clip-path="url(#clip0_3809_5898)" filter="url(#filter0_d_3809_5898)">
                                      <path d="M5 12H19M5 12L11 18M5 12L11 6" stroke="#045B62" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                      <filter id="filter0_d_3809_5898" x="-2" y="0" width="28" height="28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                        <feOffset dy="2"/>
                                        <feGaussianBlur stdDeviation="1"/>
                                        <feComposite in2="hardAlpha" operator="out"/>
                                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_3809_5898"/>
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_3809_5898" result="shape"/>
                                      </filter>
                                      <clipPath id="clip0_3809_5898">
                                        <rect width="24" height="24" fill="white"/>
                                      </clipPath>
                                    </defs>
                                  </svg> Back</button>

                            </div>
                        </div>
                        <div class="client_content">
                            <div class="client_details_input_fields">

                                <div class="new_input_row">
                                    <div class="input_container">
                                        <input type="text" id="first_name" placeholder=" ">
                                        <label class="label" for="first_name" id="label-first_name">
                                            <div class="text">First Name</div>
                                        </label>
                                    </div>
                                    <div class="input_container">
                                        <input type="text" id="last_name" placeholder=" ">
                                        <label class="label" for="last_name" id="label-last_name">
                                            <div class="text">Last Name</div>
                                        </label>
                                    </div>
                                    <div class="input_container suffix">
                                        <select id="edit_suffix" aria-labelledby="label-suffix">
                                            <option value="">Select a Suffix</option>
                                            <option value="Jr">Jr</option>
                                            <option value="Sr">Sr</option>
                                            <option value="II">II (Second)</option>
                                            <option value="III">III (Third)</option>
                                            <option value="IV">IV (Fourth)</option>
                                            <!-- Add more options as needed -->
                                        </select>
                                        <label class="label" for="suffix" id="label-suffix">
                                            <div class="text">Suffix</div>
                                        </label>
                                    </div>
                                    
                                </div>
                                
                                <div class="new_input_row">
                                    <div class="input_container">
                                        <input type="email" id="e_mail" placeholder=" ">
                                        <label class="label" for="email" id="label-email">
                                            <div class="text">Email</div>
                                        </label>
                                    </div>
                                    <div class="client_inputs_container">
                                      <input type="tel" id="phoneNumber" placeholder=" ">
                                        <label class="label" for="phoneNumber" id="label-phoneNumber">
                                            <div class="text">Phone Number</div>
                                        </label>
                                    </div>
                                </div>
                                  
                                <div class="input_container">
                                    <input type="text" name="address" id="address" placeholder=" ">
                                    <label class="label" for="address" id="label-address">
                                        <div class="text">Address</div>
                                    </label>
                                </div>

                                  
                                <div class="client_input_content_footer">
                                    <button class="client_cancel_btn">Cancel</button>
                                    <button class="client_save_btn">Save Changes</button>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div> 

                <!--MODALS-->
                <!--Sucess MOdal after hitting change button-->
                <div class="modal" id="successModal">
                    <div class="success_edit_modal">
                        <div class="success_icon_container">
                            <div class="success_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <g clip-path="url(#clip0_3809_14758)">
                                      <path d="M12 16L14.6667 18.6667L20 13.3333M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 14.4241 27.6896 12.8637 27.0866 11.4078C26.4835 9.95189 25.5996 8.62902 24.4853 7.51472C23.371 6.40042 22.0481 5.5165 20.5922 4.91345C19.1363 4.31039 17.5759 4 16 4C14.4241 4 12.8637 4.31039 11.4078 4.91345C9.95189 5.5165 8.62902 6.40042 7.51472 7.51472C6.40042 8.62902 5.5165 9.95189 4.91345 11.4078C4.31039 12.8637 4 14.4241 4 16Z" stroke="#5BB85A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                      <clipPath id="clip0_3809_14758">
                                        <rect width="32" height="32" fill="white"/>
                                      </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                        <div class="success_message_container">
                            <h1>Success!</h1>
                            <p>Your changes have been successfully saved.</p>
                        </div>
                        <div class="success_close_btn_container">
                            <button class="success_close_modal">Close</button>
                        </div>
                        

                    </div>
                </div>

                <!--Cancel modal-->
                <div class="modal" id="cancelModal">
                    <div class="cancel_edit_modal">
                        <div class="cancel_icon_container">
                            <div class="cancel_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <g clip-path="url(#clip0_3809_11228)">
                                      <path d="M13.3333 13.3333L18.6667 18.6667M18.6667 13.3333L13.3333 18.6667M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 14.4241 27.6896 12.8637 27.0866 11.4078C26.4835 9.95189 25.5996 8.62902 24.4853 7.51472C23.371 6.40042 22.0481 5.5165 20.5922 4.91345C19.1363 4.31039 17.5759 4 16 4C14.4241 4 12.8637 4.31039 11.4078 4.91345C9.95189 5.5165 8.62902 6.40042 7.51472 7.51472C6.40042 8.62902 5.5165 9.95189 4.91345 11.4078C4.31039 12.8637 4 14.4241 4 16Z" stroke="#DA534F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                      <clipPath id="clip0_3809_11228">
                                        <rect width="32" height="32" fill="white"/>
                                      </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                        <div class="cancel_message_container">
                            <h1>Discard changes?</h1>
                            <p>Any unsaved progress will be lost.</p>
                        </div>
                        <div class="cancel_close_btn_container">  
                            <button class="close_cancel_btn" id="closeCancelModal">Return</button>
                            <button class="confirm_cancel_btn" id="confirmCancelBtn">Discard</button>
                        </div>
                        

                    </div>
                </div>
                  
                <!--Back Modal-->

                <!-- Add this HTML code inside your <body> element -->
                <div class="modal" id="confirmationModal">
                    <div class="back_modal">
                        <div class="back_icon_container">
                            <div class="back_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <g clip-path="url(#clip0_3868_3547)">
                                      <path d="M16 10.6667V16M16 21.3333H16.0133M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 12.8174 26.7357 9.76516 24.4853 7.51472C22.2348 5.26428 19.1826 4 16 4C12.8174 4 9.76516 5.26428 7.51472 7.51472C5.26428 9.76516 4 12.8174 4 16Z" stroke="#DA534F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                      <clipPath id="clip0_3868_3547">
                                        <rect width="32" height="32" fill="white"/>
                                      </clipPath>
                                    </defs>
                                  </svg>
                            </div>
                        </div>
                        <div class="back_message_container">
                            <h1>Unsaved Changes</h1>
                            <p>You have unsaved changes. Are you sure you want to go back?</p>
                        </div>

                        <div class="back_modal_btn_container">
                            <button class="back_confirm_btn" id="confirmModalBtn">Yes</button>
                            <button class="back_cancel_btn" id="cancelModalBtn">Return</button>
                        </div> 
                    </div>
                </div>

                <!--Archive Modal-->
                <!-- Archive Modal -->
                <div id="archiveModal" class="modal">
                    <div class="archive_modal_content">
                        <div class="archive_icon_container">
                            <div class="archive_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <g clip-path="url(#clip0_4230_5208)">
                                      <path d="M16 10.6667V16M16 21.3333H16.0133M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 12.8174 26.7357 9.76516 24.4853 7.51472C22.2348 5.26428 19.1826 4 16 4C12.8174 4 9.76516 5.26428 7.51472 7.51472C5.26428 9.76516 4 12.8174 4 16Z" stroke="#045B62" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                      <clipPath id="clip0_4230_5208">
                                        <rect width="32" height="32" fill="white"/>
                                      </clipPath>
                                    </defs>
                                  </svg>
                            </div>
                        </div>
                        <div class="archive_modal_text">
                            <h1>Archive multiple clients?</h1>
                            <p>You can restore archived clients at a later time.</p>
                        </div>
                        <div class="archive_modal_btns">
                            <button class="cancelArchiveBtn" id="cancelArchiveBtn">Cancel</button>
                            <button class="confirmArchiveBtn" id="confirmArchiveBtn">Archive</button>
                        </div>
                        
                    </div>
                </div>

  
            </div>
        </div>  
    </main>




    <script src="/js/sidebar.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {

            // Get the modal and close button elements
            var modal = document.getElementById("new_client_modal");
            var closeButton = document.getElementById("close_new_client");

            // Get the button that opens the modal
            var newClientButton = document.getElementById("client_new_btn");
            var addClientButton = document.getElementById("add_client_split_button");

            // Function to open the modal
            function openModal() {
                modal.style.display = "flex";
            }

            // Function to close the modal
            function closeNewClientModal() {
                modal.style.display = "none";
            }

            // Attach event listeners to open and close the modal
            newClientButton.addEventListener("click", openModal);
            addClientButton.addEventListener("click", openModal);
            closeButton.addEventListener("click", closeNewClientModal);

            // When the user clicks anywhere outside of the modal, close it
            window.addEventListener("click", function (event) {
                if (event.target == modal) {
                    closeNewClientModal();
                }
            });



            // Function to clear the client form
            function clearClientForm() {
                // Select each input and select element within the form by their IDs
                const fnameInput = document.getElementById('fname');
                const lnameInput = document.getElementById('lname');
                const suffixSelect = document.getElementById('suffix');
                const birthdateInput = document.getElementById('birthdate');
                const emailInput = document.getElementById('email');
                const phoneInput = document.getElementById('phone');

                // Clear the values of each input and select element
                fnameInput.value = '';
                lnameInput.value = '';
                suffixSelect.value = ''; // Set the select to its initial disabled option
                birthdateInput.value = '';
                emailInput.value = '';
                phoneInput.value = '';
            }

            // Add an event listener to the Clear Form button
            const clearClientButton = document.getElementById('clearClientButton');
            clearClientButton.addEventListener('click', clearClientForm);




            // Function to show or hide the "Add Client" button based on whether data is present
            function toggleAddClientButtonVisibility() {
            const dataTable = document.getElementById("dataTable");
            const clientsEmpty = document.getElementById("clients_empty");
            const addClientButton = document.getElementById("add_client_split_button");

            if (dataTable.style.display === "table" && clientsEmpty.style.display === "none") {
                // If data-table is displayed and clients_empty is hidden, show the button
                addClientButton.style.display = "inline-flex";
            } else {
                // Otherwise, hide the button
                addClientButton.style.display = "none";
            }
            }

            // Call the function initially to set the initial state
            toggleAddClientButtonVisibility();



            // Get references to the "Select All" checkbox and all data row checkboxes
            var selectAllCheckbox = document.getElementById("selectAllCheckbox");

            // Add a click event listener to the "Select All" checkbox
            selectAllCheckbox.addEventListener("click", function () {
                // Get all checkboxes in the tbody (data rows)
                var checkboxes = document.querySelectorAll("tbody input[type='checkbox']");

                // Iterate through all data row checkboxes
                for (var i = 0; i < checkboxes.length; i++) {
                    // Set the checked state of each data row checkbox to match the "Select All" checkbox
                    checkboxes[i].checked = selectAllCheckbox.checked;

                    // Get the parent row of the checkbox
                    var row = checkboxes[i].closest("tr");

                    // Add or remove a class to highlight the selected rows
                    if (selectAllCheckbox.checked) {
                        row.classList.add("selected-row");
                    } else {
                        row.classList.remove("selected-row");
                    }
                }
            });


             




            // Function to handle form submission
            document.getElementById("clientForm").addEventListener("submit", function (e) {
                e.preventDefault(); // Prevent the form from actually submitting

                // Get form input values
                const firstName = document.getElementById("fname").value;
                const lastName = document.getElementById("lname").value;
                const suffix = document.getElementById("suffix").value;
                const email = document.getElementById("email").value;
                const phoneInput = document.getElementById("phone");
                const birthdateInput = document.getElementById("birthdate");


                // Combine first name, last name, and suffix
                const clientName = `${capitalizeEachWord(firstName + " " + lastName + " " + suffix)}`;
                
    
                // Parse the birthdate value as a Date object
                const birthdate = new Date(birthdateInput.value);

                // Get the current date and set its time to midnight
                const currentDate = new Date();
                currentDate.setHours(0, 0, 0, 0);

                // Compare the selected date with the current date
                if (birthdate >= currentDate) {
                    // Display an error message (you can replace this with your own error handling logic)
                    alert("Please select a previous date for the birthdate.");
                    return; // Prevent further execution of the form submission
                }
                

                // Get the phone input element and its value
                const phone = phoneInput.value;

                // Validate the phone number format (Ex. (+63) xxx-xxxx-xxx)
                const phoneRegex = /^\(\+63\) \d{3}-\d{4}-\d{3}$/;
                if (!phoneRegex.test(phone)) {
                    // Display an error message (you can replace this with your own error handling logic)
                    alert("Please enter a valid phone number in the format (+63) xxx-xxxx-xxx.");
                    return; // Prevent further execution of the form submission
                }

                
                
                // Create a new table row
                const newRow = document.createElement("tr");
                newRow.innerHTML = `
                    <td><input type="checkbox"></td>
                    <td title="${clientName}">${clientName}</td>
                    <td title="${email}">${email}</td>
                    <td title="${phone}">${phone}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><button class="edit_action_button" id="edit_action_button">View</button><button class="delete_action_button">Archive</button></td>
                `;

                // Append the new row to the table
                const tableBody = document.querySelector("#dataTable tbody");
                tableBody.appendChild(newRow);

                // Show the table and hide the empty message
                document.getElementById("dataTable").style.display = "table";
                document.getElementById("clients_empty").style.display = "none";

                // Update the client's gender in the profile
                const genderElement = document.querySelector(".gender p");
                genderElement.textContent = gender;

                // Call the function to toggle the "Add Client" button visibility
                toggleAddClientButtonVisibility();

                toggleRightHeaderBtnVisibility();

                // Edit button for each data row
                const editButtons = document.querySelectorAll(".edit_action_button");

                editButtons.forEach(editButton => {
                    editButton.addEventListener("click", function (event) {
                        event.preventDefault();

                        // Get the table row associated with the clicked edit button
                        const clientRow = editButton.closest("tr");

                        // Get client details from the row
                        const clientFullName = clientRow.querySelector("td:nth-child(2)").textContent;
                        const clientEmail = clientRow.querySelector("td:nth-child(3)").textContent;
                        const clientPhone = clientRow.querySelector("td:nth-child(4)").textContent;

                        // Split the clientFullName into first name, last name, and suffix
                        const nameParts = clientFullName.split(" ");
                        const clientFirstName = nameParts.slice(0, 2).join(" "); // Join the first two words as the first name
                        const clientLastName = nameParts.slice(2, -1).join(" "); // Join all parts except the first and last as the last name
                        const clientSuffix = nameParts[nameParts.length - 1];

                        // Update client profile with fetched data
                        const clientProfileContainer = document.getElementById("client_profile_container");
                        const clientNameElement = clientProfileContainer.querySelector(".client_name h1");
                        const lastNameElement = clientProfileContainer.querySelector(".client_name h2");
                        const suffixElement = clientProfileContainer.querySelector(".client_name h3");
                        const emailAddressElement = clientProfileContainer.querySelector(".email_address p");
                        const phoneNumberElement = clientProfileContainer.querySelector(".phone_number p");

                        clientNameElement.textContent = clientFirstName;
                        lastNameElement.textContent = clientLastName;
                        suffixElement.textContent = clientSuffix;
                        emailAddressElement.textContent = clientEmail;
                        phoneNumberElement.textContent = clientPhone;

                        // Hide the client_container and show the client_profile_container
                        const clientContainer = document.querySelector(".client_container");
                        clientContainer.style.display = "none";
                        clientProfileContainer.style.display = "inline-flex";
                    });
                });

            });


            // Function to capitalize the first letter of each word in a string
            function capitalizeEachWord(string) {
                return string.replace(/\b\w/g, char => char.toUpperCase());
            }
        


            // Get the modal and close button elements
            var addClientModal = document.getElementById("add_client_Modal");
            var addClientButton = document.getElementById("add_client_split_button");

            // Function to open the "Add Client" modal
            function openAddClientModal() {
                addClientModal.style.display = "flex";
            }

            // Attach an event listener to open the "Add Client" modal when the button is clicked
            addClientButton.addEventListener("click", openAddClientModal);

            // Function to close the modal
            function closeModal() {
                var modal = document.getElementById("add_client_Modal");
                modal.style.display = "none";
            }

            document.getElementById("close_add_new_client").addEventListener("click", closeModal);

            // Function to clear form inputs
            function clearadd_Inputs() {
                // Select all input and select elements within the form by their IDs
                const inputElements = document.querySelectorAll('#new_fname, #new_lname, #new_suffix, #new_birthdate, #new_email, #new_phone');

                // Loop through each input element and clear its value
                inputElements.forEach((input) => {
                    if (input.tagName === 'INPUT' || input.tagName === 'SELECT') {
                        input.value = '';
                    }
                });
            }


            // Add an event listener to the "Clear" button
            document.getElementById("clearadd_ClientButton").addEventListener("click", clearadd_Inputs);

            // Function to clear form fields
            function clearFormFields() {
                document.getElementById("add_client_Form").reset();
            }

            



            // Function to handle form submission
            document.getElementById("add_client_Form").addEventListener("submit", function (e) {
                e.preventDefault(); // Prevent the form from actually submitting

                // Get form input values
                const firstName = document.getElementById("new_fname").value;
                const lastName = document.getElementById("new_lname").value;
                const suffix = document.getElementById("new_suffix").value;
                const email = document.getElementById("new_email").value;
                const phoneInput = document.getElementById("new_phone");

                const birthdateInput = document.getElementById("new_birthdate");
                

                // Parse the birthdate value as a Date object
                const birthdate = new Date(birthdateInput.value);

                // Get the current date and set its time to midnight
                const currentDate = new Date();
                currentDate.setHours(0, 0, 0, 0);

                // Compare the selected date with the current date
                if (birthdate >= currentDate) {
                    // Display an error message (you can replace this with your own error handling logic)
                    alert("Please select a previous date for the birthdate.");
                    return; // Prevent further execution of the form submission
                }

                // Get the phone input element and its value
                const phone = phoneInput.value;

                // Validate the phone number format (Ex. (+63) xxx-xxxx-xxx)
                const phoneRegex = /^\(\+63\) \d{3}-\d{4}-\d{3}$/;
                if (!phoneRegex.test(phone)) {
                    // Display an error message (you can replace this with your own error handling logic)
                    alert("Please enter a valid phone number in the format (+63) xxx-xxxx-xxx.");
                    return; // Prevent further execution of the form submission
                }


                
                // Combine first name, last name, and suffix
                const clientName = `${capitalizeEachWord(firstName)} ${capitalizeEachWord(lastName)} ${suffix}`;

                // Create a new table row
                const newRow = document.createElement("tr");
                newRow.innerHTML = `
                    <td><input type="checkbox"></td>
                    <td title="${clientName}">${clientName}</td>
                    <td title="${email}">${email}</td>
                    <td title="${phone}">${phone}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><button class="edit_action_button" id="edit_action_button">View</button><button class="delete_action_button">Archive</button></td>
                `;

                // Append the new row to the table
                const tableBody = document.querySelector("#dataTable tbody");
                tableBody.appendChild(newRow);

                closeModal();
                // Clear the form inputs
                clearadd_Inputs();

                // Edit button for each data row
                const editButtons = document.querySelectorAll(".edit_action_button");


                editButtons.forEach(editButton => {
                    editButton.addEventListener("click", function (event) {
                        event.preventDefault();

                        // Get the table row associated with the clicked edit button
                        const clientRow = editButton.closest("tr");

                        // Get client details from the row
                        const clientFullName = clientRow.querySelector("td:nth-child(2)").textContent;
                        const clientEmail = clientRow.querySelector("td:nth-child(3)").textContent;
                        const clientPhone = clientRow.querySelector("td:nth-child(4)").textContent;

                        // Split the clientFullName into first name, last name, and suffix
                        const nameParts = clientFullName.split(" ");
                        const clientFirstName = nameParts.slice(0, 2).join(" "); // Join the first two words as the first name
                        const clientLastName = nameParts.slice(2, -1).join(" "); // Join all parts except the first and last as the last name
                        const clientSuffix = nameParts[nameParts.length - 1];

                        // Update client profile with fetched data
                        const clientProfileContainer = document.getElementById("client_profile_container");
                        const clientNameElement = clientProfileContainer.querySelector(".client_name h1");
                        const lastNameElement = clientProfileContainer.querySelector(".client_name h2");
                        const suffixElement = clientProfileContainer.querySelector(".client_name h3");
                        const emailAddressElement = clientProfileContainer.querySelector(".email_address p");
                        const phoneNumberElement = clientProfileContainer.querySelector(".phone_number p");

                        clientNameElement.textContent = clientFirstName;
                        lastNameElement.textContent = clientLastName;
                        suffixElement.textContent = clientSuffix;
                        emailAddressElement.textContent = clientEmail;
                        phoneNumberElement.textContent = clientPhone;

                        // Hide the client_container and show the client_profile_container
                        const clientContainer = document.querySelector(".client_container");
                        clientContainer.style.display = "none";
                        clientProfileContainer.style.display = "inline-flex";
                    });
                });

            });











            // ------------------------------------------------------------------------------------------- //

            // Get the "Back" button sa client_profile_container element
            const backButton = document.querySelector(".profile_back");

            // Add a click event listener to the "Back" button
            backButton.addEventListener("click", function () {
                // Hide the client_profile_container and show the client_container
                const clientContainer = document.querySelector(".client_container");
                const clientProfileContainer = document.getElementById("client_profile_container");
                
                clientProfileContainer.style.display = "none";
                clientContainer.style.display = "inline-flex";
            });



            // ------------------------------------------------------------------------------------------- //


            // Get the new pet modal and close button elements
            var newPetModal = document.getElementById("new_pet_modal");
            var closeNewPetButton = document.querySelector(".close_new_pet");
            

            // Get the button that opens the new pet modal
            var newPetButton = document.getElementById("client_new_pet_btn");

            // Function to open the new pet modal
            function openNewPetModal() {
                newPetModal.style.display = "flex";
            }

            // Function to reset the form elements to their initial state
            function resetPetForm() {
                const petForm = document.getElementById('petForm');
                petForm.reset();
            }

            // Function to close the new pet modal and reset the form
            function closeNewPetModal() {
                newPetModal.style.display = "none";
                resetPetForm();
            }


            // Function to clear the pet form
            function clearPetForm() {
                // Select all input and select elements within the form by their IDs
                const petNameInput = document.getElementById('pet_name');
                const speciesSelect = document.getElementById('species');
                const breedSelect = document.getElementById('breed');
                const birthdayInput = document.getElementById('birthday');
                const ageInput = document.getElementById('age');
                const weightInput = document.getElementById('weight');
                const genderSelect = document.getElementById('gender');

                // Clear the values of each input and select element
                petNameInput.value = '';
                speciesSelect.value = '';
                breedSelect.value = '';
                birthdayInput.value = '';
                ageInput.value = '';
                weightInput.value = '';
                genderSelect.value = '';
            }

            // Add an event listener to the Clear Form button
            const clearButton = document.getElementById('clearButton');
            clearButton.addEventListener('click', clearPetForm);

            // Attach an event listener to open the new pet modal when the button is clicked
            newPetButton.addEventListener("click", openNewPetModal);

            // Attach an event listener to close the new pet modal when the close button is clicked
            closeNewPetButton.addEventListener("click", closeNewPetModal);

            

            


            // Get references to the necessary elements
            const petForm = document.getElementById('petForm');
            const clientPetsEmpty = document.getElementById('client_pets_empty');
            const clientPetsContainer = document.getElementById('client_pets');
            const addPetButton = document.getElementById('add_pet_button');

            // Check if client_pets is empty initially
            if (clientPetsContainer.children.length === 0) {
                // Hide the Add Pet button
                addPetButton.style.display = 'none';
            }


            


            // Add an event listener to the form submission
            petForm.addEventListener('submit', function (event) {
                // Prevent the default form submission behavior
                event.preventDefault();

                // Hide the client_pets_empty element
                clientPetsEmpty.style.display = 'none';

                // Make the client_pets container visible
                clientPetsContainer.style.display = 'grid';

                // Get the values from the form
                const petName = document.getElementById('pet_name').value;
                const species = document.getElementById('species').value;
                const breed = document.getElementById('breed').value;
                const birthday = document.getElementById('birthday').value;

                // Calculate the age based on the selected species and birthday
                calculateAge();

                // Update the existing elements in the client_pets container
                const petNameElement = clientPetsContainer.querySelector('.pet_name h1');
                const breedElement = clientPetsContainer.querySelector('.pet_name p');
                const birthdateElement = clientPetsContainer.querySelector('.pet_birthdate p');
                const ageElement = clientPetsContainer.querySelector('.pet_age p'); // Get the age element

                petNameElement.textContent = petName;
                breedElement.textContent = breed;
                birthdateElement.textContent = birthday;

                // Show the age in the pet_age element
                const ageValue = document.getElementById('age').value;
                ageElement.textContent = ageValue;

                // Show the Add Pet button
                addPetButton.style.display = 'flex';
            });

            // ------------------------------------------------------------------------------------------- //
            // ------------------------------------------------------------------------------------------- //
            // ------------------------------------------------------------------------------------------- //
            
            // Function to show the modal
            function showAddNewPetModal() {
                const modal = document.getElementById('add_new_pet_modal');
                modal.style.display = 'block';
            }

            // Function to hide the modal
            function hideAddNewPetModal() {
                const modal = document.getElementById('add_new_pet_modal');
                modal.style.display = 'none';
            }

            // Get the button that triggers the modal
            const add_pet_button = document.getElementById('add_pet_button');

            // Get the close button in the modal
            const close_add_new_pet = document.getElementById('close_add_new_pet');

            // Attach a click event listener to the "Add Pet" button to show the modal
            add_pet_button.addEventListener('click', showAddNewPetModal);

            // Attach a click event listener to the close button to hide the modal
            close_add_new_pet.addEventListener('click', hideAddNewPetModal);



            


            


            

// ------------------------------------------------------------------------------------------- //
// ------------------------------------------------------------------------------------------- //
// ------------------------------------------------------------------------------------------- //
            




            
            

            // Get the "Edit" button element
            const editButton = document.querySelector(".client_edit");

            // Add a click event listener to the "Edit" button
            editButton.addEventListener("click", function () {
                // Hide the client_profile_container and show the client_edit_profile
                const clientProfileContainer = document.getElementById("client_profile_container");
                const clientEditProfile = document.getElementById("client_edit_profile");

                clientProfileContainer.style.display = "none";
                clientEditProfile.style.display = "inline-flex";

                // Get the input fields in the edit profile
                const firstNameInput = document.getElementById("first_name");
                const lastNameInput = document.getElementById("last_name");
                const suffixSelect = document.getElementById("edit_suffix");
                const emailInput = document.getElementById("e_mail");
                const phoneInput = document.getElementById("phoneNumber");
                const addressInput = document.getElementById("address");

                // Get the elements in the client_details section
                const clientNameElement = document.querySelector(".client_name h1");
                const lastNameElement = document.querySelector(".client_name h2");
                const suffixElement = document.querySelector(".client_name h3");
                const emailElement = document.querySelector(".email_address p");
                const phoneElement = document.querySelector(".phone_number p");
                const addressElement = document.querySelector(".address p");

                // Populate input fields and select with client details
                firstNameInput.value = clientNameElement.textContent;
                lastNameInput.value = lastNameElement.textContent;
                suffixSelect.value = suffixElement.textContent;
                emailInput.value = emailElement.textContent;
                phoneInput.value = phoneElement.textContent;
                addressInput.value = addressElement.textContent;

                // Function to update the displayed client details
                function updateClientDetails() {
                    // Update the displayed client details
                    const updatedFirstName = firstNameInput.value;
                    const updatedLastName = lastNameInput.value;
                    const updatedSuffix = suffixSelect.value;
                    const updatedClientName = updatedFirstName + " " + updatedLastName + " " + updatedSuffix;
                    clientNameElement.textContent = updatedFirstName;
                    lastNameElement.textContent = updatedLastName;
                    suffixElement.textContent = updatedSuffix;
                    emailElement.textContent = emailInput.value;
                    phoneElement.textContent = phoneInput.value;
                    addressElement.textContent = addressInput.value;
                }

                // Add event listeners to update the displayed details when inputs change
                firstNameInput.addEventListener("input", updateClientDetails);
                lastNameInput.addEventListener("input", updateClientDetails);
                suffixSelect.addEventListener("change", updateClientDetails);
                emailInput.addEventListener("input", updateClientDetails);
                phoneInput.addEventListener("input", updateClientDetails);
                addressInput.addEventListener("input", updateClientDetails);
            });


            // Helper function to select an option in a <select> element by its value
            function selectOptionByValue(select, value) {
                for (let i = 0; i < select.options.length; i++) {
                    if (select.options[i].value === value) {
                        select.selectedIndex = i;
                        break;
                    }
                }
            }

            // ------------------------------------------------------------------------------------------- //

            //MALI PA ITO OR KULANG PA DI KO MAKUHA TAMANG PAG SAVE, PERO NAKAKAPAG SHOW NA NG MODAL ITO WITH DURATION
            function showSuccessModal() {
                const successModal = document.getElementById("successModal");
                const clientProfileContainer = document.getElementById("client_profile_container");

                // Display the modal
                successModal.style.display = "block";

                // You can also add an event listener to close the modal when clicking the "close" button (optional)
                const closeModalButton = successModal.querySelector(".close");
                if (closeModalButton) {
                    closeModalButton.addEventListener("click", function () {
                    successModal.style.display = "none";
                    });
                }

                // You can also close the modal after a certain time (e.g., 3 seconds)
                setTimeout(function () {
                    successModal.style.display = "none";
                }, 3000); // Hide after 3 seconds (adjust the time as needed)

                // Update the table row based on input changes
                const inputFields = document.querySelectorAll(".client_details_input_fields input");
                const dataRow = document.querySelector("#dataTable tbody tr"); // Adjust the selector as needed
                const dataRowCells = dataRow.querySelectorAll("td");

                const updatedValues = {};

                inputFields.forEach(inputField => {
                    const fieldId = inputField.id;
                    const fieldValue = inputField.value;
                    const cellIndex = Array.from(dataRowCells).indexOf(inputField.closest("td"));

                    if (fieldValue.trim() !== "") {
                    if (fieldId === "first_name" || fieldId === "last_name") {
                        updatedValues.clientName = `${document.getElementById("first_name").value} ${document.getElementById("last_name").value}`;
                    } else if (fieldId === "address") {
                        // Capitalize the first letter of each word in the address
                        const addressWords = fieldValue.split(" ");
                        const capitalizedWords = addressWords.map(word => {
                        return word.charAt(0).toUpperCase() + word.slice(1);
                        });
                        updatedValues.address = capitalizedWords.join(" ");
                    } else {
                        updatedValues[fieldId] = fieldValue;
                    }
                    }

                    // Update the table cell if needed
                    if (cellIndex !== -1) {
                    dataRowCells[cellIndex].textContent = fieldValue;
                    }
                });

                // Update the client details in the client_profile_container
                const clientNameElement = clientProfileContainer.querySelector("#clientFirstName");
                const clientLastNameElement = clientProfileContainer.querySelector("#clientLastName");
                const clientSuffixElement = clientProfileContainer.querySelector("#clientSuffix");
                const emailAddressElement = clientProfileContainer.querySelector(".email_address p");
                const phoneNumberElement = clientProfileContainer.querySelector(".phone_number p");
                const addressElement = clientProfileContainer.querySelector(".address p");

                if (updatedValues.clientName) {
                    const nameParts = updatedValues.clientName.split(" ");
                    clientNameElement.textContent = nameParts[0];
                    clientLastNameElement.textContent = nameParts[1];
                    clientSuffixElement.textContent = nameParts[2];
                }

                if (updatedValues.email) {
                    emailAddressElement.textContent = updatedValues.email;
                }
                if (updatedValues.phoneNumber) {
                    phoneNumberElement.textContent = updatedValues.phoneNumber;
                }
                if (updatedValues.address) {
                    addressElement.textContent = updatedValues.address;
                }

                // Clear the input fields
                inputFields.forEach(inputField => {
                    inputField.value = "";
                });
                }

                // Add a click event listener to the client_save_btn button
                const saveButton = document.querySelector(".client_save_btn");
                if (saveButton) {
                saveButton.addEventListener("click", showSuccessModal);
                }
            //MALI PA ITO OR KULANG PA DI KO MAKUHA TAMANG PAG SAVE, PERO NAKAKAPAG SHOW NA NG MODAL ITO WITH DURATION

             // ------------------------------------------------------------------------------------------- //


            // Define inputFields outside of the functions
            const inputFields = document.querySelectorAll(".client_input");

            // Back button function sa edit client info
            const BackButton = document.querySelector(".back_btn");
            const editProfile = document.getElementById("client_edit_profile");
            const ProfileContainer = document.getElementById("client_profile_container");
            const confirmationModal = document.getElementById("confirmationModal");
            const confirmModalBtn = document.getElementById("confirmModalBtn");
            const cancelModalBtn = document.getElementById("cancelModalBtn");

            let initialFieldValues = {};
            let changesSaved = false; // Track whether changes have been saved

            // Store initial field values
            inputFields.forEach(inputField => {
            initialFieldValues[inputField.id] = inputField.value;
            });

            BackButton.addEventListener("click", function () {
                let changesMade = false;

                // Check if any input field's value has changed
                inputFields.forEach(inputField => {
                    if (inputField.value !== initialFieldValues[inputField.id]) {
                        changesMade = true;
                    }
                });

                if (changesMade && !changesSaved) {
                    // Show confirmation modal
                    confirmationModal.style.display = "block";
                } else {
                    editProfile.style.display = "none";
                    ProfileContainer.style.display = "flex";

                    // Reset changesSaved to false
                    changesSaved = false;
                }
            });


            confirmModalBtn.addEventListener("click", function () {
            editProfile.style.display = "none";
            ProfileContainer.style.display = "inline-flex";
            confirmationModal.style.display = "none";
            });

            cancelModalBtn.addEventListener("click", function () {
            confirmationModal.style.display = "none";
            });


            const cancelButton = document.querySelector(".client_cancel_btn");
            const cancelModal = document.getElementById("cancelModal");
            const confirmCancelBtn = document.getElementById("confirmCancelBtn");
            const closeCancelModal = document.getElementById("closeCancelModal");

            cancelButton.addEventListener("click", function () {
            // Show the cancel confirmation modal
            cancelModal.style.display = "block";
            });

            confirmCancelBtn.addEventListener("click", function () {
            // Hide the cancel confirmation modal
            cancelModal.style.display = "none";

            // Perform the cancellation logic here (clear inputs, etc.)
            });

            closeCancelModal.addEventListener("click", function () {
            // Hide the cancel confirmation modal
            cancelModal.style.display = "none";
            });


            // ------------------------------------------------------------------------------------------- //

            // ARCHIVE MODAL
            // Get the archive button
            var archiveBtn = document.querySelector(".right_header_btn");

            // Get the archive modal
            var archiveModal = document.getElementById("archiveModal");

            // Get the confirm archive button inside the modal
            var confirmArchiveBtn = document.getElementById("confirmArchiveBtn");

            // Get the cancel archive button inside the modal
            var cancelArchiveBtn = document.getElementById("cancelArchiveBtn");

            // Function to show the archive modal if at least one data row is selected
            function showArchiveModal() {
                var selectedCheckboxes = document.querySelectorAll("tbody input[type='checkbox']:checked");
                if (selectedCheckboxes.length > 0) {
                    archiveModal.style.display = "block";
                } else {
                    // Display a message or perform some action when no rows are selected
                    console.log("No rows selected for archive.");
                }
            }

            // Function to close the archive modal
            function closeArchiveModal() {
                archiveModal.style.display = "none";
            }

            // Event listeners
            archiveBtn.addEventListener("click", showArchiveModal);
            confirmArchiveBtn.addEventListener("click", closeArchiveModal);
            cancelArchiveBtn.addEventListener("click", closeArchiveModal);



            // Get all input elements by their IDs
            // para to sa mga input texts na umaangat kapag pinindot ang input element
            // di ko malipat sa ibang script, di nagana

            
            const suffixInput = document.getElementById('suffix');
            const phoneInput = document.getElementById('phone');


            const newsuffixInput = document.getElementById('new_suffix');
            const newphoneInput = document.getElementById('new_phone');

            
            const petSpeciesInput = document.getElementById('species');
            const petBreedInput = document.getElementById('breed');
            const petAgeInput = document.getElementById('age');
            const petWeightInput = document.getElementById('weight');
            const petGenderInput = document.getElementById('gender');


            const addPetSpeciesInput = document.getElementById('add_pet_species');
            const addPetBreedInput = document.getElementById('add_pet_breed');
            
            const addPetAgeInput = document.getElementById('add_pet_age');
            const addPetWeightInput = document.getElementById('add_pet_weight');
            const addPetGenderInput = document.getElementById('add_pet_gender');

            // Create a reusable function to update the 'value' attribute when input changes
            function updateValueAttribute(inputElement) {
            inputElement.addEventListener('input', () => {
                inputElement.setAttribute('value', inputElement.value);
            });
            }

            // Add the event listeners to all input fields
            updateValueAttribute(fnameInput);
            updateValueAttribute(lnameInput);
            updateValueAttribute(suffixInput);
            updateValueAttribute(birthdateInput);
            updateValueAttribute(emailInput);
            updateValueAttribute(phoneInput);

            updateValueAttribute(newfnameInput);
            updateValueAttribute(newlnameInput);
            updateValueAttribute(newsuffixInput);
            updateValueAttribute(newbirthdateInput);
            updateValueAttribute(newemailInput);
            updateValueAttribute(newphoneInput);

            updateValueAttribute(petNameInput);
            updateValueAttribute(petSpeciesInput);
            updateValueAttribute(petBreedInput);
            updateValueAttribute(petBirthdateInput);
            updateValueAttribute(petAgeInput);
            updateValueAttribute(petWeightInput);
            updateValueAttribute(petGenderInput);

            updateValueAttribute(addPetNameInput);
            updateValueAttribute(addPetSpeciesInput);
            updateValueAttribute(addPetBreedInput);
            updateValueAttribute(addPetBirthdateInput);
            updateValueAttribute(addPetAgeInput);
            updateValueAttribute(addPetWeightInput);
            updateValueAttribute(addPetGenderInput);



            //sa select element 

            // Get the select element
            const suffixSelect = document.getElementById("suffix");

            // Set the label text to an empty string initially
            const labelSuffix = document.querySelector("#label-suffix .text");
            labelSuffix.textContent = "";

            // Add an event listener to the select element to handle click and change events
            suffixSelect.addEventListener("click", function () {
                // When the select is clicked, set the label text to "Species"
                labelSuffix.textContent = "Suffix";
            });

            suffixSelect.addEventListener("change", function () {
                // When an option is selected, check if it's not the initial "Species" option
                if (suffixSelect.value !== "") {
                    // If an option is selected, set the label text to an empty string
                    labelSuffix.textContent = "";
                }
            });




        });


 
    </script>

    <script>
        // para to sa empty state tapos mag add ng 1st client
        // Get the input element by its ID
        const fnameInput = document.getElementById('fname');

        // Add an input event listener to the input field
        fnameInput.addEventListener('input', function () {
            // Use a regular expression to match alphabetic characters and spaces
            const regex = /^[a-zA-Z\s]+$/;

            // Get the current input value
            const inputValue = fnameInput.value;

            // Test if the input matches the regular expression
            if (!regex.test(inputValue)) {
                // If it doesn't match, clear the input field
                fnameInput.value = '';
            }
        });

        // Get the input element by its ID
        const lnameInput = document.getElementById('lname');

        // Add an input event listener to the input field
        lnameInput.addEventListener('input', function () {
            // Use a regular expression to match only alphabetic characters
            const regex = /^[a-zA-Z\s]+$/;

            // Get the current input value
            const inputValue = lnameInput.value;

            // Test if the input matches the regular expression
            if (!regex.test(inputValue)) {
                // If it doesn't match, clear the input field
                lnameInput.value = '';
            }
        });

        // Get the birthdate input element by its ID
        const birthdateInput = document.getElementById('birthdate');

        // Set the maximum date attribute to today to prevent future dates
        const today = new Date().toISOString().split('T')[0];
        birthdateInput.setAttribute('max', today);

        // Add an input event listener to the input field to prevent keyboard input
        birthdateInput.addEventListener('keydown', function (e) {
            e.preventDefault();
        });

        // Get the email input element by its ID
        const emailInput = document.getElementById('email');

        // Add an input event listener to the input field
        emailInput.addEventListener('input', function () {
            // Use a regular expression to validate the email format for Gmail
            const regex = /^[a-zA-Z0-9._%+-]+@gmail\.com$/;

            // Get the current input value
            const inputValue = emailInput.value;

            // Test if the input matches the regular expression
            if (!regex.test(inputValue)) {
                // If it doesn't match, set a custom error message or clear the input field
                emailInput.setCustomValidity('Please enter a valid Gmail address (e.g., example@gmail.com)');
            } else {
                // If it matches, clear any custom error message
                emailInput.setCustomValidity('');
            }
        });
    </script>

    <script>
        // input fields kapag mag add ng another client (pang 2nd data row pababa)
        // Get the input element by its ID
        const newfnameInput = document.getElementById('new_fname');

        // Add an input event listener to the input field
        newfnameInput.addEventListener('input', function () {
            // Use a regular expression to match alphabetic characters and spaces
            const regex = /^[a-zA-Z\s]+$/;

            // Get the current input value
            const inputValue = newfnameInput.value;

            // Test if the input matches the regular expression
            if (!regex.test(inputValue)) {
                // If it doesn't match, clear the input field
                newfnameInput.value = '';
            }
        });

        // Get the input element by its ID
        const newlnameInput = document.getElementById('new_lname');

        // Add an input event listener to the input field
        newlnameInput.addEventListener('input', function () {
            // Use a regular expression to match only alphabetic characters
            const regex = /^[a-zA-Z\s]+$/;

            // Get the current input value
            const inputValue = newlnameInput.value;

            // Test if the input matches the regular expression
            if (!regex.test(inputValue)) {
                // If it doesn't match, clear the input field
                newlnameInput.value = '';
            }
        });

        // Get the birthdate input element by its ID
        const newbirthdateInput = document.getElementById('new_birthdate');

        // Set the maximum date attribute to today to prevent future dates
        const newtoday = new Date().toISOString().split('T')[0];
        newbirthdateInput.setAttribute('max', newtoday);

        // Add an input event listener to the input field to prevent keyboard input
        newbirthdateInput.addEventListener('keydown', function (e) {
            e.preventDefault();
        });

        // Get the email input element by its ID
        const newemailInput = document.getElementById('new_email');

        // Add an input event listener to the input field
        newemailInput.addEventListener('input', function () {
            // Use a regular expression to validate the email format for Gmail
            const regex = /^[a-zA-Z0-9._%+-]+@gmail\.com$/;

            // Get the current input value
            const inputValue = newemailInput.value;

            // Test if the input matches the regular expression
            if (!regex.test(inputValue)) {
                // If it doesn't match, set a custom error message or clear the input field
                newemailInput.setCustomValidity('Please enter a valid Gmail address (e.g., example@gmail.com)');
            } else {
                // If it matches, clear any custom error message
                newemailInput.setCustomValidity('');
            }
        });
    </script>

    <script>
        //input para roon sa unang modal na lilitaw na petForm kapag empty state at nag add pet
        // Get the species and breed select elements
        var speciesSelect = document.getElementById("species");
            var breedSelect = document.getElementById("breed");

            // Define a JavaScript object that maps species to their respective breeds
            var breedOptions = {
                "dog": ["Affenpinscher","Afghan Hound","Airedale Terrier","Akita","Alaskan Malamute","American Bulldog","American Eskimo Dog","American Foxhound","American Pit Bull Terrier","American Staffordshire Terrier","American Water Spaniel","Anatolian Shepherd Dog","Australian Cattle Dog","Australian Shepherd","Australian Terrier","Basenji","Basset Hound","Beagle","Bearded Collie","Bedlington Terrier","Belgian Malinois","Belgian Sheepdog","Belgian Tervuren","Bernese Mountain Dog","Bichon Frise","Black and Tan Coonhound","Bloodhound","Bluetick Coonhound","Border Collie","Border Terrier","Borzoi","Boston Terrier","Bouvier des Flandres","Boxer","Boykin Spaniel","Brussels Griffon","Bull Terrier","Bulldog","Bullmastiff","Cairn Terrier","Canaan Dog","Cane Corso","Cardigan Welsh Corgi","Cavalier King Charles Spaniel","Chesapeake Bay Retriever","Chihuahua","Chinese Crested","Chinese Shar-Pei","Chow Chow","Clumber Spaniel","Cockapoo","Collie","Coton de Tulear","Curly-Coated Retriever","Dachshund","Dalmatian","Dandie Dinmont Terrier","Doberman Pinscher","Dogue de Bordeaux","English Bulldog","English Cocker Spaniel","English Foxhound","English Setter","English Springer Spaniel","English Toy Spaniel","Entlebucher Mountain Dog","Field Spaniel","Finnish Lapphund","Finnish Spitz","Flat-Coated Retriever","French Bulldog","German Pinscher","German Shepherd Dog","German Shorthaired Pointer","German Wirehaired Pointer","Giant Schnauzer","Glen of Imaal Terrier","Goldador","Golden Retriever","Goldendoodle","Gordon Setter","Great Dane","Great Pyrenees","Greater Swiss Mountain Dog","Greyhound","Harrier","Havanese","Ibizan Hound","Icelandic Sheepdog","Irish Red and White Setter","Irish Setter","Irish Terrier","Irish Water Spaniel","Irish Wolfhound","Italian Greyhound","Jack Russell Terrier","Japanese Chin","Japanese Spitz","Karelian Bear Dog","Keeshond","Kerry Blue Terrier","King Charles Spaniel","Komondor","Kooikerhondje","Kuvasz","Labrador Retriever","Lakeland Terrier","Lancashire Heeler","Leonberger","Lhasa Apso","Lowchen","Maltese","Maltese Shih Tzu","Maltipoo","Manchester Terrier","Mastiff","Miniature Australian Shepherd","Miniature Bull Terrier","Miniature Pinscher","Miniature Schnauzer","Neapolitan Mastiff","Newfoundland","Norfolk Terrier","Norwegian Buhund","Norwegian Elkhound","Norwegian Lundehund","Norwich Terrier","Nova Scotia Duck Tolling Retriever","Old English Sheepdog","Otterhound","Papillon","Pekingese","Pembroke Welsh Corgi","Petit Basset Griffon Vendeen","Pharaoh Hound","Plott","Pocket Beagle","Pointer","Polish Lowland Sheepdog","Pomeranian","Pomsky","Poodle","Portuguese Water Dog","Pug","Puggle","Puli","Pyrenean Shepherd","Rat Terrier","Redbone Coonhound","Rhodesian Ridgeback","Rottweiler","Saint Bernard","Saluki","Samoyed","Schipperke","Scottish Deerhound","Scottish Terrier","Sealyham Terrier","Shetland Sheepdog","Shiba Inu","Shih Tzu","Siberian Husky","Silky Terrier","Skye Terrier","Sloughi","Small Munsterlander Pointer","Soft Coated Wheaten Terrier","Stabyhoun","Staffordshire Bull Terrier","Standard Schnauzer","Sussex Spaniel","Swedish Vallhund","Tibetan Mastiff","Tibetan Spaniel","Tibetan Terrier","Toy Fox Terrier","Treeing Tennessee Brindle","Treeing Walker Coonhound","Vizsla","Weimaraner","Welsh Springer Spaniel","Welsh Terrier","West Highland White Terrier","Whippet","Wirehaired Pointing Griffon","Xoloitzcuintli","Yorkipoo","Yorkshire Terrier"],

                "cat": ["Abyssinian","American Bobtail","American Curl","American Shorthair","American Wirehair","Balinese","Bengal","Birman","Bombay","British Shorthair","Burmese","Burmilla","Chartreux","Chausie","Cheetoh","Colorpoint Shorthair","Cornish Rex","Cymric","Devon Rex","Egyptian Mau","European Burmese","Exotic Shorthair","Havana Brown","Himalayan","Japanese Bobtail","Javanese","Khao Manee","Korat","LaPerm","Maine Coon","Manx","Munchkin","Nebelung","Norwegian Forest Cat","Ocicat","Oriental","Persian","Pixie-Bob","Ragamuffin","Ragdoll","Russian Blue","Savannah","Scottish Fold","Selkirk Rex","Siamese","Siberian","Singapura","Snowshoe","Somali","Sphynx","Tonkinese","Toyger","Turkish Angora","Turkish Van","York Chocolate"]

            };


            // Function to update the breed select based on the selected species
            function updateBreedOptions() {
                var selectedSpecies = speciesSelect.value;
                var breedOptionsArray = breedOptions[selectedSpecies] || [];

                // Sort the breed options alphabetically
                breedOptionsArray.sort();

                // Clear current breed options
                breedSelect.innerHTML = '';

                // Add new breed options based on the selected species
                if (breedOptionsArray.length === 0) {
                    breedSelect.disabled = true;
                    breedSelect.innerHTML = '<option value="">No breeds available</option>';
                } else {
                    breedSelect.disabled = false;
                    breedSelect.innerHTML = '<option value="" disabled selected>Select Breed</option>';
                    breedOptionsArray.forEach(function (breed) {
                        var option = document.createElement("option");
                        option.value = breed;
                        option.textContent = breed;
                        breedSelect.appendChild(option);
                    });
                }
            }

            // Attach an event listener to the species select to update breed options when species is changed
            speciesSelect.addEventListener("change", updateBreedOptions);

            // Initially, call the updateBreedOptions function to set the initial state
            updateBreedOptions();

            // Function to calculate the age based on the birthday and species
            function calculateAge() {
                // Get the birthday value from the input field
                const birthdayInput = document.getElementById('birthday').value;
                const selectedSpecies = document.getElementById('species').value;

                if (birthdayInput && selectedSpecies) {
                    // Create a Date object for the current date
                    const currentDate = new Date();
                    currentDate.setHours(0, 0, 0, 0); // Set time to midnight

                    // Create a Date object for the birthday using the input value
                    const birthday = new Date(birthdayInput);

                    // Check if the birthday is in the future or today
                    if (birthday > currentDate) {
                        // Display a message indicating that the selected date is invalid
                        alert("Please select the current date or a previous date for the birthday.");
                        return; // Prevent further execution
                    }

                    // Calculate the difference in milliseconds
                    const ageInMilliseconds = currentDate - birthday;

                    // Calculate the age in years, months, and days
                    const ageDate = new Date(ageInMilliseconds);
                    const years = ageDate.getUTCFullYear() - 1970;
                    const months = ageDate.getUTCMonth();
                    const days = ageDate.getUTCDate() - 1; // Subtract 1 day because month is 0-based

                    // Display the age in the age input field
                    const ageElement = document.getElementById('age');
                    ageElement.value = `${years} years, ${months} months, ${days} days (${selectedSpecies})`;
                } else {
                    // If no birthday or species is selected, clear the age input field
                    const ageElement = document.getElementById('age');
                    ageElement.value = '';
                }
            }


            // Attach an event listener to the birthday input to calculate the age
            const petBirthdateInput = document.getElementById('birthday');
            petBirthdateInput.addEventListener('change', calculateAge);
            
            // Set the maximum date attribute to today to prevent future dates
            const todaynewpet = new Date().toISOString().split('T')[0];
            petBirthdateInput.setAttribute('max', todaynewpet);

            // Add an input event listener to the input field to prevent keyboard input
            petBirthdateInput.addEventListener('keydown', function (e) {
                e.preventDefault();
            });

        function isValidPetName(input) {
                // Regular expression to match only alphabets and spaces
                const regex = /^[A-Za-z ]+$/;
                
                return regex.test(input);
            }
            const petNameInput = document.getElementById("pet_name");
            petNameInput.addEventListener("input", function () {
                const inputValue = petNameInput.value;
                
                if (!isValidPetName(inputValue)) {
                    // Display an error message or take some other action
                    alert("Please enter a valid pet name with alphabets and spaces only.");
                    // Optionally, clear the input or prevent further input
                    petNameInput.value = "";
                }
            });
    </script>


    <script>

        //PARA SA INPUT SA MODAL NA LALABAS KAPAG PININDOT ANG PLUS BUTTON PARA SA NEW PET SA CLIENT//

        // Get the species and breed select elements
        var add_pet_species = document.getElementById("add_pet_species");
        var add_pet_breed = document.getElementById("add_pet_breed");

        // Define a JavaScript object that maps species to their respective breeds
        var breedOptions = {
            "dog": ["Affenpinscher","Afghan Hound","Airedale Terrier","Akita","Alaskan Malamute","American Bulldog","American Eskimo Dog","American Foxhound","American Pit Bull Terrier","American Staffordshire Terrier","American Water Spaniel","Anatolian Shepherd Dog","Australian Cattle Dog","Australian Shepherd","Australian Terrier","Basenji","Basset Hound","Beagle","Bearded Collie","Bedlington Terrier","Belgian Malinois","Belgian Sheepdog","Belgian Tervuren","Bernese Mountain Dog","Bichon Frise","Black and Tan Coonhound","Bloodhound","Bluetick Coonhound","Border Collie","Border Terrier","Borzoi","Boston Terrier","Bouvier des Flandres","Boxer","Boykin Spaniel","Brussels Griffon","Bull Terrier","Bulldog","Bullmastiff","Cairn Terrier","Canaan Dog","Cane Corso","Cardigan Welsh Corgi","Cavalier King Charles Spaniel","Chesapeake Bay Retriever","Chihuahua","Chinese Crested","Chinese Shar-Pei","Chow Chow","Clumber Spaniel","Cockapoo","Collie","Coton de Tulear","Curly-Coated Retriever","Dachshund","Dalmatian","Dandie Dinmont Terrier","Doberman Pinscher","Dogue de Bordeaux","English Bulldog","English Cocker Spaniel","English Foxhound","English Setter","English Springer Spaniel","English Toy Spaniel","Entlebucher Mountain Dog","Field Spaniel","Finnish Lapphund","Finnish Spitz","Flat-Coated Retriever","French Bulldog","German Pinscher","German Shepherd Dog","German Shorthaired Pointer","German Wirehaired Pointer","Giant Schnauzer","Glen of Imaal Terrier","Goldador","Golden Retriever","Goldendoodle","Gordon Setter","Great Dane","Great Pyrenees","Greater Swiss Mountain Dog","Greyhound","Harrier","Havanese","Ibizan Hound","Icelandic Sheepdog","Irish Red and White Setter","Irish Setter","Irish Terrier","Irish Water Spaniel","Irish Wolfhound","Italian Greyhound","Jack Russell Terrier","Japanese Chin","Japanese Spitz","Karelian Bear Dog","Keeshond","Kerry Blue Terrier","King Charles Spaniel","Komondor","Kooikerhondje","Kuvasz","Labrador Retriever","Lakeland Terrier","Lancashire Heeler","Leonberger","Lhasa Apso","Lowchen","Maltese","Maltese Shih Tzu","Maltipoo","Manchester Terrier","Mastiff","Miniature Australian Shepherd","Miniature Bull Terrier","Miniature Pinscher","Miniature Schnauzer","Neapolitan Mastiff","Newfoundland","Norfolk Terrier","Norwegian Buhund","Norwegian Elkhound","Norwegian Lundehund","Norwich Terrier","Nova Scotia Duck Tolling Retriever","Old English Sheepdog","Otterhound","Papillon","Pekingese","Pembroke Welsh Corgi","Petit Basset Griffon Vendeen","Pharaoh Hound","Plott","Pocket Beagle","Pointer","Polish Lowland Sheepdog","Pomeranian","Pomsky","Poodle","Portuguese Water Dog","Pug","Puggle","Puli","Pyrenean Shepherd","Rat Terrier","Redbone Coonhound","Rhodesian Ridgeback","Rottweiler","Saint Bernard","Saluki","Samoyed","Schipperke","Scottish Deerhound","Scottish Terrier","Sealyham Terrier","Shetland Sheepdog","Shiba Inu","Shih Tzu","Siberian Husky","Silky Terrier","Skye Terrier","Sloughi","Small Munsterlander Pointer","Soft Coated Wheaten Terrier","Stabyhoun","Staffordshire Bull Terrier","Standard Schnauzer","Sussex Spaniel","Swedish Vallhund","Tibetan Mastiff","Tibetan Spaniel","Tibetan Terrier","Toy Fox Terrier","Treeing Tennessee Brindle","Treeing Walker Coonhound","Vizsla","Weimaraner","Welsh Springer Spaniel","Welsh Terrier","West Highland White Terrier","Whippet","Wirehaired Pointing Griffon","Xoloitzcuintli","Yorkipoo","Yorkshire Terrier"],

            "cat": ["Abyssinian","American Bobtail","American Curl","American Shorthair","American Wirehair","Balinese","Bengal","Birman","Bombay","British Shorthair","Burmese","Burmilla","Chartreux","Chausie","Cheetoh","Colorpoint Shorthair","Cornish Rex","Cymric","Devon Rex","Egyptian Mau","European Burmese","Exotic Shorthair","Havana Brown","Himalayan","Japanese Bobtail","Javanese","Khao Manee","Korat","LaPerm","Maine Coon","Manx","Munchkin","Nebelung","Norwegian Forest Cat","Ocicat","Oriental","Persian","Pixie-Bob","Ragamuffin","Ragdoll","Russian Blue","Savannah","Scottish Fold","Selkirk Rex","Siamese","Siberian","Singapura","Snowshoe","Somali","Sphynx","Tonkinese","Toyger","Turkish Angora","Turkish Van","York Chocolate"]

        };


        // Function to update the breed select based on the selected species
        function updatePetBreedOptions() {
            var selectedSpecies = add_pet_species.value;
            var breedOptionsArray = breedOptions[selectedSpecies] || [];

            // Sort the breed options alphabetically
            breedOptionsArray.sort();

            // Clear current breed options
            add_pet_breed.innerHTML = '';

            // Add new breed options based on the selected species
            if (breedOptionsArray.length === 0) {
                add_pet_breed.disabled = true;
                add_pet_breed.innerHTML = '<option value="">No breeds available</option>';
            } else {
                add_pet_breed.disabled = false;
                add_pet_breed.innerHTML = '<option value="" disabled selected>Select Breed</option>';
                breedOptionsArray.forEach(function (breed) {
                    var option = document.createElement("option");
                    option.value = breed;
                    option.textContent = breed;
                    add_pet_breed.appendChild(option);
                });
            }
        }

        // Attach an event listener to the species select to update breed options when species is changed
        add_pet_species.addEventListener("change", updatePetBreedOptions);

        // Initially, call the updateBreedOptions function to set the initial state
        updatePetBreedOptions();

        // Function to calculate the age based on the birthday and species
        function calculateNewAge() {
            // Get the birthday value from the input field
            const birthdayInput = document.getElementById('add_pet_birthday').value;
            const selectedSpecies = document.getElementById('add_pet_species').value;

            if (birthdayInput && selectedSpecies) {
                // Create a Date object for the current date
                const currentDate = new Date();
                currentDate.setHours(0, 0, 0, 0); // Set time to midnight

                // Create a Date object for the birthday using the input value
                const birthday = new Date(birthdayInput);

                // Check if the birthday is in the future or today
                if (birthday > currentDate) {
                    // Display a message indicating that the selected date is invalid
                    alert("Please select the current date or a previous date for the birthday.");
                    return; // Prevent further execution
                }

                // Calculate the difference in milliseconds
                const ageInMilliseconds = currentDate - birthday;

                // Calculate the age in years, months, and days
                const ageDate = new Date(ageInMilliseconds);
                const years = ageDate.getUTCFullYear() - 1970;
                const months = ageDate.getUTCMonth();
                const days = ageDate.getUTCDate() - 1; // Subtract 1 day because month is 0-based

                // Display the age in the age input field
                const ageElement = document.getElementById('add_pet_age');
                ageElement.value = `${years} years, ${months} months, ${days} days (${selectedSpecies})`;
            } else {
                // If no birthday or species is selected, clear the age input field
                const ageElement = document.getElementById('add_pet_age');
                ageElement.value = '';
            }
        }

        // Attach an event listener to the birthday input to calculate the age
        const addPetBirthdateInput = document.getElementById('add_pet_birthday');
        addPetBirthdateInput.addEventListener('change', calculateNewAge);

        function isValidPetName(input) {
            // Regular expression to match only alphabets and spaces
            const regex = /^[A-Za-z ]+$/;
            
            return regex.test(input);
        }
        const addPetNameInput = document.getElementById("add_pet_name");
        addPetNameInput.addEventListener("input", function () {
            const inputValue = addPetNameInput.value;
            
            if (!isValidPetName(inputValue)) {
                // Display an error message or take some other action
                alert("Please enter a valid pet name with alphabets and spaces only.");
                // Optionally, clear the input or prevent further input
                addPetNameInput.value = "";
            }
        });
               
    </script>

<script>
    const fname = document.getElementById('fname');
    const lname = document.getElementById('lname');
    const birthdate = document.getElementById('birthdate');
    const email = document.getElementById('email');
    const phone = document.getElementById('phone');

    // Create a reusable function to update the 'value' attribute when input changes
    function updateValueAttribute(inputElement) {
    inputElement.addEventListener('input', () => {
        inputElement.setAttribute('value', inputElement.value);
    });
    }

    // Add the event listeners to all input fields
    updateValueAttribute(fname);
    updateValueAttribute(lname);
    updateValueAttribute(birthdate);
    updateValueAttribute(email);
    updateValueAttribute(phone);
</script>



 

    

</body>

</html>