@extends('layout')

@section('content')
    <!-- Begin Preloader -->
    <div class="preloader-wrapper">
        <div>
            <img src="" alt=""/>
        </div>
    </div>
    <!-- End Preloader-->
    <!-- Begin Scroll Up Button -->

    <form action="#home">
        <button id="toTop" title="Go to top">
            <i class="fas fa-angle-up"></i>
        </button>
    </form>
    <!-- End Scroll Up Button -->

    <!-- Begin Header -->
    <div class="header-wrapper" id="home">
        <!-- Begin Hero -->
        <section class="hero is-large">
            <!-- Begin Mobile Nav -->
            <nav class="navbar is-transparent is-hidden-desktop">
                <!-- Begin Burger Menu -->
                <div class="navbar-brand">
                    <div class="navbar-burger burger" data-target="mobile-nav">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <!-- End Burger Menu -->
                <div id="mobile-nav" class="navbar-menu">
                    <div class="navbar-end">
                        <div class="navbar-item">
                            <a class="navbar-item" href="#home">
                                Home
                            </a>
                        </div>
                        <div class="navbar-item">
                            <a class="navbar-item" href="#about-me">
                                About the ship
                            </a>
                        </div>
                        <div class="navbar-item">
                            <a class="navbar-item" href="#services">
                                3D model
                            </a>
                        </div>
                        <div class="navbar-item">
                            <a class="navbar-item" href="#skills">
                                Game
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- End Mobile Nav -->
            <!-- Begin Hero Content-->
            <div class="hero-body">
                <div class="container has-text-centered">
                    <h1 class="subtitle">Discover</h1>
                    <h2 class="title">Autonomous Sailing</h2>
                </div>
            </div>
            <!-- End Hero Content-->
            <!-- Begin Hero Menu -->
            <div class="hero-foot ">
                <div class="hero-foot--wrapper">
                    <div class="columns">
                        <div class="column is-12 hero-menu-desktop has-text-centered">
                            <ul>
                                <li class="is-active">
                                    <a href="#home">Home</a>
                                </li>
                                <li>
                                    <a href="#about-me">About the Ship</a>
                                </li>
                                <li>
                                    <a href="#services">3D model</a>
                                </li>
                                <li>
                                    <a href="#skills">Game</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Hero Menu -->
        </section>
        <!-- End Hero -->
    </div>
    <!-- End Header -->
{{--    Start of language menu--}}
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="flag-icon flag-icon-{{Config::get('languages')[App::getLocale()]['flag-icon']}}"></span> {{ Config::get('languages')[App::getLocale()]['display'] }}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            @foreach (Config::get('languages') as $lang => $language)
                @if ($lang != App::getLocale())
                    <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"><span class="flag-icon flag-icon-{{$language['flag-icon']}}"></span> {{$language['display']}}</a>
                @endif
            @endforeach
        </div>
    </li>

    <!-- Begin Main Content -->
    <div class="main-content">
        <!-- Begin About The Ship Section -->
        <div class="section-light about-me" id="about-me">
            <div class="container">
                <div class="column is-12 about-me">
                    <h1 class="title has-text-centered section-title">About the ship</h1>
                </div>
                <div class="columns is-multiline">
                    <div
                        class="column is-6 has-vertically-aligned-content"
                        data-aos="fade-right">
                        <p class="is-larger">
                            &emsp;&emsp;<strong>Use our website to discover the possibilities of autonomous
                                Shipping.</strong>
                        </p>
                        <br/>
                        <p>
                            Our team created a website where you can explore autonomous shipping in
                            an entertaining way. Together with Damen and Captain AI, we created a
                            detailed experience where you can learn about autonomous sailing and its
                            future, see what some of the autonomous ships look like and play a game to
                            learn about autonomous vessels.
                        </p>
                        <br/>
                    </div>
                    <div class="column is-6 right-image " data-aos="fade-left">
                        <img
                            class="is-rounded"
                            src="https://www.onthemosway.eu/wp-content/uploads/2019/06/dims.jpg"
                            alt=""
                        />
                    </div>
                </div>
                <!-- Begin Making of the Vessel Section -->
                <div class="column is-12 about-me">
                    <h1 class="title has-text-centered section-title">Making of the vessel</h1>
                </div>
                <div class="columns is-multiline">
                    <div
                        class="column is-6 has-vertically-aligned-content"
                        data-aos="fade-right"
                    >
                        <p class="is-larger">
                            &emsp;&emsp;<strong>The making of our vessel has been a long and still ongoing
                                process.</strong>
                        </p>
                        <br/>
                        <p>
                            The vessels future is looking brighter than ever with the help of Damen to change the
                            vessel from using petrol to being fully electric while also installing all the necessary
                            equipment to make it autonomous.
                        </p>
                        <br/>
                    </div>
                    <div class="column is-6 right-image " data-aos="fade-left">
                        <img
                            class="is-rounded"
                            src="https://i0.wp.com/swzmaritime.nl/wp-content/uploads/2021/11/F.A.S.T.-patrol-boat.jpg?fit=845%2C533&ssl=1"
                            alt=""
                        />
                    </div>
                </div>
                <!-- End Making of the Vessel Content -->

                <!-- Begin of Damen -->
                <div class="column is-12 about-me">
                    <h1 class="title has-text-centered section-title">DAMEN</h1>
                </div>
                <div class="columns is-multiline">
                    <div
                        class="column is-6 has-vertically-aligned-content"
                        data-aos="fade-right"
                    >
                        <p class="is-larger">
                            &emsp;&emsp;<strong>Damen is a family owned business that stands for fellowship,
                                craftsmanship,
                                entrepreneurship and stewardship.</strong>
                        </p>
                        <br/>
                        <p>
                            "We believe that our oceans, seas, lakes and rivers offer humanity a growing range
                            of possibilities in terms of trade, food, energy and recreation. We provide maritime
                            solutions to meet these opportunities, through design, shipbuilding, ship repair and
                            related services."
                        </p>
                        <br/>
                    </div>
                    <div class="column is-6 right-image " data-aos="fade-left">
                        <img
                            class="is-rounded"
                            src="https://maritimetechnology.nl/media/damen-6.jpg"
                            alt=""
                        />
                    </div>
                </div>
                <!-- End of Damen -->

                <!-- Begin of CaptainAI -->
                <div class="column is-12 about-me">
                    <h1 class="title has-text-centered section-title">CaptainAI</h1>
                </div>
                <div class="columns is-multiline">
                    <div
                        class="column is-6 has-vertically-aligned-content"
                        data-aos="fade-right"
                    >
                        <p class="is-larger">
                            &emsp;&emsp;<strong>The brains of the vessel are engineered by one of the brightest
                                autonomous
                                vessel companies CaptainAI.</strong>
                        </p>
                        <br/>
                        <p>
                            They are based in Rotterdam, Netherlands. They provide all of the needed
                            technology to make the boat think for itself, while also making it as safe as
                            possible for the passengers. Our vessel will use tech like:
                        </p>
                        <br/>
                    </div>
                    <div class="column is-6 right-image " data-aos="fade-left">
                        <img
                            class="is-rounded"
                            src="https://www.captainai.com/wp-content/uploads/2020/10/CAP-AI-SVG-footer-01-1.svg"
                            alt=""
                        />
                    </div>
                </div>
                <!-- End of CaptainAI -->

                <!-- Begin of Our Tech -->
                <div class="column is-12 about-me">
                    <h1 class="title has-text-centered section-title">Our Tech</h1>
                </div>
                <div class="columns is-multiline">
                    <div
                        class="column is-6 has-vertically-aligned-content"
                        data-aos="fade-right">
                        <p class="is-larger">
                            <strong> Neural networks</strong>
                        </p>
                        <br/>
                        <p>
                            CaptainAI are building a pipeline for fully automatic data collection and
                            labeling. They do this in order to create dependable predictions of the
                            behavior of vessels and other factors. The latest AI models are being used
                            for object detection, image classification and instance segmentation to
                            create comprehensive situational awareness </p>
                        <br/>
                    </div>
                    <div class="column is-6 right-image " data-aos="fade-left">
                        <img
                            class="is-rounded"
                            src="https://www.captainai.com/wp-content/uploads/2020/10/camera_atlantis.gif"
                            alt=""/>
                    </div>
                </div>
                <!-- End of Our Tech -->

                <!-- Cloud of Our Tech -->
                <div class="column is-12 about-me">
                    <h1 class="title has-text-centered section-title"></h1>
                </div>
                <div class="columns is-multiline">
                    <div
                        class="column is-6 has-vertically-aligned-content"
                        data-aos="fade-right">
                        <p class="is-larger">
                            <strong>Cloud </strong>
                        </p>
                        <br/>
                        <p>
                            For data visualization of 3D scenes, plots and sensor data dat CaptainAI
                            have built Atlantis, their scalable cloud infrastructure solution. For
                            the route planner a optimal and real time paths is generated by
                            processing terabytes of data in the cloud.
                            <br/>
                    </div>
                    <div class="column is-6 right-image " data-aos="fade-left">
                        <img
                            class="is-rounded"
                            src="https://www.captainai.com/wp-content/uploads/2020/10/depthradar.gif"
                            alt=""
                        />
                    </div>
                </div>
                <!-- End of Cloud -->

                <!-- Begin of Our Sensor suite -->
                <div class="column is-12 about-me">
                    <h1 class="title has-text-centered section-title"></h1>
                </div>
                <div class="columns is-multiline">
                    <div class="column is-6 has-vertically-aligned-content"
                         data-aos="fade-right">
                        <p class="is-larger">
                            &emsp;&emsp;<strong>Sensor suite </strong>
                        </p>
                        <br/>
                        <p>
                            Our vessels use a variety of inputs for our sensor fusion algorithm,
                            in order to create a reliable view of every situation. It make use
                            of radar, cameras, GPS, Octance, sonar and AIS already installed on
                            most vessels. <br/>
                    </div>
                    <div class="column is-6 right-image " data-aos="fade-left">
                        <img
                            class="is-rounded"
                            src="https://www.captainai.com/wp-content/uploads/2020/10/Captain-AI-Borkum-sensor-fusion.png"
                            alt=""
                        />
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Sensor suite -->

        <!-- End About The Ship Content -->
        <div class="main-content">
            <!-- Begin Services Content -->
            <div class="section-color services" id="services">
                <div class="container">
                    <h1 class="title has-text-centered section-title">3D</h1>
                    <div class="columns is-multiline">
                        <div
                            class="column is-12 about-me is-justify-content-center is-flex"
                            data-aos="fade-in"
                            data-aos-easing="linear">
                        </div>
                        <div>
                            <iframe width='853' height='480'
                                    src='https://my.matterport.com/show/?m=5RM24QU21q4'
                                    frameborder='0' allowfullscreen
                                    allow='xr-spatial-tracking'>
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Services Content -->
        </div>
        <!-- End Main Content -->
@endsection

