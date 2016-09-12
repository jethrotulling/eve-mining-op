<?php
namespace MiningBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="item_group")
 */
class ItemGroup
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
     * @ORM\OneToMany(targetEntity="Item", mappedBy="itemGroup")
     */
    private $item;

    /**
     * @ORM\OneToMany(targetEntity="LootLog", mappedBy="itemGroup")
     */
    private $lootLog;

    public function __construct()
    {
        $this->item = new ArrayCollection();
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
     * @return ItemGroup
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
     * Add item
     *
     * @param \MiningBundle\Entity\Item $item
     *
     * @return ItemGroup
     */
    public function addItem(\MiningBundle\Entity\Item $item)
    {
        $this->item[] = $item;

        return $this;
    }

    /**
     * Remove item
     *
     * @param \MiningBundle\Entity\Item $item
     */
    public function removeItem(\MiningBundle\Entity\Item $item)
    {
        $this->item->removeElement($item);
    }

    /**
     * Get item
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Add lootLog
     *
     * @param \MiningBundle\Entity\LootLog $lootLog
     *
     * @return ItemGroup
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
