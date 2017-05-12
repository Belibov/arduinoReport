<?php

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Movement
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
     * @MongoDB\Field(type="boolean")
     */
    protected $movement;

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
     * Set movement
     *
     * @param boolean $movement
     * @return $this
     */
    public function setMovement($movement)
    {
        $this->movement = $movement;
        return $this;
    }

    /**
     * Get movement
     *
     * @return boolean $movement
     */
    public function getMovement()
    {
        return $this->movement;
    }
}
