<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <title>Customer Sign Up</title>
    @include('includes.head')
    <!-- Add Bootstrap CSS link -->

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>

    <section class="container-fluid signup-wrapper">
        <div class="signup_bg-img">
            <div class="signup_overlay"></div>
            <img src="{{ asset('img/clientclinic.jpg') }}" alt="Logo" class="img-fluid">
        </div>

        <div class="row justify-content-center align-items-center ">
            <div class="col-md-4 col-sm-10 col-12 signup_col mt-5 mb-5">
                <div class="d-flex flex-row align-items-center justify-content-between align-self-stretch mb-3">
                    <div class="signup_logo_container">
                        <div class="signup_logo">
                            <img src="{{ asset('img/Frame%20416.png') }}" class="img-fluid" alt="Logo">
                        </div>
                    </div>

                    <div class="signup_form_header_right">
                        <p>Already a user?</p>
                        <a class="btn signup_signin-btn" role="button" href="{{ route('client.signin') }}">Sign In</a>
                    </div>
                </div>

                <div class="signup_welcome text-start mb-1">
                    <h1>Welcome to the family</h1>
                    <p>Register your account</p>
                </div>
                <form class="signup_custom_container" id="signup_Form" method="POST" action="{{ route('client.signup') }}">
                    @csrf

                    <div class="mb-3">
                        <div class="signup_input_container">
                            <input class="signup_form_control" type="text" name="first_name" id="first_name" placeholder=" " value="{{ old('first_name') }}" onblur="checkInput(this)" data-id="first_name" onclick="hideIconOnClick(this)"maxlength="50">
                            <label class="signup_placeholder_label" for="first_name">First Name</label>
                            <div class="error-message" id="error-first_name">Please enter your first name.</div>
                            <svg class="error-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none">
                                <g clip-path="url(#clip0_1917_11669)">
                                    <path d="M12 8V12M12 16H12.01M9.103 2H14.897C15.2911 1.99995 15.6814 2.07756 16.0455 2.22838C16.4096 2.3792 16.7404 2.60029 17.019 2.879L21.12 6.979C21.3993 7.25791 21.6207 7.58917 21.7717 7.95382C21.9227 8.31846 22.0003 8.70932 22 9.104V14.898C22 15.2921 21.9224 15.6824 21.7716 16.0465C21.6208 16.4106 21.3997 16.7414 21.121 17.02L17.021 21.121C16.7423 21.4 16.4114 21.6214 16.0471 21.7724C15.6828 21.9233 15.2923 22.001 14.898 22.001H9.103C8.70883 22.0009 8.31854 21.9232 7.95443 21.7722C7.59033 21.6212 7.25955 21.3999 6.981 21.121L2.88 17.021C2.60087 16.7422 2.37946 16.4111 2.22846 16.0466C2.07746 15.6822 1.99982 15.2915 2 14.897V9.103C1.99995 8.7089 2.07756 8.31865 2.22838 7.95455C2.3792 7.59045 2.60029 7.25963 2.879 6.981L6.979 2.88C7.25791 2.60075 7.58917 2.37927 7.95382 2.22827C8.31846 2.07726 8.70932 1.99969 9.104 2H9.103Z" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_1917_11669">
                                        <rect width="24" height="24" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                    </div>

                    
                    @error('first_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <div class="signup_input_container">
                            <input class="signup_form_control" type="text" name="last_name" id="last_name" placeholder=" " value="{{ old('last_name') }}" onblur="checkInput(this)" data-id="last_name" onclick="hideIconOnClick(this)" maxlength="50">
                            <label class="signup_placeholder_label" for="last_name">Last Name</label>
                            <div class="error-message" id="error-last_name">Please enter your last name.</div>
                            <svg class="error-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none">
                                <g clip-path="url(#clip0_1917_11669)">
                                    <path d="M12 8V12M12 16H12.01M9.103 2H14.897C15.2911 1.99995 15.6814 2.07756 16.0455 2.22838C16.4096 2.3792 16.7404 2.60029 17.019 2.879L21.12 6.979C21.3993 7.25791 21.6207 7.58917 21.7717 7.95382C21.9227 8.31846 22.0003 8.70932 22 9.104V14.898C22 15.2921 21.9224 15.6824 21.7716 16.0465C21.6208 16.4106 21.3997 16.7414 21.121 17.02L17.021 21.121C16.7423 21.4 16.4114 21.6214 16.0471 21.7724C15.6828 21.9233 15.2923 22.001 14.898 22.001H9.103C8.70883 22.0009 8.31854 21.9232 7.95443 21.7722C7.59033 21.6212 7.25955 21.3999 6.981 21.121L2.88 17.021C2.60087 16.7422 2.37946 16.4111 2.22846 16.0466C2.07746 15.6822 1.99982 15.2915 2 14.897V9.103C1.99995 8.7089 2.07756 8.31865 2.22838 7.95455C2.3792 7.59045 2.60029 7.25963 2.879 6.981L6.979 2.88C7.25791 2.60075 7.58917 2.37927 7.95382 2.22827C8.31846 2.07726 8.70932 1.99969 9.104 2H9.103Z" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_1917_11669">
                                        <rect width="24" height="24" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>

                        </div>
                    </div>
                    @error('last_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <div class="signup_input_container">
                            <input class="signup_form_control" type="text" name="email" id="email" placeholder=" " onblur="checkInput(this)" data-id="email" onclick="hideIconOnClick(this)">
                            <label class="signup_placeholder_label" for="email">Email</label>
                            <div class="error-message" id="error-email">Please enter your email.</div>
                            <svg class="error-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none">
                                <g clip-path="url(#clip0_1917_11669)">
                                    <path d="M12 8V12M12 16H12.01M9.103 2H14.897C15.2911 1.99995 15.6814 2.07756 16.0455 2.22838C16.4096 2.3792 16.7404 2.60029 17.019 2.879L21.12 6.979C21.3993 7.25791 21.6207 7.58917 21.7717 7.95382C21.9227 8.31846 22.0003 8.70932 22 9.104V14.898C22 15.2921 21.9224 15.6824 21.7716 16.0465C21.6208 16.4106 21.3997 16.7414 21.121 17.02L17.021 21.121C16.7423 21.4 16.4114 21.6214 16.0471 21.7724C15.6828 21.9233 15.2923 22.001 14.898 22.001H9.103C8.70883 22.0009 8.31854 21.9232 7.95443 21.7722C7.59033 21.6212 7.25955 21.3999 6.981 21.121L2.88 17.021C2.60087 16.7422 2.37946 16.4111 2.22846 16.0466C2.07746 15.6822 1.99982 15.2915 2 14.897V9.103C1.99995 8.7089 2.07756 8.31865 2.22838 7.95455C2.3792 7.59045 2.60029 7.25963 2.879 6.981L6.979 2.88C7.25791 2.60075 7.58917 2.37927 7.95382 2.22827C8.31846 2.07726 8.70932 1.99969 9.104 2H9.103Z" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_1917_11669">
                                        <rect width="24" height="24" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                    </div>
                    @if ($errors->has('email'))
                        <div class="alert alert-danger" role="alert">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                    <div class="mb-3">
                        <div class="signup_input_container">
                            <input class="signup_form_control" type="password" name="password" id="password" placeholder=" " onblur="checkInput(this)" data-id="password" onclick="hideIconOnClick(this)" maxlength="50">
                            <label class="signup_placeholder_label" for="password">Password</label>
                            <div class="error-message" id="error-password">Please enter your password.</div>
                            <div class="input-icon" id="password-toggle">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="password-toggle">
                                    <g opacity="0.5" clip-path="url(#clip0_1917_11666)">
                                    <path d="M21 9C18.6 11.667 15.6 13 12 13C8.4 13 5.4 11.667 3 9M3 15L5.5 11.2M20.9998 14.976L18.5078 11.2M9 17L9.5 13M15 17L14.5 13" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1917_11666">
                                            <rect width="24" height="24" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    </div>
                    @if ($errors->has('password'))
                        <div class="alert alert-danger" role="alert">
                            {{ $errors->first('password') }}
                        </div>
                    @endif
                    
                    <div class="mb-3">
                        <div class="signup_input_container">
                            <input class="signup_form_control" type="password" name="password_confirmation" id="password_confirmation" placeholder=" " onblur="checkInput(this)" data-id="password_confirmation" onclick="hideIconOnClick(this)" maxlength="50">
                            <label class="signup_placeholder_label" for="password_confirmation">Repeat Password</label>
                            <div class="error-message" id="error-password_confirmation">Please repeat your password.</div>
                            <div class="input-icon" id="password-confirm-toggle">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="password-toggle">
                                    <g opacity="0.5" clip-path="url(#clip0_1917_11666)">
                                        <path d="M21 9C18.6 11.667 15.6 13 12 13C8.4 13 5.4 11.667 3 9M3 15L5.5 11.2M20.9998 14.976L18.5078 11.2M9 17L9.5 13M15 17L14.5 13" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1917_11666">
                                            <rect width="24" height="24" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    </div>
                    @if ($errors->has('password_confirmation'))
                        <div class="alert alert-danger" role="alert">
                            {{ $errors->first('password_confirmation') }}
                        </div>
                    @endif
                    <!-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif -->

                    

                    <div class="mb-1">
                        <button class="btn signup_btn w-100" type="submit">Sign Up</button>
                    </div>
                </form>

            </div>
        </div>
    </section>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function checkInput(inputElement) {
            const inputValue = inputElement.value.trim();
            const inputId = inputElement.getAttribute("data-id");
            const errorMessage = document.getElementById(`error-${inputId}`);
            const errorIcon = document.querySelector(`.error-icon[data-id="${inputId}"]`);

            if (inputValue === "") {
                inputElement.classList.add("error-input");
                errorMessage.style.display = "block";
                errorIcon.style.display = "block"; // Show the icon in error state
            } else {
                inputElement.classList.remove("error-input");
                errorMessage.style.display = "none";
                errorIcon.style.display = "none"; // Hide the icon when input has content
            }
        }
        function hideIconOnClick(inputElement) {
            const inputId = inputElement.getAttribute("data-id");
            const errorIcon = document.querySelector(`.error-icon[data-id="${inputId}"]`);

            errorIcon.style.display = "none"; // Hide the icon immediately when clicking the input
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const passwordInput = document.getElementById('password');
            const passwordConfirmInput = document.getElementById('password_confirmation');
            const passwordToggle = document.getElementById('password-toggle');
            const passwordConfirmToggle = document.getElementById('password-confirm-toggle');

            passwordToggle.addEventListener('click', togglePasswordVisibility.bind(null, passwordInput, passwordToggle));
            passwordConfirmToggle.addEventListener('click', togglePasswordVisibility.bind(null, passwordConfirmInput, passwordConfirmToggle));
        });

        function togglePasswordVisibility(input, toggleIcon) {
            if (input.type === 'password') {
                input.type = 'text';
                toggleIcon.innerHTML = `
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
                    </svg>
                `;
            } else {
                input.type = 'password';
                toggleIcon.innerHTML = `
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <g clip-path="url(#clip0_1917_11666)">
                        <path d="M21 9C18.6 11.667 15.6 13 12 13C8.4 13 5.4 11.667 3 9M3 15L5.5 11.2M20.9998 14.976L18.5078 11.2M9 17L9.5 13M15 17L14.5 13" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_1917_11666">
                                <rect width="24" height="24" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                `;
            }
        }
    </script>

        <script>
            const fnameInput = document.getElementById('first_name');

            // Add an input event listener to the input field
            fnameInput.addEventListener('input', function () {
                // Use a regular expression to match alphabetic characters and spaces
                const regex = /^[a-zA-Z\s]+$/;

                // Get the current input value
                const inputValue = fnameInput.value;

                // Test if the input matches the regular expression
                if (!regex.test(inputValue)) {
                    // If it doesn't match, clear the input field
                    fnameInput.value = '';
                }
            });

            const lnameInput = document.getElementById('last_name');

            // Add an input event listener to the input field
            lnameInput.addEventListener('input', function () {
                // Use a regular expression to match alphabetic characters and spaces
                const regex = /^[a-zA-Z\s]+$/;

                // Get the current input value
                const inputValue = lnameInput.value;

                // Test if the input matches the regular expression
                if (!regex.test(inputValue)) {
                    // If it doesn't match, clear the input field
                    lnameInput.value = '';
                }
            });

            // Get the email input element by its ID
        const emailInput = document.getElementById('email');

        // Add an input event listener to the input field
        emailInput.addEventListener('input', function () {
            // Use a regular expression to validate the email format for Gmail
            const regex = /^[a-zA-Z0-9._%+-]+@gmail\.com$/;

            // Get the current input value
            const inputValue = emailInput.value;

            // Test if the input matches the regular expression
            if (!regex.test(inputValue)) {
                // If it doesn't match, set a custom error message or clear the input field
                emailInput.setCustomValidity('Please enter a valid Gmail address (e.g., example@gmail.com)');
            } else {
                // If it matches, clear any custom error message
                emailInput.setCustomValidity('');
            }
        });
        </script>



</body>

</html>
