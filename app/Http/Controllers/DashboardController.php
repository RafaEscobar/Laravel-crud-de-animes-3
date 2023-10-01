<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() 
    {
        $count = 10;
        $animes = Anime::paginate($count);
        return view('dashboard', compact('animes'));
    }
}
