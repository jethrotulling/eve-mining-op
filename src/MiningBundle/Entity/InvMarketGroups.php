<?php

namespace MiningBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="invMarketGroups")
 */
class InvMarketGroups
{
    /**
     * @ORM\Id
     * @ORM\Column(name="marketGroupID", type="integer")
     * @ORM\GeneratedValue
     */
    private $marketGroupId;

    /**
     * Need to figure out what this maps to
     * Doesnt map to invGroups
     * @ORM\Column(name="parentGroupID", type="integer")
     */
    private $parentGroupId;

    /**
     * @ORM\OneToMany(targetEntity="InvTypes", mappedBy="marketGroupId")
     */
    private $invTypes;

    /**
     * @ORM\Column(name="marketGroupName", type="string", length=100)
     */
    private $marketGroupName;

    /**
     * @ORM\Column(name="description", type="string", length=3000)
     */
    private $description;

    /**
     * @ORM\Column(name="iconID", type="integer")
     */
    private $iconid;

    /**
     * @ORM\Column(name="hasTypes", type="integer")
     */
    private $hasTypes;

    public function __construct() {
        $this->invTypes = new ArrayCollection();
    }

    /**
     * Get marketGroupId
     *
     * @return integer
     */
    public function getMarketGroupId()
    {
        return $this->marketGroupId;
    }

    /**
     * Set parentGroupId
     *
     * @param integer $parentGroupId
     *
     * @return InvMarketGroups
     */
    public function setParentGroupId($parentGroupId)
    {
        $this->parentGroupId = $parentGroupId;

        return $this;
    }

    /**
     * Get parentGroupId
     *
     * @return integer
     */
    public function getParentGroupId()
    {
        return $this->parentGroupId;
    }

    /**
     * Set marketGroupName
     *
     * @param string $marketGroupName
     *
     * @return InvMarketGroups
     */
    public function setMarketGroupName($marketGroupName)
    {
        $this->marketGroupName = $marketGroupName;

        return $this;
    }

    /**
     * Get marketGroupName
     *
     * @return string
     */
    public function getMarketGroupName()
    {
        return $this->marketGroupName;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return InvMarketGroups
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
     * Set iconid
     *
     * @param integer $iconid
     *
     * @return InvMarketGroups
     */
    public function setIconid($iconid)
    {
        $this->iconid = $iconid;

        return $this;
    }

    /**
     * Get iconid
     *
     * @return integer
     */
    public function getIconid()
    {
        return $this->iconid;
    }

    /**
     * Set hasTypes
     *
     * @param integer $hasTypes
     *
     * @return InvMarketGroups
     */
    public function setHasTypes($hasTypes)
    {
        $this->hasTypes = $hasTypes;

        return $this;
    }

    /**
     * Get hasTypes
     *
     * @return integer
     */
    public function getHasTypes()
    {
        return $this->hasTypes;
    }

    /**
     * Add invType
     *
     * @param \MiningBundle\Entity\InvTypes $invType
     *
     * @return InvMarketGroups
     */
    public function addInvType(\MiningBundle\Entity\InvTypes $invType)
    {
        $this->invTypes[] = $invType;

        return $this;
    }

    /**
     * Remove invType
     *
     * @param \MiningBundle\Entity\InvTypes $invType
     */
    public function removeInvType(\MiningBundle\Entity\InvTypes $invType)
    {
        $this->invTypes->removeElement($invType);
    }

    /**
     * Get invTypes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInvTypes()
    {
        return $this->invTypes;
    }
}
