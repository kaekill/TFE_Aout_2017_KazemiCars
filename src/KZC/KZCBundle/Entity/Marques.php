<?php

namespace KZC\KZCBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Marques
 *
 * @ORM\Table(name="marques")
 * @ORM\Entity(repositoryClass="KZC\KZCBundle\Repository\MarquesRepository")
 */
class Marques
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
     * @ORM\Column(name="Nom", type="string", length=255)
     */
    private $nom;

    /**
     *
     * @ORM\OneToOne(targetEntity="KZC\KZCBundle\Entity\Modele", cascade={"persist"})
     * @ORM\Column(name="modele", type="string")
     *
     */

    private $modele;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Marques
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @return mixed
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * @param mixed $modele
     */
    public function setModele($modele)
    {
        $this->modele = $modele;
    }


}

