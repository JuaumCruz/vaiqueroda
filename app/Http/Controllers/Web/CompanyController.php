<?php

namespace VaiQueCompra\Http\Controllers\Web;

use VaiQueCompra\Http\Controllers\Controller;
use VaiQueCompra\Http\Requests\Company\CreateCompany;
use VaiQueCompra\Domain\Models\Company;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Auth::user()->companies;
        return view('company.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCompany $request)
    {
        $dados = $request->all();
        $dados['user_id'] = Auth::user()->id;
        Company::create($dados);

        return redirect()->route('company.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \VaiQueCompra\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \VaiQueCompra\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('company.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \VaiQueCompra\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(CreateCompany $request, Company $company)
    {
        $dados = $request->all();
        $company->update($dados);

        return redirect()->route('company.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \VaiQueCompra\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('company.index');
    }
}
