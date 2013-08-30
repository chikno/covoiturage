<?php

namespace MyApp\CovoiturageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vehicule
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MyApp\CovoiturageBundle\Entity\VehiculeRepository")
 */
class Vehicule
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="marque", type="integer")
     */
    private $marque;

    /**
     * @var integer
     *
     * @ORM\Column(name="model", type="integer")
     */
    private $model;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbPlace", type="integer")
     */
    private $nbPlace;

    /**
     * @var integer
     *
     * @ORM\Column(name="couleur", type="integer")
     */
    private $couleur;

    /**
     * @var string
     *
     * @ORM\Column(name="confort", type="string", length=1)
     */
    private $confort;


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
     * Set marque
     *
     * @param integer $marque
     * @return Vehicule
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return integer 
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set model
     *
     * @param integer $model
     * @return Vehicule
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return integer 
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set nbPlace
     *
     * @param integer $nbPlace
     * @return Vehicule
     */
    public function setNbPlace($nbPlace)
    {
        $this->nbPlace = $nbPlace;

        return $this;
    }

    /**
     * Get nbPlace
     *
     * @return integer 
     */
    public function getNbPlace()
    {
        return $this->nbPlace;
    }

    /**
     * Set couleur
     *
     * @param integer $couleur
     * @return Vehicule
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get couleur
     *
     * @return integer 
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set confort
     *
     * @param string $confort
     * @return Vehicule
     */
    public function setConfort($confort)
    {
        $this->confort = $confort;

        return $this;
    }

    /**
     * Get confort
     *
     * @return string 
     */
    public function getConfort()
    {
        return $this->confort;
    }
}
