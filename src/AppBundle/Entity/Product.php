<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProductRepository")
 */
class Product
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
     * @var ProdType
     * 
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\ProdType")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="prodtype", referencedColumnName="id")
     * })
     */
    private $prodtype;

    /**
     * @var string
     *
     * @ORM\Column(name="product", type="string", length=50)
     */
    private $product;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=150)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="amount", type="integer")
     */
    private $amount;


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
     * Set product
     *
     * @param string $product
     *
     * @return Product
     */
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return string
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Product
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
     * Set amount
     *
     * @param integer $amount
     *
     * @return Product
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
     * Set prodtype
     *
     * @param \AppBundle\Entity\ProdType $prodtype
     *
     * @return Product
     */
    public function setProdtype(\AppBundle\Entity\ProdType $prodtype = null)
    {
        $this->prodtype = $prodtype;

        return $this;
    }

    /**
     * Get prodtype
     *
     * @return \AppBundle\Entity\ProdType
     */
    public function getProdtype()
    {
        return $this->prodtype;
    }
}