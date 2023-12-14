<!DOCTYPE html>
<html lang="en">

<head>
    <title>Customer Notification</title>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="icon" href="/img/dogs&cats.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:300,400,500,600,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('assets/css/bs-theme-overrides.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Bootstrap-4-Custom-Radio.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Multi-step-form.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Navbar-Centered-Links-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user/client.css') }}">

</head>

<body>
<header>
    @include('includes.user_header')
    </header>   
    <main>
        <div class="container mb-5">
            <div class="row notif">
                <div class="col-lg-4 custom-sidebar">
                    <div class="card mt-4" style="border: none;">
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item nav-item active mb-2"><a href="{{ route('client.notification') }}">Notifications</a></li>
                                <li class="list-group-item nav-item mb-2"><a href="#">Password and Security</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row mb-3">
                        <div class="col">
                            <h1 class="mb-0">Notification Settings</h1>
                        </div>
                    </div>
                    <div class="card email-notification-container mb-3">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="card-body">
                                    <h5 class="card-title">Email Notifications</h5>
                                    <p class="card-text">Get emails to stay updated even when you're not here. You can turn these off.</p>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <div class="d-flex align-items-start">
                                        <div>
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>                                   
                                        <div class="ms-3">
                                            <h6 class="mb-0">Appointment Confirmation/Cancellation</h6>
                                            <p class="mb-0">Get to know if your appointment has been approved.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body" style="height: 75px;">
                                    <div class="d-flex align-items-start">
                                        <div>
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                        <div class="ms-3">
                                            <h6 class="mb-0">Appointment Reminders</h6>
                                            <p class="mb-0">Get reminded prior to your scheduled appointment so you don't miss it.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex align-items-start">
                                        <div>
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                        <div class="ms-3">
                                            <h6 class="mb-0">Pet Health Updates</h6>
                                            <p class="mb-0">Get updated to your pet's health.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex align-items-start">
                                        <div>
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                        <div class="ms-3">
                                            <h6 class="mb-0">Pet Care</h6>
                                            <p class="mb-0">Get reminded of your pet's next vaccination.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex align-items-start">
                                        <div>
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                        <div class="ms-3">
                                            <h6 class="mb-0">Tips and Tricks</h6>
                                            <p class="mb-0">Want to know tips and tricks from your veterinarian? Turn notifications on to receive emails.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex align-items-start">
                                        <div>
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                        <div class="ms-3">
                                            <h6 class="mb-0">News and Events</h6>
                                            <p class="mb-0">Feel free to participate in special events.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card text-notification-container mb-5">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="card-body">
                                    <h5 class="card-title">Text Notifications</h5>
                                    <p class="card-text">Get text messages to stay updated on your appointments. You can turn these off.</p>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <div class="d-flex align-items-start">
                                        <div>
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>                                   
                                        <div class="ms-3">
                                            <h6 class="mb-0">Appointment Confirmation/Cancellation</h6>
                                            <p class="mb-0">Get to know if your appointment has been approved.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body" style="height: 75px;">
                                    <div class="d-flex align-items-start">
                                        <div>
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                        <div class="ms-3">
                                            <h6 class="mb-0">Appointment Reminders</h6>
                                            <p class="mb-0">Get reminded prior to your scheduled appointment so you don't miss it.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex align-items-start">
                                        <div>
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                        <div class="ms-3">
                                            <h6 class="mb-0">Pet Health Updates</h6>
                                            <p class="mb-0">Get updated to your pet's health.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <footer class="d-flex align-items-center" style="background: rgba(4,91,98,0.1);height: 200px;">
        <div class="container d-flex" style="height: 200px;">
            <div class="col d-lg-flex d-xl-flex d-xxl-flex justify-content-xl-start align-items-xl-center"><img class="flex-md-shrink-0 flex-lg-shrink-0 flex-xl-shrink-0 flex-xxl-shrink-0" src="{{ asset('img/dogs&cats.png') }}" width="167" height="149"></div>
            <div class="col"></div>
            <div class="col"></div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>