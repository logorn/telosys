<?php

namespace Telosys\Domain\Entity;
              
class Client
{
    /**
     * @var integer
     */
    protected $id;
    
     /**
     * @var datetime
     */     
    protected $initiationDate;
    
     /**
     * @var integer
     */     
    protected $terminal;
    
     /**
     * @var string
     */     
    protected $session;
    
     /**
     * @var string
     */     
    protected $agent;
    
    /**
     * @var string
     */ 
    protected $card;
    
    /**
     * @var string
     */ 
    protected $carrierNumber;

    /**
     * @var string
     */     
    protected $carrierName;

    /**
     * @var string
     */     
    protected $carrierFirstName;
    
    /**
     * @var string
     */     
    protected $carrierAddress;

    /**
     * @var string
     */     
    protected $carrierPostalCode;

    /**
     * @var string
     */     
    protected $carrierTown;

    /**
     * @var integer
     */ 
    protected $carrierContractNumber;
    
    /**
     * @var string
     */ 
    protected $transactionId;
    
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
     * @return Client
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    
    /**
     *
     * @return datetime
     */
    public function getInitiationDate()
    {
        return $this->initiationDate;
    }
    
    /**
     * @param datetime $initiationDate
     * @return Client
     */
    public function setInitiationDate($initiationDate)
    {
        $this->initiationDate = $initiationDate;
        return $this;
    }

    /**
     *
     * @return integer
     */
    public function getTerminal()
    {
        return $this->terminal;
    }
   
    /**
     * @param integer $terminal
     * @return Client
     */
    public function setTerminal($terminal)
    {
        $this->terminal = $terminal;
        return $this;
    }
    
    /**
     * @param string
     */
    public function getSession()
    {
        return $this->session;
    }
    
    /**
     * @param string $terminal
     * @return Client
     */
    public function setSession($session)
    {
        $this->session = $session;
        return $this;
    }
    
    /**
     * @param string
     */    
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * @param string $agent
     * @return Client
     */        
    public function setAgent($agent)
    {
        $this->agent = $agent;
        return $this;
    }

    /**
     * @param string
     */      
    public function getCard()
    {
        return $this->card;
    }
    
    /**
     * @param string $card
     * @return Client
     */       
    public function setCard($card)
    {
        $this->card = $card;
        return $this;
    }
    
    /**
     * @param string
     */   
    public function getCarrierNumber()
    {
        return $this->carrierNumber;
    }
    
    /**
     * @param string $carrierNumber
     * @return Client
     */ 
    public function setCarrierNumber($carrierNumber)
    {
        $this->carrierNumber = $carrierNumber;
        return $this;
    }
    
    /**
     *
     * @return string
     * 
     */    
    public function getCarrierName()
    {
        return $this->carrierName;
    }
    
    /**
     * @param string $carrierName
     * @return Client
     */    
    public function setCarrierName($carrierName)
    {
        $this->carrierName = $carrierName;
        return $this;
    }
    
    /**
     * 
     *  @return string
     *
     */
    public function getCarrierFirstName()
    {
        return $this->carrierFirstName;
    }
    
    /**
     * 
     * @param string $carrierFirstName
     * @return Client
     *
     */
    public function setCarrierFirstName($carrierFirstName)
    {
        $this->carrierFirstName = $carrierFirstName;
        return $this;
    }
    
    /**
     * 
     * @return string
     *
     */
    public function getCarrierAddress()
    {
        return $this->carrierAddress;
    }
    
    /**
     * 
     * @param string $carrierAddress
     * @return Client
     *
     */
    public function setCarrierAddress($carrierAddress)
    {
        $this->carrierAddress = $carrierAddress;
        return $this;
    }
    
    /**
     * 
     * @return string
     *
     */
    public function getCarrierPostalCode()
    {
        return $this->carrierPostalCode;
    }
    
    /**
     * 
     * @param string $carrierPostalCode
     * @return Client
     *
     */
    public function setCarrierPostalCode($carrierPostalCode)
    {
        $this->carrierPostalCode = $carrierPostalCode;
        return $this;
    }
    
    /**
     * 
     * @return string
     *
     */    
    public function getCarrierTown()
    {
        return $this->carrierTown;
    }
    
    /**
     * 
     * @param string $carrierTown
     * @return Client
     *
     */    
    public function setCarrierTown($carrierTown)
    {
        $this->carrierTown = $carrierTown;
        return $this;
    }
    
    /**
     * 
     * @return integer
     *
     */     
    public function getCarrierContractNumber()
    {
        return $this->carrierContractNumber;
    }
    
    /**
     * 
     * @param string $carrierContractNumber
     * @return Client
     *
     */  
    public function setCarrierContractNumber($carrierContractNumber)
    {
        $this->carrierContractNumber = $carrierContractNumber;
        return $this;
    }
    
    /**
     * 
     * @return string
     *
     */  
    public function getTransactionId()
    {
        return $this->transactionId;
    }
    
    /**
     * 
     * @param string $transactionId
     * @return Client
     *
     */      
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;
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
