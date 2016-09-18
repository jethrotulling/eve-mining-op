<?php

namespace MiningBundle\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="invMetaGroups")
 */
class InvMetaGroups
{
    /**
     * @ORM\Id
     * @ORM\Column(name="metaGroupID", type="integer")
     * @ORM\GeneratedValue
     */
    private $metaGroupId;

    /**
     * @ORM\Column(name="metaGroupName", type="string", length=100)
     */
    private $metagroupname;

    /**
     * @ORM\Column(name="description", type="string", length=1000)
     */
    private $description;

    /**
     * @ORM\Column(name="iconID", type="integer")
     */
    private $iconId;


    /**
     * Get metaGroupId
     *
     * @return integer
     */
    public function getMetaGroupId()
    {
        return $this->metaGroupId;
    }

    /**
     * Set metagroupname
     *
     * @param string $metagroupname
     *
     * @return InvMetaGroups
     */
    public function setMetagroupname($metagroupname)
    {
        $this->metagroupname = $metagroupname;

        return $this;
    }

    /**
     * Get metagroupname
     *
     * @return string
     */
    public function getMetagroupname()
    {
        return $this->metagroupname;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return InvMetaGroups
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
     * Set iconId
     *
     * @param integer $iconId
     *
     * @return InvMetaGroups
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
}
