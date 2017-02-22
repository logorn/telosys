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
     * @var array
     * @MongoDB\Field(type="hash")
     * @MongoDB\Index
     * @Assert\NotBlank()
     */ 
    protected $course;
    
    /**
     * @var array
     * @MongoDB\Field(type="hash")
     * @MongoDB\Index
     * @Assert\NotBlank()
     */     
    protected $geoPoint2d;
    
    /**
     * @var array
     * @MongoDB\Field(type="hash")
     * @MongoDB\Index
     * @Assert\NotBlank()
     */     
    protected $geometry;
 
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
    
    /**
     *
     * @return array
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     *
     * @param array $course
     * @return BusStopsCoordinates
     */
    public function setCourse($course)
    {
        $this->course = $course;
        return $this;
    }
    
    /**
     *
     * @return array
     */
    public function getGeoPoint2d()
    {
        return $this->geoPoint2d;
    }
    
    /**
     *
     * @param array $geoPoint2d
     * @return BusStopsCoordinates
     */    
    public function setGeoPoint2d($geoPoint2d)
    {
        $this->geoPoint2d = $geoPoint2d;
        return $this;
    }
    
    /**
     *
     * @return array
     */
    public function getGeometry()
    {
        return $this->geometry;
    }
    
    /**
     *
     * @param array $geometry
     * @return BusStopsCoordinates
     */    
    public function setGeometry($geometry)
    {
        $this->geometry = $geometry;
        return $this;
    }
    
    /**
     *
     * @return array 
     *
     */    
    public function toArray()
    {
        $toArray = get_object_vars($this);
        return $toArray;
    }
}
