<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <!-- google referrencement -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/favicon.png')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&display=swap" rel="stylesheet">
    <!-- Page footer styles -->
    <style>
        #page-container {
            position: relative;
            min-height: 100vh;
        }

        #content-wrap {
            padding-bottom: 6rem; /* Footer height */
        }

        #footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 6rem; /* Footer height */
        }
    </style>
</head>
<body
    @if(isset($color))
        class="bg-{{$color}}"
    @else
        class="bg-white"
    @endif
    style=" font-family: 'Comfortaa', cursive;">
<div id="page-container">
</div>
</body>
</html>
