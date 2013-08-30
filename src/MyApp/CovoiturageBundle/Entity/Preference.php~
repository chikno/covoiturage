<?php

namespace MyApp\CovoiturageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Preference
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MyApp\CovoiturageBundle\Entity\PreferenceRepository")
 */
class Preference
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
     * @ORM\Column(name="idUtilisateur", type="integer")
     */
    private $idUtilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="musique", type="string", length=1)
     */
    private $musique;

    /**
     * @var string
     *
     * @ORM\Column(name="fumeur", type="string", length=1)
     */
    private $fumeur;

    /**
     * @var string
     *
     * @ORM\Column(name="animaux", type="string", length=1)
     */
    private $animaux;

    /**
     * @var string
     *
     * @ORM\Column(name="discussion", type="string", length=1)
     */
    private $discussion;

    /**
     * @var string
     *
     * @ORM\Column(name="detour", type="string", length=1)
     */
    private $detour;

    /**
     * @var boolean
     *
     * @ORM\Column(name="contactTel", type="boolean")
     */
    private $contactTel;

    /**
     * @var string
     *
     * @ORM\Column(name="typeVoyageur", type="string", length=2)
     */
    private $typeVoyageur;


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
     * Set idUtilisateur
     *
     * @param integer $idUtilisateur
     * @return Preference
     */
    public function setIdUtilisateur($idUtilisateur)
    {
        $this->idUtilisateur = $idUtilisateur;

        return $this;
    }

    /**
     * Get idUtilisateur
     *
     * @return integer 
     */
    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }

    /**
     * Set musique
     *
     * @param string $musique
     * @return Preference
     */
    public function setMusique($musique)
    {
        $this->musique = $musique;

        return $this;
    }

    /**
     * Get musique
     *
     * @return string 
     */
    public function getMusique()
    {
        return $this->musique;
    }

    /**
     * Set fumeur
     *
     * @param string $fumeur
     * @return Preference
     */
    public function setFumeur($fumeur)
    {
        $this->fumeur = $fumeur;

        return $this;
    }

    /**
     * Get fumeur
     *
     * @return string 
     */
    public function getFumeur()
    {
        return $this->fumeur;
    }

    /**
     * Set animaux
     *
     * @param string $animaux
     * @return Preference
     */
    public function setAnimaux($animaux)
    {
        $this->animaux = $animaux;

        return $this;
    }

    /**
     * Get animaux
     *
     * @return string 
     */
    public function getAnimaux()
    {
        return $this->animaux;
    }

    /**
     * Set discussion
     *
     * @param string $discussion
     * @return Preference
     */
    public function setDiscussion($discussion)
    {
        $this->discussion = $discussion;

        return $this;
    }

    /**
     * Get discussion
     *
     * @return string 
     */
    public function getDiscussion()
    {
        return $this->discussion;
    }

    /**
     * Set detour
     *
     * @param string $detour
     * @return Preference
     */
    public function setDetour($detour)
    {
        $this->detour = $detour;

        return $this;
    }

    /**
     * Get detour
     *
     * @return string 
     */
    public function getDetour()
    {
        return $this->detour;
    }

    /**
     * Set contactTel
     *
     * @param boolean $contactTel
     * @return Preference
     */
    public function setContactTel($contactTel)
    {
        $this->contactTel = $contactTel;

        return $this;
    }

    /**
     * Get contactTel
     *
     * @return boolean 
     */
    public function getContactTel()
    {
        return $this->contactTel;
    }

    /**
     * Set typeVoyageur
     *
     * @param string $typeVoyageur
     * @return Preference
     */
    public function setTypeVoyageur($typeVoyageur)
    {
        $this->typeVoyageur = $typeVoyageur;

        return $this;
    }

    /**
     * Get typeVoyageur
     *
     * @return string 
     */
    public function getTypeVoyageur()
    {
        return $this->typeVoyageur;
    }
}
