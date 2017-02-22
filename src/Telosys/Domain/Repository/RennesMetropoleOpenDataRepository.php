<?php

/*
 * This file is part of the Telosys package.
 *
 * Coded by MAILLET Hugues
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Telosys\Domain\Repository;

/**
 * Class RennesMetropoleOpenDataRepository.
 */ 
interface RennesMetropoleOpenDataRepository
{
    /**
     *
     * @return GuzzleHttp\Psr7\Stream
     * 
     */
    public function findAll();
}
