<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $blogs = Blog::latest()->orderBy('created_at')->take(5)->get();
        return view('dashboard',
            [
                'blogs'=> $blogs
            ]);
    }



    public function languageDemo(){
        return view('languageDemo');
    }
}
