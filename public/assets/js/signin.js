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