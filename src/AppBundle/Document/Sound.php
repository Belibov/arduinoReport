<?php

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Sound
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
    protected $sound;

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
     * Set sound
     *
     * @param boolean $sound
     * @return $this
     */
    public function setSound($sound)
    {
        $this->sound = $sound;
        return $this;
    }

    /**
     * Get sound
     *
     * @return boolean $sound
     */
    public function getSound()
    {
        return $this->sound;
    }
}
