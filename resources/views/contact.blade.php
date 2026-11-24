<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MY CONTACT INFO</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f5f9;
            color: #0f172a;
            margin: 0;
            padding: 40px 20px;
            text-align: center;
        }

        .box {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 32px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(15, 23, 42, 0.08);
        }

        h1 {
            margin-top: 0;
            color: #2563eb;
            font-size: 28px;
        }

        .nav {
            margin: 24px 0;
            display: flex;
            justify-content: center;
            gap: 12px;
        }

        .nav a {
            text-decoration: none;
            background-color: #2563eb;
            color: #ffffff;
            padding: 8px 16px;
            border-radius: 6px;
            font-weight: bold;
        }

        .nav a:hover {
            background-color: #1d4ed8;
        }

        .info {
            margin-top: 24px;
            text-align: left;
            display: inline-block;
            line-height: 1.8;
        }

        .info p {
            margin: 6px 0;
        }
    </style>
</head>
<body>
    <div class="box">
        <h1>Contact</h1>
        <nav class="nav">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('contact') }}">Contact</a>
            <a href="{{ route('about') }}">About Me</a>
        </nav>
        <div class="info">
            <p><strong>Number</strong>: 0966 224 2651</p>
            <p><strong>Address</strong>: D - 1 Punta, Nasipit, ADN</p>
            <p><strong>Email</strong>: isidritotubo@gmail.com</p>
        </div>
    </div>
</body>
</html>