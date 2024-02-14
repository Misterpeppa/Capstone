<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        p {
            color: rgba(28, 28, 28, 0.70);
            font-family: Inter;
            font-size: 18px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
        }
        
        h1 {
            color: #1C1C1C;
            font-family: Inter;
            font-size: 48px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
        }
        
        .header {
            background: rgba(4, 91, 98, 0.10);
            padding: 20px 0;
        }
        @media (max-width: 767px){
            h1{
                font-size: 28px;
            }
            .footer .col-md-3 {
            flex: 0 0 100%;
            max-width: 100%;
            text-align: start;
        }
        }

        @media (max-width: 576px) {
            h1{
                font-size: 24px;
            }
            .footer .col-md-3 {
            flex: 0 0 100%;
            max-width: 100%;
            text-align: start;
        }
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <!-- Header -->
    <div class="row header">
        <div class="col-1">
            <img src="dogs&cats.png" style="width: 80px;height: 80px;" />
        </div>
        <div class="col-11 d-flex align-items-center">
            <h1>TAGAPO DOGS & CATS VETERINARY CLINIC</h1>
        </div>
    </div>
</div>

<div class="container mt-5">
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

<footer class="footer py-4" style="background: rgba(4, 91, 98, 0.10);">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3">
            <div class="col-md-3"><img src="dogs&amp;cats.png" style="width: 50px;height: 50px;flex-shrink: 0;" /></div>
            <div class="col-md">
                <p style="color: #000;font-family: Inter;font-size: 16px;font-style: normal;font-weight: 400;line-height: normal;margin-bottom: 0;">Copyright © 2023, MediPaws | All Rights Reserved |</p>
                <a href="https://tabler.io/icons" style="color: #000;font-family: Inter;font-size: 16px;font-style: normal;font-weight: 400;line-height: normal;margin-bottom: 0;">Icons-by-Tabler-Icons</a>
            </div>
            <div class="col-md">
                <ul class="list-inline my-2">
                    <li class="list-inline-item"><a class="link-primary" href="https://medipaws.online">Link to our official website</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
