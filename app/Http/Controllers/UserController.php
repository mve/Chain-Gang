<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\User $user
     *
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\User $user
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\User $user
     *
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, User $user)
    {

        $this->validate(request(), [
            'name'        => ['required', 'string', 'max:255'],
            'lastname'    => ['required', 'string', 'max:255'],
            'address'     => ['required', 'string', 'max:255'],
            'postal_code' => ['required', 'string', 'min:4'],
            'city'        => ['required', 'string', 'max:255'],
            'phone'       => ['required', 'numeric'],
            'email'       => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id),],
            'password'    => ['required', 'string', 'min:8']
        ]);

        $user->name        = $request->name;
        $user->lastname    = $request->lastname;
        $user->address     = $request->address;
        $user->postal_code = $request->postal_code;
        $user->city        = $request->city;
        $user->phone       = $request->phone;
        $user->email       = $request->email;
        $user->password    = bcrypt(request('password'));

        $user->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\User $user
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

}
