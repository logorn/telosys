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
					"_source" => ["enabled" => True],
					"properties" => [
						"id" => [ "type" => "string", "index" => "not_analyzed"],
						"commercialSense" => [ "type" => "string", "index" => "not_analyzed"],
						"fullLabel" => [ "type" => "string", "index" => "not_analyzed"],
						"code" => [ "type" => "string", "index" => "not_analyzed"],
						"shortName" => [ "type" => "string", "index" => "not_analyzed"],
						"lineId" => [ "type" => "string", "index" => "not_analyzed"],
						"departureStartPointName" => [ "type" => "string", "index" => "not_analyzed"],
						"arriveStopPointName" => [ "type" => "string", "index" => "not_analyzed"],
						"departureStartPointId" => [ "type" => "string", "index" => "not_analyzed"],
						"arriveStopPointId" => [ "type" => "string", "index" => "not_analyzed"],
						"internalId" => [ "type" => "string", "index" => "not_analyzed"],
						"type" => [ "type" => "string", "index" => "not_analyzed"],
						"isAccessibleForDisabledPersons" => [ "type" => "string", "index" => "not_analyzed"],
						"recordId" => [ "type" => "string", "index" => "not_analyzed"],
						"coordinates" => [
							"properties" => [
								"geometry" => [
									"properties" => [
										"type" => [ "type" => "string", "index" => "not_analyzed"],
										"coordinates" => [ "type" => "double", "index" => "not_analyzed"],
									]
								],
								"course" => [
									"properties" => [
										"type" => [ "type" => "string", "index" => "not_analyzed"],
										"coordinates" => [ "type" => "double", "index" => "not_analyzed"],
									]
								],
								"getGeoPoint2d" => [ "type" => "double", "index" => "not_analyzed"],
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