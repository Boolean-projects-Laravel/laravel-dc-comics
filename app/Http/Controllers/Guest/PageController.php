<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class PageController extends Controller
{
    public function index()
    {

        return view('homepage');
    }

    public function comics()
    {
        // il controller chiama il Model per recuperare i dati dal database
        $arrComics = Comic::all();


        return view('comics', compact('arrComics'));
    }
}