<?php

namespace VaiQueCompra\Domain\Services\Company;

use VaiQueCompra\Domain\Contracts\Services\ServiceInterface;
use VaiQueCompra\Domain\Contracts\Services\ServiceLocatorInterface;
use Exception;
use VaiQueCompra\Http\Requests\Company\CreateCompany;

class CompanyServiceLocator implements ServiceLocatorInterface
{
    protected $services;

    public function __construct()
    {
        $this->mapServices();
    }

    protected function mapServices()
    {
        $this->services = [
            CreateCompany::class => CreateCompanyService::class
        ];
    }

    protected function serviceExists(string $requestClass): bool
    {
        return isset($this->services[$requestClass]);
    }

    public function getService(string $requestClass): string
    {
        if (!$this->serviceExists($requestClass)) {
            throw new Exception("Service not found to {$requestClass}");
        }

        return $this->services[$requestClass];
    }
}