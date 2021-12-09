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
                    <div class="navbar-burger burger black border border-white rounded-circle bg-white" data-target="mobile-nav">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <!-- End Burger Menu -->
                <div id="mobile-nav" class="navbar-menu">
                    <div class="navbar-end">
                        <div class="navbar-item">
                            <a class="navbar-item" href="/">
                                Home
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
                                    <a href="/">Home</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Hero Menu -->
        </section>
        <!-- End Hero -->
        {{--        Start of the blogs display--}}
        <div class="container pt-3">
            <div class="columns is-multiline is-mobile">
                @foreach($blogs as $blog)
                    <a style="text-decoration: none" href="/showBlog/{{$blog->id}}"  class="column box has-text-centered is-one-third pt-3 has-text-black">
                        <div>
                            <h1><strong>{{$blog->title}}</strong></h1>
                            <h2>{{$blog->description}}</h2>
                            <img src="{{$blog->image}}">
                        </div>
                    </a>
                    @endforeach
            </div>
        </div>
    </div>



@endsection
