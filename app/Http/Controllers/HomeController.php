<?php

namespace App\Http\Controllers;

use App\Models\Bichinho;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $bichinhosRecentes = Bichinho::orderBy('created_at', 'desc')->take(6)->get();
        return view('pages.home', compact('bichinhosRecentes'));
    }
}