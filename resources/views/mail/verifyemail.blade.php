<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" />
    <title>Verify Email</title>
    <link rel="icon" href="/img/dogs&cats.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter&amp;display=swap">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Noto+Sans:300,400,500,600,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('assets/css/newstyles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        *{
  padding: 0;
  margin: 0;
}
        body a {
  color: inherit;
  text-decoration: none;
}
body{
  display: flex;
  width: 100%;
  min-height: 100vh;
  flex-direction: column;
  background: #EFEFEF;
  margin: 0;
  padding: 0;
}

.email_text p {
  color: rgba(28, 28, 28, 0.70);
  font-family: Inter;
  font-size: 18px;
  font-style: normal;
  font-weight: 500;
  line-height: normal;
}

.email_text h1 {
    color: #1C1C1C;
  font-family: Inter;
  font-size: 48px;
  font-style: normal;
  font-weight: 700;
  line-height: normal;
}
    </style>
</head>
<body>


<header style="background: rgba(4, 91, 98, 0.10);width: 100%;position: static;left: 0;top: 0;">
        <div class="container-fluid">
            <div class="row d-xxl-flex justify-content-evenly align-items-xxl-center" style="height: 100px;">
                <div class="col-1" style="height: 100%;"><img src="dogs&amp;cats.png" style="width: 80px;height: 80px;flex-shrink: 0;" /></div>
                <div class="col-4 d-xxl-flex align-items-xxl-center" style="height: 100%;">
                    <h1>TAGAPO DOGS &amp; CATS VETERINARY CLINIC</h1>
                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid" style="padding: 0;margin: 0;overflow: hidden;height: 500px;">
        <div class="row d-md-flex justify-content-md-center" style="height: 100%;">
            <div class="col-8">
                <div class="email_text mt-5">
                <h1>Verify Your Email Address</h1>

                <p>Thanks for signing up! To complete the registration process, please click the button below to verify your email address:</p>
                <p>{{ $clients->first_name }} {{ $clients->middle_name }} {{ $clients->last_name }} {{ $clients-> suffix }} </p>

                <a href="{{ route('verification', ['id' => $clients->id, 'hash' => sha1($clients->getEmailForVerification())]) }}" 
                style="background-color: #4CAF50; /* Green */
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
                border-radius: 4px;">Verify Email</a>

                <p>If you did not create an account, no further action is required.</p>

                <p>Thanks,<br>
                    {{ config('app.name') }}
                </p>
                </div>
            </div>
        </div>
    </div>

    <footer class="justify-content-center align-content-center footer text-center py-4" style="background: rgba(4, 91, 98, 0.10);width: 100%;position: static;left: 0;bottom: 0;">
    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-lg-3">
            <div class="col-lg-3"><img src="dogs&amp;cats.png" style="width: 50px;height: 50px;flex-shrink: 0;" /></div>
            <div class="col">
                <p style="color: #000;font-family: Inter;font-size: 16px;font-style: normal;font-weight: 400;line-height: normal;margin-bottom: 0;">Copyright © 2023, MediPaws | All Rights Reserved |</p><a href="https://tabler.io/icons" style="color: #000;font-family: Inter;font-size: 16px;font-style: normal;font-weight: 400;line-height: normal;margin-bottom: 0;">Icons-by-Tabler-Icons</a>
            </div>
            <div class="col">
                <ul class="list-inline my-2">
                    <li class="list-inline-item list-inline-item"><a class="link-primary" href="#">Link ng website natin</a></li>
                </ul>
            </div>
        </div>
    </div>



</body>
</html>
