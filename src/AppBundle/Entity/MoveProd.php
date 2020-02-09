<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MoveProd
 *
 * @ORM\Table(name="move_prod")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MoveProdRepository")
 */
class MoveProd
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="typemove", type="string", length=25)
     */
    private $typemove;

    /**
     * @var string
     *
     * @ORM\Column(name="reason", type="string", length=150)
     */
    private $reason;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="movedate", type="date")
     */
    private $movedate;

    /**
     * @var Area
     * 
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Area")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="destination", referencedColumnName="id")
     * })
     */
    private $destination;

    /**
     * @var int
     *
     * @ORM\Column(name="amount", type="integer")
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=250)
     */
    private $description;

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
     * Set typemove
     *
     * @param string $typemove
     *
     * @return MoveProd
     */
    public function setTypemove($typemove)
    {
        $this->typemove = $typemove;

        return $this;
    }

    /**
     * Get typemove
     *
     * @return string
     */
    public function getTypemove()
    {
        return $this->typemove;
    }

    /**
     * Set reason
     *
     * @param string $reason
     *
     * @return MoveProd
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * Get reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Set movedate
     *
     * @param \DateTime $movedate
     *
     * @return MoveProd
     */
    public function setMovedate($movedate)
    {
        $this->movedate = $movedate;

        return $this;
    }

    /**
     * Get movedate
     *
     * @return \DateTime
     */
    public function getMovedate()
    {
        return $this->movedate;
    }

    /**
     * Set amount
     *
     * @param integer $amount
     *
     * @return MoveProd
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return integer
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return MoveProd
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
     * Set destination
     *
     * @param \AppBundle\Entity\Area $destination
     *
     * @return MoveProd
     */
    public function setDestination(\AppBundle\Entity\Area $destination = null)
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * Get destination
     *
     * @return \AppBundle\Entity\Area
     */
    public function getDestination()
    {
        return $this->destination;
    }
}
