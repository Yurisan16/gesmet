<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Loan
 *
 * @ORM\Table(name="loan")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LoanRepository")
 */
class Loan
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
     * @ORM\JoinColumn(name="id_product", referencedColumnName="id")
     * })
     */
    private $product;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="loandate", type="date")
     */
    private $loandate;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=8)
     */
    private $state;

    /**
     * @var string
     *
     * @ORM\Column(name="responsible", type="string", length=150)
     */
    private $responsible;

    /**
     * @var string
     *
     * @ORM\Column(name="reason", type="string", length=255)
     */
    private $reason;

    /**
     * @var Technician
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Technician")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="id_technician", referencedColumnName="id")
     * })
     */
    private $technician;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="returndate", type="date")
     */
    private $returndate;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set product
     *
     * @param \AppBundle\Entity\Product $product
     *
     * @return Loan
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
     * Set loandate
     *
     * @param \DateTime $loandate
     *
     * @return Loan
     */
    public function setLoandate($loandate)
    {
        $this->loandate = $loandate;

        return $this;
    }

    /**
     * Get loandate
     *
     * @return \DateTime
     */
    public function getLoandate()
    {
        return $this->loandate;
    }

    /**
     * Set state
     *
     * @param string $state
     *
     * @return Loan
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set responsible
     *
     * @param string $responsible
     *
     * @return Loan
     */
    public function setResponsible($responsible)
    {
        $this->responsible = $responsible;

        return $this;
    }

    /**
     * Get responsible
     *
     * @return string
     */
    public function getResponsible()
    {
        return $this->responsible;
    }

    /**
     * Set reason
     *
     * @param string $reason
     *
     * @return Loan
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
     * Set technician
     *
     * @param \AppBundle\Entity\Technician $technician
     *
     * @return Loan
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

     /**
     * Set returndate
     *
     * @param \DateTime $returndate
     *
     * @return Loan
     */
    public function setReturndate($returndate)
    {
        $this->returndate = $returndate;

        return $this;
    }

    /**
     * Get returndate
     *
     * @return \DateTime
     */
    public function getReturndate()
    {
        return $this->returndate;
    }
}

