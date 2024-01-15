<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Your Password</title>
</head>
<body>

    <h1>Reset Your Password</h1>

    <p>Click the button below to reset your password:</p>

    Your reset code is: **{{ $resetCode }}**

    <p>If you did not request a password reset, no further action is required.</p>

    <p>Thanks,<br>{{ config('app.name') }}</p>

</body>
</html>
