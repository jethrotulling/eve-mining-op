<?php
namespace MiningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="loot_log", uniqueConstraints={
 *   @ORM\UniqueConstraint(name="idx_log_item", columns={"character_id", "item_id", "mining_op_id", "quantity", "time"})
 * })
 */
class LootLog {

    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Character", inversedBy="lootLog")
     * @ORM\JoinColumn(name="character_id", referencedColumnName="id")
     */
    private $character;

    /**
     * @ORM\ManyToOne(targetEntity="Item", inversedBy="lootLog")
     * @ORM\JoinColumn(name="item_id", referencedColumnName="id")
     */
    private $item;

    /**
     * @ORM\ManyToOne(targetEntity="ItemGroup", inversedBy="lootLog")
     * @ORM\JoinColumn(name="item_group_id", referencedColumnName="id")
     */
    private $itemGroup;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantity;

    /**
     * @ORM\Column(type="datetime")
     */
    private $time;

    /**
     * @ORM\ManyToOne(targetEntity="MiningOp", inversedBy="lootLog")
     * @ORM\JoinColumn(name="mining_op_id", referencedColumnName="id")
     */
    private $miningOp;



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
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return LootLog
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set time
     *
     * @param \DateTime $time
     *
     * @return LootLog
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return \DateTime
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set character
     *
     * @param \MiningBundle\Entity\Character $character
     *
     * @return LootLog
     */
    public function setCharacter(\MiningBundle\Entity\Character $character = null)
    {
        $this->character = $character;

        return $this;
    }

    /**
     * Get character
     *
     * @return \MiningBundle\Entity\Character
     */
    public function getCharacter()
    {
        return $this->character;
    }

    /**
     * Set item
     *
     * @param \MiningBundle\Entity\Item $item
     *
     * @return LootLog
     */
    public function setItem(\MiningBundle\Entity\Item $item = null)
    {
        $this->item = $item;

        return $this;
    }

    /**
     * Get item
     *
     * @return \MiningBundle\Entity\Item
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set itemGroup
     *
     * @param \MiningBundle\Entity\ItemGroup $itemGroup
     *
     * @return LootLog
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
     * Set miningOp
     *
     * @param \MiningBundle\Entity\MiningOp $miningOp
     *
     * @return LootLog
     */
    public function setMiningOp(\MiningBundle\Entity\MiningOp $miningOp = null)
    {
        $this->miningOp = $miningOp;

        return $this;
    }

    /**
     * Get miningOp
     *
     * @return \MiningBundle\Entity\MiningOp
     */
    public function getMiningOp()
    {
        return $this->miningOp;
    }
}
