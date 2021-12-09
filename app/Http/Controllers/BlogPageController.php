<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogPageController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->get();

        return view('blogs',[
            'blogs' => $blogs
        ]);
    }

    public function show(Blog $blog){
        return view('showBlog', ['blog' => $blog]);
    }
}
