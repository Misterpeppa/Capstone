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
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:300,400,500,600,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('assets/css/Bootstrap-4-Custom-Radio.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Multi-step-form.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Navbar-Centered-Links-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pagination.css') }}">

</head>

<body>
<main class="d-flex flex-row container-fluid" style="padding: 0;">
    @php
        $activeTab = 'appointment'; // Set the active tab
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
                  <img src="#" >
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
                        <td class="text-style">{{ $appointment['appointmentDate'] }} | {{ $appointment['appointmentTime'] }}</td>
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
                    <button class="accept-button"></button>
                    <button class="reject-button"></button>
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
                        <td class="text-style">{{ $appointment['appointmentDate'] }} | {{ $appointment['appointmentTime'] }}</td>
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
                        <td class="text-style">{{ $appointment['appointmentDate'] }} | {{ $appointment['appointmentTime'] }}</td>
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
    <script src="{{ asset('js/admin/appointment_multitabs.js')}}"></script>
    <script src="{{ asset('js/admin/appointment_pagination.js')}}"></script>
    <script src="{{ asset('js/sidebar.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/appointmentforms.js') }}"></script>
    <script src="{{ asset('assets/js/calendar.js') }}"></script>
    <script src="{{ asset('assets/js/inventory.js') }}"></script>
    <script src="{{ asset('assets/js/Multi-step-form-script.js') }}"></script>
    
  

</body>

</html>