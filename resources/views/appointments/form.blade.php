<!DOCTYPE html>
<html lang="en">
<head>
    <title>Appointment Forms</title>
    @include('includes.head')  
    <link href="{{ asset('css/multi-step-form.css') }}" rel="stylesheet">  
    <link href="{{ asset('css/calendar.css') }}" rel="stylesheet">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="{{ asset('img/Frame%20416.png') }}" alt="Logo">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
              <li class="nav-item">
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Service</a>
              </li>
              <li class="nav-item">
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
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="{{ route('clients.signin') }}">Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <div class="forms-container">
        <div class="form-heading d-flex flex-column text-center">
          <h1>BOOK AN</h1>
          <h1>APPOINTMENT</h1>
          <p>Please input complete and accurate details to secure a slot for your appointment.</p>
        </div>
        <div class="multisteps-form__progress">
          <a class="btn multisteps-form__progress-btn js-active" role="button" title="Form-1"></a>
          <a class="btn multisteps-form__progress-btn" role="button" title="Form-2"></a>
          <a class="btn multisteps-form__progress-btn" role="button" title="Form-3"></a>
        </div>
        <form id="form-1" class="step-form">
          <h2>APPOINTMENT PREFERENCES</h2>
            <div class = "form-row">
              <div class="col">
                <div class="input-field">
                  <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name" required>
                </div>
              </div>
            </div>
            <div class = "form-row">
              <div class="col">
                <div class="input-field">
                  <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name" required>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col">
                <div class="input-field">
                  <input type="text" class="form-control" name="petType" id="animal" list="animal-list" placeholder="Animal" required>
                </div>
                <datalist id="animal-list">
                  <option value="Cat">
                  <option value="Dog">
                </datalist>
              </div>
              <div class="col">
                <div class="input-field">
                  <input type="text" class="form-control" name="breed" id="breed" placeholder="Breed" required>
                  <datalist id="breed-list"></datalist>
                </div>
              </div>
            </div>

            <div class="form-row">
              <div class="col">
                <div class="input-field">
                  <input type="text" class="form-control" name="appointmentType" id="appointment-type" list="appointment-type-list" placeholder="Appointment Type" required>
                </div>
                <datalist id="appointment-type-list">
                  <option value="Check-up">
                  <option value="Vaccination">
                  <option value="Surgery">
                  <option value="Deworming">

                </datalist>
              </div>
            </div>

          <div class="form-row form-bottom">
            <button id="nextButton" class="next custom-btn" type="button" disabled>Next</button>
          </div>
        </form>

        <form id="form-2" class="step-form">
          <!-- Form 2 -->
          <div class="row">
            <div class="lalagyan">
              
              <div class="calendar">
                <div class="calendar-header">
                  <span class="year-change" id="pre-year">
                    &lt;
                  </span>
                  <div class="year-month-picker" id="year-month-picker">
                    <span class="month-picker" id="month-picker">June</span>
                    <span id="year">2023</span>
                  </div>
                  <span class="year-change" id="next-year">
                    &gt;
                  </span>
                </div>
                <div class="calendar-body">
                  <div class="calendar-week-days">
                    <div>Sun</div>
                    <div>Mon</div>
                    <div>Tue</div>
                    <div>Wed</div>
                    <div>Thu</div>
                    <div>Fri</div>
                    <div>Sat</div>
                  </div>
                  <div class="calendar-days" id="calendar-days"></div>
                </div>
                <div class="calendar-footer">
                  <div class="label-box">
                    <span class="label1">Selected Date</span>
                  </div>
                </div>
                <div class="month-list"></div>
              </div>
              <div class="time-picker">
                <div class="time-picker-header">
                </div>
                <div class="time-options" id="time-options">
                  <ul class="time-options">
                    <li class="time-option">
                      <input type="radio" id="time1" name="time" value="09:00 AM">
                      <label for="time1">09:00 AM</label>
                    </li>
                    <li class="time-option">
                      <input type="radio" id="time2" name="time" value="09:30 AM">
                      <label for="time2">09:30 AM</label>
                    </li>
                    <li class="time-option">
                      <input type="radio" id="time3" name="time" value="10:00 AM">
                      <label for="time3">10:00 AM</label>
                    </li>
                    <li class="time-option">
                      <input type="radio" id="time4" name="time" value="10:30 AM">
                      <label for="time4">10:30 AM</label>
                    </li>
                    <li class="time-option">
                      <input type="radio" id="time5" name="time" value="11:00 AM">
                      <label for="time5">11:00 AM</label>
                    </li>
                    <li class="time-option">
                      <input type="radio" id="time6" name="time" value="11:30 AM">
                      <label for="time6">11:30 AM</label>
                    </li>
                    <li class="time-option">
                      <input type="radio" id="time7" name="time" value="01:00 PM">
                      <label for="time7">01:00 PM</label>
                    </li>
                    <li class="time-option">
                      <input type="radio" id="time8" name="time" value="01:30 PM">
                      <label for="time8">01:30 PM</label>
                    </li>
                    <li class="time-option">
                      <input type="radio" id="time9" name="time" value="02:00 PM">
                      <label for="time9">02:00 PM</label>
                    </li>
                    <li class="time-option">
                      <input type="radio" id="time10" name="time" value="02:30 PM">
                      <label for="time10">02:30 PM</label>
                    </li>
                    <li class="time-option">
                      <input type="radio" id="time11" name="time" value="03:00 PM">
                      <label for="time11">03:00 PM</label>
                    </li>
                    <li class="time-option">
                      <input type="radio" id="time12" name="time" value="03:30 PM">
                      <label for="time12">03:30 PM</label>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="form-row forms-bottom-btns">
            <button class="previous custom-prev-btn" type="button">Previous</button>
            <button id="nextButton" class="Next custom-btn" type="button" disabled>Next</button>
          </div>
        </form>

        <form id="form-3" class="step-form" action="{{ route('appointments.store') }}" method="POST">
  @csrf
  <h2>APPOINTMENT DETAILS CONFIRMATION</h2>
  <div class="form-row">
  </div>
  <div class="form-row">
    <label for="submitted-firstname">First Name:</label>
    <span id="submitted-firstname" name="first_name"></span>
    <input type="hidden" name="first_name" id="input-first_name">
  </div>
  <div class="form-row">
    <label for="submitted-lastname">Last Name:</label>
    <span id="submitted-lastname" name="last_name"></span>
    <input type="hidden" name="last_name" id="input-last_name">
  </div>
  <div class="form-row">
    <label for="submitted-animal">Animal:</label>
    <span id="submitted-animal" name="petType"></span>
    <input type="hidden" name="petType" id="input-petType">
  </div>
  <div class="form-row">
    <label for="submitted-breed">Breed:</label>
    <span id="submitted-breed" name="breed"></span>
    <input type="hidden" name="breed" id="input-breed">
  </div>
  <div class="form-row">
    <label for="submitted-appointment-type">Appointment Type:</label>
    <span id="submitted-appointment-type" name="appointmentType"></span>
    <input type="hidden" name="appointmentType" id="input-appointmentType">
  </div>
  <div class="form-row">
    <label for="submitted-date">Date:</label>
    <span id="submitted-date" name="appointmentDate"></span>
    <input type="hidden" name="appointmentDate" id="input-appointmentDate">
  </div>
  <div class="form-row">
    <label for="submitted-time">Time:</label>
    <span id="submitted-time" name="appointmentTime"></span>
    <input type="hidden" name="appointmentTime" id="input-appointmentTime">
  </div>
  <div class="form-row forms-bottom-btns">
    <button class="previous custom-prev-btn" type="button">Previous</button>
    <button class="custom-btn" type="submit">Submit</button>
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
        <div class="container d-flex" style="height: 200px;">
            <div class="col d-lg-flex d-xl-flex d-xxl-flex justify-content-xl-start align-items-xl-center"><img class="flex-md-shrink-0 flex-lg-shrink-0 flex-xl-shrink-0 flex-xxl-shrink-0" src="{{ asset('img/dogs&cats.png') }}" width="167" height="149"></div>
            <div class="col"></div>
            <div class="col"></div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/calendar.js') }}"></script>

    <script>
  // Wait for the document to be ready
  document.addEventListener("DOMContentLoaded", function () {
    // Get references to the <span> elements
    const firstnameSpan = document.getElementById("submitted-firstname");
    const lastnameSpan = document.getElementById("submitted-lastname");
    const petTypeSpan = document.getElementById("submitted-animal");
    const breedSpan = document.getElementById("submitted-breed");
    const appointmentTypeSpan = document.getElementById("submitted-appointment-type");
    const appointmentDateSpan = document.getElementById("submitted-date");
    const appointmentTimeSpan = document.getElementById("submitted-time");

    // Get references to the hidden <input> elements
    const firstnameInput = document.getElementById("input-first_name");
    const lastnameInput = document.getElementById("input-last_name");
    const petTypeInput = document.getElementById("input-petType");
    const breedInput = document.getElementById("input-breed");
    const appointmentTypeInput = document.getElementById("input-appointmentType");
    const appointmentDateInput = document.getElementById("input-appointmentDate");
    const appointmentTimeInput = document.getElementById("input-appointmentTime");

    // Set the values of the hidden <input> elements to the values from the <span> elements
    document.getElementById("form-3").addEventListener("submit", function () {
      firstnameInput.value = firstnameSpan.innerText;
      lastnameInput.value = lastnameSpan.innerText;
      petTypeInput.value = petTypeSpan.innerText;
      breedInput.value = breedSpan.innerText;
      appointmentTypeInput.value = appointmentTypeSpan.innerText;
      appointmentDateInput.value = appointmentDateSpan.innerText;
      appointmentTimeInput.value = appointmentTimeSpan.innerText;
    });
  });
