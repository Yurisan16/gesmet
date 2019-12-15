<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Area
 *
 * @ORM\Table(name="area")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AreaRepository")
 */
class Area
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
     * @ORM\Column(name="areaname", type="string", length=100, unique=true)
     */
    private $areaname;

    /**
     * @var string
     *
     * @ORM\Column(name="areaobserv", type="string", length=255, nullable=true)
     */
    private $areaobserv;

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
     * Set areaname
     *
     * @param string $areaname
     *
     * @return Area
     */
    public function setAreaname($areaname)
    {
        $this->areaname = $areaname;

        return $this;
    }

    /**
     * Get areaname
     *
     * @return string
     */
    public function getAreaname()
    {
        return $this->areaname;
    }

    /**
     * Set areaobserv
     *
     * @param string $areaobserv
     *
     * @return Area
     */
    public function setAreaobserv($areaobserv)
    {
        $this->areaobserv = $areaobserv;

        return $this;
    }

    /**
     * Get areaobserv
     *
     * @return string
     */
    public function getAreaobserv()
    {
        return $this->areaobserv;
    }
}
