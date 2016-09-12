<?php

namespace MiningBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="invCategories")
 */
class InvCategories
{
    /**
     * @ORM\Id
     * @ORM\Column(name="categoryID", type="integer")
     * @ORM\GeneratedValue
     */
    private $categoryId;

    /**
     * @ORM\OneToMany(targetEntity="InvGroups", mappedBy="categoryId")
     */
    private $invGroups;

    /**
     * @ORM\Column(name="categoryName", type="string", length=64)
     */
    private $categoryName;

    /**
     * @ORM\Column(name="iconID", type="integer")
     */
    private $iconId;

    /**
     * @ORM\Column(name="published", type="integer")
     */
    private $published;

    public function __construct() {
        $this->invGroups = new ArrayCollection();
    }

    /**
     * Get categoryId
     *
     * @return integer
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set categoryName
     *
     * @param string $categoryName
     *
     * @return InvCategories
     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;

        return $this;
    }

    /**
     * Get categoryName
     *
     * @return string
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }

    /**
     * Set iconId
     *
     * @param integer $iconId
     *
     * @return InvCategories
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
     * Set published
     *
     * @param integer $published
     *
     * @return InvCategories
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
     * Add invGroup
     *
     * @param \MiningBundle\Entity\InvGroups $invGroup
     *
     * @return InvCategories
     */
    public function addInvGroup(\MiningBundle\Entity\InvGroups $invGroup)
    {
        $this->invGroups[] = $invGroup;

        return $this;
    }

    /**
     * Remove invGroup
     *
     * @param \MiningBundle\Entity\InvGroups $invGroup
     */
    public function removeInvGroup(\MiningBundle\Entity\InvGroups $invGroup)
    {
        $this->invGroups->removeElement($invGroup);
    }

    /**
     * Get invGroups
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInvGroups()
    {
        return $this->invGroups;
    }
}
