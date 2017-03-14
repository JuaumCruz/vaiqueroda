<?php

namespace App\Contracts\Repositories;

interface CompanyRepositoryInterface extends RepositoryInterface
{
    public function getAll();
}