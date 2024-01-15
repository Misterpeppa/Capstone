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

                <div id="changedState" class="d-none">
                    <div class="d-flex flex-column" style="height: 100%; width: 100%">
                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                        <div class="email-icon mt-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M9.99997 17.1216H5.67564C3.08105 17.1216 1.35132 15.7432 1.35132 12.527V6.09459C1.35132 2.87838 3.08105 1.5 5.67564 1.5H14.3243C16.9189 1.5 18.6486 2.87838 18.6486 6.09459V8.85135M14.3243 6.55405L11.6173 8.85135C10.7265 9.60486 9.26483 9.60486 8.37402 8.85135L5.67564 6.55405M18.6486 18.5L17.7838 17.5811M15.3621 17.9486C16.0961 17.9486 16.8001 17.6388 17.3191 17.0874C17.8381 16.5359 18.1297 15.788 18.1297 15.0081C18.1297 14.2282 17.8381 13.4803 17.3191 12.9288C16.8001 12.3774 16.0961 12.0676 15.3621 12.0676C14.6281 12.0676 13.9242 12.3774 13.4052 12.9288C12.8861 13.4803 12.5946 14.2282 12.5946 15.0081C12.5946 15.788 12.8861 16.5359 13.4052 17.0874C13.9242 17.6388 14.6281 17.9486 15.3621 17.9486Z" stroke="#1C1C1C" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="mt-4 mb-2">
                            <h1>Email Sent!</h1>
                            <p>We have sent password reset instructions to your email. Please check your inbox.</p>
                        </div>
                        <form  method="POST" action="{{ route('password.code') }}">
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
		$('#changedState').removeClass('d-none');

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