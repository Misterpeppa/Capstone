document.addEventListener('DOMContentLoaded', function () {


    var nextBtn = document.getElementById('next_btn');
    var backBtn = document.getElementById('signup_back_btn');
    var step1 = document.getElementById('step-1');
    var step2 = document.getElementById('step-2');

    // Function to handle the click event for nextBtn
    nextBtn.addEventListener('click', function () {
        step1.classList.remove('active');
        step2.classList.add('active');
    });

    // Function to handle the click event for backBtn
    backBtn.addEventListener('click', function () {
        step2.classList.remove('active');
        step1.classList.add('active');
    });



var emailInput = document.getElementById('email');
var errorEmail = document.getElementById('error-email');
var phone_number = document.getElementById('phone_number');
var errorPhoneNumber = document.getElementById('error-phone_number');

var passwordInput = document.getElementById('password');
var errorPassword = document.getElementById('error-password');
var confirmPasswordInput = document.getElementById('password_confirmation');
var errorConfirmPassword = document.getElementById('error-password_confirmation');
 var errorConfirmPassword1 = document.getElementById('error-password_confirmation_1');
 
 // Function to handle the click event for nextBtn
    nextBtn.addEventListener('click', function () {
        step1.classList.remove('active');
        step2.classList.add('active');
    });
 
function checkInputs() {
        if (
            (emailInput.value.trim().endsWith('@gmail.com') || emailInput.value.trim().endsWith('@yahoo.com')) &&
            phone_number.value.match(/^\d{11}$/) &&
            passwordInput.value !== '' &&
            confirmPasswordInput.value !== '' &&
            passwordInput.value === confirmPasswordInput.value
        ) {
            nextBtn.removeAttribute('disabled');
            nextBtn.classList.remove('disabled');
        } else {
            nextBtn.setAttribute('disabled', 'true');
            nextBtn.classList.add('disabled');
        }
    }


emailInput.addEventListener('blur', function () {
  checkInputs();
var emailValue = emailInput.value.trim();

if (emailValue === '') {
    displayErrorEmail('• Please enter your Email Address.');
} else if (!isValidEmail(emailValue)) {
    displayErrorEmail('Invalid email format');
} else {
    hideErrorEmail();
}

});

function isValidEmail(email) {
// Updated regular expression for a more permissive check
var emailRegex = /^[^\s@]+@[^\s@]+\.[a-zA-Z]{2,}$/;
return emailRegex.test(email);
}

function displayErrorEmail(message) {
errorEmail.innerHTML = '<span>' + message + '</span>';
errorEmail.style.display = 'flex';
emailInput.classList.add('is-invalid');
emailInput.classList.add('error-border');
}

function hideErrorEmail() {
errorEmail.style.display = 'none';
emailInput.classList.remove('is-invalid');
emailInput.classList.remove('error-border');
}

emailInput.addEventListener('focus', function () {
  checkInputs();
      errorEmail.style.display = 'none';
      emailInput.classList.remove('is-invalid');
        emailInput.classList.remove('error-border');

});
 
// Add a focusout event listener to handle the condition when the input has a value and is not focused
emailInput.addEventListener('focusout', function () {
checkInputs();

});
 

 
phone_number.addEventListener('blur', function () {
  checkInputs();
var phoneNumberValue = phone_number.value.trim();

if (phoneNumberValue === '') {
    displayPhoneError('• Please enter your phone number.');
} else if (phoneNumberValue.length !== 11) {
    displayPhoneError('• Please enter 11 digits only. (e.g., 09172839117)');
} else {
    hidePhoneError();
} 
});

function displayPhoneError(message) {
errorPhoneNumber.textContent = message;
errorPhoneNumber.style.display = 'flex';
phoneNumberInput.classList.add('is-invalid');
phoneNumberInput.classList.add('error-border');
}

function hidePhoneError() {
errorPhoneNumber.style.display = 'none';
phoneNumberInput.classList.remove('is-invalid');
phoneNumberInput.classList.remove('error-border');
}
 
phone_number.addEventListener('focus', function () {
  checkInputs();
      error_phone_number.style.display = 'none';
      phone_number.classList.remove('is-invalid');
        phone_number.classList.remove('error-border');

});
 
// Add a focusout event listener to handle the condition when the input has a value and is not focused
phone_number.addEventListener('focusout', function () {
checkInputs();
});
 
document.getElementById("phone_number").oninput = function () {
  
  checkInputs();
  // Limit the input to 11 characters
  if (this.value.length > 11) {
    this.value = this.value.slice(0, 11);
  }

  // Ensure the first two characters are '09'
  if (this.value.length >= 2 && this.value.slice(0, 2) !== '09') {
    // Adjust the input to start with '09'
    this.value = '09' + this.value.slice(2);
  }

  // Format the Philippine mobile number with dashes as the user types

  // Remove dashes for reformatting
  const unformattedInput = numericInput.replace(/-/g, '');

  if (unformattedInput.length >= 4 && unformattedInput.length <= 7) {
    // Add the first dash
    this.value = `${unformattedInput.substring(0, 4)}-${unformattedInput.substring(4)}`;
  } else if (unformattedInput.length >= 8) {
    // Add both dashes
    this.value = `${unformattedInput.substring(0, 4)}-${unformattedInput.substring(4, 7)}-${unformattedInput.substring(7)}`;
  }
}



passwordInput.addEventListener('blur', function () {
  checkInputs();
const passwordValue = passwordInput.value.trim();
let errorMessages = [];

if (passwordValue === '') {
    errorMessages.push('• Please enter your password.');
} else {
    if (passwordValue.length < 8) {
        errorMessages.push('Password must have 8 or more characters.');
    }

    if (!/[A-Z]/.test(passwordValue)) {
        errorMessages.push('Password must have at least 1 uppercase character.');
    }

    if (!/[!@#$%^&*(),.?":{}|<>]/.test(passwordValue)) {
        errorMessages.push('Password must have at least 1 special character.');
    }
}

if (errorMessages.length > 0) {
    showError(errorMessages.join('<br>'));
} else {
    hideError();
    
}
});

// Helper function to show error message
function showError(message) {
errorPassword.innerHTML = message;
errorPassword.style.display = 'flex';
passwordInput.classList.add('is-invalid');
passwordInput.classList.add('error-border');
}

// Helper function to hide error message
function hideError() {
errorPassword.style.display = 'none';
passwordInput.classList.remove('is-invalid');
passwordInput.classList.remove('error-border');
}




// Add a focusout event listener to handle the condition when the password has a value and is not focused
passwordInput.addEventListener('focusout', function () {
checkInputs();
});
 
   
passwordInput.addEventListener('focus', function () {
  checkInputs();
      errorPassword.style.display = 'none';
      passwordInput.classList.remove('is-invalid');
        passwordInput.classList.remove('error-border');

});
 
 

// Password confirmation input event listeners
confirmPasswordInput.addEventListener('blur', function () {
  checkInputs();
if (confirmPasswordInput.value.trim() === '') {
    errorConfirmPassword.style.display = 'flex';
    confirmPasswordInput.classList.add('is-invalid');
    confirmPasswordInput.classList.add('error-border');
} else if (confirmPasswordInput.value !== passwordInput.value) {
    errorConfirmPassword1.style.display = 'flex';
    confirmPasswordInput.classList.add('is-invalid');
    confirmPasswordInput.classList.add('error-border');
} else {
    errorConfirmPassword.style.display = 'none';
    errorConfirmPassword1.style.display = 'none';
    confirmPasswordInput.classList.remove('is-invalid');
    confirmPasswordInput.classList.remove('error-border');
    
}
});
 
confirmPasswordInput.addEventListener('focus', function () {
  checkInputs();
errorConfirmPassword.style.display = 'none';
confirmPasswordInput.classList.remove('is-invalid');
confirmPasswordInput.classList.remove('error-border');

});

// Add a focusout event listener to handle the condition when the password confirmation has a value and is not focused
confirmPasswordInput.addEventListener('focusout', function () {
checkInputs();
});
checkInputs();



 
 


 
const inputs = ['first_name', 'middle_name', 'last_name'];

inputs.forEach(inputId => {
document.getElementById(inputId).addEventListener('input', function () {
    let inputValue = this.value;
    let regex = /^[a-zA-Z\s]*$/;

    // Check if the input matches the regex
    if (regex.test(inputValue)) {
        // Capitalize the first letter of each word
        inputValue = inputValue.replace(/\b\w/g, firstLetter => firstLetter.toUpperCase());
    } else {
        // If the input doesn't match the regex, remove the last character
        inputValue = inputValue.substring(0, inputValue.length - 1);
    }

    // Set the updated value to the input
    this.value = inputValue;

    // Perform any additional checks or actions
    checkInputs();
});
});

 
// Function to validate the email and password inputs
function validateInputs() {
    var emailValue = emailInput.value;
    var passwordValue = passwordInput.value;
    
    if (emailValue.trim() !== '' && passwordValue.trim() !== '') {
        signinButton.removeAttribute('disabled');
        signinButton.classList.remove('disabled');
    } else {
        signinButton.setAttribute('disabled', 'disabled');
        signinButton.classList.add('disabled');
    }
}

// Event listeners to validate the email and password inputs on change
emailInput.addEventListener('input', validateInputs);
passwordInput.addEventListener('input', validateInputs);
 


const fnameInput = document.getElementById('first_name');
const errorFname = document.getElementById('error-first_name');

fnameInput.addEventListener('blur', function () {
if (fnameInput.value.trim() === '') {
    errorFname.style.display = 'flex';
    fnameInput.classList.add('error-border');
} else {
    errorFname.style.display = 'none';
    fnameInput.classList.remove('error-border');
}
});

     fnameInput.addEventListener('focus', function () {
      errorFname.style.display = 'none';
      fnameInput.classList.remove('is-invalid');
        fnameInput.classList.remove('error-border');
        
});
 


const mnameInput = document.getElementById('middle_name');
const errorMname = document.getElementById('error-middle_name');

mnameInput.addEventListener('blur', function () {
if (mnameInput.value.trim() === '') {
    errorMname.style.display = 'flex';
    mnameInput.classList.add('error-border');
} else {
    errorMname.style.display = 'none';
    mnameInput.classList.remove('error-border');
}
});

     mnameInput.addEventListener('focus', function () {
      errorMname.style.display = 'none';
      mnameInput.classList.remove('is-invalid');
        mnameInput.classList.remove('error-border');
});
 


const lnameInput = document.getElementById('last_name');
const errorLname = document.getElementById('error-last_name');

lnameInput.addEventListener('blur', function () {
if (lnameInput.value.trim() === '') {
    errorLname.style.display = 'flex';
    lnameInput.classList.add('error-border');
} else {
    errorLname.style.display = 'none';
    lnameInput.classList.add('error-border');
}
});

     lnameInput.addEventListener('focus', function () {
      errorLname.style.display = 'none';
      lnameInput.classList.remove('is-invalid');
        lnameInput.classList.remove('error-border');
});




var specifySuffixInput = document.getElementById('specify_suffix');
var errorSuffix = document.getElementById('error-specify_suffix');

var suffixSelect = document.getElementById('suffix');
suffixSelect.addEventListener('change', function () {
        if (suffixSelect.value === 'Other') {
            specifySuffixInput.parentElement.style.display = 'flex';
        } else {
            specifySuffixInput.parentElement.style.display = 'none';
        }
    });



specifySuffixInput.addEventListener('blur', function () {
if (specifySuffixInput.value.trim() === '') {
    errorSuffix.style.display = 'flex';
    specifySuffixInput.classList.add('error-border');
} else {
    errorSuffix.style.display = 'none';
    specifySuffixInput.classList.remove('error-border');
}
});

     specifySuffixInput.addEventListener('focus', function () {
      errorSuffix.style.display = 'none';
      specifySuffixInput.classList.remove('is-invalid');
        specifySuffixInput.classList.remove('error-border');
});



const birthdateInput = document.getElementById('birthdate');
const errorBirthdate = document.getElementById('error-birthdate');

birthdateInput.addEventListener('blur', function () {
if (birthdateInput.value.trim() === '') {
    errorBirthdate.style.display = 'flex';
    birthdateInput.classList.add('error-border');
} else {
    errorBirthdate.style.display = 'none';
    birthdateInput.classList.remove('error-border');
    checkInputs1();
}
});

     birthdateInput.addEventListener('focus', function () {
      errorBirthdate.style.display = 'none';
      birthdateInput.classList.remove('is-invalid');
        birthdateInput.classList.remove('error-border');
         checkInputs1();
});
 



const today = new Date();
const maxDate = new Date(today.getFullYear() - 18, today.getMonth(), today.getDate()).toISOString().split('T')[0];
const minDate = new Date(today.getFullYear() - 100, today.getMonth(), today.getDate()).toISOString().split('T')[0];

const dateInput = document.getElementById('birthdate');
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



checkInputs1();
function checkInputs1() {
const firstName = document.getElementById('first_name').value;
const lastName = document.getElementById('last_name').value;
const birthdate = document.getElementById('birthdate').value;

const signupButton = document.getElementById('signup_btn');

if (firstName !== '' && lastName !== '' && birthdate !== '') {
    signupButton.disabled = false;
} else {
    signupButton.disabled = true;
}
}



});


var eyeIcon = document.querySelector(".eye-icon");
 var eyeIcon1 = document.querySelector(".eye-icon1");
eyeIcon.addEventListener('mousedown', function (event) {
// Prevent the default behavior to stop the input from losing focus
event.preventDefault();
togglePasswordVisibility();
});    
eyeIcon1.addEventListener('mousedown', function (event) {
// Prevent the default behavior to stop the input from losing focus
event.preventDefault();
togglePasswordVisibility1();
});   

function togglePasswordVisibility() {
  var passwordInput = document.getElementById("password");
  var eyeIcon = document.querySelector(".eye-icon");

  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    // Change the eye-icon to the visible state
    eyeIcon.innerHTML = `
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <g clip-path="url(#clip0_1917_11689)">
          <path d="M10 12C10 12.5304 10.2107 13.0391 10.5858 13.4142C10.9609 13.7893 11.4696 14 12 14C12.5304 14 13.0391 13.7893 13.4142 13.4142C13.7893 13.0391 14 12.5304 14 12C14 11.4696 13.7893 10.9609 13.4142 10.5858C13.0391 10.2107 12.5304 10 12 10C11.4696 10 10.9609 10.2107 10.5858 10.5858C10.2107 10.9609 10 11.4696 10 12Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M21 12C18.6 16 15.6 18 12 18C8.4 18 5.4 16 3 12C5.4 8 8.4 6 12 6C15.6 6 18.6 8 21 12Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </g>
        <defs>
          <clipPath id="clip0_1917_11689">
            <rect width="24" height="24" fill="white"/>
          </clipPath>
        </defs>
      </svg>`;
  } else {
    passwordInput.type = "password";
    // Change the eye-icon to the initial state
    eyeIcon.innerHTML = `
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <g clip-path="url(#clip0_1917_11666)">
          <path d="M21 9C18.6 11.667 15.6 13 12 13C8.4 13 5.4 11.667 3 9M3 15L5.5 11.2M20.9998 14.976L18.5078 11.2M9 17L9.5 13M15 17L14.5 13" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </g>
        <defs>
          <clipPath id="clip0_1917_11666">
            <rect width="24" height="24" fill="white"/>
          </clipPath>
        </defs>
      </svg>`;
  }
}

