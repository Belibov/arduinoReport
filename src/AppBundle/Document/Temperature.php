<?php

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Temperature
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $arduinoName;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $time;

    /**
     * @MongoDB\Field(type="float")
     */
    protected $temperature;

    /**
     * @MongoDB\Field(type="float")
     */
    protected $humidity;

    /**
     * @MongoDB\Field(type="float")
     */
    protected $feeledTemperature;

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set arduinoName
     *
     * @param string $arduinoName
     * @return $this
     */
    public function setArduinoName($arduinoName)
    {
        $this->arduinoName = $arduinoName;
        return $this;
    }

    /**
     * Get arduinoName
     *
     * @return string $arduinoName
     */
    public function getArduinoName()
    {
        return $this->arduinoName;
    }

    /**
     * Set time
     *
     * @param int $time
     * @return $this
     */
    public function setTime($time)
    {
        $this->time = $time;
        return $this;
    }

    /**
     * Get time
     *
     * @return int $time
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set temperature
     *
     * @param float $temperature
     * @return $this
     */
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;
        return $this;
    }

    /**
     * Get temperature
     *
     * @return float $temperature
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * Set humidity
     *
     * @param float $humidity
     * @return $this
     */
    public function setHumidity($humidity)
    {
        $this->humidity = $humidity;
        return $this;
    }

    /**
     * Get humidity
     *
     * @return float $humidity
     */
    public function getHumidity()
    {
        return $this->humidity;
    }

    /**
     * Set feeledTemperature
     *
     * @param float $feeledTemperature
     * @return $this
     */
    public function setFeeledTemperature($feeledTemperature)
    {
        $this->feeledTemperature = $feeledTemperature;
        return $this;
    }

    /**
     * Get feeledTemperature
     *
     * @return float $feeledTemperature
     */
    public function getFeeledTemperature()
    {
        return $this->feeledTemperature;
    }
}
