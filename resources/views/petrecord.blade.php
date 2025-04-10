<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
    <title>Pet Records</title>
    <link href="/css/styles.css" rel="stylesheet">
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
                        <li class="active" data-tab="petinfo"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
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
                        <li data-tab="clients"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
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
            <div class="main_content" id="main_content">

                <div class="admin_petInfo_heading_and_add_pet_btn">
                    <div class="admin_petInfo_heading">
                        <p>Pet Records</p>
                    </div>

                    <button id="addRecordButton" class="addRecordButton">Add Record <svg xmlns="http://www.w3.org/2000/svg" width="24" height="26" viewBox="0 0 24 26" fill="none">
  <g clip-path="url(#clip0_3207_8796)" filter="url(#filter0_d_3207_8796)">
    <path d="M14 3V7C14 7.26522 14.1054 7.51957 14.2929 7.70711C14.4804 7.89464 14.7348 8 15 8H19M14 3H7C6.46957 3 5.96086 3.21071 5.58579 3.58579C5.21071 3.96086 5 4.46957 5 5V19C5 19.5304 5.21071 20.0391 5.58579 20.4142C5.96086 20.7893 6.46957 21 7 21H17C17.5304 21 18.0391 20.7893 18.4142 20.4142C18.7893 20.0391 19 19.5304 19 19V8M14 3L19 8M12 11V17M9 14H15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <filter id="filter0_d_3207_8796" x="-2" y="0" width="28" height="28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
      <feOffset dy="2"/>
      <feGaussianBlur stdDeviation="1"/>
      <feComposite in2="hardAlpha" operator="out"/>
      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_3207_8796"/>
      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_3207_8796" result="shape"/>
    </filter>
    <clipPath id="clip0_3207_8796">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg></button>
                    <div class="admin_petInfo_addPetmodal" id="admin_petInfo_addPetmodal" style="display: none;"><!-- modal na lilitaw kapag pinindot ang edit or delete -->
                        <div class="admin_petInfo_modal-content">
                            <div class="admin_petInfo_frame490">
                                <h3>Add Record</h3>
                                <div class="admin_petInfo_cancel-button">
                                        <button class="cancel_pet" id=cancel_pet><svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                        <g clip-path="url(#clip0_2389_85433)">
                                                            <path d="M18 6.5L6 18.5M6 6.5L18 18.5" stroke="black" stroke-opacity="0.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_2389_85433">
                                                            <rect width="24" height="24" fill="white" transform="translate(0 0.5)"/>
                                                            </clipPath>
                                                        </defs>
                                        </svg>
                                        </button>                                                       
                                </div>
                            </div>
                            <div class="admin_petInfo_frame523">
                                    <!-- Form inputs -->
                                <div class="input_container">
                                    <select class="admin_petInfo_select" id="name" name="name" placeholder="Owner Name">
                                        <option value=""disabled selected>Select Owner: </option>
                                    </select>
                                </div>

                                <div class="input_container">
                                    <input type="text" id="pet_name"  name="pet_name"  value="" aria-labelledby="label-pet_name" required/>
                                    <label class="label" for="pet_name" id="label-pet_name">
                                      <div class="text">Pet Name</div>
                                    </label>
                                </div>  
                                                    
                                <div class="frame46">
                                
                                    <div class="input_container">
                                        <select id="species" name="species" value="" aria-labelledby="label-species" required>
                                            <option value="" disabled selected>Species</option>
                                            <option value="dog">Dog</option>
                                            <option value="cat">Cat</option>
                                        </select>
                                        <label class="label" for="species" id="label-species">
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

                                <div class="frame47">

                                    <div class="input_container">
                                        <input type="date" id="pet_birthday" name="pet_birthday" onchange="calculateNewAge()"value="" aria-labelledby="label-pet_birthday" required/>
                                        <label class="label" for="pet_birthday" id="label-pet_birthday">
                                            <div class="text">Birthdate</div>
                                        </label>
                                    </div>  
                                    
                                    <div class="input_container">
                                        <input type="text" id="pet_age" name="pet_age" value="" aria-labelledby="label-pet_age" required disabled/>
                                        <label class="label" for="pet_age" id="label-pet_age">
                                            
                                        </label>
                                    </div>
                                </div>

                                <div class="frame48">
                                    <div class="input_container">
                                        <input type="text" id="pet_weight" name="pet_weight" value="" aria-labelledby="label-pet_weight" required/>
                                        <label class="label" for="pet_weight" id="label-pet_weight">
                                            <div class="text">Weight</div>
                                        </label>
                                    </div>

                                    <div class="input_container">
                                        <select id="pet_gender" name="pet_gender" aria-labelledby="label-pet_gender" required>
                                            <option value="" disabled selected>Select a gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                        <label class="label" for="pet_gender" id="label-pet_gender">
                                            <div class="text">Gender</div>
                                        </label>
                                    </div>                                       
                                </div>
                            </div>

                            <div class="frame494">
                                <button class="clear_button" id="clear_button">
                                    <div class="clear_button_base">
                                        Clear Form
                                    </div>
                                </button>
                                <button type="submit" class="save_button" id="save_button" disabled>
                                    <div class="save_button_base">
                                        Submit
                                    </div>
                                </button>
                            </div> 
                        </div>                       
                    </div>
                </div>
                <div class="edit_pet_header_container" id="edit_pet_header_container">
                    <div class="edit_pet_header">
                        <h1>Edit Pet Information</h1>
                    </div>
                </div>


                <div class="admin_petInfo_pet_records_container">
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
                    </div>
                    
                    <div class="admin_petInfo_pet_card">
                        <div class="admin_petInfo_pet_record_item">
                            <div class="admin_petInfo_pet_picture">
                                <img src="#" alt="Pet Picture">
                            </div>
                            <div class="admin_petInfo_pet_details">
                                <div class="admin_petInfo_pet_details_petName_moreBtn">
                                    <div class="admin_petInfo_pet_details_header">
                                        <h1>Pet Name</h1> <!--Change into actual pet name-->
                                        <p>Breed</p> <!--Change into actual breed-->
                                    </div>

                                    <div class="admin_petInfo_more_button">
                                        <button class="admin_petInfo_frame426">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                <path d="M9 5C7.61929 5 6.5 3.88071 6.5 2.5C6.5 1.11929 7.61929 -6.03528e-08 9 0C10.3807 6.03528e-08 11.5 1.11929 11.5 2.5C11.5 3.88071 10.3807 5 9 5Z" fill="#045B62" />
                                                <path d="M9 11.5C7.61929 11.5 6.5 10.3807 6.5 9C6.5 7.61929 7.61929 6.5 9 6.5C10.3807 6.5 11.5 7.61929 11.5 9C11.5 10.3807 10.3807 11.5 9 11.5Z" fill="#045B62" />
                                                <path d="M9 18C7.61929 18 6.5 16.8807 6.5 15.5C6.5 14.1193 7.61929 13 9 13C10.3807 13 11.5 14.1193 11.5 15.5C11.5 16.8807 10.3807 18 9 18Z" fill="#045B62" />
                                            </svg>
                                        </button>
                                        <div class="admin_petInfo_menu_options" id="admin_petInfo_menu_options"style="display: none;">
                                            <ul>
                                                <li><a href="#" class="edit-option" onclick="togglePetRecord()">View Record</a></li>
                                                <li><a href="#" class="archive-option">Archive</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="admin_petInfo_records_owner_info_body">
                                    <div class="admin_petInfo_records_frame226"> <!--ginanito ko muna kase laravel error nalabas sa screen ko kapag di ganito-->
                                        <div class="admin_petInfo_records_frame216">
                                            <p>Owner: </p> <!--lagay ng code dito para sa pagshow ng name after nung P-->
                                        </div>  
                                        
                                    </div>
                                    <div class="admin_petInfo_records_frame369">
                                        <div class="admin_petInfo_records_frame216">
                                            <p>Email: </p> <!--lagay ng code dito para sa pagshow ng name after nung P-->                         
                                        </div>  
                                        <div class="admin_petInfo_records_frame217">
                                        <p>Contact Number: </p> <!--lagay ng code dito para sa pagshow ng address after nung P-->
                                        </div>
                                    </div>
                                </div>  
                            </div>  
                        </div> 
                        <!-- YUNG CARD LIKE NA CONTAINER NG MGA PET RECORDS NA NADADAGDAGAN DEPENDE KUNG ILAN INADD NG USER OR ADMIN-->

                        <div class="admin_petInfo_pet_record_item">
                            <div class="admin_petInfo_pet_picture">
                                <img src="#" alt="Pet Picture">
                            </div>
                            <div class="admin_petInfo_pet_details">
                                <div class="admin_petInfo_pet_details_petName_moreBtn">
                                    <div class="admin_petInfo_pet_details_header">
                                        <h1>Pet Name</h1> <!--Change into actual pet name-->
                                        <p>Breed</p> <!--Change into actual breed-->
                                    </div>

                                    <div class="admin_petInfo_more_button">
                                        <button class="admin_petInfo_frame426" id="admin_petInfo_frame426">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                <path d="M9 5C7.61929 5 6.5 3.88071 6.5 2.5C6.5 1.11929 7.61929 -6.03528e-08 9 0C10.3807 6.03528e-08 11.5 1.11929 11.5 2.5C11.5 3.88071 10.3807 5 9 5Z" fill="#045B62" />
                                                <path d="M9 11.5C7.61929 11.5 6.5 10.3807 6.5 9C6.5 7.61929 7.61929 6.5 9 6.5C10.3807 6.5 11.5 7.61929 11.5 9C11.5 10.3807 10.3807 11.5 9 11.5Z" fill="#045B62" />
                                                <path d="M9 18C7.61929 18 6.5 16.8807 6.5 15.5C6.5 14.1193 7.61929 13 9 13C10.3807 13 11.5 14.1193 11.5 15.5C11.5 16.8807 10.3807 18 9 18Z" fill="#045B62" />
                                            </svg>
                                        </button>
                                        <div class="admin_petInfo_menu_options" id="admin_petInfo_menu_options" style="display: none;">
                                            <ul>
                                                <li><a href="#" class="edit-option" onclick="togglePetRecord()">View Record</a></li>
                                                <li><a href="#" class="archive-option">Archive</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="admin_petInfo_records_owner_info_body">
                                    <div class="admin_petInfo_records_frame226"> <!--ginanito ko muna kase laravel error nalabas sa screen ko kapag di ganito-->
                                        <div class="admin_petInfo_records_frame216">
                                            <p>Owner: </p> <!--lagay ng code dito para sa pagshow ng name after nung P-->
                                        </div>  
                                        
                                    </div>
                                    <div class="admin_petInfo_records_frame369">
                                        <div class="admin_petInfo_records_frame216">
                                            <p>Email: </p> <!--lagay ng code dito para sa pagshow ng name after nung P-->                         
                                        </div>  
                                        <div class="admin_petInfo_records_frame217">
                                        <p>Contact Number: </p> <!--lagay ng code dito para sa pagshow ng address after nung P-->
                                        </div>
                                    </div>
                                </div>  
                            </div>  
                        </div>                                                 
                    </div> 
                
                </div>

                
                                        <!-- Modal content for the pet record -->
                            <!-- Add your pet record content here -->
                <div class="admin_petInfo_pet_record_modal" id="admin_petInfo_pet_record_modal" style="display: none;">
                    <div class="admin_petInfo_modal_header">
                        <div class="admin_petInfo_frame410">
                            <button class="admin_petInfo_backButton" onclick="togglePetRecordItem()">
                                <div class="admin_petInfo_backButton_base">
                                    Back
                                </div>
                            </button>
                        </div>
                        <div class="admin_petInfo_PetRecordItem">
                        <div class="admin_petInfo_frame522">
                            <div class="cloud">
                                <img src="#" alt="Pet Picture">
                            </div>
                            <div class="admin_petInfo_records">
                                <div class="admin_petInfo_records_owner_info_heading">
                                    <div class="pet_name_breed">
                                        <h1>Pet Name dito</h1>
                                    <p>Pet breed dito</p>
                                    </div>
                                    
                                </div>
                                <div class="admin_petInfo_records_owner_info_body">
                                    <div class="admin_petInfo_records_frame226">
                                        <div class="admin_petInfo_records_frame216">
                                            <p>Age: </p> <!--lagay ng code dito para sa pagshow ng name after nung P-->
                                        </div>  
                                        <div class="admin_petInfo_records_frame216">
                                            <p>Birthdate: </p> <!--lagay ng code dito para sa pagshow ng Address after nung P-->
                                        </div>  
                                        <div class="admin_petInfo_records_frame216">
                                            <p>Weight: </p> <!-- dito yung weight ng pet-->
                                        </div>
                                        <div class="admin_petInfo_records_frame216">
                                            <p>Gender: </p> <!--Gender ng pet-->
                                        </div>
                                    </div>
                                    
                                </div>  
                            </div>
                        </div>
                        <button class="admin_petInfo_icon_button" id="admin_petInfo_icon_button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <g clip-path="url(#clip0_2531_8842)">
                                <path d="M13.5 6.50024L17.5 10.5002M4 20.0003H8L18.5 9.5003C19.0304 8.96987 19.3284 8.25045 19.3284 7.5003C19.3284 6.75016 19.0304 6.03074 18.5 5.5003C17.9696 4.96987 17.2501 4.67188 16.5 4.67188C15.7499 4.67187 15.0304 4.96987 14.5 5.5003L4 16.0003V20.0003Z" stroke="#1C1C1C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_2531_8842">
                                <rect width="24" height="24" fill="white"/>
                                </clipPath>
                            </defs>
                            </svg>
                        </button>
                    </div>     
                    
                    <div class="pet_info_nav_and_addBtn">
                        <div class="nav-tabs petInfo_nav_tabs">
                            <div class="nav-item petInfo_nav_item active" data-tab="admin_petInfo">Information</div>
                            <div class="nav-item petInfo_nav_item" data-tab="admin_petInfo_medical_history">Medical History</div>
                            <div class="nav-item petInfo_nav_item" data-tab="admin_petInfo_immunization_history">Immunization History</div>
                            <div class="nav-item petInfo_nav_item" data-tab="admin_petInfo_surgery">Surgery</div>
                        </div>

                        <button class="petInfo_nav_button" id="petInfo_nav_button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <g clip-path="url(#clip0_3252_10033)">
                                    <path d="M12 5V19M5 12H19" stroke="#1C1C1C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_3252_10033">
                                        <rect width="24" height="24" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </button>
                    </div>


                    <div class="tab-content">
                        <!-- Content for the "Allergies" tab -->
                        <div class="tab-pane active" data-tab="admin_petInfo">
                            <div class="ownerInfo">
                                <div class="ownerInfo_header">
                                    <h1>Owner Information</h1>
                                </div>
                                <div class="ownerInfo_details">
                                    <div class="ownerInfo_name_address">
                                        <div class="ownerName">
                                            <h1>Name</h1>
                                            <p>dito yung name na lilitaw</p>
                                        </div>
                                        <div class="ownerAddress">
                                            <h1>Address</h1>
                                            <p>Dito yung address na lilitaw</p>
                                        </div>
                                    </div>
                                    <div class="ownerInfo_email_contact">
                                        <div class="ownerEmail">
                                            <h1>Email</h1>
                                            <p>dito yung email na lalabas</p>
                                        </div>
                                        <div class="ownerContact">
                                            <h1>Contact Number</h1>
                                            <p>dito contact number na lalabas</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="health_concerns">
                                <div class="health_concerns_header">
                                    <h1>Health Concerns</h1>
                                </div>
                                <div class="health_concerns_details">
                                    <div class="health_concerns_allergies_conditions">
                                        <div class="pet_allergies">
                                            <h1>Allergies</h1>
                                            <p>dito yung allergies na lilitaw if meron</p>
                                        </div>
                                        <div class="pet_conditions">
                                            <h1>Existing Conditions</h1>
                                            <p>Dito yung Existing Conditions na lilitaw</p>
                                        </div>
                                    </div>
                                    <div class="health_concerns_medications">
                                        <div class="pet_medications">
                                            <h1>Current Medications</h1>
                                            <p>dito yung Current Medications na lalabas</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>


                        <!-- Content for the "admin_petInfo_medical_history" tab -->
                        <div class="tab-pane" data-tab="admin_petInfo_medical_history">
                            <div class="med_histo_empty">
                                <div class="med_histo_heading">
                                    <div class="med_histo_heading_text">
                                        <h1>NO MEDICAL HISTORY FOUND</h1>
                                        <div class="med_histo_paragraph_text">
                                            <p>You can add a medical history by clicking the button below.</p>
                                        </div>
                                    </div>
                                </div>
                                <button class="Add_diagnosis_rec" id="Add_diagnosis_rec">
                                    <div class="Add_diagnosis_rec_base">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <g clip-path="url(#clip0_4601_16440)" filter="url(#filter0_d_4601_16440)">
                                              <path d="M12 5V19M5 12H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                              <filter id="filter0_d_4601_16440" x="-2" y="0" width="28" height="28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                                <feOffset dy="2"/>
                                                <feGaussianBlur stdDeviation="1"/>
                                                <feComposite in2="hardAlpha" operator="out"/>
                                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_4601_16440"/>
                                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_4601_16440" result="shape"/>
                                              </filter>
                                              <clipPath id="clip0_4601_16440">
                                                <rect width="24" height="24" fill="white"/>
                                              </clipPath>
                                            </defs>
                                          </svg> Add Diagnosis
                                    </div>
                                </button>


                                <div class="add_diagnosis_Modal" id="add_diagnosis_Modal">
                                    <div class="add_diagnosis_Modal_content">
                                        <!-- Modal content goes here -->
                                        <div class="add_diagnosis_Modal_content_header">
                                            <p>Add Diagnosis</p>
                                            <button class="add_diagnosis_close_btn" id="add_diagnosis_close_btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                            <g clip-path="url(#clip0_2193_10010)">
                                                <path d="M18 6.5L6 18.5M6 6.5L18 18.5" stroke="black" stroke-opacity="0.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_2193_10010">
                                                <rect width="24" height="24" fill="white" transform="translate(0 0.5)"/>
                                                </clipPath>
                                            </defs>
                                            </svg></button>
                                        </div>
                                        <div class="add_diagnosis_input_fields">
                                            <div class="diagnosis_fields">
                                                <div class="input_container">
                                                    <select id="diagnosis-select" name="diagnosis" placeholder="Select diagnosis">
                                                        <option value=""disabled selected>Diagnosis </option>
                                                        <option value="diagnosis 1">Diagnosis 1</option>
                                                        <option value="diagnosis 2">Diagnosis 2</option>
                                                        <option value="diagnosis 3">Diagnosis 3</option>
                                                    </select>
                                                </div>  
     
                                                
                                                <div class="input_container">
                                                    <input type="date" id="diagnosis_date" name="diagnosis_date" value="" aria-labelledby="label-diagnosis_date" required>
                                                    <label class="label" for="diagnosis_date" id="label-diagnosis_date">
                                                        <div class="text">Diagnosis Date</div>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="diagnosis_fields">
                                                <div class="input_container">
                                                    <select id="treatment-plan-select" name="treatment-plan" placeholder="Select treatment plan">
                                                        <option value="" disabled selected>Treatment Plan</option>
                                                        <option value="Treatment Plan 1">Treatment Plan 1</option>
                                                        <option value="Treatment Plan 2">Treatment Plan 2</option>
                                                        <option value="Treatment Plan 3">Treatment Plan 3</option>
                                                    </select>
                                                </div>
                                                
                                                <div class="input_container">
                                                    <select id="medication-select" name="medication" placeholder="Select medication">
                                                        <option value="" disabled selected>Medication</option>
                                                        <option value="Medication 1">Medication 1</option>
                                                        <option value="Medication 2">Medication 2</option>
                                                        <option value="Medication 3">Medication 3</option>
                                                    </select>
                                                </div>
                                                
                                            </div>
                                            <div class="input_container">
                                                <textarea id="diagnosis_prod_description" name="diagnosis_prod_description" aria-labelledby="label-diagnosis_prod_description" required maxlength="253"></textarea>
                                                <label class="label" for="diagnosis_prod_description" id="label-diagnosis_prod_description">
                                                    <div class="text">Product Description</div>
                                                </label>
                                            </div>
                                            

                                        </div>
                                        <div class="add_health_info_buttons">
                                            <button class="add_vaccine_clearForm" id="clear_diagnosis" onclick="clearDiagnosisFields()">
                                                <div class="add_vaccine_clearForm_base">
                                                    Clear Form
                                                </div>
                                            </button>
                                            <button class="add_diagnosis_submit" id="add_diagnosis_submit" type="submit">
                                                <div class="add_diagnosis_submit_base">
                                                    Submit
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <table id="medhisto_Table" class="medhisto_Table">
                                <thead>
                                    <tr>
                                        <th>DIAGNOSIS</th>
                                        <th>DATE DIAGNOSED</th>
                                        <th>TREATMENT</th>
                                        <th>MEDICATION</th>
                                        <th>NOTE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Table rows will go here -->
                                    <!-- history to -->
                                
                                </tbody>
                            </table>
                            
                        </div>

                        <div class="tab-pane" data-tab="admin_petInfo_immunization_history">
                            <div class="immu_histo_empty">
                                <div class="immu_histo_heading">
                                    <div class="immu_histo_heading_text">
                                        <h1>NO IMMUNIZATION HISTORY FOUND</h1>
                                        <div class="immu_histo_paragraph_text">
                                            <p>You can add an immunization  history by clicking the button below.</p>
                                        </div>
                                    </div>
                                </div>
                                <button class="Add_vaccine_rec" id="Add_vaccine_rec">
                                    <div class="Add_vaccine_rec_base">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <g clip-path="url(#clip0_4601_16440)" filter="url(#filter0_d_4601_16440)">
                                              <path d="M12 5V19M5 12H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                              <filter id="filter0_d_4601_16440" x="-2" y="0" width="28" height="28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                                <feOffset dy="2"/>
                                                <feGaussianBlur stdDeviation="1"/>
                                                <feComposite in2="hardAlpha" operator="out"/>
                                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_4601_16440"/>
                                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_4601_16440" result="shape"/>
                                              </filter>
                                              <clipPath id="clip0_4601_16440">
                                                <rect width="24" height="24" fill="white"/>
                                              </clipPath>
                                            </defs>
                                          </svg> Add Vaccine Record
                                    </div>
                                </button>


                                <div class="add_health_information_modal" id="add_vaccination_Modal">
                                    <div class="add_health_information_modal_content">
                                        <!-- Modal content goes here -->
                                        <div class="add_health_information_modal_content_header">
                                            <p>Add Vaccine</p>
                                            <button class="add_vaccine_close_btn" id="add_vaccine_close_btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                            <g clip-path="url(#clip0_2193_10010)">
                                                <path d="M18 6.5L6 18.5M6 6.5L18 18.5" stroke="black" stroke-opacity="0.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_2193_10010">
                                                <rect width="24" height="24" fill="white" transform="translate(0 0.5)"/>
                                                </clipPath>
                                            </defs>
                                            </svg></button>
                                        </div>
                                        <div class="add_vaccine_input_fields">
                                            <div class="vaccine_fields">
                                                <div class="input_container">
                                                    <select id="vaccine-select" name="vaccine" placeholder="Select Vaccine">
                                                        <option value=""disabled selected>Vaccine </option>
                                                        <option value="vaccine 1">Vaccine 1</option>
                                                        <option value="vaccine 2">Vaccine 2</option>
                                                        <option value="vaccine 3">Vaccine 3</option>
                                                    </select>
                                                </div>  
    
                                                 
                                                
                                                <div class="input_container">
                                                    <input type="date" id="vaccinationDate" name="vaccinationDate" value="" aria-labelledby="label-vaccinationDate" required>
                                                    <label class="label" for="vaccinationDate" id="label-vaccinationDate">
                                                        <div class="text">Vaccination Date</div>
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="vaccine_fields">
                                                <div class="input_container">
                                                    <textarea id="vaccine_prod_description" name="vaccine_prod_description" aria-labelledby="label-vaccine_prod_description" required maxlength="253"></textarea>
                                                    <label class="label" for="vaccine_prod_description" id="label-vaccine_prod_description">
                                                        <div class="text">Vaccine Details</div>
                                                    </label>
                                                </div>

                                                <div class="input_container">
                                                    <input type="date" id="next_vaccinationDate" name="next_vaccinationDate" value="" aria-labelledby="label-next_vaccinationDate" required>
                                                    <label class="label" for="next_vaccinationDate" id="label-next_vaccinationDate">
                                                        <div class="text">Next Vaccination Date</div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="vaccine_fields_vax_status">
                                                <div class="input_container">

                                                </div>
                                                <div class="input_container">
                                                    <select id="vaccine_status-select" name="vaccine_status" placeholder="Status">
                                                        <option value=""disabled selected>Status </option>
                                                        <option value="vaccine_status 1">Status 1</option>
                                                        <option value="vaccine_status 2">Status 2</option>
                                                        <option value="vaccine_status 3">Status 3</option>
                                                    </select>
                                                </div>  
                                            </div>
                                            
                                            
                                            

                                        </div>
                                        <div class="add_health_info_buttons">
                                            <button class="add_vaccine_clearForm" id="clear_vaccine" onclick="clearVaccineFields()">
                                                <div class="add_vaccine_clearForm_base">
                                                    Clear Form
                                                </div>
                                            </button>
                                            <button type="submit" class="add_vaccine_submit">
                                                <div class="add_vaccine_submit_base">
                                                    Submit
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <table id="immunization_histo_Table" class="immu_histo_table">
                                <thead>
                                    <tr>
                                        <th>DATE</th>
                                        <th>VACCINATION</th>
                                        <th>DETAILS</th>
                                        <th>NEXT VACCINATION</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Table rows will go here -->
                                    <!-- history to -->
                                
                                </tbody>
                            </table>
                        </div>

                        <div class="tab-pane" data-tab="admin_petInfo_surgery">
                            <div class="surgery_histo_empty">
                                <div class="surgery_histo_heading">
                                    <div class="surgery_histo_heading_text">
                                        <h1>NO SURGICAL HISTORY FOUND</h1>
                                        <div class="surgery_histo_paragraph_text">
                                            <p>You can add a surgical history by clicking the button below.</p>
                                        </div>
                                    </div>
                                </div>
                                <button class="Add_surgery_rec" id="Add_surgery_rec">
                                    <div class="Add_surgery_rec_base">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <g clip-path="url(#clip0_4601_16440)" filter="url(#filter0_d_4601_16440)">
                                              <path d="M12 5V19M5 12H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                              <filter id="filter0_d_4601_16440" x="-2" y="0" width="28" height="28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                                <feOffset dy="2"/>
                                                <feGaussianBlur stdDeviation="1"/>
                                                <feComposite in2="hardAlpha" operator="out"/>
                                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_4601_16440"/>
                                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_4601_16440" result="shape"/>
                                              </filter>
                                              <clipPath id="clip0_4601_16440">
                                                <rect width="24" height="24" fill="white"/>
                                              </clipPath>
                                            </defs>
                                          </svg> Add Surgery
                                    </div>
                                </button>


                                <div class="add_health_information_modal" id="add_surgery_Modal">
                                    <div class="add_health_information_modal_content">
                                        <!-- Modal content goes here -->
                                        <div class="add_health_information_modal_content_header">
                                            <p>Add Surgery</p>
                                            <button class="add_surgery_close_btn" id="add_surgery_close_btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                            <g clip-path="url(#clip0_2193_10010)">
                                                <path d="M18 6.5L6 18.5M6 6.5L18 18.5" stroke="black" stroke-opacity="0.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_2193_10010">
                                                <rect width="24" height="24" fill="white" transform="translate(0 0.5)"/>
                                                </clipPath>
                                            </defs>
                                            </svg></button>
                                        </div>
                                        <div class="add_surgery_input_fields">
                                            <div class="surgery_fields">
                                                <div class="input_container">
                                                    <select id="surgery-select" name="surgery" placeholder="Select Surgery">
                                                        <option value=""disabled selected>Surgery </option>
                                                        <option value="surgery 1">Surgery 1</option>
                                                        <option value="surgery 2">Surgery 2</option>
                                                        <option value="surgery 3">Surgery 3</option>
                                                    </select>
                                                </div>  
    
                                                 
                                                
                                                <div class="input_container">
                                                    <input type="date" id="surgeryDate" name="surgeryDate" value="" aria-labelledby="label-surgeryDate" required>
                                                    <label class="label" for="surgeryDate" id="label-surgeryDate">
                                                        <div class="text">Date</div>
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="surgery_fields">
                                                <div class="input_container">
                                                    <select id="surgery_reason-select" name="surgery_reason" placeholder="Select surgery reason">
                                                        <option value=""disabled selected>Reason for Surgery</option>
                                                        <option value="surgery_reason 1">Reason 1</option>
                                                        <option value="surgery_reason 2">Reason 2</option>
                                                        <option value="surgery_reason 3">Reason 3</option>
                                                    </select>
                                                </div>  

                                                <div class="input_container">
                                                    <select id="surgery_medication-select" name="surgery_medication" placeholder="Select surgery medication">
                                                        <option value=""disabled selected>Medication</option>
                                                        <option value="surgery_medication 1">Medication 1</option>
                                                        <option value="surgery_medication 2">Medication 2</option>
                                                        <option value="surgery_medication 3">Medication 3</option>
                                                    </select>
                                                </div>  
                                            </div>

                                            <div class="input_container">
                                                <textarea id="surgery_note" name="surgery_note" aria-labelledby="label-surgery_note" required maxlength="253"></textarea>
                                                <label class="label" for="surgery_note" id="label-surgery_note">
                                                    <div class="text">Notes</div>
                                                </label>
                                            </div>
                                            
                                            
                                            

                                        </div>
                                        <div class="add_health_info_buttons">
                                            <button class="add_vaccine_clearForm" id="clear_surgery" onclick="clearSurgeryFields()">
                                                <div class="add_vaccine_clearForm_base">
                                                    Clear Form
                                                </div>
                                            </button>
                                            <button type="submit" class="add_surgery_submit" id="add_surgery_submit">
                                                <div class="add_surgery_submit_base">
                                                    Submit
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <table id="surgery_histo_Table" class="surgery_histo">
                                <thead>
                                    <tr>
                                        <th>SURGERY PERFORMED</th>
                                        <th>DATE OF SURGERY</th>
                                        <th>REASON</th>
                                        <th>MEDICATION</th>
                                        <th>NOTE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Table rows will go here -->
                                    <!-- history to -->
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>          
                </div>

                <div class="edit_pet_information" id="edit_pet_information">
                        
                    <div class="edit_pet_container">
                        <div class="edit_pet_container_back_container">
                            <button class="edit_pet_back" id="edit_pet_back">
                                <div class="edit_pet_back_base">
                                    Back
                                </div>
                            </button>
                        </div>
    
                        <div class="edit_pet_content">
                            <div class="pet_content_container">
                                <img src="/img/add_pet_icon.png" alt="pet_img">
                                <div class="edit_pet_form">
    
                                    <div class="input_container">  <!--DITO LILITAW PET OWNER FROM DB, PWEDE MA CHANGE KAYA SELECT-->
                                        <select id="owner_name" name="owner_name" placeholder="Owner Name">
                                            <option value=""disabled selected>Select Owner: </option>
                                        </select>
                                    </div>
    
                                    <div class="input_container">  <!--DITO LILITAW PET NAME FROM DB-->
                                        <input type="text" id="pet_Name"  name="pet_Name"  value="" aria-labelledby="label-pet_Name" required/>
                                        <label class="label" for="pet_Name" id="label-pet_Name">
                                          <div class="text">Pet Name</div>
                                        </label>
                                    </div>
    
                                    <div class="frame46">  <!--DITO LILITAW SPECIE AT BREED FROM DB-->
                                    
                                        <div class="input_container">
                                            <select id="pet_species" name="pet_species" value="" aria-labelledby="label-pet_species" required>
                                                <option value="" disabled selected>Species</option>
                                                <option value="dog">Dog</option>
                                                <option value="cat">Cat</option>
                                            </select>
                                            <label class="label" for="pet_species" id="label-pet_species">
                                                <div class="text">Species</div>
                                            </label>
                                        </div>
                                        
                                        <div class="input_container">
                                            <select id="pet_breed" name="pet_breed" value="" aria-labelledby="label-pet_breed" required disabled>
                                            <option value="">Select Species First</option>
                                            </select>
                                            <label class="label" for="pet_breed" id="label-pet_breed">
                                                <div class="text">Breed</div>
                                            </label>
                                        </div>
                                    </div>
    
                                    <div class="frame47">  <!--DITO LILITAW BDAY AT AGE FROM DB-->
    
                                        <div class="input_container">
                                            <input type="date" id="pet_birthdate" name="pet_birthdate" onchange="calculateNewAge()"value="" aria-labelledby="label-pet_birthdate" required/>
                                            <label class="label" for="pet_birthdate" id="label-pet_birthdate">
                                                <div class="text">Birthdate</div>
                                            </label>
                                        </div>  
                                        
                                        <div class="input_container">
                                            <input type="text" id="pet_Age" name="pet_Age" value="" aria-labelledby="label-pet_Age" required disabled/>
                                            <label class="label" for="pet_Age" id="label-pet_Age">
                                                
                                            </label>
                                        </div>
                                    </div>
    
                                    <div class="frame48"> <!--DITO LILITAW WEIGHT AT GENDER FROM DB-->
                                        <div class="input_container">
                                            <input type="text" id="pet_Weight" name="pet_Weight" value="" aria-labelledby="label-pet_Weight" required/>
                                            <label class="label" for="pet_Weight" id="label-pet_Weight">
                                                <div class="text">Weight</div>
                                            </label>
                                        </div>
    
                                        <div class="input_container">
                                            <select id="pet_gender" name="pet_gender" aria-labelledby="label-pet_gender" required>
                                                <option value="" disabled selected>Select a gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                            <label class="label" for="pet_gender" id="label-pet_gender">
                                                <div class="text">Gender</div>
                                            </label>
                                        </div>                                       
                                    </div>
    
    
                                </div>
                            </div>
                            <div class="edit_buttons">
                                <button class="cancel_edit" id="cancel_edit">
                                    <div class="cancel_edit_base">
                                        Cancel
                                    </div>
                                </button>
                                <button class="save_edit" id="save_edit">
                                    <div class="save_edit_base">
                                        Save Changes
                                    </div>
                                </button>
                            </div>
    
                        </div>
                    </div>

                    <!--ETO YUNG SUCCESS KAPAG NAKAPAG ADD PET-->
                    <div class="successChange_modal" id="successAddPet_modal">
                        <div class="successChange_modal_content">
                            <div class="success_icon_container">
                                <div class="success_icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                        <g clip-path="url(#clip0_4601_13966)">
                                          <path d="M12 16L14.6667 18.6667L20 13.3333M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 14.4241 27.6896 12.8637 27.0866 11.4078C26.4835 9.95189 25.5996 8.62902 24.4853 7.51472C23.371 6.40042 22.0481 5.5165 20.5922 4.91345C19.1363 4.31039 17.5759 4 16 4C14.4241 4 12.8637 4.31039 11.4078 4.91345C9.95189 5.5165 8.62902 6.40042 7.51472 7.51472C6.40042 8.62902 5.5165 9.95189 4.91345 11.4078C4.31039 12.8637 4 14.4241 4 16Z" stroke="#5BB85A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                          <clipPath id="clip0_4601_13966">
                                            <rect width="32" height="32" fill="white"/>
                                          </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                            <div class="success_message">
                                <h1>Success!</h1>
                                <p>Pet record was successfully added.</p>
                            </div>
                        </div>
                    </div>
    
                    <div class="successChange_modal" id="successChange_modal">
                        <div class="successChange_modal_content">
                            <div class="success_icon_container">
                                <div class="success_icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                        <g clip-path="url(#clip0_4601_13966)">
                                          <path d="M12 16L14.6667 18.6667L20 13.3333M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 14.4241 27.6896 12.8637 27.0866 11.4078C26.4835 9.95189 25.5996 8.62902 24.4853 7.51472C23.371 6.40042 22.0481 5.5165 20.5922 4.91345C19.1363 4.31039 17.5759 4 16 4C14.4241 4 12.8637 4.31039 11.4078 4.91345C9.95189 5.5165 8.62902 6.40042 7.51472 7.51472C6.40042 8.62902 5.5165 9.95189 4.91345 11.4078C4.31039 12.8637 4 14.4241 4 16Z" stroke="#5BB85A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                          <clipPath id="clip0_4601_13966">
                                            <rect width="32" height="32" fill="white"/>
                                          </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                            <div class="success_message">
                                <h1>Success!</h1>
                                <p>Your changes have been successfully saved.</p>
                            </div>
                        </div>
                    </div>
                    
    
                    <div class="discard_changes_modal" id="discard_changes_modal">
                        <div class="discard_changes_modalmodal_content">
                            <div class="discard_icon_container">
                                <div class="discard_icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                        <g clip-path="url(#clip0_4601_21439)">
                                          <path d="M13.3333 13.3333L18.6667 18.6667M18.6667 13.3333L13.3333 18.6667M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 14.4241 27.6896 12.8637 27.0866 11.4078C26.4835 9.95189 25.5996 8.62902 24.4853 7.51472C23.371 6.40042 22.0481 5.5165 20.5922 4.91345C19.1363 4.31039 17.5759 4 16 4C14.4241 4 12.8637 4.31039 11.4078 4.91345C9.95189 5.5165 8.62902 6.40042 7.51472 7.51472C6.40042 8.62902 5.5165 9.95189 4.91345 11.4078C4.31039 12.8637 4 14.4241 4 16Z" stroke="#DA534F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                          <clipPath id="clip0_4601_21439">
                                            <rect width="32" height="32" fill="white"/>
                                          </clipPath>
                                        </defs>
                                      </svg>
                                </div>
    
                            </div>
                            <div class="discard_changes_message">
                                <h1>Discard changes?</h1>
                                <p>Any unsaved progress will be lost.</p>
                            </div>
                            <div class="discard_changes_btns">
                                <button class="cancel_button" id="cancel_button">
                                    <div class="cancel_button_base">
                                        Return
                                    </div>
                                </button>
                                <button class="discard_button" id="discard_button">
                                    <div class="discard_button_base">
                                        Discard
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                </div>

            </div>
    </main>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="/js/petrecord.js"></script>
    <script src="/js/sidebar.js"></script>

    <script>
        $(document).ready(function () {
            // Function to handle tab switching
            $('.petInfo_nav_item').click(function () {
                const selectedTab = $(this).attr('data-tab');

                // Hide all tab contents
                $('.tab-pane').hide();

                // Show the selected tab content
                $(`.tab-pane[data-tab="${selectedTab}"]`).show();

                // Remove "active" class from all tab items
                $('.petInfo_nav_item').removeClass('active');

                // Add "active" class to the clicked tab item
                $(this).addClass('active');
            });

            // Show the initial active tab content (only admin_petInfo)
            $('.tab-pane[data-tab="admin_petInfo"]').show();

            // Make sure only the active tab content is shown initially
            $('.tab-pane:not([data-tab="admin_petInfo"])').hide();
        });
    </script>




    <script>
        //clear fields sa condition
        function clearAllFields() {
            // Clear the text input
            document.getElementById('diagnosis').value = '';

            // Clear the select elements
            document.getElementById('medicine-select').selectedIndex = 0;
            document.getElementById('uses-select').selectedIndex = 0;
            document.getElementById('Side_Effects-select').selectedIndex = 0;

            // Clear any error messages
            document.getElementById('error-diagnosis').style.display = 'none';
        }

        // Add your existing functions here (restrictToAlphabetAndSpace, checkInput, hideIconOnClick) if needed.
    </script>

    <script>// clear diagnosis modal fields
        function clearDiagnosisFields() {
            // Get all textarea and select elements within the modal
            const elementsToClear = document.querySelectorAll('.add_diagnosis_input_fields textarea, .add_diagnosis_input_fields select, .add_diagnosis_input_fields input[type="date"]');

            // Loop through the elements and reset them
            elementsToClear.forEach((element) => {
                if (element.tagName === 'SELECT') {
                    // For select elements, reset to the default (first) option
                    element.selectedIndex = 0;
                } else if (element.tagName === 'TEXTAREA') {
                    // For textarea elements, clear the text
                    element.value = '';
                } else if (element.type === 'date') {
                    // For date input, set it to null to clear the date
                    element.value = null;
                }
            });
        }


        // Add an event listener to the "Clear Form" button
        const clearFormButton = document.getElementById('clear_diagnosis');
        clearFormButton.addEventListener('click', clearDiagnosisFields);
    </script>

    <script>// clear vax modal fields
        function clearVaccineFields() {
            // Get all input, select, and textarea elements within the .add_vaccine_input_fields
            const elementsToClear = document.querySelectorAll('.add_vaccine_input_fields input, .add_vaccine_input_fields select, .add_vaccine_input_fields textarea');

            // Loop through the elements and reset or clear them
            elementsToClear.forEach((element) => {
                if (element.tagName === 'SELECT') {
                    // For select elements, reset to the default (first) option
                    element.selectedIndex = 0;
                } else if (element.tagName === 'TEXTAREA') {
                    // For textarea elements, clear the text
                    element.value = '';
                } else {
                    // For input elements, clear the value
                    element.value = '';
                }
            });
        }

        // Add an event listener to the "Clear Form" button
        const clear_vaccine = document.getElementById('clear_vaccine');
        clear_vaccine.addEventListener('click', clearVaccineFields);
    </script>


    <script>
        // Get references to the button and modal
        const Add_vaccine_rec = document.getElementById('Add_vaccine_rec');
        const add_health_information_modal = document.getElementById('add_vaccination_Modal');
        const add_vaccine_close_btn = document.getElementById('add_vaccine_close_btn');


        // Function to show the modal
        function showVaxModal() {
            add_health_information_modal.style.display = 'flex';
        }

        // Function to hide the modal
        function hideVaxModal() {
            add_health_information_modal.style.display = 'none';
            clearVaccineFields();
        }

        // Add an event listener to the button to show the modal
        Add_vaccine_rec.addEventListener('click', showVaxModal);
        add_vaccine_close_btn.addEventListener('click', hideVaxModal);


    </script>

<script>

    function restrictToAlphabetAndSpace(input) {
            // Use a regular expression to remove any characters that are not alphabets or spaces
            input.value = input.value.replace(/[^a-zA-Z\s]/g, '');
    }

    // Get the surgery_note textarea element
    const surgeryNoteTextarea = document.getElementById('surgery_note');

    // Add an event listener to validate the input
    surgeryNoteTextarea.addEventListener('input', function () {
        // Get the input value
        const inputValue = surgeryNoteTextarea.value;

        // Define a regular expression pattern that allows only alphanumeric characters and spaces
        const pattern = /^[a-zA-Z0-9\s]*$/;

        // Test the input against the pattern
        if (!pattern.test(inputValue)) {
            // If the input contains special characters, remove them
            const cleanedValue = inputValue.replace(/[^a-zA-Z0-9\s]/g, '');
            surgeryNoteTextarea.value = cleanedValue;
        }
    });


    // Get the diagnosis_date input element
    const diagnosisDateInput = document.getElementById('diagnosis_date');

    // Set the max attribute to the current date
    const diagnosiscurrentDate = new Date().toISOString().split('T')[0];
    diagnosisDateInput.setAttribute('max', diagnosiscurrentDate);

    // Add an event listener to prevent keyboard events
    diagnosisDateInput.addEventListener('keydown', function (e) {
        e.preventDefault();
    });

    // Add an event listener to validate the input
    diagnosisDateInput.addEventListener('input', function () {
        const selectedDate = new Date(diagnosisDateInput.value);
        const currentDateTime = new Date();

        // Check if the selected date is in the future
        if (selectedDate > currentDateTime) {
            alert('Please select a previous or current date.');
            diagnosisDateInput.value = ''; // Clear the input value
        }
    });

    // Get the vaccinationDate input element
    const vaccinationDateInput = document.getElementById('vaccinationDate');

    // Get the current date in yyyy-mm-dd format
    const vaccinationDate = new Date().toISOString().split('T')[0];

    // Set the max attribute to the current date
    vaccinationDateInput.setAttribute('max', vaccinationDate);

    // Add an event listener to prevent keyboard events
    vaccinationDateInput.addEventListener('keydown', function (e) {
        e.preventDefault();
    });

    // Add an event listener to validate the input
    vaccinationDateInput.addEventListener('input', function () {
        const selectedDate = vaccinationDateInput.value;

        // Check if the selected date is in the future
        if (selectedDate > vaccinationDate) {
            alert('Please select a present or previous date.');
            vaccinationDateInput.value = ''; // Clear the input value
        }
    });

    // Get the next_vaccinationDate input element
    const nextVaccinationDateInput = document.getElementById('next_vaccinationDate');

    // Get the current date in yyyy-mm-dd format
    const nextVaxxDate = new Date().toISOString().split('T')[0];

    // Set the min attribute to the next day of the current date
    const nextDay = new Date();
    nextDay.setDate(nextDay.getDate() + 1);
    const nextDayString = nextDay.toISOString().split('T')[0];
    nextVaccinationDateInput.setAttribute('min', nextDayString);

    // Add an event listener to prevent keyboard events
    nextVaccinationDateInput.addEventListener('keydown', function (e) {
        e.preventDefault();
    });

    // Add an event listener to validate the input
    nextVaccinationDateInput.addEventListener('input', function () {
        const selectedDate = nextVaccinationDateInput.value;

        // Check if the selected date is in the past or today
        if (selectedDate <= nextVaxxDate) {
            alert('Please select a future date.');
            nextVaccinationDateInput.value = ''; // Clear the input value
        }
    });

    // Get the surgeryDate input element
    const surgeryDateInput = document.getElementById('surgeryDate');

    // Get the current date in yyyy-mm-dd format
    const surgeryDate = new Date().toISOString().split('T')[0];

    // Set the max attribute to the current date
    surgeryDateInput.setAttribute('max', surgeryDate);

    // Add an event listener to prevent keyboard events
    surgeryDateInput.addEventListener('keydown', function (e) {
        e.preventDefault();
    });

    // Add an event listener to validate the input
    surgeryDateInput.addEventListener('input', function () {
        const selectedDate = surgeryDateInput.value;

        // Check if the selected date is in the future
        if (selectedDate > surgeryDate) {
            alert('Please select a present or previous date.');
            surgeryDateInput.value = ''; // Clear the input value
        }
    });





    const pet_name = document.getElementById('pet_name');

    pet_name.addEventListener('input', function () {
        // Get the current value of the input
        const inputValue = pet_name.value;

        // Use a regular expression to check if the input contains only letters and spaces
        const isValid = /^[a-zA-Z\s]+$/.test(inputValue);

        if (!isValid) {
            // If the input is invalid, remove non-alphabet and non-space characters
            pet_name.value = inputValue.replace(/[^a-zA-Z\s]/g, '');
        }
    });

    //input para roon sa unang modal na lilitaw na petForm kapag empty state at nag add pet
    // Get the species and breed select elements
    var speciesSelect = document.getElementById("species");
    var breedSelect = document.getElementById("add_pet_breed");

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

    const petBirthdayInput = document.getElementById('pet_birthday');

    // Get the current date in yyyy-mm-dd format
    const currentDate = new Date().toISOString().split('T')[0];

    // Set the max attribute to the current date
    petBirthdayInput.setAttribute('max', currentDate);

    // Prevent keyboard input by clearing the input value on keydown
    petBirthdayInput.addEventListener('keydown', function (event) {
        event.preventDefault();
    });

    const petAgeInput = document.getElementById('pet_age');
    const ageInputLabel = document.getElementById('label-pet_age');

    // Initial placeholder text
    ageInputLabel.textContent = 'Select a birthdate first';

    petBirthdayInput.addEventListener('input', function () {
        // Get the selected date from the input
        const selectedDate = new Date(petBirthdayInput.value);

        // Get the current date
        const currentDate = new Date();

        // Calculate the age
        const ageInMilliseconds = currentDate - selectedDate;
        const ageInYears = ageInMilliseconds / (365.25 * 24 * 60 * 60 * 1000); // Approximate years
        const ageInMonths = ageInYears * 12; // Approximate months
        const ageInDays = ageInMilliseconds / (24 * 60 * 60 * 1000); // Days

        // Display the age in the pet_age input
        petAgeInput.value = `${Math.floor(ageInYears)} years, ${Math.floor(ageInMonths)} months, ${Math.floor(ageInDays)} days`;

        // Hide the placeholder text when a birthdate is selected
        ageInputLabel.textContent = '';
    });




    const pet_weight = document.getElementById('pet_weight');

    pet_weight.addEventListener('input', function () {
        // Get the current value of the input
        let inputValue = pet_weight.value;

        // Remove non-numeric characters, except for the "kg" unit
        inputValue = inputValue.replace(/[^0-9.]+/g, '');

        // Limit the input to 3 digits
        if (inputValue.length > 3) {
            inputValue = inputValue.slice(0, 3);
        }

        // Append "kg" as the default unit if not already present
        if (!inputValue.endsWith('kg')) {
            inputValue += 'kg';
        }

        // Update the input value
        pet_weight.value = inputValue;
    });



    // Function to check if a string represents a valid color
    function isValidColor(colorString) {
        const s = new Option().style;
        s.color = colorString;
        return s.color !== '';
    }


    // Create a reusable function to update the 'value' attribute when input changes
    function updateValueAttribute(inputElement) {
        inputElement.addEventListener('input', () => {
            inputElement.setAttribute('value', inputElement.value);
        });
    }





    // Add the event listeners to all input fields
    updateValueAttribute(pet_name); 
    updateValueAttribute(petBirthdayInput);
    updateValueAttribute(pet_weight);
    updateValueAttribute(petAgeInput);
    updateValueAttribute(diagnosisDateInput);
    updateValueAttribute(vaccinationDateInput);
    updateValueAttribute(nextVaccinationDateInput);
    updateValueAttribute(surgeryDateInput);
    updateValueAttribute(surgeryNoteTextarea);
      




            
</script>


<script>// check muna lahat ng input at select element sa add record, bago mag enable ang submit button
    function checkForm() {
        // Get all input and select elements
        const inputFields = document.querySelectorAll('input[required], select[required]');

        // Initialize a flag to track if all fields are valid
        let isValid = true;

        // Check each input/select element for validity
        inputFields.forEach((field) => {
            if (!field.checkValidity()) {
                isValid = false;
            }
        });

        // Enable or disable the "Save" button based on validity
        const saveButton = document.getElementById('save_button');
        saveButton.disabled = !isValid;
    }

    // Add an event listener to the form elements for input and change events
    const formElements = document.querySelectorAll('input[required], select[required]');
    formElements.forEach((element) => {
        element.addEventListener('input', checkForm);
        element.addEventListener('change', checkForm);
    });

    // Initially check the form to disable the "Save" button
    checkForm();
</script>


<script>//clear sa surgery
    function clearSurgeryFields() {
    // Get all input, textarea, and select elements within the form
    const elementsToClear = document.querySelectorAll('.add_surgery_input_fields input, .add_surgery_input_fields textarea, .add_surgery_input_fields select');

    // Loop through the elements and reset them
    elementsToClear.forEach((element) => {
        if (element.tagName === 'SELECT' || element.tagName === 'TEXTAREA') {
            // For select and textarea elements, clear the text
            element.value = '';
        } else if (element.tagName === 'INPUT') {
            if (element.type === 'text' || element.type === 'date') {
                // For text and date input elements, clear the value
                element.value = '';
            } else if (element.type === 'select-one') {
                // For select input elements, reset to the default (first) option
                element.selectedIndex = 0;
            }
        }
    });
}

</script>


<script>// function para lumitaw yung edit pet info
    // Function to hide the admin_petInfo_modal_header and show edit_pet_information
    function hideModalHeaderAndShowEditInfo() {
        var admin_petInfo_heading = document.querySelector('.admin_petInfo_heading');
        var modalHeader = document.querySelector('.admin_petInfo_pet_record_modal');
        modalHeader.style.display = 'none';
        admin_petInfo_heading.style.display = 'none';

        var edit_pet_header_container = document.getElementById('edit_pet_header_container');
        var editInfo = document.getElementById('edit_pet_information');
        editInfo.style.display = 'block';
        edit_pet_header_container.style.display = 'flex';
    }

    // Add a click event listener to the admin_petInfo_icon_button
    var iconButton = document.getElementById('admin_petInfo_icon_button');
    iconButton.addEventListener('click', hideModalHeaderAndShowEditInfo);


    // Function to show admin_petInfo_heading and admin_petInfo_pet_record_modal
    function showAdminPetInfoHeadingAndModal() {
        var heading = document.querySelector('.admin_petInfo_heading');
        heading.style.display = 'block';

        var petRecordModal = document.querySelector('.admin_petInfo_pet_record_modal');
        petRecordModal.style.display = 'block';

        // You can also hide the edit_pet_information here if needed
        var edit_pet_header_container = document.getElementById('edit_pet_header_container');
        var editInfo = document.getElementById('edit_pet_information');
        edit_pet_header_container.style.display = 'none';
        editInfo.style.display = 'none';
    }

    // Add a click event listener to the edit_pet_back button
    var backButton = document.getElementById('edit_pet_back');
    backButton.addEventListener('click', showAdminPetInfoHeadingAndModal);


</script>

<script>
    // Function to show the discard changes modal
    function showDiscardChangesModal() {
        var discardModal = document.getElementById('discard_changes_modal');
        discardModal.style.display = 'block';
    }

    // Function to hide the discard changes modal
    function hideDiscardChangesModal() {
        var discardModal = document.getElementById('discard_changes_modal');
        discardModal.style.display = 'none';
    }

    // Add a click event listener to the "Cancel" button
    var cancelButton = document.getElementById('cancel_edit');
    cancelButton.addEventListener('click', showDiscardChangesModal);

    // Add a click event listener to the "Cancel" button inside the modal to close it
    var closeModalButton = document.getElementById('cancel_button');
    closeModalButton.addEventListener('click', hideDiscardChangesModal);

</script>


<script>// para sa discard change sa edit pet info
    function discardChanges() {
        // Get the original values from the database or initial state
        var originalOwnerName = ""; // Replace with the actual value from the database
        var originalPetName = ""; // Replace with the actual value from the database
        var originalSpecies = ""; // Replace with the actual value from the database
        var originalBreed = ""; // Replace with the actual value from the database
        var originalBirthdate = ""; // Replace with the actual value from the database
        var originalAge = ""; // Replace with the actual value from the database
        var originalWeight = ""; // Replace with the actual value from the database
        var originalGender = ""; // Replace with the actual value from the database

        // Set the input values back to their original values
        document.getElementById('owner_name').value = originalOwnerName;
        document.getElementById('pet_Name').value = originalPetName;
        document.getElementById('pet_species').value = originalSpecies;
        document.getElementById('pet_breed').value = originalBreed;
        document.getElementById('pet_birthdate').value = originalBirthdate;
        document.getElementById('pet_Age').value = originalAge;
        document.getElementById('pet_Weight').value = originalWeight;
        document.getElementById('pet_gender').value = originalGender;
    }

    // Add a click event listener to the discard_button
    var discardButton = document.getElementById('discard_button');
    discardButton.addEventListener('click', discardChanges);

</script>

<script>// pagkaclick sa save changes
    // Function to show the success modal
function showSuccessModal() {
    var successChange_modal = document.getElementById('successChange_modal');
    successChange_modal.style.display = 'block';

    // Automatically hide the success modal after 1 second (1000 milliseconds)
    setTimeout(function () {
        hideSuccessModal();
    }, 1000);
}

// Function to hide the success modal
function hideSuccessModal() {
    var successChange_modal = document.getElementById('successChange_modal');
    successChange_modal.style.display = 'none';
}

// Add a click event listener to the "Save Changes" button
var saveChangesButton = document.getElementById('save_edit');
saveChangesButton.addEventListener('click', showSuccessModal);

</script>

<script>
// Function to hide the admin_petInfo_menu_options
function hideMenuOptions() {
    var menuOptions = document.querySelectorAll('.admin_petInfo_menu_options'); // Use class selector
    for (var i = 0; i < menuOptions.length; i++) {
        menuOptions[i].style.display = 'none';
    }
}


// Get all <a> elements inside admin_petInfo_menu_options
var aElements = document.querySelectorAll('#admin_petInfo_menu_options ul li a');

// Add a click event listener to each <a> element
aElements.forEach(function (aElement) {
    aElement.addEventListener('click', hideMenuOptions);
});


</script>



<script>
    //function to display modal for add health info
    const Add_diagnosis_rec = document.getElementById("Add_diagnosis_rec");
    const add_diagnosis_Modal = document.getElementById("add_diagnosis_Modal");
    const add_diagnosis_close_btn = document.getElementById("add_diagnosis_close_btn");
    
    Add_diagnosis_rec.addEventListener("click", () => {
        add_diagnosis_Modal.style.display = "flex";
    });
    add_diagnosis_close_btn.addEventListener("click", () =>{
        add_diagnosis_Modal.style.display = "none";
        clearDiagnosisFields();
    })
    
    
    //function to display modal for surgery
    const Add_surgery_rec = document.getElementById("Add_surgery_rec");
    const add_surgery_Modal = document.getElementById("add_surgery_Modal");
    const add_surgery_close_btn = document.getElementById("add_surgery_close_btn");
    
    Add_surgery_rec.addEventListener("click", () => {
        add_surgery_Modal.style.display = "flex";
    });
    add_surgery_close_btn.addEventListener("click", () =>{
        add_surgery_Modal.style.display = "none";
        clearSurgeryFields();
    })

</script>

<script>

    $('#cancel_pet').on('click', function () {
        $('.admin_petInfo_addPetmodal').hide();
    });

    function clearForm() {
        // Clear input fields
        const inputFields = document.querySelectorAll('input');
        inputFields.forEach((input) => {
            input.value = '';
        });

        // Clear select fields
        const selectFields = document.querySelectorAll('select');
        selectFields.forEach((select) => {
            select.selectedIndex = 0;
        });
    }

    // Add an event listener to the "Clear Form" button
    const clearButton = document.getElementById('clear_button');
    clearButton.addEventListener('click', clearForm);

    function closeAddPetModal() {
        var addPetModal = document.getElementById('admin_petInfo_addPetmodal');
        addPetModal.style.display = 'none';
        clearForm();
    }
    // Function to show the success modal
    function showAddSuccessModal() {
        var modal = document.getElementById('successAddPet_Modal');
        modal.style.display = 'block';

        // Close the success modal after 1 second
        setTimeout(function () {
            modal.style.display = 'none';
        }, 1000);

        // Close the add pet modal
        closeAddPetModal();
    }

    // Add an event listener to the submit button
    var submitButton = document.getElementById('save_button');
    submitButton.addEventListener('click', showAddSuccessModal);

</script>




</body>

</html>
