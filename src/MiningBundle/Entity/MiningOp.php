<?php
namespace MiningBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="mining_op")
 */
class MiningOp
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $hash;

    /**
     * @ORM\Column(type="string")
     */
    private $title;

    /**
     * @ORM\Column(type="datetime")
     */
    private $startTime;

    /**
     * @ORM\Column(type="datetime")
     */
    private $finishTime;

    /**
     * @ORM\ManyToOne(targetEntity="Character", inversedBy="miningOp")
     * @ORM\JoinColumn(name="fleet_boss_character_id", referencedColumnName="id")
     */
    private $fleetBoss;

    /**
     * @ORM\OneToMany(targetEntity="LootLog", mappedBy="miningOp")
     */
    private $lootLog;


    public function __construct() {
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
     * Set hash
     *
     * @param string $hash
     *
     * @return MiningOp
     */
    public function setHash($hash)
    {
        $this->hash = $hash;

        return $this;
    }

    /**
     * Get hash
     *
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return MiningOp
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set startTime
     *
     * @param \DateTime $startTime
     *
     * @return MiningOp
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * Get startTime
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Set finishTime
     *
     * @param \DateTime $finishTime
     *
     * @return MiningOp
     */
    public function setFinishTime($finishTime)
    {
        $this->finishTime = $finishTime;

        return $this;
    }

    /**
     * Get finishTime
     *
     * @return \DateTime
     */
    public function getFinishTime()
    {
        return $this->finishTime;
    }

    /**
     * Set fleetBoss
     *
     * @param \MiningBundle\Entity\Character $fleetBoss
     *
     * @return MiningOp
     */
    public function setFleetBoss(\MiningBundle\Entity\Character $fleetBoss = null)
    {
        $this->fleetBoss = $fleetBoss;

        return $this;
    }

    /**
     * Get fleetBoss
     *
     * @return \MiningBundle\Entity\Character
     */
    public function getFleetBoss()
    {
        return $this->fleetBoss;
    }

    /**
     * Add lootLog
     *
     * @param \MiningBundle\Entity\LootLog $lootLog
     *
     * @return MiningOp
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
