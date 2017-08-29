<?php

namespace KZC\KZCBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Voitures
 *
 * @ORM\Table(name="voitures")
 * @ORM\Entity(repositoryClass="KZC\KZCBundle\Repository\VoituresRepository")
 */
class Voitures
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
     *
     * @ORM\ManyToOne(targetEntity="KZC\KZCBundle\Entity\Marques", cascade={"persist"})
     *
     *
     */

    private $marque;



    /**
     *
     * @ORM\ManyToOne(targetEntity="KZC\KZCBundle\Entity\Carburant", cascade={"persist"})
     *
     */

    private $carburant;



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
     * @return mixed
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param mixed $marque
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }



    /**
     * @return mixed
     */
    public function getCarburant()
    {
        return $this->carburant;
    }

    /**
     * @param mixed $carburant
     */
    public function setCarburant($carburant)
    {
        $this->carburant = $carburant;
    }


}

