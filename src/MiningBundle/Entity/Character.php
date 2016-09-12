<?php
namespace MiningBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="`character`")
 */
class Character
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="MiningOp", mappedBy="fleetBoss")
     */
    private $miningOp;

    /**
     * @ORM\OneToMany(targetEntity="LootLog", mappedBy="character")
     */
    private $lootLog;

    public function __construct() {
        $this->miningOp = new ArrayCollection();
        $this->lootLog = new ArrayCollection();
    }


    /**
     * Get id
     *
     * @return integer
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
     * @return Character
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
     * Add miningOp
     *
     * @param \MiningBundle\Entity\MiningOp $miningOp
     *
     * @return Character
     */
    public function addMiningOp(\MiningBundle\Entity\MiningOp $miningOp)
    {
        $this->miningOp[] = $miningOp;

        return $this;
    }

    /**
     * Remove miningOp
     *
     * @param \MiningBundle\Entity\MiningOp $miningOp
     */
    public function removeMiningOp(\MiningBundle\Entity\MiningOp $miningOp)
    {
        $this->miningOp->removeElement($miningOp);
    }

    /**
     * Get miningOp
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMiningOp()
    {
        return $this->miningOp;
    }

    /**
     * Add lootLog
     *
     * @param \MiningBundle\Entity\LootLog $lootLog
     *
     * @return Character
     */
    public function addLootLog(\MiningBundle\Entity\LootLog $lootLog)
    {
        $this->lootLog[] = $lootLog;

        return $this;
    }

    /**
     * Remove lootLog
     *
     * @param \MiningBundle\Entity\LootLog $lootLog
     */
    public function removeLootLog(\MiningBundle\Entity\LootLog $lootLog)
    {
        $this->lootLog->removeElement($lootLog);
    }

    /**
     * Get lootLog
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLootLog()
    {
        return $this->lootLog;
    }
}
