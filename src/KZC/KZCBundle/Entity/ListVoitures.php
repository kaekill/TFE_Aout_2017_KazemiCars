<?php

namespace KZC\KZCBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ListVoitures
 *
 * @ORM\Table(name="list_voitures")
 * @ORM\Entity(repositoryClass="KZC\KZCBundle\Repository\ListVoituresRepository")
 */
class ListVoitures
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
     * @ORM\Column(name="Marque", type="string", length=255)
     */
    private $marque;

    /**
     * @var string
     *
     * @ORM\Column(name="Modele", type="string", length=255)
     */
    private $modele;

    /**
     * @var int
     *
     * @ORM\Column(name="Annee", type="integer")
     */
    private $annee;

    /**
     * @var string
     *
     * @ORM\Column(name="Carburant", type="string", length=255)
     */
    private $carburant;

    /**
     * @var int
     *
     * @ORM\Column(name="Kilometrages", type="integer")
     */
    private $kilometrages;


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
     * Set marque
     *
     * @param string $marque
     *
     * @return ListVoitures
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return string
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set modele
     *
     * @param string $modele
     *
     * @return ListVoitures
     */
    public function setModele($modele)
    {
        $this->modèle = $modele;

        return $this;
    }

    /**
     * Get modele
     *
     * @return string
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Set annee
     *
     * @param integer $annee
     *
     * @return ListVoitures
     */
    public function setAnnee($annee)
    {
        $this->année = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return int
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set carburant
     *
     * @param string $carburant
     *
     * @return ListVoitures
     */
    public function setCarburant($carburant)
    {
        $this->carburant = $carburant;

        return $this;
    }

    /**
     * Get carburant
     *
     * @return string
     */
    public function getCarburant()
    {
        return $this->carburant;
    }

    /**
     * Set kilométrages
     *
     * @param integer $kilometrages
     *
     * @return ListVoitures
     */
    public function setKilometrages($kilometrages)
    {
        $this->kilométrages = $kilometrages;

        return $this;
    }

    /**
     * Get kilometrages
     *
     * @return int
     */
    public function getKilometrages()
    {
        return $this->kilometrages;
    }
}

