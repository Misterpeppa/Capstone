 document.addEventListener('DOMContentLoaded', function () {
        const nextBtn = document.getElementById('next_btn');
        const backBtn = document.getElementById('signup_back_btn');
        const step1 = document.getElementById('step-1');
        const step2 = document.getElementById('step-2');

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

        const emailInput = document.getElementById('email');
        const phoneInput = document.getElementById('phone_number');
        const passwordInput = document.getElementById('password');
        const confirmPasswordInput = document.getElementById('password_confirmation');

        function checkInputs() {
            if (
                emailInput.value !== '' &&
                phoneInput.value.match(/^\d{11}$/) &&
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

        emailInput.addEventListener('input', checkInputs);
        phoneInput.addEventListener('input', checkInputs);
        passwordInput.addEventListener('input', checkInputs);
        confirmPasswordInput.addEventListener('input', checkInputs);

        const suffixSelect = document.getElementById('suffix');
        const specifySuffixInput = document.getElementById('specify_suffix');

        suffixSelect.addEventListener('change', function () {
            if (suffixSelect.value === 'Other') {
                specifySuffixInput.parentElement.style.display = 'block';
            } else {
                specifySuffixInput.parentElement.style.display = 'none';
            }
        });
    });

const inputs = ['first_name', 'middle_name', 'last_name'];

    inputs.forEach(inputId => {
        document.getElementById(inputId).addEventListener('input', function () {
            let inputValue = this.value;
            let regex = /^[a-zA-Z\s]*$/;
            if (!regex.test(inputValue)) {
                this.value = inputValue.substring(0, inputValue.length - 1);
            }
            checkInputs();
        });
    });

    const today = new Date();
    const minDate = new Date(today.getFullYear() - 60, today.getMonth(), today.getDate()).toISOString().split('T')[0];

    const dateInput = document.getElementById('birthdate');
    dateInput.setAttribute('min', minDate);

    dateInput.addEventListener('change', function () {
        let selectedDate = new Date(this.value);
        if (selectedDate > today) {
            this.value = '';
            alert('Please select a date within the past 60 years.');
        }
        checkInputs();
    });

    dateInput.addEventListener('keydown', function (e) {
        e.preventDefault();
    });

    function checkInputs() {
        const firstName = document.getElementById('first_name').value;
        const middleName = document.getElementById('middle_name').value;
        const lastName = document.getElementById('last_name').value;
        const birthdate = document.getElementById('birthdate').value;

        const signupButton = document.getElementById('signup_btn');

        if (firstName && middleName && lastName && birthdate) {
            signupButton.disabled = false;
        } else {
            signupButton.disabled = true;
        }
    }



const emailInput = document.getElementById('email');
const errorEmail = document.getElementById('error-email');

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

const phoneInput = document.getElementById('phone_number');
const errorPhone = document.getElementById('error-phone_number');

phoneInput.addEventListener('blur', function () {
    if (phoneInput.value.trim() === '') {
        errorPhone.style.display = 'block';
        phoneInput.classList.add('is-invalid');
        phoneInput.classList.add('error-border');
    } else {
        errorPhone.style.display = 'none';
         phoneInput.classList.remove('is-invalid');
        phoneInput.classList.remove('error-border');
    }
});

const passwordInput = document.getElementById('password');
const errorPassword = document.getElementById('error-password');

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

const passwordConfirmInput = document.getElementById('password_confirmation');
const errorPasswordConfirm = document.getElementById('error-password_confirmation');

const errorPasswordMatch = document.getElementById('error-password_confirmation_1');

passwordConfirmInput.addEventListener('blur', function () {
    if (passwordConfirmInput.value.trim() === '') {
        errorPasswordConfirm.style.display = 'block';
        passwordConfirmInput.classList.add('is-invalid');
        passwordConfirmInput.classList.add('error-border');
    } else {
        errorPasswordConfirm.style.display = 'none';
        passwordConfirmInput.classList.remove('is-invalid');
        passwordConfirmInput.classList.remove('error-border');
    }
});

const fnameInput = document.getElementById('first_name');
const errorFname = document.getElementById('error-first_name');

fnameInput.addEventListener('blur', function () {
    if (fnameInput.value.trim() === '') {
        errorFname.style.display = 'block';
        fnameInput.classList.add('error-border');
    } else {
        errorFname.style.display = 'none';
        fnameInput.classList.remove('error-border');
    }
});

const mnameInput = document.getElementById('middle_name');
const errorMname = document.getElementById('error-middle_name');

mnameInput.addEventListener('blur', function () {
    if (mnameInput.value.trim() === '') {
        errorMname.style.display = 'block';
        mnameInput.classList.add('error-border');
    } else {
        errorMname.style.display = 'none';
        mnameInput.classList.remove('error-border');
    }
});

const lnameInput = document.getElementById('last_name');
const errorLname = document.getElementById('error-last_name');

lnameInput.addEventListener('blur', function () {
    if (lnameInput.value.trim() === '') {
        errorLname.style.display = 'block';
        lnameInput.classList.add('error-border');
    } else {
        errorLname.style.display = 'none';
        lnameInput.classList.add('error-border');
    }
});

const specifySuffixInput = document.getElementById('specify_suffix');
const errorSuffix = document.getElementById('error-specify_suffix');

specifySuffixInput.addEventListener('blur', function () {
    if (specifySuffixInput.value.trim() === '') {
        errorSuffix.style.display = 'block';
        specifySuffixInput.classList.add('error-border');
    } else {
        errorSuffix.style.display = 'none';
        specifySuffixInput.classList.remove('error-border');
    }
});

const birthdateInput = document.getElementById('birthdate');
const errorBirthdate = document.getElementById('error-birthdate');

birthdateInput.addEventListener('blur', function () {
    if (birthdateInput.value.trim() === '') {
        errorBirthdate.style.display = 'block';
        birthdateInput.classList.add('error-border');
    } else {
        errorBirthdate.style.display = 'none';
        birthdateInput.classList.remove('error-border');
    }
});


const otherInputs = document.querySelectorAll('input:not(#email):not(#phone_number):not(#password):not(#password_confirmation):not(#first_name):not(#middle_name):not(#last_name):not(#specify_suffix):not(#birthdate)');
otherInputs.forEach(input => {
    input.addEventListener('focus', function () {
        if (input === emailInput && emailInput.value.trim() === '') {
            errorEmail.style.display = 'block';
        } else if (input === phoneInput && phoneInput.value.trim() === '') {
            errorPhone.style.display = 'block';
        } else if (input === passwordInput && passwordInput.value.trim() === '') {
            errorPassword.style.display = 'block';
        } else if (input === passwordConfirmInput && passwordConfirmInput.value.trim() === '') {
            errorPasswordConfirm.style.display = 'block';
        } else if (input === fnameInput && fnameInput.value.trim() === ''){
            errorFname.style.display = 'block';
        }
        else if (input === mnameInput && mnameInput.value.trim() === ''){
            errorMname.style.display = 'block';
        }
        else if (input === lnameInput && lnameInput.value.trim() === ''){
            errorLname.style.display = 'block';
        }
        else if (input === specifySuffixInput && specifySuffixInput.value.trim() === ''){
            errorSuffix.style.display = 'block';
        }
        else if (input === birthdateInput && birthdateInput.value.trim() === '') {
            errorBirthdate.style.display = 'block';
        }
    });
});

function hideErrorOnInputClick(errorId) {
    const errorElement = document.getElementById(errorId);
    errorElement.style.display = 'none';
}


 function checkPasswordMatch() {
        if (passwordInput.value.trim() === '') {
            errorPasswordConfirm.style.display = 'block';
            errorPasswordMatch.style.display = 'none';
        } else if (passwordInput.value !== passwordConfirmInput.value) {
            errorPasswordConfirm.style.display = 'none';
            errorPasswordMatch.style.display = 'block';
        } else {
            errorPasswordConfirm.style.display = 'none';
            errorPasswordMatch.style.display = 'none';
        }
    }

