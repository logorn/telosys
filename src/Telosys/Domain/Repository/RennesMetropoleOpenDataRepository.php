<?php

namespace Telosys\Domain\Repository;

interface RennesMetropoleOpenDataRepository
{
    /**
     *
     * @return GuzzleHttp\Psr7\Stream
     * 
     */
    public function findAll();
}
