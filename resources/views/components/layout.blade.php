<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sos Assos</title>
    <meta name="description" content="Sos Assos, la plateforme de l'UTC pour les associations étudiantes !">
    <!-- google referrencement -->
    <meta name="google-site-verification" content="eEvxu7m_gTU5QrB3aQ9WXy0QnOzYb590bHndzKiYSTk" />
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
    <x-navbar/>
    <div id="content-wrap">
        {{$slot}}
    </div>
    <div id="footer">
        <x-footer/>
    </div>
</div>
</body>
</html>
