<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="icon" href="/img/dogs&cats.png" type="image/x-icon">
    <title>Admin | Dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:300,400,500,600,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bs-theme-overrides.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Multi-step-form.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Navbar-Centered-Links-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Toggle-Switch-toggle-switch.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Toggle-Switch.css') }}">

</head>

<body>
    <main class="d-flex flex-row container-fluid" style="padding: 0; margin: 0;">
    @php
    $activeTab = 'dashboard'; // Set the active tab
    @endphp
        @include('includes.admin_header')
        <div class="content">
            <div class="rectangle"><button class="btn notification" id="notification" type="button"><span class="notification_base"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="18" viewbox="0 0 15 18" fill="none"><path d="M2.29482 10.4791L2.93736 10.866L2.93903 10.8632L2.29482 10.4791ZM1.38031 11.998L0.737787 11.6112L0.737673 11.6113L1.38031 11.998ZM2.23916 14.328L1.99871 15.0385L2.00149 15.0394L2.23916 14.328ZM12.7918 14.328L12.5564 13.6159L12.5542 13.6167L12.7918 14.328ZM13.6507 11.998L14.2938 11.6121L14.2932 11.6112L13.6507 11.998ZM12.7362 10.4791L12.0864 10.854L12.0937 10.866L12.7362 10.4791ZM8.99065 2.00199L8.78522 2.7233C9.0594 2.80139 9.35415 2.71728 9.54583 2.50625C9.7375 2.29522 9.79296 1.99376 9.68894 1.72833L8.99065 2.00199ZM6.0483 2.00199L5.35001 1.72833C5.24599 1.99376 5.30145 2.29522 5.49313 2.50625C5.68481 2.71728 5.97955 2.80139 6.25374 2.7233L6.0483 2.00199ZM5.83359 16.3002L5.30286 16.8301L5.30326 16.8305L5.83359 16.3002ZM7.51948 1.02137C4.47306 1.02137 1.99811 3.49632 1.99811 6.54274H3.49811C3.49811 4.32475 5.30148 2.52137 7.51948 2.52137V1.02137ZM1.99811 6.54274V8.84096H3.49811V6.54274H1.99811ZM1.99811 8.84096C1.99811 8.99314 1.96284 9.22832 1.89124 9.48627C1.8197 9.74398 1.72858 9.96429 1.65061 10.0951L2.93903 10.8632C3.10759 10.5804 3.24311 10.2242 3.33658 9.88749C3.42999 9.551 3.49811 9.17386 3.49811 8.84096H1.99811ZM1.6523 10.0923L0.737787 11.6112L2.02284 12.3849L2.93735 10.866L1.6523 10.0923ZM0.737673 11.6113C0.34933 12.2568 0.264391 12.9889 0.507 13.6441C0.749283 14.2984 1.2894 14.7984 1.99871 15.0384L2.47961 13.6176C2.15512 13.5078 1.98351 13.3119 1.91366 13.1233C1.84415 12.9355 1.84668 12.6776 2.02295 12.3847L0.737673 11.6113ZM2.00149 15.0394C5.58318 16.236 9.44782 16.236 13.0295 15.0394L12.5542 13.6167C9.28099 14.7103 5.75001 14.7103 2.47682 13.6167L2.00149 15.0394ZM13.0272 15.0401C14.4485 14.5703 15.0644 12.8965 14.2938 11.6121L13.0076 12.3839C13.2867 12.849 13.0596 13.4496 12.5564 13.6159L13.0272 15.0401ZM14.2932 11.6112L13.3787 10.0923L12.0937 10.866L13.0082 12.3849L14.2932 11.6112ZM13.3858 10.1043C13.3086 9.97054 13.2183 9.7472 13.1473 9.48852C13.0762 9.22901 13.0408 8.99336 13.0408 8.84096H11.5408C11.5408 9.17364 11.6089 9.55031 11.7008 9.88524C11.7928 10.221 11.9252 10.5742 12.0865 10.8539L13.3858 10.1043ZM13.0408 8.84096V6.54274H11.5408V8.84096H13.0408ZM13.0408 6.54274C13.0408 3.50428 10.5579 1.02137 7.51948 1.02137V2.52137C9.72952 2.52137 11.5408 4.3327 11.5408 6.54274H13.0408ZM9.19608 1.28067C8.10014 0.968542 6.93882 0.968542 5.84287 1.28067L6.25374 2.7233C7.08111 2.48766 7.95784 2.48766 8.78522 2.7233L9.19608 1.28067ZM6.7466 2.27564C6.86777 1.96645 7.16863 1.75 7.51948 1.75V0.25C6.53434 0.25 5.69008 0.860583 5.35001 1.72833L6.7466 2.27564ZM7.51948 1.75C7.87033 1.75 8.17119 1.96645 8.29236 2.27564L9.68894 1.72833C9.34888 0.860583 8.50461 0.25 7.51948 0.25V1.75ZM9.15516 14.6143C9.15516 15.5122 8.41739 16.25 7.51948 16.25V17.75C9.24582 17.75 10.6552 16.3407 10.6552 14.6143H9.15516ZM7.51948 16.25C7.07487 16.25 6.65887 16.0648 6.36392 15.7699L5.30326 16.8305C5.86716 17.3944 6.65991 17.75 7.51948 17.75V16.25ZM6.36432 15.7703C6.05752 15.463 5.88477 15.0468 5.88379 14.6126L4.38379 14.616C4.38567 15.4465 4.71607 16.2425 5.30286 16.8301L6.36432 15.7703Z" fill="#1C1C1C"></path></svg></span></button>
                <div class="dropdown admin_btn"><button class="btn dropdown-toggle admin" aria-expanded="false" data-bs-toggle="dropdown" type="button"><img src="#"></button>
                    <div class="dropdown-menu"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
                </div>
            </div>
            <div class="main_content">
                <div id="dashboard_header" class="dashboard_header">
                    <div class="header_text_container">
                        <h1><strong>Welcome back</strong></h1>
                    </div><button class="btn add_patient_btn" id="add_patient_btn" type="button"><span class="add_patient_btn_base">Add Client</span></button>
                </div>
                <div id="summary_container" class="summary_container">
                    
                    <div class="card summary">
                        <div class="card-body">
                            <div class="card_body_img_container"><img src="{{ asset('assets/img/Asset%2017%201.png') }}"></div>
                            <div class="card_info_container">
                                <div class="card_body_summary">
                                    <div class="upper_part_summary">
                                        <div class="staff_icon_container"><div class="staff_icon"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
  <path d="M13.1616 0H5.61962C2.34362 0 0.390625 1.953 0.390625 5.229V12.771C0.390625 15.3 1.55162 17.037 3.59462 17.694C4.18862 17.901 4.87262 18 5.61962 18H13.1616C13.9086 18 14.5926 17.901 15.1866 17.694C17.2296 17.037 18.3906 15.3 18.3906 12.771V5.229C18.3906 1.953 16.4376 0 13.1616 0ZM17.0406 12.771C17.0406 14.697 16.2846 15.912 14.7636 16.416C13.8906 14.697 11.8206 13.473 9.39062 13.473C6.96062 13.473 4.89963 14.688 4.01763 16.416H4.00862C2.50563 15.93 1.74062 14.706 1.74062 12.78V5.229C1.74062 2.691 3.08162 1.35 5.61962 1.35H13.1616C15.6996 1.35 17.0406 2.691 17.0406 5.229V12.771Z" fill="#045B62"/>
  <path d="M9.39242 5.4C7.61042 5.4 6.17042 6.84 6.17042 8.622C6.17042 10.404 7.61042 11.853 9.39242 11.853C11.1744 11.853 12.6144 10.404 12.6144 8.622C12.6144 6.84 11.1744 5.4 9.39242 5.4Z" fill="#045B62"/>
