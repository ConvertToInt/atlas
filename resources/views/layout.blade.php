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

</head>
<body>
    <nav class="navbar" role="navigation" aria-label="main navigation" style="border-bottom:1px solid hsl(0, 0%, 40%)">
        <div class="navbar-brand">
          <a class="navbar-item" href="{{route('home')}}">
            <img class="logo" src="{{ asset('logo.jpg') }}" width="150" height="150">
          </a>
      
          <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
            <span class="burger" aria-hidden="true"></span>
            <span class="burger" aria-hidden="true"></span>
            <span class="burger" aria-hidden="true"></span>
          </a>
        </div>
      
        <div class="navbar-menu">
          <div class="navbar-start" style="flex-grow: 1; justify-content: center;">
            <a class="navbar-item is-size-5-mobile is-size-5-tablet is-size-4-desktop nav spaced overline underline red" href="{{route('home')}}">
              <span>Home</span>
            </a>
      
            <a class="navbar-item is-size-5-mobile is-size-5-tablet is-size-4-desktop nav spaced overline underline orange" href="/#about">
              <span>About Us</span>
            </a>

            <a class="navbar-item is-size-5-mobile is-size-5-tablet is-size-4-desktop nav spaced overline underline yellow" href="{{route('team')}}">
                <span>Our Team</span>
            </a>
      
            <a class="navbar-item is-size-5-mobile is-size-5-tablet is-size-4-desktop nav spaced overline underline green" href="{{route('services')}}">
                <span>Services</span>
            </a>

            <a class="navbar-item is-size-5-mobile is-size-5-tablet is-size-4-desktop nav spaced overline underline blue" href="{{route('blog')}}">
                <span>Blog</span>
            </a>

            <a class="navbar-item is-size-5-mobile is-size-5-tablet is-size-4-desktop nav spaced overline underline purple" href="{{route('contact')}}">
                <span>Contact Us</span>
            </a>
      
          {{-- <div class="navbar-end">
            <a class="navbar-item font-sm p-1 has-text-centered" id="font-sm-btn">
                <div class="hoverable font-button"><i class="fas fa-font"></i></div>
            </a>
            <a class="navbar-item font-lg has-text-weight-medium mr-3 p-1" id="font-lg-btn">
                <div class="hoverable font-button"><i class="fas fa-font"></i></div>
            </a>
          </div> --}}
        </div>
      </nav>

    @yield('content')

    <footer class="px-5">
        <div class="columns is-centered pt-4 mb-1">
            <div class="column is-5">
                <p>ATLAS is an autism-led social enterprise.</p>
                <br> 
                <p>We provide training and advice.</p>
                <br>
                <p><a class="is-underlined" href="{{route('contact')}}">Get in touch by clicking this link</a></p>
                <br> 
            </div>
            <div class="column is-4 pt-4">
                <a href="https://www.facebook.com/pg/autismATLAS/">
                    <figure class="image is-96x96 is-inline-block">
                      <img class="is-rounded" src="{{ asset('facebook.png')}}">
                    </figure>
                  </a>
                  <a href="https://www.youtube.com/channel/UCaK7asLjMpwsAg3p6al3lFQ">
                    <figure class="image is-96x96 is-inline-block">
                      <img class="is-rounded" src="{{ asset('youtube.png')}}">
                    </figure>
                  </a>
                  <a href="https://www.linkedin.com/company/autism-atlas-ltd/">
                    <figure class="image is-96x96 is-inline-block">
                      <img class="is-rounded" src="{{ asset('linkedin.png')}}">
                    </figure>
                  </a>
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