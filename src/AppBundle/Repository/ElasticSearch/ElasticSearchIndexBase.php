<?php

namespace AppBundle\Repository\ElasticSearch;

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