</script>


    <script>
      $(document).ready(function() {
        // When the form is submitted, show the success modal
        $('#form-').submit(function(event) {
          event.preventDefault();

          // Perform any additional validation or AJAX requests here if needed

          // Show the success modal
          $('#successModal').modal('show');
        });
      });
    </script>
    
    <script>
      $(document).ready(function() {
      var currentForm = 1;
      showForm(currentForm);

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
        $('.step-form').hide();
        $('#form-' + formIndex).show();

        if (formIndex === 3) {
          // Retrieve data from Form 1
          var firstname = $('#first_name').val();
          var lastname = $('#last_name').val();
          var animal = $('#animal').val();
          var breed = $('#breed').val();
          var appointmentType = $('#appointment-type').val();
          var service = $('#service').val();

          // Retrieve data from Form 2
          var selectedDate = $('#submitted-date').text();
          var selectedTime = $('input[name="time"]:checked').val();

          // Display the submitted data on Form 3
          $('#submitted-firstname').text(firstname);
          $('#submitted-lastname').text(lastname);
          $('#submitted-animal').text(animal);
          $('#submitted-breed').text(breed);
          $('#submitted-appointment-type').text(appointmentType);
          $('#submitted-service').text(service);
          $('#submitted-date').text(selectedDate);
          $('#submitted-time').text(selectedTime);
        }
      }

      // Function to check Form 1 completion
      function isForm1Complete() {
        var allFieldsCompleted = true;
        $('#form-1 input[required]').each(function() {
          if ($(this).val() === '') {
            allFieldsCompleted = false;
            return false; // Exit the loop early
          }
        });
        $('.next').prop('disabled', !allFieldsCompleted);
        return allFieldsCompleted;
      }

      // Check Form 1 completion on input change
      $('#form-1 input[required]').on('input', function() {
        isForm1Complete();
      });

      // Function to check Form 2 completion
      function isForm2Complete() {
          var selectedDate = $('#selected-date-input').val();
          var selectedTime = $('input[name="time"]:checked').length;
          var form2Complete = selectedDate !== '' && selectedTime > 0;
          $('.Next').prop('disabled', !form2Complete);
          return form2Complete;
        }


      // Check Form 2 completion on input change
      $('#form-2 input, #form-2 input[type="radio"]').on('change', function() {
        isForm2Complete();
      });

      function updateProgress(formIndex) {
        // Remove 'js-active' class from all progress buttons and lines
        $('.multisteps-form__progress-btn').removeClass('js-active');
        $('.multisteps-form__progress-line').removeClass('js-active-line');

        // Add 'js-active' class to progress buttons and lines up to the current form
        for (var i = 1; i <= formIndex; i++) {
          $('.multisteps-form__progress-btn[title="Form-' + i + '"]').addClass('js-active');
          if (i < formIndex) {
            $('.multisteps-form__progress-line[title="Form-' + i + '"]').addClass('js-active-line');
          }
        }
      }
    });

    </script>

    <script>
    $(document).ready(function() {
      var breedOptions = {
        Cat:[
      'Abyssinian', 'American Bobtail', 'American Curl', 'American Shorthair', 'American Wirehair',
      'Balinese', 'Bengal', 'Birman', 'Bombay', 'British Shorthair', 'Burmese', 'Chartreux', 'Chausie',
      'Cornish Rex', 'Cymric', 'Devon Rex', 'Egyptian Mau', 'Exotic Shorthair', 'Havana Brown', 'Himalayan',
      'Japanese Bobtail', 'Javanese', 'Korat', 'LaPerm', 'Maine Coon', 'Manx', 'Munchkin', 'Nebelung',
      'Norwegian Forest', 'Ocicat', 'Oriental', 'Persian', 'Pixiebob', 'Ragamuffin', 'Ragdoll',
      'Russian Blue', 'Savannah', 'Scottish Fold', 'Selkirk Rex', 'Siamese', 'Siberian', 'Singapura',
      'Snowshoe', 'Somali', 'Sphynx', 'Tonkinese', 'Turkish Angora', 'Turkish Van'
    ],

    Dog:[
      'Afghan Hound', 'Akita', 'Alaskan Malamute', 'American Bulldog', 'American Eskimo Dog',
      'American Foxhound', 'American Pit Bull Terrier', 'American Staffordshire Terrier', 'Aspin',
      'Australian Cattle Dog', 'Australian Shepherd', 'Basset Hound', 'Beagle', 'Bearded Collie',
      'Bernese Mountain Dog', 'Bichon Frise', 'Bloodhound', 'Border Collie', 'Boston Terrier',
      'Boxer', 'Brittany', 'Bulldog', 'Bullmastiff', 'Cairn Terrier', 'Cavalier King Charles Spaniel',
      'Chesapeake Bay Retriever', 'Chihuahua', 'Chinese Crested', 'Chow Chow', 'Cocker Spaniel',
      'Collie', 'Dachshund', 'Dalmatian', 'Doberman Pinscher', 'English Bulldog', 'English Cocker Spaniel',
      'English Setter', 'French Bulldog', 'German Shepherd', 'Golden Retriever', 'Great Dane', 'Greyhound',
      'Havanese', 'Irish Setter', 'Italian Greyhound', 'Jack Russell Terrier', 'Labrador Retriever',
      'Lhasa Apso', 'Maltese', 'Mastiff', 'Miniature Pinscher', 'Newfoundland', 'Old English Sheepdog',
      'Papillon', 'Pekingese', 'Pomeranian', 'Poodle', 'Portuguese Water Dog', 'Pug', 'Rottweiler',
      'Saint Bernard', 'Samoyed', 'Schnauzer', 'Scottish Terrier', 'Shetland Sheepdog', 'Shih Tzu',
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


</body>
</html>
