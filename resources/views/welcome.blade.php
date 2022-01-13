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
                    <div class="navbar-burger burger black border border-white rounded-circle bg-white"
                         data-target="mobile-nav">
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
                            <a class="navbar-item" href="#game">
                                Game
                            </a>
                        </div>
                        <div class="navbar-item">
                            <a class="navbar-item" href="#blogs">
                                Blogs
                            </a>
                        </div>
                        <div class="navbar-item">
                            @if(\Illuminate\Support\Facades\Auth::user())
                                <a href="/dashboard">Dashboard</a>
                            @else
                                <a href="/dashboard">Login</a>
                            @endif
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
                                    <a href="#game">Game</a>
                                </li>
                                <li>
                                    <a href="#blogs">Blogs</a>
                                </li>
                                <li>
                                    @if(\Illuminate\Support\Facades\Auth::user())
                                        <a href="/dashboard">Dashboard</a>
                                    @else
                                        <a href="/dashboard">Login</a>
                                    @endif
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                {{--    Start of language menu--}}
                <li class="nav-item dropdown is-pulled-right">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <span
                            class="flag-icon flag-icon-{{Config::get('languages')[App::getLocale()]['flag-icon']}}"></span> {{ Config::get('languages')[App::getLocale()]['display'] }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        @foreach (Config::get('languages') as $lang => $language)
                            @if ($lang != App::getLocale())
                                <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"><span
                                        class="flag-icon flag-icon-{{$language['flag-icon']}}"></span> {{$language['display']}}
                                </a>
                            @endif
                        @endforeach
                    </div>
                </li>
            </div>
            <!-- End Hero Menu -->
        </section>
        <!-- End Hero -->


    </div>
    <!-- End Header -->
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
                    <h1 class="title has-text-centered section-title">3D Model</h1>
                    <div class="columns is-multiline">
                        <div
                            class="column is-12 about-me is-justify-content-center is-flex"
                            data-aos="fade-in"
                            data-aos-easing="linear">
                        </div>
                        <div class="container">
                            @php
                                @$useragent=$_SERVER['HTTP_USER_AGENT'];
                            @endphp
                            {{--Decide whether the visitor is using a PC or mobile device--}}
                            @if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
                                <div class="columns is-mobile is-centered">
                                    <iframe style="width:300px; height:300px;"
                                            src='https://my.matterport.com/show/?m=5RM24QU21q4'
                                            frameborder='0' allowfullscreen
                                            allow='xr-spatial-tracking' class="column is-centered">
                                    </iframe>
                                    @else
                                        <div class="columns is-centered">
                                            <iframe style="width:700px; height:480px;"
                                                    src='https://my.matterport.com/show/?m=5RM24QU21q4'
                                                    frameborder='0' allowfullscreen
                                                    allow='xr-spatial-tracking' class="column is-half ">
                                            </iframe>
                                            @endif
                                        </div>
                                </div>
                        </div>
                    </div>

                    <!-- End Services Content -->
                </div>
                <!-- Begin of the Game -->
                <div>
                    <div class="column is-12 about-me" id="game">
                        <br><br><br>
                        <h1 class="title has-text-centered section-title">Game</h1>
                    </div>
                    <p class="has-text-centered">
                        {{__('messages.gameDescription')}}
                    </p>
                    <div class="container">
                        <div class="columns is-centered">
                            <a href="https://games.gdevelop-app.com/game-facf7a52-19b9-4126-a47a-b7a23d4351c6/index.html"
                               target="_blank">
                                <img src="/images/Logo.png" class="is-hoverable" id="gameImage"></a>
                        </div>
                    </div>
                </div>
                <!-- End Main Content -->

                {{--                Display the last five blogs--}}
                <div class="section-color services is-full" id="blogs">
                    <div class="container is-justify-content-center">
                        <div class="column is-12 about-me">
                            <h1 class="title has-text-centered section-title">Blogs</h1>
                        </div>
                        <div class="container has-text-centered overflow-hidden">
                            @if($blogs->isEmpty())
                                {{__('messages.noBlogs')}}
                            @else
                            <!-- Start Carousel -->
                                <div id="carousel-demo" class="carousel ">
                                    @foreach($blogs as $blog)
                                        <a href="/showBlog/{{$blog->id}}" style="text-decoration: none"
                                           class="has-text-white">
                                            <div class="item-{{$loop->index + 1}} column is-full">
                                                <h1><strong style="color: white;">{{$blog->title}}</strong><br></h1>
                                                <p id="carouselDescription" class="">{{$blog->description}}</p>
                                                <img src="{{$blog->image}}">
                                                <br><br><br>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                                <!-- End Carousel -->
                            @endif

                            <br><br>
                            @if(!$blogs->isEmpty())
                                <form action="/allBlogs">
                                    <button class="button is-white">Show All</button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

