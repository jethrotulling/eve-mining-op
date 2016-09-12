<?php

namespace MiningBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="invGroups")
 */
class InvGroups
{
    /**
     * @ORM\Id
     * @ORM\Column(name="groupID", type="integer")
     * @ORM\GeneratedValue
     */
    private $groupId;

    /**
     * @ORM\ManyToOne(targetEntity="InvCategories", inversedBy="invGroups")
     * @ORM\JoinColumn(name="categoryID", referencedColumnName="categoryID")
     */
    private $categoryId;

    /**
     * @ORM\OneToMany(targetEntity="InvTypes", mappedBy="groupId")
     */
    private $invTypes;

    /**
     * @ORM\Column(name="groupName", type="string", length=100)
     */
    private $groupName;

    /**
     * @ORM\Column(name="iconID", type="integer")
     */
    private $iconId;

    /**
     * @ORM\Column(name="useBasePrice", type="integer")
     */
    private $useBasePrice;

    /**
     * @ORM\Column(name="anchored", type="integer")
     */
    private $anchored;

    /**
     * @ORM\Column(name="anchorable", type="integer")
     */
    private $anchorable;

    /**
     * @ORM\Column(name="fittableNonSingleton", type="integer")
     */
    private $fittableNonSingleton;

    /**
     * @ORM\Column(name="published", type="integer")
     */
    private $published;

    public function __construct() {
        $this->invTypes = new ArrayCollection();
    }

    /**
     * Get groupId
     *
     * @return integer
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Set groupName
     *
     * @param string $groupName
     *
     * @return InvGroups
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;

        return $this;
    }

    /**
     * Get groupName
     *
     * @return string
     */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * Set iconId
     *
     * @param integer $iconId
     *
     * @return InvGroups
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
     * Set useBasePrice
     *
     * @param integer $useBasePrice
     *
     * @return InvGroups
     */
    public function setUseBasePrice($useBasePrice)
    {
        $this->useBasePrice = $useBasePrice;

        return $this;
    }

    /**
     * Get useBasePrice
     *
     * @return integer
     */
    public function getUseBasePrice()
    {
        return $this->useBasePrice;
    }

    /**
     * Set anchored
     *
     * @param integer $anchored
     *
     * @return InvGroups
     */
    public function setAnchored($anchored)
    {
        $this->anchored = $anchored;

        return $this;
    }

    /**
     * Get anchored
     *
     * @return integer
     */
    public function getAnchored()
    {
        return $this->anchored;
    }

    /**
     * Set anchorable
     *
     * @param integer $anchorable
     *
     * @return InvGroups
     */
    public function setAnchorable($anchorable)
    {
        $this->anchorable = $anchorable;

        return $this;
    }

    /**
     * Get anchorable
     *
     * @return integer
     */
    public function getAnchorable()
    {
        return $this->anchorable;
    }

    /**
     * Set fittableNonSingleton
     *
     * @param integer $fittableNonSingleton
     *
     * @return InvGroups
     */
    public function setFittableNonSingleton($fittableNonSingleton)
    {
        $this->fittableNonSingleton = $fittableNonSingleton;

        return $this;
    }

    /**
     * Get fittableNonSingleton
     *
     * @return integer
     */
    public function getFittableNonSingleton()
    {
        return $this->fittableNonSingleton;
    }

    /**
     * Set published
     *
     * @param integer $published
     *
     * @return InvGroups
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
     * Set categoryId
     *
     * @param \MiningBundle\Entity\InvCategories $categoryId
     *
     * @return InvGroups
     */
    public function setCategoryId(\MiningBundle\Entity\InvCategories $categoryId = null)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId
     *
     * @return \MiningBundle\Entity\InvCategories
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Add invType
     *
     * @param \MiningBundle\Entity\InvTypes $invType
     *
     * @return InvGroups
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
