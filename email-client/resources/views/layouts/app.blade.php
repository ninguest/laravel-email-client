<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Styles -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            width: 50%;
            margin: auto;
            overflow: hidden;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
            margin-top: 50px;
        }

        .controlform {
            padding-right: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"], input[type="email"], textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }

        button {
            display: block;
            width: 100%;
            padding: 10px 15px;
            border: none;
            color: #fff;
            background-color: #007BFF;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
        }

        button:hover {
            background-color: #0056b3;
        }

        .btn-secondary {
            background-color: #007bff;
            padding: 10px 15px;
            margin-top: 10px;
            text-decoration: none;
            color: #fff;
            border-radius: 5px;
        }

        .btn-secondary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">

                <a href="javascript:history.back()" class="btn btn-secondary mt-3">Back</a>
                <a href="/emails" class="btn btn-secondary mt-3">List Emails</a>
                <a href="/emails/create" class="btn btn-secondary mt-3">Create Email</a>
                <a href="/" class="btn btn-secondary mt-3">Laravel Home</a>
                
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
</body>
</html>