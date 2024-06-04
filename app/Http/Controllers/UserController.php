<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $users = User::orderBy('created_at', 'desc')->get();
        return view('users.index', compact('users'));
    }

    // public function create()
    // {
    //     return view('users.create');
    // }

    public function store(Request $request)
    {
        // Validate the request

        User::create($request->all());

        return redirect('/users');
    }

    // public function show($id)
    // {
    //     $user = User::findOrFail($id);
    //     return view('users.show', compact('user'));
    // }

    // public function edit($id)
    // {
    //     $user = User::findOrFail($id);
    //     return view('users.edit', compact('user'));
    // }

    // public function update(Request $request, $id)
    // {
    //     // Validate the request

    //     $user = User::findOrFail($id);
    //     $user->update($request->all());

    //     return redirect('/users');
    // }

    // public function destroy($id)
    // {
    //     $user = User::findOrFail($id);
    //     $user->delete();

    //     return redirect('/users');
    // }
}
