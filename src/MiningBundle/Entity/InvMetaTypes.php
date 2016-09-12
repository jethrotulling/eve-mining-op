<?php

namespace MiningBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="invMetaTypes")
 */
class InvMetaTypes
{
    /**
     * @ORM\Id
     * @ORM\Column(name="typeID", type="integer")
     * @ORM\GeneratedValue
     */
    private $typeId;

    /**
     * @ORM\Column(name="parentTypeID", type="integer")
     */
    private $parentTypeId;

    /**
     * @ORM\Column(name="metaGroupID", type="integer")
     */
    private $metaGroupId;

    /**
     * Get typeId
     *
     * @return integer
     */
    public function getTypeId()
    {
        return $this->typeId;
    }

    /**
     * Set parentTypeId
     *
     * @param integer $parentTypeId
     *
     * @return InvMetaTypes
     */
    public function setParentTypeId($parentTypeId)
    {
        $this->parentTypeId = $parentTypeId;

        return $this;
    }

    /**
     * Get parentTypeId
     *
     * @return integer
     */
    public function getParentTypeId()
    {
        return $this->parentTypeId;
    }

    /**
     * Set metaGroupId
     *
     * @param integer $metaGroupId
     *
     * @return InvMetaTypes
     */
    public function setMetaGroupId($metaGroupId)
    {
        $this->metaGroupId = $metaGroupId;

        return $this;
    }

    /**
     * Get metaGroupId
     *
     * @return integer
     */
    public function getMetaGroupId()
    {
        return $this->metaGroupId;
    }
}
