@extends('layouts.app')

@section('content')
    <div class="main-content">
        <!-- Begin About The Ship Section -->
        <div class="section-light about-me" id="about-me">
            <div class="container">
                <div class="column is-12 about-me">
                    <h1 class="title has-text-centered section-title">{{$blog->title}}</h1>
                </div>
                <div class="columns is-multiline is-wrapped">
                    <div
                        class="column is-6 has-vertically-aligned-content"
                        data-aos="fade-right">
                        <p class="is-larger">
                            &emsp;&emsp;<strong class="is-wrapped">{{$blog->description}}</strong>
                        </p>
                        <br/>
                        <p class="is-wrapped">{{$blog->blog}}</p>
                        <br/>
                    </div>
                    <div class="column is-6 right-image " data-aos="fade-left">
                        <img
                            class="is-rounded"
                            src="{{$blog->image}}"
                            alt=""
                        />
                    </div>
                </div>
        </div>

        <div>
            <div class="mt-6 flex items-center justify-center hero-buttons">
                <form method="POST" action="/blogs/{{$blog->id}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" name="submit" class="button is-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>


@endsection
