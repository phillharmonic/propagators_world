<?php
/*
 * Naming conventions used:
 * 
 * classes:         PascalCase  
 * tables:          camelCase
 * columns:         camelCase
 * methods:         camelCase  
 * functions:       camelCase  
 * variables:       camelCase
 * constants:       CONSTANT_CASE
 * constructors:     __constructCase
 * 
 * OR:  database naming = underscore
 *      everything else = camelCase
 * 
 */
namespace PpgwBundle\Entity;

class Ad
{
    protected $botanicalType;
    public function getBotanicalType()
    {
        return $this->botanicalType;
    }
    public function setType($botanicalType)
    {
        $this->botanicalType = $botanicalType;
    }

    protected $botanicalName;
    public function getBotanicalName()
    {
        return $this->botanicalName;
    }
    public function setBotanicalName($botanicalName)
    {
        $this->botanicalName = $botanicalName;
    }

    protected $commonName;
    public function getCommonName()
    {
        return $this->commonName;
    }
    public function setCommonName($commonName)
    {
        $this->commonName = $commonName;
    }
    
    protected $country;
    public function getCountry()
    {
        return $this->country;
    }
    public function setCountry($country)
    {
        $this->country = $country;
    }

    protected $stateOrProvince;
    public function getstateOrProvince()
    {
        return $this->stateOrProvince;
    }
    public function setStateOrProvince($stateOrProvince)
    {
        $this->stateOrProvince = $stateOrProvince;
    }
    
    protected $zone;
    public function getZone()
    {
        return $this->zone;
    }
    public function setZone($zone)
    {
        $this->zone = $zone;
    }
    
    protected $lightReq;
    public function getLightReq()
    {
        return $this->lightReq;
    }
    public function setLightReq($lightReq)
    {
        $this->lightReq = $lightReq;
    }
    
    protected $bloomTime;
    public function getBloomTime()
    {
        return $this->bloomTime;
    }
    public function setBloomTime($bloomTime)
    {
        $this->bloomTime = $bloomTime;
    }
    
    protected $height;
    public function getHeight()
    {
        return $this->height;
    }
    public function setHeight($height)
    {
        $this->height = $height;
    }
    
    protected $bloomColor;
    public function getBloomColor()
    {
        return $this->bloomColor;
    }
    public function setBloomColor($bloomColor)
    {
        $this->bloomColor = $bloomColor;
    }
    
    protected $hardiness;
    public function getHardiness()
    {
        return $this->hardiness;
    }
    public function setHardiness($hardiness)
    {
        $this->hardiness = $hardiness;
    }
    
    protected $buyOrSell;
    public function getBuyOrSell()
    {
        return $this->buyOrSell;
    }
    public function setBuyOrSell($buyOrSell)
    {
        $this->buyOrSell = $buyOrSell;
    }
    
    protected $quantity;
    public function getQuantity()
    {
        return $this->quantity;
    }
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
    
    protected $propagationMethod;
    public function getPropagationMethod()
    {
        return $this->propagationMethod;
    }
    public function setPropagationMethod($propagationMethod)
    {
        $this->propagationMethod = $propagationMethod;
    }
    
    protected $measure;
    public function getMeasure()
    {
        return $this->measure;
    }
    public function setMeasure($measure)
    {
        $this->measure = $measure;
    }
    
    protected $pricePerMeasure;
    public function getPricePerMeasure()
    {
        return $this->pricePerMeasure;
    }
    public function setPricePerMeasure($pricePerMeasure)
    {
        $this->pricePerMeasure = $pricePerMeasure;
    }
    
    protected $currency;
    public function getCurrency()
    {
        return $this->currency;
    }
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }
    
}