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
     * Get id
     *
     * @return int
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
}

