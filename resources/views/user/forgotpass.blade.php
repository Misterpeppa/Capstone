<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <title>Forgot Password</title>
    <link rel="icon" href="/img/dogs&cats.png" type="image/x-icon">
    @include('includes.head')
    <link rel="stylesheet" href="{{ asset('css/user/forgotPass.css') }}">
</head>

<body style="overflow:hidden; margin: 0; padding: 0;">
    <div class="container-fluid" style="margin: 0; padding: 0;">
        <div class="bg-img">
            <div class="overlay"></div>
            <img src="{{ asset('img/clientclinic.jpg') }}" alt="Logo">
        </div>
        <div class="row custom-row justify-content-center align-items-center">
            <div class="col-md-4 forgot-pass mt-5">
                <div id="initialState">
                    <div class="d-flex flex-column" style="height: 100%;">
                        <div class="d-flex justify-content-between mb-5 mt-3">
                            <button class="custom-back-btn" onclick="goBack()">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" viewBox="0 0 14 12" fill="none">
                                    <path d="M5.28471 1.71527L1 5.99998L5.28471 10.2847M13 5.99998H1.12" stroke="#045B62" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Back
                            </button>
                            <a href="{{ route('client.signup') }}" style="text-decoration: none;"> <button class="custom-create-acc-btn">Create Account</button></a>
                        </div>
                        <div class="security-check">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" viewBox="0 0 16 20" fill="none">
                                <path d="M5.6317 9.89267L6.91987 11.2613L10.3603 7.60589M6.78385 1.69765L2.79135 3.29585C1.87123 3.6614 1.11914 4.81754 1.11914 5.85467V12.171C1.11914 13.1741 1.74322 14.4917 2.50331 15.0953L5.94374 17.8242C7.07188 18.7253 8.92812 18.7253 10.0563 17.8242L13.4967 15.0953C14.2568 14.4917 14.8809 13.1741 14.8809 12.171V5.85467C14.8809 4.80904 14.1288 3.65289 13.2087 3.28735L9.21615 1.69765C8.53607 1.43412 7.44793 1.43412 6.78385 1.69765Z" stroke="#1C1C1C" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h1>Forgot Password?</h1>
                        <p class="mb-5">No worries, we will be sending you reset instructions on your email.</p>

                        <form id="forgotPassword_Form" method="POST" action="#" class="mb-5">
                            @csrf

                            <div class="mb-3">
                                <div class="form-group">
                                    <div class="input-container">
                                        <span class="input-group-text bg-white" style="border-right: none; height: 38px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="18" viewBox="0 0 21 18" fill="none">
                                                <path d="M15.1176 6.17647L12.1718 8.52941C11.2024 9.30118 9.61177 9.30118 8.64235 8.52941L5.70588 6.17647M15.1176 17H5.70588C2.88235 17 1 15.5882 1 12.2941V5.70588C1 2.41176 2.88235 1 5.70588 1H15.1176C17.9412 1 19.8235 2.41176 19.8235 5.70588V12.2941C19.8235 15.5882 17.9412 17 15.1176 17Z" stroke="#1C1C1C" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                        <label for="email" class="visually-hidden">Email Address</label>
                                        <input class="form-control" type="text" name="email" id="email" placeholder=" " required style="border-left: none;">
                                        <div class="placeholder-label">Email Address</div>
                                    </div>
                                </div>
                            </div>


                            <div class="text-center">
                                <button class="btn custom-reset-btn" type="submit">Send Reset Instructions</button>
                            </div>
                        </form>
                        @if ($errors->any())
                            <div class="alert alert-danger mt-3">
                                @if ($errors->has('credentials'))
                                    {{ $errors->first('credentials') }}
                                @elseif ($errors->has('usernameNotice'))
                                    {{ $errors->first('usernameNotice') }}
                                @elseif ($errors->has('passwordNotice'))
                                    {{ $errors->first('passwordNotice') }}
                                @endif
                            </div>
                        @endif
                        <div id="error-message" class="error-message"></div>

                    </div>
                </div>
                <div id="changedState" class="d-none">
                    <div class="d-flex flex-column" style="height: 100%; width: 100%">
                        <div class="email-icon mt-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M9.99997 17.1216H5.67564C3.08105 17.1216 1.35132 15.7432 1.35132 12.527V6.09459C1.35132 2.87838 3.08105 1.5 5.67564 1.5H14.3243C16.9189 1.5 18.6486 2.87838 18.6486 6.09459V8.85135M14.3243 6.55405L11.6173 8.85135C10.7265 9.60486 9.26483 9.60486 8.37402 8.85135L5.67564 6.55405M18.6486 18.5L17.7838 17.5811M15.3621 17.9486C16.0961 17.9486 16.8001 17.6388 17.3191 17.0874C17.8381 16.5359 18.1297 15.788 18.1297 15.0081C18.1297 14.2282 17.8381 13.4803 17.3191 12.9288C16.8001 12.3774 16.0961 12.0676 15.3621 12.0676C14.6281 12.0676 13.9242 12.3774 13.4052 12.9288C12.8861 13.4803 12.5946 14.2282 12.5946 15.0081C12.5946 15.788 12.8861 16.5359 13.4052 17.0874C13.9242 17.6388 14.6281 17.9486 15.3621 17.9486Z" stroke="#1C1C1C" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="mt-4 mb-2">
                            <h1>Email Sent!</h1>
                            <p>We have sent password reset instructions to your email. Please check your inbox.</p>
                        </div>
                        <form id="resetCode_Form" method="POST" action="#">
                            @csrf
                            <div class="input-group group-input mb-3">
                                <!-- Add 6 input boxes for the reset code -->
                                <input class="form-controls" type="text" name="digit1" maxlength="1" required>
                                <input class="form-controls" type="text" name="digit2" maxlength="1" required>
                                <input class="form-controls" type="text" name="digit3" maxlength="1" required>
                                <input class="form-controls" type="text" name="digit4" maxlength="1" required>
                                <input class="form-controls" type="text" name="digit5" maxlength="1" required>
                                <input class="form-controls" type="text" name="digit6" maxlength="1" required>
                            </div>
                            <div class="text-center">
                                <button class="btn custom-reset-btn" type="submit">Continue</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="passwordState" class="d-none">
                    <div class="d-flex flex-column" style="height: 100%; width: 100%">
                        <div class="email-icon mt-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M9.99997 17.1216H5.67564C3.08105 17.1216 1.35132 15.7432 1.35132 12.527V6.09459C1.35132 2.87838 3.08105 1.5 5.67564 1.5H14.3243C16.9189 1.5 18.6486 2.87838 18.6486 6.09459V8.85135M14.3243 6.55405L11.6173 8.85135C10.7265 9.60486 9.26483 9.60486 8.37402 8.85135L5.67564 6.55405M18.6486 18.5L17.7838 17.5811M15.3621 17.9486C16.0961 17.9486 16.8001 17.6388 17.3191 17.0874C17.8381 16.5359 18.1297 15.788 18.1297 15.0081C18.1297 14.2282 17.8381 13.4803 17.3191 12.9288C16.8001 12.3774 16.0961 12.0676 15.3621 12.0676C14.6281 12.0676 13.9242 12.3774 13.4052 12.9288C12.8861 13.4803 12.5946 14.2282 12.5946 15.0081C12.5946 15.788 12.8861 16.5359 13.4052 17.0874C13.9242 17.6388 14.6281 17.9486 15.3621 17.9486Z" stroke="#1C1C1C" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="mt-4 mb-4">
                            <h1>Set New Password</h1>
                            <p>Your new password must be at least 8 characters.</p>
                        </div>
                        <form id="resetPassword_Form" method="POST" action="#">
                            @csrf

                            <div class="mb-3">
                                <div class="form-group">
                                    <div class="input-container">
                                        <span class="input-group-text bg-white" style="border-right: none; height: 38px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <g opacity="0.5" clip-path="url(#clip0_2019_2823)">
                                                <path d="M15 9H15.01M16.555 3.84305L20.157 7.44505C20.4242 7.71221 20.6362 8.02939 20.7808 8.37847C20.9254 8.72755 20.9998 9.1017 20.9998 9.47955C20.9998 9.8574 20.9254 10.2316 20.7808 10.5806C20.6362 10.9297 20.4242 11.2469 20.157 11.5141L17.514 14.1571C17.2468 14.4243 16.9297 14.6362 16.5806 14.7808C16.2315 14.9254 15.8573 14.9999 15.4795 14.9999C15.1017 14.9999 14.7275 14.9254 14.3784 14.7808C14.0293 14.6362 13.7122 14.4243 13.445 14.1571L13.144 13.8561L6.586 20.4141C6.25372 20.7463 5.81507 20.9509 5.347 20.9921L5.172 21.0001H4C3.75507 21 3.51866 20.9101 3.33563 20.7473C3.15259 20.5846 3.03566 20.3603 3.007 20.1171L3 20.0001V18.8281C3.00011 18.3585 3.16543 17.904 3.467 17.5441L3.586 17.4141L4 17.0001H6V15.0001H8V13.0001L10.144 10.8561L9.843 10.5551C9.5758 10.2879 9.36384 9.97071 9.21923 9.62163C9.07462 9.27255 9.00019 8.8984 9.00019 8.52055C9.00019 8.1427 9.07462 7.76855 9.21923 7.41947C9.36384 7.07039 9.5758 6.75321 9.843 6.48605L12.486 3.84305C12.7532 3.57585 13.0703 3.36389 13.4194 3.21928C13.7685 3.07467 14.1427 3.00024 14.5205 3.00024C14.8983 3.00024 15.2725 3.07467 15.6216 3.21928C15.9707 3.36389 16.2878 3.57585 16.555 3.84305Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_2019_2823">
                                                <rect width="24" height="24" fill="white"/>
                                                </clipPath>
                                            </defs>
                                            </svg>
                                        </span>
                                        <label for="password" class="visually-hidden">Password</label>
                                        <input class="form-control" type="password" name="password" placeholder=" " required style="border-left: none;">
                                        <div class="placeholder-label">Password</div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="form-group">
                                    <div class="input-container">
                                        <span class="input-group-text bg-white" style="border-right: none; height: 38px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <g opacity="0.5" clip-path="url(#clip0_2019_2823)">
                                                <path d="M15 9H15.01M16.555 3.84305L20.157 7.44505C20.4242 7.71221 20.6362 8.02939 20.7808 8.37847C20.9254 8.72755 20.9998 9.1017 20.9998 9.47955C20.9998 9.8574 20.9254 10.2316 20.7808 10.5806C20.6362 10.9297 20.4242 11.2469 20.157 11.5141L17.514 14.1571C17.2468 14.4243 16.9297 14.6362 16.5806 14.7808C16.2315 14.9254 15.8573 14.9999 15.4795 14.9999C15.1017 14.9999 14.7275 14.9254 14.3784 14.7808C14.0293 14.6362 13.7122 14.4243 13.445 14.1571L13.144 13.8561L6.586 20.4141C6.25372 20.7463 5.81507 20.9509 5.347 20.9921L5.172 21.0001H4C3.75507 21 3.51866 20.9101 3.33563 20.7473C3.15259 20.5846 3.03566 20.3603 3.007 20.1171L3 20.0001V18.8281C3.00011 18.3585 3.16543 17.904 3.467 17.5441L3.586 17.4141L4 17.0001H6V15.0001H8V13.0001L10.144 10.8561L9.843 10.5551C9.5758 10.2879 9.36384 9.97071 9.21923 9.62163C9.07462 9.27255 9.00019 8.8984 9.00019 8.52055C9.00019 8.1427 9.07462 7.76855 9.21923 7.41947C9.36384 7.07039 9.5758 6.75321 9.843 6.48605L12.486 3.84305C12.7532 3.57585 13.0703 3.36389 13.4194 3.21928C13.7685 3.07467 14.1427 3.00024 14.5205 3.00024C14.8983 3.00024 15.2725 3.07467 15.6216 3.21928C15.9707 3.36389 16.2878 3.57585 16.555 3.84305Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_2019_2823">
                                                <rect width="24" height="24" fill="white"/>
                                                </clipPath>
                                            </defs>
                                            </svg>
                                        </span>
                                        <label for="password" class="visually-hidden">Repeat Password</label>
                                        <input class="form-control" type="password" name="confirm_password" placeholder=" " required style="border-left: none;">                                   
                                        <div class="placeholder-label">Repeat Password</div>
                                    </div>
                                </div>
                            </div>
                  
                            <div class="text-center">
                                <button class="btn custom-reset-btn" type="submit">Reset Password</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="finalState" class="d-none">
                    <div class="d-flex flex-column" style="height: 100%;">
                        <div class="mt-4 mb-4">
                            <h1>Password Reset Successful!</h1>
                            <p class="mb-5">Your password has been successfully reset.</p>
                        </div>
                        <div class="text-center">
                            <a href="{{ route('client.signin') }}" style="text-decoration: none;"><button class="btn custom-reset-btn mb-2">Sign In</button></a>
                            <a href="{{ route('client.signup') }}" style="text-decoration: none;"><button class="btn custom-reset-btn">Create New Account</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function goBack() {
            window.history.back();
        }

        $(document).ready(function () {
            $('#forgotPassword_Form').on('submit', function (event) {
                event.preventDefault();

                // Simulate email sending
                setTimeout(function () {
                    // Hide initial state
                    $('#initialState').addClass('d-none');

                    // Show changed state
                    $('#changedState').removeClass('d-none');
                }, 2000);
            });

            $('#resetCode_Form').on('submit', function (event) {
                event.preventDefault();

                // Hide changed state
                $('#changedState').addClass('d-none');

                // Show password state
                $('#passwordState').removeClass('d-none');
            });

            $('#resetPassword_Form').on('submit', function (event) {
                event.preventDefault();

                // Simulate password reset
                setTimeout(function () {
                    // Hide password state
                    $('#passwordState').addClass('d-none');

                    // Show final state
                    $('#finalState').removeClass('d-none');
                }, 2000);
            });
        });
    </script>
</body>

</html>