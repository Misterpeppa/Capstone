document.addEventListener('DOMContentLoaded', function () {
  var add_patient_btn = document.getElementById('add_patient_btn');
  var add_patient_modal = new bootstrap.Modal(document.getElementById('add_patient_modal'));
  var submit_client = document.getElementById('submit_client');

  

  
  add_patient_btn.addEventListener('click', function () {
    add_patient_modal.show();
  });
    
    
    submit_client.addEventListener('click', function () {
         submitClient();
    modal.hide();



  });
    
    
    
  
    
function submitClient() {

            // Get form values    
            var firstName = document.getElementById("first_name").value;
            var middleName = document.getElementById("middle_name").value;
            var lastName = document.getElementById("last_name").value;
            var suffix = document.getElementById("suffix").value;
            var birthdate = document.getElementById("client_birthdate").value;
            var address = document.getElementById("client_address").value;
            var user_phone = document.getElementById('user_phone').value;

            // Create a new table row
            var table = document.getElementById('dashboard_table_body');
            var newRow = table.insertRow(table.rows.length);
            var cellCheckbox = newRow.insertCell(0);
            var cellNumber = newRow.insertCell(1);
            var cellClient = newRow.insertCell(2);
            var cellBirthdate = newRow.insertCell(3);
            var cellAddress = newRow.insertCell(4);
            var cellPhoneNumber = newRow.insertCell(5);
            var cellSurgeryType = newRow.insertCell(6);
            var cellAction = newRow.insertCell(7);

            // Set cell values
            cellCheckbox.innerHTML = '<input type="checkbox" class="checkbox">';
            cellNumber.innerHTML = table.rows.length - 1;
            cellClient.innerHTML = firstName + ' ' + middleName + ' ' + lastName + ' ' + suffix;
            cellBirthdate.innerHTML = birthdate;
            cellAddress.innerHTML = address;
            cellPhoneNumber.innerHTML = phoneNumber;
            // Add your logic to set the values for Surgery Type

            // Create the dropdown button and dropdown content
    var dropdownContainer = document.createElement('div');
    dropdownContainer.className = 'dropdown';

    var dropbtn = document.createElement('button');
    dropbtn.className = 'dropbtn';
    dropbtn.innerHTML = '<span>Action</span>';

var dropdownContent = document.createElement('div');
dropdownContent.className = 'dropdown-content';
dropdownContent.innerHTML = `
    <!-- Group 1 -->
    <div class="button-group">
        <button data-action="Accept"><div class="action_button_text"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g clip-path="url(#clip0_5624_22261)">
    <path d="M5 12L10 17L20 7" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_5624_22261">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg> Accept</div></button>
        <button data-action="Reject"><div class="action_button_text"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g clip-path="url(#clip0_5624_22390)">
    <path d="M18 6L6 18M6 6L18 18" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_5624_22390">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg> Reject</div></button>
        <button data-action="Reschedule"><div class="action_button_text"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g clip-path="url(#clip0_5624_22376)">
    <path d="M15.5 12H12V7M3 12C3 13.1819 3.23279 14.3522 3.68508 15.4442C4.13738 16.5361 4.80031 17.5282 5.63604 18.364C6.47177 19.1997 7.46392 19.8626 8.55585 20.3149C9.64778 20.7672 10.8181 21 12 21C13.1819 21 14.3522 20.7672 15.4442 20.3149C16.5361 19.8626 17.5282 19.1997 18.364 18.364C19.1997 17.5282 19.8626 16.5361 20.3149 15.4442C20.7672 14.3522 21 13.1819 21 12C21 10.8181 20.7672 9.64778 20.3149 8.55585C19.8626 7.46392 19.1997 6.47177 18.364 5.63604C17.5282 4.80031 16.5361 4.13738 15.4442 3.68508C14.3522 3.23279 13.1819 3 12 3C10.8181 3 9.64778 3.23279 8.55585 3.68508C7.46392 4.13738 6.47177 4.80031 5.63604 5.63604C4.80031 6.47177 4.13738 7.46392 3.68508 8.55585C3.23279 9.64778 3 10.8181 3 12Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_5624_22376">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg> Reschedule</div></button>
    </div>
    
    <!-- Line break -->
    <div class="line-break"><svg xmlns="http://www.w3.org/2000/svg" width="166" height="2" viewBox="0 0 166 2" fill="none">
  <path d="M1 1H165" stroke="black" stroke-opacity="0.3" stroke-width="0.8" stroke-linecap="square"/>
</svg></div>
    
    <!-- Group 2 -->
    <div class="button-group">
        <button data-action="View"><div class="action_button_text"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g clip-path="url(#clip0_5624_22297)">
    <path d="M10 12C10 12.5304 10.2107 13.0391 10.5858 13.4142C10.9609 13.7893 11.4696 14 12 14C12.5304 14 13.0391 13.7893 13.4142 13.4142C13.7893 13.0391 14 12.5304 14 12C14 11.4696 13.7893 10.9609 13.4142 10.5858C13.0391 10.2107 12.5304 10 12 10C11.4696 10 10.9609 10.2107 10.5858 10.5858C10.2107 10.9609 10 11.4696 10 12Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M21 12C18.6 16 15.6 18 12 18C8.4 18 5.4 16 3 12C5.4 8 8.4 6 12 6C15.6 6 18.6 8 21 12Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_5624_22297">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg> View</div></button>
        <button data-action="Edit"><div class="action_button_text"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g clip-path="url(#clip0_5624_22180)">
    <path d="M13.5 6.5L17.5 10.5M4 20.0001H8L18.5 9.50006C19.0304 8.96963 19.3284 8.2502 19.3284 7.50006C19.3284 6.74991 19.0304 6.03049 18.5 5.50006C17.9696 4.96963 17.2501 4.67163 16.5 4.67163C15.7499 4.67163 15.0304 4.96963 14.5 5.50006L4 16.0001V20.0001Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_5624_22180">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg> Edit</div></button>
        <button data-action="Archive"><div class="action_button_text"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g clip-path="url(#clip0_5624_22046)">
    <path d="M19 8C19.5304 8 20.0391 7.78929 20.4142 7.41421C20.7893 7.03914 21 6.53043 21 6C21 5.46957 20.7893 4.96086 20.4142 4.58579C20.0391 4.21071 19.5304 4 19 4H5C4.46957 4 3.96086 4.21071 3.58579 4.58579C3.21071 4.96086 3 5.46957 3 6C3 6.53043 3.21071 7.03914 3.58579 7.41421C3.96086 7.78929 4.46957 8 5 8M19 8H5M19 8V18C19 18.5304 18.7893 19.0391 18.4142 19.4142C18.0391 19.7893 17.5304 20 17 20H7C6.46957 20 5.96086 19.7893 5.58579 19.4142C5.21071 19.0391 5 18.5304 5 18V8M10 12H14" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_5624_22046">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg> Archive</div></button>
    </div>
`;

// Add a class for styling the line break
var lineBreak = document.createElement('div');
lineBreak.className = 'line-break';

// Append the line break element to the dropdown content
dropdownContent.appendChild(lineBreak);


// Add a class for styling the line break
var lineBreak = document.createElement('div');
lineBreak.className = 'line-break';

// Append the line break element to the dropdown content
dropdownContent.appendChild(lineBreak);


    // Append elements
    dropdownContainer.appendChild(dropbtn);
    dropdownContainer.appendChild(dropdownContent);
    cellAction.appendChild(dropdownContainer);

    // Clear form fields
    document.getElementById('add_client_form').reset();

          // Toggle the visibility of dropdown-content when the Actions button is clicked
    // Toggle the visibility of dropdown-content when the Actions button is clicked
document.querySelectorAll('.dropbtn').forEach(function (button) {
    button.addEventListener('click', function (event) {
        event.stopPropagation(); // Prevent the click event from propagating
        const content = this.nextElementSibling;
        content.style.display = (content.style.display === 'flex') ? 'none' : 'flex';
    });
});

}


});

    
    
    


