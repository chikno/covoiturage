<?php

namespace MyApp\CovoiturageBundle\Recherche;

use Symfony\Component\HttpKernel\Tests\Controller;
/**
 * Service de recherche trajet.
 *
 */

class RechercheTrajet {

//    protected $depart;
//    protected $destination;
//    protected $date;

    public function __construct() {
//        $this->depart = $depart;
//        $this->destination = $destination;
//        $this->date = $date;
    }

    public function rechercherTrajet($depart, $destination, $date) {
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('MyAppCovoiturageBundle:Trajet');
        
        $listeTrajet = $repository->findBy(array(
            'villeDepart' =>$depart,  
            'villeArrive' =>$destination,
            'dateDepart' =>$date)
                );
        
        return $listeTrajet;        
    }
}
?>