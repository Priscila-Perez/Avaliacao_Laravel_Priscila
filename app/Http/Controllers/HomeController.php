<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $produtos = Produto::paginate(3);
        return view('home', compact($produtos));
    }
}
