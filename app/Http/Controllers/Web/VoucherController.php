<?php

namespace VaiQueCompra\Http\Controllers\Web;

use VaiQueCompra\Http\Controllers\Controller;
use VaiQueCompra\Domain\Models\Sale;
use VaiQueCompra\Domain\Models\Voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vouchers = Auth::user()->vouchers;
        $bookings = Auth::user()->bookings;
        return view('voucher.index ', compact('vouchers', 'bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $sale = Sale::findOrFail($request->get('sale_id'));
        return view('voucher.create', compact('sale'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados = $request->all();
        $dados['user_id'] = Auth::user()->id;
        $dados['code'] = uniqid("#");
        $dados['active'] = false;
        Voucher::create($dados);

        return redirect()->route('voucher.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \VaiQueCompra\Domain\Models\Voucher  $voucher
     * @return \Illuminate\Http\Response
     */
    public function show(Voucher $voucher)
    {
        return view('voucher.show', compact('voucher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \VaiQueCompra\Domain\Models\Voucher  $voucher
     * @return \Illuminate\Http\Response
     */
    public function edit(Voucher $voucher)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \VaiQueCompra\Domain\Models\Voucher  $voucher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Voucher $voucher)
    {
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \VaiQueCompra\Domain\Models\Voucher  $voucher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Voucher $voucher)
    {
        abort(404);
    }
}
