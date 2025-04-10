<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
    <title>Appointment Management</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}"> 

</head>

<body>
<x-app-layout>

    <main class="container">
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
                <div class="tab active" data-tab="approved">
                  <a href="#"><span id="refresh">Approved</span></a>
                </div>
                <div class="tab" data-tab="pending">
                <a href="#"><span id="refresh">Pending</span></a>
                </div>
                <div class="tab" data-tab="rejected">
                    <a href="#">Rejected
                    </a>
                </div>
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
                        <th>No.</th>
                        <th>Client</th>
                        <th> </th>
                        <th>Pet Type</th>
                        <th>Breed</th>
                        <th>Appointment Type</th>
                        <th>Appointment Date</th>
                        <th>Appointment Time</th>
                        <th> </th>
                      </tr>
                    </thead>
                    <tbody id="approvedTableBody">
                    <tbody>
        @foreach ($appointment_approve as $key => $approved)
            @if (isset($appointment_approve[$key]))
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $approved->first_name }} {{ $approved->last_name }}</td>
                    <td> </td>
                    <td>{{ $approved->petType }}</td>
                    <td>{{ $approved->breed }}</td>
                    <td>{{ $approved->appointmentType }}</td>
                    <td>{{ $approved->appointmentDate }}</td>
                    <td>{{ $approved->appointmentTime }}</td>
                </tr>
            @endif
        @endforeach
    </tbody>  <!-- Table rows will be dynamically generated here -->
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
                  
                </div>
                <div class="table-container">
                  <table>
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Client</th>
                        <th> </th>
                        <th>Pet Type</th>
                        <th>Breed</th>
                        <th>Appointment Type</th>
                        <th>Appointment Date</th>
                        <th>Appointment Time</th>
                        <th>Actions</th>
                        <th> </th>
                      </tr>
                    </thead>
                    <tbody id="pendingTableBody">
                    <tbody>
        @foreach ($appointment_pending as $key => $appointment)
            <tr id="row_{{ $appointment->id }}">
                <td>{{ $key + 1 }}</td>
                <td>{{ $appointment->first_name }} {{ $appointment->last_name }}</td>
                <td> </td>
                <td>{{ $appointment->petType }}</td>
                <td>{{ $appointment->breed }}</td>
                <td>{{ $appointment->appointmentType }}</td>
                <td>{{ $appointment->appointmentDate }}</td>
                <td>{{ $appointment->appointmentTime }}</td>
                <td>
                    <button class="approve-btn" data-id="{{ $appointment->id }}">Approve</button>
                    <button class="reject-btn" data-id="{{ $appointment->id }}">Reject</button>
                </td>
            </tr>
        @endforeach
    </tbody>   <!-- Table rows will be dynamically generated here -->
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
                        <th>No.</th>
                        <th>Client</th>
                        <th> </th>
                        <th>Pet Type</th>
                        <th>Breed</th>
                        <th>Appointment Type</th>
                        <th>Appointment Date</th>
                        <th>Appointment Time</th>
                        <th> </th>
                      </tr>
                    </thead>
                    <tbody id="rejectedTableBody">
                    <tbody>
        @foreach ($appointment_rejected as $key => $appointment)
        <tr id="row_{{ $appointment->id }}">
                <td>{{ $key + 1 }}</td>
                <td>{{ $appointment->first_name }} {{ $appointment->last_name }}</td>
                <td> </td>
                <td>{{ $appointment->petType }}</td>
                <td>{{ $appointment->breed }}</td>
                <td>{{ $appointment->appointmentType }}</td>
                <td>{{ $appointment->appointmentDate }}</td>
                <td>{{ $appointment->appointmentTime }}</td>
        @endforeach
    </tbody>
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

    <script src="{{ asset('js/appointment_multitabs.js')}}"></script>
    <script src="{{ asset('js/appointment_pagination.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    
<!-- Add the following script inside the HTML where you have the approve and reject buttons -->
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
                    alert(response.message);
                },
                error: function(error) {
                    alert('An error occurred while processing the request.');
                }
            });
        });
    });
    document.getElementById('refresh').addEventListener('click', function() {
            // Reload the page when the button is clicked
            window.location.reload();
        });
</script>

</x-app-layout>
</body>

</html>