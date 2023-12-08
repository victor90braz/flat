<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function users()
    {

        $users = User::query()
        ->orderBy('name')
        ->simplePaginate(4);

        return view('components.users.users', [
            'users' => $users
        ]);
    }

    public function edit(User $user) {
        return view('pages.user.edit', compact('user'));
    }

    public function update(User $user, Request $request) {
        $userData = $request->except(['_token', '_method']);
        $user->update($userData);
        return redirect()->route('user.edit', ['user' => $user])->with('success', 'User updated successfully');
    }

}
