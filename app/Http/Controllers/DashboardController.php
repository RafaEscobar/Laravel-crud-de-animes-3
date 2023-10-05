<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use App\Models\AnimePendingUser;
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

        $animes = Anime::paginate($count);
        
        return view('dashboard', compact('animes', 'quantity', 'count'));
    }

    public function createPendingAnime ($animeId) 
    {
        AnimePendingUser::firstOrCreate([
            'user_id' => Auth()->user()->id,
            'anime_id' => $animeId,
        ]); 
        $response = "Anime agregado a tu lista de pendientes!!";

        return redirect()->back()->with('response', $response);
    }
}
