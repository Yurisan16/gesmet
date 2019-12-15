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
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=150)
     */
    private $product;

    /**
     * @var int
     *
     * @ORM\Column(name="amount", type="integer")
     */
    private $amount;

     /**
     * @var ProdType
     * 
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\ProdType")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="productname", referencedColumnName="id")
     * })
     */
    private $productname;

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
     * Set productname
     *
     * @param \AppBundle\Entity\ProdType $productname
     *
     * @return Product
     */
    public function setProductname(\AppBundle\Entity\ProdType $productname = null)
    {
        $this->productname = $productname;

        return $this;
    }

    /**
     * Get productname
     *
     * @return \AppBundle\Entity\ProdType
     */
    public function getProductname()
    {
        return $this->productname;
    }
}