</svg></div></div>
                                        <p><strong>Total Client</strong></p>
                                    </div>
                                    <div class="lower_part_summary"><span class="count_of_staff">Count: </span>
                                        <div class="staff_percentage_container"><span class="percentage_of_staff">{{ $clients }}</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card summary">
                        <div class="card-body">
                            <div class="card_body_img_container appointments"><img src="{{ asset('assets/img/image%208.png') }}"></div>
                            <div class="card_info_container">
                                <div class="card_body_summary">
                                    <div class="upper_part_summary">
                                        <div class="staff_icon_container"><div class="staff_icon"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
  <path d="M14.1406 2.00386V0.650602C14.1406 0.29494 13.8006 0 13.3906 0C12.9806 0 12.6406 0.29494 12.6406 0.650602V1.95181H6.14062V0.650602C6.14062 0.29494 5.80062 0 5.39062 0C4.98063 0 4.64062 0.29494 4.64062 0.650602V2.00386C1.94062 2.22072 0.630625 3.61735 0.430625 5.6906C0.410625 5.94217 0.650625 6.15036 0.930625 6.15036H17.8506C18.1406 6.15036 18.3806 5.93349 18.3506 5.6906C18.1506 3.61735 16.8406 2.22072 14.1406 2.00386ZM17.3906 7.45157H1.39062C0.840625 7.45157 0.390625 7.84193 0.390625 8.31904V13.6627C0.390625 16.2651 1.89062 18 5.39062 18H13.3906C16.8906 18 18.3906 16.2651 18.3906 13.6627V8.31904C18.3906 7.84193 17.9406 7.45157 17.3906 7.45157ZM12.2306 11.919L11.7306 12.3614H11.7206L8.69063 14.9899C8.56063 15.1027 8.29063 15.2241 8.10063 15.2414L6.75062 15.4149C6.26062 15.4757 5.92063 15.172 5.99063 14.7557L6.18062 13.5759C6.21063 13.4111 6.34062 13.1855 6.47062 13.0641L9.51062 10.4357L10.0106 9.99325C10.3406 9.70699 10.7106 9.4988 11.1106 9.4988C11.4506 9.4988 11.8206 9.63759 12.2306 9.99325C13.1306 10.774 12.8406 11.3899 12.2306 11.919Z" fill="#045B62"/>
