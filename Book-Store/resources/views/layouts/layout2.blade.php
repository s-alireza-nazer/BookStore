<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    @stack('css')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    @stack('js')
    <style>
        .operations-btn {
            background: none;
            border: none;
            color: rgb(10, 102, 194);
            text-decoration: none;
            cursor: pointer;
            font-size: inherit;
            padding: 0;
            display: inline;
        }

        .operations-btn:hover {
            color: rgb(229, 86, 4);
        }
    </style>
</head>

<body>
    @include('navbar')

    <div class="wrapper">
        <div class="content container py-5">
            @yield('content')
        </div>
        @include('layouts.footer2')
    </div>
</body>

</html>