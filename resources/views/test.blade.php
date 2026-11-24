<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My First Laravel App</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            color: #1e293b;
            margin: 0;
            padding: 40px 20px;
            text-align: center;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            padding: 32px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }

        h1 {
            margin-top: 0;
            color: #2563eb;
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

        .footer {
            margin-top: 24px;
            font-size: 0.9rem;
            color: #64748b;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to My First Laravel App</h1>
        <nav class="nav">
            <a href="{{ route('home') }}">home</a>
            <a href="{{ route('contact') }}">contact</a>
            <a href="{{ route('test') }}">test</a>
        </nav>
        <p class="footer">Developed: Ralph Derder</p>
    </div>
</body>
</html>