<!DOCTYPE html>
<html lang="en">

<head>
    <title>Appointment List</title>
    @include('includes.head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/user/appointmentList.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">  
</head>


<body>
    @include('includes.user_header')
    <main>
        <div class="container text-center appointmentList_custom-container mb-5">
            <div class="appointmentList_content_header">
                <div class="appointmentList_header text-start">
                    <h1>My Appointments</h1>
                    <p>View your upcoming and pass appointments here.</p>
                </div>
                <a href="{{ route('appointment.form') }}" class="btn appointmentList_custom_button" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <g clip-path="url(#clip0_2295_6343)" filter="url(#filter0_d_2295_6343)">
                    <path d="M12 5V19M5 12H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </g>
                    <defs>
                    <filter id="filter0_d_2295_6343" x="-2" y="0" width="28" height="28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                        <feOffset dy="2"/>
                        <feGaussianBlur stdDeviation="1"/>
                        <feComposite in2="hardAlpha" operator="out"/>
                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2295_6343"/>
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2295_6343" result="shape"/>
                    </filter>
                    <clipPath id="clip0_2295_6343">
                        <rect width="24" height="24" fill="white"/>
                    </clipPath>
                    </defs>
                </svg> New Appointment
                </a>


            </div>
            <ul class="nav appointmentList_nav_tabs nav-tabs mb-4" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" data-tab="upcoming" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="true">
                        Upcoming <span class="counter counter-upcoming" id="upcoming-counter"></span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" data-tab="history" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="false">
                        History <span class="counter counter-recent" id="history-counter"></span>
                    </button>
                </li>
            </ul>

            <div class="appointmentList_tab_content tab-content" id="myTabContent">
                <div class="tab-pane appointmentList_custom-tab fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab" data-index="0">
                    <table class="appointmentList_appointment_table" id="upcomingTable">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Patient Info</th>
                                <th>Appointment</th>
                                <th>Service</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody id="upcomingTable">
                        @foreach ($appointments as $index => $appointment)
                            <tr>
                            <td class="text-style">{{ $index + 1 }}</td>
                            <td class="text-style">{{ $appointment['petType'] }} ({{ $appointment['breed'] }})</td>
                            <td class="text-style">{{ $appointment['appointmentDate'] }} ( {{ \Carbon\Carbon::parse($appointment['appointmentTime'])->format('g:ia') }})</td>
                            <td class="text-style">{{ $appointment['appointmentType'] }}</td>
                            </tr> 
                        @endforeach    <!-- Data for tab1 will be populated dynamically -->
                        </tbody>
                    </table>
                </div>

                <div class="tab-pane appointmentList_custom-tab fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab" data-index="1">
                    <table class="appointmentList_appointment_table" id="history">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Patient Info</th>
                                <th>Appointment</th>
                                <th>Service</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="historyTable">
                           <!-- Data for tab2 will be populated dynamically -->
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </main>


    <footer class="d-flex align-items-center" style="background: rgba(4,91,98,0.1);height: 200px;">
        <div class="d-flex" style="height: 200px;">
            <div class="col d-lg-flex d-xl-flex d-xxl-flex justify-content-xl-start align-items-xl-center"><img class="flex-md-shrink-0 flex-lg-shrink-0 flex-xl-shrink-0 flex-xxl-shrink-0" src="{{ asset('img/dogs&cats.png') }}" width="167" height="149"></div>
            <div class="col"></div>
            <div class="col"></div>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    function countDataRows() {
        var upcomingRowCount = $('#upcomingTable tbody tr').length;
        var historyRowCount = $('#historyTable tbody tr').length;

        // Update the counters with the counts
        $('#upcoming-counter').text(upcomingRowCount);
        $('#history-counter').text(historyRowCount);
    }

    // Call the function when needed, for example, on page load
    $(document).ready(function() {
        countDataRows();
    });

    </script>

 
</body>

</html>