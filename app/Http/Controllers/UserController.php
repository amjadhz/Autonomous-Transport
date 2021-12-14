<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        abort_if(Gate::denies('logged_user'), Response::HTTP_FORBIDDEN);

        $users = User::get();

        return view('users.index',
            [
                'users'=> $users
            ]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        abort_if(Gate::denies('logged_user'), Response::HTTP_FORBIDDEN);

        return view("users.create");
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        abort_if(Gate::denies('logged_user'), Response::HTTP_FORBIDDEN);

        $user = User::create($this->validator($request));
        $user->password = Hash::make('password');
        $user->save();
        return redirect('/users');
    }

    /**
     * @param User $user
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(User $user)
    {
        abort_if(Gate::denies('logged_user'), Response::HTTP_FORBIDDEN);

        return view('users.show',[
            'user'=>$user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * @param User $user
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(user $user)
    {
        abort_if(Gate::denies('logged_user'), Response::HTTP_FORBIDDEN);

        $user->delete();
        return redirect(route('users.index'));
        //
    }


    /**
     * @return array
     */
    protected function validator()
    {
        return request()->validate([
            'name' => 'required | string | max:255',
            'email' => 'required | string | email | max:255 | unique:users',
            'password' => 'required', 'string', 'min:8', 'confirmed',
        ]);
    }
}