function setupDateValidation(inputId) {
    const today = new Date();
    const maxDate = new Date(today.getFullYear() - 18, today.getMonth(), today.getDate()).toISOString().split('T')[0];
    const minDate = new Date(today.getFullYear() - 100, today.getMonth(), today.getDate()).toISOString().split('T')[0];

    const dateInput = document.getElementById(inputId);
    dateInput.setAttribute('max', maxDate);
    dateInput.setAttribute('min', minDate);

    dateInput.addEventListener('change', function () {
        let selectedDate = new Date(this.value);
        if (selectedDate > today || selectedDate < new Date(today.getFullYear() - 100, today.getMonth(), today.getDate())) {
            this.value = '';
            alert('Please select a date between 18 and 100 years ago.');
        }
        // Additional validation or action can be added here if needed
    });

    dateInput.addEventListener('keydown', function (e) {
        e.preventDefault();
    });
}

// Example usage for client_birthdate
setupDateValidation('Client_birthdate');

    
    var firstName = document.getElementById("first_name");
    var middleName = document.getElementById("middle_name");
    var lastName = document.getElementById("last_name");
    var suffix = document.getElementById("suffix");
    var birthdate = document.getElementById("client_birthdate");
    var address = document.getElementById("client_address");
    var email = document.getElementById("client_email");
    var user_phone = document.getElementById('user_phone');
    
    //error messages IDs
    var errorFname = document.getElementById('error-first_name');
    var errormiddleName = document.getElementById('error-middle_name');
    var errorlastName = document.getElementById('error-last_name');
    var errorbirthdate = document.getElementById('error-client_birthdate');
    var erroraddress = document.getElementById('error-client_address');
    var erroremail = document.getElementById('error-client_email');
    var erroruser_phone = document.getElementById('error-user_phone');
    
    //guide messages IDs
    var guideFname = document.getElementById('guide-first_name');
    var guidemiddleName = document.getElementById('guide-middle_name');
    var guidelastName = document.getElementById('guide-last_name');
    var guidebirthdate = document.getElementById('guide-client_birthdate');
    var guideaddress = document.getElementById('guide-client_address');
    var guideemail = document.getElementById('guide-client_email');
    var guideuser_phone = document.getElementById('guide-user_phone');
    


    
    handleInputError(firstName, errorFname, guideFname)  
    handleInputError(middleName, errormiddleName, guidemiddleName)  
    handleInputError(lastName, errorlastName, guidelastName)  
    handleInputError(birthdate, errorbirthdate, guidebirthdate)  
    handleInputError(address, erroraddress, guideaddress)  
    handleInputError(email, erroremail, guideemail)
    handleInputError(user_phone, erroruser_phone, guideuser_phone)
  
    