function togglePasswordVisibility1() {

var passwordInput1 = document.getElementById("password_confirmation");
  var eyeIcon1 = document.querySelector(".eye-icon1");

  if (passwordInput1.type === "password") {
    passwordInput1.type = "text";
    // Change the eye-icon to the visible state
    eyeIcon1.innerHTML = `
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <g clip-path="url(#clip0_1917_11689)">
          <path d="M10 12C10 12.5304 10.2107 13.0391 10.5858 13.4142C10.9609 13.7893 11.4696 14 12 14C12.5304 14 13.0391 13.7893 13.4142 13.4142C13.7893 13.0391 14 12.5304 14 12C14 11.4696 13.7893 10.9609 13.4142 10.5858C13.0391 10.2107 12.5304 10 12 10C11.4696 10 10.9609 10.2107 10.5858 10.5858C10.2107 10.9609 10 11.4696 10 12Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M21 12C18.6 16 15.6 18 12 18C8.4 18 5.4 16 3 12C5.4 8 8.4 6 12 6C15.6 6 18.6 8 21 12Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </g>
        <defs>
          <clipPath id="clip0_1917_11689">
            <rect width="24" height="24" fill="white"/>
          </clipPath>
        </defs>
      </svg>`;
  } else {
    passwordInput1.type = "password";
    // Change the eye-icon to the initial state
    eyeIcon1.innerHTML = `
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <g clip-path="url(#clip0_1917_11666)">
          <path d="M21 9C18.6 11.667 15.6 13 12 13C8.4 13 5.4 11.667 3 9M3 15L5.5 11.2M20.9998 14.976L18.5078 11.2M9 17L9.5 13M15 17L14.5 13" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </g>
        <defs>
          <clipPath id="clip0_1917_11666">
            <rect width="24" height="24" fill="white"/>
          </clipPath>
        </defs>
      </svg>`;
  }
}


 
 //yung go_to_signin btn, lilitaw tong button na to iff add_client_success ang lilitaw pagka click ng signup_btn. Pagkaclick ng go_to_signin, mag coclose ang modal at dapat mapunta sa sign in page ang user. 
var go_to_signin = document.getElementById('go_to_signin');
var signup_btn = document.getElementById('signup_btn');
 
signup_btn.addEventListener('click', function () {
signup_success.show();    
});

go_to_signin.addEventListener('click', function () {
signup_success.hide();    
});
 
 


