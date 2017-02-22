<?php

/*
 * This file is part of the Telosys package.
 *
 * Coded by MAILLET Hugues
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Telosys\Domain\Repository\ElasticSearch;

/**
 * Class ElasticSearchQuery.
 */ 
interface ElasticSearchQuery
{
    /**
     *
     * @return string
     */		
	public function getName();

    /**
     *
     * @return string
     */		
	public function getType();
}
