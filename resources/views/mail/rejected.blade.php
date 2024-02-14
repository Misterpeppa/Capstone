<!DOCTYPE html>
<html>
<head>
    <title>Appointment Rejected</title>
    <style>
        p {
            color: rgba(28, 28, 28, 0.70);
            font-family: Inter;
            font-size: 18px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
        }
        .rejected{
            color: #C33834;
            font-family: Inter;
            font-size: 48px;
            font-style: normal;
            font-weight: 700;
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
            h1, .rejected{
                font-size: 28px;
            }
            .footer .col-md-3 {
            flex: 0 0 100%;
            max-width: 100%;
            text-align: start;
        }
        }

        @media (max-width: 576px) {
            h1, .rejected{
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
    <div class="container">
        <h1 class="rejected">Appointment Rejected</h1>
        <p>Sorry For The Inconvinience.</p>
        <p>{{ $appointment->clients->first_name}} {{ $appointment->clients->middle_name}} {{ $appointment->clients->last_name}}. </p>
        <p>Appointment Date: {{ $appointment->appointmentDate }}</p>
        <p>Appointment Time: {{ $appointment->appointmentTime }}</p>
        <p>Choose A Different Date and Time for an Appointment!</p>
        <!-- You can customize the content as needed -->
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
</body>
</html>