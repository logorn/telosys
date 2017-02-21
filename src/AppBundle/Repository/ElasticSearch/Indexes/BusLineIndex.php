<?php

namespace AppBundle\Repository\ElasticSearch\Indexes;

use AppBundle\Repository\ElasticSearch\ElasticSearchIndexBase;
use Telosys\Domain\Repository\ElasticSearch\ElasticSearchIndex;

class BusLineIndex extends ElasticSearchIndexBase implements ElasticSearchIndex
{
	const NAME = "buslines";
	
	const TYPE = "busline";
	
    /**
     *
     * @return string
     */		
	public function getName()
	{
		return self::NAME;
	}

    /**
     *
     * @return string
     */		
	public function getType()
	{
		return self::TYPE;
	}
	
    /**
     *
     * @return array
     */		
	public function getSchema()
	{
		return [
			"settings" => [
				"number_of_shards" => 1,
				"number_of_replicas" => 1
			],
			"mappings" => [
				"busline" => [
					"_source" => ["enabled" => true],
					"_all" => ["enabled" => true],
					"properties" => [
						"id" => [ "type" => "string", "index" => "not_analyzed"],
						"commercialSense" => [ "type" => "string", "index" => "not_analyzed", "store"=> true],
						"fullLabel" => [ "type" => "string", "index" => "not_analyzed", "store"=> true],
						"code" => [ "type" => "string", "index" => "not_analyzed", "store"=> true],
						"shortName" => [ "type" => "string", "index" => "not_analyzed", "store"=> true],
						"lineId" => [ "type" => "string", "index" => "not_analyzed", "store"=> true],
						"departureStartPointName" => [ "type" => "string", "index" => "not_analyzed", "store"=> true],
						"arriveStopPointName" => [ "type" => "string", "index" => "not_analyzed", "store"=> true],
						"departureStartPointId" => [ "type" => "string", "index" => "not_analyzed", "store"=> true],
						"arriveStopPointId" => [ "type" => "string", "index" => "not_analyzed", "store"=> true],
						"internalId" => [ "type" => "string", "index" => "not_analyzed", "store"=> true],
						"type" => [ "type" => "string", "index" => "not_analyzed", "store"=> true],
						"isAccessibleForDisabledPersons" => [ "type" => "string", "index" => "not_analyzed", "store"=> true],
						"recordId" => [ "type" => "string", "index" => "not_analyzed", "store"=> true],
						"coordinates" => [
							"properties" => [
								"geometry" => [
									"properties" => [
										"type" => [ "type" => "string", "index" => "not_analyzed", "store"=> true],
										"coordinates" => [ "type" => "double", "index" => "not_analyzed", "store"=> true],
									]
								],
								"course" => [
									"properties" => [
										"type" => [ "type" => "string", "index" => "not_analyzed", "store"=> true],
										"coordinates" => [ "type" => "double", "index" => "not_analyzed", "store"=> true],
									]
								],
								"getGeoPoint2d" => [ "type" => "double", "index" => "not_analyzed", "store"=> true],
							],
						]
					],
				]
			],
			"refresh" => True
		];
	}
	
    /**
     *
     * @return array
     */		
	public function setUp()
	{
        return $this->client->indices()->create(
			[
				'index' => $this->getName(),
				'body'	=> $this->getSchema()
			]
		);
	}
	
    /**
     *
     * @return array
     */		
	public function delete()
	{
		return $this->client->indices()->delete(
			['index' => $this->getName()]
		);
	}
}