<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Repositories\CompanyRepositoryInterface;
use App\Contracts\Repositories\RepositoryInterface;
use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends ApiController
{
    protected $repository;

    public function __construct(CompanyRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return $this->repository->getAll();
    }


}
