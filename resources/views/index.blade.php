<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MailMe</title>
    <style>
        a{
            text-decoration: none;
            background-color:aquamarine;
            padding: 15px;
            border-radius: 10px;
            color: black;
            cursor: pointer;
        }

        a:hover{
            background-color: aqua
        }
    </style>
</head>
<body>
    <a href="{{ route('mailMe') }}">Mail me</a>
</body>
</html>