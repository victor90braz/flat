<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Flat;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FlatCommentController extends Controller
{
    public function store(Request $request, Flat $flat): RedirectResponse
    {
        $request->validate([
            'body' => ['required']
        ]);

        $flat->comments()->create([
            'user_id' => $request->user()->id,
            'body' => request('body')
        ]);

        return back();
    }

    public function delete(Flat $flat, Comment $comment): RedirectResponse
    {
        $comment->delete();

        return back()->with('success', 'Deleted successfully');
    }


}
