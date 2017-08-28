<?php
// src/AppBundle/Entity/User.php

namespace KZC\UsersBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class Users extends BaseUser
{
    const ROLE_SUPER_ADMIN = 'ROLE_SUPER_ADMIN';
    const ROLE_ADMIN = 'ROLE_ADMIN';
    const ROLE_USER = 'ROLE_USER';

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="FirstName",type="string", length=255)
     * @Assert\NotBlank(message="Veuillez rentrer un prénom", groups={"Registration", "Profil"})
     */
    protected $FirstName;

    /**
     * @ORM\Column(name="LastName",type="string", length=255)
     * @Assert\NotBlank(message="Veuillez rentrer un nom", groups={"Registration", "Profil"})
     *  @Assert\Length(
     *     min=3,
     *     max=255,
     *     minMessage="The firstname is too short.",
     *     maxMessage="The firstname is too long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $LastName;

    protected $plainPassword;


    /**
     * @ORM\Column(name="Adress",type="string", length=255)
     * @Assert\NotBlank(message="Veuillez rentrer une adresse", groups={"Registration", "Profil"})
     */


    protected $Adress;

    /**
     * @ORM\Column(name="Ville",type="string", length=255)
     * @Assert\NotBlank(message="Veuillez rentrer une ville", groups={"Registration", "Profil"})
     */

    protected $Ville;

    /**
     * @ORM\Column(name="Number",type="integer", length=255)
     * @Assert\NotBlank(message="Veuillez rentrer un numéro", groups={"Registration", "Profil"})
     */
    protected $Number;

    /**
     * @ORM\Column(name="CP",type="integer", length=255)
     * @Assert\NotBlank(message="Veuillez rentrer un code postal", groups={"Registration", "Profil"})
     */
    protected $CP;

    /**
     * @ORM\Column(name="Phone",type="string", length=15)
     * @Assert\NotBlank(message="Veuillez rentrer un numéro de téléphone", groups={"Registration", "Profil"})
     */
    protected $Phone;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Users
     */
    public function setFirstName($firstName)
    {
        $this->FirstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Users
     */
    public function setLastName($lastName)
    {
        $this->LastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->LastName;
    }

    /**
     * @return mixed
     */
    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    /**
     * @param mixed $plainPassword
     */
    public function setPlainPassword($plainPassword)
    {
        $this->plainPassword = $plainPassword;
    }



    /**
     * Set adress
     *
     * @param string $adress
     *
     * @return Users
     */
    public function setAdress($adress)
    {
        $this->Adress = $adress;

        return $this;
    }

    /**
     * Get adress
     *
     * @return string
     */
    public function getAdress()
    {
        return $this->Adress;
    }

    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->Ville;
    }

    /**
     * @param mixed $Ville
     */
    public function setVille($Ville)
    {
        $this->Ville = $Ville;
    }




    /**
     * Set number
     *
     * @param integer $number
     *
     * @return Users
     */
    public function setNumber($number)
    {
        $this->Number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return integer
     */
    public function getNumber()
    {
        return $this->Number;
    }

    /**
     * Set cP
     *
     * @param integer $cP
     *
     * @return Users
     */
    public function setCP($cP)
    {
        $this->CP = $cP;

        return $this;
    }

    /**
     * Get cP
     *
     * @return integer
     */
    public function getCP()
    {
        return $this->CP;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Users
     */
    public function setPhone($phone)
    {
        $this->Phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->Phone;
    }
}
