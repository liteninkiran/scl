<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/scl-style.css') }}" rel="stylesheet">
        <title>{{ config('app.name', 'SCL') }}</title>
    </head>

    <body>

        <!-- Header -->
        <section id="header">

            <div class="header container">

                <div class="nav-bar">

                    <div class="brand">
                        <a href="#home"><h1><span>S</span>outhern &nbsp;<span>C</span>alibration &nbsp;&nbsp;&nbsp;<span>L</span>aboratories</h1></a>
                    </div>

                    <div class="nav-list">

                        <div class="hamburger">
                            <div class="bar"></div>
                        </div>

                        <ul>
                            <li><a href="#home" data-after="Home">Home</a></li>
                            <li><a href="#overview" data-after="Overview">Overview</a></li>
                            <li><a href="#calibration" data-after="Calibration">Calibration</a></li>
                            <li><a href="#services" data-after="Service">Services</a></li>
                            <li><a href="#vacancies" data-after="Vacancies">Vacancies</a></li>
                            <li><a href="#contact" data-after="Contact">Contact</a></li>
                        </ul>

                    </div>

                </div>

            </div>

        </section>
        <!-- End Header -->

        <!-- Home Section  -->
        <section id="home">
            <div class="home container">
                <div>
                    <h1>Welcome to <span></span></h1>
                    <h1>Southern Calibration Laboratories <span></span></h1>
                    <a href="#overview" type="button" class="cta">Explore</a>
                </div>
            </div>
        </section>
        <!-- End Home Section  -->

        <!-- Scripts -->
        <script type="text/javascript" src="{{ asset('js/scl-app.js') }}"></script>

    </body>

</html>
