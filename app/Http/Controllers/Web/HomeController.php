<?php

namespace VaiQueCompra\Http\Controllers\Web;

use VaiQueCompra\Http\Controllers\Controller;
use VaiQueCompra\Domain\Models\Sale;

class HomeController extends Controller
{
    /**
     * Show the VaiQueCompralication dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = Sale::with('company')->get();
        return view('home', compact('sales'));
    }
}
