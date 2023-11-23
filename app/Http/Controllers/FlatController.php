<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFlatRequest;
use App\Models\Flat;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FlatController extends Controller
{
    public function index(): View
    {

        $flat = Flat::latest();

        if(request('search')) {
            $flat->where('title', 'like', '%' . request('search') . '%');
        }

        return view('pages.flats.index', [
            'flats' => $flat->simplePaginate(6)
        ]);
    }

    public function userFlats(Request $request): View
    {
        /** @var User $user */
        $user = $request->user();

        $flats = $user->flats()->simplePaginate(6);

        return view('pages.flats.userFlats', [
            'flats' => $flats,
        ]);
    }

    public function view(Flat $flat): View
    {
        $comments = $flat->comments;

        return view('pages.flats.detail', compact('flat', 'comments'));
    }

    public function delete(Flat $flat): RedirectResponse
    {
        $flat->delete();

        return redirect('/')->with('success', 'The item was successfully deleted.');
    }

    public function create(): View
    {
        return view('pages.flats.create');
    }

    public function store(StoreFlatRequest $request): RedirectResponse
    {
        $attributes = $request->validated();
        $attributes['user_id'] = $request->user()->id;

        $flat = Flat::create($attributes);

        if ($flat) {
            return redirect('/')->with('success', 'New flat created');
        } else {
            // Log the error or handle it accordingly
            return redirect('/')->with('error', 'Failed to create a new flat');
        }
    }

    public function edit(Flat $flat): View
    {
        return view('pages.flats.edit', [
            'flat' => $flat,
        ]);
    }

    public function update(Flat $flat, StoreFlatRequest $request): RedirectResponse
    {
        $flat->update($request->validated());

        return redirect('/')->with('success', 'Flat updated successfully!');
    }

}
