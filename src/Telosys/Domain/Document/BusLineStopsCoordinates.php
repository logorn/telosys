<?php

namespace Telosys\Domain\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Symfony\Component\Validator\Constraints as Assert;

class BusLineStopsCoordinates
{
    /**
     * @var string
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @var string
     * @MongoDB\Field(type="string")
     * @MongoDB\Index
     * @Assert\NotBlank()
     */
    protected $code;
    
    /**
     * @var string
     * @MongoDB\Field(type="string")
     * @MongoDB\Index
     * @Assert\NotBlank()
     */      
    protected $recordId;
 
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return BusStopsCoordinates
     */
    public function setId(string $id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return BusStopsCoordinates
     */
    public function setCode(string $code)
    {
        $this->code = $code;
        return $this;
    }
    
    /**
     *
     * @return string
     */
    public function getRecordId()
    {
        return $this->recordId;
    }

    /**
     *
     * @param string $recordId
     * @return BusStopsCoordinates
     */
    public function setRecordId($recordId)
    {
        $this->recordId = $recordId;
        return $this;
    }
}
