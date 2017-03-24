<?php

namespace VaiQueCompra\Domain\Contracts\Repositories;

use VaiQueCompra\Domain\Models\Company;
use Illuminate\Database\Eloquent\Collection;

interface CompanyRepositoryInterface
{
    public function getAll(): Collection;

    public function find(int $id): ?Company;
}