function handleInputError(input, error, guide) {
    function onBlur() {
    if (input.value.trim() === '' || input.value.trim() === '0') {
        error.style.display = 'flex'; // Show the error message
        input.classList.add('is-invalid');
        input.classList.add('error-border');
    } else if (input.value.trim() === 'none') {
        error.style.display = 'flex'; // Show the error message
        input.classList.add('is-invalid');
        input.classList.add('error-border');
    } else if (input.type === 'email' && !isValidEmail(input.value.trim())) {
        error.style.display = 'flex'; // Show the error message
        input.classList.add('is-invalid');
        input.classList.add('error-border');
    } else {
        error.style.display = 'none'; // Hide the error message
        input.classList.remove('is-invalid');
        input.classList.remove('error-border');
    }
}


    function onFocus() {
        error.style.display = 'none'; // Hide the error message
        guide.style.display = 'flex'; // Show the guide message
        input.classList.remove('is-invalid');
        input.classList.remove('error-border');
    }

    function onBlurGuide() {
        guide.style.display = 'none'; // Hide the guide message
    }

    // Add event listeners to inputs
    input.addEventListener('blur', onBlur);
    input.addEventListener('focus', onFocus);
    input.addEventListener('blur', onBlurGuide);
}   
// Function to check if the value is a valid email format
function isValidEmail(email) {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[a-zA-Z]{2,}$/;
    return emailRegex.test(email);
}

    
var user_phone = document.getElementById('User_phone');

function PhoneNumberInputLimit(inputElement) {
    inputElement.addEventListener('input', function () {
        // Remove any non-digit characters, including 'e'
        this.value = this.value.replace(/[^\d]/g, '');

        // Limit to 11 digits
        if (this.value.length > 11) {
            this.value = this.value.slice(0, 11);
        }

        // Ensure the first two characters are '09'
        if (this.value.length >= 2 && this.value.slice(0, 2) !== '09') {
            // Adjust the input to start with '09'
            this.value = '09' + this.value.slice(2);
        }
    });
}

PhoneNumberInputLimit(user_phone);
    
        

// Function to check if the value is a valid email format
function isValidEmail(email) {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[a-zA-Z]{2,}$/;
    return emailRegex.test(email);
}



function enableSubmit() {


  var first_name = document.getElementById("Fname").value;
  var middle_name = document.getElementById("Mname").value;
  var last_name = document.getElementById("Lname").value;
  var Client_birthdate = document.getElementById("Client_birthdate").value;
  var client_address = document.getElementById("Client_address").value;
  var client_email = document.getElementById("Client_email").value;
  var user_phone = document.getElementById("User_phone").value;

  var submit_client = document.getElementById("Submit_client");

  // Add additional validation conditions as needed
  if (
    first_name.trim() !== "" &&
    middle_name.trim() !== "" &&
    last_name.trim() !== "" &&
    Client_birthdate.trim() !== "" &&
    client_address.trim() !== "" &&
    client_email.trim() !== "" &&
    user_phone.trim() !== "" 
  ) {
    submit_client.disabled = false;
  } else {
    submit_client.disabled = true;
  }
}

document.getElementById("Fname").addEventListener("input", enableSubmit);
document.getElementById("Mname").addEventListener("input", enableSubmit);
document.getElementById("Lname").addEventListener("input", enableSubmit);
document.getElementById("Client_birthdate").addEventListener("input", enableSubmit);
document.getElementById("Client_address").addEventListener("input", enableSubmit);
document.getElementById("Client_email").addEventListener("input", enableSubmit);
document.getElementById("User_phone").addEventListener("input", enableSubmit);