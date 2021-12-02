@extends('layout')

@section('content')
    <!-- Begin Preloader -->
    <div class="preloader-wrapper">
        <div>
            <img src="" alt="" />
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
        <div class="container">
            <div class="row justify-content-center">
                <h3>{{__('messages.welcome')}}</h3>
            </div>
        </div>
        <!-- Begin About Me Section -->
        <div class="section-light about-me" id="about-me">
            <div class="container">
                <div class="column is-12 about-me">
                    <h1 class="title has-text-centered section-title">About the ship</h1>
                </div>
                <div class="columns is-multiline">
                    <div
                            class="column is-6 has-vertically-aligned-content"
                            data-aos="fade-right"
                    >
                        <p class="is-larger">
                            &emsp;&emsp;<strong
                            >Use our website to discover the possibilities of autonomous Shipping.</strong
                            >
                        </p>
                        <br />
                        <p>
                            Our team created a website where you can explore autonomous shipping in
                            an entertaining way. Together with Damen and Captain AI, we created a
                            detailed experience where you can learn about autonomous sailing and its
                            future, see what some of the autonomous ships look like and play a game to
                            learn about autonomous vessels.
                        </p>
                        <br />
                    </div>
                    <div class="column is-6 right-image " data-aos="fade-left">
                        <img
                                class="is-rounded"
                                src="https://www.onthemosway.eu/wp-content/uploads/2019/06/dims.jpg"
                                alt=""
                        />
                    </div>
                </div>
            </div>
        </div>
        <!-- End About Me Content -->
        <div class="section-dark resume">
            <div class="container">
                <div
                        class="columns is-multiline"
                        data-aos="fade-in"
                        data-aos-easing="linear"
                >
                    <div class="column is-12 about-me">
                        <h1 class="title has-text-centered section-title">
                            View My Resume
                        </h1>
                    </div>
                    <div class="column is-10 has-text-centered is-offset-1">
                        <h2 class="subtitle">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et doloremagna aliqua
                        </h2>
                        <form action="example.docs">
                            <button class="button">
                                Download Resume&emsp;<i class="fad fa-download fa-lg"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Begin Services Content -->
        <div class="section-color services" id="services">

            <div class="container">
                <h1 class="title has-text-centered section-title">3D</h1>
                <div class="columns is-multiline">
                    <div
                            class="column is-12 about-me is-justify-content-center is-flex"
                            data-aos="fade-in"
                            data-aos-easing="linear"
                    >
                    </div>
                        <div>
                        <iframe src="https://3dwarehouse.sketchup.com/embed/b6b8c531-05da-4d3d-80bb-830152fdfefa" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="800" height="400" allowfullscreen></iframe>
                    </div>
                    <div class="columns is-12">


                        <div
                                class="column is-4 has-text-centered"
                                data-aos="fade-in"
                                data-aos-easing="linear"
                        >
                            <i class="fad fa-meteor fa-3x"></i>
                            <hr />
                            <h2>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua
                            </h2>
                        </div>
                        <div
                                class="column is-4 has-text-centered"
                                data-aos="fade-in"
                                data-aos-easing="linear"
                        >
                            <i class="fas fa-paint-brush fa-3x"></i>
                            <hr />
                            <h2>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua
                            </h2>
                        </div>
                        <div
                                class="column is-4 has-text-centered"
                                data-aos="fade-in"
                                data-aos-easing="linear"
                        >
                            <i class="fas fa-rocket fa-3x"></i>
                            <hr />
                            <h2>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua
                            </h2>
                        </div>
                    </div>
                    <hr />
                    <div class="columns is-12">
                        <div
                                class="column is-4 has-text-centered"
                                data-aos="fade-in"
                                data-aos-easing="linear"
                        >
                            <i class="fas fa-upload fa-3x"></i>
                            <hr />
                            <h2>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua
                            </h2>
                        </div>
                        <div
                                class="column is-4 has-text-centered"
                                data-aos="fade-in"
                                data-aos-easing="linear"
                        >
                            <i class="fas fa-bus fa-3x"></i>
                            <hr />
                            <h2>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua
                            </h2>
                        </div>
                        <div
                                class="column is-4 has-text-centered"
                                data-aos="fade-in"
                                data-aos-easing="linear"
                        >
                            <i class="fas fa-code fa-3x"></i>
                            <hr />
                            <h2>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Services Content -->
        <!-- Begin Skills Content -->
        <div class="section-light skills" id="skills">
            <div class="container">
                <div class="columns is-multiline">
                    <div class="column is-12 about-me">
                        <h1 class="title has-text-centered section-title">Skills</h1>
                    </div>
                    <div
                            class="column is-6"
                            data-aos="fade-in"
                            data-aos-easing="linear"
                    >
                        <h1>Adobe Experience Design</h1>
                        <progress class="progress" value="70" max="100">30%</progress>
                        <h1>Adobe After Effects</h1>
                        <progress class="progress" value="65" max="100">30%</progress>
                        <h1>Visual Studio Code</h1>
                        <progress class="progress" value="58" max="100">45%</progress>
                        <h1>Sketch</h1>
                        <progress class="progress" value="90" max="100">60%</progress>
                    </div>
                    <div
                            class="column is-6"
                            data-aos="fade-in"
                            data-aos-easing="linear"
                    >
                        <h1>HTML</h1>
                        <progress class="progress" value="85" max="100">30%</progress>
                        <h1>CSS</h1>
                        <progress class="progress" value="95" max="100">30%</progress>
                        <h1>VueJS</h1>
                        <progress class="progress" value="70" max="100">45%</progress>
                        <h1>React</h1>
                        <progress class="progress" value="60" max="100">60%</progress>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Skills Content -->
        <!-- Begin Work Content -->
        <div class="section-dark my-work" id="my-work">
            <div class="container">
                <div
                        class="columns is-multiline"
                        data-aos="fade-in"
                        data-aos-easing="linear"
                >
                    <div class="column is-12">
                        <h1 class="title has-text-centered section-title">My Work</h1>
                    </div>
                    <div class="column is-3">
                        <a href="#">
                            <figure
                                    class="image is-2by1 work-item"
                                    style="background-image: url('https://picsum.photos/320/180?image=0');"
                            ></figure>
                        </a>
                    </div>
                    <div class="column is-3">
                        <a href="#">
                            <figure
                                    class="image is-2by1 work-item"
                                    style="background-image: url('https://picsum.photos/320/180?image=10');"
                            ></figure>
                        </a>
                    </div>
                    <div class="column is-3">
                        <a href="#">
                            <figure
                                    class="image is-2by1 work-item"
                                    style="background-image: url('https://picsum.photos/320/180?image=20');"
                            ></figure>
                        </a>
                    </div>
                    <div class="column is-3">
                        <a href="#">
                            <figure
                                    class="image is-2by1 work-item"
                                    style="background-image: url('https://picsum.photos/320/180?image=30');"
                            ></figure>
                        </a>
                    </div>
                    <div class="column is-3">
                        <a href="#">
                            <figure
                                    class="image is-2by1 work-item"
                                    style="background-image: url('https://picsum.photos/320/180?image=40');"
                            ></figure>
                        </a>
                    </div>
                    <div class="column is-3">
                        <a href="#">
                            <figure
                                    class="image is-2by1 work-item"
                                    style="background-image: url('https://picsum.photos/320/180?image=50');"
                            ></figure>
                        </a>
                    </div>
                    <div class="column is-3">
                        <a href="#">
                            <figure
                                    class="image is-2by1 work-item"
                                    style="background-image: url('https://picsum.photos/320/180?image=60');"
                            ></figure>
                        </a>
                    </div>
                    <div class="column is-3">
                        <a href="#">
                            <figure
                                    class="image is-2by1 work-item"
                                    style="background-image: url('https://picsum.photos/320/180?image=70');"
                            ></figure>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Work Content -->
        <!-- Begin Contact Content -->
        <div class="section-light contact" id="contact">
            <div class="container">
                <div
                        class="columns is-multiline"
                        data-aos="fade-in-up"
                        data-aos-easing="linear"
                >
                    <div class="column is-12 about-me">
                        <h1 class="title has-text-centered section-title">
                            Get in touch
                        </h1>
                    </div>
                    <div class="column is-8 is-offset-2">
                        <form
                                action="https://formspree.io/email@example.com"
                                method="POST"
                        >
                            <div class="field">
                                <label class="label">Name</label>
                                <div class="control has-icons-left">
                                    <input
                                            class="input"
                                            type="text"
                                            placeholder="Ex. Jane Smith"
                                            name="Name"
                                    />
                                    <span class="icon is-small is-left">
                      <i class="fas fa-user"></i>
                    </span>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Email</label>
                                <div class="control has-icons-left">
                                    <input
                                            class="input"
                                            type="email"
                                            placeholder="Ex. hello@arctheme.com"
                                            name="Email"
                                    />
                                    <span class="icon is-small is-left">
                      <i class="fas fa-envelope"></i>
                    </span>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Message</label>
                                <div class="control">
                    <textarea
                            class="textarea"
                            placeholder="Textarea"
                            name="Message"
                    ></textarea>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control ">
                                    <button class="button submit-button">
                                        Submit&nbsp;&nbsp;
                                        <i class="fas fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact Content -->
    </div>
    <!-- End Main Content -->

    <!-- Begin Footer -->
    <div class="footer">
        <p>
            <strong class="white">Bulma</strong> by <a href="http://jgthms.com">Jeremy Thomas</a>.
            The source code is licensed
            <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content is licensed
            <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.
        </p>
    </div>
    <!-- End Footer -->
@endsection

