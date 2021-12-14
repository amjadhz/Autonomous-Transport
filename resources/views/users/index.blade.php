@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Blogs</div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>user name</th>
                            <th>user email</th>
                            <th>Delete</th>

                        </tr>
                        </thead>

                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <th>{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <form method="POST" action="/users/{{$user->id}}">
                                        @csrf
                                        @method('DELETE')
                                          <button type="submit" name="submit" class="button is-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <div class="buttons text-white justify-content-center mt-6 mb-6">
        <a href="/users/create">
            <button class="button is-success">
                Add a user
            </button>
        </a>
    </div>
    </div>

@endsection
