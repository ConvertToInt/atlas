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
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <title>Atlas | Scottish Autism Training</title>

    @yield('head')

    <style>

        *{
            font-family: 'Balsamiq Sans', cursive;
        }
        html{
            background-color:hsl(0, 0%, 92%);
        }
        .inverted{
            color:green !important;
            background-color: black !important;
        }
        .defaultScheme{
            background: linear-gradient( -45deg, #c0e749, #c0e749 50%, #ffd94a 50%, #ffd94a 50%, #ffd94a 50%);
        }
        .invertedScheme{
            background: linear-gradient( -45deg, green, green 50%, white 50%, white 50%, black 50% );
        }

        .font-sm{
            font-size:1.75em !important;
            padding-top:7.5px
        }

        .font-md{
            font-size:2em !important;
            padding-top:4px
        }

        .font-lg{
            font-size:2.5em !important; 
        }
        .access-button{
            width:35px;
            height:35px;
            border-radius:100%;
            border:2px solid black;
            display:inline-block;
        }
        .navbar-link{
            background-color:rgba(0,0,0,0) !important;
        }
        .nav{
            border:2px solid black;
            height:4.5em !important;
            border-radius:0;
            padding-top:1.25em
        }

        .hoverable:hover{
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.10), 0 6px 20px 0 rgba(0, 0, 0, 0.09);
            cursor:pointer;
        }

        footer{
            margin-top:60px;
            background-color:#e9c543;
            text-align: center;
            padding:12px 0 17px 0;
            font-weight:700;
            letter-spacing:3px;
            border-top:2px solid black
        }

        .socials{
            display: inline-block;
            width: 100px;
            height: 100px;
            background:#e9c543;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            background-position:50% 50%;
            background-repeat:no-repeat; 
        }
        #facebook{
            background-image: url('{{asset("facebook.png")}}'); 
            background-size: 75px 75px;
        }

        #twitter{
            background-image: url('{{asset("twitter.png")}}'); 
            background-size: 80px 70px;
        }

        #youtube{
            background-image: url('{{asset("youtube.png")}}');
            background-size: 80px 60px;
        }
    </style>
</head>
<body>
    <div class="columns navbar mb-6" style="background-color:hsl(0, 0%, 92%);">
        {{-- <div class="column nav is-1" style="background-color:#d53021;">
            <img class="mt-0 pt-0 ml-5"src="topleft.jpg" alt="centered image" style="width:50px; margin-bottom:-10px"/>
        </div> --}}
        <div class="column nav button invertable" style="background-color:#d53021;">
            <a href="{{ route('home') }}"><h1 class="title font-md invertable sizeable">Home</h1></a>
        </div>
        <div class="column nav button invertable" href="{{ route('about') }}" style="background-color:#dc8432;">
            <a href="{{ route('about') }}"><h1 class="title font-md invertable sizeable">About Us</h1></a>
        </div>
        <div class="column nav button invertable" href="{{ route('services') }}" style="background-color:#ffd94a;">
            <a href="{{ route('services') }}"><h1 class="title font-md invertable sizeable">Services</h1></a>
        </div>
        <div class="column nav button invertable" href="{{ route('contact') }}" style="background-color:#c0e749;">
            <a href="{{ route('contact') }}"><h1 class="title font-md invertable sizeable">Contact Us</h1></a>
        </div>
        <div class="column nav is-1 pl-5 invertable" href="" style="background-color:#8a31eb;">
            <span class="navbar-item has-dropdown is-hoverable">
                <i class="fas fa-cog is-size-2 navbar-link is-arrowless has-text-black-bis invertable pt-0"></i>
                <div class="navbar-dropdown is-right is-boxed is-size-6">
                    <a class="navbar-item font-sm">
                        Aa
                    </a>
                    <a class="navbar-item has-text-weight-medium font-md">
                        Aa
                    </a>
                    <a class="navbar-item has-text-weight-bold font-lg">
                        Aa
                    </a>
                    <hr class="navbar-divider">
                    <div class="navbar-item is-size-4">
                        <div class="defaultScheme access-button hoverable"></div> &nbsp;&nbsp; <div class="invertedScheme hoverable access-button"></div>
                    </div>
                </div>
            </span>
        </div>
    </div>

    @yield('content')

    <footer>
        <div class="columns is-centered pt-4 invertable mb-1">
            <div class="column is-5 invertable">
                <p>ATLAS is an autism-led social enterprise.</p>
                <br> 
                <p>We provide training and advice.</p>
                <br>
                <p><a href="{{route('contact')}}">Get in touch by clicking this link</a></p>
                <br> 
            </div>
            <div class="column is-4 pt-4">
                <a href="https://www.facebook.com/pg/autismATLAS/posts/"><div class="socials invertable" id="facebook"></div></a>
                <div class="socials invertable" id="twitter"></div>
                <div class="socials invertable" id="youtube"></div>
            </div>
        </div>
        &#169; TOM DALGLEISH DESIGNS . ALL RIGHTS RESERVED.
        
    </footer>

    <script>

        $(".defaultScheme").click(function(event){
            $('.invertable').removeClass('inverted');
        });

        $(".invertedScheme").click(function(event){
            $('.invertable').addClass('inverted');
        });

        $(".font-sm").click(function(event){
            $('.sizeable').removeClass('font-lg font-md').addClass('font-sm');
        });

        $(".font-md").click(function(event){
            $('.sizeable').removeClass('font-lg font-sm').addClass('font-md');
        });

        $(".font-lg").click(function(event){
            $('.sizeable').removeClass('font-md font-sm').addClass('font-lg');
        });

    </script>

</body>
</html>