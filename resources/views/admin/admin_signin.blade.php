<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <title>Customer Sign In</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('includes.head')

    <link rel="stylesheet" href="{{ asset('css/admin/admin_signin.css') }}"> 
</head>

<body>
    <section class="container-fluid signin-wrapper">
        <div class="bg-img">
            <div class="overlay"></div>
            <img src="{{ asset('img/clientclinic.jpg') }}" alt="Logo">
        </div>

        <div class="row custom-row justify-content-center align-items-center">
            <div class="col-md-4 signin-col mt-5">
                <div class="clientlogo d-flex justify-content-center">
                    <img src="{{ asset('img/dogs&cats.png') }}" class="mb-5" alt="Logo">
                </div>

                <form id="signin_Form" class="signin-form" method="POST" action="#">
                    @csrf
                    <div class="mb-3">
                        <div class="form-group">
                            <div class="input-container">
                                <label for="admin_ID" class="visually-hidden">Admin ID</label>
                                <input class="form-control" type="text" name="admin_ID" id="admin_ID" placeholder="Admin ID" required>
                                <div class="placeholder-label">Admin ID</div>
                            </div>
                            <div class="invalid-feedback" id="usernameNotice">Incorrect Admin ID.</div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <div class="input-container">
                                <label for="password" class="visually-hidden">Password</label>
                                <input class="form-control" type="password" name="password" id="password" placeholder="Enter Password" required>
                                <div class="placeholder-label">Password</div>
                            </div>
                            <div class="invalid-feedback" id="passwordNotice">Incorrect password.</div>
                        </div>
                    </div>
                    <div>
                        <button class="btn custom-signin-btn" type="submit">Sign In</button>
                    </div>
                </form>

            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



</body>

</html>