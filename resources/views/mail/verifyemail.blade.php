<!DOCTYPE html>
<html>
<head>
    <style>
        /* Add your email styles here */
    </style>
</head>
<body>

<h1>Verify Your Email Address</h1>

<p>Thanks for signing up! To complete the registration process, please click the button below to verify your email address:</p>

<a href="{{ $verificationUrl }}" 
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

</body>
</html>
