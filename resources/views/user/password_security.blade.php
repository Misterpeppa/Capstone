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
                                <li class="list-group-item nav-item mb-2"><a href="{{ route('client.notification') }}">Notifications</a></li>
                                <li class="list-group-item nav-item active mb-2"><a href="{{ route('client.password') }}">Password and Security</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row mb-3">
                            <div class="col">
                                <h1 class="mb-0">Password and Security</h1>
                            </div>
                    </div>
                    <div class="card pass-and-secucontainer mb-3" style="border: none;">
                        <div class="d-flex flex-column align-items-center">
                            <div class="d-flex flex-row justify-content-lg-between align-items-lg-center" style="height: 100px;border: 1px solid rgba(0,0,0,0.25);border-radius: 12px;padding: 0;padding-top: 0px;padding-bottom: 0px;width: 660px;margin-top: 20px;max-width: 100%;">
                                <div class="d-flex d-xxl-flex flex-column align-items-xxl-start" style="width: 450px;margin-left: 20px;">
                                    <h1 style="font-family: Montserrat, sans-serif;font-size: 18px;--bs-body-font-weight: 600;">Password</h1>
                                    <p style="font-size: 12px;">Set a unique password to protect your account</p>
                                </div>
                                <div class="d-xxl-flex justify-content-sm-center justify-content-lg-center align-items-lg-center" style="height: 50px;width: 200px;">
                                    <button class="btn btn-primary" type="button" style="width: 150px;font-size: 12px;margin-top: 10px;border-radius: 8px;border: 0.5px solid rgba(0, 0, 0, 0.15);background: #F9F9F9;color: #1C1C1C;">Change Password</button>
                                </div>
                            </div>
                            <div class="d-flex flex-row justify-content-lg-between align-items-lg-center" style="height: 100px;border: 1px solid rgba(0,0,0,0.25);border-radius: 12px;padding: 0;padding-top: 0px;padding-bottom: 0px;width: 660px;margin-top: 20px;max-width: 100%;">
                                <div class="d-flex d-xxl-flex flex-column align-items-xxl-start" style="width: 450px;margin-left: 20px;">
                                    <h1 style="font-family: Montserrat, sans-serif;font-size: 18px;--bs-body-font-weight: 600;">2-step verification</h1>
                                    <p style="font-size: 12px;">Make your account extra secure by enable 2-step verification</p>
                                </div>
                                <div class="d-xxl-flex justify-content-sm-center justify-content-lg-end align-items-lg-center" style="height: 50px;width: 100px;margin-right: 20px;"><label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label></div>
                            </div>
                            <div class="d-flex flex-row justify-content-lg-between align-items-lg-center" style="height: 100px;border: 1px solid rgba(0,0,0,0.25);border-radius: 12px;padding: 0;padding-top: 0px;padding-bottom: 0px;margin-bottom: 20px;width: 660px;margin-top: 20px;max-width: 100%;">
                                <div class="d-flex d-xxl-flex flex-column align-items-xxl-start" style="width: 450px;margin-left: 20px;">
                                    <h1 style="font-family: Montserrat, sans-serif;font-size: 18px;--bs-body-font-weight: 600;">Delete Account</h1>
                                    <p style="font-size: 12px;">This will permanently delete your account. All your data cannot be retrieved.</p>
                                </div>
                                <div class="d-xxl-flex justify-content-sm-center justify-content-lg-center align-items-lg-center" style="height: 50px;width: 200px;">
                                    <button class="btn btn-primary" type="button" style="width: 100px;font-size: 12px;margin-top: 10px;margin-left: 50px;color: #DA534F;background: #F9F9F9;border: 0.5px solid rgba(0, 0, 0, 0.15);border-radius: 8px;">Delete</button>
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