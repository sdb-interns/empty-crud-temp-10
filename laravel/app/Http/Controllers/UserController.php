<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('user.index', compact('users'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        User::create([
            'name' => $request['name'],
        ]);

        return redirect()->route('user.index');
    }

    public function edit(Request $request)
    {
        $user = User::find($request['id']);

        return view('user.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = User::find($request['id']);

        $user->name = $request['name'];
        $user->save();

        return redirect()->route('user.index');
    }

    public function delete(Request $request)
    {
        $user = User::find($request['id']);

        $user->delete();

        return redirect()->route('user.index');
    }
}
