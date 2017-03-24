<?php

namespace VaiQueCompra\Domain\Repositories;

use VaiQueCompra\Domain\Contracts\Repositories\CompanyRepositoryInterface;
use VaiQueCompra\Domain\Models\Company;
use Illuminate\Database\Eloquent\Collection;

class CompanyRepository implements CompanyRepositoryInterface
{
    protected $model;

    public function __construct(Company $model)
    {
        $this->model = $model;
    }

    public function getAll(): Collection
    {
        return $this->model->all();
    }

    public function find(int $id): ?Company
    {
        return $this->model->find($id);
    }
}