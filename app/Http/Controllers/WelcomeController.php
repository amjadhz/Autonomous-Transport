<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->take(5)->get();

        return view('welcome',[
            'blogs' => $blogs
        ]);
    }
}
