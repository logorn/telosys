<?php

namespace AppBundle\Repository\ElasticSearch;

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