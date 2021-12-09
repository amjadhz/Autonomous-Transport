<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;

class BlogController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        abort_if(Gate::denies('logged_user'), Response::HTTP_FORBIDDEN);

        $blogs = Blog::get();
        $user = User::get();
        return view('blogs.index', [
            'blogs'=>$blogs,
            'user'=>$user
        ]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        abort_if(Gate::denies('logged_user'), Response::HTTP_FORBIDDEN);

        return view("blogs.create");
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        abort_if(Gate::denies('logged_user'), Response::HTTP_FORBIDDEN);

        $blog = Blog::create($this->validateBlog($request));
        $blog->user()->associate(User::find($request->user_id));

        if($request->file()) {
            $name = time().'_'.$request->image->getClientOriginalName();
            $imagePath = $request->file('image')->storeAs('images', $name, 'public');
            $blog->image = '/storage/images/'.$name;
            $blog->save();

            return redirect('blogs')
                ->with('success','The document has uploaded to the database.')
                ->with('image', $name);
        }
        else {
            $blog->save();
        }
        return redirect('/blogs')->with('sucsess','The blog has uploaded to the database.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        abort_if(Gate::denies('logged_user'), Response::HTTP_FORBIDDEN);

        return view('blogs.show',[
            'blog'=>$blog
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        abort_if(Gate::denies('logged_user'), Response::HTTP_FORBIDDEN);

        return view('blogs.edit', [
            'blog'=>$blog
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        abort_if(Gate::denies('logged_user'), Response::HTTP_FORBIDDEN);

        $blog = Blog::create($this->validateBlog($request));
        $blog->user()->associate(User::find($request->user_id));

        if($request->file()) {
            $name =time().'_'.$request->image->getClientOriginalName();
            $imagePath = $request->file('image')->storeAs('images', $name, 'public');
            $blog->image = '/storage/images/'.$name;
            $blog->save();

            return redirect('blogs')
                ->with('success','The document has uploaded to the database.')
                ->with('image', $name);
        }
        else {
            $blog->save();
        }
        return redirect('/blogs')->with('sucsess','The blog has uploaded to the database.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        abort_if(Gate::denies('logged_user'), Response::HTTP_FORBIDDEN);

        $blog->delete();
        return redirect(route('blogs.index'));
        //
    }


    /**
     * @return array
     */
    protected function validateBlog(): array
    {
        abort_if(Gate::denies('logged_user'), Response::HTTP_FORBIDDEN);

        return request()->validate
        ([
            'title' => 'required | string | min:5',
            'description' => 'required | string | min:20',
            'blog' => 'required | string | min:50'
        ]);
    }


}
