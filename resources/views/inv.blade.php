<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Admin | Inventory</title>
    <link rel="icon" href="/img/dogs&cats.png" type="image/x-icon">
    <link href="/css/admin/inventory.css" rel="stylesheet">  
</head>

<body>
  <main class="container">
  @php
  $activeTab = 'inventory'; // Set the active tab
  @endphp

  @include('includes.admin_header')

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
        <div class="inventory_container" id="inventory_container">

          <div class="add_inventory_header" id="add_inventory_header">
            <h1>Inventory</h1>
            <div id="addProductButton" class="btn-group split_btn"><button id="add_Product_btn" class="btn add_Product_btn" type="button"><span class="add_Product_btn_base">Add Product</span></button><button class="btn dropdown-toggle dropdown-toggle-split add_product_dropdown" data-bs-toggle="dropdown" aria-expanded="false" type="button"></button>
              <div class="dropdown-menu"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
            </div>
          </div>



          <div class="InventoryContainer">
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




            <div class="table_container" id="table_container">
              <div class="inventory_empty_state" id="inventory_empty_state">
                <div class="inventory_empty_state_content">
                  <svg xmlns="http://www.w3.org/2000/svg" width="176" height="110" viewBox="0 0 176 110" fill="none">
                    <g clip-path="url(#clip0_3910_24046)">
                     <path d="M135.118 83.0864C142.305 65.1185 140.131 45.0554 130.862 29.6466L33.8338 43.0813L126.818 23.7028C87.629 -25.1661 11.3536 7.24805 18.7062 68.9485L135.118 83.0864Z" fill="#E6E6E6"/>
                     <path d="M139.397 63.2246H15.7821V101.717H139.397V63.2246Z" fill="#004D53"/>
                     <path d="M50.2572 58.5303C51.3663 59.3916 51.7718 59.6696 52.008 59.6343C63.4515 62.9667 53.4196 66.872 47.8595 60.2429L50.2572 58.5303Z" fill="#FFB8B8"/>
                     <path d="M12.4962 93.7372V101.561L18.1292 101.248L16.5646 93.1113L12.4962 93.7372Z" fill="#FFB8B8"/>
                     <path d="M43.7911 93.7372V101.561L38.158 101.248L39.7228 93.1113L43.7911 93.7372Z" fill="#FFB8B8"/>
                     <path d="M26.5789 53.3667L35.0285 53.0537C54.5208 73.4886 47.1492 68.8278 46.6077 96.8667L36.2803 93.7372L38.471 74.3343C38.4721 74.3336 39.0489 73.9491 38.5695 73.9402C35.5711 74.9706 33.3835 62.2132 26.8918 63.694C19.5047 63.3406 18.3021 74.2991 15.3127 74.3343L17.5033 93.7372L7.17598 96.8667C6.01969 66.0548 0.352656 73.0152 18.7551 53.0537L26.5789 53.3667Z" fill="#2F2E41"/>
                     <path d="M14.0609 99.0574C14.0609 99.0574 12.8091 96.5538 11.2443 97.8056C9.67959 99.0574 5.92418 102.813 5.92418 102.813C5.92418 102.813 -3.15137 106.881 2.48173 109.385C8.11483 111.888 12.8091 105.942 12.8091 105.942C18.1745 104.823 21.2694 104.107 18.424 98.2546C16.8085 98.9536 14.5224 99.7629 14.0609 99.0574Z" fill="#2F2E41"/>
                     <path d="M42.2264 99.0574C42.2264 99.0574 43.4782 96.5538 45.043 97.8056C46.6077 99.0574 50.3631 102.813 50.3631 102.813C50.3631 102.813 59.4387 106.881 53.8056 109.385C48.1725 111.888 43.4782 105.942 43.4782 105.942C38.1128 104.823 35.018 104.107 37.8633 98.2546C39.4788 98.9536 41.7649 99.7629 42.2264 99.0574Z" fill="#2F2E41"/>
                     <path d="M35.0286 18.0033C34.5631 25.7939 23.9306 25.108 23.7624 18.0032C24.2278 10.2127 34.8603 10.8985 35.0286 18.0033Z" fill="#FFB8B8"/>
                     <path d="M26.8918 22.0717C29.6296 30.3461 23.1659 25.8412 32.212 32.399L35.6544 25.5141C35.6544 25.5141 33.1508 24.5753 33.4638 21.1328L26.8918 22.0717Z" fill="#FFB8B8"/>
                     <path d="M43.7911 26.7661L34.4622 24.6367C34.7246 30.2618 28.7216 29.1296 27.6742 26.3001L18.7551 31.4603C22.4987 45.4031 21.5499 45.9784 16.5645 54.9316C14.6618 56.669 17.5073 57.6648 19.9844 56.7141C21.8738 55.548 22.8333 54.5117 24.8578 54.7754C34.4241 56.7673 42.3878 57.2375 43.6481 56.4591C44.0991 55.8137 43.6351 26.8781 43.7911 26.7661Z" fill="#575A89"/>
                     <path d="M41.2875 27.3919C41.6005 27.3919 43.2125 26.6339 43.2125 26.6339C47.9026 26.5549 51.05 58.1031 51.3019 58.9999L48.1724 61.1905L43.1652 48.3596L41.2875 27.3919Z" fill="#575A89"/>
                     <path d="M19.381 64.0068C19.5411 65.1878 19.8134 78.4514 24.5647 72.2557C25.188 67.7355 23.0687 66.3861 22.5105 63.3809L19.381 64.0068Z" fill="#FFB8B8"/>
                     <path d="M20.6329 31.4601L19.674 30.9285C17.1033 30.844 17.9135 37.6489 16.8258 42.6323C15.9373 48.4379 16.1903 54.8394 17.2327 63.3979C17.3239 66.5385 22.9491 64.56 23.7624 64.3199C23.7624 64.3199 21.8847 51.4889 22.8235 49.2983C23.7624 47.1076 20.6329 31.4601 20.6329 31.4601Z" fill="#575A89"/>
                     <path d="M34.7823 12.5423C33.9132 11.131 32.5529 10.0911 30.9631 9.6226L29.7954 10.5567L30.2494 9.46717C29.8676 9.40893 29.4813 9.3866 29.0953 9.40047L28.0447 10.7513L28.4795 9.44674C23.9713 9.9308 21.3041 15.106 23.6445 18.728C24.0056 17.6185 24.4437 16.5775 24.8048 15.468C25.0885 15.5067 25.3761 15.5081 25.6602 15.4722L26.0994 14.4473L26.2221 15.4288C27.5836 15.3102 29.6029 15.0498 30.8936 14.8112L30.7681 14.0582L31.5189 14.6839C31.9144 14.5929 32.1492 14.5104 32.1298 14.4473C33.0897 15.9947 34.0408 16.9832 35.0007 18.5306C35.365 16.3479 36.0083 14.5335 34.7823 12.5423Z" fill="#2F2E41"/>
                     <path d="M131.999 67.8682H104.698V80.8183H131.999V67.8682Z" fill="white"/>
                     <path d="M126.836 70.5806H109.861V72.1334H126.836V70.5806Z" fill="#E6E6E6"/>
                     <path d="M126.836 73.5669H109.861V75.1197H126.836V73.5669Z" fill="#E6E6E6"/>
                     <path d="M126.836 76.5527H109.861V78.1055H126.836V76.5527Z" fill="#E6E6E6"/>
                     <path d="M80.9242 70.9443L80.0361 69.4063L79.1483 67.8682L78.2602 69.4063L77.3721 70.9443H78.3263V75.3982H79.97V70.9443H80.9242Z" fill="white"/>
                     <path d="M141.096 102.635C145.134 102.635 148.408 99.3616 148.408 95.3233C148.408 91.285 145.134 88.0112 141.096 88.0112C137.058 88.0112 133.784 91.285 133.784 95.3233C133.784 99.3616 137.058 102.635 141.096 102.635Z" fill="#3F3D56"/>
                     <path d="M142.426 98.5642C144.215 98.5642 145.666 97.1133 145.666 95.3236C145.666 93.5339 144.215 92.083 142.426 92.083C140.636 92.083 139.185 93.5339 139.185 95.3236C139.185 97.1133 140.636 98.5642 142.426 98.5642Z" fill="#E6E6E6"/>
                     <path d="M136.484 100.434L152.438 107.081L151.94 108.66L142.758 107.621L127.22 100.724L135.861 101.722L136.484 100.434Z" fill="#3F3D56"/>
                     <path d="M150.587 106.781L170.428 41.6938L175.26 33.113L175.277 33.0301C175.293 32.9544 175.648 31.1609 174.775 29.862C174.555 29.5391 174.271 29.265 173.94 29.0568C173.61 28.8485 173.24 28.7106 172.854 28.6516C170.187 28.1516 164.221 27.9053 163.968 27.895L163.921 27.8931L163.873 27.8995C163.71 27.9217 159.897 28.4791 159.036 31.8085L154.887 39.3581L154.871 39.4118L136.092 101.149L137.126 101.463L155.888 39.7798L160.05 32.2049L160.067 32.1352C160.677 29.6298 163.59 29.0436 163.978 28.9766C164.587 29.0026 170.195 29.2521 172.654 29.7133C172.899 29.7466 173.133 29.8303 173.344 29.9589C173.554 30.0876 173.735 30.2585 173.876 30.4609C174.414 31.2572 174.279 32.4297 174.232 32.7379L169.429 41.2663L169.412 41.3226L149.553 106.466L150.587 106.781Z" fill="#3F3D56"/>
                     <path d="M153.488 45.6001L153.296 46.6631L167.626 49.2513L167.818 48.1883L153.488 45.6001Z" fill="#3F3D56"/>
                     <path d="M150.811 54.4402L150.595 55.4985L164.823 58.4024L165.039 57.344L150.811 54.4402Z" fill="#3F3D56"/>
                     <path d="M146.046 70.2506L145.749 71.2891L159.64 75.2638L159.937 74.2253L146.046 70.2506Z" fill="#3F3D56"/>
                     <path d="M155.44 100.895L155.834 99.889L142.351 94.6096L141.689 87.4408L154.273 92.1411L158.35 98.0401L159.239 97.4261L154.969 91.2478L140.455 85.8267L141.337 95.3726L155.44 100.895Z" fill="#3F3D56"/>
                     <path d="M160.124 109.615C164.162 109.615 167.436 106.342 167.436 102.303C167.436 98.2649 164.162 94.9912 160.124 94.9912C156.086 94.9912 152.812 98.2649 152.812 102.303C152.812 106.342 156.086 109.615 160.124 109.615Z" fill="#3F3D56"/>
                     <path d="M162.035 105.876C163.825 105.876 165.276 104.425 165.276 102.636C165.276 100.846 163.825 99.395 162.035 99.395C160.245 99.395 158.795 100.846 158.795 102.636C158.795 104.425 160.245 105.876 162.035 105.876Z" fill="#E6E6E6"/>
                    </g>
                    <defs>
                     <clipPath id="clip0_3910_24046">
                      <rect width="174.723" height="110" fill="white" transform="translate(0.638489)"/>
                     </clipPath>
                    </defs>
                  </svg>

                  <div class="inventory_empty_state_message">
                    <h1>NO PRODUCTS YET!</h1>
                    <div class="inventory_empty_state_message_p">
                      <p>Looks like you have an empty inventory.</p>
                      <p>You can add products by clicking the button below.</p>
                    </div>
                  </div>

                </div>
                <button class="btn inventory_new_product">
                  <div class="inventory_button_base">
                    <div class="inventory_button_base_svg">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <g clip-path="url(#clip0_4290_13386)" filter="url(#filter0_d_4290_13386)">
                         <path d="M12 5V19M5 12H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                         <filter id="filter0_d_4290_13386" x="-2" y="0" width="28" height="28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                          <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                          <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                          <feOffset dy="2"/>
                          <feGaussianBlur stdDeviation="1"/>
                          <feComposite in2="hardAlpha" operator="out"/>
                          <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                          <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_4290_13386"/>
                          <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_4290_13386" result="shape"/>
                         </filter>
                         <clipPath id="clip0_4290_13386">
                          <rect width="24" height="24" fill="white"/>
                         </clipPath>
                        </defs>
                       </svg>
                    </div>
                    <span class="inventory_button_text">Add Product</span>
                  </div>
                </button>


                <div id="add_product_modal" class="inventory_add_product_modal">
                  <div class="inventory_add_product_modal_content">
                    <div class="add_new_product_header">
                      <h1>Add New Product</h1>
                      <button id="close_add_product" class="close_add_product"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                        <g clip-path="url(#clip0_3915_25989)">
                         <path d="M18 6.5L6 18.5M6 6.5L18 18.5" stroke="black" stroke-opacity="0.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                         <clipPath id="clip0_3915_25989">
                          <rect width="24" height="24" fill="white" transform="translate(0 0.5)"/>
                         </clipPath>
                        </defs>
                       </svg></button>
                    </div>
                    <form class="add_product_form" id="add_product_form" method="POST" action="{{ route('inv.store') }}">
                      @csrf
                      <!-- Add Product -->
                      <div class="new_input_row">
                        <div class="input_container">
                          <select id="product-categ" name="product-categ">
                            <option value="" disabled selected>Select a Category</option>
                            <option value="Medicine">Medicine</option>
                            <option value="Vaccine">Vaccine</option>
                            <option value="Vitamin">Vitamin</option>
                          </select>
                          <label class="label" for="product-categ" id="label-product-categ">
                            <div class="text">Product Category</div>
                          </label>
                        </div>
                        <div class="input_container">
                          <select id="product_name" name="product_name">
                            <option value="" disabled selected>Select a Product Name</option>
                          </select>
                          <label class="label" for="product_name" id="label-product_name">
                            <div class="text">Product Name</div>
                          </label>
                        </div>



                        <div class="input_container">
                          <input type="text" id="product_code" name="product_code" value="" aria-labelledby="label-product_code" required/>
                          <label class="label" for="product_code" id="label-product_code">
                            <div class="text">Product Code</div>
                          </label>
                        </div>

                        <div class="input_container">
                          <input type="text" id="batch_number" name="batch_number" value="" aria-labelledby="label-batch_number" required/>
                          <label class="label" for="batch_number" id="label-batch_number">
                            <div class="text">Batch Number</div>
                          </label>
                        </div>

                      </div>

                      <div class="new_input_row">

                        <div class="input_container">
                          <input type="date" id="manufactured_date" name="manufactured_date" value="" aria-labelledby="label-manufactured_date" required/>
                          <label class="label" for="manufactured_date" id="label-manufactured_date">
                            <div class="text">Manufactured Date</div>
                          </label>
                        </div>

                        <div class="input_container">
                          <input type="date" id="expiration_date" name="expiration_date" value="" aria-labelledby="label-expiration_date" required/>
                          <label class="label" for="expiration_date" id="label-expiration_date">
                            <div class="text">Expiration Date</div>
                          </label>
                        </div>

                      </div>

                      <div class="input_container">
                        <input type="date" id="datestocked" name="datestocked" value="" aria-labelledby="label-datestocked" required/>
                        <label class="label" for="datestocked" id="label-datestocked">
                          <div class="text">Date Stocked</div>
                        </label>
                      </div>


                      <div class="input_container">
                        <textarea id="prod_description" name="prod_description" aria-labelledby="label-prod_description" required maxlength="253"></textarea>
                        <label class="label" for="prod_description" id="label-prod_description">
                          <div class="text">Product Description</div>
                        </label>
                      </div>


                      <div class="input_container quantity_input_container">
                        <h1>Quantity</h1>
                        <div class="quantity_input">
                          <button type="button" class="quantity_minus">-</button>
                          <input class="input_quantity" type="number" id="quantity" name="quantity" value="1" min="1" aria-labelledby="label-quantity" required/>
                          <button type="button" class="quantity_add">+</button>

                        </div>

                      </div>



                      <!-- Clear and Submit Buttons -->
                      <div class="add_product_buttons">
                        <button type="button" class="addProduct_clear_btn">
                          <div class="addProduct_clear_btn_base">
                            <span class="addProduct_clear_btn_text">Clear Form</span>
                          </div>
                        </button>
                        <button type="submit" class="addProduct_submit_btn">
                          <div class="addProduct_submit_btn_base">
                            <span class="add_product_button_text">New Product</span>
                          </div>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>

              </div>

              <table id="data-table" class="data-table">
                <thead>
                  <tr>
                    <th><input id="SelectAll" type="checkbox"></th>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>On Hand</th>
                    <th>Date Stocked</th>
                    <th>Expiration Date</th>
                    <th>Action</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody id="inventoryTableBody" class="inventoryTableBody">
                @foreach($med_info as $medInfo)
                @php
                  $medBatch = $med_batch->where('med_id', $medInfo->id)->first();
                @endphp
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
                        <button data-action="AddStock" class="addstockButton" data-item-id="{{ $medInfo->id }}">
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
                @endforeach<!-- Add this section inside the <tbody> element of your table -->
                @foreach($vit_info as $vitInfo)
                @php
                  $vitBatch = $vit_batch->where('vit_id', $vitInfo->id)->first();
                @endphp
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
                        <button data-action="AddStock"><div class="action_button_text" id="action_button_text"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
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
                @endforeach
                @foreach($vax_info as $vaxInfo)
                  @php
                    $vaxBatch = $vax_batch->where('vax_id', $vaxInfo->id)->first();
                  @endphp
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
                        <button data-action="AddStock"><div class="action_button_text" id="action_button_text"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
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
                @endforeach
                  <!-- Add more <tr> elements with different data to simulate more rows -->
    
                </tbody>
                
              </table>


              <!-- Modal na ADD PRODUCT -->
              <div id="add_Product_Modal" class="inventory_add_product_modal">
                <div class="inventory_add_product_modal_content">
                  <div class="add_new_product_header">
                    <h1>Add New Product</h1>
                    <button id="close_add_new_product" class="close_add_product"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                      <g clip-path="url(#clip0_3915_25989)">
                       <path d="M18 6.5L6 18.5M6 6.5L18 18.5" stroke="black" stroke-opacity="0.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      </g>
                      <defs>
                       <clipPath id="clip0_3915_25989">
                        <rect width="24" height="24" fill="white" transform="translate(0 0.5)"/>
                       </clipPath>
                      </defs>
                     </svg></button>
                  </div>
                  <form class="add_Product_Modal_form" id="add_Product_Modal_form" method="POST" action="{{ route('inv.store') }}">
                    @csrf
                    <!-- Add Product -->
                    <div class="new_input_row">
                      <div class="input_container">
                        <select id="product_category" name="product_category">
                          <option value="" disabled selected>Select a Category</option>
                          <option value="Medicine">Medicine</option>
                          <option value="Vaccine">Vaccine</option>
                          <option value="Vitamin">Vitamin</option>
                        </select>
                        <label class="label" for="product_category" id="label-product_category">
                          <div class="text">Product Category</div>
                        </label>
                      </div>
                      <div class="input_container">
                        <select id="new_product_name" name="new_product_name">
                          <option value="" disabled selected>Select a Product Name</option>
                        </select>
                        <label class="label" for="new_product_name" id="label-new_product_name">
                          <div class="text">Product Name</div>
                        </label>
                      </div>



                      <div class="input_container">
                        <input type="text" id="new_product_code" name="new_product_code" value="" aria-labelledby="label-new_product_code" required/>
                        <label class="label" for="new_product_code" id="label-new_product_code">
                          <div class="text">Product Code</div>
                        </label>
                      </div>

                      <div class="input_container">
                        <input type="text" id="new_batch_number" name="new_batch_number" value="" aria-labelledby="label-new_batch_number" required/>
                        <label class="label" for="new_batch_number" id="label-new_batch_number">
                          <div class="text">Batch Number</div>
                        </label>
                      </div>

                    </div>

                    <div class="new_input_row">

                      <div class="input_container">
                        <input type="date" id="new_manufactured_date" name="new_manufactured_date" value="" aria-labelledby="label-new_manufactured_date" required/>
                        <label class="label" for="new_manufactured_date" id="label-new_manufactured_date">
                          <div class="text">Manufactured Date</div>
                        </label>
                      </div>

                      <div class="input_container">
                        <input type="date" id="new_expiration_date" name="new_expiration_date" value="" aria-labelledby="label-new_expiration_date" required/>
                        <label class="label" for="new_expiration_date" id="label-new_expiration_date">
                          <div class="text">Expiration Date</div>
                        </label>
                      </div>

                    </div>

                    <div class="input_container">
                      <input type="date" id="new_datestocked" name="new_datestocked" value="" aria-labelledby="label-new_datestocked" required/>
                      <label class="label" for="new_datestocked" id="label-new_datestocked">
                        <div class="text">Date Stocked</div>
                      </label>
                    </div>


                    <div class="input_container">
                      <textarea id="new_prod_description" name="new_prod_description" aria-labelledby="label-new_prod_description" required maxlength="253"></textarea>
                      <label class="label" for="new_prod_description" id="label-new_prod_description">
                        <div class="text">Product Description</div>
                      </label>
                    </div>


                    <div class="input_container quantity_input_container">
                      <h1>Quantity</h1>
                      <div class="quantity_input">
                        <button type="button" class="quantity_minus" id="quantity_minus">-</button>
                        <input class="input_quantity" type="number" id="new_quantity" name="new_quantity" value="1" min="1" aria-labelledby="label-new_quantity" required/>
                        <button type="button" class="quantity_add" id="quantity_add">+</button>

                      </div>

                    </div>



                    <!-- Clear and Submit Buttons -->
                    <div class="add_product_buttons">
                      <button type="button" class="addProduct_clear_btn" id="clear_add_product_btn">
                        <div class="addProduct_clear_btn_base">
                          <span class="addProduct_clear_btn_text">Clear Form</span>
                        </div>
                      </button>
                      <button type="submit" class="addProduct_submit_btn" id="addProduct_submit_btn">
                        <div class="addProduct_submit_btn_base">
                          <span class="add_product_button_text">New Product</span>
                        </div>
                      </button>
                    </div>
                  </form>

                </div>
              </div>



              <!-- MODAL NA LILITAW AFTER CLICKING SAVE SA ADD PRODUCT MODAL (SUCCESSFUL ADD OF PRODUCT)-->
              <div class="successModal" id="successModal">
                <div class="success_modal_content">
                  <div class="inventory_success_logo">
                    <div class="inventory_success_logo_icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 32 32" fill="none">
                              <g clip-path="url(#clip0_3374_14981)">
                                <path d="M12 16L14.6667 18.6667L20 13.3333M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 14.4241 27.6896 12.8637 27.0866 11.4078C26.4835 9.95189 25.5996 8.62902 24.4853 7.51472C23.371 6.40042 22.0481 5.5165 20.5922 4.91345C19.1363 4.31039 17.5759 4 16 4C14.4241 4 12.8637 4.31039 11.4078 4.91345C9.95189 5.5165 8.62902 6.40042 7.51472 7.51472C6.40042 8.62902 5.5165 9.95189 4.91345 11.4078C4.31039 12.8637 4 14.4241 4 16Z" stroke="#5BB85A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </g>
                              <defs>
                                <clipPath id="clip0_3374_14981">
                                <rect width="32" height="32" fill="white"/>
                                </clipPath>
                              </defs>
                      </svg>
                    </div>
                  </div>
                  <div class="success_message">
                    <h1>Success!</h1>
                    <p>Product was successfully added.</p>
                  </div>
                </div>
              </div>




            </div>
            <!-- MODAL NA LILITAW AFTER CLICKING ADD STOCK SA ACTIONS BUTTON -->

            <div class="Add_Product" id="Add_Product">

              <div class="AddProduct_content">
                <div class="Add_Product_heading">
                  <h1>Add Stock</h1>
                  <button class="close_addproduct" id="close_addproduct">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                      <g clip-path="url(#clip0_3915_25213)">
                       <path d="M18 6.5L6 18.5M6 6.5L18 18.5" stroke="black" stroke-opacity="0.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      </g>
                      <defs>
                       <clipPath id="clip0_3915_25213">
                        <rect width="24" height="24" fill="white" transform="translate(0 0.5)"/>
                       </clipPath>
                      </defs>
                    </svg>
                  </button>
                </div>
                <div class="AddProduct_main_content">
                  <form class="AddProduct_form" id="AddProduct_form">
                    <!-- Add Product -->
                    <div class="input_container">
                      <input type="text" id="prod_batch_number" name="prod_batch_number" value="" aria-labelledby="label-prod_batch_number" required readonly/>
                      <label class="label" for="prod_batch_number" id="label-prod_batch_number">
                        <div class="text">Batch Number</div>
                      </label>
                    </div>

                    <div class="new_input_row">

                      <div class="input_container">
                        <input type="date" id="prod_manufactured_date" name="prod_manufactured_date" value="" aria-labelledby="label-prod_manufactured_date" required readonly/>
                        <label class="label" for="prod_manufactured_date" id="label-prod_manufactured_date">
                          <div class="text">Manufactured Date</div>
                        </label>
                      </div>

                      <div class="input_container">
                        <input type="date" id="prod_expiration_date" name="prod_expiration_date" value="" aria-labelledby="label-prod_expiration_date" required readonly/>
                        <label class="label" for="prod_expiration_date" id="label-prod_expiration_date">
                          <div class="text">Expiration Date</div>
                        </label>
                      </div>

                    </div>

                    <div class="input_container">
                      <input type="date" id="prod_datestocked" name="prod_datestocked" value="" aria-labelledby="label-prod_datestocked" required readonly/>
                      <label class="label" for="prod_datestocked" id="label-prod_datestocked">
                        <div class="text">Date Stocked</div>
                      </label>
                    </div>


                    <div class="input_container quantity_input_container">
                      <h1>Quantity</h1>
                      <div class="quantity_input">
                        <button type="button" class="quantity_minus" id="prod_quantity_minus">-</button>
                        <input class="input_quantity" type="number" id="prod_quantity" name="prod_quantity" value="1" min="1" aria-labelledby="label-prod_quantity" required/>
                        <button type="button" class="quantity_add" id="prod_quantity_add">+</button>

                      </div>

                    </div>



                    <!-- Clear and Submit Buttons -->
                    <div class="AddProduct_buttons">
                      <button type="button" class="addProduct_cancel_btn" id="addProduct_cancel_btn">
                        <div class="addProduct_cancel_btn_base">
                          <span class="addProduct_cancel_btn_text">Cancel</span>
                        </div>
                      </button>
                      <button type="submit" class="addStock_submit_btn" id="addStock_submit_btn">
                        <div class="addStock_submit_btn_base">
                          <span class="addStock_submit_btn_text">Add Stock</span>
                        </div>
                      </button>
                    </div>
                  </form>

                </div>
              </div>
            </div>

            <!--SUCCESS ADDED STOCK MODAL-->
            <div class="successModal" id="successAdd_stock">
              <div class="success_modal_content">
                <div class="inventory_success_logo">
                  <div class="inventory_success_logo_icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 32 32" fill="none">
                            <g clip-path="url(#clip0_3374_14981)">
                              <path d="M12 16L14.6667 18.6667L20 13.3333M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 14.4241 27.6896 12.8637 27.0866 11.4078C26.4835 9.95189 25.5996 8.62902 24.4853 7.51472C23.371 6.40042 22.0481 5.5165 20.5922 4.91345C19.1363 4.31039 17.5759 4 16 4C14.4241 4 12.8637 4.31039 11.4078 4.91345C9.95189 5.5165 8.62902 6.40042 7.51472 7.51472C6.40042 8.62902 5.5165 9.95189 4.91345 11.4078C4.31039 12.8637 4 14.4241 4 16Z" stroke="#5BB85A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                            <defs>
                              <clipPath id="clip0_3374_14981">
                              <rect width="32" height="32" fill="white"/>
                              </clipPath>
                            </defs>
                    </svg>
                  </div>
                </div>
                <div class="success_message">
                  <h1>Success!</h1>
                  <p>Product stock successfully added.</p>
                </div>
              </div>
            </div>


          </div>

        </div>
        <div class="view_product_container" id="view_product_container">
          <div class="view_product_header_container" id="view_product_header_container">
            <div class="view_product_header">
              <h1>Product Information</h1>
            </div>


          </div>
          <div class="view_product" id="view_product">
            <div class="view_product_back_container">
              <button class="view_prodcuct_back" id="view_prodcuct_back">
                <div class="view_prodcuct_back_base">
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                    <g clip-path="url(#clip0_4489_16194)" filter="url(#filter0_d_4489_16194)">
                     <path d="M5.5 12H19.5M5.5 12L11.5 18M5.5 12L11.5 6" stroke="#045B62" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </g>
                    <defs>
                     <filter id="filter0_d_4489_16194" x="-1.5" y="0" width="28" height="28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                      <feOffset dy="2"/>
                      <feGaussianBlur stdDeviation="1"/>
                      <feComposite in2="hardAlpha" operator="out"/>
                      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_4489_16194"/>
                      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_4489_16194" result="shape"/>
                     </filter>
                     <clipPath id="clip0_4489_16194">
                      <rect width="24" height="24" fill="white" transform="translate(0.5)"/>
                     </clipPath>
                    </defs>
                   </svg> Back
                </div>

              </button>

            </div>
            <div class="view_product_content">
              <div class="view_info_container">
                <img src="" alt="Product image">
                <div class="view_info_details">
                  <div class="info_header">
                    <div class="info_header_base">
                      <h1>Rabies</h1>
                      <p>Vaccince</p>
                    </div>

                  </div>
                  <div class="info_details">
                    <div class="batchno_prodcode">
                      <div class="batch_number">
                        <h1>Batch Number</h1>
                        <p>2345</p>
                      </div>
                      <div class="product_code">
                        <h1>Product Code</h1>
                        <p>23456789</p>
                      </div>
                    </div>
                    <div class="manu_expi_stocked_date">
                      <div class="manufactured_date">
                        <h1>Manufacturing Date</h1>
                        <p>09-05-2023</p>
                      </div>
                      <div class="expiration_date">
                        <h1>Expiration Date</h1>
                        <p>09-05-2023</p>
                      </div>
                      <div class="date_stocked">
                        <h1>Date Stocked</h1>
                        <p>09-05-2023</p>
                      </div>
                    </div>
                    <div class="prod_description">
                      <h1>Product Description</h1>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed odio feugiat, ullamcorper metus in, imperdiet ligula. Duis suscipit viverra lectus et semper. Mauris eleifend cursus pulvinar. Nunc cursus dui eu velit scelerisque viverra nec vitae velit. Nullam hendrerit erat fermentum ornare finibus.</p>
                    </div>


                  </div>

                </div>
              </div>
            </div>

          </div>

          <div class="InventoryContainer">
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




            <div class="table_container" id="table_container">
              <table id="product_data_table" class="data-table">
                <thead>
                  <tr>
                    <th><input id="Select_All" type="checkbox"></th>
                    <th>Batch Number</th>
                    <th>Quantity Ordered</th>
                    <th>Quantity Left</th>
                    <th>Date Stocked</th>
                    <th>Expiration Date</th>
                    <th>Status</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody id="productTableBody" class="inventoryTableBody">
                  <!-- Add this section inside the <tbody> element of your table -->
                    <tr>
                      <td><input type="checkbox"></td>
                      <td>2023001</td>
                      <td>100</td>
                      <td>20</td>
                      <td>2023-09-10</td>
                      <td>2023-12-31</td>
                      <td>In Stock</td>
                      <td><button>Edit</button></td>
                    </tr>

                    <tr>
                      <td><input type="checkbox"></td>
                      <td>2023002</td>
                      <td>50</td>
                      <td>10</td>
                      <td>2023-09-11</td>
                      <td>2024-06-30</td>
                      <td>In Stock</td>
                      <td><button>Edit</button></td>
                    </tr>

                  <!-- Add more <tr> elements with different data to simulate more rows -->

                </tbody>

              </table>



            </div>
          </div>

        </div>




        <div class="edit_prod_container" id="edit_prod_container">
          <div class="edit_prod_header_container">
            <div class="edit_prod_header">
              <h1>Edit Product Information</h1>
            </div>
          </div>
          <div class="edit_prod_content">
            <div class="edit_prod_content_header">
              <button class="edit_prod_back_container" id="edit_prod_back_container">
                <div class="edit_prod_back_base">
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                    <g clip-path="url(#clip0_4489_15989)" filter="url(#filter0_d_4489_15989)">
                     <path d="M5.5 12H19.5M5.5 12L11.5 18M5.5 12L11.5 6" stroke="#045B62" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </g>
                    <defs>
                     <filter id="filter0_d_4489_15989" x="-1.5" y="0" width="28" height="28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                      <feOffset dy="2"/>
                      <feGaussianBlur stdDeviation="1"/>
                      <feComposite in2="hardAlpha" operator="out"/>
                      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_4489_15989"/>
                      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_4489_15989" result="shape"/>
                     </filter>
                     <clipPath id="clip0_4489_15989">
                      <rect width="24" height="24" fill="white" transform="translate(0.5)"/>
                     </clipPath>
                    </defs>
                  </svg> Back
                </div>
              </button>
            </div>
            <div class="edit_prod_details">
              <form action="{{ route('product.edit', ['product_type'=>$medInfo->product_type, 'id'=>$medInfo->id]) }}" method="POST" class="edit_prod_form" id="edit_prod_form">
              @csrf
              @method('PATCH') 
                <!-- Add Product -->
                <div class="new_input_row">
                  <div class="input_container">
                    <select id="product-categ" name="product-categ">
                      <option value="" disabled selected>Select a Category</option>
                      <option value="Medicine">Medicine</option>
                      <option value="Vaccine">Vaccine</option>
                      <option value="Vitamin">Vitamin</option>
                    </select>
                    <label class="label" for="product-categ" id="label-product-categ">
                      <div class="text">Product Category</div>
                    </label>
                  </div>
                  <div class="input_container">
                    <select id="product_name" name="product_name">
                      <option value="" disabled selected>Select a Product Name</option>
                    </select>
                    <label class="label" for="product_name" id="label-product_name">
                      <div class="text">Product Name</div>
                    </label>
                  </div>



                  <div class="input_container">
                    <input type="text" id="prod_code" name="prod_code" value="" aria-labelledby="label-prod_code" required/>
                    <label class="label" for="prod_code" id="label-prod_code">
                      <div class="text">Product Code</div>
                    </label>
                  </div>

                  <div class="input_container">
                    <input type="text" id="Prod_batch_number" name="Prod_batch_number" value="" aria-labelledby="label-Prod_batch_number" required/>
                    <label class="label" for="Prod_batch_number" id="label-Prod_batch_number">
                      <div class="text">Batch Number</div>
                    </label>
                  </div>

                </div>

                <div class="new_input_row">

                  <div class="input_container">
                    <input type="date" id="Prod_manufactured_date" name="Prod_manufactured_date" value="" aria-labelledby="label-Prod_manufactured_date" required/>
                    <label class="label" for="Prod_manufactured_date" id="label-Prod_manufactured_date">
                      <div class="text">Manufactured Date</div>
                    </label>
                  </div>

                  <div class="input_container">
                    <input type="date" id="expiration_date" name="expiration_date" value="" aria-labelledby="label-expiration_date" required/>
                    <label class="label" for="expiration_date" id="label-expiration_date">
                      <div class="text">Expiration Date</div>
                    </label>
                  </div>

                </div>

                <div class="input_container">
                  <input type="date" id="datestocked" name="datestocked" value="" aria-labelledby="label-datestocked" required/>
                  <label class="label" for="datestocked" id="label-datestocked">
                    <div class="text">Date Stocked</div>
                  </label>
                </div>


                <div class="input_container">
                  <textarea id="prod_description" name="prod_description" aria-labelledby="label-prod_description" required maxlength="253"></textarea>
                  <label class="label" for="prod_description" id="label-prod_description">
                    <div class="text">Product Description</div>
                  </label>
                </div>


                <div class="input_container quantity_input_container">
                  <h1>Quantity</h1>
                  <div class="quantity_input">
                    <button type="button" class="quantity_minus">-</button>
                    <input class="input_quantity" type="number" id="prod_quantity" name="quantity" value="1" min="1" aria-labelledby="label-quantity" required/>
                    <button type="button" class="quantity_add">+</button>

                  </div>

                </div>
              </form>



              <!-- Clear and Submit Buttons -->
              <div class="edit_prod_buttons">
                <button type="button" class="addProduct_clear_btn" id="edit_cancel_changes">
                  <div class="addProduct_clear_btn_base">
                    <span class="addProduct_clear_btn_text">Cancel</span>
                  </div>
                </button>
                <button type="submit" class="addProduct_submit_btn" id="edit_save_changes">
                  <div class="addProduct_submit_btn_base">
                    <span class="add_product_button_text">Save Changes</span>
                  </div>
                </button>
              </div>
            </div>

          </div>
        </div>

        <div class="save_edit_changes" id="save_edit_changes">
          <div class="success_modal_content">
            <div class="inventory_success_logo">
              <div class="inventory_success_logo_icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 32 32" fill="none">
                        <g clip-path="url(#clip0_3374_14981)">
                          <path d="M12 16L14.6667 18.6667L20 13.3333M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 14.4241 27.6896 12.8637 27.0866 11.4078C26.4835 9.95189 25.5996 8.62902 24.4853 7.51472C23.371 6.40042 22.0481 5.5165 20.5922 4.91345C19.1363 4.31039 17.5759 4 16 4C14.4241 4 12.8637 4.31039 11.4078 4.91345C9.95189 5.5165 8.62902 6.40042 7.51472 7.51472C6.40042 8.62902 5.5165 9.95189 4.91345 11.4078C4.31039 12.8637 4 14.4241 4 16Z" stroke="#5BB85A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                          <clipPath id="clip0_3374_14981">
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

        <!-- MODAL NA LILITAW AFTER CLICKING CANCEL SA EDIT PRODUCT MODAL (ETO YUNG DINAGDAG KO)-->
        <div class="discardModal" id="discardModal">
          <div class="discard_modal_content">
            <div class="inventory_discard_logo">
              <div class="inventory_discard_logo_icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                  <g clip-path="url(#clip0_5447_15576)">
                   <path d="M13.3333 13.3333L18.6667 18.6667M18.6667 13.3333L13.3333 18.6667M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 14.4241 27.6896 12.8637 27.0866 11.4078C26.4835 9.95189 25.5996 8.62902 24.4853 7.51472C23.371 6.40042 22.0481 5.5165 20.5922 4.91345C19.1363 4.31039 17.5759 4 16 4C14.4241 4 12.8637 4.31039 11.4078 4.91345C9.95189 5.5165 8.62902 6.40042 7.51472 7.51472C6.40042 8.62902 5.5165 9.95189 4.91345 11.4078C4.31039 12.8637 4 14.4241 4 16Z" stroke="#DA534F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  </g>
                  <defs>
                   <clipPath id="clip0_5447_15576">
                    <rect width="32" height="32" fill="white"/>
                   </clipPath>
                  </defs>
                 </svg>
              </div>
            </div>
            <div class="discard_message">
              <h1>Discard changes?</h1>
              <p>Any unsaved progress will be lost.</p>
            </div>
            <div class="discard_buttons">
              <div class="return_btn" id="return_btn"><span class="return_btn_base">Return</span></div>
              <div class="discard_btn" id="discard_btn"><span class="discard_btn_base">Discard</span></div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </main>



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="/js/sidebar.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



  <script>//BMGA DINAGDAG KONG FUNCTIONS SA MGA BAGONG LAMAN NG INVENTORY PAGE
    document.addEventListener("DOMContentLoaded", function () {
      // Get the clear button and form elements
      // Function to toggle the visibility of the addProductButton
      function toggleAddProductButtonVisibility() {
        const inventoryEmptyState = document.getElementById('inventory_empty_state');
        const dataTable = document.getElementById('data-table');
        const addProductButton = document.getElementById('addProductButton');

        if (inventoryEmptyState.style.display === 'block' || inventoryEmptyState.style.display === '') {
          // If inventory_empty_state is visible or not set, hide addProductButton
          addProductButton.style.display = 'none';
        } else if (dataTable.style.display === 'table') {
          // If data-table is visible, show addProductButton
          addProductButton.style.display = 'flex';
        }
      }

      // Call the function initially to set the initial state of addProductButton
      toggleAddProductButtonVisibility();

      // Get a reference to the "SelectAll" checkbox
      const selectAllCheckbox = document.getElementById('SelectAll');

      // Get a reference to the table body
      const tableBody = document.getElementById('inventoryTableBody');

      // Function to handle the "SelectAll" checkbox
      function handleSelectAll() {
        const checkboxes = tableBody.querySelectorAll('input[type="checkbox"]');
        checkboxes.forEach((checkbox) => {
          checkbox.checked = selectAllCheckbox.checked;
        });
      }

      // Add a click event listener to the "SelectAll" checkbox
      selectAllCheckbox.addEventListener('click', handleSelectAll);


      // Get the button and modal elements
      const modalButton = document.querySelector('.inventory_new_product');
      const addProductModal = document.getElementById('add_product_modal');
      const closeModalButton = document.getElementById('close_add_product');

      // Function to open the modal
      function openModal() {
        addProductModal.style.display = 'block';
      }

      // Function to close the modal
      function closeModal() {
        addProductModal.style.display = 'none';
      }

      // Event listener for opening the modal
      modalButton.addEventListener('click', openModal);

      // Event listener for closing the modal
      closeModalButton.addEventListener('click', closeModal);


      const clearButton = document.querySelector(".addProduct_clear_btn");
      const manufacturedDateInput = document.getElementById('manufactured_date');
      const expirationDateInput = document.getElementById('expiration_date');
      const dateStockedInput = document.getElementById('datestocked');
      const form = document.querySelector(".add_product_form");


      // Add a click event listener to the clear button
      clearButton.addEventListener("click", function () {
        // Loop through all form elements and reset their values
        const formElements = form.elements;
        for (let i = 0; i < formElements.length; i++) {
          const element = formElements[i];
          const elementType = element.type.toLowerCase();

          // Check if the element is an input, select, or textarea
          if (
            elementType === "text" ||
            elementType === "select-one" ||
            elementType === "textarea" ||
            elementType === "date"
          ) {
            element.value = ""; // Reset the value
          }
        }
      });


      // Get references to the relevant elements
      const productCategorySelect = document.getElementById('product-categ');
      const productNameSelect = document.getElementById('product_name');

      // Define the options for medicine, vaccine, and vitamin
      const medicineOptions = ['Medicine 1', 'Medicine 2', 'Medicine 3'];
      const vaccineOptions = ['Vaccine 1', 'Vaccine 2', 'Vaccine 3'];
      const vitaminOptions = ['Vitamin 1', 'Vitamin 2', 'Vitamin 3'];

      // Initially disable the "Product Name" select element
      productNameSelect.disabled = true;

      // Listen for changes in the product category selection
      productCategorySelect.addEventListener('change', function () {
        const selectedCategory = this.value;
        updateProductNameOptions(selectedCategory);

        // Enable the "Product Name" select element when a category is selected
        productNameSelect.disabled = false;
      });

      // Function to update the product name select options based on the selected category
      function updateProductNameOptions(category) {
        // Clear existing options
        productNameSelect.innerHTML = '<option value="" disabled selected>Select a Product Name</option>';

        let options = [];
        if (category === 'Medicine') {
          options = medicineOptions;
        } else if (category === 'Vaccine') {
          options = vaccineOptions;
        } else if (category === 'Vitamin') {
          options = vitaminOptions;
        }

        options.forEach(option => {
          const optionElement = document.createElement('option');
          optionElement.value = option;
          optionElement.textContent = option;
          productNameSelect.appendChild(optionElement);
        });
      }

      // Listen for changes in the product category selection
      productCategorySelect.addEventListener('change', function () {
        const selectedCategory = this.value;
        updateProductNameOptions(selectedCategory);
      });

      // Function to restrict "batch_number" input to numbers 1 to 3
      function restrictBatchNumberInput(inputElement) {
        inputElement.addEventListener('input', function () {
          const inputValue = parseInt(this.value, 10);

          // Check if the input value is not a number or is outside the range 1 to 3
          if (isNaN(inputValue) || inputValue < 1 || inputValue > 3) {
            this.value = ''; // Clear the input value
          }
        });
      }

      // Get the "batch_number" input element by its ID
      const batchNumberInput = document.getElementById('batch_number');

      // Call the function to restrict input to numbers 1 to 3
      restrictBatchNumberInput(batchNumberInput);


      // Function to check if a date is in the future
      function isFutureDate(date) {
        const today = new Date();
        const selectedDate = new Date(date);
        return selectedDate > today;
      }

      // Function to check if a date is in the past or today
      function isPastOrToday(date) {
        const today = new Date();
        const selectedDate = new Date(date);
        return selectedDate <= today;
      }


      // Set the maximum allowed date to today
      const today = new Date();
      const todayString = today.toISOString().split('T')[0];
      manufacturedDateInput.max = todayString;
      expirationDateInput.min = todayString;
      dateStockedInput.max = todayString;

      // Function to handle date selection for manufactured_date
      function handleManufacturedDateSelection() {
        const selectedDate = manufacturedDateInput.value;
        if (isFutureDate(selectedDate)) {
          alert("Please select a previous date for Manufactured Date.");
          manufacturedDateInput.value = ""; // Clear the input value
          manufacturedDateInput.focus(); // Set focus back to the input
          return false;
        }
        // Set the default minimum date for datestocked to the manufactured_date
        dateStockedInput.min = selectedDate;
        return true;
      }

      // Function to handle date selection for expiration_date
      function handleExpirationDateSelection() {
        const selectedDate = expirationDateInput.value;
        if (isPastOrToday(selectedDate)) {
          alert("Invalid! Product has already expired.");
          expirationDateInput.value = ""; // Clear the input value
          expirationDateInput.focus(); // Set focus back to the input
          return false;
        }
        return true;
      }

      // Function to handle date selection for datestocked
      function handleDateStockedSelection() {
        const selectedDate = dateStockedInput.value;
        if (isFutureDate(selectedDate) || selectedDate < manufacturedDateInput.value) {
          alert("Please select a date after Manufactured Date and up to the current date for Date Stocked.");
          dateStockedInput.value = ""; // Clear the input value
          dateStockedInput.focus(); // Set focus back to the input
          return false;
        }
        return true;
      }

      // Disable keyboard events for all date inputs
      const dateInputs = [manufacturedDateInput, expirationDateInput, dateStockedInput];
      dateInputs.forEach(input => {
        input.addEventListener('keydown', function (e) {
          e.preventDefault();
        });
      });

      // Add event listeners to the manufactured_date input
      manufacturedDateInput.addEventListener('blur', function () {
        if (!handleManufacturedDateSelection()) {
          this.focus();
        }
      });


      expirationDateInput.addEventListener('blur', function () {
        if (!handleExpirationDateSelection()) {
          this.focus();
        }
      });

      dateStockedInput.addEventListener('blur', function () {
        if (!handleDateStockedSelection()) {
          this.focus();
        }
      });

      const prodDescriptionInput = document.getElementById('prod_description');

      // Function to handle input validation for prod_description
      function handleProdDescriptionInput() {
        const inputValue = prodDescriptionInput.value;
        // Use a regular expression to check if the input contains only alphabets, numerals, and spaces
        if (/^[A-Za-z0-9\s]*$/.test(inputValue)) {
          // Check if the input length exceeds the maximum allowed (253)
          if (inputValue.length > 253) {
            alert("Maximum length exceeded. Please limit your input to 253 characters.");
            prodDescriptionInput.value = inputValue.slice(0, 253); // Truncate the input to the maximum length
          }
        } else {
          alert("Special characters are not allowed. Please use only alphabets and numerals.");
          prodDescriptionInput.value = ''; // Clear the input value
        }
      }

      // Add an input event listener to the prod_description textarea
      prodDescriptionInput.addEventListener('input', handleProdDescriptionInput);


      const quantityInput = document.getElementById('quantity');
      const minusButton = document.querySelector('.quantity_minus');
      const addButton = document.querySelector('.quantity_add');

      // Function to handle input validation for quantity
      function handleQuantityInput() {
        const inputValue = quantityInput.value;
        // Use a regular expression to check if the input contains only positive numbers
        if (/^[1-9]\d*$/.test(inputValue)) {
          // The input is a positive number, no action needed
        } else {
          alert("Please enter a valid positive number (1 and above).");
          quantityInput.value = '1'; // Reset the input value to 1
        }
      }

      // Add an input event listener to the quantity input
      quantityInput.addEventListener('input', handleQuantityInput);

      // Function to decrease quantity
      minusButton.addEventListener('click', function () {
        const currentValue = parseInt(quantityInput.value, 10);
        if (currentValue > 1) {
          quantityInput.value = (currentValue - 1).toString();
        }
      });

      // Function to increase quantity
      addButton.addEventListener('click', function () {
        const currentValue = parseInt(quantityInput.value, 10);
        quantityInput.value = (currentValue + 1).toString();
      });


      function showSuccessModal() {
        const successModal = document.getElementById('successModal');
        successModal.style.display = 'block';

        setTimeout(() => {
          successModal.classList.add('fade-out');
          setTimeout(() => {
            successModal.style.display = 'none';
            successModal.classList.remove('fade-out');
          }, 1000); // 3000 milliseconds (3 seconds) for the fade-out animation
        }, 0); // Delay showing the modal for one animation frame
      }

      // Function to show the table container and populate the inventoryTable
      function showTable() {
        // Reference to the table container and empty state elements
        const inventoryTable = document.getElementById('data-table');
        const emptyState = document.getElementById('inventory_empty_state');

        // Hide the empty state
        emptyState.style.display = 'none';
        // Show the table container
        inventoryTable.style.display = 'table';

        // Access the inventoryTableBody to add rows with input data
        const tableBody = document.getElementById('inventoryTableBody');
        const productCategory = document.getElementById('product-categ').value;
        const productName = document.getElementById('product_name').value;
        const quantity = parseInt(document.getElementById('quantity').value, 10); // Parse quantity as an integer
        const dateStocked = document.getElementById('datestocked').value;
        const expirationDate = document.getElementById('expiration_date').value;

        // Determine the status based on the input quantity
        var status = quantity === 0 ? 'Out of Stock' : quantity <= 50 ? 'Low Stock' : 'In Stock';

        // Define styles for different statuses
        var statusStyles = {
          'Out of Stock': {
            backgroundColor: '#DA534F',
            color: '#fff'
          },
          'Low Stock': {
            backgroundColor: '#FFA800',
            color: '#fff'
          },
          'In Stock': {
            backgroundColor: '#5CA500',
            color: 'var(--colors-main-neutral, #FFF)'
          }
        };

        // Create a new row and populate it with input data
        const newRow = document.createElement('tr');
        newRow.innerHTML = `
          <td><input type="checkbox"></td>
          <td>${productCategory}</td>
          <td>${productName}</td>
          <td>${quantity}</td>
          <td>${dateStocked}</td>
          <td>${expirationDate}</td>
          <td style="background-color: ${statusStyles[status].backgroundColor}; color: ${statusStyles[status].color};">${status}</td>
          <td>
            <div class="dropdown">
              <button class="dropbtn">Actions</button>
              <div class="dropdown-content" id="dropdown-content">
                <button data-action="AddStock"><div class="action_button_text" id="action_button_text"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
 <g clip-path="url(#clip0_4467_23446)">
  <path d="M9 12H15M12 9V15M3 12C3 13.1819 3.23279 14.3522 3.68508 15.4442C4.13738 16.5361 4.80031 17.5282 5.63604 18.364C6.47177 19.1997 7.46392 19.8626 8.55585 20.3149C9.64778 20.7672 10.8181 21 12 21C13.1819 21 14.3522 20.7672 15.4442 20.3149C16.5361 19.8626 17.5282 19.1997 18.364 18.364C19.1997 17.5282 19.8626 16.5361 20.3149 15.4442C20.7672 14.3522 21 13.1819 21 12C21 10.8181 20.7672 9.64778 20.3149 8.55585C19.8626 7.46392 19.1997 6.47177 18.364 5.63604C17.5282 4.80031 16.5361 4.13738 15.4442 3.68508C14.3522 3.23279 13.1819 3 12 3C10.8181 3 9.64778 3.23279 8.55585 3.68508C7.46392 4.13738 6.47177 4.80031 5.63604 5.63604C4.80031 6.47177 4.13738 7.46392 3.68508 8.55585C3.23279 9.64778 3 10.8181 3 12Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
 </g>
 <defs>
  <clipPath id="clip0_4467_23446">
   <rect width="24" height="24" fill="white"/>
  </clipPath>
 </defs>
</svg>Add Stock</div></button>
                <button data-action="View"><div class="action_button_text"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
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
                <button data-action="Edit"><div class="action_button_text"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
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
        `;


        // Append the new row to the table body
        tableBody.appendChild(newRow);



        // Toggle the visibility of dropdown-content when the Actions button is clicked
        document.querySelectorAll('.dropbtn').forEach(function (button) {
          button.addEventListener('click', function (event) {
            event.stopPropagation(); // Prevent the click event from propagating
            const content = this.nextElementSibling;
            if (content.style.display === 'block') {
              content.style.display = 'none';
            } else if (content.style.display === 'flex'){
              content.style.display = 'none';
            }
            else {
              content.style.display = 'block';
            }
          });
        });

        // Function to handle clicking the "edit_prod_back_container" button
        function handleEditProdBackClick() {
          const editProdContainer = document.getElementById('edit_prod_container');
          const inventoryContainer = document.getElementById('inventory_container');

          // Hide the edit_prod_container
          editProdContainer.style.display = 'none';

          // Show the inventory_container
          inventoryContainer.style.display = 'inline-flex';
        }

        // Add an event listener to the "edit_prod_back_container" button
        const editProdBackContainer = document.getElementById('edit_prod_back_container');
        editProdBackContainer.addEventListener('click', handleEditProdBackClick);

        function view_Product_back(){
          const view_product_container = document.getElementById('view_product_container');
          const inventory_container= document.getElementById('inventory_container');

          view_product_container.style.display = 'none';
          inventory_container.style.display = 'inline-flex'
        }

        // Add an event listener to the "edit_prod_back_container" button
        const view_prodcuct_back = document.getElementById('view_prodcuct_back');
        view_prodcuct_back.addEventListener('click', view_Product_back);


        // Add an event listener to the document to close the dropdown-content when clicking anywhere
        document.addEventListener('click', function (event) {
          const dropdownContents = document.querySelectorAll('.dropdown-content');
          dropdownContents.forEach(function (dropdownContent) {
            if (!dropdownContent.contains(event.target)) {
              dropdownContent.style.display = 'none';
            }
          });
        });

        // Get the edit_save_changes button by its ID
        const editSaveChangesButton = document.getElementById('edit_save_changes');

        // Function to show the modal
        function showModal() {
          // Get the modal element by its ID
          const modal = document.getElementById('save_edit_changes'); // Replace 'your_modal_id' with the actual ID of your modal element

          // Display the modal
          modal.style.display = 'block';

          // Set a timeout to hide the modal after 1000 milliseconds (1 second)
          setTimeout(function () {
            modal.style.display = 'none';
          }, 1000);
        }


        // Attach the showModal function to the button's click event
        editSaveChangesButton.addEventListener('click', showModal);


        // Get the edit_cancel_changes button by its ID
        const cancelChangesButton = document.getElementById('edit_cancel_changes');
        const returnBtn = document.getElementById('return_btn');
        const discardBtn = document.getElementById('discard_btn');
        // Function to show the modal
        function showDiscardModal() {
          // Get the modal element by its ID
          const discardmodal = document.getElementById('discardModal');

          // Display the modal
          discardmodal.style.display = 'block';

        }

        // Function to show the modal
        function hideDiscardModal() {
          // Get the modal element by its ID
          const discardmodal = document.getElementById('discardModal');

          // Display the modal
          discardmodal.style.display = 'none';

        }


        // Attach the showModal function to the button's click event
        cancelChangesButton.addEventListener('click', showDiscardModal);
        // close ng discard pop up
        returnBtn.addEventListener('click', hideDiscardModal);
        discardBtn.addEventListener('click', hideDiscardModal);


        // Add an event listener for the buttons inside dropdown-content
        document.querySelectorAll('.dropdown-content button').forEach(function (button) {
          button.addEventListener('click', function (event) {
            event.preventDefault();
            const action = this.getAttribute('data-action');
            if (action === 'AddStock') {
              // Handle the "Add Product" action here
              // Add your logic for this action
              // Hide the dropdown-content when the "Add Product" button is clicked
              const dropdownContent = this.parentElement;
              dropdownContent.style.display = 'none';

              // Show the "Review Product" modal
              const addProductModal = document.getElementById('Add_Product');
              addProductModal.style.display = 'block';

              // Add an event listener to close the modal when the close button is clicked
              const closeButton = addProductModal.querySelector('.close_addproduct');
              closeButton.addEventListener('click', function () {
                addProductModal.style.display = 'none';
              });
            }
            else if (action === 'View'){
              const add_inventory_header = document.getElementById('inventory_container');
              add_inventory_header.style.display = 'none';

              const view_product_container = document.getElementById('view_product_container');
              view_product_container.style.display = 'inline-flex';


              const dropdownContent = this.parentElement;
              dropdownContent.style.display = 'none';
            }
            else if (action === 'Edit') {
              const edit_prod_container = document.getElementById('edit_prod_container');
              const inventory_container = document.getElementById('inventory_container');
              inventory_container.style.display = 'none';
              edit_prod_container.style.display = 'inline-flex';

              const dropdownContent = this.parentElement;
              dropdownContent.style.display = 'none';
            }
            else if (action === 'Archive') {
              // Handle the "Archive" action here
              // Add your logic for this action
            }
          });
        });


      }



      // Prevent form submission if dates are not valid
      document.getElementById("add_product_form").addEventListener("submit", function (e) {
        e.preventDefault(); // Prevent the form from actually submitting

        // Validate the product description input
        handleProdDescriptionInput();


        const manufacturedDate = manufacturedDateInput.value;
        const expirationDate = expirationDateInput.value;
        const dateStocked = dateStockedInput.value;

        if (isFutureDate(manufacturedDate)) {
          alert("Please select a previous date for Manufactured Date.");
          e.preventDefault(); // Prevent form submission
        }

        if (isPastOrToday(expirationDate)) {
          alert("Please select a future date for product expiration.");
          e.preventDefault(); // Prevent form submission
        }

        if (isFutureDate(dateStocked)) {
          alert("Please select a current or previous date for Date Stocked.");
          e.preventDefault(); // Prevent form submission
        }

        // If all validations pass, show the table
        showTable();
        // show success modal after submit
        showSuccessModal();
        // show the add product button
        toggleAddProductButtonVisibility();



      });


      //----------------------------------------------------------------------------------//

      // Get a reference to the addProductButton
      const addProductButton = document.getElementById('add_Product_btn');
      const addNewProductModal = document.getElementById('add_Product_Modal');
      const closeNewModalButton = document.getElementById('close_add_new_product');



      // Function to show the add product modal
      function openAddProductModal() {
        addNewProductModal.style.display = 'block';
      }

      // Function to close the modal
      function closeAddProductModal() {
        addNewProductModal.style.display = 'none';
        resetModalInputs(); // Reset modal inputs when closing
      }


      // Event listener for opening the modal
      addProductButton.addEventListener('click', openAddProductModal);

      // Event listener for closing the modal
      closeNewModalButton.addEventListener('click', closeAddProductModal);


      const clear_add_product_btn = document.getElementById("clear_add_product_btn");

      const newManufacturedDateInput = document.getElementById('new_manufactured_date');
      const newExpirationDateInput = document.getElementById('new_expiration_date');
      const newDateStockedInput = document.getElementById('new_datestocked');
      const add_Product_Modal_form = document.querySelector(".add_Product_Modal_form");

      // Add a click event listener to the clear button
      clear_add_product_btn.addEventListener("click", function () {
        // Loop through all form elements and reset their values
        const newformElements = add_Product_Modal_form.elements;
        for (let i = 0; i < newformElements.length; i++) {
          const element = newformElements[i];
          const elementType = element.type.toLowerCase();

          // Check if the element is an input, select, or textarea
          if (
            elementType === "text" ||
            elementType === "select-one" ||
            elementType === "textarea" ||
            elementType === "date"
          ) {
            element.value = ""; // Reset the value
          }
        }
      });



      // Get references to the relevant elements
      const product_categorySelect = document.getElementById('product_category');
      const new_product_nameSelect = document.getElementById('new_product_name');

      // Define the options for medicine, vaccine, and vitamin
      const newMedicineOptions = ['Medicine 1', 'Medicine 2', 'Medicine 3'];
      const newVaccineOptions = ['Vaccine 1', 'Vaccine 2', 'Vaccine 3'];
      const newVitaminOptions = ['Vitamin 1', 'Vitamin 2', 'Vitamin 3'];


      // Initially disable the "Product Name" select element
      new_product_nameSelect.disabled = true;


      // Listen for changes in the product category selection
      product_categorySelect.addEventListener('change', function () {
        const newSelectedCategory = this.value;
        updateNewProductNameOptions(newSelectedCategory);

        // Enable the "Product Name" select element when a category is selected
        new_product_nameSelect.disabled = false;
      });


      // Function to update the product name select options based on the selected category
      function updateNewProductNameOptions(category) {
        // Clear existing options
        new_product_nameSelect.innerHTML = '<option value="" disabled selected>Select a Product Name</option>';

        let options = [];
        if (category === 'Medicine') {
          options = newMedicineOptions;
        } else if (category === 'Vaccine') {
          options = newVaccineOptions;
        } else if (category === 'Vitamin') {
          options = newVitaminOptions;
        }

        options.forEach(option => {
          const optionElement = document.createElement('option');
          optionElement.value = option;
          optionElement.textContent = option;
          new_product_nameSelect.appendChild(optionElement);
        });
      }

      // Listen for changes in the product category selection
      product_categorySelect.addEventListener('change', function () {
        const selectedCategory = this.value;
        updateNewProductNameOptions(selectedCategory);
      });

      function resetModalInputs() {
        const modalInputs = document.querySelectorAll(".add_Product_Modal_form input");
        modalInputs.forEach((input) => {
          input.value = "";
        });

        // Reset select elements
        const selectElements = document.querySelectorAll(".add_Product_Modal_form select");
        selectElements.forEach((select) => {
          select.selectedIndex = 0; // Reset to the first option (assuming the first option is the placeholder)
        });
      }



      // Function to restrict "batch_number" input to numbers 1 to 3
      function restrictNewBatchNumberInput(inputElement) {
        inputElement.addEventListener('input', function () {
          const inputValue = parseInt(this.value, 10);

          // Check if the input value is not a number or is outside the range 1 to 3
          if (isNaN(inputValue) || inputValue < 1 || inputValue > 3) {
            this.value = ''; // Clear the input value
          }
        });
      }

      // Get the "batch_number" input element by its ID
      const newbatchNumberInput = document.getElementById('new_batch_number');

      // Call the function to restrict input to numbers 1 to 3
      restrictNewBatchNumberInput(newbatchNumberInput);



      // Function to check if a date is in the future
      function isFutureDateNew(date) {
        const today = new Date();
        const newSelectedDate = new Date(date);
        return newSelectedDate > today;
      }

      // Function to check if a date is in the past or today
      function isPastOrTodayNew(date) {
        const today = new Date();
        const newSelectedDate = new Date(date);
        return newSelectedDate <= today;
      }


      // Set the maximum allowed date to today
      const newtoday = new Date();
      const newtodayString = newtoday.toISOString().split('T')[0];
      newManufacturedDateInput.max = newtodayString;
      newExpirationDateInput.min = newtodayString;
      newDateStockedInput.max = newtodayString;

      // Function to handle date selection for new_manufactured_date
      function handleNewManufacturedDateSelection() {
        const selectedDate = newManufacturedDateInput.value;
        if (isFutureDate(selectedDate)) {
          alert("Please select a previous date for Manufactured Date.");
          newManufacturedDateInput.value = ""; // Clear the input value
          newManufacturedDateInput.focus(); // Set focus back to the input
          return false;
        }
        // Set the default minimum date for datestocked to the new_manufactured_date
        newDateStockedInput.min = selectedDate;
        return true;
      }

      // Function to handle date selection for expiration_date
      function handleNewExpirationDateSelection() {
        const selectedDate = newExpirationDateInput.value;
        if (isPastOrToday(selectedDate)) {
          alert("Invalid! Product has already expired.");
          newExpirationDateInput.value = ""; // Clear the input value
          newExpirationDateInput.focus(); // Set focus back to the input
          return false;
        }
        return true;
      }

      // Function to handle date selection for datestocked
      function handleNewDateStockedSelection() {
        const selectedDate = newDateStockedInput.value;
        if (isFutureDate(selectedDate) || selectedDate < newManufacturedDateInput.value) {
          alert("Please select a date after Manufactured Date and up to the current date for Date Stocked.");
          newDateStockedInput.value = ""; // Clear the input value
          newDateStockedInput.focus(); // Set focus back to the input
          return false;
        }
        return true;
      }

      // Disable keyboard events for all date inputs
      const newdateInputs = [newManufacturedDateInput, newExpirationDateInput, newDateStockedInput];
      newdateInputs.forEach(input => {
        input.addEventListener('keydown', function (e) {
          e.preventDefault();
        });
      });

      // Add event listeners to the manufactured_date input
      newManufacturedDateInput.addEventListener('blur', function () {
        if (!handleNewManufacturedDateSelection()) {
          this.focus();
        }
      });


      newExpirationDateInput.addEventListener('blur', function () {
        if (!handleNewExpirationDateSelection()) {
          this.focus();
        }
      });

      dateStockedInput.addEventListener('blur', function () {
        if (!handleNewDateStockedSelection()) {
          this.focus();
        }
      });




      const newQuantityInput = document.getElementById('new_quantity');
      const newMinusButton = document.getElementById('quantity_minus');
      const newAddButton = document.getElementById('quantity_add');

      // Function to handle input validation for new_quantity
      function handleNewQuantityInput() {
        const inputValue = newQuantityInput.value;
        // Use a regular expression to check if the input contains only positive numbers
        if (/^[1-9]\d*$/.test(inputValue)) {
          // The input is a positive number, no action needed
        } else {
          alert("Please enter a valid positive number (1 and above).");
          newQuantityInput.value = '1'; // Reset the input value to 1
        }
      }

      // Add an input event listener to the new_quantity input
      newQuantityInput.addEventListener('input', handleNewQuantityInput);

      // Function to decrease quantity
      newMinusButton.addEventListener('click', function () {
        const currentValue = parseInt(newQuantityInput.value, 10);
        if (currentValue > 1) {
          newQuantityInput.value = (currentValue - 1).toString();
        }
      });

      // Function to increase quantity
      newAddButton.addEventListener('click', function () {
        const currentValue = parseInt(newQuantityInput.value, 10);
        newQuantityInput.value = (currentValue + 1).toString();
      });



      const newProdDescriptionInput = document.getElementById('new_prod_description');

      // Function to handle input validation for new_prod_description
      function handleNewProdDescriptionInput() {
        const inputValue = newProdDescriptionInput.value;
        // Use a regular expression to check if the input contains only alphabets, numerals, and spaces
        if (/^[A-Za-z0-9\s]*$/.test(inputValue)) {
          // Check if the input length exceeds the maximum allowed (253)
          if (inputValue.length > 253) {
            alert("Maximum length exceeded. Please limit your input to 253 characters.");
            newProdDescriptionInput.value = inputValue.slice(0, 253); // Truncate the input to the maximum length
          }
        } else {
          alert("Special characters are not allowed. Please use only alphabets and numerals.");
          newProdDescriptionInput.value = ''; // Clear the input value
        }
      }

      // Add an input event listener to the new_prod_description textarea
      newProdDescriptionInput.addEventListener('input', handleNewProdDescriptionInput);


      // Function to show the table container and populate the inventoryTable
      function addDataRow() {
        // Access the inventoryTableBody to add rows with input data
        const tableBody = document.getElementById('inventoryTableBody');
        const newproductCategory = document.getElementById('product_category').value;
        const newproductName = document.getElementById('new_product_name').value;
        const newquantity = parseInt(document.getElementById('new_quantity').value, 10);
        const newdateStocked = document.getElementById('new_datestocked').value;
        const newExpirationDateInput = document.getElementById('new_expiration_date').value;

        // Determine the status based on the input quantity
        var newstatus = newquantity === 0 ? 'Out of Stock' : newquantity <= 50 ? 'Low Stock' : 'In Stock';

        // Apply the status-specific styles
        var newstatusStyles = {
          'Out of Stock': {
            backgroundColor: '#DA534F',
            color: '#fff'
          },
          'Low Stock': {
            backgroundColor: '#FFA800',
            color: '#fff'
          },
          'In Stock': {
            backgroundColor: '#5CA500',
            color: 'var(--colors-main-neutral, #FFF)'
          }
        };

        // Create a new row and populate it with input data
        const addnewRow = document.createElement('tr');
        addnewRow.innerHTML = `
          <td><input type="checkbox"></td>
          <td>${newproductCategory}</td>
          <td>${newproductName}</td>
          <td>${newquantity}</td>
          <td>${newdateStocked}</td>
          <td>${newExpirationDateInput}</td>
          <td style="background-color: ${newstatusStyles[newstatus].backgroundColor}; color: ${newstatusStyles[newstatus].color};">${newstatus}</td>
          <td></td>
        `;

        // Append the new row to the table body
        tableBody.appendChild(addnewRow);

        showSuccessModal();
      }





      // Prevent form submission if dates are not valid
      document.getElementById("add_Product_Modal_form").addEventListener("submit", function (e) {
        e.preventDefault(); // Prevent the form from actually submitting
        const newManufacturedDate = newManufacturedDateInput.value;
        const newExpirationDate = newExpirationDateInput.value;
        const newDateStocked = newDateStockedInput.value;

        //validation din sa text area sa product desc
        handleNewProdDescriptionInput();

        if (isFutureDateNew(newManufacturedDate)) {
          alert("Please select a previous date for Manufactured Date.");
          e.preventDefault(); // Prevent form submission
          return; // Exit the function early to prevent further execution
        }

        if (isPastOrTodayNew(newExpirationDate)) {
          alert("Please select a future date for product expiration.");
          e.preventDefault(); // Prevent form submission
          return; // Exit the function early to prevent further execution
        }

        if (isFutureDateNew(newDateStocked)) {
          alert("Please select a current or previous date for Date Stocked.");
          e.preventDefault(); // Prevent form submission
          return; // Exit the function early to prevent further execution
        }

        addDataRow();
        closeAddProductModal(); // Close the modal after adding the data row
      });


      const prodQuantityInput = document.getElementById('prod_quantity');
      const prodQuantityMinusButton = document.getElementById('prod_quantity_minus');
      const prodQuantityAddButton = document.getElementById('prod_quantity_add');


      // Function to handle input validation for prod_quantity
      function handleProdQuantityInput() {
        const inputValue = prodQuantityInput.value;
        // Use a regular expression to check if the input contains only positive integers (1 and above)
        if (/^[1-9]\d*$/.test(inputValue)) {
          // Valid input, do nothing
        } else {
          alert("Invalid input. Please enter a positive number (1 and above).");
          prodQuantityInput.value = ''; // Clear the input value
        }
      }

      // Add an input event listener to the prod_quantity input
      prodQuantityInput.addEventListener('input', handleProdQuantityInput);

      // Function to handle quantity increment
      function incrementQuantity() {
        const currentValue = parseInt(prodQuantityInput.value);
        if (!isNaN(currentValue)) {
          prodQuantityInput.value = currentValue + 1;
        }
      }

      // Function to handle quantity decrement
      function decrementQuantity() {
        const currentValue = parseInt(prodQuantityInput.value);
        if (!isNaN(currentValue) && currentValue > 1) {
          prodQuantityInput.value = currentValue - 1;
        }
      }

      // Add click event listeners to the quantity buttons
      prodQuantityMinusButton.addEventListener('click', decrementQuantity);
      prodQuantityAddButton.addEventListener('click', incrementQuantity);

      const addStockSubmitBtn = document.getElementById('addStock_submit_btn');

      // Function to show the added stock modal and close the Add_Product modal
      function showSuccessAndCloseModal() {
        // Show the success modal
        const successAdd_stock = document.getElementById('successAdd_stock');
        successAdd_stock.style.display = 'block';

        // Close the Add_Product modal
        const addProduct = document.getElementById('Add_Product');
        addProduct.style.display = 'none';

        // Set a timeout to hide the success modal after a certain duration (e.g., 3 seconds)
        setTimeout(() => {
          successAdd_stock.style.display = 'none';
        }, 1000); // 1000 milliseconds (1 second) for the success modal to disappear
      }

      // Add a click event listener to the "Add Stock" button
      addStockSubmitBtn.addEventListener('click', showSuccessAndCloseModal);


      // Add an event listener to the "Cancel" button
      const addProduct_cancel_btn = document.getElementById('addProduct_cancel_btn');
      const addProduct = document.getElementById('Add_Product');


      addProduct_cancel_btn.addEventListener('click', function () {
        addProduct.style.display = 'none';
      });







      // Get all input elements by their IDs

      const product_codeInput = document.getElementById('product_code');
      const manufactured_dateInput = document.getElementById('manufactured_date');
      const expiration_dateInput = document.getElementById('expiration_date');
      const datestockedInput = document.getElementById('datestocked');

      const new_product_code = document.getElementById('new_product_code');
      const new_batch_number = document.getElementById('new_batch_number');



      const prod_codeInput = document.getElementById('prod_code');
      const Prod_batch_number = document.getElementById('Prod_batch_number');
      const Prod_manufactured_date = document.getElementById('Prod_manufactured_date');
      // Create a reusable function to update the 'value' attribute when input changes
      function updateValueAttribute(inputElement) {
        inputElement.addEventListener('input', () => {
          inputElement.setAttribute('value', inputElement.value);
        });
      }

      // Add the event listeners to all input fields
      updateValueAttribute(batchNumberInput);
      updateValueAttribute(product_codeInput);
      updateValueAttribute(manufactured_dateInput);
      updateValueAttribute(expiration_dateInput);
      updateValueAttribute(datestockedInput);

      updateValueAttribute(new_product_code);
      updateValueAttribute(new_batch_number);
      updateValueAttribute(newManufacturedDateInput);
      updateValueAttribute(newExpirationDateInput);
      updateValueAttribute(newDateStockedInput);



      updateValueAttribute(prod_codeInput);
      updateValueAttribute(Prod_batch_number);
      updateValueAttribute(Prod_manufactured_date);






    });
    </script>
<script>
    $(document).ready(function() {
      $('.viewButton').click(function() {
        var rowId = $(this).closest('tr').data('row-id');
        const product_type = $(this).data('product-type');
        const id = $(this).data('product-id');
        
        // Make an AJAX request to retrieve data
        $.ajax({
          type: 'GET',
          url: `/admin/inventory/view/${product_type}/${id}`,
          success: function(data) {
            // Update the HTML elements with the retrieved data
            $('.info_header_base h1').text(data.productInfo.item_name);
            $('.info_header_base p').text(data.productInfo.product_type);
            $('.batch_number p').text(data.productBatch.batch_no);
            $('.product_code p').text(data.productBatch.product_code);
            $('.manufactured_date p').text(data.productBatch.manufacturing_date);
            $('.expiration_date p').text(data.productBatch.expiration_date);
            $('.date_stocked p').text(data.productBatch.date_stocked);
          },
          error: function(xhr) {
            // Handle errors
            console.log(xhr.responseText);
          }
        });
      });
      $('#editButton').click(function() {
        // Get data attributes from the button
        const productType = $(this).data('product-type');
        const productId = $(this).data('product-id');

        const form = $(this).closest('tr').find('.edit_prod_form');
        // Set the values in the form fields
        form.find('.productTypeInput').val(productType);
        form.find('.productIdInput').val(productId);

        // Optionally, submit the form or perform any other action
        // $('#editForm').submit();
      });
      // $('#editButton').click(function () {
      //     var row = $(this).closest('tr');
      //     var product_type = $(this).data('product-type');
      //     var id = $(this).data('product-id');

      //     var batch_no = row.find('.batch_no').text();
      //     var product_code = row.find('.product_code').text();
      //     var manufacturing_date = row.find('.manufacturing_date').text();
      //     var expiration_date = row.find('.expiration_date').text();
      //     var date_stocked = row.find('.date_stocked').text();
      //     var quantity = row.find('.quantity').text();

      //     var editForm = $('#edit_prod_form');
      //     editForm.attr('action', `/admin/inventory/edit/${product_type}/${id}`);

      // });

    });
    
    document.querySelectorAll('#editButton').forEach(button => {
      button.addEventListener('click', function () {
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
  </script>

</body>

</html>
