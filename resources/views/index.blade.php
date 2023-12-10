<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <title>Get Started | QRCode-Me</title>
</head>

<body>
    <!-- nav -->
    <header>
        <a href="{{ url('/') }}" class="logo"><img src="{{ asset('logo/logo_tech.png') }}"></a>
        <div class="menuToggle" onclick="toggleMenu();"></div>
        <ul class="navigation">
            <li><a href="{{ url('about') }}" onclick="toggleMenu();">About us</a></li>
            <li><a href="{{ url('contact') }}" onclick="toggleMenu();">Contact us</a></li>
            @auth <!-- Check if user is authenticated -->
            <li><a href="{{ route('dashboard') }}" onclick="toggleMenu();">Generate QRcode</a></li>
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            @else
            <li><a href="{{ route('login') }}" onclick="toggleMenu();">Login</a></li>
            <button type="button" class="bg-black hover:bg-slate-400 text-white font-bold text-lg py-3 px-4 ml-8 rounded">
                <a href="{{ route('register') }}" class="text-white">Get Started</a>
            </button>
            @endauth
        </ul>
    </header>
    <!-- banner -->
    <section class="banner" id="banner">
        <div class="content">
            <div class="c1">
                <h4>GENERATE FREE QR-CODE</h4>
                <h6>With a Reliable Platform That Never Fail</h6>
            </div><br>
            <button type="button" class="bg-black hover:bg-slate-400 text-white font-bold text-lg py-3 px-4 rounded">
                <a href="{{ route('register') }}" class="text-white">+ Create QRcode</a>
            </button>
        </div><br>
        <div><img src="{{ asset('images/landing1.gif') }}" alt="" width="500px" height="400px"></div>
    </section>
    <!-- footer -->
    <footer>
        <div class="container">

            <div class="sec contactBx">
                <h2>Our Team</h2>
                <p>Aminu Shaibu - Fullstack Developer</p>
                <ul class="sci">
                    <li><a href="https://github.com/elameen37/"><i class="fa fa-github"></i></a></li>
                    <li><a href="https://linkedin.com/in/aminu-shaibu-ab92368b"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://twitter.com/lmninfohub"><i class="fa fa-twitter"></i></a></li>
                </ul>
                <p>Kehinde Raphael Babalola - Backend Developer</p>
                <ul class="sci">
                    <li><a href="https://github.com/geeflows44"><i class="fa fa-github"></i></a></li>
                </ul>
                </li>
                </ul>
            </div>

        </div>
    </footer>
    <div class="copyrightText">
        <p>Copyright &copy; 2023 All Rights Reserved</p>
    </div>
    <!-- Javascript -->
    <script>
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            header.classList.toggle("sticky", window.scrollY > 0)
        });

        function toggleMenu() {
            const menuToggle = document.querySelector('.menuToggle');
            const navigation = document.querySelector('.navigation')
            menuToggle.classList.toggle('active');
            navigation.classList.toggle('active');
        }
    </script>
</body>

</html>