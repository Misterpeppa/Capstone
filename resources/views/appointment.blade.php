<!DOCTYPE html>
<html lang="en">
<head>
    <title>Appointment Forms</title>
    @include('includes.head')  
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">

          <a class="navbar-brand" href="#">
            <img src="{{ asset('img/Frame%20416.png') }}" alt="Logo">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('landing') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Service</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('appointment_list') }}">Appointment</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="far fa-user-circle"></i>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">My Profile</a></li>
                  <li><a class="dropdown-item" href="#">My Pets</a></li>
                  <li><a class="dropdown-item" href="#">Settings</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
      </nav>
    </header>
    <main class="appointment">
      <div class="Appointment_forms_container">
        <div class="Appointment_form_heading d-flex flex-column text-center">
          <h1>BOOK AN</h1>
          <h2>APPOINTMENT</h2>
          <p>Please input complete and accurate details to secure a slot for your appointment.</p>
        </div>
        <div class="Appointment_multisteps-form__progress">
          <a class="btn Appointment_multisteps-form__progress-btn js-active" role="button" title="Form-1"></a>
          <a class="btn Appointment_multisteps-form__progress-btn" role="button" title="Form-2"></a>
          <a class="btn Appointment_multisteps-form__progress-btn" role="button" title="Form-3"></a>
        </div>

        <form id="form-1" class="Appointment_step-form mt-3">
          <h2>APPOINTMENT PREFERENCES</h2>



          <div class="appointment_preferences">
              <div class="input_container mb-3">
                <input type="text" name="petName" id="petName" placeholder="Pet Name" required oninput="restrictToAlphabetAndSpace(this)" onblur="checkInput(this)" data-id="petName" onclick="hideIconOnClick(this)">
                <div class="error-message" id="error-petName">Please enter pet name.</div>

              </div>

              <div class="form-row animal_breed mb-3">
                <div class="col">
                  <div class="input_container">
                    <select name="animal" id="animal" required onchange="checkInput(this)" onblur="checkInput(this)" data-id="animal" onclick="hideIconOnClick(this)" >
                      <option value="" disabled selected>Select a species</option>
                      <option value="Cat">Cat</option>
                      <option value="Dog">Dog</option>
                    </select>
                    <div class="error-message" id="error-animal">Please select a species.</div>
                  </div>
                </div>

                <div class="col">
                  <div class="input_container">
                    <div class="input_container">
                      <input type="text" name="breed" id="breed" disabled placeholder="Select a species first" required onblur="checkInput(this)" data-id="breed" onclick="hideIconOnClick(this)" disabled>
                      <div class="error-message" id="error-breed">Please select a breed.</div>
                      <datalist id="breed-list"></datalist>
                    </div>
                  </div>
                </div>
              </div>

              <div class="input_container mb-5">
                <select name="service" id="service" required onchange="checkInput(this)">
                    <option value="" disabled selected>Select a service</option>
                    <option value="Check-up">Check-up</option>
                    <option value="Deworming">Deworming</option>
                    <option value="Laboratory Exam">Laboratory Exam</option>
                    <option value="Surgery">Surgery</option>
                    <option value="Vaccination">Vaccination</option>
                </select>
                <div class="error-message" id="error-service">Please select a service.</div>
            </div>


            </div>
        
          <div class="form-row Appointment_form-bottom">
            <button id="nextButton" class="next Appointment_custom_btn" type="button" disabled>
              <div class="Appointment_custom_btn_base">
                Next
              </div>
            </button>
          </div>
        </form>

        <form id="form-2" class="Appointment_step-form mt-3">
          <!-- Form 2 -->
          <div class="Appointment_Details_Confirmation_Container_form2 mb-5"><!-- Div to show pet information -->
            <div class="Appointment_Details_Confirmation">
              <div class="Appointment_Deets_Heading">
                <h1>Appointment Preferences</h1>
              </div>
              <div class="Appointment_frame383">            
                <div class="Appointment_frame226">
                  <div class="Appointment_petName">
                    <p>Pet Name: </p>
                    <span id="display-petName"></span>
                  </div>
                  <div class="Appointment_species">
                    <p>Species: </p>
                    <span id="display-species"></span>
                  </div>
                  <div class="Appointment_breed">
                    <p>Breed: </p>
                    <span id="display-breed"></span>
                  </div>
                  <div class="Appointment_service">
                    <p>Service: </p>
                    <span id="display-service"></span>
                  </div>
                </div>
              </div>
            </div>                                      
          </div>
          <div class="row">
            <div class="Appointment_lalagyan">
              
              <div class="Appointment_wrapper mt-5">

                <div class="Appointment_calendar_header">
                  <label for="calendar">Select a date *</label>
                </div>
                <header>
                  
                  <div class="Appointment_icons">
                    <span id="prev"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="16" viewBox="0 0 10 16" fill="none">
                      <path d="M7 13.5794L2.40683 8.98622C1.86439 8.44378 1.86439 7.55614 2.40683 7.0137L7 2.42053" stroke="#1C1C1C" stroke-width="3" stroke-miterlimit="10" stroke-linecap="square" stroke-linejoin="round"/>
                    </svg></span>

                    <p class="current-date"></p>

                    <span id="next"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="19" viewBox="0 0 10 19" fill="none">
                      <path d="M2.40234 14.2388L6.99551 9.64565C7.53795 9.1032 7.53795 8.21557 6.99551 7.67312L2.40234 3.07996" stroke="#1C1C1C" stroke-width="3" stroke-miterlimit="10" stroke-linecap="square" stroke-linejoin="round"/>
                    </svg></span>
                  </div>
                </header>
                <div class="Appointment_calendar">
                  
                  <ul class="Appointment_weeks">
                    <li>Sun</li>
                    <li>Mon</li>
                    <li>Tue</li>
                    <li>Wed</li>
                    <li>Thu</li>
                    <li>Fri</li>
                    <li>Sat</li>
                  </ul>
                  <ul class="days"></ul>
                </div>
              </div>
              <div class="Appointment_time-picker mt-5 mb-5">
                <div class="Appointment_time-picker-header">
                  <label for="time-options">Select a time *</label>
                </div>
                <div class="Appointment_time-options" id="time-options">
                  <ul class="Appointment_time-options">
                    <li class="Appointment_time-option">
                      <input type="radio" id="time1" name="time" value="09:00 AM">
                      <label for="time1">09:00 AM</label>
                    </li>
                    <li class="Appointment_time-option">
                      <input type="radio" id="time2" name="time" value="09:30 AM">
                      <label for="time2">09:30 AM</label>
                    </li>
                    <li class="Appointment_time-option">
                      <input type="radio" id="time3" name="time" value="10:00 AM">
                      <label for="time3">10:00 AM</label>
                    </li>
                    <li class="Appointment_time-option">
                      <input type="radio" id="time4" name="time" value="10:30 AM">
                      <label for="time4">10:30 AM</label>
                    </li>
                    <li class="Appointment_time-option">
                      <input type="radio" id="time5" name="time" value="11:00 AM">
                      <label for="time5">11:00 AM</label>
                    </li>
                    <li class="Appointment_time-option">
                      <input type="radio" id="time6" name="time" value="11:30 AM">
                      <label for="time6">11:30 AM</label>
                    </li>
                    <li class="Appointment_time-option">
                      <input type="radio" id="time7" name="time" value="01:00 PM">
                      <label for="time7">01:00 PM</label>
                    </li>
                    <li class="Appointment_time-option">
                      <input type="radio" id="time8" name="time" value="01:30 PM">
                      <label for="time8">01:30 PM</label>
                    </li>
                    <li class="Appointment_time-option">
                      <input type="radio" id="time9" name="time" value="02:00 PM">
                      <label for="time9">02:00 PM</label>
                    </li>
                    <li class="Appointment_time-option">
                      <input type="radio" id="time10" name="time" value="02:30 PM">
                      <label for="time10">02:30 PM</label>
                    </li>
                    <li class="Appointment_time-option">
                      <input type="radio" id="time11" name="time" value="03:00 PM">
                      <label for="time11">03:00 PM</label>
                    </li>
                    <li class="Appointment_time-option">
                      <input type="radio" id="time12" name="time" value="03:30 PM">
                      <label for="time12">03:30 PM</label>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="form-row Appointment_forms-bottom-btns mb-3">
            <button class="previous Appointment_custom_prev_btn" type="button">
              <div class="Appointment_custom_prev_btn_base">
                Previous
              </div> 
            </button>
            <button id="nextButton" class="Next Appointment_custom_btn" type="button" disabled>
              <div class="Appointment_custom_btn_base">
                Next
              </div> 
            </button>
          </div>
        </form>

        <form id="form-3" class="Appointment_step-form mt-3" action="{{ route('appointments.store') }}" method="POST">
          @csrf
          <div class="Appointment_Details_Confirmation_Container_form3 mb-5"><!-- Div to show pet information -->
            <div class="Appointment_Details_Confirmation">
              <div class="Appointment_Deets_Heading">
                <h1>Appointment Details Confirmation</h1>
              </div>
              <div class="Appointment_frame383">            
                <div class="Appointment_frame226">
                  <div class="Appointment_petName">
                    <p>Pet Name: </p>
                    <span id="display-petName-summary"></span>
                  </div>
                  <div class="Appointment_species">
                    <p>Species: </p>
                    <span id="display-species-summary" name="petType" ></span>
                    <input type="hidden" name="petType" id="input-petType">
                  </div>
                  <div class="Appointment_breed">
                    <p>Breed: </p>
                    <span id="display-breed-summary" name="breed" ></span>
                    <input type="hidden" name="breed" id="input-breed">
                  </div>
                </div>

                <div class="Appointment_frame369">
                  <div class="Appointment_service">
                    <p>Service: </p>
                    <span id="display-service-summary" name="service" ></span>
                    <input type="hidden" name="service" id="input-service">
                  </div>
                  <div class="Appointment_Date">
                    <p>Date: </p>
                    <span id="appointment-date-summary" name="appointmentDate" ></span>
                    <input type="hidden" name="appointmentDate" id="input-appointmentDate">
                  </div>
                  <div class="Appointment_Time">
                    <p>Time: </p>
                    <span id="appointment-time-summary" name="appointmentTime" ></span>
                    <input type="hidden" name="appointmentTime" id="input-appointmentTime">
                  </div>
                </div>
              </div>
            </div>                                      
          </div>

          <div class="form-row Appointment_forms-bottom-btns">
            <button class="previous Appointment_custom_prev_btn" type="button">
              <div class="Appointment_custom_prev_btn_base">
                Previous
              </div> 
            </button>
              <button id="Appointment_custom_btn" class="Appointment_custom_btn" type="button">
                <div class="Appointment_custom_btn_base">
                  Submit
                </div>
              </button>             
          </div>

          <div class="modal fade custom-modal" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <div class="modal-icon_container">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                        <g clip-path="url(#clip0_4552_21079)">
                        <path d="M12 16L14.6667 18.6667L20 13.3333M4 16C4 17.5759 4.31039 19.1363 4.91345 20.5922C5.5165 22.0481 6.40042 23.371 7.51472 24.4853C8.62902 25.5996 9.95189 26.4835 11.4078 27.0866C12.8637 27.6896 14.4241 28 16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 14.4241 27.6896 12.8637 27.0866 11.4078C26.4835 9.95189 25.5996 8.62902 24.4853 7.51472C23.371 6.40042 22.0481 5.5165 20.5922 4.91345C19.1363 4.31039 17.5759 4 16 4C14.4241 4 12.8637 4.31039 11.4078 4.91345C9.95189 5.5165 8.62902 6.40042 7.51472 7.51472C6.40042 8.62902 5.5165 9.95189 4.91345 11.4078C4.31039 12.8637 4 14.4241 4 16Z" stroke="#5BB85A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_4552_21079">
                            <rect width="32" height="32" fill="white"/>
                        </clipPath>
                        </defs>
                    </svg>
                </div>
            </div>
            <div class="modal-body modal_text">
              <h1 class="success-heading">Complete appointment?</h1>
              <p class="success-message">Please make sure that all details are correct before proceeding.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="custom_cancel" id="custom_cancel">
                <div class="custom_cancel_base">Cancel</div>
              </button>
              <button type="submit" class="custom_confirm" id="custom_confirm">
                <div class="custom_confirm_base">Confirm</div>
              </button>
            </div>
          </div>
        </div>
      </div>


          

      </form>

      <div class="modal fade custom-modal" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="successModalLabel">
                <img src="{{ asset('img/success.png') }}" alt="Success Icon" class="success-icon">
              </h5>
            </div>
            <div class="modal-body text-center">
              <h3 class="success-heading">SUCCESS!</h3>
              <p class="success-message">Your appointment has been made! Please make sure to arrive 15 minutes before your scheduled time.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn custom-newAppointment" data-dismiss="modal"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <g clip-path="url(#clip0_2114_8716)" filter="url(#filter0_d_2114_8716)">
                  <path d="M12 5V19M5 12H19" stroke="#1C1C1C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </g>
                <defs>
                  <filter id="filter0_d_2114_8716" x="-2" y="0" width="28" height="28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                    <feOffset dy="2"/>
                    <feGaussianBlur stdDeviation="1"/>
                    <feComposite in2="hardAlpha" operator="out"/>
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2114_8716"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2114_8716" result="shape"/>
                  </filter>
                  <clipPath id="clip0_2114_8716">
                    <rect width="24" height="24" fill="white"/>
                  </clipPath>
                </defs>
              </svg>New Appointment</button>
              <button type="button" class="btn custom-viewAppointment" data-dismiss="modal"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <g clip-path="url(#clip0_1917_11628)">
                <path d="M16 3V7M8 3V7M4 11H20M11 15H12V18M4 7C4 6.46957 4.21071 5.96086 4.58579 5.58579C4.96086 5.21071 5.46957 5 6 5H18C18.5304 5 19.0391 5.21071 19.4142 5.58579C19.7893 5.96086 20 6.46957 20 7V19C20 19.5304 19.7893 20.0391 19.4142 20.4142C19.0391 20.7893 18.5304 21 18 21H6C5.46957 21 4.96086 20.7893 4.58579 20.4142C4.21071 20.0391 4 19.5304 4 19V7Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </g>
              <defs>
                <clipPath id="clip0_1917_11628">
                  <rect width="24" height="24" fill="white"/>
                </clipPath>
              </defs>
            </svg>View Appointments</button>
            </div>
          </div>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/calendar.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
  // Wait for the document to be ready
  document.addEventListener("DOMContentLoaded", function () {
    // Get references to the <span> elements
    const petTypeSpan = document.getElementById("display-species-summary");
    const breedSpan = document.getElementById("display-breed-summary");
    const appointmentTypeSpan = document.getElementById("display-service-summary");
    const appointmentDateSpan = document.getElementById("appointment-date-summary");
    const appointmentTimeSpan = document.getElementById("appointment-time-summary");

    // Get references to the hidden <input> elements
    const petTypeInput = document.getElementById("input-petType");
    const breedInput = document.getElementById("input-breed");
    const appointmentTypeInput = document.getElementById("input-service");
    const appointmentDateInput = document.getElementById("input-appointmentDate");
    const appointmentTimeInput = document.getElementById("input-appointmentTime");

    // Set the values of the hidden <input> elements to the values from the <span> elements
    document.getElementById("form-3").addEventListener("submit", function () {
      petTypeInput.value = petTypeSpan.innerText;
      breedInput.value = breedSpan.innerText;
      appointmentTypeInput.value = appointmentTypeSpan.innerText;
      appointmentDateInput.value = appointmentDateSpan.innerText;
      appointmentTimeInput.value = appointmentTimeSpan.innerText;
    });
  });
  </script>

    <script>
      function checkInput(inputElement) {
        const inputValue = inputElement.value.trim();
        const inputId = inputElement.getAttribute("data-id");
        const errorMessage = document.getElementById(`error-${inputId}`);

        if (inputValue === "") {
          inputElement.classList.add("Appointment_error-input"); // Corrected class name
          errorMessage.style.display = "block";
        } else {
          inputElement.classList.remove("Appointment_error-input"); // Corrected class name
          errorMessage.style.display = "none";
        }
      }
    </script>

    
  <script>
    document.getElementById("form-").addEventListener("submt", function(event) {
    event.preventDefault();
    const formData = new FormData(event.target);

    fetch('/appointment', {
        method: 'POST',
        body: formData
    })
    .then(response => {
        if (response.ok) {
            return response.json(); // Return JSON data if response is OK
        } else {
            throw new Error('Server response was not OK'); // Throw an error if response is not OK
        }
    })
    .then(data => {
        console.log('Response from server:', data);
        // Handle the response data as needed
        $('#successModal').modal('show'); // Show the modal after receiving a successful response
    })
    .catch(error => {
        console.error('Error sending data:', error);
        // Handle errors
    });
  });


    // Code to handle modal buttons (View Appointment and New Appointment) goes here
    document.addEventListener("DOMContentLoaded", function() {
        const newAppointmentButton = document.querySelector(".custom-newAppointment");
        const viewAppointmentsButton = document.querySelector(".custom-viewAppointment");

        newAppointmentButton.addEventListener("click", function() {
            // Redirect to the new appointment creation page
            window.location.href = "#";
        });

        viewAppointmentsButton.addEventListener("click", function() {
            // Redirect to the page displaying appointments
            window.location.href = "#";
        });
    });
  </script>

    
    <script>

    $(document).ready(function() {
      var currentForm = 1;
      showForm(currentForm);
      updateProgress(currentForm);

      $('.next').click(function(event) {
        event.preventDefault();
        if (currentForm < 3) {
          if (currentForm === 1 && !isForm1Complete()) {
            return; // Prevent moving to Form 2 if Form 1 is incomplete
          }
          if (currentForm === 2 && !isForm2Complete()) {
            return; // Prevent moving to Form 3 if Form 2 is incomplete
          }
          currentForm++;
          showForm(currentForm);
          updateProgress(currentForm);
        }
      });

      $('.Next').click(function(event) {
        event.preventDefault();
        if (currentForm < 3) {
          if (currentForm === 2 && !isForm2Complete()) {
            return; // Prevent moving to Form 3 if Form 2 is incomplete
          }
          currentForm++;
          showForm(currentForm);
          updateProgress(currentForm);
        }
      });

      $('.previous').click(function(event) {
        event.preventDefault();
        if (currentForm > 1) {
          currentForm--;
          showForm(currentForm);
          updateProgress(currentForm);
        }
      });



      function showForm(formIndex) {
        $('.Appointment_step-form').hide();
        $('#form-' + formIndex).show();
      }

      // Function to check Form 1 completion
      function isForm1Complete() {
          var allFieldsCompleted = true;
          $('#form-1 [required]').each(function() {
              if ($(this).is('input') && $(this).val() === '') {
                  allFieldsCompleted = false;
                  return false; // Exit the loop early
              } else if ($(this).is('select') && !$(this).val()) {
                  allFieldsCompleted = false;
                  return false; // Exit the loop early
              }
          });
          $('.next').prop('disabled', !allFieldsCompleted);
          return allFieldsCompleted;
      }

      // Check Form 1 completion on input change
      $('#form-1 [required]').on('input change', function() {
          isForm1Complete();
      });

          // Function to check Form 2 completion
          function isForm2Complete() {
              var selectedDate = selectedDayElement != null; // Check if a day is selected
              var selectedTime = $('input[name="time"]:checked').length > 0; // Check if a time is selected
              var form2Complete = selectedDate && selectedTime;
              $('.Next').prop('disabled', !form2Complete);
              return form2Complete;
          }

          // Check Form 2 completion on input change
          $('#form-2 .selected, #form-2 input[type="radio"]:checked').on('change', function() {
              isForm2Complete();
          });

          function updateProgress(formIndex) {
            // Remove 'js-active' class from all progress buttons and lines
            $('.Appointment_multisteps-form__progress-btn').removeClass('js-active');
            $('.Appointment_multisteps-form__progress-line').removeClass('js-active-line');

            // Add 'js-active' class to progress buttons and lines up to the current form
            for (var i = 1; i <= formIndex; i++) {
              $('.Appointment_multisteps-form__progress-btn[title="Form-' + i + '"]').addClass('js-active');
              if (i < formIndex) {
                $('.Appointment_multisteps-form__progress-line[title="Form-' + i + '"]').addClass('js-active-line');
              }
            }
          }

          // Get references to the input elements in form-1
          const petNameInput = document.getElementById('petName');
          const speciesInput = document.getElementById('animal');
          const breedInput = document.getElementById('breed');
          const serviceInput = document.getElementById('service');
          const timeInputs = document.querySelectorAll('input[name="time"]');
          


          // Get references to the display spans
          const displayPetName = document.getElementById('display-petName');
          const displayPetNameSummary = document.getElementById('display-petName-summary');
          const displaySpecies = document.getElementById('display-species');
          const displaySpeciesSummary = document.getElementById('display-species-summary');
          const displayBreed = document.getElementById('display-breed');
          const displayBreedSummary = document.getElementById('display-breed-summary');
          const displayService = document.getElementById('display-service');
          const displayServiceSummary = document.getElementById('display-service-summary');
          const displaySelectedDay = document.getElementById('appointment-date-summary');
          const displayTime = document.getElementById('appointment-time-summary');
    
          

          // Add an event listener to update the display spans when the inputs change
          petNameInput.addEventListener('input', updateDisplay);
          speciesInput.addEventListener('input', updateDisplay);
          breedInput.addEventListener('input', updateDisplay);
          serviceInput.addEventListener('input', updateDisplay);
          timeInputs.forEach(input => {
            input.addEventListener('change', updateDisplay);
          });

          function updateDisplay() {
            displayPetName.textContent = petNameInput.value || 'Pet\'s Name';
            displaySpecies.textContent = speciesInput.value || 'Species';
            displayBreed.textContent = breedInput.value || 'Breed';
            displayService.textContent = serviceInput.value || 'Service';
            displayPetNameSummary.textContent = petNameInput.value || 'Pet\'s Name';
            displaySpeciesSummary.textContent = speciesInput.value || 'Species';
            displayBreedSummary.textContent = breedInput.value || 'Breedd';
            displayServiceSummary.textContent = serviceInput.value || 'Service';
            // Update the selected day display span
            if (selectedDayElement && !selectedDayElement.classList.contains('disabled')) {
                displaySelectedDay.textContent = `${months[currMonth]} ${selectedDayElement.textContent}, ${currYear}`;
            } else {
                displaySelectedDay.textContent = '';
            }

            // Find the selected radio button
            const selectedInput = document.querySelector('input[name="time"]:checked');
            // Update the display span with the value of the selected radio button
            displayTime.textContent = selectedInput ? selectedInput.value : ''; 
            isForm2Complete();  
          }

    });
    </script>

    <script>
      function searchBreed(inputElement) {
    const datalist = document.getElementById("breed-list");
    const inputValue = inputElement.value.toLowerCase();

    const options = datalist.querySelectorAll("option");
    options.forEach(option => {
        const optionValue = option.value.toLowerCase();
        if (optionValue.includes(inputValue)) {
            option.style.display = "block";
        } else {
            option.style.display = "none";
        }
    });
}

    </script>
  <script>
    $(document).ready(function() {
      var breedOptions = {
        Cat:[
      'Abyssinian', 'American Bobtail', 'American Curl', 'American Shorthair', 'American Wirehair','Balinese', 'Bengal', 'Birman', 'Bombay', 'British Shorthair', 'Burmese', 'Chartreux', 'Chausie','Cornish Rex', 'Cymric', 'Devon Rex', 'Egyptian Mau', 'Exotic Shorthair', 'Havana Brown', 'Himalayan','Japanese Bobtail', 'Javanese', 'Korat', 'LaPerm', 'Maine Coon', 'Manx', 'Munchkin', 'Nebelung',
      'Norwegian Forest', 'Ocicat', 'Oriental', 'Persian', 'Pixiebob', 'Ragamuffin', 'Ragdoll','Russian Blue', 'Savannah', 'Scottish Fold', 'Selkirk Rex', 'Siamese', 'Siberian', 'Singapura','Snowshoe', 'Somali', 'Sphynx', 'Tonkinese', 'Turkish Angora', 'Turkish Van'
    ],

    Dog:[
      'Afghan Hound', 'Akita', 'Alaskan Malamute', 'American Bulldog', 'American Eskimo Dog','American Foxhound', 'American Pit Bull Terrier', 'American Staffordshire Terrier', 'Aspin','Australian Cattle Dog', 'Australian Shepherd', 'Basset Hound', 'Beagle', 'Bearded Collie',
      'Bernese Mountain Dog', 'Bichon Frise', 'Bloodhound', 'Border Collie', 'Boston Terrier','Boxer', 'Brittany', 'Bulldog', 'Bullmastiff', 'Cairn Terrier', 'Cavalier King Charles Spaniel','Chesapeake Bay Retriever', 'Chihuahua', 'Chinese Crested', 'Chow Chow', 'Cocker Spaniel',
      'Collie', 'Dachshund', 'Dalmatian', 'Doberman Pinscher', 'English Bulldog', 'English Cocker Spaniel','English Setter', 'French Bulldog', 'German Shepherd', 'Golden Retriever', 'Great Dane', 'Greyhound','Havanese', 'Irish Setter', 'Italian Greyhound', 'Jack Russell Terrier', 'Labrador Retriever',
      'Lhasa Apso', 'Maltese', 'Mastiff', 'Miniature Pinscher', 'Newfoundland', 'Old English Sheepdog','Papillon', 'Pekingese', 'Pomeranian', 'Poodle', 'Portuguese Water Dog', 'Pug', 'Rottweiler','Saint Bernard', 'Samoyed', 'Schnauzer', 'Scottish Terrier', 'Shetland Sheepdog', 'Shih Tzu',
      'Siberian Husky', 'Staffordshire Bull Terrier', 'Weimaraner', 'West Highland White Terrier',
      'Yorkshire Terrier'
    ],

    };

      $('#animal').change(function() {
        var selectedAnimal = $(this).val();
        var breedInput = $('#breed');
        var breedList = $('#breed-list');
        breedInput.val('');

        if (selectedAnimal in breedOptions) {
          breedList.empty();

          breedOptions[selectedAnimal].forEach(function(option) {
            breedList.append($('<option></option>').val(option).text(option));
          });

          breedInput.prop('disabled', false);
          breedInput.attr('list', 'breed-list');
        } else {
          breedInput.prop('disabled', true);
          breedInput.removeAttr('list');
        }
      });
    });
  </script>


<script>
        //para sa pet name input valdiation
        function restrictToAlphabetAndSpace(inputElement) {
            // Remove any non-alphabet and non-space characters
            inputElement.value = inputElement.value.replace(/[^a-zA-Z ]/g, '');
        }
    </script>

<script>
    $(document).ready(function() {
        // Assuming you have a reference to the modal element with an id 'confirmModal'
        var confirmModal = $('#confirmModal');

        // Function to show the modal
        function showConfirmModal() {
            if (confirmModal) {
                confirmModal.modal('show'); // Use Bootstrap's modal method to show the modal
            }
        }

        // Add a click event listener to the "Submit" button with id 'Appointment_custom_btn'
        var submitButton = document.getElementById('Appointment_custom_btn');
        if (submitButton) {
            submitButton.addEventListener('click', showConfirmModal);
        }

        // Add a click event listener to the "Cancel" button inside the modal
        $('#custom_cancel').on('click', function() {
            if (confirmModal) {
                confirmModal.modal('hide'); // Use Bootstrap's modal method to hide the modal
            }
        });

        // Add a click event listener to the "Confirm" button inside the modal
        $('#custom_confirm').on('click', function() {
            // Assuming you have a reference to the form with id 'form-3'
            var form = document.getElementById('form-3');
            if (form) {
                form.submit(); // Submit the form
                confirmModal.modal('hide'); // Close the modal after submitting the form
            }
        });
    });


  </script>


</body>
</html>