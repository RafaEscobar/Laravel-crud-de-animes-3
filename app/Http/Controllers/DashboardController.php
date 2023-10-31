<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use App\Models\Anime_User;
use Illuminate\Http\Request;
 
class DashboardController extends Controller
{
    public function index(Request $request) 
    {
        $count = $request->input('count') ?? 10;
        $quantity =  [
            "10" => 10,
            "15" => 15,
            "20" => 20,
            "30" => 30
        ];

        $animes = Anime::select('animes.*')->whereNotIn('id', Anime_User::select('anime_id')->get())->paginate($count);
        
        return view('dashboard', compact('animes', 'quantity', 'count'));
    }

    public function createPendingAnime ($animeId) 
    { 
        Auth()->user()->animes()->attach($animeId);   
        return redirect()->back()->with('response', 'Anime agregado a tu lista de pendientes!!')->with('color', 'blue');
    }

    public function deletePendingAnime($id)
    {
        Auth()->user()->animes()->detach($id);

        return redirect()->back();
    }
}
