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
        $content = [
            'message' => 'Anime agregado a tu lista de pendientes!!',
            'color' => 'bg-blue-500',
            'visibility' => true,
        ];
    return redirect()->back()->with('response', $content['message'])->with('color', $content['color'])->with('visibility', $content['visibility']);
    }

    public function deletePendingAnime($id)
    {
        Auth()->user()->animes()->detach($id);
        $content = [
            'message' => 'Anime eliminado de tu lista de pendientes!!',
            'color' => 'gray',
        ];
        return redirect()->back()->with('response', $content['message'])->with('color', $content['color']);
    }
}
