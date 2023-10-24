<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <title>Customer Sign In</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('includes.head')
    <link rel="icon" href="/img/dogs&cats.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <section class="container-fluid signin-wrapper">
        <div class="signin_bg_img">
            <div class="signin_overlay"></div>
            <img src="{{ asset('img/clientclinic.jpg') }}" alt="Logo">
        </div>

        <div class="row custom-row justify-content-center align-items-center">
            <div class="col-md-4 signin_col mt-5">
                <div class="signin_form_header">
                    <img src="{{ asset('img/Frame%20416.png') }}" alt="Logo">
                </div>

                <div class="signin_heading">
                    <h1>Welcome</h1>
                    <p>Please sign in to your account.</p>
                </div>
                <form id="signin_Form" method="POST" action="{{ route('client.auth') }}">
                    @csrf
                    <div>
                        <div class="form-group">
                            <div class="signin_input_container">
                                <label for="email" class="visually-hidden">Email Address</label>
                                <input class="form-control" type="text" name="email" id="email" placeholder="Email Address" required maxlength="50">
                                <div class="placeholder-label">Email Address</div>
                            </div>
                            <div class="invalid-feedback" id="usernameNotice">Incorrect username.</div>
                        </div>
                    </div>
                    <div>
                        <div class="form-group">
                            <div class="signin_input_container">
                                <label for="password" class="visually-hidden">Password</label>
                                <input class="form-control" type="password" name="password" id="password" placeholder="Password" required maxlength="50">
                                <div class="placeholder-label">Password</div>
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

                            <div class="invalid-feedback" id="passwordNotice">Incorrect password.</div>
                        </div>
                    </div>

                    @if ($errors->any())
                    <div class="alert alert-danger mt-2">
                        @if ($errors->has('credentials'))
                            {{ $errors->first('credentials') }}
                        @elseif ($errors->has('usernameNotice'))
                            {{ $errors->first('usernameNotice') }}
                        @elseif ($errors->has('passwordNotice'))
                            {{ $errors->first('passwordNotice') }}
                        @endif
                    </div>
                    @endif

                    <div class="d-flex flex-row justify-content-between">
                        <div class="d-flex flex-row align-items-center justify-content-center signin_remember_me">
                            <label class="sign_in_switch">
                                <input type="checkbox">
                                <span class="sign_in_slider round"></span>
                            </label>
                            <p>Remember me</p>
                        </div>
                        <div class="signin_forgot">
                            <a href="#">Forgot password?</a>
                        </div>
                    </div>

                    <div class="signin_footer_buttons d-flex justify-content-between align-items-center align-self-stretch">
                        <div class="signin_create_acc">
                            <a href="{{ route('client.signup') }}">Create Account</a>
                        </div>

                        <div>
                            <button class="btn signin_custom_signin_btn" type="submit">Sign In</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
  document.addEventListener('DOMContentLoaded', function () {
    const passwordInput = document.getElementById('password');
    const passwordToggle = document.getElementById('password-toggle');

    passwordToggle.addEventListener('click', function () {
      if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        passwordToggle.innerHTML = `
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
        passwordInput.type = 'password';
        passwordToggle.innerHTML = `
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
    });
  });
</script>



</body>

</html>
