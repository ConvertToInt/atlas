<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.1/css/bulma.css" />
    <script src="https://kit.fontawesome.com/09255c1d6c.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@700&display=swap" rel="stylesheet">
    <title>Atlas | Scottish Autism Training</title>

    @yield('head')

    <style>
        html{
            background-color:hsl(0, 0%, 92%);
        }

        body{
            font-family: 'Balsamiq Sans', cursive;
        }
    </style>
</head>
<body>
    <div class="columns navbar mb-6">
        <div class="column nav button pt-5" style="border:2px solid black; background-color:#d53021; height:4.5em; border-radius:0;">
            <a href="{{ route('home') }}"><h1 class="title">Home</h1></a>
        </div>
        <div class="column nav button pt-5" href="{{ route('about') }}" style="border:2px solid black; background-color:#dc8432; height:4.5em; border-radius:0;">
            <a href="{{ route('about') }}"><h1 class="title">About Us</h1></a>
        </div>
        <div class="column nav button pt-5" href="{{ route('services') }}" style="border:2px solid black; background-color:#ffd94a; height:4.5em; border-radius:0;">
            <a href="{{ route('services') }}"><h1 class="title">Services</h1></a>
        </div>
        <div class="column nav button pt-5" href="{{ route('contact') }}" style="border:2px solid black; background-color:#c0e749; height:4.5em; border-radius:0;">
            <a href="{{ route('contact') }}"><h1 class="title">Contact Us</h1></a>
        </div>
        <div class="column nav button pt-5" href="" style="border:2px solid black; background-color:#8a31eb; height:4.5em; border-radius:0;">
            <h1 class="title"></h1>
        </div>
    </div>

    @yield('content')
    
</body>
</html>