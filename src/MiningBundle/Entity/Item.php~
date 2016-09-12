<?php
namespace MiningBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="item")
 */
class Item
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
     * @ORM\ManyToOne(targetEntity="ItemGroup", inversedBy="item")
     * @ORM\JoinColumn(name="item_group_id", referencedColumnName="id")
     */
    private $itemGroup;

    /**
     * @ORM\OneToMany(targetEntity="LootLog", mappedBy="item")
     */
    private $lootLog;

    public function __construct()
    {
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
     * @return Item
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
     * Set itemGroup
     *
     * @param \MiningBundle\Entity\ItemGroup $itemGroup
     *
     * @return Item
     */
    public function setItemGroup(\MiningBundle\Entity\ItemGroup $itemGroup = null)
    {
        $this->itemGroup = $itemGroup;

        return $this;
    }

    /**
     * Get itemGroup
     *
     * @return \MiningBundle\Entity\ItemGroup
     */
    public function getItemGroup()
    {
        return $this->itemGroup;
    }

    /**
     * Add lootLog
     *
     * @param \MiningBundle\Entity\LootLog $lootLog
     *
     * @return Item
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
