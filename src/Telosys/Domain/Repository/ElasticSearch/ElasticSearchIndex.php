<?php

namespace Telosys\Domain\Repository\ElasticSearch;

interface ElasticSearchIndex
{
    public function execute();

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
    
    /**
     *
     * @return array
     */	      
    public function getSchema();
    
    /**
     *
     * @return array
     */	    
    public function setUp();
    
    /**
     *
     * @return array
     */	    
    public function delete();
}