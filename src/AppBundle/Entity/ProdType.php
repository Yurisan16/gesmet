<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProdType
 *
 * @ORM\Table(name="prod_type")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProdTypeRepository")
 */
class ProdType
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
     * @ORM\Column(name="prodtypename", type="string", length=25)
     */
    private $prodtypename;


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
     * Set prodtypename
     *
     * @param string $prodtypename
     *
     * @return ProdType
     */
    public function setProdtypename($prodtypename)
    {
        $this->prodtypename = $prodtypename;

        return $this;
    }

    /**
     * Get prodtypename
     *
     * @return string
     */
    public function getProdtypename()
    {
        return $this->prodtypename;
    }
}

