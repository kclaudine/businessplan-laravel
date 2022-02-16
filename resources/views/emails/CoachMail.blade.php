<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
</head>
<body>
    <h1>Contact Coach </h1>
    <p>Name : {{ $detail['name'] }}</p>
    <p>Email : {{ $detail['email'] }}</p>
    <p>Phone : {{ $detail['phone'] }}</p>
    <p>Choices :{{ $detail['choices'] }}</p>
    <p>Message : {{ $detail['msg'] }}</p>
</body>
</html>