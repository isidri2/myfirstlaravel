<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ABOUT ME</title>
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

        .bio {
            margin-top: 24px;
            font-size: 16px;
            line-height: 1.6;
            color: #334155;
        }
    </style>
</head>
<body>
    <div class="box">
        <h1>About Me</h1>
        <nav class="nav">
                <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('contact') }}">Contact</a>
            <a href="{{ route('about') }}">About Me</a>
        </nav>
        <p class="bio">yolo, risk taker.</p>
    </div>
</body>
</html>