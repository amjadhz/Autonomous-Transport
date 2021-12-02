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
                                    <a href="#about-me">{{__('messages.aboutShip')}}</a>
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

    <div class="container">
        <div class="row justify-content-center">
            <h3>{{__('messages.welcome')}}</h3>
        </div>
    </div>


    <!-- Begin Main Content -->
    <div class="main-content">
        <!-- Begin About The Ship Section -->
        <div class="section-light about-me" id="about-me">
            <div class="container">
                <div class="column is-12 about-me">
                    <h1 class="title has-text-centered section-title">{{__('messages.aboutShip')}}</h1>
                </div>
                <div class="columns is-multiline">
                    <div
                        class="column is-6 has-vertically-aligned-content"
                        data-aos="fade-right">
                        <p class="is-larger">
                            &emsp;&emsp;<strong>{{ __('messages.aboutShip-sub') }}</strong>
                        </p>
                        <br/>
                        <p>
                            {{__('messages.aboutShip-par')}}
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
                    <h1 class="title has-text-centered section-title">{{__('messages.makingOfTheVessel')}}</h1>
                </div>
                <div class="columns is-multiline">
                    <div
                        class="column is-6 has-vertically-aligned-content"
                        data-aos="fade-right"
                    >
                        <p class="is-larger">
                            &emsp;&emsp;<strong>{{__('messages.makingOfTheVessel-sub')}}</strong>
                        </p>
                        <br/>
                        <p>
                            {{__('messages.makingOfTheVessel-par')}}
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
                    <h1 class="title has-text-centered section-title">{{__('messages.damen')}}</h1>
                </div>
                <div class="columns is-multiline">
                    <div
                        class="column is-6 has-vertically-aligned-content"
                        data-aos="fade-right"
                    >
                        <p class="is-larger">
                            &emsp;&emsp;<strong>{{__('messages.damen-sub')}}</strong>
                        </p>
                        <br/>
                        <p>
                            {{__('messages.damen-par')}}
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
                    <h1 class="title has-text-centered section-title">{{__('messages.captain')}}</h1>
                </div>
                <div class="columns is-multiline">
                    <div
                        class="column is-6 has-vertically-aligned-content"
                        data-aos="fade-right"
                    >
                        <p class="is-larger">
                            &emsp;&emsp;<strong>{{__('messages.captain-sub')}}</strong>
                        </p>
                        <br/>
                        <p>
                            {{__('messages.captain-par')}}
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
                    <h1 class="title has-text-centered section-title">{{__('messages.tech')}}</h1>
                </div>
                <div class="columns is-multiline">
                    <div
                        class="column is-6 has-vertically-aligned-content"
                        data-aos="fade-right">
                        <p class="is-larger">
                            <strong> {{__('messages.neuralNetwork')}}</strong>
                        </p>
                        <br/>
                        <p>
                            {{__('messages.neuralNetwork-par')}}
                        </p>
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
                            <strong>{{__('messages.cloud')}} </strong>
                        </p>
                        <br/>
                        <p>
                            {{__('messages.cloud-par')}}
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
                            &emsp;&emsp;<strong>{{__('messages.sensor')}} </strong>
                        </p>
                        <br/>
                        <p>
                            {{__('messages.sensor-par')}} <br/>
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

