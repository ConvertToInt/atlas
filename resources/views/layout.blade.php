<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.1/css/bulma.css" />
    <title>Atlas | Scottish Autism Training</title>

    @yield('content')

    <style>
        html{
            background-color:hsl(0, 0%, 92%);
        }
    </style>
</head>
<body>
    <div class="columns navbar">
        <div class="column nav button pt-5" style="border:2px solid black; background-color:#d53021; height:5em">
            <a href="{{ route('home') }}"><h1 class="title">Home</h1></a>
        </div>
        <div class="column nav button pt-5" href="{{ route('about') }}" style="border:2px solid black; background-color:#dc8432; height:5em">
            <a href="{{ route('about') }}"><h1 class="title">About Us</h1></a>
        </div>
        <div class="column nav button pt-5" href="{{ route('services') }}" style="border:2px solid black; background-color:#ffd94a; height:5em">
            <a href="{{ route('services') }}"><h1 class="title">Services</h1></a>
        </div>
        <div class="column nav button pt-5" href="{{ route('contact') }}" style="border:2px solid black; background-color:#c0e749; height:5em">
            <a href="{{ route('contact') }}"><h1 class="title">Contact Us</h1></a>
        </div>
        <div class="column nav button pt-5" href="" style="border:2px solid black; background-color:#8a31eb; height:5em">
            <h1 class="title">[Socials]</h1>
        </div>
    </div>

    @yield('content')
    
</body>
</html>