<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        @fonts

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif

        <style>
            body {
                font-family: system-ui, -apple-system, sans-serif;
                background-color: #f1f5f9;
                color: #0f172a;
                margin: 0;
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 24px;
            }

            .card {
                background: #ffffff;
                border: 1px solid #e2e8f0;
                border-radius: 12px;
                padding: 32px;
                max-width: 480px;
                width: 100%;
                box-shadow: 0 8px 24px rgba(15, 23, 42, 0.06);
                text-align: center;
            }

            .title {
                margin: 0 0 8px;
                font-size: 28px;
                color: #2563eb;
            }

            .subtitle {
                margin: 0 0 20px;
                color: #475569;
                line-height: 1.5;
            }

            .btn {
                display: inline-block;
                background: #2563eb;
                color: #ffffff;
                text-decoration: none;
                padding: 10px 18px;
                border-radius: 8px;
                font-weight: 600;
            }

            .btn:hover {
                background: #1d4ed8;
            }
        </style>
    </head>
    <body>
        <div class="card">
            <h1 class="title">Hello from Laravel!</h1>
            <p class="subtitle">Simple CSS is now active on this page.</p>
            <a href="/" class="btn">Back Home</a>
        </div>
    </body>
</html>