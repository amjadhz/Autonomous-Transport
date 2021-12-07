@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body">
                        <form method="POST" action="/blogs/{{$blog->id}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">Blog Title</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control @error('title') border-danger @enderror" name="title" value="{{ $blog->title}}" required autocomplete="title" autofocus>

                                    @if($errors->has('title'))
                                        <p class="text-danger">*Fill in a valid title of the blog (minimum 5 characters)</p>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>

                                <div class="col-md-6">
                                    <textarea class="form-control @error('description') border-danger @enderror" name="description" rows="5">{{$blog->description}}</textarea>
                                    @if($errors->has('description'))
                                        <p class="text-danger">*Fill in a valid description of the blog (minimum 20 characters)</p>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="blog" class="col-md-4 col-form-label text-md-right">Content</label>

                                <div class="col-md-6">
                                    <textarea class="form-control @error('blog') border-danger @enderror" name="blog" rows="10">{{$blog->blog}}</textarea>
                                    @if($errors->has('blog'))
                                        <p class="text-danger">*Fill in a valid blog content (minimum 50 characters)</p>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="image" class="col-md-4 col-form-label text-md-right">Image</label>

                                <div class="col-md-6">
                                    <input type="file" id="image" name="image" accept="image/*" value="{{$blog->image}}">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Update
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-6 flex items-center justify-center hero-buttons">
            <form method="POST" action="/blogs/{{$blog->id}}">
                @csrf
                @method('DELETE')
                <button type="submit" name="submit" class="button is-danger">Delete</button>
            </form>
        </div>
    </div>
@endsection
