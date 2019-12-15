<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Brand
 *
 * @ORM\Table(name="brand")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BrandRepository")
 */
class Brand
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
     * @ORM\Column(name="brandname", type="string", length=50)
     */
    private $brandname;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=50, nullable=true)
     */
    private $model;


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
     * Set brandname
     *
     * @param string $brandname
     *
     * @return Brand
     */
    public function setBrandname($brandname)
    {
        $this->brandname = $brandname;

        return $this;
    }

    /**
     * Get brandname
     *
     * @return string
     */
    public function getBrandname()
    {
        return $this->brandname;
    }

    /**
     * Set model
     *
     * @param string $model
     *
     * @return Brand
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
}
