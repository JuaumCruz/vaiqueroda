<?php

namespace VaiQueCompra\Domain\Services\Company;

use VaiQueCompra\Domain\Contracts\Services\RequestInterface;
use VaiQueCompra\Domain\Contracts\Services\ServiceDispatcherInterface;
use VaiQueCompra\Domain\Contracts\Services\ServiceLocatorInterface;
use Illuminate\Http\Response;
use VaiQueCompra\Domain\Repositories\CompanyRepository;

class CompanyServiceDispatcher implements ServiceDispatcherInterface
{

    /**
     * @var ServiceLocatorInterface
     */
    protected $locator;
    /**
     * @var CompanyRepository
     */
    protected $repository;

    /**
     * CompanyServiceDispatcher constructor.
     * @param CompanyServiceLocator $locator
     */
    public function __construct(CompanyServiceLocator $locator, CompanyRepository $repository)
    {
        $this->locator = $locator;
        $this->repository = $repository;
    }

    public function dispatch(RequestInterface $request): Response
    {
        $serviceClass = $this->locator->getService(get_class($request));
        $service = new $serviceClass($this->repository);
        return $service->run($request);
    }
}