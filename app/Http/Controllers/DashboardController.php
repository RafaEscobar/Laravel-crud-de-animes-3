<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() 
    {
        $animes = Anime::all();
        return view('dashboard', compact('animes'));
    }
}
