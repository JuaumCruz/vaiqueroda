<?php

namespace VaiQueCompra\Domain\Services\Company;

use VaiQueCompra\Domain\Contracts\Services\RequestInterface;
use VaiQueCompra\Domain\Contracts\Services\ServiceInterface;
use VaiQueCompra\Domain\Contracts\Repositories\CompanyRepositoryInterface;

class CreateCompanyService implements ServiceInterface
{

    /**
     * @var CompanyRepositoryInterface
     */
    private $repository;

    public function __construct(CompanyRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function run(RequestInterface $request)
    {
        dd($request);
        $this->repository->save($request);
    }
}