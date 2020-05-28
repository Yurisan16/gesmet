<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LendMT
 *
 * @ORM\Table(name="lend_m_t")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LendMTRepository")
 */
class LendMT
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
     * @var Product
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Product")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="product", referencedColumnName="id")
     * })
     */
    private $product;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lenddate", type="date")
     */
    private $lenddate;

    /**
     * @var string
     *
     * @ORM\Column(name="received", type="string", length=255)
     */
    private $received;

    /**
     * @var string
     *
     * @ORM\Column(name="reason", type="string", length=100)
     */
    private $reason;

    /**
     * @var Technician
     * 
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Technician")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="technician", referencedColumnName="id")
     * })
     */
    private $technician;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=13)
     */
    private $status;

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
     * Set lenddate
     *
     * @param \DateTime $lenddate
     *
     * @return LendMT
     */
    public function setLenddate($lenddate)
    {
        $this->lenddate = $lenddate;

        return $this;
    }

    /**
     * Get lenddate
     *
     * @return \DateTime
     */
    public function getLenddate()
    {
        return $this->lenddate;
    }

    /**
     * Set received
     *
     * @param string $received
     *
     * @return LendMT
     */
    public function setReceived($received)
    {
        $this->received = $received;

        return $this;
    }

    /**
     * Get received
     *
     * @return string
     */
    public function getReceived()
    {
        return $this->received;
    }

    /**
     * Set reason
     *
     * @param string $reason
     *
     * @return LendMT
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
     * Set status
     *
     * @param string $status
     *
     * @return LendMT
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set product
     *
     * @param \AppBundle\Entity\Product $product
     *
     * @return LendMT
     */
    public function setProduct(\AppBundle\Entity\Product $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \AppBundle\Entity\Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set technician
     *
     * @param \AppBundle\Entity\Technician $technician
     *
     * @return LendMT
     */
    public function setTechnician(\AppBundle\Entity\Technician $technician = null)
    {
        $this->technician = $technician;

        return $this;
    }

    /**
     * Get technician
     *
     * @return \AppBundle\Entity\Technician
     */
    public function getTechnician()
    {
        return $this->technician;
    }
}