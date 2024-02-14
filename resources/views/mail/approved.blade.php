<!DOCTYPE html>
<html>
<head>
    <title>Appointment Approved</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #28a745;
        }

        p {
            line-height: 1.6;
        }

        .footer {
            margin-top: 20px;
            padding-top: 10px;
            border-top: 1px solid #ddd;
            text-align: center;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Appointment Approved</h1>
        <p>Your appointment has been approved.</p>
        <p>{{ $appointment->clients->first_name}} {{ $appointment->clients->middle_name}} {{ $appointment->clients->last_name}}. </p>
        <p>Appointment Date: {{ $appointment->appointmentDate }}</p>
        <p>Appointment Time: {{ $appointment->appointmentTime }}</p>
        <p>Thank you for choosing our service!</p>
        <!-- You can customize the content as needed -->
    </div>
    <div class="footer">
        <p>© 2023 Your Company. All rights reserved.</p>
    </div>
</body>
</html>