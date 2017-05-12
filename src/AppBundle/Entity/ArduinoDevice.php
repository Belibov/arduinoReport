<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArduinoDevice
 *
 * @ORM\Table(name="arduino_device")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ArduinoDeviceRepository")
 */
class ArduinoDevice
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="accessKey", type="string", length=255, nullable=true)
     */
    private $accessKey;

    /**
     * @var float
     *
     * @ORM\Column(name="temperatureMax", type="float", nullable=true)
     */
    private $temperatureMax;

    /**
     * @var float
     *
     * @ORM\Column(name="temperatureMin", type="float", nullable=true)
     */
    private $temperatureMin;

    /**
     * @var bool
     *
     * @ORM\Column(name="alarmed", type="boolean", nullable=false)
     */
    private $alarmed = false;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return ArduinoDevice
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set accessKey
     *
     * @param string $accessKey
     *
     * @return ArduinoDevice
     */
    public function setAccessKey($accessKey)
    {
        $this->accessKey = $accessKey;

        return $this;
    }

    /**
     * Get accessKey
     *
     * @return string
     */
    public function getAccessKey()
    {
        return $this->accessKey;
    }

    /**
     * @param string $key
     * @return bool
     */
    public function isAccessKey($key)
    {
        return (strcmp($key, $this->accessKey) == 0);
    }

    /**
     * @param float $temperatureMax
     * @return ArduinoDevice
     */
    public function setTemperatureMax($temperatureMax)
    {
        $this->temperatureMax = $temperatureMax;
        return $this;
    }

    /**
     * @return float
     */
    public function getTemperatureMax()
    {
        return $this->temperatureMax;
    }

    /**
     * @param float $temperatureMin
     * @return ArduinoDevice
     */
    public function setTemperatureMin($temperatureMin)
    {
        $this->temperatureMin = $temperatureMin;
        return $this;
    }

    /**
     * @return float
     */
    public function getTemperatureMin()
    {
        return $this->temperatureMin;
    }

    /**
     * @param bool $alarmed
     * @return ArduinoDevice
     */
    public function setAlarmed($alarmed)
    {
        $this->alarmed = $alarmed;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAlarmed()
    {
        return $this->alarmed;
    }
}

