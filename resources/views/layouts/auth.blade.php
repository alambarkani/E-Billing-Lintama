<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        :root {
            --primary-color: #4361ee;
            --hover-color: #3b52c7;
        }

        body {
            background: #f8f9fa;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .auth-card {
            background: white;
            padding: 2.5rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .btn-google {
            background: #4285f4;
            color: white;
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            transition: background 0.3s ease;
        }

        .btn-google:hover {
            background: #357abd;
            color: white;
        }

        .google-icon {
            margin-right: 8px;
        }

        .separator {
            color: #6c757d;
            margin: 1.5rem 0;
            text-align: center;
            position: relative;
        }

        .separator:before,
        .separator:after {
            content: "";
            flex: 1;
            border-bottom: 1px solid #dee2e6;
            margin: auto;
        }

        .separator:before {
            margin-right: 1rem;
        }

        .separator:after {
            margin-left: 1rem;
        }

        .form-control {
            border-radius: 8px;
            padding: 12px;
        }

        .btn-primary {
            background: var(--primary-color);
            border: none;
            padding: 12px;
            border-radius: 8px;
            font-weight: 500;
        }

        .btn-primary:hover {
            background: var(--hover-color);
        }

        .text-primary {
            color: var(--primary-color) !important;
            font-weight: 500;
            text-decoration: none;
        }
    </style>
</head>
<body>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>