<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>
<body>
    <p>Hi Shaun</p>
    <p>You have received a new email.</p>
    <p>From: {{ $data->name }}</p>
    <p>Email: {{ $data->email }}</p>
    <p>Message: {{ $data->msg }}</p>
</body>
</html>