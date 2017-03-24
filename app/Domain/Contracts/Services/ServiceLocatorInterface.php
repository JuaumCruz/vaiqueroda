<?php

namespace VaiQueCompra\Domain\Contracts\Services;

interface ServiceLocatorInterface
{
    public function getService(string $requestClass): string;
}