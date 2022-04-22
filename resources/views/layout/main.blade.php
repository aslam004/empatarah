<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    {{-- MyCss --}}

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/login.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>
        
        Empat Arah
    </title>
  </head>

  <body>
    {{-- Navbar --}}
    <div class="navbar-fixed">
        <nav class="blue darken-4">
        <div class="container">
            <div class="nav-wrapper">
                <a href="#head" class="brand-logo"><img src="" alt=""></a>
                <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                <li><a href="#about">About Us</a></li>
                <li><a href="#concept">Concept</a></li>
                <li><a href="#menus">Menus</a></li>
                <li><a href="#services">Our Plan</a></li>
                <li><a href="#team">Our Team</a></li>
                </ul>
            </div>
        </div>
        </nav>
    </div>
        {{-- sidenav --}}
    <ul class="sidenav" id="mobile-nav">
        <li><a href="#about">About Us</a></li>
        <li><a href="#concept">Concept</a></li>
        <li><a href="#menus">Menus</a></li>
        <li><a href="#services">Our Plan</a></li>
        <li><a href="#team">Our Team</a></li>
    </ul>

    @yield('container')


    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        const sideNav=document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);

        const slider=document.querySelectorAll('.slider');
        M.Slider.init(slider,{
            indicators:false,
            interval:5000,

        });

        const parallax =document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);

        const materialbox=document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialbox);

        const scroll=document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(scroll,{
            scrollOffset:60,
        });
    </script>
  </body>
</html>
      