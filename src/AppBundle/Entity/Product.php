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
     * @ORM\Column(name="prodname", type="string", length=25)
     */
    private $prodname;

    /**
     * @var string
     * 
     * @ORM\Column(name="brand", type="string", length=50)
     */
    private $brand;

    /**
     * @var string
     * 
     * @ORM\Column(name="model", type="string", length=50)
     */
    private $model;

    /**
     * @var boolean
     * 
     * @ORM\Column(name="mt", type="boolean")
     */
    private $mt;

    /**
     * @var string
     * 
     * @ORM\Column(name="description", type="string", length=255)
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
     * Set prodname
     *
     * @param string $prodname
     *
     * @return Product
     */
    public function setProdname($prodname)
    {
        $this->prodname = $prodname;

        return $this;
    }

    /**
     * Get prodname
     *
     * @return string
     */
    public function getProdname()
    {
        return $this->prodname;
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
     * Set brand
     *
     * @param string $brand
     *
     * @return Product
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set model
     *
     * @param string $model
     *
     * @return Product
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set mt
     *
     * @param boolean $mt
     *
     * @return Product
     */
    public function setMt($mt)
    {
        $this->mt = $mt;

        return $this;
    }

    /**
     * Get mt
     *
     * @return boolean
     */
    public function getMt()
    {
        return $this->mt;
    }
}
