<?php

/*
 * This file is part of the Telosys package.
 *
 * Coded by MAILLET Hugues
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Telosys\Domain\Entity;

/**
 * Class BusLine.
 */                
class BusLine
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */    
    protected $commercialSense;
 
     /**
     * @var string
     */     
    protected $fullLabel;

     /**
     * @var string
     */      
    protected $code;
    
     /**
     * @var string
     */
    protected $shortName;
 
     /**
     * @var string
     */
    protected $lineId;

     /**
     * @var string
     */    
    protected $departureStartPointName;

     /**
     * @var string
     */      
    protected $arriveStopPointName;

     /**
     * @var string
     */   
    protected $departureStartPointId;
    
     /**
     * @var string
     */       
    protected $arriveStopPointId;

     /**
     * @var string
     */      
    protected $internalId;
    
     /**
     * @var string
     */     
    protected $type;
    
     /**
     * @var boolean
     */     
    protected $isAccessibleForDisabledPersons;
 
    /**
     * @var string
     */       
    protected $recordId;
    
    /**
     * @var array
     */ 
    protected $coordinates;
    
    /**
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     *
     * @param integer $id
     * @return BusLine
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    
    /**
     *
     * @return string
     */
    public function getCommercialSense()
    {
        return $this->commercialSense;
    }

    /**
     *
     * @param string $commercialSense
     * @return BusLine
     */
    public function setCommercialSense($commercialSense)
    {
        $this->commercialSense = $commercialSense;
        return $this;
    }
    
    /**
     *
     * @return string
     */
    public function getFullLabel()
    {
        return $this->fullLabel;
    }

    /**
     *
     * @param string $fullLabel
     * @return BusLine
     */
    public function setFullLabel($fullLabel)
    {
        $this->fullLabel = $fullLabel;
        return $this;
    }
    
    /**
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     *
     * @param string $code
     * @return BusLine
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }
    
    /**
     *
     * @return string
     */
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     *
     * @param string $shortName
     * @return BusLine
     */
    public function setShortName($shortName)
    {
        $this->shortName = $shortName;
        return $this;
    }
    
    /**
     *
     * @return string
     */
    public function getLineId()
    {
        return $this->lineId;
    }

    /**
     *
     * @param string $lineId
     * @return BusLine
     */
    public function setLineId($lineId)
    {
        $this->lineId = $lineId;
        return $this;
    }
    
    /**
     *
     * @return string
     */
    public function getDepartureStartPointName()
    {
        return $this->departureStartPointName;
    }

    /**
     *
     * @param string $departureStartPointName
     * @return BusLine
     */
    public function setDepartureStartPointName($departureStartPointName)
    {
        $this->departureStartPointName = $departureStartPointName;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getArriveStopPointName()
    {
        return $this->arriveStopPointName;
    }

    /**
     *
     * @param string $arriveStopPointName
     * @return BusLine
     */
    public function setArriveStopPointName($arriveStopPointName)
    {
        $this->arriveStopPointName = $arriveStopPointName;
        return $this;
    }
    
    /**
     *
     * @return string
     */
    public function getDepartureStartPointId()
    {
        return $this->departureStartPointId;
    }

    /**
     *
     * @param string $departureStartPointId
     * @return BusLine
     */
    public function setDepartureStartPointId($departureStartPointId)
    {
        $this->departureStartPointId = $departureStartPointId;
        return $this;
    }
    
    /**
     *
     * @return string
     */
    public function getArriveStopPointId()
    {
        return $this->arriveStopPointId;
    }

    /**
     *
     * @param string $arriveStopPointId
     * @return BusLine
     */
    public function setArriveStopPointId($arriveStopPointId)
    {
        $this->arriveStopPointId = $arriveStopPointId;
        return $this;
    }
    
    /**
     *
     * @return string
     */
    public function getInternalId()
    {
        return $this->internalId;
    }

    /**
     *
     * @param string $internalId
     * @return BusLine
     */
    public function setInternalId($internalId)
    {
        $this->internalId = $internalId;
        return $this;
    }
    
    /**
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     *
     * @param string $type
     * @return BusLine
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
    
    /**
     *
     * @return boolean
     */
    public function isAccessibleForDisabledPersons()
    {
        return $this->isAccessibleForDisabledPersons;
    }

    /**
     *
     * @param boolean $isAccessibleForDisabledPersons
     * @return BusLine
     */
    public function setIsAccessibleForDisabledPersons($isAccessibleForDisabledPersons)
    {
        $this->isAccessibleForDisabledPersons = $isAccessibleForDisabledPersons;
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
     * @return BusLine
     */
    public function setRecordId($recordId)
    {
        $this->recordId = $recordId;
        return $this;
    }
    
    /**
     *
     * @param array
     * 
     */
    public function getCoordinates()
    {
        return $this->coordinates;
    }    
    
    /**
     *
     * @param array $coordinates
     * @return BusLine
     */
    public function setCoordinates(array $coordinates)
    {
        $this->coordinates = $coordinates;
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