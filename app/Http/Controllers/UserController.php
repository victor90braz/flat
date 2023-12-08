<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function users()
    {
        $users = User::query()
        ->search(request('search'))
        ->orderBy('name')
        ->orderBy('email')
        ->simplePaginate(100);

        $authenticatedUser = Auth::user();

        foreach ($users as $user) {
            $user->is_owner = $authenticatedUser && $user->id === $authenticatedUser->id;
        }

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
