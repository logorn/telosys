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
 * Class ElasticSearchStorageBase.
 */
class ElasticSearchStorageBase extends ElasticSearchCommon
{   
	public function save()
	{
		$this->params['index'] = $this->getName();
        $this->params['type']  = $this->getType();
        $this->params['id']    = $this->getId();
		
        return $this->client->index($this->getParams());
	}
}