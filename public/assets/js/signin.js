document.addEventListener('DOMContentLoaded', function () {
    var emailInput = document.getElementById('email');
    var errorEmail = document.getElementById('error-email');
    var guideEmailMessage = document.getElementById('guide_email_message');
      var guide_password = document.getElementById('guide_password');
    var passwordInput = document.getElementById('password');
    var errorPassword = document.getElementById('error-password');
    var signInBtn = document.getElementById('signin_btn');
  
    // Function to check inputs and enable/disable the sign-in button
    function checkInputs() {
      // Check if both email and password have values and if the email has the required domain
      if (
        emailInput.value.trim() !== '' &&
        passwordInput.value.trim() !== '' &&
        (emailInput.value.includes('@gmail.com') || emailInput.value.includes('@yahoo.com'))
      ) {
        signInBtn.removeAttribute('disabled'); // Enable the button
        signInBtn.classList.remove('disabled'); // Remove the 'disabled' class
        errorEmail.style.display = 'none'; // Hide the email error message
        errorPassword.style.display = 'none'; // Hide the password error message
      } else {
        signInBtn.setAttribute('disabled', 'true'); // Disable the button
        signInBtn.classList.add('disabled'); // Add the 'disabled' class
      }
    }
  
    // Function to show error message if email is clicked and left without a value
  
    function checkEmailOnBlur() {
      if (emailInput.value.trim() === '') {
        errorEmail.style.display = 'flex'; // Show the email error message
        emailInput.classList.add('is-invalid');
        emailInput.classList.add('error-border');
      } else if (!(emailInput.value.includes('@gmail.com') || emailInput.value.includes('@yahoo.com'))) {
        errorEmail.style.display = 'flex'; // Show the email error message
        emailInput.classList.add('is-invalid');
        emailInput.classList.add('error-border');
      }
    }
  
    // Function to hide error message when email is focused
    function hideErrorOnEmailFocus() {
      errorEmail.style.display = 'none'; // Hide the email error message
      guideEmailMessage.style.display = 'flex'; // Show the guide email message
        emailInput.classList.remove('is-invalid');
      emailInput.classList.remove('error-border');
    }
  
    // Function to hide guide email message when email is blurred
    function hideGuideEmailMessage() {
      guideEmailMessage.style.display = 'none'; // Hide the guide email message
    }
  
    // Function to show error message if password is clicked and left without a value
    function checkPasswordOnBlur() {
      if (passwordInput.value.trim() === '') {
        errorPassword.style.display = 'flex'; // Show the password error message
                  passwordInput.classList.add('is-invalid');
      passwordInput.classList.add('error-border');
          guide_password.style.display = 'none';
      } 
    }
  
    // Function to hide error message when password is focused
    function hideErrorOnPasswordFocus() {
      errorPassword.style.display = 'none'; // Hide the password error message
        guide_password.style.display = 'flex'; // Show the guide password 
        passwordInput.classList.remove('is-invalid');
      passwordInput.classList.remove('error-border');
    }
      
      function hideGuidePasswordMessage() {
      guide_password.style.display = 'none'; // Hide the guide password message
    }
  
    // Add event listeners to inputs to check on input change
    emailInput.addEventListener('input', checkInputs);
    emailInput.addEventListener('blur', checkEmailOnBlur);
    emailInput.addEventListener('focus', hideErrorOnEmailFocus);
    emailInput.addEventListener('blur', hideGuideEmailMessage);
    
    passwordInput.addEventListener('input', checkInputs);
    passwordInput.addEventListener('blur', checkPasswordOnBlur);
    passwordInput.addEventListener('focus', hideErrorOnPasswordFocus);
  passwordInput.addEventListener('blur', hideGuidePasswordMessage);
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