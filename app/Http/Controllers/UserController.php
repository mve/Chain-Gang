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
            'name'        => ['sometimes', 'nullable', 'string', 'max:255'],
            'lastname'    => ['sometimes', 'nullable', 'string', 'max:255'],
            'address'     => ['sometimes', 'nullable', 'string', 'max:255'],
            'postal_code' => ['sometimes', 'nullable', 'string', 'min:4'],
            'city'        => ['sometimes', 'nullable', 'string', 'max:255'],
            'phone'       => ['sometimes', 'nullable', 'numeric'],
            'email'       => [
                'sometimes',
                'nullable',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user->id),
            ],
            'password'    => ['sometimes', 'nullable', 'string', 'min:8']
        ]);

        $user->name        = (isset($request->name) > 0) ? $request->name : $user->name;
        $user->lastname    = (isset($request->lastname) > 0) ? $request->lastname : $user->lastname;
        $user->address     = (isset($request->address) > 0) ? $request->address : $user->address;
        $user->postal_code = (isset($request->postal_code) > 0) ? $request->postal_code : $user->postal_code;
        $user->city        = (isset($request->city) > 0) ? $request->city : $user->city;
        $user->phone       = (isset($request->phone) > 0) ? $request->phone : $user->phone;
        $user->email       = (isset($request->email) > 0) ? $request->email : $user->email;
        $user->password    = (isset($request->password) > 0) ? bcrypt(request('password')) : $user->password;

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
