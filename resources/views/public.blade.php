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
<!--                             <li><a href="#calibration" data-after="Calibration">Calibration</a></li>
                            <li><a href="#services" data-after="Service">Services</a></li>
                            <li><a href="#vacancies" data-after="Vacancies">Vacancies</a></li>
                            <li><a href="#contact" data-after="Contact">Contact</a></li>
 -->                        </ul>

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

        <!-- Overview Section -->
        <section id="overview">

            <div class="overview container">

                <div class="overview-top">
                    <h1 class="section-title">Over<span>v</span>iew</h1>
                    <p>The laboratories within <span>SCL</span> are all in a close controlled air-conditioned environment with ESD protected work stations. <span>SCL</span> have structured the laboratories into dedicated sections, which maximises the control and planning of instrumentation throughput. We currently operate 4 laboratories which are divided as follows:</p>
                </div>

                <div class="overview-bottom">

                    <div class="overview-item">
                        <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png"/></div>
                        <h2>UKAS Electrical</h2>
                        <ul>
                            <li>DMM, LCR, Oscilloscopes</li>
                            <li>Electrical test equipment (DC to 18 GHz)</li>
                            <li>High voltage</li>
                            <li>High current</li>
                        </ul>
                    </div>

                    <div class="overview-item">
                        <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png"/></div>
                        <h2>UKAS Mechanical</h2>
                        <ul>
                            <li>Dimensional instruments</li>
                            <li>Mechanical instruments</li>
                        </ul>
                    </div>

                    <div class="overview-item">
                        <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png"/></div>
                        <h2>General Purpose</h2>
                        <ul>
                            <li>Medical equipment</li>
                            <li>Temperature</li>
                            <li>Pressure / vacuum</li>
                        </ul>
                    </div>

                    <div class="overview-item">
                        <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png"/></div>
                        <h2>Pressure & Torque</h2>
                        <ul>
                            <li>Torque wrenches / drivers</li>
                            <li>Crimp tools</li>
                            <li>Die sets</li>
                            <li>Crimp samples, "pull-off" & mV drop</li>
                        </ul>
                    </div>

                </div>

            </div>

        </section>
        <!-- End Overview Section -->







        <!-- Scripts -->
        <script type="text/javascript" src="{{ asset('js/scl-app.js') }}"></script>

    </body>

</html>
