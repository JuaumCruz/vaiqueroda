<?php

namespace VaiQueCompra\Http\Controllers\Api;

use VaiQueCompra\Domain\Services\Company\CompanyServiceDispatcher;
use VaiQueCompra\Domain\Contracts\Repositories\CompanyRepositoryInterface;
use VaiQueCompra\Http\Controllers\Controller;
use VaiQueCompra\Http\Requests\Company\CreateCompany;
use Illuminate\Http\Response;

class CompanyController extends Controller
{
    protected $repository;
    protected $serviceDispatcher;

    public function __construct(CompanyRepositoryInterface $repository, CompanyServiceDispatcher $serviceDispatcher)
    {
        $this->repository = $repository;
        $this->serviceDispatcher = $serviceDispatcher;
    }

    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(): Response
    {
        return new Response($this->repository->getAll());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCompany $request): Response
    {
        $this->serviceDispatcher->dispatch($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id): Response
    {
        $model = $this->repository->find($id);
        $status = $model ? 200 : 404;
        return new Response($model, $status);
    }
}
