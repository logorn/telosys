<?php

/*
 * This file is part of the Telosys package.
 *
 * Coded by MAILLET Hugues
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Repository\ElasticSearch;

/**
 * Class ElasticSearchIndexBase.
 */
class ElasticSearchIndexBase extends ElasticSearchCommon
{
    public function execute()
	{
		try {
			$this->delete();
		} catch (Missing404Exception $e) {
			// index undefined
		}
		
        $this->setUp();
	}
}