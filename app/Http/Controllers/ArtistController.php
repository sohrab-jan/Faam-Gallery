<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\Artist\CreateArtistRequest;
use App\Http\Requests\Admin\Artist\UpdateArtistRequest;
use App\Models\Artist;

class ArtistController extends Controller
{
    public function index()
    {
        $artists = Artist::latest()->get();

        return view('admin.Artist.List', compact('artists'));
    }

    public function create()
    {
        return view('admin.Artist.Add');
    }

    public function store(CreateArtistRequest $request)
    {
        Artist::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'city' => $request->city,
            'phone' => $request->phone,
        ]);

        return redirect(route('admin.artists.index'));
    }

    public function show(Artist $artist)
    {
        return view('admin.Artist.Edit', compact('artist'));
    }

    public function edit(Artist $artist)
    {
        return view('admin.Artist.Edit', compact('artist'));
    }

    public function update(Artist $artist, UpdateArtistRequest $request)
    {
        $artist->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'city' => $request->city,
            'phone' => $request->phone,
        ]);

        return redirect()->route('admin.artists.index')->with('message', 'Artist Updated  Successfully!');
    }

    public function delete(Artist $artist)
    {
        $artist->delete();

        return redirect(route('admin.artists.index'));
    }
}
