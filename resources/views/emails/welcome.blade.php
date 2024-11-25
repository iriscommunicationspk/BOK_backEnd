<!DOCTYPE html>
<html>

<head>
    <title>Welcome to {{ config('app.name') }}</title>
</head>

<body>
    <h1>Hello, {{ $name }}!</h1>
    <p>Thank you for registering with us. We are excited to have you on board!</p>
    <p>If you have any questions, feel free to reply to this email.</p>
    <p>Best regards,<br>{{ config('app.name') }} Team</p>
</body>

</html>