</svg></div></div>
                                        <p><strong>Appointments</strong></p>
                                    </div>
                                    <div class="lower_part_summary"><span class="count_of_staff">Count</span>
                                        <div class="staff_percentage_container"><span class="percentage_of_staff">{{ $appointmentCount }}</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="dashboard_table_container" class="dashboard_table_container">
                    <div class="dashboard_table_header">
                        <h1>Appointments</h1><button class="btn dashboard_view_btn" type="button"><span class="dashboard_view_btn_base">View</span></button>
                    </div><table id="dashboard_table" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th><input id="SelectAll" type="checkbox" class="checkbox"></th>
                <th>No.</th>
                <th>Client</th>
                <th>Patient Info</th>
                <th>Date</th>
                <th>Time</th>
                <th>Surgery Type</th>
                <th>Action</th>
            </tr>
        </thead>
    <tbody id="dashboard_table_body" class="dashboard_table_body">
    @foreach ($appointment_approved as $index => $appointment)
        <tr>
        <td class="text-style"></td> 
        <td class="text-style">{{ $index + 1 }}</td>
        <td class="text-style">{{ $appointment->clients->first_name }} {{ $appointment->clients->last_name }}</td> 
        <td class="text-style">{{ $appointment['petType'] }} ({{ $appointment['breed'] }})</td>
        <td class="text-style">{{ $appointment['appointmentDate'] }}</td>
        <td>{{ \Carbon\Carbon::parse($appointment['appointmentTime'])->format('g:ia') }}</td>
        <td class="text-style">{{ $appointment['appointmentType'] }}</td>
        
        </tr>
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
                          <option value="2">2 items</option>
                          <option value="3">3 items</option>
                          <option value="4">4 items</option>
                          <option value="5">5 items</option>
                          <option value="6">6 items</option>
                        </select>
                </div>
              </div>
                </div>
            </div>
        </div>
    </main>
    <div class="modal fade" role="dialog" tabindex="-1" id="add_patient_modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title">Add Client</h1><button class="btn-close" aria-label="Close" data-bs-dismiss="modal" type="button"></button>
                </div>
                <div class="modal-body" style="width: 100%;">
                    <form action="{{ route('dashboard.client.store') }}" method="POST" id="add_client_form" class="add_client"><img src="{{ asset('assets/img/image%2011%20(1).png') }}">
                    @csrf
                        <div class="mb-3 input_container">
                            <div class="new_input_row">
                                <div class="form-floating" style="width:100%;">
                                <input class="form-control form-control form-control form-control" type="text" name="first_name" data-id="first_name" id="first_name" placeholder="First Name">
                                <label class="form-label form-label form-label form-label" for="first_name">First Name</label>
                                    <div id="error-first_name" class="error-message"><span>Please enter your first name.</span></div>
                                </div>
                                <div class="form-floating" style="width:100%;">
                                <input class="form-control form-control form-control form-control" type="text" name="middle_name" data-id="middle_name" id="middle_name" placeholder="Middle Name">
                                <label class="form-label form-label form-label form-label" for="middle_name">Middle Name</label>
                                    <div id="error-middle_name" class="error-message"><span>Please enter your middle name.</span></div>
                                </div>
                            </div>
                            <div class="new_input_row">
                                <div class="form-floating" style="width:100%;">
                                <input class="form-control form-control form-control form-control" type="text" name="last_name" data-id="last_name" id="last_name-1" placeholder="Last Name">
                                <label class="form-label form-label form-label form-label" for="last_name">Last Name</label>
                                    <div id="error-last_name-1" class="error-message"><span>Please enter your last name.</span></div>
                                </div>
                                <div class="form-floating" style="width:100%;">
                                <select class="form-select form-select form-select form-select" name="suffix" data-id="suffix" id="suffix-1">
                                        <option value="none" selected="">Select a Suffix</option>
                                        <option value="Jr">Jr</option>
                                        <option value="Sr">Sr</option>
                                        <option value="II">II</option>
                                        <option value="">Other</option>
                                    </select><label class="form-label form-label form-label form-label" for="suffix">Suffix</label>
                                    <div id="error-suffix-1" class="error-message"><span>Please select a suffix.</span></div>
                                </div>
                            </div>
                            <div class="form-floating" style="width:100%;">
                            <input class="form-control form-control form-control" id="client_birthdate" name="birthdate" data-id="manufactured_date" placeholder="Manufactured Date" type="date">
                            <label class="form-label form-label form-label" for="client_birthdate">Birthdate</label>
                                <div id="error-client_birthdate" class="error-message"><span>Please enter the manufactured date.</span></div>
                            </div>
                            <div class="form-floating" style="width:100%;">
                            <input class="form-control form-control form-control form-control" type="tel" name="phone" data-id="user_phone" id="user_phone" placeholder="Phone Number">
                            <label class="form-label form-label form-label form-label" for="user_phone">Phone Number</label>
                                <div id="error-user_phone" class="error-message"><span>Please enter a valid phone number.</span></div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer add_product_button"><button class="btn clear_form" type="button" role="button" aria-label="Clear Form" onclick="clearForm()"><span class="clear_form_base">Clear Form</span></button><button class="btn submit_product" id="submit_client" type="submit"><span class="submit_product_base">Submit</span></button></div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/bs-init.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets/js/Multi-step-form-script.js') }}"></script>

</body>

</html>