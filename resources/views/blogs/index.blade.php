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
                                <th>Blog title</th>
                                <th>Date</th>
                                <th>Created by</th>
                                <th>Updated by</th>
                                <th>Show</th>
                                <th>Edit</th>
                                <th>Delete the blog</th>

                            </tr>
                            </thead>

                            <tbody>
                                @foreach($blogs as $blog)
                                    <tr>
                                        <th>{{$blog->id}}</th>
                                        <td>{{$blog->title}}</td>
                                        <td>{{$blog->updated_at}}</td>
                                        <td>
                                            @if($blog->user_id === null)
                                                Deleted user
                                            @else
                                            {{$blog->user->name}}
                                            @endif
                                        </td>
                                        <td>
                                            @if($blog->updated_by === null)
                                            None
                                            @else
                                            {{$blog->getUserName($blog->updated_by)}}
                                            @endif
                                        </td>
                                        <td><a href="/blogs/{{$blog->id}}"><button class="button">Show</button></a></td>
                                        <td class="is-hoverable"><a href="/blogs/{{$blog->id}}/edit"><button class="button is-link">Edit</button></a></td>
                                        <td>
                                                <form method="POST" action="/blogs/{{$blog->id}}">
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
            <a href="/blogs/create">
                <button class="button is-success">
                    Create new Blog
                </button>
            </a>
        </div>
    </div>
@endsection
