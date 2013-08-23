<?php

namespace MyApp\CovoiturageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Trajets
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MyApp\CovoiturageBundle\Entity\TrajetsRepository")
 */
class Trajets
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
     * @ORM\Column(name="villeDepart", type="integer")
     */
    private $villeDepart;

    /**
     * @var integer
     *
     * @ORM\Column(name="villeArrive", type="integer")
     */
    private $villeArrive;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDepart", type="date")
     */
    private $dateDepart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateArrive", type="date")
     */
    private $dateArrive;

    
     /**
     * @var \Boolean
     *
     * @ORM\Column(name="autoroute", type="boolean")
     */
    private $autoroute;
    
     /**
     * @var string
     *
     * @ORM\Column(name="bagage", type="string", length=1)
     *
     */
    private $bagage;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="participation", type="integer")
     */
    private $participation;
    
    /**
     *
     * @OneToMany(targetEntity="Utilisateur", mappedBy="trajet", cascade={"persist", "remove", "merge"})
     */
    private  $utilisateurs;
    
     /**
     *
     * @OneToMany(targetEntity="Ville", mappedBy="trajet", cascade={"persist", "remove", "merge"})
     */
    private  $villePassage;
    
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
     * Set villeDepart
     *
     * @param integer $villeDepart
     * @return Trajets
     */
    public function setVilleDepart($villeDepart)
    {
        $this->villeDepart = $villeDepart;

        return $this;
    }

    /**
     * Get villeDepart
     *
     * @return integer 
     */
    public function getVilleDepart()
    {
        return $this->villeDepart;
    }

    /**
     * Set villeArrive
     *
     * @param integer $villeArrive
     * @return Trajets
     */
    public function setVilleArrive($villeArrive)
    {
        $this->villeArrive = $villeArrive;

        return $this;
    }

    /**
     * Get villeArrive
     *
     * @return integer 
     */
    public function getVilleArrive()
    {
        return $this->villeArrive;
    }

    /**
     * Set dateDepart
     *
     * @param \DateTime $dateDepart
     * @return Trajets
     */
    public function setDateDepart($dateDepart)
    {
        $this->dateDepart = $dateDepart;

        return $this;
    }

    /**
     * Get dateDepart
     *
     * @return \DateTime 
     */
    public function getDateDepart()
    {
        return $this->dateDepart;
    }

    /**
     * Set dateArrive
     *
     * @param \DateTime $dateArrive
     * @return Trajets
     */
    public function setDateArrive($dateArrive)
    {
        $this->dateArrive = $dateArrive;

        return $this;
    }

    /**
     * Get dateArrive
     *
     * @return \DateTime 
     */
    public function getDateArrive()
    {
        return $this->dateArrive;
    }
}
