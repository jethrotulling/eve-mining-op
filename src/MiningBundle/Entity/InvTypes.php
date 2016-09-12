<?php

namespace MiningBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="invTypes")
 */
class InvTypes
{
    /**
     * @ORM\Id
     * @ORM\Column(name="typeID", type="integer")
     * @ORM\GeneratedValue
     */
    private $typeID;

    /**
     * @ORM\ManyToOne(targetEntity="InvGroups", inversedBy="invTypes")
     * @ORM\JoinColumn(name="groupID", referencedColumnName="groupID")
     */
    private $groupId;

    /**
     * @ORM\ManyToOne(targetEntity="InvMarketGroups", inversedBy="invTypes")
     * @ORM\JoinColumn(name="marketGroupID", referencedColumnName="marketGroupID")
     */
    private $marketGroupId;

    /**
     * @ORM\Column(name="typeName", type="string", length=100)
     */
    private $typeName;

    /**
     * @ORM\Column(name="description", type="string", length=1000)
     */
    private $description;

    /**
     * @ORM\Column(name="mass", type="float")
     */
    private $mass;

    /**
     * @ORM\Column(name="volume", type="float")
     */
    private $volume;

    /**
     * @ORM\Column(name="capacity", type="float")
     */
    private $capacity;

    /**
     * @ORM\Column(name="portionSize", type="integer")
     */
    private $portionSize;

    /**
     * @ORM\Column(name="raceID", type="integer")
     */
    private $raceId;

    /**
     * @ORM\Column(name="basePrice", type="decimal", precision=19, scale=4)
     */
    private $basePrice;

    /**
     * @ORM\Column(name="published", type="integer")
     */
    private $published;

    /**
     * @ORM\Column(name="iconID", type="integer")
     */
    private $iconId;

    /**
     * @ORM\Column(name="soundID", type="integer")
     */
    private $soundId;

    /**
     * @ORM\Column(name="graphicID", type="integer")
     */
    private $graphicId;

    /**
     * Get typeID
     *
     * @return integer
     */
    public function getTypeID()
    {
        return $this->typeID;
    }

    /**
     * Set typeName
     *
     * @param string $typeName
     *
     * @return InvTypes
     */
    public function setTypeName($typeName)
    {
        $this->typeName = $typeName;

        return $this;
    }

    /**
     * Get typeName
     *
     * @return string
     */
    public function getTypeName()
    {
        return $this->typeName;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return InvTypes
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set mass
     *
     * @param float $mass
     *
     * @return InvTypes
     */
    public function setMass($mass)
    {
        $this->mass = $mass;

        return $this;
    }

    /**
     * Get mass
     *
     * @return float
     */
    public function getMass()
    {
        return $this->mass;
    }

    /**
     * Set volume
     *
     * @param float $volume
     *
     * @return InvTypes
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * Get volume
     *
     * @return float
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * Set capacity
     *
     * @param float $capacity
     *
     * @return InvTypes
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    /**
     * Get capacity
     *
     * @return float
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Set portionSize
     *
     * @param integer $portionSize
     *
     * @return InvTypes
     */
    public function setPortionSize($portionSize)
    {
        $this->portionSize = $portionSize;

        return $this;
    }

    /**
     * Get portionSize
     *
     * @return integer
     */
    public function getPortionSize()
    {
        return $this->portionSize;
    }

    /**
     * Set raceId
     *
     * @param integer $raceId
     *
     * @return InvTypes
     */
    public function setRaceId($raceId)
    {
        $this->raceId = $raceId;

        return $this;
    }

    /**
     * Get raceId
     *
     * @return integer
     */
    public function getRaceId()
    {
        return $this->raceId;
    }

    /**
     * Set basePrice
     *
     * @param string $basePrice
     *
     * @return InvTypes
     */
    public function setBasePrice($basePrice)
    {
        $this->basePrice = $basePrice;

        return $this;
    }

    /**
     * Get basePrice
     *
     * @return string
     */
    public function getBasePrice()
    {
        return $this->basePrice;
    }

    /**
     * Set published
     *
     * @param integer $published
     *
     * @return InvTypes
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return integer
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Set iconId
     *
     * @param integer $iconId
     *
     * @return InvTypes
     */
    public function setIconId($iconId)
    {
        $this->iconId = $iconId;

        return $this;
    }

    /**
     * Get iconId
     *
     * @return integer
     */
    public function getIconId()
    {
        return $this->iconId;
    }

    /**
     * Set soundId
     *
     * @param integer $soundId
     *
     * @return InvTypes
     */
    public function setSoundId($soundId)
    {
        $this->soundId = $soundId;

        return $this;
    }

    /**
     * Get soundId
     *
     * @return integer
     */
    public function getSoundId()
    {
        return $this->soundId;
    }

    /**
     * Set graphicId
     *
     * @param integer $graphicId
     *
     * @return InvTypes
     */
    public function setGraphicId($graphicId)
    {
        $this->graphicId = $graphicId;

        return $this;
    }

    /**
     * Get graphicId
     *
     * @return integer
     */
    public function getGraphicId()
    {
        return $this->graphicId;
    }

    /**
     * Set groupId
     *
     * @param \MiningBundle\Entity\InvGroups $groupId
     *
     * @return InvTypes
     */
    public function setGroupId(\MiningBundle\Entity\InvGroups $groupId = null)
    {
        $this->groupId = $groupId;

        return $this;
    }

    /**
     * Get groupId
     *
     * @return \MiningBundle\Entity\InvGroups
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Set marketGroupId
     *
     * @param \MiningBundle\Entity\InvMarketGroups $marketGroupId
     *
     * @return InvTypes
     */
    public function setMarketGroupId(\MiningBundle\Entity\InvMarketGroups $marketGroupId = null)
    {
        $this->marketGroupId = $marketGroupId;

        return $this;
    }

    /**
     * Get marketGroupId
     *
     * @return \MiningBundle\Entity\InvMarketGroups
     */
    public function getMarketGroupId()
    {
        return $this->marketGroupId;
    }
}
