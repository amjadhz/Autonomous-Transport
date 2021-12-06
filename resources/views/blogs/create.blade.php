@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body">
                        <form method="POST" action="">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Blog Title</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('') }}" required autocomplete="name" autofocus>

{{--                                    @error('')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{}}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Description</label>

                                <div class="col-md-6">
                                    <textarea class="form-control" rows="5" value="{{old('')}}"></textarea>
                                    {{--                                    @error('')--}}
                                    {{--                                    <span class="invalid-feedback" role="alert">--}}
                                    {{--                                        <strong>{{}}</strong>--}}
                                    {{--                                    </span>--}}
                                    {{--                                    @enderror--}}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Label 3</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    {{--                                    @error('')--}}
                                    {{--                                    <span class="invalid-feedback" role="alert">--}}
                                    {{--                                        <strong>{{}}</strong>--}}
                                    {{--                                    </span>--}}
                                    {{--                                    @enderror--}}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Label 4</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
