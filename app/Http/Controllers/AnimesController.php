<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AnimesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $animes = Anime::paginate(8);
        return view('animes.index', compact('animes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('animes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'genere' => 'required',
            'seasonCount' => 'required',
            'anime_portada_path' => 'required'
        ]);
        
        $imagePath = $request->anime_portada_path->store('public/portadas');

        Anime::create(
            array_merge(
                $request->all(),
                ['anime_portada_path' => $imagePath],
            )
        );

        return redirect()->route('anime.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Anime $anime)
    {
        return view('animes.show', compact('anime'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Anime $anime)
    {
        return view('animes.edit', compact('anime'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Anime $anime)
    {
        if ( !empty($request->anime_portada_path) ) Storage::delete($anime->anime_portada_path);
        $imagePath = ( !empty($request->anime_portada_path) ) ? $request->anime_portada_path->store('public/portadas') : $anime->anime_portada_path;

        $anime->update(
            array_merge(
                $request->all(),
                ['anime_portada_path' => $imagePath]
            )
        );

        return redirect()->route('anime.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Anime $anime)
    {
        //
    }
}
