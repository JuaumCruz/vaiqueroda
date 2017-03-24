<?php

namespace VaiQueCompra\Domain\Contracts\Services;

use Illuminate\Http\Response;

interface ServiceDispatcherInterface
{
    public function dispatch(RequestInterface $request): Response;
}