<?php

namespace App\Http\Controllers;

use App\Models\Sale;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = Sale::with('company')->get();
        return view('home', compact('sales'));
    }
}
