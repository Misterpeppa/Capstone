var emailInput = document.getElementById('email');
var errorEmail = document.getElementById('error-email');
var signinButton = document.getElementById('signin_btn');

emailInput.addEventListener('blur', function () {
    if (emailInput.value.trim() === '') {
        errorEmail.style.display = 'block';
        emailInput.classList.add('is-invalid');
        emailInput.classList.add('error-border');
    } else {
        errorEmail.style.display = 'none';
        emailInput.classList.remove('is-invalid');
        emailInput.classList.remove('error-border');
    }
});

var passwordInput = document.getElementById('password');
var errorPassword = document.getElementById('error-password');

passwordInput.addEventListener('blur', function () {
    if (passwordInput.value.trim() === '') {
        errorPassword.style.display = 'block';
        passwordInput.classList.add('is-invalid');
        passwordInput.classList.add('error-border');
    } else {
        errorPassword.style.display = 'none';
        passwordInput.classList.remove('is-invalid');
        passwordInput.classList.remove('error-border');
    }
});



const otherInputs = document.querySelectorAll('input:not(#email):not(#password)');
otherInputs.forEach(input => {
    input.addEventListener('focus', function () {
        if (input === emailInput && emailInput.value.trim() === '') {
            errorEmail.style.display = 'block';
        } else if (input === passwordInput && passwordInput.value.trim() === '') {
            errorPassword.style.display = 'block';
        } 
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