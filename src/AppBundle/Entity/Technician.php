<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Technician
 *
 * @ORM\Table(name="technician")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TechnicianRepository")
 */
class Technician
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
     * @ORM\Column(name="technicianname", type="string", length=25)
     */
    private $technicianname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=25)
     */
    private $lastname;

    /**
     * @var int
     *
     * @ORM\Column(name="ci", type="integer", unique=true)
     */
    private $ci;

    /**
     * @var int
     *
     * @ORM\Column(name="cellphone", type="integer", unique=true)
     */
    private $cellphone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, unique=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="position", type="string", length=255)
     */
    private $position;


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
     * Set technicianname
     *
     * @param string $technicianname
     *
     * @return Technician
     */
    public function setTechnicianname($technicianname)
    {
        $this->technicianname = $technicianname;

        return $this;
    }

    /**
     * Get technicianname
     *
     * @return string
     */
    public function getTechnicianname()
    {
        return $this->technicianname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return Technician
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set ci
     *
     * @param integer $ci
     *
     * @return Technician
     */
    public function setCi($ci)
    {
        $this->ci = $ci;

        return $this;
    }

    /**
     * Get ci
     *
     * @return int
     */
    public function getCi()
    {
        return $this->ci;
    }

    /**
     * Set cellphone
     *
     * @param integer $cellphone
     *
     * @return Technician
     */
    public function setCellphone($cellphone)
    {
        $this->cellphone = $cellphone;

        return $this;
    }

    /**
     * Get cellphone
     *
     * @return int
     */
    public function getCellphone()
    {
        return $this->cellphone;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Technician
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Technician
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set position
     *
     * @param string $position
     *
     * @return Technician
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }
}