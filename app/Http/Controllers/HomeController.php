<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wystawa;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $wystawy = Wystawa::all();

        return view('welcome', compact('wystawy'));
    }
}