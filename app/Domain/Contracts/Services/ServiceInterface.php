<?php

namespace VaiQueCompra\Domain\Contracts\Services;

interface ServiceInterface
{
    public function run(RequestInterface $request);
}