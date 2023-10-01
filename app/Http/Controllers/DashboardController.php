<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() 
    {
        $count = 10;
        $quantity =  [
            "ten" => 10,
            "fifteen" => 15,
            "twenty" => 20,
            "thirty" => 30
        ];
        $animes = Anime::paginate($count);
        return view('dashboard', compact('animes', 'quantity'));
    }
}
