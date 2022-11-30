<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Saved_user;

class SavedUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Saved_user::all();
        return view('usersDatabase')->with('users', $users);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new Saved_user();

        $user->id = $request->get('id');
        $user->name = $request->get('name');
        $user->username = $request->get('username');
        $user->email = $request->get('email');
        $user->city = $request->get('city');
        $user->phone = $request->get('phone');
        $user->name_company = $request->get('name_company');

        if(Saved_user::find($user->id)) {
            return redirect('/')->with('error', 'User is already in the database');
        }
        $user->save();

        return redirect('/')->with('success', 'User added correctly to the database');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Saved_user::find($id);
        return view('userUpdate')->with('user', $user);
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
        $user = Saved_user::find($id);

        $user->birthdate = $request->get('birthdate');
        $user->picture = $request->get('picture');

        $user->save();

        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
