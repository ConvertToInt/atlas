<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/09255c1d6c.js" crossorigin="anonymous"></script>
    <title>Atlas | Scottish Autism Training</title>

    @yield('head')

    <style>

        *{
            font-family: 'Ubuntu';
            color:hsl(0, 0%, 28%) !important;
            scroll-behavior: smooth !important;
        }
        html{
            background-color:hsl(0, 0%, 92%);
        }

        .font-sm{
            font-size:1.85em;
            padding-top:4px
        }

        .font-lg{
            font-size:2.25em; 
        }
        .font-button{
            display:flex;
            width:55px;
            height:55px;
            border-radius:50%;
            border:3px solid hsl(0, 0%, 40%);
            align-items:center;
            justify-content:center;
            color:hsl(0, 0%, 30%);
        }

        /* hide font-button at 1230px and below */

        .spaced{
            margin:0 1rem 0 1rem;
        }

        .hoverable:hover{
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.10), 0 6px 20px 0 rgba(0, 0, 0, 0.09);
            cursor:pointer;
        }

        footer{
            background-color:hsl(0, 0%, 92%);
            text-align: center;
            padding:20px 0 17px 0;
            font-weight:700;
            letter-spacing:3px;
            border-top:8px dotted rgb(77, 0, 150);
        }

        .socials{
            display: inline-block;
            width: 100px;
            height: 100px;
            /* background:#e9c543; */
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

        .overline span, .underline span {
            display: inline-block;
        }

        .overline span::before
        {
            content: '';
            height: 7px;
            border-radius: 20px;
            display: block;
            margin-bottom:9px
        }

        .underline span::after
        {
            content: '';
            height: 6px;
            border-radius: 20px;
            display: block;
            margin-top:9px;
            opacity:0;
        }

        .underline span:hover:after
        {
            opacity:1;
        }

        .red span::before, .red span::after{
            background:#d53021;
        }

        .orange span::before, .orange span::after{
            background:#dc8432;
        }

        .yellow span::before, .yellow span::after{
            background:#ffd94a;
        }
        .green span::before, .green span::after{
            background:#c0e749;
        }
        .purple span::before, .purple span::after{
            background:#8a31eb;
        }

        ::-webkit-scrollbar {
            width: 12px;
        }
        ::-webkit-scrollbar-thumb {
            border-radius: 10px;
            background: rgba(0,0,0,0.2);
        }
        ::-webkit-scrollbar-track {
            border-radius: 10px;
            background: rgba(0,0,0,0.1);
        }

        .js body { display: none; }
        
    </style>

    <script>document.documentElement.className = document.documentElement.className.replace('no-js','js');</script>

</head>
<body>

    <nav class="navbar" role="navigation" aria-label="main navigation" style="border-bottom:1px solid hsl(0, 0%, 40%)">
        <div class="navbar-brand">
          <a class="navbar-item" href="{{route('home')}}">
            <img src="{{ asset('logo.jpg') }}" width="150" height="150">
          </a>
      
          <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
            <span class="burger" aria-hidden="true"></span>
            <span class="burger" aria-hidden="true"></span>
            <span class="burger" aria-hidden="true"></span>
          </a>
        </div>
      
        <div class="navbar-menu">
          <div class="navbar-start" style="flex-grow: 1; justify-content: center;">
            <a class="navbar-item font-sm spaced invertable sizeable overline underline red" href="{{route('home')}}">
              <span>Home</span>
            </a>
      
            <a class="navbar-item font-sm spaced invertable sizeable overline underline orange" href="/#about">
              <span>About Us</span>
            </a>

            <a class="navbar-item font-sm spaced invertable sizeable overline underline yellow" href="{{route('team')}}">
                <span>Our Team</span>
            </a>
      
            <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link is-arrowless font-sm spaced invertable sizeable overline underline green" href="{{route('services')}}">
                <span>Services</span>
              </a>
      
              {{-- <div class="navbar-dropdown is-boxed">
                <a class="navbar-item font-sm">
                  Service 1
                </a>
                <a class="navbar-item font-sm">
                  Service 2
                </a>
                <a class="navbar-item font-sm">
                  Service 3
                </a>
                <hr class="navbar-divider">
                <a class="navbar-item font-sm">
                  All Services
                </a>
              </div> --}}
            </div>

            <a class="navbar-item font-sm spaced invertable sizeable overline underline purple" href="{{route('contact')}}">
                <span>Contact Us</span>
            </a>
          </div>
      
          <div class="navbar-end">
            {{-- <div class="navbar-item">
                <span class="navbar-item has-dropdown is-hoverable">
                    <i class="fas fa-cog is-size-1 navbar-link is-arrowless has-text-black-bis invertable"></i>
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
            </div> --}}
            <a class="navbar-item font-sm p-1 has-text-centered" style="font-size:20px !important">
                <div class="hoverable font-button"><i class="fas fa-font"></i></div>
            </a>
            <a class="navbar-item has-text-weight-medium font-lg mr-3 p-1">
                <div class="hoverable font-button"><i class="fas fa-font"></i></div>
            </a>
          </div>
        </div>
      </nav>

    {{--<div class="columns navbar mb-6" style="background-color:hsl(0, 0%, 92%);">
        <div class="column nav is-1" style="background-color:#d53021;">
            <img class="mt-0 pt-0 ml-5"src="topleft.jpg" alt="centered image" style="width:50px; margin-bottom:-10px"/>
        </div>
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
    </div>--}}

    @yield('content')

    <footer>
        <div class="columns is-centered pt-4 mb-1">
            <div class="column is-5">
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
        $( document ).ready(function() {
            $('body').fadeIn(1500); // fadein time in ms

            // Check for click events on the navbar burger icon
            $(".navbar-burger").click(function() {

                // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                $(".navbar-burger").toggleClass("is-active");
                $(".navbar-menu").toggleClass("is-active");

            });

            $(".font-sm").click(function(event){
                $('.sizeable').removeClass('font-lg').addClass('font-sm');
            });

            $(".font-lg").click(function(event){
                $('.sizeable').removeClass('font-sm').addClass('font-lg');
            });
        });
    </script>

</body>
</html>